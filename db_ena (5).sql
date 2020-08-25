-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 25-08-2020 a las 03:20:40
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_ena`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_alumno`
--

DROP TABLE IF EXISTS `asignacion_alumno`;
CREATE TABLE IF NOT EXISTS `asignacion_alumno` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `id_grado` int(4) NOT NULL,
  `id_alumno` int(6) NOT NULL,
  `id_padre` int(6) NOT NULL,
  `creacion` datetime(6) NOT NULL,
  `id_usuario` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `persona_id` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_bgmp`
--

DROP TABLE IF EXISTS `asignacion_bgmp`;
CREATE TABLE IF NOT EXISTS `asignacion_bgmp` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `id_grado` int(4) DEFAULT NULL,
  `id_materia` int(3) DEFAULT NULL,
  `id_bimestre` int(2) DEFAULT NULL,
  `id_profesor` int(6) DEFAULT NULL,
  `creacion` datetime(6) NOT NULL,
  `id_usuario` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `persona_id` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asignacion_bgmp`
--

INSERT INTO `asignacion_bgmp` (`id`, `id_grado`, `id_materia`, `id_bimestre`, `id_profesor`, `creacion`, `id_usuario`) VALUES
(13, 8, 11, NULL, 61, '2020-08-24 15:55:43.000000', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bimestre`
--

DROP TABLE IF EXISTS `bimestre`;
CREATE TABLE IF NOT EXISTS `bimestre` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `creacion` datetime(6) NOT NULL,
  `persona_id` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `persona_id` (`persona_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bimestre`
--

INSERT INTO `bimestre` (`id`, `nombre`, `creacion`, `persona_id`) VALUES
(1, 'Primer Bimestre', '2020-07-22 00:00:00.000000', 1),
(3, 'Segundo Bimestre', '2020-07-22 00:00:00.000000', 1),
(5, 'Tercer Bimestre', '2020-07-22 00:00:00.000000', 1),
(7, 'Cuarto Bimestre', '2020-07-22 00:00:00.000000', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapa`
--

DROP TABLE IF EXISTS `etapa`;
CREATE TABLE IF NOT EXISTS `etapa` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `creacion` datetime(6) NOT NULL,
  `persona_id` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `persona_id` (`persona_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `etapa`
--

INSERT INTO `etapa` (`id`, `nombre`, `creacion`, `persona_id`) VALUES
(1, 'Primaria', '2020-07-22 00:00:00.000000', 1),
(2, 'Basicos', '2020-07-22 00:00:00.000000', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

DROP TABLE IF EXISTS `grado`;
CREATE TABLE IF NOT EXISTS `grado` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `creacion` datetime(6) NOT NULL,
  `user_id` int(3) NOT NULL,
  `id_etapa` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `persona_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`id`, `nombre`, `creacion`, `user_id`, `id_etapa`) VALUES
(8, 'Primero Primaria', '2020-08-21 14:43:16.000000', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

DROP TABLE IF EXISTS `materia`;
CREATE TABLE IF NOT EXISTS `materia` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `id_usuario` int(3) NOT NULL,
  `id_grado` int(4) DEFAULT NULL,
  `creacion` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `persona_id` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id`, `nombre`, `id_usuario`, `id_grado`, `creacion`) VALUES
(3, 'Matematica', 1, 8, NULL),
(4, 'Matematica', 1, 8, NULL),
(5, 'Matematica', 1, 8, NULL),
(6, 'Matematica', 1, 8, NULL),
(7, 'Matematica', 1, 8, NULL),
(8, 'Matematica', 1, 8, NULL),
(9, 'Sociales', 1, 8, NULL),
(10, 'Sociales', 1, 8, NULL),
(11, 'Matematica', 1, 8, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

DROP TABLE IF EXISTS `persona`;
CREATE TABLE IF NOT EXISTS `persona` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(30) DEFAULT NULL,
  `apellidos` varchar(30) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `edad` int(3) DEFAULT NULL,
  `codigo` varchar(12) DEFAULT NULL,
  `direccion` varchar(30) DEFAULT NULL,
  `alergias` varchar(30) DEFAULT NULL,
  `medicamento` varchar(30) DEFAULT NULL,
  `profesion` varchar(20) DEFAULT NULL,
  `telefono_1` int(8) DEFAULT NULL,
  `telefono_2` int(8) DEFAULT NULL,
  `dpi` int(20) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `ref_nombre` varchar(60) DEFAULT NULL,
  `ref_telefono` int(8) DEFAULT NULL,
  `ref_direccion` varchar(30) DEFAULT NULL,
  `ref_correo` varchar(30) DEFAULT NULL,
  `ref_parentesco` varchar(15) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `rol` int(2) DEFAULT NULL,
  `creacion` datetime(6) DEFAULT NULL,
  `id_rol` int(2) DEFAULT NULL,
  `id_usuario` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dpi` (`dpi`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_rol` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nombres`, `apellidos`, `fecha_nac`, `edad`, `codigo`, `direccion`, `alergias`, `medicamento`, `profesion`, `telefono_1`, `telefono_2`, `dpi`, `correo`, `username`, `password`, `ref_nombre`, `ref_telefono`, `ref_direccion`, `ref_correo`, `ref_parentesco`, `image`, `rol`, `creacion`, `id_rol`, `id_usuario`) VALUES
(1, 'Maria Celeste', 'Morán Morales', NULL, NULL, NULL, 'San Juan, Santa Rita', NULL, NULL, NULL, 42722887, NULL, 0, 'celemoran721@gmail.com', 'admin', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', '', 0, NULL, NULL, NULL, NULL, 2, '2020-07-22 00:00:00.000000', NULL, 1),
(61, 'MarÃ­a ', 'MorÃ¡n', '2020-08-26', 15, NULL, 'Aldea Santa Rita, Guastatoya', NULL, NULL, 'Prof. EnseÃ±anza Med', 42722887, 11, 14, 'celemoran721@gmail.com', 'celemoran4', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', 'Claudia MorÃ¡n', 55757230, NULL, 'cele', NULL, '12.png', 3, '2020-08-24 15:41:23.000000', 1, 1),
(62, 'MarÃ­a ', 'MorÃ¡n', '2020-08-26', 15, NULL, 'Aldea Santa Rita, Guastatoya', NULL, NULL, 'Prof. EnseÃ±anza Med', 42722887, 11, 145, '', 'celemoran4', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', 'Claudia MorÃ¡n', 55757230, NULL, 'cele', NULL, '12.png', NULL, '2020-08-24 15:42:10.000000', 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `persona_id` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `persona_id` (`persona_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `nombre`, `persona_id`) VALUES
(1, 'Guia', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
