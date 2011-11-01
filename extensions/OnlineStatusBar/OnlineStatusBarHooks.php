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
		OnlineStatusBar::DeleteStatus( $old_name );
		return true;
	}

	/**
	 * Called everytime when it's needed to update db
	 * @return bool
	 */
	public static function updateStatus() {
		OnlineStatusBar::UpdateDb();
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

		OnlineStatusBar::UpdateStatus();
		$result = OnlineStatusBar::getUserInfoFromTitle( $article->getTitle() );
		if ( $result === false && User::isIP ( $article->getTitle()->getBaseText() ) ) {
			$result = OnlineStatusBar::getAnonFromTitle( $article->getTitle() ); 
		}

		if ( $result === false ) {
			return true;
		}

		/** @var $user User */
		list( $status, $user ) = $result;

		// Don't display status of those who have opted out
		if ( $user->getOption( 'OnlineStatusBar_hide' ) == true ) {
			return true;
		}

		$modetext = wfMessage( 'onlinestatusbar-status-' . $status )->toString();
		$image = OnlineStatusBar::getImageHtml( $status );
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
		$magicWords['isonline'] = array( 0, 'isonline' );
		return true;
	}

	/**
	 * @param $out OutputPage
	 * @param $skin Skin
	 * @return bool
	 */
	public static function stylePage( &$out, &$skin ) {
		$out->addModules( 'ext.OnlineStatusBar' );
		return true;
	}

	/**
	 * @param $vars array
	 * @return bool
	 */
	public static function magicWordSet( &$vars ) {
		$vars[] = 'isonline';
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
		if ( $index != 'isonline' ) {
			return true;
		}

		$result = OnlineStatusBar::getUserInfoFromTitle( $parser->getTitle() );
		if ( User::isIP( $parser->getTitle()->getBaseText() ) && $result == null ) {
			$result = OnlineStatusBar::getAnonFromTitle( $parser->getTitle() );
		}
		
		if ( $result == false ) {
			$ret = "unknown";
			return true;
		}

		$ret = $result[0];
		return true;
	}
}
