<?php

/**
 * File defining the settings for the Push extension.
 * More info can be found at http://www.mediawiki.org/wiki/Extension:Push#Settings
 *
 *                          NOTICE:
 * Changing one of these settings can be done by copieng or cutting it,
 * and placing it in LocalSettings.php, AFTER the inclusion of Maps.
 *
 * @file Push_Settings.php
 * @ingroup Push
 *
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'Not an entry point.' );
}

$egPushTargets = array();

$wgGroupPermissions['*']['push'] = true;
$wgGroupPermissions['sysop']['pushadmin'] = true;

$egPushShowTab = true;
