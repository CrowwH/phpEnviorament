-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2024 a las 16:02:49
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;
--
-- Base de datos: `Paketea`
--
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `bezeroa`
--
CREATE TABLE `bezeroa` (
    `id_Bezeroa` int(11) NOT NULL,
    `izena` varchar(45) NOT NULL,
    `korreoa` varchar(45) NOT NULL,
    `nan` varchar(45) NOT NULL,
    `helbidea` varchar(45) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;
--
-- Volcado de datos para la tabla `bezeroa`
--
INSERT INTO `bezeroa` (
        `id_Bezeroa`,
        `izena`,
        `korreoa`,
        `nan`,
        `helbidea`
    )
VALUES (
        1,
        'unai',
        'unai@gmail.com',
        '72540408N',
        'Santa Lutzi iribidea'
    ),
    (
        2,
        'mikel',
        'mikel@gmail.com',
        '741254B',
        'Ave del Paraiso,13'
    ),
    (
        3,
        'juan',
        'juan@gmail.com',
        '7845621V',
        'Iparragire bidea,3'
    );
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `langileak`
--
CREATE TABLE `langileak` (
    `id_Langileak` int(11) NOT NULL,
    `izena` varchar(45) NOT NULL,
    `abizena` varchar(45) NOT NULL,
    `nan` varchar(45) NOT NULL,
    `herria` varchar(45) NOT NULL,
    `telefonoa` varchar(9) DEFAULT NULL,
    `langile_mota` varchar(45) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;
--
-- Volcado de datos para la tabla `langileak`
--
INSERT INTO `langileak` (
        `id_Langileak`,
        `izena`,
        `abizena`,
        `nan`,
        `herria`,
        `telefonoa`,
        `langile_mota`
    )
VALUES (
        1,
        'Kike',
        'Garcia',
        '74563214M',
        'Tolosa',
        '630958412',
        'Banatzailea'
    ),
    (
        2,
        'Alberto',
        'Martinez',
        '7845120G',
        'Hernani',
        NULL,
        'Kudeatzailea'
    ),
    (
        3,
        'Aitor',
        'García',
        '23420842H',
        'Abaltzisketa',
        '612345678',
        ''
    ),
    (
        4,
        'María',
        'Etxeberria',
        '35417891J',
        'Aduna',
        '622345678',
        ''
    ),
    (
        5,
        'Iker',
        'Martínez',
        '47415930K',
        'Aizarnazabal',
        '632345678',
        ''
    ),
    (
        6,
        'Juan',
        'Garate',
        '59413849L',
        'Albiztur',
        '642345678',
        ''
    ),
    (
        7,
        'Unai',
        'López',
        '71412878M',
        'Alegia',
        '652345678',
        ''
    ),
    (
        8,
        'Ana',
        'Urrutia',
        '83411777N',
        'Alkiza',
        '662345678',
        ''
    ),
    (
        9,
        'Amaia',
        'Sánchez',
        '95410666P',
        'Altzaga',
        '672345678',
        ''
    ),
    (
        10,
        'Luis',
        'Zabala',
        '17409555Q',
        'Altzo',
        '682345678',
        ''
    ),
    (
        11,
        'Nerea',
        'Pérez',
        '29408444R',
        'Amezketa',
        '692345678',
        ''
    ),
    (
        12,
        'Elena',
        'Mendia',
        '41407333S',
        'Andoain',
        '602345678',
        ''
    ),
    (
        13,
        'Jon',
        'González',
        '53406222T',
        'Anoeta',
        '712345678',
        ''
    ),
    (
        14,
        'Ane',
        'Fernández',
        '65405111U',
        'Antzuola',
        '722345678',
        ''
    ),
    (
        15,
        'Asier',
        'Hernández',
        '77404000V',
        'Arama',
        '732345678',
        ''
    ),
    (
        16,
        'Maite',
        'Gómez',
        '89403999W',
        'Aretxabaleta',
        '742345678',
        ''
    ),
    (
        17,
        'Ibai',
        'Sanz',
        '01402888X',
        'Asteasu',
        '752345678',
        ''
    ),
    (
        18,
        'Leire',
        'Moreno',
        '13401777Y',
        'Astigarraga',
        '762345678',
        ''
    ),
    (
        19,
        'Eneko',
        'Alvarez',
        '25401666Z',
        'Ataun',
        '772345678',
        ''
    ),
    (
        20,
        'Eider',
        'Jiménez',
        '37400555A',
        'Aia',
        '782345678',
        ''
    ),
    (
        21,
        'Mikel',
        'Ortega',
        '49399444B',
        'Azkoitia',
        '792345678',
        ''
    ),
    (
        22,
        'Ane',
        'Iglesias',
        '61398333C',
        'Aztpeitia',
        '802345678',
        ''
    ),
    (
        23,
        'Iñigo',
        'Ruíz',
        '73397222D',
        'Baliarrain',
        '812345678',
        ''
    ),
    (
        24,
        'Maider',
        'Gutiérrez',
        '85396111E',
        'Beasain',
        '822345678',
        ''
    ),
    (
        25,
        'Ander',
        'Herrero',
        '97395000F',
        'Beizema',
        '832345678',
        ''
    ),
    (
        26,
        'Miren',
        'Serrano',
        '09394999G',
        'Belauntza',
        '842345678',
        ''
    ),
    (
        27,
        'Ekaitz',
        'Vidal',
        '21393888H',
        'Berastegi',
        '852345678',
        ''
    ),
    (
        28,
        'Iraitz',
        'Blanco',
        '33392777I',
        'Berrobi',
        '862345678',
        ''
    ),
    (
        29,
        'Maialen',
        'Romero',
        '45391666J',
        'Bidania-Goiatz',
        '872345678',
        ''
    ),
    (
        30,
        'Gorka',
        'Hidalgo',
        '57390555K',
        'Zegama',
        '882345678',
        ''
    ),
    (
        31,
        'Naiara',
        'Marín',
        '69389444L',
        'Zerain',
        '892345678',
        ''
    ),
    (
        32,
        'Xabier',
        'León',
        '81388333M',
        'Zestoa',
        '902345678',
        ''
    ),
    (
        33,
        'Ekiñe',
        'Pascual',
        '93387222N',
        'Zizurkil',
        '912345678',
        ''
    ),
    (
        34,
        'Irantzu',
        'Pastor',
        '05386111O',
        'Deba',
        '922345678',
        ''
    ),
    (
        35,
        'Koldo',
        'Vega',
        '17385000P',
        'Eibar',
        '932345678',
        ''
    ),
    (
        36,
        'Aitziber',
        'Carmona',
        '29383899Q',
        'Elduain',
        '942345678',
        ''
    ),
    (
        37,
        'Urko',
        'Ferrer',
        '41382788R',
        'Elgoibar',
        '952345678',
        ''
    ),
    (
        38,
        'Mikel',
        'Reyes',
        '53381677S',
        'Elgeta',
        '962345678',
        ''
    ),
    (
        39,
        'Iker',
        'Moya',
        '65380566T',
        'Eskoriatza',
        '972345678',
        ''
    ),
    (
        40,
        'Eneko',
        'Durán',
        '77379455U',
        'Ezkio-Itsaso',
        '982345678',
        ''
    ),
    (
        41,
        'Ane',
        'Benítez',
        '89378344V',
        'Hondarribi',
        '992345678',
        ''
    ),
    (
        42,
        'Iñaki',
        'Gil',
        '01377233W',
        'Gaintza',
        '602345678',
        ''
    ),
    (
        43,
        'Marta',
        'Soto',
        '13376122X',
        'Gabiria',
        '612345678',
        ''
    ),
    (
        44,
        'Iratxe',
        'Rey',
        '25375011Y',
        'Gaztelu',
        '622345678',
        ''
    ),
    (
        45,
        'Arkaitz',
        'Dominguez',
        '37374900Z',
        'Getaria',
        '632345678',
        ''
    ),
    (
        46,
        'Ainhoa',
        'Ortega',
        '49373799A',
        'Hernani',
        '642345678',
        ''
    ),
    (
        47,
        'Unai',
        'Crespo',
        '61372688B',
        'Hernialde',
        '652345678',
        ''
    ),
    (
        48,
        'Ane',
        'Muñoz',
        '73371577C',
        'Ikaztegieta',
        '662345678',
        ''
    ),
    (
        49,
        'Maite',
        'Vázquez',
        '85370466D',
        'Idiazabal',
        '672345678',
        ''
    ),
    (
        50,
        'Beñat',
        'Rubio',
        '97369355E',
        'Irun',
        '682345678',
        ''
    ),
    (
        51,
        'Maider',
        'Lorenzo',
        '09368244F',
        'Irura',
        '692345678',
        ''
    ),
    (
        52,
        'Iker',
        'Molina',
        '21367133G',
        'Itsasondo',
        '702345678',
        ''
    ),
    (
        53,
        'Eider',
        'Ibáñez',
        '33366022H',
        'Larraul',
        '712345678',
        ''
    ),
    (
        54,
        'Naroa',
        'Santos',
        '45364911I',
        'Lasarte-Oria',
        '722345678',
        ''
    ),
    (
        55,
        'Asier',
        'Herrero',
        '57363700J',
        'Lazkao',
        '732345678',
        ''
    ),
    (
        56,
        'Miren',
        'Vidal',
        '69362599K',
        'Leaburu',
        '742345678',
        ''
    ),
    (
        57,
        'Ibai',
        'Cruz',
        '81361488L',
        'Legazpi',
        '752345678',
        ''
    ),
    (
        58,
        'Leire',
        'González',
        '93360377M',
        'Legorreta',
        '762345678',
        ''
    ),
    (
        59,
        'Ane',
        'Sánchez',
        '05359266N',
        'Lezo',
        '772345678',
        ''
    ),
    (
        60,
        'Asier',
        'Martín',
        '17358155O',
        'Lizartza',
        '782345829',
        ''
    ),
    (
        61,
        'Ane',
        'Larrea',
        '11382153N',
        'Antzuola',
        '782345678',
        ''
    ),
    (
        62,
        'Aitor',
        'Garmendia',
        '22389743O',
        'Arama',
        '792345678',
        ''
    ),
    (
        63,
        'Maialen',
        'Ibarguren',
        '33389473P',
        'Aretxabaleta',
        '802345678',
        ''
    ),
    (
        64,
        'Unai',
        'Etxeberria',
        '44382153Q',
        'Asteasu',
        '812345678',
        ''
    ),
    (
        65,
        'Iker',
        'Larrinaga',
        '55389743R',
        'Astigarraga',
        '822345678',
        ''
    ),
    (
        66,
        'Miren',
        'Larrañaga',
        '66389473S',
        'Ataun',
        '832345678',
        ''
    ),
    (
        67,
        'Ekaitz',
        'Izagirre',
        '77382153T',
        'Aia',
        '842345678',
        ''
    ),
    (
        68,
        'Urko',
        'Aramburu',
        '88389743U',
        'Azkoitia',
        '852345678',
        ''
    ),
    (
        69,
        'Ane',
        'Landa',
        '99389473V',
        'Azpeitia',
        '862345678',
        ''
    ),
    (
        70,
        'Maider',
        'Olabarria',
        '10382153W',
        'Baliarrain',
        '872345678',
        ''
    ),
    (
        71,
        'Beñat',
        'Alberdi',
        '11389743X',
        'Beasain',
        '882345678',
        ''
    ),
    (
        72,
        'Marta',
        'Beristain',
        '22389473Y',
        'Beizema',
        '892345678',
        ''
    ),
    (
        73,
        'Iratxe',
        'Zubizarreta',
        '33382153Z',
        'Belauntza',
        '902345678',
        ''
    ),
    (
        74,
        'Ane',
        'Eizagirre',
        '44389744A',
        'Berastegi',
        '912345678',
        ''
    ),
    (
        75,
        'Iker',
        'Lertxundi',
        '55389474B',
        'Berrobi',
        '922345678',
        ''
    ),
    (
        76,
        'Miren',
        'Larrazabal',
        '66382154C',
        'Bidania-Goiatz',
        '932345678',
        ''
    ),
    (
        77,
        'Ekaitz',
        'Arana',
        '77389744D',
        'Zegama',
        '942345678',
        ''
    ),
    (
        78,
        'Urko',
        'Zabala',
        '88389474E',
        'Zerain',
        '952345678',
        ''
    ),
    (
        79,
        'Ane',
        'Irizar',
        '99382154F',
        'Zestoa',
        '962345678',
        ''
    ),
    (
        80,
        'Maider',
        'Larrinaga',
        '10389744G',
        'Zizurkil',
        '972345678',
        ''
    ),
    (
        81,
        'Beñat',
        'Arrizabalaga',
        '11389474H',
        'Deba',
        '982345678',
        ''
    ),
    (
        82,
        'Marta',
        'Ibarra',
        '22382154I',
        'Eibar',
        '992345678',
        ''
    ),
    (
        83,
        'Iratxe',
        'González',
        '33389744J',
        'Elduain',
        '602345678',
        ''
    ),
    (
        84,
        'Ane',
        'Etxeberria',
        '44389474K',
        'Elgoibar',
        '612345678',
        ''
    ),
    (
        85,
        'Iker',
        'Arrieta',
        '55382154L',
        'Elgeta',
        '622345678',
        ''
    ),
    (
        86,
        'Miren',
        'Egiguren',
        '66389744M',
        'Eskoriatza',
        '632345678',
        ''
    ),
    (
        87,
        'Ekaitz',
        'Lekuona',
        '77389474N',
        'Ezkio-Itsaso',
        '642345678',
        ''
    ),
    (
        88,
        'Urko',
        'Arrizabalaga',
        '88382154O',
        'Hondarribi',
        '652345678',
        ''
    ),
    (
        89,
        'Ane',
        'Gallastegi',
        '99389744P',
        'Gaintza',
        '662345678',
        ''
    ),
    (
        90,
        'Maider',
        'Eizmendi',
        '10389474Q',
        'Gabiria',
        '672345678',
        ''
    ),
    (
        91,
        'Beñat',
        'Arana',
        '11382154R',
        'Gaztelu',
        '682345678',
        ''
    ),
    (
        92,
        'Marta',
        'Etxeberria',
        '22389744S',
        'Getaria',
        '692345678',
        ''
    ),
    (
        93,
        'Iratxe',
        'Arana',
        '33389474T',
        'Hernani',
        '702345678',
        ''
    ),
    (
        94,
        'Ane',
        'González',
        '44382154U',
        'Hernialde',
        '712345678',
        ''
    ),
    (
        95,
        'Iker',
        'Arrizabalaga',
        '55389744V',
        'Ikaztegieta',
        '722345678',
        ''
    ),
    (
        96,
        'Miren',
        'Arrieta',
        '66389474W',
        'Idiazabal',
        '732345678',
        ''
    ),
    (
        97,
        'Ekaitz',
        'Etxeberria',
        '77382154X',
        'Irun',
        '742345678',
        ''
    ),
    (
        98,
        'Urko',
        'Lekuona',
        '88389744Y',
        'Irura',
        '752345678',
        ''
    ),
    (
        99,
        'Ane',
        'Arratibel',
        '99389474Z',
        'Itsasondo',
        '762345678',
        ''
    ),
    (
        100,
        'Maider',
        'Olabarria',
        '10382155A',
        'Larraul',
        '772345678',
        ''
    ),
    (
        101,
        'Beñat',
        'Alberdi',
        '11389745B',
        'Lasarte-Oria',
        '782345678',
        ''
    ),
    (
        102,
        'Marta',
        'Beristain',
        '22389475C',
        'Lazkao',
        '792345678',
        ''
    ),
    (
        103,
        'Iratxe',
        'Zubizarreta',
        '33382155D',
        'Leaburu',
        '802345678',
        ''
    ),
    (
        104,
        'Ane',
        'Eizagirre',
        '44389745E',
        'Legazpi',
        '812345678',
        ''
    ),
    (
        105,
        'Iker',
        'Lertxundi',
        '55389475F',
        'Legorreta',
        '822345678',
        ''
    ),
    (
        106,
        'Miren',
        'Larrazabal',
        '66382155G',
        'Lezo',
        '832345678',
        ''
    ),
    (
        107,
        'Ekaitz',
        'Arana',
        '77389745H',
        'Lizartza',
        '842345678',
        ''
    ),
    (
        108,
        'Urko',
        'Zabala',
        '88389475I',
        'Mendaro',
        '852345678',
        ''
    ),
    (
        109,
        'Ane',
        'Irizar',
        '99382155J',
        'Mutriku',
        '862345678',
        ''
    ),
    (
        110,
        'Maider',
        'Larrinaga',
        '10389745K',
        'Mutiloa',
        '872345678',
        ''
    ),
    (
        111,
        'Beñat',
        'Arrizabalaga',
        '11389475L',
        'Oiartzun',
        '882345678',
        ''
    );
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `paketea`
--
CREATE TABLE `paketea` (
    `id_Paketea` int(11) NOT NULL,
    `id_Langilea` int(11) NOT NULL,
    `id_Bezeroa` int(11) NOT NULL,
    `entregatze_helbidea` varchar(50) NOT NULL,
    `entregatze_data` date NOT NULL,
    `irteera_data` date NOT NULL,
    `iruzkinak` varchar(45) DEFAULT NULL,
    `Pisua` double NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;
--
-- Volcado de datos para la tabla `paketea`
--
INSERT INTO `paketea` (
        `id_Paketea`,
        `id_Langilea`,
        `id_Bezeroa`,
        `entregatze_helbidea`,
        `entregatze_data`,
        `irteera_data`,
        `iruzkinak`,
        `Pisua`
    )
VALUES (
        1,
        2,
        2,
        'Villabona Kale Berria 3',
        '2024-05-30',
        '2024-05-29',
        'Ondoko atean utzi da',
        19
    ),
    (
        2,
        1,
        3,
        'Iparragire bidea,3',
        '2024-05-31',
        '2024-05-30',
        NULL,
        20
    ),
    (
        4,
        5,
        2,
        'Avenida Navarra 97, Vitoria-Gasteiz',
        '2024-12-09',
        '2024-11-29',
        '',
        8.15
    ),
    (
        10,
        45,
        2,
        'Herriko Plaza 7, Durango',
        '2024-12-14',
        '2024-12-04',
        '',
        7.8
    ),
    (
        11,
        78,
        1,
        'Kale Zaharra 56, Hondarribia',
        '2024-12-15',
        '2024-12-05',
        'Txartela galdu da',
        6.1
    ),
    (
        12,
        12,
        3,
        'Plaza Mayor 8, Baiona',
        '2024-12-16',
        '2024-12-06',
        '',
        8.2
    ),
    (
        13,
        90,
        2,
        'Kale Nagusia 34, Donostia',
        '2024-12-17',
        '2024-12-07',
        'Paketea atzera geratu da',
        5.5
    ),
    (
        14,
        25,
        1,
        'Avenida Gernika 45, Bilbo',
        '2024-12-18',
        '2024-12-08',
        '',
        9.7
    ),
    (
        15,
        67,
        3,
        'Errondo Etorbidea 23, Gernika',
        '2024-12-19',
        '2024-12-09',
        'Pisua derrigortuta dago',
        7.4
    ),
    (
        16,
        33,
        2,
        'Kale Nagusia 12, Iruña',
        '2024-12-20',
        '2024-12-10',
        '',
        6.3
    ),
    (
        17,
        89,
        1,
        'Herriko Plaza 5, Baiona',
        '2024-12-21',
        '2024-12-11',
        '',
        8.9
    ),
    (
        18,
        21,
        3,
        'Nafarroako Etorbidea 67, Gasteiz',
        '2024-12-22',
        '2024-12-12',
        'Paketea lau orduko lekuan geratu da',
        5.2
    ),
    (
        19,
        45,
        2,
        'Nagusia Kalea 23, Donostia',
        '2024-12-23',
        '2024-12-13',
        '',
        8.6
    ),
    (
        20,
        78,
        1,
        'Kale Zaharra 56, Bilbo',
        '2024-12-24',
        '2024-12-14',
        '',
        7.1
    ),
    (
        21,
        12,
        3,
        'Gernikako Arbola 8, Baiona',
        '2024-12-25',
        '2024-12-15',
        'Ez da inzidentziarik izan',
        6.4
    ),
    (
        22,
        90,
        2,
        'Kale Nagusia 34, Iruña',
        '2024-12-26',
        '2024-12-16',
        'Paketea laukotean erori da',
        9.2
    ),
    (
        23,
        25,
        1,
        'Avenida Gernika 45, Bilbo',
        '2024-12-27',
        '2024-12-17',
        '',
        8.7
    ),
    (
        24,
        67,
        3,
        'Errondo Etorbidea 23, Gernika',
        '2024-12-28',
        '2024-12-18',
        '',
        7.3
    ),
    (
        25,
        33,
        2,
        'Kale Nagusia 12, Iruña',
        '2024-12-29',
        '2024-12-19',
        '',
        6.1
    ),
    (
        26,
        89,
        1,
        'Herriko Plaza 5, Baiona',
        '2024-12-30',
        '2024-12-20',
        '',
        9.4
    ),
    (
        27,
        21,
        3,
        'Nafarroako Etorbidea 67, Gasteiz',
        '2024-12-31',
        '2024-12-21',
        '',
        5.8
    ),
    (
        28,
        45,
        2,
        'Nagusia Kalea 23, Donostia',
        '2025-01-01',
        '2024-12-22',
        'Txartela behin betiko galdu da',
        8.3
    ),
    (
        29,
        78,
        1,
        'Kale Zaharra 56, Bilbo',
        '2025-01-02',
        '2024-12-23',
        '',
        6.9
    ),
    (
        30,
        12,
        3,
        'Gernikako Arbola 8, Baiona',
        '2025-01-03',
        '2024-12-24',
        '',
        7.2
    ),
    (
        31,
        90,
        2,
        'Kale Nagusia 34, Iruña',
        '2025-01-04',
        '2024-12-25',
        '',
        8.1
    ),
    (
        32,
        25,
        1,
        'Avenida Gernika 45, Bilbo',
        '2025-01-05',
        '2024-12-26',
        '',
        5.7
    ),
    (
        33,
        67,
        3,
        'Errondo Etorbidea 23, Gernika',
        '2025-01-06',
        '2024-12-27',
        'Paketea hondoratuta dago',
        9.3
    ),
    (
        34,
        33,
        2,
        'Kale Nagusia 12, Iruña',
        '2025-01-07',
        '2024-12-28',
        '',
        7.6
    ),
    (
        35,
        89,
        1,
        'Herriko Plaza 5, Baiona',
        '2025-01-08',
        '2024-12-29',
        'Ezin izan da gurutzatu',
        6.8
    ),
    (
        36,
        21,
        3,
        'Nafarroako Etorbidea 67, Gasteiz',
        '2025-01-09',
        '2024-12-30',
        '',
        8.4
    ),
    (
        37,
        45,
        2,
        'Nagusia Kalea 23, Donostia',
        '2025-01-10',
        '2024-12-31',
        '',
        5.9
    ),
    (
        38,
        78,
        1,
        'Kale Zaharra 56, Bilbo',
        '2025-01-11',
        '2025-01-01',
        '',
        7.5
    ),
    (
        39,
        12,
        3,
        'Gernikako Arbola 8, Baiona',
        '2025-01-12',
        '2025-01-02',
        '',
        9.1
    ),
    (
        40,
        90,
        2,
        'Kale Nagusia 34, Iruña',
        '2025-01-13',
        '2025-01-03',
        '',
        8.7
    ),
    (
        41,
        25,
        1,
        'Avenida Gernika 45, Bilbo',
        '2025-01-14',
        '2025-01-04',
        'Inertzia larri bat egon da',
        6.2
    ),
    (
        42,
        67,
        3,
        'Errondo Etorbidea 23, Gernika',
        '2025-01-15',
        '2025-01-05',
        '',
        8.5
    ),
    (
        43,
        33,
        2,
        'Kale Nagusia 12, Iruña',
        '2025-01-16',
        '2025-01-06',
        '',
        7.3
    ),
    (
        44,
        89,
        1,
        'Herriko Plaza 5, Baiona',
        '2025-01-17',
        '2025-01-07',
        '',
        5.4
    ),
    (
        45,
        21,
        3,
        'Nafarroako Etorbidea 67, Gasteiz',
        '2025-01-18',
        '2025-01-08',
        '',
        9.6
    ),
    (
        46,
        45,
        2,
        'Nagusia Kalea 23, Donostia',
        '2025-01-19',
        '2025-01-09',
        '',
        7.8
    ),
    (
        47,
        78,
        1,
        'Kale Zaharra 56, Bilbo',
        '2025-01-20',
        '2025-01-10',
        '',
        6.7
    ),
    (
        48,
        12,
        3,
        'Gernikako Arbola 8, Baiona',
        '2025-01-21',
        '2025-01-11',
        '',
        8.9
    ),
    (
        49,
        90,
        2,
        'Kale Nagusia 34, Iruña',
        '2025-01-22',
        '2025-01-12',
        '',
        5.9
    ),
    (
        50,
        25,
        1,
        'Avenida Gernika 45, Bilbo',
        '2025-01-23',
        '2025-01-13',
        '',
        9.2
    ),
    (
        51,
        67,
        3,
        'Errondo Etorbidea 23, Gernika',
        '2025-01-24',
        '2025-01-14',
        '',
        8.1
    ),
    (
        52,
        33,
        2,
        'Kale Nagusia 12, Iruña',
        '2025-01-25',
        '2025-01-15',
        '',
        7.2
    ),
    (
        53,
        89,
        1,
        'Herriko Plaza 5, Baiona',
        '2025-01-26',
        '2025-01-16',
        'Txartela garbitu da',
        6.5
    ),
    (
        54,
        21,
        3,
        'Nafarroako Etorbidea 67, Gasteiz',
        '2025-01-27',
        '2025-01-17',
        '',
        8.7
    ),
    (
        55,
        45,
        2,
        'Nagusia Kalea 23, Donostia',
        '2025-01-28',
        '2025-01-18',
        '',
        7.3
    ),
    (
        56,
        78,
        1,
        'Kale Zaharra 56, Bilbo',
        '2025-01-29',
        '2025-01-19',
        '',
        9.4
    ),
    (
        57,
        12,
        3,
        'Gernikako Arbola 8, Baiona',
        '2025-01-30',
        '2025-01-20',
        '',
        8.2
    ),
    (
        58,
        90,
        2,
        'Kale Nagusia 34, Iruña',
        '2025-01-31',
        '2025-01-21',
        '',
        6.3
    ),
    (
        59,
        25,
        1,
        'Avenida Gernika 45, Bilbo',
        '2025-02-01',
        '2025-01-22',
        '',
        7.8
    ),
    (
        60,
        67,
        3,
        'Errondo Etorbidea 23, Gernika',
        '2025-02-02',
        '2025-01-23',
        '',
        9.1
    ),
    (
        61,
        33,
        2,
        'Kale Nagusia 12, Iruña',
        '2025-02-03',
        '2025-01-24',
        '',
        6.9
    ),
    (
        62,
        89,
        1,
        'Herriko Plaza 5, Baiona',
        '2025-02-04',
        '2025-01-25',
        '',
        8.4
    ),
    (
        63,
        21,
        3,
        'Nafarroako Etorbidea 67, Gasteiz',
        '2025-02-05',
        '2025-01-26',
        '',
        5.6
    ),
    (
        64,
        45,
        2,
        'Nagusia Kalea 23, Donostia',
        '2025-02-06',
        '2025-01-27',
        '',
        7.2
    ),
    (
        65,
        78,
        1,
        'Kale Zaharra 56, Bilbo',
        '2025-02-07',
        '2025-01-28',
        '',
        8.9
    ),
    (
        66,
        12,
        3,
        'Gernikako Arbola 8, Baiona',
        '2025-02-08',
        '2025-01-29',
        '',
        6.7
    ),
    (
        67,
        90,
        2,
        'Kale Nagusia 34, Iruña',
        '2025-02-09',
        '2025-01-30',
        'Paketea ura jausi da',
        9.3
    ),
    (
        68,
        25,
        1,
        'Avenida Gernika 45, Bilbo',
        '2025-02-10',
        '2025-01-31',
        '',
        7.1
    ),
    (
        69,
        67,
        3,
        'Errondo Etorbidea 23, Gernika',
        '2025-02-11',
        '2025-02-01',
        '',
        5.8
    ),
    (
        70,
        33,
        2,
        'Kale Nagusia 12, Iruña',
        '2025-02-12',
        '2025-02-02',
        '',
        8.2
    ),
    (
        71,
        89,
        1,
        'Herriko Plaza 5, Baiona',
        '2025-02-13',
        '2025-02-03',
        '',
        6.4
    ),
    (
        72,
        21,
        3,
        'Nafarroako Etorbidea 67, Gasteiz',
        '2025-02-14',
        '2025-02-04',
        'Paketea lekuan ez dago',
        9.1
    ),
    (
        73,
        45,
        2,
        'Nagusia Kalea 23, Donostia',
        '2025-02-15',
        '2025-02-05',
        '',
        7.3
    ),
    (
        74,
        78,
        1,
        'Kale Zaharra 56, Bilbo',
        '2025-02-16',
        '2025-02-06',
        '',
        8.6
    ),
    (
        75,
        12,
        3,
        'Gernikako Arbola 8, Baiona',
        '2025-02-17',
        '2025-02-07',
        '',
        6.9
    ),
    (
        76,
        90,
        2,
        'Kale Nagusia 34, Iruña',
        '2025-02-18',
        '2025-02-08',
        '',
        9.7
    ),
    (
        77,
        25,
        1,
        'Avenida Gernika 45, Bilbo',
        '2025-02-19',
        '2025-02-09',
        '',
        7.5
    ),
    (
        78,
        67,
        3,
        'Errondo Etorbidea 23, Gernika',
        '2025-02-20',
        '2025-02-10',
        '',
        6.1
    ),
    (
        79,
        33,
        2,
        'Kale Nagusia 12, Iruña',
        '2025-02-21',
        '2025-02-11',
        'Atera gabe geratu da',
        8.3
    ),
    (
        80,
        89,
        1,
        'Herriko Plaza 5, Baiona',
        '2025-02-22',
        '2025-02-12',
        '',
        5.7
    ),
    (
        81,
        21,
        3,
        'Nafarroako Etorbidea 67, Gasteiz',
        '2025-02-23',
        '2025-02-13',
        '',
        9.2
    ),
    (
        82,
        45,
        2,
        'Nagusia Kalea 23, Donostia',
        '2025-02-24',
        '2025-02-14',
        '',
        7.8
    ),
    (
        83,
        78,
        1,
        'Kale Zaharra 56, Bilbo',
        '2025-02-25',
        '2025-02-15',
        '',
        8.1
    ),
    (
        84,
        12,
        3,
        'Gernikako Arbola 8, Baiona',
        '2025-02-26',
        '2025-02-16',
        '',
        6.5
    ),
    (
        85,
        90,
        2,
        'Kale Nagusia 34, Iruña',
        '2025-02-27',
        '2025-02-17',
        '',
        9.4
    ),
    (
        86,
        25,
        1,
        'Avenida Gernika 45, Bilbo',
        '2025-02-28',
        '2025-02-18',
        '',
        7.2
    ),
    (
        87,
        67,
        3,
        'Errondo Etorbidea 23, Gernika',
        '2025-03-01',
        '2025-02-19',
        '',
        8.9
    ),
    (
        88,
        33,
        2,
        'Kale Nagusia 12, Iruña',
        '2025-03-02',
        '2025-02-20',
        '',
        6.8
    ),
    (
        89,
        89,
        1,
        'Herriko Plaza 5, Baiona',
        '2025-03-03',
        '2025-02-21',
        '',
        9.1
    ),
    (
        90,
        21,
        3,
        'Nafarroako Etorbidea 67, Gasteiz',
        '2025-03-04',
        '2025-02-22',
        'Makurtuta heldu da',
        7.4
    ),
    (
        91,
        45,
        2,
        'Nagusia Kalea 23, Donostia',
        '2025-03-05',
        '2025-02-23',
        '',
        8.2
    ),
    (
        92,
        78,
        1,
        'Kale Zaharra 56, Bilbo',
        '2025-03-06',
        '2025-02-24',
        '',
        6.7
    ),
    (
        93,
        12,
        3,
        'Gernikako Arbola 8, Baiona',
        '2025-03-07',
        '2025-02-25',
        '',
        9.3
    ),
    (
        94,
        90,
        2,
        'Kale Nagusia 34, Iruña',
        '2025-03-08',
        '2025-02-26',
        '',
        8.1
    ),
    (
        95,
        25,
        1,
        'Avenida Gernika 45, Bilbo',
        '2025-03-09',
        '2025-02-27',
        '',
        7.6
    ),
    (
        96,
        67,
        3,
        'Errondo Etorbidea 23, Gernika',
        '2025-03-10',
        '2025-02-28',
        '',
        8.7
    ),
    (
        97,
        33,
        2,
        'Kale Nagusia 12, Iruña',
        '2025-03-11',
        '2025-03-01',
        '',
        6.5
    ),
    (
        98,
        89,
        1,
        'Herriko Plaza 5, Baiona',
        '2025-03-12',
        '2025-03-02',
        '',
        9.2
    ),
    (
        99,
        21,
        3,
        'Nafarroako Etorbidea 67, Gasteiz',
        '2025-03-13',
        '2025-03-03',
        '',
        7.8
    ),
    (
        100,
        45,
        2,
        'Nagusia Kalea 23, Donostia',
        '2025-03-14',
        '2025-03-04',
        '',
        8.9
    ),
    (
        101,
        10,
        3,
        'Villabona Kale Berria 3',
        '2024-04-30',
        '2024-05-24',
        'Ez dago arazorik',
        8.2
    );
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `pakete_egoera`
--
CREATE TABLE `pakete_egoera` (
    `id_Egoera` int(11) NOT NULL,
    `id_Langileak` int(11) NOT NULL,
    `id_Destinatzailea` int(11) NOT NULL,
    `id_Paketea` int(11) NOT NULL,
    `Egoera` varchar(25) NOT NULL,
    `mezua` varchar(100) DEFAULT NULL,
    `data_ordua` datetime(6) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;
--
-- Volcado de datos para la tabla `pakete_egoera`
--
INSERT INTO `pakete_egoera` (
        `id_Egoera`,
        `id_Langileak`,
        `id_Destinatzailea`,
        `id_Paketea`,
        `Egoera`,
        `mezua`,
        `data_ordua`
    )
VALUES (
        1,
        2,
        2,
        1,
        'Bidean',
        NULL,
        '2024-05-29 13:09:15.000000'
    ),
    (
        2,
        1,
        3,
        2,
        'Entregatuta',
        NULL,
        '2024-05-30 14:12:00.000000'
    );
--
-- Índices para tablas volcadas
--
--
-- Indices de la tabla `bezeroa`
--
ALTER TABLE `bezeroa`
ADD PRIMARY KEY (`id_Bezeroa`);
--
-- Indices de la tabla `langileak`
--
ALTER TABLE `langileak`
ADD PRIMARY KEY (`id_Langileak`);
--
-- Indices de la tabla `paketea`
--
ALTER TABLE `paketea`
ADD PRIMARY KEY (`id_Paketea`, `id_Langilea`, `id_Bezeroa`),
    ADD KEY `fk_Paketea_Langileak1_idx` (`id_Langilea`),
    ADD KEY `fk_Paketea_Destinatzailea1_idx` (`id_Bezeroa`);
--
-- Indices de la tabla `pakete_egoera`
--
ALTER TABLE `pakete_egoera`
ADD PRIMARY KEY (`id_Egoera`),
    ADD KEY `fk_Pakete_Egoera_Paketea1_idx` (`id_Paketea`, `id_Langileak`, `id_Destinatzailea`);
--
-- AUTO_INCREMENT de las tablas volcadas
--
--
-- AUTO_INCREMENT de la tabla `langileak`
--
ALTER TABLE `langileak`
MODIFY `id_Langileak` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 112;
--
-- AUTO_INCREMENT de la tabla `paketea`
--
ALTER TABLE `paketea`
MODIFY `id_Paketea` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 137;
--
-- AUTO_INCREMENT de la tabla `pakete_egoera`
--
ALTER TABLE `pakete_egoera`
MODIFY `id_Egoera` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 3;
--
-- Restricciones para tablas volcadas
--
--
-- Filtros para la tabla `paketea`
--
ALTER TABLE `paketea`
ADD CONSTRAINT `fk_Paketea_Destinatzailea1` FOREIGN KEY (`id_Bezeroa`) REFERENCES `bezeroa` (`id_Bezeroa`),
    ADD CONSTRAINT `fk_Paketea_Langileak1` FOREIGN KEY (`id_Langilea`) REFERENCES `langileak` (`id_Langileak`);
--
-- Filtros para la tabla `pakete_egoera`
--
ALTER TABLE `pakete_egoera`
ADD CONSTRAINT `fk_Pakete_Egoera_Paketea1` FOREIGN KEY (`id_Paketea`, `id_Langileak`, `id_Destinatzailea`) REFERENCES `paketea` (`id_Paketea`, `id_Langilea`, `id_Bezeroa`);
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;