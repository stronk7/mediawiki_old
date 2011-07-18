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
	'SPARQLEndpoint' => array( 'SPARQLEndpoint' ),
	'SpecialARC2Admin' => array( 'ARC2Admin' ),
	'RDFImport' => array( 'RDFImport' ),
);

/** Arabic (العربية) */
$specialPageAliases['ar'] = array(
	'SPARQLEndpoint' => array( 'سباركل_إن_دي_بوينت' ),
	'SpecialARC2Admin' => array( 'أرك_تو_أدمن' ),
	'RDFImport' => array( 'استيراد_آر_دي_إف' ),
);

/** Dutch (Nederlands) */
$specialPageAliases['nl'] = array(
	'SPARQLEndpoint' => array( 'SPARQLEindpunt' ),
	'SpecialARC2Admin' => array( 'ARC2Beheer' ),
	'RDFImport' => array( 'RDFImporteren' ),
);

/** Vietnamese (Tiếng Việt) */
$specialPageAliases['vi'] = array(
	'SpecialARC2Admin' => array( 'Quản_lý_ARC2', 'Quản_lí_ARC2' ),
	'RDFImport' => array( 'Nhập_RDF' ),
);

/**
 * For backwards compatibility with MediaWiki 1.15 and earlier.
 */
$aliases =& $specialPageAliases;