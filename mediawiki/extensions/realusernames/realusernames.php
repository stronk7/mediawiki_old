<?php

if (!defined( 'MEDIAWIKI')) {
    die('This file is a MediaWiki extension, it is not a valid entry point');
}

// Credits
$wgExtensionCredits['parserhook'][] = array(
   'path' => __FILE__,
   'name' => 'Real Usernames',
   'description' => 'Replace usernames by real usernames (almost) everywhere.',
   'version' => '0.99.23',
   'author' => 'Eloy Lafuente (stronk7)',
   'license-name' => '3-Clause BSD',
   'url' => 'http://stronk7.com/code/realusernames',
);

// Defaults
// Control if we want link text to be replaced by real usernames
$wgrealusernames_linktext = true;
// Control if we want link refs to be replaced by real usernames
$wgrealusernames_linkref = true;
// Control if some roles (those having perms to "block" users) should
// be able to see the username together with the realname.
$wgrealusernames_append_username = true;

// Autoloader info
$wgAutoloadClasses['realusernames'] = __DIR__ . '/realusernames.body.php';

// Hook to intercept all the Linker::link() calls
$wgHooks['LinkBegin'][] = 'realusernames::hookLinkBegin';

// Hook to intercept the personal urls (top-right links)
$wgHooks['PersonalUrls'][] = 'realusernames::hookPersonalUrls';

// Hook to intercept the parse and change some bits here and there
$wgHooks['ParserBeforeStrip'][] = 'realusernames::hookParser';
