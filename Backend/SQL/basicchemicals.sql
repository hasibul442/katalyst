-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 07:00 PM
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
-- Table structure for table `basicchemicals`
--

CREATE TABLE `basicchemicals` (
  `id` int(10) UNSIGNED NOT NULL,
  `chemical_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chemical_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Active','Deactive') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basicchemicals`
--

INSERT INTO `basicchemicals` (`id`, `chemical_name`, `chemical_image`, `short_description`, `description`, `application`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Soda Ash Light (Double Ring)', '1653402778.jpg', 'We supply the goods from one of the major sole distributors of Double Ring. Double Ring brand Soda ash light 99%,Sodium carbonate, Soda ash, Inorganic Salt', '<ol><li>We supply the goods from one of the major sole distributors of Double Ring</li><li>No Chance to deviate Product Quality</li><li>Always offer Cost Effective Price</li><li>Shipment will be as per Commitment</li></ol>', 'Textile and Detergent Industry', 'Active', '2022-05-24 08:32:58', '2022-05-24 08:32:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basicchemicals`
--
ALTER TABLE `basicchemicals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basicchemicals`
--
ALTER TABLE `basicchemicals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
