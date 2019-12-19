-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 05, 2019 at 11:00 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agencev`
--

-- --------------------------------------------------------

--
-- Table structure for table `circuit`
--

DROP TABLE IF EXISTS `circuit`;
CREATE TABLE IF NOT EXISTS `circuit` (
  `NumC` char(5) NOT NULL,
  `themeC` char(20) DEFAULT NULL,
  `descC` varchar(50) DEFAULT NULL,
  `dureeC` char(10) DEFAULT NULL,
  `moyen_transport` char(10) DEFAULT NULL,
  PRIMARY KEY (`NumC`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `circuit`
--

INSERT INTO `circuit` (`NumC`, `themeC`, `descC`, `dureeC`, `moyen_transport`) VALUES
('1', 'Mer', 'excursion en bateau en méditerranée', '5 Heures', 'Bateau'),
('2', 'Montagne', 'excursion dans les montagnes de nord-ouest', '4 Heures', 'AutoBus'),
('3', 'Sahara', 'excursion dans le Sahara de Sud', '3 Heures', 'Buggy/Jeep');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `cin` char(8) NOT NULL,
  `nom` char(20) DEFAULT NULL,
  `prenom` char(20) DEFAULT NULL,
  `etat` char(20) DEFAULT NULL,
  `ville` char(20) DEFAULT NULL,
  `codeP` char(8) DEFAULT NULL,
  `tel` char(8) DEFAULT NULL,
  `sexe` char(10) DEFAULT NULL,
  PRIMARY KEY (`cin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`cin`, `nom`, `prenom`, `etat`, `ville`, `codeP`, `tel`, `sexe`) VALUES
('11656529', 'Aymen', 'Bellakhder', 'Tunis', 'Manouba', '2045', '20183875', 'Homme'),
('11111111', 'Yassine', 'Boukharrouba', 'tunis', 'Ariana', '5682', '12345678', 'Homme');

-- --------------------------------------------------------

--
-- Table structure for table `personne`
--

DROP TABLE IF EXISTS `personne`;
CREATE TABLE IF NOT EXISTS `personne` (
  `personne_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` char(20) DEFAULT NULL,
  `prenom` char(20) DEFAULT NULL,
  `age` char(3) DEFAULT NULL,
  `cin` char(8) DEFAULT NULL,
  `dateDep` char(10) DEFAULT NULL,
  `numC` char(5) DEFAULT NULL,
  PRIMARY KEY (`personne_id`),
  KEY `cin` (`cin`),
  KEY `numC` (`numC`),
  KEY `dateDep` (`dateDep`)
) ENGINE=MyISAM AUTO_INCREMENT=131 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reserver`
--

DROP TABLE IF EXISTS `reserver`;
CREATE TABLE IF NOT EXISTS `reserver` (
  `cin` char(8) NOT NULL,
  `NumC` char(5) DEFAULT NULL,
  `dateDep` char(10) NOT NULL,
  `heureDep` char(10) DEFAULT NULL,
  `nbrePerso` int(11) DEFAULT NULL,
  PRIMARY KEY (`cin`,`dateDep`),
  KEY `fkCircuit` (`NumC`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
