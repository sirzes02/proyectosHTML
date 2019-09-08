-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2019 a las 07:23:40
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE parcial;
USE parcial;
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_parcial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creador`
--

CREATE TABLE `creador` (
  `cod_cre` int(11) NOT NULL,
  `nom_cre` varchar(20) NOT NULL,
  `ape_cre` varchar(20) NOT NULL,
  `cor_cre` varchar(50) NOT NULL,
  `con_cre` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `creador`
--

INSERT INTO `creador` (`cod_cre`, `nom_cre`, `ape_cre`, `cor_cre`, `con_cre`) VALUES
(1, 'Santiago', 'Varela', 'sirzes02@gmail.com', 'lolislolis123'),
(2, 'Catalina', 'Mendoza', 'cata0327@gmail.com', 'cata0327');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarea`
--

CREATE TABLE `tarea` (
  `cod_tar` int(11) NOT NULL,
  `nom_tar` varchar(100) NOT NULL,
  `est_tar` varchar(12) NOT NULL,
  `pri_tar` varchar(12) NOT NULL,
  `fec_cre_tar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fec_fin_tar` date DEFAULT NULL,
  `des_tar` varchar(255) DEFAULT NULL,
  `cod_cre` int(11) DEFAULT NULL,
  `cor_cre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tarea`
--

INSERT INTO `tarea` (`cod_tar`, `nom_tar`, `est_tar`, `pri_tar`, `fec_cre_tar`, `fec_fin_tar`, `des_tar`, `cod_cre`, `cor_cre`) VALUES
(9, 'Cita Cata', 'Por Hacer', 'Importante', '2019-05-23 05:15:52', '2019-05-24', 'Cita con mi novia Catalina a las 3 Pm', NULL, 'sirzes02@gmail.com'),
(10, 'Parcial Ecuaciones diferenciales', 'Por Hacer', 'Urgente', '2019-05-23 03:36:48', '2019-05-31', 'Parcial con Manrique de ecuaciones diferenciales', NULL, 'sirzes02@gmail.com'),
(11, 'Presentacion de proyecto', 'En curso', 'Normal', '2019-05-23 05:20:04', '2019-05-23', 'Presentación del proyecto integrador básico.', NULL, 'sirzes02@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `creador`
--
ALTER TABLE `creador`
  ADD PRIMARY KEY (`cod_cre`);

--
-- Indices de la tabla `tarea`
--
ALTER TABLE `tarea`
  ADD PRIMARY KEY (`cod_tar`),
  ADD KEY `cod_cre` (`cod_cre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `creador`
--
ALTER TABLE `creador`
  MODIFY `cod_cre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tarea`
--
ALTER TABLE `tarea`
  MODIFY `cod_tar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tarea`
--
ALTER TABLE `tarea`
  ADD CONSTRAINT `tarea_ibfk_1` FOREIGN KEY (`cod_cre`) REFERENCES `creador` (`cod_cre`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
