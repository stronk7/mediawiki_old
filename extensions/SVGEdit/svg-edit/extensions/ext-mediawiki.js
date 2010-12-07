/*
 * load/save from/to MediaWiki file upload area
 * Copyright (c) 2010 Brion Vibber <brion@pobox.com>
 *
 * based on... ext-server_opensave.js
 *
 * Licensed under the Apache License, Version 2
 *
 * Copyright(c) 2010 Alexis Deveria
 *
 */

var mediaWiki = window.parent.mediaWiki;

/**
 * Utility class for building multipart form submission data.
 *
 * @constructor
 */
function FormMultipart(fields) {
	function genRandom(chars) {
		var base = '';
		for (var i = 0; i < chars; i++) {
			base = base + String.fromCharCode(Math.floor(Math.random() * 26) + 65);
		}
		return base;
	}
	this.boundary = genRandom(16);
	this.out = [];

	if (fields) {
		for (var name in fields) {
			if (fields.hasOwnProperty(name)) {
				this.addField(name, fields[name]);
			}
		}
	}
}

FormMultipart.prototype.append = function(str) {
	this.out.push(str);
};

FormMultipart.prototype.addField = function(name, val) {
	this.addPart({
		name: name,
		data: val
	});
};

FormMultipart.prototype.addPart = function(params) {
	this.append('--' + this.boundary);

	var disposition = 'Content-Disposition: ';
	if (params.disposition) {
		disposition += params.disposition;
	} else {
		disposition += 'form-data';
	}
	if (params.name) {
		disposition += '; name="' + encodeURIComponent(params.name) + '"';
	}
	if (params.filename) {
		disposition += '; filename="' + encodeURIComponent(params.filename) + '"';
	}
	this.append(disposition);

	if (params.type) {
		this.append('Content-Type: ' + params.type);
	}
	if (params.encoding) {
		this.append('Content-Transfer-Encoding: ' + params.encoding)
	}

	this.append('');
	if (params.data) {
		this.append(params.data);
	}
};

FormMultipart.prototype.toString = function() {
	var crlf = "\r\n";
	return this.out.join(crlf) + (crlf + "--" + this.boundary + "--" + crlf);
};

FormMultipart.prototype.contentType = function() {
	return 'multipart/form-data; boundary=' + this.boundary;
}

/**
 * Static functions for reaching the calling MediaWiki instance.
 */
var mwSVG = {
	/**
	 * Fetch a config var from parent window's MediaWiki page...
	 * Requires that we be running in a frame, as we currently expect.
	 *
	 * @param {String} key
	 * @return mixed return value
	 */
	config: function(key) {
		return mediaWiki.config.get(key);
	},

	/**
	 * Fetch the API endpoint URL for our MediaWiki instance.
	 *
	 * @return string URL to MediaWiki API.
	 */
	api: function() {
		var base = mwSVG.config('wgScriptPath');
		var ext = mwSVG.config('wgScriptExtension');
		return base + '/api' + ext;
	},

	/**
	 * Fetch an SVG file from the MediaWiki system...
	 * Requires ApiSVGProxy extension to be loaded.
	 *
	 * @param {String} target
	 * @param {function(xmlSource, textStatus, xhr)} callback
	 */
	fetchSVG: function(target, callback) {
		var params = {
			action: 'svgproxy',
			file: 'File:' + target
		};
		$.get(mwSVG.api(), params, callback, 'text');
	},

	/**
	 * Get an edit token for the given file page
	 *
	 * @param {String} target: filename
	 * @param {function(token)} callback
	 */
	fetchToken: function(target, callback) {
		var params = {
			format: 'json',
			action: 'query',
			prop: 'info',
			intoken: 'edit',
			titles: 'File:' + target
		};
		$.get(mwSVG.api(), params, function(data) {
			var token = null;
			$.each(data.query.pages, function(key, pageInfo) {
				token = pageInfo.edittoken;
			});
			callback(token);
		});
	},

	/**
	 * Save an SVG file back to MediaWiki... whee!
	 *
	 * @param {String} target: filename
	 * @param {String} data: SVG data to save
	 * @param {String} comment: text summary of the edit
	 * @param {function(data, textStatus, xhr)} callback: called on completion
	 */
	saveSVG: function(target, data, comment, callback) {
		mwSVG.fetchToken(target, function(token) {
			var multipart = new FormMultipart({
				action: 'upload',
				format: 'json',

				filename: target,
				comment: comment,
				token: token,
				ignorewarnings: 'true'
			});
			multipart.addPart({
				name: 'file',
				filename: target,
				type: 'image/svg+xml',
				encoding: 'binary',
				data: data
			});
			
			var onError = function(xhr, textStatus, errorThrown) {
				alert('Error saving file.');
			};

			var ajaxSettings = {
				type: 'POST',
				url: mwSVG.api(),
				contentType: multipart.contentType(),
				data: multipart.toString(),
				processData: false,
				success: callback,
				error: onError
			};
			$.ajax(ajaxSettings);
		});
	}
}

svgEditor.addExtension("mediawiki", {
	callback: function() {
		// Load up the original file!
		var filename = mwSVG.config('wgTitle');
		mwSVG.fetchSVG(filename, function(xmlSource, textStatus, xhr) {
			svgCanvas.clear();
			svgCanvas.setSvgString(xmlSource);
			svgEditor.updateCanvas();
		});

		// Add save/close buttons...
		$('body').append('<div id="mw-svgedit-buttons">' +
			'<button id="mw-svgedit-save"></button>' +
			'<button id="mw-svgedit-close"></button>' +
			'</div>');
		$('#mw-svgedit-buttons').attr('style', 'position: absolute; top: 4px; right: 4px; text-align: right');

		$('#mw-svgedit-save')
			.text('Save and close')
			.click(function() {
				var svg = svgCanvas.getSvgString();
				var comment = "Modified in svg-edit";
				mwSVG.saveSVG(filename, svg, comment, function(data, textStatus, xhr) {
					if (data.upload && data.upload.result == "Success") {
						// refresh parent window
						window.parent.location = window.parent.location;
					} else {
						alert('Possible error saving file...');
					}
				})
			});

		$('#mw-svgedit-close')
			.text('Cancel')
			.click(function() {
				if (window.parent) {
					window.parent.$('#svg-edit').remove();
				} else {
					window.close();
				}
			});
	}
});

