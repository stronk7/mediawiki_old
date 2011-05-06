/**
 * Narayam startup script
 */
( function( $ ) {
	$( document ).ready( function() {
		$.narayam.addInputs( 'input[type=text], input[type=search], input[type=], textarea' );
		$.narayam.setup();
	} );
} )( jQuery );
