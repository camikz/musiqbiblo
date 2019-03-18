-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 08 Décembre 2016 à 13:17
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
-- Structure de la table `abonnes`
--

CREATE TABLE `abonnes` (
  `id` int(10) NOT NULL,
  `civilite` varchar(3) NOT NULL,
  `prenom` varchar(15) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `login` varchar(15) NOT NULL,
  `pwd` varchar(200) NOT NULL,
  `mail` varchar(29) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `abonnes`
--

INSERT INTO `abonnes` (`id`, `civilite`, `prenom`, `nom`, `login`, `pwd`, `mail`) VALUES
(1, 'H', 'camille', 'kendem', 'tttt', '202cb962ac59075b964b07152d234b70', 'camamam@gmail'),
(2, 'F', 'Mélanie', 'Marshall', 'Marshélie', 'bd1b098d8cd6813d532c749b3f44c318', 'Marshelie@gmail.com'),
(3, 'H', 'yacine', 'ngom', 'yass', '9990775155c3518a0d7917f7780b24aa', 'ttfghhuh@gmail'),
(4, 'H', 'thomas', 'jong', 'thom', '202cb962ac59075b964b07152d234b70', 'thom@gmail.com'),
(5, 'H', 'camikz', 'Ken', 'Leking', 'ab4f63f9ac65152575886860dde480a1', 'cams@gmail.com');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `abonnes`
--
ALTER TABLE `abonnes`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `abonnes`
--
ALTER TABLE `abonnes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
