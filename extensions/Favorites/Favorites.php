<?php
/*
Copyright (C) 2011 Jeremy Lemley

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
    
*/

$wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'Favorites',
	'author' => 'Jeremy Lemley',
	'descriptionmsg' => 'favorites-desc',
	'version' => '0.2.6',
	'url' => "http://www.mediawiki.org/wiki/Extension:Favorites",
);
 
global $wgUseIconFavorite, $wgFavoritesPersonalURL;

$dir = dirname(__FILE__) . '/';
$wgExtensionMessagesFiles['Favorites'] = $dir . 'favorites.i18n.php';
$wgAutoloadClasses['Favorites'] = $dir . 'Favorites_body.php';
$wgAutoloadClasses['FavoritelistEditor'] = $dir . 'FavoritelistEditor.php';
$wgAutoloadClasses['FavoritedItem'] = $dir . 'FavoritedItem.php';
$wgAutoloadClasses['SpecialFavoritelist'] = $dir . 'SpecialFavoritelist.php';
$wgAutoloadClasses['FavUser'] = $dir . 'FavUser.php';
$wgAutoloadClasses['FavArticle'] = $dir . 'FavArticle.php';
$wgAutoloadClasses['FavTitle'] = $dir . 'FavTitle.php';
$wgAutoloadClasses['FavParser'] =  $dir . 'FavParser.php';
$wgHooks['LoadExtensionSchemaUpdates'][] = 'FavSQLUpdate';
$wgSpecialPages['Favoritelist'] = 'SpecialFavoritelist';
$wgSpecialPageGroups['Favoritelist'] = 'other';


//tag hook
$wgHooks['ParserFirstCallInit'][] = 'ParseFavorites';


//add the icon / link
$wgHooks['SkinTemplateNavigation'][] = 'fnNavUrls';  // For Vector
$wgHooks['SkinTemplateTabs'][] = 'fnNavTabs';  // For other skins

if ($wgUseIconFavorite){
	//add CSS - only needed for icon display
	$wgHooks['BeforePageDisplay'][] = 'fnAddCss';
}

//add or remove
$wgHooks['UnknownAction'][] = 'fnAction';

//handle page moves and deletes
$wgHooks['TitleMoveComplete'][] = 'fnHookMoveToFav';
$wgHooks['ArticleDeleteComplete'][] = 'fnHookDeleteFav';

// Do we want to display a "My Favorites" link in the personal urls area?
if ($wgFavoritesPersonalURL) {
	$wgHooks['PersonalUrls'][] = 'onAddPersonalUrls';
} 

function onAddPersonalUrls( &$personal_urls, &$wgTitle ) {
      global $wgUser;
 
 //     $skin = $wgUser->getSkin();
 		$title = Title::newFromText( 'Special:Favoritelist' );
      if( $wgUser->getID() ) {
      	 $url['userpage'] = array_shift( $personal_urls );
      	 $url[] = array_shift( $personal_urls );
      	 $url[] = array_shift( $personal_urls );
      	 
         $url[] = array( 'text' => wfMsg( 'myfavoritelist' ),
                         'href' => $title->getLocalURL( )
                               );
            
 	
         $personal_urls = $url + $personal_urls;
      }
 
      return true;
}

function fnAction ($action, $article) {
	$title = new Title();
	$favArticle = new FavArticle($title); 
	
	if ($action == 'unfavorite') {
		$favArticle->unfavorite($action, $article);
		
	} elseif ($action == 'favorite') {
		$favArticle->favorite($action, $article);
	} else {
		return true;
	}
	return false;
}

function fnNavUrls($sktemplate, &$links) {
	$fNav = new Favorites();
	$fNav->favoritesIcon($sktemplate, $links);
	return true;
}

function fnNavTabs( $skin, &$content_actions ){
	$fNav = new Favorites();
	$fNav->favoritesTabs($skin, $content_actions);
	return true;
}


function fnHookMoveToFav(&$title, &$nt, &$wgUser, $pageid, $redirid ) {
	$favTitle = new FavTitle();
	$favTitle->moveToFav($title, $nt, $wgUser, $pageid, $redirid );
	return true;
}

function fnHookDeleteFav(&$article, &$user, $reason, $id ){
	$dbw = wfGetDB( DB_MASTER );
	$dbw->delete('favoritelist', array(
		'fl_title' => $article->mTitle->getDBKey()), 
		$fname = 'Database::delete');
	return true;
}

function fnAddCss (&$out) {
	global $wgExtensionAssetsPath;
	$out->addStyle($wgExtensionAssetsPath . '/Favorites/favorites.css');
	return true;
}

function ParseFavorites(Parser &$parser) {
	
	$parser->setHook( 'favorites', 'favParser_Render' );
	
	return true;
}

 
$markerList = array();
function favParser_Render ( $input, $argv, $parser) {
        # The parser function itself
        # The input parameters are wikitext with templates expanded
        # The output should be wikitext too
        //$output = "Parser Output goes here.";
        
        $favParse = new FavParser();
        $output = $favParse->wfSpecialFavoritelist($argv, $parser);
		$parser->disableCache();
        return $output;
        
}


# Schema updates for update.php
function FavSQLUpdate( $updater = null ) {
        if ( $updater === null ) {
                // <= 1.16 support
                global $wgExtNewTables, $wgExtModifiedFields;
                $wgExtNewTables[] = array(
                        'favoritelist',
                        dirname( __FILE__ ) . '/favorites.sql'
                );

        } else {
                // >= 1.17 support
                $updater->addExtensionUpdate( array( 'addTable', 'favoritelist',
                        dirname( __FILE__ ) . '/favorites.sql', true ) );

        }
        return true;
}