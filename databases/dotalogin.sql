-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2015 at 04:52 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dotalogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `user_id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(128) NOT NULL,
  `salt` char(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `email`, `password`, `salt`) VALUES
(1, 'test_user', 'test@example.com', '00807432eae173f652f2064bdca1b61b290b52d40e429a7d295d76a71084aa96c0233b82f1feac45529e0726559645acaed6f3ae58a286b9f075916ebf66cacc', 'f9aab579fc1b41ed0c44fe4ecdbfcdb4cb99b9023abb241a6db833288f4eea3c02f76e0d35204a8695077dcf81932aa59006423976224be0390395bae152d4ef'),
(2, 'testuser', 'alex@test.com', '14d74b685f2b36ee0142ecd716aee3d0b9cbed617932c64888ebe03972f935c721ea43b2fe3cd89b6ed01cce2f706d4823e9c84d7cadb76de2f4e2ba5895a6c6', '6449679d4f4c999a9b0a7fc8dd1fe544898d71c92d05ba0b208ccfc1ce3cda5ca308a316315be135b54195f34c0cb48b3bc2ebd682439cd7a9e1b72b0260f3a6'),
(3, 'MYTEST', 'test@email.com', '3758dcb02dcf4a2a5e131ddfccde894344f109a5daf859fe1f6bf8770317a2c7474866fada18833b70a576f156d047b538eb2a1fef6480b69bade8ff52f86deb', '341a6d8e3b999fb27a2a15e82202af5b2163def34af251cd199d0e05304e8229e569f2de1d5c61de3c0a42024264979f48ae0b4af876a544f92613743a6e746e'),
(4, 'bode', 'bode@yahoo.com', '946fefdbe04a79f59804e90f4a4a0c5a84bdd723aaf35970f2e1384a89b65095ee84ffc9ea66609f0359625356101533769663d27644dc93db4d1e865fcea733', 'a8293815d480ffd6bb9a84c52ada619b21e2048db765e4679f1f3107a61f734f22f109e3db22cd4f46ae2e41c780f572a7ae44a63f0683eddcc591cceee8bbd3'),
(5, 'vasile', 'vasile@vas.com', 'c1ef4cc01f84635aa3620c5e0afae463a4ef40a732d53b3f8ea60cc3c8100c4e43d14630ef03000da8f36454b020f31430fafd7fc4eacfb0ff49cc7b3748bc33', '3ac0afd2737dcf222d03ae1f0e8919ee97c38e2cb77011fbc7b19895b7020853eca702f6b1b6299b5ed2e8ff9a11875b9fed054966d5551b175dd36299c6d5a1'),
(6, 'webapp', 'wad@upt.ro', 'cc5d56af81858f402a40edd73f2d3442cc2799ea8b327fc857fc23368f87e3185c2bcba08b9475ce42242580d5f7f3aab760456fcfe13761c9356abc80cc6eb7', '3992ac605ad032d2b08673c2605b87fe34079dd20380bff8851336614d946a5d1ea31a5335f2b25036eb1360fac40f850f1ca312714c6ea0418ab49d71b17a35'),
(7, 'ssd', 'ssd@ssd.com', '3a54f47d2225c5a19aeed4a0bb5893a57563140024fa1b1b7709ffe567d2f51f72ccd0275c1300af8f27d86a0c89c44e2d555fa8093bbede78f7900377bfcaea', '390a6214b85bf7cc61821aefb52d92a1bf31006277119ef59d105dd2213d7acfe0297cdb89315f5b64bdf8c3ce070598863ceea96861c69599acc02b9c900c6f'),
(8, 'miro', 'miro@miro.ro', '669d58851c7d4eea83263f19576990bb2e44b2cc89972fb101e0544f2f51215f9c8a2099dbb35e7c155af1992d7674141756834985451061564bd97daf3a87c2', '96f82ea2cec75b0c338c7576dee7babddf960410c83626649f6cfdc6691d293fa74e4ebbfc7f0f862597ca7a5bb4a54625af248001abe4b149bb15f7b5679d75');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
