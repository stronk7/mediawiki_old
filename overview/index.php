<?php

require_once(dirname(dirname(__FILE__)).'/prodwiki/skins/moodledocsnew/moodleoutput.php');

if (isset($wgStylePath)) $wgStylePathOriginal = $wgStylePath;
$wgStylePath = '/20/en/skins';

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="generator" content="MediaWiki 1.17.0" />
        <title>Moodle Docs overview</title>
        <link rel="shortcut icon" href="/favicon.ico" />
        <link rel="search" type="application/opensearchdescription+xml" href="/20/en/opensearch_desc.php" title="MoodleDocs 20 (English)" />
        <link rel="EditURI" type="application/rsd+xml" href="http://docstest.moodle.local/20/en/api.php?action=rsd" />
        <link title="Creative Commons" type="application/rdf+xml" href="/20/en/index.php?title=Main_Page&amp;action=creativecommons" rel="meta" />

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="keywords" content="Main Page,About Moodle,Administrator documentation,Bulk user actions,Developer documentation,GSOC/2008,Grades,Notes,Sandbox,Teacher documentation,Upgrading to Moodle 1.9" />
        <link title="Creative Commons" type="application/rdf+xml" href="/en/index.php?title=Main_Page&amp;action=creativecommons" rel="meta" />
        <link rel="copyright" href="http://docs.moodle.org/en/License" />

        <link rel="alternate" type="application/atom+xml" title="MoodleDocs Atom feed" href="/20/en/index.php?title=Special:RecentChanges&amp;feed=atom" />
        <link rel="stylesheet" href="/20/en/load.php?debug=false&amp;lang=en&amp;modules=mediawiki.legacy.commonPrint%2Cshared&amp;only=styles&amp;skin=moodledocsnew&amp;*" />
        <link rel="stylesheet" href="<?php echo $wgStylePath;?>/monobook/main.css?301" media="screen" />
        <link rel="stylesheet" href="<?php echo $wgStylePath;?>/moodledocsnew/main.css?301" media="screen" />
        <link rel="stylesheet" href="<?php echo $wgStylePath;?>/moodledocsnew/menu/moodlemenu.css?301" media="screen" />
        <link rel="stylesheet" href="<?php echo $wgStylePath;?>/moodledocsnew/menu/menuprint.css?301" media="print" />
        <link rel="stylesheet" href="<?php echo $wgStylePath;?>/moodledocsnew/customisation.20.css?301" />
        <!--[if lt IE 5.5000]><link rel="stylesheet" href="<?php echo $wgStylePath;?>/monobook/IE50Fixes.css?301" media="screen" /><![endif]-->
        <!--[if IE 5.5000]><link rel="stylesheet" href="<?php echo $wgStylePath;?>/monobook/IE55Fixes.css?301" media="screen" /><![endif]-->
        <!--[if IE 6]><link rel="stylesheet" href="<?php echo $wgStylePath;?>/monobook/IE60Fixes.css?301" media="screen" /><![endif]-->
        <!--[if IE 7]><link rel="stylesheet" href="<?php echo $wgStylePath;?>/monobook/IE70Fixes.css?301" media="screen" /><![endif]-->
        <!--[if IE 7]><link rel="stylesheet" href="<?php echo $wgStylePath;?>/moodledocsnew/fixes.IE70.css?301" media="screen" /><![endif]-->
        <!--[if IE 6]><link rel="stylesheet" href="<?php echo $wgStylePath;?>/moodledocsnew/fixes.IE60.css?301" media="screen" /><![endif]-->
        <!--[if IE 5.5000]><link rel="stylesheet" href="<?php echo $wgStylePath;?>/moodledocsnew/fixes.IE55.css?301" media="screen" /><![endif]--><meta name="ResourceLoaderDynamicStyles" content="" />

        <link type="text/css" rel="stylesheet" href="/overview/extra.css" />
        <link type="text/css" rel="stylesheet" href="/overview/overview.css" />
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

        <script src="/20/en/load.php?debug=false&amp;lang=en&amp;modules=startup&amp;only=scripts&amp;skin=moodledocsnew&amp;*"></script>
        <script>if ( window.mediaWiki ) {
                mediaWiki.config.set({"wgCanonicalNamespace": "", "wgCanonicalSpecialPageName": false, "wgNamespaceNumber": 0, "wgPageName": "Main_Page", "wgTitle": "Main Page", "wgAction": "view", "wgArticleId": 1, "wgIsArticle": true, "wgUserName": null, "wgUserGroups": ["*"], "wgCurRevisionId": 83364, "wgCategories": [], "wgBreakFrames": false, "wgRestrictionEdit": ["sysop"], "wgRestrictionMove": ["sysop"]});
        }
        </script>
        <script>if ( window.mediaWiki ) {
                mediaWiki.loader.load(["mediawiki.util", "mediawiki.legacy.wikibits", "mediawiki.legacy.ajax"]);
                mediaWiki.loader.go();
        }
        </script>

        <script>if ( window.mediaWiki ) {
                mediaWiki.user.options.set({"ccmeonemails":0,"cols":80,"contextchars":50,"contextlines":5,"date":"default","diffonly":0,"disablemail":0,"disablesuggest":0,"editfont":"default","editondblclick":0,"editsection":1,"editsectiononrightclick":0,"enotifminoredits":0,"enotifrevealaddr":0,"enotifusertalkpages":1,"enotifwatchlistpages":0,"extendwatchlist":0,"externaldiff":0,"externaleditor":0,"fancysig":0,"forceeditsummary":0,"gender":"unknown","hideminor":0,"hidepatrolled":0,"highlightbroken":1,"imagesize":2,"justify":0,"math":1,"minordefault":0,"newpageshidepatrolled":0,"nocache":0,"noconvertlink":0,"norollbackdiff":0,"numberheadings":0,"previewonfirst":0,"previewontop":1,"quickbar":1,"rcdays":7,"rclimit":50,"rememberpassword":0,"rows":25,"searchlimit":20,"showhiddencats":0,"showjumplinks":1,"shownumberswatching":1,"showtoc":1,"showtoolbar":1,"skin":"moodledocsnew","stubthreshold":0,"thumbsize":2,"underline":2,"uselivepreview":0,"usenewrc":0,"watchcreations":0,"watchdefault":0,"watchdeletion":
                0,"watchlistdays":3,"watchlisthideanons":0,"watchlisthidebots":0,"watchlisthideliu":0,"watchlisthideminor":0,"watchlisthideown":0,"watchlisthidepatrolled":0,"watchmoves":0,"wllimit":250,"variant":"en","language":"en","searchNs0":true,"searchNs1":false,"searchNs2":false,"searchNs3":false,"searchNs4":false,"searchNs5":false,"searchNs6":false,"searchNs7":false,"searchNs8":false,"searchNs9":false,"searchNs10":false,"searchNs11":false,"searchNs12":false,"searchNs13":false,"searchNs14":false,"searchNs15":false,"searchNs100":false,"searchNs101":false,"searchNs102":false});;mediaWiki.loader.state({"user.options":"ready"});
        }
        </script><!-- Served in 0.085 secs. -->
        <!-- google analytics start -->
        <script type="text/javascript">var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));</script><script type="text/javascript">try {var pageTracker = _gat._getTracker("UA-72764-4");pageTracker._trackPageview();} catch(err) {}</script>

        <!-- google analytics end -->

    </body>
</html>
<?php

if (isset($wgStylePathOriginal)) $wgStylePath = $wgStylePathOriginal;
