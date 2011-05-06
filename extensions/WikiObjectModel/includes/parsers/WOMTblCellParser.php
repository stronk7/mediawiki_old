<?php
/**
 * @author Ning
 *
 * @file
 * @ingroup WikiObjectModels
 */

class WOMTableCellParser extends WikiObjectModelParser {

	public function __construct() {
		parent::__construct();
		$this->m_parserId = WOM_PARSER_ID_TABLECELL;
	}

	// FIXME: what if table cell style uses parser function which contains 'return' or '|'
	public function parseNext( $text, WikiObjectModelCollection $parentObj, $offset = 0 ) {
		if ( !( $parentObj instanceof WOMTableModel ) ) return null;

		$lastLF = ( $text { $offset } == "\n" || ( $offset == 0 || $text { $offset - 1 } == "\n" ) );
		$text = substr( $text, $offset );
		
		$r = preg_match( '/^(!!|\|\||(\s*(\|\+|\|-|[!|])))/', $text, $m );
		if ( !$r ) return null;

		if ( isset( $m[2] ) && !$lastLF ) return null;
		
		$len = strlen( $m[0] );
		$text = substr( $text, $len );
		$r = preg_match( '/^[^\n|]*\|/', $text, $m1 );

		if ( $r && preg_match( '/\{\{/', $m1[0] ) ) {
			// FIXME: what if matched style contains '{{', just think it is table body
			return array( 'len' => strlen( $m[0] ), 'obj' => new WOMTableCellModel( $m[0] ) );
		}

		return array( 'len' => strlen( $m[0] ) + strlen( $m1[0] ), 'obj' => new WOMTableCellModel( $m[0] . $m1[0] ) );
	}

	public function isObjectClosed( $obj, $text, $offset ) {
		if ( !( $obj instanceof WOMTableCellModel ) ) return false;
		
		$lastLF = ( $text { $offset } == "\n" || ( $offset == 0 || $text { $offset - 1 } == "\n" ) );
		
		$text = substr( $text, $offset );
		if ( strlen( $text ) == 0 ) return 0;
		if ( $lastLF && preg_match( '/^(\s*[!|])/', $text ) ) return 0;
		if ( preg_match( '/^(!!)|(\|\|)/', $text ) ) return 0;

		return false;
	}
}
