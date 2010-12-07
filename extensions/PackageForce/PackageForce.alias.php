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
	'PackageForce' => array( 'PackageForce' ),
	'PackageForceAdmin' => array( 'PackageForceAdmin' ),
);

/** Japanese (日本語) */
$specialPageAliases['ja'] = array(
	'PackageForce' => array( 'パッケージ強化' ),
	'PackageForceAdmin' => array( 'パッケージ強化の管理' ),
);

/** Dutch (Nederlands) */
$specialPageAliases['nl'] = array(
	'PackageForceAdmin' => array( 'PackageForceBeheer' ),
);

/**
 * For backwards compatibility with MediaWiki 1.15 and earlier.
 */
$aliases =& $specialPageAliases;