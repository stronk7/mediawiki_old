<?php

/**
 * A special page that displays installed extensions.
 * Based on Special:Version.
 *
 * @ingroup ExtensionManagement
 * @ingroup SpecialPage
 */

class SpecialExtensionManagement extends SpecialPage {

	private $firstExtOpened = true;

	static $viewvcUrls = array(
		'svn+ssh://svn.wikimedia.org/svnroot/mediawiki' => 'http://svn.wikimedia.org/viewvc/mediawiki',
		'http://svn.wikimedia.org/svnroot/mediawiki' => 'http://svn.wikimedia.org/viewvc/mediawiki',
		# Doesn't work at the time of writing but maybe some day: 
		'https://svn.wikimedia.org/viewvc/mediawiki' => 'http://svn.wikimedia.org/viewvc/mediawiki',
	);

	function __construct() {
		parent::__construct( 'ExtensionManagement' );
	}


	function execute( $par ) {
		global $wgOut, $wgContLang;

		$this->setHeaders();
		$this->outputHeader();

		$wgOut->addHTML( Xml::openElement( 'div',
			array( 'dir' => $wgContLang->getDir() ) ) );
		$wgOut->addWikiMsg( 'extensionmanagement-page-explanation', '' );

		$text =
			$this->displayExtensions();

		$wgOut->addWikiText( $text );
		$wgOut->addHTML( '</div>' );
	}


	function displayExtensions() {
		global $wgOut, $wgExtensionCredits;

		$extensionAmount = 0;

		$extensionTypes = array(
			'specialpage' => wfMsg( 'version-specialpages' ),
			'parserhook' => wfMsg( 'version-parserhooks' ),
			'variable' => wfMsg( 'version-variables' ),
			'media' => wfMsg( 'version-mediahandlers' ),
			'other' => wfMsg( 'version-other' ),
		);

		$out = Xml::element( 'h2', array( 'id' => 'mw-version-ext' ), wfMsg( 'version-extensions' ) ) .
			Xml::openElement( 'table', array( 'class' => 'wikitable', 'id' => 'sv-ext' ) );

		foreach ( $extensionTypes as $type => $text ) {
			if ( isset ( $wgExtensionCredits[$type] ) && count ( $wgExtensionCredits[$type] ) ) {
				$out .= $this->openExtType( $text, 'credits-' . $type );

				usort( $wgExtensionCredits[$type], array( $this, 'compare' ) );

				foreach ( $wgExtensionCredits[$type] as $extension ) {
					$out .= $this->formatCredits( $extension );
				}
			}
		}
		//$wgOut->addWikiText( $out );
		$out .= Xml::closeElement( 'table' );
		return $out;
	}

	private function openExtType( $text, $name = null ) {
		$out = '';
		$opt = array( 'colspan' => 2 );

		if( !$this->firstExtOpened ) {
			// Insert a spacing line
			$out .= '<tr class="sv-space">' . Xml::element( 'td', $opt ) . "</tr>\n";
		}
		$this->firstExtOpened = false;

		if( $name )
			$opt['id'] = "sv-$name";

		$out .= "<tr>" . Xml::element( 'th', $opt, $text ) . "</tr>\n";
		return $out;
	}

	/** Callback to sort extensions by type */
	function compare( $a, $b ) {
		global $wgLang;
		if( $a['name'] === $b['name'] ) {
			return 0;
		} else {
			return $wgLang->lc( $a['name'] ) > $wgLang->lc( $b['name'] )
				? 1
				: -1;
		}
	}
	function formatCredits( $extension ) {
		$out = '';
		$name = isset( $extension['name'] ) ? $extension['name'] : '[no name]';

		if ( isset( $extension['path'] ) ) {
			$svnInfo = SpecialVersion::getSvnInfo( dirname($extension['path']) );
			$directoryRev = isset( $svnInfo['directory-rev'] ) ? $svnInfo['directory-rev'] : null;
			$checkoutRev = isset( $svnInfo['checkout-rev'] ) ? $svnInfo['checkout-rev'] : null;
			$viewvcUrl = isset( $svnInfo['viewvc-url'] ) ? $svnInfo['viewvc-url'] : null;
		} else {
			$directoryRev = null;
			$checkoutRev = null;
			$viewvcUrl = null;
		}

		# Make main link (or just the name if there is no URL)
		if ( isset( $extension['url'] ) ) {
			$mainLink = "[{$extension['url']} $name]";
		} else {
			$mainLink = $name;
		}
		# Version
		if ( isset( $extension['version'] ) ) {
			$versionText = '<span class="mw-version-ext-version"><em>' . 
				wfMsg( 'version-version', $extension['version'] ) . 
				'</em></span> | ';
		} else {
			$versionText = '';
		}
		/*
		if ( $checkoutRev ) {
			$svnText = wfMsg( 'version-svn-revision', $directoryRev, $checkoutRev );
			$svnText = isset( $viewvcUrl ) ? "[$viewvcUrl $svnText]" : $svnText;
		} else {
			$svnText = false;
		}*/

		# Make description text
		$description = isset ( $extension['description'] ) ? $extension['description'] : '';
		if( isset ( $extension['descriptionmsg'] ) ) {
			# Look for a localized description
			$descriptionMsg = $extension['descriptionmsg'];
			if( is_array( $descriptionMsg ) ) {
				$descriptionMsgKey = $descriptionMsg[0]; // Get the message key
				array_shift( $descriptionMsg ); // Shift out the message key to get the parameters only
				array_map( "htmlspecialchars", $descriptionMsg ); // For sanity
				$msg = wfMsg( $descriptionMsgKey, $descriptionMsg );
			} else {
				$msg = wfMsg( $descriptionMsg );
			}
 			if ( !wfEmptyMsg( $descriptionMsg, $msg ) && $msg != '' ) {
 				$description = $msg;
 			}
		}
		$author = isset ( $extension['author'] ) ? $extension['author'] : array();
		$extDescAuthor = "<td>$description <br />". $versionText . $this->listToText( (array)$author, false ) . "</td>
			</tr>\n";

		$extNameVer = "<tr>
				<td><em>$mainLink</em></td>";

		return $extNameVer.$extDescAuthor;
	}
	/**
	 * @param array $list
	 * @param bool $sort
	 * @return string
	 */
	function listToText( $list, $sort = true ) {
		$cnt = count( $list );

		if ( $cnt == 1 ) {
			// Enforce always returning a string
			return (string)self::arrayToString( $list[0] );
		} elseif ( $cnt == 0 ) {
			return '';
		} else {
			global $wgLang;
			if ( $sort ) {
				sort( $list );
			}
			return $wgLang->listToText( array_map( array( __CLASS__, 'arrayToString' ), $list ) );
		}
	}

	/**
	 * @param mixed $list Will convert an array to string if given and return
	 *                    the paramater unaltered otherwise
	 * @return mixed
	 */
	static function arrayToString( $list ) {
		if( is_array( $list ) && count( $list ) == 1 )
			$list = $list[0];
		if( is_object( $list ) ) {
			$class = get_class( $list );
			return "($class)";
		} elseif ( !is_array( $list ) ) {
			return $list;
		} else {
			if( is_object( $list[0] ) )
				$class = get_class( $list[0] );
			else 
				$class = $list[0];
			return "($class, {$list[1]})";
		}
	}
}

