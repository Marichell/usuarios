-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-08-2020 a las 06:54:54
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `bio` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `bio`, `imagen`) VALUES
(8, 'Justin Scott Bieshaar', 'Justin@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ut dolor auctor, viverra arcu vel, imperdiet libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer eu cursus eros.', 'vistas/img/user395.jpg'),
(10, 'Beatriz Rangel', 'Beatriz@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ut dolor auctor, viverra arcu vel, imperdiet libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer eu cursus eros.', 'vistas/img/user54.jpg'),
(11, 'Ryan Blader', 'Ryan@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ut dolor auctor, viverra arcu vel, imperdiet libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer eu cursus eros.', 'vistas/img/user932.jpg'),
(12, 'Brandy Morgan', 'Brandy@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ut dolor auctor, viverra arcu vel, imperdiet libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer eu cursus eros.', 'vistas/img/user880.jpg'),
(13, 'Valeriia Savenko', 'Valeriia@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ut dolor auctor, viverra arcu vel, imperdiet libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer eu cursus eros.', 'vistas/img/user260.jpg'),
(15, 'Allisa White-Gluz', 'archenemy@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ut dolor auctor, viverra arcu vel, imperdiet libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer eu cursus eros.', 'vistas/img/user59.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
