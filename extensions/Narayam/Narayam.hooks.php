<?php

/**
 * Hooks for Narayam extension
 * @file
 * @ingroup Extensions
 */
class NarayamHooks {

	public static function addModules( $out, $skin ) {
		global $wgUser;
		if ( $wgUser->getOption( 'narayamDisable' ) ) {
			// User disabled Narayam
			return true;
		}
		$schemes = array_values( self::getSchemes () );
		if ( count( $schemes ) ) {
			$out->addModules( $schemes );
			$out->addModules( 'ext.narayam' );
		}
		return true;
	}

	public static function addConfig( &$vars ) {
		global $wgNarayamEnabledByDefault, $wgNarayamShortcutKey, $wgUser;
		if ( $wgUser->getOption( 'narayamDisable' ) ) {
			// User disabled Narayam
			return true;
		}
		$vars['wgNarayamEnabledByDefault'] = $wgNarayamEnabledByDefault;
		$vars['wgNarayamShortcutKey'] = $wgNarayamShortcutKey;

		return true;
	}

	public static function addVariables( &$vars ) {
		global $wgUser;
		if ( $wgUser->getOption( 'narayamDisable' ) ) {
			// User disabled Narayam
			return true;
		}
		$vars['wgNarayamAvailableSchemes'] = self::getSchemes(); // Note: scheme names must be keys, not values
		return true;
	}

	/**
	 * Get the available schemes for the user and content language
	 * @return array( scheme name => module name )
	 */
	protected static function getSchemes() {
		global $wgLanguageCode, $wgLang, $wgNarayamSchemes;
		$userlangCode = $wgLang->getCode();
		$contlangSchemes = isset( $wgNarayamSchemes[$wgLanguageCode] ) ?
				$wgNarayamSchemes[$wgLanguageCode] : array();
		$userlangSchemes = isset( $wgNarayamSchemes[$userlangCode] ) ?
				$wgNarayamSchemes[$userlangCode] : array();
		return $userlangSchemes + $contlangSchemes;
	}

	public static function addPreference( $user, &$preferences ) {
		// A checkbox in preferences to diable Narayam
		$preferences['narayamDisable'] = array(
			'type' => 'toggle',
			'label-message' => 'narayam-disable-preference', // a system message
			'section' => 'editing/advancedediting', // under 'Advanced options' section of 'Editing' tab
		);
		return true;
	}

}
