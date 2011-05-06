<?php
if( !defined( 'MEDIAWIKI' ) ) {
	echo( "This file is an extension to the MediaWiki software "
	. "and cannot be used standalone.\n" );
	die( -1 );
}
function fnGetTweetsAjax($rows,$room,$user,$size='normal',$tag='',$other_room='')
{
	global $wgDBprefix , $wgScriptPath , $wgLanguageCode;
	include('WikiTweet.config.php');
	include('WikiTweet.i18n.php');
	
	$width = "88%";
	
	$line_height       = $wgWikiTweet['size'][$size]['line_height'];
	$font_size         = $wgWikiTweet['size'][$size]['font_size'];
	$avatar_size       = $wgWikiTweet['size'][$size]['avatar_size'];
	$span_avatar_width = $wgWikiTweet['size'][$size]['span_avatar_width'];
	$paddingli         = $wgWikiTweet['size'][$size]['paddingli'];
	$margin_left       = $wgWikiTweet['size'][$size]['margin_left'];
	
	$text = "<ol style = '	list-style-image: none;
				list-style-position: outside;
				list-style-type: none;
				margin-left:$margin_left;'>";
	
	$dbr =& wfGetDB( DB_SLAVE );

	
	$sql_rooms = ($room == '' or $room == 'main') ? "`room`='' OR `room`='main'" : "`room`='$room'";
	$res1 = $dbr->select( 'wikitweet_subscription' , '*' , "user='" . mysql_real_escape_string( $user ) . "' " );
	$sql_subscriptions = "";
	while($row1 = $dbr->fetchObject($res1))
	{
		$link = $row1->link;
		$type = $row1->type;
		$sql_subscriptions .= " OR `$type`='$link'";
	}

	if($tag!=''){
		$res = $dbr->select( 
			'wikitweet' , 
			'*' , 
			"`text` like '%$tag%' AND (`show`=1 OR (`show`=2 AND (`text` like '%@$user%' OR `user`='$user')))",
			__METHOD__ ,
			array("ORDER BY" =>" `date` DESC", "LIMIT" => $rows));
		$text .= "<h2>".$messages[$language]['wikitweet-tweets-tagged']." <a>#$tag</a></h2>";
		$text .= "<p><a class='handmouse timeline'>".$messages[$language]['wikitweet-back-timeline']."...</a></p>";
	}
	elseif($other_room!=''){
		$res = $dbr->select( 
			'wikitweet' , 
			'*' , 
			"`room`='$other_room' AND (`show`=1 OR (`show`=2 AND (`text` like '%@$user%' OR `user`='$user')))",
			__METHOD__ ,
			array("ORDER BY" =>" `date` DESC", "LIMIT" => $rows));
		$text .= "<h2>".$messages[$wgLanguageCode]['wikitweet-tweets-from-room']." \"<a>$other_room</a>\"</h2>";
		$text .= "<p><a class='handmouse timeline'>".$messages[$wgLanguageCode]['wikitweet-back-timeline']."...</a></p>";

	}
	else{
		$res = $dbr->select( 
			'wikitweet' , 
			'*' , 
			"(($sql_rooms $sql_subscriptions )AND `show`=1) OR (`show`=2 AND (`text` like '%@$user%' OR `user`='$user'))",
			__METHOD__ ,
			array("ORDER BY" =>" `date` DESC", "LIMIT" => $rows));
	}
	
	while( $row = $dbr->fetchObject( $res ) )
	{
		// Pull out the fields
		$id         = $row->id;
		$twext      = $row->text;
		$tweetuser  = mysql_real_escape_string($row->user);
		$date       = $row->date;
		$tweet_room = $row->room;
		$show       = $row->show;
		$background_color = "#FFF";
		$viaroom    = "";
		$private    = "";
		if ( $tweet_room != $room ) {
			$background_color = "#EFEFEF";
			$viaroom = "- via room <a class='handmouse room' value='$tweet_room'>$tweet_room</a>";
		}
		if ( $show == 2 ) {
			$background_color = "#C6DEFE";
			$private = "<img src='$wgScriptPath/Extensions/WikiTweet/images/lock-small.png' />";
		}
		
		$dateSrc = $date.' GMT';
		// TODO : "x hours ago, today, etc"
		$date_to_display = date('H:i, F jS', strtotime($dateSrc));
		
		$res2 = $dbr->select('wikitweet_avatar','avatar',"`user`='".mysql_real_escape_string($tweetuser)."' ",__METHOD__,false);
		$row2 = $dbr->fetchObject ( $res2 );
		$avatar = (count($row2)>0) ? $row2->avatar : '';
		
		$conversion_tab = array(
			"/\>(\S*)/is"   => "><a href='$wgScriptPath/index.php/$1'>$1</a>",
			"/\@(\S*)/is"   => "@<a href='$wgScriptPath/index.php/User:$1'>$1</a>", // TODO en anglais
			"/\#(\S*)/is"   => "<a class='handmouse tag' value='$1'>#$1</a>",
			"/http(\S*)/is" => "<a href='http$1' target='_blank'>http$1</a>",
			"/ www(\S*)/is" => " <a href='http://www$1' target='_blank'>www$1</a>",
			);
		$twext = preg_replace(array_keys($conversion_tab), array_values($conversion_tab), $twext);
		$user_subscribe_text = "";
		$unsubscribe_string  = $messages[$wgLanguageCode]['wikitweet-unsubscribe'];
		$subscribe_string    = $messages[$wgLanguageCode]['wikitweet-subscribe'];
		$delete_string       = $messages[$wgLanguageCode]['wikitweet-delete'];
		$answer_string       = $messages[$wgLanguageCode]['wikitweet-answer'];
		$tweetuserclas       = str_replace(".","__dot__",$tweetuser);
		$delete_tweet        = "";
		$answer              = "";
		if($tweetuser!=$user){
			$form_user = "<form style='display:none;'><input type=hidden value='$tweetuser' name='tweetuser' /></form>";
			$user_subscribe_text = "- <a class='handmouse user_subscribe subscribe$tweetuserclas' id='user_subscribe' style='color:#999;display:none;'>$subscribe_string<span id='tweetuser' style='display:none'>$tweetuser</span>$form_user</a><a style='color:#999;' class='handmouse user_unsubscribe unsubscribe$tweetuserclas'>$unsubscribe_string<span id='tweetuser' style='display:none'>$tweetuser</span>$form_user</a>";
			$res3 = $dbr->select('wikitweet_subscription','*',array(
				"`user`='".mysql_real_escape_string($user)."' ",
				"`link`='".mysql_real_escape_string($tweetuser)."' ",
				"`type`='user'",
				));
			if ( $dbr->numRows($res3) == 0 ) { 
				$user_subscribe_text = "- <a style='color:#999;' class='handmouse user_subscribe subscribe$tweetuserclas'>$subscribe_string<span id='tweetuser' style='display:none'>$tweetuser</span>$form_user</a><a class='handmouse user_unsubscribe unsubscribe$tweetuserclas' style='color:#999;display:none;'>$unsubscribe_string<span id='tweetuser' style='display:none'>$tweetuser</span>$form_user</a>";
			}
			$answer = "- <span class='answer' style='cursor:pointer;'><img src='$wgScriptPath/extensions/WikiTweet/images/answer.png'/> $answer_string $tweetuser</span>";
		}
		if((in_array($user, $wgWikiTweet['informers']) and $tweetuser == $wgWikiTweet['informuser']) or $tweetuser==$user or in_array($user, $wgWikiTweet['admin'])){
			$delete_tweet = " - <a class='handmouse delete_tweet' style='color:#999;'>$delete_string<span style='display:none'>$id</span></a>";
		}
		$text .= "<li class='tweet_li' id='$id' user='$tweetuser'
						style = '	display: list-item;
								margin:0;
								line-height: $line_height;
								padding: $paddingli;
								position:relative;
								background-color:$background_color;
								border:3px solid #FFF;
								border-bottom:1px solid #CCC;
								'>
					<span style = '	display:block;
									height: $span_avatar_width;
									left: 0;
									margin: 0 10px 0 0;
									overflow: hidden;
									position: absolute;
									width:$span_avatar_width;
									z-index: 10;
									/*border-bottom:1px solid #CCC;*/
									'>
						<a href='$wgScriptPath/index.php/User:$tweetuser'>
						<img src= '$avatar' width=$avatar_size height=$avatar_size alt='$tweetuser' border=0/>
						</a>
					</span>
					<span style = '	display: block;
									margin-left: 56px;
									min-height: ".$avatar_size."px;
									overflow: hidden;
									width:$width ;
									line-height: $line_height;
									font-size:$font_size;
									/*border-bottom:1px solid #CCC;*/
									'>
						
						<span style = '	line-height: $line_height;
										font-size:$font_size;'>
							<b>
								<a href='$wgScriptPath/index.php/User:$tweetuser'>$tweetuser</a>
							</b>
							$twext<br/>
							<small style='color:#999;'>$date_to_display $viaroom <span id='id_user_subscribe'>$user_subscribe_text</span><span id='tempimg2'></span>$delete_tweet $private $answer</small>
						</span>
					</span>
				</li>";
	}
	$text .= '<script type="text/javascript" src="'.$wgScriptPath.'/extensions/WikiTweet/WikiTweet2.js"></script>';
	$text .= "</ol>";

	$o__response = new AjaxResponse($text);
	return $o__response;
}
?>
