<?php

class FavParser {

function wfSpecialFavoritelist() {
	
	global $wgUser, $wgOut, $wgLang, $wgRequest;
	global $wgRCShowFavoritingUsers, $wgEnotifFavoritelist, $wgShowUpdatedMarker;
	$output = '';

	$skin = $wgUser->getSkin();
	$specialTitle = SpecialPage::getTitleFor( 'Favoritelist' );
	//$wgOut->setRobotPolicy( 'noindex,nofollow' );

	# Anons don't get a favoritelist
	if( $wgUser->isAnon() ) {
		//$wgOut->setPageTitle( wfMsg( 'favoritenologin' ) );
		$llink = $skin->linkKnown(
			SpecialPage::getTitleFor( 'Userlogin' ), 
			wfMsg( 'loginreqlink' ),
			array(),
			array( 'returnto' => $specialTitle->getPrefixedText() )
		);
		$output = wfMsgHtml( 'favoritelistanontext', $llink ) ;
		return $output ;
		
	}



	
	$output = $this->viewFavList($wgUser, $output, $wgRequest);
	return $output ;
}

	
	private function viewFavList ($user, $output, $request) {
	global $wgUser, $wgOut, $wgLang, $wgRequest;
	$uid = $wgUser->getId();
	$output = $this->showNormalForm( $output, $user );

	$dbr = wfGetDB( DB_SLAVE, 'favoritelist' );
	

	$favoritelistCount = $dbr->selectField( 'favoritelist', 'COUNT(*)',
		array( 'fl_user' => $uid ), __METHOD__ );
	// Adjust for page X, talk:page X, which are both stored separately,
	// but treated together
	$nitems = floor($favoritelistCount);

	if( $nitems == 0 ) {
		$output = wfmsg('nofavoritelist');
		
	}
	return $output;
}


	/**
	 * Extract a list of titles from a blob of text, returning
	 * (prefixed) strings; unfavoritable titles are ignored
	 *
	 * @param $list mixed
	 * @return array
	 */
	private function extractTitles( $list ) {
		$titles = array();
		if( !is_array( $list ) ) {
			$list = explode( "\n", trim( $list ) );
			if( !is_array( $list ) )
				return array();
		}
		foreach( $list as $text ) {
			$text = trim( $text );
			if( strlen( $text ) > 0 ) {
				$title = Title::newFromText( $text );
				//if( $title instanceof Title && $title->isFavoritable() )
					$titles[] = $title->getPrefixedText();
			}
		}
		return array_unique( $titles );
	}


	/**
	 * Count the number of titles on a user's favoritelist, excluding talk pages
	 *
	 * @param $user User
	 * @return int
	 */
	private function countFavoritelist( $user ) {
		$dbr = wfGetDB( DB_MASTER );
		$res = $dbr->select( 'favoritelist', 'COUNT(*) AS count', array( 'fl_user' => $user->getId() ), __METHOD__ );
		$row = $dbr->fetchObject( $res );
		return ceil( $row->count); // Paranoia
	}

	/**
	 * Prepare a list of titles on a user's favoritelist (excluding talk pages)
	 * and return an array of (prefixed) strings
	 *
	 * @param $user User
	 * @return array
	 */
	private function getFavoritelist( $user ) {
		$list = array();
		$dbr = wfGetDB( DB_MASTER );
		$res = $dbr->select(
			'favoritelist',
			'*',
			array(
				'fl_user' => $user->getId(),
			),
			__METHOD__
		);
		if( $res->numRows() > 0 ) {
			while( $row = $res->fetchObject() ) {
				$title = Title::makeTitleSafe( $row->fl_namespace, $row->fl_title );
				if( $title instanceof Title && !$title->isTalkPage() )
					$list[] = $title->getPrefixedText();
			}
			$res->free();
		}
		return $list;
	}

	/**
	 * Get a list of titles on a user's favoritelist, excluding talk pages,
	 * and return as a two-dimensional array with namespace, title and
	 * redirect status
	 *
	 * @param $user User
	 * @return array
	 */
	private function getFavoritelistInfo( $user ) {
		$titles = array();
		$dbr = wfGetDB( DB_MASTER );
		$uid = intval( $user->getId() );
		list( $favoritelist, $page ) = $dbr->tableNamesN( 'favoritelist', 'page' );
		$sql = "SELECT fl_namespace, fl_title, page_id, page_len, page_is_redirect
			FROM {$favoritelist} LEFT JOIN {$page} ON ( fl_namespace = page_namespace
			AND fl_title = page_title ) WHERE fl_user = {$uid}";
		$res = $dbr->query( $sql, __METHOD__ );
		if( $res && $dbr->numRows( $res ) > 0 ) {
			$cache = LinkCache::singleton();
			while( $row = $dbr->fetchObject( $res ) ) {
				$title = Title::makeTitleSafe( $row->fl_namespace, $row->fl_title );
				if( $title instanceof Title ) {
					// Update the link cache while we're at it
					if( $row->page_id ) {
						$cache->addGoodLinkObj( $row->page_id, $title, $row->page_len, $row->page_is_redirect );
					} else {
						$cache->addBadLinkObj( $title );
					}
					// Ignore non-talk
					if( !$title->isTalkPage() )
						$titles[$row->fl_namespace][$row->fl_title] = $row->page_is_redirect;
				}
			}
		}
		return $titles;
	}

	/**
	 * Show a message indicating the number of items on the user's favoritelist,
	 * and return this count for additional checking
	 *
	 * @param $output OutputPage
	 * @param $user User
	 * @return int
	 */
	private function showItemCount( $output, $user ) {
		if( ( $count = $this->countFavoritelist( $user ) ) > 0 ) {
			//$output->addHTML( wfMsgExt( 'favoritelistedit-numitems', 'parse',
			//	$GLOBALS['wgLang']->formatNum( $count ) ) );
		} else {
			//$output->addHTML( wfMsg( 'favoritelistedit-noitems', 'parse' ) );
		}
		return $count;
	}

	/**
	 * Remove all titles from a user's favoritelist
	 *
	 * @param $user User
//	 */


	/**
	 * Show the standard favoritelist 
	 *
	 * @param $output OutputPage
	 * @param $user User
	 */
	private function showNormalForm( $output, $user ) {
		global $wgUser;
		if( ( $count = $this->showItemCount( $output, $user ) ) > 0 ) {
			$form = $this->buildRemoveList( $user, $wgUser->getSkin() );
			$output .=  $form ;
			return $output;
		}
	}

	/**
	 * Build part of the standard favoritelist 
	 *
	 * @param $user User
	 * @param $skin Skin (really, Linker)
	 */
	private function buildRemoveList( $user, $skin ) {
		$list = "";
		foreach( $this->getFavoritelistInfo( $user ) as $namespace => $pages ) {

			$list .= "<ul>\n";
			foreach( $pages as $dbkey => $redirect ) {
				$title = Title::makeTitleSafe( $namespace, $dbkey );
				$list .= $this->buildRemoveLine( $title, $redirect, $skin );
			}
			$list .= "</ul>\n";
		}
		return $list;
	}



	/**
	 * Build a single list item containing a link 
	 *
	 * @param $title Title
	 * @param $redirect bool
	 * @param $skin Skin
	 * @return string
	 */
	private function buildRemoveLine( $title, $redirect, $skin ) {
		global $wgLang;

		$link = $skin->link( $title );
		if( $redirect )
			$link = '<span class="favoritelistredir">' . $link . '</span>';

		return "<li>" . $link . "</li>\n";
		}

}
/**
 * Count the number of items on a user's favoritelist
 *
 * @param $talk Include talk pages
 * @return integer
 */
function flCountItems( &$user, $talk = true ) {
	$dbr = wfGetDB( DB_SLAVE, 'favoritelist' );

	# Fetch the raw count
	$res = $dbr->select( 'favoritelist', 'COUNT(*) AS count', 
		array( 'fl_user' => $user->mId ), 'flCountItems' );
	$row = $dbr->fetchObject( $res );
	$count = $row->count;
	$dbr->freeResult( $res );

	# Halve to remove talk pages if needed
	if( !$talk )
		$count = floor( $count);

	return( $count );
}
