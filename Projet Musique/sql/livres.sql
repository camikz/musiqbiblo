-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 08 Décembre 2016 à 13:08
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mydb`
--

-- --------------------------------------------------------

--
-- Structure de la table `livres`
--

CREATE TABLE `livres` (
  `livre_isbn` double NOT NULL,
  `livre_auteur` varchar(45) DEFAULT NULL,
  `livre_genre` varchar(45) DEFAULT NULL,
  `livre_titre` varchar(100) DEFAULT NULL,
  `livre_editeur` varchar(70) DEFAULT NULL,
  `livre_dispo` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `livres`
--

INSERT INTO `livres` (`livre_isbn`, `livre_auteur`, `livre_genre`, `livre_titre`, `livre_editeur`, `livre_dispo`) VALUES
(9780140622911, 'Victor hugo', 'Roman', 'Les misérables', 'Penguin Classics', 1),
(9780330258647, 'Douglas Adams', 'Science-fiction', 'The Hitch Hikers Guide To The Galaxy', 'Pan', 1),
(9781501137969, 'Donald Trump', 'Politique', 'Crippled America : How to make America great again', 'Threshold editions', 1),
(9782709642521, 'E.L James', 'Erotique', '50 shades of grey', 'Vintages books', 0),
(9782736703776, 'Jules Verne', 'Aventure', 'Voyage au centre de la terre', 'Ronde Du Tournesol', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `livres`
--
ALTER TABLE `livres`
  ADD PRIMARY KEY (`livre_isbn`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
