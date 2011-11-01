CREATE TABLE /*$wgDBprefix*/online_status (
	`username` varchar(255) NOT NULL default '',
	`timestamp` char(14) NOT NULL default '',
	PRIMARY KEY USING HASH (`username`)
) ENGINE=MEMORY;

