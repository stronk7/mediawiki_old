<?php

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'MSSQLBackCompat',
	'url' => 'http://www.mediawiki.org/wiki/Extension:MSSQLBackCompat',
	'author' => 'Sam Reed',
	'descriptionmsg' => 'Back compat hack for those that need non core MSSQL support (SMW, ED or something)',
);

$dir = dirname( __FILE__ ) . '/';
$wgAutoloadClasses['DatabaseMssqlold'] = $dir . 'DatabaseMssqlOld.php';
$wgAutoloadClasses['MSSQLOldField'] = $dir . 'DatabaseMssqlOld.php';