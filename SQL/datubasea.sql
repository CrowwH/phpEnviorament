-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: mysql
-- Tiempo de generación: 28-05-2024 a las 11:29:42
-- Versión del servidor: 8.4.0
-- Versión de PHP: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `paketeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bezeroa`
--

CREATE TABLE `bezeroa` (
  `id_Bezeroa` int NOT NULL,
  `izena` varchar(45) NOT NULL,
  `korreoa` varchar(45) NOT NULL,
  `nan` varchar(45) NOT NULL,
  `helbidea` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `bezeroa`
--

INSERT INTO `bezeroa` (`id_Bezeroa`, `izena`, `korreoa`, `nan`, `helbidea`) VALUES
(1, 'unai', 'unai@gmail.com', '72540408N', 'Santa Lutzi iribidea'),
(2, 'mikel', 'mikel@gmail.com', '741254B', 'Ave del Paraiso,13'),
(3, 'juan', 'juan@gmail.com', '7845621V', 'Iparragire bidea,3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `langilea`
--

CREATE TABLE `langilea` (
  `id_Langilea` int NOT NULL,
  `izena` varchar(45) NOT NULL,
  `abizena` varchar(45) NOT NULL,
  `nan` varchar(45) NOT NULL,
  `erabiltzailea` varchar(10) DEFAULT NULL,
  `pasahitza` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `herria` varchar(45) NOT NULL,
  `telefonoa` varchar(9) DEFAULT NULL,
  `langile_mota` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `langilea`
--

INSERT INTO `langilea` (`id_Langilea`, `izena`, `abizena`, `nan`, `erabiltzailea`, `pasahitza`, `herria`, `telefonoa`, `langile_mota`) VALUES
(1, 'Kike', 'Garcia', '74563214M', NULL, NULL, 'Tolosa', '630958412', 'Banatzailea'),
(2, 'Alberto', 'Martinez', '7845120G', 'alberto', '$2y$10$65p0WkytAstoD5XtxwJVP.n6e2zoGOCtkGtfzwLNxqSyNgw2EjRoe', 'Hernani', NULL, 'Kudeatzailea'),
(3, 'Aitor', 'García', '23420842H', NULL, NULL, 'Abaltzisketa', '612345678', ''),
(4, 'María', 'Etxeberria', '35417891J', NULL, NULL, 'Aduna', '622345678', ''),
(5, 'Iker', 'Martínez', '47415930K', NULL, NULL, 'Aizarnazabal', '632345678', ''),
(6, 'Juan', 'Garate', '59413849L', NULL, NULL, 'Albiztur', '642345678', ''),
(7, 'Unai', 'López', '71412878M', NULL, NULL, 'Alegia', '652345678', ''),
(8, 'Ana', 'Urrutia', '83411777N', NULL, NULL, 'Alkiza', '662345678', ''),
(9, 'Amaia', 'Sánchez', '95410666P', NULL, NULL, 'Altzaga', '672345678', ''),
(10, 'Luis', 'Zabala', '17409555Q', NULL, NULL, 'Altzo', '682345678', ''),
(11, 'Nerea', 'Pérez', '29408444R', NULL, NULL, 'Amezketa', '692345678', ''),
(12, 'Elena', 'Mendia', '41407333S', NULL, NULL, 'Andoain', '602345678', ''),
(13, 'Jon', 'González', '53406222T', NULL, NULL, 'Anoeta', '712345678', ''),
(14, 'Ane', 'Fernández', '65405111U', NULL, NULL, 'Antzuola', '722345678', ''),
(15, 'Asier', 'Hernández', '77404000V', NULL, NULL, 'Arama', '732345678', ''),
(16, 'Maite', 'Gómez', '89403999W', NULL, NULL, 'Aretxabaleta', '742345678', ''),
(17, 'Ibai', 'Sanz', '01402888X', NULL, NULL, 'Asteasu', '752345678', ''),
(18, 'Leire', 'Moreno', '13401777Y', NULL, NULL, 'Astigarraga', '762345678', ''),
(19, 'Eneko', 'Alvarez', '25401666Z', NULL, NULL, 'Ataun', '772345678', ''),
(20, 'Eider', 'Jiménez', '37400555A', NULL, NULL, 'Aia', '782345678', ''),
(21, 'Mikel', 'Ortega', '49399444B', NULL, NULL, 'Azkoitia', '792345678', ''),
(22, 'Ane', 'Iglesias', '61398333C', NULL, NULL, 'Aztpeitia', '802345678', ''),
(23, 'Iñigo', 'Ruíz', '73397222D', NULL, NULL, 'Baliarrain', '812345678', ''),
(24, 'Maider', 'Gutiérrez', '85396111E', NULL, NULL, 'Beasain', '822345678', ''),
(25, 'Ander', 'Herrero', '97395000F', NULL, NULL, 'Beizema', '832345678', ''),
(26, 'Miren', 'Serrano', '09394999G', NULL, NULL, 'Belauntza', '842345678', ''),
(27, 'Ekaitz', 'Vidal', '21393888H', NULL, NULL, 'Berastegi', '852345678', ''),
(28, 'Iraitz', 'Blanco', '33392777I', NULL, NULL, 'Berrobi', '862345678', ''),
(29, 'Maialen', 'Romero', '45391666J', NULL, NULL, 'Bidania-Goiatz', '872345678', ''),
(30, 'Gorka', 'Hidalgo', '57390555K', NULL, NULL, 'Zegama', '882345678', ''),
(31, 'Naiara', 'Marín', '69389444L', NULL, NULL, 'Zerain', '892345678', ''),
(32, 'Xabier', 'León', '81388333M', NULL, NULL, 'Zestoa', '902345678', ''),
(33, 'Ekiñe', 'Pascual', '93387222N', NULL, NULL, 'Zizurkil', '912345678', ''),
(34, 'Irantzu', 'Pastor', '05386111O', NULL, NULL, 'Deba', '922345678', ''),
(35, 'Koldo', 'Vega', '17385000P', NULL, NULL, 'Eibar', '932345678', ''),
(36, 'Aitziber', 'Carmona', '29383899Q', NULL, NULL, 'Elduain', '942345678', ''),
(37, 'Urko', 'Ferrer', '41382788R', NULL, NULL, 'Elgoibar', '952345678', ''),
(38, 'Mikel', 'Reyes', '53381677S', NULL, NULL, 'Elgeta', '962345678', ''),
(39, 'Iker', 'Moya', '65380566T', NULL, NULL, 'Eskoriatza', '972345678', ''),
(40, 'Eneko', 'Durán', '77379455U', NULL, NULL, 'Ezkio-Itsaso', '982345678', ''),
(41, 'Ane', 'Benítez', '89378344V', NULL, NULL, 'Hondarribi', '992345678', ''),
(42, 'Iñaki', 'Gil', '01377233W', NULL, NULL, 'Gaintza', '602345678', ''),
(43, 'Marta', 'Soto', '13376122X', NULL, NULL, 'Gabiria', '612345678', ''),
(44, 'Iratxe', 'Rey', '25375011Y', NULL, NULL, 'Gaztelu', '622345678', ''),
(45, 'Arkaitz', 'Dominguez', '37374900Z', NULL, NULL, 'Getaria', '632345678', ''),
(46, 'Ainhoa', 'Ortega', '49373799A', NULL, NULL, 'Hernani', '642345678', ''),
(47, 'Unai', 'Crespo', '61372688B', NULL, NULL, 'Hernialde', '652345678', ''),
(48, 'Ane', 'Muñoz', '73371577C', NULL, NULL, 'Ikaztegieta', '662345678', ''),
(49, 'Maite', 'Vázquez', '85370466D', NULL, NULL, 'Idiazabal', '672345678', ''),
(50, 'Beñat', 'Rubio', '97369355E', NULL, NULL, 'Irun', '682345678', ''),
(51, 'Maider', 'Lorenzo', '09368244F', NULL, NULL, 'Irura', '692345678', ''),
(52, 'Iker', 'Molina', '21367133G', NULL, NULL, 'Itsasondo', '702345678', ''),
(53, 'Eider', 'Ibáñez', '33366022H', NULL, NULL, 'Larraul', '712345678', ''),
(54, 'Naroa', 'Santos', '45364911I', NULL, NULL, 'Lasarte-Oria', '722345678', ''),
(55, 'Asier', 'Herrero', '57363700J', NULL, NULL, 'Lazkao', '732345678', ''),
(56, 'Miren', 'Vidal', '69362599K', NULL, NULL, 'Leaburu', '742345678', ''),
(57, 'Ibai', 'Cruz', '81361488L', NULL, NULL, 'Legazpi', '752345678', ''),
(58, 'Leire', 'González', '93360377M', NULL, NULL, 'Legorreta', '762345678', ''),
(59, 'Ane', 'Sánchez', '05359266N', NULL, NULL, 'Lezo', '772345678', ''),
(60, 'Asier', 'Martín', '17358155O', NULL, NULL, 'Lizartza', '782345829', ''),
(61, 'Ane', 'Larrea', '11382153N', NULL, NULL, 'Antzuola', '782345678', ''),
(62, 'Aitor', 'Garmendia', '22389743O', NULL, NULL, 'Arama', '792345678', ''),
(63, 'Maialen', 'Ibarguren', '33389473P', NULL, NULL, 'Aretxabaleta', '802345678', ''),
(64, 'Unai', 'Etxeberria', '44382153Q', NULL, NULL, 'Asteasu', '812345678', ''),
(65, 'Iker', 'Larrinaga', '55389743R', NULL, NULL, 'Astigarraga', '822345678', ''),
(66, 'Miren', 'Larrañaga', '66389473S', NULL, NULL, 'Ataun', '832345678', ''),
(67, 'Ekaitz', 'Izagirre', '77382153T', NULL, NULL, 'Aia', '842345678', ''),
(68, 'Urko', 'Aramburu', '88389743U', NULL, NULL, 'Azkoitia', '852345678', ''),
(69, 'Ane', 'Landa', '99389473V', NULL, NULL, 'Azpeitia', '862345678', ''),
(70, 'Maider', 'Olabarria', '10382153W', NULL, NULL, 'Baliarrain', '872345678', ''),
(71, 'Beñat', 'Alberdi', '11389743X', NULL, NULL, 'Beasain', '882345678', ''),
(72, 'Marta', 'Beristain', '22389473Y', NULL, NULL, 'Beizema', '892345678', ''),
(73, 'Iratxe', 'Zubizarreta', '33382153Z', NULL, NULL, 'Belauntza', '902345678', ''),
(74, 'Ane', 'Eizagirre', '44389744A', NULL, NULL, 'Berastegi', '912345678', ''),
(75, 'Iker', 'Lertxundi', '55389474B', NULL, NULL, 'Berrobi', '922345678', ''),
(76, 'Miren', 'Larrazabal', '66382154C', NULL, NULL, 'Bidania-Goiatz', '932345678', ''),
(77, 'Ekaitz', 'Arana', '77389744D', NULL, NULL, 'Zegama', '942345678', ''),
(78, 'Urko', 'Zabala', '88389474E', NULL, NULL, 'Zerain', '952345678', ''),
(79, 'Ane', 'Irizar', '99382154F', NULL, NULL, 'Zestoa', '962345678', ''),
(80, 'Maider', 'Larrinaga', '10389744G', NULL, NULL, 'Zizurkil', '972345678', ''),
(81, 'Beñat', 'Arrizabalaga', '11389474H', NULL, NULL, 'Deba', '982345678', ''),
(82, 'Marta', 'Ibarra', '22382154I', NULL, NULL, 'Eibar', '992345678', ''),
(83, 'Iratxe', 'González', '33389744J', NULL, NULL, 'Elduain', '602345678', ''),
(84, 'Ane', 'Etxeberria', '44389474K', NULL, NULL, 'Elgoibar', '612345678', ''),
(85, 'Iker', 'Arrieta', '55382154L', NULL, NULL, 'Elgeta', '622345678', ''),
(86, 'Miren', 'Egiguren', '66389744M', NULL, NULL, 'Eskoriatza', '632345678', ''),
(87, 'Ekaitz', 'Lekuona', '77389474N', NULL, NULL, 'Ezkio-Itsaso', '642345678', ''),
(88, 'Urko', 'Arrizabalaga', '88382154O', NULL, NULL, 'Hondarribi', '652345678', ''),
(89, 'Ane', 'Gallastegi', '99389744P', NULL, NULL, 'Gaintza', '662345678', ''),
(90, 'Maider', 'Eizmendi', '10389474Q', NULL, NULL, 'Gabiria', '672345678', ''),
(91, 'Beñat', 'Arana', '11382154R', NULL, NULL, 'Gaztelu', '682345678', ''),
(92, 'Marta', 'Etxeberria', '22389744S', NULL, NULL, 'Getaria', '692345678', ''),
(93, 'Iratxe', 'Arana', '33389474T', NULL, NULL, 'Hernani', '702345678', ''),
(94, 'Ane', 'González', '44382154U', NULL, NULL, 'Hernialde', '712345678', ''),
(95, 'Iker', 'Arrizabalaga', '55389744V', NULL, NULL, 'Ikaztegieta', '722345678', ''),
(96, 'Miren', 'Arrieta', '66389474W', NULL, NULL, 'Idiazabal', '732345678', ''),
(97, 'Ekaitz', 'Etxeberria', '77382154X', NULL, NULL, 'Irun', '742345678', ''),
(98, 'Urko', 'Lekuona', '88389744Y', NULL, NULL, 'Irura', '752345678', ''),
(99, 'Ane', 'Arratibel', '99389474Z', NULL, NULL, 'Itsasondo', '762345678', ''),
(100, 'Maider', 'Olabarria', '10382155A', NULL, NULL, 'Larraul', '772345678', ''),
(101, 'Beñat', 'Alberdi', '11389745B', NULL, NULL, 'Lasarte-Oria', '782345678', ''),
(102, 'Marta', 'Beristain', '22389475C', NULL, NULL, 'Lazkao', '792345678', ''),
(103, 'Iratxe', 'Zubizarreta', '33382155D', NULL, NULL, 'Leaburu', '802345678', ''),
(104, 'Ane', 'Eizagirre', '44389745E', NULL, NULL, 'Legazpi', '812345678', ''),
(105, 'Iker', 'Lertxundi', '55389475F', NULL, NULL, 'Legorreta', '822345678', ''),
(106, 'Miren', 'Larrazabal', '66382155G', NULL, NULL, 'Lezo', '832345678', ''),
(107, 'Ekaitz', 'Arana', '77389745H', NULL, NULL, 'Lizartza', '842345678', ''),
(108, 'Urko', 'Zabala', '88389475I', NULL, NULL, 'Mendaro', '852345678', ''),
(109, 'Ane', 'Irizar', '99382155J', NULL, NULL, 'Mutriku', '862345678', ''),
(110, 'Maider', 'Larrinaga', '10389745K', NULL, NULL, 'Mutiloa', '872345678', ''),
(111, 'Beñat', 'Arrizabalaga', '11389475L', NULL, NULL, 'Oiartzun', '882345678', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paketea`
--

CREATE TABLE `paketea` (
  `id_Paketea` int NOT NULL,
  `id_Bezeroa` int NOT NULL,
  `id_Langilea` int NOT NULL,
  `entregatze_helbidea` varchar(50) NOT NULL,
  `irteera_data` date NOT NULL,
  `entregatze_data` date NOT NULL,
  `iruzkinak` varchar(45) DEFAULT NULL,
  `pisua` double NOT NULL,
  `egoera` varchar(45) DEFAULT NULL,
  `data_ordua` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `paketea`
--

INSERT INTO `paketea` (`id_Paketea`, `id_Bezeroa`, `id_Langilea`, `entregatze_helbidea`, `irteera_data`, `entregatze_data`, `iruzkinak`, `pisua`, `egoera`, `data_ordua`) VALUES
(1, 2, 2, 'Villabona Kale Berria 3', '2024-05-29', '2024-05-30', 'Ondoko atean utzi da', 19, 'Abian', NULL),
(2, 3, 2, 'Iparragire bidea,3', '2024-05-30', '2024-05-31', NULL, 20, 'Abian', NULL),
(4, 2, 2, 'Avenida Navarra 97, Vitoria-Gasteiz', '2024-11-29', '2024-12-09', '', 8.15, 'Abian', NULL),
(10, 2, 45, 'Herriko Plaza 7, Durango', '2024-12-04', '2024-12-14', '', 7.8, NULL, NULL),
(11, 1, 78, 'Kale Zaharra 56, Hondarribia', '2024-12-05', '2024-12-15', 'Txartela galdu da', 6.1, NULL, NULL),
(12, 3, 12, 'Plaza Mayor 8, Baiona', '2024-12-06', '2024-12-16', '', 8.2, NULL, NULL),
(13, 2, 90, 'Kale Nagusia 34, Donostia', '2024-12-07', '2024-12-17', 'Paketea atzera geratu da', 5.5, NULL, NULL),
(14, 1, 25, 'Avenida Gernika 45, Bilbo', '2024-12-08', '2024-12-18', '', 9.7, NULL, NULL),
(15, 3, 67, 'Errondo Etorbidea 23, Gernika', '2024-12-09', '2024-12-19', 'Pisua derrigortuta dago', 7.4, NULL, NULL),
(16, 2, 33, 'Kale Nagusia 12, Iruña', '2024-12-10', '2024-12-20', '', 6.3, NULL, NULL),
(17, 1, 89, 'Herriko Plaza 5, Baiona', '2024-12-11', '2024-12-21', '', 8.9, NULL, NULL),
(18, 3, 21, 'Nafarroako Etorbidea 67, Gasteiz', '2024-12-12', '2024-12-22', 'Paketea lau orduko lekuan geratu da', 5.2, NULL, NULL),
(19, 2, 45, 'Nagusia Kalea 23, Donostia', '2024-12-13', '2024-12-23', '', 8.6, NULL, NULL),
(20, 1, 78, 'Kale Zaharra 56, Bilbo', '2024-12-14', '2024-12-24', '', 7.1, NULL, NULL),
(21, 3, 12, 'Gernikako Arbola 8, Baiona', '2024-12-15', '2024-12-25', 'Ez da inzidentziarik izan', 6.4, NULL, NULL),
(22, 2, 90, 'Kale Nagusia 34, Iruña', '2024-12-16', '2024-12-26', 'Paketea laukotean erori da', 9.2, NULL, NULL),
(23, 1, 25, 'Avenida Gernika 45, Bilbo', '2024-12-17', '2024-12-27', '', 8.7, NULL, NULL),
(24, 3, 67, 'Errondo Etorbidea 23, Gernika', '2024-12-18', '2024-12-28', '', 7.3, NULL, NULL),
(25, 2, 33, 'Kale Nagusia 12, Iruña', '2024-12-19', '2024-12-29', '', 6.1, NULL, NULL),
(26, 1, 89, 'Herriko Plaza 5, Baiona', '2024-12-20', '2024-12-30', '', 9.4, NULL, NULL),
(27, 3, 21, 'Nafarroako Etorbidea 67, Gasteiz', '2024-12-21', '2024-12-31', '', 5.8, NULL, NULL),
(28, 2, 45, 'Nagusia Kalea 23, Donostia', '2024-12-22', '2025-01-01', 'Txartela behin betiko galdu da', 8.3, NULL, NULL),
(29, 1, 78, 'Kale Zaharra 56, Bilbo', '2024-12-23', '2025-01-02', '', 6.9, NULL, NULL),
(30, 3, 12, 'Gernikako Arbola 8, Baiona', '2024-12-24', '2025-01-03', '', 7.2, NULL, NULL),
(31, 2, 90, 'Kale Nagusia 34, Iruña', '2024-12-25', '2025-01-04', '', 8.1, NULL, NULL),
(32, 1, 25, 'Avenida Gernika 45, Bilbo', '2024-12-26', '2025-01-05', '', 5.7, NULL, NULL),
(33, 3, 67, 'Errondo Etorbidea 23, Gernika', '2024-12-27', '2025-01-06', 'Paketea hondoratuta dago', 9.3, NULL, NULL),
(34, 2, 33, 'Kale Nagusia 12, Iruña', '2024-12-28', '2025-01-07', '', 7.6, NULL, NULL),
(35, 1, 89, 'Herriko Plaza 5, Baiona', '2024-12-29', '2025-01-08', 'Ezin izan da gurutzatu', 6.8, NULL, NULL),
(36, 3, 21, 'Nafarroako Etorbidea 67, Gasteiz', '2024-12-30', '2025-01-09', '', 8.4, NULL, NULL),
(37, 2, 45, 'Nagusia Kalea 23, Donostia', '2024-12-31', '2025-01-10', '', 5.9, NULL, NULL),
(38, 1, 78, 'Kale Zaharra 56, Bilbo', '2025-01-01', '2025-01-11', '', 7.5, NULL, NULL),
(39, 3, 12, 'Gernikako Arbola 8, Baiona', '2025-01-02', '2025-01-12', '', 9.1, NULL, NULL),
(40, 2, 90, 'Kale Nagusia 34, Iruña', '2025-01-03', '2025-01-13', '', 8.7, NULL, NULL),
(41, 1, 25, 'Avenida Gernika 45, Bilbo', '2025-01-04', '2025-01-14', 'Inertzia larri bat egon da', 6.2, NULL, NULL),
(42, 3, 67, 'Errondo Etorbidea 23, Gernika', '2025-01-05', '2025-01-15', '', 8.5, NULL, NULL),
(43, 2, 33, 'Kale Nagusia 12, Iruña', '2025-01-06', '2025-01-16', '', 7.3, NULL, NULL),
(44, 1, 89, 'Herriko Plaza 5, Baiona', '2025-01-07', '2025-01-17', '', 5.4, NULL, NULL),
(45, 3, 21, 'Nafarroako Etorbidea 67, Gasteiz', '2025-01-08', '2025-01-18', '', 9.6, NULL, NULL),
(46, 2, 45, 'Nagusia Kalea 23, Donostia', '2025-01-09', '2025-01-19', '', 7.8, NULL, NULL),
(47, 1, 78, 'Kale Zaharra 56, Bilbo', '2025-01-10', '2025-01-20', '', 6.7, NULL, NULL),
(48, 3, 12, 'Gernikako Arbola 8, Baiona', '2025-01-11', '2025-01-21', '', 8.9, NULL, NULL),
(49, 2, 90, 'Kale Nagusia 34, Iruña', '2025-01-12', '2025-01-22', '', 5.9, NULL, NULL),
(50, 1, 25, 'Avenida Gernika 45, Bilbo', '2025-01-13', '2025-01-23', '', 9.2, NULL, NULL),
(51, 3, 67, 'Errondo Etorbidea 23, Gernika', '2025-01-14', '2025-01-24', '', 8.1, NULL, NULL),
(52, 2, 33, 'Kale Nagusia 12, Iruña', '2025-01-15', '2025-01-25', '', 7.2, NULL, NULL),
(53, 1, 89, 'Herriko Plaza 5, Baiona', '2025-01-16', '2025-01-26', 'Txartela garbitu da', 6.5, NULL, NULL),
(54, 3, 21, 'Nafarroako Etorbidea 67, Gasteiz', '2025-01-17', '2025-01-27', '', 8.7, NULL, NULL),
(55, 2, 45, 'Nagusia Kalea 23, Donostia', '2025-01-18', '2025-01-28', '', 7.3, NULL, NULL),
(56, 1, 78, 'Kale Zaharra 56, Bilbo', '2025-01-19', '2025-01-29', '', 9.4, NULL, NULL),
(57, 3, 12, 'Gernikako Arbola 8, Baiona', '2025-01-20', '2025-01-30', '', 8.2, NULL, NULL),
(58, 2, 90, 'Kale Nagusia 34, Iruña', '2025-01-21', '2025-01-31', '', 6.3, NULL, NULL),
(59, 1, 25, 'Avenida Gernika 45, Bilbo', '2025-01-22', '2025-02-01', '', 7.8, NULL, NULL),
(60, 3, 67, 'Errondo Etorbidea 23, Gernika', '2025-01-23', '2025-02-02', '', 9.1, NULL, NULL),
(61, 2, 33, 'Kale Nagusia 12, Iruña', '2025-01-24', '2025-02-03', '', 6.9, NULL, NULL),
(62, 1, 89, 'Herriko Plaza 5, Baiona', '2025-01-25', '2025-02-04', '', 8.4, NULL, NULL),
(63, 3, 21, 'Nafarroako Etorbidea 67, Gasteiz', '2025-01-26', '2025-02-05', '', 5.6, NULL, NULL),
(64, 2, 45, 'Nagusia Kalea 23, Donostia', '2025-01-27', '2025-02-06', '', 7.2, NULL, NULL),
(65, 1, 78, 'Kale Zaharra 56, Bilbo', '2025-01-28', '2025-02-07', '', 8.9, NULL, NULL),
(66, 3, 12, 'Gernikako Arbola 8, Baiona', '2025-01-29', '2025-02-08', '', 6.7, NULL, NULL),
(67, 2, 90, 'Kale Nagusia 34, Iruña', '2025-01-30', '2025-02-09', 'Paketea ura jausi da', 9.3, NULL, NULL),
(68, 1, 25, 'Avenida Gernika 45, Bilbo', '2025-01-31', '2025-02-10', '', 7.1, NULL, NULL),
(69, 3, 67, 'Errondo Etorbidea 23, Gernika', '2025-02-01', '2025-02-11', '', 5.8, NULL, NULL),
(70, 2, 33, 'Kale Nagusia 12, Iruña', '2025-02-02', '2025-02-12', '', 8.2, NULL, NULL),
(71, 1, 89, 'Herriko Plaza 5, Baiona', '2025-02-03', '2025-02-13', '', 6.4, NULL, NULL),
(72, 3, 21, 'Nafarroako Etorbidea 67, Gasteiz', '2025-02-04', '2025-02-14', 'Paketea lekuan ez dago', 9.1, NULL, NULL),
(73, 2, 45, 'Nagusia Kalea 23, Donostia', '2025-02-05', '2025-02-15', '', 7.3, NULL, NULL),
(74, 1, 78, 'Kale Zaharra 56, Bilbo', '2025-02-06', '2025-02-16', '', 8.6, NULL, NULL),
(75, 3, 12, 'Gernikako Arbola 8, Baiona', '2025-02-07', '2025-02-17', '', 6.9, NULL, NULL),
(76, 2, 90, 'Kale Nagusia 34, Iruña', '2025-02-08', '2025-02-18', '', 9.7, NULL, NULL),
(77, 1, 25, 'Avenida Gernika 45, Bilbo', '2025-02-09', '2025-02-19', '', 7.5, NULL, NULL),
(78, 3, 67, 'Errondo Etorbidea 23, Gernika', '2025-02-10', '2025-02-20', '', 6.1, NULL, NULL),
(79, 2, 33, 'Kale Nagusia 12, Iruña', '2025-02-11', '2025-02-21', 'Atera gabe geratu da', 8.3, NULL, NULL),
(80, 1, 89, 'Herriko Plaza 5, Baiona', '2025-02-12', '2025-02-22', '', 5.7, NULL, NULL),
(81, 3, 21, 'Nafarroako Etorbidea 67, Gasteiz', '2025-02-13', '2025-02-23', '', 9.2, NULL, NULL),
(82, 2, 45, 'Nagusia Kalea 23, Donostia', '2025-02-14', '2025-02-24', '', 7.8, NULL, NULL),
(83, 1, 78, 'Kale Zaharra 56, Bilbo', '2025-02-15', '2025-02-25', '', 8.1, NULL, NULL),
(84, 3, 12, 'Gernikako Arbola 8, Baiona', '2025-02-16', '2025-02-26', '', 6.5, NULL, NULL),
(85, 2, 90, 'Kale Nagusia 34, Iruña', '2025-02-17', '2025-02-27', '', 9.4, NULL, NULL),
(86, 1, 25, 'Avenida Gernika 45, Bilbo', '2025-02-18', '2025-02-28', '', 7.2, NULL, NULL),
(87, 3, 67, 'Errondo Etorbidea 23, Gernika', '2025-02-19', '2025-03-01', '', 8.9, NULL, NULL),
(88, 2, 33, 'Kale Nagusia 12, Iruña', '2025-02-20', '2025-03-02', '', 6.8, NULL, NULL),
(89, 1, 89, 'Herriko Plaza 5, Baiona', '2025-02-21', '2025-03-03', '', 9.1, NULL, NULL),
(90, 3, 21, 'Nafarroako Etorbidea 67, Gasteiz', '2025-02-22', '2025-03-04', 'Makurtuta heldu da', 7.4, NULL, NULL),
(91, 2, 45, 'Nagusia Kalea 23, Donostia', '2025-02-23', '2025-03-05', '', 8.2, NULL, NULL),
(92, 1, 78, 'Kale Zaharra 56, Bilbo', '2025-02-24', '2025-03-06', '', 6.7, NULL, NULL),
(93, 3, 12, 'Gernikako Arbola 8, Baiona', '2025-02-25', '2025-03-07', '', 9.3, NULL, NULL),
(94, 2, 90, 'Kale Nagusia 34, Iruña', '2025-02-26', '2025-03-08', '', 8.1, NULL, NULL),
(95, 1, 25, 'Avenida Gernika 45, Bilbo', '2025-02-27', '2025-03-09', '', 7.6, NULL, NULL),
(96, 3, 67, 'Errondo Etorbidea 23, Gernika', '2025-02-28', '2025-03-10', '', 8.7, NULL, NULL),
(97, 2, 33, 'Kale Nagusia 12, Iruña', '2025-03-01', '2025-03-11', '', 6.5, NULL, NULL),
(98, 1, 89, 'Herriko Plaza 5, Baiona', '2025-03-02', '2025-03-12', '', 9.2, NULL, NULL),
(99, 3, 21, 'Nafarroako Etorbidea 67, Gasteiz', '2025-03-03', '2025-03-13', '', 7.8, NULL, NULL),
(100, 2, 45, 'Nagusia Kalea 23, Donostia', '2025-03-04', '2025-03-14', '', 8.9, NULL, NULL),
(101, 3, 10, 'Villabona Kale Berria 3', '2024-05-24', '2024-04-30', 'Ez dago arazorik', 8.2, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bezeroa`
--
ALTER TABLE `bezeroa`
  ADD PRIMARY KEY (`id_Bezeroa`);

--
-- Indices de la tabla `langilea`
--
ALTER TABLE `langilea`
  ADD PRIMARY KEY (`id_Langilea`);

--
-- Indices de la tabla `paketea`
--
ALTER TABLE `paketea`
  ADD PRIMARY KEY (`id_Paketea`),
  ADD KEY `fk_Paketea_Langileak_idx` (`id_Langilea`),
  ADD KEY `fk_Paketea_Bezeroa1_idx` (`id_Bezeroa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `langilea`
--
ALTER TABLE `langilea`
  MODIFY `id_Langilea` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT de la tabla `paketea`
--
ALTER TABLE `paketea`
  MODIFY `id_Paketea` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `paketea`
--
ALTER TABLE `paketea`
  ADD CONSTRAINT `fk_Paketea_Bezeroa1` FOREIGN KEY (`id_Bezeroa`) REFERENCES `bezeroa` (`id_Bezeroa`),
  ADD CONSTRAINT `fk_Paketea_Langileak` FOREIGN KEY (`id_Langilea`) REFERENCES `langilea` (`id_Langilea`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
