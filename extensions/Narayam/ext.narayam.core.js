/**
 * Narayam
 * Input field rewriter tool for web pages
 * @author Junaid P V ([[user:Junaidpv]])(http://junaidpv.in)
 * @date 2010-12-18 (Based on naaraayam transliteration tool I first wrote on 2010-05-19)
 * @version 3.0
 * Last update: 2010-11-28
 * License: GPLv3, CC-BY-SA 3.0
 */

/**
 * NOTE: For documentation on writing schemes and rulesets, see the
 * documentation for addScheme().
 */

( function( $ ) {
$.narayam = new ( function() {
	/* Private members */
	
	// Reference to this object
	var that = this;
	// jQuery array holding all text inputs Narayam applies to
	var $inputs = $( [] );
	// Input method dropdown
	var $select = $( [] );
	// Whether Narayam is enabled
	var enabled = false;
	// Registered schemes
	var schemes = {};
	// List of scheme names, ordered for presentation purposes
	// Schemes not in this list won't be allowed to register
	// This object is formatted as { 'schemename': '', 'schemename2': '', ... }
	// for easy searching
	var availableSchemes = mw.config.get( 'wgNarayamAvailableSchemes' ) || {};
	// Currently selected scheme
	var currentScheme = null;
	// Shortcut key for turning Narayam on and off
	var shortcutKey = mw.config.get( 'wgNarayamShortcutKey' ) || {
		altKey: false,
		ctrlKey: false,
		shiftKey: false,
		key: null
	};
	
	/* Private functions */
	
	/**
	 * Transliterate a string using the current scheme
	 * @param str String to transliterate
	 * @param keyBuffer The key buffer
	 * @param useExtended Whether to use the extended part of the scheme
	 * @return Transliterated string, or str if no applicable transliteration found.
	 */
	function transliterate( str, keyBuffer, useExtended ) {
		var rules = currentScheme.extended_keyboard && useExtended ?
			currentScheme.rules_x : currentScheme.rules;
		for ( var i = 0;  i < rules.length; i++ ) {
			var keyBufferMatch = true;
			if ( rules[i][1].length > 0 && rules[i][1].length <= keyBuffer.length ) {
				// Try to match rules[i][1] at the end of the key buffer
				keyBufferMatch = new RegExp( rules[i][1] + '$' ).test( keyBuffer );
			}
			var regex = new RegExp( rules[i][0] + '$' );
			if ( keyBufferMatch && regex.test( str ) ) {
				return str.replace( regex, rules[i][2] );
			}
		}
		// No matches, return the input
		return str;
	}
	
	/**
	 * Get the n characters in str that immediately precede pos
	 * Example: lastNChars( "foobarbaz", 5, 2 ) == "ba"
	 * @param str String to search in
	 * @param pos Position in str
	 * @param n Number of characters to go back from pos
	 * @return Substring of str, at most n characters long, immediately preceding pos
	 */
	function lastNChars( str, pos, n ) {
		if ( n === 0 ) {
			return '';
		}
		if ( pos <= n ) {
			return str.substr( 0, pos );
		} else {
			return str.substr( pos - n, n);
		}
	}
	
	/**
	 * Find the point at which a and b diverge, i.e. the first position
	 * at which they don't have matching characters.
	 * @param a String
	 * @param b String
	 * @return Position at which a and b diverge, or -1 if a == b
	 */
	function firstDivergence( a, b ) {
		var minLength = a.length < b.length ? a.length : b.length;
		for ( var i = 0; i < minLength; i++ ) {
			if ( a.charCodeAt( i ) !== b.charCodeAt( i ) ) {
				return i;
			}
		}
		return -1;
	}
	
	/**
	 * Check whether a keypress event corresponds to the shortcut key
	 * @param e Event object
	 * @return bool
	 */
	function isShortcutKey( e ) {
		return e.altKey == shortcutKey.altKey &&
			e.ctrlKey == shortcutKey.ctrlKey &&
			e.shiftKey == shortcutKey.shiftKey &&
			String.fromCharCode( e.which ).toLowerCase() == shortcutKey.key.toLowerCase();
	}
	
	/**
	 * Get a description of the shortcut key, e.g. "Ctrl-M"
	 * @return string
	 */
	function shortcutText() {
		var text = '';
		// TODO: Localize these things (in core, too)
		if ( shortcutKey.ctrlKey ) {
			text += 'Ctrl-';
		}
		if ( shortcutKey.shiftKey ) {
			text += 'Shift-';
		}
		if ( shortcutKey.altKey ) {
			text += 'Alt-';
		}
		text += shortcutKey.key.toUpperCase();
		return text;
	}
	
	/**
	 * Keydown event handler. Handles shortcut key presses
	 * @param e Event object
	 */
	function onkeydown( e ) {
		// If the current scheme uses the alt key, ignore keydown for Alt+? combinations
		if ( enabled && currentScheme.extended_keyboard && e.altKey && !e.ctrlKey ) {
			e.stopPropagation();
			return false; // Not in original code -- does this belong here?
		} else if ( isShortcutKey( e ) ) {
			that.toggle();
			e.stopPropagation();
			return false;
		}
		return true;
	}
	
	/**
	 * Keypress event handler. This is where the real work happens
	 * @param e Event object
	 */
	function onkeypress( e ) {
		if ( !enabled ) {
			return true;
		}
		
		if ( e.which == 8 ) { // Backspace
			// Blank the keybuffer
			$( this ).data( 'narayam-keyBuffer', '' );
			return true;
		}
		
		// Leave non-ASCII stuff alone, as well as anything involving
		// Alt (except for extended keymaps), Ctrl and Meta
		if ( e.which < 32 || ( e.altKey && !currentScheme.extended_keyboard ) || e.ctrlKey ) {
			return true;
		}
		
		var $this = $( this );
		var c = String.fromCharCode( e.which );
		// Get the current caret position. The user may have selected text to overwrite,
		// so get both the start and end position of the selection. If there is no selection,
		// startPos and endPos will be equal.
		var pos = $this.textSelection( 'getCaretPosition', { 'startAndEnd': true } );
		var startPos = pos[0];
		var endPos = pos[1];
		// Get the last few characters before the one the user just typed,
		// to provide context for the transliteration regexes.
		// We need to append c because it hasn't been added to $this.val() yet
		var input = lastNChars( $this.val(), startPos, currentScheme.lookbackLength ) + c;
		var keyBuffer = $this.data( 'narayam-keyBuffer' );
		var replacement = transliterate( input, keyBuffer, e.altKey );
		
		// Update the key buffer
		keyBuffer += c;
		if ( keyBuffer.length > currentScheme.keyBufferLength ) {
			// The buffer is longer than needed, truncate it at the front
			keyBuffer = keyBuffer.substring( keyBuffer.length - currentScheme.keyBufferLength );
		}
		$this.data( 'narayam-keyBuffer', keyBuffer );
		
		// textSelection() magic is expensive, so we avoid it as much as we can
		if ( replacement == input ) {
			return true;
		}
		// Drop a common prefix, if any
		// TODO: Profile this, see if it's any faster
		var divergingPos = firstDivergence( input, replacement );
		input = input.substring( divergingPos );
		replacement = replacement.substring( divergingPos );
		
		// Select and replace the text
		$this.textSelection( 'setSelection', {
			'start': startPos - input.length + 1,
			'end': endPos
		} );
		$this.textSelection( 'encapsulateSelection', {
			'peri': replacement,
			'replace': true,
			'selectPeri': false
		} );
		
		e.stopPropagation();
		return false;
	}
	
	/**
	 * Change handler for the scheme dropdown. Updates the current scheme
	 * based on the new selection in the dropdown.
	 */
	function updateSchemeFromSelect() {
		var scheme = $( this ).val();
		that.setScheme( scheme );
	}
	
	/* Public functions */

	/**
	 * Add more inputs to apply Narayam to
	 * @param inputs A jQuery object holding one or more input or textarea elements,
	 *               or an array of DOM elements, or a single DOM element, or a selector
	 */
	this.addInputs = function( inputs ) {
		var $newInputs = $( inputs );
		$inputs = $inputs.add( $newInputs );
		$newInputs
			.bind( 'keydown.narayam', onkeydown )
			.bind( 'keypress.narayam', onkeypress )
			.data( 'narayam-keyBuffer', '' );
		if ( enabled ) {
			$newInputs.addClass( 'narayam-input' );
		}
	};
	
	/**
	 * Enable Narayam
	 */
	this.enable = function() {
		if ( !enabled && currentScheme !== null ) {
			$inputs.addClass( 'narayam-input' );
			$.cookie( 'narayam-enabled', '1', { 'path': '/', 'expires': 30 } );
			$( '#narayam-toggle' ).attr( 'checked', true );
			enabled = true;
		}
	};
	
	/**
	 * Disable Narayam
	 */
	this.disable = function() {
		if ( enabled ) {
			$inputs.removeClass( 'narayam-input' );
			$.cookie( 'narayam-enabled', '0', { 'path': '/', 'expires': 30 } );
			$( '#narayam-toggle' ).attr( 'checked', false );
			enabled = false;
		}
	};
	
	/**
	 * Toggle the enabled/disabled state
	 */
	this.toggle = function() {
		if ( enabled ) {
			that.disable();
		} else {
			that.enable();
		}
	};
	
	/**
	 * Add a transliteration scheme. Schemes whose name is not in
	 * wgNarayamAvailableSchemes will be ignored.
	 *
	 * A scheme consists of rules used for transliteration. A rule is an
	 * array of three strings. The first string is a regex that is matched
	 * against the input string (the last few characters before the cursor
	 * followed by the character the user entered), the second string is a
	 * regex that is matched against the end of the key buffer (the last
	 * few keys the user pressed), and the third string is the replacement
	 * string (may contain placeholders like $1 for subexpressions). You do
	 * not need to add $ to the end of either of the regexes so they match
	 * at the end, this is done automagically.
	 *
	 * The transliteration algorithm processes the rules in the order they
	 * are specified, and applies the first rule that matches. For a rule
	 * to match, both the first and second regex have to match (the first
	 * for the input, the second for the key buffer). Most rules do not use
	 * the keybuffer and specify an empty string as the second regex.
	 *
	 * The scheme data object must have the following keys:
	 * namemsg: Message key for the name of the scheme
	 * extended_keyboard: Whether this scheme has an extended ruleset (bool)
	 * lookbackLength: Number of characters before the cursor to include
	 *                 when matching the first regex of each rule. This is
	 *                 usually the maximum number of characters a rule
	 *                 regex can match minus one.
	 * keyBufferLength: Length of the key buffer. May be zero if not needed
	 * rules: Array of rules, which themselves are arrays of three strings.
	 * rules_x: Extended ruleset. This is used instead of the normal
	 *          ruleset when Alt is held. This key is only required if
	 *          extended_keyboard is true
	 *
	 * NOTE: All keys are REQUIRED (except rules_x when not used). Missing
	 *       keys may result in JS errors.
	 *
	 * @param name Name of the scheme, must be unique
	 * @param data Object with scheme data.
	 * @return True if added, false if not
	 */
	this.addScheme = function( name, data ) {
		if ( name in availableSchemes ) {
			schemes[name] = data;
			return true;
		} else {
			return false;
		}
	};
	
	/**
	 * Change the current transliteration scheme
	 * @param name String
	 */
	this.setScheme = function( name ) {
		if ( name in schemes ) {
			currentScheme = schemes[name];
			$.cookie( 'narayam-scheme', name, { 'path': '/', 'expires': 30 } );
			$select.val( name );
		}
	};
	
	/**
	 * Set up Narayam. This adds the scheme dropdown, binds the handlers
	 * and initializes the enabled/disabled state and selected scheme
	 * from a cookie or wgNarayamEnableByDefault
	 */
	this.setup = function() {
		// Build scheme dropdown
		$select = $( '<select />' );
		var haveSchemes = false;
		for ( var scheme in schemes ) {
			$( '<option />' )
				.val( scheme )
				.text( mw.msg( schemes[scheme].namemsg ) )
				.appendTo( $select );
			haveSchemes = true;
		}
		$select.change( updateSchemeFromSelect );
		
		if ( !haveSchemes ) {
			// No schemes available, don't show the tool
			return;
		}
		
		// Build enable/disable checkbox and label
		var $checkbox = $( '<input type="checkbox" id="narayam-toggle" />' );
		$checkbox
			.attr( 'title', mw.msg( 'narayam-checkbox-tooltip' ) )
			.click( that.toggle );
			
		var helppage = mw.msg( 'narayam-help-page' );
		var $label = $( '<label for="narayam-toggle" />' );
		$label
			.text( mw.msg( 'narayam-toggle-ime', shortcutText() ) )
			.attr( 'title', mw.msg( 'narayam-checkbox-tooltip' ) );
		if ( helppage ) {
			// Link to the help page
			$label.wrapInner( $( '<a />' ).attr( 'href', mw.util.wikiGetlink( helppage ) ) );
		}
		
		var $checkboxAndLabel = $( '<span />' )
			.addClass( 'narayam-toggle-wrapper' )
			.append( $checkbox )
			.append( $label );
		var $spanWithEverything = $( '<span />' )
			.addClass( 'narayam-wrapper' )
			.append( $select )
			.append( $checkboxAndLabel );
		
		// Put the dropdown and the checkbox at the beginning of the
		// search form. This seems to be the most reliable way across skins.
		$( '#searchform' ).prepend( $spanWithEverything );
		
		// Restore state from cookies
		var savedScheme = $.cookie( 'narayam-scheme' );
		if ( savedScheme && savedScheme in schemes ) {
			that.setScheme( savedScheme );
		} else {
			$select.change();
		}
		var enabledCookie = $.cookie( 'narayam-enabled' );
		if ( enabledCookie == '1' || ( mw.config.get( 'wgNarayamEnabledByDefault' ) && enabledCookie !== '0' ) ) {
			that.enable();
		}
		// Renew the narayam-enabled cookie. naraym-scheme is renewed by setScheme()
		if ( enabledCookie ) {
			$.cookie( 'narayam-enabled', enabledCookie, { 'path': '/', 'expires': 30 } );
		}
			
	};
	
} )();

} )( jQuery );
