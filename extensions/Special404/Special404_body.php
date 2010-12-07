<?php

if ( !defined( 'MEDIAWIKI' ) ) {
	echo "Special404 extension\n";
	exit( 1 );
}

class Special404 extends UnlistedSpecialPage {
	
	public function __construct() {
		parent::__construct('Error404');
	}
	
	public function execute( $par ) {
		global $wgOut, $wgRequest;
		
		$this->setHeaders();
		$wgOut->setStatusCode( 404 );
		$wgOut->addWikiMsg( 'special404-body', trim($wgRequest->getRequestURL(), '/\\') );
		
	}
	
}
