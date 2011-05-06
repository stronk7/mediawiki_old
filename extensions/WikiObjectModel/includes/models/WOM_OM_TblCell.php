<?php
/**
 * This model implements Table models.
 *
 * @author Ning
 * @file
 * @ingroup WikiObjectModels
 * 
 */

class WOMTableCellModel extends WikiObjectModelCollection {
	// including table header and table row
	protected $m_prefix = '';

	public function __construct( $prefix ) {
		parent::__construct( WOM_TYPE_TBL_CELL );

		$this->m_prefix = $prefix;
	}

	public function getPrefix() {
		return $this->m_prefix;
	}
	
	public function setPrefix( $prefix ) {
		$this->m_prefix = $prefix;
	}

	public function getWikiText() {
		return "{$this->m_prefix}" . parent::getWikiText();
	}
}
