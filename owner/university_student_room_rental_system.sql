-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 05:28 PM
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
  `No_of_Flats` varchar(100) NOT NULL,
  `Price Range` varchar(100) NOT NULL,
  `Pics` blob NOT NULL,
  `House no. & Road No.` varchar(100) NOT NULL,
  `Flat Location` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Number of Rooms` varchar(100) NOT NULL,
  `Washroom` varchar(100) NOT NULL,
  `Balcony` varchar(100) NOT NULL,
  `Kitchen` varchar(100) NOT NULL,
  `Drawing / Dinning room` varchar(100) NOT NULL,
  `Security (CCTV)` varchar(100) NOT NULL,
  `Guard` varchar(100) NOT NULL,
  `Lift` varchar(100) NOT NULL,
  `Service Charge` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`id`, `O_id`, `No_of_Flats`, `Price Range`, `Pics`, `House no. & Road No.`, `Flat Location`, `Address`, `Number of Rooms`, `Washroom`, `Balcony`, `Kitchen`, `Drawing / Dinning room`, `Security (CCTV)`, `Guard`, `Lift`, `Service Charge`) VALUES
('69048231145413010', '', '54654564545', '75445676557', 0x436170747572655f3031313231323033392e332e504e47, '314564', '454', 'naraytasdhbjkagsers', '222', '23', 'yessfef', 'yesfsef', 'yesdg', 'yssfse', 'notfszdf', 'yessegfs', '2501'),
('865250', '', '46554', '45645654', 0x436170747572655f3031313231323033392e332e504e47, '45644534', '44358', '45345135415', '484358', '443645', '34358', '4453', '4344534', 'fhdthf', 'dgrgdfth', 'drgdrfth', '250452');

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

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`O_id`, `Name`, `Email`, `Password`, `Number`, `Occupation`, `No_Of_Houses`, `State`, `City`, `Address`) VALUES
('', 'Hasan sdad', 'islam@gmailraewddasd', '5421245425ada', '015459871', 'student', '2', 'narayangonj', 'dhaka', 'narayangonj'),
('087708', 'israt', 'israt@d', '54545145', '2415465545', 'jhauidh', '2', 'narayangonj', 'dhaka', 'dhaka'),
('22578516786046', 'Hasan ', 'islam@gmailraewd', '5421245425', '015459871', 'student', '2', 'narayangonj', 'dhaka', 'narayangonj'),
('356448', 'Hasan ', 'islam@gmail', '54212', '011528694', 'student', '2', 'narayangonj', 'dhaka', 'narayangonj'),
('54345334', 'tamim', 'iqbal@gmail', '011212', '03987', 'busy', '1', 'city', 'dhaka', 'dhaka'),
('544564', 'siehjfriuwahriua', 'afwfrawfdaw', 'wafwawdaw', '2165465465', 'awdawd', '2', 'awdawd', 'fesgrdht', 'htfdhtdtr'),
('565', 'Robiul Islam Tamim', 'robiulislamtamim12345@gmail.com', '5555', '01254536', 'student', '2', 'narayangonj', 'narayangonj', 'narayangonj');

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
  `Occupation` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`S_id`, `University_id`, `University_email`, `Personal_email`, `Password`, `Department`, `Present_address`, `Permanent_address`, `Contact_number`, `Occupation`, `Name`) VALUES
('5266309', '01215', 'islam@gmail', 'saifawal793@gmail.com', '89752', 'CSE', 'narayangonj', 'narayangonj', '65423', 0, 'islam'),
('562568134', '021202', 'robiulislamtamim12345@gmail.com', 'saifawal793@gmail.com', '011212039', 'ahgda', 'narayangonj', 'narayangonj', '01254536', 0, 'Robiul Islam Tamim');

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
