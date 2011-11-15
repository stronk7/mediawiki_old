<?php

/**
 * Hooks for Interactive block message
 *
 * @group Extensions
 */
class InteractiveBlockMessageHooks {
	/**
	 * @param $magicWords array
	 * @param $ln string (language)
	 * @return bool
	 */
	public static function magicWordVar( array &$magicWords, $ln ) {
		$magicWords['userblocked'] = array( 0, 'userblocked' );
		return true;
	}

	/**
	 * @param $vars array
	 * @return bool
	 */
	public static function magicWordSet( &$vars ) {
		$vars[] = 'userblocked';
		return true;
	}

	/**
	 * @param $parser Parser
	 * @param $varCache ??
	 * @param $index ??
	 * @param $ret string?
	 * @return bool
	 */
	public static function parserGetVariable( &$parser, &$varCache, &$index, &$ret ) {
		if ( $index != 'userblocked' ) {
			return true;
		}
		
		if ( $parser->getTitle()->getNamespace() != NS_USER && $parser->getTitle()->getNamespace() != NS_USER_TALK ) {
			$ret = 'unknown';
                        return true;
                }

		$user = User::newFromName( $parser->getTitle()->getBaseText() ); 
		if ($user instanceof User) {
			if ($user->isBlocked()) {
				$ret = 'true';
				return true;
			} else {
				$ret = 'false';
				return true;
			}
		} else {
			$ret = 'unknown';
			return true;
		}
	 	$ret = 'unknown';
		return true;
	}
}
