<?php

if ( !defined( 'MEDIAWIKI' ) ) {
	die();
}

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'MetricsReporting',
	'url' => 'http://www.mediawiki.org/wiki/Extension:MetricsReporting',
	'author' => 'Sam Reed',
	'description' => 'Api for Wikimedia Metrics Reporting output',
);

$wgMetricAPIModules = array();

$wgMetricsDBserver         = '';
//$wgMetricsDBport           = 5432;
$wgMetricsDBname           = '';
$wgMetricsDBuser           = '';
$wgMetricsDBpassword       = '';
$wgMetricsDBtype           = 'mysql';

$dir = dirname( __FILE__ ) . '/';

$wgAutoloadClasses['ApiAnalytics'] = $dir . 'ApiAnalytics.php';
$wgAPIModules['analytics'] = 'ApiAnalytics';

$wgAutoloadClasses['ApiAnalyticsBase'] = $dir . 'ApiAnalyticsBase.php';

$metricsDir = $dir . 'metrics/';

$wgAutoloadClasses['ComScoreReachPercentageMetric'] = $metricsDir . 'ComScoreReachPercentageMetric.php';
$wgMetricAPIModules['comscorereachpercentage'] = 'ComScoreReachPercentageMetric';

$wgAutoloadClasses['ComScoreUniqueVisitorMetric'] = $metricsDir . 'ComScoreUniqueVisitorMetric.php';
$wgMetricAPIModules['comscoreuniquevisitors'] = 'ComScoreUniqueVisitorMetric';

$wgAutoloadClasses['DumpActiveEditors100Metric'] = $metricsDir . 'DumpActiveEditors100Metric.php';
$wgMetricAPIModules['dumpactiveeditors100'] = 'DumpActiveEditors100Metric';

$wgAutoloadClasses['DumpActiveEditors5Metric'] = $metricsDir . 'DumpActiveEditors5Metric.php';
$wgMetricAPIModules['dumpactiveeditors5'] = 'DumpActiveEditors5Metric';

$wgAutoloadClasses['DumpArticleCountMetric'] = $metricsDir . 'DumpArticleCountMetric.php';
$wgMetricAPIModules['dumparticlecount'] = 'DumpArticleCountMetric';

$wgAutoloadClasses['DumpBinaryCountMetric'] = $metricsDir . 'DumpBinaryCountMetric.php';
$wgMetricAPIModules['dumpbinarycount'] = 'DumpBinaryCountMetric';

$wgAutoloadClasses['DumpEditsMetric'] = $metricsDir . 'DumpEditsMetric.php';
$wgMetricAPIModules['dumpedits'] = 'DumpEditsMetric';

$wgAutoloadClasses['DumpNewRegisteredEditorsMetric'] = $metricsDir . 'DumpNewRegisteredEditorsMetric.php';
$wgMetricAPIModules['dumpnewregisterededitors'] = 'DumpNewRegisteredEditorsMetric';

$wgAutoloadClasses['EstimateOfflineMetric'] = $metricsDir . 'EstimateOfflineMetric.php';
$wgMetricAPIModules['estimateoffline'] = 'EstimateOfflineMetric';

$wgAutoloadClasses['SquidPageViewsMetric'] = $metricsDir . 'SquidPageViewsMetric.php';
$wgMetricAPIModules['squidpageviews'] = 'SquidPageViewsMetric';
