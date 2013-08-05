-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 05, 2013 at 10:55 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cloudstation-cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `cs_pages_tb`
--

CREATE TABLE IF NOT EXISTS `cs_pages_tb` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_type_id` int(11) NOT NULL,
  `page_html_title` varchar(500) NOT NULL,
  `page_meta_desc` varchar(500) NOT NULL,
  `page_url` varchar(500) NOT NULL,
  `page_title` varchar(500) NOT NULL,
  `page_thumb_loc` varchar(500) NOT NULL,
  `page_short_content` text NOT NULL,
  `page_content` text NOT NULL,
  `page_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`page_id`),
  KEY `page_type_id` (`page_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `cs_pages_tb`
--

INSERT INTO `cs_pages_tb` (`page_id`, `page_type_id`, `page_html_title`, `page_meta_desc`, `page_url`, `page_title`, `page_thumb_loc`, `page_short_content`, `page_content`, `page_timestamp`) VALUES
(3, 2, 'Websize - A lightweight responsive CMS', '', 'websize', 'Websize', 'websize.png', 'A simple content management system using responsive web design to create a mobile app like experience.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis congue orci. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris consequat erat at nunc placerat malesuada. Praesent consequat, justo at convallis pharetra, arcu massa accumsan mi, at faucibus massa nunc sed sem. Maecenas ac tristique massa. Fusce interdum diam a libero mollis ullamcorper. Vivamus vel urna odio. Aliquam tellus dui, scelerisque ac tempus ut, venenatis eu erat. Praesent vel sollicitudin magna. Mauris congue sem vitae justo condimentum sed condimentum lacus vulputate. Proin tincidunt nisl sed nibh venenatis fringilla. Pellentesque sit amet cursus libero. Nunc interdum viverra convallis. Aliquam aliquam justo id ligula ornare convallis. Etiam consectetur convallis nunc, id dictum ligula ultricies ut. Nullam arcu libero, sodales sit amet convallis sed, vestibulum sit amet erat.</p>\r\n\r\n<p>Quisque volutpat commodo ullamcorper. Duis vel cursus metus. Cras ac ipsum et diam congue volutpat eu nec nunc. Sed tellus sem, dignissim non mattis ut, sodales at nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum lobortis bibendum risus et vestibulum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n\r\n<p>Sed id dui magna, ut faucibus felis. Nam condimentum tempor cursus. Aliquam sodales ullamcorper elit at lacinia. Ut eu viverra eros. Nunc mollis lobortis lacinia. Integer ut nibh sed augue facilisis congue ut id turpis. Curabitur vel adipiscing ante. Suspendisse porttitor, sapien congue pellentesque condimentum, leo dui scelerisque elit, quis lacinia leo augue sed enim. Suspendisse placerat dictum tellus scelerisque rhoncus. Duis ac ante urna. Nunc sed nisi nec ligula vulputate auctor quis at orci. Morbi hendrerit posuere lorem, at egestas urna faucibus sit amet. Etiam tincidunt, quam sit amet porta laoreet, erat purus blandit dui, vel aliquam ipsum nibh nec tellus.</p>\r\n\r\n<p>Donec leo lorem, cursus sit amet bibendum volutpat, ultricies a risus. In nisi lorem, tempor ut bibendum ac, mattis a purus. Sed ullamcorper suscipit venenatis. Vestibulum nec neque eget enim eleifend tempor ut a ligula. Phasellus odio diam, faucibus consequat scelerisque vitae, bibendum sit amet leo. Donec quis elementum lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis blandit vulputate velit, quis tristique dui cursus quis. Fusce sed molestie sem. Morbi placerat enim at nunc laoreet vel eleifend metus lobortis. Donec massa nulla, facilisis sit amet dignissim sit amet, laoreet et enim. Mauris eleifend congue rhoncus.</p>', '2013-03-25 00:00:00'),
(4, 2, '', '', 'elephant-calendar', 'Elephant Calendar', 'elephant-calendar.png', 'Full booking and calendar system for your property.', '<p>Boomtime!</p>', '0000-00-00 00:00:00'),
(5, 3, '', '', 'gigpads', 'Gigpads', 'gigpads.png', 'Gigpads asked us to create an ecommerce system for them that would connect to Faber''s digital sheet music database. We built a smart, intuitive public-facing website that integrates seamlessly with Faber’s website. ', '', '0000-00-00 00:00:00'),
(6, 4, '', '', 'first-blog', 'First blog title', '', 'This is a lovely blog entry', '', '2013-03-25 00:00:00'),
(7, 4, '', '', 'lovely-blog-two', 'My lovely blog entry two', '', 'A blog entry', '</p>Some uber content</p>', '2013-03-25 23:46:14'),
(8, 4, '', '', 'lovely-blog-three', 'Lovely blog three', '', 'Shizzle right here', '<p>supershizzle dot com</p>', '2013-03-25 23:45:54');

-- --------------------------------------------------------

--
-- Table structure for table `cs_pagetypes_tb`
--

CREATE TABLE IF NOT EXISTS `cs_pagetypes_tb` (
  `pagetype_id` int(11) NOT NULL AUTO_INCREMENT,
  `pagetype_name` varchar(500) NOT NULL,
  `pagetype_grid` int(1) NOT NULL,
  PRIMARY KEY (`pagetype_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `cs_pagetypes_tb`
--

INSERT INTO `cs_pagetypes_tb` (`pagetype_id`, `pagetype_name`, `pagetype_grid`) VALUES
(1, 'static', 0),
(2, 'Applications', 3),
(3, 'Portfolio', 3),
(4, 'Blog', 2),
(5, 'Tutorials', 2),
(6, 'Tools', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cs_sessions_tb`
--

CREATE TABLE IF NOT EXISTS `cs_sessions_tb` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs_sessions_tb`
--

INSERT INTO `cs_sessions_tb` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('2936f6b948be06d84fac81c34216bfeb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.72 Safari/537.36', 1374669611, ''),
('2f4c106977722ea8b32efd5a22391936', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', 1366223975, ''),
('4e438e8fa50a22b1d66bf72170781bf6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.95 Safari/537.36', 1375735066, ''),
('7b6065b68742cf614e6d9598a8c22074', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.72 Safari/537.36', 1374586664, ''),
('86ff46eae5f2418c2ea937d9f1ea85a6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31', 1368561823, '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cs_pages_tb`
--
ALTER TABLE `cs_pages_tb`
  ADD CONSTRAINT `cs_pages_tb_ibfk_1` FOREIGN KEY (`page_type_id`) REFERENCES `cs_pagetypes_tb` (`pagetype_id`) ON DELETE CASCADE ON UPDATE CASCADE;
