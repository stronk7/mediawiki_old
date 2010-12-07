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
	'CategoryBrowser' => array( 'CategoryBrowser' ),
);

/** Finnish (Suomi) */
$specialPageAliases['fi'] = array(
	'CategoryBrowser' => array( 'Luokkaselain' ),
);

/** Interlingua (Interlingua) */
$specialPageAliases['ia'] = array(
	'CategoryBrowser' => array( 'Navigator_de_categorias' ),
);

/** Japanese (日本語) */
$specialPageAliases['ja'] = array(
	'CategoryBrowser' => array( 'カテゴリブラウザー' ),
);

/** Dutch (Nederlands) */
$specialPageAliases['nl'] = array(
	'CategoryBrowser' => array( 'CategorieenDoorbladeren' ),
);

/**
 * For backwards compatibility with MediaWiki 1.15 and earlier.
 */
$aliases =& $specialPageAliases;