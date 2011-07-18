<?php

/**
 * Static class for hooks handled by the Spark extension.
 * 
 * @since 0.1
 * 
 * @file Spark.hooks.php
 * @ingroup Spark
 * 
 * @licence GNU GPL v3+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
final class SparkHooks {
	
	/**
	 * Register the spark tag extension when the parser initializes.
	 * 
	 * @since 0.1
	 * 
	 * @param Parser $parser
	 * 
	 * @return true
	 */
	public static function onParserFirstCallInit( Parser &$parser ) {
		$parser->setHook( 'spark', __CLASS__ . '::onSparkRender' );
		return true;
	}
	
	/**
	 * @since 0.1
	 * 
	 * @param mixed $input
	 * @param array $args
	 * @param Parser $parser
	 * @param PPFrame $frame
	 */
	public static function onSparkRender( $input, array $args, Parser $parser, PPFrame $frame ) {
		static $loadedJs = false;
		
		if ( !$loadedJs ) {
			$parser->getOutput()->addModules( 'ext.spark' );
			$loadedJs = true;
		}
		
		$tag = new SparkTag( $args, $input );
		return $tag->render( $parser );
	}
	
}