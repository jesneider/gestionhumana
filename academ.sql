-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-02-2018 a las 00:08:51
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
-- Estructura de tabla para la tabla `gh_cargos`
--

CREATE TABLE IF NOT EXISTS `gh_cargos` (
  `id_cargo` int(20) NOT NULL AUTO_INCREMENT,
  `cargo` varchar(45) NOT NULL,
  PRIMARY KEY (`id_cargo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=239 ;

--
-- Volcado de datos para la tabla `gh_cargos`
--

INSERT INTO `gh_cargos` (`id_cargo`, `cargo`) VALUES
(1, 'DIRECTOR'),
(2, ' SERVICIOS GENERALES - AUXILIAR DE GRANJA'),
(3, 'ACOMPAÑANTE NOCTURNO'),
(4, 'ALMACENISTA'),
(5, 'ARCHIVISTA'),
(6, 'ASESOR DE CALIDAD'),
(7, 'ASISTENTE ADMINISTRATIVO'),
(8, 'ASISTENTE CONTABLE'),
(9, 'ASISTENTE DE GESTION'),
(10, 'ASISTENTE DE GESTION HUMANA'),
(11, 'ASISTENTE DE NOMINA'),
(12, 'ASISTENTE DE PASTORAL'),
(13, 'ASISTENTE DE PERSONAL'),
(14, 'AUXILIAR  NOCTURNO'),
(15, 'AUXILIAR ADMINISTRATIVO'),
(16, 'AUXILIAR CONTABLE'),
(17, 'AUXILIAR DE ARCHIVO'),
(18, 'AUXILIAR DE COCINA'),
(19, 'AUXILIAR DE COCINA - PANADERIA'),
(20, 'AUXILIAR DE CONTABILIDAD      '),
(21, 'AUXILIAR DE ENFERMERIA'),
(22, 'AUXILIAR DE GESTION HUMANA'),
(23, 'AUXILIAR DE KARDEX'),
(24, 'AUXILIAR DE MANTENIMIENTO'),
(25, 'AUXILIAR DE PROYECTOS'),
(26, 'AUXILIAR DE REMISIONES'),
(27, 'AUXILIAR DE ROPERIA'),
(28, 'AUXILIAR DIURNO'),
(29, 'AUXILIAR FARMACIA'),
(30, 'AUXILIAR ODONTOLOGIA '),
(31, 'AUXILIAR PEDAGOGICO Y ADMINISTRATIVO'),
(32, 'AUXILIAR SALUD ORAL'),
(33, 'AUXILIAR SERVICIO DE ALIMENTACION'),
(34, 'AUXILIAR SERVICIOS GENERALES'),
(35, 'CHEF'),
(36, 'CONDUCTOR'),
(37, 'CONDUCTOR - AUXILIAR DE MANTENIMIENTO'),
(38, 'CONDUCTOR - PORTERIA'),
(39, 'CONDUCTOR-MENSAJERO'),
(40, 'CONTADOR'),
(41, 'COORDINACION PEDAGOGIA E INVESTIGACION'),
(42, 'COORDINADOR'),
(43, 'COORDINADOR  GESTION HUMANA'),
(44, 'COORDINADOR  NOCTURNO'),
(45, 'COORDINADOR ACADEMICO'),
(46, 'COORDINADOR DE  CALIDAD'),
(47, 'COORDINADOR DE ATENCION Y FORMACION INTEGRAL'),
(48, 'COORDINADOR DE CALIDAD - ROL APOYO FORMATIVO'),
(49, 'COORDINADOR DE FORMACION LABORAL'),
(50, 'COORDINADOR DE MODALIDAD'),
(51, 'COORDINADOR DE PASTORAL'),
(52, 'COORDINADOR DE PROGRAMA'),
(53, 'COORDINADOR FORMATIVO'),
(54, 'COORDINADOR GENERAL'),
(55, 'COORDINADOR GENERAL TERAPEUTICO'),
(56, 'COORDINADOR GESTION ADMINISTRATIVA Y FINANCIE'),
(57, 'COORDINADOR MESOC'),
(58, 'COORDINADOR OPERATIVO'),
(59, 'COORDINADOR PEDAGOGICO'),
(60, 'COORDINADOR PGAFI'),
(61, 'COORDINADOR PROGRAMA MESOC'),
(62, 'COORDINADOR SECCION'),
(63, 'COORDINADOR TECNICO'),
(64, 'COORDINADOR TERAPEUTICO'),
(65, 'COORDINADORA DE COMPRAS '),
(66, 'COORDINADORA DE COMPRAS '),
(67, 'COORDINADORA INVESTIGACION'),
(68, 'DIRECTOR'),
(69, 'DOCENTE'),
(70, 'DOCENTE DE AULA'),
(71, 'DOCENTE DE BIOLOGIA'),
(72, 'DOCENTE DE MATEMATICAS'),
(73, 'DOCENTE DE SISTEMAS'),
(74, 'DOCENTE INGLES'),
(75, 'DOCENTE SOCIALES MEDIO TIEMPO'),
(76, 'DOCENTE VIRTUAL'),
(77, 'DOCTOR'),
(78, 'EDUCADOR'),
(79, 'EDUCADOR  ESPECIALIZADO'),
(80, 'EDUCADOR DE ARTES GRAFICAS'),
(81, 'EDUCADOR DE AULA'),
(82, 'EDUCADOR DE GRUPO'),
(83, 'EDUCADOR DE SECCION'),
(84, 'EDUCADOR DEPORTIVO'),
(85, 'EDUCADOR DOCENTE'),
(86, 'EDUCADOR ESPECIALIZADO'),
(87, 'EDUCADOR LUDICO'),
(88, 'EDUCADOR MESOC'),
(89, 'EDUCADOR NOCTURNO'),
(90, 'EDUCADOR PEDAGOGO'),
(91, 'EDUCADOR TECNICO'),
(92, 'EDUCADOR VACACIONES'),
(93, 'ENCARGADO MANTENIMIENTO'),
(94, 'ENFERMERA'),
(95, 'ESPECIALISTA AREA '),
(96, 'ESPECIALISTA AREA - FOR. DIURNO'),
(97, 'ESPECIALISTA DEL AREA LICENCIA'),
(98, 'ESPECIALISTA DEL AREA NORMALIS'),
(99, 'FONOAUDIOLOGA'),
(100, 'FORMADOR'),
(101, 'FORMADOR APOYO'),
(102, 'FORMADOR DE AULA'),
(103, 'FORMADOR DIURNO'),
(104, 'FORMADOR DIURNO-  ESP AREA'),
(105, 'FORMADOR EN FORMACION'),
(106, 'FORMADOR NOCTURNO'),
(107, 'GESTOR DE SST'),
(108, 'GRANJERO'),
(109, 'INSTRUCTOR'),
(110, 'INSTRUCTOR DE ARTES'),
(111, 'INSTRUCTOR DE DISEÑO '),
(112, 'INSTRUCTOR DE EBANISTERIA '),
(113, 'INSTRUCTOR DE SISTEMAS'),
(114, 'INSTRUCTOR DE TALLER          '),
(115, 'INSTRUCTOR METALISTERIA'),
(116, 'INSTRUCTOR PANADERIA'),
(117, 'INSTRUCTOR PECUARIA'),
(118, 'INSTRUCTOR TALLER'),
(119, 'INSTRUCTOR TALLER DE ARTES         '),
(120, 'INSTRUCTOR TALLER EBANISTERIA'),
(121, 'INSTRUCTOR TECNICO'),
(122, 'INSTRUCTORA TALLER DE TELARES'),
(123, 'JEFE DE COCINA'),
(124, 'JEFE SERVICIOS GENERALES'),
(125, 'MANIPULADORA DE ALIMENTOS'),
(126, 'MANTENIMIENTO'),
(127, 'MANTENIMIENTO E INFRAESTRUCTURA'),
(128, 'MANTENIMIENTO Y ORNATO'),
(129, 'MAYORDOMO'),
(130, 'MEDICO'),
(131, 'MENSAJERO'),
(132, 'NUTRICIONISTA'),
(133, 'NUTRICIONISTA'),
(134, 'ODONTOLOGO'),
(135, 'OFICIOS VARIOS'),
(136, 'ORIENTADOR AGROPECUARIO'),
(137, 'ORIENTADOR ARTISTICO'),
(138, 'ORIENTADOR DE DANZAS'),
(139, 'ORIENTADOR DEPORTIVO'),
(140, 'PORTERA Y VIGILANCIA'),
(141, 'PORTERO'),
(142, 'PORTERO Y VIGILANCIA'),
(143, 'PROFESIONAL AREA SOCIOFLIAR'),
(144, 'PROFESIONAL EN FAMILIA        '),
(145, 'PSICOLOGA  ORGANIZACIONAL '),
(146, 'PSICOLOGA MESOC'),
(147, 'PSICOLOGA-COORDINADORA'),
(148, 'PSICOLOGO'),
(149, 'PSICOLOGO - FORMADOR DIURNO'),
(150, 'PSICOLOGO-COORDINADOR'),
(151, 'PSICOPEDAGOGO'),
(152, 'PSIQUIATRA'),
(153, 'RECEPCIONISTA'),
(154, 'RECEPCIONISTA Y AUXILIAR DE OFICINA'),
(155, 'RECTOR'),
(156, 'REDES'),
(157, 'REPRESENTANTE DE LA DIRECCION'),
(158, 'RESPONSABLE  SST'),
(159, 'RESPONSABLE DE COMPRAS Y CONTRATACION DE SERV'),
(160, 'RESPONSABLE DE COMPRAS Y CONTRATACION DE SERV'),
(161, 'RESPONSABLE DE COMPRAS Y CONTRATACION DE SERV'),
(162, 'RESPONSABLE DE PASTORAL'),
(163, 'RESPONSABLE SERVICIOS GENERALES'),
(164, 'SECRETARIA'),
(165, 'SECRETARIA  GENERAL'),
(166, 'SECRETARIA ACADEMICA'),
(167, 'SECRETARIA DE GERENCIA'),
(168, 'SECRETARIA DE GERENCIA'),
(169, 'SECRETARIA DE KARDEX'),
(170, 'SECRETARIA DE PROGRAMA'),
(171, 'SECRETARIA DOCUMENTADORA'),
(172, 'SECRETARIA GENERAL RECEPCIONISTA'),
(173, 'SECRETARIA GENERAL RECEPCIONISTA'),
(174, 'SECRETARIA GRAL - AUX G.HUMANA'),
(175, 'SECRETARIA JUZGADOS'),
(176, 'SECRETARIA MESOC'),
(177, 'SECRETARIA PROVINCIAL'),
(178, 'SECRETARIO GRAL MISAP'),
(179, 'SERVICIOS GENERALES - GRANJERO'),
(180, 'SERVICIOS GENERALES - JARDINERO'),
(181, 'SERVICIOS GENERALES -ASEO'),
(182, 'SERVICIOS GENERALES COCINA'),
(183, 'SUBDIERCTOR FORMATIVO PROTECCION SEMIINTERNAD'),
(184, 'SUBDIRECTOR'),
(185, 'SUBDIRECTOR ADMINISTRATIVO Y FINANCIERO'),
(186, 'SUBDIRECTOR FINANCIERO'),
(187, 'SUBDIRECTOR FORMATIVO PROTECCION'),
(188, 'SUBDIRECTOR FORMATIVO SRP'),
(189, 'SUBDIRECTOR OPERATIVO'),
(190, 'SUBDIRECTORA FINANCIERA'),
(191, 'SUBDIRECTORA GESTION HUMANA'),
(192, 'SUPERNUMERARIO ATENCION Y FORMACION INTEGRAL'),
(193, 'SUPERNUMERARIO MANTENIMIENTO'),
(194, 'TERAPEUTA'),
(195, 'TERAPEUTA-COORDINADOR'),
(196, 'TERAPIA OCUPACIONAL'),
(197, 'TRABAJADOR SOCIAL'),
(198, 'TRABAJADORA SOCIAL  MESOC'),
(199, 'TRABAJADORA SOCIAL ESPECIALISTA DE AREA'),
(200, 'TRABAJADORA SOCIAL-COORDINADORA'),
(201, 'VIGILANTE'),
(202, 'RECTOR'),
(203, 'COORDINADOR DE CALIDAD'),
(204, 'DIRECTOR DE LA GESTION ADMINISTRATIVA Y FINAN'),
(205, 'CONTADOR'),
(206, 'SECRETARIA GENERAL'),
(207, 'AUXILIAR CONTABLE'),
(208, 'DIRECTOR DE GESTION HUMANA'),
(209, 'PSICOLOGO '),
(210, 'COORDINADOR Y CONVIVENCIA'),
(211, 'COORDINADOR ACADEMICO'),
(212, 'COORDINADOR TECNICO'),
(213, 'COORDINADOR DE BIENESTAR ESTUDIANTIL'),
(214, 'BIBLIOTECARIA '),
(215, 'ASISTENTE ADMINISTRATIVO '),
(216, 'DIRECTOR GESTION FORMATIVA'),
(217, 'DOCENTE (primaria-secundaria-tecnico)'),
(218, 'JEFE DE AREA'),
(219, 'SERVICIOS GENERALES (ASEO)'),
(220, 'SERVICIOS GENERALES (aseo-cocina)'),
(221, 'AUXILIAR DE MANTENIMIENTO'),
(222, 'OFICIOS VARIOS (almacenista-mantenimiento)'),
(223, 'MENSAJERO- MANTENIMIENTO'),
(224, 'VIGILANTE-CELADOR.'),
(225, 'PORTERO'),
(226, 'AUDITORES DE CALIDAD'),
(227, 'AUDITOR INTERNO'),
(228, 'APRENDIZ SENA'),
(229, 'RESPONSABLE DE COMUNICACIONES'),
(230, 'RESPONSABLE DE PASTORAL'),
(231, 'DIRECTOR DE GRUPO'),
(232, 'JEFE DE AREA ACADEMICA'),
(233, 'RESPONSABLE DE PROMOCION EN SALUD'),
(234, 'RESPONSABLE DE ACTIVIDADES DE APOYO'),
(235, 'RESPONSABLE DE COMPRAS Y CONTRATACION'),
(236, 'ADMINISTRACION CONTABLE'),
(237, 'RECAUDO Y CARTERA'),
(238, 'RESPONSABLE DE LOGISTICA Y EQUIPOS');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
  `nombre_pais` varchar(50) NOT NULL,
  `nit` varchar(100) NOT NULL,
  `nombre_institucion` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `telefono_fijo` int(20) NOT NULL,
  `correo_institucional` varchar(20) NOT NULL,
  PRIMARY KEY (`id_auto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `gh_institucion`
--

INSERT INTO `gh_institucion` (`id_auto`, `nombre_pais`, `nit`, `nombre_institucion`, `ciudad`, `direccion`, `telefono_fijo`, `correo_institucional`) VALUES
(4, 'Colombia', '8600050683-1', 'Provincia', 'Bogota', 'CRA 44 C', 345435, 'provincia@gmail.com'),
(5, 'Colombia', '8600050683-2', 'Luis Amigo Cajica ', 'Cundinamarca', 'CRA 45 B', 7624524, 'cajica@gmail.com'),
(6, 'Colombia', '8600050683-3', 'Amigoniano Boyaca', 'Cundinamarca', 'CRA 57 D', 7890042, 'boyaca@gmail.com'),
(7, 'Colombia', '8600050683-4', 'Ciudadela los Zagales', 'Manizales', 'cra 46 B', 5465767, 'zagales@gmail.com'),
(8, 'Colombia', '8600050683-5', 'Toribio Maya', 'Popayan', '5678934', 4544455, 'maya@gmail.com'),
(9, 'Colombia', '8600050683-6', 'San Jose', 'Medellin', 'CRA 89 B', 3254545, 'jose@gmail.com'),
(10, 'Colombia', '8600050683-7', 'Carlos Lleras', 'Medellin', 'CRA 12 A', 4565656, 'Lleras@gmail.com'),
(11, 'Colombia', '8600050683-8', 'Centro Amigoniano Mocoa', 'Putumayo', 'CRA 67 G', 34545435, 'mocoa@gmail.com'),
(12, 'Colombia', '8600050683-9', 'Opan Nuevas Presencias', 'Bogota', 'CRA 78 B', 4565465, 'Presencias@gmail.com'),
(13, 'Colombia', '8600050683-10', 'San Gregorio', 'Cundinamarca', 'CRA 123  D', 3454355, 'gregorio@gmail.com'),
(14, 'Colombia', '8600050683-11', 'Colegio San Pedro', 'Valle del Cauca', 'CRA 123  A', 354455, 'pedro@gmail.com'),
(15, 'Colombia', '8600050683-12', 'Colegio Fray Luis Amigo Palmira', 'Medellin', 'CRA 56 D', 3454646, 'palmira@gmail.com'),
(16, 'Colombia', '8600050683-13', 'Colegio  Luis  Amigo la Estrella', 'Medellin', 'CRA 89 D', 35454435, 'estrella@gmail.com'),
(17, 'Colombia', '8600050683-14', 'Colegio San Rafael', 'Manizales', 'CRA 90 A', 3454354, 'rafael@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gh_paises`
--

CREATE TABLE IF NOT EXISTS `gh_paises` (
  `id_pais` int(11) NOT NULL AUTO_INCREMENT,
  `pais` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pais`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `gh_paises`
--

INSERT INTO `gh_paises` (`id_pais`, `pais`) VALUES
(1, 'Colombia');

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
(2, 'Administrador Institucion');

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
(4, 5, 1023019543, 'provincia@gmail.com', '123', '123', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
