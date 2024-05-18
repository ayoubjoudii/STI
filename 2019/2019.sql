-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2024 at 01:47 PM
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
-- Database: `2019`
--

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `idparticipant` int(11) NOT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `mdp` varchar(6) DEFAULT NULL,
  `genre` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`idparticipant`, `mail`, `mdp`, `genre`) VALUES
(1, 'ayoub@gmail.com', 'wineB5', 'M'),
(2, 'abouda@gmail.com', 'wineB5', 'M'),
(3, 'slety@gmail.com', '1234aB', 'F'),
(4, 'ilehy@gmail.com', '4321Ab', 'F'),
(5, 'iledf@gmail.com', '4321Ab', 'M'),
(6, 'ibrhcaa@gmail.com', '4321Ab', 'M'),
(7, 'ihibaa@gmail.com', '4321Ab', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `numq` int(11) NOT NULL,
  `nums` int(11) NOT NULL,
  `contenu` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`numq`, `nums`, `contenu`) VALUES
(1, 1, 'Les information partagees sur les resaux sociaux sont fiables'),
(1, 2, 'Les jeux video contirbuent au developpement de la penseee logique'),
(2, 1, 'Lusage des resaux sociaux par les endfants doit etres sous le controle parental'),
(3, 1, 'Les reseausx sociaux deviennet une necessite pour les citoryesn');

-- --------------------------------------------------------

--
-- Table structure for table `reponse`
--

CREATE TABLE `reponse` (
  `numq` int(11) NOT NULL,
  `nums` int(11) NOT NULL,
  `idparticipant` int(11) NOT NULL,
  `rep` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reponse`
--

INSERT INTO `reponse` (`numq`, `nums`, `idparticipant`, `rep`) VALUES
(1, 1, 2, 'N'),
(1, 1, 4, 'N'),
(1, 1, 5, 'O'),
(1, 1, 6, 'O'),
(1, 1, 7, 'S'),
(2, 1, 2, 'O'),
(2, 1, 4, 'S'),
(2, 1, 5, 'S'),
(2, 1, 6, 'O'),
(2, 1, 7, 'S'),
(3, 1, 2, 'S'),
(3, 1, 4, 'N'),
(3, 1, 5, 'S'),
(3, 1, 6, 'O'),
(3, 1, 7, 'S');

-- --------------------------------------------------------

--
-- Table structure for table `sondage`
--

CREATE TABLE `sondage` (
  `nums` int(11) NOT NULL,
  `theme` varchar(50) DEFAULT NULL,
  `datedebut` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sondage`
--

INSERT INTO `sondage` (`nums`, `theme`, `datedebut`) VALUES
(1, 'Les reseaux sociaux', '2019-05-01'),
(2, 'Les jeux video', '2019-06-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`idparticipant`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`numq`,`nums`),
  ADD KEY `nums` (`nums`);

--
-- Indexes for table `reponse`
--
ALTER TABLE `reponse`
  ADD PRIMARY KEY (`numq`,`nums`,`idparticipant`),
  ADD KEY `nums` (`nums`);

--
-- Indexes for table `sondage`
--
ALTER TABLE `sondage`
  ADD PRIMARY KEY (`nums`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `participant`
--
ALTER TABLE `participant`
  MODIFY `idparticipant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sondage`
--
ALTER TABLE `sondage`
  MODIFY `nums` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`nums`) REFERENCES `sondage` (`nums`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reponse`
--
ALTER TABLE `reponse`
  ADD CONSTRAINT `reponse_ibfk_1` FOREIGN KEY (`numq`) REFERENCES `question` (`numq`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reponse_ibfk_2` FOREIGN KEY (`nums`) REFERENCES `sondage` (`nums`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
