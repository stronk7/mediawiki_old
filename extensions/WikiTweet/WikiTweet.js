var g__timer;
function gettweets() {
	var l__size = $("#status_update_form input[name=size]").val();
	var l__rows = $("#status_update_form input[name=rows]").val();
	var l__room = $("#status_update_form input[name=room]").val();
	var l__user = $("#status_update_form input[name=user]").val();
	$("#img_loader").css("display","inline");
	$.getJSON(wgScriptPath+"/api.php?action=query&format=json&list=wikitweet&wtwreq=get&wtwrows="+l__rows+"&wtwroom="+l__room+"&wtwuser="+l__user+"&wtwsize="+l__size,
		function(data) {
			$.each(data.query.wikitweet, function(i,item){
				$("#img_loader").css("display","none");
				$("#lasttweets").html(item);
				if (g__timer) clearTimeout(g__timer);
				g__timer = setTimeout(gettweets, refreshTime);
			});
		}
	);
}
function gettweets_with_tag(i__tag) {
	var l__size = $("#status_update_form input[name=size]").val();
	var l__rows = $("#status_update_form input[name=rows]").val();
	var l__room = $("#status_update_form input[name=room]").val();
	var l__user = $("#status_update_form input[name=user]").val();
	$("#img_loader").css("display","inline");
	$.getJSON(wgScriptPath+"/api.php?action=query&format=json&list=wikitweet&wtwreq=get&wtwrows="+l__rows+"&wtwroom="+l__room+"&wtwuser="+l__user+"&wtwsize="+l__size+"&wtwtag="+i__tag,
		function(data) {
			$.each(data.query.wikitweet, function(i,item){
				$("#img_loader").css("display","none");
				$("#lasttweets").html(item);
				if (g__timer) clearTimeout(g__timer);
			});
		}
	);
}
function gettweets_from_room(i__room) {
	var l__size = escape ( $("#status_update_form input[name=size]").val() ) ;
	var l__rows = escape ( $("#status_update_form input[name=rows]").val() ) ;
	var l__room = escape ( $("#status_update_form input[name=room]").val() ) ;
	var l__user = escape ( $("#status_update_form input[name=user]").val() ) ;
	$("#img_loader").css("display","inline");
	$.getJSON(wgScriptPath+"/api.php?action=query&format=json&list=wikitweet&wtwreq=get&wtwrows="+l__rows+"&wtwroom="+l__room+"&wtwuser="+l__user+"&wtwsize="+l__size+"&wtwother_room="+i__room,
		function(data) {
			$.each(data.query.wikitweet, function(i,item){
				$("#img_loader").css("display","none");
				$("#lasttweets").html(item);
				if (g__timer) clearTimeout(g__timer);
			});
		}
	);
}
function updatetweet(i__mail, i__userused){
	var l__status = escape( $("#status_update_form textarea[name=status]").val() ) ;
	var l__room   = escape( $("#status_update_form input[name=room]").val()      ) ;
	$.getJSON(wgScriptPath+"/api.php?action=query&format=json&list=wikitweet&wtwreq=update&wtwstatus="+l__status+"&wtwuser="+i__userused+"&wtwroom="+l__room+"&wtwtomail="+i__mail,
		function(data) {
			$("#status_update_form textarea[name=status]").val("");
			$("#stringlength").html("<span>140</span>");
			gettweets();
		}
	);
}
gettweets();
$(document).ready(function() {
	$("textarea[name=status]").keyup(function() {
		len = $("#status_update_form textarea[name=status]").val().length;
		addcolor = "";
		if (len >= 140){
			addcolor = " style='color:red;' ";
		}
		len2 = 140-len;
		$("#stringlength").html("<span"+addcolor+">"+len2+"</span>");
		if ($("textarea[name=status]").val().indexOf("@") != -1){
			//status contains @ character
			$("input[name=submitandmail]").css("display","inline");
			$("input[name=submitprivate]").css("display","inline");
		}
		else if($("input[name=submitandmail]").css("display")=="inline"){
			$("input[name=submitandmail]").css("display","none");
			$("input[name=submitprivate]").css("display","none");
		}

	});
	function submit(mail, userused){
		if(userused == ''){
			userused = $("#status_update_form input[name=user]").val();
		}
		$("input[name=submitandmail]").css("display","none");
		$("input[name=submitprivate]").css("display","none");
		len = $("#status_update_form textarea[name=status]").val().length;
		if (len > 140){
			alert('Reduce your message to 140 characters max.');
		}
		else if (len == 0){
			gettweets();
		}
		else {
			updatetweet(mail, userused);
		}
	}
	$("#status_update_form input[name=submit]").click(function() {
		submit(0,'');
	});
	$("#status_update_form input[name=submitandmail]").click(function() {
		submit(1,'');
	});
	$("#status_update_form input[name=submitbyinformer]").click(function() {
		submit(0,InformerUser);
	});
	$("#status_update_form input[name=submitanonymously]").click(function() {
		submit(0,AnonymousUser);
	});
	$("#status_update_form input[name=submitprivate]").click(function() {
		submit(2,'');
	});
	$("#room_subscribe").click(function() {
		$("#tempimg").html('<img src="'+wgScriptPath+'/extensions/WikiTweet/images/ajax-loader-mini.gif" style ="padding: 0 5px 0 5px;"/>waiting...');
		var i__link = $("#status_update_form input[name=room]").val();
		var i__user = $("#status_update_form input[name=user]").val();
		$.getJSON(wgScriptPath+"/api.php?action=query&format=json&list=wikitweet&wtwreq=subscribe&wtwlink="+i__link+"&wtwuser="+i__user+"&wtwtype=room",
			function(data) {
				$("#tempimg").html("");
				$("#room_subscribe").css("display", "none");
				$("#room_unsubscribe").css("display", "inline");
			}
		);
	});
	$("#room_unsubscribe").click(function() {
		$("#tempimg").html('<img src="'+wgScriptPath+'/extensions/WikiTweet/images/ajax-loader-mini.gif" style ="padding: 0 5px 0 5px;"/>waiting...');
		var i__link = $("#status_update_form input[name=room]").val();
		var i__user = $("#status_update_form input[name=user]").val();
		$.getJSON(wgScriptPath+"/api.php?action=query&format=json&list=wikitweet&wtwreq=unsubscribe&wtwlink="+i__link+"&wtwuser="+i__user+"&wtwtype=room",
			function(data) {
				$("#tempimg").html("");
				$("#room_subscribe").css("display", "inline");
				$("#room_unsubscribe").css("display", "none");
			}
		);
	});
});
