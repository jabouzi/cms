-- phpMyAdmin SQL Dump
-- version 3.3.7deb5build0.10.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2012 at 06:27 AM
-- Server version: 5.1.49
-- PHP Version: 5.3.3-1ubuntu9.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `skanderjabouzi_com`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms_categories`
--

DROP TABLE IF EXISTS `cms_categories`;
CREATE TABLE IF NOT EXISTS `cms_categories` (
  `category_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(200) NOT NULL DEFAULT '',
  `category_parent_id` bigint(20) NOT NULL DEFAULT '0',
  `category_in_menu` tinyint(1) NOT NULL DEFAULT '0',
  `category_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `category_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `cms_categories`
--

INSERT INTO `cms_categories` (`category_id`, `category_name`, `category_parent_id`, `category_in_menu`, `category_date`, `category_modified`) VALUES
(10, 'Test1', 0, 0, '2012-01-11 19:22:19', '0000-00-00 00:00:00'),
(11, 'Test2', 0, 0, '2012-01-11 19:22:22', '0000-00-00 00:00:00'),
(12, 'Test3', 0, 0, '2012-01-11 19:22:27', '0000-00-00 00:00:00'),
(13, 'Test cat1', 0, 1, '2012-01-11 19:23:07', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cms_comments`
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `cms_comments`
--

INSERT INTO `cms_comments` (`comment_id`, `post_id`, `comment_content`, `comment_email`, `comment_date`, `comment_status`) VALUES
(8, 8, 'This is the first comment test, it''s ok', 'test@test.com', '2011-01-01 10:00:00', 'disapproved'),
(9, 8, 'This is the second comment test, it''s ok', 'test@test.com', '2011-02-02 22:00:00', 'disapproved'),
(10, 9, 'This is the third (1st of the second post) commnt test, it''s ok', 'test@test.com', '2011-02-02 22:00:00', 'disapproved');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `cms_posts`
--

INSERT INTO `cms_posts` (`post_id`, `post_author`, `post_date`, `post_content`, `post_title`, `post_status`, `post_comment_status`, `post_name`, `post_modified`, `post_type`, `post_comment_count`, `post_view_count`, `post_custom_url`) VALUES
(8, 1, '2011-01-01 10:00:00', 'Kio trafe kvanto frakcistreko o. Sen ki povi fore subpropozicio, konateco helposigno fundamenta ed ene. Op tipo diesa kasedo ido, ng ind kibi rilativa. Eca devi kibi nuancilo ge, jeno fini termo uk eca. Ena neigi respondo ut. Oj pro tiudirekten multiplikite, ac ian alial liternomo mikrometro. <br><br>Vo enz supre nedifina malsupera, nv alia responde suprenstreko ali. Tek definitive anstataÅ­i tiudirekten ge, ebl ki vole mekao nomial. Kialo pleja koruso sen ni, o sekve koreo mallongigo hav. Eksterna tripunkto antaÅ­parto pli os, tago hieraÅ­a elnombrado ot jes.<br><br>This is the end of it.<br>', 'First Test Post', 'unpublish', 'open', '', '2011-12-19 17:45:56', 'post', 2, 2, 'my-first-post'),
(9, 1, '2011-03-05 20:00:00', 'Nal felmÃ« onÃ³ro laurÃ«a up, tixÃ« halya ya nac. CelÃ« venessÃ« epÃ« na, ep qua pitya etÃ©raettul, Ã«a tÃ³lÃ« enyÃ¡rÃ« taniquelassÃ« oli. At enga telco wilwarin mÃ³l, to taima artuilÃ« pereldar rip. FÃ¡nÃ« mÃ©la lÃ¡ tÃ¡p. EngÃ« lingwÃ« carcassÃ« cu wÃ©n, cala ninwa mÃ­rÃ«a cua et.AAA', '2nd Test Post', 'publish', 'open', '', '2011-11-21 10:28:20', 'post', 1, 3, 'second-post'),
(10, 1, '2011-11-17 12:46:48', '<span class="subheader">CARTER''S REVIEW OF\n                                                    15 Central Park West                                            </span><br>\n                    <p style="padding-left:15px;">\n				        				            	</p><span><span class="lesscontent">\n				            		In 2004, an investment group headed by Arthur and \nWilliam Lie Zeckendorf, the Whitehall Fund of Goldman Sachs and a \ncompany controlled by Eyal Ofer acquired the full-block site between \nCentral Park West and Broadway and 61st and 62nd Streets, one of the \nlast major "mystery" sites in Manhattan.\n<p>\n</p><p>The western half of the block had been occupied for many years by\n a vacant lot and the eastern half, facing Central Park, was occupied by\n the Mayflower Hotel.\n</p><p>\n</p><p>The site is across 61st Street from the Trump International Hotel\n and apartment tower, across 62nd Street from the famous Art Deco-style \nCentury, a twin-towered apartment building, and a block away from the \ntwin-towered Time Warner Center on Columbus Circle that was completed in\n 2004.  It is also just a few blocks south of the Lincoln Center for the\n Performing Arts.\n</p><p>\n</p><p>The Goulandris family, Greek shippers, had began assemb...</p></span></span>', 'Test post # 3', 'publish', 'open', '', '2011-11-17 12:52:49', 'post', 0, 0, 'post-number-3'),
(11, 1, '2011-11-17 12:53:59', '<span style="color: rgb(205,99,19);"><b><span style="font-family: Verdana,Tahoma,Arial,Helvetica,Sans-serif; font-size: 12px;">100cm Wide x 100cm Tall </span></b></span><span style="font-family: Verdana,Tahoma,Arial,Helvetica,Sans-serif;"><br><span style="font-size: 10px;"><b><span style="color: rgb(0,0,0);">PowerPoint Poster Template<br><br></span></b><span style="color: rgb(51,51,51);">This free PowerPoint template is designed for a standard metric <b>1 meter by 1 meter</b> scientific poster presentation for international or domestic poster sessions.<br><br>This scientific poster template can be printed in the following size:<b><br><span style="color: rgb(42,102,161);">100 cm x 100 cm (Standard 39 x 39 inches)<br></span><span style="color: rgb(128,128,128);">Any reduction or enlargement up to 121 x 121 cm<br><br></span></b></span></span></span>This template is commonly required at the <b><span style="color: rgb(205,99,19);">Keystone Symposia</span></b> research poster conferences.', 'Test my post number 4', 'publish', 'open', '', '0000-00-00 00:00:00', 'post', 0, 0, 'test-my-post-number-4'),
(12, 1, '2011-12-26 23:07:10', '<span class="Apple-style-span" style="color: rgb(0, 1, 84); font-family: Verdana, Geneva, Arial, helvetica, sans-serif; font-size: 14px; background-color: rgb(246, 240, 208); "><form id="vulnResultsForm" name="vulnResultsForm" method="post" action="http://web.nvd.nist.gov/view/vuln/search-results" enctype="application/x-www-form-urlencoded" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; "><div class="pageNavigator" style="font-family: Verdana, Geneva, Arial, helvetica, sans-serif; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; "><h2 style="font-size: 1.3em; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; display: inline; ">Search Results&nbsp;<a href="http://web.nvd.nist.gov/view/vuln/search" id="vulnResultsForm:j_id101" style="color: rgb(0, 1, 84); background-color: inherit; "><span class="refineSearch">(Refine Search)</span></a></h2><p style="font-family: Verdana, Geneva, Arial, helvetica, sans-serif; margin-top: 0.3em; margin-right: 0px; margin-bottom: 0.3em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; font-size: 1em; ">There are&nbsp;<strong>11</strong>&nbsp;matching records. Displaying matches&nbsp;<strong>1</strong>&nbsp;through&nbsp;<strong>11</strong>.</p></div></form><form id="listing" name="listing" method="post" action="http://web.nvd.nist.gov/view/vuln/search-results" enctype="application/x-www-form-urlencoded" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; "><dl id="listing:j_id396" style="font-family: Verdana, Geneva, Arial, helvetica, sans-serif; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-top-color: rgb(0, 1, 84); border-right-color: rgb(0, 1, 84); border-bottom-color: rgb(0, 1, 84); border-left-color: rgb(0, 1, 84); "><span id="listing:j_id397"><dt id="listing:j_id397:0:j_id398" style="font-family: Verdana, Geneva, Arial, helvetica, sans-serif; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 3px; padding-right: 2px; padding-bottom: 5px; padding-left: 2px; color: rgb(255, 255, 255); background-color: rgb(0, 1, 84); "><a href="http://web.nvd.nist.gov/view/vuln/detail?vulnId=CVE-2011-2189" style="font-size: 0.9em; font-weight: bold; color: rgb(255, 255, 255); background-color: rgb(0, 1, 84); ">CVE-2011-2189</a></dt><dd id="listing:j_id397:0:j_id407" style="font-family: Verdana, Geneva, Arial, helvetica, sans-serif; margin-top: 0px; margin-right: 0px; margin-bottom: 0.1em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; font-size: small; "><p class="row" style="font-family: Verdana, Geneva, Arial, helvetica, sans-serif; margin-top: 0.3em; margin-right: 0px; margin-bottom: 0.3em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; font-size: 1em; color: rgb(0, 1, 84); background-color: inherit; "><span class="label" style="font-weight: bold; padding-right: 0.2em; font-style: italic; ">Summary:</span>&nbsp;net/core/net_namespace.c in the Linux kernel 2.6.32 and earlier does not properly handle a high rate of creation and cleanup of network namespaces, which makes it easier for remote attackers to cause a denial of service (memory consumption) via requests to a daemon that requires a separate namespace per connection, as demonstrated by vsftpd.</p><div class="row" style="font-family: Verdana, Geneva, Arial, helvetica, sans-serif; margin-top: 0.3em; margin-right: 0px; margin-bottom: 0.3em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0.5em; padding-left: 0px; font-size: 1em; color: rgb(0, 1, 84); background-color: inherit; "><span class="label" style="font-weight: bold; padding-right: 0.2em; font-style: italic; ">Published:</span>&nbsp;10/10/2011</div><div id="listing:j_id397:0:j_id418" class="row" style="font-family: Verdana, Geneva, Arial, helvetica, sans-serif; margin-top: 0.3em; margin-right: 0px; margin-bottom: 0.3em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0.5em; padding-left: 0px; font-size: 1em; color: rgb(0, 1, 84); background-color: inherit; "><span class="label" style="font-weight: bold; padding-right: 0.2em; font-style: italic; ">CVSS Severity:</span>&nbsp;<a href="http://nvd.nist.gov/cvss.cfm?name=CVE-2011-2189&amp;vector=%28AV%3AN%2FAC%3AL%2FAu%3AN%2FC%3AN%2FI%3AN%2FA%3AC%29&amp;version=2" style="color: rgb(0, 1, 84); background-color: inherit; ">7.8</a>&nbsp;(HIGH)</div></dd><dt id="listing:j_id397:1:j_id398" style="font-family: Verdana, Geneva, Arial, helvetica, sans-serif; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 3px; padding-right: 2px; padding-bottom: 5px; padding-left: 2px; color: rgb(255, 255, 255); background-color: rgb(0, 1, 84); "><a href="http://web.nvd.nist.gov/view/vuln/detail?vulnId=CVE-2011-0762" style="font-size: 0.9em; font-weight: bold; color: rgb(255, 255, 255); background-color: rgb(0, 1, 84); ">CVE-2011-0762</a></dt><dd id="listing:j_id397:1:j_id407" style="font-family: Verdana, Geneva, Arial, helvetica, sans-serif; margin-top: 0px; margin-right: 0px; margin-bottom: 0.1em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; font-size: small; "><ul id="listing:j_id397:1:j_id409" style="font-family: Verdana, Geneva, Arial, helvetica, sans-serif; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0.25em; padding-right: 0px; padding-bottom: 0.25em; padding-left: 0px; width: 1063px; list-style-type: none; cursor: default; color: rgb(0, 0, 0); background-color: rgb(193, 193, 193); "><li style="font-family: Verdana, Geneva, Arial, helvetica, sans-serif; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; display: inline; "><a href="http://www.kb.cert.org/vuls/id/590604" target="_blank" style="padding-left: 3px; color: rgb(0, 0, 0); background-color: rgb(193, 193, 193); ">VU#590604</a></li></ul><p class="row" style="font-family: Verdana, Geneva, Arial, helvetica, sans-serif; margin-top: 0.3em; margin-right: 0px; margin-bottom: 0.3em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; font-size: 1em; color: rgb(0, 1, 84); background-color: inherit; "><span class="label" style="font-weight: bold; padding-right: 0.2em; font-style: italic; ">Summary:</span>&nbsp;The vsf_filename_passes_filter function in ls.c in vsftpd before 2.3.3 allows remote authenticated users to cause a denial of service (CPU consumption and process slot exhaustion) via crafted glob expressions in STAT commands in multiple FTP sessions, a different vulnerability than CVE-2010-2632.</p><div class="row" style="font-family: Verdana, Geneva, Arial, helvetica, sans-serif; margin-top: 0.3em; margin-right: 0px; margin-bottom: 0.3em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0.5em; padding-left: 0px; font-size: 1em; color: rgb(0, 1, 84); background-color: inherit; "><span class="label" style="font-weight: bold; padding-right: 0.2em; font-style: italic; ">Published:</span>&nbsp;03/02/2011</div><div id="listing:j_id397:1:j_id418" class="row" style="font-family: Verdana, Geneva, Arial, helvetica, sans-serif; margin-top: 0.3em; margin-right: 0px; margin-bottom: 0.3em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0.5em; padding-left: 0px; font-size: 1em; color: rgb(0, 1, 84); background-color: inherit; "><span class="label" style="font-weight: bold; padding-right: 0.2em; font-style: italic; ">CVSS Severity:</span>&nbsp;<a href="http://nvd.nist.gov/cvss.cfm?name=CVE-2011-0762&amp;vector=%28AV%3AN%2FAC%3AL%2FAu%3AS%2FC%3AN%2FI%3AN%2FA%3AP%29&amp;version=2" style="color: rgb(0, 1, 84); background-color: inherit; ">4.0</a>&nbsp;(MEDIUM)</div><div><br></div></dd></span></dl></form></span>', 'New Post Test # 1', 'publish', 'open', '', '2011-12-26 23:07:25', 'post', 0, 0, 'new-post-test');

-- --------------------------------------------------------

--
-- Table structure for table `cms_posts_categories`
--

DROP TABLE IF EXISTS `cms_posts_categories`;
CREATE TABLE IF NOT EXISTS `cms_posts_categories` (
  `post_category_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `post_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `post_category_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_category_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`post_category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `cms_posts_categories`
--

INSERT INTO `cms_posts_categories` (`post_category_id`, `category_id`, `post_id`, `post_category_date`, `post_category_modified`) VALUES
(10, 10, 8, '2011-12-19 17:45:56', '0000-00-00 00:00:00'),
(11, 12, 9, '2011-11-21 10:28:20', '0000-00-00 00:00:00'),
(12, 11, 8, '2011-12-19 17:45:56', '0000-00-00 00:00:00'),
(13, 13, 9, '2011-11-21 10:28:20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cms_posts_comments`
--

DROP TABLE IF EXISTS `cms_posts_comments`;
CREATE TABLE IF NOT EXISTS `cms_posts_comments` (
  `comment_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `comment_content` longtext NOT NULL,
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_status` varchar(20) NOT NULL DEFAULT 'disapproved',
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `cms_posts_comments`
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
  `user_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `cms_users`
--

INSERT INTO `cms_users` (`user_id`, `user_family_name`, `user_first_name`, `user_address`, `user_town`, `user_province`, `user_postal_code`, `user_phone`, `user_email`, `user_password`, `user_type`, `user_status`) VALUES
(1, 'Jabouzi', 'Skander', '', '', '', '', '', 'jabouzi@gmail.com', 'b572c415c227b461f215a3', '1', 1),
(27, 'Administrator', '', '', '', '', '', '', 'skander@skanderjabouzi.com', 'b572c415c227b461f215a3', '1', 1);
