-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-08-2020 a las 01:03:16
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `constructoradb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `box`
--

CREATE TABLE IF NOT EXISTS `box` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stock_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `box`
--

INSERT INTO `box` (`id`, `stock_id`, `created_at`) VALUES
(1, 1, '2020-06-08 17:39:24'),
(2, 1, '2020-06-09 01:46:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `description` text,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`) VALUES
(1, 'MATERIAL DE CONSTRUCCION', '2020-01-23 17:46:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuration`
--

CREATE TABLE IF NOT EXISTS `configuration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `short` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `kind` int(11) NOT NULL,
  `val` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `short` (`short`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `configuration`
--

INSERT INTO `configuration` (`id`, `short`, `name`, `kind`, `val`) VALUES
(1, 'company_name', 'Nombre de la empresa', 2, 'Costructora XYZ'),
(2, 'title', 'Titulo del Sistema', 2, 'Costructora XYZ'),
(3, 'ticket_title', 'Titulo en el Ticket', 2, 'Costructora XYZ'),
(4, 'admin_email', 'Email Administracion', 2, ''),
(5, 'report_image', 'Imagen en Reportes', 4, ''),
(6, 'imp-name', 'Nombre Impuesto', 2, 'IVA'),
(7, 'imp-val', 'Valor Impuesto (%)', 2, '12'),
(8, 'currency', 'Simbolo de Moneda', 2, 'Q'),
(9, 'Direccion', 'Direccion', 2, 'Guastatoya El Progreso'),
(10, 'Telefono', 'Telefono', 2, '42424242');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d`
--

CREATE TABLE IF NOT EXISTS `d` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `d`
--

INSERT INTO `d` (`id`, `name`) VALUES
(1, 'Entregado'),
(2, 'Pendiente'),
(3, 'Cancelado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `f`
--

CREATE TABLE IF NOT EXISTS `f` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `f`
--

INSERT INTO `f` (`id`, `name`) VALUES
(1, 'Efectivo'),
(2, 'Deposito'),
(3, 'Cheque');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `user_from` int(11) NOT NULL,
  `user_to` int(11) NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `message`
--

INSERT INTO `message` (`id`, `code`, `message`, `user_from`, `user_to`, `is_read`, `created_at`) VALUES
(1, 'tMElfKAmLvs6Zrm', 'Prueba', 1, 1, 1, '2020-06-08 17:38:09'),
(2, 'tMElfKAmLvs6Zrm', 'como estamos', 1, 0, 0, '2020-06-08 17:38:33'),
(3, 'SkfSEribFWwUoVa', 'hola', 1, 1, 1, '2020-06-10 21:19:00'),
(4, 'SkfSEribFWwUoVa', 'que tal\r\n', 1, 0, 0, '2020-06-10 21:19:47'),
(5, 'SkfSEribFWwUoVa', 'como esta', 1, 0, 0, '2020-06-10 21:19:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operation`
--

CREATE TABLE IF NOT EXISTS `operation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  `stock_destination_id` int(11) DEFAULT NULL,
  `operation_from_id` int(11) DEFAULT NULL,
  `q` float NOT NULL,
  `price_in` double DEFAULT NULL,
  `price_out` double DEFAULT NULL,
  `operation_type_id` int(11) NOT NULL,
  `sell_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `is_draft` tinyint(1) NOT NULL DEFAULT '0',
  `is_traspase` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `stock_id` (`stock_id`),
  KEY `stock_destination_id` (`stock_destination_id`),
  KEY `product_id` (`product_id`),
  KEY `operation_type_id` (`operation_type_id`),
  KEY `sell_id` (`sell_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `operation`
--

INSERT INTO `operation` (`id`, `product_id`, `stock_id`, `stock_destination_id`, `operation_from_id`, `q`, `price_in`, `price_out`, `operation_type_id`, `sell_id`, `status`, `is_draft`, `is_traspase`, `created_at`) VALUES
(12, 1, 1, NULL, NULL, 10, 1.8, 2, 4, 1, 1, 0, 0, '2020-08-23 23:39:44'),
(2, 4, 1, NULL, NULL, 4, 80, 85, 2, 3, 1, 0, 0, '2020-08-23 19:13:23'),
(13, 4, 1, NULL, NULL, 10, 80, 85, 2, 4, 1, 0, 0, '2020-08-24 00:15:38'),
(11, 4, 1, NULL, NULL, 27, 80, 85, 4, 1, 1, 0, 0, '2020-08-23 23:39:44'),
(14, 4, 1, NULL, NULL, 20, 80, 85, 2, 5, 1, 1, 0, '2020-08-24 00:41:10'),
(15, 1, 1, NULL, NULL, 10, 1.8, 2, 2, 5, 1, 1, 0, '2020-08-24 00:41:10'),
(16, 1, 1, NULL, NULL, 1, 1.8, 2, 2, 6, 1, 0, 0, '2020-08-25 12:05:39'),
(17, 1, 1, NULL, NULL, 10, 1.8, 2, 4, 7, 1, 0, 0, '2020-08-28 11:00:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operation_type`
--

CREATE TABLE IF NOT EXISTS `operation_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `operation_type`
--

INSERT INTO `operation_type` (`id`, `name`) VALUES
(1, 'entrada'),
(2, 'salida'),
(3, 'entrada-pendiente'),
(4, 'salida-pendiente'),
(5, 'devolucion'),
(6, 'traspaso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p`
--

CREATE TABLE IF NOT EXISTS `p` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `p`
--

INSERT INTO `p` (`id`, `name`) VALUES
(1, 'Pagado'),
(2, 'Pendiente'),
(3, 'Cancelado'),
(4, 'Credito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_type_id` int(11) NOT NULL,
  `sell_id` int(11) DEFAULT NULL,
  `person_id` int(11) NOT NULL,
  `val` double DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `person_id` (`person_id`),
  KEY `sell_id` (`sell_id`),
  KEY `payment_type_id` (`payment_type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payment_type`
--

CREATE TABLE IF NOT EXISTS `payment_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `payment_type`
--

INSERT INTO `payment_type` (`id`, `name`) VALUES
(1, 'Cargo'),
(2, 'Abono');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `no` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `company` varchar(50) DEFAULT NULL,
  `address1` varchar(50) DEFAULT NULL,
  `address2` varchar(50) DEFAULT NULL,
  `phone1` varchar(50) DEFAULT NULL,
  `phone2` varchar(50) DEFAULT NULL,
  `email1` varchar(50) DEFAULT NULL,
  `email2` varchar(50) DEFAULT NULL,
  `is_active_access` tinyint(1) NOT NULL DEFAULT '0',
  `has_credit` tinyint(1) NOT NULL DEFAULT '0',
  `credit_limit` double DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `kind` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `person`
--

INSERT INTO `person` (`id`, `image`, `no`, `name`, `lastname`, `company`, `address1`, `address2`, `phone1`, `phone2`, `email1`, `email2`, `is_active_access`, `has_credit`, `credit_limit`, `password`, `kind`, `created_at`) VALUES
(1, NULL, '787523-1', 'Alexis', 'Moran', NULL, 'Guastatoya', NULL, '42312338', NULL, 'srg.alexismoran@gmail.com', NULL, 0, 1, 2500, '67a74306b06d0c01624fe0d0249a570f4d093747', 1, '2020-06-08 17:35:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `price`
--

CREATE TABLE IF NOT EXISTS `price` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price_out` double DEFAULT '0',
  `product_id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  KEY `stock_id` (`stock_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `price`
--

INSERT INTO `price` (`id`, `price_out`, `product_id`, `stock_id`) VALUES
(7, 3, 4, 1),
(8, 2, 4, 3),
(10, 3.5, 5, 1),
(11, 2.5, 5, 3),
(9, 1.5, 4, 4),
(12, 1.5, 5, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `barcode` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` text,
  `inventary_min` int(11) DEFAULT '10',
  `price_in` double DEFAULT NULL,
  `price_out` double DEFAULT NULL,
  `entrada` int(11) DEFAULT NULL,
  `salida` int(11) DEFAULT NULL,
  `unit` double DEFAULT NULL,
  `presentation` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `kind` tinyint(4) DEFAULT '1',
  `ubicacion` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id`, `image`, `barcode`, `name`, `description`, `inventary_min`, `price_in`, `price_out`, `entrada`, `salida`, `unit`, `presentation`, `user_id`, `category_id`, `created_at`, `is_active`, `kind`, `ubicacion`) VALUES
(1, '', '1', 'BLOCK', 'BLOCK PARA CONSTRUIR CASAS', 50, 1.8, 2, NULL, NULL, 1489, 1, 1, 1, '2020-08-21', 1, 1, ''),
(4, '', '4', 'CEMENTO', 'CEMENTO XYZ', 10, 80, 85, NULL, NULL, 486, 9, 1, 1, '2020-08-21', 1, 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `saving`
--

CREATE TABLE IF NOT EXISTS `saving` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `concept` varchar(255) DEFAULT NULL,
  `description` text,
  `amount` float DEFAULT NULL,
  `date_at` date DEFAULT NULL,
  `kind` int(11) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `saving`
--

INSERT INTO `saving` (`id`, `concept`, `description`, `amount`, `date_at`, `kind`, `created_at`) VALUES
(1, 'Ingreso a caja', 'Apertura de caja', 500, '2020-08-23', 1, '2020-08-23'),
(2, 'Venta de Productos', 'Factura No. ', 340, '2020-08-23', 1, '2020-08-23'),
(3, 'Venta de Productos', 'Factura No. 12333', 850, '2020-08-24', 1, '2020-08-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sell`
--

CREATE TABLE IF NOT EXISTS `sell` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_code` varchar(255) DEFAULT NULL,
  `invoice_file` varchar(255) DEFAULT NULL,
  `comment` text,
  `ref_id` int(11) DEFAULT NULL,
  `sell_from_id` int(11) DEFAULT NULL,
  `person_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `operation_type_id` int(11) DEFAULT '2',
  `box_id` int(11) DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  `d_id` int(11) DEFAULT NULL,
  `f_id` int(11) DEFAULT NULL,
  `total` double DEFAULT NULL,
  `cash` double DEFAULT NULL,
  `iva` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `is_draft` tinyint(1) NOT NULL DEFAULT '0',
  `stock_to_id` int(11) DEFAULT NULL,
  `stock_from_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `p_id` (`p_id`),
  KEY `d_id` (`d_id`),
  KEY `box_id` (`box_id`),
  KEY `operation_type_id` (`operation_type_id`),
  KEY `user_id` (`user_id`),
  KEY `person_id` (`person_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `sell`
--

INSERT INTO `sell` (`id`, `invoice_code`, `invoice_file`, `comment`, `ref_id`, `sell_from_id`, `person_id`, `user_id`, `operation_type_id`, `box_id`, `p_id`, `d_id`, `f_id`, `total`, `cash`, `iva`, `discount`, `is_draft`, `stock_to_id`, `stock_from_id`, `status`, `created_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, NULL, 1, 1, NULL, 2315, 2320, 12, 0, 0, 1, NULL, 1, '2020-08-21 11:58:06'),
(4, '12333', NULL, '', 28, NULL, 1, 1, 2, NULL, 1, 1, NULL, 850, 900, 12, 0, 0, 1, NULL, 1, '2020-08-24 00:15:38'),
(3, '', NULL, '', 27, NULL, NULL, 1, 2, NULL, 1, 1, NULL, 340, 350, 12, 0, 0, 1, NULL, 1, '2020-08-23 19:13:23'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, NULL, 2, 2, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 1, '2020-08-24 00:41:10'),
(6, '123', NULL, '', 29, NULL, 1, 1, 2, NULL, 2, 1, NULL, 2, 10, 12, 0, 0, 1, NULL, 1, '2020-08-25 12:05:39'),
(7, '00', NULL, '', 30, NULL, 1, 1, 2, NULL, 2, 2, NULL, 20, 30, 12, 0, 0, 1, NULL, 1, '2020-08-28 11:00:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `spend`
--

CREATE TABLE IF NOT EXISTS `spend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` double DEFAULT NULL,
  `box_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `box_id` (`box_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `is_principal` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`id`, `name`, `address`, `phone`, `email`, `is_principal`) VALUES
(1, 'Precio Principal', '', '', '', 1),
(3, 'Mayorita', 'Guastatoya', '78787878', 'juanperez@gmail.com', 0),
(4, 'Mayorista 2', '', '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `umedida`
--

CREATE TABLE IF NOT EXISTS `umedida` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `umedida`
--

INSERT INTO `umedida` (`id`, `name`) VALUES
(1, 'UNIDAD'),
(2, 'LIBRA'),
(9, 'QUINTALES'),
(10, 'BOLSA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `comision` float DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `kind` int(11) NOT NULL DEFAULT '1',
  `stock_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `name`, `lastname`, `username`, `email`, `password`, `image`, `comision`, `status`, `kind`, `stock_id`, `created_at`) VALUES
(1, 'Administrador', '', NULL, 'admin', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', NULL, NULL, 1, 1, NULL, '2020-06-08 13:04:27'),
(3, 'Juan', 'Perez', 'jperez', 'jperez', '0a8fee4cbe34e807cf7814062306c87f8637f329', '', 1, 1, 3, 1, '2020-06-20 08:49:27'),
(4, 'Jose', 'Orellana', 'jorellana', 'jorellana', '1602034ea089c96982be318923ece6fb30c36314', '', 0, 1, 3, 1, '2020-06-20 08:51:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `xx`
--

CREATE TABLE IF NOT EXISTS `xx` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `xx`
--

INSERT INTO `xx` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(29),
(30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `yy`
--

CREATE TABLE IF NOT EXISTS `yy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `yy`
--

INSERT INTO `yy` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
