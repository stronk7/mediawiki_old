<?php

/**
 * Initialization file for the ExtensionManagement extension.
 * Extension documentation: http://www.mediawiki.org/wiki/Extension:ExtensionManagement
 *
 * @file extensionManagement.php
 * @ingroup ExtensionManagement
 */

// Alert the user that this is not a valid entry point to MediaWiki if they try to access the special pages file directly.
if (!defined('MEDIAWIKI')) {
        echo <<<EOT
To install this extension, put the following line in LocalSettings.php:
require_once( "\$IP/extensions/ExtensionManagement/ExtensionManagement.php" );
EOT;
        exit( 1 );
}
 
$wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
        'name' => 'ExtensionManagement',
        'author' => array('aigerim'),
        'url' => 'http://www.mediawiki.org/wiki/Extension:ExtensionManagement',
        'description' => 'Extension for displaying installed extension information.',
        'descriptionmsg' => 'extensionmanagement-desc',
);
 
$dir = dirname(__FILE__) . '/';
 
// Register the internalization and aliasing files
$wgExtensionMessagesFiles['ExtensionManagement'] = $dir . 'ExtensionManagement.i18n.php';
$wgExtensionAliasesFiles['ExtensionManagement'] = $dir . 'ExtensionManagement.alias.php';

// Load classes
$wgAutoloadClasses['ExtensionManagement'] = $dir . 'ExtensionManagement.php';
$wgAutoloadClasses['ExtensionManagementPage'] = $dir . 'ExtensionManagement_body.php';
$wgAutoloadClasses['EMSubversion'] = $dir . 'includes/EMSubversion.php';

// Special pages
$wgSpecialPages['ExtensionManagement'] = 'SpecialExtensionManagement'; 
$wgAutoloadClasses['SpecialExtensionManagement'] = $dir . 'specials/SpecialExtensionManagement.php';
//$wgSpecialPageGroups['ExtensionManagement'] = 'other';

// API modules

// Hook registration
$wgHooks['LoadExtensionSchemaUpdates'][] = 'efExtensionMgmtSchemaUpdate';

/**
 * LoadExtensionSchemaUpdates hook
 *
 */
function efExtensionMgmtSchemaUpdate( $updater = null ) {
	if ( $updater === null ) {
		global $wgExtNewTables;
		$wgExtNewTables[] = array(
			'extensionmanagement', dirname( __FILE__ ) . '/extensionmanagement.sql'
		);
		$wgExtNewTables[] = array(
			'extensionmanagement_versions', dirname( __FILE__ ) . '/extensionmanagement.sql'
		);
		$wgExtNewTables[] = array(
			'extensionmanagement_mwreleases', dirname( __FILE__ ) . '/extensionmanagement.sql'
		);
	} else {
		$updater->addExtensionUpdate( array( 'addTable', 'extensionmanagement',
			dirname( __FILE__ ) . '/extensionmanagement.sql', true ) );
		$updater->addExtensionUpdate( array( 'addTable', 'extensionmanagement_versions',
			dirname( __FILE__ ) . '/extensionmanagement.sql', true ) );
		$updater->addExtensionUpdate( array( 'addTable', 'extensionmanagement_mwreleases',
			dirname( __FILE__ ) . '/extensionmanagement.sql', true ) );
	}
	return true;
}

