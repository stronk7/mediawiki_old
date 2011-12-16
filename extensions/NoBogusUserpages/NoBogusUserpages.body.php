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

function efNoBogusUserpagesUserCan( $title, $user, $action, $result ) {
	global $wgVersion;
	// If we're not in the user namespace,
	// or we're not trying to edit,
	// or the page already exists,
	// or we are allowed to create bogus userpages
	// then just let MediaWiki continue. 
	if( $title->getNamespace() != NS_USER
	 || $action != 'create'
	 || $user->isAllowed('createbogususerpage') ) return true;
	$userTitle = explode( '/', $title->getText(), 2 );
	$userName = $userTitle[0];
	// Don't block the creation of IP userpages if the page is for a IPv4 or IPv6 page.
	if( User::isIP($userName) || User::isIPv6($userName) ) return true;
	// Check if the user exists, if it says the user is anon,
	// but we know we're not on an ip page, then the user does not exist.
	// And therefore, we block creation.
	$user = User::newFromName( $userName );
	if( $user->isAnon() ) {
		// Output a value proper for the version of MW we're on.
		$result = version_compare( $wgVersion, '1.12a', '<' )
			? false
			: 'badaccess-bogususerpage';
		return false;
	}
	return true;
}