-- (c) Florian Hackenberger, 2009, GPL
-- Table structure for `CollabWatchlist`
-- Replace /*$wgDBprefix*/ with the proper prefix
-- Replace /*$wgDBTableOptions*/ with the correct options

-- Add table defining collab watchlist tags
CREATE TABLE IF NOT EXISTS /*$wgDBprefix*/collabwatchlisttag (
  -- The id of this entry
  rt_id integer unsigned  NOT NULL PRIMARY KEY AUTO_INCREMENT,
  -- Foreign key to collabwatchlist.rl_id
  rl_id integer unsigned NOT NULL,
  -- The name of the collabwatchlist tag (unique)
  rt_name varbinary(255) NOT NULL,
  -- Description of the tag
  rt_description tinyblob NOT NULL default '',

  UNIQUE KEY (rl_id, rt_name)
) /*$wgDBTableOptions*/;