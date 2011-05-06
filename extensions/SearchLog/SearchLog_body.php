<?php
/**
 * Class for Special:SearchLog
 */
class SpecialSearchLog extends SpecialPage {
	const ENTIRE_LOG = 'searchlog-entire';

	public function __construct() {
		parent::__construct( 'SearchLog', 'searchlog-read' );
	}

	/**
	 * Get the location of the current log file. Will always be in $wgSearchLogPath/logs/
	 * Default (if $wgSearchLogFile is not set) is to return your hostname (minus the www.)
	 * @return String
	 */
	public static function getLogName() {
		global $wgSearchLogPath, $wgSearchLogFile, $wgServer;
		if( !$wgSearchLogFile ) {
			$file = str_replace( 'www.', '', parse_url( $wgServer, PHP_URL_HOST ) );
		} else {
			$file = $wgSearchLogFile;
		}
		return $wgSearchLogPath . $file;
	}

	public function execute( $par ) {
		global $wgOut, $wgSearchLogDateFormat, $wgRequest, $wgLang;

		$this->setHeaders();
		$period = $wgRequest->getVar( 'period', false );
		$match = array();

		# Get the dates of the first and last entries for the dropdown list range
		wfSuppressWarnings();
		$fh = fopen( self::getLogName(), 'r' );
		wfRestoreWarnings();
		if ( $fh ) {
			if ( preg_match('/^([0-9]{4})([0-9]{2})[0-9]{2},/', fread( $fh ,16 ), $match ) ) {
				list(,$y1,$m1) = $match;
			}
			$len = fstat( $fh );
			$len = $len['size'] % 1024;
			fseek( $fh, -$len, SEEK_END );
			$end = explode( "\n", fread( $fh, $len ) );
			$end = $end[ count( $end ) -2 ];
			if ( preg_match('/^([0-9]{4})([0-9]{2})[0-9]{2},/', $end, $match ) ) {
				list(,$y2,$m2) = $match;
			}
			fclose( $fh );
		}

		# Construct a list of months if first and last successfully obtained
		$months = '';
		if ( $y1 && $y2 ) {
			while ( ( $y1 * 100 + $m1 ) <= ( $y2 * 100 + $m2 ) ) {
				$p = strftime( $wgSearchLogDateFormat, mktime( 0, 0, 0, $m1, 1, $y1 ) );
				$selected = $p == $period ? ' selected' : '';
				$months .= "<option$selected>$p</option>\n";
				if ( $m1 == 12 ) {
					$m1 = 1; $y1++;
				} else {
					$m1++;
				}
			}
		}

		# Render the months as a dropdown-list
		$wgOut->addHTML(
			"<fieldset><legend>" . wfMsgHtml( 'searchlog-timeperiod' ) . "</legend>"
			. Html::element( 'form', array( 'method' => 'POST',
				'action' => $this->getTitle()->getLocalURL( 'action=submit' ) ) )
			. "<select name=\"period\">"
			. Html::element( 'option', array( 'value' => self::ENTIRE_LOG ),
				wfMsg( 'searchlog-entire' ) )
			. "$months</select>"
			. Html::input( 'input', '', array( 'type' => 'submit' ) )
			. "<br /><br />"
			. Xml::checkLabel( wfMsg( 'searchlog-unicode' ), 'wpEscapeChars', 'wpEscapeChars', true )
			. '</form></fieldset>'
		);

		# Generate a report if a period was specified
		if ( $period === false ) {
			$period = self::ENTIRE_LOG;
		}
		if ( $period ) {
			$headingPeriod = $period == self::ENTIRE_LOG ? wfMsgNoTrans( self::ENTIRE_LOG ) : $period;
			$heading = wfMsgNoTrans( 'searchlog-heading', $headingPeriod );
			$wgOut->addWikiText( "== $heading ==", true );
			wfSuppressWarnings();
			$fh = fopen( self::getLogName(), 'r' );
			wfRestoreWarnings();
			if ( $fh ) {
				# Scan the file and sum the search phrases over the period
				$total = array();
				while ( !feof( $fh ) ) {
					if ( preg_match('/^([0-9]{4})([0-9]{2})([0-9]{2}),(.+?),(.+?),(.+?),(.+)$/', fgets( $fh ), $match ) ) {
						list(,$y,$m,$d,$time,$user,$type,$phrase) = $match;
						$p = strftime( $wgSearchLogDateFormat, mktime( 0, 0, 0, $m, 1, $y ) );
						$i = strtolower( trim( $phrase ) );
						if ( $period == self::ENTIRE_LOG || $period == $p ) {
							$total[$i] = isset( $total[$i] ) ? ++$total[$i] : 1;
						}
					}
				}
				fclose( $fh );

				# Render the totals in a table
				$table  = "\n<table class=\"sortable\" id=\"searchlog\">\n"
					. "<tr><th>" . wfMsgHtml( 'searchlog-phrase' ) ."</th>"
					. "<th>" . wfMsgHtml( 'searchlog-occurances' ) . "</th></tr>";
				foreach ( $total as $phrase => $count ) {
					if( $wgRequest->getBool( 'wpEscapeChars' ) ) {
						$phrase = preg_replace( "/&/", "&#38;", $phrase );
					}
					$count = $wgLang->formatNum( $count );
					$table .= "<tr><td>[[$phrase]]</td><td>$count</td></tr>\n";
				}
				$table .= "</table>\n";
				$wgOut->addWikiText( $table, true );
			} else {
				$wgOut->addWikiMsg( "searchlog-cantopen", true );
			}
		}
	}
}
