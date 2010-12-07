<?php

/**
 * @copyright 2010 Brion Vibber <brion@pobox.com>
 *
 * todo:
 * JS code: load on File pages (ok)
 * JS add 'edit' button (ok)
 * JS edit button -> load svgedit (ok)
 * API point to store file data (ok: using api upload point)
 * hook save UI in the editor (ok)
 * UI to start editor with a new file (create)
 * API point to fetch file data (ok: using ApiSVGProxy extension)
 * hook load UI to browse local files
 * visual cleanup
 * Flash compat for IE?
 */

$wgHooks['BeforePageDisplay'][] = 'SVGEditHooks::beforePageDisplay';

$wgAutoloadClasses['SVGEditHooks'] = dirname( __FILE__ ) . '/SVGEdit.hooks.php';

$myResourceTemplate = array(
	'localBasePath' => dirname( __FILE__ ) . '/modules',
	'remoteExtPath' => 'SVGEdit/modules',
	'group' => 'ext.svgedit',
);
$wgResourceModules += array(
	'ext.svgedit.editButton' => $myResourceTemplate + array(
		'scripts' => 'ext.svgedit.editButton.js',
		'messages' => array(
			'svgedit-editbutton-edit',
		),
	),
);
