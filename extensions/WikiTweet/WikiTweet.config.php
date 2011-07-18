<?php
	$wgWikiTweet = array(
		// User roles configuration :
		'informuser'   => "Informer",
		'informers'    => array("Faure.thomas","user2"),
		'admin'        => array("Faure.thomas"),
		'allowAnonymous'    => True,                   // Is it possible to tweet anonymously ?
		'AnonymousUser'     => 'Anonymous',            // Who is the "Anonymous user" (fictive user)
		'allowDisconnected' => False,                  // Is it possible to post tweet when not log in ?
		'refreshTime'       => 15000,                  // Time to refresh in milliseconds
		
		// SMTP configuration :
		'email'=> True, // True or False
		'SMTP'         => array(
			 'host'    => "smtphost", //could also be an IP address
			 'IDHost'  => "idhost",
			 'port'    => 25,
			 'auth'    => false,
			 'username'=> "",
			 'password'=> ""
			),
		'wikimail'     => 'admin@wikitweet',
		
		// Size CSS configuration :
		'size'         => array(
			'normal'   => array(
				'line_height'       => '16px',         // Height of a tweet line
				'font_size'         => '14px',
				'avatar_size'       => '48',           // Size of the avatar picture (in px)
				'span_avatar_width' => '50px',
				'paddingli'         => '10px 0 8px',
				'margin_left'       => '0px',
				),
			'medium'   => array(
				'line_height'       => '13px',
				'font_size'         => '14px',
				'avatar_size'       => '35',
				'span_avatar_width' => '37px',
				'paddingli'         => '5px 0 3px',
				'margin_left'       => '0px',
				),
			'small'   => array(
				'line_height'       => '13px',
				'font_size'         => '11px',
				'avatar_size'       => '35',
				'span_avatar_width' => '37px',
				'paddingli'         => '5px 0 3px',
				'margin_left'       => '0px',
				),
			),
		'inherit'      => array(
			'main' => array('room1','room2','room3')		
			)
		);
?>
