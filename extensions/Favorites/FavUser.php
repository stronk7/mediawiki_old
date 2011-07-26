<?php
class FavUser extends User {
	/**
	 * Check the Favorited status of an article.
	 * @param $title \type{Title} Title of the article to look at
	 * @return \bool True if article is Favorited
	 */
	function isFavorited( $title ) {
		global $wgUser;
		$fl = FavoritedItem::fromUserTitle( $wgUser, $title );
		return $fl->isFavorited();
		
	}

	/**
	 * Favorite an article.
	 * @param $title \type{Title} Title of the article to look at
	 */
	function addFavorite( $title ) {
		global $wgUser;
		$fl = FavoritedItem::fromUserTitle( $wgUser, $title );
		$fl->addFavorite();
		$title->invalidateCache();
	}

	/**
	 * Stop Favoriting an article.
	 * @param $title \type{Title} Title of the article to look at
	 */
	function removeFavorite( $title ) {
		global $wgUser;
		$fl = FavoritedItem::fromUserTitle( $wgUser, $title );
		$fl->removeFavorite();
		$title->invalidateCache();
	}
}
