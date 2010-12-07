<?php
/**
 * Special404 - provides a special page based 404 destination.
 *
 * @file
 * @ingroup Extensions
 * @author Daniel Friesen
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 * @link http://www.mediawiki.org/wiki/Extension:Special404 Documentation
 */

# Not a valid entry point, skip unless MEDIAWIKI is defined
if ( !defined( 'MEDIAWIKI' ) ) {
	echo "Special404 extension";
	exit( 1 );
}

$wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
	'author' => 'Daniel Friesen',
	'name' => 'Special404',
	'url' => 'http://www.mediawiki.org/wiki/Extension:Special404',
	'descriptionmsg' => 'special404-desc',
);

$wgExtensionMessagesFiles['Special404'] = dirname( __FILE__ ) . '/Special404.i18n.php';
$wgExtensionAliasesFiles['Special404'] = dirname( __FILE__ ) . '/Special404.alias.php';

$wgSpecialPages['Error404'] = array( 'Special404' );
$wgAutoloadClasses['Special404'] = dirname( __FILE__ ) . '/Special404_body.php';

