<?php

# This file was automatically generated by the MediaWiki installer.
# If you make manual changes, please keep track in case you need to
# recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.

# If you customize your file layout, set $IP to the directory that contains
# the other MediaWiki files. It will be used as a base to locate files.
if( defined( 'MW_INSTALL_PATH' ) ) {
	$IP = MW_INSTALL_PATH;
} else {
	$IP = dirname( __FILE__ );
}

$path = array( $IP, "$IP/includes", "$IP/languages" );
set_include_path( implode( PATH_SEPARATOR, $path ) . PATH_SEPARATOR . get_include_path() );

require_once( "$IP/includes/DefaultSettings.php" );

# Debugging, logging, profiling options (disable them for prod)
error_reporting((E_ALL | E_STRICT));
#$wgShowExceptionDetails = true;
#$wgShowSQLErrors = true;
#$wgDebugDumpSql  = true;
#$wgDebugLogFile = $IP . '/images_test/debug.txt';
#$wgProfileLimit = 1.0; # requires StartProfiler.php created and valid

# If PHP's memory limit is very low, some operations may fail.
# (disabled once we have migrated to new server. Eloy 20110414)
# ini_set( 'memory_limit', '50M' );

if ( $wgCommandLineMode ) {
	if ( isset( $_SERVER ) && array_key_exists( 'REQUEST_METHOD', $_SERVER ) ) {
		die( "This script must be run from the command line\n" );
	}
}
## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

# !
# Some options have been moved to the top of this file so they can be overridden per wiki
# !
# MySQL table options to use during installation or update
#$wgDBTableOptions   = "TYPE=MyISAM"; // old MySQL 4 directive
$wgDBTableOptions = "ENGINE=MyISAM, DEFAULT CHARSET=latin1"; // new MySQL 5 directive
$wgDBtransactions = false; // set to true for InnoDB
$wgUseFileCache   = false; # Disable file cache for this wiki (disabled after migrating to new server (now using memcached). Eloy 20110414)

// DEFINE DIFFERENT SETTINGS FOR DIFFERENT SITES
// Talk to Jordan if your confused by any of this, but dont mess with it (grrrrr!)

// Begin wizardy!
if (php_sapi_name() != 'cli') {
    // Called from browser
    if (isset($_SERVER['REQUEST_URI'])) {
        // Try to determine requested version
        $langoffset = 0;
        if (substr($_SERVER['REQUEST_URI'], 1, 2) === '19') {
            $mdocsver = '19';
            $mlogover = '19';
        }else if (substr($_SERVER['REQUEST_URI'], 1, 2) === '20') {
            $mdocsver = '20';
            $mlogover = '20';
        }else if (substr($_SERVER['REQUEST_URI'], 1, 7) === 'archive') {
            $langoffset = 5; // pad with an extra 5 chars to look for langs in the next block
            $mdocsver = '19'; // all archived langs are 19docs
            $wgReadOnly="This translation has been archived and is in Read-Only mode."; // Cant touch this! do do do do do
            $mlogover = 'archive';
        }else {
             // default version to serve. this should always be the newest version (mod_rewrite handles the rest)
            $mdocsver = '20';
            $mlogover = '20';
        }

        /// Try to determine requested lang or test|dev
        /// If the third character is one underscore, get 5 chars
        /// for compound langs (pt_br...), else get just two chars (en, es...)
        if (substr($_SERVER['REQUEST_URI'], 1, 4) === 'test') {
            $callpath = 'test';                                 // test
            $mlogover = 'test';
        } else if (substr($_SERVER['REQUEST_URI'], 1, 3) === 'dev') {
            $callpath = 'dev';                                  // dev
            $mlogover = 'dev';
        } else if (substr($_SERVER['REQUEST_URI'], 6+$langoffset, 1) === '_') { 
            $callpath = substr($_SERVER['REQUEST_URI'], 4+$langoffset, 5);      // pt_br ...
        } else {
            $callpath = substr($_SERVER['REQUEST_URI'], 4+$langoffset, 2);      // en, es ...
        } 
    }else {
        // Somehow called from browser without a request uri, should never happen so force 20/en
        $mdocsver = '20';
        $callpath = 'en';
        $mlogover = '20';
    }
}else {
    // Called from CLI
    unset($callpath,$mdocsver); // pesky ninjas...
    if (isset($clicallpath)) {
        $callpath = $clicallpath;
        echo "setting callpath to $clicallpath\n";
    }
    if (isset($climdocsver)) {
        $mdocsver = $climdocsver;
        echo "setting mdocsver to $climdocsver\n";
    }
    if (!isset($callpath) || !isset($mdocsver)) {
        // Only CLI scripts that havnt set $climdocsver or $clicallpath should get this far.
        echo "\n\nCould not determine version and/or lang information\n";
        echo "Please set \$climdocsver (19|20|archive) and \$clicallpath (dev|test|en|pt_br|you|get|the|idea) then run your script again.\n\n";
        exit;
    }
}

// Try to set skin via user agent (not mandatory)
// Some browsers just dont send the user agent and this is acceptable according to RFC
// this avoids errors in apache error_log and also catches CLI requests.
if (isset($_SERVER['HTTP_USER_AGENT'])) {
    if (preg_match("/iphone/i", $_SERVER['HTTP_USER_AGENT'])) {
        $wgDefaultSkin = 'wptouch';
    } elseif (preg_match("/android/i", $_SERVER['HTTP_USER_AGENT'])) {
        $wgDefaultSkin = 'wptouch';
    } elseif (preg_match("/webos/i", $_SERVER['HTTP_USER_AGENT'])) {
        $wgDefaultSkin = 'wptouch';
    } elseif (preg_match("/ipod/i", $_SERVER['HTTP_USER_AGENT'])) {
        $wgDefaultSkin = 'wptouch';
    } else {
        $wgDefaultSkin = 'moodledocs';
    }
}else {
    $wgDefaultSkin = 'moodledocs';
}
// End wizardy, onto business.


switch ($callpath) {
    case 'ar':
	// This lang has been archived (Option 3)
        $wgLanguageCode     = 'ar';
        $wgLanguageName     = 'ﺎﻠﻋﺮﺒﻳﺓ';
        $wgScriptPath       = '/archive/ar';
        $wgDBname           = $mdocsver."docs_ar";
        $wgUploadPath       = "$wgScriptPath/images_ar";
        $wgUploadDirectory  = "$IP/".$mdocsver."images/images_ar";
        #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
    break;

    /* language 'be' (Belarusian) has been deleted (option 4) - it exists on disk but will not get served
    case 'be':
        $wgLanguageCode     = 'be';
        $wgLanguageName     = 'Беларуская';
        $wgScriptPath       = '/'.$mdocsver.'/be';
        $wgDBname           = $mdocsver."docs_be";
        $wgUploadPath       = "$wgScriptPath/images_be";
        $wgUploadDirectory  = "$IP/".$mdocsver."images/images_be";
        #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
    break; */

    case 'ca':
	// This lang has been archived (Option 3)
        $wgLanguageCode     = 'ca';
        $wgLanguageName     = 'Català';
        $wgScriptPath       = '/archive/ca';
        $wgDBname           = $mdocsver."docs_ca";
        $wgUploadPath       = "$wgScriptPath/images_ca";
        $wgUploadDirectory  = "$IP/".$mdocsver."images/images_ca";
        #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
    break;

    case 'cs':
	// This lang has been archived (Option 3)
        $wgLanguageCode     = 'cs';
        $wgLanguageName     = 'Čeština';
        $wgScriptPath       = '/archive/cs';
        $wgDBname           = $mdocsver."docs_cs";
        $wgUploadPath       = "$wgScriptPath/images_cs";
        $wgUploadDirectory  = "$IP/".$mdocsver."images/images_cs";
        #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
    break;

    case 'da':
	// This lang has been archived (Option 3)
        $wgLanguageCode     = 'da';
        $wgLanguageName     = 'Dansk';
        $wgScriptPath       = '/archive/da';
        $wgDBname           = $mdocsver."docs_da";
        $wgUploadPath       = "$wgScriptPath/images_da";
        $wgUploadDirectory  = "$IP/".$mdocsver."images/images_da";
        #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
    break;

    case 'de':
        $wgLanguageCode     = 'de';
        $wgLanguageName     = 'Deutsch';
        $wgScriptPath       = '/'.$mdocsver.'/de';
        $wgDBname           = $mdocsver."docs_de";
        $wgUploadPath       = "$wgScriptPath/images_de";
        $wgUploadDirectory  = "$IP/".$mdocsver."images/images_de";
	if ($mdocsver === "20") {
	  /// 20docs_de is InnoDB with binary charset, 19docs_de is MyISAM with latin1 charset (set by default at the top of this file.)
	  $wgDBTableOptions   = "ENGINE=InnoDB, DEFAULT CHARSET=binary";
	  $wgDBtransactions   = true;
	}
        #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
    break;

    /* language 'el' (Greek) has been deleted (option 4) - it exists on disk but will not get served
    case 'el':
        $wgLanguageCode     = 'el';
        $wgLanguageName     = 'Ελληνικά';
        $wgScriptPath       = '/'.$mdocsver.'/el';
        $wgDBname           = $mdocsver."docs_el";
        $wgUploadPath       = "$wgScriptPath/images_el";
        $wgUploadDirectory  = "$IP/".$mdocsver."images/images_el";
        #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
    break; */

    case 'es':
        $wgLanguageCode     = 'es';
        $wgLanguageName     = 'Español';
        $wgScriptPath       = '/'.$mdocsver.'/es';
        $wgDBname           = $mdocsver."docs_es";
        $wgUploadPath       = "$wgScriptPath/images_es";
        $wgUploadDirectory  = "$IP/".$mdocsver."images/images_es";
        #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
    break;

    case 'eu':
        $wgLanguageCode     = 'eu';
        $wgLanguageName     = 'Euskara';
        $wgScriptPath       = '/'.$mdocsver.'/eu';
        $wgDBname           = $mdocsver."docs_eu";
        $wgUploadPath       = "$wgScriptPath/images_eu";
        $wgUploadDirectory  = "$IP/".$mdocsver."images/images_eu";
        #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
    break;

    case 'fi':
	// This lang has been archived (Option 3)
        $wgLanguageCode     = 'fi';
        $wgLanguageName     = 'Suomi';
        $wgScriptPath       = '/archive/fi';
        $wgDBname           = $mdocsver."docs_fi";
        $wgUploadPath       = "$wgScriptPath/images_fi";
        $wgUploadDirectory  = "$IP/".$mdocsver."images/images_fi";
        #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
    break;

    case 'fr':
        $wgLanguageCode     = 'fr';
        $wgLanguageName     = 'Français';
        $wgScriptPath       = '/'.$mdocsver.'/fr';
        $wgDBname           = $mdocsver."docs_fr";
        $wgUploadPath       = "$wgScriptPath/images_fr";
        $wgUploadDirectory  = "$IP/".$mdocsver."images/images_fr";
        #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
    break;

    case 'hr':
        $wgLanguageCode     = 'hr';
        $wgLanguageName     = 'Hrvatski';
        $wgScriptPath       = '/'.$mdocsver.'/hr';
        $wgDBname           = $mdocsver."docs_hr";
        $wgUploadPath       = "$wgScriptPath/images_hr";
        $wgUploadDirectory  = "$IP/".$mdocsver."images/images_hr";
        #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
    break;

    case 'hu':
	// This lang has been archived (Option 3)
        $wgLanguageCode     = 'hu';
        $wgLanguageName     = 'Magyar';
        $wgScriptPath       = '/archive/hu';
        $wgDBname           = $mdocsver."docs_hu";
        $wgUploadPath       = "$wgScriptPath/images_hu";
        $wgUploadDirectory  = "$IP/".$mdocsver."images/images_hu";
        #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
    break;

    case 'is':
        $wgLanguageCode     = 'is';
        $wgLanguageName     = 'Íslenska';
        $wgScriptPath       = '/'.$mdocsver.'/is';
        $wgDBname           = $mdocsver."docs_is";
        $wgUploadPath       = "$wgScriptPath/images_is";
        $wgUploadDirectory  = "$IP/".$mdocsver."images/images_is";
        #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
    break;

    case 'it':
	// This lang has been archived (Option 3)
        $wgLanguageCode     = 'it';
        $wgLanguageName     = 'Italiano';
        $wgScriptPath       = '/archive/it';
        $wgDBname           = $mdocsver."docs_it";
        $wgUploadPath       = "$wgScriptPath/images_it";
        $wgUploadDirectory  = "$IP/".$mdocsver."images/images_it";
        #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
    break;

    case 'ja':
        $wgLanguageCode     = 'ja';
        $wgLanguageName     = '日本語';
        $wgScriptPath       = '/'.$mdocsver.'/ja';
        $wgDBname           = $mdocsver."docs_ja";
        $wgUploadPath       = "$wgScriptPath/images_ja";
        $wgUploadDirectory  = "$IP/".$mdocsver."images/images_ja";
        #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
    break;

    case 'ko':
        $wgLanguageCode     = 'ko';
        $wgLanguageName     = '한국어';
        $wgScriptPath       = '/'.$mdocsver.'/ko';
        $wgDBname           = $mdocsver."docs_ko";
        $wgUploadPath       = "$wgScriptPath/images_ko";
        $wgUploadDirectory  = "$IP/".$mdocsver."images/images_ko";
        #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
    break;

    case 'nl':
	// This lang has been archived (Option 3)
        $wgLanguageCode     = 'nl';
        $wgLanguageName     = 'Nederlands';
        $wgScriptPath       = '/archive/nl';
        $wgDBname           = $mdocsver."docs_nl";
        $wgUploadPath       = "$wgScriptPath/images_nl";
        $wgUploadDirectory  = "$IP/".$mdocsver."images/images_nl";
        #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
    break;

    case 'no':
	// This lang has been archived (Option 3)
        $wgLanguageCode     = 'no';
        $wgLanguageName     = 'Norsk';
        $wgScriptPath       = '/archive/no';
        $wgDBname           = $mdocsver."docs_no";
        $wgUploadPath       = "$wgScriptPath/images_no";
        $wgUploadDirectory  = "$IP/".$mdocsver."images/images_no";
        #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
    break;

    case 'pl':
	// This lang has been archived (Option 3)
        $wgLanguageCode     = 'pl';
        $wgLanguageName     = 'Polski';
        $wgScriptPath       = '/archive/pl';
        $wgDBname           = $mdocsver."docs_pl";
        $wgUploadPath       = "$wgScriptPath/images_pl";
        $wgUploadDirectory  = "$IP/".$mdocsver."images/images_pl";
        #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
    break;

    case 'pt':
	// This lang has been archived (Option 3)
        $wgLanguageCode     = 'pt';
        $wgLanguageName     = 'Português';
        $wgScriptPath       = '/archive/pt';
        $wgDBname           = $mdocsver."docs_pt";
        $wgUploadPath       = "$wgScriptPath/images_pt";
        $wgUploadDirectory  = "$IP/".$mdocsver."images/images_pt";
        #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
    break;

    case 'pt_br':
       	$wgLanguageCode     = 'pt_br';
        $wgLanguageName     = 'Português Brasil';
        $wgScriptPath       = '/'.$mdocsver.'/pt_br';
        $wgDBname           = $mdocsver."docs_pt_br";
        $wgUploadPath       = "$wgScriptPath/images_pt_br";
        $wgUploadDirectory  = "$IP/".$mdocsver."images/images_pt_br";
        #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
    break;

    case 'ru':
	// This lang has been archived (Option 3)
        $wgLanguageCode     = 'ru';
        $wgLanguageName     = 'Русский';
        $wgScriptPath       = '/archive/ru';
        $wgDBname           = $mdocsver."docs_ru";
        $wgUploadPath       = "$wgScriptPath/images_ru";
        $wgUploadDirectory  = "$IP/".$mdocsver."images/images_ru";
        #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
    break;

    /* language 'si' (Sinhala) has been deleted (option 4) - it exists on disk but will not get served
    case 'si':
        $wgLanguageCode     = 'si';
        $wgLanguageName     = 'සිංහල';
        $wgScriptPath       = '/'.$mdocsver.'/si';
        $wgDBname           = $mdocsver."docs_si";
        $wgUploadPath       = "$wgScriptPath/images_si";
        $wgUploadDirectory  = "$IP/".$mdocsver."images/images_si";
        #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
    break; */

    case 'sk':
	// This lang has been archived (Option 3)
        $wgLanguageCode     = 'sk';
        $wgLanguageName     = 'Slovenčina';
        $wgScriptPath       = '/archive/sk';
        $wgDBname           = $mdocsver."docs_sk";
        $wgUploadPath       = "$wgScriptPath/images_sk";
        $wgUploadDirectory  = "$IP/".$mdocsver."images/images_sk";
        #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
    break;

    /* language 'sl' (Slovenian) has been deleted (option 4) - it exists on disk but will not get served
    case 'sl':
        $wgLanguageCode     = 'sl';
        $wgLanguageName     = 'Slovenščina';
        $wgScriptPath       = '/'.$mdocsver.'/sl';
        $wgDBname           = $mdocsver."docs_sl";
        $wgUploadPath       = "$wgScriptPath/images_sl";
        $wgUploadDirectory  = "$IP/".$mdocsver."images/images_sl";
        #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
    break; */

    /* language 'sv' (Swedish) has been deleted (option 4) - it exists on disk but will not get served
    case 'sv':
        $wgLanguageCode     = 'sv';
        $wgLanguageName     = 'Svenska';
        $wgScriptPath       = '/'.$mdocsver.'/sv';
        $wgDBname           = $mdocsver."docs_sv";
        $wgUploadPath       = "$wgScriptPath/images_sv";
        $wgUploadDirectory  = "$IP/".$mdocsver."images/images_sv";
        #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
    break; */

    case 'zh':
	// This lang has been archived (Option 3)
        $wgLanguageCode     = 'zh';
        $wgLanguageName     = '中文';
        $wgScriptPath       = '/archive/zh';
        $wgDBname           = $mdocsver."docs_zh";
        $wgUploadPath       = "$wgScriptPath/images_zh";
        $wgUploadDirectory  = "$IP/".$mdocsver."images/images_zh";
        #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
    break;

    case 'test':
        $wgLanguageCode     = 'en';
        $wgLanguageName     = 'Test English';
        $wgScriptPath       = '/test';
        $wgDBname           = "19docs_test";
        $wgUploadPath       = "$wgScriptPath/images_test";
        $wgUploadDirectory  = "$IP/20images/images_test";
        $wgExtraNamespaces = array(100 => "Development", 101 => "Development_talk", 102 => "Obsolete");
        #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
    break;

   case 'dev':
        $wgLanguageCode     = 'en';
        $wgLanguageName     = 'Development';
        $wgScriptPath       = '/dev';
        $wgDBname           = "docs_development";
        $wgUploadPath       = "$wgScriptPath/images_dev";
        $wgUploadDirectory  = "$IP/20images/images_dev";
        #$wgExtraNamespaces = array(100 => "Development", 101 => "Development_talk", 102 => "Obsolete");
	$wgDBTableOptions   = "ENGINE=InnoDB, DEFAULT CHARSET=binary";
	$wgDBtransactions   = true;
        #$wgReadOnly="We are upgrading Moodle Developer Docs, please be patient. This wiki will be back in a few hours.";
    break;

    case 'en':
        $wgLanguageCode     = 'en';
        $wgLanguageName     = 'English';
        $wgScriptPath       = '/'.$mdocsver.'/en';
        $wgDBname           = $mdocsver."docs_en";
        $wgUploadPath       = "$wgScriptPath/images_en";
        $wgUploadDirectory  = "$IP/".$mdocsver."images/images_en";
        $wgExtraNamespaces = array(100 => "Development", 101 => "Development_talk", 102 => "Obsolete");
        #$wgReadOnly="We are upgrading MoodleDocs, please be patient. This wiki will be back in a few hours.";
    break;

    default:  // any unexpected input
        // Check to see if we were called from CLI
        if (php_sapi_name() === 'cli') {
            echo "You passed an unknown lang, please set \$clicallpath to something valid\n";
        }else {
            // Redirect to english docs
            header("Location: /error404.html");
        }
        exit;
    break;
}

// The following is common to all sites for now
$wgSitename         = "MoodleDocs";
$wgDBtype           = "mysql";
$wgDBserver         = 'localhost';
$wgDBuser           = "docs";
$wgDBpassword       = "bhfd674b34hfd";
$wgDBprefix         = "";

## Don't show the IP if not logged-in
$wgShowIPinHeader   = false;

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
$wgScriptExtension  = ".php";

## For more information on customizing the URLs please see:
## http://www.mediawiki.org/wiki/Manual:Short_URL

$wgEnableEmail      = true; /// Enable again once upgrade is finished
$wgEnableUserEmail  = false;

$wgEmergencyContact = "noreply@moodle.org";
$wgPasswordSender = "noreply@docs.moodle.org";

## For a detailed description of the following switches see
## http://www.mediawiki.org/wiki/Extension:Email_notification 
## and http://www.mediawiki.org/wiki/Extension:Email_notification
## There are many more options for fine tuning available see
## /includes/DefaultSettings.php
## UPO means: this is also a user preference option
$wgEnotifUserTalk = true; # UPO
$wgEnotifWatchlist = true; # UPO
$wgEmailAuthentication = true;

# Experimental charset support for MySQL 4.1/5.0.
$wgDBmysql5 = false;

## Shared memory settings
# (we are using APC after migration to new server. Eloy 20110414)
# (switched to MEMCACHED because of problems with APC sharedmem. Eloy 20110415)
$wgMainCacheType = CACHE_MEMCACHED;
$wgMemCachedServers = array("127.0.0.1:11211");
$wgFileCacheDirectory = "$IP/cache$wgScriptPath";
$wgCacheDirectory = "$IP/cache$wgScriptPath"; // data cache for this wiki (messages)

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads       = true;
$wgUseImageResize      = true;
# $wgUseImageMagick = true;
# $wgImageMagickConvertCommand = "/usr/bin/convert";
## Any extension not in this list will show warning
$wgFileExtensions = array( 'png', 'gif', 'jpg', 'jpeg', 'dia');

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
# $wgHashedUploadDirectory = false;

## If you have the appropriate support software installed
## you can enable inline LaTeX equations:
$wgUseTeX           = true;
$wgMathPath         = "{$wgUploadPath}/math";
$wgMathDirectory    = "{$wgUploadDirectory}/math";
$wgTmpDirectory     = "{$wgUploadDirectory}/tmp";

$wgLocalInterwiki   = $wgSitename;

$wgProxyKey = "b9bd2fa2b057164cd46f1fe0b10b890f16941918b0e179a1a29baa03a7daaaa6";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'standard', 'nostalgia', 'cologneblue', 'monobook':
# we now set skin when determining version number, see further up this file
#$wgDefaultSkin = 'moodledocs';

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgEnableCreativeCommonsRdf = true;
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "http://docs.moodle.org/en/License";
$wgRightsText = "GNU Public License";
$wgRightsIcon = "";
# $wgRightsCode = ""; # Not yet used

$wgDiff3 = "/usr/bin/diff3";

# When you make changes to this configuration file, this will make
# sure that cached pages are cleared.
$wgCacheEpoch = max( $wgCacheEpoch, gmdate( 'YmdHis', @filemtime( __FILE__ ) ) );

/// Some MoodleDocs settings

#$wgLogo = "/pix/moodle-docs.gif";
$wgLogo = '/prodwiki/skins/moodledocs/wiki.png';
// Select a logo that represents this skin
if (!empty($mlogover)) {
    $wgLogo = "/prodwiki/skins/moodledocs/images/version.{$mlogover}.png";
}

$wgGroupPermissions['user']['move'] = false;  ///Added by Eloy (Helen request): 25/01/2006
$wgGroupPermissions['*']['edit'] = false;     ///Added by Eloy (Helen request): 25/01/2006
$wgGroupPermissions['*']['createaccount'] = false;     ///Added by Eloy: 06/04/2008 (prevent manual accounts)

# Use Moodle Authentication
require_once( 'extensions/AuthMoodle.php' );
$wgAuth = new AuthMoodle();
$wgAuth->setAuthMoodleTablePrefix('');
$wgAuth->setAuthMoodleDBServer('server11.moodle.com');
$wgAuth->setAuthMoodleDBName('moodle');
$wgAuth->setAuthMoodleUser('docs');
$wgAuth->setAuthMoodlePassword('gnjfngjnhjgnhjg');
$wgAuth->setAuthMoodleSalt('ngjfng8h5ntn58 yu8nuv8yhuvnhyuv6hyu8hu6y');
$wgAuth->setAuthMoodleMnethostid(10);

# Offuscate email addresses
# Disabled, this wasn't processing templates and friends (Eloy, 20110315)
# TODO: Use a proper extension to obfuscate email addresses
# (see the TrackerLinks.php one for a good example)
#require_once( 'extensions/MungeEmail.php' );

# Autolink Tracker numbers
require_once('extensions/TrackerLinks.php');

# Unmerged Files report
# Disabled, not needed anymore (Eloy, 20110412)
# require_once('extensions/UnmergedFilesReport.php');

# Use Geshi Syntax Highlight (only if running from web, breaks CLI maintenance scripts)
if(php_sapi_name() != 'cli') {
    require_once('extensions/GeshiCodeTag.php');
}

# Use MediawikiPlayer
require_once('extensions/MediawikiPlayer/MediawikiPlayer.php');

# Use multi-db interwiki links
require_once('extensions/InterWiki/InterWiki.php');

# We don't enforce Capital links, images... in MoodleDocs (why?) 
$wgCapitalLinks = false;

# We use database custom messages
$wgUseDatabaseMessages = true;

# Seconds the RecentChanges feeds will be cached
$wgFeedCacheTimeout = 60;

# RealNames stup starts here
$wgAllowRealName=true; //The official switch

# This are the five controling our userRealName hack, by disabling them
# you'll get standard mediawiki behaviour
$wgRealNamesEverywhere=true; //To replace all usernames by userrealnames
$wgRealNamesPreventEdition=true; //To prevent manual edition of userrealnames
$wgEmailPreventEdition=true; //To prevent manual edition of email addresses
$wgSignaturesDisabled=true; //To disable signatures
$wgEmailAdminName='MoodleDocs'; //By default mediawiki uses a harcoded 'WikiAdmin'
$wgEnotifUseRealName=true; // To send editor real names on mailouts
$wgPromoteEdition=true; //By default mediawiki doesn't show the edit tab for not-logged users. Enable it (redirecting to login) with this setting.

# Enable AJAX search suggestions
#$wgEnableMWSuggest = true;

# Reduce jobs queue from 1:1 (default) downto 5%
$wgJobRunRate = 0.05;

# Enable nice (without index.php use nor title parameter) URLs
$wgArticlePath = "$wgScriptPath/$1";
$wgUsePathInfo = false;

# We want to see the installed hooks in the Version page
$wgSpecialVersionShowHooks = true;

# Allow direct embedding of images from certain places
$wgAllowExternalImagesFrom = array('http://tracker.moodle.org/', 'http://moodle.org/');


?>
