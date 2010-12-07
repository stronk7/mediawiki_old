<?php

/**
 * Initialization file for the Push extension.
 * 
 * On MediaWiki.org: 		http://www.mediawiki.org/wiki/Extension:Push
 * Source code:             http://svn.wikimedia.org/viewvc/mediawiki/trunk/extensions/Push
 *
 * @file Push.php
 * @ingroup Push
 *
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */

/**
 * This documenation group collects source code files belonging to Push.
 *
 * @defgroup Push Push
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'Not an entry point.' );
}

define( 'Push_VERSION', '0.1 alpha' );

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'Push',
	'version' => Push_VERSION,
	'author' => array(
		'[http://www.mediawiki.org/wiki/User:Jeroen_De_Dauw Jeroen De Dauw] for [http://www.wikiworks.com WikiWorks]',
	),
	'url' => 'http://www.mediawiki.org/wiki/Extension:Push',
	'descriptionmsg' => 'push-desc'
);

$useExtensionPath = version_compare( $wgVersion, '1.16', '>=' ) && isset( $wgExtensionAssetsPath ) && $wgExtensionAssetsPath;
$egPushScriptPath 	= ( $useExtensionPath ? $wgExtensionAssetsPath : $wgScriptPath . '/extensions' ) . '/Push';
$egPushIP = dirname( __FILE__ );
unset( $useExtensionPath );

$wgExtensionMessagesFiles['Push'] 		= dirname( __FILE__ ) . '/Push.i18n.php';

$wgAutoloadClasses['PushHooks'] 		= dirname( __FILE__ ) . '/Push.hooks.php';
$wgAutoloadClasses['PushTab'] 			= dirname( __FILE__ ) . '/includes/Push_Tab.php';
$wgAutoloadClasses['SpecialPush'] 		= dirname( __FILE__ ) . '/specials/Push_Body.php';

//$wgSpecialPages['Push'] = 'SpecialPush';
//$wgSpecialPageGroups['Push'] = 'pagetools';

$wgHooks['UnknownAction'][] = 'PushTab::onUnknownAction';
$wgHooks['SkinTemplateTabs'][] = 'PushTab::displayTab';
$wgHooks['SkinTemplateNavigation'][] = 'PushTab::displayTab2';

//$wgHooks['AdminLinks'][] = 'PushHooks::addToAdminLinks';

$wgAvailableRights[] = 'push';
$wgAvailableRights[] = 'pushadmin';

$egPushJSMessages = array(
	'push-button-pushing',
	'push-button-completed',
	'push-button-failed',
	'push-import-revision-message',
	'push-import-revision-comment',
	'push-button-text',
	'push-button-all',
);

// For backward compatibility with MW < 1.17.
if ( is_callable( array( 'OutputPage', 'addModules' ) ) ) {
	$moduleTemplate = array(
		'localBasePath' => dirname( __FILE__ ),
		'remoteBasePath' => $egPushScriptPath,
		'group' => 'ext.push'
	);
	
	$wgResourceModules['ext.push.tab'] = $moduleTemplate + array(
		'scripts' => 'includes/ext.push.tab.js',
		'dependencies' => array(),
		'messages' => $egPushJSMessages
	);	
}

function efPushAddJSLocalisation() {
	global $egPushJSMessages, $wgOut;
	
	$data = array();

	foreach ( $egPushJSMessages as $msg ) {
		$data[$msg] = wfMsgNoTrans( $msg );
	}

	$wgOut->addInlineScript( 'var wgPushMessages = ' . json_encode( $data ) . ';' );		
}

require_once 'Push_Settings.php';
