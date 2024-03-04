-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 26 fév. 2024 à 14:39
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestioncommande`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_art` int(11) NOT NULL,
  `libelle_art` varchar(15) DEFAULT NULL,
  `prix_unitaire` varchar(10) DEFAULT NULL,
  `qtestock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_art`, `libelle_art`, `prix_unitaire`, `qtestock`) VALUES
(1, 'Article 1', '1000', 100),
(2, 'Article 2', '2500', 50),
(3, 'Article 3', '550', 200),
(4, 'Article 4', '850', 20),
(5, 'Article 5', '5500', 150);

-- --------------------------------------------------------

--
-- Structure de la table `avoir`
--

CREATE TABLE `avoir` (
  `qte_cmd` int(11) DEFAULT NULL,
  `id_cmd` int(11) NOT NULL,
  `id_art` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `avoir`
--

INSERT INTO `avoir` (`qte_cmd`, `id_cmd`, `id_art`) VALUES
(2, 1, 1),
(1, 2, 3),
(3, 3, 2);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_cmd` int(11) NOT NULL,
  `date_cmd` date DEFAULT NULL,
  `montant` varchar(100) DEFAULT NULL,
  `id_etat_cmd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_cmd`, `date_cmd`, `montant`, `id_etat_cmd`) VALUES
(1, '2024-02-23', '50000', 1),
(2, '2024-02-22', '30000', 2),
(3, '2024-02-21', '75500', 3);

-- --------------------------------------------------------

--
-- Structure de la table `etat_cmd`
--

CREATE TABLE `etat_cmd` (
  `id_etat_cmd` int(11) NOT NULL,
  `libelle_etat_cmd` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etat_cmd`
--

INSERT INTO `etat_cmd` (`id_etat_cmd`, `libelle_etat_cmd`) VALUES
(1, 'Non traitée'),
(2, 'En cours'),
(3, 'Livrée');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_art`);

--
-- Index pour la table `avoir`
--
ALTER TABLE `avoir`
  ADD KEY `id_cmd` (`id_cmd`),
  ADD KEY `id_art` (`id_art`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_cmd`),
  ADD KEY `id_etat_cmd` (`id_etat_cmd`);

--
-- Index pour la table `etat_cmd`
--
ALTER TABLE `etat_cmd`
  ADD PRIMARY KEY (`id_etat_cmd`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_art` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_cmd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `etat_cmd`
--
ALTER TABLE `etat_cmd`
  MODIFY `id_etat_cmd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avoir`
--
ALTER TABLE `avoir`
  ADD CONSTRAINT `avoir_ibfk_1` FOREIGN KEY (`id_cmd`) REFERENCES `commande` (`id_cmd`),
  ADD CONSTRAINT `avoir_ibfk_2` FOREIGN KEY (`id_art`) REFERENCES `article` (`id_art`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_etat_cmd`) REFERENCES `etat_cmd` (`id_etat_cmd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
