<?php
/**
 * @author Ning
 *
 * @file
 * @ingroup WikiObjectModels
 */

class WOMMagicWordParser extends WOMTemplateParser {

	public function __construct() {
		parent::__construct();
		$this->m_parserId = WOM_PARSER_ID_MAGICWORD;
	}

	public function parseNext( $text, WikiObjectModelCollection $parentObj, $offset = 0 ) {
		$text = substr( $text, $offset );
		$r = preg_match( '/^\{\{([^{|}]+)\}\}/', $text, $m );

		if ( $r ) {
			$len = strlen( $m[0] );
			$magicword = trim( $m[1] );

			global $wgParser;
			if ( $wgParser->mVariables === null ) $wgParser->initialiseVariables();
			$id = $wgParser->mVariables->matchStartToEnd( $magicword );
			if ( $id !== false ) {
				return array( 'len' => $len, 'obj' => new WOMMagicWordModel( $magicword ) );
			}
		}
		return null;
	}
}
