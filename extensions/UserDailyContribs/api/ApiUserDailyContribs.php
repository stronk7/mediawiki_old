<?php 

class ApiUserDailyContribs extends ApiBase {

	public function execute() {
		$params = $this->extractRequestParams();
		$result = $this->getResult();

		$userName = $params['user'];
		$days = $params['daysago'];
		$user = User::newFromName($userName);
		if ( !$user ) {
		if ( !$wgAuth->userExists( $userName ) ) {
			$this->dieUsage( 'Specified user does not exist', 'bad_user' );
		}
		
		$now = time();
		$result->addValue( $this->getModuleName() ,
			'id', $user->getId() );
		// returns date of registration in YYYYMMDDHHMMSS format
		$result->addValue( $this->getModuleName() ,
			'registration', $user->getRegistration() ? '0' : $user->getRegistration() );
		// returns number of edits since daysago param
		$result->addValue( $this->getModuleName() ,
			'timeFrameEdits', getUserEditCountSince( $now - ($days * 60 *60 *24), $user ) );
		// returns total number of edits
		$result->addValue( $this->getModuleName() ,
			'totalEdits', ($user->getEditCount() == NULL)?0:$user->getEditCount() );
	}

	public function getAllowedParams() {
		return array(
			'user' => array(
				ApiBase::PARAM_TYPE => 'user',		
		),
			'daysago' => array(
				ApiBase::PARAM_TYPE => 'integer',
				ApiBase::PARAM_MIN => 0,
		),
		
		);
	}

	public function getParamDescription() {
		return array(
			'user' => 'Username to query',
			'daysago' => 'Number of edits since this many days ago',
		);
	}

	public function getDescription() {
		return 'Get the total number of user edits, time of registration, and edits in a given timeframe';
	}

	protected function getExamples() {
		return 'api.php?action=userdailycontribs&user=WikiSysop&daysago=5';
	}

	public function getVersion() {
		return __CLASS__ . ': $Id$';
	}
	
}