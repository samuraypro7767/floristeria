-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2023 a las 05:37:23
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `floristeria_palacio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `cod_categoria` int(20) NOT NULL,
  `cantidad_categoria` varchar(100) NOT NULL,
  `precio_categoria` int(60) NOT NULL,
  `nom_categoria` varchar(50) NOT NULL,
  `año_categoria` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`cod_categoria`, `cantidad_categoria`, `precio_categoria`, `nom_categoria`, `año_categoria`) VALUES
(5, '300', 5000, 'flores', '2023-07-12'),
(6, '10', 2000, 'papel forrar', '2023-09-01'),
(7, '20', 25000, 'Peluches', '2023-09-03'),
(8, '30', 60000, 'diseños para flores', '2023-10-19'),
(9, '12', 3000, 'regalos ', '2023-10-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(15) NOT NULL,
  `nom_cliente` varchar(20) NOT NULL,
  `contra_cliente` varchar(20) NOT NULL,
  `tel_cliente` bigint(13) NOT NULL,
  `dir_cliente` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nom_cliente`, `contra_cliente`, `tel_cliente`, `dir_cliente`) VALUES
(11, 'Liliana Mari', 'lilianamariapineda', 320127812, 'Calarca/Quindi'),
(12, 'Liliana Maria', 'lilianamariapineda', 320127812, 'Calarca/Quindio'),
(13, 'santiago', 'santiago123', 31253522, 'vera cruz mz 12'),
(14, 'fernando', 'fernandotorres', 323423554, 'vera cruz mz F18'),
(15, 'manuela', '2332342342323', 1321423767, 'avenida clon cristo rey');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_producto`
--

CREATE TABLE `cliente_producto` (
  `id_cliente` int(15) DEFAULT NULL,
  `cod_prod` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `cod_prod` int(15) NOT NULL,
  `nom_prod` varchar(20) NOT NULL,
  `prec_prod` bigint(30) NOT NULL,
  `desc_prod` varchar(300) NOT NULL,
  `descuento_prod` bigint(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`cod_prod`, `nom_prod`, `prec_prod`, `desc_prod`, `descuento_prod`) VALUES
(12, 'fiesta de flores', 30000, 'detalle muy bonito', 2),
(13, 'Dia del padre', 30000, 'detalle muy bonito, para el mejor padre', 5),
(14, 'dia de la mujer', 40000, 'flores muy bonitas, dulces, y buena decoracion', 1),
(15, 'margarita', 20000, 'safdseafwefwefwefwsfe', 2),
(16, 'rosas', 50000, 'afs cscdcasockaskckás}kcsaafs cscdcasockaskckás}kcsaafs cscdcasockaskckás}kcsa', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_proveedor`
--

CREATE TABLE `producto_proveedor` (
  `id_prov` int(15) NOT NULL,
  `cod_Prod` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provedor`
--

CREATE TABLE `provedor` (
  `id_prov` int(15) NOT NULL,
  `nom_prov` varchar(20) NOT NULL,
  `dir_prov` varchar(30) NOT NULL,
  `tel_prov` bigint(15) NOT NULL,
  `sumi_prov` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_prov` int(15) NOT NULL,
  `nom_prov` varchar(20) NOT NULL,
  `dir_prov` varchar(30) NOT NULL,
  `tel_prov` bigint(15) NOT NULL,
  `sumi_prov` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_prov`, `nom_prov`, `dir_prov`, `tel_prov`, `sumi_prov`) VALUES
(6, 'Las americas', 'armenia carrera24-11 ', 3209829302, '20'),
(7, 'el palacio del peluc', 'Calarca/Quindio venida colon', 321912834, '5'),
(8, 'diseñadores mundiale', 'Calarca/Quindio', 3403291234, '40'),
(9, 'el florestal', 'armenia crr 25 4', 23342354, '20'),
(10, 'el bosque', 'pereira cr 25 4', 3123154546, '12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_usuario` int(100) NOT NULL,
  `name_usuario` varchar(20) NOT NULL,
  `email_usuario` varchar(50) NOT NULL,
  `password_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_usuario`, `name_usuario`, `email_usuario`, `password_usuario`) VALUES
(38, 'sara cardenas', 'isabela1232melo@gmail.com', 'isabela12394'),
(39, 'santiago florez', 'florezsantiago123@outlook.com', 'santiago florez'),
(40, 'carlos', 'carlos123@gmail.com', 'carlos123'),
(41, 'martha', 'martha123@gmail.com', 'martha123'),
(42, 'cecilia', 'ceci9lia@gmail.com', 'ceci9lia');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cod_categoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `cliente_producto`
--
ALTER TABLE `cliente_producto`
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `cod_prod` (`cod_prod`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`cod_prod`);

--
-- Indices de la tabla `producto_proveedor`
--
ALTER TABLE `producto_proveedor`
  ADD KEY `id_prov` (`id_prov`),
  ADD KEY `cod_Prod` (`cod_Prod`);

--
-- Indices de la tabla `provedor`
--
ALTER TABLE `provedor`
  ADD PRIMARY KEY (`id_prov`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_prov`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `name` (`name_usuario`),
  ADD KEY `email` (`email_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `cod_categoria` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `cod_prod` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `provedor`
--
ALTER TABLE `provedor`
  MODIFY `id_prov` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_prov` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_usuario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente_producto`
--
ALTER TABLE `cliente_producto`
  ADD CONSTRAINT `cliente_producto_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `cliente_producto_ibfk_2` FOREIGN KEY (`cod_prod`) REFERENCES `producto` (`cod_prod`);

--
-- Filtros para la tabla `producto_proveedor`
--
ALTER TABLE `producto_proveedor`
  ADD CONSTRAINT `producto_proveedor_ibfk_1` FOREIGN KEY (`id_prov`) REFERENCES `proveedor` (`id_prov`),
  ADD CONSTRAINT `producto_proveedor_ibfk_2` FOREIGN KEY (`cod_Prod`) REFERENCES `producto` (`cod_prod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
