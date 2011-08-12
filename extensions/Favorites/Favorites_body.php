<?php

class Favorites extends QuickTemplate {
 
	var $mTitle;
	
	function execute() {

	}
	
 function favoritesIcon( &$sktemplate, &$links ) {
	
	global $wgUseIconFavorite, $wgRequest, $wgArticle;
			
	//$sktemplate->skin = $sktemplate->data['skin'];
	$action = $wgRequest->getText( 'action' );
	
	// See if this object even exists - if the user can't read it, the object doesn't get created.
	if ($wgArticle) {  
			
			if ( $wgUseIconFavorite ) {
					$class = 'icon ';
					$place = 'views';
				} else {
					$class = '';
					$place = 'actions';
				}
				$favTitle = new FavTitle();
				
				//$mode = $this->mTitle->userIsFavoriting() ? 'unfavorite' : 'favorite';
				$mode = $favTitle->userIsFavoriting() ? 'unfavorite' : 'favorite';
				$links[$place][$mode] = array(
					'class' => $class . ( ( $action == 'favorite' || $action == 'unfavorite' ) ? ' selected' : false ),
					'text' => wfMsg( $mode ), // uses 'favorite' or 'unfavorite' message
					'href' => $wgArticle->mTitle->getLocalUrl( 'action=' . $mode )
				);
				
	
			return false;
	}
	
}

function favoritesTabs($skin, &$content_actions) {
	global $wgUseIconFavorite, $wgRequest, $wgArticle;
	
	$action = $wgRequest->getText( 'action' );
	$favTitle = new FavTitle();
	$mode = $favTitle->userIsFavoriting() ? 'unfavorite' : 'favorite';
	// See if this object even exists - if the user can't read it, the object doesn't get created.
	if ($wgArticle) {
		 $content_actions[$mode] = array (
			'class' => (( $action == 'favorite' || $action == 'unfavorite' ) ? ' selected' : false ),
			'text' => wfMsg( $mode ), // uses 'favorite' or 'unfavorite' message
			'href' => $wgArticle->mTitle->getLocalUrl( 'action=' . $mode )
 		);
	return true;
	}

 
}

}

