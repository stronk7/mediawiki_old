(function($){

	$.webfonts = {

		/* Version number */
		oldconfig: false,
		version: "0.1.2",
		set: function( font ) {
			if ( font === "none" ) {
				$.webfonts.reset();
				return;
			}
					
			var config = mw.config.get( "wgWebFonts" );
			if ( !font in config.fonts ) {
				console.log( "Requested unknown font", font );
				return;
			} else {
				//console.log( "Loaded font", font, config.fonts[font] );
				config = config.fonts[font];
			}
			
			var styleString = 
				"<style type='text/css'>\n@font-face {\n"
				+ "\tfont-family: '"+font+"';\n";
			if ( 'eot' in config ) {
				styleString += "\tsrc: url('"+config.eot+"');\n";
			}
			styleString += "\tsrc: local('"+ font +"'),";
			
			if ( 'woff' in config ) {
				styleString += "\t\turl('"+config.woff+"') format('woff'),";
			}
			if ( 'svg' in config ) {
				styleString += "\t\turl('"+config.svg+"#"+font+"') format('svg'),";
			}
			if ( 'ttf' in config ) {
				styleString += "\t\turl('"+config.ttf+"') format('truetype');\n";
			}
			
			styleString += "\tfont-weight: normal;\n}\n</style>\n";
			
			$(styleString).appendTo("head" );
			//console.log( "Loaded css", styleString);
			if ( !$.webfonts.oldconfig ) {
				$.webfonts.oldconfig = {
					"font-family": $("body").css('font-family'),
					"font-size":   $("body").css('font-size')
				}
			}
			
			$("body").css('font-family',  font +", Helvetica, Arial, sans-serif");
			$("input").css('font-family',  font +", Helvetica, Arial, sans-serif");
			$("select").css('font-family',  font +", Helvetica, Arial, sans-serif");
			
			if ( 'size' in config ) {
				$("body").css('font-size', config.size);
			}
			if ( 'normalization' in config ) {
					$(document).ready(function() {
						$.webfonts.normalize(config.normalization);
						//console.log( "Registered normalization rules", config.normalization);
				});
			}
			//set the font option in cookie
			$.cookie( 'webfonts-font', font, { 'path': '/', 'expires': 30 } );
		},

		reset: function(){
			$("body").css('font-family', $.webfonts.oldconfig["font-family"]);
			$("body").css('font-size', $.webfonts.oldconfig["font-size"]);
			$.cookie( 'webfonts-font', 'none' );
		},

		normalize: function(normalization_rules){
			$.each(normalization_rules, function(key, value) { 
				$.webfonts._replace(key, value);
			});
		},

		_replace: function(search, replace) {
			var search_pattern = new RegExp(search,"g");
			return $("*").each(function(){  
			var node = this.firstChild,  
			  val,  
			  new_val,  
			  remove = [];  
			if ( node ) {  
			  do {  
				if ( node.nodeType === 3 ) {  
				  val = node.nodeValue;  
				  new_val = val.replace(search_pattern, replace );  
				  if ( new_val !== val ) {  
					  node.nodeValue = new_val;  
				  }  
				}  
			  } while ( node = node.nextSibling );  
			}  
			remove.length && $(remove).remove();  
		  });  
		},
		
		setup: function() {
			
			var config = mw.config.get( "wgWebFontsAvailable" );
			// Build font dropdown
			$select = $( '<ul />' );
			for ( var scheme in config ) {
				$fontlink = $( '<input>' )
					.attr("type","radio")
					.attr("name","font")
					.attr("id","webfont-"+config[scheme])
					.attr("value",config[scheme] );
						
				$fontItem = $( '<li />' )
					.val( config[scheme] )
					.append( $fontlink )
					.append( config[scheme] );
						
				haveSchemes = true;
				//some closure trick :)
				(function (font) {
					$fontlink.click( function( event ) {
						$.webfonts.set( font );
					})
				}) (config[scheme]);

				$select.append($fontItem);
			}
			$fontlink = $( '<input />' )
					.attr("type","radio")
					.attr("name","font")
					.attr("value","webfont-none")
					.click( function( event ) {
						$.webfonts.set( 'none');
					});	
			$fontItem = $( '<li />' )
				.val( 'none')
				.append( $fontlink )	
				.append( "Reset");
				
			$select.append($fontItem);

			if ( !haveSchemes ) {
				// No schemes available, don't show the tool
				return;
			}
			
			var $menudiv = $( '<div />' )
			.addClass( 'menu' )
			.append( $select )
			.append();
			
			var $div = $( '<div />' )
			.addClass( 'vectorMenu' )
			.append( "<a href='#'>"+ mw.msg("webfonts-load")+"</a>")
			.css( {'background-image':'none'} )
			.css( { margin: 0, padding:0, "font-size": "100%" } )
			.append( $menudiv )
			.append();
			var $li = $( '<li />' )
			.append( $div );
			$( '#p-personal ul' ).prepend( $li );
			
			//see if there is a font in cookie
			cookie_font = $.cookie('webfonts-font');
			//console.log( "Font from cookie:", cookie_font);
			if(cookie_font == null){
				$.webfonts.set( config[0]);
				//mark it as checked
				$('#webfont-'+config[0]).attr('checked', 'checked');
			}
			else{
				if (cookie_font !=='none'){
					$.webfonts.set( cookie_font);
					//mark it as checked
					$('#webfont-'+cookie_font).attr('checked', 'checked');
				}
			}
		}

	}
	
	$( document ).ready( function() {
		$.webfonts.setup();
	} );

})(jQuery);
