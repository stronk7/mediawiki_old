<?php

if ( !defined( 'MEDIAWIKI' ) ) {
	die( "This file is part of the QPoll extension. It is not a valid entry point.\n" );
}

/* parsing, checking ans visualisation of Question in statistical display mode (UI input/output)
 */
class qp_QuestionStats extends qp_AbstractQuestion {

	/**
	 * Constructor
	 * @public
	 * @param  $poll         an instance of question's parent controller
	 * @param  $view         an instance of question view "linked" to this question
	 * @param  $type         type of question (taken from DB)
	 * @param  $questionId   the identifier of the question used to gernerate input names
	 */
	function __construct( qp_PollStats $poll, qp_QuestionStatsView $view, $type, $questionId ) {
		parent::__construct( $poll, $view, $questionId );
		$this->mType = $type;
	}

	# load some question fields from qp_QuestionData given
	# (usually qp_QuestionData is a property of qp_PollStore instance)
	# @param  $qdata - an instance of qp_QuestionData
	function loadAnswer( qp_QuestionData &$qdata ) {
		$this->alreadyVoted = $qdata->alreadyVoted;
		$this->mCommonQuestion = $qdata->CommonQuestion;
		$this->mProposalText = $qdata->ProposalText;
		$this->mCategories = $qdata->Categories;
		$this->mCategorySpans = $qdata->CategorySpans;
		if ( isset( $qdata->Percents ) && is_array( $qdata->Percents ) ) {
			$this->Percents = $qdata->Percents;
		} else {
			# no percents - no stats
			$this->view->showResults = Array( 'type'=>0 );
		}
	}

	# populates an instance of qp_Question with data from qp_QuestionData
	# input: the object of type qp_Question
	function getQuestionAnswer( qp_PollStore &$pollStore ) {
		if ( $pollStore->pid !== null ) {
			if ( $pollStore->questionExists( $this->mQuestionId ) ) {
				$qdata = $pollStore->Questions[ $this->mQuestionId ];
				$this->loadAnswer( $qdata );
				return true;
			}
		}
		return false;
	}

	function parseCategories() {
		return $this->view->buildCategoriesRow( $this->mCategories );
	}

	function parseCategorySpans() {
		if ( $this->mType == 'singleChoice' ) {
			# real category spans have sense only for radiobuttons
			return $this->view->buildSpansRow( $this->mCategorySpans );
		}
		return array();
	}

	/**
	 * populates $this->view with proposal rows
	 */
	function statsParseBody() {
		if ( $this->getState() == 'error' ) {
			$this->view->addHeaderError();
			return;
		}
		$catRow = $this->parseCategories();
		if ( count( $this->mCategorySpans ) > 0 ) {
			$spansRow = $this->parseCategorySpans();
			# if there are multiple spans, "turn on" borders for span and category cells
			if ( count( $this->mCategorySpans ) > 1 ) {
				$this->view->categoriesStyle .= 'border:1px solid gray;';
			}
			$this->view->addSpanRow( $spansRow );
		}
		$this->view->addCategoryRow( $catRow );
		foreach ( $this->mProposalText as $proposalId => $text ) {
			$row = Array();
			$this->view->initProposalView();
			foreach ( $this->mCategories as $catId => $catDesc ) {
				$row[ $catId ] = Array();
				$spanState->className = 'sign';
				switch ( $this->mType ) {
				case 'singleChoice' :
					# category spans have sense only with single choice proposals
					# dummy input name / value for renderSpan()
					$name = $value = '';
					$this->view->renderSpan( $row, $name, $value, $catId, $catDesc, $text );
					break;
				}
				QP_Renderer::addClass( $row[ $catId ], $spanState->className );
				if ( $this->view->showResults['type'] != 0 ) {
					# there ars some stat in row (not necessarily all cells, because size of question table changes dynamically)
					$row[ $catId ][ 0 ] = $this->view->addShowResults( $proposalId, $catId );
				} else {
					$row[ $catId ][ 0 ] = '';
				}
			}
			$this->view->addProposal( $proposalId, $text, $row );
		}
	}

} /* end of qp_QuestionStats class */
