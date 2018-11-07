-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2018 a las 16:10:16
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
  `Nombre_Dep` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Titular` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `Nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `Apellido_Pat` text COLLATE utf8_spanish_ci NOT NULL,
  `Apellido_Mat` text COLLATE utf8_spanish_ci NOT NULL,
  `Cargo` text COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Ciudad` text COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` int(9) NOT NULL,
  `Fecha_Nac` date NOT NULL,
  `Salario` int(20) NOT NULL,
  `AFP` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `SALUD` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `RUT_TRABAJADOR` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`Nombre`, `Apellido_Pat`, `Apellido_Mat`, `Cargo`, `Direccion`, `Ciudad`, `Telefono`, `Fecha_Nac`, `Salario`, `AFP`, `SALUD`, `RUT_TRABAJADOR`) VALUES
('Elvis', 'Torres', 'Toro', '', 'Calle Las Quilas 152', 'Renca', 987654321, '1992-07-17', 360000, 'HABITAT', '', '10990144-k'),
('Eladio', 'Carter', 'Carrion', '', 'Avenida siempre viva 1010', 'Springfield', 987654321, '1990-01-15', 200000, 'PROVIDA', '', '17821123-9'),
('Osvaldo', 'Duarte', 'Ahmed', '', 'Privada Ameur 192', 'Springfield', 986551436, '1981-02-09', 600000, 'PROVIDA', '', '20005125-4'),
('Elsa', 'Soto', 'Lagos', '', 'Calle Las Araucarias 199', 'Colina', 987654321, '1990-05-15', 540000, 'HABITAT', '', '23595523-7'),
('Gerardo', 'Lopez', 'Rodriguez', '', 'Preston Luke 442', 'Colina', 987654321, '1991-07-09', 390000, 'HABITAT', '', '6340768-2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `RUT` int(10) NOT NULL,
  `Razon_social` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Giro` text COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` int(9) NOT NULL,
  `FAX` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Representante` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `RUN_Representante` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Contraseña` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `Privilegios` int(1) NOT NULL,
  `Id_U` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Usuario`, `Contraseña`, `Privilegios`, `Id_U`) VALUES
('Gerente', '85509712', 1, 1),
('RRHH', '45107494', 2, 2),
('Juridico', '77851661', 3, 3),
('Informatico', '94882335', 4, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`Nombre_Dep`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`RUT_TRABAJADOR`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`RUT`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_U`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
