-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 30 déc. 2020 à 08:55
-- Version du serveur :  10.3.20-MariaDB-1
-- Version de PHP : 7.3.10-1+b1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mydata`
--

-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `contrat` text NOT NULL,
  `post` text NOT NULL,
  `localisation` text NOT NULL,
  `description` text NOT NULL,
  `temps` date NOT NULL DEFAULT current_timestamp(),
  `niveau` text NOT NULL,
  `salaireMin` text NOT NULL,
  `salaireMax` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `jobs`
--

INSERT INTO `jobs` (`id`, `contrat`, `post`, `localisation`, `description`, `temps`, `niveau`, `salaireMin`, `salaireMax`) VALUES
(1, 'Stage / Apprentissage / Alternance', 'Stage en marketing Commercial - Logex', 'Bè Klikamé, Atikoumé', 'Nous recherchons un (e) Chargé (e) de Clientèle pour mettre en place une stratégie permettant de con...', '2020-12-14', 'BAC+2', '35.000', '50.000'),
(2, '\r\nCDD / Intérim / Mission', 'Psychologue Clinicien', 'Atakpamé - Lomé - Sokodé - International', 'Sous la direction du Directeur Exécutif et la responsabilité fonctionnelle de la direction des progr...', '2020-12-15', 'BAC+4', '150.000', '200.000');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
