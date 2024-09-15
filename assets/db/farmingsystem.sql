-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2024 at 05:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Nihal1487', '1487');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_registration`
--

CREATE TABLE `buyer_registration` (
  `Company Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(11) NOT NULL,
  `conformPassword` varchar(11) NOT NULL,
  `Phone Number` varchar(11) NOT NULL,
  `Address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buyer_registration`
--

INSERT INTO `buyer_registration` (`Company Name`, `Email`, `Password`, `conformPassword`, `Phone Number`, `Address`) VALUES
('Nihal', 'n@gmail.com', '$2y$10$XzCp', '', '123456789', 'zdrddf\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(100) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `Email`, `Subject`, `Message`) VALUES
('commondo gammer', 'nihalchaudhary1252@gmail.com', 'payment Issu', 'in youer site payment system is not owrking right now plz fix is as sooN AS posible !!!'),
('Nihal Chaudhary', 'nima@gmail.com', 'payment Issu', 'payment not working');

-- --------------------------------------------------------

--
-- Table structure for table `farmer ragistation`
--

CREATE TABLE `farmer ragistation` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(11) NOT NULL,
  `conformPassword` varchar(11) NOT NULL,
  `Phone Number` varchar(11) NOT NULL,
  `Address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmer ragistation`
--

INSERT INTO `farmer ragistation` (`Name`, `Email`, `Password`, `conformPassword`, `Phone Number`, `Address`) VALUES
('commondo gammer', 'n@gmail.com', '$2y$10$lo/Y', '$2y$10$lo/Y', '09898733099', 'Pratapagadh');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(111) NOT NULL,
  `amount` int(150) NOT NULL,
  `paymentDetail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `amount`, `paymentDetail`) VALUES
(1, 14870, 'cash on dilevery\r\n'),
(1, 1460, 'rgildrgkjl.dfh\r\n'),
(1, 1460, 'rgildrgkjl.dfh\r\n'),
(1, 1422512, 'fbbdfbdfb\r\n'),
(1, 1487, 'jay arbuda\r\n'),
(1, 148870, 'fjl;jgijo;b'),
(3, 1600, 'buy now\r\n'),
(4, 699, 'ok\r\n'),
(4, 1234, 'zhdfgnx\r\n'),
(3, 342642, 'dthtfth'),
(4, 4332, 'htrihr'),
(4, 1487, 'blaa ablaa');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productName` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `ItemQuantity` varchar(100) NOT NULL,
  `quantityType` varchar(100) NOT NULL,
  `ExpectedPrice` varchar(100) NOT NULL,
  `PriceType` varchar(100) NOT NULL,
  `MobileNumber` varchar(11) NOT NULL,
  `Address` varchar(120) NOT NULL,
  `State` varchar(120) NOT NULL,
  `District` varchar(120) NOT NULL,
  `Sub District` varchar(120) NOT NULL,
  `Village` varchar(120) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productName`, `description`, `ItemQuantity`, `quantityType`, `ExpectedPrice`, `PriceType`, `MobileNumber`, `Address`, `State`, `District`, `Sub District`, `Village`, `id`) VALUES
('Rice', 'this is a good rise', '1487', 'kg', '1600', 'per-20kg', '9898733099', 'unava', 'gujarat', 'mahesana', 'unjha', 'unava', 3),
('wheat', 'good ', '50', 'kg', '700', 'per-20kg', '8780179118', 'gola', 'gujarat', 'banaskanth', 'palanpur', 'gola', 4),
('poteto', 'good poteto', '1487', 'kg', '600', 'per-20kg', '8780179118', 'Pratapagadh', 'Gujarat', 'mahesana', 'unjha', 'gola', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
