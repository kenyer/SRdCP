-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 30, 2015 at 11:49 PM
-- Server version: 5.6.24-0ubuntu2
-- PHP Version: 5.6.4-4ubuntu6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reservas`
--
CREATE DATABASE IF NOT EXISTS `reservas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `reservas`;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
`id` int(10) NOT NULL,
  `start` date NOT NULL,
  `end` date DEFAULT NULL,
  `status` int(2) NOT NULL,
  `solicitante` int(10) NOT NULL,
  `tipo` int(2) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `start`, `end`, `status`, `solicitante`, `tipo`, `descripcion`) VALUES
(1, '2015-05-01', NULL, 8, 2, 1, 'Día del trabajador'),
(2, '2015-05-13', NULL, 1, 1, 6, 'Solicitud'),
(3, '2015-05-14', NULL, 8, 1, 2, 'Solicitud'),
(4, '2015-05-18', '2015-05-23', 8, 2, 1, 'Semana Santa'),
(5, '2015-04-02', NULL, 1, 1, 4, 'probando');

-- --------------------------------------------------------

--
-- Table structure for table `event_type`
--

DROP TABLE IF EXISTS `event_type`;
CREATE TABLE IF NOT EXISTS `event_type` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_type`
--

INSERT INTO `event_type` (`id`, `name`) VALUES
(1, 'Fecha reservada'),
(2, 'Matrimonio'),
(3, 'Bautizo'),
(4, 'Baby Shower'),
(5, 'Graduación'),
(6, 'Cumpleaños');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
`id` int(2) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `nombre`) VALUES
(1, 'No revisado'),
(2, 'Preaprobado'),
(3, 'Rechazado'),
(4, 'Pago en revisión'),
(5, 'Cancelado por tiempo sin pago'),
(6, 'Aprobado parcialmente'),
(7, 'Pago incorrecto'),
(8, 'Aprobado totalmente'),
(9, 'Cancelado sin planilla'),
(10, 'Realizado');

-- --------------------------------------------------------

--
-- Table structure for table `userpie_groups`
--

DROP TABLE IF EXISTS `userpie_groups`;
CREATE TABLE IF NOT EXISTS `userpie_groups` (
`group_id` int(11) NOT NULL,
  `group_name` varchar(225) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userpie_groups`
--

INSERT INTO `userpie_groups` (`group_id`, `group_name`) VALUES
(1, 'Standard User'),
(2, 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `userpie_sessions`
--

DROP TABLE IF EXISTS `userpie_sessions`;
CREATE TABLE IF NOT EXISTS `userpie_sessions` (
  `session_start` int(11) NOT NULL,
  `session_data` text NOT NULL,
  `session_id` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userpie_users`
--

DROP TABLE IF EXISTS `userpie_users`;
CREATE TABLE IF NOT EXISTS `userpie_users` (
`user_id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `username_clean` varchar(150) NOT NULL,
  `password` varchar(225) NOT NULL,
  `email` varchar(150) NOT NULL,
  `activationtoken` varchar(225) NOT NULL,
  `last_activation_request` int(11) NOT NULL,
  `LostpasswordRequest` int(1) NOT NULL DEFAULT '0',
  `active` int(1) NOT NULL,
  `group_id` int(11) NOT NULL,
  `sign_up_date` int(11) NOT NULL,
  `last_sign_in` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userpie_users`
--

INSERT INTO `userpie_users` (`user_id`, `username`, `username_clean`, `password`, `email`, `activationtoken`, `last_activation_request`, `LostpasswordRequest`, `active`, `group_id`, `sign_up_date`, `last_sign_in`) VALUES
(1, 'kenyer', 'kenyer', '9d6aab9238ad2bf28f9f52f712eba82e4a5a75f24c9bfe82fa01b5389cbc8412f', 'kenyer@gmail.com', 'f88d7fea3d7419132a610c3ada4d830b', 1430686758, 0, 1, 1, 1430686758, 1431906470),
(2, 'admin', 'admin', 'be0b6db6f15c9cdbba404d5781c9b46074948ccedfb78479cc39dbf6c6026d606', 'admin@admin.com', '90baf93f86e7a5167ddec5a21fee8185', 1430696382, 0, 1, 2, 1430696382, 1431903731);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_type`
--
ALTER TABLE `event_type`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userpie_groups`
--
ALTER TABLE `userpie_groups`
 ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `userpie_sessions`
--
ALTER TABLE `userpie_sessions`
 ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `userpie_users`
--
ALTER TABLE `userpie_users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `event_type`
--
ALTER TABLE `event_type`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `userpie_groups`
--
ALTER TABLE `userpie_groups`
MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `userpie_users`
--
ALTER TABLE `userpie_users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
