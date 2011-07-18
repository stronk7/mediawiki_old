<?php

/**
 * Class to render spark tags.
 * 
 * @since 0.1
 * 
 * @file Spark.class.php
 * @ingroup Spark
 * 
 * @licence GNU GPL v3+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
final class SparkTag {
	
	/**
	 * List of spark parameters.
	 * 
	 * @since 0.1
	 * 
	 * @var array
	 */
	protected $parameters;
	
	/**
	 * Constructor.
	 * 
	 * @since 0.1
	 * 
	 * @var string or null
	 */
	protected $contents;
	
	public function __construct( array $args, $contents ) {
		$this->parameters = $this->getSparkParameters( $args );
		$this->contents = $contents;
	}
	
	/**
	 * Renrder the spark div.
	 * 
	 * @since 0.1
	 * 
	 * @param Parser $parser
	 * 
	 * @return string
	 */
	public function render( Parser $parser ) {
		if ( array_key_exists( 'data-spark-query', $this->parameters ) ) {
			$query = htmlspecialchars( $this->parameters['data-spark-query'] );
			$query = str_replace( array( '&lt;', '&gt;' ), array( '<', '>' ), $query );
			unset( $this->parameters['data-spark-query'] );

			$html = '<div class="spark" data-spark-query="' . $query . '" ' . Html::expandAttributes( $this->parameters ) . ' >' .
						( is_null( $this->contents ) ? '' : htmlspecialchars( $this->contents ) ) .
					'</div>';

			return array( $parser->insertStripItem( $html, $parser->mStripState ), 'noparse' => true, 'isHTML' => true );
		}
		else {
			return Html::element( 'i', array(), wfMsg( 'spark-missing-query' ) );
		}
	}
	
	/**
	 * Get the spark parameters from a list of key value pairs.
	 * 
	 * @since 0.1
	 * 
	 * @param array $args
	 * 
	 * @return array
	 */
	protected function getSparkParameters( array $args ) {
		$parameters = array();
		
		foreach ( $args as $name => $value ) {
			if ( strpos( $name, 'data-spark-' ) === 0 ) {
				$parameters[$name] = $value;
			}
		}
		
		return $parameters;
	}
	
}