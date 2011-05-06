/*
 * Script for Article Feedback Extension
 */

jQuery( function( $ ) {
	if (
		// Main namespace articles
		$.inArray( mw.config.get( 'wgNamespaceNumber' ), mw.config.get( 'wgArticleFeedbackNamespaces', [] ) ) > -1
		// Existing pages
		&& mw.config.get( 'wgArticleId' ) > 0
		// View pages
		&& ( mw.config.get( 'wgAction' ) == 'view' || mw.config.get( 'wgAction' ) == 'purge' )
		// Current revision
		&& mw.util.getParamValue( 'diff' ) == null
		&& mw.util.getParamValue( 'oldid' ) == null
	) {
		var trackingBucket = mw.user.bucket(
			'ext.articleFeedback-tracking', mw.config.get( 'wgArticleFeedbackTracking' )
		);
		// Category activation
		var articleFeedbackCategories = mw.config.get( 'wgArticleFeedbackCategories', [] );
		var articleCategories = mw.config.get( 'wgCategories', [] );
		var inCategory = false;
		for ( var i = 0; i < articleCategories.length; i++ ) {
			for ( var j = 0; j < articleFeedbackCategories.length; j++ ) {
				if ( articleCategories[i] == articleFeedbackCategories[j] ) {
					inCategory = true;
					// Break 2 levels - could do this with a label, but eww.
					i = articleCategories.length;
					j = articleFeedbackCategories.length;
				}
			}
		}
		// Lottery activation
		var wonLottery = ( Number( mw.config.get( 'wgArticleId', 0 ) ) % 1000 )
				< Number( mw.config.get( 'wgArticleFeedbackLotteryOdds', 0 ) ) * 10;
		
		// Lazy loading
		if ( wonLottery || inCategory ) {
			mw.loader.load( 'ext.articleFeedback' );
		}
	}
} );
