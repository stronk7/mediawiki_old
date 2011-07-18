/**
 * Narayam startup script
 */
( function( $ ) {
	$( document ).ready( function() {
		$.narayam.addInputs( 'input:text, input[type=search], textarea' );
		$.narayam.setup();
	} );
} )( jQuery );
