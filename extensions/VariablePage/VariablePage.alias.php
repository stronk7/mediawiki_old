<?php
/**
 * Aliases for special pages of VariablePage extension.
 *
 * @file
 */

$specialPageAliases = array();

/** English
 * @author Nike
 */
$specialPageAliases['en'] = array(
	'VariablePage' => array( 'VariablePage' ),
);

/** Malayalam (മലയാളം) */
$specialPageAliases['ml'] = array(
	'VariablePage' => array( 'ചരതാൾ' ),
);

/**
 * For backwards compatibility with MediaWiki 1.15 and earlier.
 */
$aliases =& $specialPageAliases;