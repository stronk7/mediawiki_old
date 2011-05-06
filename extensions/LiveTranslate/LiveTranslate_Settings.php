<?php

/**
 * File defining the settings for the Live Translate extension.
 * More info can be found at http://www.mediawiki.org/wiki/Extension:LiveTranslate#Configuration
 *
 *                          NOTICE:
 * Changing one of these settings can be done by copieng or cutting it,
 * and placing it in LocalSettings.php, AFTER the inclusion of Live Translate.
 *
 * @file LiveTranslate_Settings.php
 * @ingroup LiveTranslate
 *
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'Not an entry point.' );
}

# https://code.google.com/apis/console
$egGoogleApiKey = '';

# A list of languages that should be available to translate to.
$egLiveTranslateLanguages = array(
	$wgLanguageCode,
);

# Permission to mannage translation memories.
$wgGroupPermissions['sysop']['managetms'] = true;

# Default translation memory type.
# TMT_LTF, TMT_TMX, TMT_GCSV
$egLiveTranslateTMT = TMT_LTF;

# The namespaces that should show the translation control.
$egLTNSWithTranslationControl = array(
	              NS_MAIN => true,
	              NS_TALK => false,
	              NS_USER => true,
	         NS_USER_TALK => false,
	           NS_PROJECT => true,
	      NS_PROJECT_TALK => false,
	             NS_IMAGE => true,
	        NS_IMAGE_TALK => false,
	         NS_MEDIAWIKI => false,
	    NS_MEDIAWIKI_TALK => false,
	          NS_TEMPLATE => false,
	     NS_TEMPLATE_TALK => false,
	              NS_HELP => true,
	         NS_HELP_TALK => false,
	          NS_CATEGORY => true,
	     NS_CATEGORY_TALK => false,
);

# Show the control for namespaces not specified in $egLTNSWithTranslationControl?
$egLTUnknownNSShowControl = true;
