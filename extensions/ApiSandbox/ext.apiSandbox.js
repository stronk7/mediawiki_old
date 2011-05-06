jQuery( function( $ ) {
	var $content = $( '#api-sandbox-content' );
	if ( !$content.length ) {
		return;
	}
	$content.show();	

	// page elements
	var $format = $( '#api-sandbox-format' ),
	    $action = $( '#api-sandbox-action' ),
	    $query = $( '#api-sandbox-query' ),
	    $queryRow = $( '#api-sandbox-query-row' ),
	    $help = $( '#api-sandbox-help' ),
	    $further = $( '#api-sandbox-further-inputs' ),
	    $submit = $( '#api-sandbox-submit' ),
	    $requestUrl = $( '#api-sandbox-url' ),
	    $requestPost = $( '#api-sandbox-post' ),
	    $output = $( '#api-sandbox-output' ),
	    $postRow = $( '#api-sandbox-post-row' );

	// cached stuff
	var actionCache = [],
	    propCache = [],
	    namespaces = [],
	    currentInfo = {},
	    apiPhp = mw.config.get( 'wgServer' ) + mw.config.get( 'wgScriptPath' ) + '/api' + mw.config.get( 'wgScriptExtension' );

	// load namespaces
	$.getJSON( apiPhp,
		{ format: 'json', action: 'query', meta: 'siteinfo', siprop: 'namespaces' },
		function( data ) {
			if ( isset( data.query ) && isset( data.query.namespaces ) ) {
				for ( var id in data.query.namespaces ) {
					if ( id < 0 ) {
						continue;
					}
					var ns = data.query.namespaces[id]['*'];
					if ( ns == '' ) {
						ns = mw.msg( 'apisb-ns-main' );
					}
					namespaces.push( { key: id, value: ns } );
				}
			} else {
				showLoadError( $further, 'apisb-namespaces-error' );
			}
		}
	);

	$action.change( updateBasics );
	$query.change( updateBasics );

	$submit.click( function() {
		var url = apiPhp + '?action=' + $action.val(),
		    info = currentInfo; // in case it changes later
		if ( $action.val() == 'query' ) {
			url += '&' + $query.val();
		}
		url += '&format=' + $format.val();
		var params = '';
		for ( var i = 0; i < info.parameters.length; i++ ) {
			var param = info.parameters[i],
			    name = info.prefix + param.name,
			    $node = $( '#param-' + name );
			if ( param.type == 'boolean' ) {
				if ( $node.is( ':checked' ) ) {
					params += '&' + name;
				}
			} else {
				var value = $node.val();
				if ( !isset( value ) || value == '' || value == null ) {
					continue;
				}
				if ( $.isArray( value ) ) {
					value = value.join( '|' );
				}
				params += '&' + name + '=' + encodeURIComponent( value );
			}
		}
		showLoading( $output );
		if ( isset( info.mustbeposted ) ) {
			$requestUrl.val( url );
			$requestPost.val( params );
			$postRow.show();
		} else {
			$requestUrl.val( url + params );
			$postRow.hide();
		}
		url = url.replace( /(&format=[^&]+)/, '$1fm' );
		var data = {
			url: url,
			data: params,
			dataType: 'text',
			type: isset( info.mustbeposted ) ? 'POST' : 'GET',
			success: function( data ) {
				var match = data.match( /<pre>[\s\S]*<\/pre>/ );
				if ( $.isArray( match ) ) {
					data = match[0];
				} else {
					// some actions don't honor user-specified format
					data = '<pre>' + mw.html.escape( data ) + '</pre>';
				}
				$output.html( data );
			},
			error: function( jqXHR, textStatus, errorThrown ) {
				showLoadError( $output, 'apisb-request-error' );
			}
		};
		$.ajax( data );
	});

	/**
	 * Shamelessly borrowed from PHP
	 */
	function isset( x ) {
		return typeof x != 'undefined';
	}

	function showLoading( element ) {
		element.html(
			mw.html.element( 'img', 
				{ src: mw.config.get( 'stylepath' ) + '/common/images/spinner.gif', alt: '' } )
			+ mw.html.escape( mw.msg( 'apisb-loading' ) ) );
	}

	function showLoadError( element, message ) {
		element.html( mw.html.element( 'span', { 'class': 'error' }, mw.msg( message ) ) );
	}

	function parseParamInfo( data ) {
		$further.text( '' );
		if ( !isset( data.paraminfo ) 
			|| ( !isset( data.paraminfo.modules ) && !isset( data.paraminfo.querymodules ) )
			)
		{
			showLoadError( $further, 'apisb-load-error' );
			return;
		}
		if ( isset( data.paraminfo.modules ) ) {
			actionCache[data.paraminfo.modules[0].name] = data.paraminfo.modules[0];
			createInputs( actionCache[data.paraminfo.modules[0].name] );
		} else {
			propCache[data.paraminfo.querymodules[0].name] = data.paraminfo.querymodules[0];
			createInputs( propCache[data.paraminfo.querymodules[0].name] );
		}
		$submit.removeAttr( 'disabled' );
	}

	function getQueryInfo( action, query ) {
		var isQuery = action == 'query';
		if ( action == '-' || ( isQuery && query == '-' ) ) {
			$submit.attr( 'disabled', 'disabled' );
			return;
		}
		query = query.replace( /^.*=/, '' );
		var cached;
		if ( isQuery ) {
			cached = propCache[query];
		} else {
			cached = actionCache[action];
		}
		if ( typeof cached != 'object' ) { // stupid FF adds watch() everywhere
			showLoading( $further );
			var data = {
				format: 'json',
				action: 'paraminfo'
			};
			if (isQuery ) {
				data.querymodules = query;
			} else {
				data.modules = action;
			}
			$submit.attr( 'disabled', 'disabled' );
			$.getJSON(
				mw.config.get( 'wgScriptPath' ) + '/api' + mw.config.get( 'wgScriptExtension' ),
				data,
				parseParamInfo
			);
		} else {
			$submit.removeAttr( 'disabled' );
			createInputs( cached );
		}
	}

	function smartEscape( s ) {
		s = mw.html.escape( s );
		if ( s.indexOf( '\n ' ) >= 0 ) {
			s = s.replace( /^(.*?)((?:\n\s+\*?[^\n]*)+)(.*?)$/m, '$1<ul>$2</ul>$3' );
			s = s.replace( /\n\s+\*?([^\n]*)/g, '\n<li>$1</li>' );
		}
		s = s.replace( /\n(?!<)/, '\n<br/>' );
		return s;
	}

	function createInputs( info ) {
		currentInfo = info;
		$help.html( smartEscape( info.description ) );
		var s = '<table class="api-sandbox-options">\n<tbody>';
		for ( var i = 0; i < info.parameters.length; i++ ) {
			var param = info.parameters[i],
			    name = info.prefix + param.name;

			s += '<tr><td class="api-sandbox-label"><label for="param-' + name + '">' + name + '=</label></td>'
				+ '<td class="api-sandbox-value">' + input( param, name )
				+ '</td><td>' + smartEscape( param.description ) + '</td></tr>';
		}
		s += '\n</tbody>\n</table>\n';
		$further.html( s );
	}

	function input( param, name ) {
		var s,
		    value = '';
		switch ( param.type ) {
			case 'limit':
				value = 10;
			case 'user':
			case 'timestamp':
			case 'integer':
			case 'string':
				s = '<input class="api-sandbox-input" id="param-' + name + '" value="' + value + '"/>';
				break;
			case 'bool':
				param.type = 'boolean'; // normalisation for later use
			case 'boolean':
				s = '<input id="param-' + name + '" type="checkbox"/>';
				break;
			case 'namespace':
				param.type = namespaces;
			default:
				if ( typeof param.type == 'object' ) {
					var id = 'param-' + name,
					    attributes = { 'id': id };
					if ( isset( param.multi ) ) {
						attributes.multiple = 'multiple';
						s = select( param.type, attributes, false );
					} else {
						s = select( param.type, attributes, true );
					}
				} else {
                    s = mw.html.element( 'code', [], mw.msg( 'parentheses', param.type ) );
                }
		}
		return s;
	}

	function select( values, attributes, selected ) {
		attributes['class'] = 'api-sandbox-input';
		if ( isset( attributes.multiple ) ) {
			attributes['size'] = values.length.toString();
		}
		var s = '';
		if ( typeof selected != 'array' ) {
			if ( selected ) {
				s += mw.html.element( 'option', { value: '', selected: 'selected' }, mw.msg( 'apisb-select-value' ) );
			}
			selected = [];
		}
		for ( var i = 0; i < values.length; i++ ) {
			var value = typeof values[i] == 'object' ? values[i].key : values[i],
			    face = typeof values[i] == 'object' ? values[i].value : values[i],
			    attrs = { 'value': value };
			if ( $.inArray( value, selected ) >= 0 ) {
				attrs.selected = 'selected';
			}
			s += '\n' + mw.html.element( 'option', attrs, face );
		}
		s = mw.html.element( 'select', attributes, new mw.html.Raw( s ) );
		return s;
	}
	
	function updateBasics() {
		var a = $action.val(),
		    q = $query.val(),
		    isQuery = a == 'query';
		if ( isQuery ) {
			$queryRow.show();
		} else {
			$queryRow.hide();
		}
		$further.text( '' );
		$help.text( '' );
		getQueryInfo( a, q );
	}

});