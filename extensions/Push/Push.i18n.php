<?php

/**
 * Internationalization file for the Push extension.
 *
 * @file Push.i18n.php
 * @ingroup Push
 *
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */

$messages = array();

/** English
 * @author Jeroen De Dauw
 */
$messages['en'] = array(
	'push-desc' => 'Lightweight extension to push content to other wikis',

	// Tab
	'push-tab-text' => 'Push',
	'push-button-text' => 'Push',
	'push-tab-desc' => 'This tab allows you to push the current revision of this page to one or more other wikis.',
	'push-button-pushing' => 'Pushing',
	'push-button-completed' => 'Push completed',
	'push-button-failed' => 'Push failed',
	'push-tab-title' => 'Pushing $1',
	'push-targets' => 'Push targets',
	'push-add-target' => 'Add target',
	'push-import-revision-message' => 'Import from $1 by $2.$3', // $3 is 'push-import-revision-comment' or empty. 1360!
	'push-import-revision-comment' => ' Last comment: $1',
	'push-tab-no-targets' => 'There are no targets to push to. Please add some to your LocalSettings.php file.',
	'push-tab-push-to' => 'Push to $1',
	'push-remote-pages' => 'Remote pages',
	'push-remote-page-link' => '$1 on $2',
	'push-remote-page-link-full' => 'View $1 on $2',
	'push-targets-total' => 'There are $1 targets in total.', // $1 will always be plural
	'push-button-all' => 'Push all',
	
	// Special page
	'special-push' => 'Push pages',
);