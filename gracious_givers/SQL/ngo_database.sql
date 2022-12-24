-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2022 at 11:52 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngo_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_post_data`
--

CREATE TABLE `admin_post_data` (
  `id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Admin_Username` varchar(255) NOT NULL,
  `Program_Name` varchar(255) NOT NULL,
  `Program_Type` varchar(255) NOT NULL,
  `Start_Time` time NOT NULL,
  `End_Time` time NOT NULL,
  `Required_Volunteer` varchar(255) NOT NULL,
  `Required_Amount` varchar(2000) NOT NULL,
  `Phone_Number` varchar(255) NOT NULL,
  `Post` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_post_data`
--

INSERT INTO `admin_post_data` (`id`, `Username`, `Admin_Username`, `Program_Name`, `Program_Type`, `Start_Time`, `End_Time`, `Required_Volunteer`, `Required_Amount`, `Phone_Number`, `Post`) VALUES
(1, 'Ratul', 'Nadim', 'Plant Tree ', 'Cherity', '09:56:34', '09:56:34', '50', '10000', '01362542651', 'If any one interest to donate, please donate. If one interest to volunteer, please do.');

-- --------------------------------------------------------

--
-- Table structure for table `ngo_data`
--

CREATE TABLE `ngo_data` (
  `NGO_Name` varchar(255) NOT NULL,
  `User_Name` varchar(255) NOT NULL,
  `Ngo_Password` varchar(255) NOT NULL,
  `NGO_Owner_Name` varchar(255) NOT NULL,
  `Type_Of_NGO` varchar(255) NOT NULL,
  `Email_Address` varchar(255) NOT NULL,
  `Present_Address` varchar(255) NOT NULL,
  `Permanent_Address` varchar(255) NOT NULL,
  `NGOs_Web_Link` varchar(255) NOT NULL,
  `Profile_Picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngo_data`
--

INSERT INTO `ngo_data` (`NGO_Name`, `User_Name`, `Ngo_Password`, `NGO_Owner_Name`, `Type_Of_NGO`, `Email_Address`, `Present_Address`, `Permanent_Address`, `NGOs_Web_Link`, `Profile_Picture`) VALUES
('BD Charity Organizations', 'Nadim', 'Nadim!1155', 'Nadim Ahmed', 'Charitable', 'nadim4995@gmail.com', 'Joydebpur, Gazipur', 'Joydebpur, Gazipur', 'https://www.facebook.com/Hakernadim', NULL),
('Make Bangladesh Green', 'Ratul', 'Ratul099!', 'Ratul', 'Service', 'ratul876@gamil.com', 'Dhaka, Boshundora', 'Dhaka, Boshundora', 'https://www.facebook.com/ratul0baze', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `select_volunteer_data`
--

CREATE TABLE `select_volunteer_data` (
  `id` int(11) NOT NULL,
  `Program_id` int(11) NOT NULL,
  `User_Name` varchar(255) NOT NULL,
  `Email_Address` varchar(255) NOT NULL,
  `Phone_Number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `select_volunteer_data`
--

INSERT INTO `select_volunteer_data` (`id`, `Program_id`, `User_Name`, `Email_Address`, `Phone_Number`) VALUES
(1, 2124238949, 'Mohok_11', 'mohok345@gmail.com', '01365526479'),
(2, 2124238949, 'Saidul_22', 'saidul984@gmail.com', '01632514267');

-- --------------------------------------------------------

--
-- Table structure for table `start_program_data`
--

CREATE TABLE `start_program_data` (
  `program_id` int(255) NOT NULL,
  `User_name` varchar(255) NOT NULL,
  `NGO_Name` varchar(255) NOT NULL,
  `Program_Name` varchar(255) NOT NULL,
  `Program_Type` varchar(255) NOT NULL,
  `Required_Amount` varchar(255) NOT NULL,
  `Required_Volunteer` varchar(255) NOT NULL,
  `Start_Date` date NOT NULL,
  `Closed_Date` date NOT NULL,
  `Start_Time` time NOT NULL,
  `Closed_Time` time NOT NULL,
  `Bkash_Number` varchar(255) NOT NULL,
  `Bank_Account_Number` varchar(255) DEFAULT NULL,
  `Program_Motives` varchar(255) NOT NULL,
  `Program_Description` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `start_program_data`
--

INSERT INTO `start_program_data` (`program_id`, `User_name`, `NGO_Name`, `Program_Name`, `Program_Type`, `Required_Amount`, `Required_Volunteer`, `Start_Date`, `Closed_Date`, `Start_Time`, `Closed_Time`, `Bkash_Number`, `Bank_Account_Number`, `Program_Motives`, `Program_Description`, `Status`) VALUES
(2124238949, 'Ratul', 'Make Bangladesh Green', 'Tree Plant', 'Cherity', '10000', '50', '2022-05-14', '2022-05-16', '01:08:00', '09:13:00', '01852814232', '85632102', '  None', 'None', 'accepted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_post_data`
--
ALTER TABLE `admin_post_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngo_data`
--
ALTER TABLE `ngo_data`
  ADD PRIMARY KEY (`User_Name`);

--
-- Indexes for table `select_volunteer_data`
--
ALTER TABLE `select_volunteer_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `start_program_data`
--
ALTER TABLE `start_program_data`
  ADD PRIMARY KEY (`program_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_post_data`
--
ALTER TABLE `admin_post_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `select_volunteer_data`
--
ALTER TABLE `select_volunteer_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
