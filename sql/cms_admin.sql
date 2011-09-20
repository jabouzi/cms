-- phpMyAdmin SQL Dump
-- version 3.3.7deb5build0.10.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 07, 2011 at 05:54 AM
-- Server version: 5.1.49
-- PHP Version: 5.3.3-1ubuntu9.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `skanderjabouzi_pp`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms_users`
--

DROP TABLE IF EXISTS `cms_users`;
CREATE TABLE IF NOT EXISTS `cms_users` (
  `user_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_family_name` varchar(250) NOT NULL DEFAULT '',
  `user_first_name` varchar(250) NOT NULL DEFAULT '',
  `user_address` varchar(250) NOT NULL DEFAULT '',
  `user_town` varchar(250) NOT NULL DEFAULT '',
  `user_province` varchar(250) NOT NULL DEFAULT '',
  `user_postal_code` varchar(100) NOT NULL DEFAULT '',
  `user_phone` varchar(100) NOT NULL DEFAULT '',
  `user_email` varchar(250) NOT NULL DEFAULT '',
  `user_password` varchar(250) NOT NULL DEFAULT '',
  `user_type` varchar(10) NOT NULL DEFAULT '',
  `user_status` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;


INSERT INTO cms_users VALUES('','Jabouzi','Skander','','','','','','jabouzi@gmail.com','b572c415c227b461f215a3',1 ,1 );
INSERT INTO cms_users VALUES('','Administrator','','','','','','','skander@skanderjabouzi.com','b572c415c227b461f215a3',1 ,1 );

-- --------------------------------------------------------

--
-- Table structure for table `cms_posts`
--

DROP TABLE IF EXISTS `cms_posts`;
CREATE TABLE IF NOT EXISTS `cms_posts` (
  `post_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_author` bigint(20) unsigned NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext NOT NULL,
  `post_title` text NOT NULL,
  `post_status` varchar(20) NOT NULL DEFAULT 'publish',
  `post_comment_status` varchar(20) NOT NULL DEFAULT 'open',
  `post_name` varchar(200) NOT NULL DEFAULT '',
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',  
  `post_type` varchar(20) NOT NULL DEFAULT 'post',
  `post_comment_count` bigint(20) NOT NULL DEFAULT '0',
  `post_view_count` bigint(20) NOT NULL DEFAULT '0',
  `post_custom_url` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`post_id`)  
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;


INSERT INTO cms_posts VALUES('','1','2011-01-01 10:00:00','Kio trafe kvanto frakcistreko o. Sen ki povi fore subpropozicio, konateco helposigno fundamenta ed ene. Op tipo diesa kasedo ido, ng ind kibi rilativa. Eca devi kibi nuancilo ge, jeno fini termo uk eca. Ena neigi respondo ut. Oj pro tiudirekten multiplikite, ac ian alial liternomo mikrometro. <br /><br />Vo enz supre nedifina malsupera, nv alia responde suprenstreko ali. Tek definitive anstataŭi tiudirekten ge, ebl ki vole mekao nomial. Kialo pleja koruso sen ni, o sekve koreo mallongigo hav. Eksterna tripunkto antaŭparto pli os, tago hieraŭa elnombrado ot jes.','First Test Post','publish','open','','0000-00-00 00:00:00','post','2','2','first-post');
INSERT INTO cms_posts VALUES('','1','2011-03-05 20:00:00','Nal felmë onóro laurëa up, tixë halya ya nac. Celë venessë epë na, ep qua pitya etéraettul, ëa tólë enyárë taniquelassë oli. At enga telco wilwarin mól, to taima artuilë pereldar rip. Fánë méla lá táp. Engë lingwë carcassë cu wén, cala ninwa mírëa cua et.','2nd Test Post','publish','open','','0000-00-00 00:00:00','post','1','3','second-post');

-- --------------------------------------------------------

--
-- Table structure for table `cms_tags`
--

DROP TABLE IF EXISTS `cms_tags`;
CREATE TABLE IF NOT EXISTS `cms_tags` (
  `tag_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(200) NOT NULL DEFAULT '',
  `tag_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tag_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',    
  PRIMARY KEY (`tag_id`)  
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

INSERT INTO cms_tags VALUES('','Test TAG1','2011-01-01 10:00:00','0000-00-00 00:00:00');
INSERT INTO cms_tags VALUES('','Test TAG2','2011-02-02 22:00:00','0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cms_posts_tags`
--

DROP TABLE IF EXISTS `cms_posts_tags`;
CREATE TABLE IF NOT EXISTS `cms_posts_tags` (
  `post_tag_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tag_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `post_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `post_tag_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_tag_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',    
  PRIMARY KEY (`post_tag_id`)  
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

INSERT INTO cms_posts_tags VALUES('','8','8','2011-01-01 10:00:00','0000-00-00 00:00:00');
INSERT INTO cms_posts_tags VALUES('','8','9','2011-01-01 10:00:00','0000-00-00 00:00:00');
INSERT INTO cms_posts_tags VALUES('','9','8','2011-01-01 10:00:00','0000-00-00 00:00:00');
INSERT INTO cms_posts_tags VALUES('','9','8','2011-01-01 10:00:00','0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cms_posts_comments`
--

DROP TABLE IF EXISTS `cms_comments`;
CREATE TABLE IF NOT EXISTS `cms_comments` (
  `comment_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `comment_content` longtext NOT NULL,
  `comment_email` varchar(100) NOT NULL,
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_status` varchar(20) NOT NULL DEFAULT 'disapproved',
  PRIMARY KEY (`comment_id`)  
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

INSERT INTO cms_comments VALUES('','8','This is the first comment test, it''s ok','test@test.com','2011-01-01 10:00:00','disapproved');
INSERT INTO cms_comments VALUES('','8','This is the second comment test, it''s ok','test@test.com','2011-02-02 22:00:00','disapproved');
INSERT INTO cms_comments VALUES('','9','This is the third (1st of the second post) commnt test, it''s ok','test@test.com','2011-02-02 22:00:00','disapproved');
