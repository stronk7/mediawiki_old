<?php
/**
 * Hooks for WebFonts extension
 *
 * @file
 * @ingroup Extensions
 */

// WebFonts hooks
class WebFontsHooks {
	public static function addModules( $out, $skin ) {
		global $wgUser;

		if ( !$wgUser->getOption( 'webfontsDisable' ) ) {
			$out->addModules( 'webfonts' );
		}

		return true; // Hooks must return value
	}

	public static function addPreference( $user, &$preferences ) {
		// A checkbox in preferences to disable WebFonts
		$preferences['webfontsDisable'] = array(
			'type' => 'toggle',
			'label-message' => 'webfonts-disable-preference', // a system message
			'section' => 'rendering/advancedrendering', // under 'Advanced options' section of 'Editing' tab
		);

		return true;
	}
}
