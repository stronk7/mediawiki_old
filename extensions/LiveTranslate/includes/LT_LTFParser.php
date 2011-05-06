<?php

/**
 * Parser for custom Live Translate translation memory Format (LFT) data.
 *
 * @since 0.4
 *
 * @file LT_LTFParser.php
 * @ingroup LiveTranslate
 *
 * @licence GNU GPL v3
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class LTLTFParser extends LTTMParser {
	
	/**
	 * (non-PHPdoc)
	 * @see LTTMParser::parse()
	 */
	public function parse( $text ) {
		$tm = new LTTranslationMemory();
		
		$translationSets = array();
		
		$lines = explode( "\n", $text );
		$languages = array_map( 'trim', explode( ',', array_shift( $lines ) ) );
		
		foreach ( $lines as $line ) {
			$values = array_map( 'trim', explode( ',', $line ) );
			$tu = new LTTMUnit();
			
			foreach ( $values as $nr => $value ) {
				if ( array_key_exists( $nr, $languages ) ) {
					// Add the translation (or translations) (value, array) of the word in the language (key).
					$tu->addVariants( array( $languages[$nr] => array_map( 'trim', explode( '|', $value ) ) ) );
				}
			}
			
			$tm->addTranslationUnit( $tu );
		}
		
		return $tm;
	}	
	
}