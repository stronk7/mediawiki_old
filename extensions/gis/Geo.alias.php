<?php
/**
 * Aliases for special pages
 *
 */

$specialPageAliases = array();

$specialPageAliases['en'] = array(
	'Geo' => array( 'Geo' ),
);

/** Arabic (العربية)
 * @author Meno25
 */
$specialPageAliases['ar'] = array(
	'Geo' => array( 'جيو' ),
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Meno25
 */
$specialPageAliases['arz'] = array(
	'Geo' => array( 'جيو' ),
);

/**
 * For backwards compatibility with MediaWiki 1.15 and earlier.
 */
$aliases =& $specialPageAliases;