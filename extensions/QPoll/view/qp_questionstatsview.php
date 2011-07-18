<?php
/**
 * ***** BEGIN LICENSE BLOCK *****
 * This file is part of QPoll.
 * Uses parts of code from Quiz extension (c) 2007 Louis-Rémi BABE. All rights reserved.
 *
 * QPoll is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * QPoll is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with QPoll; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * ***** END LICENSE BLOCK *****
 *
 * QPoll is a poll tool for MediaWiki.
 * 
 * To activate this extension :
 * * Create a new directory named QPoll into the directory "extensions" of MediaWiki.
 * * Place the files from the extension archive there.
 * * Add this line at the end of your LocalSettings.php file :
 * require_once "$IP/extensions/QPoll/qp_user.php";
 * 
 * @version 0.8.0a
 * @link http://www.mediawiki.org/wiki/Extension:QPoll
 * @author QuestPC <questpc@rambler.ru>
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( "This file is part of the QPoll extension. It is not a valid entry point.\n" );
}

/**
 * Stores question proposals views (see qp_qestion.php) and
 * allows to modify these for quizes results at the later stage (see qp_poll.php)
 * todo: transfer view logic completely from controllers
 */
class qp_QuestionStatsView extends qp_QuestionView {

	static function newFromBaseView( $view ) {
		return new qp_QuestionStatsView( $view->parser, $view->ppframe, $view->showResults );
	}

	function isCompatibleController( $ctrl ) {
		return method_exists( $ctrl, 'statsParseBody' );
	}

	function renderQuestion() {
		# check whether the current global showresults level allows to display statistics
		if ( qp_Setup::$global_showresults == 0 ||
				(qp_Setup::$global_showresults <= 1 && !$this->ctrl->alreadyVoted) ) {
			# suppress the output
			return '';
		}
		return parent::renderQuestion();
	}

	/*** cell templates ***/

	function addShowResults( $proposalId, $catId ) {
		return $this->{'addShowResults' . $this->showResults['type']}( $proposalId, $catId );
	}

	# cell templates for the selected showresults
	var $cellTemplate = Array();
	var $cellTemplateParam = Array( 'percents'=>'', 'bar1style'=>'', 'bar2style'=>'' );

	# setup a template for showresults=1
	# showresults=1 cellTemplate has only one variant
	function cellTemplate1() {
		$this->cellTemplate =
			array( 
				0=>array( '__tag'=>'div', 'class'=>'stats', 0=>&$this->cellTemplateParam['percents'] )
			);
		if ( isset( $this->showResults['color'] ) ) {
			$this->cellTemplate[0]['style'] = 'color:' . $this->showResults['color'] . ';';
		}
		if ( isset( $this->showResults['background'] ) ) {
			$this->cellTemplate[0]['style'] .= 'background:' . $this->showResults['background'] . ';';
		}
	}

	# transform input according to showresults=1 (numerical percents)
	# *** warning! parameters should be passed only by value, not by reference ***
	function addShowResults1( $proposalId, $catId ) {
		$this->cellTemplateParam['percents'] = '&#160;';
		if ( ( $percents = $this->ctrl->getPercents( $proposalId, $catId ) ) !== false ) {
			# there is a stat in cell
			$this->cellTemplateParam['percents'] = $percents . '%';
			# template has to be rendered immediately, because $this->cellTemplateParam[] are used as pointers and thus,
			# will always be overwritten
			return QP_Renderer::renderHTMLobject( $this->cellTemplate );
		} else {
			return '';
		}
	}

	# setup a template for showresults=2
	function cellTemplate2() {
		# statical styles
		$percentstyle = '';
		if ( isset( $this->showResults['textcolor'] ) ) {
			$percentstyle = 'color:' . $this->showResults['textcolor'] . ';';
		}
		if ( isset( $this->showResults['textbackground'] ) ) {
			$percentstyle .= 'background:' . $this->showResults['textbackground'] . ';';
		}
		# has one available template ('bar')
		$this->cellTemplate = array(
			'bar'=>array( '__tag'=>'div', 'class'=>'stats2',
				0=>array( '__tag'=>'div', 'class'=>'bar1', 'style'=>&$this->cellTemplateParam['bar1style'], 0=>'&#160;' ),
				1=>array( '__tag'=>'div', 'class'=>'bar2', 'style'=>&$this->cellTemplateParam['bar2style'], 0=>'&#160;' ),
				2=>array( '__tag'=>'div', 'class'=>'bar3', 'style'=>$percentstyle, 0=>&$this->cellTemplateParam['percents'] )
			),
			# the following entries are not real templates, but pre-calculated values of css attributes taken from showresults parameter
			'bar1showres'=>'',
			'bar2showres'=>''
		);
		# dynamical styles, width: in percents will be added during rendering in addShowResults
		if ( isset( $this->showResults['color'] ) ) {
			$this->cellTemplate['bar1showres'] .= 'background:' . $this->showResults['color'] . ';';
		}
		if ( isset( $this->showResults['background'] ) ) {
			$this->cellTemplate['bar2showres'] .= 'background:' . $this->showResults['background'] . ';';
		}
	}

	# transform input according to showresults=2 (bars)
	# *** warning! parameters should be passed only by value, not by reference ***
	function addShowResults2( $proposalId, $catId ) {
		$this->cellTemplateParam['percents'] = '&#160;';
		if ( ( $percents = $this->ctrl->getPercents( $proposalId, $catId ) ) !== false ) {
			# there is a stat in cell
			$this->cellTemplateParam['percents'] = $percents . '%';
			$this->cellTemplateParam['bar1style'] = 'width:' . $percents . 'px;' . $this->cellTemplate[ 'bar1showres' ];
			$this->cellTemplateParam['bar2style'] = 'width:' . (100 - $percents) . 'px;' . $this->cellTemplate[ 'bar2showres' ];
			return qp_Renderer::renderHTMLobject( $this->cellTemplate['bar'] );
		} else {
			return '';
		}
	}

	/*** end of cell templates ***/

} /* end of qp_QuestionStatsView class */
