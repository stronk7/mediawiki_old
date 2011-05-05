var g__timer;
function gettweets() {
	var l__size = $("#status_update_form input[name=size]").val();
	var l__rows = $("#status_update_form input[name=rows]").val();
	var l__room = $("#status_update_form input[name=room]").val();
	var l__user = $("#status_update_form input[name=user]").val();
	sajax_debug_mode = false;
	$("#img_loader").css("display","inline");
	sajax_do_call("fnGetTweetsAjax", [l__rows, l__room, l__user, l__size], ajaxResponse1);
}
ajaxResponse1 = function handleResponse1(response) {
	$("#img_loader").css("display","none");
	$("#lasttweets").html(response.responseText);
	if (g__timer) clearTimeout(g__timer);
	g__timer = setTimeout(gettweets, refreshTime);
}
function gettweets_with_tag(i__tag) {
	var l__size = $("#status_update_form input[name=size]").val();
	var l__rows = $("#status_update_form input[name=rows]").val();
	var l__room = $("#status_update_form input[name=room]").val();
	var l__user = $("#status_update_form input[name=user]").val();
	sajax_debug_mode = false;
	$("#img_loader").css("display","inline");
	sajax_do_call("fnGetTweetsAjax", [l__rows, l__room, l__user, l__size, i__tag], ajaxResponse2);
}
ajaxResponse2 = function handleResponse2(response) {
	$("#img_loader").css("display","none");
	$("#lasttweets").html(response.responseText);
	if (g__timer) clearTimeout(g__timer);
}
function gettweets_from_room(i__room) {
	var l__size = $("#status_update_form input[name=size]").val();
	var l__rows = $("#status_update_form input[name=rows]").val();
	var l__room = $("#status_update_form input[name=room]").val();
	var l__user = $("#status_update_form input[name=user]").val();
	sajax_debug_mode = false;
	$("#img_loader").css("display","inline");
	sajax_do_call("fnGetTweetsAjax", [l__rows, l__room, l__user, l__size, '', i__room], ajaxResponse2);
}
function updatetweet(i__mail, i__userused){
	var l__status = $("#status_update_form textarea[name=status]").val();
	var l__room   = $("#status_update_form input[name=room]").val();
	sajax_debug_mode = false;
	sajax_do_call("fnUpdateTweetAjax", [l__status, i__userused, l__room, i__mail], ajaxResponse3);
}
ajaxResponse3 = function handleResponse3(response) {
	$("#status_update_form textarea[name=status]").val("");
	$("#stringlength").html("<span>140</span>");
	gettweets();
}

ajaxResponse4 = function handleResponse4(response) {
	// ROOM SUBSCRIPTION
	if(data==""){
		$("#tempimg").html("");
		$("#room_subscribe").css("display", "none");
		$("#room_unsubscribe").css("display", "inline");
	}
	else {
		$("#id_room_subscribe").html("error :<br/>"+response.responseText);
	}
}
ajaxResponse5 = function handleResponse5(response) {
	// ROM UNSUBSCRIPTION
	if(data==""){
		$("#tempimg").html("");
		$("#room_unsubscribe").css("display", "none");
		$("#room_subscribe").css("display", "inline");
	}
	else {
		$("#id_room_subscribe").html("error :<br/>"+response.responseText);
	}
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
		sajax_debug_mode = false;
		sajax_do_call("fnSubscribeAjax", [i__link, i__user, 'room'], ajaxResponse4);
	});
	$("#room_unsubscribe").click(function() {
		$("#tempimg").html('<img src="'+wgScriptPath+'/extensions/WikiTweet/images/ajax-loader-mini.gif" style ="padding: 0 5px 0 5px;"/>waiting...');
		var i__link = $("#status_update_form input[name=room]").val();
		var i__user = $("#status_update_form input[name=user]").val();
		sajax_debug_mode = false;
		sajax_do_call("fnUnsubscribeAjax", [i__link, i__user, 'room'], ajaxResponse5);
	});
});
