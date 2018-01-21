-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 21, 2018 at 09:29 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MANGA`
--

-- --------------------------------------------------------

--
-- Table structure for table `action`
--

CREATE TABLE `action` (
  `description` text CHARACTER SET utf8 NOT NULL,
  `id` int(11) NOT NULL,
  `auteur` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `titre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `action` varchar(11) CHARACTER SET utf8 NOT NULL,
  `origine` varchar(255) CHARACTER SET utf8 NOT NULL,
  `annee` date NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `action`
--

INSERT INTO `action` (`description`, `id`, `auteur`, `titre`, `action`, `origine`, `annee`, `image`) VALUES
('Il porte une épée plus grande que lui. Il est muni d’un bras artificiel en acier. Guts, le guerrier, est enrobée de feutrine noire… À son passage, déluge de sang et montagnes de cadavres lui font place. Un elfe du nom de Puck le suit après qu’il l’a tiré de mauvais draps. Opposant à la force de Guts son bagou, il est entraîné dans son univers d’ultraviolence. Sur son chemin, des hordes de démons. Son stigmate guidera-t-il Guts vers sa vengeance ?', 0, ' Kentaro Miura', 'Berserk', 'Action', 'Japon', '1989-01-10', './public/assets/images/image_corver/Berserk.jpg'),
('Nous sommes à l''ère des pirates. Luffy, un garçon espiègle, rêve de devenir leur roi en trouvant le « One Piece », un fabuleux trésor.', 1, 'Eiichirō Oda', 'One Piece', 'Action', 'Japon', '1997-07-22', './public/assets/images/image_corver/One_Piece.jpg'),
('Saitama est un jeune homme sans emploi et sans réelle perspective d''avenir, jusqu''au jour où il décide de prendre sa vie en main. Son nouvel objectif : devenir un super-héros. Il s''entraîne alors sans relâche pendant trois ans et devient si puissant qu''il est capable d''éliminer ses adversaires d''un seul coup de poing. On le surnomme désormais One-Punch Man. Mais rapidement, l''euphorie du succès cède place à l''ennui, car lorsqu''on est si fort, les victoires perdent de leur saveur... ', 2, 'One', 'One Punch Man', 'Action', 'Japon', '2009-07-03', './public/assets/images/image_corver/One-Punch-Man.jpg'),
('Le monde appartient désormais aux Titans, des êtres gigantesques qui ont presque décimé l’Humanité. Voilà une centaine d’années, les derniers rescapés ont bâti une place forte, une cité cernée d’une haute muraille au sein de laquelle vivent aujourd’hui leurs descendants. Parqués, ignorants tout du monde extérieur, ils s’estiment au moins à l’abri de ces effroyables êtres qui ne feraient d’eux qu’une bouchée.', 4, 'Hajime Isayama', 'L''attaque des Titans', 'Action', 'Japon', '2009-09-09', './public/assets/images/image_corver/L_Attaque_des_Titans.jpg'),
('À une époque lointaine, deux adolescents s''adonnent à l''alchimie. La loi centrale de cette magie reprend le vieux principe de « rien ne se perd, rien ne se créé : tout se transforme ». En voulant ramener à la vie leur mère, morte de chagrin, ils perdent chacun plusieurs de leurs membres. Leur quête sera désormais simple : trouver la pierre philosophale afin de retrouver leurs corps originaux. ', 7, NULL, 'Fullmetal Alchemist', 'Action', 'Japon', '2001-07-01', './public/assets/images/image_corver/Fullmetal_Alchemist.jpg'),
('Le départ. Gon, le héros de notre histoire, décide de quitter son village natal pour aller passer le difficile examen qui l''autorisera à devenir un hunter et à marcher sur les traces de son père. En chemin, il fait la connaissance de Léolio et Kurapika qui vont rapidement devenir ses amis et compagnons de route. Tous trois parviennent sur le lieu de la première épreuve et doivent faire leurs preuves au milieu d''une horde de participants très motivés.', 8, 'Yoshihiro Togashi', 'Hunter X Hunter', 'Action', 'Japon', '1998-03-03', './public/assets/images/image_corver/Hunter_X_Hunter.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `action`
--
ALTER TABLE `action`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
