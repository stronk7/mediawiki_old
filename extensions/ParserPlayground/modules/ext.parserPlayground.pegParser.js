/**
 * Parser for wikitext to provisional temp structure, using PEG.js and
 * a separate PEG grammar file (pegParser.pegjs.txt)
 *
 * Use along with the MWTreeRenderer and MWTreeSerializer classes for
 * HTML output and source round-tripping.
 *
 * If installed as a user script or to customize, set parserPlaygroundPegPage
 * to point at the MW page name containing the parser peg definition; default
 * is 'MediaWiki:Gadget-ParserPlayground-PegParser.pegjs'.
 */
function PegParser(options) {
	this.options = options;
}

PegParser.src = false;

PegParser.prototype.parseToTree = function(text, callback) {
	this.initSource(function() {
		var out, err;
		try {
			var parser = PEG.buildParser(PegParser.src);
			out = parser.parse(text);
		} catch (e) {
			err = e;
		} finally {
			callback(out, err);
		}
	});
}

/**
 * @param {object} tree
 * @param {function(tree, error)} callback
 */
PegParser.prototype.expandTree = function(tree, callback) {
	// no-op!
	callback(tree, null);
};

PegParser.prototype.initSource = function(callback) {
	if (PegParser.src) {
		callback();
	} else {
		if ( typeof parserPlaygroundPegPage !== 'undefined' ) {
			$.ajax({
				url: wgScriptPath + '/api' + wgScriptExtension,
				data: {
					format: 'json',
					action: 'query',
					prop: 'revisions',
					rvprop: 'content',
					titles: parserPlaygroundPegPage
				},
				success: function(data, xhr) {
					$.each(data.query.pages, function(i, page) {
						if (page.revisions && page.revisions.length) {
							PegParser.src = page.revisions[0]['*'];
						}
					});
					callback()
				},
				dataType: 'json',
				cache: false
			}, 'json');
		} else {
			$.ajax({
				url: mw.config.get('wgParserPlaygroundAssetsPath', mw.config.get('wgExtensionAssetsPath')) + '/ParserPlayground/modules/pegParser.pegjs.txt',
				success: function(data) {
					PegParser.src = data;
					callback();
				},
				dataType: 'text',
				cache: false
			});
		}
	}
};

if (typeof module == "object") {
	module.exports.PegParser = PegParser;
}
