/**
 * Front-end scripting core for the MoodBar MediaWiki extension
 *
 * @author Timo Tijhof, 2011
 */
( function( $ ) {

	var mb = mw.moodBar;
	$.extend( mb, {

		tpl: {
			overlay: '\
				<div id="mw-moodBar-overlay">\
					<span class="mw-moodBar-overlayClose"><a href="#"><html:msg key="moodbar-close" /></a></span>\
					<div class="mw-moodBar-overlayTitle"><html:msg key="moodbar-intro-' + mb.conf.bucketKey + '" /></div>\
					<div id="mw-moodBar-typeSelect"></div>\
					<span class="mw-moodBar-overlayWhat"><a title-msg="tooltip-moodbar-what"><html:msg key="moodbar-what-label" /></a></span>\
				</div>',
			type: '\
				<div class="mw-moodBar-type moodbar-type-$1">\
					<span class="mw-moodBar-typeTitle"><html:msg key="moodbar-type-$1-title" /></span>\
				</div>'
		},

		event: {
			trigger: function( e ) {
				e.preventDefault();
				if ( !mb.ui.overlay.is( ':visible' ) ) {
					mb.ui.overlay.show();
				} else {
					mb.ui.overlay.hide();
				}
			}
		},

		core: function() {
			var msgOptions = { params: {} };
			msgOptions.params['moodbar-intro-' + mb.conf.bucketKey] = [mw.config.get( 'wgSiteName' )];

			// Create overlay
			mb.ui.overlay = $( mb.tpl.overlay )
				// Handle all html:msgs
				.localize( msgOptions )
				// Bind close-toggle
				.find( '.mw-moodBar-overlayClose' )
					.click( mb.event.trigger )
				.end()
				// Populate type selector
				.find( '#mw-moodBar-typeSelect' ).append( function() {
					var elems = [];
					$.each( mb.conf.validTypes, function( id, type ) {
						elems.push(
							$( mb.tpl.type.replace( /\$1/g, type ) ).localize()[0]
						);				
					} );
					return elems;
				})
				.end()
				// Link what-button
				.find( '.mw-moodBar-overlayWhat > a' )
					.attr( 'href', function() {
						var	target = mw.msg( 'moodbar-what-target' ),
							r = new RegExp( '^(' + mw.config.get( 'wgUrlProtocols' ) + ')', 'i' );
						if ( r.exec( target ) ) {
							return target;
						} else {
							return mw.util.wikiGetlink( target );
						}
					} )
				.end();

			// Inject overlay
			mb.ui.overlay.appendTo( 'body' );

			// Bind triger
			mb.ui.trigger.click( mb.event.trigger );	
		}
	} );

	mb.core();

} )( jQuery );
