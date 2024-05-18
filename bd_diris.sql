-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2024 a las 04:36:27
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_diris`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acceso`
--

CREATE TABLE `acceso` (
  `id_acceso` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `acceso`
--

INSERT INTO `acceso` (`id_acceso`, `id_usuario`, `usuario`, `password`) VALUES
(1, 1, 'dante123@gmail.com', '123456'),
(2, 2, 'Kevin123@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docmt`
--

CREATE TABLE `docmt` (
  `id_documento` int(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `oficina` varchar(100) NOT NULL,
  `unidad` varchar(100) NOT NULL,
  `anio` int(4) NOT NULL,
  `documento` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `docmt`
--

INSERT INTO `docmt` (`id_documento`, `nombre`, `descripcion`, `oficina`, `unidad`, `anio`, `documento`) VALUES
(1, 'Dante', 'sadas', 'ABASTECIMIENTO', 'opcion1', 2015, 'ABASTECIMIENTO_opcion1_2015.docx'),
(2, 'Dante', 'prueba2', 'ABASTECIMIENTO', 'opcion1', 2015, 'ABASTECIMIENTO_opcion1_2015.docx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `id_documento` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `oficina` varchar(25) NOT NULL,
  `unidad` varchar(25) NOT NULL,
  `anio` int(4) NOT NULL,
  `documento` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `documento`
--

INSERT INTO `documento` (`id_documento`, `nombre`, `descripcion`, `oficina`, `unidad`, `anio`, `documento`) VALUES
(1, 'Luis', 'desc 1', 'ABASTECIMIENTO', 'opcion1', 2023, 'ABASTECIMIENTO_opcion1_2023.pdf'),
(2, 'Luis', 'desc 1', 'DIRECCION GENERAL', 'opcion4', 2022, 'DIRECCION GENERAL_opcion4_2022.pdf'),
(3, 'Luis', 'desc 1', 'ABASTECIMIENTO', 'opcion1', 2020, 'ABASTECIMIENTO_opcion1_2020.docx'),
(4, 'Luis', 'prueba', 'ABASTECIMIENTO', 'opcion1', 2021, 'ABASTECIMIENTO_opcion1_2021.pdf'),
(5, 'Luis', 'knmkn', 'ABASTECIMIENTO', 'opcion1', 2020, 'ABASTECIMIENTO_opcion1_2020.pdf'),
(6, 'Luis', 'C/P', 'TESORERIA', 'opcion2', 2018, 'TESORERIA_opcion2_2018.xlsx'),
(7, 'Luis', 'INFORME N°27', 'ABASTECIMIENTO', 'opcion1', 2016, 'ABASTECIMIENTO_opcion1_2016.pdf'),
(8, 'Luis', 'INFORME N° 27', 'DIRECCION GENERAL', 'opcion3', 2016, 'DIRECCION GENERAL_opcion3_2016.pdf'),
(9, 'Dante', 'prueba', 'TESORERIA', 'opcion6', 2020, 'TESORERIA_opcion6_2020.pdf'),
(10, 'Dante', 'prueba', 'ABASTECIMIENTO', 'Unidad funcional de progr', 2017, 'ABASTECIMIENTO_Unidad funcional de programacion_2017.xlsx'),
(11, 'Dante', 'prueba', 'ABASTECIMIENTO', ' programacion', 2021, 'ABASTECIMIENTO_ programacion_2021.xlsx'),
(12, 'Dante', 'prueba', 'ABASTECIMIENTO', 'patrimonio', 2021, 'ABASTECIMIENTO_patrimonio_2021.pdf'),
(13, 'Dante', 'prueba', 'ABASTECIMIENTO', ' programacion', 2015, 'ABASTECIMIENTO_ programacion_2015.pdf'),
(14, 'Dante', 'prueba', 'TESORERIA', 'Recaudacion', 2015, 'TESORERIA_Recaudacion_2015.xlsx'),
(15, 'Dante', 'prueba', 'ABASTECIMIENTO', 'adquisiciones', 2016, 'ABASTECIMIENTO_adquisiciones_2016.xlsx'),
(16, 'Dante', 'rvfrvfr', 'ABASTECIMIENTO', '', 2015, 'ABASTECIMIENTO__2015.pdf'),
(17, 'Dante', 'prueba100', 'ABASTECIMIENTO', 'opcion1', 2015, 'ABASTECIMIENTO_opcion1_2015.docx'),
(18, 'Dante', 'prueba101', 'ABASTECIMIENTO', 'UNIDAD FUNCIONAL DE PROGR', 2020, 'ABASTECIMIENTO_UNIDAD FUNCIONAL DE PROGRAMACION_2020.docx'),
(19, 'Dante', 'prueba1', 'ABASTECIMIENTO', 'opcion1', 2015, 'ABASTECIMIENTO_opcion1_2015.docx'),
(20, 'Dante', 'asdas', 'TESORERIA', 'opcion2', 2015, 'TESORERIA_opcion2_2015.docx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id_permiso` int(11) NOT NULL,
  `nom_permiso` varchar(50) NOT NULL,
  `reg_usu` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id_permiso`, `nom_permiso`, `reg_usu`) VALUES
(1, 'administrador', 1),
(2, 'Visualizacion', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `dni` int(8) NOT NULL,
  `edad` int(100) DEFAULT NULL,
  `genero` varchar(25) DEFAULT NULL,
  `correo` varchar(100) NOT NULL,
  `estado` int(1) NOT NULL,
  `fecha_crea` datetime NOT NULL,
  `fecha_edita` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `dni`, `edad`, `genero`, `correo`, `estado`, `fecha_crea`, `fecha_edita`) VALUES
(1, 'Dante', 'Rios', 71393545, 25, 'Masculino', 'dante123@gmail.com', 1, '2024-05-01 23:08:11', NULL),
(2, 'Kevin', 'rizabal ', 7536412, 25, 'Masculino', 'kevin123@gmail.com', 0, '2024-05-07 06:00:11', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_permiso`
--

CREATE TABLE `usuario_permiso` (
  `id_usuario_permiso` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_permiso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario_permiso`
--

INSERT INTO `usuario_permiso` (`id_usuario_permiso`, `id_usuario`, `id_permiso`) VALUES
(1, 1, 1),
(2, 2, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acceso`
--
ALTER TABLE `acceso`
  ADD PRIMARY KEY (`id_acceso`),
  ADD KEY `fk_id_usu` (`id_usuario`);

--
-- Indices de la tabla `docmt`
--
ALTER TABLE `docmt`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id_permiso`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `usuario_permiso`
--
ALTER TABLE `usuario_permiso`
  ADD PRIMARY KEY (`id_usuario_permiso`),
  ADD KEY `fk_id_per` (`id_permiso`),
  ADD KEY `fk_id_usua` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acceso`
--
ALTER TABLE `acceso`
  MODIFY `id_acceso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `docmt`
--
ALTER TABLE `docmt`
  MODIFY `id_documento` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
  MODIFY `id_documento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_permiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario_permiso`
--
ALTER TABLE `usuario_permiso`
  MODIFY `id_usuario_permiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acceso`
--
ALTER TABLE `acceso`
  ADD CONSTRAINT `fk_id_usu` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `usuario_permiso`
--
ALTER TABLE `usuario_permiso`
  ADD CONSTRAINT `fk_id_per` FOREIGN KEY (`id_permiso`) REFERENCES `permisos` (`id_permiso`),
  ADD CONSTRAINT `fk_id_usua` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
