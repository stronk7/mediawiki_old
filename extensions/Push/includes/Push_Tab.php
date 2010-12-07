<?php

/**
 * Statis class with methods to create and handle the push tab.
 *
 * @since 0.1
 *
 * @file Push_Tab.php
 * @ingroup Push
 *
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */

final class PushTab {
	
	/**
	 * Adds an "action" (i.e., a tab) to allow pushing the current article.
	 */
	public static function displayTab( $obj, &$content_actions ) {
		global $wgUser, $egPushTargets;
		
		// Make sure that this is not a special page, the page has contents, and the user can push.
		if (isset( $obj->mTitle ) 
			&& $obj->mTitle->getNamespace() != NS_SPECIAL
			&& $obj->mTitle->exists()
			&& $wgUser->isAllowed( 'push' )
			&& count( $egPushTargets ) > 0 ) {
				
			global $wgRequest;
			
			$content_actions['push'] = array(
				'text' => wfMsg( 'push-tab-text' ),
				'class' => $wgRequest->getVal( 'action' ) == 'push' ? 'selected' : '',
				'href' => $obj->mTitle->getLocalURL( 'action=push' )
			);
		}
		
		return true;
	}

	/**
	 * Function currently called only for the 'Vector' skin, added in
	 * MW 1.16 - will possibly be called for additional skins later
	 */
	public static function displayTab2( $obj, &$links ) {
		global $egPushShowTab;
		
		// The old '$content_actions' array is thankfully just a sub-array of this one
		$views_links = $links[$egPushShowTab ? 'views' : 'actions'];
		self::displayTab( $obj, $views_links );
		$links[$egPushShowTab ? 'views' : 'actions'] = $views_links;
		
		return true;
	}

	/**
	 * Handle actions not known to MediaWiki. If the action is push,
	 * display the push page by calling the displayPushPage method.
	 *  
	 * @param string $action
	 * @param Article $article
	 * 
	 * @return true
	 */
	public static function onUnknownAction( $action, Article $article ) {
		if ( $action == 'push' ) {
			return self::displayPushPage( $article );
		}
		else {
			return true;
		}
	}
	
	/**
	 * Loads the needed JavaScript.
	 * Takes care of non-RL compatibility.
	 * 
	 * @since 0.1
	 */
	protected static function loadJs() {
		global $wgOut;
		
		// For backward compatibility with MW < 1.17.
		if ( is_callable( array( $wgOut, 'addModules' ) ) ) {
			$wgOut->addModules( 'ext.push.tab' );
		}
		else {
			global $egPushScriptPath;
			
			efPushAddJSLocalisation();
			
			$wgOut->includeJQuery();
			
			$wgOut->addHeadItem(
				'ext.push.tab',
				Html::linkedScript( $egPushScriptPath . '/includes/ext.push.tab.js' )
			);
		}		
	}
	
	/**
	 * The function called if we're in index.php (as opposed to one of the
	 * special pages)
	 * 
	 * @since 0.1
	 */
	public static function displayPushPage( Article $article ) {
		global $wgOut, $wgUser, $wgTitle, $wgSitename, $egPushTargets;
		
		$wgOut->setPageTitle( wfMsgExt( 'push-tab-title', 'parsemag', $article->getTitle()->getText() ) );
		
		if ( !$wgUser->isAllowed( 'push' ) ) {
			$wgOut->permissionRequired( 'push' );
			return false;
		}		
		
		$wgOut->addHTML( '<p>' . htmlspecialchars( wfMsg( 'push-tab-desc'  ) ) . '</p>' );
		
		if ( count( $egPushTargets ) == 0 ) {
			$wgOut->addHTML( '<p>' . htmlspecialchars( wfMsg( 'push-tab-no-targets'  ) ) . '</p>' );
			return false;
		}
		
		self::loadJs();
		
		$wgOut->addHTML(
			Html::hidden( 'pageName', $wgTitle->getFullText(), array( 'id' => 'pageName' ) ) .
			Html::hidden( 'siteName', $wgSitename, array( 'id' => 'siteName' ) )
		);
		
		if ( count( $egPushTargets ) == 1 ) {
			self::displayLonelyPushItem();
		}
		else {
			self::displayPushList();
		}
		
		if ( $wgUser->isAllowed( 'pushadmin' ) ) {
			// TODO
			//self::displayNewPushItem();
		}
		
		return false;
	}
	
	/**
	 * Displays a target to push to for when there is only a single target.
	 * 
	 * @since 0.1
	 */	
	protected static function displayLonelyPushItem() {
		global $wgOut, $wgTitle, $egPushTargets;

		$targetNames = array_keys( $egPushTargets );
		
		$wgOut->addHTML(
			'<table><tr><td><b>' . htmlspecialchars( wfMsgExt( 'push-tab-push-to', 'parsemag', $targetNames[0] ) ) . '</b><br /><i>' .
			Html::element(
				'a',
				array( 'href' => $egPushTargets[$targetNames[0]] . '/index.php?title=' . $wgTitle->getFullText(), 'rel' => 'nofollow' ),
				wfMsgExt( 'push-remote-page-link-full', 'parsemag', $wgTitle->getFullText(), $targetNames[0] )
			) . '</i></td><td>&nbsp;&nbsp;&nbsp;' .
			Html::element(
				'button',
				array(
					'class' => 'push-button',
					'pushtarget' => $egPushTargets[$targetNames[0]],
					'style' => 'width: 125px; height: 30px',
				),
				wfMsg( 'push-button-text' )
			) . '</td></tr></table>'
		);
	}
	
	/**
	 * Displays a list with all targets to which can be pushed.
	 * 
	 * @since 0.1
	 */
	protected static function displayPushList() {
		global $wgOut, $egPushTargets, $wgLang;
		
		$items = array(
			Html::rawElement(
				'tr',
				array(),
				Html::element(
					'th',
					array(),
					wfMsg( 'push-targets' )
				) .
				Html::rawElement(
					'th',
					array(),
					wfMsg( 'push-remote-pages' )
				) .
				Html::rawElement(
					'th',
					array( 'width' => '125px' ),
					''
				)
			)
		);
		
		foreach ( $egPushTargets as $name => $url ) {
			$items[] = self::getPushItem( $name, $url );
		}
		
		$items[] = Html::rawElement(
			'tr',
			array(),
			Html::element(
				'th',
				array( 'colspan' => 2, 'style' => 'text-align: left' ),
				wfMsgExt( 'push-targets-total', 'parsemag', $wgLang->formatNum( count( $egPushTargets ) ) )
			) .
			Html::rawElement(
				'th',
				array( 'width' => '125px' ),
				Html::element(
					'button',
					array(
						'id' => 'push-all-button',
						'style' => 'width: 125px; height: 30px',
					),
					wfMsg( 'push-button-all' )
				)				
			)
		);
		
		$wgOut->addHtml(
			Html::rawElement(
				'table',
				array( 'class' => 'wikitable', 'width' => '50%' ),
				implode( "\n", $items )
			)
		);
	}
	
	/**
	 * Returns the HTML for a single push target.
	 * 
	 * @since 0.1
	 * 
	 * @param string $name
	 * @param string $url
	 * 
	 * @return string
	 */
	protected static function getPushItem( $name, $url ) {
		global $wgTitle;
		
		return Html::rawElement(
			'tr',
			array(),
			Html::element(
				'td',
				array(),
				$name
			) .
			Html::rawElement(
				'td',
				array(),
				Html::element(
					'a',
					array( 'href' => $url . '/index.php?title=' . $wgTitle->getFullText(), 'rel' => 'nofollow' ),
					wfMsgExt( 'push-remote-page-link', 'parsemag', $wgTitle->getFullText(), $name ) 
				)
			) .	
			Html::rawElement(
				'td',
				array(),
				Html::element(
					'button',
					array(
						'class' => 'push-button',
						'pushtarget' => $url,
						'style' => 'width: 125px; height: 30px',
					),
					wfMsg( 'push-button-text' )
				)
			)
		);
		
		// TODO: add edit and delete stuff
	}
	
	/**
	 * Displays a form via which a new push item can be added.
	 * 
	 * @since 0.1
	 */
	protected static function displayNewPushItem() {
		global $wgOut;
		
		$wgOut->addHtml(
			Html::element(
				'h2',
				array(),
				wfMsg( 'push-add-target' )
			)
		);
		
		// TODO
	}
	
}