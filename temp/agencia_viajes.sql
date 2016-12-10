-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-12-2016 a las 19:10:23
-- Versión del servidor: 5.6.20-log
-- Versión de PHP: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agencia_viajes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `estrellas` varchar(255) DEFAULT NULL,
  `ciudad` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `hotel`
--

INSERT INTO `hotel` (`id`, `nombre`, `descripcion`, `estrellas`, `ciudad`, `direccion`, `telefono`, `correo`) VALUES
(1, 'Hotel 1', 'test', '1', 'test', 'test', '1234', '123'),
(2, 'Hotel 2', 'test', '1', 'test', 'test', '1234', '1234'),
(3, 'Hotel 3', 'Test3', '3', 'Test3', 'Direc3', '123', '123'),
(4, 'Hotel 4', 'Test4', '4', 'Test4', 'Direc4', '123', '123'),
(5, 'Hotel 5', 'Test5', '5', 'Test5', 'Direc5', '123', '123'),
(6, 'Hotel 6', 'Test3', '3', 'Test3', 'Direc3', '123', '123'),
(7, 'Hotel 7', 'Test3', '3', 'Test3', 'Direc3', '123', '123'),
(8, 'Hotel 8', 'Test3', '3', 'Test3', 'Direc3', '123', '123'),
(9, 'Hotel 9', 'Test3', '3', 'Test3', 'Direc3', '123', '123'),
(10, 'Hotel 10', 'Test3', '3', 'Test3', 'Direc3', '123', '123'),
(11, 'Hotel 11', 'Test3', '3', 'Test3', 'Direc3', '123', '123'),
(12, 'Hotel 12', 'Test3', '3', 'Test3', 'Direc3', '123', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tour`
--

CREATE TABLE `tour` (
  `id` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `empresa` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tour`
--

INSERT INTO `tour` (`id`, `nombre`, `descripcion`, `empresa`, `telefono`, `correo`) VALUES
(1, 'Tour1', 'Test1', 'Test2', '123', '123'),
(2, 'Tour2', 'Test1', 'Test2', '123', '123'),
(3, 'Tour3', 'Test1', 'Test2', '123', '123'),
(4, 'Tour4', 'Test1', 'Test2', '123', '123'),
(5, 'Tour5', 'Test1', 'Test2', '123', '123'),
(6, 'Tour6', 'Test1', 'Test2', '123', '123'),
(7, 'Tour7', 'Test1', 'Test2', '123', '123'),
(8, 'Tour8', 'Test1', 'Test2', '123', '123'),
(9, 'Tour9', 'Test1', 'Test2', '123', '123'),
(10, 'Tour10', 'Test1', 'Test2', '123', '123'),
(11, 'Tour11', 'Test1', 'Test2', '123', '123'),
(12, 'Tour12', 'Test1', 'Test2', '123', '123'),
(13, 'Tour13', 'Test1', 'Test2', '123', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) UNSIGNED NOT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `es_admin` int(11) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellidos` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `password`, `es_admin`, `nombre`, `apellidos`, `telefono`, `correo`) VALUES
(1, 'contenido', '280f9f8162149af84376caba431de875c1489874', 0, 'Gestor de', 'Contenido', '22233333', 'contenido@abc.com'),
(2, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 'Usuario', 'Administrador', '222222', 'admin@abc.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
