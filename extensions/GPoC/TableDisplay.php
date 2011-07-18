<?php
if ( !defined( 'MEDIAWIKI' ) ) {
	exit( 1 );
}

class TableDisplay {
	public static function ParserFunctionInit( &$parser ) {
		$parser->setFunctionHook( 'AssessmentStats', 'TableDisplay::AssessmentStatsRender' );
		return true;
	}

	public static function LanguageGetMagic( &$magicWords, $langCode ) {
		$magicWords['AssessmentStats'] = array( 0, 'AssessmentStats' );
		return true;
	}	

	private static function formatTable( $projectName, $projectStats ) {
		// Column Headers
		$col_headers = array_keys($projectStats['top']);
		$output = "{| class='wikitable' \n|+ $projectName article ratings\n";
		$output .= "|-\n ! scope='col' | \n";
		foreach( $col_headers as $col_header ) {
			$output .= "! scope='col' | $col_header \n";
		}
		foreach( $projectStats as $importance => $qualityRatings ) {
			$output .= "|- \n ! scope='row' | $importance\n";
			foreach( $qualityRatings as $quality => $qualityCount ) {
				$output .= "| $qualityCount \n";
			}
		}
		$output .= "|}";
		return $output;
	}
	
	public static function AssessmentStatsRender( $parser, $project ) {
		$projectStats = Statistics::getProjectStats( $project );
		$output = TableDisplay::formatTable( $project, $projectStats );
		return $output;
	}
}
