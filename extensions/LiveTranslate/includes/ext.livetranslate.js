/**
 * JavasSript for the Live Translate extension.
 * @see http://www.mediawiki.org/wiki/Extension:Live_Translate
 * 
 * @licence GNU GPL v3 or later
 * @author Jeroen De Dauw <jeroendedauw at gmail dot com>
 */

(function($) { $( document ).ready( function() {

	/*
	 * jQuery replaceText - v1.1 - 11/21/2009
	 * http://benalman.com/projects/jquery-replacetext-plugin/
	 * 
	 * Copyright (c) 2009 "Cowboy" Ben Alman
	 * Dual licensed under the MIT and GPL licenses.
	 * http://benalman.com/about/license/
	 */
	$.fn.replaceText=function(b,a,c){return this.each(function(){var f=this.firstChild,g,e,d=[];if(f){do{if(f.nodeType===3){g=f.nodeValue;e=g.replace(b,a);if(e!==g){if(!c&&/</.test(e)){$(f).before(e);d.push(f)}else{f.nodeValue=e}}}}while(f=f.nextSibling)}d.length&&$(d).remove()})}
	
	window.ltdebug = function( message ) {
		if ( window.ltDebugMessages ) {
			if ( typeof console === 'undefined' ) {
				document.title = 'Live Translate: ' + message;
			}
			else {
				console.log( 'Live Translate: ' + message );
			}
		}
	};
	
	var currentLang = $( '#livetranslatediv' ).attr( 'sourcelang' );
	
	// For the "show original" feature.
	var originalHtml = false;
	
	window.textAreaElement = document.createElement( 'textarea' );
	
	// Compatibility with pre-RL code.
	// Messages will have been loaded into wgPushMessages.
	if ( typeof mediaWiki === 'undefined' ) {
		mediaWiki = new Object();
		
		mediaWiki.msg = function() {
			message = window.wgLTEMessages[arguments[0]];
			
			for ( var i = arguments.length - 1; i > 0; i-- ) {
				message = message.replace( '$' + i, arguments[i] );
			}
			
			return message;
		}
	}
	
	/**
	 * Disables the translation button and then either kicks of insertion of
	 * notranslate spans around special words, or when this already happened,
	 * the actual translation process.
	 */
	setupTranslationFeatures = function() {
		$( this ).attr( "disabled", true ).text( mediaWiki.msg( 'livetranslate-button-translating' ) );
		
		if ( originalHtml === false ) {
			obtainAndInsertTranslations( -1 );
		}
		else {
			initiateTranslating();
		}
	}
	
	/**
	 * Queries a batch of special words in the source language, finds them in the page,
	 * and wraps the into notranslate spans. If there are no more words, the translation
	 * process is initaiated, otherwise the function calls itself again.
	 */
	function obtainAndInsertTranslations( offset ) {
		var requestArgs = {
			'action': 'query',
			'format': 'json',
			'list': 'livetranslate',
			'ltlanguage': currentLang
		};
		
		if ( offset > 0 ) {
			requestArgs['ltcontinue'] = offset;
		}
		
		$.getJSON(
			wgScriptPath + '/api.php',
			requestArgs,
			function( data ) {
				if ( data.words ) {
					insertNoTranslateTags( data.words );						
				}
				else if ( data.error && data.error.info ) {
					alert( data.error.info );
				}
				else {
					for ( i in data ) {
						alert( mediaWiki.msg( 'livetranslate-dictionary-error' ) );
						break;
					}
				}
				
				originalHtml = $( '#bodyContent' ).html();
				
				if ( data['query-continue'] ) {
					obtainAndInsertTranslations( data['query-continue'].livetranslate.ltcontinue );
				}
				else {
					initiateTranslating();
				}
			}
		);		
	}
	
	/**
	 * Initiates the translation process.
	 * First all special words are found and send to the local API,
	 * and then replaced by their translation in the response. Then
	 * the Google Translate translation is initiated.
	 */
	function initiateTranslating() {
		var words = getSpecialWords();
		var newLang = $( '#livetranslatelang' ).val();
		
		if ( words.length == 0 ) {
			initiateRemoteTranslating( currentLang, newLang );
		}
		else {
			$.getJSON(
				wgScriptPath + '/api.php',
				{
					'action': 'livetranslate',
					'format': 'json',
					'from': currentLang,
					'to': newLang,
					'words': words.join( '|' )
				},
				function( data ) {
					if ( data.translations ) {
						replaceSpecialWords( data.translations );
					}
					initiateRemoteTranslating( currentLang, newLang );
				}
			);			
		}
	}
	
	/**
	 * Shows the original page content, simply by setting the html to a stored copy of the original.
	 * Also re-binds the jQuery events, as they get lost when doing the html replace.
	 */
	showOriginal = function() {
		currentLang = window.sourceLang;
		$( '#bodyContent' ).html( originalHtml );
		$( '#livetranslatebutton' ).attr( "disabled", false ).text( mediaWiki.msg( 'livetranslate-button-translate' ) );		
		$( '#livetranslatebutton' ).click( setupTranslationFeatures );	
		$( '#ltrevertbutton' ).click( showOriginal );	
	}
	
	// Initial binding of the button click events.
	$( '#livetranslatebutton' ).click( setupTranslationFeatures );	
	$( '#ltrevertbutton' ).click( showOriginal );	
	
	/**
	 * Regex text escaping function.
	 * Borrowed from http://simonwillison.net/2006/Jan/20/escape/
	 */
	RegExp.escape = function(text) {
		if (!arguments.callee.sRE) {
			var specials = [  '/', '.', '*', '+', '?', '|', '(', ')', '[', ']', '{', '}', '\\' ];
		    arguments.callee.sRE = new RegExp( '(\\' + specials.join('|\\') + ')', 'g' );
		}
		return text.replace(arguments.callee.sRE, '\\$1');
	}
	
	/**
	 * Inserts notranslate spans around the words specified in the passed array in the page content.
	 * 
	 * @param {Array} words
	 */
	function insertNoTranslateTags( words ) {
		for ( i in words ) {
			$( '#bodyContent *' ).replaceText( 
				new RegExp( "(\\W)*" + RegExp.escape( words[i] ) + "(\\W)*", "g" ),
				function( str ) {
					return '<span class="notranslate">' + str + '</span>';
				}
			);
		}
	}
	
	/**
	 * Finds the special words in the page contents by getting the contents of all
	 * notranslate spans and pushing them onto an array.
	 * 
	 * @returns {Array}
	 */ 
	function getSpecialWords() {
		var words = [];
		
		$.each($( 'span.notranslate' ), function( i, v ) {
			words.push( $(v).text() );
		});
		
		return words;
	}
	
	/**
	 * Replaced the special words in the page content by looping over them,
	 * and checking if there is a matching translation in the provided object.
	 * 
	 * @param {object} translations
	 */
	function replaceSpecialWords( translations ) {
		$.each($("span.notranslate"), function(i,v) {
			var currentText = $(v).text();
			if ( translations[currentText] ) {
				$(v).text( translations[currentText] );
			}
		});		
	}
	
	/**
	 * Initiates the remote translation process.
	 * 
	 * @param {string} sourceLang
	 * @param {string} targetLang
	 */
	function initiateRemoteTranslating( sourceLang, targetLang ) {
		var translator = new translationService();
		translator.done = handleTranslationCompletion;
		ltdebug( 'Initiating remote translation' );
		translator.translateElement( $( '#bodyContent' ), sourceLang, targetLang );
	}
	
	function handleTranslationCompletion( targetLang ) {
		ltdebug( 'Remote translation completed' );
		currentLang = targetLang;
		$( '#livetranslatebutton' ).attr( "disabled", false ).text( mediaWiki.msg( 'livetranslate-button-translate' ) );
		$( '#ltrevertbutton' ).css( 'display', 'inline' );
	}
	
} ); })(jQuery);