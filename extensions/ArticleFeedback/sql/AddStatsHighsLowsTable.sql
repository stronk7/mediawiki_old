CREATE TABLE IF NOT EXISTS /*_*/article_feedback_stats_highs_lows (
	afshl_id integer unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
	afshl_page_id integer unsigned NOT NULL,
	-- combined average rating
	afshl_avg_overall double unsigned NOT NULL,
	-- json object of rating key => avg value
	afshl_avg_ratings varbinary(255) NOT NULL,
	-- timestamp of insertion job	
	afshl_ts binary(14) NOT NULL
) /*$wgDBTableOptions*/;
CREATE INDEX /*i*/ afshl_timestamp ON /*_*/article_feedback_stats_highs_lows (afshl_ts);
