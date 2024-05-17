
--
-- Base de données: `traditionnel`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `codeCat` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL,
  PRIMARY KEY (`codeCat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`codeCat`, `libelle`) VALUES
(1, 'Robe de soirée'),
(2, 'Robe de mariée'),
(3, 'Caftan'),
(4, 'Costume'),
(5, 'Jebba');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `cin` varchar(8) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `tel` varchar(8) NOT NULL,
  PRIMARY KEY (`cin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`cin`, `nom`, `tel`) VALUES
('02222222', 'Olfa Fourati', '13131313'),
('11111111', 'Maysa Abidi', '12121212'),
('13333333', 'Sami Dridi', '14141414');

-- --------------------------------------------------------

--
-- Structure de la table `habit`
--

CREATE TABLE IF NOT EXISTS `habit` (
  `codeHab` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  `taille` char(1) NOT NULL,
  `prix` int(11) NOT NULL,
  `disponible` char(1) NOT NULL DEFAULT 'D',
  `codeCat` int(11) NOT NULL,
  PRIMARY KEY (`codeHab`),
  KEY `codeCat` (`codeCat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `habit`
--

INSERT INTO `habit` (`codeHab`, `description`, `taille`, `prix`, `disponible`, `codeCat`) VALUES
(1, 'Blouza et fouta caramel', 'X', 123, 'D', 2),
(2, 'Blouza et fouta argentees', 'M', 150, 'N', 2),
(3, 'Caftan velour', 'L', 145, 'D', 3),
(4, 'Costume kamraya beige', 'X', 222, 'N', 4),
(5, 'Costume kamraya blanc', 'S', 111, 'D', 4),
(6, 'Catfan avec broderie', 'M', 222, 'D', 3),
(7, 'Robe longue en crepe', 'M', 222, 'D', 1),
(8, 'Robe sirene en soie bleu', 'L', 300, 'D', 1);

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `dateLoc` date NOT NULL,
  `codeHab` int(11) NOT NULL,
  `cin` varchar(8) NOT NULL,
  `duree` int(11) NOT NULL,
  PRIMARY KEY (`dateLoc`,`codeHab`),
  KEY `cin` (`cin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `location`
--

INSERT INTO `location` (`dateLoc`, `codeHab`, `cin`, `duree`) VALUES
('2023-05-21', 2, '02222222', 3),
('2023-05-22', 4, '13333333', 2);
