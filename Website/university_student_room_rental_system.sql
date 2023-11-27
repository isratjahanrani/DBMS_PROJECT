-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Nov 25, 2023 at 03:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university_student_room_rental_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `S_id` varchar(100) NOT NULL,
  `H_id` varchar(100) NOT NULL,
  `Booking_date` date NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Agreement` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `id` varchar(100) NOT NULL,
  `O_id` varchar(100) NOT NULL,
  `No_of_rooms` varchar(100) NOT NULL,
  `Rate` varchar(100) NOT NULL,
  `Pics` blob NOT NULL,
  `house_no_and_road_number` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` varchar(100) NOT NULL,
  `H_id` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `S_id` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL DEFAULT '',
  `Occupation` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `Present_Address` varchar(100) NOT NULL,
  `Permanent_address` varchar(100) NOT NULL,
  `Contact_number` varchar(100) NOT NULL,
  `Relationship` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `O_id` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Number` varchar(100) NOT NULL,
  `Occupation` varchar(100) NOT NULL,
  `No_Of_Houses` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `H_id` varchar(100) NOT NULL,
  `S_id` varchar(100) NOT NULL,
  `Rating` varchar(100) NOT NULL,
  `Comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roommate`
--

CREATE TABLE `roommate` (
  `S_id` varchar(100) NOT NULL,
  `University_id` varchar(100) NOT NULL,
  `University_email` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `No_of_trimester` varchar(100) NOT NULL,
  `Present_Address` varchar(100) NOT NULL,
  `Permanent_address` varchar(100) NOT NULL,
  `Contact_number` varchar(100) NOT NULL,
  `Personal_email` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `S_id` varchar(100) NOT NULL,
  `University_id` varchar(100) NOT NULL,
  `University_email` varchar(100) NOT NULL,
  `Personal_email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Present_address` varchar(100) NOT NULL,
  `Permanent_address` varchar(100) NOT NULL,
  `Contact_number` varchar(100) NOT NULL,
  `Occupation` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`S_id`,`H_id`),
  ADD KEY `FK_booking_2` (`H_id`);

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_house` (`O_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`S_id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`O_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`H_id`,`S_id`),
  ADD KEY `FK_rating` (`S_id`);

--
-- Indexes for table `roommate`
--
ALTER TABLE `roommate`
  ADD PRIMARY KEY (`S_id`,`University_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`S_id`,`University_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `FK_booking` FOREIGN KEY (`S_id`) REFERENCES `student` (`S_id`),
  ADD CONSTRAINT `FK_booking_2` FOREIGN KEY (`H_id`) REFERENCES `house` (`id`);

--
-- Constraints for table `house`
--
ALTER TABLE `house`
  ADD CONSTRAINT `FK_house` FOREIGN KEY (`O_id`) REFERENCES `owner` (`O_id`);

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `FK_member` FOREIGN KEY (`S_id`) REFERENCES `student` (`S_id`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `FK_rating` FOREIGN KEY (`S_id`) REFERENCES `student` (`S_id`),
  ADD CONSTRAINT `FK_rating_2` FOREIGN KEY (`H_id`) REFERENCES `house` (`id`);

--
-- Constraints for table `roommate`
--
ALTER TABLE `roommate`
  ADD CONSTRAINT `FK_roommate` FOREIGN KEY (`S_id`) REFERENCES `student` (`S_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
