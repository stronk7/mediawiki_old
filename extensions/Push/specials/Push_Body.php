<?php

/**
 * A special page that allows pushing one or more pages to one or more targets.
 * 
 * @since 0.1
 * 
 * @file Push_Body.php
 * @ingroup Push
 * 
 * @author Jeroen De Dauw  < jeroendedauw@gmail.com >
 */
class SpecialPush extends SpecialPage {
	
	/**
	 * Constructor.
	 * 
	 * @since 0.1
	 */
	public function __construct() {
		parent::__construct( 'Push', 'push' );
	}
	
	/**
	 * @see SpecialPage::getDescription
	 */
	public function getDescription() {
		return wfMsg( 'special-' . strtolower( $this->mName ) );
	}
	
	/**
	 * Main method.
	 * 
	 * @since 0.1 
	 * 
	 * @param string $arg
	 */
	public function execute( $arg ) {
		global $wgOut, $wgUser;
		
		$wgOut->setPageTitle( wfMsg( 'special-push' ) );
		
		// If the user is authorized, display the page, if not, show an error.
		if ( !$this->userCanExecute( $wgUser ) ) {
			$this->displayRestrictionError();
			return;
		} 

		// TODO
	}	
	
}