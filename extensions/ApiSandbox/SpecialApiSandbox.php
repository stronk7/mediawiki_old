<?php

class SpecialApiSandbox extends SpecialPage {

	/**
	 * @var ApiQuery
	 */
	private $apiQuery;
	/**
	 * Constructor
	 */
	public function __construct() {
		parent::__construct( 'ApiSandbox', '', true );
	}

	/**
	 * Main execution function
	 * @param $par Parameters passed to the page
	 */
	public function execute( $par ) {
		global $wgEnableAPI;

		$out = $this->getContext()->getOutput();

		if ( !$wgEnableAPI ) {
			$out->showErrorPage( 'error', 'apisb-api-disabled' );
		}
		
		$this->setHeaders();
		$out->addModules( 'ext.apiSandbox' );

		$out->addHTML( '<noscript>' . wfMessage( 'apisb-no-js' )->parse() . '</noscript>
<div id="api-sandbox-content" style="display: none">' );
		$out->addWikiMsg( 'apisb-intro' );
		$out->addHTML( $this->openFieldset( 'parameters' )
			. $this->getInputs()
			. '</fieldset>'
			. $this->openFieldset( 'result' )
			. '<table class="api-sandbox-result-container"><tbody>
'
			. '<tr><td class="api-sandbox-result-label"><label for="api-sandbox-url">'
			. wfMessage( 'apisb-request-url' )->parse() . '</label></td>'
			. '<td><input id="api-sandbox-url" readonly="readonly" /></td></tr>
'
			. '<tr id="api-sandbox-post-row"><td class="api-sandbox-result-label"><label for="api-sandbox-post">'
			. wfMessage( 'apisb-request-post' )->parse() . '</label></td>'
			. '<td><input id="api-sandbox-post" readonly="readonly" /></td></tr>
'
			. '<tr><td colspan="2"><div id="api-sandbox-output"></div></td></tr>'
			. "\n</tbody></table>"
			. "\n</fieldset>" );
		
		$out->addHTML( "\n</div>" ); # <div id="api-sandbox-content">
	}

	/**
	 * @return string
	 */
	private function getInputs() {
		global $wgEnableWriteAPI;

		$apiMain = new ApiMain( new FauxRequest( array() ), $wgEnableWriteAPI );
		$this->apiQuery = new ApiQuery( $apiMain, 'query' );
		$formats = array_filter( array_keys( $apiMain->getFormats() ),
			'SpecialApiSandbox::filterFormats' );
		sort( $formats );
		$modules = array_keys( $apiMain->getModules() );
		sort( $modules );
		$queryModules = array_merge(
			$this->getQueryModules( 'prop' ),
			$this->getQueryModules( 'list' ),
			$this->getQueryModules( 'meta' )
		);

		$s = '<table class="api-sandbox-options">
<tbody>
';
		$s .= '<tr><td class="api-sandbox-label"><label for="api-sandbox-format">format=</label></td><td class="api-sandbox-value">' 
			. self::getSelect( 'format', $formats, 'json' )
			. '</td><td></td></tr>
';
		$s .= '<tr><td class="api-sandbox-label"><label for="api-sandbox-action">action=</label></td><td class="api-sandbox-value">' 
			. self::getSelect( 'action', $modules )
			. '</td><td id="api-sandbox-help" rowspan="2"></td></tr>
';
		$s .= '<tr id="api-sandbox-query-row" style="display: none"><td class="api-sandbox-label">'
			. '</td><td class="api-sandbox-value">'
			. self::getSelect( 'query', $queryModules )
			. '</td></tr>
</table>
<div id="api-sandbox-further-inputs"></div>
';
		$s .= Html::element( 'input',
			array(
				'type' => 'button',
				'id' => 'api-sandbox-submit',
				'value' => wfMessage( 'apisb-submit' )->text(),
				'disabled' => 'disabled',
			) 
		) . "\n";
		return $s;
	}

	/**
	 * @param $type string
	 * @return array
	 */
	private function getQueryModules( $type ) {
		$res = array();
		$params = $this->apiQuery->getAllowedParams();
		foreach ( $params[$type][ApiBase::PARAM_TYPE] as $module ) {
			$res[] = array(
				'value' => "$type=$module",
				'text' => /* &nbsp; */ "\xc2\xa0\xc2\xa0\xc2\xa0$type=$module",
			);
		}
		sort( $res );
		array_unshift( $res, 
			array(
				'value' => "-$type-",
				'text' => wfMessage( "apisb-query-$type" )->parse(),
				'attributes' => array( 'disabled' => 'disabled' )
			)
		);

		return $res;
	}

	/**
	 * @param $name string
	 * @param $items array
	 * @param $default bool
	 * @return string
	 */
	private static function getSelect( $name, $items, $default = false ) {
		$s = Html::openElement( 'select', array(
			'class' => 'api-sandbox-input',
			'name' => $name,
			'id' => "api-sandbox-$name" )
		);
		if ( $default === false ) {
			$s .= "\n\t" . self::option( '-', wfMessage( "apisb-select-$name" )->text(),
				array( 'selected' => 'selected' )
			);
		}
		foreach ( $items as $item ) {
			$attributes = array();
			if ( is_array( $item ) ) {
				$value = $item['value'];
				$text = $item['text'];
				$attributes = isset( $item['attributes'] ) ? $item['attributes'] : array();
			} else {
				$value = $text = $item;
			}
			if ( $value === $default ) {
				$attributes['selected'] = 'selected';
			}
			$s .= "\n\t" . self::option( $value, $text, $attributes );
		}
		$s .= "\n" . Html::closeElement( 'select' ) . "\n";
		return $s;
	}

	/**
	 * @param $value string
	 * @param $text string
	 * @param $attributes array
	 * @return string
	 */
	private static function option( $value, $text, $attributes = array() ) {
		$attributes['value'] = $value;
		return Html::element( 'option', $attributes, $text );
	}

	/**
	 * @param $name string
	 * @return string
	 */
	private function openFieldset( $name ) {
		return "\n" . Html::openElement( 'fieldset', array( 'id' => "api-sandbox-$name" ) )
			. "\n\t" . Html::rawElement( 'legend', array(), wfMessage( "apisb-$name" )->parse() )
			. "\n";
	}

	/**
	 * Callback that returns false if its argument (format name) ends with 'fm'
	 *
	 * @param $value string
	 * @return boolean
	 */
	private static function filterFormats( $value ) {
		return !preg_match( '/fm$/', $value );
	}
}