-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2021 a las 06:27:56
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `smartzone`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `cedula` varchar(10) NOT NULL,
  `nombres` varchar(40) DEFAULT NULL,
  `apellidos` varchar(40) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `direccion` varchar(60) DEFAULT NULL,
  `usuario` varchar(40) DEFAULT NULL,
  `emailadmin` varchar(60) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`cedula`, `nombres`, `apellidos`, `telefono`, `direccion`, `usuario`, `emailadmin`, `password`) VALUES
('0705428241', 'Fabian', 'Merino', '980414756', 'Sucua', 'Fabian', 'merinofabia1989@hotmail.com', '123456'),
('1401271950', 'Diana Rosalia', 'Chungata Peralta', '72712154', 'Santa Ana', 'Rosalia', 'dianita_ch@hotmail.es', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `idcarrito` int(11) NOT NULL,
  `producto` int(11) DEFAULT NULL,
  `cliente` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `pu` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idcategoria` int(11) NOT NULL,
  `categoria` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idcategoria`, `categoria`) VALUES
(7, 'Computadoras'),
(9, 'Laptops'),
(10, 'Celulares'),
(11, 'Impresora'),
(12, 'Accesorios'),
(13, 'Zona Gamer'),
(14, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idcliente` int(11) NOT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idcliente`, `nombres`, `apellidos`, `email`, `password`) VALUES
(15, 'Sindy', 'Castro', 'sindy187@hotmail.com', '12345'),
(19, 'Claudio', 'Dominguez', 'clau123@hotmail.com', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `idcomentario` int(11) NOT NULL,
  `cliente` int(11) DEFAULT NULL,
  `comentario` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `idcompra` int(11) NOT NULL,
  `producto` int(11) DEFAULT NULL,
  `cliente` int(11) DEFAULT NULL,
  `cantidad` varchar(3) DEFAULT NULL,
  `pu` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `idmarca` int(11) NOT NULL,
  `marca` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`idmarca`, `marca`) VALUES
(7, 'Toshiba'),
(8, 'Acer'),
(9, 'Asus'),
(10, 'MSI'),
(11, 'Dell'),
(12, 'HP'),
(13, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idproducto` int(11) NOT NULL,
  `nombreproducto` varchar(50) DEFAULT NULL,
  `precio` varchar(6) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `marcap` int(11) DEFAULT NULL,
  `categoriap` int(11) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `stok` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idproducto`, `nombreproducto`, `precio`, `cantidad`, `color`, `marcap`, `categoriap`, `foto`, `descripcion`, `stok`) VALUES
(41, 'Laptop Gamer I9', '1500', 20, 'Rojo', 11, 13, 'producto/2.png', 'Laptop Gamer I9 de 4.6 GHz / 1 TB HDD / 32 GB de Ram DDR5 / NVIDIA de 8 GB 2080 Ti', '2'),
(42, 'Iphone 11 Pro', '1400', 80, 'Todos', 13, 10, 'producto/3.png', 'Iphone 11 Pro con 128 GB de interna / 4 GB de Rom + Estuche', '1'),
(43, 'Kit de 4 Camaras', '350', 15, 'Blanco', 13, 14, 'producto/7.png', 'Kit de camaras online con un radio de 2 cuadras', '2'),
(44, 'Mause Gaming', '20', 250, 'Todos', 9, 12, 'producto/mau1.jpg', 'Mause 64 DPI gaming', '1'),
(45, 'Impresora L500', '450', 170, 'Negro', 7, 11, 'producto/12.jpg', 'Impresora Multifuncion, copiadora y scaner', '1'),
(51, 'Laptop para Programacion', '1000', 56, 'Negro', 9, 9, 'producto/lap1.jpg', 'Perfecta con Intel Core I9 a 4.20 GHz y 32 GB de Ram', '1'),
(52, 'Pc Basico', '400', 120, 'Negro', 8, 7, 'producto/pc2.jpg', 'Corre cualquier juego en 30 FPS con 8 GB de Ram, I5 a 3.10 GHz', '3'),
(63, 'Celular de alta gama', '300', 12, 'black', 13, 10, 'producto/celular1.jpg', '0', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`idcarrito`),
  ADD KEY `fkcapro` (`producto`),
  ADD KEY `fkcacli` (`cliente`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idcomentario`),
  ADD KEY `fkcocli` (`cliente`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`idcompra`),
  ADD KEY `producto` (`producto`),
  ADD KEY `cliente` (`cliente`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`idmarca`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idproducto`),
  ADD KEY `fkproma` (`marcap`),
  ADD KEY `fkproca` (`categoriap`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `idcarrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `idcomentario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `idcompra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `idmarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `fkcacli` FOREIGN KEY (`cliente`) REFERENCES `clientes` (`idcliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkcapro` FOREIGN KEY (`producto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fkcocli` FOREIGN KEY (`cliente`) REFERENCES `clientes` (`idcliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`producto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`cliente`) REFERENCES `clientes` (`idcliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fkproca` FOREIGN KEY (`categoriap`) REFERENCES `categorias` (`idcategoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkproma` FOREIGN KEY (`marcap`) REFERENCES `marcas` (`idmarca`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
