-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 07 juin 2021 à 02:59
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `m2l-site`
--

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

DROP TABLE IF EXISTS `offre`;
CREATE TABLE IF NOT EXISTS `offre` (
  `offre_id` int(5) NOT NULL AUTO_INCREMENT,
  `offre_titre` varchar(100) NOT NULL,
  `offre_categorie` varchar(100) NOT NULL,
  `offre_entreprise` varchar(100) NOT NULL,
  `offre_ville` varchar(100) NOT NULL,
  `offre_cp` int(5) NOT NULL,
  `offre_accroche` varchar(250) NOT NULL,
  `offre_description` varchar(1000) NOT NULL,
  `offre_contrat` varchar(50) NOT NULL,
  `offre_date` date NOT NULL,
  `offre_createur` int(5) NOT NULL,
  PRIMARY KEY (`offre_id`),
  KEY `offre_createur` (`offre_createur`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `offre`
--

INSERT INTO `offre` (`offre_id`, `offre_titre`, `offre_categorie`, `offre_entreprise`, `offre_ville`, `offre_cp`, `offre_accroche`, `offre_description`, `offre_contrat`, `offre_date`, `offre_createur`) VALUES
(1, 'Lorem ipsum dolor', 'vente', 'ipsum ', 'Nancy', 54000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores ratione minus laborum unde neque ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores ratione minus laborum unde neque voluptatibus perferendis adipisci hic quis quaerat nam, aliquid dignissimos nesciunt ipsa earum, nobis alias molestias quam sequi fuga quos dolor. Velit in dicta at quo laudantium, animi voluptas saepe nisi inventore necessitatibus eius impedit magnam? Praesentium vitae facere ', 'CDI', '2021-06-05', 1),
(2, ' sit amet consectetur', 'Lorem ', 'ipsum ', 'Toul', 54200, 'voluptatibus perferendis adipisci hic quis quaerat nam, aliquid dignissimos nesciunt ipsa earum,', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores ratione minus laborum unde neque voluptatibus perferendis adipisci hic quis quaerat nam, aliquid dignissimos nesciunt ipsa earum, nobis alias molestias quam sequi fuga quos dolor. Velit in dicta at quo laudantium, animi voluptas saepe nisi inventore necessitatibus eius impedit magnam? Praesentium vitae facere ', 'CDD', '2021-06-03', 2),
(3, 'adipisicing elit', 'Lorem ', 'ipsum ', 'Lunéville', 54300, 'nobis alias molestias quam sequi fuga quos dolor. Velit in dicta at quo laudantium, animi voluptas', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores ratione minus laborum unde neque voluptatibus perferendis adipisci hic quis quaerat nam, aliquid dignissimos nesciunt ipsa earum, nobis alias molestias quam sequi fuga quos dolor. Velit in dicta at quo laudantium, animi voluptas saepe nisi inventore necessitatibus eius impedit magnam? Praesentium vitae facere ', 'CDD', '2021-06-26', 1),
(4, 'Facere, consequatur.', 'Lorem ', 'ipsum ', 'Mirecourt', 88500, 'saepe nisi inventore necessitatibus eius impedit magnam? Praesentium vitae facere temporibus eos nostrum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores ratione minus laborum unde neque voluptatibus perferendis adipisci hic quis quaerat nam, aliquid dignissimos nesciunt ipsa earum, nobis alias molestias quam sequi fuga quos dolor. Velit in dicta at quo laudantium, animi voluptas saepe nisi inventore necessitatibus eius impedit magnam? Praesentium vitae facere ', 'CDI', '2021-06-11', 1),
(5, 'faz', 'coaching', 'fafzaf', 'fzaffza', 16546, 'fazazf', 'fazfazfza', 'CDD', '2021-06-18', 2),
(6, 'Moniteur / Animateur Sports Terrestres (H/F)', 'coaching', 'SC Talent', 'Versailles', 78000, 'En devenant G.O Moniteur / Animateur Sports Terrestres, vous allez pouvoir bénéficier des infrastructures et activités proposées par Club Med. Si le cœur vous en dit, vous pourrez même monter sur scène pour montrer vos talents !', 'Vous êtes\r\n\r\n    Pédagogue, vous vous mettez au niveau de vos coachés, qu’ils soient novices ou expérimentés\r\n    Passionné, vous acceptez de révéler votre jeu à qui voudra bien se mesurer à vous\r\n    Performeur, vous enchaînez les entraînements sans jamais perdre votre enthousiasme\r\n\r\nVous allez\r\n\r\n    Enseigner l’ensemble des sports collectifs (football, volley-ball, tennis de table, pétanque, marche, jogging…) auprès d’adultes et enfants de novices à passionnés\r\n    Assurer la promotion de vos activités au sein du resort\r\n    Vous assurer de la qualité des relations avec les clients en renforçant la culture et l’esprit Club Med\r\n    Garantir le respect des règles d’hygiène et de sécurité Club Med ainsi que l’entretien du patrimoine', 'CDD', '2021-06-11', 2),
(8, 'Responsable club de sport', 'coaching', 'Fitness park', 'Le Mans', 72000, 'Au sein de l\'équipe Tech\', tu seras amené à : Étoffer le patrimoine de tests de l’application Réaliser les tests fonctionnels, manuels, en amont des dev Automatiser les tests sur les parties les plus sensibles et chronophages ', 'Très belle success story française Site e commerce, avec une dizaine d\'années d\'existence Créé par un ancien sportif de haut niveau Top 30 des sites e commerce français 200 collaborateurs Livraison dans 70 pays, 130 millions de CA Boîte responsable et engagée, soutient plusieurs ONGs pour la biodiversité, préservation des forêts, reforestation etc. Très bon équilibre vie privée / pro Valeurs du sport : dépassement de soi, solidarité, entraide etc. Sessions dédiées à la veille / R &D Intervention d\'experts sur des thématiques diverses : levée de fonds, le made in France, innovation digitale etc. Sessions de sport proposées Fortes ambitions de croissance', 'CDI', '2021-06-18', 2);

-- --------------------------------------------------------

--
-- Structure de la table `plage_horaire`
--

DROP TABLE IF EXISTS `plage_horaire`;
CREATE TABLE IF NOT EXISTS `plage_horaire` (
  `plage_id` int(5) NOT NULL AUTO_INCREMENT,
  `heure_debut` time NOT NULL,
  `heure_fin` time NOT NULL,
  PRIMARY KEY (`plage_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `plage_horaire`
--

INSERT INTO `plage_horaire` (`plage_id`, `heure_debut`, `heure_fin`) VALUES
(1, '08:00:00', '10:00:00'),
(2, '10:00:00', '12:00:00'),
(3, '12:00:00', '14:00:00'),
(4, '14:00:00', '16:00:00'),
(5, '16:00:00', '18:00:00'),
(6, '18:00:00', '20:00:00'),
(7, '20:00:00', '22:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `preference`
--

DROP TABLE IF EXISTS `preference`;
CREATE TABLE IF NOT EXISTS `preference` (
  `preference_id` int(11) NOT NULL AUTO_INCREMENT,
  `preference_type` varchar(50) NOT NULL,
  `preference_user` int(11) NOT NULL,
  `preference_offre` int(11) NOT NULL,
  PRIMARY KEY (`preference_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `preference`
--

INSERT INTO `preference` (`preference_id`, `preference_type`, `preference_user`, `preference_offre`) VALUES
(1, 'save', 1, 2),
(2, 'save', 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `reservation_id` int(5) NOT NULL AUTO_INCREMENT,
  `reservation_titre` varchar(50) NOT NULL,
  `reservation_date` date NOT NULL,
  `reservation_user_id` int(5) NOT NULL,
  `reservation_salle_id` int(5) NOT NULL,
  `reservation_plage_id` int(5) NOT NULL,
  PRIMARY KEY (`reservation_id`),
  KEY `fk_reservation_user_id` (`reservation_user_id`),
  KEY `fk_reservation_salle_id` (`reservation_salle_id`),
  KEY `fk_reservation_plage_id` (`reservation_plage_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `reservation_titre`, `reservation_date`, `reservation_user_id`, `reservation_salle_id`, `reservation_plage_id`) VALUES
(1, 'Reservation n°1', '2021-06-07', 1, 18, 5);

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

DROP TABLE IF EXISTS `salle`;
CREATE TABLE IF NOT EXISTS `salle` (
  `salle_id` int(5) NOT NULL AUTO_INCREMENT,
  `salle_nom` varchar(50) NOT NULL,
  `salle_description` varchar(500) NOT NULL,
  `salle_qte` int(5) NOT NULL,
  PRIMARY KEY (`salle_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`salle_id`, `salle_nom`, `salle_description`, `salle_qte`) VALUES
(11, 'Majorelle', 'Salles de réunion - Grande', 50),
(12, 'Gruber', 'Salles de réunion - Moyenne', 30),
(13, 'Longwy', 'Salles de réunion - Petite', 15),
(14, 'Daum', 'Salles de réunion - Moyenne', 30),
(15, 'Gallé', 'Salles de réunion - Moyenne', 30),
(16, 'Corbin', 'Salles de réunion - Moyenne', 30),
(17, 'Baccarat', 'Salles de réunion - Moyenne', 30),
(18, 'Amphithéatre', 'Pour les assemblés générales ou pour d\'autre réunions importantes.', 200),
(19, 'La salle de convivialité', 'Pour les repas \" traiteur\" qui suivent les réunions.', 50),
(20, 'La salle multimédia', 'Dediée aux stages de formation a inscription libez proposé par le CROSL ou pour les stages organisé par les ligues.', 25);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `statut` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `statut`, `user_email`, `user_password`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'admin', 'JuryE4', 'JuryE4'),
(5, 'user', 'user1', 'user1');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `offre`
--
ALTER TABLE `offre`
  ADD CONSTRAINT `offre_ibfk_1` FOREIGN KEY (`offre_createur`) REFERENCES `user` (`user_id`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `fk_reservation_plage_id` FOREIGN KEY (`reservation_plage_id`) REFERENCES `plage_horaire` (`plage_id`),
  ADD CONSTRAINT `fk_reservation_salle_id` FOREIGN KEY (`reservation_salle_id`) REFERENCES `salle` (`salle_id`),
  ADD CONSTRAINT `fk_reservation_user_id` FOREIGN KEY (`reservation_user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
