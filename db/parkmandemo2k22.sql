-- phpMyAdmin SQL Dump
-- version 5.2.0-rc1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2022 at 03:07 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parkmandemo2k22`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblgarage`
--

CREATE TABLE `tblgarage` (
  `garage_id` bigint(20) NOT NULL,
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `owner_id` int(11) NOT NULL,
  `garage_owner` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `hourly_price` float DEFAULT NULL,
  `currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `contact_email` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `point_lat` decimal(19,16) DEFAULT NULL,
  `point_long` decimal(19,16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblgarage`
--

INSERT INTO `tblgarage` (`garage_id`, `name`, `owner_id`, `garage_owner`, `hourly_price`, `currency`, `contact_email`, `country`, `point_lat`, `point_long`) VALUES
(1, 'Garage1', 29190, 'AutoPark', 2, '€', 'testemail@testautopark.fi', 'Finland', '60.1686078476240950', '24.9323710661316230'),
(2, 'Garage2', 29190, 'AutoPark', 1.5, 'SEK', 'testemail@testautopark.fi', 'Sweden', '60.1625620000000000', '24.9394530000000000'),
(3, 'Garage3', 29190, 'AutoPark', 3, '€', 'testemail@testautopark.fi', 'Finland', '60.1644499664551100', '24.9381781682007140'),
(4, 'Garage4', 29190, 'AutoPark', 3, 'NOK', 'testemail@testautopark.fi', 'Norway', '60.1652193588527950', '24.9353742599487300'),
(5, 'Garage5', 29190, 'AutoPark', 3, '€', 'testemail@testautopark.fi', 'Finland', '60.1716742949006800', '24.9215856620243630'),
(6, 'Garage6', 43190, 'Parkkitalo OY', 2, '€', 'testemail@testgarag.fi', 'Finland', '60.1686739014875100', '24.9301629520454070');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblgarage`
--
ALTER TABLE `tblgarage`
  ADD PRIMARY KEY (`garage_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblgarage`
--
ALTER TABLE `tblgarage`
  MODIFY `garage_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
