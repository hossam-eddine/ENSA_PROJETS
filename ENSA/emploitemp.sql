-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  jeu. 29 oct. 2020 à 11:39
-- Version du serveur :  8.0.18
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `emploitemp`
--

-- --------------------------------------------------------

--
-- Structure de la table `anneeu`
--

DROP TABLE IF EXISTS `anneeu`;
CREATE TABLE IF NOT EXISTS `anneeu` (
  `anneeA` varchar(10) NOT NULL,
  `semestre` varchar(2) NOT NULL,
  PRIMARY KEY (`anneeA`,`semestre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `anneeu`
--

INSERT INTO `anneeu` (`anneeA`, `semestre`) VALUES
('', ''),
('2013-2014', 'S1'),
('2013-2014', 'S2'),
('2014-2015', 'S1'),
('2016-2017', 'S2'),
('2017-2018', 'S2'),
('2018-2019', 'S3'),
('2019-2020', 'S3'),
('2019-2020', 'S4');

-- --------------------------------------------------------

--
-- Structure de la table `deps`
--

DROP TABLE IF EXISTS `deps`;
CREATE TABLE IF NOT EXISTS `deps` (
  `codeD` varchar(5) NOT NULL,
  `libD` varchar(30) NOT NULL,
  PRIMARY KEY (`codeD`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `deps`
--

INSERT INTO `deps` (`codeD`, `libD`) VALUES
('amphA', 'SI_amphia'),
('amphB', 'SI_amphiB'),
('IN', 'INDUSTREL'),
('TI', 'technologie');

-- --------------------------------------------------------

--
-- Structure de la table `enseignants`
--

DROP TABLE IF EXISTS `enseignants`;
CREATE TABLE IF NOT EXISTS `enseignants` (
  `cin` varchar(8) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `genre` varchar(8) NOT NULL,
  `grade` varchar(30) NOT NULL,
  `specialite` varchar(40) NOT NULL,
  PRIMARY KEY (`cin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `enseignants`
--

INSERT INTO `enseignants` (`cin`, `nom`, `prenom`, `email`, `genre`, `grade`, `specialite`) VALUES
('1111', 'AMMAR', 'ABDGHANI', 'abfghali@gmail.com', 'm', 'DR', 'mathematique'),
('2222', 'chakir', 'hassan', 'hassan@gmmail.com', 'm', 'PR superieur', 'français'),
('3333', 'AATRI', 'KHadija', 'khadija@gmail.com', 'f', 'DR', 'anglais'),
('4444', 'Bendaoud', 'saad', 'saad@gmail.com', 'm', 'PR superieur', 'PHY');

-- --------------------------------------------------------

--
-- Structure de la table `enseignements`
--

DROP TABLE IF EXISTS `enseignements`;
CREATE TABLE IF NOT EXISTS `enseignements` (
  `anneeA` varchar(10) NOT NULL,
  `semestre` varchar(2) NOT NULL,
  `cin` varchar(8) NOT NULL,
  `codeG` varchar(5) NOT NULL,
  `jour` varchar(10) NOT NULL,
  `seance` varchar(2) NOT NULL,
  `codeL` varchar(5) NOT NULL,
  `codeM` varchar(5) NOT NULL,
  PRIMARY KEY (`anneeA`,`semestre`,`cin`,`codeG`,`jour`,`seance`,`codeL`,`codeM`),
  KEY `anneeA` (`anneeA`),
  KEY `semestre` (`semestre`),
  KEY `cin` (`cin`),
  KEY `codeG` (`codeG`),
  KEY `seance` (`seance`),
  KEY `codeL` (`codeL`,`codeM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
CREATE TABLE IF NOT EXISTS `etudiants` (
  `cinE` varchar(8) NOT NULL,
  `nomE` varchar(15) NOT NULL,
  `prenomE` varchar(15) NOT NULL,
  `date_naiss` date NOT NULL,
  `lieu_naiss` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `genre` varchar(10) NOT NULL,
  `codeG` varchar(5) NOT NULL,
  `annee` varchar(10) DEFAULT NULL,
  `anneeA` varchar(10) NOT NULL,
  PRIMARY KEY (`cinE`,`anneeA`,`codeG`),
  KEY `codeG` (`codeG`),
  KEY `anneeA` (`anneeA`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `groupes`
--

DROP TABLE IF EXISTS `groupes`;
CREATE TABLE IF NOT EXISTS `groupes` (
  `codeG` varchar(5) NOT NULL,
  `libG` varchar(30) NOT NULL,
  `anneeA` varchar(10) NOT NULL,
  `semestre` varchar(2) NOT NULL,
  `codeD` varchar(5) NOT NULL,
  PRIMARY KEY (`codeG`),
  KEY `anneeA` (`anneeA`,`semestre`,`codeD`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `groupes`
--

INSERT INTO `groupes` (`codeG`, `libG`, `anneeA`, `semestre`, `codeD`) VALUES
('S3G1', 'S3G1', '2019-2020', 'S3', 'amphB');

-- --------------------------------------------------------

--
-- Structure de la table `horaires`
--

DROP TABLE IF EXISTS `horaires`;
CREATE TABLE IF NOT EXISTS `horaires` (
  `heureD` varchar(10) NOT NULL,
  `heureF` varchar(10) NOT NULL,
  `Enseignant` varchar(8) NOT NULL,
  `Groupe` varchar(5) NOT NULL,
  `matiere` varchar(5) NOT NULL,
  `salle` varchar(5) NOT NULL,
  `jour` varchar(15) NOT NULL,
  PRIMARY KEY (`jour`,`heureD`,`heureF`,`salle`),
  KEY `salle` (`salle`),
  KEY `Enseignant` (`Enseignant`),
  KEY `matiere` (`matiere`),
  KEY `Groupe` (`Groupe`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `horaires`
--

INSERT INTO `horaires` (`heureD`, `heureF`, `Enseignant`, `Groupe`, `matiere`, `salle`, `jour`) VALUES
('16:30', '18:30', 'Choisir.', 'S3G1', 'AN3', 'amphB', 'vendredi'),
('14:30', '16:20', 'chakir', 'S3G1', 'FR', 'amphB', 'Mardi'),
('10:40', '12:30', 'AATRI', 'S3G1', 'Ang', 'amphB', 'Lundi'),
('08:30', '10:20', 'AMMAR', 'S3G1', 'AN3', 'amphB', 'Lundi');

-- --------------------------------------------------------

--
-- Structure de la table `locaux`
--

DROP TABLE IF EXISTS `locaux`;
CREATE TABLE IF NOT EXISTS `locaux` (
  `codeL` varchar(5) NOT NULL,
  `libL` varchar(30) NOT NULL,
  `codeD` varchar(5) NOT NULL,
  PRIMARY KEY (`codeL`),
  KEY `codeD` (`codeD`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `locaux`
--

INSERT INTO `locaux` (`codeL`, `libL`, `codeD`) VALUES
('amphA', 'AmphiA', 'amphA'),
('amphB', 'AMPHIB', 'AmphB'),
('T5 ', ' Telecom Informatique5', 'TI'),
('T6 ', ' Telecom Informatique6', 'TI'),
('TI1', 'Telecom Informatique1', 'TI'),
('TI2', 'Telecom Informatique2', 'TI'),
('TI3', 'Telecom Informatique3', 'TI'),
('TI4', 'Telecom Informatique4', 'TI');

-- --------------------------------------------------------

--
-- Structure de la table `matieres`
--

DROP TABLE IF EXISTS `matieres`;
CREATE TABLE IF NOT EXISTS `matieres` (
  `codeM` varchar(50) NOT NULL,
  `libM` varchar(50) NOT NULL,
  `nature` varchar(2) NOT NULL,
  `seuil` varchar(5) NOT NULL,
  PRIMARY KEY (`codeM`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `matieres`
--

INSERT INTO `matieres` (`codeM`, `libM`, `nature`, `seuil`) VALUES
('MS', 'Mecanique de solide', 'ci', '6'),
('FR', 'francais', 'ci', '6'),
('Ang', 'Anglais', 'ci', '6'),
('AN3', 'Analyse3', 'ci', '6'),
('sport', 'Sport', 'ci', '6');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`username`, `password`) VALUES
('admin', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
