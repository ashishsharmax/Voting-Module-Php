-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2019 at 01:13 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `name`) VALUES
(1, 'admin@admin.com', 'password', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `color_votes`
--

CREATE TABLE `color_votes` (
  `id` int(11) NOT NULL,
  `color_name` varchar(55) NOT NULL,
  `vote_count` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `color_votes`
--

INSERT INTO `color_votes` (`id`, `color_name`, `vote_count`) VALUES
(1, 'red', 2),
(2, 'yellow', 2),
(3, 'green', 2);

-- --------------------------------------------------------

--
-- Table structure for table `state_list`
--

CREATE TABLE `state_list` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(50) NOT NULL,
  `red_count` int(11) NOT NULL DEFAULT '0',
  `yellow_count` int(11) NOT NULL DEFAULT '0',
  `green_count` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_list`
--

INSERT INTO `state_list` (`state_id`, `state_name`, `red_count`, `yellow_count`, `green_count`) VALUES
(1, 'Andhra Pradesh', 0, 0, 0),
(2, 'Arunachal Pradesh', 0, 0, 0),
(3, 'Assam', 0, 0, 0),
(4, 'Bihar', 0, 1, 1),
(5, 'Chattisgarh', 0, 0, 0),
(6, 'Dadra and Nagar Haveli', 0, 0, 0),
(7, 'Daman and Diu', 0, 0, 0),
(8, 'Delhi', 0, 0, 0),
(9, 'Goa', 0, 0, 0),
(10, 'Gujarat', 0, 0, 0),
(11, 'Haryana', 0, 0, 0),
(12, 'Himachal Pradesh', 0, 0, 0),
(13, 'Jammu and Kashmir', 0, 0, 0),
(14, 'Jharkhand', 0, 0, 0),
(15, 'Karnataka', 1, 0, 1),
(16, 'Kerala', 1, 0, 0),
(17, 'Madhya Pradesh', 0, 0, 0),
(18, 'Maharasthra', 0, 0, 0),
(19, 'Manipur', 0, 0, 0),
(20, 'Meghalaya', 0, 0, 0),
(21, 'Mizoram', 0, 0, 0),
(22, 'Nagaland', 0, 0, 0),
(23, 'Orrisa', 0, 0, 0),
(24, 'Puducherry', 0, 0, 0),
(25, 'Punjab', 0, 0, 0),
(26, 'Rajasthan', 0, 0, 0),
(27, 'Sikkim', 0, 0, 0),
(28, 'Tamil Nadu', 0, 0, 0),
(29, 'Telangana', 0, 0, 0),
(30, 'Uttar Pradesh', 0, 0, 0),
(31, 'Uttarakhand', 0, 0, 0),
(32, 'West Bengal', 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `color_voted` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `state`, `city`, `color_voted`) VALUES
(68, 'Ashish Kumar Sharma', 'West Bengal', 'Jalpaiguri', 'Yellow'),
(69, 'Virat Kohli', 'Kerala', 'Alappuzha', 'Red'),
(70, 'Sam', 'Karnataka', 'Haveri district', 'Red'),
(71, 'Priya', 'Bihar', 'Madhepura', 'Green'),
(72, 'Ashish', 'Karnataka', 'Hassan', 'Green'),
(73, 'Abhishek Jha', 'Bihar', 'Jehanabad', 'Yellow');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_votes`
--
ALTER TABLE `color_votes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state_list`
--
ALTER TABLE `state_list`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `color_votes`
--
ALTER TABLE `color_votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `state_list`
--
ALTER TABLE `state_list`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
