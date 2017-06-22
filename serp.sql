-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2017 a las 18:50:17
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `serp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cabina`
--

CREATE TABLE `cabina` (
  `numero` int(11) NOT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cabina`
--

INSERT INTO `cabina` (`numero`, `estado`) VALUES
(1, 22000),
(2, 20000),
(3, 20000),
(4, 20000),
(5, 20000),
(6, 20000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id_cargo` int(11) NOT NULL,
  `nombre_cargo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `nombre_cargo`) VALUES
(1, 'Recaudador'),
(2, 'Tesorero'),
(3, 'Coordinador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cierre`
--

CREATE TABLE `cierre` (
  `id` int(11) NOT NULL,
  `cabina` int(11) NOT NULL,
  `recaudador` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `cierre` float NOT NULL,
  `declarado` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cierre`
--

INSERT INTO `cierre` (`id`, `cabina`, `recaudador`, `fecha`, `hora`, `cierre`, `declarado`) VALUES
(2, 1, 23862979, '2017-06-21', '04:25:33', 30000, 22300);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exento`
--

CREATE TABLE `exento` (
  `id_exento` int(11) NOT NULL,
  `nombre_exento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `cedula` int(9) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `contrasenia` char(250) COLLATE utf8_spanish2_ci NOT NULL,
  `nro_cabina` int(2) NOT NULL DEFAULT '0',
  `cargo_id` int(11) NOT NULL,
  `recaudadoradmin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`cedula`, `nombre`, `apellido`, `usuario`, `contrasenia`, `nro_cabina`, `cargo_id`, `recaudadoradmin`) VALUES
(23862976, 'wilmer', 'padilla', 'wilmer', '1234', 1, 1, 0),
(23862979, 'william', 'padilla', 'william', '0', 2, 2, 1234);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_registro` int(11) NOT NULL,
  `id_tipo_vehiculo` int(11) NOT NULL,
  `id_recaudador` int(11) NOT NULL,
  `nro_cabina` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_registro`, `id_tipo_vehiculo`, `id_recaudador`, `nro_cabina`, `fecha`, `hora`) VALUES
(1, 2, 23862979, 1, '2017-06-13', '03:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_exento`
--

CREATE TABLE `registro_exento` (
  `id_registro_exento` int(11) NOT NULL,
  `nombre_exento` int(11) NOT NULL,
  `placa` varchar(10) NOT NULL,
  `recaudador` int(11) NOT NULL,
  `nro_cabina` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabulador`
--

CREATE TABLE `tabulador` (
  `id_tabulador` int(11) NOT NULL,
  `tipo_vehiculo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `tarifa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tabulador`
--

INSERT INTO `tabulador` (`id_tabulador`, `tipo_vehiculo`, `tarifa`) VALUES
(1, 'Vehículos por puesto', 50),
(2, 'Motos a partir de 500 cc', 100),
(3, 'Vehículos livianos y micro buses', 100),
(4, 'Taxi', 100),
(5, 'Buses colectivos', 300),
(6, 'Camión 350 2 ejes', 500),
(7, 'Camión 750', 600),
(8, 'Buses expresos', 1000),
(9, 'Vehículos pesados 3 ejes', 1000),
(10, 'Vehículos pesados 4 ejes', 1500),
(11, 'Vehículos pesados 5 ejes o más', 2000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `total_declarado`
--

CREATE TABLE `total_declarado` (
  `id_total_declarado` int(11) NOT NULL,
  `monto_declarado` float NOT NULL,
  `operador` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `total_declarado`
--

INSERT INTO `total_declarado` (`id_total_declarado`, `monto_declarado`, `operador`, `fecha`, `hora`) VALUES
(1, 150352, 23862976, '2017-06-21', '2017-06-21 13:50:18'),
(2, 654321, 23862979, '2017-06-28', '2017-06-22 14:05:10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cabina`
--
ALTER TABLE `cabina`
  ADD PRIMARY KEY (`numero`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `cierre`
--
ALTER TABLE `cierre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cabina` (`cabina`),
  ADD KEY `id_recaudador` (`recaudador`);

--
-- Indices de la tabla `exento`
--
ALTER TABLE `exento`
  ADD PRIMARY KEY (`id_exento`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`cedula`),
  ADD KEY `id_cargo` (`cargo_id`),
  ADD KEY `cabina_num` (`nro_cabina`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_registro`),
  ADD KEY `recaudador` (`id_recaudador`),
  ADD KEY `tipo_vehiculo` (`id_tipo_vehiculo`),
  ADD KEY `cabina` (`nro_cabina`);

--
-- Indices de la tabla `registro_exento`
--
ALTER TABLE `registro_exento`
  ADD PRIMARY KEY (`id_registro_exento`),
  ADD KEY `exento` (`nombre_exento`);

--
-- Indices de la tabla `tabulador`
--
ALTER TABLE `tabulador`
  ADD PRIMARY KEY (`id_tabulador`);

--
-- Indices de la tabla `total_declarado`
--
ALTER TABLE `total_declarado`
  ADD PRIMARY KEY (`id_total_declarado`),
  ADD KEY `operador` (`operador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `cierre`
--
ALTER TABLE `cierre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `exento`
--
ALTER TABLE `exento`
  MODIFY `id_exento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `registro_exento`
--
ALTER TABLE `registro_exento`
  MODIFY `id_registro_exento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tabulador`
--
ALTER TABLE `tabulador`
  MODIFY `id_tabulador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `total_declarado`
--
ALTER TABLE `total_declarado`
  MODIFY `id_total_declarado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cierre`
--
ALTER TABLE `cierre`
  ADD CONSTRAINT `id_recaudador` FOREIGN KEY (`recaudador`) REFERENCES `persona` (`cedula`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `cabina_num` FOREIGN KEY (`nro_cabina`) REFERENCES `cabina` (`numero`),
  ADD CONSTRAINT `id_cargo` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`id_cargo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `numero_cabina` FOREIGN KEY (`nro_cabina`) REFERENCES `cabina` (`numero`),
  ADD CONSTRAINT `recaudador` FOREIGN KEY (`id_recaudador`) REFERENCES `persona` (`cedula`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tipo_vehiculo` FOREIGN KEY (`id_tipo_vehiculo`) REFERENCES `tabulador` (`id_tabulador`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `registro_exento`
--
ALTER TABLE `registro_exento`
  ADD CONSTRAINT `exento` FOREIGN KEY (`nombre_exento`) REFERENCES `exento` (`id_exento`) ON DELETE CASCADE;

--
-- Filtros para la tabla `total_declarado`
--
ALTER TABLE `total_declarado`
  ADD CONSTRAINT `operador` FOREIGN KEY (`operador`) REFERENCES `persona` (`cedula`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
