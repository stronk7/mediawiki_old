<?php

class EstimateOfflineMetric extends ApiAnalyticsBase {

	public function getAllowedFilters() {
		return array();
	}

	protected function getQueryInfo() {
		return array(
			'table' => 'offline',
			'conds' => array(),
			'options' => array(),
			'join_conds' => array(),
		);
	}

	protected function getQueryFields() {
		return array(
			'date', 'readers',
		);
	}

	public function getDescription() {
		return 'Estimated number of people whom access Wikipedia through an offline reader';
	}

	protected function getExamples() {
		return array(
			'api.php?action=analytics&metric=estimateoffline',
		);
	}

	public function getVersion() {
		return __CLASS__ . ': $Id$';
	}
}
