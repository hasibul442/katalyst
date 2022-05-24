-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 07:16 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `katalyst`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Active','Deactive') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Banner 1', 'Deactive', '1653122671.jpg', '2022-05-20 20:44:31', '2022-05-24 11:04:48'),
(2, 'Challenge to minimize the CO2 emission', 'Active', '1653122691.jpg', '2022-05-20 20:44:51', '2022-05-20 20:44:51'),
(3, 'In every wood in every spring there is a different green', 'Active', '1653122705.jpg', '2022-05-20 20:45:05', '2022-05-20 20:45:05'),
(4, 'Challenge to minimize the impact of chemicals', 'Active', '1653122720.png', '2022-05-20 20:45:20', '2022-05-20 20:45:20'),
(5, 'Safe planet but being fashionable', 'Active', '1653122740.jpg', '2022-05-20 20:45:40', '2022-05-20 20:45:40'),
(6, 'Eco-friendly dying can reduce water pollution', 'Active', '1653122753.jpg', '2022-05-20 20:45:53', '2022-05-20 20:45:53'),
(7, 'Challenge to minimize the use of water', 'Active', '1653122768.jpg', '2022-05-20 20:46:08', '2022-05-20 20:46:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
