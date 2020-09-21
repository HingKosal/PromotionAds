-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2020 at 03:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `promotion_ads_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` char(255) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `description`) VALUES
('1', 'Alibaba', ''),
('2', 'Amazon', ''),
('3', 'Nike', '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` char(250) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `title`, `description`) VALUES
('1', 'Clothes', ''),
('2', 'Shoes', ''),
('3', 'Accessories', ''),
('4', 'Beautys', '');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `user_id` int(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`user_id`, `company_name`, `location`, `phone`, `description`) VALUES
(9, 'Promotion Ads', '', '0969604049', '');

-- --------------------------------------------------------

--
-- Table structure for table `manage_promotion`
--

CREATE TABLE `manage_promotion` (
  `promotion_id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `category_id` char(255) NOT NULL,
  `brand_id` char(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `size_id` char(255) DEFAULT NULL,
  `user_id` int(255) NOT NULL,
  `published` tinyint(4) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `manage_promotion`
--

INSERT INTO `manage_promotion` (`promotion_id`, `product_name`, `category_id`, `brand_id`, `price`, `discount`, `description`, `image`, `size_id`, `user_id`, `published`, `create_date`) VALUES
(1019, 'Blue T Shirt', '1', '1', '12.00', '50', 'testing', '1596566899_product-9.jpg', '002', 9, 1, '2020-08-11 22:48:39'),
(1020, 'High End', '1', '1', '15.00', '40', 'test', '1596568859_product-2.png', '002', 9, 1, '2020-08-05 02:20:59'),
(1021, 'Amazing Modern Chair', '1', '1', '15.00', '50', 'test', '1596569118_product-3.png', '003', 9, 1, '2020-08-05 02:25:18'),
(1022, 'Designer Awesome Chair', '1', '1', '15.00', '25', 'test', '1596569150_product-4.png', '001', 9, 1, '2020-08-05 02:25:50'),
(1023, 'The butterfly chair', '1', '1', '10.00', '10', 'test', '1596569203_product-5.png', '003', 9, 1, '2020-08-05 02:26:43'),
(1024, 'Dining Chairs', '1', '1', '13.00', '20', 'test', '1596569248_product-6.png', '003', 9, 1, '2020-08-05 02:27:28'),
(1025, 'Plastic Armchair', '1', '1', '14.00', '35', 'test', '1596569288_product-7.png', '002', 9, 1, '2020-08-05 02:28:08'),
(1026, 'Wing Chairs', '1', '1', '16.00', '30', 'test', '1596569330_product-8.png', '003', 9, 1, '2020-08-05 02:28:50'),
(1027, 'Black-Converse-Shoes', '2', '1', '20.00', '20', 'test', '1596569425_Black-Converse-Shoes-PNG-HD.png', '002', 9, 1, '2020-08-05 02:30:25'),
(1028, 'Biblio Converse-Shoes', '2', '1', '35.00', '40', 'test', '1596569596_Converse-Shoes-PNG-Background-Image.png', '002', 9, 1, '2020-08-05 02:33:16'),
(1029, 'Modern Converse-Shoes', '2', '1', '25.00', '50', 'test', '1596569649_Converse-Shoes-PNG-Picture.png', '002', 9, 1, '2020-08-05 02:34:09'),
(1030, 'Designer Converse', '2', '1', '16.00', '35', 'test', '1596569706_Converse-Shoes-PNG-Transparent.png', '002', 9, 1, '2020-08-05 02:35:06'),
(1031, 'Vector-Shoes', '2', '2', '26.00', '25', 'test', '1596569766_Vector-Shoes.png', '003', 9, 1, '2020-08-05 02:36:06'),
(1032, 'Dining Dance_Shoes', '2', '3', '30.00', '50', 'test', '1596569811_Dance_Shoes.png', '002', 9, 1, '2020-08-05 02:36:51'),
(1033, 'Plastic Dance-Shoes', '2', '1', '26.00', '60', 'test', '1596569864_Dance-Shoes-PNG-File.png', '002', 9, 1, '2020-08-05 02:37:44'),
(1034, 'Wing Dance', '2', '3', '30.00', '25', 'test', '1596569913_Dance-Shoes.png', '003', 9, 1, '2020-08-05 02:38:33'),
(1035, 'ADATA-Sync-Charge', '3', '1', '25.00', '40', 'test', '1596569995_ADATA-Sync-Charge-Lightning-Cable-Series-Launched-400x400.jpg', '003', 9, 1, '2020-08-05 02:39:55'),
(1036, 'Modern Keyboard', '3', '1', '10.00', '25', 'test', '1596570037_20150511143626_514521-200x200.jpg', '002', 9, 1, '2020-08-05 02:40:37'),
(1037, 'c615-gallery', '3', '1', '17.00', '36', 'test', '1596570076_c615-gallery-200x200.png', '002', 9, 1, '2020-08-05 02:41:16'),
(1038, 'Dell Gaming', '3', '1', '36.00', '40', 'test', '1596570132_dell gaming backpack-200x200.jpg', '003', 9, 1, '2020-08-05 02:42:12'),
(1039, 'MouseM11-1', '3', '1', '34.00', '25', 'test', '1596570184_g603-lightspeed-wireless-gaming-mouse-200x200.png', '002', 9, 1, '2020-08-05 02:43:04'),
(1040, 'M10-1', '3', '1', '36.00', '40', 'test', '1596570218_M10-1-400x400.jpg', '002', 9, 1, '2020-08-05 02:43:38'),
(1041, 'apple-magic-mouse', '3', '1', '15.00', '30', 'test', '1596570254_mla02za-apple-magic-mouse-2-400x400.jpg', '002', 9, 1, '2020-08-05 02:45:57'),
(1042, 'Pen Surface', '3', '1', '15.00', '50', 'test', '1596570286_Pen surface-200x200.jpg', '002', 9, 1, '2020-08-05 02:44:46');

-- --------------------------------------------------------

--
-- Table structure for table `manage_user`
--

CREATE TABLE `manage_user` (
  `user_id` int(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `manage_user`
--

INSERT INTO `manage_user` (`user_id`, `first_name`, `last_name`, `username`, `email`, `password`) VALUES
(9, 'System', 'Admin', 'System Admin', 'admin@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(10, 'Kosal', 'Hing', 'Hkosal', 'kosal@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(11, 'Fristname', 'LastName', 'user1', 'user@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(12, 'first', 'last', 'kosal', 'user1@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `size_id` char(255) NOT NULL,
  `size_name` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`size_id`, `size_name`, `description`) VALUES
('001', 'Small', ''),
('002', 'Medium', ''),
('003', 'Large', ''),
('004', 'X-Large', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`) USING BTREE;

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`) USING BTREE;

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`user_id`) USING BTREE;

--
-- Indexes for table `manage_promotion`
--
ALTER TABLE `manage_promotion`
  ADD PRIMARY KEY (`promotion_id`) USING BTREE,
  ADD KEY `sizeidpk` (`size_id`) USING BTREE,
  ADD KEY `catagorypk` (`category_id`) USING BTREE,
  ADD KEY `brandidpk` (`brand_id`) USING BTREE,
  ADD KEY `userpk` (`user_id`) USING BTREE;

--
-- Indexes for table `manage_user`
--
ALTER TABLE `manage_user`
  ADD PRIMARY KEY (`user_id`) USING BTREE,
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`size_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manage_promotion`
--
ALTER TABLE `manage_promotion`
  MODIFY `promotion_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1047;

--
-- AUTO_INCREMENT for table `manage_user`
--
ALTER TABLE `manage_user`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `useridpk` FOREIGN KEY (`user_id`) REFERENCES `manage_user` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `manage_promotion`
--
ALTER TABLE `manage_promotion`
  ADD CONSTRAINT `branchpk` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `categorypk` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `companypk` FOREIGN KEY (`user_id`) REFERENCES `companies` (`user_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sizeidpk` FOREIGN KEY (`size_id`) REFERENCES `size` (`size_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
