<?php
if( !defined( 'MEDIAWIKI' ) ) {
	echo( "This file is an extension to the MediaWiki software "
	. "and cannot be used standalone.\n" );
	die( -1 );
}
function fnSubscribeAjax($link, $user, $type){
	$l__text = '';
	include('WikiTweet.config.php');
	$dbr =& wfGetDB( DB_SLAVE );
	$dbr->insert('wikitweet_subscription',array(
		'`id`'   => ''    ,
		'`user`' => $user ,
		'`link`' => $link ,
		'`type`' => $type
	));
	$l__text .= ( $type == "user" ) ? str_replace( "." , "__dot__" , $link ) : '';
	$o__response = new AjaxResponse($l__text);
	return $o__response;
}
function fnUnsubscribeAjax($link, $user, $type){
	$l__text = '';
	include('WikiTweet.config.php');
	$dbr =& wfGetDB( DB_SLAVE );
	$dbr->delete('wikitweet_subscription', array(
		'`user`' => $user,
		'`link`' => $link,
		'`type`' => $type
	));
	$l__text .= ( $type == "user" ) ? str_replace( "." , "__dot__" , $link ) : '';
	$o__response = new AjaxResponse($l__text);
	return $o__response;
}
?>
