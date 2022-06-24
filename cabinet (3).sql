-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 10 Octobre 2020 à 15:01
-- Version du serveur :  5.6.25
-- Version de PHP :  5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cabinet`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_ad` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `passe` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id_ad`, `user`, `passe`) VALUES
(3, 'katia99@gmail.com', '0cbe7ae50f7d9b54efdb2aed41dea171');

-- --------------------------------------------------------

--
-- Structure de la table `infousers`
--

CREATE TABLE IF NOT EXISTS `infousers` (
  `id_info` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(2555) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `passe` varchar(255) NOT NULL,
  `id_ad` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `infousers`
--

INSERT INTO `infousers` (`id_info`, `nom`, `prenom`, `adresse`, `email`, `image`, `telephone`, `region`, `passe`, `id_ad`) VALUES
(4, 'hacene', 'linda', 'bouira', 'lindaha@gmail.com', '7.jpg', '0745852514', 'bouira', '079d8333778e42c8a3ec333a51c0e0c8', 3);

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE IF NOT EXISTS `medecin` (
  `id_medecin` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passe` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_spe` int(11) NOT NULL,
  `id_ad` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `medecin`
--

INSERT INTO `medecin` (`id_medecin`, `nom`, `prenom`, `telephone`, `adresse`, `email`, `passe`, `image`, `id_spe`, `id_ad`) VALUES
(4, 'houcine', 'rania', '585741253', 'bouira', 'houcine@gmail.com', 'd6bd4288dbcf5d2ae2053a35389e8c56', '03.jpg', 8, 3);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id_message` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_info` int(11) NOT NULL,
  `id_medecin` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ordonnance`
--

CREATE TABLE IF NOT EXISTS `ordonnance` (
  `id_ord` int(11) NOT NULL,
  `ordonnance` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_info` int(11) NOT NULL,
  `id_medecin` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

CREATE TABLE IF NOT EXISTS `rdv` (
  `id_rdv` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `etat` enum('T','F') NOT NULL,
  `id_seance` int(11) NOT NULL,
  `id_info` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `seance`
--

CREATE TABLE IF NOT EXISTS `seance` (
  `id_seance` int(11) NOT NULL,
  `nom_seance` varchar(255) NOT NULL,
  `heur` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `nombre` int(11) NOT NULL,
  `id_medecin` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `seance`
--

INSERT INTO `seance` (`id_seance`, `nom_seance`, `heur`, `date`, `nombre`, `id_medecin`) VALUES
(35, 'seance01', '08h-09h', '2020-10-01', 10, 4),
(38, 'seance02', '09h-10h', '2020-10-01', 9, 4),
(39, 'seance03', '10h-11h', '2020-10-01', 10, 4),
(40, 'seance04', '11h-12h', '2020-10-01', 10, 4),
(41, 'seance05', '13h-14h', '2020-10-01', 10, 4),
(42, 'seance06', '14h-15h', '2020-10-01', 9, 4),
(43, 'seance07', '15h-16h', '2020-10-01', 10, 4);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `id_service` int(11) NOT NULL,
  `nom_service` varchar(255) NOT NULL,
  `descriptions` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_ad` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `service`
--

INSERT INTO `service` (`id_service`, `nom_service`, `descriptions`, `image`, `id_ad`) VALUES
(7, 'la kinÃ©sithÃ©rapie respiratoire de l''adulte et de l''enfant', '', '3.jpg', 3),
(8, 'le renforcement musculaire', '', '4.jpg', 3),
(9, 'la relaxation neuromusculaire.', '', '5.jpg', 3);

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

CREATE TABLE IF NOT EXISTS `specialite` (
  `id_spe` int(11) NOT NULL,
  `nom_spe` varchar(255) NOT NULL,
  `id_ad` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `specialite`
--

INSERT INTO `specialite` (`id_spe`, `nom_spe`, `id_ad`) VALUES
(6, 'Cardiologue', 3),
(7, 'Neurologue', 3),
(8, 'Pidiatre', 3);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_ad`);

--
-- Index pour la table `infousers`
--
ALTER TABLE `infousers`
  ADD PRIMARY KEY (`id_info`),
  ADD KEY `id_ad` (`id_ad`);

--
-- Index pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`id_medecin`),
  ADD KEY `id_spe` (`id_spe`),
  ADD KEY `id_ad` (`id_ad`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`),
  ADD KEY `id_users` (`id_info`),
  ADD KEY `id_info` (`id_info`),
  ADD KEY `id_medecin` (`id_medecin`);

--
-- Index pour la table `ordonnance`
--
ALTER TABLE `ordonnance`
  ADD PRIMARY KEY (`id_ord`),
  ADD KEY `id_users` (`id_info`),
  ADD KEY `id_med` (`id_medecin`);

--
-- Index pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD PRIMARY KEY (`id_rdv`),
  ADD KEY `id_seance` (`id_seance`),
  ADD KEY `id_info` (`id_info`);

--
-- Index pour la table `seance`
--
ALTER TABLE `seance`
  ADD PRIMARY KEY (`id_seance`),
  ADD KEY `id_medecin` (`id_medecin`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`),
  ADD KEY `id_ad` (`id_ad`);

--
-- Index pour la table `specialite`
--
ALTER TABLE `specialite`
  ADD PRIMARY KEY (`id_spe`),
  ADD KEY `id_ad` (`id_ad`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_ad` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `infousers`
--
ALTER TABLE `infousers`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `medecin`
--
ALTER TABLE `medecin`
  MODIFY `id_medecin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `ordonnance`
--
ALTER TABLE `ordonnance`
  MODIFY `id_ord` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `rdv`
--
ALTER TABLE `rdv`
  MODIFY `id_rdv` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `seance`
--
ALTER TABLE `seance`
  MODIFY `id_seance` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `specialite`
--
ALTER TABLE `specialite`
  MODIFY `id_spe` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `infousers`
--
ALTER TABLE `infousers`
  ADD CONSTRAINT `infousers_ibfk_2` FOREIGN KEY (`id_ad`) REFERENCES `admin` (`id_ad`);

--
-- Contraintes pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD CONSTRAINT `medecin_ibfk_1` FOREIGN KEY (`id_ad`) REFERENCES `admin` (`id_ad`),
  ADD CONSTRAINT `medecin_ibfk_2` FOREIGN KEY (`id_spe`) REFERENCES `specialite` (`id_spe`);

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`id_medecin`) REFERENCES `medecin` (`id_medecin`),
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`id_info`) REFERENCES `infousers` (`id_info`);

--
-- Contraintes pour la table `ordonnance`
--
ALTER TABLE `ordonnance`
  ADD CONSTRAINT `ordonnance_ibfk_1` FOREIGN KEY (`id_medecin`) REFERENCES `medecin` (`id_medecin`),
  ADD CONSTRAINT `ordonnance_ibfk_2` FOREIGN KEY (`id_info`) REFERENCES `infousers` (`id_info`);

--
-- Contraintes pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD CONSTRAINT `rdv_ibfk_1` FOREIGN KEY (`id_info`) REFERENCES `infousers` (`id_info`),
  ADD CONSTRAINT `rdv_ibfk_2` FOREIGN KEY (`id_seance`) REFERENCES `seance` (`id_seance`);

--
-- Contraintes pour la table `seance`
--
ALTER TABLE `seance`
  ADD CONSTRAINT `seance_ibfk_1` FOREIGN KEY (`id_medecin`) REFERENCES `medecin` (`id_medecin`);

--
-- Contraintes pour la table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`id_ad`) REFERENCES `admin` (`id_ad`);

--
-- Contraintes pour la table `specialite`
--
ALTER TABLE `specialite`
  ADD CONSTRAINT `specialite_ibfk_1` FOREIGN KEY (`id_ad`) REFERENCES `admin` (`id_ad`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
