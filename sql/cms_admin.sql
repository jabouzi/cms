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
  PRIMARY KEY (`post_id`)  
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;


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


-- --------------------------------------------------------

--
-- Table structure for table `cms_posts_comments`
--

DROP TABLE IF EXISTS `cms_posts_comments`;
CREATE TABLE IF NOT EXISTS `cms_posts_comments` (
  `post_comment_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `post_comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_comment_approved` tinyint(1) NOT NULL DEFAULT 0,    
  PRIMARY KEY (`post_comment_id`)  
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;
