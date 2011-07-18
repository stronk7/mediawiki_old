-- (c) Florian Hackenberger, 2009, GPL
-- Table structure for `CollabWatchlist`
-- Replace /*$wgDBprefix*/ with the proper prefix
-- Replace /*$wgDBTableOptions*/ with the correct options

-- Add table defining the categories for collaborative watchlists
CREATE TABLE IF NOT EXISTS /*$wgDBprefix*/collabwatchlistcategory (
  -- The id of this entry
  rlc_id integer unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
  -- Foreign key to collabwatchlist.rl_id
  rl_id integer unsigned NOT NULL,
  -- Foreign key to page.page_id
  cat_page_id integer unsigned NOT NULL,
  -- Whether the category is subtracted from or added to the collaborative watchlist
  subtract boolean DEFAULT false
) /*$wgDBTableOptions*/;