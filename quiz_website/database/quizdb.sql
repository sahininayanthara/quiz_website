-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2019 at 12:41 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quizdb`
--
CREATE DATABASE IF NOT EXISTS `quizdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `quizdb`;

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `aid` int(255) NOT NULL AUTO_INCREMENT,
  `answers` varchar(255) NOT NULL,
  `ans_id` int(255) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `answers`, `ans_id`) VALUES
(1, '.html', 1),
(2, '.php', 1),
(3, '.xml', 1),
(4, '.ph', 1),
(5, 'Scripting Language', 2),
(6, 'Markup Language', 2),
(7, 'Programming Language', 2),
(8, 'Network Protocol', 2),
(9, 'Robert Cailliau', 3),
(10, 'Tim Thompson', 3),
(11, 'Charles Darwin', 3),
(12, 'Tim Berners-Lee', 3),
(13, 'picture', 4),
(14, 'image', 4),
(15, 'img', 4),
(16, 'src', 4),
(17, 'Tags only for linking', 5),
(18, 'User defined tags', 5),
(19, 'Fixed tags defined by the language', 5),
(20, 'Pre-specified tags', 5);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `qid` int(255) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `answer`) VALUES
(1, 'PHP files have a default file extension of', '.php'),
(2, 'HTML is what type of language?', 'Markup Language'),
(3, 'Who is known as the father of World Wide Web (WWW) ?', 'Tim Berners-Lee'),
(4, 'What tag is used to display a picture in a HTML page?', 'img'),
(5, 'HTML uses', 'Fixed tags defined by the language');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE IF NOT EXISTS `usertable` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
