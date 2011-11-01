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
		global $wgExtensionAssetsPath, $wgOnlineStatusBarIcon, $wgOnlineStatusBarModes;
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
		if ( $wgOnlineStatusBarTrackIpUsers == false ) {
			return false;
		}
	
		if ( $title->getNamespace() != NS_USER && $title->getNamespace() != NS_USER_TALK ) {
			return false;
		}

		$user = User::newFromId( 0 );
		$user->setName( $title->getBaseText() );

		// Check if something wrong didn't happen
		if ( $user === false ) {
			return false;
		}

		$status = self::getStatus( $user );

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
		if ( $user === false ) {
			return false;
		}
		if ( !self::isValid( $user ) ) {
			return false;
		}

		$status = self::getStatus( $user );

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
			self::DeleteOld();
		}

		$dbr = wfGetDB( DB_SLAVE );
		$result = $dbr->selectField( 'online_status', 'username', array( 'username' => $user->getName() ),
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
			$status = 'offline';
		}

		return $status;
	}

	/**
	 * Insert to the database
	 * @return bool
	 */
	public static function UpdateDb() {
		global $wgUser, $wgOnlineStatusBarDefaultOnline;
		// Skip users we don't track
		if ( self::IsValid ( $wgUser ) != true ) {
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
	 * @return bool
	 */
	public static function UpdateStatus() {
		global $wgUser, $wgOnlineStatusBarDefaultOffline;
		if ( OnlineStatusBar::GetStatus( $wgUser, true ) == $wgOnlineStatusBarDefaultOffline ) {
			OnlineStatusBar::UpdateDb();
			return true;
		}

		$dbw = wfGetDB( DB_MASTER );
		$dbw->update(
			'online_status',
			array( 'timestamp' => $dbw->timestamp() ),
			array( 'username' => $wgUser->getName() ),
			__METHOD__
		);

		return false;
	}

	/**
	 * @return int
	 */
	public static function DeleteOld() {
		global $wgOnlineStatusBar_LogoutTime;
		$dbw = wfGetDB( DB_MASTER );
		// calculate time and convert it back to mediawiki format
		$time = wfTimestamp( TS_UNIX ) - $wgOnlineStatusBar_LogoutTime;
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
	static function DeleteStatus( $userName ) {
		$dbw = wfGetDB( DB_MASTER );
		$dbw->delete( 'online_status', array( 'username' => $userName ), __METHOD__ ); // delete user
		return true;
	}
}
