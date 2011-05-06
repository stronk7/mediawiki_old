<?php
/**
 * An extension that adds a purge tab on each page
 *
 * @author Ævar Arnfjörð Bjarmason <avarab@gmail.com>
 * @copyright Copyright © 2005, Ævar Arnfjörð Bjarmason
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'Purge',
	'author' => 'Ævar Arnfjörð Bjarmason',
	'url' => 'http://www.mediawiki.org/wiki/Extension:Purge',
	'descriptionmsg' => 'purge-desc',
);

$dir = dirname( __FILE__ ) . '/';
$wgHooks['SkinTemplateContentActions'][] = 'PurgeAction::contentHook';
$wgExtensionMessagesFiles['Purge'] = $dir . 'Purge.i18n.php';

class PurgeAction {
	public static function contentHook( array &$content_actions ) {
		global $wgRequest, $wgTitle, $wgUser;

		if ( $wgTitle->getNamespace() !== NS_SPECIAL && $wgUser->isAllowed( 'purge' ) ) {
			$action = $wgRequest->getText( 'action' );

			$content_actions['purge'] = array(
				'class' => $action === 'purge' ? 'selected' : false,
				'text' => wfMsg( 'purge' ),
				'href' => $wgTitle->getLocalUrl( 'action=purge' )
			);
		}

		return true;
	}
}
