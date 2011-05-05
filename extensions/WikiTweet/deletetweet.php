<?php
if( !defined( 'MEDIAWIKI' ) ) {
	echo( "This file is an extension to the MediaWiki software "
	. "and cannot be used standalone.\n" );
	die( -1 );
}
function fnDelTweetAjax($id){
	include('WikiTweet.config.php');
	global $wgDBprefix;
	$dbr =& wfGetDB( DB_SLAVE );
	$dbr->update('wikitweet',array('`show`' => 0),array('id' => $id));
	$o__response = new AjaxResponse('ok');
	return $o__response;
}
?>
