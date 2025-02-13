-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2024 a las 02:18:25
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `siyeca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conexion`
--

CREATE TABLE `conexion` (
  `usuario` varchar(50) NOT NULL,
  `password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `no_empleado` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `edad` tinyint(4) NOT NULL,
  `curp` varchar(18) NOT NULL,
  `num_tel` varchar(10) NOT NULL,
  `nacionalidad` varchar(20) NOT NULL,
  `genero` varchar(1) NOT NULL,
  `dirreccion` varchar(1000) NOT NULL,
  `profesion` varchar(25) NOT NULL,
  `ocupacion` varchar(25) NOT NULL,
  `tipo_de_sangre` varchar(3) NOT NULL,
  `rfc` varchar(13) NOT NULL,
  `estado_civil` varchar(12) NOT NULL,
  `tel_emergencia` varchar(10) NOT NULL,
  `dependencia` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`no_empleado`, `nombre`, `edad`, `curp`, `num_tel`, `nacionalidad`, `genero`, `dirreccion`, `profesion`, `ocupacion`, `tipo_de_sangre`, `rfc`, `estado_civil`, `tel_emergencia`, `dependencia`) VALUES
(1, '    Gabriela Hernández Mendoza', 32, '    asdfghjkloiuyt', '7352345678', 'Extranjero', 'H', 'jajajajajajja', '    loca    ', '    caca    ', 'A+', '    asdadsded', 'divorciado', '7356789012', 'Registro civil'),
(2, 'matas', 18, 'fdg45y5hgfb h6nu6u', '1234567890', 'Mexicano', 'H', 'Av. Juárez 707, Col. La Candelaria, C.P. 62989, Yecapixtla, Morelos', 'mesero', 'Planificar', 'A+', 'ertyuiokjhgfv', 'soltero', '1234567890', 'Obras publicas'),
(3, 'gdgreg', 18, 'fdg45y5hgfb h6nu6u', '1234567890', 'Mexicano', 'M', 'Av. Juárez 707, Col. La Candelaria, C.P. 62989, Yecapixtla, Morelos', 'Secretario General', 'mesero', 'A+', 'ertyuiokjhgfv', 'divorciado', '1234567890', 'Obras publicas'),
(5, 'Ana María González ', 36, 'GOLA980725MDFNNNA0', '7351234567', '', '', 'Calle Morelos 123, Col. Centro, C.P. 62980, Yecapixtla, Morelos', 'Obras Públicas', 'Planificar', 'B+', 'GOLA980725D79', '', '7355432109', 'obras publicas'),
(6, 'Patricia Sánchez Morales', 34, 'SAMT850620MDFCPR00', '7353456789', 'mexicano', 'M', 'Av. Benito Juárez 456, Col. San Isidro, C.P. 62981, Yecapixtla, Morelos', 'Desarrollo Urbano', 'Planificar', 'A+', 'SAMT850620J41', 'devorciado', '7351234567', 'obras publicas'),
(7, 'rodrigo Aneraaaa', 18, 'fdg45y5hgfb h6nu6u', '1234567890', 'Mexicano', 'H', 'Lunes-Martes', 'Secretario General', 'Planificar', 'A+', 'ertyuiokjhgfv', 'soltero', '1234567689', 'Obras publicas'),
(8, 'Verónica Torres Ávila', 54, 'TOVA820115MDFVNC00', '7353456789', 'Mexicano', 'M', 'Calle Emiliano Zapata 789, Col. La Joya, C.P. 62982, Yecapixtla, Morelos', 'Ingeniero Civil', 'Planificar', 'B-', 'TOVA820115N26', 'casado', '7359870543', 'obras publicas'),
(9, 'Ricardo Pérez Salazar', 43, 'PESR760309HDFRCR00', '7359876543', 'mexicano', 'H', 'Calle Juárez 101, Col. La Soledad, C.P. 62983, Yecapixtla, Morelos', 'Arquitecto', 'Planificar', 'B-', 'PESR760309A47', 'casado', '7352345678', 'obras publicas'),
(10, 'Gabriela Hernández Mendoza', 43, 'HEMG940726MDFNRB00', '7352345678', 'Mexicano', 'O', 'Calle Hidalgo 202, Col. El Paraíso, C.P. 62984, Yecapixtla, Morelos', 'Arquitecto', 'Planificar', 'B+', 'HEMG940726M25', 'divorciado', '7356789012', 'obras publicas'),
(11, 'Javier López Castillo', 52, 'LOCJ910204HDFLJV00', '7350987654', 'mexicano', 'H', 'Av. de la Revolución 303, Col. El Arbolito, C.P. 62985, Yecapixtla, Morelos', 'Protección Civil', 'Planificar', 'A+', 'LOCJ910204H54', 'soltero', '7358901234', 'proteccion civil'),
(12, 'José Martínez Pérez', 43, 'MAPJ790123HDFJRS00', '7358765432', 'Mexicano', 'H', 'Calle de la Paz 404, Col. El Rosario, C.P. 62986, Yecapixtla, Morelos', 'Servicios Públicos', 'Planificar', 'A+', 'MAPJ790123B10', 'casado', '7356789012', 'servicios publicos'),
(13, 'Carlos Alberto García Ramírez', 23, 'GARC800905HDFRRL00', '7356543210', 'mexicano', 'H', 'Calle 5 de Febrero 505, Col. San Miguel, C.P. 62987, Yecapixtla, Morelos', 'Desarrollo Social', 'Planificar', 'A+', 'GARC800905N00', 'casado', '7353456789', 'desarrollo social'),
(14, 'Carlos Alberto Ramirez', 31, 'LORC890715HDFLRC02', '7352079870', 'mexicano', 'H', 'Av. Juárez 707, Col. La Candelaria, C.P. 62989, Yecapixtla, Morelos', 'Secretario General', 'Planificar', 'A+', 'LORC890715R12', 'casado', '7354567890', 'secretario'),
(145, 'rodrigo', 18, 'fdg45y5hgfb h6nu6u', '1234567890', 'Extranjero', 'M', 'Av. Juárez 707, Col. La Candelaria, C.P. 62989, Yecapixtla, Morelos', 'mesero', 'mesero', 'AB-', 'ertyuiokjhgfh', 'viudo', '1111111111', 'Registro civil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obras_publicas`
--

CREATE TABLE `obras_publicas` (
  `hora_entrada` time DEFAULT NULL,
  `hora_salida` time DEFAULT NULL,
  `sueldo_quincenal` decimal(8,2) DEFAULT NULL,
  `fecha_pago` date DEFAULT NULL,
  `forma_pago` varchar(15) DEFAULT NULL,
  `tipo_banco` varchar(15) DEFAULT NULL,
  `dias_laborales` varchar(15) DEFAULT NULL,
  `fecha_ingreso` datetime DEFAULT NULL,
  `identificador_nomina` int(11) NOT NULL,
  `no_empleado` int(11) DEFAULT NULL,
  `actividades` varchar(45) DEFAULT NULL COMMENT 'agrega las actividades que realiza el empledo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `obras_publicas`
--

INSERT INTO `obras_publicas` (`hora_entrada`, `hora_salida`, `sueldo_quincenal`, `fecha_pago`, `forma_pago`, `tipo_banco`, `dias_laborales`, `fecha_ingreso`, `identificador_nomina`, `no_empleado`, `actividades`) VALUES
('10:16:51', '20:16:51', 50000.00, '2024-09-05', 'transferencia', 'banamex', 'lunes-viernes', '2024-09-05 20:16:51', 2, 2, 'hacerte wey');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios_publicos`
--

CREATE TABLE `servicios_publicos` (
  `hora_entrada` time DEFAULT NULL,
  `hora_salida` time DEFAULT NULL,
  `sueldo_quincenal` decimal(8,2) DEFAULT NULL,
  `fecha_pago` date DEFAULT NULL,
  `forma_pago` varchar(15) DEFAULT NULL,
  `tipo_banco` varchar(15) DEFAULT NULL,
  `dias_laborales` varchar(15) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `Actividades` varchar(45) DEFAULT NULL,
  `identificador_nomina` int(11) NOT NULL,
  `no_empleado` int(11) DEFAULT NULL,
  `ingreso` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicios_publicos`
--

INSERT INTO `servicios_publicos` (`hora_entrada`, `hora_salida`, `sueldo_quincenal`, `fecha_pago`, `forma_pago`, `tipo_banco`, `dias_laborales`, `fecha_ingreso`, `Actividades`, `identificador_nomina`, `no_empleado`, `ingreso`) VALUES
('17:59:00', '19:49:00', 1000.00, '2024-12-13', 'Transferencia', 'banamex', 'lunes-jjuju', '2024-12-14', 'muchas cosas jajajajajaja', 5, 5, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`no_empleado`);

--
-- Indices de la tabla `obras_publicas`
--
ALTER TABLE `obras_publicas`
  ADD PRIMARY KEY (`identificador_nomina`),
  ADD KEY `no_empleado` (`no_empleado`);

--
-- Indices de la tabla `servicios_publicos`
--
ALTER TABLE `servicios_publicos`
  ADD PRIMARY KEY (`identificador_nomina`),
  ADD KEY `no_empleado` (`no_empleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `no_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT de la tabla `obras_publicas`
--
ALTER TABLE `obras_publicas`
  MODIFY `identificador_nomina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `servicios_publicos`
--
ALTER TABLE `servicios_publicos`
  MODIFY `identificador_nomina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `obras_publicas`
--
ALTER TABLE `obras_publicas`
  ADD CONSTRAINT `obras_publicas_ibfk_1` FOREIGN KEY (`no_empleado`) REFERENCES `empleados` (`no_empleado`);

--
-- Filtros para la tabla `servicios_publicos`
--
ALTER TABLE `servicios_publicos`
  ADD CONSTRAINT `servicios_publicos_ibfk_1` FOREIGN KEY (`no_empleado`) REFERENCES `empleados` (`no_empleado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
