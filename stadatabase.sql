-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2022 at 07:04 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sta`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(15) NOT NULL,
  `admin_id` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `password` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `admin_id`, `password`) VALUES
(1, 'admin@sta', 'sta@123');

-- --------------------------------------------------------

--
-- Table structure for table `india_packages`
--

CREATE TABLE `india_packages` (
  `pkgid` int(255) NOT NULL,
  `pkg_location` varchar(255) NOT NULL,
  `pkg_name` varchar(255) NOT NULL,
  `pkg_dst` varchar(255) NOT NULL,
  `pkg_type` varchar(255) NOT NULL,
  `pkg_duration` int(255) NOT NULL,
  `pkg_features` varchar(255) NOT NULL,
  `pkg_price` varchar(255) NOT NULL,
  `about_package` varchar(1000) NOT NULL,
  `pkg_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `india_packages`
--

INSERT INTO `india_packages` (`pkgid`, `pkg_location`, `pkg_name`, `pkg_dst`, `pkg_type`, `pkg_duration`, `pkg_features`, `pkg_price`, `about_package`, `pkg_img`) VALUES
(22, 'India', 'Goa Beach Fun', 'Goa', 'Couple', 4, 'Hotel | WiFi | Pick-Up & Drop-Up', '25000', 'mggjhmn', 'goa 2.jpg'),
(23, 'India', 'Mumbai Darshan', 'Mumbai', 'Family', 3, 'Hotel | WiFi | Pick-Up & Drop-Up', '10000', 'Mumbai dream city', 'mumbai main.jpg'),
(24, 'India', 'Leh Ladakh', 'Leh Ladakh', 'Friends', 4, 'Hotel | WiFi | Pick-Up & Drop-Up', '25000', ';jhighhkhuihkhhk', 'leh ladakh 1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `intl_packages`
--

CREATE TABLE `intl_packages` (
  `pkgid` int(255) NOT NULL,
  `pkg_location` varchar(255) NOT NULL,
  `pkg_name` varchar(255) NOT NULL,
  `pkg_dst` varchar(255) NOT NULL,
  `pkg_type` varchar(255) NOT NULL,
  `pkg_duration` int(255) NOT NULL,
  `pkg_features` varchar(255) NOT NULL,
  `pkg_price` int(255) NOT NULL,
  `about_package` varchar(255) NOT NULL,
  `pkg_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intl_packages`
--

INSERT INTO `intl_packages` (`pkgid`, `pkg_location`, `pkg_name`, `pkg_dst`, `pkg_type`, `pkg_duration`, `pkg_features`, `pkg_price`, `about_package`, `pkg_img`) VALUES
(22, 'International', 'Dubai City Of Lights', 'Dubai', 'Family', 6, 'Hotel | WiFi | Pick-Up & Drop-Up', 30000, 'It enables him to keep track of the developments and the constantly changing requirements of the market that he is in. May it is a new trend in the market or an advancement in technology or even a new advertiser’s entry, an entrepreneur should keep himsel', 'burj khalifa dubai 2.jpg'),
(23, 'International', 'Wonder Land', 'Macchu Picchu', 'Friends', 7, 'Hotel | WiFi | Pick-Up & Drop-Up', 75000, 'Maachu Picchu coming from 7 wonders', 'machu pichu main.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_bookings`
--

CREATE TABLE `user_bookings` (
  `bkid` int(255) NOT NULL,
  `pkgid` int(255) NOT NULL,
  `pkg_location` varchar(255) NOT NULL,
  `pkg_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_members` int(255) NOT NULL,
  `user_amt` int(255) NOT NULL,
  `user_date` varchar(255) NOT NULL,
  `user_status` varchar(255) NOT NULL,
  `user_transaction` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_bookings`
--

INSERT INTO `user_bookings` (`bkid`, `pkgid`, `pkg_location`, `pkg_name`, `user_email`, `user_members`, `user_amt`, `user_date`, `user_status`, `user_transaction`, `date`) VALUES
(24, 24, 'India', 'Leh Ladakh', 'aditya.lambat@gmail.com', 8, 200000, '27-03-2022', 'Confirmed', 'Successful', '2022-03-06 18:52:44'),
(25, 23, 'International', 'Wonder Land', 'aditya.lambat@gmail.com', 3, 225000, '04-03-2022', 'Confirmed', 'Successful', '2022-03-06 19:12:01'),
(26, 22, 'India', 'Goa Beach Fun', 'aditya.lambat@gmail.com', 2, 50000, '08-03-2022', 'Cancelled', 'Refunded', '2022-03-06 19:18:23'),
(27, 23, 'International', 'Wonder Land', 'aditya.lambat@gmail.com', 2, 150000, '07-03-2022', 'Confirmed', 'Successful', '2022-03-06 19:19:36'),
(28, 22, 'International', 'Dubai City Of Lights', 'aditya.lambat@gmail.com', 4, 120000, '27-03-2022', 'Pending', 'Successful', '2022-03-07 12:18:06');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `user_fullname` varchar(255) NOT NULL,
  `user_email` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `user_mobile` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_dob` varchar(255) NOT NULL,
  `user_gender` varchar(255) NOT NULL,
  `user_nation` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_document` varchar(255) NOT NULL,
  `user_document_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `user_fullname`, `user_email`, `user_mobile`, `user_password`, `user_dob`, `user_gender`, `user_nation`, `user_address`, `user_document`, `user_document_id`) VALUES
(5, 'Aditya Ajay Lambat', 'aditya.lambat@gmail.com', '7775949923', 'da61d88281ce639416ecc236b2e3c6ba', '13-01-2001', 'Male', 'India', '2158, Amar Nagar, Hingna Road, Nagpur - 440016, Maharashtra', 'Aadhaar Card', '664863150397'),
(11, 'Chetan Barange', 'chetan@gmail.com', '7775949924', 'da61d88281ce639416ecc236b2e3c6ba', '10-02-2022', 'Male', 'Germany', '1, hingna - 440001, MAHARASHTRA', 'Driving License', '664863150397'),
(12, 'Shashi Shekhar Pandey', 'shashi@gmail.com', '6265675633', '2dfef27277f467de70328b0c85345cde', '2022-02-26', 'Male', 'Finland', '12, balaghat - 444236, Madhya Pradesh', 'Aadhaar Card', '123456781212'),
(15, 'Manish Namdev', 'manish@gmail.com', '9393939390', 'da61d88281ce639416ecc236b2e3c6ba', '2022-04-01', 'Female', 'Argentina', 'axsa, qwdwqd - qwdqw, qwdqw', 'Passport', 'sdqwedqwedfewf');

-- --------------------------------------------------------

--
-- Table structure for table `user_messages`
--

CREATE TABLE `user_messages` (
  `id` int(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `user` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_messages`
--

INSERT INTO `user_messages` (`id`, `date`, `user`, `msg`) VALUES
(1, '2022-01-08 12:50:19', 'Chetan Barange', 'Hello Admin'),
(2, '2022-01-08 12:50:33', 'Aditya Lambat', 'Hello sir i was  not able to make payment please help me with this issue'),
(3, '2022-01-08 15:39:40', 'Shashi Pandey', 'Hello why are you so good');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_id` (`admin_id`,`password`),
  ADD UNIQUE KEY `admin_id_2` (`admin_id`,`password`);

--
-- Indexes for table `india_packages`
--
ALTER TABLE `india_packages`
  ADD PRIMARY KEY (`pkgid`);

--
-- Indexes for table `intl_packages`
--
ALTER TABLE `intl_packages`
  ADD PRIMARY KEY (`pkgid`);

--
-- Indexes for table `user_bookings`
--
ALTER TABLE `user_bookings`
  ADD PRIMARY KEY (`bkid`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_messages`
--
ALTER TABLE `user_messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `india_packages`
--
ALTER TABLE `india_packages`
  MODIFY `pkgid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `intl_packages`
--
ALTER TABLE `intl_packages`
  MODIFY `pkgid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_bookings`
--
ALTER TABLE `user_bookings`
  MODIFY `bkid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_messages`
--
ALTER TABLE `user_messages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
