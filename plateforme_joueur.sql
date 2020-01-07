-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 07 jan. 2020 à 13:58
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `plateforme_joueur`
--

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

DROP TABLE IF EXISTS `agent`;
CREATE TABLE IF NOT EXISTS `agent` (
  `id_agent` int(11) NOT NULL AUTO_INCREMENT,
  `nom_agent` varchar(50) NOT NULL,
  `prenom_agent` varchar(50) NOT NULL,
  `email_agent` varchar(50) NOT NULL,
  `password_agent` varchar(50) NOT NULL,
  `age_agent` int(11) NOT NULL,
  `pays_agent` varchar(50) NOT NULL,
  `continent_agent` varchar(50) NOT NULL,
  `photo_agent` varchar(50) NOT NULL,
  `diplome_agent` varchar(50) NOT NULL,
  `immatriculation_agent` int(11) NOT NULL,
  `favoris_agent` varchar(250) NOT NULL,
  PRIMARY KEY (`id_agent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `annonceagent`
--

DROP TABLE IF EXISTS `annonceagent`;
CREATE TABLE IF NOT EXISTS `annonceagent` (
  `id_annonceagent` int(11) NOT NULL AUTO_INCREMENT,
  `intitule_annonceagent` int(11) NOT NULL,
  `type_annonceagent` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  PRIMARY KEY (`id_annonceagent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `annonceclub`
--

DROP TABLE IF EXISTS `annonceclub`;
CREATE TABLE IF NOT EXISTS `annonceclub` (
  `id_annonceclub` int(11) NOT NULL AUTO_INCREMENT,
  `intitule_annonceclub` varchar(50) NOT NULL,
  `type_annonceclub` varchar(50) NOT NULL,
  `centre_id` int(11) NOT NULL,
  PRIMARY KEY (`id_annonceclub`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `atout`
--

DROP TABLE IF EXISTS `atout`;
CREATE TABLE IF NOT EXISTS `atout` (
  `id_atout` int(11) NOT NULL AUTO_INCREMENT,
  `qualite` varchar(50) NOT NULL,
  `ameliorer` varchar(50) NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`id_atout`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categorieclub`
--

DROP TABLE IF EXISTS `categorieclub`;
CREATE TABLE IF NOT EXISTS `categorieclub` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `niveau` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `centre_id` int(11) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `club`
--

DROP TABLE IF EXISTS `club`;
CREATE TABLE IF NOT EXISTS `club` (
  `id_club` int(11) NOT NULL AUTO_INCREMENT,
  `nom_club` varchar(50) NOT NULL,
  `pays_club` varchar(50) NOT NULL,
  `ville_club` varchar(50) NOT NULL,
  `embleme_club` varchar(50) NOT NULL,
  `email_club` varchar(50) NOT NULL,
  `password_club` varchar(50) NOT NULL,
  `favoris_club` varchar(250) NOT NULL,
  PRIMARY KEY (`id_club`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `experienceclub`
--

DROP TABLE IF EXISTS `experienceclub`;
CREATE TABLE IF NOT EXISTS `experienceclub` (
  `id_experience` int(11) NOT NULL AUTO_INCREMENT,
  `saison_debut` int(5) NOT NULL,
  `saison_fin` int(5) NOT NULL,
  `club` varchar(50) NOT NULL,
  `championnat` varchar(50) NOT NULL,
  `match_joue` int(5) NOT NULL,
  `buts` int(5) NOT NULL,
  `passes` int(5) NOT NULL,
  `carton_jaune` int(5) NOT NULL,
  `carton_rouge` int(5) NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`id_experience`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `id_formation` int(11) NOT NULL AUTO_INCREMENT,
  `intitule_formation` varchar(50) NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`id_formation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

DROP TABLE IF EXISTS `joueur`;
CREATE TABLE IF NOT EXISTS `joueur` (
  `id_joueur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_joueur` varchar(50) NOT NULL,
  `prenom_joueur` varchar(50) NOT NULL,
  `email_joueur` varchar(50) NOT NULL,
  `password_joueur` varchar(50) NOT NULL,
  `datenaissance_joueur` varchar(50) NOT NULL,
  `categorie_joueur` varchar(50) NOT NULL,
  `pays_joueur` varchar(50) NOT NULL,
  `ville_joueur` varchar(50) NOT NULL,
  `continent_joueur` varchar(50) NOT NULL,
  `photos_joueur` varchar(50) NOT NULL,
  `favoris_joueur` varchar(250) NOT NULL,
  PRIMARY KEY (`id_joueur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `objectif`
--

DROP TABLE IF EXISTS `objectif`;
CREATE TABLE IF NOT EXISTS `objectif` (
  `id_objectif` int(11) NOT NULL AUTO_INCREMENT,
  `objectif` varchar(50) NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`id_objectif`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `physique`
--

DROP TABLE IF EXISTS `physique`;
CREATE TABLE IF NOT EXISTS `physique` (
  `id_physique` int(11) NOT NULL AUTO_INCREMENT,
  `taille` int(5) NOT NULL,
  `poids` int(5) NOT NULL,
  `corpulence` varchar(20) NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`id_physique`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `profession`
--

DROP TABLE IF EXISTS `profession`;
CREATE TABLE IF NOT EXISTS `profession` (
  `id_profession` int(11) NOT NULL AUTO_INCREMENT,
  `intitule_profession` varchar(50) NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`id_profession`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sante`
--

DROP TABLE IF EXISTS `sante`;
CREATE TABLE IF NOT EXISTS `sante` (
  `id_sante` int(11) NOT NULL AUTO_INCREMENT,
  `renseignement_sante` varchar(50) NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`id_sante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `statistiques`
--

DROP TABLE IF EXISTS `statistiques`;
CREATE TABLE IF NOT EXISTS `statistiques` (
  `id_statistiques` int(11) NOT NULL AUTO_INCREMENT,
  `media` varchar(50) NOT NULL,
  `statistiques` varchar(50) NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`id_statistiques`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

DROP TABLE IF EXISTS `statut`;
CREATE TABLE IF NOT EXISTS `statut` (
  `id_statut` int(11) NOT NULL AUTO_INCREMENT,
  `libre` varchar(5) NOT NULL,
  `engage` varchar(5) NOT NULL,
  `player_id` int(11) NOT NULL,
  PRIMARY KEY (`id_statut`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
