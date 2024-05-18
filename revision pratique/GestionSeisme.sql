-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 18 mars 2024 à 10:01
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bd_seisme`
--

-- --------------------------------------------------------

--
-- Structure de la table `seisme`
--

CREATE TABLE `seisme` (
  `CodeSta` varchar(5) NOT NULL,
  `NumReg` int(11) NOT NULL,
  `DateSeisme` datetime NOT NULL,
  `Latitude` decimal(5,2) DEFAULT NULL,
  `Longitude` decimal(5,2) DEFAULT NULL,
  `Magnitude` decimal(3,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `seisme`
--

INSERT INTO `seisme` (`CodeSta`, `NumReg`, `DateSeisme`, `Latitude`, `Longitude`, `Magnitude`) VALUES
('HANT', 2, '2023-10-24 23:40:00', 23.52, 32.55, 3.9),
('HANT', 2, '2023-11-19 09:55:00', 37.85, 52.36, 3.1),
('HANT', 2, '2024-02-03 07:23:00', 36.89, 54.23, 3.7),
('SDBS', 4, '2023-07-28 09:53:00', 43.52, 32.99, 3.1),
('SDBS', 4, '2024-01-09 23:53:00', 43.24, 32.88, 3.4),
('TROT', 1, '2022-02-18 09:37:00', 36.72, 11.00, 3.7),
('TROT', 1, '2022-05-13 19:30:00', 35.85, 11.05, 3.2),
('ZAGN', 3, '2023-05-08 07:22:00', 57.36, 32.99, 3.2);

-- --------------------------------------------------------

--
-- Structure de la table `station`
--

CREATE TABLE `station` (
  `CodeSta` varchar(5) NOT NULL,
  `NomSta` varchar(30) DEFAULT NULL,
  `CordNord` decimal(9,5) DEFAULT NULL,
  `CordEst` decimal(9,5) DEFAULT NULL,
  `Altitude` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `station`
--

INSERT INTO `station` (`CodeSta`, `NomSta`, `CordNord`, `CordEst`, `Altitude`) VALUES
('HANT', 'EL HANIA', 35.84290, 10.37540, 143),
('SDBS', 'SIDI BOUSAID', 36.87290, 10.34760, 135),
('TROT', 'TROZZA', 35.55980, 9.59430, 969),
('ZAGN', 'ZAGHOUAN', 36.37360, 10.10990, 732);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `seisme`
--
ALTER TABLE `seisme`
  ADD PRIMARY KEY (`CodeSta`,`NumReg`,`DateSeisme`);

--
-- Index pour la table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`CodeSta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
