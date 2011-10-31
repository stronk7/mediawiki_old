<?php

class moodle_output {

    protected static $areasbeingprinted = array();

    protected static function area_start($area) {

        self::$areasbeingprinted[] = $area;
        echo "\n<!-- $area start -->\n";
    }

    protected static function area_end() {
        $area = array_pop(self::$areasbeingprinted);
        echo "\n<!-- $area end -->\n\n";
    }



    public static function add_primary_styles(OutputPage $out) {
        global $mdocsver;
        $out->addStyle( 'moodledocs/moodledocs.css', 'screen' );
        $out->addStyle( 'moodledocs/moodledocs.rtl.css', 'screen', '', 'rtl' );
        $out->addStyle( 'moodledocs/menu/menu.css', 'screen');
        $out->addStyle( 'moodledocs/menu/menuprint.css', 'print');

        // Include CSS specific to this docs version
        if (!empty($mdocsver) && preg_match('#^[a-zA-Z0-9\-_]+$#', $mdocsver)) {
            $mdocsvercssfile = sprintf('customisation.%s.css', $mdocsver);
            if (file_exists(dirname(__FILE__).'/'.$mdocsvercssfile)) {
                $out->addStyle( 'moodledocs/'.$mdocsvercssfile );
            }
        }
    }

    public static function add_browser_specific_styles(OutputPage $out) {
        $out->addStyle( 'moodledocs/fixes.IE60.css', 'screen', 'IE 6' );
        $out->addStyle( 'moodledocs/fixes.IE55.css', 'screen', 'IE 5.5000' );
    }

    public static function prepare_output_page(OutputPage $out) {
        global $wgStylePath;

        $out->addScriptFile($wgStylePath . '/moodledocs/menu/sm/c_config.js');
        $out->addScriptFile($wgStylePath . '/moodledocs/menu/sm/c_smartmenus.js');

        if (function_exists('MungeEmail')) {
            $out->mBodytext = MungeEmail($out->mBodytext);
        }
    }

    public static function header() {
        global $wgStylePath;
        self::area_start('header');
        echo '<div id="moodlelogo">';
        echo '<a href="http://moodle.org/">';
        echo "<img class='logo' src='$wgStylePath/moodledocs/images/moodle-logo.gif' border='0' alt='moodlelogo' title='moodle.org' />";
        echo '</a>';
        echo '</div>'; // .moodlelogo
        self::area_end();
    }

    public static function footer() {
        global $wgStylePath;
        self::area_start('final footer');
        echo '<div id="moodlesitelink">';
        echo '<a href="http://moodle.org/">';
        echo '<img width="100" height="30" src="'.$wgStylePath.'/moodledocs/images/moodle-logo-footer.gif" border="0" alt="moodlelogo" title="Return to Moodle.org" />';
        echo '</a>';
        echo '</div>';
        self::area_end();
    }

    public static function google_analtyics_js() {
        self::area_start('google analytics');
        echo '<script type="text/javascript">';
        echo 'var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");';
        echo 'document.write(unescape("%3Cscript src=\'" + gaJsHost + "google-analytics.com/ga.js\' type=\'text/javascript\'%3E%3C/script%3E"));';
        echo '</script>';
        echo '<script type="text/javascript">';
        echo 'try {';
        echo 'var pageTracker = _gat._getTracker("UA-72764-4");';
        echo 'pageTracker._trackPageview();';
        echo '} catch(err) {}</script>';
        self::area_end();
    }

    public static function menu($lang) {
        $basedir = dirname(__FILE__);

        self::area_start('menu');
        echo '<div id="moodlemenu" class="clearfix">';
        $moodlemenu = 'menu-'.$lang.'.html';
        if (file_exists($basedir.'/menu/'.$moodlemenu)) {
            include($basedir.'/menu/'.$moodlemenu);
        } else {
            include($basedir.'/menu/menu-en.html');
        }
        self::google_search();
        echo '</div>'; // #moodlemenu
        self::area_end();
    }

    public static function google_search() {
        echo '<form id="global-search" method="get" action="http://moodle.org/public/search">';
        echo '<div>';
        echo '<input type="hidden" name="cx" value="017878793330196534763:-0qxztjngoy" />';
        echo '<input type="hidden" name="cof" value="FORID:9" />';
        echo '<input type="hidden" name="ie" value="UTF-8" />';
        echo '<input class="input-text" type="text" name="q" size="15" maxlength="255"/>';
        echo '<input class="input-submit" type="submit" name="sa" value="Search moodle.org"/>';
        echo '</div>';
        echo '</form>';
    }

    public static function navbar($scriptpath, $title) {
        global $wgLanguageName;
        self::area_start('navbar');
        echo '<div id="moodlenavbar" class="navbar clearfix" dir="LTR">';
        echo '<div class="breadcrumb"><h2 class="accesshide">You are here</h2>';
        echo '<ul>';
        echo '<li class="first"><a href="http://moodle.org">Home</a></li>';
        echo '<li class="first"><span class="accesshide " >/&nbsp;</span><span class="arrow sep">&#x25BA;</span> <a href="/overview/">Moodle Docs</a></li>';
        echo '<li class="first"><span class="accesshide " >/&nbsp;</span><span class="arrow sep">&#x25BA;</span> <a href="'.htmlspecialchars($scriptpath).'/">'.$wgLanguageName.'</a></li>';
        echo '<li class="first"><span class="accesshide " >/&nbsp;</span><span class="arrow sep">&#x25BA;</span> '.$title.'</li>';
        echo '</ul>';
        echo '</div>'; // breadcrumb
        echo '</div>'; // navbar
        self::area_end();
    }
}