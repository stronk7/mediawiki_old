<?php 

return array(
	"mwEmbedStartup" => array( 
		'scripts' => array( 
			"mwEmbedSupport.js",
		),
		'debugRaw' => false,
		'dependencies' => array(
			// jQuery dependencies:
			'jquery.triggerQueueCallback',
			'jquery.mwEmbedUtil',
			'mediawiki.language.parser',
		),				
		'messageFile' => 'MwEmbedSupport.i18n.php',
	),	
	
	// All the mwEmbed Support components that are not needed for mwEmbed loader.js files:  
	// Right now this is only css files. 
	'mwEmbedSupport' => array(
		'styles' => 'skins/common/MwEmbedCommonStyle.css',	 
		'skinStyles' => array(
			/* shared jQuery ui skin styles */
			'darkness' => 'skins/jquery.ui.themes/darkness/jquery-ui-1.7.2.css',
			'kaltura-dark' => 'skins/jquery.ui.themes/kaltura-dark/jquery-ui-1.7.2.css',
			'le-frog' => 'skins/jquery.ui.themes/le-frog/jquery-ui-1.7.2.css',
			'redmond' => 'skins/jquery.ui.themes/redmond/jquery-ui-1.7.2.css',
			'start' => 'skins/jquery.ui.themes/start/jquery-ui-1.7.2.css',
			'sunny' => 'skins/jquery.ui.themes/sunny/jquery-ui-1.7.2.css',	
		),
		'messageFile' => 'MwEmbedSupport.i18n.php',
	),
	'MwEmbedCommonStyle' => array(
		'styles'=>'skins/common/MwEmbedCommonStyle.css',
		'messageFile' => 'MwEmbedSupport.i18n.php'
	),	
	'mediawiki.UtilitiesTime' => array( 'scripts' => 'mediawiki/mediawiki.UtilitiesTime.js' ),
	'mediawiki.client' => array( 'scripts' => 'mediawiki/mediawiki.client.js' ),
	'mediawiki.Uri' => array( 'scripts' => 'mediawiki/mediawiki.Uri.js' ),
	'mediawiki.absoluteUrl' => array( 'scripts' => 'mediawiki/mediawiki.absoluteUrl.js' ),
	
	'mediawiki.language.parser' => array( 
		'scripts'=> 'mediawiki/mediawiki.language.parser.js',
		'debugRaw' => false
	),
	'jquery.menu' => array(
		'scripts' => 'jquery.menu/jquery.menu.js',
		'styles' => 'jquery.menu/jquery.menu.css'
	),			
	// Startup modules must set debugRaw to false
	"jquery.triggerQueueCallback"	=> array( 
		'scripts'=> "jquery/jquery.triggerQueueCallback.js",
		'debugRaw' => false
	),
	"jquery.mwEmbedUtil" => array( 
		'scripts' => "jquery/jquery.mwEmbedUtil.js",
		'debugRaw' => false,
		'dependencies' => array(
			'jquery.ui.dialog'
		)
	),
);
