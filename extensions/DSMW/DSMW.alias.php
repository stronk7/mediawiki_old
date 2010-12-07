<?php
/**
 * Aliases for the special pages of the DSMW extension.
 *
 * @file DSMW.alias.php
 * @ingroup DSMW
 *
 * @author Jeroen De Dauw
 */

$specialPageAliases = array();

/** English
 * @author Jeroen De Dauw
 */
$specialPageAliases['en'] = array(
	'ArticleAdminPage' => array( 'ArticleAdminPage' ),
	'DSMWAdmin' => array( 'DSMWAdmin' ),
	'DSMWGeneralExhibits' => array( 'DSMWGeneralExhibits' ),
);

/**
 * For backwards compatibility with MediaWiki 1.15 and earlier.
 */
$aliases =& $specialPageAliases;