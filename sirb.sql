-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-10-2018 a las 22:50:59
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sirb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `Nombre_Dep` varchar(30) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `Titular` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `Nombre` text NOT NULL,
  `Apellido_Pat` text NOT NULL,
  `Apellido_Mat` text NOT NULL,
  `Cargo` text NOT NULL,
  `Direccion` varchar(30) NOT NULL,
  `Ciudad` text NOT NULL,
  `Telefono` int(9) NOT NULL,
  `Fecha_Nac` date NOT NULL,
  `Salario` int(20) NOT NULL,
  `RUT_TRABAJADOR` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `RUT` int(10) NOT NULL,
  `Razon_social` varchar(30) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Giro` text NOT NULL,
  `Telefono` int(9) NOT NULL,
  `FAX` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Representante` varchar(40) NOT NULL,
  `RUN_Representante` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Usuario` varchar(20) NOT NULL,
  `Contraseña` varchar(8) NOT NULL,
  `Privilegios` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Usuario`, `Contraseña`, `Privilegios`) VALUES
('Gerente', '', 1),
('RRHH', '', 2),
('Juridico', '', 3),
('Informatico', '', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
