<?php

/**
 * @addtogroup API
 */
class ApiWOMGetObjectModel extends ApiBase {

	public function __construct( $main, $action ) {
		parent :: __construct( $main, $action );
	}

	public function execute() {
		global $wgUser;

		$params = $this->extractRequestParams();
		if ( is_null( $params['page'] ) )
			$this->dieUsage( 'Must specify page title', 0 );
		if ( is_null( $params['xpath'] ) )
			$this->dieUsage( 'Must specify xpath', 1 );

		$page = $params['page'];
		$xpath = $params['xpath'];
		$type = $params['type'];
		$rid = $params['rid'];


		$articleTitle = Title::newFromText( $page );
		if ( !$articleTitle )
			$this->dieUsage( "Can't create title object ($page)", 2 );

		$article = new Article( $articleTitle );
		if ( !$article->exists() )
			$this->dieUsage( "Article doesn't exist ($page)", 3 );

		try {
			$objs = WOMProcessor::getObjIdByXPath( $articleTitle, $xpath, $rid );
		} catch ( Exception $e ) {
			$err = $e->getMessage();
		}

		$result = array();

		if ( isset( $err ) ) {
			$result = array(
				'result' => 'Failure',
				'message' => array(),
			);
			$this->getResult()->setContent( $result['message'], $err );
		} else {
			$result['result'] = 'Success';

			// pay attention to special xml tag, e.g., <property><value>...</value></property>
			if ( $type == 'count' ) {
				$count = 0;
				foreach ( $objs as $id ) {
					if ( $id == '' ) continue;
					++ $count;
				}
				$result['return'] = $count;
			} else {
				$result['return'] = array();
				foreach ( $objs as $id ) {
					if ( $id == '' ) continue;
					$result['return'][$id] = array();
					if ( $type == 'xml' ) {
						$this->getResult()->setContent( $result['return'][$id], WOMProcessor::getPageObject( $articleTitle, $rid )->getObject( $id )->toXML() );
					} else {
						$this->getResult()->setContent( $result['return'][$id], WOMProcessor::getPageObject( $articleTitle, $rid )->getObject( $id )->getWikiText() );
					}
				}
			}
		}
		$this->getResult()->addValue( null, $this->getModuleName(), $result );
	}

	protected function getAllowedParams() {
		return array (
			'page' => null,
			'xpath' => null,
			'type' => array(
				ApiBase :: PARAM_DFLT => 'get',
				ApiBase :: PARAM_TYPE => array(
					'get',
					'count',
					'xml',
				),
			),
			'rid' => array (
                                ApiBase :: PARAM_TYPE => 'integer',
                                ApiBase :: PARAM_DFLT => 0,
                                ApiBase :: PARAM_MIN => 0
                        ),
		);
	}

	protected function getParamDescription() {
		return array (
			'page' => 'Title of the page to modify',
			'xpath' => 'DOM-like xpath to locate WOM object instances (http://www.w3schools.com/xpath/xpath_syntax.asp)',
			'type' => array (
				'Type to fetch useful wiki object data',
				'type = get, get specified object',
				'type = count, get objects count with specified xpath',
				'type = xml, view objects\' xml format with specified xpath, usually use with format=xml',
			),
			'rid' => 'Revision id of specified page - by dafault latest updated revision (0) is used',
		);
	}

	protected function getDescription() {
		return 'Call to get object values to Wiki Object Model';
	}

	protected function getExamples() {
		return array (
			'api.php?action=womget&page=Somepage&xpath=//template[@name=SomeTempate]/template_field[@key=templateparam]'
		);
	}

	public function getVersion() {
		return __CLASS__ . ': $Id$';
	}
}
