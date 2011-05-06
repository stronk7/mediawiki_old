<?php

/**
 * Initialization file for the SMWAutoRefresh extension.
 * 
 * Documentation:	 		http://www.mediawiki.org/wiki/Extension:SMWAutoRefresh
 * Support					http://www.mediawiki.org/wiki/Extension_talk:SMWAutoRefresh
 * Source code:             http://svn.wikimedia.org/viewvc/mediawiki/trunk/extensions/SMWAutoRefresh
 *
 * @file SMWAutoRefresh.php
 * @ingroup SMWAutoRefresh
 *
 * @licence GNU GPL v3
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */

/**
 * This documenation group collects source code files belonging to SMWAutoRefresh.
 *
 * @defgroup SMWAutoRefresh SMWAutoRefresh
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'Not an entry point.' );
}

if ( !defined( 'SMWAutoRefresh_VERSION' ) ) {
	define( 'SMWAutoRefresh_VERSION', '0.1 rc' );
	
	$wgExtensionCredits[defined( 'SEMANTIC_EXTENSION_TYPE' ) ? 'semantic' : 'other'][] = array(
		'path' => __FILE__,
		'name' => 'SMWAutoRefresh',
		'version' => SMWAutoRefresh_VERSION,
		'author' => array(
			'[http://www.mediawiki.org/wiki/User:Jeroen_De_Dauw Jeroen De Dauw]',
		),
		'url' => 'http://www.mediawiki.org/wiki/Extension:SMWAutoRefresh',
		'descriptionmsg' => 'smwautorefresh-desc'
	);
	
	$wgExtensionMessagesFiles['SMWAutoRefresh'] = dirname( __FILE__ ) . '/SMWAutoRefresh.i18n.php';
	
	$wgHooks['SMWSQLStore2::updateDataAfter'][] = 'smwAutoRefresh';
	
	function smwAutoRefresh( SMWStore $store, SMWSemanticData $data ) {
		$data->getSubject()->getTitle()->invalidateCache();
		return true;
	}	
}
