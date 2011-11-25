<?
if ( !defined( 'MEDIAWIKI' ) ) {
		echo "This is a part of mediawiki and can't be started separately";
		die();
}

/**
 * File which contains status check for Online status bar extension.
 *
 * @file
 * @ingroup Extensions
 * @author Petr Bena <benapetr@gmail.com>
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 * @link http://www.mediawiki.org/wiki/Extension:OnlineStatusBar Documentation
 */

class OnlineStatusBar_StatusCheck {
	/**
	 * Return cache key
	 * @param $user String
	 * @param $type String
	 */
	private static function getCacheKey( $user, $type ) {
		// get a key for cache
		return wfMemcKey( 'onlinestatusbar_cache', $type, $user );
	}

	/**
	 * Create a cache
	 * @param $user
	 * @param $values
	 * @return true
	 */
	public static function setCache( $user, $values, $type ) {
		global $wgOnlineStatusBarWriteTime, $wgMemc;
		// get a key
		$cache_key = self::getCacheKey( $user, $type );
		$wgMemc->set( $cache_key, $values, $wgOnlineStatusBarWriteTime );
		return true;
	}

	/**
	 * Return cache value
	 */
	public static function getCache( $user, $type ) {
		global $wgMemc;
		// get a key
		$cache_key = self::getCacheKey( $user, $type );
		// get a value
		return $wgMemc->get( $cache_key );
	}
	

	/**
	 * @param $user User
	 * @return String
	 */
	public static function getStatus( $user, $delayed_check = false ) {
		global $wgOnlineStatusBarDefaultOffline, $wgOnlineStatusBarDefaultOnline;

		// instead of delete every time just select the records which are not that old
		if ( !$delayed_check ) {
			$t_time = OnlineStatusBar::getTimeoutDate();
			// first try to use cache
			$result = self::getCache( $user->getName(), "n" );
			
			if ( $result == '' ) {
				$dbr = wfGetDB( DB_SLAVE );
				$result = $dbr->selectField( 'online_status', 'timestamp', array( 'username' => $user->getName(),
					"timestamp > " . $dbr->addQuotes( $dbr->timestamp( $t_time ) ) ),
					__METHOD__, array( 'LIMIT 1', 'ORDER BY timestamp DESC' ) );
				// cache it
				self::setCache( $user->getName(), $result, "n" );
			}
		}
		else {
			$result = self::getCache( $user->getName(), "d" );

			if ( $result == '' ) {
				$dbr = wfGetDB( DB_SLAVE );
				$result = $dbr->selectField( 'online_status', 'timestamp', array( 'username' => $user->getName() ),
					__METHOD__, array( 'LIMIT 1', 'ORDER BY timestamp DESC' ) );
					$w_time = OnlineStatusBar::getTimeoutDate( true );
				// cache it
				self::setCache( $user->getName(), $result, "d" );
			}
		}

		if ( $result === false ) {
			$status = $wgOnlineStatusBarDefaultOffline;
		} else {
			// let's check if it isn't anon
			if ( $user->isLoggedIn() ) {
				$status = $user->getOption( 'OnlineStatusBar_status', $wgOnlineStatusBarDefaultOnline );
				if ( $delayed_check ) {
					if ( $result < wfTimestamp( TS_MW, $w_time ) ) {
						$status = 'write';
					}
				}
			} else {
				$status = $wgOnlineStatusBarDefaultOnline;
			}
		}

		if ( $status == 'hidden' && !($delayed_check) ) {
			$status = $wgOnlineStatusBarDefaultOffline;
		}

		return $status;
	}

	/**
	 * Insert to the database
	 * @return bool
	 */
	public static function updateDb() {
		global $wgUser;
		// Skip users we don't track
		if ( OnlineStatusBar::isValid ( $wgUser ) != true ) {
			return false;
		}
		// If we track them, let's insert it to the table
		$dbw = wfGetDB( DB_MASTER );
		$row = array(
			'username' => $wgUser->getName(),
			'timestamp' => $dbw->timestamp(),
		);
		$dbw->insert( 'online_status', $row, __METHOD__ );
		return false;
	}

	 /**
	  * Delete user who logged out
	  * @param $userName string
	  * @return bool
	  */
	static function deleteStatus( $userName ) {
		$dbw = wfGetDB( DB_MASTER );
		$dbw->delete( 'online_status', array( 'username' => $userName ), __METHOD__ ); // delete user
		// remove from cache
		self::setCache( $userName, '', 'd' );
		self::setCache( $userName, '', 'n' );
		return true;
	}

	 /**
	  * Update status of user
	  * @return bool
	  */
	public static function updateStatus() {
		global $wgUser, $wgOnlineStatusBarDefaultOffline, $wgOnlineStatusBarTrackIpUsers, $wgOnlineStatusBarDefaultEnabled;
		// if anon users are not tracked and user is anon leave it
		if ( !$wgOnlineStatusBarTrackIpUsers ) {
			if ( !$wgUser->isLoggedIn() ) {
				return false;
			}
		}
		// if user doesn't want to be tracked leave it as well for privacy reasons
		if ( $wgUser->isLoggedIn() && !$wgUser->getOption ( "OnlineStatusBar_active", $wgOnlineStatusBarDefaultEnabled ) ) {
			return false;
		}
		$user_status = self::getStatus( $wgUser, true );
		if ( $user_status == $wgOnlineStatusBarDefaultOffline ) {
			self::updateDb();
			return true;
		}

		if ( $user_status == 'write' ) {
			$dbw = wfGetDB( DB_MASTER );
			$dbw->update(
				'online_status',
				array( 'timestamp' => $dbw->timestamp() ),
				array( 'username' => $wgUser->getName() ),
				__METHOD__
			);
			self::deleteOld();
		}

		return true;
	}

	/**
	 * Delete old records from the table, this function is called frequently too keep it as small as possible
	 * @return int
	 */
	public static function deleteOld() {
		global $wgOnlineStatusBarAutoDelete;
		if ( !$wgOnlineStatusBarAutoDelete ) {
			return 0;
		}
		$dbw = wfGetDB( DB_MASTER );
		$t_time = OnlineStatusBar::getTimeoutDate();
		$result = $dbw->selectField( 'online_status', 'timestamp', array( "timestamp < " . $dbw->addQuotes( $dbw->timestamp( $t_time ) ) ),
			__METHOD__, array( 'LIMIT 1' ) );
		if ( $result === false ) {
			// no need for delete
			return 0;
		}

		// calculate time and convert it back to mediawiki format
		$time = OnlineStatusBar::getTimeoutDate();
		$dbw->delete( 'online_status', array( "timestamp < " . $dbw->addQuotes( $dbw->timestamp( $time ) ) ), __METHOD__ );
		return 0;
	}
}
