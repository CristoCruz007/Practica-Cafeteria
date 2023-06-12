-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-06-2023 a las 22:30:22
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cafeteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebidas`
--

CREATE TABLE `bebidas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` decimal(8,2) NOT NULL,
  `tamaño` varchar(20) NOT NULL,
  `fecha_registro` date NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bebidas`
--

INSERT INTO `bebidas` (`id`, `nombre`, `precio`, `tamaño`, `fecha_registro`, `activo`) VALUES
(1, 'Coca', '11.00', 'Grande', '2023-06-08', 0),
(2, 'Pepsi', '22.99', '3lt', '2023-06-08', 0),
(3, 'Vita', '22.00', 'Grande', '0000-00-00', 0),
(4, 'Moster', '22.33', 'Grande', '2023-06-08', 0),
(5, 'Moster', '22.00', 'Grande', '2023-06-08', 0),
(6, 'Moster', '22.00', 'Grande', '2023-06-08', 0),
(7, 'Vita de Fresa', '22.00', '600ml', '2023-06-09', 0),
(8, 'aad', '12.00', 'dda', '2023-06-09', 0),
(9, 'Vive 100', '22.00', 'Chico', '2023-06-09', 0),
(10, 'Nada1', '22.00', 'Grande', '2023-06-09', 0),
(11, 'Vita', '22.00', 'Grande', '0000-00-00', 0),
(12, 'Vive 200', '22.33', '200ml', '2023-06-09', 0),
(13, 'FruitCook', '18.22', '1lt', '2023-06-09', 0),
(14, 'Toronja', '22.30', '600ml', '2023-06-09', 1),
(15, 'Powerd', '22.30', '1LT', '2023-06-09', 0),
(16, 'Naranja', '22.30', '1lt', '2023-06-10', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
