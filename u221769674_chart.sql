
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-04-2017 a las 16:03:47
-- Versión del servidor: 10.0.28-MariaDB
-- Versión de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `u221769674_chart`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barcos`
--

CREATE TABLE IF NOT EXISTS `barcos` (
  `matricula` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` enum('motora','velero','llaut','') COLLATE utf8_unicode_ci NOT NULL,
  `calado` float NOT NULL,
  `eslora` float NOT NULL,
  `manga` float NOT NULL,
  `camarotes` int(11) NOT NULL,
  `seguro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `capacidad` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_fotos` int(11) NOT NULL,
  `puerto_base` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `barcos`
--

INSERT INTO `barcos` (`matricula`, `tipo`, `calado`, `eslora`, `manga`, `camarotes`, `seguro`, `nombre`, `capacidad`, `id_usuario`, `id_fotos`, `puerto_base`) VALUES
('6ºPM-05-23-14', 'motora', 1.25, 16.5, 4.2, 5, 'seguro1.pdf', 'seven seas', 10, 1, 1, 'andratx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE IF NOT EXISTS `fotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fotos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE IF NOT EXISTS `reservas` (
  `id_reservas` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_matricula` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_salida` date NOT NULL,
  `fecha_llegada` date NOT NULL,
  `dias` int(11) NOT NULL,
  `personas` int(11) NOT NULL,
  PRIMARY KEY (`id_reservas`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `nombre` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `dni` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `movil` int(20) NOT NULL,
  `telefono` int(20) NOT NULL,
  `karma` enum('1','2','3') COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `dni`, `apellidos`, `fecha`, `email`, `movil`, `telefono`, `karma`, `avatar`, `id_usuario`) VALUES
('carlos', '43182545-E', 'garcía gelabert', '20-06-1990', 'carlosgarciagelabert1990@gmail.com', 678119613, 971558899, '3', 'admin.png', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
