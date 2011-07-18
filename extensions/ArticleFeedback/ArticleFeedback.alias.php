<?php
/**
 * Aliases for Special:ArticleFeedback
 *
 * @file
 * @ingroup Extensions
 */

$specialPageAliases = array();

/** English (English) */
$specialPageAliases['en'] = array(
	'ArticleFeedback' => array( 'ArticleFeedback' ),
);

/** Arabic (العربية) */
$specialPageAliases['ar'] = array(
	'ArticleFeedback' => array( 'تعليقات_المقالة' ),
);

/** Macedonian (Македонски) */
$specialPageAliases['mk'] = array(
	'ArticleFeedback' => array( 'ОценувањеНаСтатија' ),
);

/** Malayalam (മലയാളം) */
$specialPageAliases['ml'] = array(
	'ArticleFeedback' => array( 'ലേഖനാഭിപ്രായം' ),
);

/** Dutch (Nederlands) */
$specialPageAliases['nl'] = array(
	'ArticleFeedback' => array( 'Terugkoppeling' ),
);

/** Vietnamese (Tiếng Việt) */
$specialPageAliases['vi'] = array(
	'ArticleFeedback' => array( 'Phản_hồi_bài' ),
);

/** Simplified Chinese (‪中文(简体)‬) */
$specialPageAliases['zh-hans'] = array(
	'ArticleFeedback' => array( '文章反馈' ),
);

/**
 * For backwards compatibility with MediaWiki 1.15 and earlier.
 */
$aliases =& $specialPageAliases;