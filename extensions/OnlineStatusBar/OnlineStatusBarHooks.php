<?php

/**
 * Hooks for OnlineStatusBar
 *
 * @group Extensions
 */
class OnlineStatusBarHooks {
	/**
	 * @param DatabaseUpdater|null $updater
	 * @return bool
	 */
	public static function ckSchema( $updater = null ) {
		if ( $updater !== null ) {
			$updater->addExtensionUpdate( array( 'addtable', 'online_status', dirname( __FILE__ ) . '/OnlineStatusBar.sql', true ) );
		} else {
			global $wgExtNewTables;
			$wgExtNewTables[] = array(
				'online_status', dirname( __FILE__ ) . '/OnlineStatusBar.sql' );
		}
		return true;
	}

	/**
	 * @param $user User
	 * @param $inject_html string
	 * @param $old_name string
	 * @return bool
	 */
	public static function logout( &$user, &$inject_html, $old_name ) {
		OnlineStatusBar::purge( $old_name );
		OnlineStatusBar_StatusCheck::deleteStatus( $old_name );
		return true;
	}

	/**
	 * Called everytime on login
	 * @return bool
	 */
	public static function updateStatus() {
		global $wgUser;
		// Purge user page (optional)
		OnlineStatusBar::purge( $wgUser );
		// Update status
		OnlineStatusBar_StatusCheck::updateStatus();
		return true;
	}

	/**
	 * Creates a bar
	 * @param $article Article
	 * @param $outputDone bool
	 * @param $pcache string
	 * @return bool
	 */
	public static function renderBar( &$article, &$outputDone, &$pcache ) {
		$context = $article->getContext();
		
		// Update status of each user who wants to be tracked
		OnlineStatusBar_StatusCheck::updateStatus();

		// Performace fix
		$title = $article->getTitle();
		if ( $title->getNamespace() != NS_USER && $title->getNamespace() != NS_USER_TALK ) {
			return true;
		}

		// Retrieve status of user parsed from title
		$result = OnlineStatusBar::getUserInfoFromTitle( $title );
		// In case that status can't be parsed we check if it isn't anon
		if ( $result === false && User::isIP ( $title->getBaseText() ) ) {
			$result = OnlineStatusBar::getAnonFromTitle( $title ); 
		}

		// In case we were unable to get a status let's quit
		if ( $result === false ) {
			return true;
		}

		/** @var $user User */
		list( $status, $user ) = $result;

		// Don't display status of those who don't want to show bar but only use magic
		if ( $user->getOption( 'OnlineStatusBar_hide' ) == true ) {
			return true;
		}

		$modetext = wfMessage( 'onlinestatusbar-status-' . $status )->toString();
		$image = OnlineStatusBar::getImageHtml( $status, $modetext );
		$text = wfMessage( 'onlinestatusbar-line', $user->getName() )
				->rawParams( $image )->params( $modetext )->escaped();
		$context->getOutput()->addHtml( OnlineStatusBar::getStatusBarHtml( $text ) );

		return true;
	}

	/**
	 * Insert user options
	 * @param $user User
	 * @param $preferences array
	 * @return bool
	 */
	public static function preferencesHook( User $user, array &$preferences ) {
		global $wgOnlineStatusBarDefaultOnline, $wgOnlineStatusBarDefaultEnabled, $wgOnlineStatusBarModes;
		$preferences['OnlineStatusBar_active'] = array( 'type' => 'toggle', 'label-message' => 'onlinestatusbar-used', 'section' => 'misc/onlinestatus' );
		$preferences['OnlineStatusBar_hide'] = array( 'type' => 'toggle', 'label-message' => 'onlinestatusbar-hide', 'section' => 'misc/onlinestatus' );
		$preferences['OnlineStatusBar_autoupdate'] = array( 'type' => 'toggle', 'label-message' => 'onlinestatusbar-purge', 'section' => 'misc/onlinestatus' );
		$preferences['OnlineStatusBar_status'] = array( 'type' => 'radio', 'label-message' => 'onlinestatusbar-status', 'section' => 'misc/onlinestatus',
			'options' => array(
				wfMessage( 'onlinestatusbar-status-online' )->escaped() => 'online',
				wfMessage( 'onlinestatusbar-status-busy' )->escaped() => 'busy',
				wfMessage( 'onlinestatusbar-status-away' )->escaped() => 'away',
				wfMessage( 'onlinestatusbar-status-hidden' )->escaped() => 'hidden'
			),
		);
		return true;
	}

	/**
	 * @param $defaultOptions array
	 * @return bool
	 */
	public static function setDefaultOptions( &$defaultOptions ) {
		global $wgOnlineStatusBarDefaultOnline, $wgOnlineStatusBarDefaultEnabled;
		// set defaults
		$defaultOptions['OnlineStatusBar_autoupdate'] = false;
		$defaultOptions['OnlineStatusBar_status'] = $wgOnlineStatusBarDefaultOnline;
		$defaultOptions['OnlineStatusBar_active'] = $wgOnlineStatusBarDefaultEnabled;
		$defaultOptions['OnlineStatusBar_hide'] = false;
		// quit
		return true;
	}

	/**
	 * @param $magicWords array
	 * @param $ln string (language)
	 * @return bool
	 */
	public static function magicWordVar( array &$magicWords, $ln ) {
		$magicWords['ISONLINE'] = array( 1, 'ISONLINE' );
		return true;
	}

	/**
	 * @param $out OutputPage
	 * @param $skin Skin
	 * @return bool
	 */
	public static function stylePage( &$out, &$skin ) {
		switch ($skin->getSkinName()) {
			case 'monobook':
			case 'vector':
			case 'simple':
			case 'modern':
			case 'standard':
			case 'nostalgia':
			case 'chick':
			case 'cologneblue':
				$out->addModules( 'ext.OnlineStatusBar.' . $skin->getSkinName() );
				break;
			default:
				$out->addModules( 'ext.OnlineStatusBar' );
		}
		return true;
	}

	/**
	 * @param $vars array
	 * @return bool
	 */
	public static function magicWordSet( &$vars ) {
		$vars[] = 'ISONLINE';
		return true;
	}

	/**
	 * @param $parser Parser
	 * @param $varCache ??
	 * @param $index ??
	 * @param $ret string?
	 * @return bool
	 */
	public static function parserGetVariable( &$parser, &$varCache, &$index, &$ret ) {
		if ( $index != 'ISONLINE' ) {
			return true;
		}

		// get a status of user parsed from title
		$result = OnlineStatusBar::getUserInfoFromTitle( $parser->getTitle() );
		// if user is IP and we track them
		if ( User::isIP( $parser->getTitle()->getBaseText() ) && $result === false ) {
			$result = OnlineStatusBar::getAnonFromTitle( $parser->getTitle() );
		}
		
		if ( $result === false ) {
			$ret = 'unknown';
			return true;
		}

		$ret = $result[0];
		return true;
	}
}
