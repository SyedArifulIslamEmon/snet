-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 07, 2014 at 11:05 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fjung`
--

-- --------------------------------------------------------

--
-- Table structure for table `frnd_emon`
--

CREATE TABLE IF NOT EXISTS `frnd_emon` (
  `postid` varchar(50) DEFAULT NULL,
  `post` varchar(1000) DEFAULT NULL,
  `postdate` datetime DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  `liker` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frnd_emon`
--

INSERT INTO `frnd_emon` (`postid`, `post`, `postdate`, `img`, `liker`) VALUES
('emon20140206124655', 'Hello friends! {emon} has joined Friends Jungle!', '2014-02-06 12:46:55', '38.jpg', 2),
('20140206174722emon123', 'New post', '2014-02-06 17:47:22', '', 2),
('20140206175654emon571', 'A new post here', '2014-02-06 17:56:54', '', 1),
('20140206175727emon414', 'Another post', '2014-02-06 17:57:27', '', 1),
('20140206175942emon763', 'Post again', '2014-02-06 17:59:42', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `frnd_frnds`
--

CREATE TABLE IF NOT EXISTS `frnd_frnds` (
  `juser` varchar(20) NOT NULL,
  `jname` varchar(100) NOT NULL,
  `jdob` varchar(50) NOT NULL,
  `jsex` varchar(10) NOT NULL,
  `jabout` text NOT NULL,
  `jpic` varchar(50) NOT NULL,
  `jemail` varchar(100) NOT NULL,
  `jpost` datetime NOT NULL,
  PRIMARY KEY (`juser`),
  UNIQUE KEY `juser` (`juser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frnd_frnds`
--

INSERT INTO `frnd_frnds` (`juser`, `jname`, `jdob`, `jsex`, `jabout`, `jpic`, `jemail`, `jpost`) VALUES
('emon', 'Syed Ariful Islam', '3rd August', 'Male', 'Has beard', '38.jpg', 'emon@frndjungle.com', '2014-02-06 17:59:42'),
('leonis7', 'MD. HASAN SHAHRIAR', '29 July', 'Male', 'SupermanSupermanSuperman', '36.jpg', 'leonis@frndjungle.com', '2014-02-06 23:56:48'),
('mumu', 'Nishita Aktar', '3rd September', 'Female', ':P', '12.jpg', 'mumu@frndJungle.com', '2014-02-06 17:56:21'),
('shafik', 'Shafikul Islam', '2nd September', 'Male', 'Good guy', '5.jpg', 'shafik@frndjungle.com', '2014-02-06 18:06:20');

-- --------------------------------------------------------

--
-- Table structure for table `frnd_junglee`
--

CREATE TABLE IF NOT EXISTS `frnd_junglee` (
  `juser` varchar(100) NOT NULL,
  `jpass` varchar(100) NOT NULL,
  `jdate` date NOT NULL,
  UNIQUE KEY `jname` (`juser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frnd_junglee`
--

INSERT INTO `frnd_junglee` (`juser`, `jpass`, `jdate`) VALUES
('emon', '6ca29d9bb530402bd09fe026ee83814844e42e127470fbabfa4fedcd415ad34605d539a9', '2014-02-06'),
('leonis7', 'f3609badce37435ec0fed38895890c582a32f59e6290510bb071770732bb7b9c24797289', '2014-02-06'),
('mumu', '23c1622d0f5af8a8a8cd90dd1898f3cbdc940a4eebe42c8b34d94eb0694d29fe6003d128', '2014-02-06'),
('shafik', '69830ca86240b626dd9943f6fe4d54c2ab51f8fb753b2c75435a1754dcf46a4a352131f7', '2014-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `frnd_leonis7`
--

CREATE TABLE IF NOT EXISTS `frnd_leonis7` (
  `postid` varchar(50) DEFAULT NULL,
  `post` varchar(1000) DEFAULT NULL,
  `postdate` datetime DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  `liker` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frnd_leonis7`
--

INSERT INTO `frnd_leonis7` (`postid`, `post`, `postdate`, `img`, `liker`) VALUES
('20140207072332leonis7811', 'Another post', '2014-02-06 22:23:32', '', 10),
('20140207085647leonis7182', 'post', '2014-02-06 23:56:47', '', 18);

-- --------------------------------------------------------

--
-- Table structure for table `frnd_mumu`
--

CREATE TABLE IF NOT EXISTS `frnd_mumu` (
  `postid` varchar(50) DEFAULT NULL,
  `post` varchar(1000) DEFAULT NULL,
  `postdate` datetime DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  `liker` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frnd_mumu`
--

INSERT INTO `frnd_mumu` (`postid`, `post`, `postdate`, `img`, `liker`) VALUES
('mumu20140206232725', 'Hello friends! {mumu} has joined Friends Jungle!', '2014-02-06 14:27:25', '12.jpg', 3),
('20140207025621mumu729', 'Hello World!', '2014-02-06 17:56:21', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `frnd_shafik`
--

CREATE TABLE IF NOT EXISTS `frnd_shafik` (
  `postid` varchar(50) DEFAULT NULL,
  `post` varchar(1000) DEFAULT NULL,
  `postdate` datetime DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  `liker` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frnd_shafik`
--

INSERT INTO `frnd_shafik` (`postid`, `post`, `postdate`, `img`, `liker`) VALUES
('shafik20140206124537', 'Hello friends! {shafik} has joined Friends Jungle!', '2014-02-06 12:45:37', '5.jpg', 7),
('20140206180255shafik964', 'Post', '2014-02-06 18:02:55', '', 1),
('20140206180300shafik823', 'post again', '2014-02-06 18:03:00', '', 1),
('20140206180330shafik925', 'An absolutely new post', '2014-02-06 18:03:30', '', 2),
('20140206180620shafik390', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.', '2014-02-06 18:06:20', '', 4);
