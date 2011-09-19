(function($){

	function fontID(font) {
		if ( typeof font !== 'string' ) {
			return font;
		}
		return "webfont-"+font.toLowerCase().replace(/[_ ]/g, '-').replace(/[^-a-z]/g, '');
	}

	$.webfonts = {

		oldconfig: false,
		config : $.webfonts.config,
		/* Version number */
		version: "0.1.2",
		set: function( font ) {
			if ( !font || font === "none" ) {
				$.webfonts.reset();
				return;
			}

			if ( !(font in $.webfonts.config.fonts) ) {
				if ( window.console ) {
					console.log( "Requested unknown font", font );
				}
				return;
			}
			var config = $.webfonts.config.fonts[font];

			//load the style sheet for the font
			$.webfonts.loadcss(font);

			//save the current font and its size. Used for reset.
			if ( !$.webfonts.oldconfig ) {
				var $body = $("body");
				$.webfonts.oldconfig = {
					"font-family": $body.css('font-family'),
					"font-size":   $body.css('font-size')
				};
			}

			//Set the font, fallback fonts.Need to change the fonts of Input Select and Textarea explicitly.
			$("body, input, select, textarea").css('font-family', "'"+ font +"', Helvetica, Arial, sans-serif");

			//scale the font of the page. Scale is in percentage.
			// For example scale = 1.2 means  scale the font by 120 percentage
			if ( 'scale' in config ) {
			    $.webfonts.scale(config.scale);
			}
			else{
			    $.webfonts.scale(1);
			}

			if ( 'normalization' in config ) {
				$(document).ready(function() {
					$.webfonts.normalize(config.normalization);
				});
			}
			//set the font option in cookie
			$.cookie( 'webfonts-font', font, { 'path': '/', 'expires': 30 } );
		},

		/**
		 * Reset the font with old configuration
		 */
		reset: function() {
			$("body").css({
				'font-family': $.webfonts.oldconfig["font-family"],
				//reset the font size from old configuration
				'font-size': $.webfonts.oldconfig["font-size"]
			});
			//we need to reset the fonts of Input and Select explicitly.
			$("input").css('font-family', $.webfonts.oldconfig["font-family"]);
			$("select").css('font-family', $.webfonts.oldconfig["font-family"]);
			//remove the cookie
			$.cookie( 'webfonts-font', 'none', { 'path': '/', 'expires': 30 } );
		},

		/**
		 * Scale the font of the page by given percentage
		 * @param  percentage of scale. eg 1.2 for 120% scale
		 */
		scale: function(percentage) {
			//TODO: Not Implemented. Need to find a better way to emulate fontconfig font-scale feature.
			//Changing the font-size of few selectors does not work properly and not able to achieve
			//uniform scaling.
		},

		/**
		 * Does a find replace of string on the page.
		 * @param normalization_rules hashmap of replacement rules.
		 */
		normalize: function(normalization_rules) {
			$.each(normalization_rules, function(search, replace) {
				var search_pattern = new RegExp(search,"g");
				return $("*").each(function() {
					var node = this.firstChild,
						 val, new_val;
					if ( node ) {
						do {
							if ( node.nodeType === 3 ) {
								val = node.nodeValue;
								new_val = val.replace(search_pattern, replace);
								if ( new_val !== val ) {
									node.nodeValue = new_val;
								}
							}
						} while ( node = node.nextSibling );
					}
				});
			});
		},

		/*
		 * Construct the css required for the fontfamily, inject it to the head of the body
		 * so that it gets loaded.
		 * @param fontfamily The fontfamily name
		 */
		loadcss: function(fontfamily) {
			var fontconfig = $.webfonts.config.fonts[fontfamily];
			var base = mw.config.get( "wgExtensionAssetsPath" ) + "/WebFonts/fonts/";
			var styleString =
				"<style type='text/css'>\n@font-face {\n"
				+ "\tfont-family: '"+fontfamily+"';\n";
			if ( 'eot' in fontconfig ) {
				styleString += "\tsrc: url('"+base+fontconfig.eot+"');\n";
			}
			//If the font is present locally, use it.
			styleString += "\tsrc: local('"+fontfamily+"'),";

			if ( 'woff' in fontconfig ) {
				styleString += "\t\turl('"+base+fontconfig.woff+"') format('woff'),";
			}
			if ( 'svg' in fontconfig ) {
				styleString += "\t\turl('"+base+fontconfig.svg+"#"+fontfamily+"') format('svg'),";
			}
			if ( 'ttf' in fontconfig ) {
				styleString += "\t\turl('"+base+fontconfig.ttf+"') format('truetype');\n";
			}

			styleString += "\tfont-weight: normal;\n}\n</style>\n";

			//inject the css to the head of the page.
			$(styleString).appendTo("head");

		},
		/**
		 * Setup the font selection menu.
		 * It also apply the font from cookie, if any.
		 */
		setup: function() {
			var config = [];
			var languages = $.webfonts.config.languages;
			var requested = [wgUserLanguage, wgContentLanguage];
			for (var i = 0; i < requested.length; i++) {
				if (requested[i] in languages) {
					var fonts = languages[requested[i]];
					for (var j = 0; j < fonts.length; j++) {
						if ( $.inArray(fonts[j], config) === -1 ) {
							config.push(fonts[j]);
						}
					}
				}
			}

			// Build font dropdown
			$.webfonts.buildMenu(config);
			//see if there is a font in cookie
			var cookie_font = $.cookie('webfonts-font') || config[0];
			if (cookie_font && cookie_font !== 'none') {
				$.webfonts.set(cookie_font);
				//mark it as checked
				$('#'+fontID(cookie_font)).attr('checked', 'checked');
			}

			//if there are tags with font-family style definition, get a list of fonts to be loaded
			var fontFamilies = [];
			$('body').find('*[style]').each(function(index) {
				if( this.style.fontFamily) {
					var fontFamilyItems = this.style.fontFamily.split(",");
					$.each(fontFamilyItems, function(index, value) {
						fontFamilies.push(value);
					});
				}
			});
			//get unique list
			fontFamilies = $.unique(fontFamilies);
			//load css for each of the item in fontfamily list
			$.each(fontFamilies, function(index, fontFamily) {
				//remove the ' characters if any.
				fontFamily = fontFamily.replace(/'/g, '');
				if ( fontFamily in $.webfonts.config.fonts ) {
					$.webfonts.loadcss(fontFamily);
				}
			});

		},
		buildMenu: function(config) {
			var haveSchemes = false;
			// Build font dropdown
			var $fontsMenu = $( '<ul />' ).attr('id','webfonts-fontsmenu');
			$fontsMenu.delegate('input:radio', 'change', function( event ) {
				$.webfonts.set( $(this).val() );
			});
			for ( var scheme in config ) {
				var $fontLink = $( '<input type="radio" name="font" />' )
					.attr("id",fontID(config[scheme]))
					.val( config[scheme] );

				var $fontLabel =  $( '<label />' )
					.attr("for",fontID(config[scheme]))
					.append( $fontLink )
					.append( config[scheme] );

				var $fontMenuItem = $( '<li />' )
					.val( config[scheme] )
					.append( $fontLabel );

				haveSchemes = true;

				$fontsMenu.append($fontMenuItem);

			}
			var $resetLink = $( '<input />' )
				.attr("type","radio")
				.attr("name","font")
				.attr("value","webfont-none")
				.attr("id","webfont-none")
				.click( function( event ) {
					$.webfonts.set( 'none');
				});

			var $resetLabel = $( '<label />' )
				.attr("for","webfont-none")
				.append( $resetLink )
				.append( mw.msg("webfonts-reset"));

			var $resetLinkItem = $( '<li />' )
				.val( 'none' )
				.append( $resetLabel );

			$fontsMenu.append($resetLinkItem);
			if ( !haveSchemes ) {
				// No schemes available, don't show the tool
				return;
			}

			var $menuDiv = $( '<div />' ).attr('id','webfonts-fonts')
					.addClass( 'menu' )
					.append( $fontsMenu )
					.append();

			var $div = $( '<div />' ).attr('id','webfonts-menu')
				.addClass( 'webfontMenu' )
				.append( $('<a href="#" />').append(mw.msg("webfonts-load")) )
				.append( $menuDiv );

			//this is the fonts link
			var $li = $( '<li />' ).attr('id','pt-webfont')
				.append( $div );

			//if rtl, add to the right of top personal links. Else, to the left
			var fn = $('body').hasClass( 'rtl' ) ? "append" : "prepend";
			$('#p-personal ul:first')[fn]( $li );
			//workaround for IE bug - activex components like input fields coming on top of everything.
			//TODO: is there a better solution other than hiding it on hover?
			if ( $.browser.msie ) { 
				$("#webfonts-menu").hover(function(){
					$("#searchform").css({ visibility: "hidden" });
				},function(){
					$("#searchform").css({ visibility: "visible" });
				});
			}
		}
	};

	$( document ).ready( function() {
		$.webfonts.setup();
	} );

})(jQuery);
