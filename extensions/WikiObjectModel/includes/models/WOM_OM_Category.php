<?php
/**
 * This model implements Category models.
 *
 * @author Ning
 * @file
 * @ingroup WikiObjectModels
 * 
 */

class WOMCategoryModel extends WikiObjectModel {
	protected $m_name;

	public function __construct( $name ) {
		parent::__construct( WOM_TYPE_CATEGORY );
		$this->m_name = $name;
	}

	public function getName() {
		return $this->m_name;
	}
	
	public function setName( $name ) {
		$this->m_name = $name;
	}

	public function getWikiText() {
		global $wgContLang;
		$namespace = $wgContLang->getNsText( NS_CATEGORY );

		return "[[{$namespace}:{$this->m_name}]]";
	}

	protected function getXMLContent() {
		return $this->m_name;
	}
}
