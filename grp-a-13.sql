-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 01 Décembre 2022 à 18:40
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `grp-a-13`
--
CREATE DATABASE IF NOT EXISTS `grp-a-13` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `grp-a-13`;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `first_name` int(30) NOT NULL,
  `last_name` int(30) NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `message` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `h1` varchar(200) NOT NULL,
  `p1` text NOT NULL,
  `p2` text NOT NULL,
  `p3` text NOT NULL,
  `p4` text NOT NULL,
  `p5` text NOT NULL,
  `p6` text NOT NULL,
  `para1` varchar(100) NOT NULL,
  `para2` varchar(100) NOT NULL,
  `para3` varchar(100) NOT NULL,
  `para4` varchar(100) NOT NULL,
  `para5` varchar(100) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `img3` varchar(100) NOT NULL,
  `img4` varchar(100) NOT NULL,
  `img5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `project`
--

INSERT INTO `project` (`id`, `h1`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `para1`, `para2`, `para3`, `para4`, `para5`, `img1`, `img2`, `img3`, `img4`, `img5`) VALUES
(1, 'Dead By Daylight FanSite', 'Durant 1 semaine, notre intervenant <a id=\'antoine\'href=\'https://www.linkedin.com/in/antoine-di-roberto-8aa93768/\' target=\'_blank\'>Antoine Di Roberto</a>, nous a demandé de réaliser un site internet sur notre jeu favoris, en duo. J’ai donc fait un site sur le jeu Dead By Daylight avec Vitctor Martinan.', 'Pour le site on a choisi de mettre une image en background (ici l’image de promotion de DBD), on y retrouve aussi une nav-bar assez simple, avec une police spécifique et on passe sa couleur en rouge et on assombrie la div quand on passe la souris dessus.', 'On a choisi d’adopter un style plutôt typique gentil = bleu, méchant = rouge, classique mais ça marche. On y explique quel est le rôle de chaque camp et comment jouer.', 'On a pris la vidéo de gameplay d’un des sites de DBD et l’a uploadé sur YouTube en non répertoriée.', 'On y explique tout le contenu en jeu dans des div « flex » , de manière simple, efficace et rapide. On a rencontré quelque problèmes d’affichage concernant l’interaction de la div « flex » entre le texte et les images.', 'On y a marqué comment le studio (Behaviour) garde sa communauté vivante et propose du contenu attractif, qui permettent en grande partie de financer le jeu.', 'img/promo_dead_by_daylight.jpg', 'img/promo_dead_by_daylight.jpg', 'img/promo_dead_by_daylight.jpg', 'img/promo_dead_by_daylight.jpg', 'img/promo_dead_by_daylight.jpg', 'img/dbd-cards/dbd1.jpg', 'img/dbd-cards/dbd2.jpg', 'img/dbd-cards/dbd3.jpg', 'img/dbd-cards/dbd4.jpg', 'img/dbd-cards/dbd5.jpg'),
(2, 'Terraria FanSite', 'Durant 1 semaine, notre intervenant <a id=\'antoine\'href=\'https://www.linkedin.com/in/antoine-di-roberto-8aa93768/\' target=\'_blank\'>Antoine Di Roberto</a>, nous a demandé de réaliser un site internet sur notre jeu favoris, en trio. J’ai donc fait un site sur le jeu Terraria avec Benjamin Arhancet et Lilian Lafin.', 'Nous avons commencé par le placement du logo, du titre, sous titre ( référence à Minecraft ) et de la barre de navigation. Nous avons mit un dropdown dans la nav, soit un menu déroulant pour se déplacer facilement dans le site. Nous avons ensuite raconté l\'histoire du jeu et placé un trailer.', 'Nous avons ensuite parlé du contenu divers et varié de Terraria en passant par la phase de construction avec des images de construction ainsi que par le gameplay avec des images de contenu ( épées, mobs... ) pour illustrer et donner une idée du style graphique.', 'Nous avons également montré quelques boss pour donner un sentiment de challenge avec un bannière pour la catégorie à elle seule. Les boss sont aussi mit d\'une taille adaptée à ce sentiment', 'Pour finir, nous avons mit en place un formulaire de contact ainsi que le lien d\'un let\'s play pour ceux qui voudraient un avant-goût. Et enfin, nous avons mit les réseaux de Re-Logic ( créateurs de Terraria ) dans le footer.', 'Nous avons également montré quelques boss pour donner un sentiment de challenge avec un bannière pour la catégorie à elle seule. Les boss sont aussi mit d\'une taille adaptée à ce sentiment', 'img/terraria-cards/terrariabg1.jpg', 'img/terraria-cards/terrariabg2.jpg', 'img/terraria-cards/terrariabg3.jpg', 'img/terraria-cards/terrariabg2.jpg', 'img/terraria-cards/terrariabg3.jpg', 'img/terraria-cards/terracontent3.jpeg', 'img/terraria-cards/terracontent1.jpeg', 'img/terraria-cards/terracontent2.jpeg', 'img/terraria-cards/terracontent4.jpeg', 'img/terraria-cards/terracontent2.jpeg'),
(3, 'Soom', 'Soom est un jeu projet étudiant en développement.', 'Soom est un jeu qui melange les genres RPG, Sandbox, Roguelike et BulletHell. Ce jeu imaginé par Loris Fiard est en cours de developpement. <br> Une première version fut créée en fin 2021 puis reprise de 0 en 2022 avec un autre développeur, Lever.', 'Dans ce jeu, vous devrez sauver votre civilisation du roi corrompu par le diable. Afin de compléter cette mission, vous serez aider par une fée qui vous ramènera sur votre île lorsque vous mourrez. Vous utiliserez votre bateau pour explorer l\'archipèle pleine de monstres. Trouvez des reliques, fabriquez des outils et améliorez vos capacités au fil de votre aventure. Combattez des boss, faites vous des alliez, construisez votre village et battez le roi démoniaque !', 'Creez de l\'inercie en faisant tourner votre épée pour des attaques plus puissantes, mais ne cassez pas le rythme !<br>Esquivez les attaques punitives de vos adversaires.<br><br>Construisez et detruisez votre propre monde.<br><br> Changez facilement d\'inventaire pour vous adapter à toute situation.', 'Le jeu possède une capacité de build développée avec plusieurs blocs posables et 2 couches de hauteurdifférentes. Une grande quandtité de blocs sera à votre disposition, vous pourrez même construire votre maison !', 'Nous avons choisi le Pixel Art pour un style plus retro et indé. L\'art à été fait par Nyom en premier lieu puis nous sommes passé d\'une 2D pur à une 3D avec illusion de 2D, nous avons alors fait l\'art nous même. Cette amélioration nous a permit de rajouter plusieurs features comme des hauteurs différentes', 'img/soom.jpeg', 'img/soom.jpeg', 'img/soom.jpeg', 'img/soom.jpeg', 'img/soom.jpeg', 'img/soom-cards/soom1.jpeg', 'img/soom-cards/soom2.jpeg', 'img/soom-cards/soom3.jpeg', 'img/soom-cards/soom4.jpeg', 'img/soom-cards/soom5.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `username` varchar(30) CHARACTER SET latin1 NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `email` varchar(80) CHARACTER SET latin1 NOT NULL,
  `phone_number` int(11) NOT NULL,
  `birth_date` date NOT NULL,
  `creation_date` datetime NOT NULL,
  `country` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
