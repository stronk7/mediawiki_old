/**
 * JavasSript for the Push tab in the Push extension.
 * @see http://www.mediawiki.org/wiki/Extension:Push
 * 
 * @author Jeroen De Dauw <jeroendedauw at gmail dot com>
 */

(function($) { $( document ).ready( function() {
	
	// Compatibility with pre-RL code.
	// Messages will have been loaded into wgPushMessages.
	if ( typeof mediaWiki === 'undefined' ) {
		mediaWiki = new Object();
		
		mediaWiki.msg = function( message ) {
			return window.wgPushMessages[message];
		}
	}
	
	$('.push-button').click(function() {
		this.disabled = true;
		this.innerHTML = mediaWiki.msg( 'push-button-pushing' );
		
		getLocalArtcileAndContinue(
			this,
			$(this).attr( 'pushtarget' )
		);
	});
	
	$('#push-all-button').click(function() {
		this.disabled = true;
		this.innerHTML = mediaWiki.msg( 'push-button-pushing' );
		$.each($(".push-button"), function(i,v) {
			$(v).click();
		});
	});	
	
	function getLocalArtcileAndContinue( sender, targetUrl ) {
		var pageName = $('#pageName').attr('value'); 
		
		$.getJSON(
			wgScriptPath + '/api.php',
			{
				'action': 'query',
				'format': 'json',
				'prop': 'revisions',
				'rvprop': 'timestamp|user|comment|content',
				'titles': pageName,
			},
			function( data ) {
				if ( data.error ) {
					handleError( sender, targetUrl, data.error );
				}
				else {
					sender.innerHTML = sender.innerHTML + '.';
					for (first in data.query.pages) break;
					doLoginAndContinue( sender, targetUrl, data.query.pages[first] );
				}
			}
		); 		
	}
	
	function doLoginAndContinue( sender, targetUrl, page ) {
		if ( false ) { // TODO
			var name = ''; // TODO
			var password = ''; // TODO			
			
			$.post( 
				targetUrl + '/api.php',
				{
					'action': 'login',
					'format': 'json',
					'lgname': name,
					'lgpassword': password,
				},
				function( data ) {
					if ( data.error ) {
						handleError( sender, targetUrl, data.error );
					}
					else {
						if ( data.login.result == "NeedToken" ) {
							confirmLoginTokenAndContinue( sender, targetUrl, page, data.login.token, name, password );
						}
						else {
							getEditTokenAndContinue( sender, targetUrl, page );
						}
					}
				}
			);				
		}
		else {
			getEditTokenAndContinue( sender, targetUrl, page );
		}
	}
	
	function confirmLoginTokenAndContinue( sender, targetUrl, page, token, name, password ) {
		$.post( 
			targetUrl + '/api.php',
			{
				'action': 'login',
				'format': 'json',
				'lgname': name,
				'lgpassword': password,
				'lgtoken': token 
			},
			function( data ) {
				if ( data.error ) {
					handleError( sender, targetUrl, data.error );
				}
				else {
					getEditTokenAndContinue( sender, targetUrl, page );
				}
			}
		);		
	}
	
	function getEditTokenAndContinue( sender, targetUrl, page ) {
		$.getJSON(
			targetUrl + '/api.php',
			{
				'action': 'query',
				'format': 'json',
				'intoken': 'edit',
				'prop': 'info',
				'titles': page.title,
			},
			function( data ) {
				if ( data.error ) {
					handleError( sender, targetUrl, data.error );
				}
				else {
					sender.innerHTML = sender.innerHTML + '.';
					for (first in data.query.pages) break;
					doPush( sender, targetUrl, page, data.query.pages[first].edittoken );
				}
			}
		); 
	}	
	
	function doPush( sender, targetUrl, page, token ) {
		var summary = mediaWiki.msg( 'push-import-revision-message' );
		summary = summary.replace( '$1', $('#siteName').attr('value') );
		summary = summary.replace( '$2', page.revisions[0].user );
		
		var comment = '';
		if ( page.revisions[0].comment ) {
			comment = mediaWiki.msg( 'push-import-revision-comment' );
			comment = comment.replace( '$1', page.revisions[0].comment );
		}
		
		summary = summary.replace( '$3', comment );
		
		$.post( 
			targetUrl + '/api.php',
			{
				'action': 'edit',
				'format': 'json',
				'token': token,
				'title': page.title,
				'summary': summary,
				'text': page.revisions[0].*
			},
			function( data ) {
				if ( data.error ) {
					handleError( sender, targetUrl, data.error );
				}
				else {
					sender.innerHTML = mediaWiki.msg( 'push-button-completed' );
					setTimeout( function() {reEnableButton( sender );}, 2000 );
				}
			}
		);	
	}
	
	function reEnableButton( button ) {
		button.innerHTML = mediaWiki.msg( 'push-button-text' );
		button.disabled = false;
		
		var pushAllButton = $('#push-all-button');
		
		// If there is a "push all" button, make sure to reset it
		// when all other buttons have been reset.
		if ( typeof pushAllButton !== "undefined" ) {
			var hasDisabled = false;
			
			$.each($(".push-button"), function(i,v) {
				if ( v.disabled ) {
					hasDisabled = true;
				}
			});
			
			if ( !hasDisabled ) {
				pushAllButton.attr( "disabled", false );
				pushAllButton.text( mediaWiki.msg( 'push-button-all' ) );
			}
		}
	}
	
	function handleError( sender, targetUrl, error ) {
		alert( error.info );
		sender.innerHTML = mediaWiki.msg( 'push-button-failed' );		
	}
	
} ); })(jQuery);