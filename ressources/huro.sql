-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 12 déc. 2024 à 01:45
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `huro`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nom_client` varchar(255) DEFAULT NULL,
  `numero_client` varchar(15) NOT NULL,
  `adresse_client` text DEFAULT NULL,
  `id_entreprise` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `id_entreprise` int(11) NOT NULL,
  `nom_entreprise` varchar(255) DEFAULT NULL,
  `adresse_entreprise` text DEFAULT NULL,
  `telephone_utilisateur` varchar(15) DEFAULT NULL,
  `logo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`id_entreprise`, `nom_entreprise`, `adresse_entreprise`, `telephone_utilisateur`, `logo`) VALUES
(1, '', 'Ultimate', '697960393', '');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `nom_produit` varchar(255) DEFAULT NULL,
  `nature` varchar(250) DEFAULT 'article',
  `unite` varchar(250) DEFAULT 'piece',
  `prix_standard` int(11) DEFAULT NULL,
  `prix_minimum` int(11) DEFAULT 0,
  `quantite_disponible` int(11) DEFAULT 0,
  `id_entreprise` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `nom_produit`, `nature`, `unite`, `prix_standard`, `prix_minimum`, `quantite_disponible`, `id_entreprise`) VALUES
(1, 'Castel', NULL, NULL, 650, 600, 0, 1),
(2, 'Format A4', NULL, 'rame', 25, 20, 5, 1),
(3, 'Toyota', NULL, 'piece', 1500000, 1400000, 2, 1),
(4, 'Service marketing', NULL, 'service', 45000, 35000, -1, 1),
(5, 'Infographie', NULL, 'service', 5000, 3500, -1, 1),
(6, 'Abonnement Canal', NULL, 'mensuel', 10000, 5000, -1, 1),
(7, 'Scanner', NULL, 'service', 500, 450, -1, 1),
(8, 'Impression', NULL, 'service', 25, 20, -1, 1),
(9, 'Reliure', NULL, 'service', 500, 450, -1, 1),
(10, 'Saisie', NULL, 'service', 300, 150, -1, 1),
(11, 'produit', 'produit', 'carton', 1500, 1000, 15, 1);

-- --------------------------------------------------------

--
-- Structure de la table `stock`
--

CREATE TABLE `stock` (
  `id_stock` varchar(250) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `quantite` int(11) DEFAULT NULL,
  `date_enregistrement` varchar(250) NOT NULL,
  `status_` int(2) DEFAULT 0,
  `id_entreprise` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `trace`
--

CREATE TABLE `trace` (
  `id_trace` int(11) NOT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  `date_action` datetime DEFAULT NULL,
  `libelle_action` text DEFAULT NULL,
  `id_entreprise` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `mot_de_passe` varchar(255) DEFAULT NULL,
  `niveau_acces` int(11) DEFAULT 1,
  `status_` enum('revoque','nonrevoque') DEFAULT 'nonrevoque',
  `id_entreprise` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `email`, `telephone`, `mot_de_passe`, `niveau_acces`, `status_`, `id_entreprise`) VALUES
(2, 'devcarle@gmail.com', NULL, '696970539', '25f9e794323b453885f5181f1b624d0b', 4, 'nonrevoque', 1);

-- --------------------------------------------------------

--
-- Structure de la table `vente`
--

CREATE TABLE `vente` (
  `id_vente` varchar(250) NOT NULL,
  `id_utilisateur` varchar(15) DEFAULT NULL,
  `id_client` varchar(15) DEFAULT NULL,
  `id_produit` int(11) NOT NULL,
  `qte` int(11) NOT NULL,
  `prix_vente` varchar(250) DEFAULT NULL,
  `date_vente` date DEFAULT NULL,
  `status_vente` varchar(250) NOT NULL,
  `id_entreprise` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`numero_client`),
  ADD KEY `client_entreprise` (`id_entreprise`),
  ADD KEY `id_client` (`id_client`) USING BTREE;

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`id_entreprise`),
  ADD KEY `telephone_utilisateur` (`telephone_utilisateur`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`),
  ADD KEY `id_entreprise` (`id_entreprise`);

--
-- Index pour la table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id_stock`,`id_produit`,`date_enregistrement`) USING BTREE,
  ADD KEY `id_produit` (`id_produit`),
  ADD KEY `id_entreprise` (`id_entreprise`);

--
-- Index pour la table `trace`
--
ALTER TABLE `trace`
  ADD PRIMARY KEY (`id_trace`),
  ADD KEY `id_utilisateur` (`id_utilisateur`),
  ADD KEY `id_entreprise` (`id_entreprise`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `telephone` (`telephone`),
  ADD KEY `id_entreprise` (`id_entreprise`);

--
-- Index pour la table `vente`
--
ALTER TABLE `vente`
  ADD PRIMARY KEY (`id_vente`,`id_produit`,`qte`,`id_entreprise`,`status_vente`) USING BTREE,
  ADD KEY `id_produit` (`id_produit`),
  ADD KEY `id_entreprise` (`id_entreprise`),
  ADD KEY `id_utilisateur` (`id_utilisateur`),
  ADD KEY `id_client` (`id_client`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `id_entreprise` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `trace`
--
ALTER TABLE `trace`
  MODIFY `id_trace` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_entreprise` FOREIGN KEY (`id_entreprise`) REFERENCES `entreprise` (`id_entreprise`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`id_entreprise`) REFERENCES `entreprise` (`id_entreprise`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stock_ibfk_2` FOREIGN KEY (`id_entreprise`) REFERENCES `entreprise` (`id_entreprise`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `trace`
--
ALTER TABLE `trace`
  ADD CONSTRAINT `trace_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trace_ibfk_2` FOREIGN KEY (`id_entreprise`) REFERENCES `entreprise` (`id_entreprise`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `vente`
--
ALTER TABLE `vente`
  ADD CONSTRAINT `vente_ibfk_3` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`) ON UPDATE CASCADE,
  ADD CONSTRAINT `vente_ibfk_4` FOREIGN KEY (`id_entreprise`) REFERENCES `entreprise` (`id_entreprise`) ON UPDATE CASCADE,
  ADD CONSTRAINT `vente_ibfk_5` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`telephone`) ON UPDATE CASCADE,
  ADD CONSTRAINT `vente_ibfk_6` FOREIGN KEY (`id_client`) REFERENCES `client` (`numero_client`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
