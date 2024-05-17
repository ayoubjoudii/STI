-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2024 at 12:54 AM
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
-- Database: `2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `numpermis` varchar(8) NOT NULL,
  `idmodele` int(11) NOT NULL,
  `datetest` datetime DEFAULT NULL,
  `securite` int(11) DEFAULT NULL,
  `conduite` int(11) DEFAULT NULL,
  `confort` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`numpermis`, `idmodele`, `datetest`, `securite`, `conduite`, `confort`) VALUES
('44/12345', 38, '2024-05-17 00:12:00', 0, 0, 0),
('55/12345', 15, '2024-05-17 00:10:00', 5, 5, 5),
('55/55555', 15, '2024-05-17 00:27:00', 1, 5, 3),
('55/55555', 26, '2024-05-17 00:08:00', 3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `modelvoiture`
--

CREATE TABLE `modelvoiture` (
  `idmodele` int(11) NOT NULL,
  `libelle` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `modelvoiture`
--

INSERT INTO `modelvoiture` (`idmodele`, `libelle`) VALUES
(15, 'WALLYS IRIS'),
(26, 'WALLYS 619'),
(38, 'WALLYS 216');

-- --------------------------------------------------------

--
-- Table structure for table `testeur`
--

CREATE TABLE `testeur` (
  `numpermis` varchar(8) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `genre` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testeur`
--

INSERT INTO `testeur` (`numpermis`, `nom`, `prenom`, `genre`) VALUES
('21/12345', 'Brini', 'Samir', 'M'),
('33/44444', 'Zaghdane', 'Olfa', 'F'),
('44/12345', 'WASSIM', 'ZEKRI', 'M'),
('55/12345', 'ABOUDA', 'AMINE', 'M'),
('55/55555', 'AYOUB', 'JOUDI', 'M'),
('58/98765', 'Krini', 'Fethi', 'M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`numpermis`,`idmodele`);

--
-- Indexes for table `modelvoiture`
--
ALTER TABLE `modelvoiture`
  ADD PRIMARY KEY (`idmodele`);

--
-- Indexes for table `testeur`
--
ALTER TABLE `testeur`
  ADD PRIMARY KEY (`numpermis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
