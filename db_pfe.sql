-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Dim 05 Mai 2013 à 21:17
-- Version du serveur: 5.1.36
-- Version de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `db_pfe`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usernam` varchar(20) NOT NULL,
  `mot_de_passe` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `usernam`, `mot_de_passe`) VALUES
(1, 'test', 'test'),
(2, 'walid', 'walid6626');

-- --------------------------------------------------------

--
-- Structure de la table `geolocalisation`
--

CREATE TABLE IF NOT EXISTS `geolocalisation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(1) NOT NULL,
  `select_id` int(11) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=55 ;

--
-- Contenu de la table `geolocalisation`
--

INSERT INTO `geolocalisation` (`id`, `type`, `select_id`, `longitude`, `latitude`) VALUES
(1, 'h', 3, '35.765715', '10.759258'),
(3, 'h', 1, '36.398522', '10.610604'),
(4, 'h', 2, '36.398522', '10.610604'),
(5, 'h', 4, '33.825714', '11.026915'),
(6, 'h', 5, '35.537432', '11.031725'),
(7, 'h', 105, '35.855448', '10.617653'),
(8, 'h', 108, '35.763865', '10.721905'),
(9, 'h', 109, '36.401514', '10.63358'),
(10, 'h', 110, '36.398988', '10.566423'),
(11, 'h', 111, '36.400361', '10.616269'),
(12, 'h', 112, '36.355621', '10.529387'),
(13, 'h', 113, '36.374977', '10.538678'),
(15, 'p', 1, '36.398522', '10.610604'),
(16, 'p', 2, '33.840069', '10.995555'),
(17, 'p', 3, '35.765715', '10.759258'),
(18, 'p', 4, '33.825714', '11.026915'),
(20, 'v', 1, '36.398522', '10.610604'),
(21, 'v', 3, '35.765715', '10.759258'),
(22, 'v', 4, '33.825714', '11.026915'),
(23, 'v', 5, '51.232258', '7.23587'),
(24, 'v', 7, '51.232258', '7.23587'),
(25, 'v', 8, '48.862423', '2.328741'),
(45, 'h', 130, '46.75984', '1.738281');

-- --------------------------------------------------------

--
-- Structure de la table `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `star` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `description2` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=132 ;

--
-- Contenu de la table `hotel`
--

INSERT INTO `hotel` (`id`, `nom`, `adresse`, `star`, `prix`, `description`, `description2`) VALUES
(1, 'Mouradi ', 'Zone touristique Yasmine Hammamet, Hammamet 8050, ', 4, 25, 'Faites une pause et profitez d''un séjour magnifique au Mouradi Hammamet', 'L’Hotel El Mouradi Hammamet se trouve dans la station touristique de Yasmine Hammamet , directement en bord de mer, en face d’une plage magnifique. Le parc de loisirs Carthage Land et à quelque 200m et à 500 m de l’hôtel se situe la 1ère patinoire de Tunisie. Le casino est à 700 m environ et jusqu’au centre de Hammamet, ce ne sont que 8 km. Les golfeurs trouveront 2 parcours situés à 6 km de l’établissement et l’aéroport de Tunis-Carthage est à 80 km. Nous mettons à la disposition de nos clients des chambres doubles, triples et des suites Junior. Les chambres sont équipées de climatisation, terrasse ou balcon, salle de bains complète avec sèche-cheveux, téléphone direct, télévision par satellite, minibar, coffre-fort et wifi. Notre hôtel compte 4 restaurants et 3 bars : le restaurant buffet Nesrine, le restaurant à la carte Miskellil, la pizzeria Narcisse, l’Iris Saloon Bar, le Magnolia Bar américain, l’Orchidee Poolbar, L’El Ons Café maure et le Broadway Disco Bar. Parmi tant d’autres '),
(2, 'EL Mouradi ', 'Hamman Sousse | 4089 Port El Kantaoui, Port El Kan', 4, 20, 'Passez un agréable séjour de détente gracieuse et des moments bénéfiques a EL Mouradi Palace', 'L’Hotel El Mouradi Hammamet se trouve dans la station touristique de Yasmine Hammamet, directement en bord de mer, en face d’une plage magnifique. Le parc de loisirs Carthage Land et à quelque 200m et à 500 m de l’hôtel se situe la 1ère patinoire de Tunisie. Le casino est à 700 m environ et jusqu’au centre de Hammamet, ce ne sont que 8 km. Les golfeurs trouveront 2 parcours situés à 6 km de l’établissement et l’aéroport de Tunis-Carthage est à 80 km. Nous mettons à la disposition de nos clients des chambres doubles, triples et des suites Junior. Les chambres sont équipées de climatisation, terrasse ou balcon, salle de bains complète avec sèche-cheveux, téléphone direct, télévision par satellite, minibar, coffre-fort et wifi. Notre hôtel compte 4 restaurants et 3 bars : le restaurant buffet Nesrine, le restaurant à la carte Miskellil, la pizzeria Narcisse, l’Iris Saloon Bar, le Magnolia Bar américain, l’Orchidee Poolbar, L’El Ons Café maure et le Broadway Disco Bar. Parmi tant d’autres '),
(3, 'Houda', 'en plein centre de la station Yasmine Hammamet ', 4, 21, 'Offrez-vous un moment de pur bonheur à bas prix grâce à l''hôtel Houda Yasmine Hammamet ', 'Cet hôtel 4 étoiles est situé à 8 km du centre-ville de Yasmine Hammamet et à 200 mètres de la plage ainsi que du port de plaisance. Il dispose également d''une piscine extérieure.  Les chambres du Houda Yasmine sont climatisées et pourvues d''un balcon. Elles comprennent toutes la télévision par satellite et un minibar.  L''hôtel abrite deux bars situés dans le hall et au bord de la piscine'),
(4, 'Green Palm', 'zone Touristique , Djerba ', 5, 30, 'Prenez du bon temps au sein de l''hôtel Green Palm, un temps de détente et de rêverie, de calme et de loisirs', 'Cet hôtel 4 étoiles est situé à 8 km du centre-ville de Yasmine Hammamet et à 200 mètres de la plage ainsi que du port de plaisance. Il dispose également d''une piscine extérieure.  Les chambres du Houda Yasmine sont climatisées et pourvues d''un balcon. Elles comprennent toutes la télévision par satellite et un minibar.  L''hôtel abrite deux bars situés dans le hall et au bord de la piscine.'),
(5, 'Nour Palace', 'Zone touristique Mahdia, 5111 Mahdia, Mahdia, Tuni', 5, 43, 'Découvrez Mahdia a travers l''hôtel Nour Palace Resort', ''),
(105, 'Ksar Jérid', 'Route de Nefta, 2200, Tozeur TUNISIE B.P 201 2200,', 4, 68, 'Route de Nefta, 2200, Tozeur TUNISIE B.P 201 2200, Tozeur Ville', 'Parfaitement conçu pour votre confort et votre bien être, l hôtel KSAR JERID vient combler vos souhaits, tantôt d aventures et de rêves, tantôt de relaxation et de repos.  Entièrement climatisé, l''hôtel de catégorie 4 étoiles est conçu dans un style de palais saharien « Ksar », comprenant trois patios :  patio « La Fontaine », patio « La Piscine » et patio « La Terrasse ».  Son architecture singulière propose l?originale disposition des briques de Tozeur en dessins géométriques, caractéristique de la région du Djérid.  Composé de 109 habitations dont 3 suites aménagées pour votre confort et bien être, d un salon bar, un bar Internet, un café  maure, un bar donnant sur la piscine, d?une salle TV à la réception et d?un restaurant.  Pour toute réunion, congrès ou séminaire, une salle polyvalente est à votre disposition'),
(108, 'Itropika', 'Tabarka', 4, 68, 'Vous cherchez le loisir !Ne partez pas loin ! L''hôtel Itropika 4* est la meilleur adresse', 'Grâce à son site d''implantation, à la fois en bordure de mer et dans un très beau cadre de verdure et à proximité immédiate du port de plaisance et du centre ville et a 10mn de l?æréport, l''hôtel Itropika de catégorie 4 étoiles offre la garantie de vacances réussies et paisibles.Pour votre confort, l''hôtel comprend deux restaurants offrant des repas à la carte et un buffet ainsi qu''un barbecue et une piste de danse en plein air jouxtant une piscine plage somptueuse donnant directement sur la mer,et une magnifique piscine couverte et une salle de fitness.'),
(109, 'Vincci Nozha ', 'Zone Touristique Mrezga. 8050 Hammamet', 5, 43, 'Vous voulez changer d''atmosphère le Vincci Nozha Beach et votre meilleure destination', 'Présentation : Vincci Nozha Beach est un hôtel renouvelé en 2009. C?est un hôtel connu par sa belle plage de sable fin et son ambiance qui vous permettent de passer un agréable séjour en famille. Hébergement : L''hôtel comprend 447 chambres confortables et climatisées qui donnent sur vue de jardin ou vue de mer. Toutes les chambres sont équipées d?un téléphone, salle de bain, TV avec satellite, Mini-bar, Sèche cheveux, Coffre et connexion Wi-Fi.  L''hôtel assure un room service 24h/24h. Bars et Restaurants : Vincci Nozha Beach dispose d''un restaurant principal sous forme en buffet, restaurant italien, restaurant tunisien et Restaurant à la plage. Il dispose aussi de cing bars et un café maure. Loisirs et Sports : Pour le loisir, l''hôtel dispose d?une piscine d?eau douce, piscine avec toboggans, piscine pour enfants, piscine couverte, billard, bowling, centre de Spa et sauna.'),
(110, 'Bel AIR ', 'Bel Air 3 * est la meilleur adresse pour un séjour en famille', 4, 54, 'Bel Air 3 * est la meilleur adresse pour un séjour en famille', 'L hôtel Bel Air situé à Hammamet, une ville balnéaire, fleuron du tourisme tunisien est au coeur d''une zone touristique animée, à 6km du centre ville, 3km de la zone touristique Yasmine Hammamet et à 500m d''une magnifique plage de sable fin. L hôtel est doté de 184 unités d''hébergement : 166 chambres à usage double et triple, 6 appartements, 6 chambres communicantes.  Toutes spacieuses et bien agencées, climatisées et dotées de salle de bain (certaines avec sèche-cheveux), téléphone, TV satellite, (minibar sur demande), balcon ou terrasse.Un restaurant buffet, deux restaurants pizzeria-terrasse à la carte dont l?un autour de la piscine. Un Beach Bar Barbecue (cuisine méditerranéenne). Un Bar central, un Disco-Bar, Pub Anglais (avec animation et Karaoké).'),
(111, 'Yadis', 'Route touristique Nord-Merazka, Hammamet 8050, Tunisie', 4, 34, 'Vous cherchez la Détente ! L''hôtel Yadis Hammamet 4* est la meilleur destination', 'Situation :  A six kilomètres de la centre ville de Nabeul, à six kilomètres de la ville de Hammamet, à 300 mètres d?une belle mer et au sein de la zone touristique Yasmine Hammamet est implanté l''hôtel Yadis Hammamet. Il a été rénové en 2008. L?hôtel est de catégorie de quatre étoiles.  Chambres et hébergement :  L?hôtel propose de chambres très merveilleuses. Il doute 220 chambres et cinq suites. Elles sont climatisées et chauffées et bien équipées. Elles possèdent une télévision avec satellite, un téléphone avec une ligne directe, un mini bar, un coffre fort, une connexion internement, une salle de bain et une toilette.  Restaurant et gastronomie :  L hôtel offre à ses clients les meilleurs plats. Il doute un grand restaurant avec une terrasse au bord de la piscine. Les plats sont très variés et présentés sous forme de buffet. Le service dans le restaurant est très adorable. Vous trouvez aussi de bars.'),
(112, 'Zodiac ', 'zone touristique Yasmine Hammamet', 5, 56, 'Profitez d''un séjour détente à l''Hôtel Zodiac Hammamet 4*', 'L''Hotel Zodiac se trouve à Yasmine Hammamet, à 10 minutes du parcours de golf Citrus et Yasmine. Il est à 200 mètres de sa plage privée qui comprend des chaises longues et des parasols gratuits.  Les chambres sont dotées de la climatisation, d''une salle de bains et d''une télévision satellite.  Rendez-vous dans le centre de bien-être qui abrite une piscine chauffée, un hammam et une douche Vichy. Un salon de coiffure, avec soins de beauté et massages, est également à votre disposition.  Les repas sont servis dans le restaurant principal. En été, profitez du café avec espace barbecue et du stand de glace à côté de la piscine.  L''Hotel Zodiac est à une heure de route de l''aéroport Tunis-Carthage.   Général  restaurant, bar, réception ouverte 24h/24, chambres non-fumeurs, chambres / équipements pour mobilité réduite, coffre-fort, climatisation.  Activités  court de tennis, centre de remise en forme, salle de Jeu, massage, aire de jeu pour enfants, billard, tennis de table, bain turc / à va'),
(113, 'Lodge', 'yasmine hammamet', 5, 56, 'Oubliez tout et détendez-vous à Yasmine Hammamet grâce à l''hôtel Tunisia Lodge', 'Situation   Situé au coeur du site de Yasmine Hammamet, à 450 mètres d''une plage de sable (desservie par une navette toutes les 10 minutes en saison) et à quelques pas des nouvelles médinas et marina, l''hôtel Tunisia Lodge offre toutes les commodités d''un séjour tout confort.  Conçu avec charme pour des vacances sereines, l''hôtel est en total harmonie avec l''environnement. Inscrites dans un cadre verdoyant, les deux piscines de l''hôtel sont entourées de cascades et orangers, de palmiers et chaises longues.  Yasmine-Hammamet est un espace de vie touristique développé il y a une dizaine d''année et qui s''étend sur 4 kilomètres de littoral : vous y découvrirez ses 30 000 m2 de jardins aménagées, son agréable esplanade face à la plage, lieu idéal de promenade, ainsi que bars, discothèques, restaurants, casino, parc de jeu et de loisirs et même une médina reconstituée autour de son souk.'),
(130, ' Sun Beach Resort ', ' Hammam-Plage      ', 4, 53, '   Ce complexe est situé directement sur la plage dans un endroit isolé.      ', '   Ce complexe est situé directement sur la plage dans un endroit isolé. Il propose des chambres bien équipées et climatisées avec terrasse ou balcon et une piscine de style lagon en plein air.\r\n\r\nVous pourrez vous détendre sur la terrasse extérieure avec chaises longues et parasols au bord de la piscine.\r\n\r\nLe Sun Beach Resort propose de nombreuses activités, y compris les sports nautiques, planche à voile et canoë. Il y a aussi un club pour enfants et une aire de jeux pour enfants.\r\n\r\nLa station dispose de plusieurs restaurants qui servent une cuisine internationale et des spécialités tunisiennes. Il y a également une gamme de bars, et des rafraîchissements peuvent être pris tout au long de la journée.      ');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `path` varchar(50) NOT NULL,
  `select_id` int(11) NOT NULL,
  `type` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=174 ;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`id`, `nom`, `path`, `select_id`, `type`) VALUES
(1, 'img1.jpg', 'images_hotel/img1.jpg', 1, 'h'),
(2, 'img2.jpg', 'images_hotel/img2.jpg', 2, 'h'),
(3, 'img3.jpg', 'images_hotel/img3.jpg', 3, 'h'),
(4, 'img4.jpg', 'images_hotel/img4.jpg', 4, 'h'),
(7, 'img1.jpg', 'images_promos/img1.jpg', 1, 'p'),
(8, 'img2.jpg', 'images_promos/img2.jpg', 2, 'p'),
(9, 'img3.jpg', 'images_promos/img3.jpg', 3, 'p'),
(10, 'img4.jpg', 'images_promos/img4.jpg', 4, 'p'),
(21, 'img10.jpg', 'images_voyage/img10.jpg', 3, 'v'),
(12, 'img2.jpg', 'images_voyage/img2.jpg', 2, 'v'),
(13, 'img3.jpg', 'images_voyage/img3.jpg', 3, 'v'),
(28, 'img16.jpg', 'images_voyage/img16.jpg', 5, 'v'),
(5, 'img5.jpg', 'images_hotel/img5.jpg', 5, 'h'),
(27, 'img15.jpg', 'images_voyage/img15.jpg', 5, 'v'),
(17, 'img6.jpg', 'images_voyage/img6.jpg', 6, 'v'),
(18, 'img7.jpg', 'images_voyage/img7.jpg', 1, 'v'),
(19, 'img8.jpg', 'images_voyage/img8.jpg', 1, 'v'),
(20, 'img9.jpg', 'images_voyage/img9.jpg', 1, 'v'),
(22, 'img11.jpg', 'images_voyage/img11.jpg', 3, 'v'),
(23, 'img12.jpg', 'images_voyage/img12.jpg', 4, 'v'),
(24, 'img13.jpg', 'images_voyage/img13.jpg', 4, 'v'),
(25, 'img14.jpg', 'images_voyage/img14.jpg', 4, 'v'),
(29, 'img17.jpg', 'images_voyage/img17.jpg', 5, 'v'),
(30, 'img18.jpg', 'images_voyage/img18.jpg', 7, 'v'),
(31, 'img19.jpg', 'images_voyage/img19.jpg', 7, 'v'),
(32, 'img20.jpg', 'images_voyage/img20.jpg', 7, 'v'),
(33, 'img21.jpg', 'images_voyage/img21.jpg', 8, 'v'),
(34, 'img22.jpg', 'images_voyage/img22.jpg', 8, 'v'),
(35, 'img23.jpg', 'images_voyage/img23.jpg', 8, 'v'),
(82, 'hotel1.jpg', 'images_hotel/hotel1.jpg', 105, 'h'),
(83, 'hotel2.jpg', 'images_hotel/hotel2.jpg', 105, 'h'),
(84, 'hotel3.jpg', 'images_hotel/hotel3.jpg', 105, 'h'),
(100, 'Bel-AIR2.jpg', 'images_hotel/Bel-AIR2.jpg', 110, 'h'),
(93, 'accueil-131.jpg', 'images_hotel/accueil-131.jpg', 108, 'h'),
(94, 'hotel5.jpg', 'images_hotel/hotel5.jpg', 108, 'h'),
(95, 'hotel6.jpg', 'images_hotel/hotel6.jpg', 108, 'h'),
(96, 'hotel8.jpg', 'images_hotel/hotel8.jpg', 109, 'h'),
(97, 'hotel7.jpg', 'images_hotel/hotel7.jpg', 109, 'h'),
(98, 'hotel6.jpg', 'images_hotel/hotel6.jpg', 109, 'h'),
(99, 'Bel-AIR1.jpg', 'images_hotel/Bel-AIR1.jpg', 110, 'h'),
(101, 'Bel-AIR3.jpg', 'images_hotel/Bel-AIR3.jpg', 110, 'h'),
(102, 'Yadis-Hammamet1.jpg', 'images_hotel/Yadis-Hammamet1.jpg', 111, 'h'),
(103, 'Yadis-Hammamet2.jpg', 'images_hotel/Yadis-Hammamet2.jpg', 111, 'h'),
(104, 'Yadis-Hammamet3.jpg', 'images_hotel/Yadis-Hammamet3.jpg', 111, 'h'),
(105, 'Zodiac-1.jpg', 'images_hotel/Zodiac-1.jpg', 112, 'h'),
(106, 'Zodiac-2.jpg', 'images_hotel/Zodiac-2.jpg', 112, 'h'),
(144, 'Penguins.jpg', 'images_voyage/Penguins.jpg', 16, 'v'),
(108, 'Lodge1.jpg', 'images_hotel/Lodge1.jpg', 113, 'h'),
(109, 'Lodge2.jpg', 'images_hotel/Lodge2.jpg', 113, 'h'),
(110, 'Lodge3.jpg', 'images_hotel/Lodge3.jpg', 113, 'h'),
(111, 'mouradi1.jpg', 'images_hotel/mouradi1.jpg', 1, 'h'),
(112, 'mouradi2.jpg', 'images_hotel/mouradi2.jpg', 1, 'h'),
(161, 'ty-ly-chargement.jpg', 'images_promos/ty-ly-chargement.jpg', 4, 'p'),
(160, 'ty-ly-chargement-1-.jpg', 'images_promos/ty-ly-chargement-1-.jpg', 2, 'p'),
(158, 'ty-ly-chargement-4-.jpg', 'images_hotel/ty-ly-chargement-4-.jpg', 130, 'h'),
(157, 'ty-ly-chargement-3-.jpg', 'images_hotel/ty-ly-chargement-3-.jpg', 130, 'h'),
(156, 'ty-ly-chargement-2-.jpg', 'images_hotel/ty-ly-chargement-2-.jpg', 130, 'h');

-- --------------------------------------------------------

--
-- Structure de la table `livredor`
--

CREATE TABLE IF NOT EXISTS `livredor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` varchar(255) NOT NULL,
  `id_select` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Contenu de la table `livredor`
--

INSERT INTO `livredor` (`id`, `nom`, `email`, `message`, `id_select`, `type`) VALUES
(26, 'wiss', 'wkhelifi@hotmail.fr', 'merci c''est bla bla bla bla bla blabla bla blabla bla bla', 1, 'p'),
(25, 'walid', 'khelifiwaleed@gmail.com', 'ok quelle est votre probleme', 1, 'p'),
(24, 'wiss', 'wkhelifi@hotmail.fr', 'j''ai un probleme aider moi SVP', 1, 'p'),
(23, 'walid', 'khelifiwaleed@gmail.com', 'merci b1 bizgous', 1, 'h'),
(22, 'oussama', 'khelifiwaleed@gmail.com', 'j''aime votre sire', 1, 'h'),
(27, 'oussama', 'wkhelifi1@gmail.com', 'j''aime cette voyage :)', 1, 'v'),
(28, 'walid', 'khelifiwaleed@gmail.com', 'bon voyage oussama', 1, 'v'),
(29, 'oussama', 'wkhelifi1@gmail.com', 'merci bien', 1, 'v'),
(31, 'walid', 'wkhelifi64@gmail.com', 'c bien tous valide', 113, 'h'),
(32, 'walid', 'wkhelifi64@gmail.com', 'c bien tous valide', 113, 'h'),
(33, 'walid', 'wkhelifi64@gmail.com', 'c bien tous valide', 3, 'p'),
(34, 'walid', 'wkhelifi64@gmail.com', 'c bien tous valide', 8, 'v'),
(35, 'Isaam', 'issam@gmail.com', 'j''aime tes voyages', 111, 'h'),
(36, 'Isaam', 'issam@gmail.com', 'j''aime tes voyages', 111, 'h'),
(37, 'Hamza', 'Hammza@gmail.com', 'j''aime tes offre :)', 112, 'h');

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE IF NOT EXISTS `promotion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_h` varchar(25) NOT NULL,
  `adresse_h` varchar(50) NOT NULL,
  `star` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `description2` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `promotion`
--

INSERT INTO `promotion` (`id`, `nom_h`, `adresse_h`, `star`, `prix`, `description`, `description2`) VALUES
(1, 'Vincci Djerba', 'Zone Touristique Djerba ', 4, 21, 'Faites une pause et profitez d''un séjour magnifique au Vincci Djerba Resort', 'Cet hôtel 4 étoiles est situé à 400 mètres d''une plage privée à Djerba. Il dispose de piscines extérieures et d''un centre de bien-être, proposant un sauna, un hammam, des soins de beauté et des massages.  Les chambres climatisées du complexe Vincci donnent sur un grand jardin central. Elles sont toutes équipées d''un balcon ou d''une terrasse.  Pendant votre séjour, vous pourrez déguster des plats internationaux et traditionnels servis sous forme de buffet ou des grillades. Le complexe abrite également un café oriental et plusieurs bars, dont un près de la piscine.  L''espace piscine est entouré de terrasses, de chaises longues et de bassins pour adultes et enfants.  Le Vincci Djerba met à votre disposition diverses installations sportives, notamment un terrain de tir à l''arc, un centre de remise en forme et des courts de tennis. Un club pour enfant est également proposé.'),
(2, 'Joya Paradise', 'Djerba ', 3, 18, 'Partez à Djerba à prix irrésistible à l''hôtel Joya Paradise', 'Disposant de 2 piscines, d''un court de tennis et d''un spa avec hammam, cet hôtel 4 étoiles se trouve à 400 mètres de sa plage privée. Ses chambres climatisées sont dotées d''une télévision par satellite.  Chaque chambre spacieuse présente une décoration tunisienne moderne et certaines sont pourvues d''un balcon offrant une vue sur la piscine extérieure. Toutes les chambres possèdent également une salle de bains privative et un minibar.  Le restaurant vous proposera une cuisine internationale et tunisienne et vous pourrez savourer une boisson au bar Peppermint. Tous les matins, le Joya Paradise & Spa vous préparera également un petit-déjeuner buffet.  Le soir, l''hôtel présente des spectacles avec des charmeurs de serpents et des magiciens ; vous pourrez également vous rendre à la discothèque Titanic. Une connexion Wi-Fi est mise gratuitement à votre disposition dans les parties communes.  L''aéroport de Djerba-Zarzis se trouve à 20 km et vous pourrez louer une voiture sur place.'),
(3, 'Skanes Serail', 'Monastir', 4, 17, 'Appréciez vos vacances dans le Luxueux Hôtel , Skanes Serail', 'Disposant de 2 piscines, d''un court de tennis et d''un spa avec hammam, cet hôtel 4 étoiles se trouve à 400 mètres de sa plage privée. Ses chambres climatisées sont dotées d''une télévision par satellite.  Chaque chambre spacieuse présente une décoration tunisienne moderne et certaines sont pourvues d''un balcon offrant une vue sur la piscine extérieure. Toutes les chambres possèdent également une salle de bains privative et un minibar.  Le restaurant vous proposera une cuisine internationale et tunisienne et vous pourrez savourer une boisson au bar Peppermint. Tous les matins, le Joya Paradise & Spa vous préparera également un petit-déjeuner buffet.  Le soir, l''hôtel présente des spectacles avec des charmeurs de serpents et des magiciens ; vous pourrez également vous rendre à la discothèque Titanic. Une connexion Wi-Fi est mise gratuitement à votre disposition dans les parties communes.  L''aéroport de Djerba-Zarzis se trouve à 20 km et vous pourrez louer une voiture sur place.'),
(4, 'Delphin el Ribat ', 'Avenue Habib Bourguiba , Monastir 5000, Tunisie ', 4, 20, 'Partez à Monastir avec des prix choc à l''hôtel Delphin el Ribat', 'L''hôtel Delphin Ribat est situé à 800 mètres de la plage privée de l''hôtel et à 5 kilomètres du port de plaisance de Monastir.  Les 180 chambres sont confortables, modernes et dotées de tous les équipements nécessaires. Toutes disposent d''un balcon. Elles offrent une vue sur la ville ou le jardin.  Vous apprécierez la situation en bord de mer, les services et les activités proposées par l''hôtel. Vous pourrez vous détendre dans la piscine ou profiter de la plage privée située à proximité.');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(11) NOT NULL,
  `nom_type` varchar(32) NOT NULL,
  `id_type` int(11) NOT NULL,
  `nom_client` varchar(10) NOT NULL,
  `prenom_client` varchar(15) NOT NULL,
  `email_client` varchar(40) NOT NULL,
  `tel_client` int(8) NOT NULL,
  `cin_client` int(8) NOT NULL,
  `nb_bebe` int(11) NOT NULL,
  `nb_enfant` int(11) NOT NULL,
  `date` date NOT NULL,
  `nb_nuit` int(11) NOT NULL,
  `chambre` int(11) NOT NULL,
  `prix_final` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=92 ;

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`id`, `type`, `nom_type`, `id_type`, `nom_client`, `prenom_client`, `email_client`, `tel_client`, `cin_client`, `nb_bebe`, `nb_enfant`, `date`, `nb_nuit`, `chambre`, `prix_final`) VALUES
(84, 'promotion', 'Skanes Serail', 3, 'khelifi', 'walid', 'khelifiwaleed@gmail.com', 22205879, 14207662, 0, 0, '1970-01-01', 1, 1, 17);

-- --------------------------------------------------------

--
-- Structure de la table `voyage`
--

CREATE TABLE IF NOT EXISTS `voyage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL,
  `prix` double NOT NULL,
  `date1` date NOT NULL,
  `date2` date NOT NULL,
  `PROGRAMME` varchar(9999) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `voyage`
--

INSERT INTO `voyage` (`id`, `nom`, `description`, `prix`, `date1`, `date2`, `PROGRAMME`) VALUES
(3, ' ISTANBUL5 jour(s)', ' Depart de l''Aeroport TUNIS CARTHAGE T2, vers ISTANBUL. Arrivee, Accueil, puis transfert a l''hotel et logement.  ', 545, '1970-01-01', '1970-01-01', ' Jour 1:  Départ de l’Aéroport TUNIS CARTHAGE T2, vers ISTANBUL. Arrivée, Accueil, puis transfert à l’hôtel et logement.        Jour 2:  Petit déjeuner à l’hôtel, puis départ en excursion d’une ½ journée pour une visite des Monuments Historiques : Mosquée Bleue, Musé de Topkapi, Hippodrome, retour à l’hôtel, soirée libre.     Jour 3 :  Petit déjeuner à l’hôtel, Croisière d’une journée sur la mer de MARMARA vers LES ILES DES PRINCES et tour de l’île en Calèche. Déjeuner (à la charge du client), Après midi libre.     Jour 4:  Petit déjeuner à l’hôtel, Départ en excursion d’une journée pour la visite de MINIATURK, ou a été bâtit tout les œuvres connues en Turquie en Mini Maquette, L’après Midi retour à l’hôtel. (EN EXTRA)     Jour 5 :  Petit déjeuner à l’hôtel, partir en Croisière d’une ½ journée sur le Bosphore par bateau (Visite de la cote asiatique Colline de Camlca, Bostangi, Capitole Pont du Bosphore). Après Midi libre.     Jour 6 :  Petit déjeuner à l’hôtel, journée libre ou possibilité de partir une journée vers BURSA première capitale de l’Empire Ottoman. Visite de la Grande Mosquée, les magasins de soierie, la Mosquée Verte, montée au foret ULUDAG par téléférique. (EN EXTRA) • Transfert à l ‘aéroport d’ISTANBUL, retour à TUNIS CARTHAGE T2 (Pour les programmes 06jours/05nuits)        Jour 7:  Petit déjeuner à l’hôtel, matinée libre puis transfert à l ‘aéroport d’ISTANBUL, pour le retour à TUNIS CARTHAGE T2     '),
(4, 'LA MALAISIE 7 JOURS/6NUITS', 'LA MALAISIE  04 Nuits L’ILE DE LANGKAWI - 03 Nuits KUALA LAMPUR  Du 17 Au 26 Mars 2013', 2334, '0000-00-00', '0000-00-00', 'Jour 1:  Regroupement à l’aéroport Tunis Carthage à 12h00 ; départ sur le vol de QATAR AIRWAYS QR551 décollage 15h00 à destination DOHA. Arrivée vers 22H10.        Jour 2:  Continuation sur le vol QR624 à 01h30, Arrivée à l’aéroport international de KUALA LAMPUR à 14h10, regroupement pour l’envol vers l’archipel paradisiaque LANGKAWI sur le vol AK6314 à 18H25. Arrivée à 19H25, assistance et transfert à hôtel HOLLIDAY VILLA 4****. Attribution des chambres puis réunion avec le guide local pour présenter les excursions. Le soir Dîner a l’hôtel     Jour 3 :  Petit déjeuner, 09h00 départ en excursion de Mangrove « tour en bateau ». qui vous conduit à travers plusieurs grottes calcaires, des mangroves à l''intérieur des terres, et aux forêts denses. la forêt de Kilim, La plus grande forêt de mangrove couvre environ 1309 ha. Le soir Dîner a l’hôtel     Jour 4:  Petit déjeuner, En option, départ en excursion sur une autre île pour passer toute la journée en DIVING et en SWIMMING avec des professionnels, déjeuner sur place et l’après midi retour à l’hôtel (extra). Le soir Dîner pour déguster la cuisine asiatique à l’hôtel.     Jour 5 :  Petit déjeuner à l’hôtel, plusieurs excursions en options sont disponibles : Le téléphérique LANGKAWI, une cascade dans la jungle tropicale,… Dîner à l’hôtel soirée libre.     Jour 6 :  Petit déjeuner à l’hôtel, check out à 11H00 puis départ à l’aéroport de LANGKAWI et envol vers KUALA LUMPUR vol AK6305 à 13H55. Arrivée à KUALA à 15H05, regroupement puis transfert vers l’hôtel PRINCE 5*****. Attribution des chambres, fin de journée libre.        Jour 7:  Petit déjeuner à l’hôtel, 09h00 Départ avec notre guide pour un Tour de ville de KUALA, visite du PALAIS ROYAL, la mosquée, le lieu religieux hindou Batu caves et le temple chinois thean hou temple. Un tour qui vous permet de découvrir la mosaïque culturelle et religieuse de La Malaisie. … Retour à l’hôtel. Soirée libre        Jour 8:  Petit déjeuner à l’hôtel – journée libre où la possibilité de visiter plusieurs endroits comme le quartier chinois, le central Market, le jardin des oiseaux ou plusieurs musées dans la ville de Kuala Lumpur. Le soir départ pour dîner à MANARA KUALA LUMPUR (Venez toucher le ciel) 276 Mètre de hauteur. Retour à l’hôtel.(extra)        Jour 9:  Petit déjeuner à l’hôtel, check out puis départ à l’aéroport de KUALA LUMPUR et envol vers DOHA sur vol QR 621 à 10h10 Arrivée à 13H00. Regroupement puis Transfert pour passer une nuit dans un hôtel à DOHA à la charge de QATAR AIRWAYS, dîner et soirée libre.        Jour'),
(5, 'L’INDE 7 JOURS/6NUITS', 'L’INDE LE TRIANGLE D’OR  03 nuits Delhi - 03 nuits Jaipur - 02 nuits Agra – 01 nuit Doha  Du 20/03/2013 Au 30/03/2013 ', 2314, '0000-00-00', '0000-00-00', 'Jour 1:  Regroupement à l’aéroport Tunis Carthage à 12h00 ; départ sur le vol de QATAR AIRWAYS QR551 décollage 15h00 à destination DOHA. Arrivée vers 22H10.        Jour 2: DELHI  Continuation sur le vol QR234 à 01h25 Arrivée à l’aéroport de Delhi à 07h25, assistance et transfert à hôtel JAYPEE SIDDARTH Attribution des chambres. Après Midi départ pour un tour panoramique de OLD DELHI : Vous vous rendrez tout d’abord à Raj Ghat cendre mémorial de Gandhi puis visite de la mosquée « Jama Masjid », située au plein cœur. Construite en grès rouge en 1644, c’est sans doute la plus grande et la plus belle mosquée de l’INDE. . Promenade en rickshaws dans le ruelle de Chandni Chowk .Vous visiterez ensuite le Fort Rouge de l’extérieur « Lal Qila », situé juste en face de la mosquée. Il s’agit d’une immense et impressionnante forteresse en grès rouge, construite par les Moghols en 1639. Diner et nuit à l’hôtel.     Jour 3 : DELHI  Petit déjeuner à l’hôtel, Continuation de la visite de New Delhi » Porte de l’inde – India Gate, Palais Présidentielle puis visite de Temple Birla hindou et Temple Sikh – Bangla Sahib situe à connaught palace. Apres midi libre. Diner et nuit à l’hôtel.     Jour 4: DELHI/JAIPUR(265kms/05 ½ hrs)  Petit déjeuner, Départ par la route à destination de JAIPUR, capitale du Rajasthan. Arrivée et installation à l’hôtel COUNTRY INN, Un peu de temps libre pour votre découverte personnelle de la ville. Nous vous conseillons de vous rendre dans la vieille ville pour vous perdre dans les bazars très colorés et animés. Ce sera l’occasion pour certains d’entre vous, d’y effectuer quelques achats. On y trouve de très beaux tapis, de pierres précieuses, de bijoux en or et en argent, de sculptures en bois de santal, de poteries, de broderies, de miniatures sur ivoire et de tissus, Diner et nuit a l’hôtel.     Jour 5 : JAIPUR / AMBER / JAIPUR  Petit déjeuner, Départ pour une excursion au Fort d’AMBER, la vieille capitale, située à 25 km de Jaipur. Le Fort est construit sur une colline dans un très beau paysage. Vous accéderez au Palais à dos d’éléphant comme le faisaient les Maharajas de l’époque. Vous y visiterez le temple dédié à la déesse destructrice Kali, les salles des audiences privées situées autour d’un agréable petit jardin et de portes richement décorées. Du haut du sommet, vous aurez de très belles vues panoramiques pour prendre quelques clichés. Départ pour la visite de la ville rose de JAIPUR, capitale de la province du Rajasthan. Fondée par le prince astronome Maharaja Jai Singh II en 1727, c’est certainement la ville la plus colorée de l’INDE qui dégage une ambiance particulière avec ses bazars très animés,bouillonnants d’activités et bondés de marées humaines aux turbans multicolores. La vieille ville, sous forme d’un carré, est encerclée par un épais mur percé de neuf portes. Vous visiterez l’Observatoire « Jantar Mantar », construit en 1728 par le prince astronome Maharaja Jai Singh II, le Palais des Vents « Hawa Mahal », le Palais de Maharaja (City Palace) en grès rose et marbre blanc. Il a été transformé en musée par le dernier Maharaja et contient une belle collection d’armes et costumes. Puis vous ferrez un tour dans les jardins de Ram Niwas. Logement, Diner et nuit à l’hôtel.     Jour 6 : JAIPUR  Petit déjeuner à l’hôtel, Petit déjeuner puis journée entièrement libre pour flaner dans les bazars de Jaipur, Diner et nuit a l’hôtel.        Jour 7: JAIPUR / FATEHPUR SIKRI /AGRA (235kms/05 ½ hrs)  Petit déjeuner, Départ par la route vers FATEHPUR SIKRI, la ville rouge, située à 40 km d’Agra. Elle fut construite en 1569 pour être la capitale de l’Empereur Akbar et puis abandonnée dix ans après par manque d’eau. C’est grâce à cet abandon que la ville n’a subi aucune destruction pendant les guerres de la fin de l’époque Moghole et est restée complètement intacte. Vous y découvrirez les salles d’audiences, les salles privées, les résidences des ministres, le pilier regroupant les symboles de la religion Aine-é-Akbri, inventée par Akbar, le Punch Mahal, un curieux bâtiment de cinq étages ressemblant à un monument bouddhique, le caravansérail, le Palais de Birbal, la grande mosquée, le tombeau d’un saint musulman Cheikh Salim Chisti. Selon la légende, Akbar avait eu son fils Aurangzeb en priant ce saint. Ce tombeau est d’ailleurs toujours vénéré par les femmes désireuses d’avoir un enfant. Vous finirez votre découverte de cette ville fantôme par la Porte des Victoires « Buland Darwaza » la plus grande d’Asie mesurant 53 m de haut. Arrivée à AGRA et installation à l’hôtel JAYPEE PALACE, logement. Diner et nuit à l’hôtel.        Jour 8: AGRA  Petit déjeuner, Départ pour la visite d’AGRA. C’est une ville moghole tout comme Lahore au Pakistan. Mentionnée sous le nom de « Agara » dans la géographie de Ptolomée, un des généraux d’Alexandre le Grand, la ville connut son heure de gloire sous la domination des Moghols, qui y firent construire de magnifiques monuments. Vous commencerez votre découverte d’Agra par la visite du plus beau monument d’Inde, le « Taj Mahal ». Construit en 1632 par l’Empereur Shah Jahan en mémoire de son épouse, la Reine « Mumtaz Mahal ». C’est un magnifique monument d’amour fait de marbre blanc et considéré par beaucoup comme la huitième Merveille du Monde. Vous découvrirez ensuite le Fort Rouge, construit par l’Empereur Akbar en 1565. C’est une magnifique et imposante forteresse de grès rouge qui témoigne du raffinement et de la puissance de l’époque Moghole. Diner et nuit à l’hôtel.        Jour 9: AGRA /DELHI(200kms/04hrs)  Petit déjeuner, départ par la route à destination de DELHI située environ 200 kilomètres d’Agra. Déjeuner option en cours de route, Continuation par la route à destination de DELHI ; Diner et nuit à l’hôtel.        Jour 10: DELHI /DOHA  Petit déjeuner à l’hôtel, check out de l’hôtel et transfert à l’aéroport. Départ sur le vol QR235 à 09h10, Arrivée à DOHA à 11h15, transfert à l’hôtel pour une nuitée.        Jour 11: DOHA/TUNIS  déjeuner à l’hôtel, après le petit déjeuner, check out de l’hôtel et transfert à l’aéroport. Départ sur le vol QR552 à 08h25 pour arrivée à TUNIS CARTHAGE à 12h55. '),
(7, 'Marrakech 6 jours ', 'Le long d''une belle plage de sable     Des animations pour tous les goûts Une équipe à votre service', 2545, '0000-00-00', '0000-00-00', 'Jour 1:  Départ de TUNIS CARTHAGE vers CASA sur le vol AT571 à 11h35. Arrivée à l''aéroport MOHAMED V à 13h20, Accueil puis transfert vers Marrakech par bus touristique (2h30 de route), arrivée à l’hôtel, installation. Fin de journée libre. dîner à l’hôtel.        Jour 2:  Petit Déjeuner, Tour panoramique de la ville de MARRAKECH , PLACE DJEMAA EL FNA, KOUTOUBIA, JARDIN DE LA MENARA, LE MARCHE COUVERT ainsi que TOMBEAUX SAADIENS .. déjeuner inclus puis Retour à l hôtel. Dîner, soirée libre.     Jour 3 :  Petit déjeuner, départ pour OUARZATE (en 4X4) à travers le haut Atlas et particulièrement dans la montée du col Tizi N Tichka (2260m) , cette route offre un magnifique paysage montagneux, des petits villages disposées en gradins et un contraste de couleurs saisissant que de nombreux arrêts vous permettront de mieux apprécier, Arrivez a Ouarzate déjeuner puis visite de la ville : les kasbah de Taourirt et de Tifoultout (EXTRA)….retour a l’hôtel dîner et logement.     Jour 4:  Petit Déjeuner, Journée libre à Marrakech, Le Soir DINER GALA, au Fantasia Chez Ali (EXTRA). Retour a l’hôtel     Jour 5 :  Petit Déjeuner, puis départ vers CASA par bus (2h30 de route), arrivée a l’hôtel, installation. Fin de journée libre. dîner à l’hôtel.     Jour 6 :  Petit Déjeuner, tour de ville a Casa : visite de MOSQUEE HASSAN II, CORNICHE, La station balnéaire AINDHIAB, LA MADINA, PLACE MED V… Après retour à l’hôtel et dîner, soirée libre.        Jour 7:  Petit Déjeuner, Transfert à l’Aéroport de CASA pour le retour à Tunis sur le vol AT570 à 07h15 pour arrivée à TUNIS CARTHAGE à 10h45.   '),
(8, 'Paris Hotel IBIS Budget ', 'Depart de tunisie vers Paris Hotel IBIS Budget  sur vol EK 748 a 14H30. Arrivee a Paris a 22H55 Accueil puis Transfert a Hotel IBIS Budget ', 2341, '0000-00-00', '0000-00-00', 'Jour 1: Tunis/Paris  Rendez vous 2h00 avant le décollage (vol TU 716 a 8h35) Enregistrement des bagages et envol vers paris,  Arrivée, accueil et Transfert  à l’hôtel.  Installation dans les chambres. Après midi libre.  Nuit à l’hôtel.        Jour 2: Paris/Tour D’Orientation  Après le petit  déjeuner, départ en bus pour une ½ journée de visite guidée de PARIS. (Bibliothèque François Mitterrand, l’institut  du monde arabe, jardin des plantes, Mosquée de PARIS, Panthéon, Tombeau de Napoléon, l’école Militaire, Champs de Mars, Tour Eiffel, Trocadéro). Croisière en bateau sur la seine et montée au 2ème étage de la Tour Eiffel.  Retour par bus touristique.  Nuit à l’hôtel.     Jour 3: Paris/Versailles  Après le petit déjeuner, départ  en bus pour la visite du château de Versailles,  Visite des grands appartements du château, chambre du roi, la galerie des glaces et les jardins. Temps libre prés du canal.  Nuit à l’hôtel.     Jour 4: Paris/Disney Land  Après le petit déjeuner, départ en bus pour une  journée complète à Disney.  Nuit à l’hôtel.     Jour 5: Paris/Montmartre  Après le petit déjeuner, départ pour la visite de Montmartre, sacré cœur, quartier des peintres et le quartier de Barbes.  Ticket de métro à la charge des clients.     Jour 6: Paris  Petit déjeuner et journée libre. "SHOPPING"  Nuit à l’hôtel.        Jour 7: Paris/Tunis  Petit déjeuner, Temps libre selon horaire du vol transfert à l''Aéroport et retour à Tunis.   ');
