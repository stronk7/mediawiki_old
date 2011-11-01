<?php

require_once('/var/www/vhosts/docs.moodle.org/html/prodwiki/skins/moodledocs/moodleoutput.php');

if (isset($wgStylePath)) $wgStylePathOriginal = $wgStylePath;
$wgStylePath = '/20/en/skins';

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="keywords" content="Main Page,About Moodle,Administrator documentation,Bulk user actions,Developer documentation,GSOC/2008,Grades,Notes,Sandbox,Teacher documentation,Upgrading to Moodle 1.9" />
        <link rel="shortcut icon" href="/favicon.ico" />
        <link rel="search" type="application/opensearchdescription+xml" href="/en/opensearch_desc.php" title="MoodleDocs" />
        <link title="Creative Commons" type="application/rdf+xml" href="/en/index.php?title=Main_Page&amp;action=creativecommons" rel="meta" />
        <link rel="copyright" href="http://docs.moodle.org/en/License" />
        <title>Moodle Docs overview</title>

        <style type="text/css" media="screen, projection">/*<![CDATA[*/
            @import "/20/en/skins/common/shared.css?97";
        /*]]>*/</style>
        <link rel="stylesheet" type="text/css" media="print" href="/20/en/skins/common/commonPrint.css?97" />
        <!--[if lt IE 7]><script type="text/javascript" src="/20/en/skins/common/IEFixes.js?97"></script>
            <meta http-equiv="imagetoolbar" content="no" /><![endif]-->

        <link rel="stylesheet" href="/mediawiki/skins/monobook/main.css?301" media="screen" />
        <link rel="stylesheet" href="/mediawiki/skins/moodledocs/moodledocs.css?301" media="screen" />
        <link rel="stylesheet" href="/mediawiki/skins/moodledocs/menu/menu.css?301" media="screen" />
        <link rel="stylesheet" href="/mediawiki/skins/moodledocs/menu/menuprint.css?301" media="print" />
        <!--[if lt IE 5.5000]><link rel="stylesheet" href="/mediawiki/skins/monobook/IE50Fixes.css?301" media="screen" /><![endif]-->
        <!--[if IE 5.5000]><link rel="stylesheet" href="/mediawiki/skins/monobook/IE55Fixes.css?301" media="screen" /><![endif]-->
        <!--[if IE 6]><link rel="stylesheet" href="/mediawiki/skins/monobook/IE60Fixes.css?301" media="screen" /><![endif]-->
        <!--[if IE 7]><link rel="stylesheet" href="/mediawiki/skins/monobook/IE70Fixes.css?301" media="screen" /><![endif]-->
        
        <!--[if IE 5.5000]><link rel="stylesheet" href="/mediawiki/skins/moodledocs/fixes.IE55.css?301" media="screen" /><![endif]-->
        <!--[if IE 6]><link rel="stylesheet" href="/mediawiki/skins/moodledocs/fixes.IE60.css?301" media="screen" /><![endif]-->
        <!--[if IE 7]><link rel="stylesheet" href="/mediawiki/skins/moodledocs/fixes.IE70.css?301" media="screen" /><![endif]-->


        <script type="text/javascript" src="/20/en/skins/moodledocs/menu/sm/c_config.js"></script>
        <script type="text/javascript" src="/20/en/skins/moodledocs/menu/sm/c_smartmenus.js"></script>

        <script type= "text/javascript">/*<![CDATA[*/
var skin = "moodledocs";
var stylepath = "/20/en/skins";
var wgArticlePath = "/en/$1";
var wgScriptPath = "/en";
var wgScript = "/en/index.php";
var wgServer = "http://docs.moodle.org";
var wgCanonicalNamespace = "";
var wgCanonicalSpecialPageName = false;
var wgNamespaceNumber = 0;
var wgPageName = "Main_Page";
var wgTitle = "Main Page";
var wgAction = "view";
var wgRestrictionEdit = ["sysop"];
var wgRestrictionMove = ["sysop"];
var wgArticleId = "1";
var wgIsArticle = true;
var wgUserName = "Dougiamas";
var wgUserGroups = ["bureaucrat", "sysop", "*", "user", "autoconfirmed", "emailconfirmed"];
var wgUserLanguage = "en";
var wgContentLanguage = "en";
var wgBreakFrames = false;
var wgCurRevisionId = "41590";
var wgAjaxWatch = {"watchMsg": "Watch", "unwatchMsg": "Unwatch", "watchingMsg": "Watching...", "unwatchingMsg": "Unwatching..."};
/*]]>*/</script>
                
        <script type="text/javascript" src="/20/en/skins/common/wikibits.js?97"><!-- wikibits js --></script>
        <script type="text/javascript" src="/en/index.php?title=-&amp;action=raw&amp;smaxage=0&amp;gen=js&amp;useskin=moodledocs"><!-- site js --></script>

        <style type="text/css">/*<![CDATA[*/
@import "/en/index.php?title=MediaWiki:Common.css&usemsgcache=yes&action=raw&ctype=text/css&smaxage=18000";
@import "/en/index.php?title=MediaWiki:Moodledocs.css&usemsgcache=yes&action=raw&ctype=text/css&smaxage=18000";
@import "/en/index.php?title=-&action=raw&gen=css&maxage=18000&smaxage=0";
/*]]>*/</style>
        <!-- Head Scripts -->
        <script type="text/javascript" src="/20/en/skins/common/ajax.js?97"></script>
        <script type="text/javascript" src="/20/en/skins/common/ajaxwatch.js?97"></script>
        <style type="text/css" media="screen,projection">/*<![CDATA[*/ @import "/overview/extra.css"; /*]]>*/</style>
        <style type="text/css">
ul.lang-list {
  width: 75%;
  margin: 0 auto; 
  padding: 10px;

}
ul.lang-list li {
  width: 50%;
  margin: 0;
  padding: 5px 0;
  text-align: center;
  float: left;
  font-size: 1.2em;
  list-style: none;
}
p.lang-clearer {
  padding: 20px 20px 10px 20px;
  margin: 0;
  clear: both;
  text-align:center;
}
h2 {
  text-align:center;
}
        </style>
    </head>
    <body class="mediawiki ns-0 ltr page-Main_Page skin-moodledocs">
        <div id="page">
            <?php echo moodle_output::header(); ?>
            <?php echo moodle_output::menu('en'); ?>
            <div id="globalWrapper">
                <?php include('content.html');  ?>
                <div class="visualClear"></div>
                <div id="footer">
                    <ul id="f-list">
                        <li id="copyright">Content is available under <a href="http://docs.moodle.org/en/License" class="external " title="http://docs.moodle.org/en/License" rel="nofollow">GNU Public License</a>.</li>
                        <li id="about"><a href="/en/MoodleDocs:About" title="MoodleDocs:About">About MoodleDocs</a></li>
                        <li id="disclaimer"><a href="/en/MoodleDocs:General_disclaimer" title="MoodleDocs:General disclaimer">Disclaimers</a></li>
                    </ul>
                </div>
                <?php echo moodle_output::footer(); ?>
            </div>
        </div>
    </body>
</html>
<?php

if (isset($wgStylePathOriginal)) $wgStylePath = $wgStylePathOriginal;