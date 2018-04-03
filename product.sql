-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2017 at 02:22 PM
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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(70) NOT NULL,
  `short_desc` varchar(300) NOT NULL,
  `img_path` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `title`, `short_desc`, `img_path`, `price`, `stock`) VALUES
(8, 1, 'iphone 7 plus', 'Specification goes here........', 'apple-iphone-7-gallery-img-3.jpg', 90000, 20),
(9, 1, 'Galaxy S8', 'Specification goes here...', 'galaxy_s8_2.jpg', 70000, 50),
(13, 1, 'Huawei p10', 'Specification goes here.', '201701100215033049.jpg', 50000, 10),
(14, 1, 'Mi 6 Plus', 'Specification goes here...', '1505221351galaxy_s8_2.jpg', 44000, 30),
(15, 1, 'One Plus 5', 'specification', 'oneplus5-render-leak.jpg', 55000, 15),
(16, 1, 'Oppo A57', 'specificaton goes here ', 'Oppo-A57_db_1_3896_800X600_214201732528PM.jpg', 20000, 12),
(18, 1, 'iphone 6', 'Specification goes here....', 'iphone6.jpg', 50000, 25),
(19, 1, 'Google Pixel', 'Specification', 'google-pixel-02.jpg', 40000, 60),
(21, 5, 'Hp probook', 'dfsdf', 'HPProbook_laptop.png', 50000, 50),
(22, 16, 'Sony bravia 56\"', 'specification', 'sony_bravia_s85c_web.jpg', 120000, 20),
(23, 16, 'LG LED TV', 'specification', 'lg_55ly340h_55_class_flat_slim_1111594.jpg', 60000, 90),
(24, 5, 'Macbook Pro', 'specification', 'MACBOOKPRO.jpg', 120000, 20),
(38, 1, 'iphone 7', 'Specification', '1502977767apple-iphone-7-gallery-img-3.jpg', 90000, 50),
(42, 5, 'hp Probook', 'sdfsd sdfd', '1505219749HPProbook_laptop.png', 60000, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_cat_relation` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_cat_relation` FOREIGN KEY (`category_id`) REFERENCES `product_category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
