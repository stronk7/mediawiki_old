<?php
/**
 * Aliases for special pages
 *
 * @file
 * @ingroup Extensions
 */

$specialPageAliases = array();

/** English */
$specialPageAliases['en'] = array(
	'Poll' => array( 'Poll' ),
);

/** German(Deutsch) */
$specialPageAliases['de'] = array(
	'Poll' => array( 'Umfrage' ),
);

/**
 * For backwards compatibility with MediaWiki 1.15 and earlier.
 */
$aliases =& $specialPageAliases;