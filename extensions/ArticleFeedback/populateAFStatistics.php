<?php

$IP = getenv( 'MW_INSTALL_PATH' );
if ( $IP === false ) {
	$IP = dirname( __FILE__ ) . '/../..';
}
require( "$IP/maintenance/Maintenance.php" );

class PopulateAFStatistics extends Maintenance {
	/**
	 * The number of records to attempt to insert at any given time.
	 * @var int
	 */
	public $insert_batch_size = 100;
	
	/**
	 * The period (in seconds) before now for which to gather stats
	 * @var int
	 */
	public $polling_period = 86400;
	
	/**
	 * The formatted timestamp from which to determine stats
	 * @var int
	 */
	protected $lowerBoundTimestamp;
	
	/**
	 * DB slave
	 * @var object
	 */
	protected $dbr;
	
	/**
	 * DB master
	 * @var object
	 */
	protected $dbw;
	
	public function __construct() {
		parent::__construct();
		$this->mDescription = "Populates the article feedback stats tables";
	}
	
	public function syncDBs() {
		// FIXME: Copied from populateAFRevisions.php, which coppied from updateCollation.php, should be centralized somewhere
		$lb = wfGetLB();
		// bug 27975 - Don't try to wait for slaves if there are none
		// Prevents permission error when getting master position
		if ( $lb->getServerCount() > 1 ) {
			$dbw = $lb->getConnection( DB_MASTER );
			$pos = $dbw->getMasterPos();
			$lb->waitForAll( $pos );
		}
	}
	
	public function execute() {
		global $wgMemc;
		$this->dbr = wfGetDB( DB_SLAVE );
		$this->dbw = wfGetDB( DB_MASTER );
		
		// the data structure to store ratings for a given page
		$ratings = array();
		
		// fetch the ratings since the lower bound timestamp
		$this->output( 'Fetching page ratings between now and ' . date('Y-m-d H:i:s', strtotime( $this->getLowerBoundTimestamp())) . "...\n");
		$res = $this->dbr->select(
			'article_feedback', 
			array( 
				'aa_page_id', 
				'aa_rating_value',
				'aa_rating_id'
			), 
			array( 'aa_timestamp >= ' . $this->getLowerBoundTimestamp() ),
			__METHOD__,
			array() // better to do with limits and offsets?
		);
		
		// assign the rating data to our data structure
		foreach ( $res as $row ) {
			$ratings[ $row->aa_page_id ][ $row->aa_rating_id ][] = $row->aa_rating_value; 
		}
		$this->output( "Done\n" );

		// determine the average ratings for a given page
		$this->output( "Determining average ratings for articles ...\n" );
		$highs_and_lows = array();
		$averages = array();
		foreach ( $ratings as $page_id => $data ) {
			$rating_count = 0;
			foreach( $data as $rating_id => $rating ) {
				$rating_count += count( $rating );
				$rating_sum = array_sum( $rating );
				$rating_avg = $rating_sum / count( $rating );
				$highs_and_lows[ $page_id ][ 'avg_ratings' ][ $rating_id ] = $rating_avg;
			}
			
			// make sure that we have at least 10 ratings for this page
			if ( $rating_count < 10 ) {
				// if not, remove it from our data store
				unset( $highs_and_lows[ $page_id ] );
				continue;
			}
			
			$overall_rating_sum = array_sum( $highs_and_lows[ $page_id ][ 'avg_ratings' ] );
			$overall_rating_average = $overall_rating_sum / count( $highs_and_lows[ $page_id ][ 'avg_ratings' ] );
			$highs_and_lows[ $page_id ][ 'average' ] = $overall_rating_average;
			
			// store overall average rating seperately so we can easily sort
			$averages[ $page_id ] = $overall_rating_average;
		}
		$this->output( "Done.\n" );

		// determine highest 50 and lowest 50
		$this->output( "Determining 50 highest and 50 lowest rated articles...\n" );
		asort( $averages );
		// take lowest 50 and highest 50
		$highest_and_lowest_page_ids = array_slice( $averages, 0, 50, true );
		if ( count( $averages ) > 50 ) {
			$highest_and_lowest_page_ids += array_slice( $averages, -50, 50, true );
		}
		$this->output( "Done\n" );
		
		// prepare data for insert into db
		$this->output( "Preparing data for db insertion ...\n");
		$cur_ts = $this->dbw->timestamp();
		$rows = array();
		foreach( $highs_and_lows as $page_id => $data ) {
			// make sure this is one of the highest/lowest average ratings
			if ( !isset( $highest_and_lowest_page_ids[ $page_id ] )) {
				continue;
			}
			$rows[] = array(
				'afshl_page_id' => $page_id,
				'afshl_avg_overall' => $data[ 'average' ],
				'afshl_avg_ratings' => FormatJson::encode( $data[ 'avg_ratings' ] ),
				'afshl_ts' => $cur_ts,
			);
		}
		$this->output( "Done.\n" );

		// insert data to db
		$this->output( "Writing data to article_feedback_stats_highs_lows ...\n" );
		$rowsInserted = 0;
		while( $rows ) {
			$batch = array_splice( $rows, 0, $this->insert_batch_size );
			$this->dbw->insert( 
				'article_feedback_stats_highs_lows',
				$batch,
				__METHOD__
			);
			$rowsInserted += count( $batch );
			$this->syncDBs();
			$this->output( "Inserted " . $rowsInserted . " rows\n" );
		}
		$this->output( "Done.\n" );
		
		// loading data into caching
		$this->output( "Caching latest highs/lows (if cache present).\n" );
		$key = wfMemcKey( 'article_feedback_stats_highs_lows' );
		$result = $this->dbr->select(
			'article_feedback_stats_highs_lows',
			array(
				'afshl_page_id',
				'afshl_avg_overall',
				'afshl_avg_ratings'
			),
			'afshl_ts = ' . $cur_ts,
			__METHOD__,
			array()
		);
		// grab the article feedback special page so we can reuse the data structure building code
		$sp = SpecialPageFactory::getPage( 'ArticleFeedback' );
		$highs_lows = $sp->buildHighsAndLows( $result );
		// stash the data structure in the cache
		$wgMemc->set( $key, $highs_lows, 86400 );
		$this->output( "Done\n" );
	}
	
	
	/**
	 * Set $this->timestamp
	 * @param int $ts
	 */
	public function setLowerBoundTimestamp( $ts ) {
		if ( !is_numeric( $ts )) {
			throw new InvalidArgumentException( 'Timestamp must be numeric.' );
		}
		$this->lowerBoundTimestamp = $ts;
	}
	

	/**
	 * Get $this->lowerBoundTimestamp
	 * 
	 * If it hasn't been set yet, set it based on the defined polling period.
	 * 
	 * @return int
	 */
	public function getLowerBoundTimestamp() {
		if ( !$this->lowerBoundTimestamp ) {
			$timestamp = $this->dbw->timestamp( strtotime( $this->polling_period . ' seconds ago' ));
			$this->setLowerBoundTimestamp( $timestamp );
		}
		return $this->lowerBoundTimestamp;
	}
}

$maintClass = "PopulateAFStatistics";
require_once( DO_MAINTENANCE );
