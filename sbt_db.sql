-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2020 at 03:49 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sbt_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer_cart`
--

CREATE TABLE `buyer_cart` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `book_price` float NOT NULL,
  `book_image` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `writer_name` text NOT NULL,
  `edition` bigint(20) NOT NULL,
  `total_price` int(50) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer_cart`
--

INSERT INTO `buyer_cart` (`id`, `pid`, `userid`, `book_name`, `book_price`, `book_image`, `quantity`, `isbn`, `writer_name`, `edition`, `total_price`, `created_at`) VALUES
(1, 1, 56, 'Engineering Mathematics(vol-1)', 9000, 'images/1sem/math1.jpg', 1, '1234567891011', 'S Chand', 2076, 509, '0000-00-00 00:00:00'),
(2, 4, 56, 'Engineering Mathematics(vol-1)', 509, 'images/1sem/math8.jpg', 2, '9876543212345', 'harisingh', 2074, 0, '0000-00-00 00:00:00'),
(3, 7, 56, 'Engineering Mathematics(vol-1)', 509, 'images/1sem/math7.jpg', 0, '12345678765432', 'kick', 2075, 0, '0000-00-00 00:00:00'),
(4, 1, 59, 'Engineering Mathematics(vol-1)', 9000, 'images/1sem/math1.jpg', 1, '1234567891011', 'S Chand', 2076, 509, '0000-00-00 00:00:00'),
(5, 4, 59, 'Engineering Mathematics(vol-1)', 509, 'images/1sem/math8.jpg', 2, '9876543212345', 'harisingh', 2074, 0, '0000-00-00 00:00:00'),
(6, 7, 59, 'Engineering Mathematics(vol-1)', 509, 'images/1sem/math7.jpg', 0, '12345678765432', 'kick', 2075, 0, '0000-00-00 00:00:00'),
(7, 8, 59, 'Engineering Mathematics(vol-1)', 509, 'images/1sem/math2.jpg', 0, '8888888888888888', 'king', 2071, 0, '0000-00-00 00:00:00'),
(8, 8, 56, 'Engineering Mathematics(vol-1)', 509, 'images/1sem/math2.jpg', 0, '8888888888888888', 'king', 2071, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_transaction`
--

CREATE TABLE `buyer_transaction` (
  `order_id` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `book_price` float NOT NULL,
  `book_image` varchar(255) NOT NULL,
  `quantity` int(10) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `writer_name` text NOT NULL,
  `edition` bigint(5) NOT NULL,
  `total_price` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` float NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `book` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `writer_name` text NOT NULL,
  `edition` bigint(5) NOT NULL,
  `stock` int(50) NOT NULL,
  `total_price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`id`, `product_name`, `product_price`, `product_image`, `book`, `quantity`, `isbn`, `writer_name`, `edition`, `stock`, `total_price`) VALUES
(1, 'Engineering Mathematics(vol-1)', 9000, 'images/1sem/math1.jpg', 'math', 1, '1234567891011', 'S Chand', 2076, 10, 509),
(4, 'Engineering Mathematics(vol-1)', 509, 'images/1sem/math8.jpg', 'math', 2, '9876543212345', 'harisingh', 2074, 9, 0),
(7, 'Engineering Mathematics(vol-1)', 509, 'images/1sem/math7.jpg', 'math', 0, '12345678765432', 'kick', 2075, 5, 0),
(8, 'Engineering Mathematics(vol-1)', 509, 'images/1sem/math2.jpg', 'math', 0, '8888888888888888', 'king', 2071, 8, 0),
(9, 'Engineering Physics', 519, 'images/1sem/phy.jpg', 'physics', 0, '6789054321234', 'S Chand', 2020, 0, 0),
(10, 'Engineering Physics', 519, 'images/1sem/phy1.jpg', 'physics', 0, '0', '', 0, 0, 0),
(11, 'Engineering Physics', 519, 'images/1sem/phy2.jpg', 'physics', 0, '0', '', 0, 0, 0),
(12, 'Engineering Physics', 519, 'images/1sem/phy3.jpg', 'physics', 0, '0', '', 0, 0, 0),
(13, 'Engineering Physics', 519, 'images/1sem/phy4.png', 'physics', 0, '0', '', 0, 0, 0),
(14, 'Engineering Physics', 519, 'images/1sem/phy5.jpg', 'physics', 0, '0', '', 0, 0, 0),
(15, 'Engineering Physics', 519, 'images/1sem/phy6.jpeg', 'physics', 0, '0', '', 0, 0, 0),
(16, 'Engineering Physics', 519, 'images/1sem/phy7.jpg', 'physics', 0, '0', '', 0, 0, 0),
(17, 'C-Programming', 509, 'images/1sem/c.jpg', 'c', 0, '9861713481123', 'Balagurusamy', 2019, 5, 509),
(18, 'C-Programming', 509, 'images/1sem/c1.jpg', 'c', 0, '1111111111111', '', 0, 0, 0),
(19, 'C-Programming', 509, 'images/1sem/c2.jpg', 'c', 0, '0', '', 0, 0, 0),
(20, 'C-Programming', 509, 'images/1sem/c3.jpg', 'c', 0, '0', '', 0, 0, 0),
(21, 'C-Programming', 509, 'images/1sem/c4.jpg', 'c', 0, '0', '', 0, 0, 0),
(22, 'C-Programming', 509, 'images/1sem/c5.jpg', 'c', 0, '0', '', 0, 0, 0),
(23, 'C-Programming', 509, 'images/1sem/c6.jpg', 'c', 0, '0', '', 0, 0, 0),
(24, 'C-Programming', 509, 'images/1sem/c7.jpg', 'c', 0, '0', '', 0, 0, 0),
(25, 'Communicative English', 509, 'images/1sem/e1.jpg', 'eng', 0, '0', '', 0, 0, 0),
(26, 'Communicative English', 509, 'images/1sem/e2.png', 'eng', 0, '0', '', 0, 0, 0),
(27, 'Communicative English', 509, 'images/1sem/e3.jpg', 'eng', 0, '0', '', 0, 0, 0),
(28, 'Communicative English', 509, 'images/1sem/e4.jpg', 'eng', 0, '0', '', 0, 0, 0),
(29, 'Engineering Drawing', 509, 'images/1sem/draw1.jpg', 'drawing', 0, '0', '', 0, 0, 0),
(30, 'Engineering Drawing', 509, 'images/1sem/draw6.jpg', 'drawing', 0, '0', '', 0, 0, 0),
(31, 'Engineering Drawing', 509, 'images/1sem/draw5.jpg', 'drawing', 0, '0', '', 0, 0, 0),
(32, 'Engineering Drawing', 509, 'images/1sem/draw4.jpg', 'drawing', 0, '0', '', 0, 0, 0),
(33, 'Engineering Drawing', 509, 'images/1sem/draw8.jpg', 'drawing', 0, '0', '', 0, 0, 0),
(34, 'Engineering Drawing', 509, 'images/1sem/draw2.jpg', 'drawing', 0, '0', '', 0, 0, 0),
(35, 'Engineering Drawing', 509, 'images/1sem/draw3.jpg', 'drawing', 0, '0', '', 0, 0, 0),
(36, 'Engineering Drawing', 509, 'images/1sem/draw7.jpg', 'drawing', 0, '0', '', 0, 0, 0),
(37, 'Workshop Technology', 509, 'images/1sem/work8.jpg', 'workshop', 0, '0', '', 0, 0, 0),
(38, 'Workshop Technology', 509, 'images/1sem/work7.jpg', 'workshop', 0, '0', '', 0, 0, 0),
(39, 'Workshop Technology', 509, 'images/1sem/work6.jpeg', 'workshop', 0, '0', '', 0, 0, 0),
(40, 'Workshop Technology', 509, 'images/1sem/work5.jpeg', 'workshop', 0, '0', '', 0, 0, 0),
(41, 'Workshop Technology', 509, 'images/1sem/work4.jpg', 'workshop', 0, '0', '', 0, 0, 0),
(42, 'Workshop Technology', 509, 'images/1sem/work3.jpg', 'workshop', 0, '0', '', 0, 0, 0),
(43, 'Workshop Technology', 509, 'images/1sem/work2.jpeg', 'workshop', 0, '0', '', 0, 0, 0),
(44, 'Workshop Technology', 509, 'images/1sem/work1.jpg', 'workshop', 0, '0', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `name` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`name`, `email`, `message`) VALUES
('swastika', 'himalayan_rajan@yahoo.com', '        hello'),
('aspirine', 'hospital11@khwopa.edu.np', '     hi   '),
('cheetana', 'cheetana12@gmail.com', 'hello!!        '),
('saya', 'saya2@gmail.com', 'hello solti\r\n     ');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(6) NOT NULL,
  `otp` int(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register_buyer`
--

CREATE TABLE `register_buyer` (
  `id` int(6) NOT NULL,
  `firstname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_type` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_number` bigint(40) UNSIGNED NOT NULL,
  `district` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirm_password` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` bigint(15) UNSIGNED NOT NULL,
  `secret_key` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postby_id` int(6) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `is_verified` tinyint(1) DEFAULT 0,
  `verifiedby_id` int(6) DEFAULT 1,
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_buyer`
--

INSERT INTO `register_buyer` (`id`, `firstname`, `lastname`, `username`, `id_type`, `id_number`, `district`, `city`, `email`, `password`, `confirm_password`, `contact_number`, `secret_key`, `remarks`, `postby_id`, `created_at`, `is_verified`, `verifiedby_id`, `updated_at`, `status`) VALUES
(55, 'pagal', 'shrestha', 'raqic', 'Citizenship', 566, 'Kathmandu', 'balaju', 'pricelessr30@gmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 123, NULL, NULL, 1, '2020-03-09 14:50:17', 1, 1, '2020-03-09 20:36:17', 1),
(56, 'omit', 'bajracharya', 'Omitbajracharya', 'Citizenship', 18, 'Kathmandu', 'balaju', 'omitbajracharya@gmail.com', '45f1a4b4a2f6bdfa31838a823064389f', '45f1a4b4a2f6bdfa31838a823064389f', 9860486474, NULL, NULL, 1, '2020-04-20 09:30:24', 1, 1, '2020-04-20 15:17:30', 1),
(59, 'resha', 'dulal', 'reshadulal', 'Licence', 19, 'Kathmandu', 'balaju', 'omitbajracharya@gmail.com', '45f1a4b4a2f6bdfa31838a823064389f', '45f1a4b4a2f6bdfa31838a823064389f', 9824116507, NULL, NULL, 1, '2020-04-21 01:14:41', 1, 1, '2020-04-21 07:00:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `register_seller`
--

CREATE TABLE `register_seller` (
  `id` int(6) NOT NULL,
  `firstname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_type` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_number` bigint(40) UNSIGNED NOT NULL,
  `district` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirm_password` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` bigint(15) UNSIGNED NOT NULL,
  `secret_key` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postby_id` int(6) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `is_verified` tinyint(1) DEFAULT 0,
  `verifiedby_id` int(6) DEFAULT 1,
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_seller`
--

INSERT INTO `register_seller` (`id`, `firstname`, `lastname`, `username`, `id_type`, `id_number`, `district`, `city`, `email`, `password`, `confirm_password`, `contact_number`, `secret_key`, `remarks`, `postby_id`, `created_at`, `is_verified`, `verifiedby_id`, `updated_at`, `status`) VALUES
(2, 'karan', 'shrestha', 'karan', 'Citizenship', 123, 'Kathmandu', 'lagankhel', 'shrestha8rabin@gmail.com', '250cf8b51c773f3f8dc8b4be867a9a02', '250cf8b51c773f3f8dc8b4be867a9a02', 123, NULL, NULL, 1, '2020-03-09 14:31:47', 1, 1, '2020-04-07 17:56:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `register_user`
--

CREATE TABLE `register_user` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirm_password` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact number` bigint(15) UNSIGNED NOT NULL,
  `secret_key` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postby-id` int(6) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `is_verified` tinyint(1) DEFAULT 0,
  `verifiedby_id` int(6) DEFAULT 1,
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_user`
--

INSERT INTO `register_user` (`id`, `firstname`, `lastname`, `username`, `district`, `city`, `email`, `password`, `confirm_password`, `contact number`, `secret_key`, `remarks`, `postby-id`, `created_at`, `is_verified`, `verifiedby_id`, `updated_at`, `status`) VALUES
(14, 'Rabin', 'Prajapati', 'rawbeen', 'Kathmandu', 'balaju', 'shrestha8rabin@gmail.com', '943b46f6969a778c3cf41952af79b218', '943b46f6969a778c3cf41952af79b218', 9861713481, NULL, NULL, 1, '2020-02-08 14:24:29', 1, 1, '2020-02-08 20:12:06', 1),
(15, 'riya', 'budhathoki', 'riya', 'Kathmandu', 'bhaktapur', 'shrestha8rashmi@gmail.com', '5ee907831fc55cc73ba2ff954aeff357', '5ee907831fc55cc73ba2ff954aeff357', 98459857958, NULL, NULL, 1, '2020-02-09 06:04:05', 1, 1, '2020-02-09 11:52:00', 1),
(16, 'resha', 'dulal', 'resa', 'Lalitpur', 'banepa', 'reshadulal7@gmail.com', '96f5dc8b28336dc32d655dec196d6f81', '96f5dc8b28336dc32d655dec196d6f81', 9841441515, NULL, NULL, 1, '2020-02-09 06:14:53', 1, 1, '2020-02-09 12:00:13', 1),
(17, 'karan', 'khan', '', 'Kathmandu', 'bhaktapur', 'shrestha8rabin@gmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 123, NULL, NULL, 1, '2020-03-09 14:07:54', 0, 1, NULL, 1),
(18, 'omit', 'bajracharya', 'omit', 'Kathmandu', 'balaju', 'omitbajracharya@gmail.com', '45f1a4b4a2f6bdfa31838a823064389f', '45f1a4b4a2f6bdfa31838a823064389f', 9860486474, NULL, NULL, 1, '2020-03-15 01:23:43', 1, 1, '2020-03-15 07:11:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `seller_cart`
--

CREATE TABLE `seller_cart` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `book_image` varchar(255) DEFAULT NULL,
  `isbn` varchar(50) NOT NULL,
  `writer_name` text NOT NULL,
  `edition` bigint(5) NOT NULL,
  `quantity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seller_transaction`
--

CREATE TABLE `seller_transaction` (
  `order_id` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `book_image` varchar(255) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `writer_name` text NOT NULL,
  `edition` bigint(5) NOT NULL,
  `quantity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer_cart`
--
ALTER TABLE `buyer_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyer_transaction`
--
ALTER TABLE `buyer_transaction`
  ADD UNIQUE KEY `order_id` (`order_id`),
  ADD UNIQUE KEY `order_id_2` (`order_id`);

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_buyer`
--
ALTER TABLE `register_buyer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_number` (`id_number`);

--
-- Indexes for table `register_seller`
--
ALTER TABLE `register_seller`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `register_user`
--
ALTER TABLE `register_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_cart`
--
ALTER TABLE `seller_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_transaction`
--
ALTER TABLE `seller_transaction`
  ADD UNIQUE KEY `orderid` (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer_cart`
--
ALTER TABLE `buyer_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register_buyer`
--
ALTER TABLE `register_buyer`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `register_seller`
--
ALTER TABLE `register_seller`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register_user`
--
ALTER TABLE `register_user`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
