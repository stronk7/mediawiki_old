<?php
/* Categorize Mediawiki Extension
 *
 * @author Andreas Rindler (mediawiki at jenandi dot com) for initial Extension:CategorySuggest and Thomas Fauré for Categorize improvments
 * @credits Jared Milbank, Leon Weber <leon.weber@leonweber.de> & Manuel Schneider <manuel.schneider@wikimedia.ch>, Daniel Friesen http://wiki-tools.com
 * @licence GNU General Public Licence 2.0 or later
 * @description Adds input box to edit and upload page which allows users to assign categories to the article. When a user starts typing the name of a category, the extension queries the database to find categories that match the user input. Furthermore, a best categories labels cloud is displayed."
 *
*/

## Abort if not used within Mediawiki
if( !defined( 'MEDIAWIKI' ) ) {
	echo( "This file is an extension to the MediaWiki software and cannot be used standalone.\n" );
	die();
}
## Abort if AJAX is not enabled
if ( !$wgUseAjax ) {
	trigger_error( 'Categorize: please enable $wgUseAjax.', E_USER_WARNING );
	return;
}

## Globals
#
#  these can be set in local settings.php _after_ including this function
#
# $wgCategorizejs, $wgCategorizecss - paths to script and css files if needed to be moved elsewhere
# $wgCategorizeNumToSend  - max number of suggestions to send to browser - not implemented
# $wgCategorizeUnaddedWarning - not implemented
# $wgCategorizeCloud : cloud - use cloud ; anything else - list
#
$wgCategorizejs  = $wgScriptPath . '/extensions/Categorize/Categorize.js' ;
$wgCategorizecss = $wgScriptPath . '/extensions/Categorize/Categorize.css';
$wgCategorizeNumToSend = '50';
$wgCategorizeUnaddedWarning = 'True';
$wgCategorizeCloud = 'list';

## Register extension setup hook and credits:
$wgExtensionFunctions[]	= 'fnCategorize';
$wgExtensionCredits['parserhook'][] = array(
	'name'        => 'Categorize',
	'author'      => 'Thomas Faur&eacute;',
	'url'         => 'http://www.mediawiki.org/wiki/Extension:Categorize',
	'description' => 'Adds input box to edit and upload page which allows users to assign categories to the article. When a user starts typing the name of a category, the extension queries the database to find categories that match the user input. Furthermore, a best categories labels cloud is displayed.',
	'version'     => '0.1.0'
);

## register Ajax function to be called from Javascript file
$wgAjaxExportList[] = 'fnCategorizeAjax';

## Entry point for Ajax, registered in $wgAjaxExportList; returns all cats starting with $query
function fnCategorizeAjax( $query ) {
	if(isset($query) && $query != NULL) {
		$searchString = mysql_real_escape_string($query);
		# % and _ are not escaped so do it here
		$searchString = str_replace( '%' , '\%' , $searchString );
		$searchString = str_replace( '_' , '\_' , $searchString );
		$searchString = str_replace( '|' , '%' , $searchString );
		$dbr =& wfGetDB( DB_SLAVE );
		$categorylinks = $dbr->tableName('categorylinks');
		$page          = $dbr->tableName('page');
		$sql =
			"SELECT DISTINCT\n".
			"    cl_to AS cats\n".
			"  FROM $categorylinks\n".
			"  WHERE\n".
			"    UCASE(cl_to) LIKE UCASE('".$searchString."%')\n";
		$res = $dbr->query( $sql );
		$suggestStrings = array();
		for ( $i=0 ; $row = $dbr->fetchObject( $res )  ; $i++ ) {
			array_push($suggestStrings,$row->cats);
## Optional enhancement: Cutoff and rollover at max number of suggestions
## implement cutoff and rollover here
#			if ($i > 10) {
#				array_push($suggestStrings,'More...');
#				break;
#			}
		}
	        $text = implode("<",$suggestStrings);
		$dbr->freeResult( $res );
	}
	if ( !isset($text) || $text == NULL ) {
		$text = '<';
	}
	$response = new AjaxResponse($text);
	return $response;
}

## Set Hook:
function fnCategorize() {
	global $wgHooks;
	
	## Showing the boxes
	# Hook when starting editing:
	$wgHooks['EditPage::showEditForm:initial'][] = array( 'fnCategorizeShowHook', false );
	# Hook for the upload page:
	$wgHooks['UploadForm:initial'][] = array( 'fnCategorizeShowHook', true );

	## Saving the data
	# Hook when saving page:
	$wgHooks['EditPage::attemptSave'][] = array( 'fnCategorizeSaveHook', false );
	# Hook when saving the upload:
	$wgHooks['UploadForm:BeforeProcessing'][] = array( 'fnCategorizeSaveHook', true );

	## Infrastructure
	# Hook our own CSS:
	$wgHooks['OutputPageParserOutput'][] = 'fnCategorizeOutputHook';
	# Hook up local messages:
	$wgHooks['LoadAllMessages'][] = 'fnCategorizeMessageHook';
}

## Load the file containing the hook functions:
require_once( 'Categorize.body.php' );
?>
