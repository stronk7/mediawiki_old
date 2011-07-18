<?php
/**
 * Hooks for ArticleEmblems extension
 * 
 * @file
 * @ingroup Extensions
 */

class ArticleEmblemsHooks {
	
	/* Protected Static Members */
	
	protected static $emblems = array();
	
	/* Static Methods */

	/**
	 * LoadExtensionSchemaUpdates hook
	 *
	 * @param $updater DatabaseUpdater
	 */
	public static function loadExtensionSchemaUpdates( $updater = null ) {
		if ( $updater === null ) {
			global $wgExtNewTables;
			$wgExtNewTables[] = array( 'articleemblems', dirname( __FILE__ ) . '/patches/ArticleEmblems.sql' );
		} else {
			$updater->addExtensionUpdate( array( 'addTable', 'articleemblems', dirname( __FILE__ ) . '/patches/ArticleEmblems.sql', true ) );
		}
		return true;
	}

	/**
	 * ParserTestTables hook
	 */
	public static function parserTestTables( &$tables ) {
		$tables[] = 'articleemblems';
		return true;
	}

	/**
	 * ParserInit hook
	 *
	 * @param $parser Parser
	 */
	public static function parserInit( &$parser ) {
		$parser->setHook( 'emblem', 'ArticleEmblemsHooks::render' );
		return true;
	}
	
	/**
	 * Renderer for <emblem> parser tag hook
	 *
	 * @param $input
	 * @param $args Array
	 * @param $parser Parser
	 * @param $frame
	 */
	public static function render( $input, $args, $parser, $frame ) {
		self::$emblems[] = $parser->recursiveTagParse( $input, $frame );
		return null;
	}
	
	/**
	 * ArticleSaveComplete hook
	 *
	 * @param $article Article
	 */
	public static function articleSaveComplete( &$article ) {
		$articleId = $article->getId();
		$dbw = wfGetDB( DB_MASTER );
		$dbw->delete( 'articleemblems', array( 'ae_article' => $articleId ), __METHOD__ );
		$emblems = array();
		foreach ( self::$emblems as $emblem ) {
			$emblems[] = array( 'ae_article' => $articleId, 'ae_value' => $emblem );
		}
		$dbw->insert( 'articleemblems', array_reverse( $emblems ), __METHOD__ );
		return true;
	}
	
	/**
	 * ArticleViewHeader hook
	 *
	 * @param $article Article
	 * @param $outputDone
	 * @param $pcache
	 */
	public static function articleViewHeader( &$article, &$outputDone, &$pcache ) {
		global $wgOut;
		
		$wgOut->addModuleStyles( 'ext.articleEmblems' );
		
		$articleId = $article->getId();
		$dbr = wfGetDB( DB_SLAVE );
		$results = $dbr->select( 'articleemblems', 'ae_value', array( 'ae_article' => $articleId ), __METHOD__ );
		$emblems = array();
		foreach ( $results as $emblem ) {
			$emblems[] = '<li class="articleEmblem">' . $emblem['ae_value'] . '</li>';
		}
		$wgOut->addHtml( '<ul id="articleEmblems">' . implode( $emblems ) . '</ul>' );
		return true;
	}
}
