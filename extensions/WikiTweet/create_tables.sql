-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Lun 15 Mars 2010 à 16:41
-- Version du serveur: 3.23.32
-- Version de PHP: 5.2.5


--
-- Base de données: `wikidb`
--

-- --------------------------------------------------------

--
-- Structure de la table `wikitweet`
--

CREATE TABLE IF NOT EXISTS `wikitweet` (
  `id` int(11) NOT NULL auto_increment,
  `text` varchar(160) NOT NULL,
  `user` varchar(100) NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `room` varchar(50) NOT NULL default 'main',
  `show` int(11) NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=130 ;


-- --------------------------------------------------------

--
-- Structure de la table `wikitweet_avatar`
--

CREATE TABLE IF NOT EXISTS `wikitweet_avatar` (
  `id` int(11) NOT NULL auto_increment,
  `user` varchar(200) NOT NULL,
  `avatar` varchar(1000) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;


-- --------------------------------------------------------

--
-- Structure de la table `wikitweet_subscription`
--

CREATE TABLE IF NOT EXISTS `wikitweet_subscription` (
  `id` int(11) NOT NULL auto_increment,
  `user` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

