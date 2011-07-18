<?php

/**
 * Initialization file for the Spark extension.
 * 
 * Documentation:	 		http://www.mediawiki.org/wiki/Extension:Spark
 * Support					http://www.mediawiki.org/wiki/Extension_talk:Spark
 * Source code:			 	http://svn.wikimedia.org/viewvc/mediawiki/trunk/extensions/Spark
 *
 * @file Spark.php
 * @ingroup Spark
 *
 * @licence GNU GPL v3+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */

/**
 * This documenation group collects source code files belonging to Spark.
 *
 * @defgroup Spark Spark
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'Not an entry point.' );
}

if ( version_compare( $wgVersion, '1.17', '<' ) ) {
	die( '<b>Error:</b> Spark requires MediaWiki 1.17 or above.' );
}

define( 'Spark_VERSION', '0.2 alpha' );

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'Spark',
	'version' => Spark_VERSION,
	'author' => array(
		'[http://www.mediawiki.org/wiki/User:Jeroen_De_Dauw Jeroen De Dauw]',
	),
	'url' => 'http://www.mediawiki.org/wiki/Extension:Spark',
	'descriptionmsg' => 'spark-desc'
);

$egSparkScriptPath = ( $wgExtensionAssetsPath === false ? $wgScriptPath . '/extensions' : $wgExtensionAssetsPath ) . '/Spark';

$wgExtensionMessagesFiles['Spark'] = dirname( __FILE__ ) . '/Spark.i18n.php';

$wgAutoloadClasses['SparkHooks'] = dirname( __FILE__ ) . '/Spark.hooks.php';
$wgAutoloadClasses['SparkTag'] = dirname( __FILE__ ) . '/Spark.class.php';

$wgResourceModules['ext.spark'] = array(
	'localBasePath' => dirname( __FILE__ ),
	'remoteBasePath' => $egSparkScriptPath,
	'styles' => array(),
	'scripts' => array( 'rdf-spark/jquery.spark.js' ),
	'dependencies' => array(),
	'messages' => array()
);

$wgHooks['ParserFirstCallInit'][] = 'SparkHooks::onParserFirstCallInit';

require_once 'Spark.settings.php';