<?php
/**
 * Hooks for WebFonts extension
 *
 * @file
 * @ingroup Extensions
 */

// WebFonts hooks
class WebFontsHooks {

	/* Functions */
	public static function addConfig( &$vars ) {
		global $wgWebFontsEnabled;
		global $wgUser;
		if ( $wgUser->getOption( 'webfontsDisable' ) ) {
			// User disabled WebFonts
			return true;
		}
		$vars['wgWebFontsEnabled'] = $wgWebFontsEnabled;
		return true; // Hooks must return value
	}

	public static function addVariables( &$vars ) {
		global $wgWebFonts, $wgLang;
		$vars['wgWebFonts'] = (array)$wgWebFonts;
		$vars['wgWebFontsAvailable'] = self::getSchemes(); // Note: scheme names must be keys, not values
		return true;
	}

	public static function addModules( $out, $skin ) {
		global $wgUser;
		if ( $wgUser->getOption( 'webfontsDisable' ) ) {
			// User disabled WebFonts
			return true;
		}
		$out->addModules( 'webfonts' );
		return true; // Hooks must return value
	}

	/**
	 * Get the available schemes for the user and content language
	 * @return array( scheme name => module name )
	 */
	protected static function getSchemes() {
		global $wgLanguageCode, $wgLang, $wgWebFonts;
		$userlangCode = $wgLang->getCode();
		$contlangSchemes = isset( $wgWebFonts['languages'][$wgLanguageCode] ) ?
			$wgWebFonts['languages'][$wgLanguageCode] : array();
		$userlangSchemes = isset( $wgWebFonts['languages'][$userlangCode] ) ?
			$wgWebFonts['languages'][$userlangCode] : array();
		return $userlangSchemes + $contlangSchemes;
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

