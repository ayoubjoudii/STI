-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2024 at 02:22 PM
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
-- Database: `ehaouia`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobile_id`
--

CREATE TABLE `mobile_id` (
  `id_mob` int(11) NOT NULL,
  `cin` text NOT NULL,
  `gsm` text NOT NULL,
  `email` text NOT NULL,
  `mobile_id` text NOT NULL,
  `date_insc` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mobile_id`
--

INSERT INTO `mobile_id` (`id_mob`, `cin`, `gsm`, `email`, `mobile_id`, `date_insc`) VALUES
(1, '05859565', '51111111', 'salihmalih@gmail.com', '519565IH', '2024-01-10'),
(2, '05856665', '52333444', 'maliha@gmail.com', '519565IH', '2024-01-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobile_id`
--
ALTER TABLE `mobile_id`
  ADD PRIMARY KEY (`id_mob`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
