<?php
/**
 * SVGEdit extension: hooks
 * @copyright 2010 Brion Vibber <brion@pobox.com>
 */

class SVGEditHooks {
	/* Static Methods */

	/**
	 * BeforePageDisplay hook
	 *
	 * Adds the modules to the page
	 *
	 * @param $out OutputPage output page
	 * @param $skin Skin current skin
	 */
	public static function beforePageDisplay( $out, $skin ) {
		$title = $out->getTitle();
		if( $title && $title->getNamespace() == NS_FILE ) {
			$out->addModules('ext.svgedit.editButton');
		}
		return true;
	}
}
