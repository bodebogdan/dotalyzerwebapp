-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2015 at 04:53 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dotalyzer`
--

-- --------------------------------------------------------

--
-- Table structure for table `target`
--

CREATE TABLE IF NOT EXISTS `target` (
  `asd` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hero1` varchar(255) NOT NULL,
  `hero2` varchar(255) NOT NULL,
  `hero3` varchar(255) NOT NULL,
  `hero4` varchar(255) NOT NULL,
  `hero5` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `count` int(10) unsigned NOT NULL,
  `rate` int(10) unsigned NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`),
  FULLTEXT KEY `hero1` (`hero1`,`hero2`,`hero3`,`hero4`,`hero5`,`description`,`user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`ID`, `hero1`, `hero2`, `hero3`, `hero4`, `hero5`, `description`, `user`, `count`, `rate`) VALUES
(20, 'drow_ranger', 'ancient_apparition', 'leshrac', 'lich', 'zeus', 'Present', 'miro', 2, 6),
(19, 'beastmaster', 'bloodseeker', 'ember_spirit', 'bristleback', 'enigma', '', '', 20, 47),
(17, 'beastmaster', 'medusa', 'zeus', 'axe', 'dazzle', 'aspibgpasgb', 'vasile', 1061, 407),
(14, 'beastmaster', 'bounty_hunter', 'ember_spirit', 'enigma', 'faceless_void', '', 'miro', 5, 16),
(15, 'lich', 'puck', 'crystal_maiden', 'jakiro', 'ancient_apparition', '', 'miro', 1, 5),
(16, 'elder_titan', 'enigma', 'brewmaster', 'faceless_void', 'gyrocopter', 'Test description\r\n', 'miro', 1, 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
