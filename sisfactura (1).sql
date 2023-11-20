-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2023 a las 20:38:10
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sisfactura`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(255) NOT NULL,
  `telefono_cliente` char(30) NOT NULL,
  `email_cliente` varchar(64) NOT NULL,
  `direccion_cliente` varchar(255) NOT NULL,
  `status_cliente` tinyint(4) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre_cliente`, `telefono_cliente`, `email_cliente`, `direccion_cliente`, `status_cliente`, `date_added`) VALUES
(1, 'JEAN ARANGO ALVAREZ', '51931499114', 'GH@GMAIL.COM', 'LIMA', 1, '2022-12-14 15:43:26'),
(2, 'Ivonne Dayana Perez Rincon', '3235848248', 'perezdayana181@gmail.com', 'Calle 10A N°2-26', 1, '2023-10-23 19:23:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factura`
--

CREATE TABLE `detalle_factura` (
  `id_detalle` int(11) NOT NULL,
  `numero_factura` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_venta` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `detalle_factura`
--

INSERT INTO `detalle_factura` (`id_detalle`, `numero_factura`, `id_producto`, `cantidad`, `precio_venta`) VALUES
(172, 7, 2, 23, 100),
(139, 3, 2, 1, 100),
(138, 3, 1, 1, 800),
(137, 2, 1, 1, 800),
(148, 4, 1, 1, 800),
(147, 4, 2, 1, 100),
(165, 5, 2, 1, 100),
(146, 4, 1, 1, 800),
(145, 4, 1, 1, 800),
(149, 4, 1, 1, 800),
(144, 4, 2, 1, 100),
(143, 3, 2, 1, 100),
(141, 3, 2, 1, 100),
(166, 5, 1, 1, 800),
(169, 6, 1, 1, 800),
(168, 6, 1, 1, 800);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `id_factura` int(11) NOT NULL,
  `numero_factura` int(11) NOT NULL,
  `fecha_factura` datetime NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `condiciones` varchar(30) NOT NULL,
  `total_venta` varchar(20) NOT NULL,
  `estado_factura` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`id_factura`, `numero_factura`, `fecha_factura`, `id_cliente`, `id_vendedor`, `condiciones`, `total_venta`, `estado_factura`) VALUES
(82, 7, '2023-10-24 20:35:54', 2, 2, '1', '2553', 1),
(68, 2, '2023-10-24 01:24:30', 1, 2, '1', '888', 1),
(69, 3, '2023-10-24 01:25:46', 1, 2, '1', '1221', 1),
(70, 4, '2023-10-24 01:28:57', 1, 2, '1', '3774', 1),
(80, 5, '2023-10-24 16:52:46', 2, 2, '1', '999', 1),
(81, 6, '2023-10-24 17:43:27', 1, 2, '1', '1776', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id_producto` int(11) NOT NULL,
  `codigo_producto` char(20) NOT NULL,
  `nombre_producto` char(255) NOT NULL,
  `status_producto` tinyint(4) NOT NULL,
  `date_added` datetime NOT NULL,
  `precio_producto` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id_producto`, `codigo_producto`, `nombre_producto`, `status_producto`, `date_added`, `precio_producto`) VALUES
(1, '001', 'A32', 1, '2022-12-14 15:43:49', 584),
(2, '1235', 'Leche Alqueria', 1, '2023-10-23 17:39:21', 100),
(3, '1234', 'Locion', 1, '2023-10-23 19:22:35', 23584),
(4, '345', 'Locion Mochino', 1, '2023-10-23 23:05:35', 22540);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmp`
--

CREATE TABLE `tmp` (
  `id_tmp` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad_tmp` int(11) NOT NULL,
  `precio_tmp` double(8,2) DEFAULT NULL,
  `session_id` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tmp`
--

INSERT INTO `tmp` (`id_tmp`, `id_producto`, `cantidad_tmp`, `precio_tmp`, `session_id`) VALUES
(2, 1, 1, 800.00, '01cedvi80tjndjpgmlgufumgu7'),
(101, 1, 1, 800.00, 'prlai076u4tujpid7mcvhm3844'),
(99, 1, 1, 800.00, 'prlai076u4tujpid7mcvhm3844'),
(98, 1, 1, 800.00, 'prlai076u4tujpid7mcvhm3844'),
(97, 1, 1, 800.00, 'prlai076u4tujpid7mcvhm3844'),
(96, 1, 1, 800.00, '4intkftj09ltb0bb4ndisjnjsn'),
(95, 1, 10, 800.00, '24aii3f8i0kh1jj34bmjmf9rck'),
(57, 1, 1, 800.00, '3sn4g1alpdv8qceb61kbcngbq4'),
(56, 1, 1, 800.00, '3sn4g1alpdv8qceb61kbcngbq4'),
(55, 1, 1, 800.00, '3sn4g1alpdv8qceb61kbcngbq4'),
(41, 1, 1, 800.00, '3lmc9vhdt4fp5rgu9jimt30rj7'),
(40, 1, 1, 800.00, '3lmc9vhdt4fp5rgu9jimt30rj7'),
(39, 1, 1, 800.00, '3lmc9vhdt4fp5rgu9jimt30rj7'),
(100, 1, 1, 800.00, 'prlai076u4tujpid7mcvhm3844'),
(54, 1, 1, 800.00, '3sn4g1alpdv8qceb61kbcngbq4'),
(53, 1, 1, 800.00, '3sn4g1alpdv8qceb61kbcngbq4'),
(102, 2, 1, 10000.00, 'prlai076u4tujpid7mcvhm3844'),
(103, 3, 1, 23584.00, 'prlai076u4tujpid7mcvhm3844'),
(104, 1, 1, 800.00, 'prlai076u4tujpid7mcvhm3844'),
(105, 1, 1, 800.00, 'ncec2tioe5lru7retsjpca5g2l'),
(106, 1, 1, 800.00, 'ncec2tioe5lru7retsjpca5g2l'),
(107, 1, 1, 800.00, 'ncec2tioe5lru7retsjpca5g2l'),
(108, 1, 1, 800.00, 'ncec2tioe5lru7retsjpca5g2l'),
(109, 1, 1, 800.00, 'ncec2tioe5lru7retsjpca5g2l'),
(110, 1, 5, 800.00, 'ncec2tioe5lru7retsjpca5g2l'),
(111, 1, 1, 800.00, 'ugsjf6bb9jp3a4eih8n0qi90u2'),
(112, 1, 1, 800.00, 'redl3ubem9093jro14691dihkk'),
(113, 1, 1, 800.00, 'r9np2uk0gcu4o9b56mjnp4qd0v'),
(114, 1, 1, 800.00, 'lvq40das226sm6anka8887aubm'),
(115, 1, 1, 800.00, 'lvq40das226sm6anka8887aubm'),
(149, 1, 1, 800.00, '7ehoputvu4qlb000911e1mlfvi'),
(148, 1, 1, 800.00, '7ehoputvu4qlb000911e1mlfvi'),
(147, 1, 1, 800.00, '7ehoputvu4qlb000911e1mlfvi'),
(146, 1, 1, 800.00, '7ehoputvu4qlb000911e1mlfvi'),
(208, 2, 1, 100.00, 'l7osmc7h2gps4n4etgube848j5'),
(207, 1, 1, 800.00, 'l7osmc7h2gps4n4etgube848j5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL COMMENT 'auto incrementing user_id of each user, unique index',
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `user_name` varchar(64) NOT NULL COMMENT 'user''s name, unique',
  `user_password_hash` varchar(255) NOT NULL COMMENT 'user''s password in salted and hashed format',
  `user_email` varchar(64) NOT NULL COMMENT 'user''s email, unique',
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `user_name`, `user_password_hash`, `user_email`, `date_added`) VALUES
(2, 'ADMIN', 'NOROC', 'NOROC', '$2y$10$5S7HMCFlIfh6EHrSxOU8SuElrWrHHvwfGfl9j8O.2ExZPztC9Bxbe', 'noroc@noroc.com', '2022-12-14 15:26:57');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `codigo_producto` (`nombre_cliente`);

--
-- Indices de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `numero_cotizacion` (`numero_factura`,`id_producto`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`id_factura`),
  ADD UNIQUE KEY `numero_cotizacion` (`numero_factura`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_producto`),
  ADD UNIQUE KEY `codigo_producto` (`codigo_producto`);

--
-- Indices de la tabla `tmp`
--
ALTER TABLE `tmp`
  ADD PRIMARY KEY (`id_tmp`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tmp`
--
ALTER TABLE `tmp`
  MODIFY `id_tmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index', AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
