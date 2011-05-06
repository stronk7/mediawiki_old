<?php
if (!defined('MEDIAWIKI')) die();
/**
 * Special page to retrieve profiling information about a particular
 * profiling task; acts as a convenient access point for casual queries
 *
 * @file
 * @ingroup Extensions
 * @author Rob Church <robchur@gmail.com>
 */

$wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'ProfileMonitor',
	'author' => 'Rob Church',
	'descriptionmsg' => 'profiling-desc',
	'url' => 'http://www.mediawiki.org/wiki/Extension:ProfileMonitor',
);

$dir = dirname(__FILE__) . '/';
$wgExtensionMessagesFiles['ProfileMonitor'] = $dir . 'ProfileMonitor.i18n.php';
$wgExtensionAliasesFiles['ProfileMonitor'] = $dir . 'ProfileMonitor.alias.php';
$wgAutoloadClasses['ProfileMonitor'] = $dir . 'ProfileMonitor.class.php';
$wgSpecialPages['Profiling'] = 'ProfileMonitor';
