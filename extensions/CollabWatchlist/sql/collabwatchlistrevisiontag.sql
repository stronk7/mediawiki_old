-- (c) Florian Hackenberger, 2009, GPL
-- Table structure for `CollabWatchlist`
-- Replace /*$wgDBprefix*/ with the proper prefix
-- Replace /*$wgDBTableOptions*/ with the correct options

-- Add page tracking the collab watchlist tags for revisions
CREATE TABLE IF NOT EXISTS /*$wgDBprefix*/collabwatchlistrevisiontag (
  -- The id of this entry
  rrt_id integer unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
  -- Foreign key to change_tag.ct_id
  ct_id integer unsigned NOT NULL,
  -- Foreign key to collabwatchlist.rl_id
  rl_id integer unsigned NOT NULL,
  -- Foreign key to user.user_id
  user_id int(10) unsigned NOT NULL,
  
  -- Comment for the tag
  rrt_comment varchar(255),
  
  UNIQUE KEY (ct_id, rl_id)
) /*$wgDBTableOptions*/;