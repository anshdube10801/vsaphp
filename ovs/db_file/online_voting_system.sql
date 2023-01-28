-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 04:21 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_voting_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `id1` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`id1`, `name`, `mobile`, `password`) VALUES
(1, 'Aditya', 'admin@admin.com', 'top secret');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `password` varchar(110) NOT NULL,
  `address` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `votes` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `state` text NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mobile`, `password`, `address`, `photo`, `status`, `votes`, `role`, `state`) VALUES
(13, 'test', 'test@test.com', 'MTIzNA==', '306 b sudama nagar indore mp', '2.PNG', 1, 0, 1, 'approved'),
(21, 'sdnfs', 'a@b.com', 'MTIzNA==', 'undiasufni', '2.PNG', 0, 0, 1, 'approved'),
(27, 'congress', 'congresss@gmail.com', '123', 'delhi', '2.PNG', 0, 1, 2, 'approved'),
(28, 'BJP', 'bjp@bjp.com', 'bjp', 'delhi', 'download.png', 1, 12, 2, 'approved'),
(30, 'Aam Admi Party', 'admp@gmail.com', '1234', 'delhi', 'download.jpg', 0, 1, 2, 'approved'),
(31, 'aditya', 'aditya1@gmail.com', 'MTIzNA==', 'test', '2.PNG', 1, 0, 1, 'approved'),
(32, 'chiku', 'chiku@gmail.com', 'MTIzNA==', 'test', '3.PNG', 1, 0, 1, 'approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin1`
--
ALTER TABLE `admin1`
  ADD PRIMARY KEY (`id1`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin1`
--
ALTER TABLE `admin1`
  MODIFY `id1` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
