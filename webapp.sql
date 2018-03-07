-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2018 at 01:48 PM
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
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(11) NOT NULL,
  `movie_title` varchar(100) NOT NULL,
  `movie_desc` varchar(500) NOT NULL,
  `movie_year` year(4) NOT NULL,
  `movie_rating` varchar(5) NOT NULL,
  `movie_poster` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_title`, `movie_desc`, `movie_year`, `movie_rating`, `movie_poster`) VALUES
(1, 'Black Panther', 'Lorem ipsum', 2017, 'PG13', 'images/m24.jpg'),
(2, 'Kingsman: The Golden Circle', 'Lorem ipsum', 2017, 'R', 'images/m2.jpg'),
(3, 'Spider-Man: Homecoming', 'Lorem ipsum', 2017, 'PG13', 'images/m3.jpg'),
(4, 'Wonder Woman', 'Lorem ipsum', 2017, 'PG13', 'images/m4.jpg'),
(5, 'Transformers: The Last Knight ', 'Lorem ipsum', 2017, 'PG13', 'images/m1.jpg'),
(6, 'Beauty and the Beast ', 'Lorem ipsum', 2017, 'PG13', 'images/m1.jpg'),
(7, 'Pirates of the Caribbean: Dead Men Tell No Tales', 'Lorem ipsum', 2017, 'PG13', 'images/m1.jpg'),
(8, 'The LEGO Ninjago Movie', 'Lorem ipsum', 2017, 'PG13', 'images/m1.jpg'),
(9, 'Guardians of the Galaxy Vol. 2', 'Lorem ipsum', 2017, 'PG13', 'images/m1.jpg'),
(10, 'Annabelle: Creation ', 'Lorem ipsum', 2017, 'PG13', 'images/m1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
