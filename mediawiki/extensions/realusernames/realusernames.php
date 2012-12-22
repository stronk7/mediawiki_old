<?php

if (!defined( 'MEDIAWIKI')) {
    die('This file is a MediaWiki extension, it is not a valid entry point');
}

// Control if we want link text to be replaced by real usernames
$wgrealusernames_linktext = true;

// Control if we want link refs to be replaced by real usernames
$wgrealusernames_linkref = true;

// Autoloader info
$wgAutoloadClasses['realusernames'] = __DIR__ . '/realusernames.body.php';

// Hook to intercept all the Linker::link() calls
$wgHooks['LinkBegin'][] = 'realusernames::hookLinkBegin';

// Hook to intercept the personal urls (top-right links)
$wgHooks['PersonalUrls'][] = 'realusernames::hookPersonalUrls';

// Hook to intercept the parse and change some bits here and there
$wgHooks['ParserBeforeStrip'][] = 'realusernames::hookParser';
