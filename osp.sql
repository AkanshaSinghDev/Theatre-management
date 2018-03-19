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
-- Database: `osp`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `pass`) VALUES
('admin', 'pass123'),
('harshit', 'pass123');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `cost` int(11) NOT NULL,
  `duration` time NOT NULL,
  `cast` text NOT NULL,
  `genre` tinytext NOT NULL,
  `language` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `name`, `cost`, `duration`, `cast`, `genre`, `language`) VALUES
(1, 'Judwaa 2', 100000, '02:20:00', 'Varun Dhawan, Taapsee Panu, Anupam Kher', 'Comedy', 'english, hindi'),
(2, 'Newton', 90000, '02:25:00', 'Rajkumar Rao, Anjali Patil, Pankaj Tripathi', 'Political', 'hindi'),
(3, 'Bhoomi', 110000, '02:23:00', 'Sanjay Dutt, Aditi Rao, Sidhant Gupta', 'Action', 'hindi'),
(4, 'Golmaal', 200, '02:20:00', 'Ajay devgan, Tushar', 'Comedy', 'hindi'),
(5, 'Golmaal', 200, '02:20:00', 'Ajay devgan, Tushar', 'Comedy', 'hindi');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `movie_id` int(11) NOT NULL,
  `rating` float NOT NULL,
  `total_number` int(11) NOT NULL,
  `review` mediumtext NOT NULL,
  `theatre` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `screen`
--

CREATE TABLE `screen` (
  `sid` int(5) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `show_timings` time NOT NULL,
  `Screen_type` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `platinum` int(4) NOT NULL,
  `gold` int(4) NOT NULL,
  `silver` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `screen`
--

INSERT INTO `screen` (`sid`, `movie_id`, `show_timings`, `Screen_type`, `date`, `platinum`, `gold`, `silver`) VALUES
(1, 1, '11:00:00', '2D', '2017-09-29', 300, 200, 150),
(1, 1, '12:00:00', '2D', '2017-09-29', 300, 200, 150),
(2, 2, '12:00:00', '2D', '2017-09-30', 300, 200, 150);

-- --------------------------------------------------------

--
-- Table structure for table `snacks`
--

CREATE TABLE `snacks` (
  `Food_Item` varchar(20) NOT NULL,
  `Cost` int(3) NOT NULL,
  `Quantity` int(3) DEFAULT NULL,
  `making` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `snacks`
--

INSERT INTO `snacks` (`Food_Item`, `Cost`, `Quantity`, `making`) VALUES
('French Fries', 50, NULL, 20),
('Normal Popcorn', 40, NULL, 20),
('Caramel Popcorn', 70, NULL, 20),
('Pepsi', 55, NULL, 20),
('Slice', 45, NULL, 20),
('Nachos ', 90, NULL, 20),
('Butter Popcorn', 60, NULL, 20),
('Samosa', 35, NULL, 20),
('Sweet Corn', 40, NULL, 20),
('Chicken Wings', 110, NULL, 20),
('Smileys', 65, NULL, 20),
('Pizza', 150, 1, 20),
('Water', 15, 0, 20);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `seats` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `screen_id` int(11) NOT NULL,
  `concession_type` tinytext NOT NULL,
  `concession` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `seat_nos` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `screen`
--
ALTER TABLE `screen`
  ADD PRIMARY KEY (`sid`,`show_timings`,`date`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
