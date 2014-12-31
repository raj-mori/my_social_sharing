-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 31, 2014 at 07:35 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webspasm`
--

-- --------------------------------------------------------

--
-- Table structure for table `board`
--

DROP TABLE IF EXISTS `board`;
CREATE TABLE IF NOT EXISTS `board` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `information` text,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `background` varchar(255) DEFAULT NULL,
  `adult` tinyint(1) NOT NULL DEFAULT '0',
  `private` tinyint(1) NOT NULL DEFAULT '1',
  `password` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `board`
--


-- --------------------------------------------------------

--
-- Table structure for table `board_tag`
--

DROP TABLE IF EXISTS `board_tag`;
CREATE TABLE IF NOT EXISTS `board_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_id` int(11) NOT NULL,
  `board_id` int(11) NOT NULL,
  `bookmark_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tag_id` (`tag_id`,`board_id`,`bookmark_id`),
  KEY `board_id` (`board_id`),
  KEY `bookmark_id` (`bookmark_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `board_tag`
--


-- --------------------------------------------------------

--
-- Table structure for table `bookmark`
--

DROP TABLE IF EXISTS `bookmark`;
CREATE TABLE IF NOT EXISTS `bookmark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `private` tinyint(1) NOT NULL DEFAULT '1',
  `clicks` int(11) NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `bookmark`
--


-- --------------------------------------------------------

--
-- Table structure for table `bookmark_new`
--

DROP TABLE IF EXISTS `bookmark_new`;
CREATE TABLE IF NOT EXISTS `bookmark_new` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(50) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `sys_value` varchar(50) NOT NULL,
  `private` varchar(50) NOT NULL,
  `url_board` varchar(50) NOT NULL,
  `text` varchar(50) NOT NULL,
  `verticle` varchar(50) NOT NULL,
  `horizontal` varchar(50) NOT NULL,
  `size` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `bookmark_new`
--

INSERT INTO `bookmark_new` (`id`, `url`, `tag`, `sys_value`, `private`, `url_board`, `text`, `verticle`, `horizontal`, `size`) VALUES
(1, 'www', 'www', 'Culinary fruits', 'on', 'www', '', '', '', 0),
(2, 'w', 'w', 'Culinary fruits', '', '', '', '', '', 0),
(3, '', '', 'Animals', '', '', '', '', '', 0),
(4, '', '', 'Our Solar System', '', '', '', '', '', 0),
(5, '', '', 'Our Solar System', '', '', '', '', '', 0),
(6, '', '', 'Our Solar System', '', '', '44', 'Middle', 'Center', 10),
(7, '', '', 'Our Solar System', '', '', '', 'Middle', 'Center', 10);

-- --------------------------------------------------------

--
-- Table structure for table `bookmark_panel`
--

DROP TABLE IF EXISTS `bookmark_panel`;
CREATE TABLE IF NOT EXISTS `bookmark_panel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bookmark_id` int(11) NOT NULL,
  `panel_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `bookmark_id` (`bookmark_id`),
  KEY `panel_id` (`panel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `bookmark_panel`
--


-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

DROP TABLE IF EXISTS `follow`;
CREATE TABLE IF NOT EXISTS `follow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `board_id` int(11) NOT NULL,
  `follower_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`board_id`,`follower_id`),
  KEY `board_id` (`board_id`),
  KEY `follower_id` (`follower_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `follow`
--


-- --------------------------------------------------------

--
-- Table structure for table `panel`
--

DROP TABLE IF EXISTS `panel`;
CREATE TABLE IF NOT EXISTS `panel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `board_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `board_int` (`board_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `panel`
--


-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

DROP TABLE IF EXISTS `tag`;
CREATE TABLE IF NOT EXISTS `tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tag`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adult_enabled` tinyint(1) NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_signed` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `adult_enabled`, `created`, `last_signed`, `password`, `admin`) VALUES
(1, 'diddy182', 'jordan@wasted-illusions.com', 0, '2014-12-23 01:44:22', '2014-12-23 01:44:22', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `board`
--
ALTER TABLE `board`
  ADD CONSTRAINT `board_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `board_tag`
--
ALTER TABLE `board_tag`
  ADD CONSTRAINT `board_tag_ibfk_3` FOREIGN KEY (`bookmark_id`) REFERENCES `bookmark` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `board_tag_ibfk_1` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `board_tag_ibfk_2` FOREIGN KEY (`board_id`) REFERENCES `board` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bookmark`
--
ALTER TABLE `bookmark`
  ADD CONSTRAINT `bookmark_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bookmark_panel`
--
ALTER TABLE `bookmark_panel`
  ADD CONSTRAINT `bookmark_panel_ibfk_2` FOREIGN KEY (`panel_id`) REFERENCES `panel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bookmark_panel_ibfk_1` FOREIGN KEY (`bookmark_id`) REFERENCES `bookmark` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `follow`
--
ALTER TABLE `follow`
  ADD CONSTRAINT `follow_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `follow_ibfk_2` FOREIGN KEY (`board_id`) REFERENCES `board` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `follow_ibfk_3` FOREIGN KEY (`follower_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `panel`
--
ALTER TABLE `panel`
  ADD CONSTRAINT `panel_ibfk_1` FOREIGN KEY (`board_id`) REFERENCES `board` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
