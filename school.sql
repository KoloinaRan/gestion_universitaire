-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 01 avr. 2025 à 20:23
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `school`
--

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `filieres` varchar(100) NOT NULL DEFAULT '',
  `niveaux` varchar(50) NOT NULL,
  `jours` varchar(100) NOT NULL,
  `heures` varchar(20) NOT NULL,
  `matieres` varchar(20) NOT NULL,
  `nom` varchar(100) NOT NULL,
  PRIMARY KEY (`filieres`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`filieres`, `niveaux`, `jours`, `heures`, `matieres`, `nom`) VALUES
('', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

DROP TABLE IF EXISTS `eleve`;
CREATE TABLE IF NOT EXISTS `eleve` (
  `matricule` varchar(10) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `filiere` varchar(50) NOT NULL,
  `niveau` varchar(50) NOT NULL,
  `mta` int NOT NULL,
  PRIMARY KEY (`matricule`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

DROP TABLE IF EXISTS `enseignant`;
CREATE TABLE IF NOT EXISTS `enseignant` (
  `nom` varchar(100) NOT NULL DEFAULT '',
  `pere` varchar(11) DEFAULT NULL,
  `mere` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `enseignant_cours`
--

DROP TABLE IF EXISTS `enseignant_cours`;
CREATE TABLE IF NOT EXISTS `enseignant_cours` (
  `matricule` varchar(20) DEFAULT NULL,
  `nom` varchar(150) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `id` int DEFAULT NULL,
  `classe` varchar(30) DEFAULT NULL,
  `matiere` varchar(80) DEFAULT NULL,
  `num_jour` smallint DEFAULT NULL,
  `jour` varchar(20) DEFAULT NULL,
  `heure` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
CREATE TABLE IF NOT EXISTS `etudiants` (
  `nom` varchar(100) NOT NULL DEFAULT '',
  `pere` varchar(50) DEFAULT NULL,
  `mere` varchar(20) DEFAULT NULL,
  `adresse` varchar(10) DEFAULT NULL,
  `diplome` varchar(10) DEFAULT NULL,
  `numero` int DEFAULT NULL,
  PRIMARY KEY (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `inscription_admin2`
--

DROP TABLE IF EXISTS `inscription_admin2`;
CREATE TABLE IF NOT EXISTS `inscription_admin2` (
  `nom` varchar(50) NOT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mdp` varchar(35) DEFAULT NULL,
  `cmdp` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inscription_admin2`
--

INSERT INTO `inscription_admin2` (`nom`, `contact`, `email`, `mdp`, `cmdp`) VALUES
('Andy Randria', '0342586945', 'randriandy@gmail.com', '372eeffaba2b5b61fb02513ecb84f1ff', '372eeffaba2b5b61fb02513ecb84f1ff');

-- --------------------------------------------------------

--
-- Structure de la table `liste_enseignant`
--

DROP TABLE IF EXISTS `liste_enseignant`;
CREATE TABLE IF NOT EXISTS `liste_enseignant` (
  `nom` varchar(100) NOT NULL DEFAULT '',
  `autorisation` varchar(50) DEFAULT 'NOT NULL',
  `adresse` varchar(50) DEFAULT NULL,
  `contact` int DEFAULT NULL,
  `email` varchar(10) DEFAULT NULL,
  `matiere` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `liste_etudiant`
--

DROP TABLE IF EXISTS `liste_etudiant`;
CREATE TABLE IF NOT EXISTS `liste_etudiant` (
  `nom` varchar(100) NOT NULL DEFAULT '',
  `filiere` varchar(50) DEFAULT NULL,
  `niveau` varchar(20) DEFAULT NULL,
  `matricule` varchar(10) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `contact` int DEFAULT NULL,
  `pere` varchar(100) DEFAULT NULL,
  `mere` varchar(100) DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `diplome` varchar(10) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `email` varchar(50) NOT NULL DEFAULT '',
  `mdp` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`email`, `mdp`) VALUES
('randriandy@gmail.com', '372eeffaba2b5b61fb02513ecb84f1ff');

-- --------------------------------------------------------

--
-- Structure de la table `montant`
--

DROP TABLE IF EXISTS `montant`;
CREATE TABLE IF NOT EXISTS `montant` (
  `id` int NOT NULL,
  `niveau` varchar(100) NOT NULL,
  `filiere` varchar(100) NOT NULL,
  `inscription` int NOT NULL,
  `generaux` int NOT NULL,
  `ecolage` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `matricule` varchar(20) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `filiere` varchar(100) NOT NULL,
  `niveau` varchar(100) NOT NULL,
  `matiere` varchar(100) NOT NULL,
  `examen` decimal(4,2) DEFAULT NULL,
  `coefficient` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`matricule`,`matiere`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `paie`
--

DROP TABLE IF EXISTS `paie`;
CREATE TABLE IF NOT EXISTS `paie` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ideleve` varchar(10) NOT NULL,
  `type` varchar(200) NOT NULL,
  `mtp` int DEFAULT NULL,
  `datep` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk1` (`ideleve`)
) ENGINE=InnoDB AUTO_INCREMENT=158 DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `tb_cours`
--

DROP TABLE IF EXISTS `tb_cours`;
CREATE TABLE IF NOT EXISTS `tb_cours` (
  `salle` varchar(4) NOT NULL,
  `enseignant` varchar(101) NOT NULL,
  `classe` varchar(20) NOT NULL,
  `matiere` varchar(80) NOT NULL,
  `num_jour` smallint DEFAULT NULL,
  `Jour` varchar(20) NOT NULL,
  `heure` varchar(20) NOT NULL,
  `matricule_ens` varchar(20) NOT NULL,
  PRIMARY KEY (`salle`),
  KEY `fk` (`matricule_ens`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `tb_enseignant`
--

DROP TABLE IF EXISTS `tb_enseignant`;
CREATE TABLE IF NOT EXISTS `tb_enseignant` (
  `matricule` varchar(20) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `contact` varchar(50) NOT NULL,
  PRIMARY KEY (`matricule`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
