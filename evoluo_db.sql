-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 13, 2022 at 02:58 PM
-- Server version: 5.7.37-log
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evoluo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) NOT NULL,
  `cim` varchar(50) DEFAULT NULL,
  `rovidleiras` varchar(150) DEFAULT NULL,
  `hosszuleiras` mediumtext,
  `datum` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `cim`, `rovidleiras`, `hosszuleiras`, `datum`) VALUES
(22, 'TESZT', 'TESZT CIM RÖVID LERASA', 'asd', '2022-02-27'),
(23, 'asd', 'asd', 'asd', '2022-02-27'),
(24, 'Csinaltam egy blogot', 'Ahhoz, hogy teszteljem az editet', 'Szerinted sikerülni fog?', '2022-02-27'),
(25, 'Uj blog', 'Rovid blog leiras', 'Hosszuusad', '2022-02-27'),
(26, 'uj', 'asd', '<p>asd</p>', '2022-03-02'),
(27, 'MA', 'asd', 'Aassssssssaskdasdkaaaa\r\nmost tesztelek\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2022-03-01'),
(28, 'Áprilisi blog', 'Ez egy rövid leírás', 'Ez meg a hosszú', '2022-02-27'),
(29, 'Blog címe teszt', 'R9vd', '<h2>Ez egy heading 1 sor.</h2><p>Ez meg egy paragraph sor.aaaaaa</p><p>&nbsp;</p><p>video:</p><p>&nbsp;</p><figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=jj3SWkXAJ_s&amp;list=RDEMqNTqw8QZ9s0laJ0MJHRglg&amp;index=13\"></oembed></figure><p>&nbsp;</p><p>&nbsp;</p><p>asd</p>', '2022-04-05'),
(30, 'Ez egy blog cim', 'Leírás ()}≠}}≠&™&##', '<p>Content ()}≠}}≠&amp;™&amp;##</p>', '2022-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `collect`
--

CREATE TABLE `collect` (
  `collect_id` int(10) NOT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longtitude` varchar(255) DEFAULT NULL,
  `collect_date` date DEFAULT NULL,
  `collect_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `title`, `content`) VALUES
(4, 'idk hanyadik', 'anyad\r\nszoveg\r\nszoveg\r\nszoveg\r\nszoveg\r\nszovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szoveg\r\nszovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szoveg'),
(5, 'asd', 'asdasdasdasd'),
(6, 'asdasdas', 'asdasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `felhasznalok`
--

CREATE TABLE `felhasznalok` (
  `id` int(10) UNSIGNED NOT NULL,
  `csaladi_nev` varchar(45) NOT NULL DEFAULT '',
  `utonev` varchar(45) NOT NULL DEFAULT '',
  `bejelentkezes` varchar(12) NOT NULL DEFAULT '',
  `jelszo` varchar(40) NOT NULL DEFAULT '',
  `jogosultsag` varchar(3) NOT NULL DEFAULT '_1_'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `felhasznalok`
--

INSERT INTO `felhasznalok` (`id`, `csaladi_nev`, `utonev`, `bejelentkezes`, `jelszo`, `jogosultsag`) VALUES
(1, 'Rendszer', 'Admin', 'Admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '__1'),
(2, 'Családi_2', 'Utónév_2', 'Login2', '6cf8efacae19431476020c1e2ebd2d8acca8f5c0', '_1_');

-- --------------------------------------------------------

--
-- Table structure for table `kapcsolat`
--

CREATE TABLE `kapcsolat` (
  `id` int(10) NOT NULL,
  `nev` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefonszam` varchar(50) DEFAULT NULL,
  `uzenet` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kapcsolat`
--

INSERT INTO `kapcsolat` (`id`, `nev`, `email`, `telefonszam`, `uzenet`) VALUES
(168, 'Donát', 'feherdonat99@gmail.com', '+365555555', 'Kedves üzemeltető ez az üzenet sora.'),
(169, 'Kriszti', 'kriszti1113@gmail.com', '06301151371', 'Kedves Donát!\r\n\r\nSzép munka!\r\n\r\nÜdv,\r\nKriszti'),
(170, 'Dodi', 'feherdonat99@gmail.com', '+35555555', ''),
(171, 'Donát', 'feherdonat99@gmail.com', '65545', 'Üzenet sora'),
(172, 'Donát', 'feherdonat99@gmail.com', '65545', 'Üzenet sora'),
(173, 'Donát', 'feherdonat99@gmail.com', '+365555555', 'Üzenet sora'),
(174, 'Donát', 'feherdonat99@gmail.com', '+365555555', 'Üzenet sora'),
(177, 'Donát', 'feherdonat99@gmail.com', '+35555555', ''),
(178, 'Donát', 'feherdonat99@gmail.com', '+35555555', ''),
(180, 'Kriszti', 'kriszti1113@gmail.com', '00000000', 'Kedves Donát!\r\n\r\nA mai meetinggel kapcsolatban egyeztetni szeretném a pontos helyszínt és időpontot. \r\n\r\n13.30?\r\nPark?\r\n\r\nKöszönettel:\r\nKriszti');

-- --------------------------------------------------------

--
-- Table structure for table `kapcsolatbeallit`
--

CREATE TABLE `kapcsolatbeallit` (
  `id` int(1) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kapcsolatbeallit`
--

INSERT INTO `kapcsolatbeallit` (`id`, `name`, `email`) VALUES
(1, 'donat', 'feherdonat99@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `url` varchar(30) NOT NULL,
  `nev` varchar(30) NOT NULL,
  `szulo` varchar(30) NOT NULL,
  `jogosultsag` varchar(3) NOT NULL,
  `sorrend` tinyint(4) NOT NULL,
  `tartalom` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`url`, `nev`, `szulo`, `jogosultsag`, `sorrend`, `tartalom`) VALUES
('admin', 'Admin', '', '011', 90, ''),
('beallitasok', 'Beállítások', 'admin', '011', 121, NULL),
('belepes', 'Belépés', '', '100', 60, NULL),
('blog', 'Blog', '', '111', 15, ''),
('blogok', 'Blogok', 'admin', '011', 119, NULL),
('donat', 'Donát', 'blog', '100', 16, '<p>Ez a Donát nézet!</p><p>&nbsp;</p>'),
('felhasznalok', 'Felhasználók', 'admin', '011', 110, NULL),
('hello', 'hello', 'helo', '100', 22, '<p>Ez a hello nézete és a helo almanüje. Fájl generálással készültem.</p>'),
('helo', 'helo', '', '100', 21, '<p>Ez a hello nezete. Fájl generálással készültem.</p>'),
('kapcsolat', 'Kapcsolat', '', '111', 50, ''),
('kilepes', 'Kilépés', '', '011', 111, NULL),
('menupontok', 'Menüpont', 'admin', '011', 100, NULL),
('nyitolap', 'Nyitólap', '', '111', 10, NULL),
('olvaso', 'Olvasó', '', '100', 20, '<h2>Ez az olvasó oldal egy QR kód scanner lesz.</h2><p>Ez egy paragraph sor.</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collect`
--
ALTER TABLE `collect`
  ADD PRIMARY KEY (`collect_id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `felhasznalok`
--
ALTER TABLE `felhasznalok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kapcsolat`
--
ALTER TABLE `kapcsolat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`url`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `felhasznalok`
--
ALTER TABLE `felhasznalok`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `kapcsolat`
--
ALTER TABLE `kapcsolat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
