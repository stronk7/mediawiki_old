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
	'WikiSync' => array( 'WikiSync' ),
);

/** Arabic (العربية) */
$specialPageAliases['ar'] = array(
	'WikiSync' => array( 'تحديث_الويكي' ),
);

/** Persian (فارسی) */
$specialPageAliases['fa'] = array(
	'WikiSync' => array( 'ویکی‌همگام‌ساز' ),
);

/** Haitian (Kreyòl ayisyen) */
$specialPageAliases['ht'] = array(
	'WikiSync' => array( 'WikiSenkro' ),
);

/** Macedonian (Македонски) */
$specialPageAliases['mk'] = array(
	'WikiSync' => array( 'ВикиУсогласување' ),
);

/** Malayalam (മലയാളം) */
$specialPageAliases['ml'] = array(
	'WikiSync' => array( 'വിക്കിഏകീകരണം' ),
);

/** Dutch (Nederlands) */
$specialPageAliases['nl'] = array(
	'WikiSync' => array( 'Wikisynchronisatie' ),
);

/** Turkish (Türkçe) */
$specialPageAliases['tr'] = array(
	'WikiSync' => array( 'VikiSenkronizasyon' ),
);

/**
 * For backwards compatibility with MediaWiki 1.15 and earlier.
 */
$aliases =& $specialPageAliases;