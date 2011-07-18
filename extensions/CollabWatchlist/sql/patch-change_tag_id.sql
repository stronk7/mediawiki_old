-- Add a primary key to the change_tag table in order
-- to enable us to build the review list extension

ALTER TABLE /*$wgDBprefix*/change_tag
  ADD ct_id integer unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT;