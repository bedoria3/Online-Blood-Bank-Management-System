-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 10:42 AM
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
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `requestblood`
--

CREATE TABLE `requestblood` (
  `request_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `require_date` varchar(50) NOT NULL,
  `detail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requestblood`
--

INSERT INTO `requestblood` (`request_id`, `name`, `gender`, `age`, `mobile_number`, `blood_group`, `quantity`, `email`, `require_date`, `detail`) VALUES
(9, 'Grace Vellina', 'female', 22, '09675464678', 'AB+', '', 'marygracevellina@gmail.com', '2000/1/7', 'na'),
(10, 'Hannah Cagaan', 'female', 20, '09767546467', 'AB+', '', 'hannahcagaanan@gmail.com', '2021/1/1', 'na'),
(11, 'Joan Bernadez', 'female', 21, '09565456774', 'AB+', '', 'joan@gmail.com', '2022/1/1', 'na'),
(12, 'Julcenio Estorco', 'male', 22, '09364374567', 'AB+', '', 'juls@gmail.com', '2000/1/1', 'na'),
(13, 'Hannah Cagaan', 'male', 4, '0945575777', 'AB+', '2 bags', 'joy@gmail.com', '1998/1/1', 'na'),
(14, 'Juan De La Cruz', 'male', 34, '09876543545', 'AB+', '3 bags', 'juan@gmail.com', '2024/1/9', 'na');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `requestblood`
--
ALTER TABLE `requestblood`
  ADD PRIMARY KEY (`request_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `requestblood`
--
ALTER TABLE `requestblood`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;