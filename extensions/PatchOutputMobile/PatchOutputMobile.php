<?php

// Needs to be called within MediaWiki; not standalone
if ( !defined( 'MEDIAWIKI' ) ) {
	echo( "This is an extension to the MediaWiki package and cannot be run standalone.\n" );
	die( -1 );
}

// Define the extension; allows us make sure the extension is used correctly
define( 'PATCHOUTPUTMOBILE', 'PatchOutputMobile' );

// Extension credits that will show up on Special:Version
$wgExtensionCredits['other'][] = array(
	'name' => 'PatchOutputMobile',
	'version' => ExtPatchOutputMobile::VERSION,
	'author' => '[http://www.mediawiki.org/wiki/User:Preilly Preilly]',
	'description' => 'Patch HTML output for mobile',
	'url' => 'http://www.mediawiki.org/wiki/Extension:PatchOutputMobile',
);

$dir = dirname(__FILE__) . DIRECTORY_SEPARATOR;
$wgExtensionMessagesFiles['PatchOutputMobile'] = $dir . 'PatchOutputMobile.i18n.php';

$wgExtPatchOutputMobile = new ExtPatchOutputMobile();

$wgHooks['OutputPageBeforeHTML'][] = array( &$wgExtPatchOutputMobile,
											'onOutputPageBeforeHTML' );

class ExtPatchOutputMobile {
	const VERSION = '0.2.6';

	private $doc;
	
	public static $messages = array();

	public $itemsToRemove = array(
		'#contentSub',		  # redirection notice
		'div.messagebox',	  # cleanup data
		'#siteNotice',		  # site notice
		'#siteSub',			  # "From Wikipedia..."
		'#jump-to-nav',		  # jump-to-nav
		'div.editsection',	  # edit blocks
		'div.infobox',		  # Infoboxes in the article
		'table.toc',		  # table of contents
		'#catlinks',		  # category links
		'div.stub',			  # stub warnings
		'table.metadata',	  # ugly metadata
		'form',
		'div.sister-project',
		'script',
		'div.magnify',		  # stupid magnify thing
		'.editsection',
		'span.t',
		'sup[style*="help"]',
		'.portal',
		'#protected-icon',
		'.printfooter',
		'.boilerplate',
		'#id-articulo-destacado',
		'#coordinates',
		'#top',
		'.hiddenStructure',
		'.noprint',
		'.medialist',
		'.mw-search-createlink'
	);

	public function onOutputPageBeforeHTML( &$out, &$text ) {
		// Need to stash the results of the "wfMsg" call before the Output Buffering handler
		// because at this point the database connection is shut down, etc.
		ExtPatchOutputMobile::$messages['patch-output-mobile-show'] = wfMsg( 'patch-output-mobile-show' );
		ExtPatchOutputMobile::$messages['patch-output-mobile-hide'] = wfMsg( 'patch-output-mobile-hide' );
		ExtPatchOutputMobile::$messages['patch-output-mobile-back-to-top'] = wfMsg( 'patch-output-mobile-back-to-top' );
		
		ob_start( array( $this, 'parse' ) );
		return true;
	}

	private function showHideCallback( $matches ) {
		static $headings = 0;
		$show = ExtPatchOutputMobile::$messages['patch-output-mobile-show'];
		$hide = ExtPatchOutputMobile::$messages['patch-output-mobile-hide'];
		$backToTop = ExtPatchOutputMobile::$messages['patch-output-mobile-back-to-top'];
		++$headings;
		// Back to top link
		$base = "<div class='section_anchors' id='anchor_" . intval( $headings - 1 ) .
			"'><a href='#section_" . intval( $headings - 1 ) .
			"' class='back_to_top'>&uarr; {$backToTop}</a></div>";
		// generate the HTML we are going to inject
		$buttons = "<button class='section_heading show' section_id='{$headings}'>{$show}</button><button class='section_heading hide' section_id='{$headings}'>{$hide}</button>";
		$base .= "<h2 class='section_heading' id='section_{$headings}'{$matches[1]}{$buttons} <span>{$matches[2]}</span></h2><div class='content_block' id='content_{$headings}'>";

		if ( $headings > 1 ) {
			// Close it up here
			$base = '</div>' . $base;
		}

		$GLOBALS['headings'] = $headings;

		return $base;
	}

	public function javascriptize( $s ) {
		// Closures are a PHP 5.3 feature.
		// MediaWiki currently requires PHP 5.2.3 or higher.
		// So, using old style for now.
		$s = preg_replace_callback(
			'/<h2(.*)<span class="mw-headline" [^>]*>(.+)<\/span>\w*<\/h2>/',
			array( $this, 'showHideCallback' ),
			$s
		);

		// if we had any, make sure to close the whole thing!
		if ( isset( $GLOBALS['headings'] ) && $GLOBALS['headings'] > 0 ) {
			$s = str_replace(
				'<div class="visualClear">',
				'</div><div class="visualClear">',
				$s
			);
		}

		return $s;
	}

	public function parse( $s ) {
		return $this->DOMParse( $s );
	}

	private function parseItemsToRemove() {
		$itemToRemoveRecords = array();

		foreach ( $this->itemsToRemove as $itemToRemove ) {
			$type = '';
			$rawName = '';
			CssDetection::detectIdCssOrTag( $itemToRemove, $type, $rawName );
			$itemToRemoveRecords[$type][] = $rawName;
		}

		return $itemToRemoveRecords;
	}

	public function DOMParse( $html ) {
		libxml_use_internal_errors( true );
		$this->doc = DOMDocument::loadHTML( $html );
		libxml_use_internal_errors( false );
		$this->doc->preserveWhiteSpace = false;
		$this->doc->strictErrorChecking = false;

		$itemToRemoveRecords = $this->parseItemsToRemove();

		$titleNode = $this->doc->getElementsByTagName( 'title' );

		if ( $titleNode->length > 0 ) {
			$title = $titleNode->item( 0 )->nodeValue;
		}

		// Tags

		// You can't remove DOMNodes from a DOMNodeList as you're iterating
		// over them in a foreach loop. It will seemingly leave the internal
		// iterator on the foreach out of wack and results will be quite
		// strange. Though, making a queue of items to remove seems to work.
		// For example:

		$domElemsToRemove = array();
		foreach ( $itemToRemoveRecords['TAG'] as $tagToRemove ) {
			$tagToRemoveNodes = $this->doc->getElementsByTagName( $tagToRemove );

			foreach( $tagToRemoveNodes as $tagToRemoveNode ) {
				if ( $tagToRemoveNode ) {
					$domElemsToRemove[] = $tagToRemoveNode;
				}
			}
		}

		foreach( $domElemsToRemove as $domElement ) {
			$domElement->parentNode->removeChild( $domElement );
		}

		// Elements with named IDs
		foreach ( $itemToRemoveRecords['ID'] as $itemToRemove ) {
			$itemToRemoveNode = $this->doc->getElementById( $itemToRemove );
			if ( $itemToRemoveNode ) {
				$removedItemToRemove = $itemToRemoveNode->parentNode->removeChild( $itemToRemoveNode );
			}
		}

		// CSS Classes
		$xpath = new DOMXpath( $this->doc );
		foreach ( $itemToRemoveRecords['CLASS'] as $classToRemove ) {
			$elements = $xpath->query( '//*[@class="' . $classToRemove . '"]' );

			foreach( $elements as $element ) {
				$removedElement = $element->parentNode->removeChild( $element );
			}
		}

		// Tags with CSS Classes
		foreach ( $itemToRemoveRecords['TAG_CLASS'] as $classToRemove ) {
			$parts = explode( '.', $classToRemove );

			$elements = $xpath->query(
				'//' . $parts[0] . '[@class="' . $parts[1] . '"]'
			);

			foreach( $elements as $element ) {
				$removedElement = $element->parentNode->removeChild( $element );
			}
		}
		
		// Handle red links with action equal to edit
		$redLinks = $xpath->query( '//a[@class="new"]' );
		foreach( $redLinks as $redLink ) {
			//PHP Bug #36795 — Inappropriate "unterminated entity reference"
			$spanNode = $this->doc->createElement( "span", str_replace( "&", "&amp;", $redLink->nodeValue ) );

			if ( $redLink->hasAttributes() ) {
				$attributes = $redLink->attributes;
				foreach ( $attributes as $i => $attribute ) {
					$spanNode->setAttribute( $attribute->name, $attribute->value );
				}
			}

			$redLink->parentNode->replaceChild( $spanNode, $redLink );
		}

		$content = $this->doc->getElementById( 'content' );

		$contentHtml = $this->doc->saveXML( $content, LIBXML_NOEMPTYTAG );

		if ( empty( $title ) ) {
			$title = 'Wikipedia';
		}

		require( 'views/notices/_donate.html.php' );
		require( 'views/layout/_search_webkit.html.php' );
		require( 'views/layout/_footmenu_default.html.php' );
		require( 'views/layout/application.html.php' );

		return ( strlen( $contentHtml ) > 4000 ) ? $this->javascriptize( $applicationHtml ) : $applicationHtml;
	}
}

class CssDetection {

	public static function detectIdCssOrTag( $snippet, &$type, &$rawName ) {
		$output = '';

		if ( strpos( $snippet, '.' ) === 0 ) {
			$output = 'Class found: ';
			$type = 'CLASS';
			$rawName = substr( $snippet, 1 );
		}

		if ( strpos( $snippet, '#' ) === 0 ) {
			$output = 'ID found: ';
			$type = 'ID';
			$rawName = substr( $snippet, 1 );
		}

		if ( strpos( $snippet, '.' ) !== 0 &&
			strpos( $snippet, '.' ) !== false ) {
			$output = 'Tag with Class found: ';
			$type = 'TAG_CLASS';
			$rawName = $snippet;
		}

		if ( strpos( $snippet, '.' ) === false &&
			strpos( $snippet, '#' ) === false &&
			strpos( $snippet, '[' ) === false &&
			strpos( $snippet, ']' ) === false ) {
			$output = 'Tag found: ';
			$type = 'TAG';
			$rawName = $snippet;
		}

		if ( empty( $output ) ) {
			$output = 'Unknown HTML snippet found: ';
			$type = 'UNKNOWN';
			$rawName = $snippet;
		}

		return $output;
	}
}