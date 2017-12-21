-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 21, 2017 at 06:06 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ts_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `store_users`
--

CREATE TABLE `store_users` (
  `count` int(11) NOT NULL,
  `id` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `delete_at` datetime DEFAULT NULL,
  `surname` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `more` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `store_users`
--

INSERT INTO `store_users` (`count`, `id`, `created_at`, `update_at`, `delete_at`, `surname`, `name`, `birth_date`, `picture`, `more`, `position`, `gender`) VALUES
(49, '5a3bd56c8f105', '2017-12-21 15:38:20', '2017-12-21 16:30:25', NULL, 'Strolyss', 'Tomas', '2017-12-01', 'uploads/fullsizeoutput_d2.jpeg', 'Geras', 'Direktorius', 'male'),
(55, '5a3be7c3a1bfd', '2017-12-21 16:56:35', '2017-12-21 16:58:24', NULL, 'Skirkaitė', 'Neringa', '1989-06-15', 'uploads/fullsizeoutput_a4.jpeg', 'Graži', 'Vedeja', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `store_users`
--
ALTER TABLE `store_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `count` (`count`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `count_UNIQUE` (`count`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `store_users`
--
ALTER TABLE `store_users`
  MODIFY `count` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
