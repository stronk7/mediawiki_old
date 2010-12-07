/**
 * SVGEdit extension: add 'Edit drawing' button
 * @copyright 2010 Brion Vibber <brion@pobox.com>
 */

$(document).ready(function() {
	var mw = mediaWiki;
	if (mw.config.get('wgCanonicalNamespace') == 'File'
		&& mw.config.get('wgAction') == 'view'
		&& mw.config.get('wgTitle').match(/\.svg$/i)) {

		var triggerSVGEdit = function(filename) {
			var url = mw.config.get('wgScriptPath') +
				'/extensions/SVGEdit/svg-edit/svg-editor.html' +
				'?extensions=ext-mediawiki.js';

			var editor = $('<iframe id="svg-edit"></iframe>')
				.attr('src', url)
				.attr('style', 'position: fixed; left: 2.5%; top: 2.5%; ; z-index: 99999')
				.attr('width', '95%')
				.attr('height', '95%');
			$('body')
				.append(editor);
		};

		var button = $('<button></button>')
			.text('Edit drawing')
			.click(function() {
				triggerSVGEdit(mw.config.get('wgTitle'));
			});

		$('.fullMedia').append(button);
	}
});
