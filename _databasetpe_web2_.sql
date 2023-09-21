-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-09-2023 a las 02:14:21
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
-- Base de datos: `tpe_web2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `id_autor` tinyint(4) NOT NULL,
  `nombre_apellido` varchar(50) NOT NULL,
  `nacionalidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`id_autor`, `nombre_apellido`, `nacionalidad`) VALUES
(1, 'Jorge Luis Borges', 'Argentina'),
(2, 'Julio Cortázar', 'Argentina'),
(3, 'Ernesto Sabato', 'Argentina'),
(4, 'Adolfo Bioy Casares', 'Argentina'),
(5, 'Alejandra Pizarnik', 'Argentina'),
(6, 'María Elena Walsh', 'Argentina'),
(7, 'Stephen King ', 'EEUU'),
(8, 'Miguel De Cervantes', 'España'),
(9, 'Pablo Neruda', 'Chile');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `titulo` varchar(50) NOT NULL,
  `año_de_publicacion` int(11) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `id_autor` tinyint(4) NOT NULL,
  `id_libros` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`titulo`, `año_de_publicacion`, `descripcion`, `id_autor`, `id_libros`) VALUES
('Ficciones', 1944, 'Este libro es una colección de cuentos que exploran temas como los laberintos, los espejos y la metaficción. Borges juega con la realidad y la ficción', 1, 1),
('El Aleph ', 1949, 'Otra colección de cuentos en la que Borges continúa explorando temas como los laberintos, los espejos y la literatura misma. Es una obra maestra de la', 1, 2),
('Ficciones completas ', 1967, 'Esta es una recopilación de todas las historias de Borges en un solo volumen. Incluye tanto \"Ficciones\" como \"El Aleph\" y es una referencia importante', 1, 3),
('Rayuela', 1963, 'Una novela experimental que rompe con las convenciones narrativas tradicionales. El lector puede elegir entre diferentes órdenes de lectura, lo que lo', 2, 4),
('Las armas secretas ', 1959, 'Esta es otra colección de cuentos de Cortázar que muestra su dominio de la narrativa experimental. Incluye historias como \"Las babas del Diablo\" y \"La', 2, 5),
('Bestiario ', 1951, 'Este es el primer libro de cuentos publicado por Cortázar y contiene relatos que exploran lo extraño y lo surreal en la vida cotidiana.', 2, 6),
('El Tunel', 1948, 'Una novela existencialista que explora la mente de un pintor obsesionado. La historia se adentra en la paranoia y la alienación del protagonista', 3, 7),
('Sobre héroes y tumbas ', 1961, 'Una novela que examina la alienación y la corrupción en la sociedad argentina a través de la historia de un joven escritor y su relación con un milita', 3, 8),
('Abaddón el exterminador ', 1974, 'La secuela de \"Sobre héroes y tumbas\" continúa explorando las obsesiones y los conflictos existenciales del protagonista.', 3, 9),
('La invención de Morel ', 1940, 'Una novela de ciencia ficción que aborda temas como la inmortalidad y la realidad. Es una obra precursora en el género en América Latina.', 4, 10),
('La Trama Celeste ', 1948, 'Una novela en la que Bioy Casares muestra su habilidad para crear mundos imaginarios y explorar cuestiones filosóficas y científicas.', 4, 11),
('La invención y la trama ', 1980, 'Este libro reúne dos obras fundamentales de Bioy Casares, \"La invención de Morel\" y \"La trama celeste\", en un solo volumen.', 4, 12),
('Los trabajos y las noches ', 1965, 'Un libro de poesía introspectiva que explora temas de soledad, desesperación y búsqueda de identidad. La autora es conocida por su estilo poético únic', 5, 13),
('Extracción de la piedra de la locura ', 1968, 'Un libro de poesía que explora temas de angustia, soledad y autodescubrimiento. Es una obra emblemática de Pizarnik.', 5, 14),
('Los trabajos de Alejandra Pizarnik ', 2015, 'Esta recopilación de sus obras poéticas es una forma de explorar toda la carrera de Pizarnik y su evolución como poeta.', 5, 15),
('Canciones para mirar ', 1969, 'Aunque es principalmente conocida como autora de libros infantiles, este libro es una colección de poemas y canciones que apelan tanto a niños como a ', 6, 16),
('Versos para cebollitas ', 1963, 'Un libro de poesía infantil lleno de humor y juegos de palabras que ha sido muy querido por generaciones de niños argentinos.', 6, 17),
('El Reino Del Reves', 1966, 'Otra obra infantil popular que incluye canciones y poemas que han cautivado a los niños con su imaginación y creatividad.\r\n\r\n', 6, 18),
('Carrie', 1974, 'Es la primera novela publicada de Stephen King. La historia se centra en una\r\njoven llamada Carrie White, quien posee habilidades telequinéticas. Carr', 7, 19),
('The Shining', 1977, 'Es una novela de terror que sigue a Jack Torrance, un escritor en\r\nbusca de inspiración, que acepta un trabajo como cuidador de un hotel llamado Overl', 7, 20),
('IT', 1986, 'Es una extensa novela de terror que sigue a un grupo de niños en la ciudad\r\nficticia de Derry, Maine, que se enfrenta a una entidad malévola que adopt', 7, 21),
('Don Quijote de la Mancha', 1605, 'Novela icónica que sigue las aventuras del caballero soñador Don Quijote y su fiel\r\nescudero Sancho Panza. Es una sátira de las novelas de caballerías', 8, 22),
('Novelas Ejemplares', 1613, 'Colección de doce novelas cortas que abarcan una amplia gama de temas, desde el amor\r\nhasta la astucia y la justicia.', 8, 23),
('El Persiles', 1617, 'Última novela escrita por Cervantes, sigue las peripecias de dos jóvenes enamorados,\r\nPersiles y Sigismunda, en un viaje por tierras del norte de Euro', 8, 24),
('Veinte poemas de amor y una canción desesperada', 1924, 'Este libro es una colección de veinte poemas que exploran el tema del amor en sus diversas facetas, desde la pasión desbordada hasta la melancolía y l', 9, 25),
('Canto General', 1950, 'Es una extensa obra poética que abarca la historia, la geografía y la cultura de América Latina. Neruda nos lleva en un viaje a través del continente,', 9, 26),
('Confieso que he vivido ', 1974, 'Este libro es una autobiografía en la que Pablo Neruda reflexiona sobre su vida, su obra y los acontecimientos históricos que vivió. Es una mirada ínt', 9, 27);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `contraseña` varchar(30) NOT NULL,
  `telefono` int(30) NOT NULL,
  `fecha` date NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_usuario`, `nombre`, `direccion`, `email`, `contraseña`, `telefono`, `fecha`, `id_rol`) VALUES
(1, 'maria margarita', 'libertad 200', 'margaperez@gmail.com', 'hola2020', 11236547, '2018-09-23', 2),
(3, 'pepe ramirez', 'gomila 234', 'peperamirez12@hotmail.com', 'dogo200', 11236589, '2018-09-23', 2),
(4, 'adolfo', 'catamarca 300', 'adolfogonzalez@gmail.com', '2013', 2147483647, '2019-09-23', 2),
(5, 'soy el administrador', 'avellaneda 134', 'tpeweb2@gmail.com', 'web2', 298312345, '2019-09-23', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `rol`) VALUES
(1, 'administrador'),
(2, 'usuario_normal');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id_autor`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libros`),
  ADD KEY `relacion-libro-autor` (`id_autor`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `roles` (`id_rol`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autor`
--
ALTER TABLE `autor`
  MODIFY `id_autor` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libros` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `autor`
--
ALTER TABLE `autor`
  ADD CONSTRAINT `relacion-autor-libro` FOREIGN KEY (`id_autor`) REFERENCES `libros` (`id_autor`);

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `relacion-libro-autor` FOREIGN KEY (`id_autor`) REFERENCES `autor` (`id_autor`);

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `roles` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
