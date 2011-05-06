<?php
/**
 * MwEmbed Support Extension, Supports MwEmbed based modules, 
 * and registers shared javascript resources. 
 * 
 * @file
 * @ingroup Extensions
 * 
 * @author Michael Dale ( michael.dale@kaltura.com )
 * @license GPL v2 or later
 * @version 0.3.0
 */
   
if ( !defined( 'MEDIAWIKI' ) ) {
	echo "This is the TimedMediaHandler extension. Please see the README file for installation instructions.\n";
	exit( 1 );
}

/* Configuration */

// When used as a MediaWiki extension we are not in $wgEnableMwEmbedStandAlone mode:
$wgEnableMwEmbedStandAlone = false; 


/* Setup */
$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'MwEmbedSupport',
	'author' => array( 'Michael Dale' ),
	'version' => '0.2',
	'url' => 'http://www.mediawiki.org/wiki/Extension:MwEmbed',
	'descriptionmsg' => 'mwembed-desc',
);

$wgAutoloadClasses['MwEmbedResourceManager'] = dirname( __FILE__ ) . '/MwEmbedResourceManager.php';

// Add Global MwEmbed Registration hook
$wgHooks['ResourceLoaderRegisterModules'][] = 'MwEmbedResourceManager::registerModules';

// Add MwEmbed module configuration
$wgHooks['ResourceLoaderGetConfigVars'][] =  'MwEmbedResourceManager::registerConfigVars';

/* MwEmbed Module Registration */

// Register the core MwEmbed Support Module:
MwEmbedResourceManager::register( 'extensions/MwEmbedSupport/MwEmbedModules/MwEmbedSupport' );

// Register the MwEmbed 'mediaWiki' Module:
MwEmbedResourceManager::register( 'extensions/MwEmbedSupport/MwEmbedModules/MediaWikiSupport' );

// Add MwEmbedSupport to Startup:
function MwUpdateStartupModules( &$modules ){
	// TODO parser will become part of core once Neil's parser patch gets in there. 
	array_push($modules, 'mediawiki.language', 'mediawiki.language.parser', 'jquery.triggerQueueCallback', 
				'jquery.mwEmbedUtil', 'mwEmbedStartup' );		
	return true;
}
$wgHooks['ResourceLoaderGetStartupModules'][] = 'MwUpdateStartupModules';



// Add mwEmbed Support ( style sheets and messages post page ready ) 
$wgHooks['BeforePageDisplay'][] = 'MwUpdatePageModules';
function MwUpdatePageModules( &$out ){
	$out->addModules( 'MwEmbedCommonStyle' );
	return true;
}