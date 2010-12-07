<?php
/**
 * Article Feedback extension
 * 
 * @file
 * @ingroup Extensions
 * 
 * @author Trevor Parscal <trevor@wikimedia.org>
 * @license GPL v2 or later
 * @version 0.1.0
 */

/* XXX: Survey setup */
require_once( dirname( dirname( __FILE__ ) ) . '/SimpleSurvey/SimpleSurvey.php' );

/* Configuration */

// Which version of the UI to render
$wgArticleFeedbackVersion = 'alpha';

// If the number of page revisions (since users last rating) is greater than this then consider the
// last rating "stale"
$wgArticleFeedbackStaleCount = 5;

// Array of the "ratings" id's to store. Allows it to be a bit more dynamic
$wgArticleFeedbackRatings = array( 1, 2, 3, 4 );

// Which categories the pages must belong to have the rating widget added (with _ in text)
// Extension is "disabled" if this field is an empty array (as per default configuration)
$wgArticleFeedbackCategories = array();

// Would ordinarily call this articlefeedback but survey names are 16 chars max
$wgPrefSwitchSurveys['articlerating'] = array(
	'updatable' => false,
	'submit-msg' => 'articlefeedback-survey-submit',
	'questions' => array(
		'whyrated' => array(
			'question' => 'articlefeedback-survey-question-whyrated',
			'type' => 'checks',
			'answers' => array(
				'contribute-rating' => 'articlefeedback-survey-answer-whyrated-contribute-rating',
				'development' => 'articlefeedback-survey-answer-whyrated-development',
				'contribute-wiki' => 'articlefeedback-survey-answer-whyrated-contribute-wiki',
				'sharing-opinion' => 'articlefeedback-survey-answer-whyrated-sharing-opinion',
				'didntrate' => 'articlefeedback-survey-answer-whyrated-didntrate',
			),
			'other' => 'articlefeedback-survey-answer-whyrated-other',
		),
		'useful' => array(
			'question' => 'articlefeedback-survey-question-useful',
			'type' => 'boolean',
			'iffalse' => 'articlefeedback-survey-question-useful-iffalse',
		),
		'expert' => array(
			'question' => 'articlefeedback-survey-question-expert',
			'type' => 'boolean',
			'iftrue' => 'articlefeedback-survey-question-expert-iftrue',
		),
		'comments' => array(
			'question' => 'articlefeedback-survey-question-comments',
			'type' => 'text',
		),
	),
);
$wgValidSurveys[] = 'articlerating';

/* Setup */

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'Article Feedback',
	'author' => array(
		'Sam Reed',
		'Roan Kattouw',
		'Trevor Parscal',
		'Brandon Harris',
		'Adam Miller',
		'Nimish Gautam',
	),
	'version' => '0.2.0',
	'descriptionmsg' => 'articlefeedback-desc',
	'url' => 'http://www.mediawiki.org/wiki/Extension:ArticleFeedback'
);
// Autoloading
$dir = dirname( __FILE__ ) . '/';
$wgAutoloadClasses['ApiQueryArticleFeedback'] = $dir . 'api/ApiQueryArticleFeedback.php';
$wgAutoloadClasses['ApiArticleFeedback'] = $dir . 'api/ApiArticleFeedback.php';
$wgAutoloadClasses['ArticleFeedbackHooks'] = $dir . 'ArticleFeedback.hooks.php';
$wgExtensionMessagesFiles['ArticleFeedback'] = $dir . 'ArticleFeedback.i18n.php';
// Hooks
$wgHooks['LoadExtensionSchemaUpdates'][] = 'ArticleFeedbackHooks::loadExtensionSchemaUpdates';
$wgHooks['ParserTestTables'][] = 'ArticleFeedbackHooks::parserTestTables';
$wgHooks['BeforePageDisplay'][] = 'ArticleFeedbackHooks::beforePageDisplay';
$wgHooks['ResourceLoaderRegisterModules'][] = 'ArticleFeedbackHooks::resourceLoaderRegisterModules';
// API Registration
$wgAPIListModules['articlefeedback'] = 'ApiQueryArticleFeedback';
$wgAPIModules['articlefeedback'] = 'ApiArticleFeedback';
