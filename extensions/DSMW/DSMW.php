<?php

/**
 * Initialization file for the Distributed Semantic MediaWiki extension.
 * See https://secure.wikimedia.org/wikipedia/mediawiki/wiki/Extension:DSMW 
 * 
 * @file DSMW.php
 * @ingroup DSMW
 * 
 * @copyright 2009 INRIA-LORIA-ECOO project
 * 
 * @author jean-philippe muller
 * @author Morel Émile
 * @author Jeroen De Dauw 
 */

/**
 * This documenation group collects source code files belonging to DSMW.
 *
 * @defgroup DSMW Distributed Semantic MediaWiki
 */

if ( !defined( 'MEDIAWIKI' ) ) {
    die( 'Not a valid entry point.' );
}

require_once "$IP/includes/GlobalFunctions.php";
require_once dirname( __FILE__ ) . '/includes/DSMW_GlobalFunctions.php';
$wgDSMWIP = dirname( __FILE__ );

require_once( "$wgDSMWIP/includes/DSMWButton.php" );

require_once 'includes/SemanticFunctions.php';
require_once 'includes/IntegrationFunctions.php';

define( 'DSMW_VERSION', '1.1 alpha' );

// Load and register the StoryReview special page and register it's group.
$wgSpecialPages['ArticleAdminPage'] = 'ArticleAdminPage';
$wgSpecialPageGroups['ArticleAdminPage'] = 'dsmw_group';

$wgSpecialPages['DSMWAdmin'] = 'DSMWAdmin';
$wgSpecialPageGroups['DSMWAdmin'] = 'dsmw_group';

$wgSpecialPages['DSMWGeneralExhibits'] = 'DSMWGeneralExhibits';
$wgSpecialPageGroups['DSMWGeneralExhibits'] = 'dsmw_group';

$wgGroupPermissions['*']['upload_by_url'] = true;
$wgGroupPermissions['*']['reupload'] = true;
$wgGroupPermissions['*']['upload'] = true;

$wgAllowCopyUploads = true;

$wgExtensionMessagesFiles['DSMW'] = dirname( __FILE__ ) . '/DSMW.i18n.php';
$wgExtensionAliasesFiles['DSMW'] = dirname( __FILE__ ) . '/DSMW.alias.php';

$wgAutoloadClasses['DSMWHooks'] = dirname( __FILE__ )  . '/DSMW.hooks.php';

$wgAutoloadClasses['logootEngine'] = "$wgDSMWIP/logootComponent/logootEngine.php";
$wgAutoloadClasses['logoot'] = "$wgDSMWIP/logootComponent/logoot.php";
$wgAutoloadClasses['LogootId'] = "$wgDSMWIP/logootComponent/LogootId.php";
$wgAutoloadClasses['LogootPosition'] = "$wgDSMWIP/logootComponent/LogootPosition.php";
$wgAutoloadClasses['Diff1']
        = $wgAutoloadClasses['_DiffEngine1']
        = $wgAutoloadClasses['_DiffOp1']
        = $wgAutoloadClasses['_DiffOp_Add1']
        = $wgAutoloadClasses['_DiffOp_Change1']
        = $wgAutoloadClasses['_DiffOp_Copy1']
        = $wgAutoloadClasses['_DiffOp_Delete1']
        = "$wgDSMWIP/logootComponent/DiffEngine.php";

$wgAutoloadClasses['LogootIns'] = "$wgDSMWIP/logootComponent/LogootIns.php";
$wgAutoloadClasses['LogootDel'] = "$wgDSMWIP/logootComponent/LogootDel.php";

$wgAutoloadClasses['DSMWRevisionManager'] 		= dirname( __FILE__ ) . '/includes/DSMW_RevisionManager.php';
$wgAutoloadClasses['DSMWPersistentClock']		= dirname( __FILE__ ) . '/includes/DSMW_PersistentClock.php';
$wgAutoloadClasses['DSMWPatch']					= dirname( __FILE__ ) . '/includes/DSMW_Patch.php';

$wgAutoloadClasses['ApiQueryPatch'] = "$wgDSMWIP/api/ApiQueryPatch.php";
$wgAutoloadClasses['ApiQueryChangeSet'] = "$wgDSMWIP/api/ApiQueryChangeSet.php";
$wgAutoloadClasses['ApiUpload'] = "$wgDSMWIP/api/upload/ApiUpload.php";
$wgAutoloadClasses['ApiQueryImageInfo'] = "$wgDSMWIP/api/upload/ApiQueryImageInfo.php";

$wgAutoloadClasses['ApiPatchPush'] = "$wgDSMWIP/api/ApiPatchPush.php";
$wgAutoloadClasses['utils'] = "$wgDSMWIP/files/utils.php";
$wgAutoloadClasses['Math_BigInteger'] = "$wgDSMWIP/logootComponent/Math/BigInteger.php";

//// / Register Jobs
$wgJobClasses['DSMWUpdateJob'] = 'DSMWUpdateJob';
$wgAutoloadClasses['DSMWUpdateJob'] = "$wgDSMWIP/jobs/DSMWUpdateJob.php";
$wgJobClasses['DSMWPropertyTypeJob'] = 'DSMWPropertyTypeJob';
$wgAutoloadClasses['DSMWPropertyTypeJob'] = "$wgDSMWIP/jobs/DSMWPropertyTypeJob.php";

$wgAutoloadClasses['DSMWSiteId'] = "$wgDSMWIP/includes/DSMWSiteId.php";

$wgExtensionFunctions[] = 'dsmwgSetupFunction';

$wgHooks['LoadExtensionSchemaUpdates'][] = 'DSMWHooks::onExtensionSchemaUpdates';
$wgHooks['UnknownAction'][] = 'DSMWHooks::onUnknownAction';
$wgHooks['EditPage::attemptSave'][] = 'DSMWHooks::onAttemptSave';
$wgHooks['EditPageBeforeConflictDiff'][] = 'DSMWHooks::onEditConflict';
$wgHooks['UploadComplete'][] = 'DSMWHooks::onUploadComplete';

$wgExtensionCredits[defined( 'SEMANTIC_EXTENSION_TYPE' ) ? 'semantic' : 'other'][] = array(
    'path' => __FILE__,
    'name' => 'Distributed&nbsp;Semantic&nbsp;MediaWiki',
    'version' => DSMW_VERSION,
    'author' => array(
		'[http://www.loria.fr/~mullejea Jean&ndash;Philippe&nbsp;Muller]',
		'[http://www.loria.fr/~molli Pascal&nbsp;Molli]',
		'[http://www.loria.fr/~skaf Hala&nbsp;Skaf&ndash;Molli]',
		'[http://www.loria.fr/~canals Gérôme&nbsp;Canals]',
		'[http://www.loria.fr/~rahalcha Charbel&nbsp;Rahal]',
		'[http://www.loria.fr/~weiss Stéphane&nbsp;Weiss]',
		'[http://m3p.gforge.inria.fr/pmwiki/pmwiki.php?n=Site.Team others]'
	),
    'url' => 'http://www.dsmw.org',
	'descriptionmsg' => 'dsmw-desc'
);

$queryModules = array(
	'patch' => 'ApiQueryPatch',
	'changeSet' => 'ApiQueryChangeSet',
	'patchPushed' => 'ApiPatchPush'
);

if ( compareMWVersion( $wgVersion ) == -1 ) {
    $wgApiQueryMetaModules = $queryModules; 
} else {
    $wgAPIMetaModules = $queryModules;
}

if ( compareMWVersion( $wgVersion, '1.16.0' ) == -1 ) {
    $wgAPIModules += array(
    	'upload' => 'ApiUpload',
        'ApiQueryImageInfo' => 'ApiQueryImageInfo',
    );
    
    $wgAutoloadLocalClasses['UploadBase'] = dirname( __FILE__ ) . '/api/upload/UploadBase.php';
    $wgAutoloadLocalClasses['UploadFromFile'] = dirname( __FILE__ ) . '/api/upload/UploadFromFile.php';
    $wgAutoloadLocalClasses['UploadFromStash'] = dirname( __FILE__ ) . '/api/upload/UploadFromStash.php';
    $wgAutoloadLocalClasses['UploadFromUrl'] = dirname( __FILE__ ) . '/api/upload/UploadFromUrl.php';
}

// To ensure Maps remains compatible with pre 1.16.
if ( !class_exists( 'Html' ) ) {
	$wgAutoloadClasses['Html'] = dirname( __FILE__ ) . '/compat/Html.php';
}

function dsmwgSetupFunction() {
    global $smwgNamespacesWithSemanticLinks;

	// This function has been deprecated in 1.16, but needed for earlier versions.
	// It's present in 1.16 as a stub, but lets check if it exists in case it gets removed at some point.
	if ( function_exists( 'wfLoadExtensionMessages' ) ) {
		wfLoadExtensionMessages( 'DSMW' );
	}    
    
    $smwgNamespacesWithSemanticLinks += array(
        PATCH => true,
        PUSHFEED => true,
        PULLFEED => true,
        CHANGESET => true
	);
}

require_once dirname( __FILE__ ) . '/DSMW_Settings.php';
