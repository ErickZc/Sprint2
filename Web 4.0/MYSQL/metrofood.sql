-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2018 a las 07:03:50
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `metrofood`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `addCliente` (IN `_cod_rol` INT, IN `_nombre_cliente` VARCHAR(25), IN `_apellido_cliente` VARCHAR(25), IN `_direccion_cliente` VARCHAR(100), IN `_correo_cliente` VARCHAR(35), IN `_password_cliente` VARCHAR(35), IN `_telefono_cliente` VARCHAR(15))  BEGIN
	DECLARE _Activo varchar(6) DEFAULT 'TRUE';

    INSERT INTO Cliente(cod_rol, nombre_cliente, apellido_cliente, direccion_cliente, correo_cliente, password_cliente, Activo) values(_cod_rol, _nombre_cliente, _apellido_cliente, _direccion_cliente, _correo_cliente, _password_cliente, _Activo);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `add_Telefono_Cliente` (IN `_id_cliente` INT, IN `_telefono` VARCHAR(10))  BEGIN
	INSERT INTO Telefono_Cliente values(_id_cliente, _telefono);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrarCliente` ()  NO SQL
select * from cliente where activo = 'TRUE'$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `verificarCliente` (IN `_correo` VARCHAR(30), IN `_password` INT(30))  NO SQL
select * from cliente where correo_cliente = _correo AND password_cliente = _password$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `verRol` (IN `_correo` VARCHAR(30), IN `_password` VARCHAR(40))  NO SQL
select cod_rol from cliente where correo_cliente = _correo AND password_cliente = _password$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `cod_rol` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(50) NOT NULL,
  `apellido_cliente` varchar(50) NOT NULL,
  `direccion_cliente` varchar(100) NOT NULL,
  `correo_cliente` varchar(35) NOT NULL,
  `password_cliente` varchar(35) NOT NULL,
  `activo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cod_rol`, `id_cliente`, `nombre_cliente`, `apellido_cliente`, `direccion_cliente`, `correo_cliente`, `password_cliente`, `activo`) VALUES
(1, 1, 'Erick', 'Zaldana', 'Jardines de Colón, Lourdes colón La Libertad Casa #13 Pol #29', 'erickzc130@gmail.com', '1234', 'TRUE'),
(2, 2, 'Kevin', 'Lovos', 'Apopa San Salvador Casa#25 Pol C-3', 'kevin@gmail.com', '1234', 'FALSE'),
(3, 3, 'Alexander', 'Cruz', 'Jardines de Colón, Lourdes colón La Libertad Casa #13 Pol #29', 'alexander@gmail.com', '1234', 'TRUE'),
(2, 5, 'Jaime', 'Zaldaña', 'Apopa San Salvador Casa#25 Pol C-3', 'jaime@gmail.com', '1234', 'TRUE'),
(2, 7, 'Jaime', 'Zaldaña', 'Apopa San Salvador Casa#25 Pol C-3', 'jaime2018@gmail.com', '1234', 'TRUE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE `detalle_pedido` (
  `id_pedido` int(11) NOT NULL,
  `id_plato` int(11) NOT NULL,
  `cantidad_plato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_pedido`
--

INSERT INTO `detalle_pedido` (`id_pedido`, `id_plato`, `cantidad_plato`) VALUES
(1, 4, 1),
(1, 5, 1),
(1, 6, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `cod_estado` int(11) NOT NULL,
  `nombre_estado` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`cod_estado`, `nombre_estado`) VALUES
(1, 'Pendiente'),
(2, 'Enviado'),
(3, 'Finalizado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_pedido`
--

CREATE TABLE `estado_pedido` (
  `id_pedido` int(11) NOT NULL,
  `cod_estado` int(11) NOT NULL,
  `fecha_entrega` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado_pedido`
--

INSERT INTO `estado_pedido` (`id_pedido`, `cod_estado`, `fecha_entrega`) VALUES
(1, 1, '2018-04-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `fecha_pedido` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `id_cliente`, `fecha_pedido`) VALUES
(1, 2, '2018-04-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plato`
--

CREATE TABLE `plato` (
  `id_restaurante` int(11) NOT NULL,
  `id_plato` int(11) NOT NULL,
  `nombre_plato` varchar(35) NOT NULL,
  `bebida_plato` varchar(25) NOT NULL,
  `costo_plato` float NOT NULL,
  `Activo` varchar(10) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plato`
--

INSERT INTO `plato` (`id_restaurante`, `id_plato`, `nombre_plato`, `bebida_plato`, `costo_plato`, `Activo`, `image`) VALUES
(1, 1, 'Carne Asada', 'Horchata', 2.25, 'TRUE', ''),
(1, 2, 'Tortitas de Carne', 'Horchata', 2.25, 'TRUE', ''),
(1, 3, 'Pollo Asado', 'Fresco de chan', 1.75, 'TRUE', ''),
(1, 4, 'Arroz Cantonez', 'Coca-cola 75ml', 4.25, 'TRUE', ''),
(1, 5, 'Ramen', 'Agua', 3.5, 'TRUE', ''),
(1, 6, 'Sushi', 'Limonada', 2.25, 'TRUE', ''),
(1, 7, 'Ensalada Japonesa', 'Limonada', 3.5, 'TRUE', ''),
(1, 8, 'Seviche', 'Limonada', 3, 'TRUE', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurante`
--

CREATE TABLE `restaurante` (
  `id_restaurante` int(11) NOT NULL,
  `nombre_restaurante` varchar(25) NOT NULL,
  `ubicacion_restaurante` varchar(50) NOT NULL,
  `descripcion_restaurante` varchar(300) NOT NULL,
  `Activo` varchar(10) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `restaurante`
--

INSERT INTO `restaurante` (`id_restaurante`, `nombre_restaurante`, `ubicacion_restaurante`, `descripcion_restaurante`, `Activo`, `image`) VALUES
(1, 'Dragon Dorado', 'El platillo Calle principal 26av Casa#29', 'Somos un restaurante de comida china, disponibles de 7:00 AM a 10:00 PM Todos los días. No olvides visitarnos', 'TRUE', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `cod_rol` int(11) NOT NULL,
  `nombre_rol` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`cod_rol`, `nombre_rol`) VALUES
(1, 'Administrador'),
(2, 'Cliente'),
(3, 'Admin-Restaurante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono_cliente`
--

CREATE TABLE `telefono_cliente` (
  `id_cliente` int(11) NOT NULL,
  `telefono` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `telefono_cliente`
--

INSERT INTO `telefono_cliente` (`id_cliente`, `telefono`) VALUES
(1, '73971739'),
(2, '74569856'),
(3, '74789277');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono_restaurante`
--

CREATE TABLE `telefono_restaurante` (
  `id_restaurante` int(11) NOT NULL,
  `telefono_restaurante` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `telefono_restaurante`
--

INSERT INTO `telefono_restaurante` (`id_restaurante`, `telefono_restaurante`) VALUES
(1, '23185569');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono_usuario`
--

CREATE TABLE `telefono_usuario` (
  `id_usuario` int(11) NOT NULL,
  `telefono_usuario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `telefono_usuario`
--

INSERT INTO `telefono_usuario` (`id_usuario`, `telefono_usuario`) VALUES
(2, '64254575');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_restaurante`
--

CREATE TABLE `usuario_restaurante` (
  `rol_usuario` int(11) NOT NULL,
  `cod_estado` int(11) NOT NULL,
  `id_restaurante` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(35) NOT NULL,
  `apellido_usuario` varchar(35) NOT NULL,
  `direccion_usuario` varchar(50) NOT NULL,
  `correo_usuario` varchar(30) NOT NULL,
  `password_usuario` varchar(30) NOT NULL,
  `activo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_restaurante`
--

INSERT INTO `usuario_restaurante` (`rol_usuario`, `cod_estado`, `id_restaurante`, `id_usuario`, `nombre_usuario`, `apellido_usuario`, `direccion_usuario`, `correo_usuario`, `password_usuario`, `activo`) VALUES
(3, 1, 1, 2, 'José', 'Mancía', 'Jardines de colón El chaparral 2', 'josemancia@gmail.com', '1234', 'TRUE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_pedido` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `correo_cliente` (`correo_cliente`),
  ADD KEY `fk_Rol_Cliente` (`cod_rol`);

--
-- Indices de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD KEY `fk_Detalle_Pedido` (`id_pedido`),
  ADD KEY `fk_Detalle_Pedido_Plato` (`id_plato`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`cod_estado`);

--
-- Indices de la tabla `estado_pedido`
--
ALTER TABLE `estado_pedido`
  ADD KEY `fk_Estado_Pedido` (`id_pedido`),
  ADD KEY `fk_Estado_Pedido_Estado` (`cod_estado`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `fk_Pedido_Cliente` (`id_cliente`);

--
-- Indices de la tabla `plato`
--
ALTER TABLE `plato`
  ADD PRIMARY KEY (`id_plato`),
  ADD KEY `fk_Plato_Restaurante` (`id_restaurante`);

--
-- Indices de la tabla `restaurante`
--
ALTER TABLE `restaurante`
  ADD PRIMARY KEY (`id_restaurante`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`cod_rol`);

--
-- Indices de la tabla `telefono_cliente`
--
ALTER TABLE `telefono_cliente`
  ADD KEY `fk_Telefono_Cliente` (`id_cliente`);

--
-- Indices de la tabla `telefono_restaurante`
--
ALTER TABLE `telefono_restaurante`
  ADD KEY `fk_Telefono_Restaurante` (`id_restaurante`);

--
-- Indices de la tabla `telefono_usuario`
--
ALTER TABLE `telefono_usuario`
  ADD KEY `fk_Telefono_Usuario_Restaurante_Usuario` (`id_usuario`);

--
-- Indices de la tabla `usuario_restaurante`
--
ALTER TABLE `usuario_restaurante`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `correo_usuario` (`correo_usuario`),
  ADD KEY `fk_Usuario_Restaurante` (`id_restaurante`),
  ADD KEY `fk_Usuario_Restaurante_Rol` (`rol_usuario`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD KEY `fk_Ventas_Usuario` (`id_usuario`),
  ADD KEY `fk_Ventas_Pedido` (`id_pedido`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `cod_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `plato`
--
ALTER TABLE `plato`
  MODIFY `id_plato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `restaurante`
--
ALTER TABLE `restaurante`
  MODIFY `id_restaurante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `cod_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuario_restaurante`
--
ALTER TABLE `usuario_restaurante`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_Rol_Cliente` FOREIGN KEY (`cod_rol`) REFERENCES `rol` (`cod_rol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD CONSTRAINT `fk_Detalle_Pedido` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Detalle_Pedido_Plato` FOREIGN KEY (`id_plato`) REFERENCES `plato` (`id_plato`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `estado_pedido`
--
ALTER TABLE `estado_pedido`
  ADD CONSTRAINT `fk_Estado_Pedido` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Estado_Pedido_Estado` FOREIGN KEY (`cod_estado`) REFERENCES `estado` (`cod_estado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_Pedido_Cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `plato`
--
ALTER TABLE `plato`
  ADD CONSTRAINT `fk_Plato_Restaurante` FOREIGN KEY (`id_restaurante`) REFERENCES `restaurante` (`id_restaurante`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `telefono_cliente`
--
ALTER TABLE `telefono_cliente`
  ADD CONSTRAINT `fk_Telefono_Cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `telefono_restaurante`
--
ALTER TABLE `telefono_restaurante`
  ADD CONSTRAINT `fk_Telefono_Restaurante` FOREIGN KEY (`id_restaurante`) REFERENCES `restaurante` (`id_restaurante`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `telefono_usuario`
--
ALTER TABLE `telefono_usuario`
  ADD CONSTRAINT `fk_Telefono_Usuario_Restaurante_Usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario_restaurante` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario_restaurante`
--
ALTER TABLE `usuario_restaurante`
  ADD CONSTRAINT `fk_Usuario_Restaurante` FOREIGN KEY (`id_restaurante`) REFERENCES `restaurante` (`id_restaurante`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Usuario_Restaurante_Rol` FOREIGN KEY (`rol_usuario`) REFERENCES `rol` (`cod_rol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `fk_Ventas_Pedido` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Ventas_Usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario_restaurante` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
