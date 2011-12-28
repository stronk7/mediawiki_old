<?php

/**
 * Collapsmi
 * Enables collapsing and expanding content. a.k.a. Show/Hide
 * @version 1.0.0
 *
 * Copyright (C) 2011  Sami Islam <sami_islam@hotmail.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

class Collapsmi{

	/**
	* Standard Init function for tag hooks
	*/
	public static function Init( &$parser ){
		// Set a function hook associating the "collapsmi" magic word with our function
		$parser->setHook( 'collapsmi', __CLASS__.'::Render' );
		return true;
	}

	/**
	* Standard Render function for tag hooks
	*/
	static function Render( $input, array $args, Parser $parser, PPFrame $frame ){
		$parser->disableCache( );

		$attributes = Collapsmi::SetDefaults( $args );

		// Validating some attributes
		Collapsmi::ValidateDefaults( $attributes );

		// Are we toggling?
		$toggle = $attributes[Collapsmi::toggle];

		Collapsmi::AddJavaScriptSection( $attributes );
		$output = Collapsmi::ParseWikiText( $input, $parser, $frame );

		$renderOutput = '';

		if ( $toggle === 'false' ) {
			// RenderSingleTag is not allowed to contain any scripts
			// as content + escaped using htmlspecialchars
			$renderOutput = Collapsmi::RenderSingleTag( $attributes, $output );
		} else {
			// RenderToggleTag does not contain any content but is escaped
			// using htmlspecialchars
			$renderOutput = Collapsmi::RenderToggleTag( $attributes, $output );
		}

		return  $renderOutput;
	}

	/**
	 * Check the input argument list
	 * for required keys. If key is
	 * present then use it's value,
	 * else set default value.
	 *
	 * @param &$args reference to an array containing the tag attributes
	 * @return return an array containing all the attributes filled in by the user.
	 * Fill in default values for any missing attributes.
	 */
	static function SetDefaults( &$args ){

		$toggle = array_key_exists( Collapsmi::toggle, $args ) ? $args[Collapsmi::toggle] : 'false';

		$defaultToggleCollapseMsg = '';
		$defaultToggleExpandMsg = '';

		if ( $toggle === 'false' ) {
			$defaultToggleCollapseMsg = htmlspecialchars( wfMsg( 'collapsmi-collapse-text' ) );
			$defaultToggleExpandMsg = htmlspecialchars( wfMsg( 'collapsmi-expand-text' ) );
		} elseif ( $toggle === 'all' ) {
			$defaultToggleCollapseMsg = htmlspecialchars( wfMsg( 'collapsmi-collapseall-text' ) );
			$defaultToggleExpandMsg = htmlspecialchars( wfMsg( 'collapsmi-expandall-text' ) );
		} else { // $toggle = 'unique ids separated by ";"
			$defaultToggleCollapseMsg = htmlspecialchars( wfMsg( 'collapsmi-collapsespecific-text' ) );
			$defaultToggleExpandMsg = htmlspecialchars( wfMsg( 'collapsmi-expandspecific-text' ) );
		}

		// Check for specified default values and set the missing ones.
		$defaultValues = array(
			Collapsmi::toggle => $toggle, // Query this first
			Collapsmi::uniqueId => array_key_exists( Collapsmi::uniqueId, $args ) ? $args[Collapsmi::uniqueId] : Collapsmi::CreateWikiSafeUUID( ),
			Collapsmi::collapseText => array_key_exists( Collapsmi::collapseText, $args ) ? $args[Collapsmi::collapseText] : $defaultToggleCollapseMsg,
			Collapsmi::expandText => array_key_exists( Collapsmi::expandText, $args ) ? $args[Collapsmi::expandText] : $defaultToggleExpandMsg,
			Collapsmi::expandByDefault => array_key_exists( Collapsmi::expandByDefault, $args ) ? $args[Collapsmi::expandByDefault] : 'true',
			Collapsmi::backgroundColor => array_key_exists( Collapsmi::backgroundColor, $args ) ? $args[Collapsmi::backgroundColor] : '#FFFFCC',
			Collapsmi::url => array_key_exists( Collapsmi::url, $args ) ? $args[Collapsmi::url] : 'false',
			Collapsmi::urlHeight => array_key_exists( Collapsmi::urlHeight, $args ) ? $args[Collapsmi::urlHeight] : '500'
			);

		return $defaultValues;
	}

	/**
	* Validating some attributes to minimize
	* security leaks
	*
	* @param &$args reference to an array containing the default tag attributes
	*/
	static function ValidateDefaults( &$args ){

		// Validate background colour
		$tempBackgroungColor = $args[Collapsmi::backgroundColor];
		if ( !preg_match( '/^[a-z0-9#]+$/', $tempBackgroungColor ) ) {
			$args[Collapsmi::backgroundColor] = '#FFFFCC';
		}

		// Validate expand by default
		$tempExpandByDefault = $args[Collapsmi::expandByDefault];
		if ( $tempExpandByDefault !== "true" && $tempExpandByDefault !== "false" ) {
			$args[Collapsmi::expandByDefault] = "true";
		}

		// Validate url height
		$tempUrlHeight = $args[Collapsmi::urlHeight];
		if ( !preg_match( '/^\d*$/', $tempUrlHeight ) ) {
			$args[Collapsmi::urlHeight] = "500";
		}
	}

	/**
	 * Wiki cannot cope with "." added
	 * by setting the second parameter
	 * for uniqid to true, so get rid
	 * of it.
	 *
	 * @return a string containing an unique id.
	 */
	static function CreateWikiSafeUUID( ){
		// Note: Not using com_create_guid() since
		// that only works for Windows OS.
		$uuid = uniqid( 'collapsmi_', true );
		// replacing the "." added by the entropy
		$wikiSafeUUID = str_replace( '.', '' , $uuid );
		return $wikiSafeUUID;
	}

	/**
	 * Add the javascript part of the extension
	 *
	 * @param &$attributes reference to an array containing the tag attributes
	 */
	static function AddJavaScriptSection( &$attributes ){
		global $wgOut;

		$uniqueId = htmlspecialchars( $attributes[Collapsmi::uniqueId] );
		$expandByDefault = htmlspecialchars( $attributes[Collapsmi::expandByDefault] );
		$toggle = htmlspecialchars( $attributes[Collapsmi::toggle] );

		$javascriptHeading = '';

		if ( $toggle === 'false' ) {
			$javascriptHeading = Collapsmi::JavaScriptSectionForSingleTag( $expandByDefault, $uniqueId );
		} else {
			if ( $toggle === 'all' ) {
				$javascriptHeading = Collapsmi::JavaScriptSectionForToggleAllTags( $expandByDefault, $uniqueId );
			} else {
				// $toggle better be in the format 'id;id;id;...'
				$javascriptHeading = Collapsmi::JavaScriptSectionForToggleSpecificTags( $expandByDefault, $uniqueId, $toggle );
			}
		}

		$wgOut->addHTML( $javascriptHeading );
	}

	/**
	 * Add the javascript part of the extension for single tag
	 *
	 * @param $expandByDefault a tag attribute specifying whether
	 * the collapsmi tag should be collapsed or expanded by default
	 * @param $uniqueid an unique id for the truple {collapse, expand, content}
	 * @return the javascript text to use for the tag
	 */
	static function JavaScriptSectionForSingleTag( $expandByDefault, $uniqueId ){
		$defaultStateString = '';

		if ( $expandByDefault === 'true' ) {
			$defaultStateString = Collapsmi::CollapseTagWithId( $uniqueId );
		} else {
			$defaultStateString = Collapsmi::ExpandTagWithId( $uniqueId );
		}

		$javascriptHeading = '<script type="text/javascript" src="jquery.js"></script>
							  <script type="text/javascript">
							  jQuery( document ).ready( function() {' .
							  	// Use default values to hide / show
								$defaultStateString .
								'
								// If collapsed then show --Expand--
								// and hide --Collapse--Text--
								jQuery( ' . Xml::encodeJsVar( "#collapse" . $uniqueId ) . ' ).click( function() {' .
									Collapsmi::ExpandTagWithId( $uniqueId ) .
								'});

								// If expanded then show --Collapse--Text--
								// and hide --Expand--
								jQuery( ' . Xml::encodeJsVar( "#expand" .  $uniqueId ) . ' ).click( function() {' .
									Collapsmi::CollapseTagWithId( $uniqueId ) .
								'});
							});
							</script>' ;
		return $javascriptHeading;
	}

	/**
	 * Add the javascript part of the extension for toggle all behaviour
	 *
	 * @param $expandByDefault a tag attribute specifying whether
	 * the collapsmi tag should be collapsed or expanded by default
	 * @param $uniqueid an unique id for the truple {collapse, expand, content}
	 * @return the javascript text to use for the tag
	 */
	static function JavaScriptSectionForToggleAllTags( $expandByDefault, $uniqueId ){
		$defaultStateString = '';

		if ( $expandByDefault === 'true' ) {
			$defaultStateString = Collapsmi::ShowCollapseMultiple( $uniqueId );
		} else {
			$defaultStateString = Collapsmi::ShowExpandMultiple( $uniqueId );
		}

		$javascriptHeading = '<script type="text/javascript" src="jquery.js"></script>
							  <script type="text/javascript">
							  jQuery( document ).ready( function() {' .
								// Use default values to hide / show
								$defaultStateString .
								'
								// If collapsed then show --ExpandAll--Expand labels--
								// and hide --CollapseAll--Collapse labels--Content--
								jQuery( ' . Xml::encodeJsVar( "#collapsemultiple" .  $uniqueId ) . ' ).click( function() {' .
									Collapsmi::ShowExpandMultiple( $uniqueId ) .
									Collapsmi::CollapseAll( ) .
								'});

								// If expanded then show --CollapseAll--Collapse labels--Content--
								// and hide --ExpandAll--Expand labels--
								jQuery( ' . Xml::encodeJsVar( "#expandmultiple" .  $uniqueId ) . ' ).click( function() {' .
								   	Collapsmi::ShowCollapseMultiple( $uniqueId ) .
								   	Collapsmi::ExpandAll( ) .
								'});
							});
							</script>' ;
		return $javascriptHeading;
	}

	/**
	* Add the javascript part of the extension for toggle specific behaviour
	*
	* @param $expandByDefault a tag attribute specifying whether
	* the collapsmi tag should be collapsed or expanded by default
	* @param $uniqueIdForLabel an unique id for the truple {collapse, expand, content}
	* @param $uniqueIdsForTags a string containing unique ids for tags. The ids are
	* delimited using ';'
	* @return the javascript text to use for the tag
	*/
	static function JavaScriptSectionForToggleSpecificTags( $expandByDefault, $uniqueIdForLabel, $uniqueIdsForTags ){
		$defaultStateString = '';

		if ( $expandByDefault === 'true' ) {
			$defaultStateString = Collapsmi::ShowCollapseMultiple( $uniqueIdForLabel );
		} else {
			$defaultStateString = Collapsmi::ShowExpandMultiple( $uniqueIdForLabel );
		}

		$javascriptHeading = '<script type="text/javascript" src="jquery.js"></script>
							  <script type="text/javascript">
							  jQuery( document ).ready( function() {' .
							  	// Use default values to hide / show
								$defaultStateString .
								'
								// If collapsed then show --ExpandSpecific--Expand specific labels--
								// and hide --CollapseSpecific--Collapse specific labels--Content--
								jQuery( ' . Xml::encodeJsVar( "#collapsemultiple" .  $uniqueIdForLabel ) . ' ).click( function() {' .
									Collapsmi::ShowExpandMultiple( $uniqueIdForLabel ) .
									Collapsmi::ExpandSpecificTags( $uniqueIdsForTags ) .
								'});

								// If expanded then show --CollapseSpecific--Collapse specific labels--Content--
								// and hide --ExpandSpecific--Expand specific labels--
								jQuery( ' . Xml::encodeJsVar( "#expandmultiple" .  $uniqueIdForLabel ) . ' ).click( function() {' .
									Collapsmi::ShowCollapseMultiple( $uniqueIdForLabel ) .
									Collapsmi::CollapseSpecificTags( $uniqueIdsForTags ) .
								'});
							});
							</script>' ;
		return $javascriptHeading;
	}

	/**
	 * Parse wiki syntax if collapsmi tag
	 * contain wiki content
	 *
	 * @param $input the text contained within a tag
	 * @param $parser the parser
	 * @param $frame the frame
	 * @return the output to show as content
	 */
	static function ParseWikiText( $input, $parser, $frame ){
		// Always use no edit section since sections
		// cannot be edited within collapsmi
		$nonSectionedInput = Collapsmi::MakeWikiSectionsNonEditable( $input );
		$output = $parser->recursiveTagParse( $nonSectionedInput, $frame );

		return $output;
	}

	/**
	 * The edit link for sections does not work
	 * from inside the collapsmi tag - therefore
	 * getting rid of it here.
	 *
	 * @param $text the text to show as content.
	 * The '__NOEDITSECTION__' wiki syntax is added
	 * to the output since this cannot be used from
	 * inside the collapsmi tag
	 */
	static function MakeWikiSectionsNonEditable( $text ){
		$output = $text . ' __NOEDITSECTION__';
		return $output;
	}

	/**
	* Render single tag
	*
	* @param &$attributes reference to an array containing the tag attributes
	* @param $output the output to use as the content
	* @return the output to render for the <collapsmi> tag
	*
	* @remark The content of a single tag
	* 		  is not allowed to contain
	* 		  any scripts
	*/
	static function RenderSingleTag( &$attributes, $output ){
		// Extract all the attributes to use
		$uniqueId = $attributes[Collapsmi::uniqueId];
		$collapseText = $attributes[Collapsmi::collapseText];
		$expandText = $attributes[Collapsmi::expandText];
		$backgroundColor = $attributes[Collapsmi::backgroundColor];
		$url = $attributes[Collapsmi::url];
		$urlHeight = $attributes[Collapsmi::urlHeight];

		$content = '';

		if ( $url === 'false' ) {
			$content =
				'<br/><div class="collapsecontent" id=' . Sanitizer::escapeId( "content" . $uniqueId ) . ' style="background-color:' . htmlspecialchars( $backgroundColor ) .
				';margin-top:-4px;margin-bottom:10px;margin-left:0px;margin-right:100px;padding-left:10px;padding-right:10px;border-style:solid;' .
				'border-top-width:1px;border-left-width:0px;border-bottom-width:0px;border-right-width:0px;border-color:#C0C0C0">' . Collapsmi::SignalContentIfScriptFound( $output ) . '</div>'; // $output IS NOT ALLOWED to contain any scripts
		} else {
			$content =
				'<br/><iframe class="collapsecontent" id='. Sanitizer::escapeId( "content" . $uniqueId ) . ' style="background-color:' . htmlspecialchars( $backgroundColor ) .
				';border-style:solid;border-top-width:1px;border-left-width:0px;border-bottom-width:0px;border-right-width:0px;border-color:#C0C0C0"' .
				' src="' . htmlspecialchars( $url ) . '" width="94%" height="' . htmlspecialchars( $urlHeight ) . '"></iframe>';
		}

		$renderOutput =
			'<label class="collapselbl" id='. Sanitizer::escapeId( "collapse" . $uniqueId ) .
				' style="cursor:pointer;color:#3366FF;text-align:right;font-family:Verdana, Geneva, sans-serif;font-size:80%;margin:-10px 0px">' .
				' [&#150;] ' . htmlspecialchars( $collapseText ) . '</label>' . // using "en dash -> &#150;" instead of a minus since "en dash" is close to "+" in width
			'<label class="expandlbl" id=' . Sanitizer::escapeId( "expand" . $uniqueId ) .
				' style="cursor:pointer;color:#3366FF;text-align:right;font-family:Verdana, Geneva, sans-serif;font-size:80%;margin:-10px 0px">' .
				' [+] ' . htmlspecialchars( $expandText ) . '</label>' .
			$content;

		return $renderOutput;
	}

	/**
	* Render toggle all or toggle specific tag
	* Note: $output is not being used
	* at the moment.
	*
	* @param &$attributes reference to an array containing the tag attributes
	* @param $output the output to use as the content
	* @return the output to render for the <collapsmi> tag
	*/
	static function RenderToggleTag( &$attributes, $output ){
		// Extract all the attributes to use
		$uniqueId = $attributes[Collapsmi::uniqueId];
		$collapseText = $attributes[Collapsmi::collapseText];
		$expandText = $attributes[Collapsmi::expandText];

		$renderOutput =
			'<label id=' . Sanitizer::escapeId( "collapsemultiple" . $uniqueId ) .
				' style="cursor:pointer;color:#3366FF;text-align:right;font-family:Verdana, Geneva, sans-serif;font-size:80%;margin:-10px 0px">' .
				' [&#150;] ' . htmlspecialchars( $collapseText ) . '</label>' . // using "en dash -> &#150;" instead of a minus since "en dash" is close to "+" in width
			'<label id=' . Sanitizer::escapeId( "expandmultiple" . $uniqueId ) .
				' style="cursor:pointer;color:#3366FF;text-align:right;font-family:Verdana, Geneva, sans-serif;font-size:80%;margin:-10px 0px">' .
				' [+] ' . htmlspecialchars( $expandText ) . '</label>';

		return $renderOutput;
	}

	/**
	* HELPER FUNCTIONS
	*/

	/**
	* Helper function to expand tag
	*
	* @param $uniqueid
	*/
	static function ExpandTagWithId( $uniqueId ){
		$expandScript = '
						jQuery( ' . Xml::encodeJsVar( "#collapse" .  $uniqueId ) . ' ).hide();
						jQuery( ' . Xml::encodeJsVar( "#content" .  $uniqueId ) . ' ).hide();
						jQuery( ' . Xml::encodeJsVar( "#expand" .  $uniqueId ) . ' ).show();
						';
		return $expandScript;
	}

	/**
	* Helper function to collapse tag
	*
	* @param $uniqueid
	*/
	static function CollapseTagWithId( $uniqueId ){
		$collapseScript = '
						jQuery( ' . Xml::encodeJsVar( "#expand" .  $uniqueId ) . ' ).hide();
						jQuery( ' . Xml::encodeJsVar( "#collapse" .  $uniqueId ) . ' ).show();
						jQuery( ' . Xml::encodeJsVar( "#content" .  $uniqueId ) . ' ).show();
						';
		return $collapseScript;
	}

	/**
	* Helper function to show expand all/specific label
	*
	* @param $uniqueid
	*/
	static function ShowExpandMultiple( $uniqueId ){
		$expandAllScript = '
						jQuery( ' . Xml::encodeJsVar( "#collapsemultiple" .  $uniqueId ) . ' ).hide();
						jQuery( ' . Xml::encodeJsVar( "#expandmultiple" .  $uniqueId ) . ' ).show();
						';
		return $expandAllScript;
	}

	/**
	* Helper function to show collapse all/specific label
	*
	* @param $uniqueid
	*/
	static function ShowCollapseMultiple( $uniqueId ){
		$collapseAllScript = '
						jQuery( ' . Xml::encodeJsVar( "#expandmultiple" .  $uniqueId ) . ' ).hide();
						jQuery( ' . Xml::encodeJsVar( "#collapsemultiple" .  $uniqueId ) . ' ).show();
						';
		return $collapseAllScript;
	}

	/**
	 * Helper function to expand all
	 */
	static function ExpandAll( ){
		$expandAllScript = '
						jQuery( ".collapselbl" ).show();
						jQuery( ".expandlbl" ).hide();
						jQuery( ".collapsecontent" ).show();
						';
		return $expandAllScript;
	}

	/**
	* Helper function to collapse all
	*/
	static function CollapseAll( ){
		$collapseAllScript = '
						jQuery( ".collapselbl" ).hide();
						jQuery( ".expandlbl" ).show();
						jQuery( ".collapsecontent" ).hide();
						';
		return $collapseAllScript;
	}

	/**
	* Helper function to expand specific
	* tags with ids
	* Note: This will only work if
	* the user remembers to assign an
	* unique id to the tags themselves
	*
	* @param $uniqueIds a string containing unique ids for tags. The ids are
	* delimited using ';'
	* @return the javascript section to use for the tag expansion
	*/
	static function ExpandSpecificTags( $uniqueIds ){
		$arrayUniqueIds = explode( Collapsmi::uniqueidsSeparator, $uniqueIds );
		$expandSpecificScript = '';

		foreach ( $arrayUniqueIds as $i => $value ){
			$expandSpecificScript .= Collapsmi::ExpandTagWithId( $value );
		}

		return $expandSpecificScript;
	}

	/**
	 * Helper function to collapse specific
	 * tags with ids
	 * Note: This will only work if
	 * the user remembers to assign an
	 * unique id to the tags themselves
	 *
	 * @param $uniqueIds a string containing unique ids for tags. The ids are
	 * delimited using ';'
	 * @return the javascript section to use for the tag collapse
	 */
	static function CollapseSpecificTags( $uniqueIds ){
		$arrayUniqueIds = explode( Collapsmi::uniqueidsSeparator, $uniqueIds );

		$collapseSpecificScript = '';

		foreach ( $arrayUniqueIds as $i => $value ){
			$collapseSpecificScript .= Collapsmi::CollapseTagWithId( $value );
		}

		return $collapseSpecificScript;
	}

	/**
	* Safety function to check for
	* scripts inside the collapsmi
	* tag content. If there is any
	* found then the content the
	* user is informed.
	*
	* @param $content the content in which the presence of
	*		 a "script" string is searched
	* @return the content if no "script" string is found
	* 		  within. A user friendly message if a "script"
	*		  string is found
	*/
	static function SignalContentIfScriptFound( $content ){
		$output = '';

		// using case-insensitive search
		$pos = stripos( $content, "script" );
		if ($pos === false) { // the string script was not found in the content - it is safe
			$output = $content;
		} else {
			// give the user a hint as to why the content does
			// not appear as they might expect.
			$output = "The content contains the word s-c-r-i-p-t which is not allowed due to security reasons. Please use a a different word.";
		}

		return $output;
	}

	// Extension attribute names as contants
	// All the values MUST BE IN SMALL LETTERS!!!
	const uniqueId = 'uniqueid';
	const collapseText = 'collapsetext';
	const expandText = 'expandtext';
	const expandByDefault = 'expandbydefault';
	const backgroundColor = 'backgroundcolor';
	const toggle = 'toggle';
	const url = 'url';
	const urlHeight = 'urlheight';

	// Separator to use for toggling specific tags with unique id
	const uniqueidsSeparator = ';';
}

?>