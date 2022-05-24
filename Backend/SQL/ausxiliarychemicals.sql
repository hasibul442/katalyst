-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 03:18 PM
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
-- Table structure for table `ausxiliarychemicals`
--

CREATE TABLE `ausxiliarychemicals` (
  `id` int(10) UNSIGNED NOT NULL,
  `chemical_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Active','Deactive') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ausxiliarychemicals`
--

INSERT INTO `ausxiliarychemicals` (`id`, `chemical_name`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Catanizer/Fixing Agent/ Shade deepener', 'Active', '2022-05-21 03:06:09', '2022-05-21 03:19:52'),
(6, 'Stone Free Enzyme', 'Active', '2022-05-21 03:06:09', '2022-05-21 03:06:09'),
(7, 'Neutral Powder Enzyme', 'Active', '2022-05-21 03:06:09', '2022-05-21 03:06:09'),
(8, 'Acid Liquid Enzyme', 'Active', '2022-05-21 03:06:09', '2022-05-21 03:06:09'),
(9, 'Neutral Liquid Enzyme', 'Active', '2022-05-21 03:06:09', '2022-05-21 03:06:09'),
(10, 'Eco Bleach', 'Active', '2022-05-21 03:06:09', '2022-05-21 03:06:09'),
(11, 'Anti-Ozone Softener', 'Active', '2022-05-21 03:06:09', '2022-05-21 03:22:03'),
(12, 'Sequestering Agent', 'Active', '2022-05-21 03:06:09', '2022-05-21 03:06:09'),
(13, 'Organic PP Neutralizer', 'Active', '2022-05-21 03:06:09', '2022-05-21 03:06:09'),
(14, 'Micro Silicone', 'Active', '2022-05-21 03:06:09', '2022-05-21 03:06:09'),
(15, 'Anti-back staining with lycra protector', 'Active', '2022-05-21 03:06:59', '2022-05-21 03:06:59'),
(16, 'Detergent & Wetting Agent', 'Active', '2022-05-21 03:06:59', '2022-05-21 03:06:59'),
(17, 'Scouring Agent', 'Active', '2022-05-21 03:06:59', '2022-05-21 03:06:59'),
(18, 'Cationic Softener', 'Active', '2022-05-21 03:06:59', '2022-05-21 03:19:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ausxiliarychemicals`
--
ALTER TABLE `ausxiliarychemicals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ausxiliarychemicals`
--
ALTER TABLE `ausxiliarychemicals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
