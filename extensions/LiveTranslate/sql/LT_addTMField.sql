ALTER TABLE /*_*/live_translate ADD COLUMN memory_id INT(4) unsigned NOT NULL;
UPDATE /*_*/live_translate SET memory_id = 1;