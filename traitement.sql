-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 04 jan. 2022 à 13:13
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `qure`
--

-- --------------------------------------------------------

--
-- Structure de la table `traitement`
--

DROP TABLE IF EXISTS `traitement`;
CREATE TABLE IF NOT EXISTS `traitement` (
  `idTraitement` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `posologie` varchar(50) NOT NULL,
  `compteurUnit` int(11) NOT NULL,
  `compteur` int(11) NOT NULL,
  `frequence` varchar(50) NOT NULL,
  `commentaire` varchar(500) NOT NULL,
  `Ordonnance` int(11) NOT NULL,
  PRIMARY KEY (`idTraitement`),
  UNIQUE KEY `Ordonnance` (`Ordonnance`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
