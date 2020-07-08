-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2020 at 07:01 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid_detector`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(60) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `covid_detector_details`
--

CREATE TABLE `covid_detector_details` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email_id` varchar(150) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `travel_history` varchar(10) NOT NULL,
  `symptoms` varchar(10) NOT NULL,
  `added_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covid_detector_details`
--

INSERT INTO `covid_detector_details` (`id`, `name`, `email_id`, `contact`, `travel_history`, `symptoms`, `added_on`) VALUES
(1, 'san', 'san@gamil.com', '7896541235', 'No', 'Yes', '2020-07-07'),
(2, 'demo', 'demo@gmail.com', '7896541235', 'No', 'Yes', '2020-07-07'),
(3, 'ok', 'ok@gmail.com', '7896541235', 'Yes', 'No', '2020-07-07'),
(4, 'sas', 's@gmail.com', '2579874563', 'No', 'No', '2020-07-07'),
(5, 'uyyt', 'sddh@gamil.com', '7539512584', 'No', 'No', '2020-07-07'),
(6, 'axdsaxd', 'ffacdacfd@gmail.com', '7896541236', 'No', 'Yes', '2020-07-07'),
(7, 'dfdaf', 's@gamil.com', '7896541235', 'No', 'Yes', '2020-07-07'),
(8, 'JVSDHBVC', 'hgsag@gmail.com', '7896541235', 'No', 'No', '2020-07-07'),
(9, 'abcd', 'a@gmail.com', '1236547895', 'Yes', 'No', '2020-07-02'),
(10, 'dsa', 'dsa@gmail.com', '7536541258', 'No', 'Yes', '2020-07-05'),
(11, 'last', 'last@gmail.com', '7896541235', 'Yes', 'No', '2020-07-08'),
(12, 'lastlast', 'lastlast@gamil.com', '7896541235', 'Yes', 'Yes', '2020-07-08'),
(13, 'abvsv', 'nsjxdhab@gamil.com', '5478963215', 'Yes', 'No', '2020-07-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `covid_detector_details`
--
ALTER TABLE `covid_detector_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `covid_detector_details`
--
ALTER TABLE `covid_detector_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
