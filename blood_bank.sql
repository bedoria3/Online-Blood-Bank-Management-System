-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2022 at 12:14 PM
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
-- Table structure for table `admin_file`
--

CREATE TABLE `admin_file` (
  `admin_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_file`
--

INSERT INTO `admin_file` (`admin_id`, `firstname`, `lastname`, `username`, `email`, `password`) VALUES
(1, 'Ma. elena ', 'Fuentes', 'elena123', 'elena@gmail.com', 'lenay'),
(2, 'soseit', 'bedoria', 'soseit123', 'soseit@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `blooddetails`
--

CREATE TABLE `blooddetails` (
  `id` int(11) NOT NULL,
  `BloodType` varchar(11) NOT NULL,
  `creationdate` date NOT NULL,
  `description` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blooddetails`
--

INSERT INTO `blooddetails` (`id`, `BloodType`, `creationdate`, `description`) VALUES
(7, 's', '2022-12-16', 'hi'),
(16, 'O-', '2022-12-08', 'hhasdghsgdudyudysvbdhvhgsyd');

-- --------------------------------------------------------

--
-- Table structure for table `blood_ab_minus`
--

CREATE TABLE `blood_ab_minus` (
  `blood_id` int(11) NOT NULL,
  `blood_quantity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blood_ab_plus`
--

CREATE TABLE `blood_ab_plus` (
  `blood_id` int(11) NOT NULL,
  `blood_quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blood_a_minus`
--

CREATE TABLE `blood_a_minus` (
  `blood_id` int(11) NOT NULL,
  `blood_quantity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blood_a_plus`
--

CREATE TABLE `blood_a_plus` (
  `blood_id` int(11) NOT NULL,
  `blood_quantity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_a_plus`
--

INSERT INTO `blood_a_plus` (`blood_id`, `blood_quantity`) VALUES
(1, '3');

-- --------------------------------------------------------

--
-- Table structure for table `blood_b_minus`
--

CREATE TABLE `blood_b_minus` (
  `blood_id` int(11) NOT NULL,
  `blood_quantity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blood_b_plus`
--

CREATE TABLE `blood_b_plus` (
  `blood_id` int(11) NOT NULL,
  `blood_quantity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blood_o_minus`
--

CREATE TABLE `blood_o_minus` (
  `blood_id` int(11) NOT NULL,
  `blood_quantity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blood_o_plus`
--

CREATE TABLE `blood_o_plus` (
  `blood_id` int(11) NOT NULL,
  `blood_quantity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_o_plus`
--

INSERT INTO `blood_o_plus` (`blood_id`, `blood_quantity`) VALUES
(1, '1'),
(2, '1'),
(3, '1');

-- --------------------------------------------------------

--
-- Table structure for table `camps`
--

CREATE TABLE `camps` (
  `id` int(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camps`
--

INSERT INTO `camps` (`id`, `hospital`, `address`, `contact`, `email`) VALUES
(1, 'Cebu City Medical Center (CCMC)', 'N. Bacalso Ave., Barangay Pahina Central\r\nCebu City 6000', '(032) 512 4622', 'cebucitymedicalcenterofficial@yahoo.com'),
(2, 'Cebu Doctor\'s University Hospital', 'Osmena Boulevard, Capitol Site, Cebu City 6000 Cebu ', '+63 (32) 255 5555', 'info@cduh.com.ph'),
(3, 'North General Hospital', 'Kauswagan Road, Talamban, Cebu City 6000 Cebu', '+63 (32) 343 7777', 'cebunorthgeneralhospital@yahoo.com'),
(4, 'South General Hospital', 'Natalio B. Bacalso S National Hwy, City of Naga, 6037 Cebu ', '(32) 272-2020', 'sgh_naga@yahoo.com'),
(5, 'Sacred Heart Hospital', '53 J. Urgello St, Cebu City, 6000 Cebu ', '(32)254-1841', 'eulama@yahoo.com'),
(6, 'Vicente Sotto Memorial Medical Center', 'B Rodriguez Cebu City', '(32) 255-1591', 'mcc@vsmmc.doh.gov.ph');

-- --------------------------------------------------------

--
-- Table structure for table `cebu_doctor_hospital`
--

CREATE TABLE `cebu_doctor_hospital` (
  `id` int(11) NOT NULL,
  `blood_type` varchar(255) NOT NULL,
  `blood_quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cebu_medical_center`
--

CREATE TABLE `cebu_medical_center` (
  `id` int(11) NOT NULL,
  `type_blood` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cebu_medical_center`
--

INSERT INTO `cebu_medical_center` (`id`, `type_blood`, `quantity`) VALUES
(1, 'A+', '3'),
(2, 'O+', '1');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(12) NOT NULL,
  `message` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `firstname`, `lastname`, `email`, `phone`, `message`) VALUES
(6, 'fuentes', 'jomel', 'elena@gmail.com', 2147483647, 'hdasdasdasbdnxchxcashiasudisdacjssoisd');

-- --------------------------------------------------------

--
-- Table structure for table `donations_file`
--

CREATE TABLE `donations_file` (
  `donation_ID` int(11) NOT NULL,
  `donor_name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `mobile_phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `blood_type` varchar(50) NOT NULL,
  `blood_quantity` int(50) NOT NULL,
  `camps` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donations_file`
--

INSERT INTO `donations_file` (`donation_ID`, `donor_name`, `gender`, `age`, `mobile_phone`, `address`, `blood_type`, `blood_quantity`, `camps`) VALUES
(3, 'rgggfg', 'Male', 34, '577878787', 'dffgfcvbvbfv', 'A+', 6, 'Cebu City Medical Center'),
(4, 'joshua', 'Female', 56, '5667678', 'cvfvvffg', 'O+', 1, 'Cebu City Medical Center'),
(5, '', '', 0, '', '', '', 0, ''),
(11, 'xzxzx', 'xzxz', 34, '34', 'tretre', '4', 4, 'ff'),
(12, 'dfdf', 'ff', 2323, '3232', 'dfdf', 'fsdf', 34, 'fdsf'),
(13, 'sdsd', 'csc', 3, '34', 'fsdf', '3', 434, 'df'),
(14, 'sdasd', 'dasd', 434, '45455', 'ff', '43', 5, 'dgfgf');

-- --------------------------------------------------------

--
-- Table structure for table `north_general_hospital`
--

CREATE TABLE `north_general_hospital` (
  `id` int(11) NOT NULL,
  `blood_type` varchar(255) NOT NULL,
  `blood_quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `sacred_heart_hospital`
--

CREATE TABLE `sacred_heart_hospital` (
  `id` int(11) NOT NULL,
  `blood_type` varchar(255) NOT NULL,
  `blood_quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `south_general_hospital`
--

CREATE TABLE `south_general_hospital` (
  `id` int(11) NOT NULL,
  `blood_type` varchar(255) NOT NULL,
  `blood_quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'test123', '482c811da5d5b4bc6d497ffa98491e38'),
(2, 'edd', '123'),
(3, 'royroy', '202cb962ac59075b964b07152d234b70 '),
(4, 'sitay', '827ccb0eea8a706c4c34a16891f84e7b '),
(5, 'ryan', '827ccb0eea8a706c4c34a16891f84e7b '),
(7, 'cali', '202cb962ac59075b964b07152d234b70 '),
(8, 'anna', '827ccb0eea8a706c4c34a16891f84e7b '),
(9, 'rob', '202cb962ac59075b964b07152d234b70 '),
(10, 'lenay', '827ccb0eea8a706c4c34a16891f84e7b ');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `first_name`, `last_name`, `email`, `address`) VALUES
(1, 'Test', 'User', '', 'Cebu'),
(2, 'ahha', 'haahah', 'sjsd@dkd', 'addf'),
(3, 'Roy ', 'Bedoria', 'roybedoria@gmail.com', 'Manlapay'),
(4, 'Soseit', 'Bedoria', 'soseitbedoria@gmail.com', 'Talamban'),
(5, 'Ryan', ' Bedoria', 'ryanbedoria@gmail.com', 'Manlapay'),
(6, 'susan', 'bedoria', 'qeeeee', 'manlapay'),
(7, 'Calianna Phoebe', 'Camento', 'cali@gmail.com', 'asss'),
(8, 'Anna Mae', 'Jorge', 'anna@gmail.com', 'Bulak'),
(9, 'Rob', 'Caldoza', 'rob@gmail.com', 'manlapay'),
(10, 'Ma. Elena ', 'Fuentes', 'elena@gmail.com', 'Talamban');

-- --------------------------------------------------------

--
-- Table structure for table `vicente_sotto_hospital`
--

CREATE TABLE `vicente_sotto_hospital` (
  `id` int(11) NOT NULL,
  `blood_type` varchar(255) NOT NULL,
  `blood_quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_file`
--
ALTER TABLE `admin_file`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blooddetails`
--
ALTER TABLE `blooddetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_ab_minus`
--
ALTER TABLE `blood_ab_minus`
  ADD PRIMARY KEY (`blood_id`);

--
-- Indexes for table `blood_ab_plus`
--
ALTER TABLE `blood_ab_plus`
  ADD KEY `blood_id` (`blood_id`);

--
-- Indexes for table `blood_a_minus`
--
ALTER TABLE `blood_a_minus`
  ADD PRIMARY KEY (`blood_id`);

--
-- Indexes for table `blood_a_plus`
--
ALTER TABLE `blood_a_plus`
  ADD KEY `blood_id` (`blood_id`);

--
-- Indexes for table `blood_b_minus`
--
ALTER TABLE `blood_b_minus`
  ADD PRIMARY KEY (`blood_id`);

--
-- Indexes for table `blood_b_plus`
--
ALTER TABLE `blood_b_plus`
  ADD PRIMARY KEY (`blood_id`);

--
-- Indexes for table `blood_o_minus`
--
ALTER TABLE `blood_o_minus`
  ADD KEY `blood_id` (`blood_id`);

--
-- Indexes for table `blood_o_plus`
--
ALTER TABLE `blood_o_plus`
  ADD KEY `blood_id` (`blood_id`);

--
-- Indexes for table `camps`
--
ALTER TABLE `camps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cebu_doctor_hospital`
--
ALTER TABLE `cebu_doctor_hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cebu_medical_center`
--
ALTER TABLE `cebu_medical_center`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations_file`
--
ALTER TABLE `donations_file`
  ADD PRIMARY KEY (`donation_ID`),
  ADD UNIQUE KEY `donation_id` (`donation_ID`);

--
-- Indexes for table `north_general_hospital`
--
ALTER TABLE `north_general_hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requestblood`
--
ALTER TABLE `requestblood`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `sacred_heart_hospital`
--
ALTER TABLE `sacred_heart_hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `south_general_hospital`
--
ALTER TABLE `south_general_hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `user_id` (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vicente_sotto_hospital`
--
ALTER TABLE `vicente_sotto_hospital`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_file`
--
ALTER TABLE `admin_file`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blooddetails`
--
ALTER TABLE `blooddetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `blood_ab_minus`
--
ALTER TABLE `blood_ab_minus`
  MODIFY `blood_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blood_ab_plus`
--
ALTER TABLE `blood_ab_plus`
  MODIFY `blood_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blood_a_minus`
--
ALTER TABLE `blood_a_minus`
  MODIFY `blood_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blood_a_plus`
--
ALTER TABLE `blood_a_plus`
  MODIFY `blood_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blood_b_minus`
--
ALTER TABLE `blood_b_minus`
  MODIFY `blood_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blood_b_plus`
--
ALTER TABLE `blood_b_plus`
  MODIFY `blood_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blood_o_minus`
--
ALTER TABLE `blood_o_minus`
  MODIFY `blood_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blood_o_plus`
--
ALTER TABLE `blood_o_plus`
  MODIFY `blood_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `camps`
--
ALTER TABLE `camps`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cebu_doctor_hospital`
--
ALTER TABLE `cebu_doctor_hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cebu_medical_center`
--
ALTER TABLE `cebu_medical_center`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `donations_file`
--
ALTER TABLE `donations_file`
  MODIFY `donation_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `north_general_hospital`
--
ALTER TABLE `north_general_hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requestblood`
--
ALTER TABLE `requestblood`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sacred_heart_hospital`
--
ALTER TABLE `sacred_heart_hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `south_general_hospital`
--
ALTER TABLE `south_general_hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vicente_sotto_hospital`
--
ALTER TABLE `vicente_sotto_hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_info` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
