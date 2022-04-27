-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 27-04-2022 a las 16:52:52
-- Versión del servidor: 8.0.28-0ubuntu0.20.04.3
-- Versión de PHP: 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tp_iaw`
--
CREATE DATABASE IF NOT EXISTS tp_iaw;

use tp_iaw;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` integer NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `age`) VALUES
(1, 'kamren rice', NULL, 'milton39@example.org', 45),
(2, 'kiera blanda', NULL, 'virgie.senger@example.com', 23),
(3, 'hester brekke', NULL, 'jess.bode@example.com', 36),
(4, 'viola farrell iii', NULL, 'heath47@example.org', 92),
(5, 'rolando roberts sr.', NULL, 'medhurst.matteo@example.org', 22),
(6, 'rae bogan', NULL, 'bosco.gust@example.org', 66),
(7, 'rosalee donnelly', NULL, 'glennie.hamill@example.net', 19),
(8, 'brent schumm', NULL, 'roslyn.hyatt@example.com', 22),
(9, 'lowell gaylord', NULL, 'kilback.leonardo@example.org', 53),
(10, 'agnes kessler', NULL, 'abner92@example.org', 47);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
