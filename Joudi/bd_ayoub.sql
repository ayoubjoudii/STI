-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2024 at 12:40 AM
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
-- Database: `bd_ayoub`
--

-- --------------------------------------------------------

--
-- Table structure for table `chambre`
--

CREATE TABLE `chambre` (
  `idch` varchar(10) NOT NULL,
  `optionch` varchar(10) DEFAULT NULL,
  `tarif` decimal(6,3) DEFAULT NULL,
  `disponible` enum('D','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chambre`
--

INSERT INTO `chambre` (`idch`, `optionch`, `tarif`, `disponible`) VALUES
('10ETAGE2', 'Vue sur la', 190.000, 'N'),
('30ETAGE3', 'vue sur le', 100.000, 'D'),
('62ETAGE4', 'vue sur la', 150.000, 'D');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `tel` varchar(8) NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `genre` enum('H','F') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`tel`, `nom`, `prenom`, `genre`) VALUES
('22600600', 'kefi', 'radhia', 'F'),
('40400400', 'bahri', ' ali', 'H'),
('98500500', 'Abidi ', 'Anis', 'H');

-- --------------------------------------------------------

--
-- Table structure for table `reserver`
--

CREATE TABLE `reserver` (
  `tel` varchar(8) NOT NULL,
  `idch` varchar(10) NOT NULL,
  `arrivee` date NOT NULL,
  `depart` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reserver`
--

INSERT INTO `reserver` (`tel`, `idch`, `arrivee`, `depart`) VALUES
('22600600', '62ETAGE4', '2022-07-10', '2022-07-15'),
('40400400', '10ETAGE2', '2023-01-12', '2023-01-20'),
('98500500', '10ETAGE2', '2023-03-13', '2023-03-17'),
('98500500', '30ETAGE3', '2022-02-12', '2022-02-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`idch`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`tel`);

--
-- Indexes for table `reserver`
--
ALTER TABLE `reserver`
  ADD PRIMARY KEY (`tel`,`idch`,`arrivee`),
  ADD KEY `idch` (`idch`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reserver`
--
ALTER TABLE `reserver`
  ADD CONSTRAINT `reserver_ibfk_1` FOREIGN KEY (`tel`) REFERENCES `client` (`tel`),
  ADD CONSTRAINT `reserver_ibfk_2` FOREIGN KEY (`idch`) REFERENCES `chambre` (`idch`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
