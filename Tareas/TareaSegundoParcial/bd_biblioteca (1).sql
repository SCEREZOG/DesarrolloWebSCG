-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 16-11-2024 a las 03:10:33
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id` int NOT NULL,
  `carrera` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id`, `carrera`) VALUES
(26, 'INFORMATICA '),
(35, 'INGENIERIA DE SISTEMAS'),
(111, 'INGENIERIA EN CIENCAS DE LA COMPUTACION\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editoriales`
--

CREATE TABLE `editoriales` (
  `id` int NOT NULL,
  `editorial` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Volcado de datos para la tabla `editoriales`
--

INSERT INTO `editoriales` (`id`, `editorial`) VALUES
(1, 'Castellana'),
(2, 'Bolivia'),
(3, 'Santillana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int NOT NULL,
  `imagen` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `titulo` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `autor` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `ideditorial` int NOT NULL,
  `anio` int NOT NULL,
  `idusuario` int DEFAULT NULL,
  `idcarrera` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `imagen`, `titulo`, `autor`, `ideditorial`, `anio`, `idusuario`, `idcarrera`) VALUES
(1, 'introduccioinformatica.jpg', 'Introduccion a la Informatica', 'Michael Miller', 2, 1992, 0, 1),
(2, 'arquitecturacomputadoras.jpg', 'Aruitectura de Computadoras', 'Patricio Quiroga', 2, 4988, 0, 1),
(3, 'CursoAndroid.jpg', 'Curso Android', 'Maestros del WEB', 1, 8777, 0, 2),
(4, 'bigdata.jpg', 'Bigdata', 'Marcombo', 2, 41, 0, 2),
(5, 'ScrumIngenieriaSoftware.jpg', 'Scrum Ingenieria de Software', 'Dario Palminio', 2, 2015, 0, 3),
(64, 'la vida.jpg', 'la vida', 'romeo', 2, 1239, NULL, 35);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `id` int NOT NULL,
  `idlibro` int NOT NULL,
  `nombreprestamo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` smallint NOT NULL,
  `usuario` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `nombrecompleto` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `cu` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `idcarrera` int NOT NULL,
  `nivel` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `nombrecompleto`, `cu`, `idcarrera`, `nivel`) VALUES
(1, 'admin@biblioteca.usfx.bo', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Administrador sistema', '35-0', 35, 1),
(2, 'carlosmontellano@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Carlos Montellano', '35-239', 35, 0),
(3, 'Irure est explicabo', 'ce6bcac8b59ff1a91a938d76beca57ac09c926d6', 'Libero fugit esse ', 'Ipsum sint', 78, 31),
(4, 'correo', 'sha1(123)', 'Culpa quae harum ips', 'Libero nec', 0, 0),
(5, 'admin@biblioteca.usfx.bo', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Sed sint sunt expl', '', 0, 68),
(6, 'admin@biblioteca.usfx.bo', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Deleniti non sed sin', 'Ipsa et qu', 26, 0),
(7, '', '', '', '', 0, 0),
(8, 'admin@biblioteca.usfx.bo', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Debitis commodo enim', 'Eum qui au', 26, 1),
(9, 'Consequatur Et veri', '5860c9854553bfbe510ae6d0b9fc8c0406b2dfea', 'Minim non in volupta', 'Voluptate ', 90, 76),
(10, 'scerezo@gmail.com', '123456', 'soledad Cerezo Guzman ', '5-5130', 5645, 70);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `editoriales`
--
ALTER TABLE `editoriales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `editoriales`
--
ALTER TABLE `editoriales`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` smallint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
