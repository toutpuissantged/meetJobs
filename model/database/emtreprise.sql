-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 02, 2021 at 07:41 AM
-- Server version: 10.3.20-MariaDB-1
-- PHP Version: 7.3.10-1+b1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recrutement`
--

-- --------------------------------------------------------

--
-- Table structure for table `emtreprise`
--

CREATE TABLE `emtreprise` (
  `nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `adresse` varchar(50) COLLATE utf8_bin NOT NULL,
  `domaine` text COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `mpd` varchar(50) COLLATE utf8_bin NOT NULL,
  `matricule` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `emtreprise`
--

INSERT INTO `emtreprise` (`nom`, `adresse`, `domaine`, `email`, `mpd`, `matricule`) VALUES
('DCN-Technologie', 'Rue DALAGOU', 'Développement informatique', 'eliasdando@gmail.com', 'dando', 1),
('tpg&compagnie', 'agoue', 'informatique', 'ged@gmail.com', 'ged', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emtreprise`
--
ALTER TABLE `emtreprise`
  ADD PRIMARY KEY (`matricule`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emtreprise`
--
ALTER TABLE `emtreprise`
  MODIFY `matricule` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
