-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 02:29 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spa`
--

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kind` int(11) DEFAULT NULL,
  `breed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) DEFAULT NULL,
  `ageUnitMeasure` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `picturePath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fileExtension` int(11) DEFAULT NULL,
  `picDescribed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`id`, `name`, `kind`, `breed`, `age`, `ageUnitMeasure`, `description`, `picturePath`, `fileExtension`, `picDescribed`, `sex`) VALUES
(12, 'Seraphin', 2, 'Pacificus', 4, 0, 'affectueux', 'octodonPacificus', 0, 'Gros plan de la tête de l\'octodon prénomé Séraphin', 0),
(15, 'Kyleen', 0, 'Berger Belge Tervueren', 3, 1, 'Vivace et enjouée', 'Kyleen', 1, 'Kyleen en bonne posture', 1),
(40, 'Thygrou', 1, 'Savannah', 1, 1, 'Caractère bien à lui', 'Savannah', 1, 'Chat Savannah typique, bege à rayures', 4),
(41, 'Jet', 0, 'Lévrier Afghan', 11, 0, 'Gentil et aime courir', 'Levrier', 1, 'Levrier Afghan à poils long et beige, dans un champs', 0),
(46, 'Dalh-lo', 0, 'Barzoi', 1, 1, 'Douce et calme', 'Barzoi', 0, 'L\'air brave sur son rocher', 1),
(55, 'Reckless', 2, 'Bridgesi', 5, 0, 'Se defendra en cas de danger', 'Reckless', 1, 'Octodon calme et grignotant', 3),
(57, 'Naska', 0, 'Berger Belge Groënendael', 13, 1, '♥', 'fakeNaska', 0, 'Présentation d\'un Berger Belge Groënendael', 4),
(59, 'Hellatia', 2, 'Commun', 1, 1, 'Vous pouvez modifier mes informations', 'deletable', 1, 'Octodon commun noir', 4),
(60, 'Rey-dot', 2, 'Lunatus', 6, 0, 'Réservé et timide', 'Rey-dot', 1, 'Octodon lunatus gris-marron', 0),
(70, 'Olie', 0, 'Setter Irlandais', 2, 1, 'Sait ouvrir certaines portes', 'setterIrlandais', 1, 'chien marron regardant au loins', 4),
(71, 'Doudan', 0, 'Dalmatiens', 1, 1, 'Fou-fou', 'dalmatiens', 1, 'Yeux vairon', 3),
(72, 'Wyll-Wy', 0, 'Barbu Tcheque', 10, 0, 'Aime jouer', 'barbuTcheque', 1, 'ok', 0),
(73, 'Pineapple', 1, 'British Shorthair', 2, 1, 'Calme', 'pineapple', 1, 'Chat alongé dans l\'herbe', 1),
(74, 'Chachoux', 1, 'Munchkin', 11, 0, 'Ventre sur patte', 'munchkin', 1, 'chat ayant la tête dans l\'herbe', 3),
(75, 'Pymhia', 1, 'Abyssinians', 3, 1, 'Sauvage et relativement hypoalergénique', 'Abyssinians', 1, 'Chat marchant dans l\'herbe', 4);

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE `availability` (
  `id` int(11) NOT NULL,
  `available` int(11) NOT NULL COMMENT 'availiable mean vaccinated and free to be adopted ATM',
  `inDate` datetime NOT NULL DEFAULT current_timestamp(),
  `outDate` datetime DEFAULT NULL,
  `reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_key` int(11) NOT NULL COMMENT 'Need to be even to animals.id to be bind'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`id`, `available`, `inDate`, `outDate`, `reason`, `fk_key`) VALUES
(12, 1, '2021-02-24 13:12:21', '0000-00-00 00:00:00', '', 12),
(15, 0, '2021-02-24 16:19:10', '0000-00-00 00:00:00', '', 15),
(41, 0, '2021-03-03 01:04:45', '0000-00-00 00:00:00', 'y!', 40),
(42, 1, '2021-03-03 01:07:59', '0000-00-00 00:00:00', 'o', 41),
(47, 1, '2021-03-03 01:12:39', '0000-00-00 00:00:00', '', 46),
(56, 1, '2021-03-08 22:01:21', NULL, 'Oui', 55),
(58, 2, '2021-03-09 13:41:33', '0000-00-00 00:00:00', '', 57),
(60, 0, '2021-03-09 14:00:34', '0000-00-00 00:00:00', '', 59),
(61, 0, '2021-03-10 18:19:26', NULL, 'ok', 60),
(71, 0, '2021-03-11 10:43:20', NULL, '', 70),
(72, 1, '2021-03-11 10:46:30', NULL, 'ok', 71),
(73, 1, '2021-03-11 10:49:19', NULL, 'ok', 72),
(74, 0, '2021-03-11 10:53:00', NULL, 'ok', 73),
(75, 1, '2021-03-11 10:58:35', NULL, 'ok', 74),
(76, 0, '2021-03-11 11:06:35', NULL, 'ok', 75);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `firstName`, `lastName`, `phone`, `mail`, `message`) VALUES
(2, 'L', 'L', 330303030, '', ''),
(6, 'Walther', 'White', 1618033988, 'w.w@gmail.com', 'Bonjour, avez-vous cours pour entrainer son chien à détecter les micros et les armes à feu ? Je demande pour un ami.\r\n\r\nCordialement,'),
(8, 'Ada', 'Lovelace', 112358132, 'a.l@undefined', 'Hi dear.\r\nI would like to ask how old should I be to take part of the lesson.\r\nKindly, Ada'),
(14, 'Dog', 'Training', 11000000, 'a@a', 'link'),
(15, 'Qsd', 'Qsd', 412522514, 'd@d', 'dd'),
(16, 'Supprimes-', 'Moi', 605004090, 'just@doIt', 'It\'s all fine');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` int(11) NOT NULL,
  `member` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `member`, `pass`) VALUES
(1, 'first', 'f97c5d29941bfb1b2fdab0874906ab82'),
(2, 'staff', 'c0ad4318d1b53e8fcda0fa5f11fd9946');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `availability`
--
ALTER TABLE `availability`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fk_key` (`fk_key`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `availability`
--
ALTER TABLE `availability`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `availability`
--
ALTER TABLE `availability`
  ADD CONSTRAINT `availability_ibfk_1` FOREIGN KEY (`fk_key`) REFERENCES `animals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
