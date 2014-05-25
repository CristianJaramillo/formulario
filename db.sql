-- By Cristian Jaramillo
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de datos: `formulario`
-- 
CREATE DATABASE `formulario_php` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `formulario_php`;

-- 
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(9) NOT NULL auto_increment,
  `nombre` varchar(40) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY  (`id_cliente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;