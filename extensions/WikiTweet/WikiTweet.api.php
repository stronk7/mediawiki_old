<?php
/**
 * Created on May 05, 2011
 *
 * WikiTweet extension
 *
 * Copyright (C) 2011 faure dot thomas at gmail dot com
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 * http://www.gnu.org/copyleft/gpl.html
 */
/**
 * Query module to get the list of the Categories beginning by a given string.
 *
 * @ingroup API
 * @ingroup Extensions
 */
class ApiQueryWikiTweet extends ApiQueryBase {
	public function __construct( $query, $moduleName ) {
		parent::__construct( $query, $moduleName, 'wtw' );
	}
	public function execute() {
		global $wgUser;
		$params = $this->extractRequestParams();
		$req = $params['req'];
		$result = $this->getResult();
		switch($req){
			case 'get':
				$rows       = $params['rows'] ;
				$room       = $params['room'] ;
				$user       = $params['user'] ;
				$size       = (isset($params['size']))       ? $params['size']       : 'normal' ;
				$tag        = (isset($params['tag']))        ? $params['tag']        : ''       ;
				$other_room = (isset($params['other_room'])) ? $params['other_room'] : ''       ;
				
				$o__output_string = ApiQueryWikiTweet::fnGetTweetsAjax($rows,$room,$user,$size,$tag,$other_room);
				$fit = $result->addValue( array( 'query', $this->getModuleName() ), null, $o__output_string );
				$result->setIndexedTagName_internal( array( 'query', $this->getModuleName() ), 'output' );
				break;
			case 'delete':
				// TODO : user rights
				$id = (isset($params['id'])) ? $params['id'] : -1 ;
				if ( $id == -1 ) $this->dieUsage( 'You must enter a parameter "id" with "delete" option.', 'params' );
				ApiQueryWikiTweet::fnDelTweetAjax($id);
				break;
			case 'update':
				$status = $params['status'] ;
				$user   = $params['user']   ;
				$room   = $params['room']   ;
				$tomail = $params['tomail'] ;
				ApiQueryWikiTweet::fnUpdateTweetAjax($status, $user, $room, $tomail);
				break;
			case 'subscribe':
				$type = (isset($params['type'])) ? $params['type'] : '' ;
				$link = (isset($params['link'])) ? $params['link'] : '' ;
				$user = (isset($params['user'])) ? $params['user'] : '' ;
				$o__output_string = ApiQueryWikiTweet::fnSubscribeAjax($link, $user, $type);
				$fit = $result->addValue( array( 'query', $this->getModuleName() ), null, $o__output_string );
				$result->setIndexedTagName_internal( array( 'query', $this->getModuleName() ), 'output' );
				break;
			case 'unsubscribe':
				$type = (isset($params['type'])) ? $params['type'] : '' ;
				$link = (isset($params['link'])) ? $params['link'] : '' ;
				$user = (isset($params['user'])) ? $params['user'] : '' ;
				$o__output_string = ApiQueryWikiTweet::fnUnsubscribeAjax($link, $user, $type);
				$fit = $result->addValue( array( 'query', $this->getModuleName() ), null, $o__output_string );
				$result->setIndexedTagName_internal( array( 'query', $this->getModuleName() ), 'output' );
				break;
			default:
				break;
		}
	}

	
	public static function fnGetTweetsAjax($rows,$room,$user,$size='normal',$tag='',$other_room='')
	{
		global $wgDBprefix , $wgScriptPath , $wgLanguageCode;
		include('WikiTweet.config.php');
		
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
		$roomssons = array();
		foreach($wgWikiTweet['inherit'] as $roominherit=>$roominheritvalue)
		{
			if($roominherit == $room or in_array($roominherit,$roomssons))
			{
				foreach($wgWikiTweet['inherit'][$roominherit] as $roomson)
				{
					$sql_subscriptions .= " OR `room`='$roomson'";
					$roomssons[] = $roomson;
				}
			}
		}

		if($tag!=''){
			$res = $dbr->select( 
				'wikitweet' , 
				'*' , 
				"`text` like '%$tag%' AND (`show`=1 OR (`show`=2 AND (`text` like '%@$user%' OR `user`='$user')))",
				__METHOD__ ,
				array("ORDER BY" =>" `date` DESC", "LIMIT" => $rows));
			$text .= "<h2>".wfMsg ( 'wikitweet-tweets-tagged' ) ." <a>#$tag</a></h2>";
			$text .= "<p><a class='handmouse timeline'>".wfMsg('wikitweet-back-timeline')."...</a></p>";
		}
		elseif($other_room!=''){
			$res = $dbr->select( 
				'wikitweet' , 
				'*' , 
				"`room`='$other_room' AND (`show`=1 OR (`show`=2 AND (`text` like '%@$user%' OR `user`='$user')))",
				__METHOD__ ,
				array("ORDER BY" =>" `date` DESC", "LIMIT" => $rows));
			$text .= "<h2>".wfMsg('wikitweet-tweets-from-room')." \"<a>$other_room</a>\"</h2>";
			$text .= "<p><a class='handmouse timeline'>".wfMsg('wikitweet-back-timeline')."...</a></p>";

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
				$private = "<img src='$wgScriptPath/extensions/WikiTweet/images/lock-small.png' />";
			}
			
			$dateSrc = $date.' GMT';
			$date_to_display = WikiTweetFunctions::Convert_Date(strtotime($dateSrc));
			//$date_to_display = date('H:i, F jS', strtotime($dateSrc));
			
			$res2 = $dbr->select('wikitweet_avatar','avatar',"`user`='".mysql_real_escape_string($tweetuser)."' ",__METHOD__,false);
			$row2 = $dbr->fetchObject ( $res2 );
			$avatar = (count($row2)>0) ? $row2->avatar : '';
			
			$conversion_tab = array(
				"/\>(\S*)/is"   => "><a href='$wgScriptPath/index.php/$1'>$1</a>",
				"/\@(\S*)/is"   => "@<a href='$wgScriptPath/index.php/User:$1'>$1</a>",
				"/\#(\S*)/is"   => "<a class='handmouse tag' value='$1'>#$1</a>",
				"/http(\S*)/is" => "<a href='http$1' target='_blank'>http$1</a>",
				"/ www(\S*)/is" => " <a href='http://www$1' target='_blank'>www$1</a>",
				);
			$twext = preg_replace(array_keys($conversion_tab), array_values($conversion_tab), $twext);
			$user_subscribe_text = "";
			$unsubscribe_string  = wfMsg('wikitweet-unsubscribe');
			$subscribe_string    = wfMsg('wikitweet-subscribe');
			$delete_string       = wfMsg('wikitweet-delete');
			$answer_string       = wfMsg('wikitweet-answer');
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

		return $text;
	}
	public static function fnDelTweetAjax($id){
		include('WikiTweet.config.php');
		global $wgDBprefix;
		$dbr =& wfGetDB( DB_SLAVE );
		$dbr->update('wikitweet',array('`show`' => 0),array('id' => $id));
		$o__response = new AjaxResponse('ok');
		return $o__response;
	}
	public static function fnUpdateTweetAjax($status, $user, $room, $tomail) {
		$text = '';
		include('WikiTweet.config.php');
		$show = ($tomail==2) ? 2 : 1;
		global $wgDBprefix, $wgDBserver, $wgDBuser, $wgDBpassword, $wgDBname;
		$db = mysql_connect($wgDBserver, $wgDBuser, $wgDBpassword);
		mysql_select_db($wgDBname,$db);

		$dbr =& wfGetDB( DB_SLAVE );
		$dbr->insert('wikitweet',array(
			'`id`'   => ''      ,
			'`text`' => $status ,
			'`user`' => $user   ,
			'`room`' => $room   ,
			'`show`' => $show
		));
		
		$dest=array();
		$user_email = $wgWikiTweet['wikimail'];
		if($tomail==1 or $tomail==2){
			$res = $dbr->select('user','user_email',"user_name = '$user' ");
			if ($dbr->numRows($res) > 0){
				$row = $dbr->fetchObject($res);
				$user_email = $row->user_email;
				if ($user_email!=''){
					$status_array = split("@",$status);
					$i = -1;
					
					foreach($status_array as $values){
						$i += 1;
						if ($i>0){
							$values_array = split(" ",$values);
							$username = $values_array[0];
							$res2 = $dbr->select('user','user_email',"user_name = '$username' ");
							if ($dbr->numRows($res2) > 0){
								$row2 = $dbr->fetchObject($res2);
								$useremail = $row2->user_email;
								if ($useremail!='')
									array_push($dest,$useremail);
							}
						}
					}
				}
			}
		}
		// récupération des abonnés pour envoi de mail (abonnés user ou abonnés room)
		$sql1 = "SELECT DISTINCT {$wgDBprefix}user.user_email FROM {$wgDBprefix}user,{$wgDBprefix}wikitweet_subscription wt WHERE wt.user={$wgDBprefix}user.user_name AND ((wt.link = '$room' AND wt.type='room') or (wt.link='$user' AND wt.type='user')) AND wt.user!='$user' ;";
		$req1 = mysql_query($sql1) or die('Error SQL !');
		// TODO

		while($row1 = mysql_fetch_assoc($req1)){
			$useremail = $row1['user_email'];
			array_push($dest,$useremail);
			$text .= $useremail.'---';
		}
		$lenlist = 0;
		foreach($dest as $destmail){
			$lenlist += strlen($destmail);
		}
		if($lenlist>0){
			WikiTweetFunctions::send( $dest, $user_email, "A new tweet for or about you !", $status);
			$text .= 'mail sent';
		}

		mysql_close(); 
		return $text;
	}
	public static function fnSubscribeAjax($link, $user, $type){
		$o__text = '';
		include('WikiTweet.config.php');
		$dbr =& wfGetDB( DB_SLAVE );
		$dbr->insert('wikitweet_subscription',array(
			'`id`'   => ''    ,
			'`user`' => $user ,
			'`link`' => $link ,
			'`type`' => $type
		));
		$o__text .= ( $type == "user" ) ? str_replace( "." , "__dot__" , $link ) : '';
		return $o__text;
	}
	public static function fnUnsubscribeAjax($link, $user, $type){
		$o__text = '';
		include('WikiTweet.config.php');
		$dbr =& wfGetDB( DB_SLAVE );
		$dbr->delete('wikitweet_subscription', array(
			'`user`' => $user,
			'`link`' => $link,
			'`type`' => $type
		));
		$o__text .= ( $type == "user" ) ? str_replace( "." , "__dot__" , $link ) : '';
		return $o__text;
	}
	
	public function getAllowedParams() {
		return array(
			'req' => array (
				ApiBase :: PARAM_DFLT => 'get',
				ApiBase :: PARAM_TYPE => array (
					'get',
					'delete',
					'update',
					'subscribe',
					'unsubscribe'
				)
			),
			'rows' => array (
				ApiBase :: PARAM_TYPE => 'integer'
			),
			'room' => array (
				ApiBase :: PARAM_TYPE => 'string'
			),
			'user' => array (
				ApiBase :: PARAM_TYPE => 'string'
			),
			'size' => array (
				ApiBase :: PARAM_TYPE => 'string'
			),
			'tag' => array (
				ApiBase :: PARAM_TYPE => 'string'
			),
			'other_room' => array (
				ApiBase :: PARAM_TYPE => 'string'
			),
			'id' => array (
				ApiBase :: PARAM_TYPE => 'integer'
			),
			'tomail' => array (
				ApiBase :: PARAM_TYPE => 'string'
			),
			'status' => array (
				ApiBase :: PARAM_TYPE => 'string'
			),
			'type' => array (
				ApiBase :: PARAM_DFLT => 'user',
				ApiBase :: PARAM_TYPE => array (
					'user',
					'room'
				)
			),
			'link' => array (
				ApiBase :: PARAM_TYPE => 'string'
			),
		);
	}

	public function getParamDescription() {
		return array(
			'get'       => 'Get tweets',
			'delete'    => 'Delete a given tweet',
			'update'    => 'Add a tweet',
			'subscribe' => 'Subscription management'
			);
	}

	public function getDescription() {
		return 'API to manage WikiTweets';
	}
	
	public function getPossibleErrors() {
		return array_merge( parent::getPossibleErrors(), array(
			array( 'code' => 'params', 'info' => 'You must enter a parameter "id" with "delete" option.' ),
		) );
	}

	protected function getExamples() {
		return array(
			'api.php?action=query&list=wikitweet&wtwreq=get&wtwrows=3&wtwroom=Main&wtwuser=user1',
			'api.php?action=query&list=wikitweet&wtwreq=delete',
			'api.php?action=query&list=wikitweet&wtwreq=update',
			'api.php?action=query&list=wikitweet&wtwreq=subscribe'
		);
	}

	public function getVersion() {
		return __CLASS__ . ': $Id: WikiTweet.api.php xxxxx 2010-05-09 13:42:00Z Faure.thomas $';
	}
}
