<?php
/**
 * User Daily Contributions extension
 * 
 * This extension adds a step to saving an article that incriments a counter for a user's activity in a given day.
 * 
 * @file
 * @ingroup Extensions
 * 
 * @author Nimish Gautam <ngautam@wikimedia.org>
 * @author Trevor Parscal <tparscal@wikimedia.org>
 * @license GPL v2 or later
 * @version 0.2.0
 */

/* Setup */

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'User Daily Contributions',
	'author' => array( 'Nimish Gautam', 'Trevor Parscal' ),
	'version' => '0.2.0',
	'url' => 'http://www.mediawiki.org/wiki/Extension:UsabilityInitiative',
	'descriptionmsg' => 'userdailycontribs-desc',
);
$wgAutoloadClasses['UserDailyContribsHooks'] = dirname( __FILE__ ) . '/UserDailyContribs.hooks.php';
$wgAutoloadClasses['ApiUserDailyContribs'] = dirname( __FILE__ ) . '/api/ApiUserDailyContribs.php';
$wgExtensionMessagesFiles['UserDailyContribs'] = dirname( __FILE__ ) . '/UserDailyContribs.i18n.php';
$wgHooks['LoadExtensionSchemaUpdates'][] = 'UserDailyContribsHooks::loadExtensionSchemaUpdates';
$wgHooks['ArticleSaveComplete'][] = 'UserDailyContribsHooks::articleSaveComplete';
$wgHooks['ParserTestTables'][] = 'UserDailyContribsHooks::parserTestTables';
$wgAPIModules['userdailycontribs'] = 'ApiUserDailyContribs';

/**
 * Get the number of revisions a user has made since a given time
 *
 * @param $time beginning timestamp
 * @return number of revsions this user has made
 */
function getUserEditCountSince( $time = null, User $user = null ) {
	global $wgUser;
	
	// Fallback on current user
	if ( is_null( $user ) ) {
		$user = $wgUser;
	}
	// Round time down to a whole day
	$time = gmdate( 'Y-m-d', wfTimestamp( TS_UNIX, $time ) );
	// Query the user contribs table
	$dbr = wfGetDB( DB_SLAVE );
	$edits = $dbr->selectField(
		'user_daily_contribs',
		'SUM(contribs)',
		array( 'user_id' => $user->getId(), 'day >= ' . $dbr->addQuotes( $time ) ),
		__METHOD__
	);
	// Return edit count as an integer
	return is_null( $edits ) ? 0 : (integer) $edits;
}
