-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 06:07 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `misery_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `store_products`
--

CREATE TABLE `store_products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keyword` varchar(255) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `store_products`
--

INSERT INTO `store_products` (`product_id`, `product_name`, `product_description`, `product_keyword`, `product_img`, `product_price`, `status`) VALUES
(44, 'white hoodie', 'oversized white hoodie', 'hoodies', 'white hoodie.jpg', '955', 'availble'),
(50, 'stay in line pants', 'black pants with lines', 'pants', 'stay in line pants.jpg', '1150', 'available'),
(39, 'skull t-shirt', 'skull t-shirt', 't-shirt', 'skull t-shirt.jpg', '550', 'available'),
(55, 'Retro Desert t-shirt', 'Comfort Colors Retro Desert Dreaming Shirt Arizona T Shirt', 't-shirt', 'Retro Desert t-shirt.jpg', '500', 'available'),
(41, 'printed t-shirt', 'oversized printed t-shirt', 't-shirt', 'printed t-shirt.jpg', '550', 'available'),
(43, 'grey hoodie', 'oversized grey hoodie', 'hoodies', 'grey hoodie.jpg', '650', 'available'),
(45, 'generic hoodie', 'slim fit hoodie', 'hoodies', 'generic hoodie.jpg', '650', 'available'),
(48, 'denims jeans', 'straight fit denims jeans', 'pants', 'denims jeans.jpg', '1150', 'available'),
(51, 'denim shorts', 'blue summer denim shorts', 'shorts', 'denim shorts.jpg', '550', 'available'),
(54, 'cut out t-shirt', 'cut out crop top t-shirt', ' t-shirt', 'cut out t-shirt.jpg', '950', 'available'),
(49, 'cargo shorts', 'black cargo shorts', 'shorts', 'cargo shorts.jpg', '700', 'available'),
(47, 'cargo pants', 'black cargo pants', 'pants', 'cargo pants.jpg', '1050', 'available'),
(40, 'brooklyn t-shirt', 'oversized t-shirt', 't-shirt', 'brooklyn t-shirt.jpg', '500', 'aailable'),
(46, 'blue baggy pants', 'mint cream baggy pants ', 'pants', 'blue baggy pants.jpg', '1000', 'available'),
(42, 'black hoodie', 'black fit hoodie', 'hoodies', 'black hoodie.jpg', '800', 'available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `store_products`
--
ALTER TABLE `store_products`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_name` (`product_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `store_products`
--
ALTER TABLE `store_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
