<?php

/**
 * Extension HideNamespace
 * Allows hiding namespace in the page title.
 *
 * @file
 * @ingroup Extensions
 * @author Matěj Grabovský (mgrabovsky.github.com)
 * @license GNU General Public Licence 2.0 or later
 */

if( !defined( 'MEDIAWIKI' ) ) {
	echo 'This file is an extension to the MediaWiki software and ',
		'cannot be used standalone.', PHP_EOL;
	die();
}

$dir = dirname( __FILE__ ) . DIRECTORY_SEPARATOR;
$wgExtensionMessagesFiles['HideNamespace'] = $dir . 'HideNamespace.i18n.php';
$wgExtensionMessagesFiles['HideNamespaceMagic'] = $dir . 'HideNamespace.i18n.magic.php';

$wgExtensionFunctions[] = 'wfHideNamespaceSetup';
$wgExtensionCredits['other'][] = array(
	'path'           => __FILE__,
	'name'           => 'HideNamespace',
	'descriptionmsg' => 'hidens-desc',
	'version'        => '1.4.3',
	'author'         => 'Matěj Grabovský',
	'url'            => 'http://www.mediawiki.org/wiki/Extension:HideNamespace',
);

function wfHideNamespaceSetup() {
	global $wgHooks;

	$extHidensObj = new ExtensionHideNamespace;

	// Register hooks
	$wgHooks['ParserFirstCallInit'][] = array( &$extHidensObj, 'registerParser' );
	$wgHooks['ArticleViewHeader'][] = array( &$extHidensObj, 'onArticleViewHeader' );
	$wgHooks['BeforePageDisplay'][] = array( &$extHidensObj, 'onBeforePageDisplay' );
}

class ExtensionHideNamespace {
	private $namespace, $namespaceText;
	private $hide = null;

	/**
	 * Register the parser functions
	 */
	public function registerParser( $parser ) {
		$parser->setFunctionHook( 'hidens', array( &$this, 'hideNs' ) );
		$parser->setFunctionHook( 'showns', array( &$this, 'showNs' ) );

		return true;
	}

	/**
	 * Callback for our parser function {{#hidens:}}
	 */
	public function hideNs() {
		$this->hide = true;

		return null;
	}

	/**
	 * Callback for our parser function {{#showns:}}
	 */
	public function showNs() {
		$this->hide = false;

		return null;
	}

	/**
	 * Callback for the ArticleViewHeader hook.
	 *
	 * Retrieves the namespace and localized namespace text and decides whether the
	 * namespace should be hidden
	 */
	public function onArticleViewHeader( $article ) {
		global $wgHidensNamespaces, $wgContLang;

		$this->namespace = $article->getTitle()->getNamespace();
		$this->namespaceText = $wgContLang->getNsText( $this->namespace );

		if( $this->namespace == NS_MAIN ) {
			$this->hide = false;
		} else {
			/**
			* Hide namespace if either
			* -  it was forced by user (with {{#hidens:}}) or
			* -  the current namespace is in $wgHidensNamespaces AND
			*      {{#showns:}} wasn't called
			*/
			$visibilityForced = !is_null( $this->hide );
			$hideByUser = $visibilityForced && $this->hide;
			$hideBySetting = isset( $wgHidensNamespaces ) &&
				in_array( $this->namespace, $wgHidensNamespaces );

			$this->hide = $hideByUser || ( $hideBySetting && $this->hide !== false );
		}

		return true;
	}

	/**
	 * Callback for the OutputPageBeforeHTML hook
	 *
	 * Removes the namespace from article header and page title
	 */
	public function onBeforePageDisplay( $out ) {
		if( $this->hide ) {
			$out->setPageTitle( mb_substr( $out->getPageTitle(),
				mb_strlen( $this->namespaceText ) + 1 ) );
		}

		return true;
	}
}

