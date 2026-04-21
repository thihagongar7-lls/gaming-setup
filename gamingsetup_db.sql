-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 21, 2026 at 02:34 AM
-- Server version: 11.5.2-MariaDB
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamingsetup_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `qty` int(11) DEFAULT 1,
  `total` decimal(10,2) DEFAULT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_name`, `price`, `qty`, `total`, `customer_name`, `phone`, `status`, `created_at`) VALUES
(32, 'Gaming Headset', 120.00, 1, 120.00, 'Guest', '000000', 'pending', '2026-04-20 12:40:28'),
(33, 'Gaming Chair', 125.00, 1, 125.00, 'Guest', '000000', 'pending', '2026-04-20 12:40:35'),
(34, 'Gaming Keyboard', 55.00, 1, 55.00, 'Guest', '000000', 'pending', '2026-04-20 12:40:41'),
(35, 'Gaming Mouse', 30.00, 1, 30.00, 'Guest', '000000', 'pending', '2026-04-20 12:40:47'),
(36, 'Gaming Monitor', 125.00, 1, 125.00, 'Guest', '000000', 'pending', '2026-04-20 12:40:52');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `stock` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `description`, `stock`, `created_at`) VALUES
(16, 'Gaming Chair', 125.00, '1776687943_chair1.jpg', 'Slight ergonomic + basic style', 0, '2026-04-20 12:25:43'),
(14, 'Gaming Keyboard', 55.00, '1776687735_keyboard1.jpg', 'Clicky switches + RGB', 0, '2026-04-20 12:22:15'),
(15, 'Gaming Mouse', 30.00, '1776687771_mouse1.jpg', 'RGB + programmable buttons', 0, '2026-04-20 12:22:51'),
(12, 'Gaming Monitor', 125.00, '1776687573_monitor.jpg', '75Hz â€“ 144Hz, FHD', 0, '2026-04-20 12:19:33'),
(13, 'Gaming PC', 950.00, '1776687683_pc2.jpg', 'i5 / Ryzen 5 + RTX 3060', 0, '2026-04-20 12:21:23'),
(18, 'ThiHa', 22.00, '1776690363_1776682012_pc1.jpg', 'afdsa', 0, '2026-04-20 13:06:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('user','admin') DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'ThiHa GonGar7', 'thihagongar7@gmail.com', '$2y$10$tv4ztEaK7KpdLKL3u7K04u3nGEk04x6VKhaphazfOAzIABoVN1ZUS', 'user', '2026-04-11 06:47:48'),
(14, 'thithi', 'thiha2@gmail.com', '$2y$10$IyCRbIJgQdI9FvRf2msdAOVvn7QAjdUDufz4V.uyVWKD.cUDRD88G', 'user', '2026-04-12 13:04:29'),
(5, 'Myat Gon', 'myat22@gmail.com', '$2y$10$gTjQXySPPjr0dVmwzRL0POfbWRzaf4B3xV.0uIhQI7L.lmKYq05vK', 'user', '2026-04-12 07:08:59'),
(15, 'titi', 'tilay@gmail.com', '$2y$10$95G47CJxC4LqBoHRo7Wdj.6sBT9Uc2LdC51/pxEhye1JGZhIj9XLC', 'user', '2026-04-20 13:14:07'),
(13, 'LaLa', 'lala2@gmail.com', '$2y$10$qpxZpypushBHmru2tfBm.OeFXNFqmVpxtaPz4VDQXUkhh5Rqjl4xO', 'user', '2026-04-12 07:44:35'),
(12, 'FangGon', 'gon78@gmail.com', '$2y$10$7QUxZLv2tp78Gw/EzvdlTeYUPoBe2qN6fbCXxcB16JFTQ/hQNVMQW', 'admin', '2026-04-12 07:38:07'),
(9, 'mommom', 'mom3@gmail.com', '$2y$10$CxJACbLHHRiRqnD5aOloPuC5rZNUZfQZyPLQ.NMVtyYQV8DmboYSq', 'user', '2026-04-12 07:23:41');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
