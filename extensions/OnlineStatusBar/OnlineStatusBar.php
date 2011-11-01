<?php
/**
 * Insert a special box on user page showing their status.
 *
 * @file
 * @ingroup Extensions
 * @author Petr Bena <benapetr@gmail.com>
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 * @link http://www.mediawiki.org/wiki/Extension:OnlineStatusBar Documentation
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	echo "This is a part of mediawiki and can't be started separately";
	die();
}

$wgExtensionCredits[version_compare( $wgVersion, '1.17', '>=' ) ? 'userpage tools' : 'other'][] = array(
	'path' => __FILE__,
	'name' => 'Online status bar',
	'version' => '1.0.1',
	'author' => array( 'Petr Bena' ),
	'descriptionmsg' => 'onlinestatusbar-desc',
	'url' => 'http://www.mediawiki.org/wiki/Extension:OnlineStatusBar',
);

$dir = dirname( __FILE__ );
$wgExtensionMessagesFiles['OnlineStatusBar'] = "$dir/OnlineStatusBar.i18n.php";

$wgResourceModules['ext.OnlineStatusBar'] = array (
	'styles' => 'OnlineStatusBar.css',
	'localBasePath' => dirname ( __FILE__ ),
	'remoteExtPath' => 'OnlineStatusBar',
);

$wgAutoloadClasses['OnlineStatusBar'] = "$dir/OnlineStatusBar.body.php";
$wgAutoloadClasses['OnlineStatusBarHooks'] = "$dir/OnlineStatusBarHooks.php";

// Configuration
// Those values can be overriden in LocalSettings, do not change it here
$wgOnlineStatusBarIcon = array(
	'online' => "statusgreen.png",
	'busy' => "statusorange.png",
	'away' => "statusorange.png",
	'hidden' => "statusred.png",
	'offline' => "statusred.png",
);

// default for anonymous and uknown users
$wgOnlineStatusBarTrackIpUsers = false;
// default for online
$wgOnlineStatusBarDefaultOnline = "online";
// default for offline
$wgOnlineStatusBarDefaultOffline = "offline";
// if users have this feature enabled by default
$wgOnlineStatusBarDefaultEnabled = false;
// how long to wait until user is considered as offline
$wgOnlineStatusBar_LogoutTime = 3600;

$wgHooks['LoadExtensionSchemaUpdates'][] = 'OnlineStatusBarHooks::ckSchema';
$wgHooks['UserLogoutComplete'][] = 'OnlineStatusBarHooks::logout';
$wgHooks['ArticleViewHeader'][] = 'OnlineStatusBarHooks::renderBar';
$wgHooks['UserLoginComplete'][] = 'OnlineStatusBarHooks::updateStatus';
$wgHooks['GetPreferences'][] = 'OnlineStatusBarHooks::preferencesHook';
$wgHooks['UserGetDefaultOptions'][] = 'OnlineStatusBarHooks::setDefaultOptions';
$wgHooks['LanguageGetMagic'][] = 'OnlineStatusBarHooks::magicWordVar';
$wgHooks['BeforePageDisplay'][] = 'OnlineStatusBarHooks::stylePage';
$wgHooks['MagicWordwgVariableIDs'][] = 'OnlineStatusBarHooks::magicWordSet';
$wgHooks['ParserGetVariableValueSwitch'][] = 'OnlineStatusBarHooks::parserGetVariable';
