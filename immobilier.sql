-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 14 Décembre 2016 à 05:51
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `immobilier`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id_a` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description` text,
  `date_a` date DEFAULT NULL,
  `prix` decimal(10,0) DEFAULT NULL,
  `commune` varchar(255) DEFAULT NULL,
  `nbpiece` int(11) DEFAULT NULL,
  `surface` varchar(11) NOT NULL,
  `p1` varchar(255) NOT NULL,
  `p2` varchar(255) NOT NULL,
  `p3` varchar(255) NOT NULL,
  `p4` varchar(255) NOT NULL,
  `id_c` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `annonce`
--

INSERT INTO `annonce` (`id_a`, `titre`, `description`, `date_a`, `prix`, `commune`, `nbpiece`, `surface`, `p1`, `p2`, `p3`, `p4`, `id_c`) VALUES
(1, 'Appartement 1 pièce(s) - 7m² - PARIS 14', 'PLAISANCE\r\nDans un immeuble en pierre de taille, au 3èm étage, chambre de 7,11m² loi carrez comprenant un coin cuisine et une cabine de douche. WC sur le palier.\r\nCopropriété de 29 lots. Budget moyen annuel de charges: 480E.', NULL, '50000', 'Paris', 1, '7 m²', 'img/p1.jpg', 'img/p2.jpg', 'img/p3.jpg', '', 1),
(2, 'Petite annonce location appartement 4 pièces', 'AIX ROCHER DU DRAGON prox. CV : T4 de 77,24m² en rdc surélevé REFAIT DE NEUF. Comprenant un séjour/salle à manger, une cuisine séparée aménagée et équipée avec une loggia, 3 chambres dont deux avec placard de rangements, une salle de douche, un wc séparé, une cave, pkg collectif. Possibilité de louer un garage en sus. Libre Mi-Février 2017.', '2016-12-08', '1190', 'AIX EN PROVENCE ', 4, '77 m²', 'img/i1.jpg', 'img/i2.jpg', 'img/i3.jpg', 'img/i4.jpg', 1),
(3, 'Maison Paris 96 m² avec 4 pièces 690 000', 'PROCHE DU METRO CRIMEE - Rare dans ce quartier en pleine expansion, une maison de ville sur trois niveaux, de grand standing et refaite à neuf avec des matériaux de qualité. Lors de la visite vous pourrez découvrir une vaste pièce de vie avec sa cuisine ouverte entièrement équipée et aménagée. Au premier étage un espace bureau / bibliothèque qui vous invitera à la détente, une chambre, une salle d\'eau et un wc indépendant. Au deuxième étage 2 chambres, une salle de bain avec baignoire spa et un wc séparé. Décoration raffinée, aucune perte d\'espace, rangements optimisés et atmosphère chaleureuse sont au rendez-vous de ce bien rare dans le 19ème arrondissement.', NULL, '690000', '75', 4, '96m²', 'img/m1.jpg', 'img/m2.jpg', 'img/m3.jpg', '', 2),
(4, 'Vente Appartement 3 pièces 72,64m² Domont ', 'Spacieux appartement de 3 pièces à 5 min de la gare. Il vous offre: entrée, séjour avec balcon bien exposé, cuisine aménagée et équipée (possibilité US), 2 chambres, salle de bains, cellier, dressing indépendant. Chauffage au gaz individuel, double vitrage avec volet électrique, place de parking. Ravalement récent, faibles charges,. A DÉCOUVRIR RAPIDEMENT !!. Copropriété de 81 lots Charges annuelles: 1404 euros. ', NULL, '193000', NULL, 3, '72.64', 'img/a1.jpg', 'img/a2.jpg', 'img/a3.jpg', '', 1),
(5, 'Vente Maison / Villa 75m² Domont ', 'Quartier calme de Domont et proche du collège Jules Ferry. Ce pavillon, construit sur vide sanitaire, est composée d\'un séjour double récemment rénové (entre 25 et 30 m²) avec cheminée donnant sur véranda (plus de 15m²). 1 chambre de 12m², 1 salle de bains, WC séparés, 1 cuisine équipée, garage, nombreux placards. Beau jardin sur le devant de la maison assurant le calme et l\'\'intimité. Petit jardin sur l\'arrière permettant de profiter pleinement de la véranda. Idéal couple Prix: 260 000 E CONTACT Maître Franck MARTIN 18 Rue Thiboumery 75015 Paris Tél: fax. ', NULL, '260000', NULL, 3, '', 'img/b1.jpg', 'img/b2.jpg', 'img/b3.jpg', '', 2);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_c` int(11) NOT NULL,
  `titre` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id_c`, `titre`) VALUES
(1, 'Appartement'),
(2, 'Maison');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_u` smallint(6) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `login` varchar(50) NOT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `lvl` int(11) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_u`, `email`, `login`, `mdp`, `lvl`) VALUES
(1, 'toto@gmail.com', '', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1),
(2, 'titi@gmail.com', '', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1),
(3, 'admin@gmail.com', '', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 2),
(4, 'lala@gmail.com', 'lala', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1),
(5, 'aaa@gmail.com', 'paul', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1),
(6, 'aa@lol', 'aa', 'e0c9035898dd52fc65c41454cec9c4d2611bfb37', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id_a`),
  ADD KEY `id_c` (`id_c`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_c`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id_a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_c` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_u` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
