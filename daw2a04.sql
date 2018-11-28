-- phpMyAdmin SQL Dump
-- version 3.3.7deb6
-- http://www.phpmyadmin.net
--
-- Servidor: hostingmysql328
-- Tiempo de generación: 26-11-2018 a las 11:51:46
-- Versión del servidor: 5.5.52
-- Versión de PHP: 5.2.6-1+lenny16

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `daw2a04`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `passwd` varchar(16) COLLATE utf8_bin NOT NULL,
  `lenguage` varchar(3) COLLATE utf8_bin NOT NULL DEFAULT 'CAT',
  `name` varchar(16) COLLATE utf8_bin NOT NULL,
  `path` int(1) NOT NULL DEFAULT '0',
  `ADMIN` tinyint(1) NOT NULL DEFAULT '0',
  `user_char1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `user_char2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`email`),
  KEY `nombre` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcar la base de datos para la tabla `user`
--

INSERT INTO `user` (`email`, `passwd`, `lenguage`, `name`, `path`, `ADMIN`, `user_char1`, `user_char2`) VALUES
('', '', 'CAT', '', 0, 0, NULL, NULL),
('aoñsfjiaspfa@adlskjgfasdñf', 'asdfjhdasñ', 'CAT', 'gjasdpfogisdj', 0, 0, NULL, NULL),
('artur@elbanditastut.com', 'asd', 'CAT', 'Arturo', 0, 0, NULL, NULL),
('asd@asd.asd', 'asd', 'CAT', 'asdfasdfas', 0, 0, NULL, NULL),
('asd@asdasd.com', 'asd', 'CAT', 'asd', 0, 0, NULL, NULL),
('pepe@gmail.com', 'asd', 'CAT', 'pepe', 0, 0, NULL, NULL),
('sa', '', 'CAT', 'samuwizard', 0, 0, NULL, NULL),
('samuwizard@thewizard.com', 'asd', 'CAT', 'samuwizard', 0, 0, NULL, NULL),
('smartinpa19@gmail.com', 'asd', 'CAT', 'samu', 0, 0, NULL, NULL);
