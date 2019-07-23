-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2019 at 01:17 AM
-- Server version: 10.1.40-MariaDB
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
-- Database: `new`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `UID` int(10) NOT NULL,
  `Balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`UID`, `Balance`) VALUES
(13, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AIDD` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AIDD`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin2', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `bet`
--

CREATE TABLE `bet` (
  `UID` int(10) DEFAULT NULL,
  `MID` int(10) DEFAULT NULL,
  `prefer_side` varchar(10) NOT NULL,
  `odd` float NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bet`
--

INSERT INTO `bet` (`UID`, `MID`, `prefer_side`, `odd`, `amount`) VALUES
(13, 7, 'Rebels', 1.3, 122222);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `uid` int(10) NOT NULL,
  `feedback` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`uid`, `feedback`) VALUES
(22, 'Second FeedBack'),
(25, 'this is a testing feedback');

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `MID` int(11) NOT NULL,
  `team_1` varchar(20) NOT NULL,
  `team_2` varchar(20) NOT NULL,
  `time` datetime(1) NOT NULL,
  `result` varchar(10) DEFAULT NULL,
  `odd_1` float NOT NULL,
  `odd_2` float NOT NULL,
  `draw` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`MID`, `team_1`, `team_2`, `time`, `result`, `odd_1`, `odd_2`, `draw`) VALUES
(1, 'Myanmar', 'Thailand', '2019-07-30 10:34:09.0', '', 2.1, 3.5, 4),
(2, 'Spain', 'England', '2019-07-29 11:27:09.0', '', 1.2, 2.1, 3),
(3, 'Thailand', 'Indo', '2019-07-31 21:34:09.0', '', 2.1, 1.6, 3),
(4, 'Black Eagles', 'Banana Slugs', '2020-01-01 01:12:00.0', '', 1.2, 2.2, 3),
(5, 'Preachers', 'Fighting Cardinals', '2020-03-02 23:34:00.0', '', 2.1, 1.3, 2.5),
(6, 'The Predators', 'Razorbacks', '2019-10-26 10:34:00.0', '', 1.1, 2.1, 2.5),
(7, 'Rebels', 'Fighting Crusaders', '2019-11-15 12:44:00.0', '', 1.3, 1.5, 1.4),
(8, 'Avengers', 'Aztecs', '2019-12-17 10:37:00.0', '', 1.6, 1.7, 1.9),
(9, 'Blackflies', 'Blazers', '2019-10-23 07:20:00.0', '', 1.2, 1.3, 1.8),
(10, 'Red Devils', 'Fighting Bees', '2019-09-08 01:30:00.0', '', 2.1, 1.1, 2),
(11, 'Purple Pride', 'Buccaneers', '2019-08-04 12:04:00.0', '', 2.1, 1.9, 2),
(12, 'Buckeyes', 'Buffaloes', '2019-09-12 10:34:00.0', '', 1.8, 1.5, 1.9),
(13, 'Los Lobos', 'Comets', '2019-08-12 10:20:00.0', '', 1.4, 1.6, 2),
(14, 'Fighting Cardinals', 'Banana Slugs', '2020-01-01 01:10:00.0', '', 3, 1.2, 2.2),
(15, 'Preachers', 'The Predators', '2019-12-02 23:34:00.0', '', 2.5, 2.4, 2.3),
(16, 'Black Eagles', 'Razorbacks', '2019-10-16 10:13:00.0', '', 1.1, 2.1, 2.5),
(17, 'Rebels', 'Blazers', '2019-11-05 12:44:00.0', '', 1.4, 1.5, 1.3),
(18, 'Avengers', 'Blackflies', '2019-12-17 10:30:00.0', '', 1.8, 1.7, 1.2),
(19, 'Fighting Crusaders', 'Aztecs', '2019-11-23 07:30:00.0', '', 1.2, 1.3, 1.23),
(20, 'Red Devils', 'Los Lobos', '2019-09-09 01:30:00.0', '', 2, 1.9, 1.2),
(21, 'Purple Pride', 'Fighting Bees', '2019-08-04 12:08:00.0', '', 2, 1.5, 1.3),
(22, 'Buccaneers', 'Buffaloes', '2019-10-12 20:12:00.0', '', 2.3, 1, 1.1),
(23, 'Buckeyes', 'Comets', '2019-07-31 07:07:00.0', '', 2, 1.6, 1.3),
(24, 'Rangers', 'Soldiers', '2019-06-01 02:30:00.0', '2-1', 2, 1.5, 1.7),
(25, 'UIT', 'UMM', '2019-01-01 04:30:00.0', '3-1', 3, 1.2, 2.2),
(34, 'YUFL', 'YU', '2019-10-11 01:20:20.0', '', 1.3, 1.4, 1.5);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `uid` int(10) NOT NULL,
  `MID` int(10) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`uid`, `MID`, `message`) VALUES
(22, 1, 'Draw result'),
(23, 1, 'Draw result'),
(25, 1, 'Draw result'),
(25, 4, 'Team 1 win - Team 2 lose');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `uid` int(10) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `city` varchar(15) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`uid`, `first_name`, `last_name`, `username`, `password`, `email`, `phone`, `country`, `gender`, `dob`, `city`, `address`) VALUES
(1, 'phyo', 'pyae', 'admin', 'admin', 'phyopyaenyeinchanuit', '09950455016', 'myanmar', 'M', '2000-03-23', 'yangon', 'hlaing campus'),
(7, 'pyae wa', 'nyein chan', 'pyawwa', 'pyaewa123', 'pyaewanyeinchan@gmai', '095312371', 'myanmar', 'M', '2004-04-15', 'mandalay', 'mandalay cae hostel'),
(10, 'mgmg', 'mgmg', 'mgmgmgmg', 'asdfghjkl', 'mgmgmgmg@gmail.com', '095312370', 'myanmar', 'M', '2004-04-21', 'mandalay', 'mandalay cae hostel'),
(13, 'mgmg', 'mgmg', 'mgmgmgmg1', 'iammgmg', 'mgmgmgmg1@gmail.com', '095312372', 'myanmar', 'M', '2004-04-21', 'mandalay', 'mandalay cae hostel'),
(15, 'mgmg', 'mgmg', 'mgmgmgmg11', 'zFDSfsdafdsf', 'mgmgmgmg11@gmail.com', '095312375', 'myanmar', 'M', '2004-04-21', 'mandalay', 'mandalay cae hostel'),
(22, 'kyi', 'kyi', 'kyikyi', 'kyikyi', 'kyikyi@gmail.com', '12312321', 'myanmar', 'M', '1992-07-08', 'kyauktan', 'ywar'),
(23, 'zaw1', 'zaw', 'zawzaw', 'zawzaw', 'dd@gmail.com', 'asd', 'asdd', 'M', 'zxcv', 'dfsdf', 'sdsd'),
(24, 'pp', 'pp', 'pp', 'pppppp', 'pp@gmail.com', 'pp', 'pp', 'M', '1993-09-03', 'pp', 'pp'),
(25, 'gg', 'gg', 'gg', 'gggggg', 'gg@gmail.com', 'gg', 'gg', 'M', '2001-06-26', 'gg', 'gg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`UID`),
  ADD UNIQUE KEY `UID` (`UID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AIDD`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `AID` (`AIDD`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`MID`),
  ADD UNIQUE KEY `time` (`time`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`uid`,`username`,`email`),
  ADD UNIQUE KEY `uid` (`uid`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_2` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AIDD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `MID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
