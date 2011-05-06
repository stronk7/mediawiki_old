<?php
# Extension:SearchLog{{php}}{{Category:Extensions|SearchLog}}
# - Licenced under LGPL (http://www.gnu.org/copyleft/lesser.html)
# - Author: [http://www.organicdesign.co.nz/nad User:Nad]
# - Started: 2007-05-16

if ( !defined('MEDIAWIKI') ) {
	die( 'Not an entry point.' );
}

define( 'SEARCHLOG_VERSION', '1.0.8, 2008-2-08' );

$dir = dirname( __FILE__ ) . '/';

// Search log config
$wgSearchLogPath          = $dir . "logs/";
$wgSearchLogFile          = false; // defaults to your server name unless customized
$wgSearchLogDateFormat    = '%b %Y';

// Classes and messages and special pages, oh my.
$wgAutoloadClasses['SpecialSearchLog'] = $dir . 'SearchLog_body.php';
$wgExtensionMessageFiles['SearchLog']  = $dir . 'SearchLog.i18n.php';
$wgExtensionAliasesFiles['SearchLog']  = $dir . 'SearchLog.alias.php';
$wgSpecialPages['SearchLog'] = 'SpecialSearchLog';

// Permissions
$wgAvailableRights[] = 'searchlog-read';
$wgGroupPermissions['*']['searchlog-read'];

// Credits
$wgExtensionCredits['specialpage'][] = array(
	'path'           => __FILE__,
	'name'           => 'Special:SearchLog',
	'author'         => '[http://www.organicdesign.co.nz/nad User:Nad]',
	'descriptionmsg' => 'searchlog-desc',
	'url'            => 'http://www.mediawiki.org/wiki/Extension:SearchLog',
	'version'        => SEARCHLOG_VERSION
);

// Hooks/ext functions
$wgExtensionFunctions[]   = 'wfSetupSearchLog';

# Called from $wgExtensionFunctions array when initialising extensions
function wfSetupSearchLog() {
	global $wgUser;

	# If a search has been posted, log the info
	if ( isset($_REQUEST['search'] ) ) {
		$search = $_REQUEST['search'];
		if ( isset( $_REQUEST['fulltext'] ) ) {
			$type = 'fulltext';
		} elseif ( isset( $_REQUEST['go'] ) ) {
			$type = 'go';
		} else {
			$type = 'other';
		}

		# Append the data to the file
		if ( empty( $search ) ) {
			$search = $_REQUEST[$type];
		}
		wfSuppressWarnings();
		$fh = fopen( SpecialSearchLog::getLogName(), 'a' );
		wfRestoreWarnings();
		if ( $fh ) {
			$text = date( 'Ymd,H:i:s,' ) . $wgUser->getName() . ",$type,$search";
			fwrite( $fh, "$text\n" );
			fclose( $fh );
		}
	}
}
