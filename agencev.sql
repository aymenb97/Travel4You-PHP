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

DROP TABLE IF EXISTS circuit;
CREATE TABLE IF NOT EXISTS circuit (
  id int NOT NULL AUTO_INCREMENT,
  theme_circuit char(20) DEFAULT NULL,
  description_circuit TEXT DEFAULT NULL,
  url_image varchar(50),
  duree_circuit char(10) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `circuit`
--



-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS client;
CREATE TABLE IF NOT EXISTS client (
  id int(10) NOT NULL AUTO_INCREMENT,
  email varchar(20) NOT NULL,
  password varchar(60) NOT NULL,
  nom varchar(10)  NOT NULL,
  prenom varchar(10) NOT  NULL,
  etat varchar(10) DEFAULT NULL,
  ville varchar(10) DEFAULT NULL,
  codeP char(8) DEFAULT NULL,
  tel char(8) DEFAULT NULL,
  sexe char(1) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



--
-- Table structure for table `personne`
--

DROP TABLE IF EXISTS personne;
CREATE TABLE IF NOT EXISTS personne (
  nom char(20) DEFAULT NULL,
  prenom char(20) DEFAULT NULL,
  age char(3) DEFAULT NULL,
  client_id char(8) NOT NULL,
  date_dep char(10) NOT  NULL,
  num_circuit char(5) NOT NULL,
  PRIMARY KEY (client_id,num_circuit,date_dep),
  FOREIGN KEY (client_id) REFERENCES client(id),
  FOREIGN KEY (num_circuit) REFERENCES circuit(id)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------


DROP TABLE IF EXISTS reservation;
CREATE TABLE IF NOT EXISTS reservation (
  client_id char(8) NOT NULL,
  circuit_id char(5) DEFAULT NULL,
  date_dep char(10) NOT NULL,
  heure_dep char(10) DEFAULT NULL,
  PRIMARY KEY (client_id,circuit_id),
  FOREIGN KEY (circuit_id) REFERENCES circuit(id),
  FOREIGN KEY (client_id) REFERENCES client(id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;
--
-- Table structure for table `personne`
--

DROP TABLE IF EXISTS admin;
CREATE TABLE IF NOT EXISTS admin (
  id int NOT NULL AUTO_INCREMENT,
  login varchar(10) DEFAULT NULL,
  password char(20) DEFAULT NULL,
  email char(20) DEFAULT NULL,
  nom varchar(10) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
