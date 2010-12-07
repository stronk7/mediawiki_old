<?php
/**
 * Hooks for ArticleFeedback
 *
 * @file
 * @ingroup Extensions
 */

class ArticleFeedbackHooks {
	
	protected static $modules = array(
		'ext.articleFeedback-alpha' => array(
			'scripts' => 'ext.articleFeedback-alpha/ext.articleFeedback-alpha.js',
			'styles' => 'ext.articleFeedback-alpha/ext.articleFeedback-alpha.css',
			'messages' => array(
				'articlefeedback-alpha-yourfeedback',
				'articlefeedback-alpha-pleaserate',
				'articlefeedback-alpha-submit',
				'articlefeedback-alpha-rating-wellsourced',
				'articlefeedback-alpha-rating-neutrality',
				'articlefeedback-alpha-rating-completeness',
				'articlefeedback-alpha-rating-readability',
				'articlefeedback-alpha-rating-wellsourced-tooltip',
				'articlefeedback-alpha-rating-neutrality-tooltip',
				'articlefeedback-alpha-rating-completeness-tooltip',
				'articlefeedback-alpha-rating-readability-tooltip',
				'articlefeedback-alpha-error',
				'articlefeedback-alpha-thanks',
				'articlefeedback-alpha-articlerating',
				'articlefeedback-alpha-featurefeedback',
				'articlefeedback-alpha-noratings',
				'articlefeedback-alpha-stalemessage-revisioncount',
				'articlefeedback-alpha-stalemessage-norevisioncount',
				'articlefeedback-alpha-results-show',
				'articlefeedback-alpha-results-hide',
				'articlefeedback-alpha-survey-title',
				'articlefeedback-alpha-survey-thanks',
			),
			'dependencies' => array( 'jquery.ui.dialog', 'jquery.tipsy', 'jquery.stars' ),
		),
		'ext.articleFeedback-beta' => array(
			'scripts' => 'ext.articleFeedback-beta/ext.articleFeedback-beta.js',
			'styles' => 'ext.articleFeedback-beta/ext.articleFeedback-beta.css',
			'messages' => array(
				'articlefeedback-beta-form-tab-label',
				'articlefeedback-beta-form-panel-title',
				'articlefeedback-beta-form-panel-instructions',
				'articlefeedback-beta-form-panel-notice',
				'articlefeedback-beta-form-panel-submit',
				'articlefeedback-beta-report-tab-label',
				'articlefeedback-beta-report-panel-title',
				'articlefeedback-beta-report-panel-description',
				'articlefeedback-beta-field-wellsourced-label',
				'articlefeedback-beta-field-wellsourced-tip',
				'articlefeedback-beta-field-complete-label',
				'articlefeedback-beta-field-complete-tip',
				'articlefeedback-beta-field-neutral-label',
				'articlefeedback-beta-field-neutral-tip',
				'articlefeedback-beta-field-readable-label',
				'articlefeedback-beta-field-readable-tip',
			),
			'dependencies' => array( 'jquery.tipsy', 'jquery.localize' ),
		),
		'jquery.stars' => array(
			'scripts' => 'jquery.stars/jquery.stars.js',
			'styles' => 'jquery.stars/jquery.stars.css',
		),
	);
	
	/* Static Methods */
	
	/**
	 * LoadExtensionSchemaUpdates hook
	 */
	public static function loadExtensionSchemaUpdates( $updater = null ) {
		if ( $updater === null ) {
			global $wgExtNewTables;
			$wgExtNewTables[] = array(
				'article_feedback',
				dirname( __FILE__ ) . '/sql/ArticleFeedback.sql'
			);
		} else {
			$dir = dirname( __FILE__ );
			$db = $updater->getDB();

			if ( !$db->tableExists( 'article_feedback' ) ) {
				if ( $db->tableExists( 'article_assessment' ) ) {
					$updater->addExtensionUpdate( array( 'addTable', 'article_feedback',
						$dir . '/sql/RenameTables.sql', true ) ); // Rename tables
				} else {
					$updater->addExtensionUpdate( array( 'addTable', 'article_feedback',
						$dir . '/sql/ArticleFeedback.sql', true ) ); // Initial install tables
				}
			}
		}
		return true;
	}
	
	/**
	 * ParserTestTables hook
	 */
	public static function parserTestTables( &$tables ) {
		$tables[] = 'article_feedback';
		$tables[] = 'article_feedback_pages';
		$tables[] = 'article_feedback_ratings';
		return true;
	}
	
	/**
	 * BeforePageDisplay hook
	 */
	public static function beforePageDisplay( $out ) {
		global $wgRequest, $wgArticleFeedbackCategories, $wgArticleFeedbackVersion;
		
		$title = $out->getTitle();
		
		// Restrict ratings to... 
		if (
			// Main namespace articles
			$title->getNamespace() == NS_MAIN
			// View pages
			&& $wgRequest->getVal( 'action', 'view' ) == 'view'
			// Current revision
			&& !$wgRequest->getCheck( 'diff' )
			&& !$wgRequest->getCheck( 'oldid' )
			// Articles in valid categories
			&& count( $wgArticleFeedbackCategories )
			&& self::isInCategories( $title->getArticleId(), $wgArticleFeedbackCategories )
		) {
			if ( $wgArticleFeedbackVersion == 'beta' ) {
				$out->addModules( 'ext.articleFeedback-beta' );
			} else {
				$out->addModules( 'ext.articleFeedback-alpha' );
			}
		}
		return true;
	}
	
	/*
	 * ResourceLoaderRegisterModules hook
	 */
	public static function resourceLoaderRegisterModules( &$resourceLoader ) {
		global $wgExtensionAssetsPath;
		$localpath = dirname( __FILE__ ) . '/modules';
		$remotepath = "$wgExtensionAssetsPath/ArticleFeedback/modules";
		foreach ( self::$modules as $name => $resources ) {
			$resourceLoader->register(
				$name, new ResourceLoaderFileModule( $resources, $localpath, $remotepath )
			);
		}
		return true;
	}
	
	/* Protected Static Methods */
	
	/**
	 * Returns whether an article is in the specified categories
	 * 
	 * @param $articleId Integer: Article ID
	 * @param $categories Array: List of category names (without Category: prefix, with underscores)
	 * 
	 * @return Boolean: True if article is in one of the values of $categories 
	 */
	protected static function isInCategories( $articleId, $categories ) {
		$dbr = wfGetDB( DB_SLAVE );
		return (bool)$dbr->selectRow( 'categorylinks', '1',
			array(
				'cl_from' => $articleId,
				'cl_to' => $categories,
			),
			__METHOD__
		);
	}
}
