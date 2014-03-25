-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-03-2014 a las 00:33:45
-- Versión del servidor: 5.5.34
-- Versión de PHP: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `let`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `AREA_PK` int(11) NOT NULL AUTO_INCREMENT,
  `EMPRESA_PK` int(11) NOT NULL,
  `NOMBRE_AREA` varchar(64) NOT NULL,
  `CODIGO` varchar(64) DEFAULT NULL,
  `POSICION` int(11) NOT NULL,
  PRIMARY KEY (`AREA_PK`),
  KEY `FK_REFERENCE_30` (`EMPRESA_PK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`AREA_PK`, `EMPRESA_PK`, `NOMBRE_AREA`, `CODIGO`, `POSICION`) VALUES
(1, 1, 'Seguridad Salud Ambiente', 'SSTMA', 1),
(2, 1, 'Centro Nacional de Distribucion', 'CND', 1),
(3, 1, 'Higiene y cuidado personal', 'HCP', 1),
(4, 2, 'Compras', 'CMP', 1),
(5, 3, 'Proveedores', 'PRV', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE IF NOT EXISTS `cargo` (
  `CARGO_PK` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_CARGO` varchar(64) NOT NULL,
  `POSICION` int(11) NOT NULL,
  PRIMARY KEY (`CARGO_PK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`CARGO_PK`, `NOMBRE_CARGO`, `POSICION`) VALUES
(1, 'Gerente General', 1),
(2, 'Gerente Financiero', 1),
(3, 'Coordinador', 1),
(4, 'Jefe de area', 1),
(5, 'Operador', 1),
(6, 'Encargado', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `CATEGORIA_PK` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_CATEGORIA` varchar(64) NOT NULL,
  `DESCRIPCION` text NOT NULL,
  `POSICION` int(11) NOT NULL,
  PRIMARY KEY (`CATEGORIA_PK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`CATEGORIA_PK`, `NOMBRE_CATEGORIA`, `DESCRIPCION`, `POSICION`) VALUES
(1, 'Básicas', 'inicial mínima para auditorias', 1),
(2, 'Prohibición', 'de los reglamentos', 1),
(3, 'Riesgos', 'Iess', 1),
(4, 'Protección', 'equipos u obligaciones', 1),
(5, 'Incendios', 'bomberos', 1),
(6, 'Evacuación', 'bomberos', 1),
(7, 'Oficinas', 'organigrama administrativo', 1),
(8, 'Áreas', 'organigrama de procesos', 1),
(9, 'Servicios', 'basicos', 1),
(10, 'Quimicos', 'manejo de productos', 1),
(11, 'Planos', 'indoles', 1),
(12, 'Especiales', 'a la medida', 1),
(13, 'Parqueaderos', 'Organizacion', 1),
(14, 'Emergencia', 'primeros auxilios', 1),
(15, 'Dinámicas', 'suma de señales', 1),
(16, 'Laboratorios', 'Exclusivo', 1),
(17, 'Pequenos', 'cartelitos pequenos', 1),
(18, 'Adhesivos', 'comunes', 1),
(19, 'Electricos', 'est cam tab bt', 1),
(20, 'Diseno interiores', 'decoracion', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE IF NOT EXISTS `ciudad` (
  `CIUDAD_PK` int(11) NOT NULL AUTO_INCREMENT,
  `PROVINCIA_PK` int(11) NOT NULL,
  `NOMBRE_CIUDAD` varchar(64) NOT NULL,
  `POSICION` int(11) NOT NULL,
  PRIMARY KEY (`CIUDAD_PK`),
  KEY `FK_REFERENCE_6` (`PROVINCIA_PK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`CIUDAD_PK`, `PROVINCIA_PK`, `NOMBRE_CIUDAD`, `POSICION`) VALUES
(1, 1, 'Guayaquil', 1),
(2, 2, 'Quito', 1),
(3, 5, 'Manta', 1),
(4, 5, 'Tena', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
  `CONTACTO_PK` int(11) NOT NULL AUTO_INCREMENT,
  `CIUDAD_PK` int(11) NOT NULL,
  `CARGO_PK` int(11) DEFAULT NULL,
  `AREA_PK` int(11) DEFAULT NULL,
  `NOMBRES_CONTACTO` varchar(64) NOT NULL,
  `APELLIDOS_CONTACTO` varchar(64) NOT NULL,
  `TELEFONO` varchar(16) DEFAULT NULL,
  `EXTENSION` varchar(8) DEFAULT NULL,
  `CELULAR_1` varchar(16) DEFAULT NULL,
  `CELULAR_2` varchar(16) DEFAULT NULL,
  `CORREO_TRABAJO` varchar(64) DEFAULT NULL,
  `CORREO_ALTERNATIVO` varchar(64) DEFAULT NULL,
  `OBSERVACIONES` text,
  `POSICION` int(11) NOT NULL,
  PRIMARY KEY (`CONTACTO_PK`),
  KEY `FK_REFERENCE_11` (`CIUDAD_PK`),
  KEY `FK_REFERENCE_12` (`CARGO_PK`),
  KEY `FK_REFERENCE_13` (`AREA_PK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`CONTACTO_PK`, `CIUDAD_PK`, `CARGO_PK`, `AREA_PK`, `NOMBRES_CONTACTO`, `APELLIDOS_CONTACTO`, `TELEFONO`, `EXTENSION`, `CELULAR_1`, `CELULAR_2`, `CORREO_TRABAJO`, `CORREO_ALTERNATIVO`, `OBSERVACIONES`, `POSICION`) VALUES
(2, 3, 2, 2, 'Felipe', 'Gonzales', '213123123', '123213', '453454', NULL, 'ssads@gmail.com', NULL, 'Ninguna.', 5),
(3, 3, 1, 2, 'Marco', 'Sanchez', '09582512', '251', '05150', NULL, NULL, 'rrr@sggfg', NULL, 8),
(4, 2, 1, 1, 'Adrian', 'Perez', '6798798', '78', '03487948', NULL, NULL, NULL, 'Ninguna', 1),
(5, 3, 4, 3, 'Jairo', 'Safadi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `EMPRESA_PK` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_EMPRESA` varchar(64) NOT NULL,
  `RUC` varchar(20) DEFAULT NULL,
  `DIRECCION` text,
  `REFERENCIA` text,
  `TELEFONO` varchar(16) DEFAULT NULL,
  `POSICION` int(11) NOT NULL,
  PRIMARY KEY (`EMPRESA_PK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`EMPRESA_PK`, `NOMBRE_EMPRESA`, `RUC`, `DIRECCION`, `REFERENCIA`, `TELEFONO`, `POSICION`) VALUES
(1, 'LAFABRIL', '781632637', 'via manta motecristi', 'oleaginosa', '27643434', 2),
(2, 'PINTEX', '98324623743', 'Av prensa', 'textil', '37463464', 3),
(3, 'ECUASISTENCIA', '4541556', '12 de Octubre', 'Transporte', '2554644', 1),
(4, 'AVIFORTE', '154514565135', 'Calderon', 'Alimento Balanceados', '2568443', 1),
(5, 'FAMILIA', '1748576982332', 'Los arupos y cuturpilla', 'interagua', '2568447', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `figura`
--

CREATE TABLE IF NOT EXISTS `figura` (
  `FIGURA_PK` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_FIGURA` varchar(64) NOT NULL,
  `POSICION_FIGURA` int(11) NOT NULL,
  PRIMARY KEY (`FIGURA_PK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `figura`
--

INSERT INTO `figura` (`FIGURA_PK`, `NOMBRE_FIGURA`, `POSICION_FIGURA`) VALUES
(1, 'Cuadrado', 1),
(2, 'Rectangulo', 2),
(3, 'Maquinas', 3),
(4, 'Tuberias', 4),
(5, 'Diseno interiores', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medida`
--

CREATE TABLE IF NOT EXISTS `medida` (
  `MEDIDA_PK` int(11) NOT NULL AUTO_INCREMENT,
  `FIGURA_PK` int(11) DEFAULT NULL,
  `LARGO` int(11) DEFAULT NULL,
  `ANCHO` int(11) DEFAULT NULL,
  `POSICION` int(11) NOT NULL,
  PRIMARY KEY (`MEDIDA_PK`),
  KEY `FK_REFERENCE_10` (`FIGURA_PK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `medida`
--

INSERT INTO `medida` (`MEDIDA_PK`, `FIGURA_PK`, `LARGO`, `ANCHO`, `POSICION`) VALUES
(1, 2, 10, 10, 5),
(5, 1, 16, 16, 2),
(7, 1, 23, 23, 3),
(8, 1, 30, 30, 4),
(9, 2, 16, 32, 6),
(10, 2, 23, 46, 7),
(11, 3, 5, 5, 1),
(14, 4, 3, 20, 1),
(15, 4, 5, 30, 1),
(16, 4, 7, 50, 1),
(17, 3, 3, 3, 1),
(18, 3, 6, 6, 1),
(19, 3, 9, 9, 1),
(20, 3, 12, 12, 1),
(21, 5, 100, 100, 1),
(22, 3, 15, 15, 1),
(23, 3, 20, 20, 1),
(24, 4, 18, 60, 1),
(25, 1, 12, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE IF NOT EXISTS `pais` (
  `PAIS_PK` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_PAIS` varchar(64) NOT NULL,
  `POSICION` int(11) NOT NULL,
  PRIMARY KEY (`PAIS_PK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`PAIS_PK`, `NOMBRE_PAIS`, `POSICION`) VALUES
(1, 'Ecuador', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paso_pedido`
--

CREATE TABLE IF NOT EXISTS `paso_pedido` (
  `PASO_PEDIDOS_PK` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_PASO` varchar(64) NOT NULL,
  `POSICION` int(11) NOT NULL,
  `POR_DEFECTO` tinyint(1) DEFAULT NULL,
  `VISIBLE_WEB` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`PASO_PEDIDOS_PK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `paso_pedido`
--

INSERT INTO `paso_pedido` (`PASO_PEDIDOS_PK`, `NOMBRE_PASO`, `POSICION`, `POR_DEFECTO`, `VISIBLE_WEB`) VALUES
(1, 'Visitas', 1, 0, NULL),
(2, 'Edicion', 10, NULL, NULL),
(3, 'Presentación', 1, NULL, NULL),
(4, 'Reedición', 1, NULL, NULL),
(5, 'Aprobación', 1, 0, 0),
(6, 'Producción', 1, NULL, NULL),
(7, 'Instalación', 1, NULL, NULL),
(8, 'Instalado', 1, NULL, NULL),
(9, 'Facturado', 1, 1, 0),
(11, 'Refacturación', 1, NULL, NULL),
(12, 'Cancelado', 1, NULL, NULL),
(13, 'Pedidos Estandar', 1, 0, 1),
(14, 'Cobro', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `PEDIDO_PK` int(11) NOT NULL AUTO_INCREMENT,
  `COORDINADOR_USUARIO_PK` int(11) NOT NULL,
  `CONTACTO_PK` int(11) DEFAULT NULL,
  `DELEGADO_1_USUARIO_PK` int(11) DEFAULT NULL,
  `DELEGADO_2_USUARIO_PK` int(11) DEFAULT NULL,
  `DELEGADO_3_USUARIO_PK` int(11) DEFAULT NULL,
  `PASO_PEDIDOS_PK` int(11) DEFAULT NULL,
  `ULTIMA_ACTUALIZACION_USUARIO_PK` int(11) NOT NULL,
  `FECHA_REGISTRO` datetime NOT NULL,
  `FECHA_ACTUALIZACION` datetime NOT NULL,
  `CONCEPTO_FACTURA` text,
  `DESCUENTO` decimal(10,0) DEFAULT NULL,
  `APLICA_CONCEPTO_1` tinyint(1) NOT NULL,
  `APLICA_CONCEPTO_2` tinyint(1) NOT NULL,
  `FECHA_APROBACION` date DEFAULT NULL,
  `FECHA_MAXIMA_ENTREGA` date DEFAULT NULL,
  `FINANCIAMIENTO` int(11) DEFAULT NULL,
  `FACTURA_NUM` text,
  `BANCO` varchar(32) DEFAULT NULL,
  `NOTAS` text,
  `NOTAS_CONTROL` text,
  `PASO_1` tinyint(1) DEFAULT NULL,
  `PASO_2` tinyint(1) DEFAULT NULL,
  `PASO_3` tinyint(1) DEFAULT NULL,
  `PASO_4` tinyint(1) DEFAULT NULL,
  `PASO_5` tinyint(1) DEFAULT NULL,
  `PASO_6` tinyint(1) DEFAULT NULL,
  `PASO_7` tinyint(1) DEFAULT NULL,
  `PASO_8` tinyint(1) DEFAULT NULL,
  `PASO_9` tinyint(1) DEFAULT NULL,
  `PASO_10` tinyint(1) DEFAULT NULL,
  `PASO_11` tinyint(1) DEFAULT NULL,
  `PASO_12` tinyint(1) DEFAULT NULL,
  `PASO_13` tinyint(1) DEFAULT NULL,
  `PASO_14` tinyint(1) DEFAULT NULL,
  `PASO_15` tinyint(1) DEFAULT NULL,
  `PASO_16` tinyint(1) DEFAULT NULL,
  `RETENCION_RENTA` decimal(10,0) DEFAULT NULL,
  `RETENCION_IVA` decimal(10,0) DEFAULT NULL,
  `ETAPA` int(11) DEFAULT NULL,
  PRIMARY KEY (`PEDIDO_PK`),
  KEY `FK_REFERENCE_15` (`COORDINADOR_USUARIO_PK`),
  KEY `FK_REFERENCE_17` (`CONTACTO_PK`),
  KEY `FK_REFERENCE_22` (`DELEGADO_1_USUARIO_PK`),
  KEY `FK_REFERENCE_23` (`DELEGADO_2_USUARIO_PK`),
  KEY `FK_REFERENCE_24` (`DELEGADO_3_USUARIO_PK`),
  KEY `FK_REFERENCE_25` (`PASO_PEDIDOS_PK`),
  KEY `FK_REFERENCE_29` (`ULTIMA_ACTUALIZACION_USUARIO_PK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`PEDIDO_PK`, `COORDINADOR_USUARIO_PK`, `CONTACTO_PK`, `DELEGADO_1_USUARIO_PK`, `DELEGADO_2_USUARIO_PK`, `DELEGADO_3_USUARIO_PK`, `PASO_PEDIDOS_PK`, `ULTIMA_ACTUALIZACION_USUARIO_PK`, `FECHA_REGISTRO`, `FECHA_ACTUALIZACION`, `CONCEPTO_FACTURA`, `DESCUENTO`, `APLICA_CONCEPTO_1`, `APLICA_CONCEPTO_2`, `FECHA_APROBACION`, `FECHA_MAXIMA_ENTREGA`, `FINANCIAMIENTO`, `FACTURA_NUM`, `BANCO`, `NOTAS`, `NOTAS_CONTROL`, `PASO_1`, `PASO_2`, `PASO_3`, `PASO_4`, `PASO_5`, `PASO_6`, `PASO_7`, `PASO_8`, `PASO_9`, `PASO_10`, `PASO_11`, `PASO_12`, `PASO_13`, `PASO_14`, `PASO_15`, `PASO_16`, `RETENCION_RENTA`, `RETENCION_IVA`, `ETAPA`) VALUES
(22, 3, 4, 3, 9, 6, 8, 3, '2013-12-14 17:48:00', '2014-03-24 00:14:55', 'Espacios confinado para auditoria mc donals', '0', 0, 0, '2013-12-14', '2014-01-14', 5, '145267', 'PICHINCHA', 'prueba  de la nota', 'Hola loco como te va de nuevo nuevo nuevo 2 3.', 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', '10', 0),
(23, 3, 2, 3, 5, 4, 12, 3, '2013-12-14 19:05:00', '2014-01-14 20:15:07', 'Ninguno', '10', 1, 1, '2013-12-14', '2014-01-14', 3, NULL, NULL, 'Notas pedido 23.', 'sdsfsd fsdsf sdf sdf ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', '10', 0),
(24, 4, 4, 4, 4, 5, 12, 5, '2013-12-22 04:15:00', '2014-01-07 23:13:48', 'Ninguno.', '0', 0, 0, '2013-12-22', '2014-01-22', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0),
(25, 3, 5, 3, 3, 3, 12, 3, '2014-01-03 00:09:00', '2014-01-03 00:09:00', 'Ninguno', '0', 0, 1, '2014-01-03', '2014-02-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(26, 5, 2, 5, 5, 5, 12, 6, '2014-01-07 21:46:00', '2014-01-10 22:27:11', 'Ninguno.', '0', 1, 1, '2014-02-07', '2014-03-07', 5, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, '0', '0', 0),
(27, 3, 2, 3, 3, 3, 12, 3, '2014-01-07 21:48:00', '2014-01-07 21:48:00', 'Ninguno.', '0', 0, 1, '2014-01-07', '2014-02-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(28, 3, 2, 3, 3, 3, 12, 3, '2014-01-08 17:48:00', '2014-01-08 17:48:00', 'Nonen.', '0', 0, 0, '2014-01-08', '2014-02-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(29, 3, 3, 5, 5, 5, 12, 3, '2014-01-09 19:20:00', '2014-01-09 19:20:00', NULL, '10', 1, 1, '2014-01-09', '2014-02-09', 5, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, '10', '100', 0),
(30, 6, 2, 6, 6, 6, 12, 3, '2014-01-10 00:18:00', '2014-01-10 22:37:16', 'Para auditoria Mac donals noviembre', '5', 1, 0, '2014-01-10', '2014-02-10', 2, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(31, 6, 3, 6, 6, 6, 6, 6, '2014-01-10 19:55:00', '2014-01-10 19:55:00', 'Rutas de evacuacion.', '0', 0, 0, '2014-01-10', '2014-02-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(32, 6, 4, 6, 6, 6, 6, 6, '2014-01-10 21:51:00', '2014-01-10 21:51:00', 'Espacios confinados', '0', 0, 0, '2014-01-10', '2014-02-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(33, 6, 2, 5, 6, 6, 3, 3, '2014-01-10 22:00:00', '2014-01-14 20:29:30', 'Auditoria iess', '0', 0, 0, '2014-01-10', '2014-02-10', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(34, 3, 2, 3, 5, 4, 6, 3, '2013-12-14 19:05:00', '2014-01-14 20:21:11', 'Ninguno', '10', 1, 1, '2013-12-14', '2014-01-14', 3, NULL, NULL, 'Notas pedido 23.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', '10', 0),
(35, 3, 2, 3, 5, 4, 6, 3, '2013-12-14 19:05:00', '2014-01-06 20:37:45', 'Ninguno', '10', 1, 1, '2013-12-14', '2014-01-14', 3, NULL, NULL, 'Notas pedido 23.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', '10', 0),
(36, 3, 2, 3, 5, 4, 6, 3, '2013-12-14 19:05:00', '2014-01-06 20:37:45', 'Ninguno', '10', 1, 1, '2013-12-14', '2014-01-14', 3, NULL, NULL, 'Notas pedido 23.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', '10', 0),
(37, 6, 2, 5, 6, 6, 3, 3, '2014-01-10 22:00:00', '2014-01-14 20:23:05', 'Auditoria iess', '0', 0, 1, '2014-01-10', '2014-02-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(38, 4, 4, 4, 4, 5, 7, 5, '2013-12-22 04:15:00', '2014-01-07 23:13:48', 'Ninguno.', '0', 0, 0, '2013-12-22', '2014-01-22', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(39, 3, 4, 7, 7, 7, 13, 6, '2013-12-14 17:48:00', '2014-01-21 07:58:34', 'Otro', '0', 0, 1, '2013-12-14', '2014-01-14', 5, '145267', NULL, 'Notas pedido 22.', NULL, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', '10', 0),
(40, 3, 4, 7, 7, 7, 13, 6, '2013-12-14 17:48:00', '2014-01-21 07:58:34', 'Otro', '0', 0, 1, '2013-12-14', '2014-01-14', 5, '145267', NULL, 'Notas pedido 22.', NULL, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', '10', 0),
(41, 6, 4, 6, 6, 6, 6, 3, '2014-01-21 08:18:00', '2014-02-03 04:28:07', 'Espacios confinados PRY', '0', 0, 0, '2014-01-21', '2014-02-21', 3, NULL, NULL, 'Responsabilidad. Una vez entregado RECUR, no se responsabiliza por el daño, o perdida.', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, 2),
(42, 3, 4, 7, 7, 7, 13, 6, '2013-12-14 17:48:00', '2014-01-21 07:58:34', 'Otro', '0', 0, 1, '2013-12-14', '2014-01-14', 5, '145267', NULL, 'Notas pedido 22.', NULL, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', '10', 0),
(43, 3, 4, 7, 7, 7, 13, 6, '2013-12-14 17:48:00', '2014-01-21 07:58:34', 'Otro', '0', 0, 1, '2013-12-14', '2014-01-14', 5, '145267', NULL, 'Notas pedido 22.', NULL, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', '10', 0),
(44, 3, 4, 7, 7, 7, 13, 6, '2013-12-14 17:48:00', '2014-01-21 07:58:34', 'Otro', '0', 0, 1, '2013-12-14', '2014-01-14', 5, '145267', NULL, 'Notas pedido 22.', NULL, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', '10', 0),
(45, 6, 4, 6, 6, 6, 6, 6, '2014-01-21 08:18:00', '2014-01-21 08:18:00', 'Espacios confinados PRY', '0', 0, 0, '2014-01-21', '2014-02-21', 3, NULL, NULL, 'Responsabilidad. Una vez entregado RECUR, no se responsabiliza por el daño, o perdida.', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL),
(46, 6, 4, 6, 6, 6, 6, 6, '2014-01-21 08:18:00', '2014-01-21 12:08:26', 'Espacios confinados PRY', '5', 1, 0, '2014-01-21', '2014-02-21', 3, NULL, NULL, 'Responsabilidad. Una vez entregado RECUR, no se responsabiliza por el daño, o perdida.', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(47, 6, 4, 6, 6, 6, 6, 6, '2014-01-21 08:18:00', '2014-01-21 08:18:00', 'Espacios confinados PRY', '0', 0, 0, '2014-01-21', '2014-02-21', 3, NULL, NULL, 'Responsabilidad. Una vez entregado RECUR, no se responsabiliza por el daño, o perdida.', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(48, 6, 4, 6, 6, 6, 9, 6, '2014-01-21 08:18:00', '2014-01-21 08:18:00', 'Espacios confinados PRY', '0', 0, 0, '2014-01-21', '2014-02-21', 3, NULL, NULL, 'Responsabilidad. Una vez entregado RECUR, no se responsabiliza por el daño, o perdida.', 'hola 23.', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL),
(49, 6, 3, 6, 6, 6, NULL, 6, '2014-01-21 08:53:00', '2014-01-21 08:53:00', 'camara temperada', '0', 0, 0, '2014-01-21', '2014-02-21', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 6, 3, 6, 6, 6, 12, 6, '2014-01-21 08:53:00', '2014-01-21 08:53:00', 'camara temperada', '0', 0, 0, '2014-01-21', '2014-02-21', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL),
(51, 6, 4, 6, 6, 6, 6, 6, '2014-01-21 08:18:00', '2014-01-21 08:18:00', 'Espacios confinados PRY', '0', 0, 0, '2014-01-21', '2014-02-21', 3, NULL, NULL, 'Responsabilidad. Una vez entregado RECUR, no se responsabiliza por el daño, o perdida.', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(52, 3, 2, 3, 5, 4, 12, 3, '2013-12-14 19:05:00', '2014-01-14 20:15:07', 'Ninguno', '10', 1, 1, '2013-12-14', '2014-01-14', 3, NULL, NULL, 'Notas pedido 23.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', '10', 0),
(53, 5, 4, 5, 5, 5, NULL, 5, '2014-01-21 13:48:00', '2014-01-21 13:48:00', 'garitas de seguridad', '0', 0, 0, '2014-01-21', '2014-02-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 4, 3, 4, 4, 4, NULL, 4, '2014-01-21 15:32:00', '2014-01-21 15:32:00', 'Auditoria', '0', 0, 0, '2014-01-21', '2014-02-21', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 5, 3, 5, 5, 5, 8, 5, '2014-01-21 15:32:00', '2014-01-21 15:41:32', 'auditoria iess', '0', 0, 0, '2014-01-21', '2014-02-21', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 8, 4, 8, 8, 8, NULL, 8, '2014-01-21 15:40:00', '2014-01-21 15:40:00', 'AUDITORIA', '0', 0, 0, '2014-01-21', '2014-02-21', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 8, 4, 8, 8, 8, NULL, 6, '2014-01-21 15:40:00', '2014-01-22 07:38:57', 'FALTA INSTALAR UN CARTEL', '0', 0, 0, '2014-01-21', '2014-02-21', NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(58, 6, 4, 6, 6, 6, NULL, 6, '2014-01-21 16:10:00', '2014-01-21 16:20:56', 'iess', '5', 1, 1, '2014-01-21', '2014-02-21', 2, NULL, NULL, 'afagaggaa', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 3, 4, 4, 4, 3, 6, 6, '2013-12-14 17:48:00', '2014-01-21 14:11:58', 'Espacios confinado para auditoria mc donals', '0', 0, 0, '2013-12-14', '2014-01-14', 5, '145267', 'PICHINCHA', 'prueba  de la nota', NULL, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', '10', 0),
(60, 3, 4, 4, 4, 3, 6, 6, '2013-12-14 17:48:00', '2014-01-21 14:11:58', 'Espacios confinado para auditoria mc donals', '0', 0, 0, '2013-12-14', '2014-01-14', 5, '145267', 'PICHINCHA', 'prueba  de la nota', NULL, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', '10', 0),
(61, 6, 2, 6, 6, 6, 12, 3, '2014-01-10 00:18:00', '2014-01-10 22:37:16', 'Para auditoria Mac donals noviembre', '5', 1, 0, '2014-01-10', '2014-02-10', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(62, 6, 4, 6, 6, 6, 6, 6, '2014-01-22 07:09:00', '2014-01-22 07:09:00', 'IESS AUDITORIA', '5', 1, 1, '2014-01-22', '2014-02-22', 2, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL),
(63, 5, 3, 5, 5, 5, NULL, 5, '2014-01-21 15:32:00', '2014-01-21 15:41:32', 'auditoria iess', '0', 0, 0, '2014-01-21', '2014-02-21', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 3, 4, 4, 5, 3, 6, 6, '2013-12-14 17:48:00', '2014-01-21 14:11:58', 'Espacios confinado para auditoria mc donals', '0', 0, 0, '2013-12-14', '2014-01-14', 5, '145267', 'PICHINCHA', 'prueba  de la nota', NULL, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', '10', 0),
(65, 6, 3, 6, 6, 6, 6, 6, '2014-01-10 19:55:00', '2014-01-10 19:55:00', 'Rutas de evacuacion.', '0', 0, 0, '2014-01-10', '2014-02-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(66, 6, 5, 6, 6, 6, 12, 6, '2014-01-22 11:09:00', '2014-01-22 11:09:00', 'iess', '0', 0, 1, '2014-01-22', '2014-02-22', NULL, NULL, NULL, NULL, NULL, 1, 1, 0, 1, 1, 0, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL),
(67, 6, 5, 6, 6, 6, 12, 6, '2014-01-22 11:09:00', '2014-01-22 11:09:00', 'iess', '0', 0, 1, '2014-01-22', '2014-02-22', NULL, NULL, NULL, NULL, NULL, 1, 1, 0, 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL),
(68, 6, 4, 6, 6, 6, NULL, 6, '2014-01-22 13:25:00', '2014-01-22 13:25:00', 'IESS', '0', 0, 0, '2014-01-22', '2014-02-22', 2, NULL, NULL, NULL, NULL, 1, 1, NULL, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 3, 4, 3, 3, 3, NULL, 3, '2014-02-03 04:29:00', '2014-02-03 04:29:00', 'None', '0', 0, 0, '2014-02-03', '2014-03-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(70, 3, 4, 3, 3, 3, NULL, 3, '2014-02-03 04:33:00', '2014-02-03 04:34:31', 'None', '0', 0, 0, '2014-02-03', '2014-03-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(71, 5, 2, 5, 5, 5, NULL, 6, '2014-01-07 21:46:00', '2014-01-10 22:27:11', 'Ninguno.', '0', 1, 1, '2014-02-07', '2014-03-07', 5, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0', 0),
(72, 3, 2, 3, 3, 3, NULL, 3, '2014-02-03 04:44:57', '2014-02-03 04:44:57', 'Ninguno.', '0', 1, 1, '2014-02-03', '2014-03-03', 5, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0', 0),
(73, 3, 4, 3, 3, 3, NULL, 3, '2014-02-03 04:48:00', '2014-02-03 04:48:00', 'note', '0', 0, 0, '2014-02-03', '2014-03-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(74, 3, 4, 3, 3, 5, NULL, 3, '2014-02-03 21:56:00', '2014-02-03 22:00:16', 'sd', '0', 0, 0, '2014-02-03', '2014-03-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(75, 3, 4, 3, 3, 3, NULL, 3, '2014-03-22 21:06:00', '2014-03-24 23:46:55', 'Espacios confinado para auditoria mc donals', '0', 0, 0, '2014-03-22', '2014-04-22', 5, '145267', 'PICHINCHA', 'prueba  de la nota', 'Hola loco como te va de nuevo nuevo nuevo 2 3.', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '10', '10', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_producto`
--

CREATE TABLE IF NOT EXISTS `pedido_producto` (
  `PEDIDO_PRODUCTO_PK` int(11) NOT NULL AUTO_INCREMENT,
  `PEDIDO_PK` int(11) NOT NULL,
  `PRODUCTO_PK` int(11) NOT NULL,
  `MEDIDA_PK` int(11) DEFAULT NULL,
  `TIPO_CALIDAD_PK` int(11) DEFAULT NULL,
  `NOMBRE_PRODUCTO` varchar(64) DEFAULT NULL,
  `CANTIDAD` int(11) NOT NULL,
  `ALTO` decimal(10,0) DEFAULT NULL,
  `ANCHO` decimal(10,0) DEFAULT NULL,
  `CORTESIA` tinyint(1) DEFAULT NULL,
  `PRECIO_VENTA` decimal(10,2) NOT NULL,
  `NOTAS_CONTROL_PP` text,
  `PASO_1` tinyint(1) DEFAULT NULL,
  `PASO_2` tinyint(1) DEFAULT NULL,
  `PASO_3` tinyint(1) DEFAULT NULL,
  `PASO_4` tinyint(1) DEFAULT NULL,
  `PASO_5` tinyint(1) DEFAULT NULL,
  `PASO_6` tinyint(1) DEFAULT NULL,
  `PASO_7` tinyint(1) DEFAULT NULL,
  `PASO_8` tinyint(1) DEFAULT NULL,
  `PASO_9` tinyint(1) DEFAULT NULL,
  `PASO_10` tinyint(1) DEFAULT NULL,
  `PASO_11` tinyint(1) DEFAULT NULL,
  `PASO_12` tinyint(1) DEFAULT NULL,
  `PASO_13` tinyint(1) DEFAULT NULL,
  `PASO_14` tinyint(1) DEFAULT NULL,
  `PASO_15` tinyint(1) DEFAULT NULL,
  `PASO_16` tinyint(1) DEFAULT NULL,
  `POSICION` int(11) NOT NULL,
  PRIMARY KEY (`PEDIDO_PRODUCTO_PK`),
  KEY `FK_REFERENCE_18` (`PEDIDO_PK`),
  KEY `FK_REFERENCE_19` (`PRODUCTO_PK`),
  KEY `FK_REFERENCE_20` (`MEDIDA_PK`),
  KEY `FK_REFERENCE_21` (`TIPO_CALIDAD_PK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=241 ;

--
-- Volcado de datos para la tabla `pedido_producto`
--

INSERT INTO `pedido_producto` (`PEDIDO_PRODUCTO_PK`, `PEDIDO_PK`, `PRODUCTO_PK`, `MEDIDA_PK`, `TIPO_CALIDAD_PK`, `NOMBRE_PRODUCTO`, `CANTIDAD`, `ALTO`, `ANCHO`, `CORTESIA`, `PRECIO_VENTA`, `NOTAS_CONTROL_PP`, `PASO_1`, `PASO_2`, `PASO_3`, `PASO_4`, `PASO_5`, `PASO_6`, `PASO_7`, `PASO_8`, `PASO_9`, `PASO_10`, `PASO_11`, `PASO_12`, `PASO_13`, `PASO_14`, `PASO_15`, `PASO_16`, `POSICION`) VALUES
(24, 22, 18, 25, 1, 'GUARDIANIA', 5, '12', '1', 0, '0.24', NULL, 1, 1, 1, 1, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(26, 22, 18, 25, 1, 'GUARDIANIA', 10, '12', '1', 0, '0.24', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(28, 22, 18, 25, 1, 'GUARDIANIA', 5, '12', '1', 0, '0.24', NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(31, 22, 20, 1, 1, 'Nueva3', 1, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(32, 22, 21, 1, 1, 'Ninguna', 12, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(33, 22, 22, 1, 1, 'zasdas', 2, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(34, 22, 23, 1, 1, 'Producto 5', 15, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(35, 22, 24, 1, 1, 'Prod 10', 12, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(36, 22, 25, 1, 1, 'Prdo 100', 18, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(38, 24, 24, 1, 1, 'Prod 10', 18, '2', '2', 0, '0.40', NULL, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(39, 25, 18, 1, 1, 'Nueva1', 18, '2', '2', 0, '0.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(40, 25, 24, 1, 1, 'Prod 10', 18, '2', '2', 0, '0.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(41, 25, 20, NULL, 2, 'Nueva3', 19, '9', '5', 1, '3.60', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(42, 26, 23, NULL, 1, 'Producto 5', 22, '9', '8', 0, '7.20', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, 1),
(43, 27, 18, 1, 1, 'Nueva1', 18, '2', '2', 0, '0.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(44, 27, 24, 1, 1, 'Prod 10', 85, '2', '2', 1, '0.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(45, 24, 20, 1, 1, 'Nueva3', 51, '2', '2', 0, '0.40', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, NULL, 1),
(46, 28, 25, 1, 1, 'Prdo 100', 100, '2', '2', 0, '0.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(47, 29, 18, NULL, 2, 'Nueva1', 2, '3', '2', 0, '0.48', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL, 1),
(48, 29, 23, 1, 1, 'Producto 5', 1, '2', '2', 0, '0.40', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1),
(49, 29, 24, 1, 1, 'Prod 10', 1, '2', '2', 1, '0.40', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1),
(50, 30, 18, 7, 1, 'Guardianía', 100, '23', '23', 0, '10.58', NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(52, 30, 20, 7, 1, 'Visitante identifiquese', 20, '23', '23', 0, '15.87', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(53, 30, 18, 8, 1, 'Guardianía 1234', 4, '30', '30', 0, '27.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(54, 30, 20, NULL, 1, 'Visitante retire su credencial', 20, '50', '50', 0, '75.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(55, 33, 20, 1, 1, 'VISITANTE IDENTIFIQUESE', 1, '10', '10', 0, '2.00', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, 1),
(56, 33, 18, 1, 1, 'Seguimiento', 300, '10', '10', 0, '2.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(57, 33, 20, 1, 1, 'VISITANTE IDENTIFIQUESE', 20, '10', '10', 0, '2.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(58, 33, 25, 1, 1, 'Prdo 100', 400, '10', '10', 0, '2.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(62, 23, 20, 5, 1, 'VISITANTE IDENTIFIQUESE', 18, '16', '16', 0, '5.12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(63, 36, 20, NULL, 1, 'Nueva3', 18, '5', '6', 0, '3.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(64, 37, 20, 1, 1, 'VISITANTE IDENTIFIQUESE', 1, '10', '10', 0, '2.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(65, 37, 18, 1, 1, 'Seguimiento', 300, '10', '10', 0, '2.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(66, 37, 20, 1, 1, 'VISITANTE IDENTIFIQUESE', 20, '10', '10', 0, '2.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(67, 37, 25, 1, 1, 'Prdo 100', 400, '10', '10', 0, '2.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(68, 37, 21, 1, 1, 'SOLO PERSONAL AUTORIZADO', 500, '10', '10', 0, '2.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(69, 37, 24, 1, 1, 'Solo personal autorizado', 600, '10', '10', 0, '2.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(70, 37, 23, 1, 1, 'NO INGERIR ALIMENTOS', 800, '10', '10', 0, '2.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(71, 37, 18, 7, 1, 'GUARDIANIA', 12, '23', '23', 1, '10.58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(72, 38, 24, 1, 1, 'Prod 10', 18, '2', '2', 0, '0.40', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, 1),
(73, 38, 20, 1, 1, 'Nueva3', 51, '2', '2', 0, '0.40', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(74, 39, 18, 1, 1, 'Nueva1', 5, '2', '2', 0, '0.20', NULL, 1, 1, 1, 1, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(75, 39, 23, 1, 1, 'Producto 5', 5, '2', '2', 1, '0.20', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(76, 39, 18, 1, 1, 'Nueva1', 10, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(77, 39, 18, 1, 2, 'Nueva1', 10, '2', '2', 1, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(78, 39, 18, 1, 1, 'Nueva1', 5, '2', '2', 0, '0.40', NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(79, 39, 18, 1, 1, 'Nueva1', 5, '2', '2', 1, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(80, 39, 20, 1, 1, 'Nueva3', 1, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(81, 39, 21, 1, 1, 'Ninguna', 12, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(82, 39, 22, 1, 1, 'zasdas', 2, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(83, 39, 23, 1, 1, 'Producto 5', 15, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(84, 39, 24, 1, 1, 'Prod 10', 12, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(85, 39, 25, 1, 1, 'Prdo 100', 18, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(86, 39, 25, 1, 1, 'Prdo 100', 1000, '2', '2', 1, '0.40', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(87, 40, 18, 1, 1, 'Nueva1', 5, '2', '2', 0, '0.20', NULL, 1, 1, 1, 1, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(88, 40, 23, 1, 1, 'Producto 5', 5, '2', '2', 1, '0.20', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(89, 40, 18, 1, 1, 'Nueva1', 10, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(90, 40, 18, 1, 2, 'Nueva1', 10, '2', '2', 1, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(91, 40, 18, 1, 1, 'Nueva1', 5, '2', '2', 0, '0.40', NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(92, 40, 18, 1, 1, 'Nueva1', 5, '2', '2', 1, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(93, 40, 20, 1, 1, 'Nueva3', 1, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(94, 40, 21, 1, 1, 'Ninguna', 12, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(95, 40, 22, 1, 1, 'zasdas', 2, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(96, 40, 23, 1, 1, 'Producto 5', 15, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(97, 40, 24, 1, 1, 'Prod 10', 12, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(98, 40, 25, 1, 1, 'Prdo 100', 18, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(99, 40, 25, 1, 1, 'Prdo 100', 1000, '2', '2', 1, '0.40', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(100, 41, 20, 8, 1, 'VISITANTE IDENTIFIQUESE', 10, '30', '30', 0, '18.00', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, 1),
(101, 41, 21, 8, 11, 'SOLO PERSONAL AUTORIZADO', 10, '30', '30', 0, '45.00', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(102, 41, 20, 8, 11, 'VISITANTE IDENTIFIQUESE', 10, '30', '30', 0, '45.00', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, 1),
(103, 42, 18, 1, 1, 'Nueva1', 5, '2', '2', 0, '0.20', NULL, 1, 1, 1, 1, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(104, 42, 23, 1, 1, 'Producto 5', 5, '2', '2', 1, '0.20', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(105, 42, 18, 1, 1, 'Nueva1', 10, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(106, 42, 18, 1, 2, 'Nueva1', 10, '2', '2', 1, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(107, 42, 18, 1, 1, 'Nueva1', 5, '2', '2', 0, '0.40', NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(108, 42, 18, 1, 1, 'Nueva1', 5, '2', '2', 1, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(109, 42, 20, 1, 1, 'Nueva3', 1, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(110, 42, 21, 1, 1, 'Ninguna', 12, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(111, 42, 22, 1, 1, 'zasdas', 2, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(112, 42, 23, 1, 1, 'Producto 5', 15, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(113, 42, 24, 1, 1, 'Prod 10', 12, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(114, 42, 25, 1, 1, 'Prdo 100', 18, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(115, 42, 25, 1, 1, 'Prdo 100', 1000, '2', '2', 1, '0.40', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(116, 43, 18, 1, 1, 'Nueva1', 5, '2', '2', 0, '0.20', NULL, 1, 1, 1, 1, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(117, 43, 23, 1, 1, 'Producto 5', 5, '2', '2', 1, '0.20', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(118, 43, 18, 1, 1, 'Nueva1', 10, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(119, 43, 18, 1, 2, 'Nueva1', 10, '2', '2', 1, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(120, 43, 18, 1, 1, 'Nueva1', 5, '2', '2', 0, '0.40', NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(121, 43, 18, 1, 1, 'Nueva1', 5, '2', '2', 1, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(122, 43, 20, 1, 1, 'Nueva3', 1, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(123, 43, 21, 1, 1, 'Ninguna', 12, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(124, 43, 22, 1, 1, 'zasdas', 2, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(125, 43, 23, 1, 1, 'Producto 5', 15, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(126, 43, 24, 1, 1, 'Prod 10', 12, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(127, 43, 25, 1, 1, 'Prdo 100', 18, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(128, 43, 25, 1, 1, 'Prdo 100', 1000, '2', '2', 1, '0.40', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(129, 44, 18, 1, 1, 'Nueva1', 5, '2', '2', 0, '0.20', NULL, 1, 1, 1, 1, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(130, 44, 23, 1, 1, 'Producto 5', 5, '2', '2', 1, '0.20', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(131, 44, 18, 1, 1, 'Nueva1', 10, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(132, 44, 18, 1, 2, 'Nueva1', 10, '2', '2', 1, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(133, 44, 18, 1, 1, 'Nueva1', 5, '2', '2', 0, '0.40', NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(134, 44, 18, 1, 1, 'Nueva1', 5, '2', '2', 1, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(135, 44, 20, 1, 1, 'Nueva3', 1, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(136, 44, 21, 1, 1, 'Ninguna', 12, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(137, 44, 22, 1, 1, 'zasdas', 2, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(138, 44, 23, 1, 1, 'Producto 5', 15, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(139, 44, 24, 1, 1, 'Prod 10', 12, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(140, 44, 25, 1, 1, 'Prdo 100', 18, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(141, 44, 25, 1, 1, 'Prdo 100', 1000, '2', '2', 1, '0.40', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(142, 45, 20, 8, 1, 'VISITANTE IDENTIFIQUESE', 10, '30', '30', 0, '18.00', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(143, 45, 21, 8, 1, 'SOLO PERSONAL AUTORIZADO', 10, '30', '30', 0, '18.00', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(144, 45, 20, 8, 1, 'VISITANTE IDENTIFIQUESE', 10, '30', '30', 0, '5.12', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(145, 46, 20, 8, 1, 'VISITANTE IDENTIFIQUESE', 10, '30', '30', 0, '18.00', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, 1),
(146, 46, 21, 8, 1, 'SOLO PERSONAL AUTORIZADO', 10, '30', '30', 0, '18.00', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(147, 46, 20, 8, 1, 'VISITANTE IDENTIFIQUESE', 10, '30', '30', 0, '5.12', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, 1),
(148, 47, 20, 8, 1, 'VISITANTE IDENTIFIQUESE', 10, '30', '30', 0, '18.00', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(149, 47, 21, 8, 1, 'SOLO PERSONAL AUTORIZADO', 10, '30', '30', 0, '18.00', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, 1),
(150, 47, 20, 8, 1, 'VISITANTE IDENTIFIQUESE', 10, '30', '30', 0, '5.12', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(151, 48, 20, 8, 1, 'VISITANTE IDENTIFIQUESE', 10, '30', '30', 0, '18.00', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(152, 48, 21, 8, 1, 'SOLO PERSONAL AUTORIZADO', 10, '30', '30', 0, '18.00', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(153, 48, 20, 8, 1, 'VISITANTE IDENTIFIQUESE', 10, '30', '30', 0, '5.12', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(154, 49, 20, 8, 1, 'VISITANTE IDENTIFIQUESE', 30, '30', '30', 0, '18.00', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, 1),
(155, 50, 20, 8, 1, 'VISITANTE IDENTIFIQUESE', 30, '30', '30', 0, '18.00', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(156, 51, 20, 8, 1, 'VISITANTE IDENTIFIQUESE', 10, '30', '30', 0, '18.00', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, 1),
(157, 51, 21, 8, 1, 'SOLO PERSONAL AUTORIZADO', 10, '30', '30', 0, '18.00', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(158, 51, 20, 8, 1, 'VISITANTE IDENTIFIQUESE', 10, '30', '30', 0, '5.12', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, 1),
(159, 52, 20, 5, 1, 'VISITANTE IDENTIFIQUESE', 18, '16', '16', 0, '5.12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(160, 53, 34, 8, 1, 'NO ARMAS BLANCAS', 100, '30', '30', 0, '18.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(161, 54, 20, 8, 1, 'VISITANTE IDENTIFIQUESE', 30, '30', '30', 0, '18.00', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, 1),
(162, 54, 21, 5, 1, 'SOLO PERSONAL AUTORIZADO', 2, '16', '16', 0, '5.12', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(163, 54, 34, 7, 32, 'NO ARMAS BLANCAS', 10, '23', '23', 0, '5.29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(164, 55, 20, 8, 1, 'VISITANTE IDENTIFIQUESE', 30, '30', '30', 0, '18.00', NULL, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(165, 55, 21, 5, 1, 'SOLO PERSONAL AUTORIZADO', 2, '16', '16', 0, '5.12', NULL, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(166, 55, 34, 7, 32, 'NO ARMAS BLANCAS', 10, '23', '23', 0, '5.29', NULL, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(167, 56, 20, 8, 1, 'VISITANTE IDENTIFIQUESE', 30, '30', '30', 0, '18.00', NULL, 1, 1, 1, 1, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(168, 56, 34, 7, 32, 'NO ARMAS BLANCAS', 10, '23', '23', 0, '18.00', NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(169, 56, 21, 5, 1, 'SOLO PERSONAL AUTORIZADO', 2, '16', '16', 0, '5.12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(170, 57, 20, 8, 1, 'VISITANTE IDENTIFIQUESE', 30, '30', '30', 0, '18.00', NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(171, 57, 34, 7, 32, 'NO ARMAS BLANCAS', 10, '23', '23', 0, '18.00', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(172, 57, 21, 5, 1, 'SOLO PERSONAL AUTORIZADO', 2, '16', '16', 0, '5.12', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1),
(173, 58, 20, 8, 1, 'VISITANTE IDENTIFIQUESE', 30, '30', '30', 0, '18.00', NULL, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(174, 58, 21, 8, 1, 'SOLO PERSONAL AUTORIZADO', 10, '30', '30', 0, '18.00', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(175, 58, 34, 8, 1, 'NO ARMAS BLANCAS', 20, '30', '30', 0, '18.00', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(176, 58, 20, 5, 32, 'VISITANTE IDENTIFIQUESE', 1, '16', '16', 1, '2.56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(177, 59, 18, 1, 1, 'Nueva1', 5, '2', '2', 0, '0.20', NULL, 1, 1, 1, 1, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(178, 59, 18, 1, 1, 'Nueva1', 10, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(179, 59, 18, 1, 1, 'Nueva1', 5, '2', '2', 0, '0.40', NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(180, 59, 20, 1, 1, 'Nueva3', 1, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(181, 59, 21, 1, 1, 'Ninguna', 12, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(182, 59, 22, 1, 1, 'zasdas', 2, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(183, 59, 23, 1, 1, 'Producto 5', 15, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(184, 59, 24, 1, 1, 'Prod 10', 12, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(185, 59, 25, 1, 1, 'Prdo 100', 18, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(186, 60, 18, 1, 1, 'Nueva1', 5, '2', '2', 0, '0.20', NULL, 1, 1, 1, 1, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(187, 60, 18, 1, 1, 'Nueva1', 10, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(188, 60, 18, 1, 1, 'Nueva1', 5, '2', '2', 0, '0.40', NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(189, 60, 20, 1, 1, 'Nueva3', 1, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(190, 60, 21, 1, 1, 'Ninguna', 12, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(191, 60, 22, 1, 1, 'zasdas', 2, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(192, 60, 23, 1, 1, 'Producto 5', 15, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(193, 60, 24, 1, 1, 'Prod 10', 12, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(194, 60, 25, 1, 1, 'Prdo 100', 18, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(195, 61, 18, 7, 1, 'Guardianía', 100, '23', '23', 0, '10.58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(196, 61, 20, 7, 1, 'Visitante identifiquese', 20, '23', '23', 0, '15.87', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(197, 61, 18, 8, 1, 'Guardianía 1234', 4, '30', '30', 0, '27.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(198, 61, 20, NULL, 1, 'Visitante retire su credencial', 20, '50', '50', 0, '75.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(199, 62, 20, 8, 1, 'VISITANTE IDENTIFIQUESE', 30, '30', '30', 0, '18.00', NULL, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(200, 62, 34, 7, 32, 'NO ARMAS BLANCAS', 10, '23', '23', 0, '5.29', NULL, 1, 1, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(201, 62, 21, 5, 1, 'SOLO PERSONAL AUTORIZADO', 2, '16', '16', 0, '5.12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(202, 62, 20, 5, 1, 'VISITANTE IDENTIFIQUESE', 1, '16', '16', 1, '5.12', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(203, 63, 20, 8, 1, 'VISITANTE IDENTIFIQUESE', 30, '30', '30', 0, '18.00', NULL, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(204, 63, 21, 5, 1, 'SOLO PERSONAL AUTORIZADO', 2, '16', '16', 0, '5.12', NULL, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(205, 63, 34, 7, 32, 'NO ARMAS BLANCAS', 10, '23', '23', 0, '5.29', NULL, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(206, 64, 18, 1, 1, 'Nueva1', 5, '2', '2', 0, '0.20', NULL, 1, 1, 1, 1, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(207, 64, 18, 1, 1, 'Nueva1', 10, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(208, 64, 18, 1, 1, 'Nueva1', 5, '2', '2', 0, '0.40', NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(209, 64, 20, 1, 1, 'Nueva3', 1, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(210, 64, 21, 1, 1, 'Ninguna', 12, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(211, 64, 22, 1, 1, 'zasdas', 2, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(212, 64, 23, 1, 1, 'Producto 5', 15, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(213, 64, 24, 1, 1, 'Prod 10', 12, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(214, 64, 25, 1, 1, 'Prdo 100', 18, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(215, 66, 20, 8, 32, 'VISITANTE IDENTIFIQUESE', 30, '30', '30', 0, '9.00', NULL, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, NULL, 0, 0, NULL, NULL, NULL, 1),
(216, 66, 21, 5, 32, 'SOLO PERSONAL AUTORIZADO', 1, '16', '16', 1, '2.56', NULL, 1, 1, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1),
(217, 67, 20, 8, 32, 'VISITANTE IDENTIFIQUESE', 30, '30', '30', 0, '9.00', NULL, 1, 1, 0, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(218, 67, 21, 5, 32, 'SOLO PERSONAL AUTORIZADO', 1, '16', '16', 1, '2.56', NULL, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, 1),
(219, 68, 20, 8, 1, 'VISITANTE IDENTIFIQUESE', 10, '30', '30', 0, '18.00', NULL, 1, 1, NULL, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(220, 68, 21, 8, 1, 'SOLO PERSONAL AUTORIZADO', 50, '30', '30', 0, '18.00', '', 1, 1, NULL, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(221, 69, 21, 5, 1, 'SOLO PERSONAL AUTORIZADO', 10, '16', '16', 0, '5.12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(222, 69, 24, 1, 1, 'Solo personal autorizado', 18, '10', '10', 0, '2.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(223, 70, 18, 5, 1, 'GUARDIANIA', 18, '16', '16', 0, '5.12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(224, 71, 23, NULL, 1, 'Producto 5', 22, '9', '8', 0, '7.20', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, 1),
(225, 72, 23, NULL, 1, 'Producto 5', 22, '9', '8', 0, '7.20', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, 1),
(226, 73, 20, 5, 1, 'VISITANTE IDENTIFIQUESE', 18, '16', '16', 0, '5.12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(227, 74, 21, 25, 1, 'SOLO PERSONAL AUTORIZADO', 18, '12', '1', 0, '0.24', 'sa as sd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(228, 74, 21, 5, 1, 'SOLO PERSONAL AUTORIZADO', 18, '16', '16', 0, '5.12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(229, 75, 18, 25, 1, 'GUARDIANIA', 5, '12', '1', 0, '0.24', NULL, 1, 1, 1, 1, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4),
(230, 75, 18, 1, 1, 'Nueva1', 10, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(231, 75, 18, 1, 1, 'Nueva1', 5, '2', '2', 0, '0.40', NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(232, 75, 20, 1, 1, 'Nueva3', 1, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(233, 75, 23, 25, 1, 'NO INGERIR ALIMENTOS', 12, '12', '1', 0, '0.24', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(234, 75, 22, 1, 1, 'zasdas', 2, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(235, 75, 23, 1, 1, 'Producto 5', 15, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(236, 75, 24, 1, 1, 'Prod 10', 12, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(237, 75, 25, 1, 1, 'Prdo 100', 18, '2', '2', 0, '0.40', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(238, 75, 21, 25, 21, 'SOLO PERSONAL AUTORIZADO', 18, '12', '1', 0, '0.12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 17),
(240, 75, 22, 8, 19, 'PROHIBIDO FUMAR', 11, '30', '30', 0, '18.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `PRODUCTO_PK` int(11) NOT NULL AUTO_INCREMENT,
  `FIGURA_PK` int(11) DEFAULT NULL,
  `CATEGORIA_PK` int(11) DEFAULT NULL,
  `NOMBRE_IMAGEN` varchar(64) NOT NULL,
  `IMAGEN_EXTENSION` varchar(256) DEFAULT NULL,
  `FECHA_MODIFICACION` datetime NOT NULL,
  `POSICION` int(11) NOT NULL,
  PRIMARY KEY (`PRODUCTO_PK`),
  KEY `FK_REFERENCE_8` (`FIGURA_PK`),
  KEY `FK_REFERENCE_9` (`CATEGORIA_PK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`PRODUCTO_PK`, `FIGURA_PK`, `CATEGORIA_PK`, `NOMBRE_IMAGEN`, `IMAGEN_EXTENSION`, `FECHA_MODIFICACION`, `POSICION`) VALUES
(18, 1, 1, 'GUARDIANIA', 'png', '2014-01-10 22:31:16', 1),
(20, 1, 1, 'VISITANTE IDENTIFIQUESE', 'jpeg', '2014-03-24 17:59:21', 5),
(21, 1, 1, 'SOLO PERSONAL AUTORIZADO', 'jpeg', '2014-01-10 20:55:28', 1),
(22, 1, 2, 'PROHIBIDO FUMAR', 'jpeg', '2014-01-10 20:55:49', 1),
(23, 1, 2, 'NO INGERIR ALIMENTOS', 'jpeg', '2014-01-10 20:56:07', 1),
(24, 2, 2, 'Solo personal autorizado', 'jpeg', '2014-01-09 23:10:53', 1),
(25, 1, 2, 'Prdo 100', 'jpeg', '2013-11-21 04:30:56', 1),
(33, 1, 1, 'Producto de Prueba', 'png', '2014-01-10 22:30:42', 1),
(34, 1, 2, 'NO ARMAS BLANCAS', 'jpeg', '2014-01-21 08:57:21', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE IF NOT EXISTS `provincia` (
  `PROVINCIA_PK` int(11) NOT NULL AUTO_INCREMENT,
  `REGION_PK` int(11) DEFAULT NULL,
  `NOMBRE_PROVINCIA` varchar(64) NOT NULL,
  `POSICION` int(11) NOT NULL,
  PRIMARY KEY (`PROVINCIA_PK`),
  KEY `FK_REFERENCE_4` (`REGION_PK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`PROVINCIA_PK`, `REGION_PK`, `NOMBRE_PROVINCIA`, `POSICION`) VALUES
(1, 1, 'Guayas', 1),
(2, 2, 'Pichincha', 1),
(3, 1, 'Manabi', 1),
(5, 2, 'Azogues', 1),
(6, 3, 'Zamora', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `REGION_PK` int(11) NOT NULL AUTO_INCREMENT,
  `PAIS_PK` int(11) DEFAULT NULL,
  `NOMBRE_REGION` varchar(64) NOT NULL,
  `POSICION` int(11) NOT NULL,
  PRIMARY KEY (`REGION_PK`),
  KEY `FK_REFERENCE_5` (`PAIS_PK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`REGION_PK`, `PAIS_PK`, `NOMBRE_REGION`, `POSICION`) VALUES
(1, 1, 'Costa', 1),
(2, 1, 'Sierra', 1),
(3, 1, 'Oriente', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `ROL_PK` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_ROL` varchar(64) NOT NULL,
  PRIMARY KEY (`ROL_PK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`ROL_PK`, `NOMBRE_ROL`) VALUES
(1, 'Administrador'),
(2, 'Coordinador'),
(3, 'Operador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarea`
--

CREATE TABLE IF NOT EXISTS `tarea` (
  `TAREA_PK` int(11) NOT NULL AUTO_INCREMENT,
  `USUARIO_PK` int(11) DEFAULT NULL,
  `AREA_PK` int(11) DEFAULT NULL,
  `FECHA_REGISTRO` datetime NOT NULL,
  `TEMA` varchar(256) DEFAULT NULL,
  `VALOR_APROXIMADO` decimal(10,0) DEFAULT NULL,
  `RESOLUCION_1` varchar(256) DEFAULT NULL,
  `RESOLUCION_2` varchar(256) DEFAULT NULL,
  `SELECCION` varchar(256) DEFAULT NULL,
  `CUMPLIDO` varchar(256) DEFAULT NULL,
  `RESULTADO` varchar(256) DEFAULT NULL,
  `NOTAS` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`TAREA_PK`),
  KEY `FK_REFERENCE_26` (`USUARIO_PK`),
  KEY `FK_REFERENCE_28` (`AREA_PK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `tarea`
--

INSERT INTO `tarea` (`TAREA_PK`, `USUARIO_PK`, `AREA_PK`, `FECHA_REGISTRO`, `TEMA`, `VALOR_APROXIMADO`, `RESOLUCION_1`, `RESOLUCION_2`, `SELECCION`, `CUMPLIDO`, `RESULTADO`, `NOTAS`) VALUES
(1, 5, 1, '2014-01-07 20:10:55', 'Ninguno', '18', 'Ningunores1', 'Ninguno4', 'Ninguno5', 'Ninguno6', 'Ninguno7', 'Ninguno8'),
(2, 5, 2, '2014-01-07 20:19:05', 'Ninguno', '89', 'Nada', 'Nada tampoco', 'Seleccion', 'Cumplido 1', 'Resultado 1', 'Nota 1'),
(3, 4, 3, '2014-01-09 19:28:30', 'x', '2', 'x', 'x', 'x', 'x', 'x', 'x'),
(4, 5, 2, '2014-01-09 19:28:50', 'Prueba', '3', 'x', 'x', 'x', 'x', 'x', 'x'),
(5, NULL, 1, '2014-01-21 10:52:55', 'muestras dias sin accidentes', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 5, 1, '2014-01-21 15:49:24', 'espacios confinados', '200', 'instalar', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_calidad`
--

CREATE TABLE IF NOT EXISTS `tipo_calidad` (
  `TIPO_CALIDAD_PK` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_TIPO_CALIDAD` varchar(64) NOT NULL,
  `VALOR` decimal(10,2) NOT NULL,
  `POSICION` int(11) NOT NULL,
  PRIMARY KEY (`TIPO_CALIDAD_PK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `tipo_calidad`
--

INSERT INTO `tipo_calidad` (`TIPO_CALIDAD_PK`, `NOMBRE_TIPO_CALIDAD`, `VALOR`, `POSICION`) VALUES
(1, 'EXT', '0.02', 1),
(2, 'EXT-2C', '0.03', 2),
(3, 'INT', '0.01', 2),
(6, 'VOL', '0.04', 1),
(7, 'IMAN', '0.03', 1),
(8, 'FOT-2C', '0.04', 1),
(9, 'INT-2C', '0.03', 1),
(10, 'BAND', '0.03', 1),
(11, 'ETQ-3', '0.05', 1),
(12, 'ETQ-5', '0.04', 1),
(13, 'ETQ-7', '0.04', 1),
(14, 'ETQ-9', '0.04', 1),
(15, 'ETQ-11', '0.03', 1),
(16, 'ETQ-13', '0.03', 1),
(17, 'ETQ-15', '0.03', 1),
(19, 'ETQ-17', '0.02', 1),
(20, 'IMPRE-EXT', '0.02', 1),
(21, 'IMPRE-ADH', '0.01', 1),
(22, 'IMPRE-LONA', '0.02', 1),
(23, 'IMPRE-BAST', '0.03', 1),
(24, 'FOT-EXT', '0.03', 1),
(25, 'FOT-ADH', '0.02', 1),
(26, 'PLANO-PORT', '0.02', 1),
(27, 'PORT-PLANO', '0.03', 1),
(28, 'PORT-DOC-2', '0.04', 1),
(29, 'PORT-MNL-2.5', '0.03', 1),
(30, 'PORT-MNL-5', '0.03', 1),
(31, 'PLANO', '0.02', 1),
(32, 'ADH', '0.01', 1),
(33, 'ADH-MAQ', '0.04', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `USUARIO_PK` int(11) NOT NULL AUTO_INCREMENT,
  `ROL_PK` int(11) DEFAULT NULL,
  `CARGO_PK` int(11) DEFAULT NULL,
  `NOMBRES` varchar(64) NOT NULL,
  `APELLIDOS` varchar(64) NOT NULL,
  `CEDULA` varchar(11) DEFAULT NULL,
  `FECHA_NACIMIENTO` date DEFAULT NULL,
  `USUARIO` varchar(64) NOT NULL,
  `CLAVE` varchar(64) NOT NULL,
  `SALT` varchar(32) NOT NULL,
  PRIMARY KEY (`USUARIO_PK`),
  KEY `FK_REFERENCE_1` (`ROL_PK`),
  KEY `FK_REFERENCE_2` (`CARGO_PK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`USUARIO_PK`, `ROL_PK`, `CARGO_PK`, `NOMBRES`, `APELLIDOS`, `CEDULA`, `FECHA_NACIMIENTO`, `USUARIO`, `CLAVE`, `SALT`) VALUES
(3, 1, 1, 'Pato', 'Cordova', NULL, '1990-01-01', 'pato', '9d354886ddafe71664ecd8fed83b8c038948a764', '0e12139059ad8d2751db4cb93e56f482'),
(4, 2, 1, 'Jorge', 'Perez', '4984564684', '1907-01-01', 'jorge', '39625b8426b289770b2eee8e5477b185fe481ac4', '9144db1f2d787acb9aaf6bc7a5b07c7b'),
(5, 3, 1, 'Pedro', 'Lopez', '1209124432', '1925-01-01', 'pedro', '010cded5e7a134945934f5cec23b3608ab39e209', '88a78b9641bd5160b083ff153cd53c8e'),
(6, 1, 1, 'Ricardo', 'Rodríguez', NULL, '1900-01-01', 'rrodriguez', 'e2b3a31d4e077e71a98404c18d12a836e865d178', '2dc9a9b9203dcbb23debc3b330b64d8b'),
(7, 1, 1, 'RRRS', 'R', '151454454', '1900-01-01', 'RRRS', '2e99a38e0956d3e4b143f8368116b6795c3e5c50', '426fa1f7fbfc4923f0d043fa2a751d3a'),
(8, 3, 1, 'Diego Paul', 'Rodriguez Santillan', '1715415845', '1900-01-01', 'dprs', '0ef387e463b1bea5bc2b5c06b1da0234ef604d18', '97c8d275f50179a87a5162f3f697b787'),
(9, 1, 1, 'Gabriela', 'Mediavilla', '124151511', '1900-01-01', 'mgmb', 'e1d603acebc4f5ce497baa8d239fafed5f74eb1f', 'b06f9be93a9de4190349e34f991cf6dc'),
(10, 2, 3, 'Supervisor', 'Supervisor', NULL, '1900-01-01', 'supervisor', 'cc8c294ae3113196adf92356d2111d11d66da74f', 'f4c10214d27e007e5fca757dcc563ee6');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `FK_REFERENCE_30` FOREIGN KEY (`EMPRESA_PK`) REFERENCES `empresa` (`EMPRESA_PK`);

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `FK_REFERENCE_6` FOREIGN KEY (`PROVINCIA_PK`) REFERENCES `provincia` (`PROVINCIA_PK`);

--
-- Filtros para la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `FK_REFERENCE_11` FOREIGN KEY (`CIUDAD_PK`) REFERENCES `ciudad` (`CIUDAD_PK`),
  ADD CONSTRAINT `FK_REFERENCE_12` FOREIGN KEY (`CARGO_PK`) REFERENCES `cargo` (`CARGO_PK`),
  ADD CONSTRAINT `FK_REFERENCE_13` FOREIGN KEY (`AREA_PK`) REFERENCES `area` (`AREA_PK`);

--
-- Filtros para la tabla `medida`
--
ALTER TABLE `medida`
  ADD CONSTRAINT `FK_REFERENCE_10` FOREIGN KEY (`FIGURA_PK`) REFERENCES `figura` (`FIGURA_PK`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `FK_REFERENCE_15` FOREIGN KEY (`COORDINADOR_USUARIO_PK`) REFERENCES `usuario` (`USUARIO_PK`),
  ADD CONSTRAINT `FK_REFERENCE_17` FOREIGN KEY (`CONTACTO_PK`) REFERENCES `contacto` (`CONTACTO_PK`),
  ADD CONSTRAINT `FK_REFERENCE_22` FOREIGN KEY (`DELEGADO_1_USUARIO_PK`) REFERENCES `usuario` (`USUARIO_PK`),
  ADD CONSTRAINT `FK_REFERENCE_23` FOREIGN KEY (`DELEGADO_2_USUARIO_PK`) REFERENCES `usuario` (`USUARIO_PK`),
  ADD CONSTRAINT `FK_REFERENCE_24` FOREIGN KEY (`DELEGADO_3_USUARIO_PK`) REFERENCES `usuario` (`USUARIO_PK`),
  ADD CONSTRAINT `FK_REFERENCE_25` FOREIGN KEY (`PASO_PEDIDOS_PK`) REFERENCES `paso_pedido` (`PASO_PEDIDOS_PK`),
  ADD CONSTRAINT `FK_REFERENCE_29` FOREIGN KEY (`ULTIMA_ACTUALIZACION_USUARIO_PK`) REFERENCES `usuario` (`USUARIO_PK`);

--
-- Filtros para la tabla `pedido_producto`
--
ALTER TABLE `pedido_producto`
  ADD CONSTRAINT `FK_REFERENCE_18` FOREIGN KEY (`PEDIDO_PK`) REFERENCES `pedido` (`PEDIDO_PK`),
  ADD CONSTRAINT `FK_REFERENCE_19` FOREIGN KEY (`PRODUCTO_PK`) REFERENCES `producto` (`PRODUCTO_PK`),
  ADD CONSTRAINT `FK_REFERENCE_20` FOREIGN KEY (`MEDIDA_PK`) REFERENCES `medida` (`MEDIDA_PK`),
  ADD CONSTRAINT `FK_REFERENCE_21` FOREIGN KEY (`TIPO_CALIDAD_PK`) REFERENCES `tipo_calidad` (`TIPO_CALIDAD_PK`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `FK_REFERENCE_8` FOREIGN KEY (`FIGURA_PK`) REFERENCES `figura` (`FIGURA_PK`),
  ADD CONSTRAINT `FK_REFERENCE_9` FOREIGN KEY (`CATEGORIA_PK`) REFERENCES `categoria` (`CATEGORIA_PK`);

--
-- Filtros para la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD CONSTRAINT `FK_REFERENCE_4` FOREIGN KEY (`REGION_PK`) REFERENCES `region` (`REGION_PK`);

--
-- Filtros para la tabla `region`
--
ALTER TABLE `region`
  ADD CONSTRAINT `FK_REFERENCE_5` FOREIGN KEY (`PAIS_PK`) REFERENCES `pais` (`PAIS_PK`);

--
-- Filtros para la tabla `tarea`
--
ALTER TABLE `tarea`
  ADD CONSTRAINT `FK_REFERENCE_26` FOREIGN KEY (`USUARIO_PK`) REFERENCES `usuario` (`USUARIO_PK`),
  ADD CONSTRAINT `FK_REFERENCE_28` FOREIGN KEY (`AREA_PK`) REFERENCES `area` (`AREA_PK`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_REFERENCE_1` FOREIGN KEY (`ROL_PK`) REFERENCES `rol` (`ROL_PK`),
  ADD CONSTRAINT `FK_REFERENCE_2` FOREIGN KEY (`CARGO_PK`) REFERENCES `cargo` (`CARGO_PK`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
