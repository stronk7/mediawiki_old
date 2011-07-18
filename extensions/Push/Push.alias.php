<?php
/**
 * Aliases for the special pages of the Push extension.
 *
 * @file Push.alias.php
 * @ingroup Push
 *
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */

$specialPageAliases = array();

/** English (English) */
$specialPageAliases['en'] = array(
	'Push' => array( 'Push' ),
);

/** Arabic (العربية) */
$specialPageAliases['ar'] = array(
	'Push' => array( 'دفع' ),
);

/** Breton (Brezhoneg) */
$specialPageAliases['br'] = array(
	'Push' => array( 'Bountañ' ),
);

/** Haitian (Kreyòl ayisyen) */
$specialPageAliases['ht'] = array(
	'Push' => array( 'Pouse' ),
);

/** Macedonian (Македонски) */
$specialPageAliases['mk'] = array(
	'Push' => array( 'Префрли' ),
);

/** Dutch (Nederlands) */
$specialPageAliases['nl'] = array(
	'Push' => array( 'Doorsturen' ),
);

/**
 * For backwards compatibility with MediaWiki 1.15 and earlier.
 */
$aliases =& $specialPageAliases;