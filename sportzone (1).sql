-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2025 a las 20:40:47
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
-- Base de datos: `sportzone`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `fecha` int(14) NOT NULL,
  `id_grupo` int(14) NOT NULL,
  `estado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id_cargo` int(14) NOT NULL,
  `nombre_cargo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `id_clase` int(14) NOT NULL,
  `id_horario` int(14) NOT NULL,
  `id_grupo` int(14) NOT NULL,
  `nombre_clase` varchar(30) DEFAULT NULL,
  `descripcion` varchar(30) DEFAULT NULL,
  `id_instructor` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprobante_pago`
--

CREATE TABLE `comprobante_pago` (
  `id_comprobante_pago` int(14) NOT NULL,
  `monto_total` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `cedula` int(14) NOT NULL,
  `nombre_1` varchar(30) DEFAULT NULL,
  `nombre_2` varchar(30) DEFAULT NULL,
  `apellido_1` varchar(30) DEFAULT NULL,
  `apellido_2` varchar(30) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `telefono_contacto` varchar(15) DEFAULT NULL,
  `direccion` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `id_cargo` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eps`
--

CREATE TABLE `eps` (
  `id_eps` int(14) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `documento` int(14) NOT NULL,
  `nombre_1` varchar(30) DEFAULT NULL,
  `apellido_1` varchar(30) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `nombre_contacto` varchar(30) DEFAULT NULL,
  `telefono_contacto` varchar(15) DEFAULT NULL,
  `id_eps` int(14) DEFAULT NULL,
  `id_grupo_nivel` int(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id_grupo` int(14) NOT NULL,
  `descripcion` varchar(30) DEFAULT NULL,
  `id_grupo_nivel` int(14) NOT NULL,
  `documento` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos_nivel`
--

CREATE TABLE `grupos_nivel` (
  `id_grupo_nivel` int(14) NOT NULL,
  `nombre_grupo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id_horario` int(14) NOT NULL,
  `dia` varchar(30) DEFAULT NULL,
  `hora_inicio` time DEFAULT NULL,
  `hora_final` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciones`
--

CREATE TABLE `inscripciones` (
  `id_inscripcion` int(14) NOT NULL,
  `fecha_inscripcion` int(14) NOT NULL,
  `id_comprobante_pago` int(14) NOT NULL,
  `documento` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructores`
--

CREATE TABLE `instructores` (
  `id_instructor` int(14) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE `modulos` (
  `id_modulo` int(14) NOT NULL,
  `nombre_modulo` varchar(30) DEFAULT NULL,
  `id_Usuario` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_sistema`
--

CREATE TABLE `usuarios_sistema` (
  `id_usuario` int(14) NOT NULL,
  `Cedula` int(14) NOT NULL,
  `login` varchar(30) DEFAULT NULL,
  `contraseña` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`fecha`),
  ADD KEY `id_grupo` (`id_grupo`);

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`id_clase`),
  ADD KEY `id_grupo` (`id_grupo`),
  ADD KEY `id_instructor` (`id_instructor`),
  ADD KEY `id_horario` (`id_horario`);

--
-- Indices de la tabla `comprobante_pago`
--
ALTER TABLE `comprobante_pago`
  ADD PRIMARY KEY (`id_comprobante_pago`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`cedula`),
  ADD KEY `fk_id_cargo` (`id_cargo`);

--
-- Indices de la tabla `eps`
--
ALTER TABLE `eps`
  ADD PRIMARY KEY (`id_eps`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`documento`),
  ADD KEY `id_grupo_nivel` (`id_grupo_nivel`),
  ADD KEY `id_eps` (`id_eps`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id_grupo`),
  ADD KEY `documento` (`documento`),
  ADD KEY `id_grupo_nivel` (`id_grupo_nivel`);

--
-- Indices de la tabla `grupos_nivel`
--
ALTER TABLE `grupos_nivel`
  ADD PRIMARY KEY (`id_grupo_nivel`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id_horario`);

--
-- Indices de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD PRIMARY KEY (`id_inscripcion`),
  ADD KEY `id_comprobante` (`id_comprobante_pago`),
  ADD KEY `fk_documento` (`documento`);

--
-- Indices de la tabla `instructores`
--
ALTER TABLE `instructores`
  ADD PRIMARY KEY (`id_instructor`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`id_modulo`),
  ADD KEY `id_Usuario` (`id_Usuario`);

--
-- Indices de la tabla `usuarios_sistema`
--
ALTER TABLE `usuarios_sistema`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_cedula` (`Cedula`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `asistencia_ibfk_1` FOREIGN KEY (`id_grupo`) REFERENCES `grupos` (`id_grupo`);

--
-- Filtros para la tabla `clases`
--
ALTER TABLE `clases`
  ADD CONSTRAINT `clases_ibfk_1` FOREIGN KEY (`id_grupo`) REFERENCES `grupos` (`id_grupo`),
  ADD CONSTRAINT `clases_ibfk_2` FOREIGN KEY (`id_instructor`) REFERENCES `instructores` (`id_instructor`),
  ADD CONSTRAINT `clases_ibfk_3` FOREIGN KEY (`id_horario`) REFERENCES `horarios` (`id_horario`);

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `fk_id_cargo` FOREIGN KEY (`id_cargo`) REFERENCES `cargos` (`id_cargo`);

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `estudiantes_ibfk_2` FOREIGN KEY (`id_grupo_nivel`) REFERENCES `grupos_nivel` (`id_grupo_nivel`),
  ADD CONSTRAINT `estudiantes_ibfk_3` FOREIGN KEY (`id_eps`) REFERENCES `eps` (`id_eps`);

--
-- Filtros para la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD CONSTRAINT `grupos_ibfk_1` FOREIGN KEY (`documento`) REFERENCES `estudiantes` (`documento`),
  ADD CONSTRAINT `grupos_ibfk_2` FOREIGN KEY (`id_grupo_nivel`) REFERENCES `grupos_nivel` (`id_grupo_nivel`);

--
-- Filtros para la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD CONSTRAINT `fk_documento` FOREIGN KEY (`documento`) REFERENCES `estudiantes` (`documento`),
  ADD CONSTRAINT `inscripciones_ibfk_1` FOREIGN KEY (`id_comprobante_pago`) REFERENCES `comprobante_pago` (`id_comprobante_pago`);

--
-- Filtros para la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD CONSTRAINT `modulos_ibfk_1` FOREIGN KEY (`id_Usuario`) REFERENCES `usuarios_sistema` (`id_usuario`);

--
-- Filtros para la tabla `usuarios_sistema`
--
ALTER TABLE `usuarios_sistema`
  ADD CONSTRAINT `fk_cedula` FOREIGN KEY (`Cedula`) REFERENCES `empleados` (`cedula`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
