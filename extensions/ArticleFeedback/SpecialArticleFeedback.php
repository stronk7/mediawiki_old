<?php
/**
 * SpecialPage for ArticleFeedback extension
 * 
 * @file
 * @ingroup Extensions
 */

class SpecialArticleFeedback extends SpecialPage {

	/* Methods */

	public function __construct() {
		parent::__construct( 'ArticleFeedback' );
	}

	public function execute( $par ) {
		global $wgUser, $wgOut, $wgRequest, $wgArticleFeedbackDashboard;

		$wgOut->addModules( 'ext.articleFeedback.dashboard' );
		$this->setHeaders();
		if ( $wgArticleFeedbackDashboard ) {
			// fetch the highest and lowest rated articles
			$highs_lows = $this->getDailyHighsAndLows();
			
			// determine the highest rated articles
			$highs = $this->getDailyHighs( $highs_lows );
			
			// .. and the lowest rated articles
			$lows = $this->getDailyLows( $highs_lows );
			
			//render daily highs table
			$this->renderDailyHighsAndLows( $highs, wfMsg( 'articleFeedback-table-caption-dailyhighs' ));
			
			//render daily lows table
			$this->renderDailyHighsAndLows( $lows, wfMsg( 'articleFeedback-table-caption-dailylows' ));

			/*
			This functionality does not exist yet.
			$this->renderWeeklyMostChanged();
			$this->renderRecentLows();*/
		} else {
			$wgOut->addWikiText( 'This page has been disabled.' );
		}
	}

	/* Protected Methods */

	/**
	 * Returns an HTML table containing data from a given two dimensional array.
	 * 
	 * @param $headings Array: List of rows, each a list of column data (values will be escaped)
	 * @param $rows Array: List of rows, each a list of either calss/column data pairs (values will
	 * be escaped), or arrays containing attr, text and html fields, used to set attributes, text or
	 * HTML content of the cell
	 * @param $attribs Array: List of HTML attributes to apply to the table
	 * @return String: HTML table code
	 */
	protected function renderTable( $caption, array $headings, array $rows, $id = null ) {
		global $wgOut;

		$table = Html::openElement( 'table', array(
			'class' => 'articleFeedback-table sortable', 'id' => $id
		) );
		// Caption
		$table .= Html::element( 'caption', array(), $caption );
		// Head
		$table .= Html::openElement( 'thead' );
		$table .= Html::openElement( 'tr' );
		foreach ( $headings as $heading ) {
			$table .= Html::element( 'th', array(), $heading );
		}
		$table .= Html::closeElement( 'tr' );
		$table .= Html::closeElement( 'thead' );
		// Body
		$table .= Html::openElement( 'tbody' );
		foreach ( $rows as $row ) {
			$table .= Html::openElement( 'tr' );
			foreach ( $row as $column ) {
				$attr = array();
				if ( is_array( $column ) ) {
					if ( isset( $column['attr'] ) && is_array( $column['attr'] ) ) {
						$attr = $column['attr'];
					}
					if ( isset( $column['text'] ) ) {
						$table .= Html::element( 'td', $attr, $column['text'] );
					} else if ( isset( $column['html'] ) ) {
						$table .= Html::rawElement( 'td', $attr, $column['html'] );
					} else {
						$table .= Html::element( 'td', $attr );
					}
				} else {
					$table .= Html::rawElement( 'td', $attr, $column );
				}
			}
			$table .= Html::closeElement( 'tr' );
		}
		$table .= Html::closeElement( 'tbody' );
		$table .= Html::closeElement( 'table' );
		$wgOut->addHtml( $table );
	}

	/**
	 * Renders daily highs and lows
	 * 
	 * @return String: HTML table of daily highs and lows
	 */
	protected function renderDailyHighsAndLows( $pages, $caption ) {
		global $wgOut, $wgUser;

		$rows = array();
		if ( $pages ) {
			foreach ( $pages as $page ) {
				$row = array();
				$pageTitle = Title::newFromId( $page['page'] );
				$row['page'] = $wgUser->getSkin()->link( $pageTitle, $pageTitle->getPrefixedText() );
				foreach ( $page['ratings'] as $id => $value ) {
					$row[] = array(
						'text' => $this->formatNumber( $value ),
						'attr' => array(
							'class' => 'articleFeedback-table-column-rating ' .
								'articleFeedback-table-column-score-' . round( $value )
						)
					);
				}
				$row[] = array(
					'text' => $this->formatNumber( $page['average'] ),
					'attr' => array(
						'class' => 'articleFeedback-table-column-average ' .
							'articleFeedback-table-column-score-' . round( $page['average'] )
					)
				);
				$rows[] = $row;
			}
		}
		
		$this->renderTable(
			$caption,
			array_merge(
				array( wfMsg( 'articleFeedback-table-heading-page' ) ),
				self::getCategories(),
				array( wfMsg( 'articleFeedback-table-heading-average' ) )
			),
			$rows,
			'articleFeedback-table-highsandlows'
		);
	}

	/**
	 * Renders weekly most changed
	 * 
	 * @return String: HTML table of weekly most changed
	 */
	protected function renderWeeklyMostChanged() {
		global $wgOut, $wgUser;

		$rows = array();
		foreach ( $this->getWeeklyMostChanged() as $page ) {
			$row = array();
			$pageTitle = Title::newFromText( $page['page'] );
			$row['page'] = $wgUser->getSkin()->link( $pageTitle, $pageTitle->getPrefixedText() );
			foreach ( $page['changes'] as $id => $value ) {
				$row[] = array(
					'text' => $this->formatNumber( $value ),
					'attr' => array(
						'class' => 'articleFeedback-table-column-changes'
					)
				);
			}
			$rows[] = $row;
		}
		$this->renderTable(
			wfMsg( 'articleFeedback-table-caption-weeklymostchanged' ),
			array_merge(
				array( wfMsg( 'articleFeedback-table-heading-page' ) ),
				self::getCategories()
			),
			$rows,
			'articleFeedback-table-weeklymostchanged'
		);
	}

	/**
	 * Renders recent lows
	 * 
	 * @return String: HTML table of recent lows
	 */
	protected function renderRecentLows() {
		global $wgOut, $wgUser, $wgArticleFeedbackRatings;

		$rows = array();
		foreach ( $this->getRecentLows() as $page ) {
			$row = array();
			$pageTitle = Title::newFromText( $page['page'] );
			$row['page'] = $wgUser->getSkin()->link( $pageTitle, $pageTitle->getPrefixedText() );
			foreach ( $wgArticleFeedbackRatings as $category ) {
				$row[] = array(
					'attr' => in_array( $category, $page['categories'] )
						? array(
							'class' => 'articleFeedback-table-column-bad',
							'data-sort-value' => 0
						)
						: array(
							'class' => 'articleFeedback-table-column-good',
							'data-sort-value' => 1
						),
					'html' => '&nbsp;'
				);
			}
			$rows[] = $row;
		}
		$this->renderTable(
			wfMsg( 'articleFeedback-table-caption-recentlows' ),
			array_merge(
				array( wfMsg( 'articleFeedback-table-heading-page' ) ),
				self::getCategories()
			),
			$rows,
			'articleFeedback-table-recentlows'
		);
	}

	/**
	 * Gets a list of articles which were rated exceptionally high or low.
	 * 
	 * - Based on average of all rating categories
	 * - Gets 50 highest rated and 50 lowest rated
	 * - Only consider articles with 10+ ratings in the last 24 hours
	 * 
	 * This data should be updated daily, ideally though a scheduled batch job
	 */
	protected function getDailyHighsAndLows() {
		global $wgMemc;
		
		// check if we've got results in the cache
		$key = wfMemcKey( 'article_feedback_stats_highs_lows' );
		$cache = $wgMemc->get( $key );
		if ( is_array( $cache )) {
			$highs_lows = $cache;
		} else {
			$dbr = wfGetDB( DB_SLAVE );
			// first find the freshest timestamp
			$row = $dbr->selectRow(
				'article_feedback_stats_highs_lows',
				array( 'afshl_ts' ),
				"",
				__METHOD__,
				array( "ORDER BY" => "afshl_ts DESC", "LIMIT" => 1 )
			);
			
			// if we have no results, just return
			if ( !$row || !$row->afshl_ts ) {
				return;
			}
			
			// select ratings with that ts
			$result = $dbr->select(
				'article_feedback_stats_highs_lows',
				array(
					'afshl_page_id',
					'afshl_avg_overall',
					'afshl_avg_ratings'
				),
				array( 'afshl_ts = ' . $row->afshl_ts),
				__METHOD__,
				array( "ORDER BY" => "afshl_avg_overall" )	
			);
			$highs_lows = $this->buildHighsAndLows( $result );
			$wgMemc->set( $key, $highs_lows, 86400 );
		}
		
		return $highs_lows;
	}

	/**
	 * Determine the 'highest' rated articles
	 * 
	 * Divides the number of ratings in half to determine the range of
	 * articles to consider 'highest'.  In the event of an odd number
	 * of articles, round up, giving preference to the 'highs' so
	 * everyone feels warm and fuzzy about having more 'highs', as 
	 * it were...
	 * 
	 * @param array Pre-orderd from lowest to highest
	 * @return array Containing the... highest rated article data
	 */
	protected function getDailyHighs( $highs_lows ) {
		$num_ratings = round( count( $highs_lows ) / 2 );
		return array_slice( $highs_lows, -$num_ratings, $num_ratings );
	}
	
	/**
	 * Determine the 'lowest' rated articles
	 * 
	 * @see $this->getDailyHighs()
	 * @param array Pre-orderd from lowest to highest
	 * @return array Containing the... lowest rated article data
	 */
	protected function getDailyLows( $highs_lows ) {
		$num_ratings = round( count( $highs_lows ) / 2, 0, PHP_ROUND_HALF_DOWN);
		return array_slice( $highs_lows, 0, $num_ratings );
	}
	
	/**
	 * Build data store of highs/lows for use when rendering table
	 * @param object Database result
	 * @return array
	 */
	public function buildHighsAndLows( $result ) {
		$highs_lows = array();
		foreach ( $result as $row ) {
			$highs_lows[] = array(
				'page' => $row->afshl_page_id,
				'ratings' => FormatJson::decode( $row->afshl_avg_ratings ),
				'average' => $row->afshl_avg_overall		
			);
		}
		return $highs_lows;
	}
	
	/**
	 * Gets a list of articles which have quickly changing ratings.
	 * 
	 * - Based on any rating category
	 * - Gets 50 most improved and 50 most worsened
	 * - Only consider articles with 100+ ratings in the last 7 days
	 * 
	 * This data should be updated daily, ideally though a scheduled batch job
	 */
	protected function getWeeklyMostChanged() {
		return array(
			array(
				'page' => 'Main Page',
				// List of differences for each rating in the past 7 days
				'changes' => array(
					1 => 1,
					2 => 2,
					3 => 0,
					4 => 0,
				),
			),
			array(
				'page' => 'Test Article',
				'changes' => array(
					1 => 0,
					2 => 0,
					3 => 1,
					4 => 2,
				),
			)
		);
	}

	/**
	 * Gets a list of articles which have recently recieved exceptionally low ratings.
	 * 
	 * - Based on any rating category
	 * - Gets up to 100 most recently poorly rated articles
	 * - Only consider articles which were rated lower than 3 for 7 out of the last 10 ratings
	 * 
	 * This data should be updated whenever article ratings are changed, ideally through a hook
	 */
	protected function getRecentLows() {
		return array(
			array(
				'page' => 'Main Page',
				// List of rating IDs that qualify as recent lows
				'categories' => array( 1, 4 ),
			),
			array(
				'page' => 'Test Article 1',
				'categories' => array( 1, 3 ),
			),
			array(
				'page' => 'Test Article 2',
				'categories' => array( 2, 3 ),
			),
			array(
				'page' => 'Test Article 3',
				'categories' => array( 3, 4 ),
			),
			array(
				'page' => 'Test Article 4',
				'categories' => array( 1, 2 ),
			)
		);
	}

	/* Protected Static Members */

	protected static $categories;

	/* Protected Static Methods */

	protected function formatNumber( $number ) {
		global $wgLang;
		
		return $wgLang->formatNum( number_format( $number, 2 ) );
	}

	protected function getCategories() {
		global $wgArticleFeedbackRatings;

		if ( !isset( self::$categories ) ) {
			$dbr = wfGetDB( DB_SLAVE );
			$res = $dbr->select(
				'article_feedback_ratings',
				array( 'aar_id', 'aar_rating' ),
				array( 'aar_id' => $wgArticleFeedbackRatings )
			);
			self::$categories = array();
			foreach ( $res as $row ) {
				self::$categories[$row->aar_id] = wfMsg( $row->aar_rating );
			}
		}
		return self::$categories;
	}
}
