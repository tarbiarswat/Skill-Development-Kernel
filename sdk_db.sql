-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 17, 2021 at 03:25 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdk_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` int(15) NOT NULL AUTO_INCREMENT,
  `course_title` varchar(200) NOT NULL,
  `course_img` text NOT NULL,
  `course_obj` text NOT NULL,
  `course_details` text NOT NULL,
  `course_price` varchar(10) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `internships`
--

DROP TABLE IF EXISTS `internships`;
CREATE TABLE IF NOT EXISTS `internships` (
  `internship_id` int(15) NOT NULL AUTO_INCREMENT,
  `internship_title` varchar(50) NOT NULL,
  `internship_img` text NOT NULL,
  `internship_details` text NOT NULL,
  `internship_offered_by` text NOT NULL,
  `internship_deadline` text NOT NULL,
  PRIMARY KEY (`internship_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `internships`
--

INSERT INTO `internships` (`internship_id`, `internship_title`, `internship_img`, `internship_details`, `internship_offered_by`, `internship_deadline`) VALUES
(1, 'ddsfsd', '', 'sdfsd', 'sdfsd', 'sdfsd'),
(7, 'sdfsdf', '2280-', 'dsfds', 'dsfds', 'dsfds'),
(8, 'dfgfdg', '4925-', 'dfgfdg', 'dfgfd', 'dfgfd'),
(9, 'dfgfdg', '5652-', 'fdgfdg', 'fdgfd', 'fdgfdg'),
(10, 'dfhfd', '6709-', 'dfhfd', 'dfhdf', 'dfhdfh'),
(11, 'sdfsd', '1927-', 'sdfsd', 'sdfs', 'sdf'),
(12, 'dfgf', '2550-', 'dfgfdg', 'dfgdf', 'dfgfdg'),
(13, 'dhdft', '1835-', 'dfhfdh', 'fdhfdh', 'dfhfdh'),
(14, 'dfhgfd', '6947-', 'fgfdg', 'dfgfd', 'fdgfdg'),
(15, 'dfds', '1838-', 'sdfdsf', 'sdfsd', 'sdfds'),
(4, 'dfsdf', '1118-', 'dsgdsg', 'sdgsd', 'sdgd'),
(5, 'dfsdf', '7186-', 'dsgdsg', 'sdgsd', 'sdgd'),
(6, 'dfgfdg', '8265-', 'fdgfdg', 'fdgfd', 'dfgfd'),
(16, 'gfdg', '', 'dfgfdg', 'dfgdf', 'dfgfd'),
(17, 'test', '', 'sdfdsf', 'sdfsd', 'sdfsd'),
(18, '', '6665-', '', '', ''),
(19, 'sdfsdf', '1736-', 'sdfdsf', 'sdfds', 'sdfsdf'),
(20, 'w1', '7828-', 'dfgfd', 'fdgfd', 'dfgfd'),
(21, 'test1', '8425-', 'sefdsf', 'dsfsd', 'sdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `sdk_settings`
--

DROP TABLE IF EXISTS `sdk_settings`;
CREATE TABLE IF NOT EXISTS `sdk_settings` (
  `id` int(11) NOT NULL,
  `settings` varchar(40) NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sdk_settings`
--

INSERT INTO `sdk_settings` (`id`, `settings`, `details`) VALUES
(9, 'footer_info', '© Copyright 2021 Skill Development Kernel. All Rights Reserved.'),
(1, 'site_title', 'SDK');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email_id`, `password`) VALUES
(1, 'Tarbiar', 'Swat', 'tarbiar@gmail.com', '123456'),
(2, 'Sazedur', 'Rahman', 'dfsdf@gmail.com', '123456'),
(3, 'Sazedur', 'Rahman', 'dfsdfsdf@gmail.com', '123456'),
(9, 'Sraban', 'Roy', 'sroy@gmail.com', '123456'),
(8, 'tfgh', 'Rahman', 'fgdg', ''),
(10, 'dsfsdf', 'sdfsd', 'fsdsd@gmail.com', '123456'),
(11, 'sdfsd', 'dfs', 'sdf@gmail.com', '123456'),
(12, 'Srabon', 'roy2', 'sroy2@gmail.com', '123456'),
(13, 'Srabon', 'fghf', 'fghfgh', 'fghfghgfhfg'),
(14, 'dsfsdf', 'dsf', 'sdfds@gmail.com', '123456'),
(15, '', '', '', ''),
(16, 'Sraban', 'Roy', 'sraban@gmail.com', '123456'),
(17, 'Sraban', 'Roy', 'sraban@gmail.com', '123456'),
(18, 'Sraban', 'Roy', 'sroy123@gmail.com', '123456'),
(19, 'jdhasfgas', 'rsfgsd', 'dsfs@gmail.com', '123456'),
(20, 'fsdfsdfsdfs', 'sdfsdf', 'dsfsdfsdf@gmail.com', '123456'),
(21, 'sdfsdf', 'sdfsdfsd', 'dsfsdsdfsdf@gmail.com', '123456789'),
(22, 'Sazedur', 'Rahman', 'dfsdfsdfsd@gmail.com', '123456'),
(23, 'sdfsdf', 'sdfsd', 'sdfsdf@gmail.com', '123456'),
(24, 'fgsdfsdf', 'sdfsdf', 'sdfsd@gmail.com', '123456789'),
(25, 'sdfsd', 'sdfsdf', 'sdfsdf@gmail.com', '123456'),
(26, 'sdfsdf', 'sdfsd', 'fvgsd@gmail.com', '123456'),
(27, 'dfssdf', 'sdfsdf', 'sdfsd@gmail.com', '123456789'),
(28, 'dfaesda', 'asdas', 'sadasd@gmail.com', '123456'),
(29, 'sdfsdf', 'dsfsdf', 'dsfsd@gmail.com', '123456465');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
