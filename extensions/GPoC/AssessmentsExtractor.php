<?php

/**
 * Helps extract assessments from a parsed $DOM file
 **/
class AssessmentsExtractor
{
	private $mArticle;
	private $mText;

	function __construct( $article, $preparedText ) {
		$this->mText = $preparedText;
		$this->mArticle = $article;
	}	

	public function extractAssessments() {
		$regex = '/<span data-project-name="(?P<project>.*)" data-importance="(?P<importance>.*)" data-quality="(?P<quality>.*)"\s*>/';
		$matches = array();
		preg_match_all($regex, $this->mText, $matches, PREG_SET_ORDER);

		$assessments = array();
		foreach($matches as $match) {
			$assessments[$match['project']] = array(
				'importance' => $match['importance'],
				'quality' => $match['quality']
			);
		}
		return $assessments;
	}
}
