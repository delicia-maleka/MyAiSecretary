-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 05 Mai 2024 à 21:44
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `demedia`
--

-- --------------------------------------------------------

--
-- Structure de la table `affiliation`
--

CREATE TABLE `affiliation` (
  `id_affiliation` int(11) NOT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `document`
--

CREATE TABLE `document` (
  `id_document` int(11) NOT NULL,
  `taille` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `date_creation` date NOT NULL,
  `id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `document`
--

INSERT INTO `document` (`id_document`, `taille`, `date_creation`, `id`) VALUES
(25, '1492760', '2001-05-24', 0),
(34, 'None', '2005-05-24', 14),
(35, 'None', '2005-05-24', 13),
(36, 'None', '2005-05-24', 13),
(39, 'None', '2005-05-24', 16);

-- --------------------------------------------------------

--
-- Structure de la table `entreprise_particulier`
--

CREATE TABLE `entreprise_particulier` (
  `numero_siret` int(11) NOT NULL,
  `compte_entreprise` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fichier`
--

CREATE TABLE `fichier` (
  `id_fichier` int(11) NOT NULL,
  `nom_fichier` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `taille` double NOT NULL,
  `date_creation` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(200) NOT NULL,
  `id_document` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `fichier`
--

INSERT INTO `fichier` (`id_fichier`, `nom_fichier`, `type`, `taille`, `date_creation`, `url`, `id`, `id_document`) VALUES
(1, 'fichier1', 'jpg', 100, '12042005', 'sdfghjksdfg', 5, 0),
(6, 'Capture dâ€™Ã©cran (1).png', '.png', 1492755, '04-05-24 01:44:23', 'C:UsersHPAppDataLocalTempphpF21A.tmp', 13, 0),
(11, 'name', '.jpg', 1234, '2345', 'file_url', 3, 0),
(12, 'image00040.jpeg', '.jpeg', 1161728, '04-05-24 12:06:37', 'C:UsersHPAppDataLocalTempphp9E43.tmp', 13, 0),
(13, 'image00048.jpeg', '.jpeg', 1017630, '04-05-24 12:14:05', 'C:UsersHPAppDataLocalTempphp754E.tmp', 13, 0),
(16, 'image00067.jpeg', '.jpeg', 1046236, '04-05-24 05:07:13', 'C:UsersHPAppDataLocalTempphpD505.tmp', 13, 0),
(17, 'image00049.jpeg', '.jpeg', 1109728, '04-05-24 17:16:39', 'C:UsersHPAppDataLocalTempphp75E3.tmp', 13, 0),
(18, 'image00042.jpeg', '.jpeg', 976487, '04-05-24 17:58:05', 'document/image00042.jpeg', 13, 0),
(19, 'HKMV5790.JPG', '.JPG', 0, '04-05-24 21:00:05', 'document/HKMV5790.JPG', 13, 0),
(21, 'IMG_0655.JPG', '.JPG', 54880, '04-05-24 21:46:44', 'document/IMG_0655.JPG', 21, 0),
(22, 'IMG_0658.JPG', '.JPG', 0, '04-05-24 21:46:52', 'document/IMG_0658.JPG', 21, 0),
(23, 'SDFGHJ', 'jpg', 1234, '20-04-05', 'sdfghjjxcv', 13, 27),
(36, 'IMG_0656.JPG', '.JPG', 0, '05-05-24 16:27:36', 'document/IMG_0656.JPG', 13, 27),
(37, 'IMG_0656.JPG', '.JPG', 0, '05-05-24 16:29:40', 'document/IMG_0656.JPG', 13, 27),
(44, 'IMG_0657.JPG', '.JPG', 0, '05-05-24 18:25:42', 'document/IMG_0657.JPG', 14, 0),
(46, 'IMG_0657.JPG', '.JPG', 0, '05-05-24 19:09:27', 'document/IMG_0657.JPG', 14, 0),
(47, 'IMG_0657.JPG', '.JPG', 0, '05-05-24 21:10:52', 'document/IMG_0657.JPG', 13, 0),
(48, 'ELKQ1962.JPG', '.JPG', 0, '05-05-24 21:11:00', 'document/ELKQ1962.JPG', 13, 0),
(49, 'IMG_0657.JPG', '.JPG', 0, '05-05-24 23:12:25', 'document/IMG_0657.JPG', 16, 0),
(50, 'IMG_0657.JPG', '.JPG', 0, '05-05-24 23:17:33', 'document/IMG_0657.JPG', 16, 0);

-- --------------------------------------------------------

--
-- Structure de la table `historique_discussion`
--

CREATE TABLE `historique_discussion` (
  `id_historique` int(11) NOT NULL,
  `titre_discussion` text COLLATE utf8_unicode_ci NOT NULL,
  `dernier_message` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id_discussion` int(11) NOT NULL,
  `contenu_message` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `id_IA` int(11) NOT NULL,
  `email_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `id_projet` int(11) NOT NULL,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `secretaire_ia`
--

CREATE TABLE `secretaire_ia` (
  `id_IA` int(11) NOT NULL,
  `reponse_message` varchar(10000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `table_de_discussion`
--

CREATE TABLE `table_de_discussion` (
  `id_table` int(11) NOT NULL,
  `message_IA` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `message_utilisateur` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `nom_utilisateur` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `heure` date NOT NULL,
  `date` datetime NOT NULL,
  `id_discussion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(50) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `email`, `role`, `nom`, `prenom`, `password`) VALUES
(2, '', 'ert', 'tom', 'deli', ''),
(3, 'test1@gmail.com', 'Aucun', 'mlk', 'deli', ''),
(4, 'test1@gmail.com', 'Aucun', 'mlk', 'deli', ''),
(5, 'textt@gmail.com', 'Aucun', 'meleke', 'delece', ''),
(6, 'textt@gmail.com', 'Aucun', 'meleke', 'delece', ''),
(7, 'famille@gmail.com', 'Aucun', 'maleka', 'delicia', ''),
(8, 'deli@gmail.com', 'Aucun', 'maleka', 'delicia', ''),
(9, 'root@gmail.com', 'Aucun', 'meleke', 'deli', ''),
(10, 'toto@gmail.com', 'Aucun', 'po', 'toto', ''),
(11, 'ro@gmail.com', 'Aucun', 'meleke', 'hy', ''),
(12, 'fleury@gmail.com', 'Aucun', 'kombeli', 'fleury', '$2y$10$5HKXlBspmcgzVgjQz4E.tOl1RM3aXWQ9TiC9Nt3dzmuMG1O94d7HK'),
(13, 'delicia@gmail.com', 'Aucun', 'maleka', 'delicia', 'dede'),
(14, 'grace@gmail.com', 'User', 'maleka', 'grace', 'grace'),
(15, 'grace@gmail.com', 'User', 'maleka', 'grace', 'grace'),
(16, 'unice@gmail.com', 'User', 'mlk', 'unice', 'unice'),
(17, 'pepe@gmail.com', 'User', 'pepe', 'porto', 'pepe'),
(18, 'pipi@gmail.com', 'User', 'pipi', 'pipi', 'pipi'),
(19, 'pipi@gmail.com', 'User', 'pipi', 'pipi', 'pipi'),
(20, 'jaures@gmail.com', 'User', 'solo', 'jaures', 'jojo'),
(21, 'jojo@gmail.com', 'User', 'solo', 'jojo', 'jojo'),
(22, 'jo@gmail.com', 'User', 'solo', 'jo', 'jojo'),
(23, 'papa@gmail.com.com', 'User', 'papa', 'papa', 'papa'),
(24, 'unice@gmail.com', 'User', 'solo', 'unice', 'unice');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `affiliation`
--
ALTER TABLE `affiliation`
  ADD PRIMARY KEY (`id_affiliation`);

--
-- Index pour la table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id_document`);

--
-- Index pour la table `entreprise_particulier`
--
ALTER TABLE `entreprise_particulier`
  ADD PRIMARY KEY (`numero_siret`,`compte_entreprise`);

--
-- Index pour la table `fichier`
--
ALTER TABLE `fichier`
  ADD PRIMARY KEY (`id_fichier`);

--
-- Index pour la table `historique_discussion`
--
ALTER TABLE `historique_discussion`
  ADD PRIMARY KEY (`id_historique`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_discussion`),
  ADD UNIQUE KEY `message_AK` (`email`),
  ADD KEY `message_secretaire_IA_FK` (`id_IA`),
  ADD KEY `message_utilisateur0_FK` (`email_utilisateur`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id_projet`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Index pour la table `secretaire_ia`
--
ALTER TABLE `secretaire_ia`
  ADD PRIMARY KEY (`id_IA`);

--
-- Index pour la table `table_de_discussion`
--
ALTER TABLE `table_de_discussion`
  ADD PRIMARY KEY (`id_table`),
  ADD KEY `table_de_discussion_message_FK` (`id_discussion`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `affiliation`
--
ALTER TABLE `affiliation`
  MODIFY `id_affiliation` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `document`
--
ALTER TABLE `document`
  MODIFY `id_document` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT pour la table `fichier`
--
ALTER TABLE `fichier`
  MODIFY `id_fichier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT pour la table `historique_discussion`
--
ALTER TABLE `historique_discussion`
  MODIFY `id_historique` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id_discussion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id_projet` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `secretaire_ia`
--
ALTER TABLE `secretaire_ia`
  MODIFY `id_IA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `table_de_discussion`
--
ALTER TABLE `table_de_discussion`
  MODIFY `id_table` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_secretaire_IA_FK` FOREIGN KEY (`id_IA`) REFERENCES `secretaire_ia` (`id_IA`),
  ADD CONSTRAINT `message_utilisateur0_FK` FOREIGN KEY (`email_utilisateur`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `table_de_discussion`
--
ALTER TABLE `table_de_discussion`
  ADD CONSTRAINT `table_de_discussion_message_FK` FOREIGN KEY (`id_discussion`) REFERENCES `message` (`id_discussion`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
