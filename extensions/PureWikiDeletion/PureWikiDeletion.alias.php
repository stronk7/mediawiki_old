<?php
$aliases = array();
 
/** English */

$specialPageAliases = array();

/** English (English) */
$specialPageAliases['en'] = array(
	'PureWikiDeletion' => array( 'PureWikiDeletion' ),
	'RandomExcludeBlank' => array( 'RandomExcludeBlank' ),
	'PopulateBlankedPagesTable' => array( 'PopulateBlankedPagesTable' ),
);

/** Arabic (العربية) */
$specialPageAliases['ar'] = array(
	'PureWikiDeletion' => array( 'حذف_الويكي_النقي' ),
	'RandomExcludeBlank' => array( 'عشوائي_باستثناء_الفارغ' ),
	'PopulateBlankedPagesTable' => array( 'ملء_جدول_الصفحات_المفرغة' ),
);

/** Interlingua (Interlingua) */
$specialPageAliases['ia'] = array(
	'PureWikiDeletion' => array( 'Pur_deletion_wiki' ),
	'RandomExcludeBlank' => array( 'Pagina_aleatori_non_vacue' ),
	'PopulateBlankedPagesTable' => array( 'Plenar_tabella_de_paginas_vacuate' ),
);

/** Dutch (Nederlands) */
$specialPageAliases['nl'] = array(
	'PureWikiDeletion' => array( 'PureWikiverwijdering' ),
	'RandomExcludeBlank' => array( 'WillekeurigZonderLeeg' ),
	'PopulateBlankedPagesTable' => array( 'TabelLegePagina\'sVullen', 'TabelLegePaginasVullen' ),
);

/**
 * For backwards compatibility with MediaWiki 1.15 and earlier.
 */
$aliases =& $specialPageAliases;