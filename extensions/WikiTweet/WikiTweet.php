<?php
/**
 * Parser hook extension adds a <wiki-tweet> tag to wiki markup. The
 * following attributes are used:
 *    class = The CSS class to assign to the outer div, defaults
 *            to "wiki-tweet"
 *
 * There is also a parser function that uses {{#wiki-tweet:rows}}
 * with optional parameters being includes as "|param=value".
 *
 * @addtogroup Extensions
 * @author Thomas FAURÉ <faure.thomas@gmail.com> @whiblog
 * @copyright © 2010 Thomas FAURÉ
 * @licence GNU General Public Licence 3.0
 */

// Make sure we are being properly
if( !defined( 'MEDIAWIKI' ) ) {
	echo( "This file is an extension to the MediaWiki software "
	. "and cannot be used standalone.\n" );
	die( -1 );
}

## Abort if AJAX is not enabled
if ( !$wgUseAjax ) {
	trigger_error( 'WikiTweet: please enable $wgUseAjax.', E_USER_WARNING );
	return;
}

// Hook up into MediaWiki
$wgExtensionFunctions[] = 'wikiTweeter';
$wgHooks['LanguageGetMagic'][]	= 'wikiTweeterMagic';
$wgExtensionCredits['parserhook'][] = array(
    'name'        => 'WikiTweet',
    'author'      => 'Thomas Faur&eacute;',
    'description' => 'Create a twitter-like feed into MediaWiki',
    'url'         => 'http://blog.whibe.com/',
    'version'     => '0.5.0'
);

$dir = dirname(__FILE__) . '/';
$wgExtensionMessagesFiles['WikiTweet'] = $dir . 'WikiTweet.i18n.php';

# Register Ajax functions to be called from Javascript file
$wgAjaxExportList[] = 'fnGetTweetsAjax'  ;
$wgAjaxExportList[] = 'fnUpdateTweetAjax';
$wgAjaxExportList[] = 'fnSubscribeAjax'  ;
$wgAjaxExportList[] = 'fnUnsubscribeAjax';
$wgAjaxExportList[] = 'fnDelTweetAjax';

require_once( 'gettweets.php'   );
require_once( 'updatetweet.php' );
require_once( 'subscribe.php'   );
require_once( 'deletetweet.php' );

function wikiTweeter()
{
	global $wgExtensionMessagesFiles, $wgParser, $wgMessageCache;
	// Set the hooks
	$wgParser->setHook('wiki-tweet', 'wikiTweeterRender');
	$wgParser->setFunctionHook('wiki-tweet', 'wikiTweeterFunction');
	// Set our messages
	$wgMessageCache->addMessages( array('wikiTweeter_cannotparse'=> 'wikiTweeter: Cannot parse parameter: '));
	// loading extension messages
	require_once($wgExtensionMessagesFiles['WikiTweet']);
	$wgMessageCache->addMessagesByLang($messages);
}

// This manipulates the results of the wikiTweeter extension
// into the same function as the <wiki-tweet> tag.
function wikiTweeterFunction($parser)
{
	// Get the arguments
	$fargs = func_get_args();
	$input = array_shift($fargs);

	// The first category is required
	$rows = array_shift($fargs);
	$params = array();
	$params["rows"] = $rows;
	$params["donotparse"] = 1;

	// Split the rest of the arguments
	foreach ($fargs as $parm)
	{
		// Split it into its components
		$split = split("=", $parm);
		if (!$split[1])
		{
			return htmlspecialchars(wfMsg(
				'wikiTweeter_cannotparse')
				. $parm);
		}
		// Save it
		$params[$split[0]] = $split[1];
	}

	// Return the cloud
	return wikiTweeterRender($input, $params, $parser);
}

// Sets up the magic for the parser functions
function wikiTweeterMagic(&$magicWords, $langCode)
{
	$magicWords['wiki-tweet'] = array(0, 'wiki-tweet');
	return true;
}

// The actual processing
function wikiTweeterRender($input, $args, $parser)
{
	// Imports
	global $wgOut;
	global $wgUser;
	global $ableToTweet;
	include("WikiTweet.config.php");
	global $wgScriptPath;
	global $wgDBprefix;
	// Profiling
	wfProfileIn('wikiTweeter::Render');

	// Disable the cache, otherwise the cloud will only update
	// itself when a user edits and saves the page.
	$parser->disableCache();
	
	$dbr =& wfGetDB( DB_SLAVE );
	$res = $dbr->select('wikitweet','distinct(`user`)',false,__METHOD__,false);

	$avatarlist = '';
	while ($row = $dbr->fetchObject($res))
	{
		// Pull out the fields
		$user = $row->user;
		// determine AVATAR path
		$avatar_parse = $parser->parse("[[image:$user.png]]",$parser->mTitle, $parser->mOptions,true, false)->getText();
		$avatar = '';
		if (strstr($avatar_parse, 'src') == ''){
			$avatar_parse = $parser->parse("[[image:$user.jpg]]",$parser->mTitle, $parser->mOptions,true, false)->getText();
		}
		if (strstr($avatar_parse, 'src') == ''){
			//$avatar_parse = $parser->parse("[[image:Default.tweet.png]]",$parser->mTitle, $parser->mOptions,true, false)->getText();
			$avatar_parse = 'src="'.$wgScriptPath.'/extensions/WikiTweet/images/default_avatar.png"';
		}
		if (strstr($avatar_parse, 'src') != ''){
			$pos_src = strpos($avatar_parse,'src');
			$avatar = substr($avatar_parse,$pos_src+5);
			$pos_guill = strpos($avatar,'"');
			$avatar = substr($avatar,0,$pos_guill);
		}
		// Check Avatar table
		$res2 = $dbr->select('wikitweet_avatar','*',"user='".mysql_real_escape_string($user)."' ",__METHOD__,false);
		if ($dbr->numRows( $res2 ) == 0){
				$res4 = $dbr->insert('wikitweet_avatar',array('`id`'=>'','`user`'=>$user,'`avatar`'=>$avatar));
			}
			else {
				$res5 = $dbr->update('wikitweet_avatar',array('avatar'=>$avatar),array('user'=>mysql_real_escape_string($user)));
			}
	}
	$class = ($args["class"]) ? $args["class"] : "wiki-tweets";
	$size  = ($args["size"])  ? $args["size"]  : "normal"     ;
	$rows  = ($args["rows"])  ? $args["rows"]  : "10"         ;
	$room  = ($args["room"])  ? $args["room"]  : "main"       ;
	
	
	$text = "<style type='text/css'>
		.handmouse {
			cursor:pointer;
			}
	</style>";
	
	$text  .= "<div class='$class'";
	
	if ($args["style"])
		$text .= " style='" . $args["style"]. "'";
	$text .= ">";
	
	$room_subscribe_text = "<a id='room_subscribe' class='handmouse' style='display:none;'>".wfMsg('wikitweet-subscribe')."</a><a id='room_unsubscribe' class='handmouse'>".wfMsg('wikitweet-unsubscribe')."</a>";
	if($room!='main'){
		$res6 = $dbr->select(
			'wikitweet_subscription',
			'*',
			array(
				"user='".mysql_real_escape_string($wgUser->getName())."' ",
				"link='".mysql_real_escape_string($room)."' ",
				"type='room' "
			),
			__METHOD__,false
		);
		if ($dbr->numRows( $res6 ) == 0){
			$room_subscribe_text = "<a id='room_subscribe' class='handmouse'>".wfMsg('wikitweet-subscribe')."</a><a id='room_unsubscribe' style='display:none;' class='handmouse'>".wfMsg('wikitweet-unsubscribe')."</a>";
		}
		$text .= "<p>".wfMsg('wikitweet-intheroom')." <b>$room</b> (<span id='id_room_subscribe'>$room_subscribe_text<span id='tempimg'></span></span>)</p>";
	}
	
	$text .= '<form id="status_update_form">';

	if ($wgUser->isLoggedIn() or $wgWikiTweet['allowDisconnected']){
		$text .= '
			<table width=100%>
				<tr><td width=95%>
					<textarea tabindex="1" autocomplete="off" accesskey="u" name="status" id="status" rows="2" cols="40"></textarea>
				</td>
				<td width=5%>
					<div id="stringlength"><span>140</span></div>
				</td></tr>
			</table>
			<INPUT TYPE=submit NAME=submit VALUE="'.wfMsg('wikitweet-submit').'" onclick="return false"/>';
			if($wgWikiTweet['allowAnonymous']){
				$text .= '<INPUT TYPE=submit NAME=submitanonymously VALUE="'.wfMsg('wikitweet-anonymous').'" onclick="return false" style="font-size:0.8em;" />';
			}
			if (in_array($wgUser->getName(), $wgWikiTweet['informers']))
			{
				$text .= '<INPUT TYPE=submit NAME=submitbyinformer VALUE="'.wfMsg('wikitweet-inform').'" onclick="return false" style="font-size:0.8em;" />';
			}
			$text .= '<INPUT TYPE=submit NAME=submitandmail VALUE="'.wfMsg('wikitweet-submitandmail').'" onclick="return false" style="display:none;font-size:0.8em;"/>';
			$text .= '<INPUT TYPE=submit NAME=submitprivate VALUE="'.wfMsg('wikitweet-private').'" onclick="return false" style="display:none;font-size:0.8em;"/>
			<img id ="img_loader" src="'.$wgScriptPath.'/extensions/WikiTweet/images/ajax-loader-mini.gif" style ="padding: 0 5px 0 5px;display:none;"/>
			';
	}
	else{
		$text.="<p>".wfMsg('wikitweet-pleaselogin')."</p>";
	}
	$text .= '<input type=hidden value="'.$wgUser->getName().'" name="user"/>
				<input type=hidden value="'.$size.'" name="size"/>
				<input type=hidden value="'.$rows.'" name="rows"/>
				<input type=hidden value="'.$room.'" name="room"/>
			</form>';
	$text .= '<script type="text/javascript" src="'.$wgScriptPath.'/extensions/WikiTweet/jquery.js"></script>';
	$text .= '<script type="text/javascript">wgScriptPath = "'.$wgScriptPath.'";</script>';
	$text .= '<script type="text/javascript">var refreshTime='.$wgWikiTweet['refreshTime'].';</script>';
	$text .= '<script type="text/javascript">var InformerUser="'.$wgWikiTweet['informuser'].'";</script>';
	$text .= '<script type="text/javascript">var AnonymousUser="'.$wgWikiTweet['AnonymousUser'].'";</script>';
	$text .= '<script type="text/javascript" src="'.$wgScriptPath.'/extensions/WikiTweet/WikiTweet.js"></script>';
	$text .= '<script type="text/javascript" src="'.$wgScriptPath.'/extensions/WikiTweet/WikiTweet2.js"></script>';
	$text .= "<br/>\n";
	$text .= "<a href = '$wgScriptPath/index.php/".wfMsg('wikitweet-name')."'>".wfMsg('wikitweet-moretweets')."</a><br/>\n";
	$text .= "<div id='lasttweets'>\n";
	$text .= "</div>\n";
	$text .= "<a href = '$wgScriptPath/index.php/".wfMsg('wikitweet-name')."'>".wfMsg('wikitweet-name')."</a> ".wfMsg('wikitweet-infoajax')."<br/>\n";
	$text .= "</div>\n";
	
	// Finish up and return the results
	wfProfileOut('wikiTweeter::Render');
	return $text;
}
?>
