-- phpMyAdmin SQL Dump
-- version 2.6.4-pl3
-- http://www.phpmyadmin.net
-- 
-- Host: db391682584.db.1and1.com
-- Generation Time: Dec 26, 2011 at 06:54 AM
-- Server version: 5.0.91
-- PHP Version: 5.3.3-7+squeeze3
-- 
-- Database: `db391682584`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `cms_comments`
-- 

DROP TABLE IF EXISTS `cms_comments`;
CREATE TABLE `cms_comments` (
  `comment_id` bigint(20) unsigned NOT NULL auto_increment,
  `post_id` bigint(20) unsigned NOT NULL default '0',
  `comment_content` longtext NOT NULL,
  `comment_email` varchar(100) NOT NULL,
  `comment_date` datetime NOT NULL default '0000-00-00 00:00:00',
  `comment_status` varchar(20) NOT NULL default 'disapproved',
  PRIMARY KEY  (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- 
-- Dumping data for table `cms_comments`
-- 

INSERT INTO `cms_comments` VALUES (8, 8, 'This is the first comment test, it''s ok', 'test@test.com', '2011-01-01 10:00:00', 'disapproved');
INSERT INTO `cms_comments` VALUES (9, 8, 'This is the second comment test, it''s ok', 'test@test.com', '2011-02-02 22:00:00', 'disapproved');
INSERT INTO `cms_comments` VALUES (10, 9, 'This is the third (1st of the second post) commnt test, it''s ok', 'test@test.com', '2011-02-02 22:00:00', 'disapproved');

-- --------------------------------------------------------

-- 
-- Table structure for table `cms_posts`
-- 

DROP TABLE IF EXISTS `cms_posts`;
CREATE TABLE `cms_posts` (
  `post_id` bigint(20) unsigned NOT NULL auto_increment,
  `post_author` bigint(20) unsigned NOT NULL default '0',
  `post_date` datetime NOT NULL default '0000-00-00 00:00:00',
  `post_content` longtext NOT NULL,
  `post_title` text NOT NULL,
  `post_status` varchar(20) NOT NULL default 'publish',
  `post_comment_status` varchar(20) NOT NULL default 'open',
  `post_name` varchar(200) NOT NULL default '',
  `post_modified` datetime NOT NULL default '0000-00-00 00:00:00',
  `post_type` varchar(20) NOT NULL default 'post',
  `post_comment_count` bigint(20) NOT NULL default '0',
  `post_view_count` bigint(20) NOT NULL default '0',
  `post_custom_url` varchar(200) NOT NULL default '',
  PRIMARY KEY  (`post_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- 
-- Dumping data for table `cms_posts`
-- 

INSERT INTO `cms_posts` VALUES (8, 1, '2011-01-01 10:00:00', 'Kio trafe kvanto frakcistreko o. Sen ki povi fore subpropozicio, konateco helposigno fundamenta ed ene. Op tipo diesa kasedo ido, ng ind kibi rilativa. Eca devi kibi nuancilo ge, jeno fini termo uk eca. Ena neigi respondo ut. Oj pro tiudirekten multiplikite, ac ian alial liternomo mikrometro. <br><br>Vo enz supre nedifina malsupera, nv alia responde suprenstreko ali. Tek definitive anstataŭi tiudirekten ge, ebl ki vole mekao nomial. Kialo pleja koruso sen ni, o sekve koreo mallongigo hav. Eksterna tripunkto antaŭparto pli os, tago hieraŭa elnombrado ot jes.<br><br>This is the end of it.<br>', 'First Test Post', 'unpublish', 'open', '', '2011-12-19 17:45:56', 'post', 2, 2, 'my-first-post');
INSERT INTO `cms_posts` VALUES (9, 1, '2011-03-05 20:00:00', 'Nal felmë onóro laurëa up, tixë halya ya nac. Celë venessë epë na, ep qua pitya etéraettul, ëa tólë enyárë taniquelassë oli. At enga telco wilwarin mól, to taima artuilë pereldar rip. Fánë méla lá táp. Engë lingwë carcassë cu wén, cala ninwa mírëa cua et.AAA', '2nd Test Post', 'publish', 'open', '', '2011-11-21 10:28:20', 'post', 1, 3, 'second-post');
INSERT INTO `cms_posts` VALUES (10, 1, '2011-11-17 12:46:48', '<span class="subheader">CARTER''S REVIEW OF\n                                                    15 Central Park West                                            </span><br>\n                    <p style="padding-left:15px;">\n				        				            	</p><span><span class="lesscontent">\n				            		In 2004, an investment group headed by Arthur and \nWilliam Lie Zeckendorf, the Whitehall Fund of Goldman Sachs and a \ncompany controlled by Eyal Ofer acquired the full-block site between \nCentral Park West and Broadway and 61st and 62nd Streets, one of the \nlast major "mystery" sites in Manhattan.\n<p>\n</p><p>The western half of the block had been occupied for many years by\n a vacant lot and the eastern half, facing Central Park, was occupied by\n the Mayflower Hotel.\n</p><p>\n</p><p>The site is across 61st Street from the Trump International Hotel\n and apartment tower, across 62nd Street from the famous Art Deco-style \nCentury, a twin-towered apartment building, and a block away from the \ntwin-towered Time Warner Center on Columbus Circle that was completed in\n 2004.  It is also just a few blocks south of the Lincoln Center for the\n Performing Arts.\n</p><p>\n</p><p>The Goulandris family, Greek shippers, had began assemb...</p></span></span>', 'Test post # 3', 'publish', 'open', '', '2011-11-17 12:52:49', 'post', 0, 0, 'post-number-3');
INSERT INTO `cms_posts` VALUES (11, 1, '2011-11-17 12:53:59', '<span style="color: rgb(205,99,19);"><b><span style="font-family: Verdana,Tahoma,Arial,Helvetica,Sans-serif; font-size: 12px;">100cm Wide x 100cm Tall </span></b></span><span style="font-family: Verdana,Tahoma,Arial,Helvetica,Sans-serif;"><br><span style="font-size: 10px;"><b><span style="color: rgb(0,0,0);">PowerPoint Poster Template<br><br></span></b><span style="color: rgb(51,51,51);">This free PowerPoint template is designed for a standard metric <b>1 meter by 1 meter</b> scientific poster presentation for international or domestic poster sessions.<br><br>This scientific poster template can be printed in the following size:<b><br><span style="color: rgb(42,102,161);">100 cm x 100 cm (Standard 39 x 39 inches)<br></span><span style="color: rgb(128,128,128);">Any reduction or enlargement up to 121 x 121 cm<br><br></span></b></span></span></span>This template is commonly required at the <b><span style="color: rgb(205,99,19);">Keystone Symposia</span></b> research poster conferences.', 'Test my post number 4', 'publish', 'open', '', '0000-00-00 00:00:00', 'post', 0, 0, 'test-my-post-number-4');

-- --------------------------------------------------------

-- 
-- Table structure for table `cms_posts_comments`
-- 

DROP TABLE IF EXISTS `cms_posts_comments`;
CREATE TABLE `cms_posts_comments` (
  `comment_id` bigint(20) unsigned NOT NULL auto_increment,
  `post_id` bigint(20) unsigned NOT NULL default '0',
  `comment_content` longtext NOT NULL,
  `comment_date` datetime NOT NULL default '0000-00-00 00:00:00',
  `comment_status` varchar(20) NOT NULL default 'disapproved',
  PRIMARY KEY  (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `cms_posts_comments`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `cms_posts_tags`
-- 

DROP TABLE IF EXISTS `cms_posts_tags`;
CREATE TABLE `cms_posts_tags` (
  `post_tag_id` bigint(20) unsigned NOT NULL auto_increment,
  `tag_id` bigint(20) unsigned NOT NULL default '0',
  `post_id` bigint(20) unsigned NOT NULL default '0',
  `post_tag_date` datetime NOT NULL default '0000-00-00 00:00:00',
  `post_tag_modified` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`post_tag_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

-- 
-- Dumping data for table `cms_posts_tags`
-- 

INSERT INTO `cms_posts_tags` VALUES (19, 9, 8, '2011-12-19 17:45:56', '0000-00-00 00:00:00');
INSERT INTO `cms_posts_tags` VALUES (15, 9, 9, '2011-11-21 10:28:20', '0000-00-00 00:00:00');
INSERT INTO `cms_posts_tags` VALUES (18, 8, 8, '2011-12-19 17:45:56', '0000-00-00 00:00:00');
INSERT INTO `cms_posts_tags` VALUES (14, 8, 9, '2011-11-21 10:28:20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

-- 
-- Table structure for table `cms_tags`
-- 

DROP TABLE IF EXISTS `cms_tags`;
CREATE TABLE `cms_tags` (
  `tag_id` bigint(20) unsigned NOT NULL auto_increment,
  `tag_name` varchar(200) NOT NULL default '',
  `tag_date` datetime NOT NULL default '0000-00-00 00:00:00',
  `tag_modified` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`tag_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

-- 
-- Dumping data for table `cms_tags`
-- 

INSERT INTO `cms_tags` VALUES (8, 'Test TAG1', '2011-01-01 10:00:00', '0000-00-00 00:00:00');
INSERT INTO `cms_tags` VALUES (9, 'Test TAG2', '2011-02-02 22:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

-- 
-- Table structure for table `cms_users`
-- 

DROP TABLE IF EXISTS `cms_users`;
CREATE TABLE `cms_users` (
  `user_id` bigint(20) unsigned NOT NULL auto_increment,
  `user_family_name` varchar(250) NOT NULL default '',
  `user_first_name` varchar(250) NOT NULL default '',
  `user_address` varchar(250) NOT NULL default '',
  `user_town` varchar(250) NOT NULL default '',
  `user_province` varchar(250) NOT NULL default '',
  `user_postal_code` varchar(100) NOT NULL default '',
  `user_phone` varchar(100) NOT NULL default '',
  `user_email` varchar(250) NOT NULL default '',
  `user_password` varchar(250) NOT NULL default '',
  `user_type` varchar(10) NOT NULL default '',
  `user_status` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

-- 
-- Dumping data for table `cms_users`
-- 

INSERT INTO `cms_users` VALUES (1, 'Jabouzi', 'Skander', '', '', '', '', '', 'jabouzi@gmail.com', 'b572c415c227b461f215a3', '1', 1);
INSERT INTO `cms_users` VALUES (27, 'Administrator', '', '', '', '', '', '', 'skander@skanderjabouzi.com', 'b572c415c227b461f215a3', '1', 1);
