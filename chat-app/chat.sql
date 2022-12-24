-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 02:23 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(0, 2, 3, 'kire', '2021-11-28 11:17:49', 0),
(0, 3, 2, 'kire', '2021-11-28 11:17:58', 0),
(0, 2, 3, 'kemon achos', '2021-11-28 11:21:03', 0),
(0, 2, 3, 'kire', '2021-11-28 11:31:04', 0),
(0, 3, 5, 'kire', '2021-11-28 12:39:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`, `email`) VALUES
(1, 'ratulbhatt', '$2y$10$Y/1ekMCPyJWv9j.CPYRs.uyxRG4OqqPcFJXaUpr/9WD9VDSXXitTK', 'er@gmail.com'),
(2, 'nadimkanti', '$2y$10$720MU4JHgWfj4MJckLPUiu0ikThmabO.KzvWA8wsuVOxtN0Ojmv9i', 'ratulrahulbhattacharjee@gmail.com'),
(3, 'ratulrahulbhattacharjee', '$2y$10$4Ib4yDwFrTUdsmzEFiNhXOpj0.2EK6kcrGT53ipASY1FFeXgLG05i', 'er@gmail.com'),
(4, 'ratul_bhattacharjee_', '$2y$10$M9/lLPKrVPRcz733mQU0B.a7vCpKBYCsVmGceAXG3GXoaqCBajeSS', 'ratul@gamil.com'),
(5, 'mohok', '$2y$10$dWeuKXiaVaSMlw/t6Tuy4OdybwVEs2UwgiSCDWHV1pzIqt6V4LRwC', 'er@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_type` enum('no','yes','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `user_id`, `last_activity`, `is_type`) VALUES
(1, 1, '2021-11-28 08:05:57', 'no'),
(2, 2, '2021-11-28 08:09:09', 'no'),
(3, 3, '2021-11-28 12:13:31', 'no'),
(4, 2, '2021-11-28 11:18:08', 'no'),
(5, 2, '2021-11-28 11:49:18', 'no'),
(6, 3, '2021-11-28 12:19:34', 'no'),
(7, 3, '2021-11-28 12:38:14', 'no'),
(8, 4, '2021-11-28 12:35:29', 'no'),
(9, 4, '2021-11-28 12:36:47', 'no'),
(10, 5, '2021-11-28 12:40:12', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
