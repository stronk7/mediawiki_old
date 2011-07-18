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

class qp_Interpret {

	/**
	 * Glues the content of <qpinterpret> tags together, checks "lang" attribute
	 * and calls appropriate interpretator to evaluate the user answer
	 * 
	 * @param $interpArticle  _existing_ article with interpretation script enclosed in <qpinterp> tags
	 * @param $answers  array of user selected categories for every proposal & question of the poll
	 * @return instance of qp_InterpAnswer class
	 */
	static function getAnswer( $interpArticle, $answers ) {
		global $wgParser;
		$matches = array();
		# extract <qpinterpret> tags from the article content
		$wgParser->extractTagsAndParams( array( qp_Setup::$interpTag ), $interpArticle->getRawText(), $matches );
		$interpAnswer = new qp_InterpAnswer();
		# glue content of all <qpinterpret> tags at the page together
		$interpretScript = '';
		$lang = '';
		foreach ( $matches as &$match ) {
			list( $tagName, $content, $attrs ) = $match;
			# basic checks for lang attribute (only lang="php" is implemented yet)
			# however we do not want to limit interpretation language,
			# so the attribute is enforced to use
			if ( !isset( $attrs['lang'] ) ) {
				return $interpAnswer->setError( wfMsg( 'qp_error_eval_missed_lang_attr' ) );
			}
			if ( $lang == '' ) {
				$lang = $attrs['lang'];
			} elseif ( $attrs['lang'] != $lang ) {
				return $interpAnswer->setError( wfMsg( 'qp_error_eval_mix_languages', $lang, $attrs['lang'] ) );
			}
			if ( $tagName == qp_Setup::$interpTag ) {
				$interpretScript .= $content;
			}
		}
		switch ( $lang ) {
		case 'php' :
			$result = qp_Eval::interpretAnswer( $interpretScript, $answers, $interpAnswer );
			if ( $result instanceof qp_InterpAnswer ) {
				# evaluation error (environment error) , return it;
				return $interpAnswer;
			}
			break;
		default :
			return $interpAnswer->setError( wfMsg( 'qp_error_eval_unsupported_language', $lang ) );
		}
		/*** process the result ***/
		if ( !is_array( $result ) ) {
			return $interpAnswer->setError( wfMsg( 'qp_error_interpretation_no_return' ) );
		}
		# initialize $interpAnswer->qpError[] member array
		foreach ( $result as $qidx => $question ) {
			if ( is_int( $qidx ) && is_array( $question ) ) {
				foreach ( $question as $pidx => $error ) {
					if ( is_int( $pidx ) ) {
						$interpAnswer->setQPerror( $qidx, $pidx, $error );
					}
				}
			}
		}
		if ( isset( $result['error'] ) && trim( $result['error'] ) != '' ) {
			# script-generated error for the whole answer
			return $interpAnswer->setError( (string) $result['error'] );
		}
		# if there were question/proposal errors, return them;
		if ( $interpAnswer->isError() ) {
			return $interpAnswer->setDefaultErrorMessage();
		}
		if ( !isset( $result['short'] ) || !isset( $result['long'] ) ) {
			return $interpAnswer->setError( wfMsg( 'qp_error_interpretation_no_return' ) );
		}
		$interpAnswer->short = (string) $result['short'];
		$interpAnswer->long = (string) $result['long'];
		return $interpAnswer;
	}

} /* end of qp_Interpret class */
