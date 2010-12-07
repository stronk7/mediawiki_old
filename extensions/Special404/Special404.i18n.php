<?php
/**
 * Internationalisation file for Special404 extension.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English
 * @author Daniel Friesen
 */
$messages['en'] = array(
	'special404-desc' => "Provides a 404 special page destination for 404 Not Found errors.",
	'error404' => "404 Not Found",
	'special404-body' => <<<MSG
The URL you requested was not found.

Did you mean to type [{{fullurl:$1}} {{fullurl:$1}}]?

Maybe you would like to look at:
* [[{{int:mainpage}}|The main page]]

MSG
	,
);

