<?php

/**
 * Collapsmi
 * Enables collapsing and expanding content. a.k.a. Show/Hide
 * @version 1.0.0
 *
 * Copyright (C) 2011  Sami Islam <sami_islam@hotmail.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

if (!defined('MEDIAWIKI')) {
	echo('Collapsmi extension.\n');
	die(- 1);
}

/* Configuration */
// Credits
$wgExtensionCredits['parserhook'][] = array(
    'path' 				=> __FILE__,
    'name'				=> 'Collapsmi',
    'author'			=> 'Sami Islam',
    'url'    			=> 'http://www.mediawiki.org/wiki/Extension:Collapsmi',
    'description' 		=> 'Collapse / Expand text',
    'descriptionmsg' 	=> 'collapsmi-desc',
    'version'  			=> '1.0.0'
    );

$wgExtensionFunctions[] = 'wfIncludeJQuery';

// Include jQuery
function wfIncludeJQuery() {
	global $wgOut;
	$wgOut->includeJQuery();
}

// Shortcut to this extension directory
$dir = dirname(__FILE__) . '/';

// Internationalization
$wgExtensionMessagesFiles['collapsmi'] = $dir . 'Collapsmi.i18n.php';

// Register auto load for the special page class
$wgAutoloadClasses['Collapsmi'] = $dir . 'Collapsmi.body.php';
# Define a setup function
$wgHooks['ParserFirstCallInit'][] = 'Collapsmi::Init';

?>