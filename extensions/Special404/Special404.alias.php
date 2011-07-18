<?php
/**
 * Aliases for Special:404
 *
 * @file
 * @ingroup Extensions
 */

$specialPageAliases = array();

/** English (English) */
$specialPageAliases['en'] = array(
	'Error404' => array( 'Error404', '404' ),
);

/** Arabic (العربية) */
$specialPageAliases['ar'] = array(
	'Error404' => array( 'خطأ404' ),
);

/** Breton (Brezhoneg) */
$specialPageAliases['br'] = array(
	'Error404' => array( 'Fazi_404', '404' ),
);

/** Persian (فارسی) */
$specialPageAliases['fa'] = array(
	'Error404' => array( 'خطای_۴۰۴', '۴۰۴' ),
);

/** French (Français) */
$specialPageAliases['fr'] = array(
	'Error404' => array( 'Erreur404' ),
);

/** Haitian (Kreyòl ayisyen) */
$specialPageAliases['ht'] = array(
	'Error404' => array( 'Erè404' ),
);

/** Georgian (ქართული) */
$specialPageAliases['ka'] = array(
	'Error404' => array( 'შეცდომა_404' ),
);

/** Luxembourgish (Lëtzebuergesch) */
$specialPageAliases['lb'] = array(
	'Error404' => array( 'Feeler_404' ),
);

/** Macedonian (Македонски) */
$specialPageAliases['mk'] = array(
	'Error404' => array( 'Грешка404' ),
);

/** Malayalam (മലയാളം) */
$specialPageAliases['ml'] = array(
	'Error404' => array( 'പിഴവ്404' ),
);

/** Vietnamese (Tiếng Việt) */
$specialPageAliases['vi'] = array(
	'Error404' => array( 'Lỗi_404' ),
);

/** Simplified Chinese (‪中文(简体)‬) */
$specialPageAliases['zh-hans'] = array(
	'Error404' => array( '四零四错误' ),
);

/**
 * For backwards compatibility with MediaWiki 1.15 and earlier.
 */
$aliases =& $specialPageAliases;