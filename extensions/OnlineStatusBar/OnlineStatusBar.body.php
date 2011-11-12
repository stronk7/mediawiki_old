<?
if ( !defined( 'MEDIAWIKI' ) ) {
	echo "This is a part of mediawiki and can't be started separately";
	die();
}

/**
 * Main file of Online status bar extension.
 *
 * @file
 * @ingroup Extensions
 * @author Petr Bena <benapetr@gmail.com>
 * @author of magic word Alexandre Emsenhuber
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 * @link http://www.mediawiki.org/wiki/Extension:OnlineStatusBar Documentation
 */

class OnlineStatusBar {

	public static function getStatusBarHtml( $text ) {
		return <<<HTML
<div class="onlinestatusbarbody metadata onlinestatusbartop" id="status-top">
<div class="onlinestatusbaricon">
$text</div></div>
HTML;
	}

	/**
	 * Returns image element
	 *
	 * @param $mode String
	 * @return string
	 */
	public static function GetImageHtml( $mode ) {
		global $wgExtensionAssetsPath, $wgOnlineStatusBarIcon;
		$icon = "$wgExtensionAssetsPath/OnlineStatusBar/{$wgOnlineStatusBarIcon[$mode]}";
		return Html::element( 'img', array( 'src' => $icon ) );
	}


	/**
	 * Returns the status and User element
	 *
	 * @param Title $title
	 * @return array|bool Array containing the status and User object
         */
	public static function getAnonFromTitle( Title $title ) {
		global $wgOnlineStatusBarTrackIpUsers;
		// if user is anon and we don't track them stop
		if ( $wgOnlineStatusBarTrackIpUsers == false ) {
			return false;
		}
	
		// checks ns
		if ( $title->getNamespace() != NS_USER && $title->getNamespace() != NS_USER_TALK ) {
			return false;
		}

		// we need to create temporary user object
		$user = User::newFromId( 0 );
		$user->setName( $title->getBaseText() );

		// Check if something wrong didn't happen
		if ( !($user instanceof User) ) {
			return false;
		}

		$status = self::getStatus( $user, true );

		return array( $status, $user );
	}


	/**
	 * Returns the status and User element
	 *
	 * @param Title $title
	 * @return array|bool Array containing the status and User object
	 */
	public static function getUserInfoFromTitle( Title $title ) {
		if ( $title->getNamespace() != NS_USER && $title->getNamespace() != NS_USER_TALK ) {
			return false;
		}

		$user = User::newFromName( $title->getBaseText() );
		// Invalid user
		if ( !($user instanceof User) ) {
			return false;
		}
		if ( !self::isValid( $user ) ) {
			return false;
		}

		$status = self::getStatus( $user, true );

		return array( $status, $user );
	}

	/**
	 * @param $user User
	 * @return String
	 */
	public static function getStatus( $user, $update = false ) {
		global $wgOnlineStatusBarDefaultOffline, $wgOnlineStatusBarDefaultOnline;
		// remove old entries
		if ( $update )
		{
			self::deleteOld();
		}

		// instead of delete every time just select the records which are not that old
		$t_time = self::getTimeoutDate();
		$dbr = wfGetDB( DB_SLAVE );
		$result = $dbr->selectField( 'online_status', 'username', array( 'username' => $user->getName(),
			"timestamp > " . $dbr->addQuotes( $dbr->timestamp( $t_time ) ) ),
			__METHOD__, array( 'LIMIT 1', 'ORDER BY timestamp DESC' ) );

		if ( $result === false ) {
			$status = $wgOnlineStatusBarDefaultOffline;
		} else {
			// let's check if it isn't anon
			if ( $user->isLoggedIn() ) {
				$status = $user->getOption( 'OnlineStatusBar_status', $wgOnlineStatusBarDefaultOnline );
			} else {
				$status = $wgOnlineStatusBarDefaultOnline;
			}
		}

		if ( $status == 'hidden' ) {
			$status = $wgOnlineStatusBarDefaultOffline;
		}

		return $status;
	}

	/**
	 * Purge page
	 * @return bool
	 *
	 */
	public static function purge( $user_type ) {
		if (  $user_type instanceof User  ) {
			$user = $user_type;
		} else if ( is_string( $user_type ) ){
			$user = User::newFromName( $user_type );
		} else {
			return false;
		}

		// check if something weird didn't happen
		if ( $user instanceof User ) {
			// purge both pages now
			if ( $user->getOption('OnlineStatusBar_active', false) ) {
				if ( $user->getOption('OnlineStatusBar_autoupdate', false) == true ) {
					WikiPage::factory( $user->getUserPage() )->doPurge();
					WikiPage::factory( $user->getTalkPage() )->doPurge();
				}
			}
		}
		return true;
	}

	/**
	 * Insert to the database
	 * @return bool
	 */
	public static function updateDb() {
		global $wgUser;
		// Skip users we don't track
		if ( self::isValid ( $wgUser ) != true ) {
			return false;
		}
		// If we track them, let's insert it to the table 
		$dbw = wfGetDB( DB_MASTER );
		$row = array(
			'username' => $wgUser->getName(),
			'timestamp' => $dbw->timestamp(),
		);
		$dbw->insert( 'online_status', $row, __METHOD__, 'DELAYED' );
		return false;
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
		if ( OnlineStatusBar::getStatus( $wgUser ) == $wgOnlineStatusBarDefaultOffline ) {
			OnlineStatusBar::updateDb();
			return true;
		}

		$dbw = wfGetDB( DB_MASTER );
		$dbw->update(
			'online_status',
			array( 'timestamp' => $dbw->timestamp() ),
			array( 'username' => $wgUser->getName() ),
			__METHOD__
		);

		return true;
	}

	/**
	 * @return timestamp
	 */
	private static function getTimeoutDate() {
		global $wgOnlineStatusBar_LogoutTime;
		return wfTimestamp( TS_UNIX ) - $wgOnlineStatusBar_LogoutTime;
	}

	/**
	 * Delete old records from the table, this function is called frequently too keep it as small as possible
	 * @return int
	 */
	public static function deleteOld() {
		$dbw = wfGetDB( DB_MASTER );
		// calculate time and convert it back to mediawiki format
		$time = self::getTimeoutDate();
		$dbw->delete( 'online_status', array( "timestamp < " . $dbw->addQuotes( $dbw->timestamp( $time ) ) ), __METHOD__ );
		return 0;
	}


	/**
	 * Checks to see if the user can be tracked
	 *
	 * @param User $user
	 * @return bool
	 */
	public static function isValid( User $user ) {
		global $wgOnlineStatusBarTrackIpUsers, $wgOnlineStatusBarDefaultEnabled;

		// checks if anon
		if ( $user->isAnon() ) {
			return $wgOnlineStatusBarTrackIpUsers;
		}

		// do we track them
		return $user->getOption( "OnlineStatusBar_active", $wgOnlineStatusBarDefaultEnabled );
	}

	/**
	 * Delete user who logged out
	 * @param $userName string
	 * @return bool
	 */
	static function deleteStatus( $userName ) {
		$dbw = wfGetDB( DB_MASTER );
		$dbw->delete( 'online_status', array( 'username' => $userName ), __METHOD__ ); // delete user
		return true;
	}
}
