<?php
/**
 * Aliases for special pages of Todo extension.
 *
 * @file
 */

$specialPageAliases = array();

/** English (English) */
$specialPageAliases['en'] = array(
	'Todo' => array( 'Todo' ),
);

/** Arabic (العربية) */
$specialPageAliases['ar'] = array(
	'Todo' => array( 'للعمل' ),
);

/** Breton (Brezhoneg) */
$specialPageAliases['br'] = array(
	'Todo' => array( 'DaOber' ),
);

/** French (Français) */
$specialPageAliases['fr'] = array(
	'Todo' => array( 'ÀFaire', 'À_faire' ),
);

/** Haitian (Kreyòl ayisyen) */
$specialPageAliases['ht'] = array(
	'Todo' => array( 'PouFè' ),
);

/** Macedonian (Македонски) */
$specialPageAliases['mk'] = array(
	'Todo' => array( 'Задачи' ),
);

/** Malayalam (മലയാളം) */
$specialPageAliases['ml'] = array(
	'Todo' => array( 'ചെയ്യേണ്ടവ' ),
);

/** Dutch (Nederlands) */
$specialPageAliases['nl'] = array(
	'Todo' => array( 'TeDoen' ),
);

/**
 * For backwards compatibility with MediaWiki 1.15 and earlier.
 */
$aliases =& $specialPageAliases;