<?php
/**
 * This model implements Table models.
 *
 * @author Ning
 * @file
 * @ingroup WikiObjectModels
 * 
 */

class WOMTableModel extends WikiObjectModelCollection {
	protected $m_style = '';

	public function __construct( $style ) {
		parent::__construct( WOM_TYPE_TABLE );

		$this->m_style = $style;
	}

	public function getStyle() {
		return $this->m_style;
	}

	public function setStyle( $style ) {
		$this->m_style = $style;
	}
	
	public function getWikiText() {
		return "{| {$this->m_style}" . parent::getWikiText() . "\n|}";
	}
}
