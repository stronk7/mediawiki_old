<?php

class ApiMoodBar extends ApiBase {
	public function execute() {
		$params = $this->extractRequestParams();
		
		$params['page'] = Title::newFromText( $params['page'] );
		
		// Params are deliberately named the same as the properties,
		//  just slurp them through.
		$item = MBFeedbackItem::create( $params );
		
		$item->save();
		
		$result = array( 'result' => 'success' );
		$this->getResult()->addValue( null, $this->getModuleName(), $result );
	}
	
	public function needsToken() {
		return true;
	}

	public function getTokenSalt() {
		return '';
	}

	public function getAllowedParams() {
		return array(
			'page' => array(
				ApiBase::PARAM_REQUIRED => true,
			),
			'type' => array(
				ApiBase::PARAM_REQUIRED => true,
				ApiBase::PARAM_TYPE => MBFeedbackItem::getValidTypes(),
			),
			'comment' => array(
				ApiBase::PARAM_REQUIRED => true,
			),
			'anonymize' => array(
				ApiBase::PARAM_TYPE => 'boolean',
			),
			'editmode' => array(
				ApiBase::PARAM_TYPE => 'boolean',
			),
			'useragent' => null,
			'system' => null,
			'locale' => null,
			'bucket' => null,
		);
	}

	public function mustBePosted() {
		return true;
	}

	public function isWriteMode() {
		return true;
	}

	public function getVersion() {
		return __CLASS__ . ': $Id$';
	}
	
	public function getPossibleErrors() {
		return array_merge( parent::getPossibleErrors(), array(
			
		) );
	}
	
	public function getParamDescription() {
		return array(
			'page' => 'The page the feedback is on',
			'type' => 'The type of feedback being provided',
			'comment' => 'The feedback text',
			'anonymize' => 'Whether to hide user information',
			'editmode' => 'Whether or not the feedback context is in edit mode',
			'bucket' => 'The testing bucket, if any',
			'useragent' => 'The User-Agent header of the browser',
			'system' => 'The operating system being used',
			'locale' => 'The locale in use',
		);
	}
}
