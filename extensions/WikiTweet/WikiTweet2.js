ajaxResponse6 = function handleResponse6(response) {
	// USER SUBSCRIPTION
	$("#tempimg2").html("");
	$(".subscribe"+response.responseText).css("display", "none");
	$(".unsubscribe"+response.responseText).css("display", "inline");
}
ajaxResponse7 = function handleResponse7(response) {
	// USER UNSUBSCRIPTION
	$("#tempimg2").html("");
	$(".unsubscribe"+response.responseText).css("display", "none");
	$(".subscribe"+response.responseText).css("display", "inline");
}
ajaxResponse8 = function handleResponse8(response) {
	// DELETE TWEET
	gettweets();
}

$('.tweet_li').mouseover(function() {
	$(this).css("border-left","3px solid #BBB");
}).mouseout(function(){
	$(this).css("border-left","3px solid #FFF");
});
$(".user_subscribe").click(function() {
	$("#tempimg2",this).html('<img src="'+wgScriptPath+'/extensions/WikiTweet/images/ajax-loader-mini.gif" style ="padding: 0 5px 0 5px;"/>waiting...');
	var i__link = $("span",this).html();
	var i__user = $("#status_update_form input[name=user]").val();
	sajax_debug_mode = false;
	sajax_do_call("fnSubscribeAjax", [i__link, i__user, 'user'], ajaxResponse6);
});
$(".user_unsubscribe").click(function() {
	$("#tempimg2",this).html('<img src="'+wgScriptPath+'/extensions/WikiTweet/images/ajax-loader-mini.gif" style ="padding: 0 5px 0 5px;"/>waiting...');
	var i__link = $("span",this).html();
	var i__user = $("#status_update_form input[name=user]").val();
	sajax_debug_mode = false;
	sajax_do_call("fnUnsubscribeAjax", [i__link, i__user, 'user'], ajaxResponse7);
});
$(".delete_tweet").click(function() {
	var i__id = $("span",this).html();
	sajax_debug_mode = false;
	sajax_do_call("fnDelTweetAjax", [i__id], ajaxResponse8);
});
$(".answer").mouseover(function(){
	$(this).css("text-decoration","underline");
}).mouseout(function(){
	$(this).css("text-decoration","");

});
$(".answer").click(function(){
	$('textarea#status').val($('textarea#status').val()+'@'+$(this).parents('.tweet_li').attr('user')+' ');
	$('textarea#status').focus();
});
$(".tag").click(function(){
	gettweets_with_tag($(this).attr('value'));
});
$(".room").click(function(){
	gettweets_from_room($(this).attr('value'));
});
$(".timeline").click(function(){
	gettweets();
});
