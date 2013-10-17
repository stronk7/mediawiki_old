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
        $out->addStyle( 'moodledocsnew/main.css', 'screen' );
        $out->addStyle( 'moodledocsnew/main.rtl.css', 'screen', '', 'rtl' );
        $out->addStyle( 'moodledocsnew/menu/moodlemenu.css', 'screen');
        $out->addStyle( 'moodledocsnew/menu/menuprint.css', 'print');

        // Include CSS specific to this docs version
        if (!empty($mdocsver) && preg_match('#^[a-zA-Z0-9\-_]+$#', $mdocsver)) {
            $mdocsvercssfile = sprintf('customisation.%s.css', $mdocsver);
            if (file_exists(dirname(__FILE__).'/'.$mdocsvercssfile)) {
                $out->addStyle( 'moodledocsnew/'.$mdocsvercssfile );
            }
        }
    }

    public static function add_browser_specific_styles(OutputPage $out) {
        $out->addStyle( 'moodledocsnew/fixes.IE70.css', 'screen', 'IE 7' );
        $out->addStyle( 'moodledocsnew/fixes.IE60.css', 'screen', 'IE 6' );
        $out->addStyle( 'moodledocsnew/fixes.IE55.css', 'screen', 'IE 5.5000' );
    }

    public static function prepare_output_page(OutputPage $out = null) {
        global $wgStylePath;

        if (function_exists('MungeEmail')) {
            $out->mBodytext = MungeEmail($out->mBodytext);
        }
    }

    public static function header() {
        global $wgStylePath;
        self::area_start('header');
        echo '<div id="moodlelogo">';
        echo '<a href="http://moodle.org/">';
        echo "<img class='logo' src='$wgStylePath/moodledocsnew/images/moodle-logo.gif'\ alt='moodlelogo' title='moodle.org' />";
        echo '</a>';
        echo '</div>'; // .moodlelogo
        self::area_end();
    }

    public static function footer() {
        global $wgStylePath;
        self::area_start('final footer');
        echo '<div id="moodlesitelink">';
        echo '<a href="http://moodle.org/">';
        echo '<img class="logo" src="'.$wgStylePath.'/moodledocsnew/images/moodle-logo-footer.gif" alt="moodlelogo" title="Return to Moodle.org" />';
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
        echo '<div id="moodle-custommenu">';
        $moodlemenu = 'menu-'.$lang.'.html';
        if (file_exists($basedir.'/menu/'.$moodlemenu)) {
            include($basedir.'/menu/'.$moodlemenu);
        } else {
            include($basedir.'/menu/menu-en.html');
        }
        echo '</div>';
        self::google_search();
        echo '</div>'; // #moodlemenu
        self::area_end();
    }

    public static function google_search() {
        echo '<form id="global-search" method="get" action="https://moodle.org/public/search">';
        echo '<div>';
        echo '<input type="hidden" name="cx" value="017878793330196534763:-0qxztjngoy" />';
        echo '<input type="hidden" name="cof" value="FORID:9" />';
        echo '<input type="hidden" name="ie" value="UTF-8" />';
        echo '<input class="input-text" type="text" name="q" size="15" maxlength="255"/>';
        echo '<input class="input-submit" type="submit" name="sa" value="Search moodle.org"/>';
        echo '</div>';
        echo '</form>';
    }

	/**
	 * Displays the page's navigation bar.
	 *
	 * @param string $scriptpath
	 * @param string $title page title
	 * @param bool $displaydefaultnavbar
	 * @param string $mainpagetitle
	 */
	public static function navbar($scriptpath, $title, $displaydefaultnavbar = true, $mainpagetitle = 'Main page') {

        self::area_start('navbar');
        echo '<div id="moodlenavbar" class="navbar clearfix" dir="LTR">';
        echo '<div class="breadcrumb"><h2 class="accesshide">You are here</h2>';
        if ($displaydefaultnavbar) {
            echo '<ul>';
            echo '<li class="first"><a href="'.htmlspecialchars( $scriptpath ).'/">'.htmlspecialchars( $mainpagetitle ).'</a></li>';
            echo '<li>&nbsp;&#x25BA; '.$title.'</li>';
            echo '</ul>';
        }
        echo '</div>'; // breadcrumb
        echo '</div>'; // navbar
        self::area_end();
    }
}
