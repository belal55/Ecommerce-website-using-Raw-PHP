-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2017 at 02:21 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sostadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_address` varchar(300) NOT NULL,
  `order_date` date NOT NULL,
  `shipping_date` date NOT NULL,
  `order_amount` int(11) NOT NULL,
  `delivery_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `customer_id`, `customer_address`, `order_date`, `shipping_date`, `order_amount`, `delivery_status`) VALUES
(1, 1, 'fsdf', '2017-09-18', '2017-09-18', 5000, 'delivered'),
(2, 1, 'dhaka', '2017-09-18', '2017-09-18', 5000, 'delivered'),
(3, 1, 'xddsfffd', '2017-09-18', '2017-09-18', 94000, 'delivered'),
(4, 1, 'dhaka, khilkhet', '2017-09-18', '2017-09-18', 134000, 'delivered'),
(5, 1, 'dhaka', '2017-09-18', '2017-09-18', 184000, 'delivered'),
(6, 1, 'sdfsfdsdf', '2017-09-18', '2017-09-18', 304000, 'pending'),
(8, 14, 'Nikunja 2', '2017-09-18', '2017-09-18', 105000, 'pending'),
(9, 14, 'Banani', '2017-09-18', '2017-09-18', 155000, 'pending'),
(10, 14, 'Banani', '2017-09-18', '2017-09-18', 60000, 'pending'),
(11, 14, 'dhaka, khilkhet', '2017-09-18', '2017-09-18', 174000, 'delivered'),
(12, 16, 'Matijheel', '2017-09-18', '2017-09-18', 160000, 'pending'),
(13, 16, 'dgedg', '2017-09-18', '2017-09-18', 138000, 'pending'),
(14, 14, 'hikjhkj', '2017-09-18', '2017-09-18', 105000, 'delivered'),
(15, 14, 'dhaka, khilkhet', '2017-09-18', '2017-09-18', 84000, 'pending'),
(16, 14, 'hghhgf', '2017-09-18', '2017-09-18', 114000, 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_fk` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_fk` FOREIGN KEY (`customer_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
