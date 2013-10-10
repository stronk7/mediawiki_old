<?php
/**
 * WPtouch skin
 */

// Set to "true" if you'd like the content actions enabled
// Such as Edit, Discussion, History, Watch, etc.
$Display_Actions = true;
$GLOBALS["Display_Actions"] = $Display_Actions;


if( !defined( 'MEDIAWIKI' ) )
	die( "This is a skin file for MediaWiki and should not be viewed directly.\n" );

require_once( dirname( dirname( __FILE__ ) ) . '/includes/SkinTemplate.php');

/**
 * Inherit main code from SkinTemplate, set the CSS and template filter.
 */
class SkinWPtouch extends SkinTemplate {
	public function initPage( OutputPage $out ) {
		parent::initPage( $out );
		$this->skinname  = 'wptouch';
		$this->stylename = 'wptouch';
		$this->template  = 'wptouchTemplate';
	}
}


class wptouchTemplate extends QuickTemplate {
	function execute() {
		global $wgUser, $Display_Actions;
		$skin = $wgUser->getSkin();

		// Suppress warnings to prevent notices about missing indexes in $this->data
		wfSuppressWarnings();
		$this->html( 'headelement' );

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="<?php $this->text('xhtmldefaultnamespace') ?>" <?php 
	foreach($this->data['xhtmlnamespaces'] as $tag => $ns) {
		?>xmlns:<?php echo "{$tag}=\"{$ns}\" ";
	} ?>xml:lang="<?php $this->text('lang') ?>" lang="<?php $this->text('lang') ?>" dir="<?php $this->text('dir') ?>">
	<head>
		<meta http-equiv="Content-Type" content="<?php $this->text('mimetype') ?>; charset=<?php $this->text('charset') ?>" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;" />
		<?php $this->html('headlinks') ?>
		<title><?php $this->text('pagetitle') ?></title>
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
		<link rel="stylesheet" href="<?php $this->text('stylepath') ?>/wptouch/css/main.css" type="text/css" media="screen" />
		<style type="text/css">
		/* Comment or deleted the follow section to enable
		   editing by section on a MediaWiki article */
		.editsection {
			display: none;
		}
		<?php if ($GLOBALS["Display_Actions"]) { ?>@media all and (max-width: 350px) { .dropper{font-size:11px;} }<?php } ?>
		</style>
		<script type='text/javascript' src='<?php $this->text('stylepath') ?>/wptouch/javascript/jquery.js?ver=1.3.2'></script>
		<script type='text/javascript' src='<?php $this->text('stylepath') ?>/wptouch/javascript/core.js?ver=1.9'></script>
		<script type="text/javascript">
			addEventListener("load", function() { 
				setTimeout(hideURLbar, 0); }, false);
				function hideURLbar(){
				window.scrollTo(0,1);
			}
		</script>
	</head>
<body class="skated-wptouch-bg">

<!-- New noscript check, we need js on now folks -->
<noscript>
<div id="noscript-wrap">
	<div id="noscript">
		<h2>Notice</h2>
		<p>JavaScript is currently turned off.</p>
		<p>Turn it on in <em>Settings</em><br /> to view this website.</p>
	</div>
</div>
</noscript>

<!--#start The Login Overlay -->
<div id="wptouch-login">
	<div id="wptouch-login-inner">
		<form name="loginform" id="loginform" action="/wordpress/wp-login.php" method="post">
			<label><input type="text" name="log" id="log" onfocus="if (this.value == 'username') {this.value = ''}" value="username" /></label>
			<label><input type="password" name="pwd" onfocus="if (this.value == 'password') {this.value = ''}" id="pwd" value="password" /></label>
			<input type="hidden" name="rememberme" value="forever" />
			<input type="hidden" id="logsub" name="submit" value="Login" tabindex="9" />
			<input type="hidden" name="redirect_to" value="/"/>
			<a href="javascript: return false;" onclick="bnc_jquery_login_toggle();"><img class="head-close" src="<?php $this->text('stylepath') ?>/wptouch/images/head-close.png" alt="close" /></a>
		</form>
	</div>
</div>

 <!-- #start The Search Overlay -->
<div id="wptouch-search"> 
	<div id="wptouch-search-inner">
		<form method="get" id="searchform" action="<?php $this->text('searchaction') ?>">
			<input name="search" type="text" value="Search..." onfocus="if (this.value == 'Search...') {this.value = ''}" name="s" id="s" /> 
			<input name="go" type="hidden" tabindex="5" value="Go" />
			<a href="javascript: return false;" onclick="bnc_jquery_search_toggle();"><img class="head-close" src="<?php $this->text('stylepath') ?>/wptouch/images/head-close.png" alt="close" /></a>
		</form>
	</div>
</div>

<div id="wptouch-menu" class="dropper"> 		
	<div id="wptouch-menu-inner">
		<div id="menu-head">
			<div id="tabnav">
				<a href="#head-navigation"><?php $this->msg('navigation') ?></a> <a href="#head-toolbox"><?php $this->msg('toolbox') ?></a> <a href="#head-personal"><?php $this->msg('personaltools') ?></a><?php if ($GLOBALS["Display_Actions"]) { ?><a href="#head-actions"><?php $this->msg('actions') ?></a><?php } ?>
			</div>

			<ul id="head-navigation">
<?php foreach ($this->data['sidebar'] as $bar => $cont) { ?>
<?php foreach($cont as $key => $val) { ?>
				<li id="<?php echo Sanitizer::escapeId($val['id']) ?>"<?php
				if ( $val['active'] ) { ?> class="active" <?php }
				?>><a href="<?php echo htmlspecialchars($val['href']) ?>"<?php echo Xml::expandAttributes( Linker::tooltipAndAccesskeyAttribs( $val['id'] ) ) ?>><?php echo htmlspecialchars($val['text']) ?></a></li>
<?php				} ?>
<?php } ?>
			</ul>

			<ul id="head-toolbox">
<?php
		if($this->data['notspecialpage']) { ?>
				<li id="t-whatlinkshere"><a href="<?php
				echo htmlspecialchars($this->data['nav_urls']['whatlinkshere']['href'])
				?>"<?php echo Xml::expandAttributes( Linker::tooltipAndAccesskeyAttribs('t-whatlinkshere') ) ?>><?php $this->msg('whatlinkshere') ?></a></li>
<?php
			if( $this->data['nav_urls']['recentchangeslinked'] ) { ?>
				<li id="t-recentchangeslinked"><a href="<?php
				echo htmlspecialchars($this->data['nav_urls']['recentchangeslinked']['href'])
				?>"<?php echo Xml::expandAttributes( Linker::tooltipAndAccesskeyAttribs('t-recentchangeslinked') ) ?>><?php $this->msg('recentchangeslinked') ?></a></li>
<?php			}
		}
		if(isset($this->data['nav_urls']['trackbacklink'])) { ?>
				<li id="t-trackbacklink"><a href="<?php
				echo htmlspecialchars($this->data['nav_urls']['trackbacklink']['href'])
				?>"<?php echo Xml::expandAttributes( Linker::tooltipAndAccesskeyAttribs('t-trackbacklink') ) ?>><?php $this->msg('trackbacklink') ?></a></li>
<?php		}
		if($this->data['feeds']) { ?>
				<li id="feedlinks"><?php foreach($this->data['feeds'] as $key => $feed) {
				?><span id="feed-<?php echo Sanitizer::escapeId($key) ?>"><a href="<?php
				echo htmlspecialchars($feed['href']) ?>"<?php echo Xml::expandAttributes( Linker::tooltipAndAccesskeyAttribs('feed-'.$key) ) ?>><?php echo htmlspecialchars($feed['text']) ?></a
>&nbsp;</span>
				<?php } ?></li><?php
		}

		foreach( array('contributions', 'log', 'blockip', 'emailuser', 'upload', 'specialpages') as $special ) {
			if($this->data['nav_urls'][$special]) { ?>
				<li id="t-<?php echo $special ?>"><a href="<?php echo htmlspecialchars($this->data['nav_urls'][$special]['href'])
				?>"<?php echo Xml::expandAttributes( Linker::tooltipAndAccesskeyAttribs('t-'.$special) ) ?>><?php $this->msg($special) ?></a></li>
<?php			}
		}
		if(!empty($this->data['nav_urls']['print']['href'])) { ?>
				<li id="t-print"><a href="<?php echo htmlspecialchars($this->data['nav_urls']['print']['href'])
				?>"<?php echo Xml::expandAttributes( Linker::tooltipAndAccesskeyAttribs('t-print') ) ?>><?php $this->msg('printableversion') ?></a></li>
<?php		}
		if(!empty($this->data['nav_urls']['permalink']['href'])) { ?>
				<li id="t-permalink"><a href="<?php echo htmlspecialchars($this->data['nav_urls']['permalink']['href'])
				?>"<?php echo Xml::expandAttributes( Linker::tooltipAndAccesskeyAttribs('t-permalink') ) ?>><?php $this->msg('permalink') ?></a></li>
<?php		}
		elseif ($this->data['nav_urls']['permalink']['href'] === '') { ?>
				<li id="t-ispermalink"<?php echo $skin->tooltip('t-ispermalink') ?>><?php $this->msg('permalink') ?></li>
<?php
		}

		wfRunHooks( 'pixeledTemplateToolboxEnd', array( &$this ) );
?>
			</ul>

			<ul id="head-personal">
<?php
			foreach( $this->data['personal_urls'] as $key => $item ) { ?>
				<li id="pt-<?php echo Sanitizer::escapeId($key) ?>"<?php
				if ($item['active']) { ?> class="active"<?php } ?>><a href="<?php
				echo htmlspecialchars($item['href']) ?>"<?php echo Xml::expandAttributes( Linker::tooltipAndAccesskeyAttribs('pt-'.$key) ) ?><?php
				if(!empty($item['class'])) { ?> class="<?php
				echo htmlspecialchars($item['class']) ?>"<?php } ?>><?php
				echo htmlspecialchars($item['text']) ?></a></li>
<?php			} ?>
			</ul>

<?php			if ($GLOBALS["Display_Actions"]) { ?>
			<ul id="head-actions">
<?php
				foreach( $this->data['content_actions'] as $key => $item ) { ?>
					<li id="pt-<?php echo Sanitizer::escapeId($key) ?>"<?php
					if ($item['active']) { ?> class="active"<?php } ?>><a href="<?php
					echo htmlspecialchars($item['href']) ?>"<?php echo Xml::expandAttributes( Linker::tooltipAndAccesskeyAttribs('ca-'.$key) ) ?><?php
					if(!empty($item['class'])) { ?> class="<?php
					echo htmlspecialchars($item['class']) ?>"<?php } ?>><?php
					echo htmlspecialchars($item['text']) ?></a></li>
<?php				} ?>
			</ul>
<?php			} ?>
		</div>
	</div>
</div>

<div id="headerbar">
	<div id="headerbar-title">
		<img id="logo-icon" src="/apple-touch-icon.png" alt="<?php $this->msg('sitetitle') ?>" />
		<a href="/"><?php $this->msg('sitetitle') ?></a>
	</div>
	<div id="headerbar-menu">
		<a href="#" onclick="bnc_jquery_menu_drop(); return false;"></a>
	</div>
</div>

<div id="drop-fade">
 	<a id="searchopen" class="top" href="#" onclick="bnc_jquery_search_toggle(); return false;">Search</a>
</div>

<div class="content">
	<div class="post">
		<h2><?php $this->data['displaytitle']!=""?$this->html('title'):$this->text('title') ?></h2>
		<hr>
		<div class="clearer"></div>
		<div class="mainentry">
 			<p><?php $this->html('bodytext') ?></p>
		</div>
	</div>
</div>

<div class="cleared"></div>
<div class="visualClear"></div>

<?php $this->html('bottomscripts'); /* JS call to runBodyOnloadHook */ ?>

<?php $this->html('reporttime') ?>

</body>
</html>
<?php
	wfRestoreWarnings();
	} // end of execute() method
} // end of class
?>
