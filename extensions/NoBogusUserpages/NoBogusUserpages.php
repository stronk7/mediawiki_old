<?php
 /**
 * NoBogusUserpages
 * @package NoBogusUserpages
 * @author Daniel Friesen (http://www.mediawiki.org/wiki/User:Dantman) <mediawiki@danielfriesen.name>
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 * 
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA
 */

if( !defined( 'MEDIAWIKI' ) ) die( "This is an extension to the MediaWiki package and cannot be run standalone." );

$wgExtensionCredits['other'][] = array (
	"name" => "NoBogusUserpages",
	"url" => "http://www.mediawiki.org/wiki/Extension:NoBogusUserpages",
	"author" => "[http://www.mediawiki.org/wiki/User:Dantman Daniel Friesen] [mailto:Daniel%20Friesen%20%3Cmediawiki@danielfriesen.name%3E <mediawiki@danielfriesen.name>]",
	"description" => "Restricts creation of userpages for which a user does not exist by those without rights to do so."
);

$wgAvailableRights[] = 'createbogususerpage';
$wgGroupPermissions['*'    ]['createbogususerpage'] = false;
$wgGroupPermissions['sysop']['createbogususerpage'] = true;

require_once( dirname(__FILE__).'/NoBogusUserpages.body.php' );
$wgExtensionFunctions[] = 'efNoBogusUserpagesSetup';

function efNoBogusUserpagesSetup() {
	global $wgMessageCache, $wgVersion;
	
	require_once( dirname(__FILE__).'/NoBogusUserpages.i18n.php' );
	$wgMessageCache->addMessagesByLang($messages);
	
	// Anything older than 1.6 wont' work.
	wfUseMW( '1.6' );
	if( version_compare( $wgVersion, '1.12a', '<' ) )
		// We are in pre 1.12, use the old hook.
		$wgHooks['userCan'][] = 'efNoBogusUserpagesUserCan';
	else
		// We are in 1.12, use the new hook which allows for a custom message.
		$wgHooks['getUserPermissionsErrors'][] = 'efNoBogusUserpagesUserCan';
}