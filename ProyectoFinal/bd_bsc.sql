-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-09-2014 a las 00:34:17
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bd_bsc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banco`
--

CREATE TABLE IF NOT EXISTS `banco` (
  `ban_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `ban_descripcion` varchar(100) NOT NULL,
  `ban_estado` enum('Activo','Inactivo') NOT NULL,
  PRIMARY KEY (`ban_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `banco`
--

INSERT INTO `banco` (`ban_codigo`, `ban_descripcion`, `ban_estado`) VALUES
(1, 'Guayaquil', 'Activo'),
(2, 'Bolivariano', 'Activo'),
(3, 'Pichincha', 'Activo'),
(4, 'Machala', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfactura`
--

CREATE TABLE IF NOT EXISTS `cfactura` (
  `cfac_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `cfac_descripcion` varchar(100) NOT NULL,
  `cfac_estado` enum('Activo','Inactivo') NOT NULL,
  `Soc_IdSocio` int(11) NOT NULL,
  `ban_codigo` int(11) NOT NULL,
  PRIMARY KEY (`cfac_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE IF NOT EXISTS `ciudad` (
  `ciu_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `ciu_nombre` varchar(100) NOT NULL,
  `ciu_estado` enum('Activo','Inactivo') NOT NULL,
  PRIMARY KEY (`ciu_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`ciu_codigo`, `ciu_nombre`, `ciu_estado`) VALUES
(1, 'Milagro', 'Activo'),
(2, 'Guayaquil', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dfactura`
--

CREATE TABLE IF NOT EXISTS `dfactura` (
  `dfac_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `dfac_estado` enum('Activo','Inactivo') NOT NULL,
  `pro_codigo` int(11) NOT NULL,
  `cfac_codigo` int(11) NOT NULL,
  PRIMARY KEY (`dfac_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea`
--

CREATE TABLE IF NOT EXISTS `linea` (
  `lin_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `lin_descripcion` varchar(100) NOT NULL,
  `lin_estado` enum('Activo','Inactivo') NOT NULL,
  PRIMARY KEY (`lin_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `pro_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `pro_descripcion` varchar(100) NOT NULL,
  `pro_estado` enum('Activo','Inactivo') NOT NULL,
  `lin_codigo` int(11) NOT NULL,
  PRIMARY KEY (`pro_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socio`
--

CREATE TABLE IF NOT EXISTS `socio` (
  `Soc_IdSocio` int(11) NOT NULL AUTO_INCREMENT,
  `Soc_Nombre` varchar(45) DEFAULT NULL,
  `Soc_Apellido` varchar(45) DEFAULT NULL,
  `Soc_Estado` enum('Activo','Inactivo') DEFAULT NULL,
  `ciu_codigo` int(11) NOT NULL,
  `TSoc_Id_TSocio` int(11) NOT NULL,
  `Soc_Direccion` varchar(100) NOT NULL,
  `Soc_Correo` varchar(100) NOT NULL,
  `Soc_NumCuenta` int(11) NOT NULL,
  `Soc_Usuario` varchar(100) NOT NULL,
  `Soc_Password` varchar(100) NOT NULL,
  PRIMARY KEY (`Soc_IdSocio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `socio`
--

INSERT INTO `socio` (`Soc_IdSocio`, `Soc_Nombre`, `Soc_Apellido`, `Soc_Estado`, `ciu_codigo`, `TSoc_Id_TSocio`, `Soc_Direccion`, `Soc_Correo`, `Soc_NumCuenta`, `Soc_Usuario`, `Soc_Password`) VALUES
(10, 'Liston', 'ALvarado', 'Inactivo', 1, 4, 'ladf', 'listong', 13212132, 'gabo', '13323'),
(11, 'List', 'Alvarado', 'Activo', 1, 1, 'lisdeee', 'listongabo', 13431, 'listongabo', '11111'),
(12, 'andres', 'Alvarado', 'Activo', 1, 1, 'gtu', 'listongabo', 1323232, 'kkdfghfdk', 'fyyfy');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tsocio`
--

CREATE TABLE IF NOT EXISTS `tsocio` (
  `TSoc_Id_TSocio` int(11) NOT NULL,
  `TSoc_Tipo` varchar(45) DEFAULT NULL,
  `TSoc_Estado` enum('Activo','Inactivo') DEFAULT NULL,
  PRIMARY KEY (`TSoc_Id_TSocio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tsocio`
--

INSERT INTO `tsocio` (`TSoc_Id_TSocio`, `TSoc_Tipo`, `TSoc_Estado`) VALUES
(1, 'Sub12', 'Activo'),
(2, 'Sub15', 'Activo'),
(3, 'Sub18', 'Activo'),
(4, 'Senior', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tusuario`
--

CREATE TABLE IF NOT EXISTS `tusuario` (
  `tusu_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `tusu_nombre` varchar(100) NOT NULL,
  `tusu_estado` enum('Activo','Inactivo') NOT NULL,
  PRIMARY KEY (`tusu_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `Usu_Id_Usuario` int(11) NOT NULL,
  `Usu_Usuario` varchar(45) DEFAULT NULL,
  `Usu_Password` varchar(45) DEFAULT NULL,
  `Usu_Estado` varchar(45) DEFAULT NULL,
  `tusu_codigo` int(11) NOT NULL,
  PRIMARY KEY (`Usu_Id_Usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
