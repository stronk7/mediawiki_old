<?php
class SpecialCollabWatchlist extends SpecialPage {
	function __construct() {
		parent::__construct( 'CollabWatchlist' );
	}
 
	function execute( $par ) {
		global $wgUser, $wgOut, $wgLang, $wgRequest;
		global $wgRCShowWatchingUsers, $wgEnotifWatchlist;
		global $wgEnotifWatchlist;
		
		// Add feed links
		$wlToken = $wgUser->getOption( 'watchlisttoken' );
		if (!$wlToken) {
			$wlToken = sha1( mt_rand() . microtime( true ) );
			$wgUser->setOption( 'watchlisttoken', $wlToken );
			$wgUser->saveSettings();
		}
		
		global $wgServer, $wgScriptPath, $wgFeedClasses;
		$apiParams = array( 'action' => 'feedwatchlist', 'allrev' => 'allrev',
							'wlowner' => $wgUser->getName(), 'wltoken' => $wlToken );
		$feedTemplate = wfScript('api').'?';
		
		foreach( $wgFeedClasses as $format => $class ) {
			$theseParams = $apiParams + array( 'feedformat' => $format );
			$url = $feedTemplate . wfArrayToCGI( $theseParams );
			$wgOut->addFeedLink( $format, $url );
		}
	
		$skin = $wgUser->getSkin();
		$specialTitle = SpecialPage::getTitleFor( 'CollabWatchlist' );
		$wgOut->setRobotPolicy( 'noindex,nofollow' );
	
		# Anons don't get a watchlist
		if( $wgUser->isAnon() ) {
			$wgOut->setPageTitle( wfMsg( 'watchnologin' ) );
			$llink = $skin->linkKnown(
				SpecialPage::getTitleFor( 'Userlogin' ), 
				wfMsgHtml( 'loginreqlink' ),
				array(),
				array( 'returnto' => $specialTitle->getPrefixedText() )
			);
			$wgOut->addHTML( wfMsgWikiHtml( 'watchlistanontext', $llink ) );
			return;
		}
	
		$wgOut->setPageTitle( wfMsg( 'collabwatchlist' ) );
	
		$listIdsAndNames = CollabWatchlistChangesList::getCollabWatchlistIdAndName($wgUser->getId());
		$sub = wfMsgExt(
			'watchlistfor2',
			array( 'parseinline', 'replaceafter' ),
			$wgUser->getName(),
			''
		);
		$sub .= '<br />' . CollabWatchlistEditor::buildTools( $listIdsAndNames, $wgUser->getSkin() );
		$wgOut->setSubtitle( $sub );
	
		$uid = $wgUser->getId();
		
		// The filter form has one checkbox for each tag, build an array
		$postValues = $wgRequest->getValues();
		$tagFilter = array();
		foreach( $postValues as $key => $value ) {
			if( stripos($key, 'collaborative-watchlist-filtertag-') === 0 ) {
				$tagFilter[] = $postValues[$key];
			}
		}
		// Alternative syntax for requests from links (show / hide ...)
		if( empty($tagFilter) ) {
			$tagFilter = explode('|', $wgRequest->getVal('filterTags'));
		}
	
		$defaults = array(
		/* float */ 'days'      => floatval( $wgUser->getOption( 'watchlistdays' ) ), /* 3.0 or 0.5, watch further below */
		/* bool  */ 'hideMinor' => (int)$wgUser->getBoolOption( 'watchlisthideminor' ),
		/* bool  */ 'hideBots'  => (int)$wgUser->getBoolOption( 'watchlisthidebots' ),
		/* bool  */ 'hideAnons' => (int)$wgUser->getBoolOption( 'watchlisthideanons' ),
		/* bool  */ 'hideLiu'   => (int)$wgUser->getBoolOption( 'watchlisthideliu' ),
		/* bool  */ 'hideListUser'   => (int)$wgUser->getBoolOption( 'collabwatchlisthidelistuser' ),
		/* bool  */ 'hidePatrolled' => (int)$wgUser->getBoolOption( 'watchlisthidepatrolled' ),
		/* bool  */ 'hideOwn'   => (int)$wgUser->getBoolOption( 'watchlisthideown' ),
		/* int   */ 'collabwatchlist' => 0,
		/* ?     */ 'globalwatch' => 'all',
		/* ?     */ 'invert'    => false,
		/* ?     */ 'invertTags'=> false,
		/* ?     */ 'filterTags'=> '',
		);
	
		extract($defaults);
	
		# Extract variables from the request, falling back to user preferences or
		# other default values if these don't exist
		$prefs['days']      = floatval( $wgUser->getOption( 'watchlistdays' ) );
		$prefs['hideminor'] = $wgUser->getBoolOption( 'watchlisthideminor' );
		$prefs['hidebots']  = $wgUser->getBoolOption( 'watchlisthidebots' );
		$prefs['hideanons'] = $wgUser->getBoolOption( 'watchlisthideanon' );
		$prefs['hideliu']   = $wgUser->getBoolOption( 'watchlisthideliu' );
		$prefs['hideown' ]  = $wgUser->getBoolOption( 'watchlisthideown' );
		$prefs['hidelistuser'] = $wgUser->getBoolOption( 'collabwatchlisthidelistuser' );
		$prefs['hidepatrolled' ] = $wgUser->getBoolOption( 'watchlisthidepatrolled' );
		$prefs['invertTags' ] = $wgUser->getBoolOption( 'collabwatchlistinverttags' );
		$prefs['filterTags' ] = $wgUser->getOption( 'collabwatchlistfiltertags' );
		
		# Get query variables
		$days      = $wgRequest->getVal(  'days'     , $prefs['days'] );
		$hideMinor = $wgRequest->getBool( 'hideMinor', $prefs['hideminor'] );
		$hideBots  = $wgRequest->getBool( 'hideBots' , $prefs['hidebots'] );
		$hideAnons = $wgRequest->getBool( 'hideAnons', $prefs['hideanons'] );
		$hideLiu   = $wgRequest->getBool( 'hideLiu'  , $prefs['hideliu'] );
		$hideOwn   = $wgRequest->getBool( 'hideOwn'  , $prefs['hideown'] );
		$hideListUser = $wgRequest->getBool( 'hideListUser', $prefs['hidelistuser'] );
		$hidePatrolled = $wgRequest->getBool( 'hidePatrolled'  , $prefs['hidepatrolled'] );
		$filterTags = implode('|', $tagFilter);
		$invertTags = $wgRequest->getBool( 'invertTags'  , $prefs['invertTags'] );
		
		# Get collabwatchlist value, if supplied, and prepare a WHERE fragment
		$collabWatchlist = $wgRequest->getIntOrNull( 'collabwatchlist' );
		$invert = $wgRequest->getBool( 'invert' );
		if( !is_null( $collabWatchlist ) && $collabWatchlist !== 'all') {
			$collabWatchlist = intval( $collabWatchlist );
		} else {
			$collabWatchlist = 0;
			return;
		}
		if(array_key_exists($collabWatchlist, $listIdsAndNames)) {
			$wgOut->addHTML( Xml::element('h2', null, $listIdsAndNames[$collabWatchlist]) );
		}
		
		if( ( $mode = CollabWatchlistEditor::getMode( $wgRequest, $par ) ) !== false ) {
			$editor = new CollabWatchlistEditor();
			$editor->execute( $collabWatchlist, $listIdsAndNames, $wgOut, $wgRequest, $mode );
			return;
		}
	
		$dbr = wfGetDB( DB_SLAVE, 'watchlist' );
		$recentchanges = $dbr->tableName( 'recentchanges' );
	
		$nitems = $dbr->selectField( 'collabwatchlistcategory', 'COUNT(*)',
			$collabWatchlist == 0 ? array() : array('rl_id' => $collabWatchlist
			), __METHOD__ );
		if( $nitems == 0 ) {
			$wgOut->addWikiMsg( 'nowatchlist' );
			return;
		}
	
		// Dump everything here
		$nondefaults = array();
	
		wfAppendToArrayIfNotDefault( 'days'     , $days          , $defaults, $nondefaults);
		wfAppendToArrayIfNotDefault( 'hideMinor', (int)$hideMinor, $defaults, $nondefaults );
		wfAppendToArrayIfNotDefault( 'hideBots' , (int)$hideBots , $defaults, $nondefaults);
		wfAppendToArrayIfNotDefault( 'hideAnons', (int)$hideAnons, $defaults, $nondefaults );
		wfAppendToArrayIfNotDefault( 'hideLiu'  , (int)$hideLiu  , $defaults, $nondefaults );
		wfAppendToArrayIfNotDefault( 'hideOwn'  , (int)$hideOwn  , $defaults, $nondefaults);
		wfAppendToArrayIfNotDefault( 'hideListUser', (int)$hideListUser, $defaults, $nondefaults);
		wfAppendToArrayIfNotDefault( 'collabwatchlist', $collabWatchlist, $defaults, $nondefaults);
		wfAppendToArrayIfNotDefault( 'hidePatrolled', (int)$hidePatrolled, $defaults, $nondefaults );
		wfAppendToArrayIfNotDefault( 'filterTags', $filterTags   , $defaults, $nondefaults );
		wfAppendToArrayIfNotDefault( 'invertTags', $invertTags   , $defaults, $nondefaults );
		wfAppendToArrayIfNotDefault( 'invert', $invert   , $defaults, $nondefaults );
		
		if( $days <= 0 ) {
			$andcutoff = '';
		} else {
			$andcutoff = "rc_timestamp > '".$dbr->timestamp( time() - intval( $days * 86400 ) )."'";
		}
	
		# If the watchlist is relatively short, it's simplest to zip
		# down its entirety and then sort the results.
	
		# If it's relatively long, it may be worth our while to zip
		# through the time-sorted page list checking for watched items.
	
		# Up estimate of watched items by 15% to compensate for talk pages...
	
		# Toggles
		$andHideOwn   = $hideOwn   ? "rc_user != $uid" : '';
		$andHideBots  = $hideBots  ? "rc_bot = 0" : '';
		$andHideMinor = $hideMinor ? "rc_minor = 0" : '';
		$andHideLiu   = $hideLiu   ? "rc_user = 0" : '';
		$andHideAnons = $hideAnons ? "rc_user != 0" : '';
		$andHideListUser = $hideListUser ? $this->wlGetFilterClauseListUser($collabWatchlist) : '';
		$andHidePatrolled = $wgUser->useRCPatrol() && $hidePatrolled ? "rc_patrolled != 1" : '';
	
		# Toggle watchlist content (all recent edits or just the latest)
		if( $wgUser->getOption( 'extendwatchlist' )) {
			$andLatest='';
	 		$limitWatchlist = intval( $wgUser->getOption( 'wllimit' ) );
			$usePage = false;
		} else {
		# Top log Ids for a page are not stored
			$andLatest = 'rc_this_oldid=page_latest OR rc_type=' . RC_LOG;
			$limitWatchlist = 0;
			$usePage = true;
		}
	
		# Show a message about slave lag, if applicable
		if( ( $lag = $dbr->getLag() ) > 0 )
			$wgOut->showLagWarning( $lag );
	
		# Create output form
		$form  = Xml::fieldset( wfMsg( 'watchlist-options' ), false, array( 'id' => 'mw-watchlist-options' ) );
	
		# Show watchlist header
		$form .= wfMsgExt( 'collabwatchlist-details', array( 'parseinline' ), $wgLang->formatNum( $nitems ) );
	
		if( $wgUser->getOption( 'enotifwatchlistpages' ) && $wgEnotifWatchlist) {
			$form .= wfMsgExt( 'wlheader-enotif', 'parse' ) . "\n";
		}
		$form .= '<hr />';
		
		$tables = array( 'recentchanges', 'categorylinks' );
		$fields = array( "{$recentchanges}.*" );
		$categoryClause = $this->wlGetFilterClauseForCollabWatchlistIds($collabWatchlist, 'cl_to', 'rc_cur_id');
		// If this collaborative watchlist does not contain any categories, add a clause which gives
		// us an empty result
		$conds = isset($categoryClause) ? array($categoryClause) : array('false');
		$join_conds = array(
			'categorylinks' => array('LEFT OUTER JOIN', "rc_cur_id=cl_from"),
		);
		if( !empty($tagFilter) ) {
			// The tag filter causes a query runtime of O(MxN), where M is relative to the number
			// of recentchanges we select (from a table which is purged periodically, limited to 250)
			// and N is relative the number of change_tag entries for a recentchange. Doing it 
			// the other way around (selecting from change_tag first, is probably slower, as the
			// change_tag table is never purged.
			// Using the tag_summary table for filtering is difficult, at least I have been unable to
			// find a common SQL compliant way for using regular expressions which works across Postgre / Mysql
			// Furthermore, ChangeTags does not seem to prevent tags containing ',' from being set,
			// which renders tag_summary quite unusable
			if( $invertTags ) {
				$filter = 'EXISTS ';
			} else {
				$filter = 'NOT EXISTS ';
			}
			$filter .= '(select ct_rc_id from change_tag 
					JOIN collabwatchlistrevisiontag ON collabwatchlistrevisiontag.ct_id = change_tag.ct_id 
					WHERE ct_rc_id = recentchanges.rc_id AND ct_tag ';
			if( count($tagFilter) > 1 )
				$filter .= 'IN (' . $dbr->makeList($tagFilter) . '))';
			else
				$filter .= ' = ' . $dbr->addQuotes(current($tagFilter)) . ')';
			$conds[] = $filter;
		}
		$options = array( 'ORDER BY' => 'rc_timestamp DESC' );
		if( $limitWatchlist ) {
			$options['LIMIT'] = $limitWatchlist;
		}
		if( $andcutoff ) $conds[] = $andcutoff;
		if( $andLatest ) $conds[] = $andLatest;
		if( $andHideOwn ) $conds[] = $andHideOwn;
		if( $andHideBots ) $conds[] = $andHideBots;
		if( $andHideMinor ) $conds[] = $andHideMinor;
		if( $andHideLiu ) $conds[] = $andHideLiu;
		if( $andHideAnons ) $conds[] = $andHideAnons;
		if( $andHideListUser ) $conds[] = $andHideListUser;
		if( $andHidePatrolled ) $conds[] = $andHidePatrolled;
	
		$rollbacker = $wgUser->isAllowed('rollback');
		if ( $usePage || $rollbacker ) {
			$tables[] = 'page';
			$join_conds['page'] = array('LEFT JOIN','rc_cur_id=page.page_id');
			if ($rollbacker) 
				$fields[] = 'page_latest';
		}
	
		ChangeTags::modifyDisplayQuery( $tables, $fields, $conds, $join_conds, $options, '' );
		wfRunHooks('SpecialCollabWatchlistQuery', array(&$conds,&$tables,&$join_conds,&$fields) );
		
		$res = $dbr->select( $tables, $fields, $conds, __METHOD__, $options, $join_conds );
		$numRows = $dbr->numRows( $res );
	
		/* Start bottom header */
	
		$wlInfo = '';
		if( $days >= 1 ) {
			$wlInfo = wfMsgExt( 'rcnote', 'parseinline',
					$wgLang->formatNum( $numRows ),
					$wgLang->formatNum( $days ),
					$wgLang->timeAndDate( wfTimestampNow(), true ),
					$wgLang->date( wfTimestampNow(), true ),
					$wgLang->time( wfTimestampNow(), true )
				) . '<br />';
		} elseif( $days > 0 ) {
			$wlInfo = wfMsgExt( 'wlnote', 'parseinline',
					$wgLang->formatNum( $numRows ),
					$wgLang->formatNum( round($days*24) )
				) . '<br />';
		}
	
		$cutofflinks = "\n" . $this->wlCutoffLinks( $days, 'CollabWatchlist', $nondefaults ) . "<br />\n";
	
		$thisTitle = SpecialPage::getTitleFor( 'CollabWatchlist' );
	
		# Spit out some control panel links
		$links[] = $this->wlShowHideLink( $nondefaults, 'rcshowhideminor', 'hideMinor', $hideMinor );
		$links[] = $this->wlShowHideLink( $nondefaults, 'rcshowhidebots', 'hideBots', $hideBots );
		$links[] = $this->wlShowHideLink( $nondefaults, 'rcshowhideanons', 'hideAnons', $hideAnons );
		$links[] = $this->wlShowHideLink( $nondefaults, 'rcshowhideliu', 'hideLiu', $hideLiu );
		$links[] = $this->wlShowHideLink( $nondefaults, 'rcshowhidemine', 'hideOwn', $hideOwn );
		$links[] = $this->wlShowHideLink( $nondefaults, 'collabwatchlistshowhidelistusers', 'hideListUser', $hideListUser );
		
		if( $wgUser->useRCPatrol() ) {
			$links[] = $this->wlShowHideLink( $nondefaults, 'rcshowhidepatr', 'hidePatrolled', $hidePatrolled );
		}
	
		# Namespace filter and put the whole form together.
		$form .= $wlInfo;
		$form .= $cutofflinks;
		$form .= $wgLang->pipeList( $links );
		$form .= Xml::openElement( 'form', array( 'method' => 'get', 'action' => $thisTitle->getLocalUrl() ) );
		$form .= '<hr /><p>';
		$tagsAndInfo = CollabWatchlistChangesList::getValidTagsAndInfo(array_keys($listIdsAndNames));
		if(count($tagsAndInfo) > 0) {
			$form .= wfMsg('collabwatchlistfiltertags') . ':&nbsp;&nbsp;';
		}
		foreach( $tagsAndInfo as $tag => $tagInfo ) {
			$tagAttr = array(
				'name' => 'collaborative-watchlist-filtertag-' . $tag,
				'type' => 'checkbox',
				'value' => $tag);
			if (in_array($tag, $tagFilter) ) {
				$tagAttr['checked'] = 'checked';
			}
			$form .= Xml::element('input', $tagAttr) . '&nbsp;' . Xml::label( $tag, 'collaborative-watchlist-filtertag-' . $tag ) . '&nbsp;';
		}
		if(count($tagsAndInfo) > 0) {
			$form .= '<br />';
		}
		$form .= Xml::checkLabel( wfMsg('collabwatchlistinverttags'), 'invertTags', 'nsinvertTags', $invertTags ) . '<br />';
		$form .= CollabWatchlistChangesList::collabWatchlistSelector( $listIdsAndNames, $collabWatchlist, '', 'collabwatchlist', wfMsg( 'collabwatchlist' )) . '&nbsp;';
		$form .= Xml::checkLabel( wfMsg('invert'), 'invert', 'nsinvert', $invert ) . '&nbsp;';
		$form .= Xml::submitButton( wfMsg( 'allpagessubmit' ) ) . '</p>';
		$form .= Html::hidden( 'days', $days );
		if( $hideMinor )
			$form .= Html::hidden( 'hideMinor', 1 );
		if( $hideBots )
			$form .= Html::hidden( 'hideBots', 1 );
		if( $hideAnons )
			$form .= Html::hidden( 'hideAnons', 1 );
		if( $hideLiu )
			$form .= Html::hidden( 'hideLiu', 1 );
		if( $hideOwn )
			$form .= Html::hidden( 'hideOwn', 1 );
		if( $hideListUser )
			$form .= Html::hidden( 'hideListUser', 1 );
		if( $wgUser->useRCPatrol() )
			if( $hidePatrolled )
				$form .= Html::hidden( 'hidePatrolled', 1);
		$form .= Xml::closeElement( 'form' );
		$form .= Xml::closeElement( 'fieldset' );
		$wgOut->addHTML( $form );
	
		# If there's nothing to show, stop here
		if( $numRows == 0 ) {
			$wgOut->addWikiMsg( 'watchnochange' );
			return;
		}
	
		/* End bottom header */
	
		/* Do link batch query */
		$linkBatch = new LinkBatch;
		while ( $row = $dbr->fetchObject( $res ) ) {
			$userNameUnderscored = str_replace( ' ', '_', $row->rc_user_text );
			if ( $row->rc_user != 0 ) {
				$linkBatch->add( NS_USER, $userNameUnderscored );
			}
			$linkBatch->add( NS_USER_TALK, $userNameUnderscored );
	
			$linkBatch->add( $row->rc_namespace, $row->rc_title );
		}
		$linkBatch->execute();
		$dbr->dataSeek( $res, 0 );
	
		$list = CollabWatchlistChangesList::newFromUser( $wgUser );
		$list->setWatchlistDivs();
		
		$s = $list->beginRecentChangesList();
		$counter = 1;
		while ( $obj = $dbr->fetchObject( $res ) ) {
			# Make RC entry
			$rc = RecentChange::newFromRow( $obj );
			$rc->counter = $counter++;

			if ($wgRCShowWatchingUsers && $wgUser->getOption( 'shownumberswatching' )) {
				$rc->numberofWatchingusers = $dbr->selectField( 'watchlist',
					'COUNT(*)',
					array(
						'wl_namespace' => $obj->rc_namespace,
						'wl_title' => $obj->rc_title,
					),
					__METHOD__ );
			} else {
				$rc->numberofWatchingusers = 0;
			}
			
			$tags = $this->wlTagsForRevision($obj->rc_this_oldid, array($collabWatchlist), $invert);
//			if( isset($tags) ) {
//				// Filter recentchanges which contain unwanted tags
//				$tagNames = array();
//				foreach($tags as $tagInfo) {
//					$tagNames[] = $tagInfo['ct_tag'];
//				}
//				$unwantedTagsFound = array_intersect($tagFilter, $tagNames);
//				if( !empty($unwantedTagsFound) )
//					continue;
//			}
			$attrs = $rc->getAttributes();
			$attrs['collabwatchlist_tags'] = $tags;
			$rc->setAttribs($attrs);
	
			$s .= $list->recentChangesLine( $rc, false, $counter );
		}
		$s .= $list->endRecentChangesList();
	
		$dbr->freeResult( $res );
		$wgOut->addHTML( $s );
	}
	
	function wlShowHideLink( $options, $message, $name, $value ) {
		global $wgUser;
	
		$showLinktext = wfMsgHtml( 'show' );
		$hideLinktext = wfMsgHtml( 'hide' );
		$title = SpecialPage::getTitleFor( 'CollabWatchlist' );
		$skin = $wgUser->getSkin();
	
		$label = $value ? $showLinktext : $hideLinktext;
		$options[$name] = 1 - (int) $value;
	
		return wfMsgHtml( $message, $skin->linkKnown( $title, $label, array(), $options ) );
	}
	
	
	function wlHoursLink( $h, $page, $options = array() ) {
		global $wgUser, $wgLang, $wgContLang;
	
		$sk = $wgUser->getSkin();
		$title = Title::newFromText( $wgContLang->specialPage( $page ) );
		$options['days'] = ($h / 24.0);
	
		$s = $sk->linkKnown(
			$title,
			$wgLang->formatNum( $h ),
			array(),
			$options
		);
	
		return $s;
	}
	
	function wlDaysLink( $d, $page, $options = array() ) {
		global $wgUser, $wgLang, $wgContLang;
	
		$sk = $wgUser->getSkin();
		$title = Title::newFromText( $wgContLang->specialPage( $page ) );
		$options['days'] = $d;
		$message = ($d ? $wgLang->formatNum( $d ) : wfMsgHtml( 'watchlistall2' ) );
	
		$s = $sk->linkKnown(
			$title,
			$message,
			array(),
			$options
		);
	
		return $s;
	}
	
	/**
	 * Returns html
	 */
	function wlCutoffLinks( $days, $page = 'CollabWatchlist', $options = array() ) {
		global $wgLang;
	
		$hours = array( 1, 2, 6, 12 );
		$days = array( 1, 3, 7 );
		$i = 0;
		foreach( $hours as $h ) {
			$hours[$i++] = $this->wlHoursLink( $h, $page, $options );
		}
		$i = 0;
		foreach( $days as $d ) {
			$days[$i++] = $this->wlDaysLink( $d, $page, $options );
		}
		return wfMsgExt('wlshowlast',
			array('parseinline', 'replaceafter'),
			$wgLang->pipeList( $hours ),
			$wgLang->pipeList( $days ),
			$this->wlDaysLink( 0, $page, $options ) );
	}
	
	/**
	 * Count the number of items on a user's watchlist
	 *
	 * @param $talk Include talk pages
	 * @return integer
	 */
	function wlCountItems( &$user, $talk = true ) {
		$dbr = wfGetDB( DB_SLAVE, 'watchlist' );
	
		# Fetch the raw count
		$res = $dbr->select( 'watchlist', 'COUNT(*) AS count', 
			array( 'wl_user' => $user->mId ), 'wlCountItems' );
		$row = $dbr->fetchObject( $res );
		$count = $row->count;
		$dbr->freeResult( $res );
	
		# Halve to remove talk pages if needed
		if( !$talk )
			$count = floor( $count / 2 );
	
		return( $count );
	}
	
	/** Returns an array of maps representing collab watchlist tags. The following fields are present
	 * in each map:
	 * - rl_id Id of the collaborative watchlist
	 * - ct_tag Name of the tag
	 * - collabwatchlistrevisiontag.user_id User which set the tag
	 * - user_name Username of the user which set the tag
	 * - rrt_comment Collabwatchlist tag comment
	 * @param $rev_id
	 * @param $rl_ids
	 * @param $invert
	 * @return unknown_type
	 */
	function wlTagsForRevision( $rev_id, $rl_ids = array(), $invert = false, $filterTags = array() ) {
		// Some DB stuff
		$dbr = wfGetDB( DB_SLAVE );
		$cond = array();
		if( isset($rl_ids) && !(count($rl_ids) == 1 && $rl_ids[0] == 0)) {
			if( $invert ) {
				$cond[] = "rl_id NOT IN (" . $dbr->makeList($rl_ids) . ")";
			}else {
				$cond = array("rl_id" => $rl_ids);
			}
		}
		if( isset($filterTags) && count($filterTags) > 0) {
			$cond[] = "ct_tag not in (" . $dbr->makeList($filterTags) . ")";
		}
		//$table, $vars, $conds='', $fname = 'Database::select', $options = array(), $join_conds = array()
		$res = $dbr->select( array('change_tag', 'collabwatchlistrevisiontag', 'user'), # Tables
			array('rl_id', 'ct_tag', 'collabwatchlistrevisiontag.user_id', 'user_name', 'rrt_comment'), # Fields
			array('ct_rev_id' => $rev_id) + $cond,  # Conditions
			__METHOD__, array(),
			 # Join conditions
			array(	'collabwatchlistrevisiontag' => array('JOIN', 'change_tag.ct_id = collabwatchlistrevisiontag.ct_id'),
					'user' => array('JOIN', 'collabwatchlistrevisiontag.user_id = user.user_id')
			)
		);
		$tags = array();
		while( $row = $res->fetchObject() ) {
			$tags[] = get_object_vars( $row );
		}
		$dbr->freeResult( $res );
		return $tags;
	}
	
	function wlGetFilterClauseForCollabWatchlistIds($rl_ids, $catNameCol, $pageIdCol) {
		$excludedCatPageIds = array();
		$includedCatPageIds = array();
		$includedPageIds = array();
		$dbr = wfGetDB( DB_SLAVE );
		$res = $dbr->select( array('collabwatchlist', 'collabwatchlistcategory', 'page' ), # Tables
			array('cat_page_id', 'page_title', 'page_namespace', 'subtract'), # Fields
			$rl_ids != 0 ? array('collabwatchlist.rl_id' => $rl_ids) : array(),  # Conditions
			__METHOD__, array(),
			 # Join conditions
			array(	'collabwatchlistcategory' => array('JOIN', 'collabwatchlist.rl_id = collabwatchlistcategory.rl_id'),
					'page' => array('JOIN', 'page.page_id = collabwatchlistcategory.cat_page_id') )
		);
		while( $row = $res->fetchObject() ) {
			if($row->page_namespace == NS_CATEGORY) {
				if($row->subtract) {
					$excludedCatPageIds[$row->cat_page_id] = $row->page_title;
				}else {
					$includedCatPageIds[$row->cat_page_id] = $row->page_title;
				}
			}else {
				$includedPageIds[$row->cat_page_id] = $row->page_title;
			}
		}
		$dbr->freeResult( $res );
		
		if($includedCatPageIds) {
			$catTree = new CategoryTreeManip();
			$catTree->initialiseFromCategoryNames(array_values($includedCatPageIds));
			$catTree->disableCategoryIds(array_keys($excludedCatPageIds));
			$enabledCategoryNames = $catTree->getEnabledCategoryNames();
			if(empty($enabledCategoryNames))
				return;
			$collabWatchlistClause = '(' . $catNameCol . " IN (" . implode(',', $this->addQuotes($dbr, $enabledCategoryNames)) . ") ";
			if(!empty($includedPageIds)) {
				$collabWatchlistClause .= ' OR ' . $pageIdCol . ' IN (' . implode(',', $this->addQuotes($dbr, array_keys($includedPageIds))) . ')';
			}
			$collabWatchlistClause .= ')';
		}else if(!empty($includedPageIds)) {
			$collabWatchlistClause = $pageIdCol . ' IN (' . implode(',', $this->addQuotes($dbr, array_keys($includedPageIds))) . ')';
		}
		return $collabWatchlistClause;
	}
	
	function wlGetFilterClauseListUser($rl_id) {
		$excludedUserIds = array();
		$dbr = wfGetDB( DB_SLAVE );
		$res = $dbr->select( 'collabwatchlistuser', # Tables
			'user_id', # Fields
			array('collabwatchlistuser.rl_id' => $rl_id)  # Conditions
		);
		$clause = '';
		while( $row = $res->fetchObject() ) {
			$excludedUserIds[] = $row->user_id;
		}
		if($res->numRows() > 0) {
			$clause = '( rc_user NOT IN (';
			$clause .= implode(',', $this->addQuotes($dbr, $excludedUserIds)) . ') )';
		}
		$dbr->freeResult( $res );
		return $clause;
	}
	
	public static function addQuotes($db, $strings) {
		$result = array();
		foreach($strings as $string) {
			$result[] = $db->addQuotes($string);
		}
		return $result;
	}
}
