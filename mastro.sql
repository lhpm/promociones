-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-09-2018 a las 01:26:29
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.1.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mastro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE `encuesta` (
  `id` int(11) NOT NULL,
  `nroencuesta` int(11) NOT NULL,
  `pregunta` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cliente` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `prioridad` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `encuesta` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `encuesta`
--

INSERT INTO `encuesta` (`id`, `nroencuesta`, `pregunta`, `cliente`, `prioridad`, `encuesta`) VALUES
(18, 1, 'PREGUNTA 1', 'CLIENTE 1', 'A', '001'),
(19, 2, 'PREGUNTA 2', 'CLIENTE 2', 'N', '002'),
(20, 3, 'PREGUNTA 3', 'CLIENTE 3', 'A', '003');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `id` int(11) NOT NULL,
  `nroorden` int(11) NOT NULL,
  `nombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `dni` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `residencia` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `trabajas` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `estudias` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `whatsapp` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`id`, `nroorden`, `nombres`, `apellidos`, `dni`, `residencia`, `trabajas`, `estudias`, `fecha_nacimiento`, `correo`, `whatsapp`, `created_at`) VALUES
(26, 9, 'Luis Hernando', 'MACHADO', '88251837', 'perezmillan', 'NO', 'SI', '2018-08-17', '00pp@hotmail.com', 1111111, '2018-08-11 23:00:14'),
(28, 2, 'Luis Hernando', 'MACHADO', '4353453254', 'ramallo', 'NO', 'SI', '2018-08-08', 'lhpm16@hotmail.com', 345345345, '2018-09-01 04:02:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `id` int(11) NOT NULL,
  `nrocampania` int(11) NOT NULL,
  `nropromocion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `detalle` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `prioridad` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_ini` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_fin` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`id`, `nrocampania`, `nropromocion`, `imagen`, `detalle`, `prioridad`, `fecha_ini`, `fecha_fin`, `cantidad`) VALUES
(15, 11, '1', 'img/Tulips.jpg', 'detalle', 'A', '2018-08-03', '2018-08-31', 11),
(16, 0, '11', 'img/Jellyfish.jpg', 'DETALLE IMAGEN', 'N', '2018-08-02', '2018-08-27', 33),
(17, 99878, 'adfgadfg', 'img/Penguins.jpg', 'DETALLE IMAGEN', 'A', '2018-08-07', '2018-08-19', 2),
(18, 4466, '23423434', 'img/Koala.jpg', 'DETALLE IMAGEN', 'A', '2018-08-16', '2018-08-26', 1),
(19, 345345, 'adfgadfg', 'img/trabajo1.jpg', 'DETALLE IMAGEN  DETALLE IMAGEN ', 'N', '2018-08-02', '2018-08-24', 2),
(20, 5, '4563456456', 'img/WhatsApp-1.png', 'DETALLE IMAGEN', 'A', '2018-08-16', '2018-08-31', 45);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repuestas`
--

CREATE TABLE `repuestas` (
  `id` int(11) NOT NULL,
  `nroencuesta` int(11) NOT NULL,
  `respuesta` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `semana` int(11) NOT NULL,
  `elegida` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `id_pregunta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `repuestas`
--

INSERT INTO `repuestas` (`id`, `nroencuesta`, `respuesta`, `semana`, `elegida`, `id_pregunta`) VALUES
(33, 1, 'OPCION 1', 1, 'FALSA', 18),
(34, 1, 'OPCION 2', 1, 'OK', 18),
(35, 1, 'OPCION 3', 1, 'FALSA', 18),
(36, 1, 'OPCION 4', 1, 'FALSA', 18),
(37, 2, 'RESPUESTA 1', 2, 'FALSA', 19),
(38, 2, 'RESPUESTA 2', 2, 'FALSA', 19),
(39, 2, 'RESPUESTA 3', 2, 'FALSA', 19),
(40, 2, 'RESPUESTA 4', 2, 'OK', 19),
(41, 3, 'OPCION NUMERO 1', 3, 'OK', 20),
(42, 3, 'OPCION NUMERO 2', 3, 'FALSA', 20),
(43, 3, 'OPCION NUMERO 3', 3, 'FALSA', 20),
(44, 3, 'OPCION NUMERO 4', 3, 'FALSA', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados`
--

CREATE TABLE `resultados` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `pregunta` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `respuesta` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `resultado` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `resultados`
--

INSERT INTO `resultados` (`id`, `usuario`, `pregunta`, `respuesta`, `resultado`, `created_at`) VALUES
(85, 'lhpm16@hotmail.com\r\n        </div>', 'PREGUNTA 3', 'OPCION NUMERO 1', 'OK', '2018-09-01 22:02:22'),
(86, 'lhpm16@hotmail.com\r\n        </div>', 'PREGUNTA 3', 'OPCION NUMERO 3', 'FALLO', '2018-09-01 22:03:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`) VALUES
(1, 'admin@adf456hf68dfgh456.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `repuestas`
--
ALTER TABLE `repuestas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `resultados`
--
ALTER TABLE `resultados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `repuestas`
--
ALTER TABLE `repuestas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `resultados`
--
ALTER TABLE `resultados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
