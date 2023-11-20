-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 04:10 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pochinkihotelsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_data`
--

CREATE TABLE `admin_data` (
  `username` varchar(500) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_data`
--

INSERT INTO `admin_data` (`username`, `fullname`, `password`) VALUES
('admin', 'Admin', 'admin'),
('admin01', 'Nurfatin Masyura', 'admin01'),
('admin02', 'Helmi Ashraf', 'admin02');

-- --------------------------------------------------------

--
-- Table structure for table `booking_data`
--

CREATE TABLE `booking_data` (
  `bookID` int(11) NOT NULL,
  `timeBook` varchar(255) NOT NULL,
  `dateBook` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `roomID` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `dateFrom` varchar(255) DEFAULT NULL,
  `timeFrom` varchar(255) DEFAULT NULL,
  `dateTo` varchar(255) DEFAULT NULL,
  `timeTo` varchar(255) DEFAULT NULL,
  `numPeople` int(11) DEFAULT NULL,
  `breakfastPax` int(30) NOT NULL,
  `dinnerPax` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_data`
--

INSERT INTO `booking_data` (`bookID`, `timeBook`, `dateBook`, `username`, `roomID`, `location`, `dateFrom`, `timeFrom`, `dateTo`, `timeTo`, `numPeople`, `breakfastPax`, `dinnerPax`) VALUES
(20, '23:4:39', '2021-7-8', 'hariz01', 'R01FS', 'PULAU LANGKAWI, KEDAH', '2021-07-08', '23:04', '2021-07-09', '23:04', 2, 0, 0),
(21, '12:55:6', '2021-7-9', 'attinsyr', 'R02FD', 'CHERATING, PAHANG', '2021-07-10', '12:56', '2021-07-11', '12:56', 2, 0, 2),
(22, '18:27:51', '2021-7-13', 'attinsyr', 'R03FL', 'PULAU LANGKAWI, KEDAH', '2021-07-14', '18:27', '2021-07-15', '18:28', 2, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_data`
--

CREATE TABLE `invoice_data` (
  `invoiceID` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `totalPayment` varchar(255) DEFAULT NULL,
  `datePayment` varchar(255) DEFAULT NULL,
  `timeBook` varchar(255) DEFAULT NULL,
  `dateBook` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice_data`
--

INSERT INTO `invoice_data` (`invoiceID`, `username`, `totalPayment`, `datePayment`, `timeBook`, `dateBook`) VALUES
(14, 'hariz01', '125.00', '2021/07/08', '23:4:39', '2021-7-8'),
(15, 'attinsyr', '165.00', '2021/07/09', '12:55:6', '2021-7-9'),
(16, 'attinsyr', '265.00', '2021/07/09', '12:55:6', '2021-7-9'),
(17, 'attinsyr', '265.00', '2021/07/13', '18:27:51', '2021-7-13');

-- --------------------------------------------------------

--
-- Table structure for table `roomtype_data`
--

CREATE TABLE `roomtype_data` (
  `roomID` varchar(20) NOT NULL,
  `roomImage` varchar(200) NOT NULL,
  `roomType` varchar(1000) NOT NULL,
  `roomPackage` varchar(1000) NOT NULL,
  `roomDesc` varchar(1000) NOT NULL,
  `bathroomDesc` varchar(1000) NOT NULL,
  `featureDesc` varchar(1000) NOT NULL,
  `entDesc` varchar(1000) NOT NULL,
  `internetDesc` varchar(1000) NOT NULL,
  `roomPrice` varchar(1000) NOT NULL,
  `price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roomtype_data`
--

INSERT INTO `roomtype_data` (`roomID`, `roomImage`, `roomType`, `roomPackage`, `roomDesc`, `bathroomDesc`, `featureDesc`, `entDesc`, `internetDesc`, `roomPrice`, `price`) VALUES
('R01FS', 'family standard.jpg', 'Family Room', 'Standard Room', 'Unique views over the city or swimmimg pool - Expansive windows maximize views and natural light', 'Shower provided - Lighted shaving/make-up mirror - Bath soap and shampoo are provided - Conveniences include a hair dryer', 'Complete air-conditioning for your comfort - In-room coffee and tea making facilities for convenience - Complimentary bottled water always available', '32 inch flat-panel HD TV', 'Wireless Internet access available', 'RM125/night', '125.00'),
('R01SS', 'single deluxe.jpg', 'Single Room', 'Standard Room', 'Unique views over the city or swimmimg pool - Expansive windows maximize views and natural light', 'Shower provided - Lighted shaving/make-up mirror - Bath soap and shampoo are provided - Conveniences include a hair dryer', 'Complete air-conditioning for your comfort - In-room coffee and tea making facilities for convenience - Complimentary bottled water always available', '32 inch flat-panel HD TV', 'Wireless Internet access available', 'RM85/night', '85.00'),
('R02FD', 'family deluxe.jfif', 'Family Room', 'Deluxe Room', 'Unique views over the city or swimmimg pool - Expansive windows maximize views and natural light', 'Shower provided - Bath tub provided - Lighted shaving/make-up mirror - Bath soap and shampoo are provided - Conveniences include a hair dryer', 'Complete air-conditioning for your comfort - Very spacious room area - In-room coffee and tea making facilities for convenience - Complimentary bottled water always available - Fully stocked mini refreshment bar in room', '43 inch flat-panel HD TV', 'Wireless Internet access available', 'RM165/night', '165.00'),
('R02SD', 'single deluxee.jpg', 'Single Room', 'Deluxe Room', 'Unique views over the city or swimmimg pool - Expansive windows maximize views and natural light', 'Shower provided - Lighted shaving/make-up mirror - Bath soap and shampoo are provided - Conveniences include a hair dryer', 'Complete air-conditioning for your comfort - In-room coffee and tea making facilities for convenience - Complimentary bottled water always available - Fully stocked mini refreshment bar in room', '43 inch flat-panel HD TV', 'Wireless Internet access available', 'RM95/night', '95.00'),
('R03FL', 'family luxury.jpg', 'Family Room', 'Luxury Room', 'Unique views over the city or swimmimg pool - Expansive windows maximize views and natural light - Luxurious bathroom with fully marble soaking bath tub', 'Shower provided - Lighted shaving/make-up mirror - Exclusive Asprey bath amenities - Conveniences include a hair dryer', 'Complete air-conditioning for your comfort - Very spacious room area - Furnished with sofa and coffee table - In-room coffee and tea making facilities for convenience - Complimentary bottled water always available - Fully stocked mini refreshment bar in room', '50 inch flat-panel HD TV', 'Wireless Internet access available', 'RM205/night', '205.00'),
('R03SL', 'single luxury.jpg', 'Single Room', 'Luxury Room', 'Unique views over the city or swimmimg pool - Expansive windows maximize views and natural light - Luxurious bathroom with fully marble soaking bath tub', 'Shower provided - Lighted shaving/make-up mirror - Exclusive Asprey bath amenities - Conveniences include a hair dryer', 'Complete air-conditioning for your comfort - In-room coffee and tea making facilities for convenience - Complimentary bottled water always available - Fully stocked mini refreshment bar in room', '43 inch flat-panel HD TV', 'Wireless Internet access available', 'RM105/night', '105.00');

-- --------------------------------------------------------

--
-- Table structure for table `room_data`
--

CREATE TABLE `room_data` (
  `roomNo` varchar(20) NOT NULL,
  `roomID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_data`
--

INSERT INTO `room_data` (`roomNo`, `roomID`) VALUES
('100', 'R01FS'),
('101', 'R01FS'),
('102', 'R01FS'),
('103', 'R01FS'),
('104', 'R01FS'),
('105', 'R01SS'),
('106', 'R01SS'),
('107', 'R01SS'),
('108', 'R01SS'),
('109', 'R01SS'),
('110', 'R02FD'),
('111', 'R02FD'),
('112', 'R02FD'),
('113', 'R02FD'),
('114', 'R02FD'),
('115', 'R02SD'),
('116', 'R02SD'),
('117', 'R02SD'),
('118', 'R02SD'),
('119', 'R02SD'),
('120', 'R03FL'),
('121', 'R03FL'),
('122', 'R03FL'),
('123', 'R03FL'),
('124', 'R03FL'),
('125', 'R03SL'),
('126', 'R03SL'),
('127', 'R03SL'),
('128', 'R03SL'),
('129', 'R03SL');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(1000) NOT NULL,
  `phoneNo` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`username`, `fullname`, `phoneNo`, `email`, `password`, `confirmpassword`) VALUES
('aennya', 'Nur Ain Binti Sallehudin', '0179902062', 'ainsallehudin01@gmail.com', '123', '123'),
('attinsyr', 'Nurfatin Masyura Binti Esamustafaruden', '0174287801', 'nrftnmsyra@gmail.com', '123', '123'),
('hariz01', 'Hariz Firdaus Bin Khairul Imran', '01121565315', 'harizfirdaus@gmail.com', '12345', '12345'),
('helmiashraf', 'Helmi Ashraf Bin Ahmad', '01126515009', 'helmiashraf@gmail.com', '12345', '12345'),
('user01', 'Nurfatin Masyura', '0174287801', 'nrftnmsyra@gmail.com', '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_data`
--
ALTER TABLE `admin_data`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `booking_data`
--
ALTER TABLE `booking_data`
  ADD PRIMARY KEY (`bookID`);

--
-- Indexes for table `invoice_data`
--
ALTER TABLE `invoice_data`
  ADD PRIMARY KEY (`invoiceID`);

--
-- Indexes for table `roomtype_data`
--
ALTER TABLE `roomtype_data`
  ADD PRIMARY KEY (`roomID`);

--
-- Indexes for table `room_data`
--
ALTER TABLE `room_data`
  ADD PRIMARY KEY (`roomNo`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_data`
--
ALTER TABLE `booking_data`
  MODIFY `bookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `invoice_data`
--
ALTER TABLE `invoice_data`
  MODIFY `invoiceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
