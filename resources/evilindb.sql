-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 26, 2018 at 04:38 PM
-- Server version: 5.6.38
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evilindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `anunt`
--

CREATE TABLE `anunt` (
  `id` int(11) NOT NULL,
  `titlu` varchar(255) DEFAULT NULL,
  `continut` text,
  `image` varchar(255) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `categorie` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `anunt`
--

INSERT INTO `anunt` (`id`, `titlu`, `continut`, `image`, `data`, `categorie`) VALUES
(8, 'adfasdfasdf', 'adfasdfasdf', 'images/img/IMG_1361.JPG', NULL, 'Clienti'),
(9, 'adfadfasdfas', 'adfasdfasdfa ad fadf a df adf ads fadsfasdf\r\nadsf\r\nasdf\r\na\r\ndsf\r\nasdf', 'images/img/IMG_1363.JPG', NULL, 'Servicii'),
(10, 'adfdfsgsfdg', 'sdfgsdf df g sdfg sdfg sd fg sdfs dfg ', 'images/img/IMG_1358.JPG', NULL, 'Servicii');

-- --------------------------------------------------------

--
-- Table structure for table `clienti`
--

CREATE TABLE `clienti` (
  `id` int(11) NOT NULL,
  `intreprindere` varchar(50) DEFAULT NULL,
  `director` varchar(50) DEFAULT NULL,
  `servicii` varchar(15) DEFAULT NULL,
  `nr_personal` int(11) DEFAULT '1',
  `perioada` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `id_director` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clienti`
--

INSERT INTO `clienti` (`id`, `intreprindere`, `director`, `servicii`, `nr_personal`, `perioada`, `image`, `id_director`) VALUES
(1, 'Evilinux', 'Secrieru silvia', NULL, NULL, NULL, NULL, 1),
(2, 'sdfasdf', 'adsfasdfasd', 'Resurse Umane', 1, 0, 'image addres', 2),
(3, 'Amdaris', 'ME', 'Resurse Umane', 1, 0, 'image addres', 1),
(4, 'BSSONE', 'ME', 'Resurse Umane', 14, 0, 'images/img/BSSONEbg2x.png', 2),
(5, 'Cedacri', 'Ungur4eanu ana', 'Contabilitate', 6, 0, 'images/img/Cedacribg2x.png', 3),
(6, 'UST', 'Ungureanu Ana ', 'Resurse Umane', 6, 0, 'images/img/USTbg2x.png', 3);

-- --------------------------------------------------------

--
-- Table structure for table `directori`
--

CREATE TABLE `directori` (
  `id` int(11) NOT NULL,
  `nume` varchar(20) DEFAULT NULL,
  `prenume` varchar(20) DEFAULT NULL,
  `data_n` date DEFAULT NULL,
  `login` varchar(15) DEFAULT NULL,
  `pasword` varchar(15) DEFAULT NULL,
  `roles` varchar(10) NOT NULL,
  `observatii` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `directori`
--

INSERT INTO `directori` (`id`, `nume`, `prenume`, `data_n`, `login`, `pasword`, `roles`, `observatii`) VALUES
(1, 'dasfasdf', 'adfasdfasd', '2018-01-18', 'adsfasdfasdf', 'admin', '', 'asdfasdf'),
(2, 'admin', 'admin', '2018-01-12', 'admin', 'admin', 'admin', 'asdfasdf'),
(3, 'ana', 'ana', '2018-01-09', 'ana', 'ana', 'user', 'ceva ta ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anunt`
--
ALTER TABLE `anunt`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `titlu` (`titlu`,`image`,`data`,`categorie`),
  ADD KEY `titlu_2` (`titlu`,`image`,`data`,`categorie`);

--
-- Indexes for table `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `intreprindere` (`intreprindere`,`director`,`servicii`,`nr_personal`,`perioada`,`image`),
  ADD KEY `intreprindere_2` (`intreprindere`,`director`,`servicii`,`nr_personal`,`perioada`,`image`),
  ADD KEY `intreprindere_3` (`intreprindere`,`director`,`servicii`,`nr_personal`,`perioada`,`image`);

--
-- Indexes for table `directori`
--
ALTER TABLE `directori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anunt`
--
ALTER TABLE `anunt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `clienti`
--
ALTER TABLE `clienti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `directori`
--
ALTER TABLE `directori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
