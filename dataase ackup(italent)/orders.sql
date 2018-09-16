-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2018 at 09:21 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `italent`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `srno` int(100) NOT NULL,
  `emplyId` int(100) NOT NULL,
  `ordername` varchar(30) NOT NULL,
  `quantity` int(50) NOT NULL,
  `orderprice` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `empName` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`srno`, `emplyId`, `ordername`, `quantity`, `orderprice`, `total`, `empName`, `date`) VALUES
(4, 100, 'Cake', 1, 15, 15, 'ram', '2018-08-25'),
(5, 100, 'Samosa', 1, 15, 15, 'ram', '2018-08-25'),
(6, 100, 'Cake', 1, 15, 15, 'ram', '2018-08-25'),
(7, 100, 'Samosa', 12, 15, 180, 'ram', '2018-08-23'),
(8, 100, 'Coffee', 6, 10, 60, 'ram', '2018-08-23'),
(9, 100, 'Coffee', 8, 10, 120, 'ram', '2018-08-23'),
(10, 100, 'Tee', 18, 10, 180, 'ram', '2018-08-24'),
(11, 100, 'Coffee', 4, 10, 40, 'ram', '2018-08-24'),
(12, 100, 'Cake', 2, 15, 30, 'ram', '2018-08-24'),
(13, 100, 'Coffee', 1, 10, 10, 'ram', '2018-08-26'),
(14, 100, 'Coffee', 10, 10, 100, 'ram', '2018-08-26'),
(19, 100, 'Cake', 1, 15, 15, 'ram', '2018-08-26'),
(20, 100, 'Cake', 5, 15, 75, 'ram', '2018-08-26'),
(21, 100, 'Samosa', 5, 15, 75, 'ram', '2018-08-26'),
(22, 100, 'Tee', 1, 10, 10, 'ram', '2018-08-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `srno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
