-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-02-2018 a las 23:45:41
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `academ`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activos`
--

CREATE TABLE IF NOT EXISTS `activos` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `Tipo_Documento` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Fecha_de_Ingreso` date NOT NULL,
  `Institucion` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Numero_de_Documento` int(100) NOT NULL,
  `Nombres` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Apellidos` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Edad` int(120) NOT NULL,
  `Celular` int(100) NOT NULL,
  `Telefono_Fijo` int(100) NOT NULL,
  `Direccion` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Correo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Ciudad` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Cargo` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Salario_Base_de_Cotizacion` int(100) NOT NULL,
  `EPS` varchar(100) CHARACTER SET latin1 NOT NULL,
  `AFP` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Fondo_Cesantias` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Caja_Compensacion` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Poliza_de_Vida_Congregacion` varchar(10) CHARACTER SET latin1 NOT NULL,
  `DX_Enfermedad_Laboral` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Quinquenios_Entregados` varchar(100) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `Entrega_Quinquenio` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `activos`
--

INSERT INTO `activos` (`id`, `Tipo_Documento`, `Fecha_de_Ingreso`, `Institucion`, `Numero_de_Documento`, `Nombres`, `Apellidos`, `Fecha_Nacimiento`, `Edad`, `Celular`, `Telefono_Fijo`, `Direccion`, `Correo`, `Ciudad`, `Cargo`, `Salario_Base_de_Cotizacion`, `EPS`, `AFP`, `Fondo_Cesantias`, `Caja_Compensacion`, `Poliza_de_Vida_Congregacion`, `DX_Enfermedad_Laboral`, `Quinquenios_Entregados`, `Entrega_Quinquenio`) VALUES
(1, 'Cedula', '2018-01-01', 'SRPA Luis Amigo Cajica', 2342424, 'juan', 'perez', '1997-03-10', 21, 3453455, 3453453, 'wrwerwer', 'zx@gmail.com', 'san diego', 'zapatero', 34345, 'dfgdfg', 'dfgdfg', '465465', 'ddfgfdg', 'Si', 'Estudio EPS', '10 AÃ±os', '2018-01-12'),
(2, 'Cedula', '2018-01-02', 'SRPA Amigoniano Boyaca', 134234234, 'andres', 'bohorquez', '1996-08-16', 22, 323454, 3454353, '345345', 'xc@gamil.com', 'buenos aires', 'Educador', 2423234, 'sdfsfsdf', 'sdfsdfd', '3453453', 'sdffsddf', 'Si', 'Estudio EPS', '10 AÃ±os', '2018-01-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gh_cargos`
--

CREATE TABLE IF NOT EXISTS `gh_cargos` (
  `id_cargo` int(20) NOT NULL AUTO_INCREMENT,
  `cargo` varchar(45) NOT NULL,
  PRIMARY KEY (`id_cargo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `gh_cargos`
--

INSERT INTO `gh_cargos` (`id_cargo`, `cargo`) VALUES
(1, 'Educador'),
(2, 'Psicologo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gh_contratacion`
--

CREATE TABLE IF NOT EXISTS `gh_contratacion` (
  `id_auto` int(20) NOT NULL,
  `id_empleado` int(20) NOT NULL,
  `id_cargo` int(20) NOT NULL,
  `salario` int(50) NOT NULL,
  `EPS` varchar(50) NOT NULL,
  `AFP` varchar(50) NOT NULL,
  `Cesantias` varchar(50) NOT NULL,
  `Caja_Compensacion` varchar(50) NOT NULL,
  `Poliza` varchar(20) NOT NULL,
  `Enfermedad_Laboral` varchar(20) NOT NULL,
  `Quinquenios` varchar(20) NOT NULL,
  `Entrega_Quinquenio` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gh_empleados`
--

CREATE TABLE IF NOT EXISTS `gh_empleados` (
  `id_auto` int(20) NOT NULL AUTO_INCREMENT,
  `id_nit` int(20) NOT NULL,
  `id_empleado` int(20) NOT NULL,
  `id_sede` int(11) NOT NULL,
  `id_cargo` int(20) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` int(20) NOT NULL,
  `ciudad` varchar(45) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `telefono` int(20) NOT NULL,
  `celular` int(20) NOT NULL,
  `correo` varchar(45) NOT NULL,
  PRIMARY KEY (`id_auto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `gh_empleados`
--

INSERT INTO `gh_empleados` (`id_auto`, `id_nit`, `id_empleado`, `id_sede`, `id_cargo`, `id_estado`, `nombres`, `apellidos`, `fecha_nacimiento`, `edad`, `ciudad`, `direccion`, `telefono`, `celular`, `correo`) VALUES
(2, 2147483647, 1023019543, 1, 1, 1, 'andres', 'suarez', '1989-01-26', 29, 'Bogota ', 'CRA 45 D ESTE', 7636700, 2147483647, 'andresua@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gh_estados`
--

CREATE TABLE IF NOT EXISTS `gh_estados` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `gh_estados`
--

INSERT INTO `gh_estados` (`id_estado`, `estado`) VALUES
(1, 'Activo'),
(2, 'Retirado'),
(3, 'Retirado de Año Anterior');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gh_institucion`
--

CREATE TABLE IF NOT EXISTS `gh_institucion` (
  `id_auto` int(20) NOT NULL AUTO_INCREMENT,
  `nit` bigint(45) NOT NULL,
  `nombre_institucion` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `telefono_fijo` int(20) NOT NULL,
  `correo_institucional` varchar(20) NOT NULL,
  PRIMARY KEY (`id_auto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `gh_institucion`
--

INSERT INTO `gh_institucion` (`id_auto`, `nit`, `nombre_institucion`, `ciudad`, `direccion`, `telefono_fijo`, `correo_institucional`) VALUES
(1, 8600050684, 'Provincia', 'Bogota', 'CRA 44C', 4824624, 'anavatu@gmail.com'),
(2, 8600050683, 'OPAN ', 'Cundinamarca', 'CRA 222 B ', 3454545, 'basededatosopan@gmai');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gh_personas`
--

CREATE TABLE IF NOT EXISTS `gh_personas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(15) DEFAULT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` int(45) DEFAULT NULL,
  `rol` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `gh_personas`
--

INSERT INTO `gh_personas` (`id`, `id_usuario`, `nombres`, `apellidos`, `direccion`, `telefono`, `rol`) VALUES
(1, 1, 'Administrador', 'Sistema', 'Direccion', 300123456, 1),
(3, 1023019543, 'andres', 'suarez', 'CRA 45 D ESTE', 7636700, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gh_roles`
--

CREATE TABLE IF NOT EXISTS `gh_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `gh_roles`
--

INSERT INTO `gh_roles` (`id`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Administrador Sede');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gh_sedes`
--

CREATE TABLE IF NOT EXISTS `gh_sedes` (
  `id_auto` int(20) NOT NULL AUTO_INCREMENT,
  `id_sede` int(20) NOT NULL,
  `nombre_sede` varchar(30) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `telefono_fijo` int(10) NOT NULL,
  PRIMARY KEY (`id_auto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `gh_sedes`
--

INSERT INTO `gh_sedes` (`id_auto`, `id_sede`, `nombre_sede`, `ciudad`, `direccion`, `telefono_fijo`) VALUES
(1, 5, 'Luis Amigo Cajica', 'Cundinamarca', 'CRA 54 D ESTE', 3454455),
(2, 5, 'Amigoniano Boyaca ', 'Cundinamarca ', 'CRA 45 ESTE ', 4565663),
(3, 5, 'Ciudadela los Zagales ', 'Cundinamarca', 'TRANVERS 34 D', 8909094),
(4, 5, 'Toribio Maya ', 'Cundinamarca ', 'CRA 24 D', 7896500),
(5, 5, 'San Jose ', 'Cundinamarca ', 'CRA 67 A ESTE', 4456700),
(6, 5, 'Carlos Lleras ', 'Cundinamarca ', 'CRA 90 ESTE', 7834564),
(7, 5, 'Centro Amigoniano Mocoa ', 'Pasto', 'CRA 77 D NORTE', 2123457),
(8, 5, 'Opan Nuevas presencias', 'Cundinamarca', 'CRA 56 D OESTE', 6734234),
(9, 5, 'San Gregorio', 'Cundinamarca', 'CRA 88C ESTE ', 7624567),
(10, 5, 'Colegio San Pedro ', 'Cundinamarca ', 'CRA 24 D ', 3454544),
(11, 5, 'Colegio Fray Luis Amigo Palmir', 'Cauca', 'CRA  46 D ESTE ', 4567890),
(12, 5, 'Colegio luis Amigo La Estrella', 'Cundinamarca', 'CRA 61 D OCCIDENTE', 4565567),
(13, 5, 'Colegio San Rafael', 'Cundinamarca', 'CAR 77 A NORTE', 6789011),
(14, 1, 'Provincia', 'Bogota', 'CRA 44 C', 3243545);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gh_usuarios`
--

CREATE TABLE IF NOT EXISTS `gh_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sede` int(11) NOT NULL,
  `id_usuario` int(15) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `confirm` varchar(50) NOT NULL,
  `rol` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `gh_usuarios`
--

INSERT INTO `gh_usuarios` (`id`, `id_sede`, `id_usuario`, `user`, `pass`, `confirm`, `rol`) VALUES
(1, 1, 1, 'admin@gmail.com', '123456', '123456', 1),
(4, 5, 1023019543, 'amigo.cajica@gmail.com', '123', '123', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(250) CHARACTER SET latin1 NOT NULL,
  `password` varchar(250) CHARACTER SET latin1 NOT NULL,
  `email` varchar(250) CHARACTER SET latin1 NOT NULL,
  `pasadmin` varchar(250) CHARACTER SET latin1 NOT NULL,
  `rol` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=43 ;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `user`, `password`, `email`, `pasadmin`, `rol`) VALUES
(1, 'administrador', '', 'admin@gmail.com', '123456', 1),
(2, 'SRPA Luis Amigo Cajica', '123', 'basededatosamigonianocajica@gmail.com', '', 2),
(3, 'SRPA/ Amigoniano Boyaca', '5n32d4', 'basededatosamigonianoboyaca@gmail.com', '', 2),
(5, 'SRPA/ Ciudadela los Zalagales', '5n34d6', 'basededatosciudadelaloszalagales@gmail.com', '', 2),
(6, 'SRPA/ Toribio Maya', '5n35d7', 'basededatostoribiomaya@gmail.com', '', 2),
(7, 'SRPA/ San Jose', '5n36d8', 'basededatossanjose@gmail.com', '', 2),
(8, 'SRPA/ Carlos LLeras', '5n37d9', 'basededatoscarloslleras@gmail.com', '', 2),
(10, 'SRPA/ Centro Amigoniano Mocoa', '5n39d11', 'basededatoscentroamigonianomocoa@gmail.com', '', 2),
(11, 'SRPA/ Virgilio Guerrero', '5n40d12', 'basededatosvirgilioguerrero@gmail.com', '', 2),
(12, 'SRPA/ CAE Bosconia', '5n41d13', 'basededatoscaebosconia@gmail.com', '', 2),
(13, 'SRPA/ Amigo Soacha', '5n42d14', 'basededatosamigosoacha@gmail.com', '', 2),
(14, 'SRPA/ Casa Taller', '5n43d15', 'basededatoscasataller@gmail.com', '', 2),
(15, 'SRPA/ Avenida 68', '5n44d16', 'basededatosavenida68@gmail.com', '', 2),
(16, 'SRPA/ Venecia', '5n45d17', 'basededatosvenecia@gmail.com', '', 2),
(17, 'SRPA/ Amigoniano San Francisco', '5n46d18', 'basededatosamigonianosanfrancisco@gmail.com', '', 2),
(18, 'Colegio/ San Pedro', '5n47d19', 'basededatossanpedro@gmail.com', '', 2),
(19, 'Colegio/ San Rafael', '5n48d20', 'basededatossanrafael@gmail.com', '', 2),
(20, 'Colegio/ Fray Luis Amigo', '5n49d21', 'basededatosfrayluisamigo@gmail.com', '', 2),
(21, 'Colegio/ Toribio', '5n50d22', 'basededatostoribio@gmail.com', '', 2),
(22, 'Colegio/ Luis Amigo La Estrella', '5n51d23', 'basededatosluisamigolaestrella@gmail.com', '', 2),
(23, 'Colegio/ Carlos LLeras', '5n52d24', 'basededatoscolegiocarloslleras@gmail.com', '', 2),
(24, 'Colegio/ Tomas Juan Solaris', '5n53d25', 'basededatostomasjuansolaris@gmail.com', '', 2),
(25, 'Colegio/ P. Luis_Amigo', '5n54d26', 'basededatosp.luisamigo@gmail.com', '', 2),
(26, 'Colegio/ Cenfor', '5n55d27', 'basededatoscolegiocenfor@gmail.com', '', 2),
(27, 'Proteccion/ Santa Cruz', '5n56d28', 'basededatossantacruz@gmail.com', '', 2),
(28, 'Proteccion/ Amigo Diana Turbay', '5n57d29', 'basededatosamigodianaturbay@gmail.com', '', 2),
(29, 'Proteccion/ Junior Masculino', '5n58d30', 'basededatosjuniormasculino@gmail.com', '', 2),
(30, 'Proteccion/ Amigo Fontibon', '5n59d31', 'basededatosamigofontibon@gmail.com', '', 2),
(31, 'Proteccion/ Amigo Kennedy', '5n60d32', 'basededatosamigokennedy@gmail.com', '', 2),
(32, 'Proteccion/ Amigo Santalibrada', '5n61d33', 'basededatosamigosantalibrada@gmail.com', '', 2),
(33, 'Proteccion/ Amigo Bosa', '5n62d34', 'basededatosamigobosa@gmail.com', '', 2),
(34, 'Proteccion/ Amigo San Francisco', '5n63d35', 'basededatosamigosanfrancisco@gmail.com', '', 2),
(35, 'Proteccion/ Amigo Zagales', '5n64d36', 'basededatosamigozagales@gmail.com', '', 2),
(36, 'Proteccion/ Amigo San Jose', '5n65d37', 'basededatosamigosanjose@gmail.com', '', 2),
(37, 'Proteccion/ Amigo Patio Bonito', '5n66d38', 'basededatosamigopatiobonito@gmail.com', '', 2),
(38, 'Proteccion/ Ciudadela Amigoniana', '5n67d39', 'basededatosciudadelaamigoniana@gmail.com', '', 2),
(39, 'Proteccion/ Amigo Suba', '5n68d40', 'basededatosamigosuba@gmail.com', '', 2),
(40, 'Comunidad Terapeutica/ San Gregorio', '5n69d41', 'basededatossangregorio@gmail.com', '', 2),
(41, ' Comunidad Terapeutica/  Toribio', '5n70d42', 'basededatoscomunidadtoribio@gmail.com', '', 2),
(42, 'Empleados Provincia', '5n71d43', 'basededatosempleadosprovincia@gmail.com', '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retirados`
--

CREATE TABLE IF NOT EXISTS `retirados` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `Tipo_Documento` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `Fecha_de_Ingreso` date NOT NULL,
  `Institucion` varchar(100) COLLATE utf32_spanish2_ci NOT NULL,
  `Terminacion_de_Contrato` date NOT NULL,
  `Renuncia` date NOT NULL,
  `Numero_Documento` int(100) NOT NULL,
  `Nombres` varchar(100) COLLATE utf32_spanish2_ci NOT NULL,
  `Apellidos` varchar(100) COLLATE utf32_spanish2_ci NOT NULL,
  `Fecha_de_Nacimiento` date NOT NULL,
  `Edad` int(100) NOT NULL,
  `Celular` int(100) NOT NULL,
  `Telefono_Fijo` int(100) NOT NULL,
  `Direccion` varchar(100) COLLATE utf32_spanish2_ci NOT NULL,
  `Correo` varchar(100) COLLATE utf32_spanish2_ci NOT NULL,
  `Ciudad` varchar(100) COLLATE utf32_spanish2_ci NOT NULL,
  `Cargo` varchar(100) COLLATE utf32_spanish2_ci NOT NULL,
  `Salario_Base_de_Cotizacion` int(100) NOT NULL,
  `EPS` varchar(100) COLLATE utf32_spanish2_ci NOT NULL,
  `AFP` varchar(100) COLLATE utf32_spanish2_ci NOT NULL,
  `Fondo_Cesantias` varchar(100) COLLATE utf32_spanish2_ci NOT NULL,
  `Caja_Compensacion` varchar(100) COLLATE utf32_spanish2_ci NOT NULL,
  `Poliza_de_Vida_Congregacion` varchar(100) COLLATE utf32_spanish2_ci NOT NULL,
  `DX_Enfermedad_Laboral` varchar(100) COLLATE utf32_spanish2_ci NOT NULL,
  `Motivo` text COLLATE utf32_spanish2_ci NOT NULL,
  `Fecha_de_Retiro` date NOT NULL,
  `Quinquenios_Entregados` varchar(100) COLLATE utf32_spanish2_ci NOT NULL,
  `Entrega_Quinquenio` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `retirados`
--

INSERT INTO `retirados` (`id`, `Tipo_Documento`, `Fecha_de_Ingreso`, `Institucion`, `Terminacion_de_Contrato`, `Renuncia`, `Numero_Documento`, `Nombres`, `Apellidos`, `Fecha_de_Nacimiento`, `Edad`, `Celular`, `Telefono_Fijo`, `Direccion`, `Correo`, `Ciudad`, `Cargo`, `Salario_Base_de_Cotizacion`, `EPS`, `AFP`, `Fondo_Cesantias`, `Caja_Compensacion`, `Poliza_de_Vida_Congregacion`, `DX_Enfermedad_Laboral`, `Motivo`, `Fecha_de_Retiro`, `Quinquenios_Entregados`, `Entrega_Quinquenio`) VALUES
(1, 'Cedula', '2018-01-01', 'SRPA Amigoniano Boyaca', '2018-01-02', '2018-01-03', 3453453, 'dgdfgdfg', 'fdgvc', '2018-01-04', 0, 2147483647, 565767, 'dfgdfgfg', 'sads@gmail.com', 'sdfsdfs', 'dfgdfg', 4565465, 'fsdsdf', 'sdfsd', '43554654', 'dsfgfg', 'Si', 'Estudio ARL', 'sfsdfsdfd', '2018-01-04', '15 AÃ±os', '2018-01-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retiradosdeyearsanteriores`
--

CREATE TABLE IF NOT EXISTS `retiradosdeyearsanteriores` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `Tipo_Documento` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Numero_Documento` int(100) NOT NULL,
  `Nombres` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellidos` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Fecha_de_Ingreso` date NOT NULL,
  `Fecha_de_Retiro` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `retiradosdeyearsanteriores`
--

INSERT INTO `retiradosdeyearsanteriores` (`id`, `Tipo_Documento`, `Numero_Documento`, `Nombres`, `Apellidos`, `Fecha_de_Ingreso`, `Fecha_de_Retiro`) VALUES
(1, 'Cedula', 123456, 'etret', 'ertret', '2017-11-10', '2017-11-10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
