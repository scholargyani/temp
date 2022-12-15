-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 05:49 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scholargyani`
--

-- --------------------------------------------------------

--
-- Table structure for table `dauser`
--

CREATE TABLE `dauser` (
  `id` int(5) NOT NULL,
  `First_name` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `Last_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_estonian_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dauser`
--

INSERT INTO `dauser` (`id`, `First_name`, `Last_name`, `username`, `password`) VALUES
(1, 'Viraj', 'Pataniya', 'viraj300', '300viraj');

-- --------------------------------------------------------

--
-- Table structure for table `schinfo`
--

CREATE TABLE `schinfo` (
  `schname` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `info` varchar(500) CHARACTER SET utf8mb4 NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schinfo`
--

INSERT INTO `schinfo` (`schname`, `info`, `link`) VALUES
('xyz', 'Alphabet Inc. is an American multinational technology conglomerate holding company headquartered in Mountain View, California. It was created through a restructuring of Google on October 2, 2015,[2] and became the parent company of Google and several former Google subsidiaries.[3][4][5] The two co-founders of Google remained as controlling shareholders, board members, and employees at Alphabet. Alphabet is the world\'s third-largest technology company by revenue and one of the world\'s most valuab', 'https://en.wikipedia.org/wiki/Alphabet_Inc.');

-- --------------------------------------------------------

--
-- Table structure for table `scholarships`
--

CREATE TABLE `scholarships` (
  `id` int(50) NOT NULL,
  `schname` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `Gender` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `caste` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `ssc` int(6) NOT NULL,
  `hsc` int(6) NOT NULL,
  `income` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scholarships`
--

INSERT INTO `scholarships` (`id`, `schname`, `Gender`, `caste`, `ssc`, `hsc`, `income`) VALUES
(1, 'xyz', 'any', 'obc', 55, 55, 10000),
(2, 'bhv', 'Other', 'obc', 1000, 70, 70),
(3, 'MYSY ', 'Any', 'any', 250000, 80, 80);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(40) NOT NULL,
  `FullName` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_nopad_ci NOT NULL,
  `Email` varchar(70) CHARACTER SET utf8mb4 NOT NULL,
  `Password` varchar(50) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FullName`, `Email`, `Password`) VALUES
(1, 'Bhavesh Thakkar', 'bhaveshthacker360@gmail.com', 'BHAVESH166'),
(2, 'viraj', 'viraj5533@gmail.com', 'viraj123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dauser`
--
ALTER TABLE `dauser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scholarships`
--
ALTER TABLE `scholarships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dauser`
--
ALTER TABLE `dauser`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `scholarships`
--
ALTER TABLE `scholarships`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
