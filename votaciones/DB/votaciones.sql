-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-04-2018 a las 07:26:11
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `votaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casillas`
--

CREATE TABLE `casillas` (
  `id` int(11) NOT NULL,
  `nombre_casilla` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `casillas`
--

INSERT INTO `casillas` (`id`, `nombre_casilla`) VALUES
(1, 'Casilla 1'),
(2, 'Casilla 2'),
(3, 'Casilla 3'),
(4, 'Casilla 4'),
(5, 'Casilla 5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casillas_x_usuario`
--

CREATE TABLE `casillas_x_usuario` (
  `id_usuario` int(11) NOT NULL,
  `id_casilla` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `casillas_x_usuario`
--

INSERT INTO `casillas_x_usuario` (`id_usuario`, `id_casilla`) VALUES
(2, 1),
(2, 4),
(2, 5),
(3, 1),
(3, 3),
(3, 5),
(3, 4),
(4, 1),
(4, 2),
(4, 3),
(1, 2),
(1, 3),
(1, 4),
(1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(200) DEFAULT NULL,
  `nombre_usuario` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `tipo_usuario` int(11) NOT NULL COMMENT '1 admin, 2 capturista',
  `estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_completo`, `nombre_usuario`, `password`, `tipo_usuario`, `estatus`) VALUES
(1, 'Irvin Albornoz Vazquez', 'irvin', 'cb06868bab236ab6a16bf1d86a788e29', 1, 1),
(2, 'nuevo', 'nuevo', '81dc9bdb52d04dc20036dbd8313ed055', 1, 1),
(3, 'nuevo', 'nuevo', '81dc9bdb52d04dc20036dbd8313ed055', 1, 1),
(4, 'usuario nuevo', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `casillas`
--
ALTER TABLE `casillas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `casillas_x_usuario`
--
ALTER TABLE `casillas_x_usuario`
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_casilla` (`id_casilla`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unik_id_usuario` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `casillas`
--
ALTER TABLE `casillas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `casillas_x_usuario`
--
ALTER TABLE `casillas_x_usuario`
  ADD CONSTRAINT `casillas_x_usuario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `casillas_x_usuario_ibfk_2` FOREIGN KEY (`id_casilla`) REFERENCES `casillas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
