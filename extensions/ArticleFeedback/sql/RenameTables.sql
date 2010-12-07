RENAME TABLE /*$wgDBprefix*/article_assessment_ratings TO /*$wgDBprefix*/article_feedback_ratings,
	/*$wgDBprefix*/article_assessment TO /*$wgDBprefix*/article_feedback,
	/*$wgDBprefix*/article_assessment_pages TO /*$wgDBprefix*/article_feedback_pages;