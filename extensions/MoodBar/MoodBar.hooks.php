<?php

class MoodBarHooks {
	/**
	 * Adds MoodBar JS to the output if appropriate.
	 */
	public static function onPageDisplay( &$output, &$skin ) {
		if ( self::shouldShowMoodbar( $output, $skin ) ) {
			$output->addModules( array( 'ext.moodBar.init', 'ext.moodBar.core' ) );
		}
		
		return true;
	}
	
	/**
	 * Determines whether or not we should show the MoodBar.
	 */
	public static function shouldShowMoodbar( &$output, &$skin ) {
		
		if (
			// Front-end appends to header elements, which have different
			// locations and IDs in every skin.
			// Untill there is some kind of central registry of element-ids
			// that skins implement, or a fixed name for each of them, just
			// show it in Vector for now.
			$skin->getSkinName() == 'vector' &&

			// Only for logged-in users
			$output->getUser()->isLoggedIn()
		) {
				return true;
		}
		return false;
	}
	
	/**
	 * ResourceLoaderGetConfigVars hook
	 */
	public static function resourceLoaderGetConfigVars( &$vars ) {
		$vars['mbConfig'] = array(
			'validTypes' => MBFeedbackItem::getValidTypes(),
		);
		return true;
	}
	
	/**
	 * Runs MoodBar schema updates
	 */
	public static function onLoadExtensionSchemaUpdates( $updater = null ) {
		$updater->addExtensionUpdate( array( 'addTable', 'moodbar_feedback',
			dirname(__FILE__).'/sql/MoodBar.sql', true ) );
			
		$updater->addExtensionUpdate( array( 'addField', 'moodbar_feedback',
			'mbf_user_editcount', dirname(__FILE__).'/sql/mbf_user_editcount.sql', true )
		);
			
		return true;
	}
}
