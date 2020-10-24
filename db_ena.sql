-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2020 a las 22:23:49
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_ena`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncios`
--

CREATE TABLE IF NOT EXISTS `anuncios` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `creacion` datetime(6) NOT NULL,
  `persona_id` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `persona_id` (`persona_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `anuncios`
--

INSERT INTO `anuncios` (`id`, `titulo`, `descripcion`, `creacion`, `persona_id`) VALUES
(9, 'Clase virtual', '	De manera atenta me dirijo a ustedes para indicarles que el dÃ­a 25 de septiembre tendremos una clase virtual para indicar las bases del exÃ¡men. La misma se realizarÃ¡ en horario de 08:00 a 10:00.\r\nAtentos a la informaciÃ³n.', '2020-09-30 19:41:47.000000', 99),
(10, 'Prueba', '	oo', '2020-09-30 19:56:50.000000', 99),
(11, 'Prueba5', '	ll', '2020-09-30 19:57:28.000000', 99);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_alumno`
--

CREATE TABLE IF NOT EXISTS `asignacion_alumno` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `id_grado` int(4) NOT NULL,
  `id_alumno` int(6) NOT NULL,
  `id_padre` int(6) NOT NULL,
  `creacion` datetime(6) NOT NULL,
  `id_usuario` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `persona_id` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `asignacion_alumno`
--

INSERT INTO `asignacion_alumno` (`id`, `id_grado`, `id_alumno`, `id_padre`, `creacion`, `id_usuario`) VALUES
(10, 9, 86, 69, '2020-08-26 14:02:42.000000', 1),
(24, 9, 97, 69, '2020-08-26 15:28:23.000000', 1),
(25, 10, 101, 69, '2020-10-04 17:08:29.000000', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_anuncios`
--

CREATE TABLE IF NOT EXISTS `asignacion_anuncios` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `id_anuncio` int(25) NOT NULL,
  `id_materia` int(25) NOT NULL,
  `id_bimestre` int(4) NOT NULL,
  `creacion` datetime(6) NOT NULL,
  `persona_id` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `anuncio_id` (`id_anuncio`),
  KEY `materia_id` (`id_materia`),
  KEY `bimestre_id` (`id_bimestre`),
  KEY `persona_id` (`persona_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `asignacion_anuncios`
--

INSERT INTO `asignacion_anuncios` (`id`, `id_anuncio`, `id_materia`, `id_bimestre`, `creacion`, `persona_id`) VALUES
(8, 9, 12, 1, '2020-09-30 19:41:47.000000', 99),
(9, 10, 13, 1, '2020-09-30 19:56:51.000000', 99),
(10, 11, 13, 1, '2020-09-30 19:57:28.000000', 99);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_bgmp`
--

CREATE TABLE IF NOT EXISTS `asignacion_bgmp` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `id_grado` int(4) DEFAULT NULL,
  `id_materia` int(3) DEFAULT NULL,
  `id_bimestre` int(2) DEFAULT NULL,
  `id_profesor` int(6) DEFAULT NULL,
  `creacion` datetime(6) NOT NULL,
  `id_usuario` int(3) NOT NULL,
  `id_calname` int(11) DEFAULT NULL,
  `id_cal` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `persona_id` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `asignacion_bgmp`
--

INSERT INTO `asignacion_bgmp` (`id`, `id_grado`, `id_materia`, `id_bimestre`, `id_profesor`, `creacion`, `id_usuario`, `id_calname`, `id_cal`) VALUES
(14, 9, 12, 1, 99, '2020-08-27 17:30:32.000000', 1, NULL, NULL),
(15, 9, 13, NULL, 99, '2020-09-30 16:56:00.000000', 1, NULL, NULL),
(16, 10, 14, NULL, 100, '2020-10-04 16:35:01.000000', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_examen`
--

CREATE TABLE IF NOT EXISTS `asignacion_examen` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `creacion` datetime(6) NOT NULL,
  `estado` int(2) NOT NULL DEFAULT '0',
  `persona_id` int(3) NOT NULL,
  `id_examen` int(255) NOT NULL,
  `id_materia` int(255) NOT NULL,
  `id_bimestre` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `persona_id` (`persona_id`),
  KEY `id_examen` (`id_examen`),
  KEY `id_materia` (`id_materia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `asignacion_examen`
--

INSERT INTO `asignacion_examen` (`id`, `creacion`, `estado`, `persona_id`, `id_examen`, `id_materia`, `id_bimestre`) VALUES
(1, '2020-10-14 06:53:54.000000', 0, 99, 1, 12, 1),
(2, '2020-10-14 07:06:48.000000', 1, 99, 2, 12, 1),
(3, '2020-10-14 20:35:55.000000', 0, 99, 3, 12, 1),
(4, '2020-10-14 20:37:31.000000', 0, 99, 4, 12, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_material`
--

CREATE TABLE IF NOT EXISTS `asignacion_material` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `id_material` int(25) NOT NULL,
  `id_materia` int(25) NOT NULL,
  `id_bimestre` int(4) NOT NULL,
  `creacion` datetime(6) NOT NULL,
  `persona_id` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `material_id` (`id_material`),
  KEY `materia_id` (`id_materia`),
  KEY `bimestre_id` (`id_bimestre`),
  KEY `persona_id` (`persona_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Volcado de datos para la tabla `asignacion_material`
--

INSERT INTO `asignacion_material` (`id`, `id_material`, `id_materia`, `id_bimestre`, `creacion`, `persona_id`) VALUES
(35, 13, 12, 1, '2020-10-09 06:32:35.000000', 99);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_pregunta`
--

CREATE TABLE IF NOT EXISTS `asignacion_pregunta` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `creacion` datetime(6) NOT NULL,
  `persona_id` int(3) NOT NULL,
  `id_pregunta` int(255) NOT NULL,
  `id_examen` int(255) NOT NULL,
  `id_materia` int(255) NOT NULL,
  `id_bimestre` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `persona_id` (`persona_id`),
  KEY `id_examen` (`id_examen`),
  KEY `id_materia` (`id_materia`),
  KEY `id_pregunta` (`id_pregunta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `asignacion_pregunta`
--

INSERT INTO `asignacion_pregunta` (`id`, `creacion`, `persona_id`, `id_pregunta`, `id_examen`, `id_materia`, `id_bimestre`) VALUES
(1, '2020-10-15 07:06:27.000000', 99, 1, 1, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_tarea`
--

CREATE TABLE IF NOT EXISTS `asignacion_tarea` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `creacion` datetime(6) NOT NULL,
  `estado` int(2) NOT NULL DEFAULT '1',
  `persona_id` int(3) NOT NULL,
  `id_tarea` int(255) NOT NULL,
  `id_materia` int(255) NOT NULL,
  `id_bimestre` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `persona_id` (`persona_id`),
  KEY `id_tarea` (`id_tarea`),
  KEY `id_materia` (`id_materia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `asignacion_tarea`
--

INSERT INTO `asignacion_tarea` (`id`, `creacion`, `estado`, `persona_id`, `id_tarea`, `id_materia`, `id_bimestre`) VALUES
(19, '2020-10-04 19:03:02.000000', 1, 100, 26, 14, 1),
(22, '2020-10-04 19:28:46.000000', 1, 99, 29, 12, 1),
(23, '2020-10-04 20:02:07.000000', 1, 99, 30, 12, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bimestre`
--

CREATE TABLE IF NOT EXISTS `bimestre` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `creacion` datetime(6) NOT NULL,
  `persona_id` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `persona_id` (`persona_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `bimestre`
--

INSERT INTO `bimestre` (`id`, `nombre`, `creacion`, `persona_id`) VALUES
(1, 'Primer Bimestre', '2020-07-22 00:00:00.000000', 1),
(2, 'Segundo Bimestre', '2020-07-22 00:00:00.000000', 1),
(3, 'Tercer Bimestre', '2020-07-22 00:00:00.000000', 1),
(4, 'Cuarto Bimestre', '2020-07-22 00:00:00.000000', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion_categoria`
--

CREATE TABLE IF NOT EXISTS `calificacion_categoria` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `creacion` datetime(6) NOT NULL,
  `persona_id` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `persona_id` (`persona_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrega_tarea`
--

CREATE TABLE IF NOT EXISTS `entrega_tarea` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `comentario` varchar(255) DEFAULT NULL,
  `documento` varchar(255) DEFAULT NULL,
  `persona_id` int(3) NOT NULL,
  `id_tarea` int(255) NOT NULL,
  `creacion` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `persona_id` (`persona_id`),
  KEY `id_tarea` (`id_tarea`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `entrega_tarea`
--

INSERT INTO `entrega_tarea` (`id`, `comentario`, `documento`, `persona_id`, `id_tarea`, `creacion`) VALUES
(25, 'Adjunto mi tarea.\r\n', 'CamScanner_09-15-2020_18.42.31_6.pdf', 86, 22, '2020-10-04 19:51:22.000000'),
(29, 'prueba\r\n', 'CamScanner_09-15-2020_18.42.31_10.pdf', 98, 22, '2020-10-04 20:41:48.000000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapa`
--

CREATE TABLE IF NOT EXISTS `etapa` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `creacion` datetime(6) NOT NULL,
  `persona_id` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `persona_id` (`persona_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `etapa`
--

INSERT INTO `etapa` (`id`, `nombre`, `creacion`, `persona_id`) VALUES
(1, 'Primaria', '2020-07-22 00:00:00.000000', 1),
(2, 'Basico', '2020-07-22 00:00:00.000000', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen`
--

CREATE TABLE IF NOT EXISTS `examen` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `valor` int(3) NOT NULL,
  `f_entrega` date NOT NULL,
  `tiempo` int(11) NOT NULL,
  `c_preguntas` int(10) NOT NULL,
  `creacion` datetime(6) NOT NULL,
  `persona_id` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `persona_id` (`persona_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `examen`
--

INSERT INTO `examen` (`id`, `nombre`, `descripcion`, `valor`, `f_entrega`, `tiempo`, `c_preguntas`, `creacion`, `persona_id`) VALUES
(1, 'ExÃ¡men Parcial 1', 'A continuaciÃ³n se le presentan diferentes enunciados sobre los nÃºmeros enteros, seleccione la respuesta que considere correcta.                 ', 10, '2020-10-30', 10, 10, '2020-10-14 06:53:54.000000', 99),
(2, 'Parcial 2', ' El siguiente parcial es sobre valores infinitos, seleccione los valores que considere correspondan al enunciado.', 7, '2020-10-30', 0, 0, '2020-10-14 07:06:48.000000', 99),
(3, 'prueba final', '	kkk', 10, '2020-10-21', 60, 10, '2020-10-14 20:35:55.000000', 99),
(4, 'Prueba9', '	k', 10, '2020-10-30', 5, 1, '2020-10-14 20:37:31.000000', 99);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE IF NOT EXISTS `grado` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `creacion` datetime(6) NOT NULL,
  `user_id` int(3) NOT NULL,
  `id_etapa` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `persona_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`id`, `nombre`, `creacion`, `user_id`, `id_etapa`) VALUES
(9, 'Tercero', '2020-08-26 11:40:25.000000', 1, 2),
(10, 'Quinto', '2020-10-04 16:34:44.000000', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE IF NOT EXISTS `materia` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `id_usuario` int(3) NOT NULL,
  `id_grado` int(4) DEFAULT NULL,
  `creacion` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `persona_id` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

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
(11, 'Matematica', 1, 8, NULL),
(12, 'Matematica', 1, 9, NULL),
(13, 'FIsica', 1, 9, NULL),
(14, 'FIsica2', 1, 10, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE IF NOT EXISTS `material` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `documento` varchar(255) DEFAULT NULL,
  `persona_id` int(3) DEFAULT NULL,
  `creacion` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `persona_id` (`persona_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `material`
--

INSERT INTO `material` (`id`, `titulo`, `descripcion`, `documento`, `persona_id`, `creacion`) VALUES
(6, 'kk', 'll', 'Check_1.pdf', 99, '2020-10-08 22:30:40.000000'),
(7, 'll', 'll', 'Cobit5_8.pdf', 99, '2020-10-08 22:34:18.000000'),
(13, 'Clase semana 6-La evoluciÃ³n ', 'Adjunto material de aprendizaje sobre la evoluciÃ³n de las especies.', 'Caso_de_Estudio_I.docx', 99, '2020-10-09 06:32:35.000000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota_tarea`
--

CREATE TABLE IF NOT EXISTS `nota_tarea` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `comentario` varchar(255) DEFAULT NULL,
  `nota` int(2) NOT NULL,
  `creacion` datetime(6) NOT NULL,
  `persona_id` int(3) NOT NULL,
  `entrega_id` int(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `entrega_id_2` (`entrega_id`),
  KEY `persona_id` (`persona_id`),
  KEY `entrega_id` (`entrega_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `nota_tarea`
--

INSERT INTO `nota_tarea` (`id`, `comentario`, `nota`, `creacion`, `persona_id`, `entrega_id`) VALUES
(23, '', 1, '2020-10-23 07:23:18.000000', 99, 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

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
  `dpi` bigint(13) DEFAULT NULL,
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
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `codigo` (`codigo`),
  UNIQUE KEY `correo` (`correo`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_rol` (`id_rol`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nombres`, `apellidos`, `fecha_nac`, `edad`, `codigo`, `direccion`, `alergias`, `medicamento`, `profesion`, `telefono_1`, `telefono_2`, `dpi`, `correo`, `username`, `password`, `ref_nombre`, `ref_telefono`, `ref_direccion`, `ref_correo`, `ref_parentesco`, `image`, `rol`, `creacion`, `id_rol`, `id_usuario`) VALUES
(1, 'Maria Celeste', 'Morán Morales', NULL, NULL, NULL, 'San Juan, Santa Rita', NULL, NULL, NULL, 42722887, NULL, 0, 'celemoran721@gmail.com', 'admin', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', '', 0, NULL, NULL, NULL, NULL, 2, '2020-07-22 00:00:00.000000', NULL, 1),
(69, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 21474836478, NULL, NULL, NULL, 'Ricardo Alberto Gomez', 58595653, 'Sanarate', 'ricardoa12@gmail.com', NULL, 'phombre_1.jpg', 4, '2020-08-26 11:53:37.000000', 0, 1),
(72, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 28196, NULL, NULL, NULL, 'Lorena Bautista', 58595657, 'Guastatoya', 'lore145@gmail.com', NULL, 'pmujer_2.jpg', 4, '2020-08-26 13:22:29.000000', NULL, 1),
(86, 'Maria Kristal', 'Gomez Perez', '2020-08-13', 0, 'A14FFE', 'Sanarate', '--', '--', NULL, NULL, NULL, NULL, 'mariag12@gmail.com', 'Mgmez', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', NULL, NULL, NULL, NULL, 'Padre', 'emujer_3.jpg', 1, '2020-08-26 14:02:42.000000', NULL, 1),
(97, 'Pedro Pablo', 'Gomez Perez', '2020-08-18', NULL, 'A14FF5T', 'Sanarate', '--', '--', NULL, NULL, NULL, NULL, 'pedpakb@gmail.com', 'PedroP3', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', NULL, NULL, NULL, NULL, 'Padre', 'varon.jpg', 1, '2020-08-26 15:28:23.000000', NULL, 1),
(98, 'MarÃ­a ', 'MorÃ¡n', '2020-08-25', NULL, '589588', 'Sanarate', '--', '--', NULL, NULL, NULL, NULL, 'pedpakb@gmail.com5', 'pedroP15', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', NULL, NULL, NULL, NULL, 'Padre', NULL, 1, '2020-08-26 15:29:26.000000', NULL, 1),
(99, 'Carlos Gilberto', 'Morataya', '2020-08-12', 25, NULL, 'Aldea Santa Rita, Guastatoya', NULL, NULL, 'Prof. EnseÃ±anza Med', 42722887, 11458965, 2819633390456, 'cmpra@gmail.com', 'cMorataya', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', 'Claudia MorÃ¡n', 55757230, NULL, 'clmora@gmail.com', NULL, 'p.jpg', 3, '2020-08-27 17:10:16.000000', 1, 1),
(100, 'MArio ', 'Aldana', '2020-10-19', NULL, NULL, 'San Juan', NULL, NULL, 'Profesor', 1258, 8569, 12459632, 'admin2@gmail.com', 'admin2', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', 'prieba', 45865, NULL, 'coreo@gmail.com', NULL, NULL, 3, '2020-10-04 16:34:18.000000', 1, 1),
(101, 'MArio ', 'Aldana', '2020-10-21', NULL, '7lo4', 'San Juan', '--', '--', NULL, NULL, NULL, NULL, 'alum2@gmial.com', 'admin3', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', NULL, NULL, NULL, NULL, 'padre', 'emujer_4.jpg', 1, '2020-10-04 17:08:29.000000', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE IF NOT EXISTS `preguntas` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(255) DEFAULT NULL,
  `r_1` varchar(255) DEFAULT NULL,
  `r_2` varchar(255) DEFAULT NULL,
  `r_3` varchar(255) DEFAULT NULL,
  `r_4` varchar(255) DEFAULT NULL,
  `r_5` varchar(255) DEFAULT NULL,
  `correcta` varchar(255) DEFAULT NULL,
  `valor` int(3) NOT NULL,
  `creacion` datetime(6) NOT NULL,
  `persona_id` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `persona_id` (`persona_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id`, `pregunta`, `r_1`, `r_2`, `r_3`, `r_4`, `r_5`, `correcta`, `valor`, `creacion`, `persona_id`) VALUES
(1, '	prueba', '1', '2', '3', '4', '5', '2', 2, '2020-10-15 07:06:27.000000', 99);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id`, `name`, `image`) VALUES
(10, 'Celeste ', NULL),
(11, 'Celeste ', NULL),
(12, 'Celeste ', '44.png'),
(13, 'Celeste ', '44_1.png'),
(14, 'Celeste ', NULL),
(15, 'Celeste ', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `persona_id` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `persona_id` (`persona_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `nombre`, `persona_id`) VALUES
(1, 'Guia', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarea`
--

CREATE TABLE IF NOT EXISTS `tarea` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `valor` int(3) NOT NULL,
  `f_entrega` date NOT NULL,
  `creacion` datetime(6) NOT NULL,
  `persona_id` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `persona_id` (`persona_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `tarea`
--

INSERT INTO `tarea` (`id`, `nombre`, `descripcion`, `valor`, `f_entrega`, `creacion`, `persona_id`) VALUES
(26, 'FÃ­sica Relacional2', '    Investigar los estados de la fÃ­sica en sus diferentes componentes, caratula, introducciÃ³n, conclusiÃ³n y referencias.                ', 4, '2020-10-19', '2020-10-04 19:03:02.000000', 100),
(29, 'Valores enteros', 'Realizar investigacion de valores enteros, agregando ejemplos. \r\nIntroducciÃ³n y conlusiÃ³n.', 1, '2020-10-01', '2020-10-04 19:28:46.000000', 99),
(30, 'Valores infinitos', 'Realizar trabajo completo con introducciÃ³n y conclusiÃ³n. Investigando en el contenido los valores infinitos,', 3, '2020-10-16', '2020-10-03 20:02:07.000000', 99);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
