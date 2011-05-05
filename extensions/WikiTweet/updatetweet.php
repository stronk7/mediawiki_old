<?php
if( !defined( 'MEDIAWIKI' ) ) {
	echo( "This file is an extension to the MediaWiki software "
	. "and cannot be used standalone.\n" );
	die( -1 );
}
function fnUpdateTweetAjax($status, $user, $room, $tomail) {
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
	include('tweetmail.php');
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
		send( $dest, $user_email, "A new tweet for or about you !", $status);
		$text .= 'mail sent';
	}

	mysql_close(); 
	$o__response = new AjaxResponse($text);
	return $o__response;
}
?>
