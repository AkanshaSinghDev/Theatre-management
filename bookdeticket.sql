-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2018 at 07:25 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookdeticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `mlist`
--

CREATE TABLE `mlist` (
  `mname` varchar(50) NOT NULL,
  `vpath` varchar(20) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mlist`
--

INSERT INTO `mlist` (`mname`, `vpath`, `cost`) VALUES
('AIRLIFT', 'media/airlift.mp4', 200),
('X-MEN : APOCALYPSE', 'media/apocalypse.mp4', 300),
('AVATAR', 'media/avatar.mp4', 300),
('AVENGERS', 'media/avengers.mp4', 300),
('CAPTAIN AMERICA : THE WINTER SOLDIER', 'media/captain.mp4', 300),
('DEADPOOL', 'media/deadpool.mp4', 300),
('HOBBIT', 'media/hobbit.mp4', 300),
('LOGAN', 'media/logan.mp4', 300),
('FINDING NEMO', 'media/nemo.mp4', 300),
('PIRATES OF CARIBBEAN', 'media/poc.mp4', 300),
('HARRY POTTER AND THE ORDER OF PHOENIX', 'media/potter.mp4', 300),
('STAR WARS : THE FORCE AWAKENS', 'media/starwars.mp4', 300),
('THOR', 'media/thor.mp4', 300),
('THE ADVENTURES OF TINTIN', 'media/tintin.mp4', 300),
('X-MEN : THE WOLVERINE', 'media/wolverine.mp4', 300);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `name` varchar(50) NOT NULL,
  `path` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`name`, `path`) VALUES
('X-MEN : APOCALYPSE', 'media/apocalypse.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `MovieID` int(11) NOT NULL,
  `Rating` int(11) NOT NULL,
  `Review` varchar(1000) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`MovieID`, `Rating`, `Review`, `Name`, `UserID`) VALUES
(1, 3, 'Yes this is a test!', 'Ye Jawani He Diwani', 1),
(1, 4, 'Hello', 'Terminator', 2),
(1, 5, 'Hello', 'Yeh Jawani He Diwani', 3),
(1, 2, 'Hello', 'Transformers', 4),
(1, 5, 'Hello', 'Need For Speed', 5),
(1, 5, 'Hello', 'Need For Speed', 6),
(1, 5, 'Okay i think this will work', 'Fight Club', 7),
(1, 4, 'testeeeee', 'Transformers', 8),
(1, 3, 'ddddddddd', 'Yeh Jawani He Diwani', 9),
(1, 3, 'rfrgrgrgrgrgrg', 'Fight Club', 10),
(1, 5, 'wefewffef', 'Need For Speed', 11),
(1, 4, 'ffff', 'Terminator', 12),
(1, 3, 'Nice Movie', 'Yeh Jawani He Diwani', 13),
(1, 4, 'Nice Movie', 'Yeh Jawani He Diwani', 14),
(1, 5, 'Nice', 'Transformers', 15),
(1, 2, 'Good', 'Fight Club', 16),
(1, 4, 'Must Watch', 'Fight Club', 17),
(1, 5, 'Great!', 'Transformers', 18),
(1, 4, 'Good movie', 'Terminator', 19),
(1, 5, 'Good!!', 'Yeh Jawani He Diwani', 20),
(1, 4, 'Nice', 'Need For Speed', 21),
(1, 4, 'Gooooodd', 'Yeh Jawani He Diwani', 22),
(1, 4, 'Beautiful', 'Yeh Jawani He Diwani', 23),
(1, 3, 'Good', 'Transformers', 24),
(1, 0, '', 'pick', 25),
(1, 5, 'Such a nice Movie', 'Transformers', 26),
(1, 5, 'EKDAM BADIYA', 'Need For Speed', 27),
(1, 5, 'Awesome', 'Interstellar', 28),
(1, 3, 'Okish', 'Interstellar', 29),
(1, 0, '', 'pick', 30),
(1, 5, 'GOODD', 'Transformers', 31),
(1, 1, 'OKKKKK', 'Interstellar', 32),
(1, 5, 'The movie was really good..', 'Interstellar', 33),
(1, 4, 'Nice g5tg', 'Interstellar', 34),
(1, 1, 'AVG', 'Interstellar', 35);

-- --------------------------------------------------------

--
-- Table structure for table `moviesname`
--

CREATE TABLE `moviesname` (
  `MovieID` int(11) NOT NULL,
  `MovieName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moviesname`
--

INSERT INTO `moviesname` (`MovieID`, `MovieName`) VALUES
(0, 'Interstellar'),
(1, 'Terminator'),
(2, 'Need For Speed'),
(3, 'Transformers'),
(4, 'Yeh Jawani He Diwani'),
(5, 'Fight Club');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `item_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `txn_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_gross` float(10,2) NOT NULL,
  `currency_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) NOT NULL DEFAULT '',
  `dob` date DEFAULT NULL,
  `psw1` varchar(20) DEFAULT NULL,
  `psw2` varchar(20) DEFAULT NULL,
  `num` bigint(10) DEFAULT NULL,
  `gender` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `dob`, `psw1`, `psw2`, `num`, `gender`) VALUES
('admin', 'admin', '1997-05-14', 'pass123', 'pass123', 9445826328, 'male'),
('Harshit Aggarwal', 'aggarwalh.com@gmail.com', '1997-05-14', 'vit', 'vit', 9445826328, 'male'),
('SB Mathur', 'sbmathur1811@yahoo.com', '2017-11-12', 'jaisairam', 'jaisairam', 9868020221, 'male'),
('Vivek Kumar', 'vickylucky1108@gmail.com', '1996-11-08', 'vjr', 'vjr', 9962849905, 'male'),
('Vivek Kumar', 'vivek.it.1108@gmail.com', '1996-11-08', '1234', '1234', 9962849905, 'male');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `userid` varchar(50) NOT NULL COMMENT 'userid',
  `number` int(10) NOT NULL COMMENT 'seat number',
  `PNR` varchar(13) NOT NULL COMMENT 'PNR',
  `date` date NOT NULL COMMENT 'date of booking'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `s1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`s1`) VALUES
('');

-- --------------------------------------------------------

--
-- Table structure for table `theatre`
--

CREATE TABLE `theatre` (
  `sid` int(5) NOT NULL,
  `movie` varchar(20) NOT NULL,
  `movie_shows` int(5) NOT NULL,
  `show_timings` varchar(20) NOT NULL,
  `Screen_type` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `platinum` int(4) NOT NULL,
  `gold` int(4) NOT NULL,
  `silver` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `theatre`
--

INSERT INTO `theatre` (`sid`, `movie`, `movie_shows`, `show_timings`, `Screen_type`, `date`, `platinum`, `gold`, `silver`) VALUES
(1, 'daangal', 2, '12:30', '2D', '2017-11-04', 300, 200, 100),
(1, 'AIRLIFT', 2, '12:30', '2D', '2017-11-03', 300, 200, 100),
(2, 'titanic', 1, '12:30', '2D', '2017-11-03', 100, 400, 500),
(2, 'nemo', 1, '12:30', '2D', '2017-11-03', 100, 200, 300);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `tickID` float NOT NULL,
  `sid` int(1) DEFAULT NULL,
  `mname` varchar(50) NOT NULL,
  `tdate` date NOT NULL,
  `theatre` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `seatno` varchar(30) NOT NULL,
  `screenType` varchar(5) DEFAULT NULL,
  `mfare` float NOT NULL,
  `TotalPrice` float NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`tickID`, `sid`, `mname`, `tdate`, `theatre`, `time`, `seatno`, `screenType`, `mfare`, `TotalPrice`, `email`) VALUES
(1, NULL, 'X-MEN : THE WOLVERINE', '2017-11-01', 'VIT Cinema', '12:30 PM', '2', NULL, 300, 354, 'vivek.it.1108@gmail.com'),
(21, NULL, 'AIRLIFT', '2017-11-02', 'VIT Cinema', '12:30 PM', '1', NULL, 100, 118, 'vivek.it.1108@gmail.com'),
(22, NULL, 'X-MEN : APOCALYPSE', '2017-11-04', 'VIT Cinema', '4:00 PM', '3', NULL, 300, 354, 'sbmathur1811@yahoo.com'),
(23, NULL, 'FINDING NEMO', '2017-11-06', 'VIT Cinema', '8:00 PM', '4', NULL, 400, 472, 'sbmathur1811@yahoo.com'),
(24, NULL, 'AVENGERS', '2017-11-03', 'VIT Cinema', '12:30 PM', '2', NULL, 200, 236, 'sbmathur1811@yahoo.com'),
(25, NULL, 'AIRLIFT', '0000-00-00', 'VIT Cinema', '', '1', NULL, 100, 118, ''),
(26, NULL, 'AIRLIFT', '0000-00-00', 'VIT Cinema', '', '1', NULL, 100, 118, ''),
(27, NULL, 'AIRLIFT', '2017-11-04', 'VIT Cinema', '12:30 PM', '1', NULL, 100, 118, ''),
(28, NULL, 'AIRLIFT', '2017-11-05', 'VIT Cinema', '12:30 PM', '1', NULL, 100, 118, ''),
(29, NULL, 'AIRLIFT', '2017-11-12', 'VIT Cinema', '12:30 PM', '1', NULL, 100, 118, ''),
(30, NULL, 'AIRLIFT', '2017-11-12', 'VIT Cinema', '12:30 PM', '1', NULL, 100, 118, ''),
(31, NULL, 'X-MEN : APOCALYPSE', '2017-11-05', 'VIT Cinema', '12:30 PM', '1', NULL, 100, 118, ''),
(32, NULL, 'AIRLIFT', '2017-11-05', 'VIT Cinema', '12:30 PM', '1', NULL, 100, 118, ''),
(33, NULL, 'X-MEN : APOCALYPSE', '2017-11-05', 'VIT Cinema', '12:30 PM', '1', NULL, 100, 118, ''),
(34, NULL, 'X-MEN : APOCALYPSE', '2017-11-04', 'VIT Cinema', '12:30 PM', '1', NULL, 100, 118, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `moviesname`
--
ALTER TABLE `moviesname`
  ADD PRIMARY KEY (`MovieID`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`tickID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `tickID` float NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
