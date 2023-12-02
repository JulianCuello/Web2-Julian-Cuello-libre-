-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2023 a las 21:32:41
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adopcion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `idDatos` int(45) NOT NULL,
  `Residencia` varchar(45) NOT NULL,
  `Ciudad` varchar(45) NOT NULL,
  `situacionParental` varchar(255) NOT NULL,
  `Salud` varchar(255) NOT NULL,
  `Otros` varchar(255) NOT NULL,
  `img` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niños`
--

CREATE TABLE `niños` (
  `idNiño` int(45) NOT NULL,
  `Codigo` int(45) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  `Edad` int(45) NOT NULL,
  `Sexo` tinyint(45) NOT NULL,
  `idDatos` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`idDatos`);

--
-- Indices de la tabla `niños`
--
ALTER TABLE `niños`
  ADD PRIMARY KEY (`idNiño`),
  ADD UNIQUE KEY `idDatos` (`idDatos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `idDatos` int(45) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `niños`
--
ALTER TABLE `niños`
  MODIFY `idNiño` int(45) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `niños`
--
ALTER TABLE `niños`
  ADD CONSTRAINT `niños_ibfk_1` FOREIGN KEY (`idDatos`) REFERENCES `historial` (`idDatos`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
