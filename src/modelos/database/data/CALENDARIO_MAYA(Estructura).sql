-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 26-02-2021 a las 22:09:30
-- Versión del servidor: 8.0.23-0ubuntu0.20.04.1
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `CALENDARIO_MAYA`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendariocholqij`
--

CREATE TABLE `calendariocholqij` (
  `id` int NOT NULL,
  `nahual` int NOT NULL,
  `energia` int NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendariohaab`
--

CREATE TABLE `calendariohaab` (
  `id` int NOT NULL,
  `nahual` int NOT NULL,
  `winal` int NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristicaNahual`
--

CREATE TABLE `caracteristicaNahual` (
  `idNahual` int NOT NULL,
  `caracteristica` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargador`
--

CREATE TABLE `cargador` (
  `nombre` varchar(10) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `rutaImagen` varchar(80) DEFAULT NULL,
  `id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorizar`
--

CREATE TABLE `categorizar` (
  `idHechoHistorico` int NOT NULL,
  `idCategoria` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `debilidad`
--

CREATE TABLE `debilidad` (
  `id` int NOT NULL,
  `debilidad` varchar(150) NOT NULL,
  `idNahual` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edicion`
--

CREATE TABLE `edicion` (
  `id` int NOT NULL,
  `username` varchar(35) NOT NULL,
  `idHechoHistorico` int NOT NULL,
  `fecha` date NOT NULL,
  `creacion` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `energia`
--

CREATE TABLE `energia` (
  `id` int NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `idImagen` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fortaleza`
--

CREATE TABLE `fortaleza` (
  `id` int NOT NULL,
  `fortaleza` varchar(150) NOT NULL,
  `idNahual` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hechohistorico`
--

CREATE TABLE `hechohistorico` (
  `id` int NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFinalizacion` date NOT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `descripcion` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion`
--

CREATE TABLE `informacion` (
  `id` int NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcionEscritorio` varchar(5000) DEFAULT NULL,
  `descripcionWeb` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nahual`
--

CREATE TABLE `nahual` (
  `id` int NOT NULL,
  `nombre` varchar(35) DEFAULT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFinalizacion` date NOT NULL,
  `idImagen` int DEFAULT NULL,
  `significado` varchar(100) DEFAULT NULL,
  `descripcion` varchar(5000) DEFAULT NULL,
  `nombreSp` varchar(35) DEFAULT NULL,
  `nombreYucateco` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutaimagen`
--

CREATE TABLE `rutaimagen` (
  `id` int NOT NULL,
  `categoria` varchar(30) DEFAULT NULL,
  `dirWeb` varchar(230) DEFAULT NULL,
  `dirEscritorio` varchar(230) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `significado`
--

CREATE TABLE `significado` (
  `id` int NOT NULL,
  `significado` varchar(200) NOT NULL,
  `idNahual` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `username` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `nacimiento` date DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `rol` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `winal`
--

CREATE TABLE `winal` (
  `id` int NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `dias` int DEFAULT NULL,
  `idImagen` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calendariocholqij`
--
ALTER TABLE `calendariocholqij`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Id_Nagual` (`nahual`),
  ADD KEY `FK_Id_Energia` (`energia`);

--
-- Indices de la tabla `calendariohaab`
--
ALTER TABLE `calendariohaab`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Id_Nahual` (`nahual`),
  ADD KEY `FK_Id_Winal` (`winal`);

--
-- Indices de la tabla `caracteristicaNahual`
--
ALTER TABLE `caracteristicaNahual`
  ADD PRIMARY KEY (`idNahual`,`caracteristica`);

--
-- Indices de la tabla `cargador`
--
ALTER TABLE `cargador`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorizar`
--
ALTER TABLE `categorizar`
  ADD KEY `FK_IDCATEGORIA_CATEGORIZAR_CATEGORIA` (`idCategoria`),
  ADD KEY `FK_IDHECHO_CATEGORIZAR_HECHOHISTORICO` (`idHechoHistorico`);

--
-- Indices de la tabla `debilidad`
--
ALTER TABLE `debilidad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_IDNAHUAL_DEBILIDAD_ID_NAHUAL` (`idNahual`);

--
-- Indices de la tabla `edicion`
--
ALTER TABLE `edicion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ID_TEMA` (`idHechoHistorico`),
  ADD KEY `FK_ID_USER_R` (`username`);

--
-- Indices de la tabla `energia`
--
ALTER TABLE `energia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_IDIMAGEN_ENERGIA_ID_IMAGEN` (`idImagen`);

--
-- Indices de la tabla `fortaleza`
--
ALTER TABLE `fortaleza`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_IDNAHUAL_FORTALEZA_ID_NAHUAL` (`idNahual`);

--
-- Indices de la tabla `hechohistorico`
--
ALTER TABLE `hechohistorico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `informacion`
--
ALTER TABLE `informacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nahual`
--
ALTER TABLE `nahual`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_IDIMAGEN_NAHUAL_ID_IMAGEN` (`idImagen`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rutaimagen`
--
ALTER TABLE `rutaimagen`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `significado`
--
ALTER TABLE `significado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_IDNAHUAL_CARACTERISTICA_ID_NAHUAL` (`idNahual`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`username`),
  ADD KEY `FK_ROL_ROLES` (`rol`);

--
-- Indices de la tabla `winal`
--
ALTER TABLE `winal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_IDIMAGEN_WINAL_ID_IMAGEN` (`idImagen`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calendariocholqij`
--
ALTER TABLE `calendariocholqij`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `calendariohaab`
--
ALTER TABLE `calendariohaab`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `debilidad`
--
ALTER TABLE `debilidad`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `edicion`
--
ALTER TABLE `edicion`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `energia`
--
ALTER TABLE `energia`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fortaleza`
--
ALTER TABLE `fortaleza`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hechohistorico`
--
ALTER TABLE `hechohistorico`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `informacion`
--
ALTER TABLE `informacion`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nahual`
--
ALTER TABLE `nahual`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rutaimagen`
--
ALTER TABLE `rutaimagen`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `significado`
--
ALTER TABLE `significado`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `winal`
--
ALTER TABLE `winal`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calendariocholqij`
--
ALTER TABLE `calendariocholqij`
  ADD CONSTRAINT `FK_Id_Energia` FOREIGN KEY (`energia`) REFERENCES `energia` (`id`),
  ADD CONSTRAINT `FK_Id_Nagual` FOREIGN KEY (`nahual`) REFERENCES `nahual` (`id`);

--
-- Filtros para la tabla `calendariohaab`
--
ALTER TABLE `calendariohaab`
  ADD CONSTRAINT `FK_Id_Nahual` FOREIGN KEY (`nahual`) REFERENCES `nahual` (`id`),
  ADD CONSTRAINT `FK_Id_Winal` FOREIGN KEY (`winal`) REFERENCES `winal` (`id`);

--
-- Filtros para la tabla `caracteristicaNahual`
--
ALTER TABLE `caracteristicaNahual`
  ADD CONSTRAINT `fk_caracteristicaNahual_idNahual` FOREIGN KEY (`idNahual`) REFERENCES `nahual` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `categorizar`
--
ALTER TABLE `categorizar`
  ADD CONSTRAINT `FK_IDCATEGORIA_CATEGORIZAR_CATEGORIA` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `FK_IDHECHO_CATEGORIZAR_HECHOHISTORICO` FOREIGN KEY (`idHechoHistorico`) REFERENCES `hechohistorico` (`id`);

--
-- Filtros para la tabla `debilidad`
--
ALTER TABLE `debilidad`
  ADD CONSTRAINT `FK_IDNAHUAL_DEBILIDAD_ID_NAHUAL` FOREIGN KEY (`idNahual`) REFERENCES `nahual` (`id`);

--
-- Filtros para la tabla `edicion`
--
ALTER TABLE `edicion`
  ADD CONSTRAINT `FK_ID_TEMA` FOREIGN KEY (`idHechoHistorico`) REFERENCES `hechohistorico` (`id`),
  ADD CONSTRAINT `FK_ID_USER_R` FOREIGN KEY (`username`) REFERENCES `usuario` (`username`);

--
-- Filtros para la tabla `energia`
--
ALTER TABLE `energia`
  ADD CONSTRAINT `FK_IDIMAGEN_ENERGIA_ID_IMAGEN` FOREIGN KEY (`idImagen`) REFERENCES `rutaimagen` (`id`);

--
-- Filtros para la tabla `fortaleza`
--
ALTER TABLE `fortaleza`
  ADD CONSTRAINT `FK_IDNAHUAL_FORTALEZA_ID_NAHUAL` FOREIGN KEY (`idNahual`) REFERENCES `nahual` (`id`);

--
-- Filtros para la tabla `nahual`
--
ALTER TABLE `nahual`
  ADD CONSTRAINT `FK_IDIMAGEN_NAHUAL_ID_IMAGEN` FOREIGN KEY (`idImagen`) REFERENCES `rutaimagen` (`id`);

--
-- Filtros para la tabla `significado`
--
ALTER TABLE `significado`
  ADD CONSTRAINT `FK_IDNAHUAL_CARACTERISTICA_ID_NAHUAL` FOREIGN KEY (`idNahual`) REFERENCES `nahual` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_ROL_ROLES` FOREIGN KEY (`rol`) REFERENCES `rol` (`id`);

--
-- Filtros para la tabla `winal`
--
ALTER TABLE `winal`
  ADD CONSTRAINT `FK_IDIMAGEN_WINAL_ID_IMAGEN` FOREIGN KEY (`idImagen`) REFERENCES `rutaimagen` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
