-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2023 at 06:15 PM
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
  `members` varchar(100) NOT NULL,
  `s_contact` varchar(100) NOT NULL,
  `House_Name` varchar(100) NOT NULL,
  `s_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`S_id`, `H_id`, `Booking_date`, `Price`, `members`, `s_contact`, `House_Name`, `s_name`) VALUES
('', '', '2023-12-05', '2500', '4', '0125453655', 'Israt', 'tamim'),
('17474', '65485', '2023-12-10', '2500', '4', '0125453655', 'Israt', 'tamim'),
('49301224105151930568', '5292295575993451529', '2023-12-04', '4244', '4', '0125453655', 'Israt', 'tamim'),
('7739', '23979887128463', '2023-12-04', '2500', '4', '0125453655', 'Israt', 'tamim'),
('9865107987894873416', '404378726236528223', '2023-12-05', '4244', '4', '0125453655', 'Israt', 'tamim'),
('988064574383', '6513101429481850', '2023-12-03', '4244', '4', '0125453655', 'narayangonj', 'tamim');

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `id` varchar(100) NOT NULL,
  `O_id` varchar(100) NOT NULL,
  `House Name` varchar(100) NOT NULL,
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

INSERT INTO `house` (`id`, `O_id`, `House Name`, `Price Range`, `Pics`, `House no. & Road No.`, `Flat Location`, `Address`, `Number of Rooms`, `Washroom`, `Balcony`, `Kitchen`, `Drawing / Dinning room`, `Security (CCTV)`, `Guard`, `Lift`, `Service Charge`) VALUES
('425005620379908362', '', 'Israt House', '6000', 0x32303231303531305f3131353730345f6d666e722e6a7067, 'House no-3 Road no -225A', '7th Floor', 'Narayangonj', '4', '3 ', '4', '3', 'Available ', 'Not Available', 'Available', 'Not Available', '450'),
('9309420719357', '', 'Jahan', '6000', 0x57494e5f32303231303930345f31345f31325f35305f50726f2e6a7067, 'House', '6th', 'Narayangonj', '6', '3', '2', '3', '1/2', 'Available not', 'Not', 'Available', '50');

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
('', 'Hasan islam', 'islam@gmailraewddasdfaw', '6481346', '015459871', 'bussiness', '2', 'narayangonj', 'dhaka', 'narayangonj'),
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
  `Poster_Name` varchar(100) NOT NULL,
  `Personal_Email` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Mobile_Number` varchar(100) NOT NULL,
  `Price_Range` varchar(100) NOT NULL,
  `Flat_Location` varchar(100) NOT NULL,
  `Number_of_Rooms` varchar(100) NOT NULL,
  `Washroom` varchar(100) NOT NULL,
  `Balcony` varchar(100) NOT NULL,
  `Kitchen` varchar(100) NOT NULL,
  `Drawing_Dinning` varchar(100) NOT NULL,
  `CCTV` varchar(100) NOT NULL,
  `Guard` varchar(100) NOT NULL,
  `Lift` varchar(100) NOT NULL,
  `WIFI` varchar(100) NOT NULL,
  `Service_Charge` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roommate`
--

INSERT INTO `roommate` (`S_id`, `Poster_Name`, `Personal_Email`, `Address`, `Mobile_Number`, `Price_Range`, `Flat_Location`, `Number_of_Rooms`, `Washroom`, `Balcony`, `Kitchen`, `Drawing_Dinning`, `CCTV`, `Guard`, `Lift`, `WIFI`, `Service_Charge`) VALUES
('45892790153203558104', 'Tamim ', 'robiulislamtamim12345@gmail.com', 'narayangonj', '0125453655', '6000', '6', '3', '2', '2', '1', 'Available ', ' Available', 'Available', ' Available', 'Available', '950'),
('83285787398749559', 'Tamim ', 'robiulislamtamim12345@gmail.com', 'narayangonj', '0125453655', '6000', '6', '3', '2', '2', '1', 'Available ', ' Available', 'Available', ' Available', 'Available', '950');

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
('10255', '021202', 'robiulislamtamim12345@gmail.com', 'saifawal793@gmail.com', '011212039', 'ahgda', 'narayangonj', 'narayangonj', '01254536', 0, 'Robiul Islam Tamim'),
('30303387112018444', '011585456', 'robiulislamtamim12345@gmail.com', 'saifawal793@gmail.com', '545242142', 'CSE', 'narayangonj', 'narayangonjdfsa', '0125453655', 0, 'Robiul Islam Tamim'),
('35321', '01215', 'islam@gmail', 'saifawal793@gmail.com', '89752', 'CSE', 'narayangonj', 'narayangonj', '65423', 0, 'islam');

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
  ADD PRIMARY KEY (`S_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`S_id`,`University_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `FK_rating` FOREIGN KEY (`S_id`) REFERENCES `student` (`S_id`),
  ADD CONSTRAINT `FK_rating_2` FOREIGN KEY (`H_id`) REFERENCES `house` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
