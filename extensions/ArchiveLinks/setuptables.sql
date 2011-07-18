CREATE TABLE IF NOT EXISTS `el_archive_blacklist` (
  `bl_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `bl_type` tinyint(4) NOT NULL,
  `bl_url` varchar(10000) NOT NULL,
  `bl_expiry` int(11) unsigned NOT NULL,
  `bl_reason` varchar(255) NOT NULL,
  PRIMARY KEY (`bl_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

CREATE TABLE IF NOT EXISTS `el_archive_log` (
  `log_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `log_result` tinyint(4) NOT NULL,
  `log_url` varchar(10000) NOT NULL,
  `log_time` int(11) unsigned NOT NULL,
  `log_http_code` varchar(255) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `el_archive_queue` (
  `queue_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `page_id` int(11) unsigned NOT NULL,
  `url` varchar(10000) NOT NULL,
  `delay_time` int(11) unsigned NOT NULL,
  `insertion_time` int(11) unsigned NOT NULL,
  `in_progress` varchar(50) NOT NULL,
  PRIMARY KEY (`queue_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=105 ;
