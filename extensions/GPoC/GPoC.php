<?php
/**
 * Proof of Concept for Yuvi Panda's 2011 GSoC
 *
 * @file
 * @ingroup Extensions
 * @author Yuvi Panda, http://yuvi.in
 * @copyright © 2011 Yuvaraj Pandian (yuvipanda@yuvi.in)
 * @licence Modified BSD License
 */

if( !defined( 'MEDIAWIKI' ) ) {
	echo( "This file is an extension to the MediaWiki software and cannot be used standalone.\n" );
	die( 1 );
}

// Extension credits that will show up on Special:Version

// Set up the new special page
$dir = dirname( __FILE__ ) . '/';

$wgAutoloadClasses['GPoCHooks'] = $dir . 'GPoC.hooks.php';
$wgAutoloadClasses['Statistics'] = $dir . 'models/Statistics.php';
$wgAutoloadClasses['Rating'] = $dir . 'models/Rating.php';
$wgAutoloadClasses['AssessmentChangeLog'] = $dir . 'models/Log.php';
$wgAutoloadClasses['TableDisplay'] = $dir . 'TableDisplay.php';
$wgAutoloadClasses['AssessmentsExtractor'] = $dir . 'AssessmentsExtractor.php';
$wgAutoloadClasses['SpecialAssessmentLog'] = $dir . 'SpecialAssessmentLog.php';

$wgHooks['ArticleSaveComplete'][] = 'GPoCHooks::ArticleSaveComplete';
$wgHooks['LoadExtensionSchemaUpdates'][] = 'GPoCHooks::SetupSchema';

$wgHooks['ParserFirstCallInit'][] = 'TableDisplay::ParserFunctionInit';
$wgHooks['LanguageGetMagic'][] = 'TableDisplay::LanguageGetMagic';

$wgHooks['TitleMoveComplete'][] = 'GPoCHooks::TitleMoveComplete';

$wgSpecialPages['AssessmentLog'] = 'SpecialAssessmentLog';

// Configuration
