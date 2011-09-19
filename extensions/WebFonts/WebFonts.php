<?php
/**
 * Dynamic Font Embedding  MediaWiki extension
 *
 * To install it put this file in the extensions directory
 * To activate the extension, include it from your LocalSettings.php
 * with: require("$IP/extensions/WebFonts.php");
 *
 * @file
 * @ingroup Extensions
 * @author Santhosh Thottingal, <santhosh.thottingal@gmail.com>
 * @copyright © 2011 Santhosh Thottingal  http://thottingal.in
 * @licence GNU General Public Licence 3.0 or later
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	echo( "This file is an extension to the MediaWiki software and cannot be used standalone.\n" );
	die( -1 );
}

$wgExtensionCredits['parserhook'][] = array(
	'path'           => __FILE__,
	'name'           => 'WebFonts',
	'author'         => array( 'Santhosh Thottingal', 'Niklas Laxström' ),
	'url'            => 'http://www.mediawiki.org/wiki/Extension:WebFonts',
	'descriptionmsg' => 'webfonts-desc',
);

$dir = dirname( __FILE__ );
// Internationalization
$wgExtensionMessagesFiles['WebFonts'] = "$dir/WebFonts.i18n.php";

// Register auto load for the page class
$wgAutoloadClasses['WebFontsHooks'] = "$dir/WebFonts.hooks.php";

$wgHooks['BeforePageDisplay'][] = 'WebFontsHooks::addModules';
$wgHooks['GetPreferences'][] = 'WebFontsHooks::addPreference';

$wgWebFontsEnabled = true;

$wgResourceModules['webfonts'] = array(
	'scripts' => 'js/webfonts.js',
	'styles' => 'css/webfonts.css',
	'localBasePath' => $dir,
	'remoteExtPath' => 'WebFonts',
	'messages' => array( 'webfonts-load', 'webfonts-reset' ),
	'dependencies' => 'webfonts.fontlist',
);

$wgResourceModules['webfonts.fontlist'] = array(
	'scripts' => 'js/webfonts.fontlist.js',
	'localBasePath' => $dir,
	'remoteExtPath' => 'WebFonts',
);
