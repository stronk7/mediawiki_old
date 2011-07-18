<?php

if ( !defined( 'MEDIAWIKI' ) ) {
	die( "This file is part of the QPoll extension. It is not a valid entry point.\n" );
}

/* parsing, checking ans visualisation of Question in declaration/voting mode (UI input/output)
 */
class qp_Question extends qp_AbstractQuestion {

	# current user voting taken from POST data (if available)
	var $mProposalCategoryId = Array(); // user true/false answers to the question's proposal
	var $mProposalCategoryText = Array(); // user text answers to the question's proposal
	# previous user voting (if available) taken from DB
	var $mPrevProposalCategoryId = Array(); // user true/false answers to the question's proposal from DB
	var $mPrevProposalCategoryText = Array(); // user text answers to the question's proposal from DB

	# load some question fields from qp_QuestionData given
	# (usually qp_QuestionData is an array property of qp_PollStore instance)
	# @param   $qdata - an instance of qp_QuestionData
	function loadAnswer( qp_QuestionData &$qdata ) {
		$this->alreadyVoted = $qdata->alreadyVoted;
		$this->mPrevProposalCategoryId = $qdata->ProposalCategoryId;
		$this->mPrevProposalCategoryText = $qdata->ProposalCategoryText;
		if ( isset( $qdata->Percents ) && is_array( $qdata->Percents ) ) {
			$this->Percents = $qdata->Percents;
		} else {
			# no percents - no stats
			$this->view->showResults = Array( 'type'=>0 );
		}
	}

	# populates an instance of qp_Question with data from qp_QuestionData
	# @param   the object of type qp_Question
	function getQuestionAnswer( qp_PollStore &$pollStore ) {
		if ( $pollStore->pid !== null ) {
			if ( $pollStore->questionExists( $this->mQuestionId ) ) {
				$qdata = $pollStore->Questions[ $this->mQuestionId ];
				if ( $qdata->IsCompatible( $this ) ) {
					$this->loadAnswer( $qdata );
					return true;
				}
			}
		}
		return false;
	}

	# checks, whether user had previousely selected the category of the proposal of this question
	# returns true/false for 'checkbox' and 'radio' inputTypes
	# text string/false for 'text' inputType
	function answerExists( $inputType, $proposalId, $catId ) {
		if ( $this->alreadyVoted ) {
			if ( array_key_exists( $proposalId, $this->mPrevProposalCategoryId ) ) {
				$id_key = array_search( $catId, $this->mPrevProposalCategoryId[ $proposalId ] );
				if ( $id_key !== false ) {
					if ( $inputType == 'text' ) {
						if ( array_key_exists( $proposalId, $this->mPrevProposalCategoryText ) &&
								array_key_exists( $id_key, $this->mPrevProposalCategoryText[ $proposalId ] ) ) {
							$prev_text_answer = $this->mPrevProposalCategoryText[ $proposalId ][ $id_key ];
							if ( $prev_text_answer != '' ) {
								return $prev_text_answer;
							}
						}
					} else {
						return true;
					}
				}
			}
		}
		return false;
	}

	# store the proper (checked) Question
	# creates new qp_QuestionData in the given poll store
	# and places it into the poll store Questions[] collection
	# @param   the object of type qp_PollStore
	function store( qp_PollStore &$pollStore ) {
		if ( $pollStore->pid !== null ) {
			$pollStore->Questions[ $this->mQuestionId ] = new qp_QuestionData( array(
				'from'=>'postdata',
				'type'=>$this->mType,
				'common_question'=>$this->mCommonQuestion,
				'categories'=>$this->mCategories,
				'category_spans'=>$this->mCategorySpans,
				'proposal_text'=>$this->mProposalText,
				'proposal_category_id'=>$this->mProposalCategoryId,
				'proposal_category_text'=>$this->mProposalCategoryText ) );
		}
	}

	# parses question main header (common question and XML attributes)
	# initializes common question and question type/subtype
	# @param  $input				the question's header in QPoll syntax
	#
	# internally, the header is split into
	#   main header (part inside curly braces) and
	#   body header (categories and metacategories defitions)
	#
	function parseMainHeader( $header ) {
		# split common question and question attributes from the header
		@list( $common_question, $attr_str ) = preg_split( '`\n\|([^\|].*)\s*$`u', $header, -1, PREG_SPLIT_DELIM_CAPTURE );
		if ( !isset( $attr_str ) ) {
			$this->setState( 'error', wfMsg( 'qp_error_in_question_header', qp_Setup::entities( $header ) ) );
			return;
		}
		$this->mCommonQuestion = trim( $common_question );
		$type = $this->parseAttributes( $attr_str );
		# set question type property
		# select the question type and subtype corresponding to the header 'type' attribute
		switch ( $type ) {
		case 'unique()':
			$this->mSubType = 'unique';
			$this->mType = 'singleChoice';
			break;
		case '()':
			$this->mType = 'singleChoice';
			break;
		case '[]':
			$this->mType = 'multipleChoice';
			break;
		case 'mixed' :
			$this->mType = 'mixedChoice';
			break;
		default :
			$this->setState( 'error', wfMsg( 'qp_error_invalid_question_type', qp_Setup::entities( $type ) ) );
		}
	}

	# build categories and spans internal & visual representations according to
	# definition of categories and spans (AKA metacategories) in the question body
	# @param   $input - the text of question body
	#
	# internally, the header is split into
	#   main header (part inside curly braces) and
	#   body header (categories and metacategories defitions)
	#
	function parseBodyHeader( $input ) {
		$this->raws = preg_split( '`\n`su', $input, -1, PREG_SPLIT_NO_EMPTY );
		$categorySpans = false;
		if ( isset( $this->raws[1] ) ) {
			$categorySpans = preg_match( $this->mCategoryPattern, $this->raws[1]."\n", $matches );
		}
		if ( !$categorySpans && isset( $this->raws[0] ) ) {
			preg_match( $this->mCategoryPattern, $this->raws[0]."\n", $matches );
		}
		# parse the header - spans and categories
		$catString = isset( $matches[1] ) ? $matches[1] : '';
		$catRow = $this->parseCategories( $catString );
		if ( $categorySpans ) {
			$spansRow = $this->parseCategorySpans( $this->raws[0] );
			# if there are multiple spans, "turn on" borders for span and category cells
			if ( count( $this->mCategorySpans ) > 1 ) {
				$this->view->categoriesStyle .= 'border:1px solid gray;';
			}
			$this->view->addSpanRow( $spansRow );
		}
		# do not render single empty category at all (on user's request)
		if ( count( $this->mCategories ) == 1 &&
				$this->mCategories[0]['name'] == '&#160;' ) {
			return;
		}
		# render category table row
		$this->view->addCategoryRow( $catRow );
	}

	function singleChoiceParseBody() {
		$this->questionParseBody( "radio" );
	}

	function multipleChoiceParseBody() {
		$this->questionParseBody( "checkbox" );
	}

	/**
	 * returns question view which should be renreded and
	 * also may be altered during the poll generation
	 */
	function questionParseBody( $inputType ) {
		# Parameters used in some special cases.
		$proposalId = -1;
		foreach( $this->raws as $raw ) {
			if ( !preg_match( $this->mProposalPattern, $raw, $matches ) ) {
				continue;
			}
			# empty proposal text and row
			$text = null;
			$row = Array();
			$proposalId++;
			$this->view->initProposalView();
			$text = array_pop( $matches );
			$this->mProposalText[ $proposalId ] = trim( $text );
			foreach ( $this->mCategories as $catId => $catDesc ) {
				$row[ $catId ] = Array();
				$inp = Array( '__tag'=>'input' );
				$this->view->spanState->className = 'sign';
				# Determine the input's name and value.
				switch( $this->mType ) {
				case 'multipleChoice':
					$name = 'q' . $this->mQuestionId . 'p' . $proposalId . 's' . $catId;
					$value = 's' . $catId;
					break;
				case 'singleChoice':
					$name = 'q' . $this->mQuestionId . 'p' . $proposalId;
					$value = 's' . $catId;
					# category spans have sense only with single choice proposals
					$this->view->renderSpan( $row, $name, $value, $catId, $catDesc, $text );
					break;
				}
				# Determine if the input had to be checked.
				if ( $this->poll->mBeingCorrected && $this->mRequest->getVal( $name ) == $value ) {
					$inp[ 'checked' ] = 'checked';
				}
				if ( $this->answerExists( $inputType, $proposalId, $catId ) !== false ) {
					$inp[ 'checked' ] = 'checked';
				}
				if ( array_key_exists( 'checked', $inp ) ) {
					if ( $this->mSubType == 'unique' ) {
						if ( $this->poll->mBeingCorrected && !$this->isUniqueProposalCategoryId( $proposalId, $catId ) ) {
							$text = $this->view->bodyErrorMessage( wfMsg( 'qp_error_non_unique_choice' ), 'NA' ) . $text;
							unset( $inp[ 'checked' ] );
							QP_Renderer::addClass( $row[ $catId ], 'error' );
						}
					} else {
						$this->view->spanState->wasChecked = true;
					}
				}
				if ( array_key_exists( 'checked', $inp ) ) {
					# add category to the list of user answers for current proposal (row)
					$this->mProposalCategoryId[ $proposalId ][] = $catId;
					$this->mProposalCategoryText[ $proposalId ][] = '';
				}
				QP_Renderer::addClass( $row[ $catId ], $this->view->spanState->className );
				if ( $this->mSubType == 'unique' ) {
					# unique (question,category,proposal) "coordinate" for javascript
					$inp[ 'id' ] = 'uq' . $this->mQuestionId . 'c' . $catId . 'p' . $proposalId;
					# If type='unique()' question has more proposals than categories, such question is impossible to complete
					if ( count( $this->mProposalText ) > count( $this->mCategories ) ) {
						# if there was no previous errors, hightlight the whole row
						if ( $this->getState() == '' ) {
							foreach( $row as &$cell ) {
								QP_Renderer::addClass( $cell, 'error' );
							}
						}
						$text = $this->view->bodyErrorMessage( wfMsg( 'qp_error_unique' ), 'error' ) . $text;
					}
				}
				$inp[ 'class' ] = 'check';
				$inp[ 'type' ] = $inputType;
				$inp[ 'name' ] = $name;
				$inp[ 'value' ] = $value;
				if ( $this->view->showResults['type'] != 0 ) {
					# there ars some stat in row (not necessarily all cells, because size of question table changes dynamically)
					$row[ $catId ][ 0 ] = $this->view->addShowResults( $inp, $proposalId, $catId );
				} else {
					$row[ $catId ][ 0 ] = $inp;
				}
			}
			# If the proposal text is empty, the question has a syntax error.
			if( trim( $text ) == '' ) {
				$text = $this->view->bodyErrorMessage( wfMsg( 'qp_error_proposal_text_empty' ), 'error' );
				foreach( $row as &$cell ) {
					QP_Renderer::addClass( $cell, 'error' );
				}
			}
			# If the proposal was submitted but unanswered
			if ( $this->poll->mBeingCorrected && !array_key_exists( $proposalId, $this->mProposalCategoryId ) ) {
				# if there was no previous errors, hightlight the whole row
				if ( $this->getState() == '' ) {
					foreach( $row as &$cell ) {
						QP_Renderer::addClass( $cell, 'error' );
					}
				}
				$text = $this->view->bodyErrorMessage( wfMsg( 'qp_error_no_answer' ), 'NA' ) . $text;
			}
			if ( $text !== null ) {
				$this->view->addProposal( $proposalId, $text, $row );
			}
		}
	}

	function mixedChoiceParseBody() {
		# Parameters used in some special cases.
		$this->mProposalPattern = '`^';
		foreach ( $this->mCategories as $catDesc ) {
			$this->mProposalPattern .= '(\[\]|\(\)|<>)';
		}
		$this->mProposalPattern .= '(.*)`u';
		$proposalId = -1;
		foreach( $this->raws as $raw ) {
			# empty proposal text and row
			$text = null;
			$row = Array();
			if ( preg_match( $this->mProposalPattern, $raw, $matches ) ) {
				$text = array_pop( $matches ); // current proposal text
				array_shift( $matches ); // remove "at whole" match
				$last_matches = $matches;
			} else {
				if ( $proposalId >= 0 ) {
					# shortened syntax: use the pattern from the last row where it's been defined
					$text = $raw;
					$matches = $last_matches;
				}
			}
			if ( $text === null ) {
				continue;
			}
			$proposalId++;
			$this->view->initProposalView();
			$this->mProposalText[ $proposalId ] = trim( $text );
			# Determine a type ID, according to the questionType and the number of signes.
			foreach ( $this->mCategories as $catId => $catDesc ) {
				$typeId  = $matches[ $catId ];
				$row[ $catId ] = Array();
				$inp = Array( '__tag'=>'input' );
				# Determine the input's name and value.
				switch ( $typeId ) {
					case '<>':
						$name = 'q' . $this->mQuestionId . 'p' . $proposalId . 's' . $catId;
						$value = '';
						$inputType = 'text';
						break;
					case '[]':
						$name = 'q' . $this->mQuestionId . 'p' . $proposalId . 's' . $catId;
						$value = 's' . $catId;
						$inputType = 'checkbox';
						break;
					case '()':
						$name = 'q' . $this->mQuestionId . 'p' . $proposalId . 's' . $catId;
						$value = 's' . $catId;
						$inputType = 'radio';
						break;
				}
				# Determine if the input has to be checked.
				$input_checked = false;
				$text_answer = '';
				if ( $this->poll->mBeingCorrected && $this->mRequest->getVal( $name ) !== null ) {
					if ( $inputType == 'text' ) {
						$text_answer = trim( $this->mRequest->getText( $name ) );
						if ( strlen( $text_answer ) > qp_Setup::MAX_TEXT_ANSWER_LENGTH ) {
							$text_answer = substr( $text_answer, 0, qp_Setup::MAX_TEXT_ANSWER_LENGTH );
						}
						if ( $text_answer != '' ) {
							$input_checked = true;
						}
					} else {
						$inp[ 'checked' ] = 'checked';
						$input_checked = true;
					}
				}
				if ( ( $prev_text_answer = $this->answerExists( $inputType, $proposalId, $catId ) ) !== false ) {
					$input_checked = true;
					if ( $inputType == 'text' ) {
						$text_answer = $prev_text_answer;
					} else {
						$inp[ 'checked' ] = 'checked';
					}
				}
				if ( $input_checked === true ) {
					# add category to the list of user answers for current proposal (row)
					$this->mProposalCategoryId[ $proposalId ][] = $catId;
					$this->mProposalCategoryText[ $proposalId ][] = $text_answer;
				}
				$row[ $catId ][ 'class' ] = 'sign';
				# unique (question,proposal,category) "coordinate" for javascript
				$inp[ 'id' ] = 'mx' . $this->mQuestionId . 'p' . $proposalId . 'c' . $catId;
				$inp[ 'class' ] = 'check';
				$inp[ 'type' ] = $inputType;
				$inp[ 'name' ] = $name;
				if ( $inputType == 'text' ) {
					$inp[ 'value' ] = qp_Setup::specialchars( $text_answer );
					if ( $this->view->textInputStyle != '' ) {
						$inp[ 'style' ] = $this->view->textInputStyle;
					}
				} else {
					$inp[ 'value' ] = $value;
				}
				if ( $this->view->showResults['type'] != 0 ) {
					# there ars some stat in row (not necessarily all cells, because size of question table changes dynamically)
					$row[ $catId ][ 0 ] = $this->view->addShowResults( $inp, $proposalId, $catId );
				} else {
					$row[ $catId ][ 0 ] = $inp;
				}
			}
			try {
				# if there is only one category defined and it is not a textfield,
				# the question has a syntax error
				if ( count( $matches ) < 2 && $matches[0] != '<>' ) {
					$text = $this->view->bodyErrorMessage( wfMsg( 'qp_error_too_few_categories' ), 'error' );
					throw new Exception( 'qp_error' );
				}
				# If the proposal text is empty, the question has a syntax error.
				if( trim( $text ) == '' ) {
					$text = $this->view->bodyErrorMessage( wfMsg( 'qp_error_proposal_text_empty' ), 'error' );
					throw new Exception( 'qp_error' );
				}
				# If the proposal was submitted but unanswered
				if ( $this->poll->mBeingCorrected && !array_key_exists( $proposalId, $this->mProposalCategoryId ) ) {
					$prev_state = $this->getState();
					$text = $this->view->bodyErrorMessage( wfMsg( 'qp_error_no_answer' ), 'NA' ) . $text;
					# if there was no previous errors, hightlight the whole row
					if ( $prev_state == '' ) {
						throw new Exception( 'qp_error' );
					}
				}
			} catch( Exception $e ) {
				if ( $e->getMessage() == 'qp_error' ) {
					foreach( $row as &$cell ) {
						QP_Renderer::addClass( $cell, 'error' );
					}
				} else {
					throw new MWException( $e->getMessage() );
				}
			}
			$this->view->addProposal( $proposalId, $text, $row );
		}
	}

	/**
	 * build internal & visual representation of question categories
	 * 
	 * @param  $input			the raw source of categories
	 */
	function parseCategories( $input ) {
		# build "raw" $categories array
		# split tokens
		$cat_split = preg_split( '`({{|}}|\[\[|\]\]|\|)`u', $input, -1, PREG_SPLIT_DELIM_CAPTURE );
		$matching_braces = Array();
		$curr_elem = '';
		$categories = Array();
		foreach( $cat_split as $part ) {
			switch ($part) {
				case '|' :
					if ( count( $matching_braces ) == 0 ) {
						# delimeters are working only when braces are completely closed
						$categories[] = $curr_elem;
						$curr_elem = '';
						$part = '';
					}
					break;
				case '[[' :
				case '{{' :
					if ( $part == '[[' ) {
						$last_brace = ']]';
					} else {
						$last_brace = '}}';
					}
					array_push( $matching_braces, $last_brace );
					break;
				case ']]' :
				case '}}' :
					if ( count( $matching_braces ) > 0 ) {
						$last_brace = array_pop( $matching_braces );
						if ( $last_brace != $part ) {
							array_push( $matching_braces, $last_brace );
						}
					}
					break;
			}
			$curr_elem .= $part;
		}
		if ( $curr_elem != '' ) {
			$categories[] = $curr_elem;
		}
		$categories = array_map( 'trim', $categories );
		# analyze previousely built "raw" categories array
		# Less than two categories is a syntax error.
		if ( $this->mType != 'mixedChoice' && count( $categories ) < 2 ) {
			$categories[0] .= $this->view->bodyErrorMessage( wfMsg( 'qp_error_too_few_categories' ), 'error' );
		}
		foreach ( $categories as $catkey => $category ) {
			# If a category name is empty, the question has a syntax error.
			if( $category == '' ) {
				$category = $this->view->bodyErrorMessage( wfMsg( 'qp_error_category_name_empty' ), 'error' );
			}
			$this->mCategories[ $catkey ]["name"] = $category;
		}
		$row = $this->view->buildCategoriesRow( $this->mCategories );
		# cut unused categories rows which are presented in DB but were removed from article
		$this->mCategories = array_slice( $this->mCategories, 0, count( $categories ) );
		return $row;
	}

	/**
	 * build internal & visual representation of question category spans
	 * ( also known as metacategories or "category groups" )
	 * 
	 * @param  $input			the raw source of category spans
	 */
	# warning: parseCategorySpans() should be called after parseCategories()
	# todo: split view logic into qp_QuestionView class
	function parseCategorySpans( $input ) {
		$row = Array();
		if ( $this->mType == "singleChoice" ) {
			# real category spans have sense only for radiobuttons
			# build "raw" spans array
			# split tokens
			$span_split = preg_split( '`({{|}}|\[\[|\]\]|\||\!)`u', $input, -1, PREG_SPLIT_DELIM_CAPTURE );
			$matching_braces = Array();
			$curr_elem = null;
			$spans = Array();
			if ( isset( $span_split[0] ) && $span_split[0] == '' ) {
				array_shift( $span_split );
				if ( isset( $span_split[0] ) && in_array( $span_split[0], array( '!', '|' ) ) ) {
					$delim = $span_split[0];
					foreach( $span_split as $part ) {
						if ( $part == $delim ) {
							if ( count( $matching_braces ) == 0 ) {
								# delimeters are working only when braces are completely closed
								$spans[0][] = $part;
								if ( $curr_elem !== null ) {
									$spans[1][] = $curr_elem;
								}
								$curr_elem = '';
								$part = '';
							}
						} else {
							switch ( $part ) {
								case '[[' :
								case '{{' :
									if ( $part == '[[' ) {
										$last_brace = ']]';
									} else {
										$last_brace = '}}';
									}
									array_push ( $matching_braces, $last_brace );
									break;
								case ']]' :
								case '}}' :
									if ( count( $matching_braces ) > 0 ) {
										$last_brace = array_pop( $matching_braces );
										if ( $last_brace != $part ) {
											array_push( $matching_braces, $last_brace );
										}
									}
									break;
							}
						}
						$curr_elem .= $part;
					}
					if ( $curr_elem !== null ) {
						$spans[1][] = $curr_elem;
					} else {
						$curr_elem = '';
					}
				}
			}
			# analyze previousely build "raw" spans array
			# Less than one span is a syntax error.
			if( !array_key_exists(0, $spans) ) {
				return $this->view->bodyErrorMessage( wfMsg( "qp_error_too_few_spans" ), "error" );
			}
			# fill undefined spans with the last span value
			$SpanCategDelta = count( $this->mCategories ) - count( $spans[0] );
			# temporary var $diff used to avoid warning in E_STRICT mode
			$diff = array_diff( array_keys( $spans[1] ), array_keys( $spans[1], "", true ) );
			$lastDefinedSpanKey = array_pop( $diff );
			unset( $diff );
			if ( $lastDefinedSpanKey !== null ) {
				if ( $SpanCategDelta > 0 ) {
					# increase the length of last defined span value to match total lenth of categories
					$lastSpanType = $spans[0][$lastDefinedSpanKey];
					$spans[0] = array_merge( array_slice( $spans[0], 0, $lastDefinedSpanKey ),
						array_fill( 0, $SpanCategDelta, $lastSpanType ),
						array_slice( $spans[0], $lastDefinedSpanKey ) );
					$spans[1] = array_merge( array_slice( $spans[1], 0, $lastDefinedSpanKey ),
						array_fill( 0, $SpanCategDelta, "" ),
						array_slice( $spans[1], $lastDefinedSpanKey ) );
				} elseif ( $SpanCategDelta < 0 ) {
					# cut unused but defined extra spans
					$spans[0] = array_slice( $spans[0], count( $this->mCategories ), -$SpanCategDelta );
					$spans[1] = array_slice( $spans[1], count( $this->mCategories ), -$SpanCategDelta );
				}
			} else {
				# no valid category spans are defined
				return $this->view->bodyErrorMessage( wfMsg( 'qp_error_too_few_spans' ), 'error' );
			}
			# populate mCategorySpans and row
			if ( $this->view->proposalsFirst ) {
				// add empty <th> at the begin of row to "compensate" proposal text
				$row[] = array( '__tag'=>'td', 0=>"", 'style'=>'border:none;', '__end'=>"\n" );
			}
			$colspanBase = ( $lastDefinedSpanKey == 0 ) ? 1 : 0;
			$colspan = 1;
			$categorySpanId = 0;
			foreach ( $spans[0] as $spanKey => $spanType ) {
				$spanCategory = trim( $spans[1][$spanKey] );
				if ( $spanCategory=="" ) {
					$colspan++;
				} else {
					$row[] = array( "count"=>$colspan + $colspanBase, 0=>$this->view->rtp( $spanCategory ) );
					if ( $spanType == "|" ) { // "!" is a comment header, not a real category span
						$this->mCategorySpans[ $categorySpanId ]['name'] = $spanCategory;
						$this->mCategorySpans[ $categorySpanId ]['count'] = $colspan;
						for ( $i = $spanKey;
							$i >=0 && array_key_exists( $i, $this->mCategories ) && !array_key_exists( 'spanId', $this->mCategories[ $i ] );
							$i-- ) {
							$this->mCategories[$i]['spanId'] = $categorySpanId;
						}
						$categorySpanId++;
					}
					$colspan = 1;
				}
			}
			if ( !$this->view->proposalsFirst ) {
				// add empty <th> at the end of row to "compensate" proposal text
				$row[] = array( '__tag'=>'td', 0=>"", 'style'=>'border:none;', '__end'=>"\n" );
			}
		}
		return $row;
	}

	function isUniqueProposalCategoryId( $proposalId, $catId ) {
		foreach( $this->mProposalCategoryId as $proposalCategoryId ) {
			if ( in_array( $catId, $proposalCategoryId ) ) {
				return false;
			}
		}
		return true;
	}

	/**
	 * @return  associative array of script-generated error messages for current question proposals
	 *          false, when there are no script-generated error messages
	 */
	function getProposalsErrors() {
		$interpAnswer = &$this->poll->pollStore->interpAnswer;
		if ( !is_array( $interpAnswer->qpErrors ) ||
				!isset( $interpAnswer->qpErrors[$this->mQuestionId] ) ) {
			return false;
		}
		return $interpAnswer->qpErrors[$this->mQuestionId];
	}

} /* end of qp_Question class */
