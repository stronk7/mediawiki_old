<?php

/**
 * This is an extension to archive preemptively archive external links so that
 * in the even they go down a backup will be available.
 */

error_reporting( E_ALL | E_STRICT );

$path = dirname( __FILE__ );

$wgExtensionMessagesFiles['ArchiveLinks'] = "$path/ArchiveLinks.i18n.php";
$wgExtensionMessagesFiles['ModifyArchiveBlacklist'] = "$path/ArchiveLinks.i18n.php";
$wgExtensionMessagesFiles['ViewArchive'] = "$path/ArchiveLinks.i18n.php";

$wgAutoloadClasses['ArchiveLinks'] = "$path/ArchiveLinks.class.php";
$wgAutoloadClasses['SpecialModifyArchiveBlacklist'] = "$path/SpecialModifyArchiveBlacklist.php";
$wgAutoloadClasses['SpecialViewArchive'] = "$path/SpecialViewArchive.php";

$wgHooks['ArticleSaveComplete'][] = 'ArchiveLinks::queueExternalLinks';
$wgHooks['LinkerMakeExternalLink'][] = 'ArchiveLinks::rewriteLinks';

$wgSpecialPages['ModifyArchiveBlacklist'] = 'SpecialModifyArchiveBlacklist';
$wgSpecialPages['ViewArchive'] = 'SpecialViewArchive';

$wgArchiveLinksConfig = array(
	'archive_service' => 'wikiwix',
	'use_multiple_archives' => false,
	'run_spider_in_loop' => false,
	'in_progress_ignore_delay' => 7200,
);