-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 03:21 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `support_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `ss_users`
--

CREATE TABLE `ss_users` (
  `user_id` int(20) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `user_status` varchar(30) NOT NULL,
  `user_role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ss_users`
--

INSERT INTO `ss_users` (`user_id`, `username`, `user_email`, `password`, `user_status`, `user_role`) VALUES
(1, 'admin', 'admin@support.com', '123', 'Active', 'SuperAdmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ss_users`
--
ALTER TABLE `ss_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ss_users`
--
ALTER TABLE `ss_users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
