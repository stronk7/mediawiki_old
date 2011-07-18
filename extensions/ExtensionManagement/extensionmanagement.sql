-- MySQL database schema for the Extension Management extension.

CREATE TABLE IF NOT EXISTS /*$wgDBprefix*/extensionmanagement (
  ext_id                 INT(8) unsigned   NOT NULL auto_increment PRIMARY KEY,
  ext_name               VARCHAR(255)      NOT NULL,
  ext_url                VARCHAR(255)      NULL,
  -- Latest stable release
  ext_current            INT(8) unsigned   NOT NULL,
  -- Info of the latest stable release
  current_desc            BLOB              NOT NULL,
  current_authors         BLOB              NOT NULL
) /*$wgDBTableOptions*/;

CREATE UNIQUE INDEX unit_name ON /*$wgDBprefix*/extensionmanagement (ext_name);

-- Specific versions of extensions
CREATE TABLE IF NOT EXISTS /*$wgDBprefix*/extensionmanagement_versions (
  version_id               INT(8) unsigned   NOT NULL auto_increment PRIMARY KEY,
  
  version_ext_id          INT(8) unsigned   NOT NULL,
  FOREIGN KEY (version_ext_id) REFERENCES /*$wgDBprefix*/extensionmanagement (ext_id),  

  version_status           TINYINT unsigned  NOT NULL,  
  version_release_date     CHAR(14) binary   NOT NULL default '',
  version_directory        VARCHAR(255)      NOT NULL, 
  version_entrypoint       VARCHAR(255)      NOT NULL,  
  version_desc             BLOB              NOT NULL,
  version_authors          BLOB              NOT NULL
) /*$wgDBTableOptions*/;

CREATE TABLE IF NOT EXISTS /*_*/extensionmanagement_mwreleases (
  mwr_id int(10) unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
  mwr_name varchar(255) NOT NULL,
  mwr_number varchar(32) NOT NULL,
  mwr_reldate varbinary(32) DEFAULT NULL,
  mwr_eoldate varbinary(32) DEFAULT NULL,
  mwr_branch varchar(32) NOT NULL,
  mwr_tag varchar(32) NOT NULL,
  mwr_announcement varchar(255) DEFAULT NULL,
  mwr_supported int(1) NOT NULL
) /*$wgDBTableOptions*/;
