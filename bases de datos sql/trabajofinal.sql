-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 04-02-2021 a las 11:58:37
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `trabajofinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `Nombre` varchar(100) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `Hora` time(6) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`Nombre`, `Apellidos`, `Hora`, `Fecha`) VALUES
('Diego', 'Cembrano Cozcolluela', '11:30:00.000000', '2021-01-02'),
('Ivan', 'Miguel Martinez', '11:00:00.000000', '2020-12-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Usuario` varchar(100) NOT NULL,
  `Contraseña` varchar(100) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Telefono` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Usuario`, `Contraseña`, `Nombre`, `Apellidos`, `Email`, `Telefono`) VALUES
('diegocczgz@hotmail.com', '$5$rounds=5000$de4rhfr43ehd5dje$8AkqB0yy8gkvW6xpVTLHHChK2q.dW5vEwrdYM1eEtV5', 'Diego', 'Cembrano Cozcolluela', 'diegocczgz@hotmail.com', 680407801);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `Id` int(11) NOT NULL,
  `Titulo` varchar(500) NOT NULL,
  `Resumen` varchar(500) NOT NULL,
  `Contenido` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`Id`, `Titulo`, `Resumen`, `Contenido`) VALUES
(1, 'La empresa Estart galardonada en el ultimo festival del Club de Arquitectos y Constructores', 'Estart galardonada en la entrega de premios del Club de Arquitectos y Constructores', 'Estart Arquitectura, empresa de construcción líder en España, fue galardonada ayer en los Premios a la Internacionalización organizados por el Club de Arquitectos y Constructores. Entre los galardonados en estos premios, la empresa ha sido reconocida como Gran Empresa Española con una Destacable Proyección Internacional.\r\n\r\nEl jurado, formado por más de una docena de profesionales y miembros del Club de Arquitectos y Constructores, entre ellos su Presidente Antonio Bonet, ha valorado de manera positiva la labor de Estart Arquitectura como empresa embajadora de la marca España. Siendo Estart la empresa constructora líder en el país y con una extensa presencia internacionales estando presente en más de 40 países de cinco continentes, también se ha tenido en cuenta su ya consolidada trayectoria internacional de más de 35 años que la ha llevado a ser, por ejemplo, la única constructora española con presencia en China y Vietnam.'),
(2, 'Estart innova en tecnología en Cantabria', 'Pequeña alianza entre Estart y las tecnologias del siglo XXI', 'Estart Arquitectura ha sorprendido a todos al declarar en una rueda de presna que comenzara la automatización de sus obras más recientes con la ayuda de la empresa EuroSisCon. Esta unión sin precedentes demuestra que el sector de la construcción también puede incorporarse a los avances del siglo XXI y demostrar a las demás empresas que no hay que quedarse atrás. Seguiremos estas construcciones muy de cerca.'),
(3, 'Estart amplia fronteras en Zaragoza', 'Creación de una sede en Zaragoza', 'Estart Arquitectura ha declarado que abre una nueva sede en Zaragoza desde la que gestionar la zona del Mediterráneo y para ello contempla la incorporación de 1.200 nuevos empleados en la capital, además, ofrece a sus competidores la oportunidad de crear una alianza para poder operar sin complicaciones. El presidende de la compaía considera que el mercado no tiene que ser una competencia si no una solución para sus consumidores.'),
(4, 'Estart acaba su labor en Andalucía', 'Ultimos trabajos realizados en Andalucía', 'Tras dos años de trabajo, Estart acaba su labor en Andalucía en la que han construido dos nuevos edificios de oficinas, uno en Sevilla y otro en Granada, ademñas de haber sido encargados de la reconstrucción de la Giralda tras los daños sufridos en la ultima tormenta. Las declaraciones de su presidente demustran que se sienten muy orgullosos de haber sido elegidos para este trabajo y que es todo un honor haber trabajado en uno de los monumentos mas importantes de la cultura de España.'),
(5, 'Estart anuncia futuros cambios en sus colaboraciones', 'Duras declaraciones sobre Arquitectura2', 'El presidente de la compañía ha declarado en su última rueda de prensa que finalizará su colaboración con la empresa puntera Arquitectura2 y que a partir de ahora Estart pasa a trabajar en solitario para conseguir el monopolio de toda España. Duras declaraciones que han hecho reaccionar el presidente de Arquitectura2 que ha programado una rueda de prensa para el día 16 de este mes. Esperamos impacientes su respuesta.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `Tipo` varchar(500) NOT NULL,
  `Lugar` varchar(500) NOT NULL,
  `Descripcion` varchar(500) NOT NULL,
  `Precio` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`Tipo`, `Lugar`, `Descripcion`, `Precio`) VALUES
('Diseño', 'Vigo', 'Diseño de los planos de un edificio de 15 plantas', 5000),
('Dormitorio', 'Cantabria', 'Decoración completa de dormitorio principal con instalación eléctrica incluida', 2500),
('Estructura', 'Sevilla', 'Reforma de la estructura externa de una vivienda de dos plantas', 20000),
('Plano', 'Zaragoza', 'Diseño del plano de la planta superior de una vivienda', 1000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Usuario` varchar(100) NOT NULL,
  `Contraseña` varchar(100) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellidos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Usuario`, `Contraseña`, `Nombre`, `Apellidos`) VALUES
('admin1', '$5$rounds=5000$de4rhfr43ehd5dje$TOEiBajVD.UqqSpZTOoJrogcCewTslUOdpy4zU9Imy.', 'Diego', 'Cembrano Cozcolluela'),
('admin2', '$5$rounds=5000$de4rhfr43ehd5dje$AeY6TIIccQegWIpYOrVVBFsQCPa2Z0wvsddoVrweOo9', 'Laura', 'Martinez Bielsa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`Nombre`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Usuario`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`Tipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
