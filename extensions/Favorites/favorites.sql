--
-- Table structure for table `favoritelist`
--
-- Replace /*_*/ with the proper prefix

CREATE TABLE IF NOT EXISTS /*_*/favoritelist (
  fl_user int(10) unsigned NOT NULL,
  fl_namespace int(11) NOT NULL DEFAULT '0',
  fl_title varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  fl_notificationtimestamp varbinary(14) DEFAULT NULL,
  UNIQUE KEY fl_user (fl_user,fl_namespace,fl_title),
  KEY namespace_title (fl_namespace,fl_title)
) ;

