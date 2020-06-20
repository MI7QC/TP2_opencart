-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 20 juin 2020 à 00:23
-- Version du serveur :  10.3.23-MariaDB-log-cll-lve
-- Version de PHP : 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sachicxu_ocar302`
--

-- --------------------------------------------------------

--
-- Structure de la table `oc7p_visited`
--

CREATE TABLE `oc7p_visited` (
  `visited_id` int(11) NOT NULL,
  `url` varchar(150) DEFAULT NULL,
  `title` varchar(35) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ip_address` varchar(15) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `oc7p_visited`
--

INSERT INTO `oc7p_visited` (`visited_id`, `url`, `title`, `date`, `ip_address`, `user_id`) VALUES
(115, '/opencart-tp2/', 'Your Store', '2020-06-19 18:02:57', '107.159.30.113', 0),
(116, '/opencart-tp2/', 'Your Store', '2020-06-20 04:17:05', '107.159.30.113', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `oc7p_visited`
--
ALTER TABLE `oc7p_visited`
  ADD PRIMARY KEY (`visited_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `oc7p_visited`
--
ALTER TABLE `oc7p_visited`
  MODIFY `visited_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
