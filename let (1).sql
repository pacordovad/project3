-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-01-2014 a las 19:31:56
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `let`
--
CREATE DATABASE IF NOT EXISTS `let` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `let`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `AREA_PK` int(11) NOT NULL AUTO_INCREMENT,
  `EMPRESA_PK` int(11) NOT NULL,
  `NOMBRE_AREA` varchar(64) NOT NULL,
  `CODIGO` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`AREA_PK`),
  KEY `FK_REFERENCE_30` (`EMPRESA_PK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`AREA_PK`, `EMPRESA_PK`, `NOMBRE_AREA`, `CODIGO`) VALUES
(1, 1, 'Seguridad Salud Ambiente', 'SSTMA'),
(2, 1, 'Centro Nacional de Distribucion', 'CND'),
(3, 1, 'Higiene y cuidado personal', 'HCP'),
(4, 2, 'Compras', 'CMP'),
(5, 3, 'Proveedores', 'PRV');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE IF NOT EXISTS `cargo` (
  `CARGO_PK` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_CARGO` varchar(64) NOT NULL,
  PRIMARY KEY (`CARGO_PK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`CARGO_PK`, `NOMBRE_CARGO`) VALUES
(1, 'Gerente General'),
(2, 'Gerente Financiero'),
(3, 'Coordinador'),
(4, 'Jefe de area'),
(5, 'Operador'),
(6, 'Encargado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `CATEGORIA_PK` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_CATEGORIA` varchar(64) NOT NULL,
  `DESCRIPCION` text NOT NULL,
  PRIMARY KEY (`CATEGORIA_PK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`CATEGORIA_PK`, `NOMBRE_CATEGORIA`, `DESCRIPCION`) VALUES
(1, 'Básicas', 'inicial mínima para auditorias'),
(2, 'Prohibición', 'de los reglamentos'),
(3, 'Riesgos', 'Iess'),
(4, 'Protección', 'equipos u obligaciones'),
(5, 'Incendios', 'bomberos'),
(6, 'Evacuación', 'bomberos'),
(7, 'Oficinas', 'organigrama administrativo'),
(8, 'Áreas', 'organigrama de procesos'),
(9, 'Servicios', 'basicos'),
(10, 'Quimicos', 'manejo de productos'),
(11, 'Planos', 'indoles'),
(12, 'Especiales', 'a la medida'),
(13, 'Parqueaderos', 'Organizacion'),
(14, 'Emergencia', 'primeros auxilios'),
(15, 'Dinámicas', 'suma de señales'),
(16, 'Laboratorios', 'Exclusivo'),
(17, 'Pequenos', 'cartelitos pequenos'),
(18, 'Adhesivos', 'comunes'),
(19, 'Electricos', 'est cam tab bt'),
(20, 'Diseno interiores', 'decoracion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE IF NOT EXISTS `ciudad` (
  `CIUDAD_PK` int(11) NOT NULL AUTO_INCREMENT,
  `PROVINCIA_PK` int(11) NOT NULL,
  `NOMBRE_CIUDAD` varchar(64) NOT NULL,
  PRIMARY KEY (`CIUDAD_PK`),
  KEY `FK_REFERENCE_6` (`PROVINCIA_PK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`CIUDAD_PK`, `PROVINCIA_PK`, `NOMBRE_CIUDAD`) VALUES
(1, 1, 'Guayaquil'),
(2, 2, 'Quito'),
(3, 5, 'Manta'),
(4, 5, 'Tena');

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
  PRIMARY KEY (`EMPRESA_PK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`EMPRESA_PK`, `NOMBRE_EMPRESA`, `RUC`, `DIRECCION`, `REFERENCIA`, `TELEFONO`) VALUES
(1, 'LAFABRIL', '781632637', 'via manta motecristi', 'oleaginosa', '27643434'),
(2, 'PINTEX', '98324623743', 'Av prensa', 'textil', '37463464'),
(3, 'ECUASISTENCIA', '4541556', '12 de Octubre', 'Transporte', '2554644'),
(4, 'AVIFORTE', '154514565135', 'Calderon', 'Alimento Balanceados', '2568443');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

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
(24, 4, 9, 60, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE IF NOT EXISTS `pais` (
  `PAIS_PK` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_PAIS` varchar(64) NOT NULL,
  PRIMARY KEY (`PAIS_PK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`PAIS_PK`, `NOMBRE_PAIS`) VALUES
(1, 'Ecuador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paso_pedido`
--

CREATE TABLE IF NOT EXISTS `paso_pedido` (
  `PASO_PEDIDOS_PK` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_PASO` varchar(64) NOT NULL,
  `POSICION` int(11) NOT NULL,
  PRIMARY KEY (`PASO_PEDIDOS_PK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `paso_pedido`
--

INSERT INTO `paso_pedido` (`PASO_PEDIDOS_PK`, `NOMBRE_PASO`, `POSICION`) VALUES
(1, 'Visitas', 1),
(2, 'Edicion', 10),
(3, 'Presentación', 1),
(4, 'Reedición', 1),
(5, 'Aprobación', 1),
(6, 'Producción', 1),
(7, 'Instalación', 1),
(8, 'Instalado', 1),
(9, 'Facturado', 1),
(11, 'Refacturación', 1),
(12, 'Cancelado', 1),
(13, 'Pedidos Estandar', 1),
(14, 'Cobro', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`PEDIDO_PK`, `COORDINADOR_USUARIO_PK`, `CONTACTO_PK`, `DELEGADO_1_USUARIO_PK`, `DELEGADO_2_USUARIO_PK`, `DELEGADO_3_USUARIO_PK`, `PASO_PEDIDOS_PK`, `ULTIMA_ACTUALIZACION_USUARIO_PK`, `FECHA_REGISTRO`, `FECHA_ACTUALIZACION`, `CONCEPTO_FACTURA`, `DESCUENTO`, `APLICA_CONCEPTO_1`, `APLICA_CONCEPTO_2`, `FECHA_APROBACION`, `FECHA_MAXIMA_ENTREGA`, `FINANCIAMIENTO`, `FACTURA_NUM`, `BANCO`, `NOTAS`, `PASO_1`, `PASO_2`, `PASO_3`, `PASO_4`, `PASO_5`, `PASO_6`, `PASO_7`, `PASO_8`, `PASO_9`, `PASO_10`, `PASO_11`, `PASO_12`, `PASO_13`, `PASO_14`, `PASO_15`, `PASO_16`, `RETENCION_RENTA`, `RETENCION_IVA`, `ETAPA`) VALUES
(22, 3, 4, 7, 7, 7, 13, 3, '2013-12-14 17:48:00', '2014-01-07 17:21:56', 'Ninguno', '0', 0, 1, '2013-12-14', '2014-01-14', 5, '145267', NULL, 'Notas pedido 22.', 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', '10', 0),
(23, 3, 2, 3, 5, 4, 6, 3, '2013-12-14 19:05:00', '2014-01-14 20:15:07', 'Ninguno', '10', 1, 1, '2013-12-14', '2014-01-14', 3, NULL, NULL, 'Notas pedido 23.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', '10', 0),
(24, 4, 4, 4, 4, 5, 7, 5, '2013-12-22 04:15:00', '2014-01-07 23:13:48', 'Ninguno.', '0', 0, 0, '2013-12-22', '2014-01-22', NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(25, 3, 5, 3, 3, 3, 6, 3, '2014-01-03 00:09:00', '2014-01-03 00:09:00', 'Ninguno', '0', 0, 1, '2014-01-03', '2014-02-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(26, 5, 2, 5, 5, 5, 9, 6, '2014-01-07 21:46:00', '2014-01-10 22:27:11', 'Ninguno.', '0', 1, 1, '2014-02-07', '2014-03-07', 5, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, '0', '0', 0),
(27, 3, 2, 3, 3, 3, 6, 3, '2014-01-07 21:48:00', '2014-01-07 21:48:00', 'Ninguno.', '0', 0, 1, '2014-01-07', '2014-02-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(28, 3, 2, 3, 3, 3, 8, 3, '2014-01-08 17:48:00', '2014-01-08 17:48:00', 'Nonen.', '0', 0, 0, '2014-01-08', '2014-02-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(29, 3, 3, 5, 5, 5, 8, 3, '2014-01-09 19:20:00', '2014-01-09 19:20:00', NULL, '10', 1, 1, '2014-01-09', '2014-02-09', 5, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, '10', '100', 0),
(30, 6, 2, 6, 6, 6, 9, 3, '2014-01-10 00:18:00', '2014-01-10 22:37:16', 'Para auditoria Mac donals noviembre', '5', 1, 0, '2014-01-10', '2014-02-10', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(31, 6, 3, 6, 6, 6, NULL, 6, '2014-01-10 19:55:00', '2014-01-10 19:55:00', 'Rutas de evacuacion.', '0', 0, 0, '2014-01-10', '2014-02-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(32, 6, 4, 6, 6, 6, NULL, 6, '2014-01-10 21:51:00', '2014-01-10 21:51:00', 'Espacios confinados', '0', 0, 0, '2014-01-10', '2014-02-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(33, 6, 2, 5, 6, 6, 3, 3, '2014-01-10 22:00:00', '2014-01-14 20:29:30', 'Auditoria iess', '0', 0, 0, '2014-01-10', '2014-02-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(34, 3, 2, 3, 5, 4, 6, 3, '2013-12-14 19:05:00', '2014-01-14 20:21:11', 'Ninguno', '10', 1, 1, '2013-12-14', '2014-01-14', 3, NULL, NULL, 'Notas pedido 23.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', '10', 0),
(35, 3, 2, 3, 5, 4, 6, 3, '2013-12-14 19:05:00', '2014-01-06 20:37:45', 'Ninguno', '10', 1, 1, '2013-12-14', '2014-01-14', 3, NULL, NULL, 'Notas pedido 23.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', '10', 0),
(36, 3, 2, 3, 5, 4, 6, 3, '2013-12-14 19:05:00', '2014-01-06 20:37:45', 'Ninguno', '10', 1, 1, '2013-12-14', '2014-01-14', 3, NULL, NULL, 'Notas pedido 23.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', '10', 0),
(37, 6, 2, 5, 6, 6, 3, 3, '2014-01-10 22:00:00', '2014-01-14 20:23:05', 'Auditoria iess', '0', 0, 1, '2014-01-10', '2014-02-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

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
  PRIMARY KEY (`PEDIDO_PRODUCTO_PK`),
  KEY `FK_REFERENCE_18` (`PEDIDO_PK`),
  KEY `FK_REFERENCE_19` (`PRODUCTO_PK`),
  KEY `FK_REFERENCE_20` (`MEDIDA_PK`),
  KEY `FK_REFERENCE_21` (`TIPO_CALIDAD_PK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Volcado de datos para la tabla `pedido_producto`
--

INSERT INTO `pedido_producto` (`PEDIDO_PRODUCTO_PK`, `PEDIDO_PK`, `PRODUCTO_PK`, `MEDIDA_PK`, `TIPO_CALIDAD_PK`, `NOMBRE_PRODUCTO`, `CANTIDAD`, `ALTO`, `ANCHO`, `CORTESIA`, `PRECIO_VENTA`, `PASO_1`, `PASO_2`, `PASO_3`, `PASO_4`, `PASO_5`, `PASO_6`, `PASO_7`, `PASO_8`, `PASO_9`, `PASO_10`, `PASO_11`, `PASO_12`, `PASO_13`, `PASO_14`, `PASO_15`, `PASO_16`) VALUES
(24, 22, 18, 1, 1, 'Nueva1', 5, '2', '2', 0, '0.20', 1, 1, 1, 1, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 22, 23, 1, 1, 'Producto 5', 5, '2', '2', 1, '0.20', 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 22, 18, 1, 1, 'Nueva1', 10, '2', '2', 0, '0.40', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 22, 18, 1, 2, 'Nueva1', 10, '2', '2', 1, '0.40', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 22, 18, 1, 1, 'Nueva1', 5, '2', '2', 0, '0.40', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 22, 18, 1, 1, 'Nueva1', 5, '2', '2', 1, '0.40', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 22, 20, 1, 1, 'Nueva3', 1, '2', '2', 0, '0.40', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 22, 21, 1, 1, 'Ninguna', 12, '2', '2', 0, '0.40', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 22, 22, 1, 1, 'zasdas', 2, '2', '2', 0, '0.40', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 22, 23, 1, 1, 'Producto 5', 15, '2', '2', 0, '0.40', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 22, 24, 1, 1, 'Prod 10', 12, '2', '2', 0, '0.40', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 22, 25, 1, 1, 'Prdo 100', 18, '2', '2', 0, '0.40', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 22, 25, 1, 1, 'Prdo 100', 1000, '2', '2', 1, '0.40', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 24, 24, 1, 1, 'Prod 10', 18, '2', '2', 0, '0.40', 1, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 25, 18, 1, 1, 'Nueva1', 18, '2', '2', 0, '0.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 25, 24, 1, 1, 'Prod 10', 18, '2', '2', 0, '0.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 25, 20, NULL, 2, 'Nueva3', 19, '9', '5', 1, '3.60', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 26, 23, NULL, 1, 'Producto 5', 22, '9', '8', 0, '7.20', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL),
(43, 27, 18, 1, 1, 'Nueva1', 18, '2', '2', 0, '0.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 27, 24, 1, 1, 'Prod 10', 85, '2', '2', 1, '0.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 24, 20, 1, 1, 'Nueva3', 51, '2', '2', 0, '0.40', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 28, 25, 1, 1, 'Prdo 100', 100, '2', '2', 0, '0.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 29, 18, NULL, 2, 'Nueva1', 2, '3', '2', 0, '0.48', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, NULL),
(48, 29, 23, 1, 1, 'Producto 5', 1, '2', '2', 0, '0.40', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0),
(49, 29, 24, 1, 1, 'Prod 10', 1, '2', '2', 1, '0.40', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0),
(50, 30, 18, 7, 1, 'Guardianía', 100, '23', '23', 0, '10.58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 30, 20, 7, 1, 'Visitante identifiquese', 20, '23', '23', 0, '15.87', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 30, 18, 8, 1, 'Guardianía 1234', 4, '30', '30', 0, '27.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 30, 20, NULL, 1, 'Visitante retire su credencial', 20, '50', '50', 0, '75.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 33, 20, 1, 1, 'VISITANTE IDENTIFIQUESE', 1, '10', '10', 0, '2.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 33, 18, 1, 1, 'Seguimiento', 300, '10', '10', 0, '2.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 33, 20, 1, 1, 'VISITANTE IDENTIFIQUESE', 20, '10', '10', 0, '2.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 33, 25, 1, 1, 'Prdo 100', 400, '10', '10', 0, '2.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 23, 20, 5, 1, 'VISITANTE IDENTIFIQUESE', 18, '16', '16', 0, '5.12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 36, 20, NULL, 1, 'Nueva3', 18, '5', '6', 0, '3.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 37, 20, 1, 1, 'VISITANTE IDENTIFIQUESE', 1, '10', '10', 0, '2.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 37, 18, 1, 1, 'Seguimiento', 300, '10', '10', 0, '2.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 37, 20, 1, 1, 'VISITANTE IDENTIFIQUESE', 20, '10', '10', 0, '2.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 37, 25, 1, 1, 'Prdo 100', 400, '10', '10', 0, '2.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 37, 21, 1, 1, 'SOLO PERSONAL AUTORIZADO', 500, '10', '10', 0, '2.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 37, 24, 1, 1, 'Solo personal autorizado', 600, '10', '10', 0, '2.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 37, 23, 1, 1, 'NO INGERIR ALIMENTOS', 800, '10', '10', 0, '2.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 37, 18, 7, 1, 'GUARDIANIA', 12, '23', '23', 1, '10.58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
  PRIMARY KEY (`PRODUCTO_PK`),
  KEY `FK_REFERENCE_8` (`FIGURA_PK`),
  KEY `FK_REFERENCE_9` (`CATEGORIA_PK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`PRODUCTO_PK`, `FIGURA_PK`, `CATEGORIA_PK`, `NOMBRE_IMAGEN`, `IMAGEN_EXTENSION`, `FECHA_MODIFICACION`) VALUES
(18, 1, 1, 'GUARDIANIA', 'png', '2014-01-10 22:31:16'),
(20, 1, 1, 'VISITANTE IDENTIFIQUESE', 'jpeg', '2014-01-10 20:54:57'),
(21, 1, 1, 'SOLO PERSONAL AUTORIZADO', 'jpeg', '2014-01-10 20:55:28'),
(22, 1, 2, 'PROHIBIDO FUMAR', 'jpeg', '2014-01-10 20:55:49'),
(23, 1, 2, 'NO INGERIR ALIMENTOS', 'jpeg', '2014-01-10 20:56:07'),
(24, 2, 2, 'Solo personal autorizado', 'jpeg', '2014-01-09 23:10:53'),
(25, 1, 2, 'Prdo 100', 'jpeg', '2013-11-21 04:30:56'),
(33, 1, 1, 'Producto de Prueba', 'png', '2014-01-10 22:30:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE IF NOT EXISTS `provincia` (
  `PROVINCIA_PK` int(11) NOT NULL AUTO_INCREMENT,
  `REGION_PK` int(11) DEFAULT NULL,
  `NOMBRE_PROVINCIA` varchar(64) NOT NULL,
  PRIMARY KEY (`PROVINCIA_PK`),
  KEY `FK_REFERENCE_4` (`REGION_PK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`PROVINCIA_PK`, `REGION_PK`, `NOMBRE_PROVINCIA`) VALUES
(1, 1, 'Guayas'),
(2, 2, 'Pichincha'),
(3, 1, 'Manabi'),
(5, 2, 'Azogues'),
(6, 3, 'Zamora');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `REGION_PK` int(11) NOT NULL AUTO_INCREMENT,
  `PAIS_PK` int(11) DEFAULT NULL,
  `NOMBRE_REGION` varchar(64) NOT NULL,
  PRIMARY KEY (`REGION_PK`),
  KEY `FK_REFERENCE_5` (`PAIS_PK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`REGION_PK`, `PAIS_PK`, `NOMBRE_REGION`) VALUES
(1, 1, 'Costa'),
(2, 1, 'Sierra'),
(3, 1, 'Oriente');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tarea`
--

INSERT INTO `tarea` (`TAREA_PK`, `USUARIO_PK`, `AREA_PK`, `FECHA_REGISTRO`, `TEMA`, `VALOR_APROXIMADO`, `RESOLUCION_1`, `RESOLUCION_2`, `SELECCION`, `CUMPLIDO`, `RESULTADO`, `NOTAS`) VALUES
(1, 5, 1, '2014-01-07 20:10:55', 'Ninguno', '18', 'Ningunores1', 'Ninguno4', 'Ninguno5', 'Ninguno6', 'Ninguno7', 'Ninguno8'),
(2, 5, 2, '2014-01-07 20:19:05', 'Ninguno', '89', 'Nada', 'Nada tampoco', 'Seleccion', 'Cumplido 1', 'Resultado 1', 'Nota 1'),
(3, 4, 3, '2014-01-09 19:28:30', 'x', '2', 'x', 'x', 'x', 'x', 'x', 'x'),
(4, 5, 2, '2014-01-09 19:28:50', 'Prueba', '3', 'x', 'x', 'x', 'x', 'x', 'x');

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
(3, 'INT', '0.01', 1),
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`USUARIO_PK`, `ROL_PK`, `CARGO_PK`, `NOMBRES`, `APELLIDOS`, `CEDULA`, `FECHA_NACIMIENTO`, `USUARIO`, `CLAVE`, `SALT`) VALUES
(3, 1, 1, 'Pato', 'Cordova', NULL, '1990-01-01', 'pato', '9d354886ddafe71664ecd8fed83b8c038948a764', '0e12139059ad8d2751db4cb93e56f482'),
(4, 2, 1, 'Jorge', 'Perez', '4984564684', '1907-01-01', 'jorge', '39625b8426b289770b2eee8e5477b185fe481ac4', '9144db1f2d787acb9aaf6bc7a5b07c7b'),
(5, 3, 1, 'Pedro', 'Lopez', '1209124432', '1925-01-01', 'pedro', '010cded5e7a134945934f5cec23b3608ab39e209', '88a78b9641bd5160b083ff153cd53c8e'),
(6, 1, 1, 'Ricardo', 'Rodríguez', NULL, '1900-01-01', 'rrodriguez', 'e2b3a31d4e077e71a98404c18d12a836e865d178', '2dc9a9b9203dcbb23debc3b330b64d8b'),
(7, 1, 1, 'RRRS', 'R', '151454454', '1900-01-01', 'RRRS', '2e99a38e0956d3e4b143f8368116b6795c3e5c50', '426fa1f7fbfc4923f0d043fa2a751d3a');

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
