-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 03:19 PM
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
-- Table structure for table `dyestuffs`
--

CREATE TABLE `dyestuffs` (
  `id` int(10) UNSIGNED NOT NULL,
  `dyestuff_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Active','Deactive') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dyestuffs`
--

INSERT INTO `dyestuffs` (`id`, `dyestuff_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ANTELOP RED', 'Active', '2022-05-21 03:15:44', '2022-05-21 03:15:44'),
(2, 'ESTREMOZ PINK', 'Active', '2022-05-21 03:15:44', '2022-05-21 03:15:44'),
(3, 'FUJI BROWN', 'Active', '2022-05-21 03:15:44', '2022-05-21 03:15:44'),
(4, 'Gobi Brown', 'Active', '2022-05-21 03:15:44', '2022-05-21 03:15:44'),
(5, 'Gran Sasso', 'Active', '2022-05-21 03:15:44', '2022-05-21 03:15:44'),
(6, 'Grey Highlands', 'Active', '2022-05-21 03:15:44', '2022-05-21 03:15:44'),
(7, 'Green Kaimu', 'Active', '2022-05-21 03:15:44', '2022-05-21 03:15:44'),
(8, 'Black Merzouga', 'Active', '2022-05-21 03:15:44', '2022-05-21 03:15:44'),
(9, 'Orange Santa', 'Active', '2022-05-21 03:15:44', '2022-05-21 03:15:44'),
(10, 'Monica Yellow', 'Active', '2022-05-21 03:15:45', '2022-05-21 03:15:45'),
(11, 'Valganna Green', 'Active', '2022-05-21 03:15:45', '2022-05-21 03:17:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dyestuffs`
--
ALTER TABLE `dyestuffs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dyestuffs`
--
ALTER TABLE `dyestuffs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
