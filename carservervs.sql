-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-07-2022 a las 05:38:08
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carservervs`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `splListarClientes` ()  BEGIN
	SELECT CEDULA, NOMBRE,APELLIDO, CELULAR,CORREO,PLACA 		FROM clientes;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spLogin` (IN `_USUARIO` VARCHAR(20), IN `_CLAVE` VARCHAR(20))  BEGIN
	SELECT  `USUARIO`, `CLAVE` FROM `iniciondesecion` WHERE 
            USUARIO = _USUARIO AND CLAVE = _CLAVE;
            
     
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `splRegistroClientes` (IN `_CEDULA` INT(20), IN `_NOMBRE` VARCHAR(20), IN `_APELLIDO` VARCHAR(20), IN `_CELULAR` VARCHAR(20), IN `_CORREO` VARCHAR(50), IN `_PLACA` VARCHAR(20))  BEGIN

	INSERT INTO `clientes`(`CEDULA`, `NOMBRE`, `APELLIDO`, `CELULAR`, `CORREO`, `PLACA`) VALUES (_CEDULA,_NOMBRE,_APELLIDO,_CELULAR,_CORREO,_PLACA);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `splRegistroEmpleados` (IN `_CEDULA` INT(20), IN `_NOMBRE` VARCHAR(100), IN `_APELLIDO` VARCHAR(100), IN `_CORREO` VARCHAR(100), IN `_CELULAR` INT(20), IN `_ROL` VARCHAR(100))  BEGIN

	INSERT INTO `empleados`(`CEDULA`, `NOMBRE`, `APELLIDO`, `CORREO`, `CELULAR`, `ROL`) VALUES (_CEDULA,_NOMBRE,_APELLIDO,_CORREO,_CELULAR,_ROL);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `splRegistroPlaca` (IN `_PLACA` VARCHAR(10), IN `_MARCA` VARCHAR(10), IN `_CILINDRAJE` INT(20), IN `_LINEA` VARCHAR(20), IN `_CLASE` VARCHAR(20), IN `_MODELO` INT(20), IN `_NUMERO_MOTOR` INT(50))  BEGIN

	INSERT INTO `vehiculo`(`PLACA`, `MARCA`, `CILINDRAJE`, `LINEA`, `CLASE`, `MODELO`, `NUMERO MOTOR`) VALUES(_PLACA,_MARCA,_CILINDRAJE,_LINEA,_CLASE,_MODELO,_NUMERO_MOTOR);
    
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `CEDULA` int(20) NOT NULL,
  `NOMBRE` varchar(20) NOT NULL,
  `APELLIDO` varchar(20) NOT NULL,
  `CELULAR` varchar(20) NOT NULL,
  `CORREO` varchar(50) NOT NULL,
  `PLACA` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`CEDULA`, `NOMBRE`, `APELLIDO`, `CELULAR`, `CORREO`, `PLACA`) VALUES
(0, '1', 'sierra', '1221332', 'se@gmail.com', '11'),
(1, 'seabs', 'fa', '11', '1', '2'),
(4, 'pepi', 'sierra', '1221332', 'se@gmail.com', '11'),
(6, '1', '2', '1221332', '1', '2'),
(12, '1', '11', '1221332', '1', '11'),
(674, 'estiven', 'marigp', '2131', 'dssds', '1w1'),
(11111, 'carlos', 'fanta', '124433', 'semdnes', '2wsa'),
(12324, 'pepi', 'estee', '11', 'erer.com', '1w1'),
(123243, '1', '2', '1221332', '1', '1qw'),
(123443, 'sebax', 'montes ', '3017807', 'sebmostes@misena.edu', 'glu 123'),
(345679, 'GUSTAVO', 'CANO', '350987987', 'gcano56@gmail.com', 'GOJ456'),
(1234433, 'sebax', 'montes ', '3017807', 'sebmostes@misena.edu.co', 'glu 123'),
(64520030, 'yendis', 'Montes', '3207299477', 'yani22@gmail.com', 'msm 131'),
(100032999, 'sebastian', 'montes', '3017807102', 'sebastinamontes@gmail.com', 'glu 123'),
(1016456765, 'Carolina', 'Taborda', '3002345678', 'ctabo@hotmail.com', 'KZV345'),
(1193600946, 'Aura', 'Luna', '3148775357', 'auracristina0812@gmail.com', 'qwew 13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `CEDULA` int(20) NOT NULL,
  `NOMBRE` varchar(100) NOT NULL,
  `APELLIDO` varchar(100) NOT NULL,
  `CORREO` varchar(100) NOT NULL,
  `CELULAR` int(20) NOT NULL,
  `ROL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`CEDULA`, `NOMBRE`, `APELLIDO`, `CORREO`, `CELULAR`, `ROL`) VALUES
(43254567, 'Lina', 'Cano', 'lcano@gmail.com', 2147483647, 'Asesora');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iniciondesecion`
--

CREATE TABLE `iniciondesecion` (
  `idUsuario` int(20) NOT NULL,
  `USUARIO` varchar(20) NOT NULL,
  `CLAVE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `iniciondesecion`
--

INSERT INTO `iniciondesecion` (`idUsuario`, `USUARIO`, `CLAVE`) VALUES
(1, 'sebas', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `PLACA` varchar(10) NOT NULL,
  `MARCA` varchar(20) NOT NULL,
  `CILINDRAJE` int(20) NOT NULL,
  `LINEA` varchar(20) NOT NULL,
  `CLASE` varchar(20) NOT NULL,
  `MODELO` int(20) NOT NULL,
  `NUMERO MOTOR` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`PLACA`, `MARCA`, `CILINDRAJE`, `LINEA`, `CLASE`, `MODELO`, `NUMERO MOTOR`) VALUES
('HKO453', 'CHEVROLET', 200, 'ONIX', 'AUTOMOVIL', 2021, 2309876);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`CEDULA`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`CEDULA`);

--
-- Indices de la tabla `iniciondesecion`
--
ALTER TABLE `iniciondesecion`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`PLACA`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `iniciondesecion`
--
ALTER TABLE `iniciondesecion`
  MODIFY `idUsuario` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
