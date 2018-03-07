-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2018 at 05:15 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webappdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `building`
--

CREATE TABLE `building` (
  `building_id` int(11) NOT NULL,
  `building_name` varchar(100) NOT NULL,
  `building_address` varchar(100) NOT NULL,
  `building_owner` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `building`
--

INSERT INTO `building` (`building_id`, `building_name`, `building_address`, `building_owner`) VALUES
(2, 'SM City Cebu', 'Cebu City, Cebu', 'SM Prime Holdings'),
(3, 'SM Seaside City Cebu', 'Cebu South Coastal Rd, Cebu City, Cebu', 'SM Prime Holdings'),
(4, 'SM City Consolacion', 'Cebu N Rd, Consolacion, 6001 Cebu', 'SM Prime Holdings');

-- --------------------------------------------------------

--
-- Table structure for table `cinema`
--

CREATE TABLE `cinema` (
  `cinema_id` int(11) NOT NULL,
  `cinema_number` varchar(100) NOT NULL,
  `cinema_type` enum('Digital','3D','IMAX','') NOT NULL,
  `building_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cinema`
--

INSERT INTO `cinema` (`cinema_id`, `cinema_number`, `cinema_type`, `building_id`) VALUES
(21, 'Cinema 1', 'Digital', 2),
(22, 'Cinema 2', 'Digital', 2),
(23, 'Cinema 3', 'Digital', 2),
(24, 'IMAX', 'IMAX', 2),
(25, 'Cinema 5', 'Digital', 2),
(26, 'Cinema 6', 'Digital', 2),
(27, 'Cinema 7', 'Digital', 2),
(28, 'Cinema 8', 'Digital', 2),
(29, 'Digital Cinema 1', 'Digital', 3),
(30, 'Digital Cinema 2', 'Digital', 3),
(31, 'Digital Cinema 3', 'Digital', 3),
(32, 'Digital Cinema 4', 'Digital', 3),
(33, 'Director\'s Club 1', 'Digital', 3),
(34, 'Director\'s Club 2', 'Digital', 3),
(35, 'Large Screen Cinema', 'Digital', 3),
(36, 'Center Stage', 'Digital', 3),
(37, 'Cinema 1', 'Digital', 4),
(38, 'Cinema 2', 'Digital', 4),
(39, 'Cinema 3', 'Digital', 4),
(40, 'Cinema 4', 'Digital', 4);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(11) NOT NULL,
  `movie_title` varchar(100) NOT NULL,
  `movie_desc` varchar(500) NOT NULL,
  `movie_year` year(4) NOT NULL,
  `movie_rating` varchar(5) NOT NULL,
  `movie_poster` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_title`, `movie_desc`, `movie_year`, `movie_rating`, `movie_poster`) VALUES
(1, 'IT', 'Lorem ipsum', 2017, 'PG13', '/mts/images/1.jpg'),
(2, 'Kingsman: The Golden Circle', 'Lorem ipsum', 2017, 'R', '/mts/images/2.jpg'),
(3, 'Spider-Man: Homecoming', 'Lorem ipsum', 2017, 'PG13', '/mts/images/3.jpg'),
(4, 'Wonder Woman', 'Lorem ipsum', 2017, 'PG13', '/mts/images/4.jpg'),
(5, 'Transformers: The Last Knight ', 'Lorem ipsum', 2017, 'PG13', '/mts/images/1.jpg'),
(6, 'Beauty and the Beast ', 'Lorem ipsum', 2017, 'PG13', '/MTS/images/1.jpg'),
(7, 'Pirates of the Caribbean: Dead Men Tell No Tales', 'Lorem ipsum', 2017, 'PG13', '/mts/images/1.jpg'),
(8, 'The LEGO Ninjago Movie', 'Lorem ipsum', 2017, 'PG13', '/mts/images/1.jpg'),
(9, 'Guardians of the Galaxy Vol. 2', 'Lorem ipsum', 2017, 'PG13', '/mts/images/1.jpg'),
(10, 'Annabelle: Creation ', 'Lorem ipsum', 2017, 'PG13', '/mts/images/1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `screening`
--

CREATE TABLE `screening` (
  `screening_id` int(11) NOT NULL,
  `screening_date` date NOT NULL,
  `screening_sched` varchar(100) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `cinema_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `seat_id` int(11) NOT NULL,
  `seat_row` varchar(100) NOT NULL,
  `seat_number` varchar(100) NOT NULL,
  `seat_status` enum('EMPTY','RESERVED','OCCUPIED','') NOT NULL,
  `cinema_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `trans_ref` varchar(12) NOT NULL,
  `trans_date` datetime NOT NULL,
  `trans_amount` float NOT NULL,
  `trans_type` enum('Credit','','','') NOT NULL,
  `screening_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_fname` varchar(100) NOT NULL,
  `user_lname` varchar(100) NOT NULL,
  `user_bod` date NOT NULL,
  `user_gender` enum('Male','Female','','') NOT NULL,
  `user_civil` enum('Single','Married','','') NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_province` varchar(24) NOT NULL,
  `user_city` varchar(24) NOT NULL,
  `user_mobile` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_type` enum('Admin','Customer','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_fname`, `user_lname`, `user_bod`, `user_gender`, `user_civil`, `user_address`, `user_province`, `user_city`, `user_mobile`, `user_email`, `user_type`) VALUES
(21, 'Andrew', 'Edioma', '1998-07-04', 'Male', 'Single', 'Deca Homes', 'Cebu', 'Mandaue City', '09330495195', 'andrewedioma@gmail.com', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `building`
--
ALTER TABLE `building`
  ADD PRIMARY KEY (`building_id`);

--
-- Indexes for table `cinema`
--
ALTER TABLE `cinema`
  ADD PRIMARY KEY (`cinema_id`),
  ADD KEY `building_id` (`building_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `screening`
--
ALTER TABLE `screening`
  ADD PRIMARY KEY (`screening_id`),
  ADD KEY `cinema_id` (`cinema_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`seat_id`),
  ADD KEY `cinema_id` (`cinema_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `screening_id` (`screening_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `building`
--
ALTER TABLE `building`
  MODIFY `building_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `cinema`
--
ALTER TABLE `cinema`
  MODIFY `cinema_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `screening`
--
ALTER TABLE `screening`
  MODIFY `screening_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cinema`
--
ALTER TABLE `cinema`
  ADD CONSTRAINT `cinema_ibfk_1` FOREIGN KEY (`building_id`) REFERENCES `building` (`building_id`);

--
-- Constraints for table `screening`
--
ALTER TABLE `screening`
  ADD CONSTRAINT `screening_ibfk_1` FOREIGN KEY (`cinema_id`) REFERENCES `cinema` (`cinema_id`),
  ADD CONSTRAINT `screening_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`);

--
-- Constraints for table `seat`
--
ALTER TABLE `seat`
  ADD CONSTRAINT `seat_ibfk_1` FOREIGN KEY (`cinema_id`) REFERENCES `cinema` (`cinema_id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`screening_id`) REFERENCES `screening` (`screening_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
