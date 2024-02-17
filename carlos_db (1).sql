-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2024 at 02:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carlos_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentID` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentID`, `fullname`, `dob`, `email`, `address`) VALUES
(11, 'noy2', '2024-01-15', 'reymartcarlos30@gmail.com', 'brgy.manalad'),
(12, 'mrty', '2024-02-16', 'raymundacarlossr@gmail.com', 'brgy.manalad ilog negross occidental');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `username`, `fullname`, `email`, `password`) VALUES
(1, 'admin', 'admin admin', 'admin@gmail.com', 'gwapo'),
(2, 'reymart carlos', 'nana', 'nana@gmail.com', '123123'),
(3, 'Carla Venice Guillarda', 'KlayVelligas', 'Klay@gmail.com', 'koykoy0901'),
(4, 'ejie manlapao', 'xiaxia', 'ejie@gmail.com', '1234'),
(5, 'eric', 'eric', 'eric12@gmail.com', 'Eric12'),
(6, 'carlos', 'reymart', 'reymartcarlos30@gmail.com', '@reymart.com'),
(7, 'carlos', 'reymart', 'reymart@gmail.com', '123'),
(8, 'koykoy', 'kobe john gicos', 'koykoy@gmail.com', 'koykoypogi'),
(9, 'klay21', 'Carla Venice Guillarda', 'Klay@gmail.com', '112233'),
(10, 'marspamore', 'Maricel Gicos', 'maricel@gmail.com', '090909'),
(11, 'klay', 'carla venice guillarda', 'klay@gmail.com', '9999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentID`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
