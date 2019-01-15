-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2019 at 08:04 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbusers`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(15) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` double NOT NULL,
  `picture` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `name`, `price`, `picture`) VALUES
(2, 'The Witcher Wild Hunt', 29.99, 'witcher.jpg'),
(4, 'FIFA 18 GOLD EDITION', 59.99, 'fifa.jpg'),
(5, 'Watch Dogs Gold', 14.99, 'watch.jpg'),
(6, 'Windows 10 Pro', 179.99, 'win10pro.png'),
(7, 'Headphones Pioneer On-Ear', 109.99, 'pioneer1.jpg'),
(8, 'Windows 10 Home', 89.99, 'win10home.png'),
(9, 'Rise of the Tomb Raider', 39.99, 'tomb_raider.png'),
(11, 'Microsoft Office 365', 49.99, 'office_365.png'),
(12, 'Headphones Pioneer In-Ear', 17.99, 'pioneer.jpg'),
(13, 'Soundsystem 5.1 Serioux', 199.99, 'serioux.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `user_id`, `last_activity`) VALUES
(1, 1, '2019-01-15 19:05:48'),
(2, 1, '2019-01-15 19:05:48'),
(3, 1, '2019-01-15 19:05:48'),
(4, 1, '2019-01-15 19:05:48'),
(5, 2, '2019-01-15 19:56:49'),
(6, 1, '2019-01-15 19:05:48'),
(7, 2, '2019-01-15 19:56:49'),
(8, 1, '2019-01-15 19:05:48'),
(9, 3, '2019-01-09 16:52:13'),
(10, 1, '2019-01-15 19:05:48'),
(11, 1, '2019-01-15 19:05:48'),
(12, 1, '2019-01-15 19:05:48'),
(13, 3, '2019-01-09 16:52:13'),
(14, 2, '2019-01-15 19:56:49'),
(15, 1, '2019-01-15 19:05:48'),
(16, 1, '2019-01-15 19:05:48'),
(17, 1, '2019-01-15 19:05:48'),
(18, 1, '2019-01-15 19:05:48'),
(19, 1, '2019-01-15 19:05:48'),
(20, 1, '2019-01-15 19:05:48'),
(21, 1, '2019-01-15 19:05:48'),
(22, 1, '2019-01-15 19:05:48'),
(23, 2, '2019-01-15 19:56:49'),
(24, 2, '2019-01-15 19:56:49'),
(25, 1, '2019-01-15 19:05:48');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total_price` double NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `total_price`, `created`) VALUES
(1000, 2, 17.99, '2019-01-15 19:32:52'),
(1001, 2, 399.98, '2019-01-15 19:33:55');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(6, 1000, 12, 1),
(7, 1001, 13, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `token` varchar(20) NOT NULL,
  `adress` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `postalcode` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `token`, `adress`, `city`, `postalcode`) VALUES
(1, 'Maftei Ioan', 'maftei.ioan98@gmail.com', '2793f85f02b1109def8b6928874e1dfb80cc96b351bec864ea68eac8eb294a05', 'yd&*4lnbm$', 'str. pestaloz.41', 'reutlingen', '666777'),
(2, 'Lydia Staneck', 'lydia.stanek2223@gmail.com', '2793f85f02b1109def8b6928874e1dfb80cc96b351bec864ea68eac8eb294a05', 'qhzra@m4y&', 'Tudor Vladimirescu', 'Iasi', '707337'),
(3, 'abcd', 'abcd@gmail.com', '2793f85f02b1109def8b6928874e1dfb80cc96b351bec864ea68eac8eb294a05', 'v(lbo4u8p3', 'Tudor Vladimirescu', 'Iasi', '707337');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login_details`
--
ALTER TABLE `login_details`
  ADD CONSTRAINT `login_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
