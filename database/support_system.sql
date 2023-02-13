-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2023 at 11:08 AM
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
-- Table structure for table `ss_comments`
--

CREATE TABLE `ss_comments` (
  `id` int(30) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_by` varchar(255) NOT NULL,
  `comment_on` datetime(6) NOT NULL,
  `t_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ss_comments`
--

INSERT INTO `ss_comments` (`id`, `comment`, `comment_by`, `comment_on`, `t_id`) VALUES
(1, 'Some brief introduction', 'admin', '2023-02-12 21:30:11.000000', 2),
(2, 'any help?', 'admin', '2023-02-12 21:32:28.000000', 1),
(3, 'hi', 'admin', '2023-02-12 21:36:38.000000', 1),
(4, 'opps', 'admin', '2023-02-12 21:38:44.000000', 1),
(5, 'opps', 'admin', '2023-02-12 21:40:42.000000', 1),
(6, 'ok', 'admin', '2023-02-12 21:40:59.000000', 1),
(7, 'ok', 'admin', '2023-02-12 21:41:17.000000', 1),
(8, 'hi', 'admin', '2023-02-12 21:41:26.000000', 1),
(9, 'hi', 'admin', '2023-02-12 21:46:21.000000', 1),
(10, 'ok', 'admin', '2023-02-12 21:46:34.000000', 1),
(11, 'ok', 'admin', '2023-02-12 21:49:16.000000', 1),
(12, 'j', 'admin', '2023-02-12 21:49:28.000000', 1),
(13, 'j', 'admin', '2023-02-12 21:50:23.000000', 1),
(14, 'j', 'admin', '2023-02-12 21:53:26.000000', 1),
(15, 'kk', 'admin', '2023-02-12 21:54:43.000000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ss_customer`
--

CREATE TABLE `ss_customer` (
  `cid` int(30) NOT NULL,
  `c_name` varchar(255) DEFAULT NULL,
  `c_email` varchar(255) DEFAULT NULL,
  `c_phone` varchar(50) DEFAULT NULL,
  `pan_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ss_customer`
--

INSERT INTO `ss_customer` (`cid`, `c_name`, `c_email`, `c_phone`, `pan_no`) VALUES
(1, ' Rahul Shign B ', 'rahul2018@gmail.com', ' 9815020986 ', ' 3456789  ');

-- --------------------------------------------------------

--
-- Table structure for table `ss_tickets`
--

CREATE TABLE `ss_tickets` (
  `id` int(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `attachments` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL,
  `last_updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ss_tickets`
--

INSERT INTO `ss_tickets` (`id`, `title`, `description`, `attachments`, `status`, `created_by`, `created_on`, `last_updated_on`) VALUES
(1, 'there some issues', 'there some issues', 'Screenshot 2023-02-02 115050.png', 'Open', 'admin', '2023-02-12 18:25:11', '2023-02-12 18:25:11'),
(2, 'There some glitches', 'There some glitches', 'Screenshot 2023-02-03 175117.png', 'Close', 'admin', '2023-02-12 20:11:52', '2023-02-12 20:11:52'),
(3, ' There is an issue ', ' hii my system have many issued. ', '', 'Open', '    Rabin Gajurel    ', '2023-02-13 14:47:31', '2023-02-13 15:50:30');

-- --------------------------------------------------------

--
-- Table structure for table `ss_users`
--

CREATE TABLE `ss_users` (
  `user_id` int(20) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `user_status` varchar(30) NOT NULL,
  `user_role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ss_users`
--

INSERT INTO `ss_users` (`user_id`, `username`, `user_email`, `password`, `user_status`, `user_role`) VALUES
(4, '    Rabin Gajurel    ', 'rabin1@gmail.com', '123', 'Active', 'GeneralUser'),
(5, '  admin  ', 'admin@support.com', '123', 'Active', 'SuperAdmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ss_comments`
--
ALTER TABLE `ss_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ss_customer`
--
ALTER TABLE `ss_customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `ss_tickets`
--
ALTER TABLE `ss_tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ss_users`
--
ALTER TABLE `ss_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ss_comments`
--
ALTER TABLE `ss_comments`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ss_customer`
--
ALTER TABLE `ss_customer`
  MODIFY `cid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ss_tickets`
--
ALTER TABLE `ss_tickets`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ss_users`
--
ALTER TABLE `ss_users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
