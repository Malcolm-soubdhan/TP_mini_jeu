-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 29 Octobre 2021 à 16:44
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `jeuxvideo`
--

-- --------------------------------------------------------

--
-- Structure de la table `personnage`
--

CREATE TABLE `personnage` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PV` int(11) NOT NULL,
  `MP` int(11) NOT NULL,
  `attack` int(11) NOT NULL,
  `defense` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `personnage`
--

INSERT INTO `personnage` (`ID`, `nom`, `classe`, `PV`, `MP`, `attack`, `defense`, `image`) VALUES
(1, 'ghhgchg', 'warrior', 100, 0, 25, 13, 'helmet.png'),
(2, 'ghhgchg', 'warrior', 100, 0, 32, 19, 'helmet.png'),
(3, 'Robert de l\'Ã©glise du bon du bien', 'mage', 100, 5, 6, 0, 'hat.png'),
(4, 'yvan', 'warrior', 100, 0, 34, 10, 'helmet.png'),
(5, 'qqsdqsd', 'mage', 100, 5, 7, 0, 'hat.png');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `personnage`
--
ALTER TABLE `personnage`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `personnage`
--
ALTER TABLE `personnage`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
