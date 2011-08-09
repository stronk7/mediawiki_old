<?php


class FavTitle extends Title {
	
	
	var $mFav = null;  
	var $mTextform;
	var $mTitle;
	
	function __construct() {}
	
	/**
	 * Is $wgUser watching this page?
	 * @return \type{\bool}
	 */
	public function userIsFavoriting() {
		
		global $wgUser, $wgArticle; 
		$favUser = new FavUser();
		if ($wgArticle) {
			if ( is_null( $this->mFav ) ) {
				if ( NS_SPECIAL == $this->mNamespace || !$wgUser->isLoggedIn()) {
					$this->mFav = false;
				} else {
					$this->mFav = $favUser->isFavorited( $wgArticle->mTitle ); 
				}
			}
		}
		return $this->mFav;
	}
	
	public function moveToFav($title, &$nt ) {
		# Update watchlists
		$oldnamespace = $title->getNamespace() & ~1;
		$newnamespace = $nt->getNamespace() & ~1;
		$oldtitle = $title->getDBkey();
		$newtitle = $nt->getDBkey();

		if( $oldnamespace != $newnamespace || $oldtitle != $newtitle ) {
			FavoritedItem::duplicateEntries( $title, $nt );
		}
	}
}
