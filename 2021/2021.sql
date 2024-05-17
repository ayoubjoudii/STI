-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2024 at 04:23 PM
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
-- Database: `2021`
--

-- --------------------------------------------------------

--
-- Table structure for table `mesure`
--

CREATE TABLE `mesure` (
  `idstation` int(11) NOT NULL,
  `annee` int(11) NOT NULL,
  `saison` varchar(9) NOT NULL,
  `temperature` decimal(5,2) DEFAULT NULL,
  `pluie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mesure`
--

INSERT INTO `mesure` (`idstation`, `annee`, `saison`, `temperature`, `pluie`) VALUES
(60715, 2018, 'Ete', 30.60, 24),
(60715, 2018, 'Hiver', 13.50, 150),
(60715, 2019, 'Printemps', 25.60, 80),
(60731, 2018, 'Ete', 33.60, 10),
(60731, 2018, 'Hiver', 17.60, 100),
(60731, 2019, 'Automne', 30.00, 11),
(60731, 2019, 'Ete', -4.00, 12),
(60780, 2019, 'Ete', 42.30, 0),
(60780, 2019, 'Hiver', 16.60, 10);

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `idstation` int(11) NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `ville` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`idstation`, `nom`, `ville`) VALUES
(60715, 'Carthage', 'Tunis'),
(60731, 'Enfidha-Aeroport', 'Sousse'),
(60780, 'El-borma', 'Tataouine');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mesure`
--
ALTER TABLE `mesure`
  ADD PRIMARY KEY (`idstation`,`annee`,`saison`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`idstation`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mesure`
--
ALTER TABLE `mesure`
  ADD CONSTRAINT `mesure_ibfk_1` FOREIGN KEY (`idstation`) REFERENCES `station` (`idstation`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
