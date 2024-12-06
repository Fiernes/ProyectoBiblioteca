-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2024 a las 17:24:02
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito_libros`
--

CREATE TABLE `carrito_libros` (
  `idCarrito` int(11) NOT NULL,
  `idLibro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito_prestamo`
--

CREATE TABLE `carrito_prestamo` (
  `idCarrito` int(11) NOT NULL,
  `cantidaLibros` int(11) DEFAULT NULL,
  `idEstudiante` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `idPersona` int(11) NOT NULL,
  `departamento` varchar(50) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `colonia` varchar(50) DEFAULT NULL,
  `numeroCasa` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idEmpleado` int(11) NOT NULL,
  `tipoEmpleado` varchar(50) DEFAULT NULL,
  `puesto` varchar(50) DEFAULT NULL,
  `departamento` varchar(50) DEFAULT NULL,
  `horarioLaboral` varchar(50) DEFAULT NULL,
  `idPersona` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idEmpleado`, `tipoEmpleado`, `puesto`, `departamento`, `horarioLaboral`, `idPersona`) VALUES
(1, 'Administrativo', 'Asistente Operativo 1', 'Estrategia laboral', '8:00 am - 3:00 pm', 2),
(2, 'Administrativo', 'Asistente operativo 2', 'Efectividad', '8:00 am - 3:00 pm', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado_rol`
--

CREATE TABLE `empleado_rol` (
  `idEmpleado` int(11) NOT NULL,
  `idRol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleado_rol`
--

INSERT INTO `empleado_rol` (`idEmpleado`, `idRol`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `idEstudiante` varchar(12) NOT NULL,
  `idPersona` int(11) DEFAULT NULL,
  `carrera` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`idEstudiante`, `idPersona`, `carrera`) VALUES
('20171031307', 1, 'informatica Administrativa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_prestamo`
--

CREATE TABLE `historial_prestamo` (
  `idPrestamo` int(11) NOT NULL,
  `fechaPrestamo` date DEFAULT NULL,
  `fechaDevolucion` date DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `idEstudiante` varchar(12) DEFAULT NULL,
  `idLibro` int(11) DEFAULT NULL,
  `idMulta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen_libro`
--

CREATE TABLE `imagen_libro` (
  `idLibro` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `contenido` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_contacto`
--

CREATE TABLE `info_contacto` (
  `idPersona` int(11) NOT NULL,
  `correoElectronico` varchar(50) DEFAULT NULL,
  `telefonoCasa` varchar(50) DEFAULT NULL,
  `telefonoPersonal` varchar(50) DEFAULT NULL,
  `telefonoPersonalDos` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `idLibro` int(11) NOT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL,
  `yearPublicacion` date DEFAULT NULL,
  `categoria` int(11) NOT NULL,
  `cantidadDisponible` int(11) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logs`
--

CREATE TABLE `logs` (
  `idLog` int(11) NOT NULL,
  `accion` text DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `idPersona` int(11) DEFAULT NULL,
  `detalleAccion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `multas`
--

CREATE TABLE `multas` (
  `idMulta` int(11) NOT NULL,
  `monto` double DEFAULT NULL,
  `fechaMulta` date DEFAULT NULL,
  `resumen` varchar(50) DEFAULT NULL,
  `pagada` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idPersona` int(11) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `primerNombre` varchar(50) DEFAULT NULL,
  `segundoNombre` varchar(50) DEFAULT NULL,
  `primerApellido` varchar(50) DEFAULT NULL,
  `segundoApellido` varchar(50) DEFAULT NULL,
  `DNI` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idPersona`, `usuario`, `password`, `primerNombre`, `segundoNombre`, `primerApellido`, `segundoApellido`, `DNI`) VALUES
(1, 'Fiernes', 'd9b1d7db4cd6e70935368a1efb10e377', 'Fidel', 'Ernesto', 'Gutierrez', 'Membreño', '0801199501590'),
(2, 'Wasani', 'd9b1d7db4cd6e70935368a1efb10e377', 'Adrian', 'Wasani', 'Martinez', 'Bonilla', '123'),
(3, 'Daniel', 'd9b1d7db4cd6e70935368a1efb10e377', 'Cristopher', 'Daniel', 'Valle', 'Canales', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRol` int(11) NOT NULL,
  `nombreRol` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRol`, `nombreRol`) VALUES
(1, 'Administrador'),
(2, 'Empleado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito_libros`
--
ALTER TABLE `carrito_libros`
  ADD PRIMARY KEY (`idCarrito`),
  ADD KEY `Carrito_Libros_idLibro_fk` (`idLibro`);

--
-- Indices de la tabla `carrito_prestamo`
--
ALTER TABLE `carrito_prestamo`
  ADD PRIMARY KEY (`idCarrito`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`idPersona`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idEmpleado`),
  ADD KEY `Empleado_idPersona_fk` (`idPersona`);

--
-- Indices de la tabla `empleado_rol`
--
ALTER TABLE `empleado_rol`
  ADD PRIMARY KEY (`idEmpleado`),
  ADD KEY `Empleado_Rol_idRol_fk` (`idRol`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`idEstudiante`),
  ADD KEY `Estudiante_idPersona_fk` (`idPersona`);

--
-- Indices de la tabla `historial_prestamo`
--
ALTER TABLE `historial_prestamo`
  ADD PRIMARY KEY (`idPrestamo`),
  ADD UNIQUE KEY `idMulta` (`idMulta`),
  ADD KEY `Historial_Prestamo_idEstudiante_fk` (`idEstudiante`),
  ADD KEY `Historial_Prestamo_idLibro_fk` (`idLibro`);

--
-- Indices de la tabla `imagen_libro`
--
ALTER TABLE `imagen_libro`
  ADD PRIMARY KEY (`idLibro`);

--
-- Indices de la tabla `info_contacto`
--
ALTER TABLE `info_contacto`
  ADD PRIMARY KEY (`idPersona`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`categoria`);

--
-- Indices de la tabla `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`idLog`),
  ADD KEY `Logs_idPersona_fk` (`idPersona`);

--
-- Indices de la tabla `multas`
--
ALTER TABLE `multas`
  ADD PRIMARY KEY (`idMulta`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idPersona`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito_libros`
--
ALTER TABLE `carrito_libros`
  ADD CONSTRAINT `Carrito_Libros_idLibro_fk` FOREIGN KEY (`idLibro`) REFERENCES `libros` (`idLibro`);

--
-- Filtros para la tabla `carrito_prestamo`
--
ALTER TABLE `carrito_prestamo`
  ADD CONSTRAINT `CarritoPrestamo_idCarrito_fk` FOREIGN KEY (`idCarrito`) REFERENCES `carrito_libros` (`idCarrito`);

--
-- Filtros para la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD CONSTRAINT `Direccion_idPersona_fk` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`);

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `Empleado_idPersona_fk` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`);

--
-- Filtros para la tabla `empleado_rol`
--
ALTER TABLE `empleado_rol`
  ADD CONSTRAINT `Empleado_Rol_idRol_fk` FOREIGN KEY (`idRol`) REFERENCES `roles` (`idRol`);

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `Estudiante_idPersona_fk` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`);

--
-- Filtros para la tabla `historial_prestamo`
--
ALTER TABLE `historial_prestamo`
  ADD CONSTRAINT `Historial_Prestamo_idEstudiante_fk` FOREIGN KEY (`idEstudiante`) REFERENCES `estudiante` (`idEstudiante`),
  ADD CONSTRAINT `Historial_Prestamo_idLibro_fk` FOREIGN KEY (`idLibro`) REFERENCES `libros` (`idLibro`);

--
-- Filtros para la tabla `imagen_libro`
--
ALTER TABLE `imagen_libro`
  ADD CONSTRAINT `ImagenLibro_idLibro_fk` FOREIGN KEY (`idLibro`) REFERENCES `libros` (`idLibro`);

--
-- Filtros para la tabla `info_contacto`
--
ALTER TABLE `info_contacto`
  ADD CONSTRAINT `InfoContacto_idPersona_fk` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`);

--
-- Filtros para la tabla `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `Logs_idPersona_fk` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`);

--
-- Filtros para la tabla `multas`
--
ALTER TABLE `multas`
  ADD CONSTRAINT `multa_idMulta_fk` FOREIGN KEY (`idMulta`) REFERENCES `historial_prestamo` (`idMulta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
