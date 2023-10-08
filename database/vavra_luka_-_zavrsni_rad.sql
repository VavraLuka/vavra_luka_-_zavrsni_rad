-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 04:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vavra_luka_-_zavrsni_rad`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(34) NOT NULL,
  `favoritesList` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `userEmail`, `favoritesList`) VALUES
(3, 'ana.horvat@gmail.com', '51,46,43');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(80) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `product` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(10, 'luka123vavra@gmail.com'),
(15, 'lvavra@tvz.hr'),
(22, 'luka.novak@gmail.com'),
(23, 'ana.horvat@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(20) NOT NULL,
  `userName` varchar(40) NOT NULL,
  `userSurname` varchar(40) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `total_price` int(20) NOT NULL,
  `products` mediumtext NOT NULL,
  `products_IDs` mediumtext NOT NULL,
  `products_manufacturers` mediumtext NOT NULL,
  `products_prices` mediumtext NOT NULL,
  `products_total_prices` mediumtext NOT NULL,
  `products_quantities` mediumtext NOT NULL,
  `submit_date` date NOT NULL,
  `submit_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userName`, `userSurname`, `userEmail`, `total_price`, `products`, `products_IDs`, `products_manufacturers`, `products_prices`, `products_total_prices`, `products_quantities`, `submit_date`, `submit_time`) VALUES
(7, 'Luka', 'Vavra', 'lvavra@tvz.hr', 797, 'Powercord UK C13,BS-2011 MK II,PA 502,B112D', '22,50,43,42', 'the sssnake,Millenium,the box,Behringer', '\r\n                3.59,\r\n                29.00,\r\n                218.00,\r\n                239.00', '14.36,87,218,478', '4,3,1,2', '2023-05-29', '22:54:28'),
(8, 'Luka', 'Vavra', 'lvavra@tvz.hr', 973, 'PA 502,B112D,MA120 MKII', '43,42,45', 'the box,Behringer,the box', '\r\n                218.00,\r\n                239.00,\r\n                149.00', '436,239,298', '2,1,2', '2023-05-29', '22:55:58'),
(12, 'Luka', 'Vavra', 'lvavra@tvz.hr', 689, 'Eurolive B212D,PicoSpot 20 LED', '1,52', 'Behringer,Fun Generation', '\r\n                278.00,133', '556,133', '2,1', '2023-05-29', '23:23:01'),
(13, 'Luka', 'Vavra', 'lvavra@tvz.hr', 822, 'Eurolive B212D,PicoSpot 20 LED', '1,52', 'Behringer,Fun Generation', '\r\n                278.00,133', '556,266', '2,2', '2023-05-29', '23:24:08'),
(14, 'Luka', 'Vavra', 'lvavra@tvz.hr', 822, 'Eurolive B212D,PicoSpot 20 LED', '1,52', 'Behringer,Fun Generation', '\r\n                278.00,133', '556,266', '2,2', '2023-05-29', '23:24:25'),
(15, 'Ana', 'Horvat', 'ana.horvat@gmail.com', 666, 'Mixstream Pro+', '54', 'Numark', '666', '666', '1', '2023-05-30', '19:47:47'),
(16, 'Ana', 'Horvat', 'ana.horvat@gmail.com', 1305, 'ZED-14', '55', 'Allen & Heath', '435', '1305', '3', '2023-05-30', '19:48:15'),
(17, 'Ana', 'Horvat', 'ana.horvat@gmail.com', 436, 'PA 502', '43', 'the box', '218', '436', '2', '2023-05-30', '19:48:43'),
(18, 'Ana', 'Horvat', 'ana.horvat@gmail.com', 931, 'MA120 MKII,Mixstream Pro+,YPK2030', '32,54,24', 'the box,Numark,the sssnake', '\r\n                131.12,666,3.49', '262.24,666,3.49', '2,1,1', '2023-06-27', '22:52:10'),
(19, 'Luka', 'Vavra', 'lvavra@tvz.hr', 1571, 'Mixstream Pro+,B112D', '54,42', 'Numark,Behringer', '\r\n                666.00,239', '1332,239', '2,1', '2023-09-27', '21:42:38'),
(20, 'Luka', 'Vavra', 'lvavra@tvz.hr', 1112, 'Eurolive B212D', '1', 'Behringer', '\r\n                278.00', '1112', '4', '2023-09-27', '21:44:45');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` varchar(12) DEFAULT NULL,
  `name` varchar(60) DEFAULT NULL,
  `manufacturer` varchar(30) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `quantity` int(4) DEFAULT NULL,
  `speakerType` varchar(20) DEFAULT NULL,
  `drivers` varchar(100) DEFAULT NULL,
  `RMS` int(4) DEFAULT NULL,
  `maxPower` int(4) DEFAULT NULL,
  `soundPressure` int(4) DEFAULT NULL,
  `maxFrequency` int(3) DEFAULT NULL,
  `minFrequency` int(5) DEFAULT NULL,
  `dimensions` varchar(24) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `imageURL` varchar(200) DEFAULT NULL,
  `salesCount` int(4) NOT NULL DEFAULT 0,
  `faders` int(3) DEFAULT NULL,
  `inputs` int(3) DEFAULT NULL,
  `outputs` int(3) DEFAULT NULL,
  `cableType` varchar(20) DEFAULT NULL,
  `length` float DEFAULT NULL,
  `leftJack` varchar(12) DEFAULT NULL,
  `leftJackType` varchar(6) DEFAULT NULL,
  `rightJack` varchar(12) DEFAULT NULL,
  `rightJackType` varchar(6) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `limiter` varchar(2) DEFAULT NULL,
  `channels` int(3) DEFAULT NULL,
  `power` int(6) DEFAULT NULL,
  `lightSource` varchar(60) DEFAULT NULL,
  `powerConsumption` int(5) DEFAULT NULL,
  `lightType` varchar(16) DEFAULT NULL,
  `beamAngle` varchar(10) DEFAULT NULL,
  `discount` int(3) NOT NULL DEFAULT 0,
  `caseFor` varchar(60) DEFAULT NULL,
  `caseType` varchar(14) DEFAULT NULL,
  `accessoryType` varchar(14) DEFAULT NULL,
  `description` varchar(800) DEFAULT NULL,
  `additionalLine1` varchar(30) DEFAULT NULL,
  `additionalLineValue1` varchar(200) DEFAULT NULL,
  `additionalLine2` varchar(30) DEFAULT NULL,
  `additionalLineValue2` varchar(200) DEFAULT NULL,
  `additionalLine3` varchar(30) DEFAULT NULL,
  `additionalLineValue3` varchar(200) DEFAULT NULL,
  `review` float NOT NULL DEFAULT 0,
  `reviewCount` int(5) NOT NULL DEFAULT 0,
  `softwareSupport` varchar(100) DEFAULT NULL,
  `deckNumber` int(4) DEFAULT NULL,
  `externalPowerSource` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `name`, `manufacturer`, `price`, `quantity`, `speakerType`, `drivers`, `RMS`, `maxPower`, `soundPressure`, `maxFrequency`, `minFrequency`, `dimensions`, `weight`, `imageURL`, `salesCount`, `faders`, `inputs`, `outputs`, `cableType`, `length`, `leftJack`, `leftJackType`, `rightJack`, `rightJackType`, `color`, `limiter`, `channels`, `power`, `lightSource`, `powerConsumption`, `lightType`, `beamAngle`, `discount`, `caseFor`, `caseType`, `accessoryType`, `description`, `additionalLine1`, `additionalLineValue1`, `additionalLine2`, `additionalLineValue2`, `additionalLine3`, `additionalLineValue3`, `review`, `reviewCount`, `softwareSupport`, `deckNumber`, `externalPowerSource`) VALUES
(1, 'speakers', 'Eurolive B212D', 'Behringer', 278, 14, 'activeSpeaker', '12', 345, 550, 125, 18000, 65, '550 x 345 x 270', 14.5, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/246474/5351269_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4.2, 4, '', NULL, NULL),
(2, 'adapters', 'Adapter za slušalice', 'the t.bone', 2.66, 63, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/300470/12337492_800.jpg', 23, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'Zlatna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4.6, 18, NULL, NULL, NULL),
(3, 'cables', 'SK366-2-RED Midi', 'the sssnake', 3, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/129093/9929056_800.jpg', 3, NULL, NULL, NULL, 'midiCable', 200, 'DIN 5-pin (m', 'male', 'DIN 5-pin (m', 'male', 'Crvena', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, 2, NULL, NULL, NULL),
(4, 'speakers', 'Achat 115 M', 'the box pro', 525, 0, 'passiveSpeaker', '5\" bass + 1.4\" neoademijski mid-range/visokotonac (3\" voice coil)', 350, 1400, 131, 17000, 60, '438 x 440 x 766', 32, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/214529/14055747_800.jpg', 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4.9, 19, NULL, NULL, NULL),
(5, 'speakers', 'Pyrit 15', 'the box', 249, 12, 'passiveSpeaker', '15\" bass + 1.7\" titanski kompresijski driver', 350, 1400, 128, 20000, 45, '462 x 397 x 780', 26.8, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/299646/7178788_800.jpg', 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 3, NULL, NULL, NULL),
(6, 'speakers', 'Achat 112 M', 'the box pro', 379, 8, 'passiveSpeaker', '12\" bass + 1.4\" neoademijski mid-range/visokotonac (3\" voice coil)', 350, 1400, 131, 18000, 60, '360 x 600 x 365', 21, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/230512/14060412_800.jpg', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'Disperzija zvuka', '60° x 40°', 'Impedancija', '8 ohma', NULL, NULL, 4.5, 2, NULL, NULL, NULL),
(7, 'speakers', 'ELX 112', 'EV', 285, 6, 'passiveSpeaker', '12\" woofer/midrange + 1.5\" visokotonac', 250, 1000, 132, 20000, 55, '607 x 362 x 340', 15.8, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/264580/12872732_800.jpg', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'Disperzija zvuka', '90° x 50°', 'Impedancija', '8 ohma', NULL, NULL, 4, 1, NULL, NULL, NULL),
(8, 'speakers', 'PA 502', 'the box', 215, 10, 'passiveSpeaker', '15\" woofer + visokotonac sa 44 mm titanijskim driver-om', 300, 1200, 121, 20000, 35, '715 x 495 x 450', 25.5, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/160814/12315732_800.jpg', 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'Disperzija zvuka', '50-100° x 55°', 'Impedancija', '8 ohma', 'Boja', 'Crna', 3.7, 4, NULL, NULL, NULL),
(9, 'speakers', 'ZLX 12', 'EV', 289, 4, 'passiveSpeaker', '12 woofer\" + 1,5\" visokotonac', 250, 1000, 125, 20000, 55, '610 x 356 x 356', 14.9, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/313074/13261991_800.jpg', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'Disperzija zvuka', '90° x 60°', 'Impedancija', '8 ohma', NULL, NULL, 3, 1, NULL, NULL, NULL),
(10, 'speakers', 'S1 Pro System', 'Bose', 489, 12, 'activeSpeaker', '6\" woofer + 3x 2.25\" visokotonac', 160, 320, 103, 16000, 70, '330 x 241 x 286', 6.8, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/430651/12803077_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14, NULL, NULL, NULL, NULL, 'Disperzija zvuka', '100° x 40°', 'Bluetooth', 'Da', 'Baterija', 'Punjiva baterija, autonomija rada do 11 sati', 0, 0, NULL, NULL, NULL),
(11, 'speakers', 'EON715', 'JBL', 599, 6, 'activeSpeaker', '15\" woofer + 1\" visokotonac', 650, 1300, 127, 20000, 60, '382 x 669 x 324', 14.5, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/531540/16959655_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'Disperzija zvuka', '100° x 60°', 'Bluetooth', 'Da', 'Pojačalo', 'Class-D', 0, 0, NULL, NULL, NULL),
(12, 'speakers', 'DR112DSP', 'Behringer', 239, 10, 'activeSpeaker', '12\" woofer + 1.35\" kompresijski driver', 300, 1200, 134, 19000, 50, '602 x 359 x 359', 17, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/470895/14550818_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'Pojačalo', 'Class-D', 'Bluetooth', 'Da', 'Boja', 'Crna', 0, 0, NULL, NULL, NULL),
(13, 'speakers', 'DR115DSP', 'Behringer', 295, 10, 'activeSpeaker', '15\" woofer + 1.75\" kompresijski driver', 400, 1400, 136, 19000, 45, '687 x 422 x 390', 21.4, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/470896/17750808_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'Bluetooth', 'Da', 'Boja', 'Crna', 'Pojačalo', 'Class-D', 0, 0, NULL, NULL, NULL),
(14, 'speakers', 'K 8.2', 'QSC', 789, 4, 'activeSpeaker', '8\" Woofer + 1.4\" titanijski kompresijski driver', 500, 2000, 128, 20000, 55, '449 x 280 x 269', 12.2, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/412300/12133462_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'Disperzija zvuka', '105°', 'Veličina stalka', '35 mm', 'Broj ulaza', '3', 0, 0, NULL, NULL, NULL),
(15, 'speakers', 'DSP 112', 'the box pro', 229, 14, 'activeSpeaker', '12\" woofer + 1\" kompresijski driver s 1.4\" voice coil', 300, 1200, 134, 19000, 53, '348 x 607 x 355', 14.6, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/401529/12238562_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'Disperzija zvuka', '90° x 60°', 'Pojačalo', 'Class-D', 'Boja', 'Crna', 0, 0, NULL, NULL, NULL),
(16, 'speakers', 'DSP 108', 'the box pro', 168, 4, 'activeSpeaker', '8\" woofer + 1\" kompresijski driver', 200, 600, 124, 19000, 61, '487 x 275 x 270', 6.7, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/454510/14605763_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, NULL, NULL, NULL, NULL, 'Disperzija zvuka', '90° x 60°', 'Boja', 'Crna', 'Pojačalo', 'Class D & Class AB', 0, 0, NULL, NULL, NULL),
(17, 'speakers', 'DSP 110', 'the box pro', 205, 14, 'activeSpeaker', '10\" woofer + 1\" kompresijski driver s 1.4\" voice coil', 250, 1000, 132, 19000, 58, '298 x 523 x 307', 13, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/401528/12293182_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'Disperzija zvuka', '90° x 60°', 'Boja', 'Crna', 'Pojačalo', 'Class D', 0, 0, NULL, NULL, NULL),
(18, 'accessories', 'BS-2211B MKII Set', 'Millenium', 44, 52, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/304849/7104777_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, NULL, 0, '', NULL, 'stands', NULL, 'Broj stalaka', '2', NULL, NULL, NULL, NULL, 4.2, 7, NULL, 0, NULL),
(19, 'cables', 'SM10BK', 'the sssnake', 6.9, 40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/128513/9507656_800.jpg', 12, NULL, NULL, NULL, 'microphoneCable', 1000, 'XLR 3-pin', 'female', 'XLR 3-pin', 'male', 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'Promjer', '6 mm', NULL, NULL, 4.9, 9, NULL, NULL, NULL),
(20, 'cables', 'SM6BK', 'the sssnake', 5.3, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/128512/8584486_800.jpg', 15, NULL, NULL, NULL, 'microphoneCable', 600, 'XLR 3-pin', 'female', 'XLR 3-pin', 'male', 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'Promjer', '6 mm', NULL, NULL, NULL, NULL, 4.9, 8, NULL, NULL, NULL),
(21, 'cables', 'TPM 10', 'pro snake', 9.8, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/213367/11370589_800.jpg', 9, NULL, NULL, NULL, 'microphoneCable', 1000, 'XLR', 'female', 'XLR', 'male', 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4.7, 5, NULL, NULL, NULL),
(22, 'cables', 'Powercord UK C13', 'the sssnake', 3.99, 50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/110068/9193875_800.jpg', 32, NULL, NULL, NULL, 'powerCable', 150, 'UK utikač', 'male', 'C13', 'male', 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10, NULL, NULL, NULL, NULL, 'Zaštita', '13 A fuse', NULL, NULL, NULL, NULL, 4.4, 23, NULL, NULL, NULL),
(23, 'cables', 'Mains Power Cable', 'the sssnake', 6.2, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/175751/10823761_800.jpg', 11, NULL, NULL, NULL, 'powerCable', 500, 'EU utikač', 'male', 'C13', 'male', 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4.5, 3, NULL, NULL, NULL),
(24, 'cables', 'YPK2030', 'the sssnake', 3.49, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/153180/12432662_800.jpg', 7, NULL, NULL, NULL, 'audioCable', 300, ' 2x 6.3 mm M', 'male', '3.5 mm Stere', 'male', 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4.6, 4, NULL, NULL, NULL),
(25, 'accessories', 'V2020 Black 10 Pack', 'Thomann', 6.3, 160, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/105250/6961661_800.jpg', 39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'other', NULL, 'Dimenzije', '20 x 200 mm', 'Za kablove', 'Do 10 m', NULL, NULL, 4.5, 23, NULL, NULL, NULL),
(26, 'speakers', 'Dave 18 G4X', 'LD Systems', 1769, 6, 'speakerBundle', '18\" subwoofer + 2x 8\" satelit zvuÄnika', 2000, 4000, 134, 20000, 30, 'Više dimenzija', 63.2, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/557059/17988703_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'Disperzija zvuka', '90° x 30°', 'Subwoofer dimenzije', '665 x 545 x 640 mm', 'Satelit zvučnik dimenzija', '260 x 275 x 470 mm', 0, 0, NULL, NULL, NULL),
(27, 'speakers', 'EON 715 Power Bundle', 'JBL', 3444, 10, 'speakerBundle', '2x 18\" woofer + 2x 15\" woofer i 1\" visokotonac', 2800, 5600, 134, 20000, 40, 'Više dimenzija', 103, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/532960/16823683_800.jpg', 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'Subwoofer dimenzija', '609 x 667 x 637 mm', 'Satelit zvučnik dimenzija', '382 x 669 x 324 mm', 'Dodatna oprema', '2x stalak + 2x XLR kabel', 0, 0, NULL, NULL, NULL),
(28, 'speakers', 'CL 106/112MKII Basis Bundle', 'the box', 559, 10, 'speakerBundle', '12\" subwoofer + 2x 6.5\" woofer + kompresijski driver', 320, 1100, 118, 19000, 40, 'Više dimenzija', 45, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/350772/9191760_800.jpg', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'Disperzija zvuka', '90° x 60°', 'Subwoofer dimenzija', '420 x 520 x 500 mm', 'Satelit zvučnik dimenzija', ' 250 x 230 x 375 mm', 3.7, 5, NULL, NULL, NULL),
(29, 'speakers', 'CL 108/115MKII Basis Bundle', 'the box', 729, 4, 'speakerBundle', '15\" woofer + 2x  8\" woofer + 1\" kompresijski driver', 520, 1700, 122, 19000, 35, 'Više dimenzija', 58, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/350775/9191790_800.jpg', 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'Subwoofer dimenzija', '460 x 630 x 610 mm', 'Satelit zvučnik dimenzija', '280 x 250 x 415 mm', 'Disperzija zvuka', '90° x 60°', 2.3, 4, NULL, NULL, NULL),
(30, 'speakers', 'Achat 112 Sub A & DSP108 Set', 'the box pro', 990, 10, 'speakerBundle', '2x 12\" Subwoofer + 2x 8\" woofer + 1\" kompresijski driver ', 1100, 2600, 124, 18000, 40, 'Više dimenzija', 59.4, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/478977/14632136_800.jpg', 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'Subwoofer dimenzija', '450 x 380 x 456 mm', 'Satelit zvučnik dimenzija', '487 x 275 x 270 mm', 'Disperzija zvuka', '90° x 60°', 5, 3, NULL, NULL, NULL),
(31, 'speakers', 'DSX 110 M', 'the box pro', 199, 6, 'monitorSpeaker', '10\" woofer + 1.35\" koaksijalan driver', 300, 900, 130, 18000, 60, '450 x 535 x 403', 14.6, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/505046/16368648_800.jpg', 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, 'Disperzija zvuka', '60° x 60°', 'Otvor za stalak', '36 mm', 'Pojačalo', 'Class D + AB', 3.9, 7, NULL, NULL, NULL),
(32, 'speakers', 'MA120 MKII', 'the box', 149, 4, 'monitorSpeaker', '12\" Woofer + visokotonac', 120, 240, 120, 16000, 80, '370 x 580 x 420', 16.5, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/195950/7228139_800.jpg', 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 12, NULL, NULL, NULL, NULL, 'Kućište', 'Drvo', 'Broj ulaza', '2', NULL, NULL, 4, 3, NULL, NULL, NULL),
(33, 'accessories', 'Stage Tape 400BK', 'Stairville', 3.99, 78, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/154244/10404437_800.jpg', 52, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'other', NULL, 'Dužina', '50 m', 'Širina', '50 mm', 'Boja', 'Crna', 4.7, 36, NULL, NULL, NULL),
(34, 'cables', 'SM6RD', 'the sssnake', 5.3, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/158895/8585436_800.jpg', 26, NULL, NULL, NULL, 'microphoneCable', 600, 'XLR', 'female', 'XLR', 'male', 'Crvena', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'Presjek žice', '2 x 0.22 mm²', NULL, NULL, NULL, NULL, 4.4, 13, NULL, NULL, NULL),
(35, 'cables', 'SK233-1,5 XLR Patch', 'the sssnake', 4.11, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/132005/9930116_800.jpg', 7, NULL, NULL, NULL, 'microphoneCable', 150, 'XLR', 'female', 'XLR', 'male', 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4.6, 3, NULL, NULL, NULL),
(36, 'speakers', 'B615D', 'Behringer', 355, 20, 'activeSpeaker', '15\" woofer + 1.75\" kompresijski driver', 500, 1500, 126, 18000, 60, '732 x 470 x 424', 29.7, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/280265/14837521_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'Boja', 'Crna', 'Kućište', 'Plastika', NULL, NULL, 0, 0, NULL, NULL, NULL),
(37, 'speakers', 'Achat 112 A', 'the box pro', 715, 10, 'activeSpeaker', '15\" woofer + 1.75\" kompresijski driver', 600, 1200, 135, 17000, 63, '550 x 600 x 718', 43, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/325263/14057952_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'Disperzija zvuka', '55° x 40°', 'Boja', 'Crna', NULL, NULL, 0, 0, NULL, NULL, NULL),
(38, 'speakers', 'PA 302 A', 'the box', 266, 10, 'activeSpeaker', '12\" woofer + VCD visokotonac', 400, 800, 120, 18000, 50, '600 x 415 x 390', 23, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/160813/12651136_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'Disperzija zvuka', '55 x 55° -100°', 'Boja', 'Crna', 'Kućište', 'Plastika', 0, 0, NULL, NULL, NULL),
(39, 'speakers', 'B115W', 'Behringer', 345, 10, 'activeSpeaker', '15\" woofer + 1\" visokotonac', 250, 1000, 128, 20000, 45, '713 x 427 x 313', 17.7, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/319596/14413009_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'Bluetooth', 'Da', 'Boja', 'Crna', 'Kućište', 'Plastika', 0, 0, NULL, NULL, NULL),
(40, 'speakers', 'ZLX 12P', 'EV', 435, 10, 'activeSpeaker', ' 12\" woofer + 1.5\" kompresijski driver', 250, 1000, 125, 20000, 55, '610 x 356 x 356', 15.6, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/313039/14407389_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'Disperzija zvuka', '90° x 60°', 'Pojačalo', 'Class D', 'Kućište', 'Polipropilen plastika', 0, 0, NULL, NULL, NULL),
(41, 'speakers', 'Mon A12', 'the box pro', 348, 8, 'monitorSpeaker', '12\" woofer + 1,35\" koaksijalni visokotonac', 350, 700, 124, 20000, 50, '510 x 340 x 500', 15, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/309205/7360603_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'Disperzija zvuka', '80° x 80°', 'Boja', 'Crna', 'Kućište', 'Drvo', 0, 0, NULL, NULL, NULL),
(42, 'speakers', 'B112D', 'Behringer', 239, 9, 'activeSpeaker', '12\" woofer + 1,35\" kompresijski driver', 350, 1000, 128, 20000, 50, '568 x 342 x 270', 12.3, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/284049/15160138_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', 'Boja', 'Siva', 'Kućište', 'Plastika', 'Utor za stalak', '35 mm', 0, 0, NULL, NULL, NULL),
(43, 'speakers', 'PA 502', 'the box', 218, 6, 'passiveSpeaker', '15\" woofer + horn sa 44 mm titanijskim driver-om', 300, 600, 122, 20000, 35, '715 x 495 x 450', 25.5, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/160814/12315732_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'Boja', 'Crna', 'Kućište', 'Plastika', NULL, NULL, 0, 0, NULL, NULL, NULL),
(44, 'speakers', 'Achat 204 A', 'the box pro', 133, 6, 'activeSpeaker', ' 2x 4\" woofer + 1\" Fabric dome visokotonac', 80, 320, 112, 20000, 90, '172 x 142 x 360', 4.5, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/375150/17386838_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'Disperzija zvuka', '90° x 90°', 'Boja', 'Crna', 'Kućište', 'Drvo', 0, 0, NULL, NULL, NULL),
(45, 'speakers', 'MA120 MKII', 'the box', 149, 12, 'monitorSpeaker', '12\" woofer + visokotonac', 120, 240, 120, 16000, 80, '370 x 580 x 420', 16.5, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/195950/7228139_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'Kućište', 'Drvo', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(46, 'cables', 'TPM 6', 'pro snake', 7.3, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/213368/8608147_800.jpg', 23, NULL, NULL, NULL, 'microphoneCable', 600, 'XLR', 'female', 'XLR', 'male', 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4.4, 17, NULL, NULL, NULL),
(47, 'accessories', 'MS 2003', 'Millenium', 14.9, 54, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/133136/13413261_800.jpg', 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'stands', NULL, 'Visina', '105 - 170 cm', 'Prilagodljiv držač', '75 cm', 'Boja', 'Crna', 4.2, 17, NULL, NULL, NULL),
(48, 'adapters', '1820 Adapter', 'the sssnake', 0.7, 124, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/128509/12321232_800.jpg', 34, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'Siva', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4.8, 28, NULL, NULL, NULL),
(49, 'accessories', 'BS-2020S MK II', 'Millenium', 29, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/299891/13055834_800.jpg', 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'stands', NULL, 'Materijal', 'Metal', 'Boja', 'Crna', 'Nosivost', '35 kg', 4.3, 5, NULL, NULL, NULL),
(50, 'accessories', 'BS-2011 MK II', 'Millenium', 29, 48, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/323921/14688941_800.jpg', 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'stands', NULL, 'Boja', 'Crna', 'Promjer', '35 mm', 'Nosivost', '30 kg', 4.1, 12, NULL, NULL, NULL),
(51, 'amplifiers', 'TA 2400 MK-X', 'the t.amp', 333, 24, NULL, NULL, NULL, NULL, NULL, 0, 0, '420 x 450 x 95', 19.7, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/156557/15007245_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Da', 2, 2400, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'RMS 4 ohma', '2x 1200 W', 'RMS 8 ohma', '2x 760 W', 'Pojačalo', 'Class AB', 0, 0, NULL, NULL, NULL),
(52, 'light', 'PicoSpot 20 LED', 'Fun Generation', 133, 33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '174 x 162 x 242', 3, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/372642/13714511_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1x 12 W CREE', 35, 'movingHeadSpot', '13', 0, NULL, NULL, NULL, NULL, 'Strobo efekt', '0-20 Hz', '3 DMX moda', '5 & 9 & 11 kanala', NULL, NULL, 0, 0, NULL, NULL, NULL),
(53, 'covers', 'Case Behringer B 207', 'Thomann', 53, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/486782/15618865_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Behringer B 207', 'flightCases', NULL, NULL, 'Dimenzije', '412 x 252 x 304 mm', 'Materijal', 'Aluminij + plastika', NULL, NULL, 0, 0, NULL, NULL, NULL),
(54, 'controllers', 'Mixstream Pro+', 'Numark', 666, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '566 x 74 x 284', 3.7, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/559714/17970162_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'Serato DJ Intro (Pro), Virtual DJ', 2, 'Da'),
(55, 'mixers', 'ZED-14', 'Allen & Heath', 435, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '384 x 95 x 465', 7.5, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/137330/11228955_800.jpg', 0, 99, 16, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(56, 'covers', 'BS1 torba', 'thomann', 40, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_47/471699/14455899_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, ' Bose S1 i Bose S1 Pro+ aktivne zvučne kutije', 'casesAndBags', NULL, NULL, 'Dimenzije', '29 x 28 x 36 cm', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(57, 'accessories', 'USB Stick 16GB', 'Botex', 9.3, 50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_54/543182/17936570_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'storageUnits', NULL, 'USB', '3.0', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(58, 'covers', 'Eco Wood 1210er', 'Fun Generation', 92, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_42/427665/12935354_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Siva', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Technics SL 1210 i SL 1200', 'casesAndBags', NULL, NULL, 'Dimenzija', '513 x 443 x 215 mm', 'Težina', '6.5 kg', NULL, NULL, 0, 0, NULL, NULL, NULL),
(59, 'covers', 'Case Pioneer CDJ-3000 PB', 'Thon', 169, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_54/542495/17610975_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Pioneer CDJ-3000', 'flightCases', NULL, NULL, 'Dimenzije', '410 x 590 x 216 mm', 'Težina', '6.5 kg', 'Težina s playerom', '12 kg', 0, 0, NULL, NULL, NULL),
(60, 'covers', 'Everse 8 Raincover', 'EV', 77, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_55/552510/18420232_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'EV Everse 8', 'covers', NULL, NULL, 'Vodootporno', 'Da', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(61, 'covers', 'EVERSE 8 Tote', 'EV', 99, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_57/575179/18536958_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'EVERSE 8', 'casesAndBags', NULL, '', 'Težina', '1.15 kg', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(62, 'covers', 'Bose S1 PRO Bag Premium', 'Thomann', 40, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_48/484091/15297143_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Bose S1 PRO i Bose S1 Pro+', 'casesAndBags', NULL, NULL, 'Dimenzije', '270 x 310 x 350 mm', 'Vodootporno', 'Da', NULL, NULL, 0, 0, NULL, NULL, NULL),
(63, 'covers', 'S1 Pro Slip Cover', 'Bose', 29, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_46/460174/13892866_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Bose S1 Pro i Bose S1 Pro+', 'casesAndBags', NULL, NULL, 'Materijal', 'Najlon', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(64, 'covers', 'Mix Case CD/Mixer', 'Thomann', 71, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_41/410003/12131497_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Siva', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Mikseri i CD playeri', 'flightCases', NULL, NULL, 'Dimenzija', '405 x 475 x 175 mm', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(65, 'accessories', 'MDR-MV1', 'Sony', 411, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_56/563964/18139583_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'headphones', NULL, 'Frekvencijski raspon', '5 - 80,000 Hz', 'Težina', '223 g', 'Impedancija', '24 Ohm', 0, 0, NULL, NULL, NULL),
(66, 'controllers', 'Traktor S2 MK3', 'Native Instruments', 298, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '486 x 265 x 59', 2.3, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_44/447929/13624516_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'TRAKTOR PRO 3', 2, 'Da'),
(67, 'controllers', 'Mixtrack Platinum FX', 'Numark', 279, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '536 x 246 x 51', 2.4, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_49/493262/15131288_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'Serato DJ Lite', 4, 'Ne'),
(68, 'controllers', 'DJ Control Inpulse T7', 'Hercules', 725, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '652 x 350 x 90', 5, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_56/566514/18451927_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'Serato DJ lite', 2, 'Ne'),
(69, 'controllers', 'Prime 4+', 'Denon DJ', 2699, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '728 x 497 x 104', 9.7, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_56/568912/18459202_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'Serato DJ Pro', 4, 'Da'),
(70, 'controllers', 'Four', 'Rane', 1599, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '784 x 405 x 107', 8.3, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_56/560326/18016726_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'Serato', 4, 'Ne'),
(71, 'controllers', 'DJ Control Inpulse 500', 'Hercules', 289, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '542 x 296 x 70', 3.2, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_49/491090/15196993_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'Serato DJ Pro', 4, 'Ne'),
(72, 'controllers', 'Traktor S3', 'Native Instruments', 477, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '540 x 66 x 360', 3.2, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_47/475701/14700871_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'Traktor 3', 4, 'Ne'),
(73, 'mixers', 'MG16XU', 'Yamaha', 577, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '444 x 130 x 500', 6.8, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_33/333837/8414219_800.jpg', 0, 16, 14, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(74, 'mixers', 'Onyx8', 'Mackie', 349, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '279 x 280 x 53', 3.2, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_50/500237/16907840_800.jpg', 0, 14, 6, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(75, 'mixers', 'ProFX12v3', 'Mackie', 345, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '102 × 330 × 376', 3.6, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_47/473569/14655931_800.jpg', 0, 16, 8, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(76, 'mixers', 'Xenyx 802S', 'Behringer', 95, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '189 x 220 x 47', 1.6, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_56/560494/18009678_800.jpg', 0, 18, 12, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(77, 'mixers', 'Xenyx X1204 USB', 'Behringer', 216, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '97 x 270 x 328', 2.8, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_24/243148/6890140_800.jpg', 0, 14, 6, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(78, 'mixers', 'Model 24', 'Tascam', 1190, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '577 x 529 x 106', 10.4, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_44/448627/14926720_800.jpg', 0, 26, 12, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(79, 'mixers', 'xmix 1202 FXMP USB', 'the t.mix', 199, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '345 x 100 x 340', 4.7, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_42/422795/14854230_800.jpg', 0, 16, 6, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(80, 'adapters', '1672 Adapter', 'the sssnake', 6.7, 26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_12/128498/7669028_800.jpg', 0, NULL, NULL, NULL, NULL, 0, 'XLR', 'male', '6,3 mm', 'male', 'Siva', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(81, 'adapters', '1843 Adapter', 'the sssnake', 0.77, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_10/106472/11082451_800.jpg', 0, NULL, NULL, NULL, NULL, 0, '6,3 mm', 'male', '3,5', 'female', 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(82, 'adapters', 'TPA 1003 MB', 'pro snake', 4.99, 40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_25/259699/9280890_800.jpg', 0, NULL, NULL, NULL, NULL, 30, 'XLR', 'male', '3,5 mm', 'female', 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(83, 'adapters', 'Lightning to 3,5 mm Adapter', 'Apple', 10.3, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_46/466501/14184637_800.jpg', 0, NULL, NULL, NULL, NULL, 5, 'Lighting', 'male', '3,5 mm', 'female', 'Bijela', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(84, 'adapters', 'TPA 1003 FB', 'pro snake', 4.99, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_25/259700/9280915_800.jpg', 0, NULL, NULL, NULL, NULL, 30, '3,5 mm', 'female', 'XLR', 'female', 'Crni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(85, 'adapters', 'TPA 1003 FJ', 'pro snake', 4.99, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_25/259701/9280950_800.jpg', 0, NULL, NULL, NULL, NULL, 0.3, 'XLR', 'female', '6,3 mm', 'male', 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(86, 'light', 'TMH-13 Moving-Head Spot', 'Eurolite', 185, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '160 x 158 x 280', 2.7, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_37/372122/10823596_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10W Led', 30, 'movingHeadSpot', '13', 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(87, 'light', 'LED TMH-X4 Zoom Wash', 'Eurolite', 579, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '305 x 400 x 200', 8.2, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_49/490444/14988210_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19 x 15W RGBW LED', 225, 'movingHeadWash', '70', 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(88, 'light', 'Hero Wash 712 Z RGBW Zoom', 'Varytec', 299, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '215 x 300 x 145', 4.2, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_44/449222/13981926_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7x12 W RGBW 4in1 LED', 80, 'movingHeadWash', '70', 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(89, 'light', 'Hero Wash 340FX RGBW Zoom', 'Varytec', 411, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '255 x 368 x 187', 4.8, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_44/449223/13983416_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3x40W RGBW 4in1 LED', 134, 'movingHeadWash', '70', 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(90, 'light', 'NanoBeam 600', 'Cameo', 255, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '145 x 240 x 155', 3, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_47/473960/14494824_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '60W RGBW LED', 65, 'movingHeadBeam', '5', 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(91, 'light', 'ROOT Par 6', 'Cameo', 129, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '195 x 133 x 195', 1.2, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_49/490744/15191243_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6x12W Hexa-Colour', 58, 'LEDPar', '36', 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(92, 'light', 'Compact Par 18 MKII Black', 'Showtec', 205, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '256 x 285 x 96', 3, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_29/299987/6253952_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '18x3W RGB-in-1 LED', 60, 'LEDPar', '28', 0, NULL, NULL, NULL, 'Compact Par 18 MKII Black je kompaktan, ali snažan reflektor. Opremljen je s osamnaest 3-u-1 RGB LED dioda koje u kombinaciji sa snažnom optikom jamče savršenu izvedbu u svim situacijama. Compact Par 18 MKII ima IEC ulaz i izlaz za jednostavno povezivanje raznih uređaja. Zbog kompaktne aluminijske konstrukcije, ovaj uređaj je posebno prikladan za korištenje u malim prostorijama ili kao rešetkasta unutarnja rasvjeta.', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(93, 'amplifiers', 'E4-250', 'the t.amp', 329, 10, NULL, NULL, NULL, NULL, NULL, 20000, 30, '482 x 408 x 88', 15, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_34/348233/9384199_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Da', 4, 1000, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(94, 'amplifiers', 'I-Amp 4.500', 'Sirus', 515, 10, NULL, NULL, NULL, NULL, NULL, 2000, 20, '483 x 360 x 44', 6.3, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_55/551990/18407372_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Da', 4, 1800, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(95, 'amplifiers', 'Proline 3000', 'the t.amp', 699, 12, NULL, NULL, NULL, NULL, NULL, 2000, 30, '482 x 480 x 132', 37, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_16/168990/7943265_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Da', 4, 1200, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(96, 'amplifiers', 'A800', 'Behringer', 329, 8, NULL, NULL, NULL, NULL, NULL, 20000, 20, '483 x 220 x 94', 3.2, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_44/448701/13745556_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Da', 4, 900, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(97, 'amplifiers', 'IPX 2400', 'LAB Gruppen', 1555, 4, NULL, NULL, NULL, NULL, NULL, 22000, 20, '450 x 400 x 120', 7, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_53/533202/18254036_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Da', 6, 2400, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(98, 'amplifiers', 'DSP 4x4 Mini Amp', 'the t.racks', 199, 6, NULL, NULL, NULL, NULL, NULL, 18000, 30, '240 x 160 x 43', 1.6, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_49/495806/15874608_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Da', 4, 1200, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(99, 'amplifiers', 'Xti 4002', 'Crown', 1245, 10, NULL, NULL, NULL, NULL, NULL, 20000, 35, '485 x 89 x 311', 8.4, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_26/268582/7312675_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Da', 2, 1200, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(100, 'speakers', 'Elements E835 Top', 'HK Audio', 555, 18, 'passiveSpeaker', '8x 3,5\" full-range', 300, 600, 100, 20000, 140, '110 x 720 x 120', 4.5, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_28/287207/7284318_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(101, 'speakers', 'TA Power Bundle', 'the box', 1959, 4, 'speakerBundle', '2x18\" + 12x12\"', 900, 1800, 134, 22000, 35, '693 x 530 x 580', 150, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_19/195038/15392807_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', 'Subwooferi', '2x the box TA18', 'Sateliti', '2x the box TA12', 'Stalci', '2x Roadworx Multi Pole', 0, 0, NULL, NULL, NULL),
(102, 'speakers', 'Satmix 2.1 Bundle', 'Fun Generation', 450, 2, 'speakerBundle', '2x10 + 1x15', 500, 100, 128, 20000, 30, '470 x 515 x 356', 45, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_44/446439/14037182_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', 'Stalci', 'Millenium BS-2010', 'Kablovi', 'Fun Generation SPK 10', NULL, NULL, 0, 0, NULL, NULL, NULL),
(103, 'speakers', 'D115SP/D18 Power Bundle', 'Syrincs', 1666, 2, 'speakerBundle', '2x18 + 2x15', 900, 1800, 132, 22000, 30, '460 × 705 × 415', 90, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_55/555460/17757143_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', 'Subwooferi', 'Syrincs D18 Sub', 'Sateliti', 'Syrincs D115SP', 'Stalci', 'Roadworx Multi Pole', 0, 0, NULL, NULL, NULL),
(104, 'speakers', 'Stinger 8 G3', 'LD Systems', 299, 8, 'monitorSpeaker', 'Pasivni 8\" + 1\" monitor/full range', 300, 600, 118, 20000, 70, '270 x 457 x 290', 9.5, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_40/409111/12300197_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(105, 'speakers', 'ELX 112', 'EV', 345, 16, 'monitorSpeaker', '12\" woofer + 1.5\" visokotonac', 300, 600, 122, 18000, 60, '607 x 362 x 340', 15.8, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_26/264580/12872732_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(106, 'speakers', 'Zx1-90', 'EV', 399, 9, 'monitorSpeaker', '8\"/ 1\" drivers', 200, 800, 118, 18000, 70, '451 x 282 x 263', 8.4, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_18/186655/9006224_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(107, 'speakers', 'Line A6', 'Seeburg Acoustic', 1222, 17, 'monitorSpeaker', '12\" neoademijski woofer + 1\" visokotonac', 500, 1500, 132, 20000, 35, '360 x 340 x 606', 17, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_16/161502/12113632_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(24) NOT NULL,
  `surname` varchar(24) NOT NULL,
  `address` varchar(60) NOT NULL,
  `postalCode` int(8) NOT NULL,
  `city` varchar(24) NOT NULL,
  `state` varchar(16) NOT NULL,
  `contactNumber` varchar(20) NOT NULL,
  `email` varchar(34) NOT NULL,
  `passwordUser` varchar(100) NOT NULL,
  `status` varchar(12) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `address`, `postalCode`, `city`, `state`, `contactNumber`, `email`, `passwordUser`, `status`) VALUES
(14, 'Ana', 'Horvat', 'Mlinarska 3', 10000, 'Zagreb', 'Hrvatska', '+38598765432', 'ana.horvat@gmail.com', '$2y$10$KW3sFOiBX90WDlSdk3n/Muh2VWgnKpLmbyHzeqg3oIGMBun06lbHC', 'user'),
(15, 'Ivana', 'Božić', 'Ilije Garačanina 15', 11000, 'Beograd', 'Srbija', '+381641234567', 'ivana.bozic@gmail.com', '$2y$10$GBCvwwwGQ91ld5JKBT3OEuXC1wr60d1fQQNRRS3WyYw1SlOrse9zm', 'user'),
(16, 'Adis', 'Smajlović', 'Đoke Mazalića 23', 71000, 'Sarajevo', 'BiH', '+38761123456', 'adis.smajlovic@yahoo.com', '$2y$10$I/v4kZPvFaZX7RHxRqaPj.8C5RyBBoqwuVSLiqKonQ4ilNvwROtMe', 'user'),
(17, 'Gergely', 'Nagy', 'Dózsa György út 1', 1056, 'Budimpešta', 'Mađarska', '+36201234567', 'gergely.nagy@hotmail.com', '$2y$10$FWYoV6cn2BG49XBUR4pdoeAnMp3YSA5LTHpqw7dkRkWZzsW1gN46m', 'user'),
(18, 'Luka', 'Novak', 'Mariborska cesta 44', 2000, 'Maribor', 'Slovenija', '+38640123456', 'luka.novak@gmail.com', '$2y$10$MevmkQgN5W2z7ZANBii5/eaC1392BYLWkx3wwNNFVe/OzdBMhAyg6', 'user'),
(19, 'Marco', 'Rossi', 'Via Roma 14', 100, 'Rim', 'Italija', '+393401234567', 'marco.rossi@yahoo.com', '$2y$10$4ENKCjrM4TubdrgoaXmXuOWOIAD5Fe33TXxONaCECk0N.fz4hu57q', 'user'),
(20, 'Jovan', 'Petrović', 'Svetog Petra Cetinjskog 147', 81000, 'Podgorica', 'CrnaGora', '+38267123456', 'jovan.petrovic@hotmail.com', '$2y$10$McWr2o6UfLeNC7mB5MAL2uaMfu4VRNrjn5Hpf6DJEfoLb6y20MJPa', 'user'),
(21, 'Ivan', 'Petrović', 'Ulica Franje Tuđmana 10', 31000, 'Osijek', 'Hrvatska', '+385987654321', 'ivan.petrovic@email.com', '$2y$10$.qaMFPOQFxvqY4iv6fKf8Ojkm5ALHex0FC755QeDTF/DGg1KlIta.', 'user'),
(22, 'Jelena', 'Stojanović', 'Bulevar Despota Stefana 17', 11000, 'Beograd', 'Srbija', '+381623456789', 'jelena.stojanovic@email.com', '$2y$10$bBL30XjnM9H9XpwJm8iXBODe5RRXTm8yiS9toasXMYMvRQbPPkW0y', 'user'),
(23, 'Mirza', 'Šarić', 'Zmaja od Bosne 22A', 71000, 'Sarajevo', 'BiH', '+38761123456', 'mirza.saric@email.com', '$2y$10$fza3ywhiZ34WZ9BgzjT9GOOg2/DgeNJtg8YBGoH83T68mggp1znEq', 'user'),
(24, 'Eszter', 'Nagy', 'Rákóczi tér 1', 1084, 'Budapest', 'Mađarska', '+36304567890', 'eszter.nagy@email.com', '$2y$10$UypSCK5RDE7PjCexkjOU7.T0oXIBgZOnTI30YKAhVZiC5nPag9jby', 'user'),
(25, 'Maja', 'Kovač', 'Kardeljeva ulica 17', 1000, 'Ljubljana', 'Slovenija', '+38640987654', 'maja.kovac@email.com', '$2y$10$o1s8qKn8JKgcwzH5RmJZnOXIQtc6zKmIcXgen/MDVHuf.W36Ps/b6', 'user'),
(26, 'Paolo', 'Bianchi', 'Via Milano 13', 100, 'Roma', 'Italija', '+393456789012', 'paolo.bianchi@email.com', '$2y$10$6JzRd5nUkc5a2bCY04rOUO4.LGntdd40CTbrt9WeeoUYyubAIv9PK', 'user'),
(27, 'Nenad', 'Janković', 'Ul. 13. jul bb', 81000, 'Podgorica', 'CrnaGora', '+38268234567', 'nenad.jankovic@email.com', '$2y$10$8zW/jB09S0roiul0nHauQ.HXFMf7rutKmufeKPMiHGLNafaB1VtBi', 'user'),
(28, 'Luka', 'Vavra', 'Radićeva 13', 43500, 'Daruvar', 'Hrvatska', '+385981330950', 'lvavra@tvz.hr', '$2y$10$z4mHz5sO49ULoWlRRYcZTeBThdrJOzHkAknqNeggRB9RXLLepHRnC', 'admin'),
(29, 'Sara', 'Sarić', 'Gundulićeva 13', 43500, 'Daruvar', 'Hrvatska', '385981334950', 'ssaric@podrska.hr', '$2y$10$fOpgYQG0XoSbAHLRfOo0ael.pi5ZCeI8JcmIU1rEuiUxwdM.lOQbm', 'support'),
(30, 'David', 'Vidić', 'Mažuranićeva 13', 43500, 'Daruvar', 'Hrvatska', '385981337952', 'dvidic@koordinator.hr', '$2y$10$uRTDy.RUPNSPahGl7wi0puIOjjJDKIBwcv7MnA3yl27h.gUfuucPm', 'coordinator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
