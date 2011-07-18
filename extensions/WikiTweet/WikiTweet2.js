$('.tweet_li').mouseover(function() {
	$(this).css("border-left","3px solid #BBB");
}).mouseout(function(){
	$(this).css("border-left","3px solid #FFF");
});
$(".user_subscribe").click(function() {
	$("#tempimg2",this).html('<img src="'+wgScriptPath+'/extensions/WikiTweet/images/ajax-loader-mini.gif" style ="padding: 0 5px 0 5px;"/>waiting...');
	var i__link = $("span",this).html();
	var i__user = $("#status_update_form input[name=user]").val();
	$.getJSON(wgScriptPath+"/api.php?action=query&format=json&list=wikitweet&wtwreq=subscribe&wtwlink="+i__link+"&wtwuser="+i__user+"&wtwtype=user",
		function(data) {
			$("#tempimg2").html("");
			$.each(data.query.wikitweet, function(i,item){
				$(".subscribe"+item).css("display", "none");
				$(".unsubscribe"+item).css("display", "inline");
			});
		}
	);
});
$(".user_unsubscribe").click(function() {
	$("#tempimg2",this).html('<img src="'+wgScriptPath+'/extensions/WikiTweet/images/ajax-loader-mini.gif" style ="padding: 0 5px 0 5px;"/>waiting...');
	var i__link = $("span",this).html();
	var i__user = $("#status_update_form input[name=user]").val();
	$.getJSON(wgScriptPath+"/api.php?action=query&format=json&list=wikitweet&wtwreq=unsubscribe&wtwlink="+i__link+"&wtwuser="+i__user+"&wtwtype=user",
		function(data) {
			$("#tempimg2").html("");
			$.each(data.query.wikitweet, function(i,item){
				$(".unsubscribe"+item).css("display", "none");
				$(".subscribe"+item).css("display", "inline");
			});
		}
	);
});
$(".delete_tweet").click(function() {
	var i__id = $("span",this).html();
	$.getJSON(wgScriptPath+"/api.php?action=query&format=json&list=wikitweet&wtwreq=delete&wtwid="+i__id,
		function(data) {
			gettweets();
		}
	);
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
