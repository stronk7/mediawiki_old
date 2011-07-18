<?php

if ( !defined( 'MEDIAWIKI' ) ) {
	die( "This file is part of the QPoll extension. It is not a valid entry point.\n" );
}

/* poll's single question data object RAM storage
 * ( instances usually have short name qdata or quesdata )
 */
class qp_QuestionData {

	// DB index (with current scheme is non-unique)
	var $question_id = null;
	// common properties
	var $type;
	var $CommonQuestion;
	var $Categories;
	var $CategorySpans;
	var $ProposalText;
	var $ProposalCategoryId;
	var $ProposalCategoryText;
	var $alreadyVoted = false; // whether the selected user already voted this question ?
	// statistics storage
	var $Votes = null;
	var $Percents = null;

	function __construct( $argv ) {
		if ( array_key_exists( 'from', $argv ) ) {
			switch ( $argv[ 'from' ] ) {
				case 'postdata' :
						$this->type = $argv[ 'type' ];
						$this->CommonQuestion = $argv[ 'common_question' ];
						$this->Categories = $argv[ 'categories' ];
						$this->CategorySpans = $argv[ 'category_spans' ];
						$this->ProposalText = $argv[ 'proposal_text' ];
						$this->ProposalCategoryId = $argv[ 'proposal_category_id' ];
						$this->ProposalCategoryText = $argv[ 'proposal_category_text' ];
					break;
				case 'qid' :
						$this->question_id=$argv[ 'qid' ];
						$this->type = $argv[ 'type' ];
						$this->CommonQuestion = $argv[ 'common_question' ];
						$this->Categories = Array();
						$this->CategorySpans = Array();
						$this->ProposalText = Array();
						$this->ProposalCategoryId = Array();
						$this->ProposalCategoryText = Array();
					break;
			}
		}
	}

	// integrate spans into categories
	function packSpans() {
		if ( count( $this->CategorySpans ) > 0 ) {
			foreach( $this->Categories as &$Cat ) {
				if ( array_key_exists( 'spanId', $Cat ) ) {
					$Cat['name'] = $this->CategorySpans[ $Cat['spanId'] ]['name'] . "\n" . $Cat['name'];
					unset( $Cat['spanId'] );
				}
			}
			unset( $this->CategorySpans );
			$this->CategorySpans = Array();
		}
	}

	// restore spans from categories
	function restoreSpans() {
		if ( count( $this->CategorySpans ) == 0 ) {
			$prevSpanName = '';
			$spanId = -1;
			foreach( $this->Categories as &$Cat ) {
				$a = explode( "\n", $Cat['name'] );
				if ( count( $a ) > 1 ) {
					if ( $prevSpanName != $a[0] ) {
						$spanId++;
						$prevSpanName = $a[0];
						$this->CategorySpans[ $spanId ]['count'] = 0;
					}
					$Cat['name'] = $a[1];
					$Cat['spanId'] = $spanId;
					$this->CategorySpans[ $spanId ]['name'] = $a[0];
					$this->CategorySpans[ $spanId ]['count']++;
				} else {
					$prevSpanName = '';
				}
			}
		}
	}

	// check whether the previousely stored poll header is compatible with the one defined on the page
	// used to reject previous vote in case the header is incompatble
	function isCompatible( &$question ) {
		if ( $question->mType != $this->type ) {
			return false;
		}
		if ( count( $question->mCategorySpans ) != count( $this->CategorySpans ) ) {
			return false;
		}
		foreach ( $question->mCategorySpans as $spanidx => &$span ) {
			if ( !isset( $this->CategorySpans[ $spanidx ] ) ||
					$span[ "count" ] != $this->CategorySpans[ $spanidx ][ "count" ] ) {
				return false;
			}
		}
		return true;
	}

} /* end of qp_QuestionData class */

class qp_InterpAnswer {
	# short answer. it is supposed to be sortable and accountable in statistics
	# blank value means short answer is unavailable
	var $short = '';
	# long answer. it is supposed to be understandable by amateur users
	# blank value means long answer is unavailable
	var $long = '';
	# error message. non-blank value indicates interpretation script error
	# either due to incorrect script code, or a script-generated one
	var $error = '';
	# 2d array of errors generated for [question][proposal], false if no errors
	var $qpErrors = false;

	/**
	 * @param $init - optional array of properties to be initialized
	 */
	function __construct( $init = null ) {
		$props = array( 'short', 'long', 'error' );
		if ( is_array( $init ) ) {
			foreach ( $props as $prop ) {
				if ( array_key_exists( $prop, $init ) ) {
					$this->{$prop} = $init[$prop];
				}
			}
			return;
		}
	}

	/**
	 * "global" error message
	 */
	function setError( $msg ) {
		$this->error = $msg;
		return $this;
	}

	/**
	 * set question / proposal error message (for quizes)
	 *
	 * @param $qidx  int index of poll's question
	 * @param $pidx  int index of question's proposal
	 * @param $msg   string error message for [question][proposal] pair
	 */
	function setQPerror( $qidx, $pidx, $msg ) {
		if ( !is_array( $this->qpErrors ) ) {
			$this->qpErrors = array();
		}
		if ( !isset( $this->qpErrors[$qidx] ) ) {
			$this->qpErrors[$qidx] = array();
		}
		$this->qpErrors[$qidx][$pidx] = $msg;
	}

	function setDefaultErrorMessage() {
		if ( is_array( $this->qpErrors ) && $this->error == '' ) {
			$this->error = wfMsg( 'qp_interpetation_wrong_answer' );
		}
		return $this;
	}

	function isError() {
		return $this->error != '' || is_array( $this->qpErrors );
	}

} /* end of qp_InterpAnswer class */

/**
 * poll storage and retrieval using DB
 * one poll may contain several questions
 */
class qp_PollStore {

	static $db = null;
	/// DB keys
	var $pid = null;
	var $last_uid = null;

	# username is used for caching of setLastUser() method (which now may be called multiple times);
	# also used by randomizer
	var $username = '';
	/// common properties
	var $mArticleId = null;
	# unique id of poll, used for addressing, also with 'qp_' prefix as the fragment part of the link
	var $mPollId = null;
	# order of poll on the page
	var $mOrderId = null;
	# dependance from other poll address in the following format: "page#otherpollid"
	var $dependsOn = null;
	# attempts of voting (passing the quiz). number of resubmits
	# note: resubmits are counted for syntax-correct answer (the vote is stored),
	# yet the answer still might be logically incorrect (quiz is not passed / partially passed)
	var $attempts = 0;

	# NS & DBkey of Title object representing interpretation template for Special:Pollresults page
	var $interpNS = 0;
	var $interpDBkey = null;
	# interpretation of user answer
	var $interpAnswer;

	# array of QuestionData instances (data from/to DB)
	var $Questions = null;
	# array of random indexes of Questions[] array (optional)
	var $randomQuestions = false;

	# poll processing state, read with getState()
	#
	# 'NA' - object just was created
	#
	# 'incomplete', self::stateIncomplete()
	#    http post: not every proposals were answered: do not update DB
	#    http get: this is not the post: do not update DB
	#
	# 'error', self::stateError()
	#    http get: invalid question syntax, parse errors will cause submit button disabled
	#
	# 'complete', self::stateComplete()
	#    check whether the poll was successfully submitted
	#    store user vote to the DB (when the poll is fine)
	#
	var $mCompletedPostData;
	# true, after the poll results have been successfully stored to DB
	var $voteDone = false;

 /* $argv[ 'from' ] indicates type of construction, other elements of $argv vary according to 'from'
  */
	function __construct( $argv = null ) {
		global $wgParser;
		if ( self::$db == null ) {
			self::$db = & wfGetDB( DB_MASTER );
		}
		$this->interpAnswer = new qp_InterpAnswer();
		if ( is_array($argv) && array_key_exists( "from", $argv ) ) {
			$this->Questions = Array();
			$this->mCompletedPostData = 'NA';
			$this->pid = null;
			$is_post = false;
			switch ( $argv[ 'from' ] ) {
				case 'poll_post' :
					$is_post= true;
				case 'poll_get' :
					if ( array_key_exists( 'title', $argv ) ) {
						$title = $argv[ 'title' ];
					} else {
						$title = $wgParser->getTitle();
					}
					$this->mArticleId = $title->getArticleID();
					$this->mPollId = $argv[ 'poll_id' ];
					if ( array_key_exists( 'order_id', $argv ) ) {
						$this->mOrderId = $argv[ 'order_id' ];
					}
					if ( array_key_exists( 'dependance', $argv ) &&
							$argv[ 'dependance' ] !== false ) {
						$this->dependsOn = $argv[ 'dependance' ];
					}
					if ( array_key_exists( 'interpretation', $argv ) ) {
						# (0,'') indicates that interpretation template does not exists
						$this->interpNS = 0;
						$this->interpDBkey = '';
						if ( $argv['interpretation'] != '' ) {
							$interp = Title::newFromText( $argv['interpretation'], NS_QP_INTERPRETATION );
							if ( $interp instanceof Title ) {
								$this->interpNS = $interp->getNamespace();
								$this->interpDBkey = $interp->getDBkey();
							}
						}
					}
					if ( $is_post ) {
						$this->setPid();
					} else {
						$this->loadPid();
					}
					break;
				case 'pid' :
					if ( array_key_exists( 'pid', $argv ) ) {
						$pid = intval( $argv[ 'pid' ] );
						$res = self::$db->select( 'qp_poll_desc',
							array( 'article_id', 'poll_id','order_id', 'dependance', 'interpretation_namespace', 'interpretation_title' ),
							array( 'pid'=>$pid ),
							__METHOD__ . ":create from pid" );
						$row = self::$db->fetchObject( $res );
						if ( $row!=false ) {
							$this->pid = $pid;
							$this->mArticleId = $row->article_id;
							$this->mPollId = $row->poll_id;
							$this->mOrderId = $row->order_id;
							$this->dependsOn = $row->dependance;
							$this->interpNS = $row->interpretation_namespace;
							$this->interpDBkey = $row->interpretation_title;
						}
					}
					break;
			}
		}
	}

	// special version of constructor that builds pollstore from the given poll address
	// @return    instance of qp_PollStore on success, false on error
	static function newFromAddr( $pollAddr ) {
		# build poll object from given poll address in args[0]
		$pollAddr = qp_AbstractPoll::getPrefixedPollAddress( $pollAddr );
		if ( is_array( $pollAddr ) ) {
			list( $pollTitleStr, $pollId ) = $pollAddr;
			$pollTitle = Title::newFromURL( $pollTitleStr );
			if ( $pollTitle !== null ) {
				$pollArticleId = intval( $pollTitle->getArticleID() );
				if ( $pollArticleId > 0 ) {
					return new qp_PollStore( array(
						'from'=>'poll_get',
						'title'=>$pollTitle,
						'poll_id'=>$pollId ) );
				} else {
					return qp_Setup::ERROR_MISSED_TITLE;
				}
			} else {
				return qp_Setup::ERROR_MISSED_TITLE;
			}
		} else {
			return qp_Setup::ERROR_INVALID_ADDRESS;
		}
	}

	function getPollId() {
		return $this->mPollId;
	}

	# returns Title object, to get a URI path, use Title::getFullText()/getPrefixedText() on it
	function getTitle() {
		$res = null;
		if ( $this->mArticleId !==null && $this->mPollId !== null ) {
			$res = Title::newFromID( $this->mArticleId );
			$res->setFragment( qp_AbstractPoll::s_getPollTitleFragment( $this->mPollId ) );
		}
		return $res;
	}

	/**
	 * @return Title instance of interpretation template
	 */
	function getInterpTitle() {
		$title = Title::newFromText( $this->interpDBkey, $this->interpNS );
		return ( $title instanceof Title ) ? $title : null;
	}

	// warning: will work only after successful loadUserAlreadyVoted() or loadUserVote()
	function isAlreadyVoted() {
		if ( is_array( $this->Questions ) && count( $this->Questions > 0 ) ) {
			foreach( $this->Questions as &$qdata ) {
				if ( $qdata->alreadyVoted )
					return true;
			}
		}
		return false;
	}

	# checks whether the question with specified id exists in the poll store
	# @return   boolean, true when the question exists
	function questionExists( $question_id ) {
		return array_key_exists( $question_id, $this->Questions );
	}

	# load questions for the newly created poll (if the poll was voted at least once)
	# @return   boolean, true when the questions are available, false otherwise (poll was never voted)
	function loadQuestions() {
		$result = false;
		$typeFromVer0_5 = array(
			"singleChoicePoll"=>"singleChoice",
			"multipleChoicePoll"=>"multipleChoice",
			"mixedChoicePoll"=>"mixedChoice"
		);
		if ( $this->pid !== null ) {
			$res = self::$db->select( 'qp_question_desc',
				array( 'question_id', 'type', 'common_question' ),
				array( 'pid'=>$this->pid ),
				__METHOD__ );
			if ( self::$db->numRows( $res ) > 0 ) {
				$result = true;
				while ( $row = self::$db->fetchObject( $res ) ) {
					$question_id = intval( $row->question_id );
					# convert old (v0.5) question type string to the "new" type string
					if ( isset( $typeFromVer0_5[$row->type] ) ) {
						$row->type = $typeFromVer0_5[$row->type];
					}
					# create a qp_QuestionData object from DB fields
					$this->Questions[ $question_id ] = new qp_QuestionData( array(
						'from'=>'qid',
						'qid'=>$question_id,
						'type'=>$row->type,
						'common_question'=>$row->common_question ) );
				}
				$this->getCategories();
				$this->getProposalText();
			}
		}
		return $result;
	}

	/**
	 * iterates through the list of users who voted the current poll
	 * @return mixed false on failure, array of (uid=>username) on success (might be empty)
	 */
	function pollVotersPager( $offset = 0, $limit = 20 ) {
		if ( $this->pid === null ) {
			return false;
		}
		$qp_users_polls = self::$db->tableName( 'qp_users_polls' );
		$qp_users = self::$db->tableName( 'qp_users' );
		$query = "SELECT qup.uid AS uid, name AS username " .
				"FROM $qp_users_polls qup " .
				"INNER JOIN $qp_users qu ON qup.uid = qu.uid " .
				"WHERE pid = ". intval( $this->pid ) . " " .
				"LIMIT " . intval( $offset ) . ", " . intval( $limit );
		$res = self::$db->query( $query, __METHOD__ );
		$result = array();
		while( $row = self::$db->fetchObject( $res ) ) {
			$result[intval($row->uid)] = $row->username;
		}
		return $result;
	}

	/**
	 * returns voices of the selected users in the selected question of current poll
	 * @param $uids array of user id's in DB
	 * @return mixed array [uid][proposal_id][cat_id]=text_answer on success,
	 * false on failure
	 */
	function questionVoicesRange( $question_id, array $uids ) {
		if ( $this->pid === null ) {
			return false;
		}
		$qp_question_answers = self::$db->tableName( 'qp_question_answers' );
		$query = "SELECT uid, proposal_id, cat_id, text_answer " .
				"FROM $qp_question_answers " .
				"WHERE pid = " . intval( $this->pid ) .  " AND question_id = " . intval( $question_id ) . " AND uid IN (" . implode( ',', array_map( 'intval', $uids ) ) . ") " .
				"ORDER BY uid";
		$res = self::$db->query( $query, __METHOD__ );
		$result = array();
		while( $row = self::$db->fetchObject( $res ) ) {
			$uid = intval( $row->uid );
			if ( !isset( $result[$uid] ) ) {
				$result[$uid] = array();
			}
			$proposal_id = intval( $row->proposal_id );
			if ( !isset( $result[$uid][$proposal_id] ) ) {
				$result[$uid][$proposal_id] = array();
			}
			$result[$uid][$proposal_id][intval( $row->cat_id )] = ( ($row->text_answer == "") ? "+" : $row->text_answer );
		}
		return $result;
	}

	// checks whether single user already voted the poll's questions
	// will be written into self::Questions[]->alreadyVoted
	// may be used only after loadQuestions()
	// returns true when the user voted to any of the currently defined questions, false otherwise
	function loadUserAlreadyVoted() {
		$result = false;
		if ( $this->pid === null || $this->last_uid === null ||
				!is_array( $this->Questions ) || count( $this->Questions ) == 0 ) {
			return false;
		}
		$res = self::$db->select( 'qp_question_answers',
			array( 'DISTINCT question_id' ),
			array( 'pid'=>$this->pid, 'uid'=>$this->last_uid ),
			__METHOD__ . ':load one user poll questions alreadyVoted values' );
		if ( self::$db->numRows( $res ) == 0 ) {
			return false;
		}
		while ( $row = self::$db->fetchObject( $res ) ) {
			$question_id = intval( $row->question_id );
			if ( $this->questionExists( $question_id ) ) {
				$result = $this->Questions[ $question_id ]->alreadyVoted = true;
			}
		}
		return $result;
	}

	// load single user vote
	// also loads short & long answer interpretation, when available
	// will be written into self::Questions[]->ProposalCategoryId,ProposalCategoryText,alreadyVoted
	// may be used only after loadQuestions()
	// returns true when any of currently defined questions has the votes, false otherwise
	function loadUserVote() {
		$result = false;
		if ( $this->pid === null || $this->last_uid === null ||
				!is_array( $this->Questions ) || count( $this->Questions ) == 0 ) {
			return false;
		}
		$res = self::$db->select( 'qp_question_answers',
			array( 'question_id', 'proposal_id', 'cat_id', 'text_answer' ),
			array( 'pid'=>$this->pid, 'uid'=>$this->last_uid ),
			__METHOD__ . ':load one user single poll vote' );
		if ( self::$db->numRows( $res ) == 0 ) {
			return false;
		}
		while ( $row = self::$db->fetchObject( $res ) ) {
			$question_id = intval( $row->question_id );
			if ( $this->questionExists( $question_id ) ) {
				$qdata = &$this->Questions[ $question_id ];
				$result = $qdata->alreadyVoted = true;
				$qdata->ProposalCategoryId[ intval( $row->proposal_id ) ][] = intval( $row->cat_id );
				$qdata->ProposalCategoryText[ intval( $row->proposal_id ) ][] = $row->text_answer;
			}
		}
		return $result;
	}

	// load voting statistics (totals) from DB
	// input: $questions_set is optional array of integer question_id values of the current poll
	// output: $this->Questions[]Votes[] is set on success
	function loadTotals( $questions_set = false ) {
		if ( $this->pid !== null &&
				is_array( $this->Questions ) && count( $this->Questions > 0 ) ) {
			$where = 'pid=' . self::$db->addQuotes( $this->pid );
			if ( is_array( $questions_set ) ) {
				$where .= ' AND question_id IN (';
				$first_elem = true;
				foreach( $questions_set as &$qid ) {
					if ( $first_elem ) {
						$first_elem = false;
					} else {
						$where .= ',';
					}
					$where .= self::$db->addQuotes( $qid );
				}
				$where .= ')';
			}
			$res = self::$db->select( 'qp_question_answers',
				array( 'count(uid)', 'question_id', 'proposal_id', 'cat_id' ),
				$where,
				__METHOD__ . ':load single poll count of user votes',
				array( 'GROUP BY' => 'question_id,proposal_id,cat_id' ) );
			while ( $row = self::$db->fetchRow( $res ) ) {
				$question_id = intval( $row[ "question_id" ] );
				$propkey = intval( $row[ "proposal_id" ] );
				$catkey = intval( $row[ "cat_id" ] );
				if ( $this->questionExists( $question_id ) ) {
					$qdata = &$this->Questions[ $question_id ];
					if ( !is_array( $qdata->Votes ) ) {
						$qdata->Votes = Array();
					}
					if ( !array_key_exists( $propkey, $qdata->Votes ) ) {
						$qdata->Votes[ $propkey ] = array_fill( 0, count( $qdata->Categories ), 0 );
					}
					$qdata->Votes[ $propkey ][ $catkey ] = intval( $row[ "count(uid)" ] );
				}
			}
		}
	}

	function totalUsersAnsweredQuestion( &$qdata ) {
		$result = 0;
		if ( $this->pid !== null ) {
			$res = self::$db->select( 'qp_question_answers',
				array( 'count(distinct uid)' ),
				array( 'pid'=>$this->pid, 'question_id'=>$qdata->question_id ),
				__METHOD__ );
			if ( $row = self::$db->fetchRow( $res ) ) {
				$result = intval( $row[ "count(distinct uid)" ] );
			}
		}
		return $result;
	}

	// try to calculate percents for every question where Votes[] are available
	function calculateStatistics() {
		foreach( $this->Questions as &$qdata ) {
			$this->calculateQuestionStatistics( $qdata );
		}
	}

	// try to calculate percents for the one question
	private function calculateQuestionStatistics( &$qdata ) {
		if ( isset( $qdata->Votes ) ) { // is "votable"
			$qdata->restoreSpans();
			$spansUsed = count( $qdata->CategorySpans ) > 0 ;
			foreach ( $qdata->ProposalText as $propkey => $proposal_text ) {
				if ( isset( $qdata->Votes[ $propkey ] ) ) {
					$votes_row = &$qdata->Votes[ $propkey ];
					if ( $qdata->type == "singleChoice" ) {
						if ( $spansUsed ) {
							$row_totals = array_fill( 0, count( $qdata->CategorySpans ), 0 );
						} else {
							$votes_total = 0;
						}
						foreach( $qdata->Categories as $catkey => $cat ) {
							if ( isset( $votes_row[ $catkey ] ) ) {
								if ( $spansUsed ) {
									$row_totals[ intval( $cat[ "spanId" ] ) ] += $votes_row[ $catkey ];
								} else {
									$votes_total += $votes_row[ $catkey ];
								}
							}
						}
					} else {
						$votes_total = $this->totalUsersAnsweredQuestion( $qdata );
					}
					foreach( $qdata->Categories as $catkey => $cat ) {
						$num_of_votes = '';
						if ( isset( $votes_row[ $catkey ] ) ) {
							$num_of_votes = $votes_row[ $catkey ];
							if ( $spansUsed ) {
								if ( isset( $qdata->Categories[ $catkey ][ "spanId" ] ) ) {
									$votes_total = $row_totals[ intval( $qdata->Categories[ $catkey ][ "spanId" ] ) ];
								}
							}
						}
						$qdata->Percents[ $propkey ][ $catkey ] = ( $votes_total > 0 ) ? (float) $num_of_votes / (float) $votes_total : 0.0;
					}
				}
			}
		}
	}

	private function getCategories() {
		$res = self::$db->select( 'qp_question_categories',
				array( 'question_id', 'cat_id', 'cat_name' ),
				array( 'pid'=>$this->pid ),
				__METHOD__ );
		while ( $row = self::$db->fetchObject( $res ) ) {
			$question_id = intval( $row->question_id );
			$cat_id = intval( $row->cat_id );
			if ( $this->questionExists( $question_id ) ) {
				$qdata = &$this->Questions[ $question_id ];
				$qdata->Categories[ $cat_id ][ "name" ] = $row->cat_name;
			}
		}
		foreach ( $this->Questions as &$qdata ) {
			$qdata->restoreSpans();
		}
	}

	private function getProposalText() {
		$res = self::$db->select( 'qp_question_proposals',
			array( 'question_id', 'proposal_id', 'proposal_text' ),
			array( 'pid'=>$this->pid ),
				__METHOD__ );
		while ( $row = self::$db->fetchObject( $res ) ) {
			$question_id = intval( $row->question_id );
			$proposal_id = intval( $row->proposal_id );
			if ( $this->questionExists( $question_id ) ) {
				$qdata = &$this->Questions[ $question_id ];
				$qdata->ProposalText[ $proposal_id ] = $row->proposal_text;
			}
		}
	}

	function getState() {
		return $this->mCompletedPostData;
	}

	function stateIncomplete() {
		if ( $this->mCompletedPostData == 'NA' ) {
			$this->mCompletedPostData = 'incomplete';
		}
	}

	function stateError() {
		$this->mCompletedPostData = 'error';
	}

	# check whether the poll was successfully submitted
	# @return   boolean - result of operation
	function stateComplete() {
		# completed only when previous state was unavaibale; error state can't be completed
		if ( $this->mCompletedPostData == 'NA'  && count( $this->Questions ) > 0 ) {
			$this->mCompletedPostData = 'complete';
			return true;
		} else {
			return false;
		}
	}

	/**
	 * Checks, whether particular question belongs to user's random seed
	 * @param $question_id  question_id from DB
	 * @return  true: question belongs to the seed;
	 *          false: question does not belong to the seed;
	 */
	function isUsedQuestion( $question_id ) {
		return !is_array( $this->randomQuestions ) ||
				in_array( $question_id, $this->randomQuestions, true );
	}

	/**
	 * Loads $this->randomQuestions from DB for current user
	 * Will be overriden in memory when number of random questions was changed
	 */
	function loadRandomQuestions() {
		if ( is_null( $this->last_uid ) ) {
			$this->setPid();
			$this->setLastUser( $this->username );
		}
		$res = self::$db->select( 'qp_random_questions', 'question_id', array( 'uid' => $this->last_uid, 'pid' => $this->pid ), __METHOD__ );
		$this->randomQuestions = array();
		while ( $row = self::$db->fetchObject( $res ) ) {
			$this->randomQuestions[] = intval( $row->question_id );
		}
		if ( count( $this->randomQuestions ) === 0 ) {
			$this->randomQuestions = false;
		}
	}

	/**
	 * Stores $this->randomQuestions into DB
	 * Should be called:
	 *   when user views the page with the poll first time
	 *   when number of random questions for poll was changed
	 */
	function setRandomQuestions() {
		if ( is_null( $this->pid ) || is_null( $this->last_uid ) ) {
			throw new MWException( __METHOD__ . ' cannot be called when pid/uid was not set' );
		}
		if ( is_array( $this->randomQuestions ) ) {
			$data = array();
			foreach( $this->randomQuestions as $qidx ) {
				$data[] = array( 'pid' => $this->pid, 'uid' => $this->last_uid, 'question_id' => $qidx );
			}
			self::$db->begin();
			self::$db->delete( 'qp_random_questions',
				array( 'pid' => $this->pid, 'uid' => $this->last_uid ),
				__METHOD__ );
			$res = self::$db->insert( 'qp_random_questions',
				$data,
				__METHOD__ . ':set random questions seed' );
			self::$db->commit();
			return;
		}
		# this->randomQuestions === false; this poll is not randomized anymore
		self::$db->delete( 'qp_random_questions',
			array( 'pid'=>$this->pid ),
			__METHOD__ . ':remove question random seed'
		);
	}

	function setLastUser( $username, $store_new_user_to_db = true ) {
		if ( $this->pid === null ) {
			return;
		}
		# do no query DB for the same user more than once
		if ( $this->username === $username ) {
			return;
		}
		$this->username = $username;
		$res = self::$db->select( 'qp_users','uid','name=' . self::$db->addQuotes( $username ), __METHOD__ );
		$row = self::$db->fetchObject( $res );
		if ( $row == false ) {
			if ( $store_new_user_to_db ) {
				self::$db->insert( 'qp_users', array( 'name'=>$this->username ), __METHOD__ . ':UpdateUser' );
				$this->last_uid = intval( self::$db->insertId() );
			} else {
				$this->last_uid = null;
			}
		} else {
			$this->last_uid = intval( $row->uid );
		}
		$res = self::$db->select( 'qp_users_polls',
			array( 'attempts', 'short_interpretation', 'long_interpretation' ),
			array( 'pid'=>$this->pid, 'uid'=>$this->last_uid ),
			__METHOD__ . ':load short & long answer interpretation' );
		if ( self::$db->numRows( $res ) != 0 ) {
			$row = self::$db->fetchObject( $res );
			$this->attempts = $row->attempts;
			$this->interpAnswer = new qp_InterpAnswer();
			$this->interpAnswer->short = $row->short_interpretation;
			$this->interpAnswer->long = $row->long_interpretation;
		}
//	todo: change to "insert ... on duplicate key update ..." when last_insert_id() bugs will be fixed
	}

	function getUserName( $uid ) {
		if ( $uid !== null) {
			$res = self::$db->select( 'qp_users','name','uid=' . self::$db->addQuotes( intval( $uid ) ), __METHOD__ );
			$row = self::$db->fetchObject( $res );
			if ( $row != false ) {
				return $row->name;
			}
		}
		return false;
	}

	private function loadPid() {
		$res = self::$db->select( 'qp_poll_desc',
			array( 'pid', 'order_id', 'dependance', 'interpretation_namespace', 'interpretation_title' ),
			'article_id=' . self::$db->addQuotes( $this->mArticleId ) . ' and ' .
			'poll_id=' . self::$db->addQuotes( $this->mPollId ),
			__METHOD__ );
		$row = self::$db->fetchObject( $res );
		if ( $row != false ) {
			$this->pid = $row->pid;
			# some constructors don't supply the poll attributes, get the values from DB in such case
			if ( $this->mOrderId === null ) {
				$this->mOrderId = $row->order_id;
			}
			if ( $this->dependsOn === null ) {
				$this->dependsOn = $row->dependance;
			}
			if ( $this->interpDBkey === null ) {
				$this->interpNS = $row->interpretation_namespace;
				$this->interpDBkey = $row->interpretation_title;
			}
			$this->updatePollAttributes( $row );
		}
	}

	private function setPid() {
		$res = self::$db->select( 'qp_poll_desc',
			array( 'pid', 'order_id', 'dependance', 'interpretation_namespace', 'interpretation_title' ),
			'article_id=' . self::$db->addQuotes( $this->mArticleId ) . ' and ' .
			'poll_id=' . self::$db->addQuotes( $this->mPollId ) );
		$row = self::$db->fetchObject( $res );
		if ( $row == false ) {
			self::$db->insert( 'qp_poll_desc',
				array( 'article_id'=>$this->mArticleId, 'poll_id'=>$this->mPollId, 'order_id'=>$this->mOrderId, 'dependance'=>$this->dependsOn, 'interpretation_namespace'=>$this->interpNS, 'interpretation_title'=>$this->interpDBkey ),
				__METHOD__ . ':update poll' );
			$this->pid = self::$db->insertId();
		} else {
			$this->pid = $row->pid;
			$this->updatePollAttributes( $row );
		}
//	todo: change to "insert ... on duplicate key update ..." when last_insert_id() bugs will be fixed
	}

	private function updatePollAttributes( $row ) {
		if ( $this->mOrderId != $row->order_id ||
				$this->dependsOn != $row->dependance ||
				$this->interpNS != $row->interpretation_namespace ||
				$this->interpDBkey != $row->interpretation_title ) {
			$res = self::$db->replace( 'qp_poll_desc',
				array( 'poll', 'article_poll' ),
				array( 'pid'=>$this->pid, 'article_id'=>$this->mArticleId, 'poll_id'=>$this->mPollId, 'order_id'=>$this->mOrderId, 'dependance'=>$this->dependsOn, 'interpretation_namespace'=>$this->interpNS, 'interpretation_title'=>$this->interpDBkey ),
				__METHOD__ . ':poll attributes update'
			);
		}
	}

	private function setQuestionDesc() {
		$insert = array();
		foreach ( $this->Questions as $qkey => &$ques ) {
			$insert[] = array( 'pid'=>$this->pid, 'question_id'=>$qkey, 'type'=>$ques->type, 'common_question'=>$ques->CommonQuestion );
			$ques->question_id = $qkey;
		}
		if ( count( $insert ) > 0 ) {
			self::$db->replace( 'qp_question_desc',
				array( 'question' ),
				$insert,
				__METHOD__ );
		}
	}

	private function setCategories() {
		$insert = Array();
		foreach ( $this->Questions as $qkey => &$ques ) {
			$ques->packSpans();
			foreach ( $ques->Categories as $catkey => &$Cat ) {
				$insert[] = array( 'pid'=>$this->pid, 'question_id'=>$qkey, 'cat_id'=>$catkey, 'cat_name'=>$Cat["name"] );
			}
			$ques->restoreSpans();
		}
		if ( count( $insert ) > 0 ) {
			self::$db->replace( 'qp_question_categories',
				array( 'category' ),
				$insert,
				__METHOD__ );
		}
	}

	private function setProposals() {
		$insert = Array();
		foreach ( $this->Questions as $qkey => &$ques ) {
			foreach( $ques->ProposalText as $propkey => &$ptext ) {
				$insert[] = array( 'pid'=>$this->pid, 'question_id'=>$qkey, 'proposal_id'=>$propkey, 'proposal_text'=>$ptext );
			}
		}
		if ( count( $insert ) > 0 ) {
			self::$db->replace( 'qp_question_proposals',
				array( 'proposal' ),
				$insert,
				__METHOD__ );
		}
	}

	/**
	 * Prepares an array of user answer to the current poll and interprets these
	 * Stores the result in $this->interpAnswer
	 */
	private function interpretVote() {
		$this->interpAnswer = new qp_InterpAnswer();
		$interpTitle = $this->getInterpTitle();
		if ( $interpTitle === null ) {
			return;
		}
		$interpArticle = new Article( $interpTitle, 0 );
		if ( !$interpArticle->exists() ) {
			return;
		}
		# prepare array of user answers that will be passed to the interpreter
		$poll_answer = array( false );
		foreach ( $this->Questions as $qkey => &$qdata ) {
			$questions = array();
			foreach( $qdata->ProposalText as $propkey => &$proposal_text ) {
				$proposals = array();
				foreach ( $qdata->Categories as $catkey => &$cat_name ) {
					$text_answer = '';
					if ( array_key_exists( $propkey, $qdata->ProposalCategoryId ) &&
								( $id_key = array_search( $catkey, $qdata->ProposalCategoryId[ $propkey ] ) ) !== false ) {
						$proposals[$catkey] = $qdata->ProposalCategoryText[ $propkey ][ $id_key ];
					}
				}
				$questions[] = $proposals;
			}
			$poll_answer[] = $questions;
		}
		# only the questions are numbered from 1;
		unset( $poll_answer[0] );
		# interpret the poll answer to get interpretation answer
		$this->interpAnswer = qp_Interpret::getAnswer( $interpArticle, $poll_answer );
	}

	// warning: requires qp_PollStorage::last_uid to be set
	private function setAnswers() {
		$insert = Array();
		foreach ( $this->Questions as $qkey => &$ques ) {
			foreach( $ques->ProposalCategoryId as $propkey => &$prop_answers ) {
				foreach( $prop_answers as $idkey => $catkey ) {
					$insert[] = array( 'uid'=>$this->last_uid, 'pid'=>$this->pid, 'question_id'=>$qkey, 'proposal_id'=>$propkey, 'cat_id'=>$catkey, 'text_answer'=>$ques->ProposalCategoryText[ $propkey ][ $idkey ] );
				}
			}
		}
		# TODO: delete votes of all users, when the POST question header is incompatible with question header in DB ?
		# delete previous vote to make sure previous header of this poll was not incompatible with current vote
		self::$db->delete( 'qp_question_answers',
			array( 'uid'=>$this->last_uid, 'pid'=>$this->pid ),
			__METHOD__ . ':delete previous answers of current user to the same poll'
		);
		# vote
		if ( count( $insert ) > 0 ) {
			self::$db->replace( 'qp_question_answers',
				array( 'answer' ),
				$insert,
				__METHOD__ );
			$this->interpretVote();
			# update interpretation result and number of syntax-valid resubmit attempts
			$qp_users_polls = self::$db->tableName( 'qp_users_polls' );
			$short = self::$db->addQuotes( $this->interpAnswer->short );
			$long = self::$db->addQuotes( $this->interpAnswer->long );
			$this->attempts++;
			$stmt = "INSERT INTO {$qp_users_polls} (uid,pid,short_interpretation,long_interpretation)\n VALUES ( " . intval( $this->last_uid ) . ", " . intval( $this->pid ) . ", {$short}, {$long} )\n ON DUPLICATE KEY UPDATE attempts = " . intval( $this->attempts ) . ", short_interpretation = {$short} , long_interpretation = {$long}";
			self::$db->query( $stmt, __METHOD__ );
		}
	}

	# when the user votes and poll wasn't previousely voted yet, it also creates the poll structures in DB
	function setUserVote() {
		if ( $this->pid !==null &&
				$this->last_uid !== null &&
				$this->mCompletedPostData == "complete" &&
				is_array( $this->Questions ) && count( $this->Questions ) > 0 ) {
			self::$db->begin();
			$this->setQuestionDesc();
			$this->setCategories();
			$this->setProposals();
			$this->setAnswers();
			self::$db->commit();
			$this->voteDone = true;
		}
	}

}
