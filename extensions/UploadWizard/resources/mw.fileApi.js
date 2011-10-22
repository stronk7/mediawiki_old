/* miscellaneous fileApi routines -- partially copied from mediawiki.special.upload.js, must refactor... */

( function( $, mw ) { 

	mw.fileApi = { 

		/**
		 * Is the FileAPI available with sufficient functionality?
		 */
		isAvailable: function() {
			return typeof window.FileReader !== 'undefined';
		},

		/**
		 * Check if this is a recognizable image type...
		 * Also excludes files over 10M to avoid going insane on memory usage.
		 *
		 * @todo is there a way we can ask the browser what's supported in <img>s?
		 * @todo put SVG back after working around Firefox 7 bug <https://bugzilla.wikimedia.org/show_bug.cgi?id=31643>
		 *
		 * @param {File} file
		 * @return boolean
		 */
		isPreviewableFile: function( file ) {
			var	known = [ 'image/png', 'image/gif', 'image/jpeg'],
				tooHuge = 10 * 1024 * 1024;
			return ( $.inArray( file.type, known ) !== -1 ) && file.size > 0 && file.size < tooHuge;
		}



	};

} )( jQuery, mediaWiki );
