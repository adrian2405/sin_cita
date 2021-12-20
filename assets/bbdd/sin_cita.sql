-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 15-12-2021 a las 15:56:03
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sin_cita`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id` int(11) NOT NULL,
  `hora` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id`, `hora`) VALUES
(1, '9:00'),
(2, '9:05'),
(3, '9:15'),
(4, '9:20'),
(5, '9:30'),
(6, '9:35'),
(7, '9:45'),
(8, '9:50'),
(9, '10:00'),
(10, '10:05'),
(11, '10:15'),
(12, '10:20'),
(13, '10:30'),
(14, '10:35'),
(15, '10:45'),
(16, '10:50'),
(17, '11:00'),
(18, '11:05'),
(19, '11:15'),
(20, '11:20'),
(21, '11:30'),
(22, '11:35'),
(23, '11:45'),
(24, '11:50'),
(25, '12:00'),
(26, '12:05'),
(27, '12:15'),
(28, '12:20'),
(29, '12:30'),
(30, '12:35'),
(31, '12:45'),
(32, '13:00'),
(33, '13:15'),
(34, '13:30'),
(35, '13:45'),
(36, '14:00'),
(37, '14:15'),
(38, '14:30'),
(39, '14:45'),
(40, '15:00'),
(41, '15:15'),
(42, '15:30'),
(43, '15:45'),
(44, '16:00'),
(45, '16:05'),
(46, '16:15'),
(47, '16:20'),
(48, '16:30'),
(49, '16:35'),
(50, '16:45'),
(51, '16:50'),
(52, '17:00'),
(53, '17:05'),
(54, '17:15'),
(55, '17:30'),
(56, '17:45'),
(57, '18:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios_info`
--

CREATE TABLE `horarios_info` (
  `id` int(11) NOT NULL,
  `hora` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios_info_2`
--

CREATE TABLE `horarios_info_2` (
  `id` int(11) NOT NULL,
  `hora` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios_info_3`
--

CREATE TABLE `horarios_info_3` (
  `id` int(11) NOT NULL,
  `hora` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios_sincita`
--

CREATE TABLE `horarios_sincita` (
  `id` int(11) NOT NULL,
  `hora` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horarios_sincita`
--

INSERT INTO `horarios_sincita` (`id`, `hora`) VALUES
(1, 'Sin cita');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horarios_info`
--
ALTER TABLE `horarios_info`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horarios_info_2`
--
ALTER TABLE `horarios_info_2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horarios_info_3`
--
ALTER TABLE `horarios_info_3`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horarios_sincita`
--
ALTER TABLE `horarios_sincita`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `horarios_info`
--
ALTER TABLE `horarios_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `horarios_info_2`
--
ALTER TABLE `horarios_info_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `horarios_info_3`
--
ALTER TABLE `horarios_info_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `horarios_sincita`
--
ALTER TABLE `horarios_sincita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
