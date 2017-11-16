-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2017 a las 21:28:50
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `area_id` int(11) NOT NULL,
  `descripcion` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`area_id`, `descripcion`) VALUES
(1, 'Exito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `cedula` int(13) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `clase` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `cilindraje` varchar(20) NOT NULL,
  `placa` varchar(20) NOT NULL,
  `aseguradora` varchar(20) NOT NULL,
  `nivel` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`cedula`, `nombres`, `apellidos`, `marca`, `clase`, `color`, `cilindraje`, `placa`, `aseguradora`, `nivel`) VALUES
(1088024, 'jhonathan', 'alvarez lopez', 'suzuki', 'moto', 'negra', '125', '123', 'sura', 2),
(1088024835, 'jhonathan', 'alvarez', 'suzuki', 'moto', 'negra', '125', 'sux85', 'sura', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesa`
--

CREATE TABLE `procesa` (
  `cedula` varchar(12) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `procesa`
--

INSERT INTO `procesa` (`cedula`, `nombres`, `apellidos`) VALUES
('1231234', 'dsds', 'dsds'),
('134', 'jjkjh', 'jkgkgk'),
('244', 'dff', 'wee'),
('34435345', 'cfv', 'vfvf'),
('54354', 'frrrf', 'fewrw');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `cedula` int(14) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `direccion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`cedula`, `nombres`, `apellidos`, `telefono`, `direccion`) VALUES
(1231, 'asdasd', 'adsdas', 'dasda', 'dasdas'),
(1231231, 'ddse', 'adwdaw', 'gh', 'fdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `placa` varchar(15) NOT NULL,
  `marca` varchar(15) NOT NULL,
  `clase` varchar(15) NOT NULL,
  `color` varchar(15) NOT NULL,
  `cilindraje` varchar(15) NOT NULL,
  `aseguradora` varchar(15) NOT NULL,
  `cedula_propietario` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`area_id`);

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `procesa`
--
ALTER TABLE `procesa`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`cedula_propietario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
