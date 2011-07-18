/**
 * Initialization script for the MoodBar MediaWiki extension
 *
 * @author Timo Tijhof, 2011
 */
( function( $ ) {
	var mb = mw.moodBar = {

		conf: mw.config.get( 'mbConfig' ),

		ui: {
			// jQuery objects
			pMoodbar: null,
			trigger: null,
			overlay: null
		},

		init: function() {
			var ui = mb.ui;

			// Bucketing (@todo)
			mb.conf.bucketKey = 'using';

			// Create portlet
			ui.pMoodbar = $( '<div id="p-moodbar"></div>' );

			// Create trigger
			ui.trigger = $( '<a>' )
				.attr( 'href', '#' )
				.attr( 'title', mw.msg( 'tooltip-p-moodbar-trigger-' + mb.conf.bucketKey ) )
				.text( mw.msg( 'moodbar-trigger-' + mb.conf.bucketKey, mw.config.get( 'wgSiteName' ) ) );

			// Insert trigger into portlet
			ui.trigger
				.wrap( '<p>' )
				.parent()
				.appendTo( ui.pMoodbar );

			// Inject portlet into document, when document is ready
			$( mb.inject );
		},

		inject: function() {
			$( '#mw-head' ).append( mb.ui.pMoodbar );
		}
	
	};

	mb.init();

} )( jQuery );
