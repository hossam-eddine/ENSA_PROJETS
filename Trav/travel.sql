-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  jeu. 29 oct. 2020 à 12:39
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
-- Base de données :  `travel`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`username`, `pass`) VALUES
('Admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `username` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`username`, `fname`, `lname`, `email`, `pass`, `tel`) VALUES
('farah', 'farah', 'abou', 'll@dd.cc', '1234', 1234566),
('med', 'moha', 'med', 'mohamed@gmail.com', '1234', 1234566),
('hsmbest', 'hoosam', 'eddine', 'hamid@bb', '1212', 658695869);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` longtext,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `message`) VALUES
(1, 'farah', 'farah@gmail.com', 'kfekgelrre'),
(2, 'med', 'jj@ff.cc', 'lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum '),
(3, 'hossam', 'hsmbest@gmail.com', 'bonjour blanlabala');

-- --------------------------------------------------------

--
-- Structure de la table `hotels`
--

DROP TABLE IF EXISTS `hotels`;
CREATE TABLE IF NOT EXISTS `hotels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_h` varchar(255) DEFAULT NULL,
  `room` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `hotels`
--

INSERT INTO `hotels` (`id`, `nom_h`, `room`) VALUES
(10, 'nejma', 107),
(11, 'hsmbest', 25);

-- --------------------------------------------------------

--
-- Structure de la table `offres`
--

DROP TABLE IF EXISTS `offres`;
CREATE TABLE IF NOT EXISTS `offres` (
  `id_o` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `description` longtext,
  `photo` varchar(255) DEFAULT NULL,
  `transport` varchar(255) DEFAULT NULL,
  `prix` double DEFAULT NULL,
  `depart` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `hotel` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_o`),
  KEY `hotel` (`hotel`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `offres`
--

INSERT INTO `offres` (`id_o`, `nom`, `description`, `photo`, `transport`, `prix`, `depart`, `destination`, `date_debut`, `date_fin`, `hotel`) VALUES
(28, 'AtlasMogador  Essaouira', 'lorem ipsum lorem ipsum lorem ipsum lorem ipsum ', '4335.jpg', 'BUS', 12314, 'safi', 'Essaouira', '2020-08-31', '2020-09-06', 10),
(29, 'tanger', 'ress res res res ', '2501.png', 'avion', 2000, 'RABAT', 'Tanger', '2020-08-28', '2020-09-03', 10);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id_r` int(11) NOT NULL AUTO_INCREMENT,
  `hotel_id` int(11) DEFAULT NULL,
  `offre_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `persons` int(11) DEFAULT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_r`,`offre_id`,`email`),
  KEY `hotel_id` (`hotel_id`),
  KEY `offre_id` (`offre_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_r`, `hotel_id`, `offre_id`, `email`, `persons`, `f_name`, `l_name`, `tel`) VALUES
(15, 10, 28, 'mm@ff.cc', 2, 'med', 'cde', 1234566),
(14, 10, 29, 'hh@vv.cc', 1, 'med', 'cde', 1234566),
(13, 10, 29, 'kk@vv.cc', 1, 'med', 'cde', 1232),
(12, 10, 29, 'sl@ll.cc', 2, 'sl', 'ez', 111111111),
(11, 10, 28, 'med@ll.cc', 2, 'med', 'bel', 66666666),
(16, 10, 28, 'clinix.me@gmail.com', 2, 'hossam', 'eddine', 6345678),
(17, 10, 28, 'salam@aa', 3, 'farah', 'abou', 6549865);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
