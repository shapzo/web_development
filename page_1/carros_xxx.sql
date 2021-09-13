-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 13-09-2021 a las 19:23:28
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
  `Fecha` date NOT NULL,
  `Nombre` text NOT NULL,
  `E_mail` text NOT NULL,
  `No_Cuenta` int(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Clientes`
--

INSERT INTO `Clientes` (`Fecha`, `Nombre`, `E_mail`, `No_Cuenta`) VALUES
('2021-09-01', 'till', 'rodrigopalmagarcia15@gmail.com', 4561231),
('2021-09-04', 'ana', 'rodrigopalma98@outlook.com', 1234567),
('2021-09-09', 'rodrigo', 'rodrigopalma98@outlook.com', 9876543),
('2021-09-14', 'ana', 'rodrigopalmagarcia15@gmail.com', 456789),
('2021-09-15', 'haha', 'rodrigopalmagarcia15@gmail.com', 78965);

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
  ADD PRIMARY KEY (`Fecha`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
