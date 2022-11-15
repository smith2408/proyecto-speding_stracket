-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2022 a las 02:20:30
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `spending_tracket`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `ID` int(11) NOT NULL,
  `CANTIDAD` float(8,2) NOT NULL,
  `CATEGORIA` int(11) NOT NULL,
  `FECHA` timestamp NOT NULL DEFAULT current_timestamp(),
  `DESCRIPCION` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `gastos`
--

INSERT INTO `gastos` (`ID`, `CANTIDAD`, `CATEGORIA`, `FECHA`, `DESCRIPCION`) VALUES
(6, 20.00, 3, '2022-11-13 04:32:27', 'Agua purificada'),
(31, 87.00, 5, '2022-11-13 00:07:29', 'balon de futbol'),
(46, 32.00, 4, '2022-11-14 17:09:12', 'rentaaa'),
(47, 15.00, 1, '2022-11-14 20:35:20', 'coca cola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos_categoria`
--

CREATE TABLE `gastos_categoria` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `gastos_categoria`
--

INSERT INTO `gastos_categoria` (`ID`, `nombre`) VALUES
(1, 'Sin categoria'),
(2, 'Viaticos'),
(3, 'Despensa'),
(4, 'Gastos Fijos'),
(5, 'Diversion'),
(6, 'Transporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `CORREO` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `PASSWORD` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `TELEFONO` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `NOMBRE` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `STATUS` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `CORREO`, `PASSWORD`, `TELEFONO`, `NOMBRE`, `STATUS`) VALUES
(1, 'smithx24085@gmail.com', 'coreano24085', '9982310983', '8dev', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `gastos_categoria`
--
ALTER TABLE `gastos_categoria`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
