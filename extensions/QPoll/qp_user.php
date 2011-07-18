<?php
/**
 * ***** BEGIN LICENSE BLOCK *****
 * This file is part of QPoll.
 * Uses parts of code from Quiz extension (c) 2007 Louis-Rémi BABE. All rights reserved.
 *
 * QPoll is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * QPoll is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with QPoll; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * ***** END LICENSE BLOCK *****
 *
 * QPoll is a poll tool for MediaWiki.
 * 
 * To activate this extension :
 * * Create a new directory named QPoll into the directory "extensions" of MediaWiki.
 * * Place the files from the extension archive there.
 * * Add this line at the end of your LocalSettings.php file :
 * require_once "$IP/extensions/QPoll/qp_user.php";
 * 
 * @version 0.8.0a
 * @link http://www.mediawiki.org/wiki/Extension:QPoll
 * @author QuestPC <questpc@rambler.ru>
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( "This file is part of the QPoll extension. It is not a valid entry point.\n" );
}

# interpretation scripts namespace
define( 'NS_QP_INTERPRETATION', 800 );
# talk namespace is always + 1
define( 'NS_QP_INTERPRETATION_TALK', 801 );

qp_Setup::init();

/**
 * Extension's parameters.
 */
$wgExtensionCredits['parserhook'][] = array(
	'path' => __FILE__,
	'name' => 'QPoll',
	'version' => '0.8.0a',
	'author' => 'QuestPC',
	'url' => 'http://www.mediawiki.org/wiki/Extension:QPoll',
	'descriptionmsg' => 'qp_desc',
);
$wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'QPoll results page',
	'version' => '0.8.0a',
	'author' => 'QuestPC',
	'url' => 'http://www.mediawiki.org/wiki/Extension:QPoll',
	'descriptionmsg' => 'qp_desc-sp',
);

if ( isset( $wgResourceModules ) ) {
	$wgResourceModules['ext.qpoll'] = array(
		'scripts' => 'clientside/qp_user.js',
		'styles' => 'clientside/qp_user.css',
		'localBasePath' => dirname( __FILE__ ),
		'remoteExtPath' => 'QPoll'
	);
	$wgResourceModules['ext.qpoll.special.pollresults'] = array(
		'styles' => 'clientside/qp_results.css',
		'localBasePath' => dirname( __FILE__ ),
		'remoteExtPath' => 'QPoll'
	);
}

/**
 * Extension's global settings and initializiers
 * should be purely static and preferrably have no constructor
 */
class qp_Setup {

	const ERROR_MISSED_TITLE = 1;
	const ERROR_INVALID_ADDRESS = 2;
	const MAX_TEXT_ANSWER_LENGTH = 1024;

	static $pollTag = 'qpoll';
	static $interpTag = 'qpinterpret';
	# parser $interpTag hook output market list
	static $markerList = array();

	static $ExtDir; // filesys path with windows path fix
	static $ScriptPath; // apache virtual path
	static $messagesLoaded = false; // check whether the extension's localized messages are loaded
	static $article; // Article instance we got from hook parameter
	static $user; // User instance we got from hook parameter
	# extension's namespaces with their canonical names
	static $namespaces = array(
		NS_QP_INTERPRETATION => 'Interpretation',
		NS_QP_INTERPRETATION_TALK => 'Interpretation_talk'
	);

	/**
	 * default configuration settings
	 * (can be modified in LocalSettings.php after require_once(...) )
	 */
	# disable global showresults attribute
	public static $global_showresults = 0;
	# disable appending of 'X-Forwarded-For' client address chain to the anonymous username (in the form of 'proxy_IP/client_IP')
	public static $anon_forwarded_for = false;
	# enable parser and article caches control for better performance (somewhat experimental, may break compatibility; checked with MW v1.15, v1.16)
	public static $cache_control = false;
	# number of submit attempts allowed (0 or less for infinite number)
	public static $max_submit_attempts = 0;
	/* end of default configuration settings */

	static function entities( $s ) {
		return htmlentities( $s, ENT_COMPAT, 'UTF-8' );
	}

	static function specialchars( $s ) {
		return htmlspecialchars( $s, ENT_COMPAT, 'UTF-8' );
	}

	static function coreRequirements() {
		$required_classes_and_methods = array(
			array( 'Article'=>'doPurge' ),
			array( 'Linker'=>'link' ),
			array( 'OutputPage'=>'isPrintable' ),
			array( 'Parser'=>'getTitle' ),
			array( 'Parser'=>'setHook' ),
			array( 'Parser'=>'recursiveTagParse' ),
			array( 'ParserCache'=>'getKey' ),
			array( 'ParserCache'=>'singleton' ),
			array( 'Title'=>'getArticleID' ),
			array( 'Title'=>'getPrefixedText' ),
			array( 'Title'=>'makeTitle' ),
			array( 'Title'=>'makeTitleSafe' ),
			array( 'Title'=>'newFromID' )
		);
		foreach ( $required_classes_and_methods as &$check ) {
			list( $object, $method ) = each( $check );
			if ( !method_exists( $object, $method ) ) {
				die( "QPoll extension requires " . $object . "::" . $method . " method to be available.<br />\n" .
					"Your version of MediaWiki is incompatible with this extension.\n" );
			}
		}
		if ( !defined( 'MW_SUPPORTS_PARSERFIRSTCALLINIT' ) ) {
			die( "QPoll extension requires ParserFirstCallInit hook.\nPlease upgrade your MediaWiki installation first.\n" );
		}
	}

	/**
	 * Autoload classes from the map provided
	 */
	static function autoLoad( $map ) {
		global $wgAutoloadClasses;
		foreach ( $map as $path => &$classes ) {
			if ( is_array( $classes ) ) {
				foreach ( $classes as &$className ) {
					$wgAutoloadClasses[$className] = self::$ExtDir . '/' . $path;
				}
			} else {
				$wgAutoloadClasses[$classes] = self::$ExtDir . '/' . $path;
			}
		}
	}

	/**
	 * Add this extension to the mediawiki's extensions list.
	 */
	static function init() {
		global $wgScriptPath;
		global $wgExtensionMessagesFiles, $wgExtensionAliasesFiles;
		global $wgSpecialPages;
		global $wgHooks;
		global $wgExtraNamespaces, $wgNamespaceProtection;
		global $wgGroupPermissions;

		# core check and local / remote path
		self::coreRequirements();
		self::$ExtDir = str_replace( "\\", "/", dirname(__FILE__) );
		$dirs = explode( '/', self::$ExtDir );
		$top_dir = array_pop( $dirs );
		self::$ScriptPath = $wgScriptPath . '/extensions' . ( ( $top_dir == 'extensions' ) ? '' : '/' . $top_dir ); 

		# language files
		# extension messages
		$wgExtensionMessagesFiles['QPoll'] = self::$ExtDir . '/i18n/qp.i18n.php';
		# localized namespace names
		$wgExtensionMessagesFiles['QPollNamespaces'] = self::$ExtDir . '/i18n/qp.namespaces.php';
		# localized special page titles
		$wgExtensionAliasesFiles['QPoll'] = self::$ExtDir . '/i18n/qp.alias.php';

		# extension setup, hooks handling and content transformation
		self::autoLoad( array(
			'qp_user.php' => array( 'qp_Setup', 'qp_Renderer', 'qp_FunctionsHook' ),

			## collection of the questions
			'qp_question_collection.php' => 'qp_QuestionCollection',

			## controllers (polls and questions derived from separate abstract classes)
			# polls
			'ctrl/qp_abstractpoll.php' => 'qp_AbstractPoll',
			'ctrl/qp_poll.php' => 'qp_Poll',
			'ctrl/qp_pollstats.php' => 'qp_PollStats',
			# questions
			'ctrl/qp_abstractquestion.php' => 'qp_AbstractQuestion',
			'ctrl/qp_question.php' => 'qp_Question',
			'ctrl/qp_questionstats.php' => 'qp_QuestionStats',

			## views are derived from single generic class
			## isCompatibleController() method is used to check linked controllers (bugcheck)
			# generic
			'view/qp_abstractview.php' => 'qp_AbstractView',
			# questions
			'view/qp_questionview.php' => 'qp_QuestionView',
			'view/qp_questionstatsview.php' => 'qp_QuestionStatsView',
			# polls
			'view/qp_pollview.php' => 'qp_PollView',
			'view/qp_pollstatsview.php' => 'qp_PollStatsView',

			# storage
			'qp_pollstore.php' => array( 'qp_QuestionData', 'qp_InterpAnswer', 'qp_PollStore' ),

			# results page
			'qp_results.php' => array( 'qp_SpecialPage', 'qp_QueryPage', 'PollResults' ),

			# interpretation of answers
			'qp_interpret.php' => 'qp_Interpret',
			'qp_eval.php' => 'qp_Eval'
		) );

		# TODO: Use the new technique for i18n of special page aliases
		$wgSpecialPages['PollResults'] = 'PollResults';
		# TODO: Use the new technique for i18n of magic words
		# instantiating fake instance for PHP < 5.2.3, which does not support 'Class::method' type of callbacks
		$wgHooks['LanguageGetMagic'][] =
		$wgHooks['MediaWikiPerformAction'][] =
		$wgHooks['ParserFirstCallInit'][] =
		$wgHooks['LoadAllMessages'][] =
		$wgHooks['ParserAfterTidy'][] =
		$wgHooks['CanonicalNamespaces'][] =
		new qp_Setup;

		# define namespaces for the interpretation scripts and their talk pages
		foreach ( self::$namespaces as $ns_idx => $canonical_name ) {
			if ( isset( $wgExtraNamespaces[$ns_idx] ) ) {
				die( "QPoll requires namespace index {$ns_idx} which is already used by another extension. Either disable another extension or change the namespace index." );
			}
			$wgNamespaceProtection[$ns_idx] = array( 'editinterpretation' );
		}
		if ( self::mediaWikiVersionCompare( '1.17' ) ) {
			foreach ( self::$namespaces as $ns_idx => $canonical_name ) {
				$wgExtraNamespaces[$ns_idx] = $canonical_name;
			}
		}

		# groups which has permission to access poll results by default
		$wgGroupPermissions['user']['showresults'] = true;
		$wgGroupPermissions['sysop']['pollresults'] = true;
		$wgGroupPermissions['bureaucrat']['pollresults'] = true;
		$wgGroupPermissions['polladmin']['pollresults'] = true;
		# groups which can edit interpretation scripts by default
		# please minimize the number of groups as low as you can
		# that is security measure against inserting of malicious code
		# into the source of interpretation scripts
		$wgGroupPermissions['sysop']['editinterpretation'] = true;
		$wgGroupPermissions['bureaucrat']['editinterpretation'] = true;
	}

	static function mediaWikiVersionCompare( $version, $operator = '<' ) {
		global $wgVersion;
		return version_compare( $wgVersion, $version, $operator );
	}

	static function getCurrUserName() {
		global $wgUser, $wgSquidServers;
		global $wgUsePrivateIPs;
		if ( self::$anon_forwarded_for === true && $wgUser->isAnon() ) {
			/* collect the originating IPs 
				borrowed from ProxyTools::wfGetIP
				bypass trusted proxies list check */
			# Client connecting to this webserver
			if ( isset( $_SERVER['REMOTE_ADDR'] ) ) {
				$ipchain = array( IP::canonicalize( $_SERVER['REMOTE_ADDR'] ) );
			} else {
				# Running on CLI?
				$ipchain = array( '127.0.0.1' );
			}
			$ip = $ipchain[0];

			# Append XFF on to $ipchain
			$forwardedFor = wfGetForwardedFor();
			if ( isset( $forwardedFor ) ) {
				$xff = array_map( 'trim', explode( ',', $forwardedFor ) );
				$xff = array_reverse( $xff );
				$ipchain = array_merge( $ipchain, $xff );
			}
			$username = "";
			foreach ( $ipchain as $i => $curIP ) {
				if( $wgUsePrivateIPs || IP::isPublic( $curIP ) ) {
					$username .= IP::canonicalize( $curIP ) . '/';
				}
			}
			if ( $username != "" ) {
				# remove trailing slash
				$username = substr( $username, 0, strlen( $username ) - 1 );
			} else {
				$username .= IP::canonicalize( $ipchain[0] );
			}
		} else {
			$username = $wgUser->getName();
		}
		return $username;
	}

	static function onLoadAllMessages() {
		if ( !self::$messagesLoaded ) {
			self::$messagesLoaded = true;
			# for MW 1.15 which is still being used by many customers
			# please do not remove until 2012
			if ( self::mediaWikiVersionCompare( '1.16' ) ) {
				wfLoadExtensionMessages( 'QPoll' );
			}
		}
		return true;
	}

	static function ParserFunctionsWords( $lang ) {
		$words = array();
		$words[ 'en' ] = array( 'qpuserchoice'=>array( 0, 'qpuserchoice' ) );
		# English is used as a fallback, and the English synonyms are
		# used if a translation has not been provided for a given word
		return ( $lang == 'en' || !array_key_exists( $lang, $words ) )
			? $words[ 'en' ]
			: array_merge( $words[ 'en' ], $words[ $lang ] );
	}

	static function onLanguageGetMagic( &$magicWords, $langCode ) {
		foreach( self::ParserFunctionsWords( $langCode ) as $word => $trans )
			$magicWords [$word ] = $trans;
		return true;
	}

	static function clearCache() {
		if ( self::$cache_control ) {
			global $parserMemc;
			$parserCache = ParserCache::singleton();
			$key = $parserCache->getKey( self::$article, self::$user );
			$parserMemc->delete( $key );
			self::$article->doPurge();
		}
	}

	static function onMediaWikiPerformAction( $output, $article, $title, $user, $request, $wiki ) {
		global $wgCookiePrefix;
		global $qp_enable_showresults; // deprecated since v0.6.5
		global $qp_AnonForwardedFor; // deprecated since v0.6.5
		global $wgUser;
		self::$article = $article;
		# borrowed from Title::getUserPermissionsErrors() MW v1.16
		if ( !StubObject::isRealObject( $user ) ) {
			//Since StubObject is always used on globals, we can unstub $wgUser here and set $user = $wgUser
			global $wgUser;
			$wgUser->_unstub( '', 5 );
			$user = $wgUser;
		}
		self::$user = $user;
		if ( isset( $qp_AnonForwardedFor ) ) {
			self::$anon_forwarded_for = $qp_AnonForwardedFor;
		}
		# setup proper integer global showresults level
		if ( isset( $qp_enable_showresults ) ) {
			self::$global_showresults = $qp_enable_showresults;
		}
		if ( !is_int( self::$global_showresults ) ) {
			# convert from older v0.5 boolean value
			self::$global_showresults = (int) (boolean) self::$global_showresults;
		}
		if ( self::$global_showresults < 0 ) {
			self::$global_showresults = 0;
		} elseif ( self::$global_showresults > 2 ) {
			self::$global_showresults = 2;
		}
		if ( isset( $_COOKIE[$wgCookiePrefix.'QPoll'] ) ) {
			$request->response()->setCookie( 'QPoll', '', time() - 86400 ); // clear cookie
			self::clearCache();
		} elseif ( $request->getVal('pollId') !== null ) {
			self::clearCache();
		}
		return true;
	}

	/**
	 * Register the extension with the WikiText parser.
	 */
	static function onParserFirstCallInit( $parser ) {
		global $wgOut, $wgTitle;
		if ( !is_object( $wgTitle ) || $wgTitle->getNamespace() === NS_SPECIAL ) {
			# special page will add it's proper module itself;
			# 'ext.qpoll' and 'ext.qpoll.special.pollresults' currently are not
			# designed to be used together
			return true;
		}
		if ( class_exists( 'ResourceLoader' ) ) {
			# MW 1.17+
			// $wgOut->addModules( 'jquery' );
			$wgOut->addModules( 'ext.qpoll' );
		} else {
			# MW < 1.17
			global $wgJsMimeType, $wgContLang;
			# Ouput the style and the script to the header once for all.
			$head = '<script type="' . $wgJsMimeType . '" src="' . self::$ScriptPath . '/clientside/qp_user.js"></script>' . "\n";
			$wgOut->addScript( $head );
			$wgOut->addExtensionStyle( self::$ScriptPath . '/clientside/qp_user.css' );
			if ( $wgContLang->isRTL() ) {
				$wgOut->addExtensionStyle( self::$ScriptPath . '/clientside/qp_user_rtl.css' );
			}
		}
		global $wgQPollFunctionsHook;
		# setup tag hook
		$parser->setHook( self::$pollTag, array( 'qp_Setup', 'showPoll' ) );
		$parser->setHook( self::$interpTag, array( 'qp_Setup', 'showScript' ) );
		$wgQPollFunctionsHook = new qp_FunctionsHook();
		# setup function hook
		$parser->setFunctionHook( 'qpuserchoice', array( &$wgQPollFunctionsHook, 'qpuserchoice' ), SFH_OBJECT_ARGS );
		return true;
	}

	/**
	 * Call the poll parser on an input text.
	 * 
	 * @param  $input				Text between <qpoll> and </qpoll> tags, in QPoll syntax.
	 * @param  $argv				An array containing any arguments passed to the extension
	 * @param  &$parser			The wikitext parser.
	 * @param  &$frame			PPFrame object passed in MW 1.16+
	 * @return 						An HTML poll.
	 */

	/* @param  $input				Text between <qpoll> and </qpoll> tags, in QPoll syntax. */
	static function showPoll( $input, $argv, $parser, $frame = false ) {
		if ( !self::$cache_control ) {
			$parser->disableCache();
		}
		if ( array_key_exists( 'address', $argv ) ) {
			$qpoll = new qp_PollStats(
				$argv,
				new qp_PollStatsView( $parser, $frame )
			);
		} else {
			$qpoll = new qp_Poll(
				$argv,
				new qp_PollView( $parser, $frame )
			);
		}
		return $qpoll->parsePoll( $input );
	}

	/**
	 * Show interpetation script source with line numbering (for debugging convenience)
	 * 
	 * @param  $input				Text between <qpinterpret> and </qpinterper> tags, subset of PHP syntax.
	 * @param  $argv				An array containing any arguments passed to the extension
	 * @param  &$parser			The wikitext parser.
	 * @param  &$frame			PPFrame object passed in MW 1.16+
	 * @return 						script source with line numbering
	 */
	static function showScript( $input, $argv, $parser, $frame = false ) {
		$lines_count = count( preg_split( '`(\r\n|\n|\r)`', $input, -1 ) );
		$line_numbers = '';
		for ( $i = 1; $i <= $lines_count; $i++ ) {
			$line_numbers .= "{$i}\n";
		}
		$out =
		array( '__tag'=>'div', 'class'=>'qpoll',
			array( '__tag'=>'div', 'class'=>'line_numbers', $line_numbers ),
			array( '__tag'=>'div', 'class'=>'script_view', qp_Setup::specialchars( $input ) . "\n" )
		);

		$markercount = count( self::$markerList );
		$marker = "!qpoll-script-view{$markercount}-qpoll!";
		self::$markerList[$markercount] = qp_Renderer::renderHTMLobject( $out );
		return $marker;
	}

	/**
	 * replace previousely set markers with actual rendered html of source text
	 * which has line numbers for easier way to spot possible eval check errors
	 * otherwise, this html code will be ruined when passed directly to parser
	 */
	static function onParserAfterTidy( $parser, &$text ) {
		# find markers in $text
		# replace markers with actual output
		$keys = array();
		$marker_count = count( self::$markerList );

		for ( $i = 0; $i < $marker_count; $i++ ) {
			$keys[] = "!qpoll-script-view{$i}-qpoll!";
		}

		$text = str_replace( $keys, self::$markerList, $text );
		return true;
	}

	public static function onCanonicalNamespaces( &$list ) {
		# do not use array_merge() as it will destroy negative indexes in $list
		# thus completely ruining the namespaces list
		foreach ( self::$namespaces as $ns_idx => $canonical_name ) {
			$list[$ns_idx] = $canonical_name;
		}
		return true;
	}

} /* end of qp_Setup class */

/* renders output data */
class qp_Renderer {
	# the stucture of $tag is like this:
	# array( "__tag"=>"td", "class"=>"myclass", 0=>"text before li", 1=>array( "__tag"=>"li", 0=>"text inside li" ), 2=>"text after li" )
	# both tagged and tagless lists are supported
	static function renderHTMLobject( &$tag ) {
		$tag_open = "";
		$tag_close = "";
		$tag_val = null;
		if ( is_array( $tag ) ) {
			ksort( $tag );
			if ( array_key_exists( '__tag', $tag ) ) {
				# list inside of tag
				$tag_open .= "<" . $tag[ '__tag' ];
				foreach( $tag as $attr_key=>&$attr_val ) {
					if ( is_int( $attr_key ) ) {
						if ( $tag_val === null )
							$tag_val = "";
						if ( is_array( $attr_val ) ) {
							# recursive tags
							$tag_val .= self::renderHTMLobject( $attr_val );
						} else {
							# text
							$tag_val .= $attr_val;
						}
					} else {
						# string keys are for tag attributes
						if ( substr( $attr_key, 0, 2 ) != "__" ) {
							# include only non-reserved attributes
							$tag_open .= " $attr_key=\"" . $attr_val . "\"";
						}
					}
				}
				if ( $tag_val !== null ) {
					$tag_open .= ">";
					$tag_close .= "</" . $tag[ '__tag' ] . ">";
				} else {
					$tag_open .= " />";
				}
				if ( array_key_exists( '__end', $tag ) ) {
					$tag_close .= $tag[ '__end' ];
				}
			} else {
				# tagless list
				$tag_val = "";
				foreach( $tag as $attr_key=>&$attr_val ) {
					if ( is_int( $attr_key ) ) {
						if ( is_array( $attr_val ) ) {
							# recursive tags
							$tag_val .= self::renderHTMLobject( $attr_val );
						} else {
							# text
							$tag_val .= $attr_val;
						}
					} else {
						ob_start();
						var_dump($tag);
						$tagdump=ob_get_contents();
						ob_end_clean();
						$tag_val = "invalid argument: tagless list cannot have tag attribute values in key=$attr_key, $tagdump";
					}
				}
			}
		} else {
			# just a text
			$tag_val = $tag;
		}
		return $tag_open . $tag_val . $tag_close;
	}

	/**
	 * add one or more of CSS class names to tag class attribute
	 */
	static function addClass( &$tag, $className ) {
		if ( !isset( $tag['class'] ) ) {
			$tag['class'] = $className;
			return;
		}
		if ( array_search( $className, explode( ' ', $tag['class'] ) ) === false ) {
			$tag['class'] .= " $className";
		}
	}

	# creates one "htmlobject" row of the table
	# elements of $row can be either a string/number value of cell or an array( "count"=>colspannum, "attribute"=>value, 0=>html_inside_tag )
	# attribute maps can be like this: ("name"=>0, "count"=>colspan" )
	static function newRow( $row, $rowattrs = "", $celltag = "td", $attribute_maps = null ) {
		$result = "";
		if ( count( $row ) > 0 ) {
			foreach ( $row as &$cell ) {
				if ( !is_array( $cell ) ) {
					$cell = array( 0=>$cell );
				}
				$cell[ '__tag' ] = $celltag;
				$cell[ '__end' ] = "\n";
				if ( is_array( $attribute_maps ) ) {
					# converts ("count"=>3) to ("colspan"=>3) in table headers - don't use frequently
					foreach ( $attribute_maps as $key=>$val ) {
						if ( array_key_exists( $key, $cell ) ) {
							$cell[ $val ] = $cell[ $key ];
							unset( $cell[ $key ] );
						}
					}
				}
			}
			$result = array( '__tag'=>'tr', 0=>$row, '__end'=>"\n" );
			if ( is_array( $rowattrs ) ) {
				$result = array_merge( $rowattrs, $result );
			} elseif ( $rowattrs !== "" )  {
				$result[0][] = __METHOD__ . ':invalid rowattrs supplied';
			}
		}
		return $result;
	}

	# add row to the table
	static function addRow( &$table, $row, $rowattrs = "", $celltag = "td", $attribute_maps = null ) {
		$table[] = self::newRow( $row, $rowattrs, $celltag, $attribute_maps );
	}

	# add column to the table
	static function addColumn( &$table, $column, $rowattrs = "", $celltag = "td", $attribute_maps = null ) {
		if ( count( $column ) > 0 ) {
			$row = 0;
			foreach ( $column as &$cell ) {
				if ( !is_array( $cell ) ) {
					$cell = array( 0=>$cell );
				}
				$cell[ '__tag' ] = $celltag;
				$cell[ '__end' ] = "\n";
				if ( is_array( $attribute_maps ) ) {
					# converts ("count"=>3) to ("rowspan"=>3) in table headers - don't use frequently
					foreach ( $attribute_maps as $key=>$val ) {
						if ( array_key_exists( $key, $cell ) ) {
							$cell[ $val ] = $cell[ $key ];
							unset( $cell[ $key ] );
						}
					}
				}
				if ( is_array( $rowattrs ) ) {
					$cell = array_merge( $rowattrs, $cell );
				} elseif ( $rowattrs !== "" ) {
					$cell[ 0 ] = __METHOD__ . ':invalid rowattrs supplied';
				}
				if ( !array_key_exists( $row, $table ) ) {
					$table[ $row ] = array( '__tag'=>'tr', '__end'=>"\n" );
				}
				$table[ $row ][] = $cell;
				if ( array_key_exists( 'rowspan', $cell ) ) {
					$row += intval( $cell[ 'rowspan' ] );
				} else {
					$row++;
				}
			}
			$result = array( '__tag'=>'tr', 0=>$column, '__end'=>"\n" );
		}
	}

	static function displayRow( $row, $rowattrs = "", $celltag = "td", $attribute_maps = null ) {
		# temporary var $tagsrow used to avoid warning in E_STRICT mode
		$tagsrow = self::newRow( $row, $rowattrs, $celltag, $attribute_maps );
		return self::renderHTMLobject( $tagsrow );
	}

	// use newRow() or addColumn() to add resulting row/column to the table
	// if you want to use the resulting row with renderHTMLobject(), don't forget to apply attrs=array('__tag'=>'td')
	static function applyAttrsToRow( &$row, $attrs ) {
		if ( is_array( $attrs ) && count( $attrs > 0 ) ) {
			foreach( $row as &$cell ) {
				if ( !is_array( $cell ) ) {
					$cell = array_merge( $attrs, array( $cell ) );
				} else { 
					foreach( $attrs as $attr_key=>$attr_val ) {
						if ( !array_key_exists( $attr_key, $cell ) ) {
							$cell[ $attr_key ] = $attr_val;
						}
					}
				}
			}
		}
	}
} /* end of qp_Renderer class */

class qp_FunctionsHook {

	var $frame;
	var $args;

	var $pollAddr;
	var $pollStore;
	var $question_id = '';
	var $proposal_id = '';
	var $defaultProposalText;

	var $error_message = 'no_such_poll';

	function qpuserchoice( &$parser, $frame, $args ) {
		qp_Setup::onLoadAllMessages();
		$this->frame = &$frame;
		$this->args = &$args;
		if ( isset( $args[ 0 ] ) ) {
			# args[0] is a poll address
			$this->pollAddr = trim( $this->frame->expand( $this->args[ 0 ] ) );
			$this->pollStore = qp_PollStore::newFromAddr( $this->pollAddr );
			if ( $this->pollStore instanceof qp_PollStore && $this->pollStore->pid !== null ) {
				$this->error_message = 'missing_question_id';
				if ( isset( $args[ 1 ] ) ) {
					# args[1] is question_id
					$qdata = $this->getQuestionData( trim( $frame->expand( $args[ 1 ] ) ) );
					if ( $qdata instanceof qp_QuestionData ) {
						$this->error_message = 'missing_proposal_id';
						if ( isset( $args[ 2 ] ) ) {
							# get poll's proposal choice
							$this->proposal_id = trim( $frame->expand( $args[ 2 ] ) );
							$this->error_message = 'invalid_proposal_id';
							if ( is_numeric( $this->proposal_id ) && $this->proposal_id >= 0 ) {
								$this->defaultProposalText = isset( $args[ 3 ] ) ? trim( $frame->expand( $args[ 3 ] ) ) : '';
								$this->proposal_id = intval( $this->proposal_id );
								$this->error_message = 'missing_proposal_id';
								if ( array_key_exists( $this->proposal_id, $qdata->ProposalText ) ) {
									return $this->qpuserchoiceValidResult( $qdata );
								}
							}
						}
					}
				}
			}
		}
		return '<strong class="error">qpuserchoice: ' . wfMsgHTML( 'qp_func_' . $this->error_message, qp_Setup::specialchars( $this->pollAddr ), qp_Setup::specialchars( $this->question_id ), qp_Setup::specialchars( $this->proposal_id ) ) . '</strong>';
	}

	function getQuestionData( $qid ) {
		$this->question_id = $qid;
		$this->error_message = 'invalid_question_id';
		if ( is_numeric( $this->question_id ) ) {
			$this->question_id = intval( $this->question_id );
			$this->pollStore->loadQuestions();
			$this->pollStore->setLastUser( qp_Setup::getCurrUserName(), false );
			$this->pollStore->loadUserVote();
			$this->error_message = 'missing_question_id';
			if ( array_key_exists( $this->question_id, $this->pollStore->Questions ) ) {
				return $this->pollStore->Questions[ $this->question_id ];
			}
		}
		return false;
	}

	function qpuserchoiceValidResult( $qdata ) {
		$result = '';
		if ( array_key_exists( $this->proposal_id, $qdata->ProposalCategoryId ) ) {
			foreach( $qdata->ProposalCategoryId[ $this->proposal_id ] as $id_key => $cat_id ) {
				if ( $result != '' ) {
					$result .= '~';
				}
				if ( $this->defaultProposalText == '$' ) {
					$result .= $cat_id;
				} else {
					$text_answer = $qdata->ProposalCategoryText[ $this->proposal_id ][ $id_key ];
					if ( $text_answer != '' ) {
						$result .= $text_answer;
					} else {
						$cat_name = isset( $this->args[ $cat_id + 4 ] ) ? trim( $this->frame->expand( $this->args[ $cat_id + 4 ] ) ) : '';
						if ( $cat_name != '' ) {
							$result .= $cat_name;
						} else {
							if ( $this->defaultProposalText != '' ) {
								$result .= $this->defaultProposalText;
							} else {
								$result .= $qdata->Categories[$cat_id]['name'];
								if ( isset( $qdata->Categories[$cat_id]['spanId'] ) ) {
									$spanId = $qdata->Categories[$cat_id]['spanId'];
									$result .= '(' . $qdata->CategorySpans[$spanId]['name'] . ')';
								}
							}
						}
					}
				}
			}
		}
		# do not need to wrap the result into qp_Setup::entities()
		# because the result is a wikitext (will be escaped by parser)
		return $result;
	}

} /* end of qp_FunctionsHook class */
