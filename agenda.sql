-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-10-2018 a las 05:52:18
-- Versión del servidor: 5.6.34-log
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id7469175_agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `editado` datetime NOT NULL,
  `nivel` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id_admin`, `usuario`, `nombre`, `password`, `editado`, `nivel`) VALUES
(1, 'jotaalt64s', 'Jota Lander', '$2y$12$AdUt7Rj2BE1kYjL4.MPZGu3VqF.i3ClvB9i8jNRZSZZgaM53rnW8i', '2018-10-16 21:21:58', 1),
(3, 'admin', 'admin', '$2y$12$YO4f9NNqfS1XFBPuX9O6keWzqDdSwoQzfgNziYd.bzbboWweP5f0i', '2018-10-13 17:00:00', 1),
(4, 'admin2', 'admin', '$2y$12$sn4.Y0/jCqQIhTDT9CGxJek2jtcgSnebLo6tXE1FHStHBsinENWGa', '0000-00-00 00:00:00', 0),
(6, 'admin3', 'admin', '$2y$12$hlT8W.DdDS1oI8OnYT6oZuAz7w/uIYB2WIX36LBZHhdwd.OdeR3Xq', '2018-10-16 23:42:57', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `general_prospecto`
--

CREATE TABLE `general_prospecto` (
  `id_general` int(11) NOT NULL,
  `nombre_prospecto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellido_prospecto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cedula_prospecto` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `foto_prospecto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `observacion_prospecto` text COLLATE utf8_unicode_ci NOT NULL,
  `editado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `general_prospecto`
--

INSERT INTO `general_prospecto` (`id_general`, `nombre_prospecto`, `apellido_prospecto`, `cedula_prospecto`, `foto_prospecto`, `observacion_prospecto`, `editado`) VALUES
(1, 'Marvin Antonio', 'Castillo', '0812105800001T', 'marvin.jpg', 'Paramilitar Ciudad Sandino', '2018-10-13 13:00:00'),
(2, 'jose', 'jose', '0012808880000t', 'avatar.png', 'managua', '0000-00-00 00:00:00'),
(3, 'jose', 'jose', '0012808880000t', 'avatar.png', 'managua', '0000-00-00 00:00:00'),
(4, 'jose', 'jose', '0012808880000t', 'avatar.png', 'managua', '0000-00-00 00:00:00'),
(5, 'jose', 'jose', '0012808880000t', 'avatar.png', 'managua', '0000-00-00 00:00:00'),
(6, 'jose', 'jose', '0012808880000t', 'avatar.png', 'managua', '0000-00-00 00:00:00'),
(7, 'jose', 'jose', '0012808880000t', 'avatar.png', 'managua', '0000-00-00 00:00:00'),
(8, 'jose', 'jose', '0012808880000t', 'avatar.png', 'managua', '0000-00-00 00:00:00'),
(9, 'jose', 'jose', '0012808880000t', 'avatar.png', 'managua', '0000-00-00 00:00:00'),
(10, 'jose', 'jose', '0012808880000t', 'avatar.png', 'managua', '0000-00-00 00:00:00'),
(11, 'jose', 'jose', '0012808880000t', 'avatar.png', 'managua', '0000-00-00 00:00:00'),
(12, 'jose', 'jose', '0012808880000t', 'avatar.png', 'managua', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prospecto`
--

CREATE TABLE `prospecto` (
  `id_prospecto` int(11) NOT NULL,
  `nombre_prospecto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellido_prospecto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cedula_prospecto` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `foto_prospecto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `observacion_prospecto` text COLLATE utf8_unicode_ci NOT NULL,
  `ciudad_prospecto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `municipio_prospecto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `barrio_prospecto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `direccion_prospecto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono_prospecto` int(8) NOT NULL,
  `url_facebook` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `url_twitter` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `editado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `prospecto`
--

INSERT INTO `prospecto` (`id_prospecto`, `nombre_prospecto`, `apellido_prospecto`, `cedula_prospecto`, `foto_prospecto`, `observacion_prospecto`, `ciudad_prospecto`, `municipio_prospecto`, `barrio_prospecto`, `direccion_prospecto`, `telefono_prospecto`, `url_facebook`, `url_twitter`, `editado`) VALUES
(1, 'jose', 'jose', 'jose', 'avatar2.png', 'jose', 'Managua', 'Managua', 'jose', 'jose', 888888888, 'no encontrado', 'no encontrado', '2018-10-16 23:29:05'),
(2, 'Maria', 'De Los Guardias', '0002001800000H', 'avatar5.png', 'Es un interesante perfil', 'Matagalpa', 'Matagalpa', 'Primero', 'Cenro de Salud 3 cuadras al este', 2147483647, 'no se encontro', '', '0000-00-00 00:00:00'),
(3, 'pedro', 'pedro', 'pedro', 'avatar.png', 'pedro', 'pedro', 'pedro', 'pedro', 'pedro', 12345678, 'no encontrado', 'no encontrado', '2018-10-16 23:24:00'),
(4, 'Pedro', 'Pablo', 'lalalal', 'avatar2.png', 'sa', 'lalal', 'lala', 'lala', 'lala', 0, '', '', '2018-10-16 23:27:02'),
(7, 'perro', 'loco', 'perro', 'icons.png', 'perro', 'loco', 'perro', 'loco', 'loco', 12345678, 'loco', 'perro', '2018-10-16 23:47:08'),
(11, 'la niÃ±a', 'mala', 'no puede', 'avatar3.png', 'la niÃ±a', 'con la vida', 'managua', 'managua', 'managua', 12345678, 'no se', 'no se', '2018-10-16 23:44:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion_prospecto`
--

CREATE TABLE `ubicacion_prospecto` (
  `id_ubicacion` int(11) NOT NULL,
  `id_gen_pro` int(11) NOT NULL,
  `ciudad_prospecto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `municipio_prospecto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `barrio_prospecto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `direccion_prospecto` text COLLATE utf8_unicode_ci NOT NULL,
  `editado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ubicacion_prospecto`
--

INSERT INTO `ubicacion_prospecto` (`id_ubicacion`, `id_gen_pro`, `ciudad_prospecto`, `municipio_prospecto`, `barrio_prospecto`, `direccion_prospecto`, `editado`) VALUES
(1, 1, 'Managua', 'Ciudad Sandino', 'Zona N°4', 'De donde fue Centro de Salud 1C. E. Casa N° 20', '2018-10-13 13:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `virtual_prospecto`
--

CREATE TABLE `virtual_prospecto` (
  `id_virtual` int(11) NOT NULL,
  `id_vir_gen` int(11) NOT NULL,
  `telefono_prospecto` int(8) NOT NULL,
  `url_facebook` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `url_twitter` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `editado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `virtual_prospecto`
--

INSERT INTO `virtual_prospecto` (`id_virtual`, `id_vir_gen`, `telefono_prospecto`, `url_facebook`, `url_twitter`, `editado`) VALUES
(1, 1, 0, 'no encontrado', 'no encontrado', '2018-10-13 11:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indices de la tabla `general_prospecto`
--
ALTER TABLE `general_prospecto`
  ADD PRIMARY KEY (`id_general`);

--
-- Indices de la tabla `prospecto`
--
ALTER TABLE `prospecto`
  ADD PRIMARY KEY (`id_prospecto`);

--
-- Indices de la tabla `ubicacion_prospecto`
--
ALTER TABLE `ubicacion_prospecto`
  ADD PRIMARY KEY (`id_ubicacion`),
  ADD KEY `id_gen_pro` (`id_gen_pro`);

--
-- Indices de la tabla `virtual_prospecto`
--
ALTER TABLE `virtual_prospecto`
  ADD PRIMARY KEY (`id_virtual`),
  ADD KEY `id_vir_gen` (`id_vir_gen`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `general_prospecto`
--
ALTER TABLE `general_prospecto`
  MODIFY `id_general` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `prospecto`
--
ALTER TABLE `prospecto`
  MODIFY `id_prospecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `ubicacion_prospecto`
--
ALTER TABLE `ubicacion_prospecto`
  MODIFY `id_ubicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `virtual_prospecto`
--
ALTER TABLE `virtual_prospecto`
  MODIFY `id_virtual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ubicacion_prospecto`
--
ALTER TABLE `ubicacion_prospecto`
  ADD CONSTRAINT `ubicacion_prospecto_ibfk_1` FOREIGN KEY (`id_gen_pro`) REFERENCES `general_prospecto` (`id_general`);

--
-- Filtros para la tabla `virtual_prospecto`
--
ALTER TABLE `virtual_prospecto`
  ADD CONSTRAINT `virtual_prospecto_ibfk_1` FOREIGN KEY (`id_vir_gen`) REFERENCES `general_prospecto` (`id_general`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
