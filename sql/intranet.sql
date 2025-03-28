-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-03-2025 a las 20:18:51
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `intranet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(100) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `calle` varchar(100) DEFAULT NULL,
  `colonia` varchar(100) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `codigo_postal` varchar(10) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL,
  `borrado` tinyint(4) DEFAULT 0,
  `fecha_creacion` datetime DEFAULT current_timestamp(),
  `fecha_modificacion` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `creado_por` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre_cliente`, `fecha_nacimiento`, `sexo`, `telefono`, `correo`, `calle`, `colonia`, `ciudad`, `codigo_postal`, `estado`, `pais`, `borrado`, `fecha_creacion`, `fecha_modificacion`, `creado_por`) VALUES
(1, 'rogelio', '1989-05-09', 'hombre', '3112324121', 'rog09@live.com.mx', '21 de marzo', 'Menchaca', 'tepic', '63150', 'Nayarit', 'México', 1, '2025-03-26 20:10:05', '2025-03-26 20:49:11', 1),
(2, 'rogelio', '1989-05-09', 'hombre', '3112324121', 'rog09@live.com.mx', '21 de marzo', 'Menchaca', 'tepic', '63150', 'Nayarit', 'México', 1, '2025-03-26 20:11:42', '2025-03-26 20:49:18', 1),
(3, 'rogelio', '1989-05-09', 'hombre', '3112324121', 'rog09@live.com.mx', '21 de marzo', 'Menchaca', 'tepic', '63150', 'Nayarit', 'México', 1, '2025-03-26 20:46:38', '2025-03-26 20:49:22', 1),
(4, 'EDUART', '1989-05-09', 'hombre', '3112324121', 'rog09@live.com.mx', '11 DE AGOSTO', 'Menchaca', 'tepic', '63150', 'Nayarit', 'México', 1, '2025-03-26 20:46:55', '2025-03-26 20:49:25', 1),
(5, 'EDUART', '1989-05-09', 'hombre', '3112324121', 'rogerxps@gmail.com', '11 DE AGOSTO', 'Menchaca', 'tepic', '63150', 'Nayarit', 'México', 1, '2025-03-26 20:50:26', '2025-03-27 22:11:14', 1),
(6, 'EDUART', '1989-05-09', 'hombre', '3112324121', 'rog09@live.com.mx', '11 DE AGOSTO', 'Menchaca', 'tepic', '63150', 'Nayarit', 'México', 1, '2025-03-26 20:56:13', '2025-03-27 18:18:50', 1),
(7, 'EDUART', '1989-05-09', 'hombre', '3112324121', 'rog09@live.com.mx', '11 DE AGOSTO', 'Menchaca', 'tepic', '63150', 'Nayarit', 'México', 1, '2025-03-26 20:56:18', '2025-03-27 22:11:17', 1),
(8, 'EDUART', '1989-05-09', 'hombre', '3112324121', 'rog09@live.com.mx', '11 DE AGOSTO', 'Menchaca', 'tepic', '63150', 'Nayarit', 'México', 0, '2025-03-26 20:59:22', '2025-03-26 20:59:22', 1),
(9, 'EDUART', '1989-05-09', 'hombre', '3112324121', 'rog09@live.com.mx', '11 DE AGOSTO', 'Menchaca', 'tepic', '63150', 'Nayarit', 'México', 0, '2025-03-26 21:02:36', '2025-03-26 21:02:36', 1),
(10, 'EDUART', '1989-05-09', 'hombre', '3112324121', 'rog09@live.com.mx', '11 DE AGOSTO', 'Menchaca', 'tepic', '63150', 'Nayarit', 'México', 0, '2025-03-26 21:05:15', '2025-03-26 21:05:15', 1),
(11, 'EDUART', '1989-05-09', 'hombre', '3112324121', 'rog09@live.com.mx', '11 DE AGOSTO', 'Menchaca', 'tepic', '63150', 'Nayarit', 'México', 0, '2025-03-26 21:06:27', '2025-03-26 21:06:27', 1),
(12, 'rogelio', '1989-05-09', 'hombre', '3112324121', 'rog09@live.com.mx', '11 DE AGOSTO', 'Menchaca', 'tepic', '63150', 'Nayarit', 'México', 0, '2025-03-26 21:08:14', '2025-03-27 22:11:28', 1),
(13, 'jorge', '2010-02-01', 'hombre', '3112324121', 'jorge_sd@gmail.com', '16 de octubre', 'los paramos', 'xalisco', '63150', 'Nayarit', 'México', 0, '2025-03-27 22:10:10', '2025-03-27 22:10:10', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `borrado` tinyint(4) DEFAULT 0,
  `fecha_creacion` datetime DEFAULT current_timestamp(),
  `fecha_modificacion` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `usuario`, `contrasena`, `borrado`, `fecha_creacion`, `fecha_modificacion`) VALUES
(1, 'Roy', 'roy', '$2y$10$Sw7wVk6fWCJEqAgSW79tFu8xmK/pa1Ay0Z0DHndwmfS24gS.YY0Y2', 0, '2025-03-25 21:32:10', '2025-03-25 21:32:10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `creado_por` (`creado_por`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`creado_por`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
