<?php
/**
 * This extension defines navigation in subpages.
 *
 * Defines the following functions:
 * - PREVPAGENAME		(get prev page)
 * - PREVPAGENAMEE		(get prev page encode)
 * - NEXTPAGENAME		(get next page)
 * - NEXTPAGENAMEE		(get next page encode)
 * - ROOTPAGENAME		(get root page)
 * - ROOTPAGENAMEE		(get root page encode)
 * - CHAPTERNAME		(get root page)
 * - CHAPTERNAMEE		(get root page encode)
 * @addtogroup Extensions
 * @author Raylton P. Sousa <raylton.sousa@gmail.com>
 * @author Helder.wiki
 * @license GNU General Public License 3.0 or later
**
**
 This program is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 3 of the License, or
 (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License along
 with this program; if not, write to the Free Software Foundation, Inc.,
 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 http://www.gnu.org/copyleft/gpl.html
*/

if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'This file is a MediaWiki extension, it is not a valid entry point' );
}
$dir = dirname( __FILE__ );
$wgAutoloadClasses['BookManagerCore'] = $dir . '/BookManager.body.php';

$wgAutoloadClasses['BookManagerNavBar'] = $dir . '/BookManager.body.php';
$wgAutoloadClasses['PrintVersion'] = $dir . '/BookManager.body.php';
$wgExtensionMessagesFiles['BookManager'] = $dir . '/BookManager.i18n.php';
$wgExtensionMessagesFiles['BookManagerMagic'] = $dir . '/BookManager.i18n.magic.php';
$wgExtensionAliasesFiles['BookManager'] = $dir . '/BookManager.alias.php';
$wgSpecialPages['PrintVersion'] = 'PrintVersion';
$wgSpecialPageGroups['PrintVersion'] = 'other';



/**** extension basics ****/
$wgExtensionCredits['parserhook'][] = array(
	'path'		=> __FILE__,
	'name'		=> 'BookManager',
	'version'	=>  BookManagerCore::VERSION,
	'author'	=>  array( 'Raylton P. Sousa', 'Helder.wiki' ),
	'url'		=> 'http://www.mediawiki.org/wiki/Extension:BookManager',
	'descriptionmsg' => 'bookmanager-desc'
);
/* Add CSS and JS */
$wgResourceModules['ext.BookManager'] = array(
	'scripts'	=> array( 'jquery.hotkeys.js', 'bookmanager.js' ),
	'styles'	=> 'bookmanager.css',
	'messages'	=> array( 'BookManager', 'BookManager-top', 'BookManager-bottom' ),
	'dependencies'	=> array( 'jquery', 'mediawiki.util' ),
	'localBasePath'	=> $dir,
	'remoteExtPath'	=> 'BookManager'
);
$wgBookManagerNamespaces = array( NS_MAIN );
$wgBookManagerVariables = true ;
$wgBookManagerNavBar = true;
/* Copyied from extensions/Collection/Collection.php */
/** Namespace for "community books" */
$wgBookManagerPrefixNamespace = NS_PROJECT;
/**** Register magic words ****/
if ( $wgBookManagerVariables ) {
$wgAutoloadClasses['BookManagerVariables'] = $dir . '/BookManager.body.php';

$wgHooks['ParserFirstCallInit'][] = 'BookManagerVariables::register';

$wgHooks['MagicWordwgVariableIDs'][] = 'BookManagerVariables::DeclareVarIds';

$wgHooks['ParserGetVariableValueSwitch'][] = 'BookManagerVariables::AssignAValue';
}
/**** Navbar ****/
$wgHooks['BeforePageDisplay'][] = 'BookManagerNavBar::addNavBar';


