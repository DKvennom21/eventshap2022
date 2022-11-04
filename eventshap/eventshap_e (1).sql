-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2022 at 08:01 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventshap`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_email`, `admin_password`) VALUES
('EventsHap2021@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(9) NOT NULL,
  `area_name` char(20) NOT NULL,
  `area_pincode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area_name`, `area_pincode`) VALUES
(6, 'Bopal', 380058),
(7, 'Bodakdev', 380054),
(8, 'Memnagar', 380052),
(9, 'Paldi', 380007),
(11, 'Naranpura', 380015),
(12, 'Sarkhej', 382210),
(13, 'Thaltej', 380059);

-- --------------------------------------------------------

--
-- Table structure for table `event_booking`
--

CREATE TABLE `event_booking` (
  `book_id` int(5) NOT NULL,
  `book_ename` char(20) NOT NULL,
  `book_edate` date NOT NULL,
  `book_etime` time NOT NULL,
  `book_evenue` varchar(200) NOT NULL,
  `book_uname` char(30) NOT NULL,
  `book_unum` bigint(10) NOT NULL,
  `book_uemail` varchar(100) NOT NULL,
  `book_efee` bigint(10) NOT NULL,
  `book_nop` int(3) NOT NULL,
  `book_total` bigint(10) NOT NULL,
  `book_ecate` char(20) NOT NULL,
  `booked` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_booking`
--

INSERT INTO `event_booking` (`book_id`, `book_ename`, `book_edate`, `book_etime`, `book_evenue`, `book_uname`, `book_unum`, `book_uemail`, `book_efee`, `book_nop`, `book_total`, `book_ecate`, `booked`) VALUES
(29, 'Formula 1', '2022-03-23', '10:00:00', 'LJ college,Bopal,380058', 'Dev Patel', 9724466443, 'dev@gmail.com', 1000, 6, 6000, 'Live Events', '2022-03-25 14:03:37');

-- --------------------------------------------------------

--
-- Table structure for table `event_master`
--

CREATE TABLE `event_master` (
  `event_id` int(5) NOT NULL,
  `event_category` char(50) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_date` date NOT NULL,
  `event_time` varchar(100) NOT NULL,
  `event_agegrp` int(3) NOT NULL,
  `event_fee` int(5) NOT NULL,
  `event_venue` varchar(200) NOT NULL,
  `event_area` char(10) NOT NULL,
  `event_pin` int(6) NOT NULL,
  `event_path` varchar(100) NOT NULL DEFAULT 'img/logo.png',
  `event_descrip` varchar(200) NOT NULL,
  `event_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `event_map` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_master`
--

INSERT INTO `event_master` (`event_id`, `event_category`, `event_name`, `event_date`, `event_time`, `event_agegrp`, `event_fee`, `event_venue`, `event_area`, `event_pin`, `event_path`, `event_descrip`, `event_added`, `event_map`) VALUES
(1, 'Sports', 'LJ Cricket Tournament', '2022-03-27', '08:00', 16, 200, 'LJ Campus', 'Sarkhej', 382210, 'uploads/depositphotos_5017449-stock-illustration-cricket-vector-background.jpg', 'An exciting and energetic experience of cricket at LJ Campus', '2022-03-26 03:46:26', '<iframe width=\"600\" height=\"450\" style=\"border:0\" loading=\"lazy\" allowfullscreen src=\"https://www.google.com/maps/embed/v1/place?q=place_id:ChIJIaaJbO6aXjkRCAC7X9XyLYc&key=AIzaSyC-rZ5sgVmaw5ljHcPJun8Yg5VecIYaPMc\"></iframe>'),
(2, 'Sports', 'Football Tournament', '2022-04-01', '07:30', 19, 300, 'Eklavya Sports Academy', 'Thaltej', 380059, 'uploads/ad5ea7847849f8eca0c389f5632a29ec.jpg', 'An exciting and energetic experience of Football at Eklavya Sports Academy', '2022-03-26 03:58:43', '<iframe width=\"600\" height=\"450\" style=\"border:0\" loading=\"lazy\" allowfullscreen src=\"https://www.google.com/maps/embed/v1/place?q=place_id:ChIJm49AiKKcXjkRDKtUOxk2Ijs&key=AIzaSyC-rZ5sgVmaw5ljHcPJun8Yg5VecIYaPMc\"></iframe>'),
(3, 'Sports', 'Bowling Tournament', '2022-03-28', '17:00', 18, 1000, 'Shott, Shindhubhavan', 'Bopal', 380058, 'uploads/download (2).jpg', 'An exciting and energetic experience of Bowling at Shott SBR', '2022-03-26 04:21:51', '<iframe width=\"600\" height=\"450\" style=\"border:0\" loading=\"lazy\" allowfullscreen src=\"https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ98_ule2bXjkRhRkl3fHHt_4&key=AIzaSyC-rZ5sgVmaw5ljHcPJun8Yg5VecIYaPMc\"></iframe>'),
(4, 'Sports', 'Tennis Tournament', '2022-03-30', '08:00', 18, 200, 'ARA, SBR', 'Thaltej', 380059, 'uploads/360_F_313249442_rVaztYCo9u5FOKtxWWGtKgw38AVvt7Qb.jpg', 'An exciting and energetic experience of Tennis at ARA', '2022-03-26 04:25:45', '<iframe width=\"600\" height=\"450\" style=\"border:0\" loading=\"lazy\" allowfullscreen src=\"https://www.google.com/maps/embed/v1/place?q=place_id:ChIJo7aWnGibXjkR3WL_mPeteDs&key=AIzaSyC-rZ5sgVmaw5ljHcPJun8Yg5VecIYaPMc\"></iframe>'),
(5, 'Sports', 'Badminton ', '2022-04-10', '18:00', 10, 250, 'AYBA', 'Bopal', 380058, 'uploads/st,small,507x507-pad,600x600,f8f8f8.jpg', 'An exciting and energetic experience of Badminton at AYBA', '2022-03-26 04:29:18', '<iframe width=\"600\" height=\"450\" style=\"border:0\" loading=\"lazy\" allowfullscreen src=\"https://www.google.com/maps/embed/v1/place?q=place_id:ChIJvec23pibXjkRtF1cKeCjh9c&key=AIzaSyC-rZ5sgVmaw5ljHcPJun8Yg5VecIYaPMc\"></iframe>'),
(6, 'Live Events', 'LJ Open Mic', '2022-03-30', '18:00', 18, 500, 'LJ Campus', 'Sarkhej', 382210, 'uploads/download (3).jpg', 'Try Yourself and have fun', '2022-03-26 04:36:43', '<iframe width=\"600\" height=\"450\" style=\"border:0\" loading=\"lazy\" allowfullscreen src=\"https://www.google.com/maps/embed/v1/place?q=place_id:ChIJIaaJbO6aXjkRCAC7X9XyLYc&key=AIzaSyC-rZ5sgVmaw5ljHcPJun8Yg5VecIYaPMc\"></iframe>'),
(7, 'Live Events', 'Standup At Cafe', '2022-04-02', '20:00', 18, 300, 'Busker\'s Cafe', 'Thaltej', 380059, '', 'Have great listening with Abhishek Upmanyu', '2022-03-26 04:47:46', '<iframe width=\"600\" height=\"450\" style=\"border:0\" loading=\"lazy\" allowfullscreen src=\"https://www.google.com/maps/embed/v1/place?q=place_id:ChIJadM-k1SbXjkRMVdlwt0l9PM&key=AIzaSyC-rZ5sgVmaw5ljHcPJun8Yg5VecIYaPMc\"></iframe>'),
(100, 'Live Events', 'Badshah\'s Concert', '2022-04-04', '20:00', 15, 500, 'Eka Club', 'Bopal', 380058, '', 'Badshah Incoming', '2022-03-26 05:16:35', ''),
(101, 'Live Events', 'Dance Battle Showdown', '2022-04-06', '19:00', 18, 500, 'FYRO', 'Bopal', 380058, 'uploads/download (2).jpg', 'Try some moves', '2022-03-26 05:23:18', '<iframe width=\"600\" height=\"450\" style=\"border:0\" loading=\"lazy\" allowfullscreen src=\"https://www.google.com/maps/embed/v1/place?q=place_id:ChIJu-zh386FXjkRSe3b7S2DC-c&key=AIzaSyC-rZ5sgVmaw5ljHcPJun8Yg5VecIYaPMc\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(10) NOT NULL,
  `feedback_name` char(50) NOT NULL,
  `feedback_email` varchar(100) NOT NULL,
  `feedback` varchar(200) NOT NULL,
  `feedback_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `feedback_name`, `feedback_email`, `feedback`, `feedback_time`) VALUES
(1, 'Dev Patel', 'dev@gmail.com', '', '2022-03-23 08:25:34');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `manager_id` int(10) NOT NULL,
  `manager_email` varchar(100) NOT NULL,
  `manager_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manager_id`, `manager_email`, `manager_password`) VALUES
(1, 'eventshap2021@gmail.com', 'events@2021');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` char(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_contact` bigint(10) NOT NULL,
  `user_password` varchar(18) NOT NULL,
  `user_cpassword` varchar(18) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_pincode` int(6) NOT NULL,
  `user_birthdate` varchar(10) NOT NULL,
  `user_gender` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_contact`, `user_password`, `user_cpassword`, `user_address`, `user_pincode`, `user_birthdate`, `user_gender`) VALUES
(1, 'Dev Patel', 'dev@gmail.com', 9724466443, '12345678', '12345678', 'Bopal', 380058, '2006-03-22', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_email`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `event_booking`
--
ALTER TABLE `event_booking`
  ADD PRIMARY KEY (`book_id`),
  ADD UNIQUE KEY `book_unum` (`book_unum`),
  ADD UNIQUE KEY `book_uemail` (`book_uemail`);

--
-- Indexes for table `event_master`
--
ALTER TABLE `event_master`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`manager_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD UNIQUE KEY `user_contact` (`user_contact`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `event_booking`
--
ALTER TABLE `event_booking`
  MODIFY `book_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `event_master`
--
ALTER TABLE `event_master`
  MODIFY `event_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `manager_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
