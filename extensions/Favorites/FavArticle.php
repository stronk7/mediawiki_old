<?php


class FavArticle extends Article {

		
	var $mTitle;
	
	
		
	/**
	 * User-interface handler for the "favorite" action
	 */
	public function favorite() {
		global $wgUser, $wgOut, $wgArticle;
		
		$this->mTitle = $wgArticle->mTitle;
		
		if ( $wgUser->isAnon() ) {
			$wgOut->showErrorPage( 'favoritenologin', 'favoritenologintext' );
			return;
		}
		if ( wfReadOnly() ) {
			$wgOut->readOnlyPage();
			return;
		}
		if ( $this->doFavorite() ) {
			$wgOut->setPagetitle( wfMsg( 'addedfavorite' ) );
			$wgOut->setRobotPolicy( 'noindex,nofollow' );
			$wgOut->addWikiMsg( 'addedfavoritetext', $this->mTitle->getPrefixedText() );
		}
		$wgOut->returnToMain( true, $this->mTitle->getPrefixedText() );
	}

	/**
	 * Add this page to $wgUser's favoritelist
	 * @return bool true on successful favorite operation
	 */
	public function doFavorite() {
		global $wgUser;
		$favUser = new FavUser();
		if ( $wgUser->isAnon() ) {
			return false;
		}
		if ( wfRunHooks( 'FavoriteArticle', array( &$wgUser, &$this ) ) ) {
			$favUser->addFavorite( $this->mTitle );
			return wfRunHooks( 'FavoriteArticleComplete', array( &$wgUser, &$this ) );
		}

	}

	/**
	 * User interface handler for the "unfavorite" action.
	 */
	public function unfavorite($action, $wgArticle) {
		global $wgUser, $wgOut, $wgArticle;
		$this->mTitle = $wgArticle->mTitle;
		if ( $wgUser->isAnon() ) {
			$wgOut->showErrorPage( 'favoritenologin', 'favoritenologintext' );
			return;
		}
		if ( wfReadOnly() ) {
			$wgOut->readOnlyPage();
			return;
		}
		if ( $this->doUnfavorite() ) {
			$wgOut->setPagetitle( wfMsg( 'removedfavorite' ) );
			$wgOut->setRobotPolicy( 'noindex,nofollow' );
			$wgOut->addWikiMsg( 'removedfavoritetext', $wgArticle->mTitle->getPrefixedText() );
		}
		$wgOut->returnToMain( true, $wgArticle->mTitle->getPrefixedText() );
		
		return false;
		
	}

	/**
	 * Stop favoriting a page
	 * @return bool true on successful unfavorite
	 */
	public function doUnfavorite() {
		global $wgUser;
		
		$favUser = new FavUser();
		if ( $wgUser->isAnon() ) {
			return false;
		}
		if ( wfRunHooks( 'UnfavoriteArticle', array( &$wgUser, &$this ) ) ) {
			$favUser->removeFavorite( $this->mTitle );
			return wfRunHooks( 'UnfavoriteArticleComplete', array( &$wgUser, &$this ) );
		}
		return false;
	}
	
	
}
