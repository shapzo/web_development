-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-09-2021 a las 02:40:36
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carros_xxx`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Clientes`
--

CREATE TABLE `Clientes` (
  `Id` int(4) NOT NULL,
  `Fecha` date NOT NULL,
  `Nombre` text NOT NULL,
  `E_mail` text NOT NULL,
  `No_Cuenta` int(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Clientes`
--

INSERT INTO `Clientes` (`Id`, `Fecha`, `Nombre`, `E_mail`, `No_Cuenta`) VALUES
(1, '2021-09-05', 'ramon', 'rodrigopalma98@outlook.com', 126987452),
(2, '2021-09-28', 'cvbn', 'cvbnm', 785421),
(3, '2021-09-21', 'juan', 'romeo', 784512),
(4, '2021-09-28', 'xcvbnm', 'xcvbnm', 85412),
(5, '2021-09-28', 'xcvbnm', 'xcvbnm', 85412),
(6, '2021-09-28', 'xcvbnm', 'xcvbnm', 85412),
(7, '2021-09-28', 'xcvbnm', 'xcvbnm', 85412),
(8, '2021-09-28', 'xcvbnm', 'xcvbnm', 85412),
(9, '2021-09-28', 'xcvbnm', 'xcvbnm', 85412),
(10, '2021-09-08', 'hon', 'vbnm', 8456123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Vehiculos`
--

CREATE TABLE `Vehiculos` (
  `Id` tinyint(4) DEFAULT NULL,
  `Tipo` varchar(9) DEFAULT NULL,
  `Marca` varchar(11) DEFAULT NULL,
  `Precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Vehiculos`
--

INSERT INTO `Vehiculos` (`Id`, `Tipo`, `Marca`, `Precio`) VALUES
(1, 'camioneta', 'Ford', 550000),
(2, 'camioneta', 'Tesla', 780000),
(3, 'camioneta', 'Cadillac', 800000),
(4, 'camioneta', 'Chevrolet', 470000),
(5, 'camioneta', 'Lmborghini', 980000),
(6, 'sport_car', 'Lamborghini', 1500000),
(7, 'sport_car', 'Ferrari', 1300000),
(8, 'sport_car', 'Koenigsegg', 2600000),
(9, 'sport_car', 'Porshe', 1900000),
(10, 'sport_car', 'McLaren', 2200000),
(11, 'tuniado', 'Nissan', 150000),
(12, 'tuniado', 'Voltswagen', 90000),
(13, 'tuniado', 'Honda', 40000),
(14, 'tuniado', 'Subaru', 175000),
(15, 'tuniado', 'Mitsubishi', 50000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Clientes`
--
ALTER TABLE `Clientes`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Clientes`
--
ALTER TABLE `Clientes`
  MODIFY `Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
