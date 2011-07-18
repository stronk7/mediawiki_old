<?php
/**
 * Aliases for special pages of VariablePage extension.
 *
 * @file
 */

$specialPageAliases = array();

/** English (English) */
$specialPageAliases['en'] = array(
	'VariablePage' => array( 'VariablePage' ),
);

/** Arabic (العربية) */
$specialPageAliases['ar'] = array(
	'VariablePage' => array( 'صفحة_متغيرة' ),
);

/** Haitian (Kreyòl ayisyen) */
$specialPageAliases['ht'] = array(
	'VariablePage' => array( 'PajVariab' ),
);

/** Luxembourgish (Lëtzebuergesch) */
$specialPageAliases['lb'] = array(
	'VariablePage' => array( 'Variabel_Säit' ),
);

/** Macedonian (Македонски) */
$specialPageAliases['mk'] = array(
	'VariablePage' => array( 'ПроменливаСтраница' ),
);

/** Malayalam (മലയാളം) */
$specialPageAliases['ml'] = array(
	'VariablePage' => array( 'ചരതാൾ' ),
);

/** Dutch (Nederlands) */
$specialPageAliases['nl'] = array(
	'VariablePage' => array( 'VariabelePagina' ),
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬) */
$specialPageAliases['no'] = array(
	'VariablePage' => array( 'Variabelside' ),
);

/** Turkish (Türkçe) */
$specialPageAliases['tr'] = array(
	'VariablePage' => array( 'DeğişkenSayfası' ),
);

/**
 * For backwards compatibility with MediaWiki 1.15 and earlier.
 */
$aliases =& $specialPageAliases;