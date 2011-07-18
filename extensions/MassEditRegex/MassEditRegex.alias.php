<?php
/**
 * Aliases for special pages
 *
 * @file
 * @ingroup Extensions
 */

$specialPageAliases = array();

/** English (English) */
$specialPageAliases['en'] = array(
	'MassEditRegex' => array( 'MassEditRegex' ),
);

/** Dutch (Nederlands) */
$specialPageAliases['nl'] = array(
	'MassEditRegex' => array( 'BulkRegexBewerken' ),
);

/**
 * For backwards compatibility with MediaWiki 1.15 and earlier.
 */
$aliases =& $specialPageAliases;