<?php
/**
 * API sandbox extension. Initial author Max Semenik, based on idea by Salil P. A.
 * License: WTFPL 2.0
 */


$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'ApiSandbox',
	'author' => array( 'Max Semenik' ),
	'url' => 'http://mediawiki.org/wiki/Extension:ApiSandbox',
	'descriptionmsg' => 'apisb-desc',
);

$dir = dirname(__FILE__) . '/';

$wgExtensionMessagesFiles['ApiSandbox'] = $dir . 'ApiSandbox.i18n.php';
$wgExtensionAliasesFiles['ApiSandbox']  = $dir . 'ApiSandbox.alias.php';

$wgAutoloadClasses['SpecialApiSandbox'] = $dir . 'SpecialApiSandbox.php';

$wgSpecialPages['ApiSandbox'] = 'SpecialApiSandbox';
$wgSpecialPageGroups['ApiSandbox'] = 'wiki';

$wgResourceModules['ext.apiSandbox'] = array(
	'scripts' => 'ext.apiSandbox.js',
	'styles' => 'ext.apiSandbox.css',
	'localBasePath' => dirname( __FILE__ ),
	'remoteExtPath' => 'ApiSandbox',
	'messages' => array(
		'apisb-loading',
		'apisb-load-error',
		'apisb-request-error',
		'apisb-select-value',
		'apisb-namespaces-error',
		'apisb-ns-main',
		'parentheses',
	),
);
