-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2022 a las 06:07:26
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hermano-mayor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `carrera` varchar(200) DEFAULT NULL,
  `tema` varchar(1000) DEFAULT NULL,
  `descripcion` varchar(2000) DEFAULT NULL,
  `estado` varchar(600) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `activities`
--

INSERT INTO `activities` (`id`, `carrera`, `tema`, `descripcion`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'General', 'Dia de estudiante', 'Te invitamos al día de desestres para que conozcas más acerca de la ingeniería y puedas disfrutar de un ambiente entre estudiantes y conocer un poco más la carrera, Yo como tu capacitador estaré allí para orientarte y resolver tus dudas.', 'Valido', '2022-05-28 05:48:14', '2022-05-28 05:48:15'),
(2, 'General', 'Un Dia de tour por la ingeniería', 'Como has estado querido aprendiz de la vida, espero que bien, esta invitación es para poder realizar un tour por el edificio de la ingeniería que te ha interesado, yo como tu capacitador estaré allí para aclarar cualquier duda que tengas, Espero verte pronto.', 'Valido', '2022-05-28 05:49:31', '2022-05-28 05:49:32'),
(3, 'General', 'Un Dia de tour por la semana de la ingeniería', 'Como has estado querido aprendiz, espero que bien, esta invitación es para poder realizar un tour por la semana de la ingeniería, en ella podrás notar la gran variedad de actividades que se realizar en la institución en diferentes ramas de categorías espero poder contar con tu participación, allí podremos hablar de cualquier tema y resolver alguna duda que tengas.', 'Valido', '2022-05-28 05:50:06', '2022-05-28 05:50:06'),
(4, 'General', 'Evento de innovación', 'Como has estado querido aprendiz, espero que bien, esta invitación es para que puedas conocer acerca de cómo puede mejorar como estudiante en nuestra casa de estudio con ciertos proyectos que estudiantes presentaran y es por ello que te esperamos para que conozcas un poco más de nosotros.', 'Valido', '2022-05-28 05:50:45', '2022-05-28 05:50:46'),
(5, 'Ingenieria en Electromecánica', 'Creación de componentes electrónicos', 'Los estudiantes crearan componentes electrónicos como parte de la carrera te podría interesar, espero poder contar con tu asistencia.', 'Valido', '2022-05-28 05:54:57', '2022-05-28 05:54:58'),
(6, 'Ingenieria en Electromecánica', 'Laboratorio', 'Los estudiantes realizan una práctica en el laboratorio en donde podrá conocer más acerca de nuestra carrera, esperamos poder contar con tu asistencia.', 'Valido', '2022-05-28 05:55:24', '2022-05-28 05:55:25'),
(7, 'Ingenieria en Sistemas Computacionales', 'Conociendo Hackaton', 'Te invitamos a que conozcas más sobre nosotros, para ello se estará realizando un evento llamado hackathon esto te podría interesar ya que distintos estudiantes de la carrera estarán 24 en la institución elaborando un prototipo de su proyecto, esperamos poder contar con su presencia.', 'Valido', '2022-05-28 05:55:59', '2022-05-28 05:56:00'),
(8, 'Ingenieria en Sistemas Computacionales', 'Exposiciones de proyectos', 'Al finalizar el semestre se llevan a cabo ciertos proyectos a presentar como este que estas utilizando un proyecto que surgió de la nada pero que cumple su objetivo, si te interesa espero contar con tu presencia y que conozcas nuevos proyectos.', 'Valido', '2022-05-28 05:56:57', '2022-05-28 05:56:58'),
(9, 'Ingenieria Electrónica', 'Prácticas', 'Los estudiantes realizan prácticas en donde podemos conocer más a fondo la carrera, si te interesa conocer este tema, esperamos que puedas asistir.', 'Valido', '2022-05-28 05:57:36', '2022-05-28 05:57:36'),
(10, 'Ingenieria Industrial', 'Proceso de la purificación del agua.', 'Los estudiantes realizan una práctica en donde podemos ver acerca de cómo el aluminio obtiene alguna forma, si te interesa conocer este tema, esperamos que puedas asistir.', 'Valido', '2022-05-28 05:58:06', '2022-05-28 05:58:06'),
(11, 'Ingenieria Industrial', 'Exposición de trabajos', 'Los estudiantes realizan una práctica en donde podemos ver acerca de cómo el aluminio obtiene alguna forma, si te interesa conocer este tema, esperamos que puedas asistir.', 'Valido', '2022-05-28 05:58:47', '2022-05-28 05:58:47'),
(12, 'Ingenieria en Energias Renovables', 'Exposición de proyectos', 'Los estudiantes realizan exposiciones de proyectos en cada semestre y para ello este puede ser un buen momento para conocer la carrera, si te interesa conocer este tema, esperamos que puedas asistir.', 'Valido', '2022-05-28 05:59:23', '2022-05-28 05:59:23'),
(13, 'Ingenieria en Energias Renovables', 'Diagnosticar los parámetros de funcionamiento de los sistemas eléctricos', 'Los estudiantes diagnostican parámetros de funcionamiento de los sistemas eléctricos mediante técnicas de adquisición de datos eléctricos para evaluar y sugerir áreas susceptibles de mejora, si te interesa conocer este tema, esperamos que puedas asistir.', 'Valido', '2022-05-28 06:00:05', '2022-05-28 06:00:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prospecto_id` bigint(20) UNSIGNED NOT NULL,
  `hermano_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `tema` varchar(500) DEFAULT NULL,
  `descripcion` varchar(2000) DEFAULT NULL,
  `carrera` varchar(2000) DEFAULT NULL,
  `estado` varchar(200) DEFAULT NULL,
  `finalizado` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `prospecto_id`, `hermano_id`, `name`, `tema`, `descripcion`, `carrera`, `estado`, `finalizado`, `created_at`, `updated_at`) VALUES
(1, 17, 18, 'asesor2', 'Dia de estudiante', 'Te invitamos al día de desestres para que conozcas más acerca de la ingeniería y puedas disfrutar de un ambiente entre estudiantes y conocer un poco más la carrera, Yo como tu capacitador estaré allí para orientarte y resolver tus dudas.', 'General', 'Aceptada', 'No finalizado', '2022-06-06 06:38:00', '2022-06-14 12:10:26'),
(2, 17, 18, 'asesor2', 'Un Dia de tour por la ingeniería', 'Como has estado querido aprendiz de la vida, espero que bien, esta invitación es para poder realizar un tour por el edificio de la ingeniería que te ha interesado, yo como tu capacitador estaré allí para aclarar cualquier duda que tengas, Espero verte pronto.', 'General', 'Aceptada', 'No finalizado', '2022-06-08 08:55:35', '2022-06-14 12:07:57'),
(3, 12, 18, 'Prueba3', 'Dia de estudiante', 'Te invitamos al día de desestres para que conozcas más acerca de la ingeniería y puedas disfrutar de un ambiente entre estudiantes y conocer un poco más la carrera, Yo como tu capacitador estaré allí para orientarte y resolver tus dudas.', 'General', 'Pendiente', 'No finalizado', '2022-06-14 12:05:09', '2022-06-14 12:05:09'),
(4, 4, 2, 'Andres Enrique', 'Dia de estudiante', 'Te invitamos al día de desestres para que conozcas más acerca de la ingeniería y puedas disfrutar de un ambiente entre estudiantes y conocer un poco más la carrera, Yo como tu capacitador estaré allí para orientarte y resolver tus dudas.', 'General', 'Aceptada', 'No finalizado', '2022-06-15 09:58:23', '2022-06-16 09:57:34'),
(5, 4, 2, 'Andres Enrique', 'Un Dia de tour por la ingeniería', 'Como has estado querido aprendiz de la vida, espero que bien, esta invitación es para poder realizar un tour por el edificio de la ingeniería que te ha interesado, yo como tu capacitador estaré allí para aclarar cualquier duda que tengas, Espero verte pronto.', 'General', 'Finalizado', 'No finalizado', '2022-06-15 09:59:58', '2022-06-16 10:05:25'),
(6, 4, 2, 'Andres Enrique', 'Evento de innovación', 'Como has estado querido aprendiz, espero que bien, esta invitación es para que puedas conocer acerca de cómo puede mejorar como estudiante en nuestra casa de estudio con ciertos proyectos que estudiantes presentaran y es por ello que te esperamos para que conozcas un poco más de nosotros.', 'General', 'Rechazada', 'No finalizado', '2022-06-15 10:43:38', '2022-06-16 10:10:53'),
(7, 6, 2, 'Jesus Rafael', 'Un Dia de tour por la semana de la ingeniería', 'Como has estado querido aprendiz, espero que bien, esta invitación es para poder realizar un tour por la semana de la ingeniería, en ella podrás notar la gran variedad de actividades que se realizar en la institución en diferentes ramas de categorías espero poder contar con tu participación, allí podremos hablar de cualquier tema y resolver alguna duda que tengas.', 'General', 'Aceptada', 'No finalizado', '2022-06-17 05:43:15', '2022-06-17 05:43:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expedientes`
--

CREATE TABLE `expedientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `perfil_id` bigint(20) UNSIGNED NOT NULL,
  `historial` varchar(600) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `expedientes`
--

INSERT INTO `expedientes` (`id`, `perfil_id`, `historial`, `created_at`, `updated_at`) VALUES
(1, 17, 'Haz completado tu perfil', '2022-06-06 06:32:38', '2022-06-06 06:32:38'),
(2, 17, '\'asesor3\', te eligio para ser tu asesor', '2022-06-06 06:37:30', '2022-06-06 06:37:30'),
(3, 17, '\'asesor3\', te asigno una nueva actividad \'Dia de estudiante\'', '2022-06-06 06:38:00', '2022-06-06 06:38:00'),
(4, 17, '\'asesor3\', te asigno una nueva actividad \'Un Dia de tour por la ingeniería\'', '2022-06-08 08:55:35', '2022-06-08 08:55:35'),
(5, 17, 'Haz aceptado la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-08 09:06:30', '2022-06-08 09:06:30'),
(6, 4, 'Haz completado tu perfil', '2022-06-13 08:30:04', '2022-06-13 08:30:04'),
(7, 4, '\'Jose Ismael\', te eligio para ser tu asesor', '2022-06-13 10:08:56', '2022-06-13 10:08:56'),
(8, 4, '\'Jose Ismael\', te eligio para ser tu asesor', '2022-06-13 10:24:03', '2022-06-13 10:24:03'),
(9, 12, 'Haz completado tu perfil', '2022-06-14 01:05:06', '2022-06-14 01:05:06'),
(10, 12, '\'asesor3\', te eligio para ser tu asesor', '2022-06-14 01:24:55', '2022-06-14 01:24:55'),
(11, 17, '\'asesor3\', te eligio para ser tu asesor', '2022-06-14 01:29:15', '2022-06-14 01:29:15'),
(12, 12, '\'asesor3\', te eligio para ser tu asesor', '2022-06-14 01:29:19', '2022-06-14 01:29:19'),
(13, 17, 'Haz aceptado la actividad \'Un Dia de tour por la ingeniería\' del asesor \'asesor3\'', '2022-06-14 08:55:38', '2022-06-14 08:55:38'),
(14, 17, 'Haz aceptado la actividad \'Un Dia de tour por la ingeniería\' del asesor \'asesor3\'', '2022-06-14 10:04:46', '2022-06-14 10:04:46'),
(15, 17, 'Haz aceptado la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 10:22:45', '2022-06-14 10:22:45'),
(16, 17, 'Rechazaste la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 10:22:50', '2022-06-14 10:22:50'),
(17, 17, 'Haz aceptado la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 10:22:55', '2022-06-14 10:22:55'),
(18, 17, 'Haz aceptado la actividad \'Un Dia de tour por la ingeniería\' del asesor \'asesor3\'', '2022-06-14 10:23:00', '2022-06-14 10:23:00'),
(19, 17, 'Rechazaste la actividad \'Un Dia de tour por la ingeniería\' del asesor \'asesor3\'', '2022-06-14 10:23:29', '2022-06-14 10:23:29'),
(20, 17, 'Haz aceptado la actividad \'Un Dia de tour por la ingeniería\' del asesor \'asesor3\'', '2022-06-14 10:23:42', '2022-06-14 10:23:42'),
(21, 17, 'Haz aceptado la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 10:23:50', '2022-06-14 10:23:50'),
(22, 17, 'Haz aceptado la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 10:23:58', '2022-06-14 10:23:58'),
(23, 17, 'Haz aceptado la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 10:24:45', '2022-06-14 10:24:45'),
(24, 17, 'Rechazaste la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 10:24:50', '2022-06-14 10:24:50'),
(25, 17, 'Rechazaste la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 10:24:57', '2022-06-14 10:24:57'),
(26, 17, 'Haz aceptado la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 10:25:06', '2022-06-14 10:25:06'),
(27, 17, 'Rechazaste la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 10:25:49', '2022-06-14 10:25:49'),
(28, 17, 'Haz aceptado la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 10:25:55', '2022-06-14 10:25:55'),
(29, 17, 'Rechazaste la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 10:26:09', '2022-06-14 10:26:09'),
(30, 17, 'Rechazaste la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 10:26:20', '2022-06-14 10:26:20'),
(31, 17, 'Rechazaste la actividad \'Un Dia de tour por la ingeniería\' del asesor \'asesor3\'', '2022-06-14 10:26:53', '2022-06-14 10:26:53'),
(32, 17, 'Haz aceptado la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 10:27:02', '2022-06-14 10:27:02'),
(33, 17, 'Haz aceptado la actividad \'Un Dia de tour por la ingeniería\' del asesor \'asesor3\'', '2022-06-14 10:27:20', '2022-06-14 10:27:20'),
(34, 17, 'Haz aceptado la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 10:28:05', '2022-06-14 10:28:05'),
(35, 17, 'Rechazaste la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 10:28:13', '2022-06-14 10:28:13'),
(36, 17, 'Haz aceptado la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 10:28:52', '2022-06-14 10:28:52'),
(37, 17, 'Rechazaste la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 10:29:02', '2022-06-14 10:29:02'),
(38, 17, 'Haz aceptado la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 10:29:09', '2022-06-14 10:29:09'),
(39, 17, 'Haz aceptado la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 10:30:05', '2022-06-14 10:30:05'),
(40, 17, 'Rechazaste la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 10:30:16', '2022-06-14 10:30:16'),
(41, 17, 'Haz aceptado la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 10:30:28', '2022-06-14 10:30:28'),
(42, 17, 'Haz aceptado la actividad \'Un Dia de tour por la ingeniería\' del asesor \'asesor3\'', '2022-06-14 10:30:47', '2022-06-14 10:30:47'),
(43, 17, 'Haz aceptado la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 10:31:01', '2022-06-14 10:31:01'),
(44, 12, '\'asesor3\', te eligio para ser tu asesor', '2022-06-14 10:42:16', '2022-06-14 10:42:16'),
(45, 12, '\'asesor3\', te eligio para ser tu asesor', '2022-06-14 10:42:45', '2022-06-14 10:42:45'),
(46, 17, '\'asesor3\', te eligio para ser tu asesor', '2022-06-14 10:44:00', '2022-06-14 10:44:00'),
(47, 12, '\'asesor3\', te eligio para ser tu asesor', '2022-06-14 10:44:04', '2022-06-14 10:44:04'),
(48, 17, '\'asesor3\', te eligio para ser tu asesor', '2022-06-14 10:44:41', '2022-06-14 10:44:41'),
(49, 17, '\'asesor3\', te eligio para ser tu asesor', '2022-06-14 10:48:01', '2022-06-14 10:48:01'),
(50, 17, '\'asesor3\', te eligio para ser tu asesor', '2022-06-14 10:49:01', '2022-06-14 10:49:01'),
(51, 12, '\'asesor3\', te eligio para ser tu asesor', '2022-06-14 10:50:00', '2022-06-14 10:50:00'),
(52, 17, '\'asesor3\', te eligio para ser tu asesor', '2022-06-14 11:48:18', '2022-06-14 11:48:18'),
(53, 12, '\'asesor3\', te eligio para ser tu asesor', '2022-06-14 11:48:24', '2022-06-14 11:48:24'),
(54, 17, '\'asesor3\', te eligio para ser tu asesor', '2022-06-14 11:50:01', '2022-06-14 11:50:01'),
(55, 17, '\'asesor3\', te eligio para ser tu asesor', '2022-06-14 12:03:32', '2022-06-14 12:03:32'),
(56, 12, '\'asesor3\', te eligio para ser tu asesor', '2022-06-14 12:03:37', '2022-06-14 12:03:37'),
(57, 12, '\'asesor3\', te asigno una nueva actividad \'Dia de estudiante\'', '2022-06-14 12:05:09', '2022-06-14 12:05:09'),
(58, 17, 'Rechazaste la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 12:06:01', '2022-06-14 12:06:01'),
(59, 17, 'Haz aceptado la actividad \'Un Dia de tour por la ingeniería\' del asesor \'asesor3\'', '2022-06-14 12:06:12', '2022-06-14 12:06:12'),
(60, 17, 'Haz aceptado la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 12:06:24', '2022-06-14 12:06:24'),
(61, 17, 'Haz aceptado la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 12:07:36', '2022-06-14 12:07:36'),
(62, 17, 'Rechazaste la actividad \'Un Dia de tour por la ingeniería\' del asesor \'asesor3\'', '2022-06-14 12:07:43', '2022-06-14 12:07:43'),
(63, 17, 'Haz aceptado la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 12:07:48', '2022-06-14 12:07:48'),
(64, 17, 'Haz aceptado la actividad \'Un Dia de tour por la ingeniería\' del asesor \'asesor3\'', '2022-06-14 12:07:57', '2022-06-14 12:07:57'),
(65, 17, 'Haz aceptado la actividad \'Un Dia de tour por la ingeniería\' del asesor \'asesor3\'', '2022-06-14 12:08:16', '2022-06-14 12:08:16'),
(66, 17, 'Haz aceptado la actividad \'Un Dia de tour por la ingeniería\' del asesor \'asesor3\'', '2022-06-14 12:08:23', '2022-06-14 12:08:23'),
(67, 17, 'Haz aceptado la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 12:08:37', '2022-06-14 12:08:37'),
(68, 17, 'Haz aceptado la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 12:09:24', '2022-06-14 12:09:24'),
(69, 17, 'Haz aceptado la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 12:09:56', '2022-06-14 12:09:56'),
(70, 17, 'Rechazaste la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 12:10:04', '2022-06-14 12:10:04'),
(71, 17, 'Rechazaste la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 12:10:12', '2022-06-14 12:10:12'),
(72, 17, 'Haz aceptado la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 12:10:26', '2022-06-14 12:10:26'),
(73, 17, 'Haz aceptado la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 12:10:41', '2022-06-14 12:10:41'),
(74, 17, 'Haz aceptado la actividad \'Dia de estudiante\' del asesor \'asesor3\'', '2022-06-14 12:10:51', '2022-06-14 12:10:51'),
(75, 4, '\'Jose Ismael\', te asigno una nueva actividad \'Dia de estudiante\'', '2022-06-15 09:58:23', '2022-06-15 09:58:23'),
(76, 4, 'Haz aceptado la actividad \'Dia de estudiante\' del asesor \'Jose Ismael\'', '2022-06-15 09:58:44', '2022-06-15 09:58:44'),
(77, 4, '\'Jose Ismael\', te eligio para ser tu asesor', '2022-06-15 09:59:25', '2022-06-15 09:59:25'),
(78, 4, '\'Jose Ismael\', te asigno una nueva actividad \'Un Dia de tour por la ingeniería\'', '2022-06-15 09:59:58', '2022-06-15 09:59:58'),
(79, 4, '\'Jose Ismael\', te eligio para ser tu asesor', '2022-06-15 10:32:41', '2022-06-15 10:32:41'),
(80, 4, 'Haz aceptado la actividad \'Un Dia de tour por la ingeniería\' del asesor \'Jose Ismael\'', '2022-06-15 10:41:59', '2022-06-15 10:41:59'),
(81, 4, '\'Jose Ismael\', te eligio para ser tu asesor', '2022-06-15 10:43:10', '2022-06-15 10:43:10'),
(82, 4, '\'Jose Ismael\', te asigno una nueva actividad \'Evento de innovación\'', '2022-06-15 10:43:38', '2022-06-15 10:43:38'),
(83, 3, 'Haz completado tu perfil', '2022-06-16 02:11:01', '2022-06-16 02:11:01'),
(84, 3, '\'Charly Yael\', te eligio para ser tu asesor', '2022-06-16 02:13:27', '2022-06-16 02:13:27'),
(85, 4, 'Rechazaste la actividad \'Evento de innovación\' del asesor \'Jose Ismael\'', '2022-06-16 10:10:53', '2022-06-16 10:10:53'),
(86, 6, 'Haz completado tu perfil', '2022-06-17 05:40:45', '2022-06-17 05:40:45'),
(87, 6, '\'Jose Ismael\', te eligio para ser tu asesor', '2022-06-17 05:42:32', '2022-06-17 05:42:32'),
(88, 6, '\'Jose Ismael\', te asigno una nueva actividad \'Un Dia de tour por la semana de la ingeniería\'', '2022-06-17 05:43:15', '2022-06-17 05:43:15'),
(89, 6, 'Haz aceptado la actividad \'Un Dia de tour por la semana de la ingeniería\' del asesor \'Jose Ismael\'', '2022-06-17 05:43:53', '2022-06-17 05:43:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `graduados`
--

CREATE TABLE `graduados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `carrera` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `edad` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hermanos`
--

CREATE TABLE `hermanos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `especialidad` varchar(200) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `grado` varchar(100) DEFAULT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `hermanos`
--

INSERT INTO `hermanos` (`id`, `user_id`, `name`, `especialidad`, `descripcion`, `grado`, `grupo`, `created_at`, `updated_at`, `foto`) VALUES
(2, 18, 'asesor3', 'Ingenieria en Sistemas Computacionales', 'Jugar video juegos, comer pizza, Entre muchas cosas mas.', '8', 'A', '2022-06-06 04:57:43', '2022-06-14 01:44:14', 'avatarasesor3.jpg'),
(3, 2, 'Jose Ismael', 'Ingenieria en Sistemas Computacionales', 'Programar, estudiar, dormir, jugar videojuegos, etc.', '8', 'A', '2022-06-13 09:15:38', '2022-06-15 10:15:08', 'avatarJose Ismael.png'),
(4, 7, 'Charly Yael', 'Ingenieria en Sistemas Computacionales', 'Nada', '8', 'A', '2022-06-16 02:12:42', '2022-06-16 02:13:11', 'avatarCharly Yael.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hexpedientes`
--

CREATE TABLE `hexpedientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `perfil_id` bigint(20) UNSIGNED NOT NULL,
  `historial` varchar(600) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `hexpedientes`
--

INSERT INTO `hexpedientes` (`id`, `perfil_id`, `historial`, `created_at`, `updated_at`) VALUES
(3, 18, 'Haz completado tu perfil', '2022-06-06 04:57:43', '2022-06-06 04:57:43'),
(4, 18, 'Haz agregado a \'asesor2\', como miembro de tu equipo', '2022-06-06 06:37:30', '2022-06-06 06:37:30'),
(5, 18, 'Asignaste una actividad \'Dia de estudiante\' a \'asesor2\'', '2022-06-06 06:38:00', '2022-06-06 06:38:00'),
(6, 18, 'Asignaste una actividad \'Un Dia de tour por la ingeniería\' a \'asesor2\'', '2022-06-08 08:55:34', '2022-06-08 08:55:34'),
(7, 18, '\'asesor2\' acepto la actividad de \'Dia de estudiante\'', '2022-06-08 09:06:30', '2022-06-08 09:06:30'),
(8, 2, 'Haz completado tu perfil', '2022-06-13 09:15:38', '2022-06-13 09:15:38'),
(9, 2, 'Haz agregado a \'Andres Enrique\', como miembro de tu equipo', '2022-06-13 10:08:56', '2022-06-13 10:08:56'),
(10, 2, 'Haz agregado a \'Andres Enrique\', como miembro de tu equipo', '2022-06-13 10:24:03', '2022-06-13 10:24:03'),
(11, 18, 'Haz agregado a \'Prueba3\', como miembro de tu equipo', '2022-06-14 01:24:55', '2022-06-14 01:24:55'),
(12, 18, 'Haz agregado a \'asesor2\', como miembro de tu equipo', '2022-06-14 01:29:15', '2022-06-14 01:29:15'),
(13, 18, 'Haz agregado a \'Prueba3\', como miembro de tu equipo', '2022-06-14 01:29:19', '2022-06-14 01:29:19'),
(14, 18, '\'asesor2\' acepto la actividad de \'Un Dia de tour por la ingeniería\'', '2022-06-14 08:55:38', '2022-06-14 08:55:38'),
(15, 18, '\'asesor2\' acepto la actividad de \'Un Dia de tour por la ingeniería\'', '2022-06-14 10:04:46', '2022-06-14 10:04:46'),
(16, 18, '\'asesor2\' acepto la actividad de \'Dia de estudiante\'', '2022-06-14 10:22:45', '2022-06-14 10:22:45'),
(17, 18, '\'asesor2\' rechazo la actividad de \'Dia de estudiante\'', '2022-06-14 10:22:50', '2022-06-14 10:22:50'),
(18, 18, '\'asesor2\' acepto la actividad de \'Dia de estudiante\'', '2022-06-14 10:22:55', '2022-06-14 10:22:55'),
(19, 18, '\'asesor2\' acepto la actividad de \'Un Dia de tour por la ingeniería\'', '2022-06-14 10:23:00', '2022-06-14 10:23:00'),
(20, 18, '\'asesor2\' rechazo la actividad de \'Un Dia de tour por la ingeniería\'', '2022-06-14 10:23:29', '2022-06-14 10:23:29'),
(21, 18, '\'asesor2\' acepto la actividad de \'Un Dia de tour por la ingeniería\'', '2022-06-14 10:23:42', '2022-06-14 10:23:42'),
(22, 18, '\'asesor2\' acepto la actividad de \'Dia de estudiante\'', '2022-06-14 10:23:50', '2022-06-14 10:23:50'),
(23, 18, '\'asesor2\' acepto la actividad de \'Dia de estudiante\'', '2022-06-14 10:23:58', '2022-06-14 10:23:58'),
(24, 18, '\'asesor2\' acepto la actividad de \'Dia de estudiante\'', '2022-06-14 10:24:45', '2022-06-14 10:24:45'),
(25, 18, '\'asesor2\' rechazo la actividad de \'Dia de estudiante\'', '2022-06-14 10:24:50', '2022-06-14 10:24:50'),
(26, 18, '\'asesor2\' rechazo la actividad de \'Dia de estudiante\'', '2022-06-14 10:24:57', '2022-06-14 10:24:57'),
(27, 18, '\'asesor2\' acepto la actividad de \'Dia de estudiante\'', '2022-06-14 10:25:06', '2022-06-14 10:25:06'),
(28, 18, '\'asesor2\' rechazo la actividad de \'Dia de estudiante\'', '2022-06-14 10:25:49', '2022-06-14 10:25:49'),
(29, 18, '\'asesor2\' acepto la actividad de \'Dia de estudiante\'', '2022-06-14 10:25:55', '2022-06-14 10:25:55'),
(30, 18, '\'asesor2\' rechazo la actividad de \'Dia de estudiante\'', '2022-06-14 10:26:09', '2022-06-14 10:26:09'),
(31, 18, '\'asesor2\' rechazo la actividad de \'Dia de estudiante\'', '2022-06-14 10:26:20', '2022-06-14 10:26:20'),
(32, 18, '\'asesor2\' rechazo la actividad de \'Un Dia de tour por la ingeniería\'', '2022-06-14 10:26:53', '2022-06-14 10:26:53'),
(33, 18, '\'asesor2\' acepto la actividad de \'Dia de estudiante\'', '2022-06-14 10:27:02', '2022-06-14 10:27:02'),
(34, 18, '\'asesor2\' acepto la actividad de \'Un Dia de tour por la ingeniería\'', '2022-06-14 10:27:20', '2022-06-14 10:27:20'),
(35, 18, '\'asesor2\' acepto la actividad de \'Dia de estudiante\'', '2022-06-14 10:28:05', '2022-06-14 10:28:05'),
(36, 18, '\'asesor2\' rechazo la actividad de \'Dia de estudiante\'', '2022-06-14 10:28:13', '2022-06-14 10:28:13'),
(37, 18, '\'asesor2\' acepto la actividad de \'Dia de estudiante\'', '2022-06-14 10:28:52', '2022-06-14 10:28:52'),
(38, 18, '\'asesor2\' rechazo la actividad de \'Dia de estudiante\'', '2022-06-14 10:29:02', '2022-06-14 10:29:02'),
(39, 18, '\'asesor2\' acepto la actividad de \'Dia de estudiante\'', '2022-06-14 10:29:09', '2022-06-14 10:29:09'),
(40, 18, '\'asesor2\' acepto la actividad de \'Dia de estudiante\'', '2022-06-14 10:30:05', '2022-06-14 10:30:05'),
(41, 18, '\'asesor2\' rechazo la actividad de \'Dia de estudiante\'', '2022-06-14 10:30:16', '2022-06-14 10:30:16'),
(42, 18, '\'asesor2\' acepto la actividad de \'Dia de estudiante\'', '2022-06-14 10:30:28', '2022-06-14 10:30:28'),
(43, 18, '\'asesor2\' acepto la actividad de \'Un Dia de tour por la ingeniería\'', '2022-06-14 10:30:47', '2022-06-14 10:30:47'),
(44, 18, '\'asesor2\' acepto la actividad de \'Dia de estudiante\'', '2022-06-14 10:31:01', '2022-06-14 10:31:01'),
(45, 18, 'Haz agregado a \'Prueba3\', como miembro de tu equipo', '2022-06-14 10:42:16', '2022-06-14 10:42:16'),
(46, 18, 'Haz agregado a \'Prueba3\', como miembro de tu equipo', '2022-06-14 10:42:45', '2022-06-14 10:42:45'),
(47, 18, 'Haz agregado a \'asesor2\', como miembro de tu equipo', '2022-06-14 10:44:00', '2022-06-14 10:44:00'),
(48, 18, 'Haz agregado a \'Prueba3\', como miembro de tu equipo', '2022-06-14 10:44:04', '2022-06-14 10:44:04'),
(49, 18, 'Haz agregado a \'asesor2\', como miembro de tu equipo', '2022-06-14 10:44:41', '2022-06-14 10:44:41'),
(50, 18, 'Haz agregado a \'asesor2\', como miembro de tu equipo', '2022-06-14 10:48:01', '2022-06-14 10:48:01'),
(51, 18, 'Haz agregado a \'asesor2\', como miembro de tu equipo', '2022-06-14 10:49:01', '2022-06-14 10:49:01'),
(52, 18, 'Haz agregado a \'Prueba3\', como miembro de tu equipo', '2022-06-14 10:50:00', '2022-06-14 10:50:00'),
(53, 18, 'Haz agregado a \'asesor2\', como miembro de tu equipo', '2022-06-14 11:48:18', '2022-06-14 11:48:18'),
(54, 18, 'Haz agregado a \'Prueba3\', como miembro de tu equipo', '2022-06-14 11:48:24', '2022-06-14 11:48:24'),
(55, 18, 'Haz agregado a \'asesor2\', como miembro de tu equipo', '2022-06-14 11:50:01', '2022-06-14 11:50:01'),
(56, 18, 'Haz agregado a \'asesor2\', como miembro de tu equipo', '2022-06-14 12:03:32', '2022-06-14 12:03:32'),
(57, 18, 'Haz agregado a \'Prueba3\', como miembro de tu equipo', '2022-06-14 12:03:37', '2022-06-14 12:03:37'),
(58, 18, 'Asignaste una actividad \'Dia de estudiante\' a \'Prueba3\'', '2022-06-14 12:05:09', '2022-06-14 12:05:09'),
(59, 18, '\'asesor2\' rechazo la actividad de \'Dia de estudiante\'', '2022-06-14 12:06:01', '2022-06-14 12:06:01'),
(60, 18, '\'asesor2\' acepto la actividad de \'Un Dia de tour por la ingeniería\'', '2022-06-14 12:06:12', '2022-06-14 12:06:12'),
(61, 18, '\'asesor2\' acepto la actividad de \'Dia de estudiante\'', '2022-06-14 12:06:24', '2022-06-14 12:06:24'),
(62, 18, '\'asesor2\' acepto la actividad de \'Dia de estudiante\'', '2022-06-14 12:07:36', '2022-06-14 12:07:36'),
(63, 18, '\'asesor2\' rechazo la actividad de \'Un Dia de tour por la ingeniería\'', '2022-06-14 12:07:43', '2022-06-14 12:07:43'),
(64, 18, '\'asesor2\' acepto la actividad de \'Dia de estudiante\'', '2022-06-14 12:07:48', '2022-06-14 12:07:48'),
(65, 18, '\'asesor2\' acepto la actividad de \'Un Dia de tour por la ingeniería\'', '2022-06-14 12:07:57', '2022-06-14 12:07:57'),
(66, 18, '\'asesor2\' acepto la actividad de \'Un Dia de tour por la ingeniería\'', '2022-06-14 12:08:16', '2022-06-14 12:08:16'),
(67, 18, '\'asesor2\' acepto la actividad de \'Un Dia de tour por la ingeniería\'', '2022-06-14 12:08:23', '2022-06-14 12:08:23'),
(68, 18, '\'asesor2\' acepto la actividad de \'Dia de estudiante\'', '2022-06-14 12:08:37', '2022-06-14 12:08:37'),
(69, 18, '\'asesor2\' acepto la actividad de \'Dia de estudiante\'', '2022-06-14 12:09:24', '2022-06-14 12:09:24'),
(70, 18, '\'asesor2\' acepto la actividad de \'Dia de estudiante\'', '2022-06-14 12:09:56', '2022-06-14 12:09:56'),
(71, 18, '\'asesor2\' rechazo la actividad de \'Dia de estudiante\'', '2022-06-14 12:10:04', '2022-06-14 12:10:04'),
(72, 18, '\'asesor2\' rechazo la actividad de \'Dia de estudiante\'', '2022-06-14 12:10:12', '2022-06-14 12:10:12'),
(73, 18, '\'asesor2\' acepto la actividad de \'Dia de estudiante\'', '2022-06-14 12:10:26', '2022-06-14 12:10:26'),
(74, 18, '\'asesor2\' acepto la actividad de \'Dia de estudiante\'', '2022-06-14 12:10:41', '2022-06-14 12:10:41'),
(75, 18, '\'asesor2\' acepto la actividad de \'Dia de estudiante\'', '2022-06-14 12:10:51', '2022-06-14 12:10:51'),
(76, 2, 'Asignaste una actividad \'Dia de estudiante\' a \'Andres Enrique\'', '2022-06-15 09:58:23', '2022-06-15 09:58:23'),
(77, 2, '\'Andres Enrique\' acepto la actividad de \'Dia de estudiante\'', '2022-06-15 09:58:44', '2022-06-15 09:58:44'),
(78, 2, 'Haz agregado a \'Andres Enrique\', como miembro de tu equipo', '2022-06-15 09:59:25', '2022-06-15 09:59:25'),
(79, 2, 'Asignaste una actividad \'Un Dia de tour por la ingeniería\' a \'Andres Enrique\'', '2022-06-15 09:59:58', '2022-06-15 09:59:58'),
(80, 2, 'Haz agregado a \'Andres Enrique\', como miembro de tu equipo', '2022-06-15 10:32:41', '2022-06-15 10:32:41'),
(81, 2, '\'Andres Enrique\' acepto la actividad de \'Un Dia de tour por la ingeniería\'', '2022-06-15 10:41:59', '2022-06-15 10:41:59'),
(82, 2, 'Haz agregado a \'Andres Enrique\', como miembro de tu equipo', '2022-06-15 10:43:10', '2022-06-15 10:43:10'),
(83, 2, 'Asignaste una actividad \'Evento de innovación\' a \'Andres Enrique\'', '2022-06-15 10:43:38', '2022-06-15 10:43:38'),
(84, 7, 'Haz completado tu perfil', '2022-06-16 02:12:42', '2022-06-16 02:12:42'),
(85, 7, 'Haz agregado a \'Segio Allan\', como miembro de tu equipo', '2022-06-16 02:13:27', '2022-06-16 02:13:27'),
(86, 2, '\'Andres Enrique\' rechazo la actividad de \'Evento de innovación\'', '2022-06-16 10:10:53', '2022-06-16 10:10:53'),
(87, 2, 'Haz agregado a \'Jesus Rafael\', como miembro de tu equipo', '2022-06-17 05:42:32', '2022-06-17 05:42:32'),
(88, 2, 'Asignaste una actividad \'Un Dia de tour por la semana de la ingeniería\' a \'Jesus Rafael\'', '2022-06-17 05:43:15', '2022-06-17 05:43:15'),
(89, 2, '\'Jesus Rafael\' acepto la actividad de \'Un Dia de tour por la semana de la ingeniería\'', '2022-06-17 05:43:53', '2022-06-17 05:43:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hijos`
--

CREATE TABLE `hijos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `padre_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `bien` bigint(10) UNSIGNED NOT NULL,
  `mal` bigint(10) UNSIGNED NOT NULL,
  `estado` varchar(60) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `hijos`
--

INSERT INTO `hijos` (`id`, `user_id`, `padre_id`, `name`, `bien`, `mal`, `estado`, `updated_at`, `created_at`) VALUES
(18, 17, 18, 'asesor2', 0, 0, 'En curso', '2022-06-14 12:03:32', '2022-06-14 12:03:32'),
(19, 12, 18, 'Prueba3', 0, 0, 'En curso', '2022-06-14 12:03:37', '2022-06-14 12:03:37'),
(23, 3, 7, 'Segio Allan', 0, 0, 'En curso', '2022-06-16 02:13:27', '2022-06-16 02:13:27'),
(24, 6, 2, 'Jesus Rafael', 0, 0, 'En curso', '2022-06-17 05:42:32', '2022-06-17 05:42:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_24_194651_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(1, 'App\\Models\\User', 7),
(1, 'App\\Models\\User', 18),
(1, 'App\\Models\\User', 19),
(1, 'App\\Models\\User', 21),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 8),
(2, 'App\\Models\\User', 9),
(2, 'App\\Models\\User', 10),
(2, 'App\\Models\\User', 11),
(2, 'App\\Models\\User', 12),
(2, 'App\\Models\\User', 13),
(2, 'App\\Models\\User', 14),
(2, 'App\\Models\\User', 15),
(2, 'App\\Models\\User', 16),
(2, 'App\\Models\\User', 17),
(2, 'App\\Models\\User', 20),
(3, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'ver actividades', 'web', '2022-05-25 00:50:30', '2022-05-25 00:50:30'),
(2, 'agregar actividades', 'web', '2022-05-25 00:50:35', '2022-05-25 00:50:35'),
(3, 'borrar actividades', 'web', '2022-05-25 00:50:46', '2022-05-25 00:50:46'),
(4, 'actualizar actividades', 'web', '2022-05-25 00:50:53', '2022-05-25 00:50:53'),
(5, 'crear actividades', 'web', '2022-05-25 00:51:11', '2022-05-25 00:51:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prospectos`
--

CREATE TABLE `prospectos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `edad` varchar(200) DEFAULT NULL,
  `carrera` varchar(200) DEFAULT NULL,
  `interes` varchar(2000) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `prospectos`
--

INSERT INTO `prospectos` (`id`, `user_id`, `name`, `edad`, `carrera`, `interes`, `estado`, `created_at`, `updated_at`, `foto`) VALUES
(1, 17, 'asesor2', '22', 'Ingenieria en Sistemas Computacionales', 'Por que me interesa programar y siento que es muy facil para mi', 'No disponible', '2022-06-06 06:32:38', '2022-06-14 12:03:32', 'avatarasesor2.jpg'),
(2, 4, 'Andres Enrique', '22', 'Ingenieria en Sistemas Computacionales', 'Por que si', 'Disponible', '2022-06-13 08:30:04', '2022-06-17 05:42:51', 'avatarAndres Enrique.png'),
(3, 12, 'Prueba3', '22', 'Ingenieria en Sistemas Computacionales', 'Por que si', 'No disponible', '2022-06-14 01:05:06', '2022-06-14 12:03:37', 'avatarPrueba3.jpg'),
(4, 3, 'Segio Allan', '22', 'Ingenieria en Sistemas Computacionales', 'Por que si', 'No disponible', '2022-06-16 02:11:01', '2022-06-16 02:13:27', 'avatarSegio Allan.jpg'),
(5, 6, 'Jesus Rafael', '22', 'Ingenieria en Sistemas Computacionales', 'Por que me gustaria saber mas acerca de las computadoras', 'No disponible', '2022-06-17 05:40:45', '2022-06-17 05:42:32', 'avatarJesus Rafael.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'asesor', 'web', '2022-05-25 00:48:59', '2022-05-25 00:48:59'),
(2, 'novato', 'web', '2022-05-25 00:49:19', '2022-05-25 00:49:19'),
(3, 'superadmin', 'web', '2022-05-25 00:49:25', '2022-05-25 00:49:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 3),
(3, 1),
(3, 3),
(4, 1),
(5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `type`, `foto`) VALUES
(1, 'Josue Daniel', 'josue.18070017@itsmotul.edu.mx', NULL, '$2y$10$5ruvjYtqf5yEPcwoaFjHl.j/R8emy3X1iSpOwnlNCmUm7dmnq4wMq', 'BvIurcOJBkdMZTTN8OqGn5PoVc9MS40DeVeBlj0nzW1tUla5xHHYqw2PDr85', '2022-05-25 00:52:50', '2022-05-25 00:52:50', 'A', NULL),
(2, 'Jose Ismael', 'jose.18070012@itsmotul.edu.mx', NULL, '$2y$10$DWNOl5xzv6o12k8EicwDueL639jxzi3OgKGZg2ZdsRSfIbBHvPKUO', NULL, '2022-05-25 00:53:15', '2022-06-15 10:15:08', 'A', 'avatarJose Ismael.png'),
(3, 'Segio Allan', 'sergio.18070015@itsmotul.edu.mx', NULL, '$2y$10$v7ovEewPvxW0TOxP9lPfnOFimV1cTPCl1aJ9GySHBbUx.JX9scQJW', NULL, '2022-05-25 00:53:34', '2022-06-16 02:11:39', 'S', 'avatarSegio Allan.jpg'),
(4, 'Andres Enrique', 'andres.18070056@itsmotul.edu.mx', NULL, '$2y$10$N3YzJh/gdO4hKVwRB08wk.CL8MYUMTgMAy7D.RuOOuFmS.iZhJDRe', NULL, '2022-05-25 00:54:21', '2022-06-13 08:34:43', 'S', 'avatarAndres Enrique.png'),
(5, 'Ricardo Candelario', 'ricardo.18070008@itsmotul.edu.mx', NULL, '$2y$10$.nj9xrqwhaDvC4e65PxzluckRQBaCZJLrv/w3TK.OqZtuwOwmaw36', NULL, '2022-05-25 00:55:13', '2022-05-25 00:55:13', 'S', NULL),
(6, 'Jesus Rafael', 'jesus.18070065@itsmotul.edu.mx', NULL, '$2y$10$oCvKNkXAC8q0pZPiJGAJDe/yIEW7RDiLdVqi.nk.7hKOOH1JUicVi', NULL, '2022-05-25 00:55:35', '2022-06-17 05:41:38', 'S', 'avatarJesus Rafael.jpg'),
(7, 'Charly Yael', 'charly.18070016@itsmotul.edu.mx', NULL, '$2y$10$r48oAkSNBq9NyN82ICNL7.zCzBU4ts0SPdfRjYd1odkKAXFkIijMK', NULL, '2022-05-25 00:58:39', '2022-06-16 02:13:11', 'A', 'avatarCharly Yael.jpg'),
(8, 'Miguel Angel', 'miguel.18070002@itsmotul.edu.mx', NULL, '$2y$10$cDnd4DVUkpaaNqDSVFqO6OEtXpNSuEmNoPrnvbCb/rB.s56SFaV0G', NULL, '2022-05-26 19:31:24', '2022-05-26 19:31:24', 'S', NULL),
(9, 'Jesus Adrian', 'jesus.18070005@itsmotul.edu.mx', NULL, '$2y$10$crAk33EfHhMh74kR43Yt4.w.OiLPOIWaejj6pVJ.CJ1GWuK1svVQG', NULL, '2022-05-26 19:36:24', '2022-05-26 19:36:24', 'S', NULL),
(10, 'Prueba bot', 'prueba@gmail.com', NULL, '$2y$10$mLesiB6Rc9ATHYMfG6mD5.Md1SIkJiLWJbSQvKIdVjOKAJpKPpC5q', NULL, '2022-05-26 19:40:30', '2022-05-26 19:40:30', 'S', NULL),
(11, 'Prueba bot 2', 'prueba2@gmail.com', NULL, '$2y$10$SAOVTmpBwWdg3UiUY..ZhexQi.tJIsS24s297LtA.hLiS3Pwf9Va2', NULL, '2022-05-29 07:14:35', '2022-06-06 03:14:58', 'S', NULL),
(12, 'Prueba3', 'prueba3@gmail.com', NULL, '$2y$10$XB5evSUmc/0CXPpJV/k9kuJfbMYEfpGZgk2DLo5dP2C5HTCJTAcFG', NULL, '2022-05-29 07:23:37', '2022-06-14 01:13:03', 'S', 'avatarPrueba3.jpg'),
(13, 'prueba4', 'prueba4@gmail.com', NULL, '$2y$10$WGOOE6AMnQti3TuQp5bRZ.43OlXm7w6sR8KRGa2Hqde7tACwjtMX.', NULL, '2022-05-29 10:07:57', '2022-05-29 10:07:57', 'S', NULL),
(14, 'enemigo1', 'enemigo@gmail.com', NULL, '$2y$10$R73a.wsy/Z.7ZkjwPPKpDO5DfXgameM8KaOMYvx2X1e4ZwANrO0lq', NULL, '2022-05-29 10:10:37', '2022-05-29 10:10:37', 'S', NULL),
(15, 'enemigo1', 'enemigo1@gmail.com', NULL, '$2y$10$9UpK7Lj20cdkpQl8qMiMBeucwSCT4J4l90hslK/SGyHpeNFvUyIbS', NULL, '2022-05-29 10:18:21', '2022-05-29 10:18:21', 'S', NULL),
(16, 'admin1', 'asesor1@gmail.com', NULL, '$2y$10$oCL01qVM/mSeIY/JUgt6qeVvf09rLUzhZ9zl0IjZvOvruSp2xI2x.', NULL, '2022-05-29 11:09:25', '2022-05-29 11:09:25', 'A', NULL),
(17, 'asesor2', 'asesor2@gmail.com', NULL, '$2y$10$sl/HF1nGOVgi.6cqk/OW8Oq1wytzyYIEn3W1dCz6i1nKb3riP3Rpe', NULL, '2022-05-29 11:11:56', '2022-06-14 10:02:22', 'S', 'avatarasesor2.jpg'),
(18, 'asesor3', 'asesor3@gmail.com', NULL, '$2y$10$UKc5C0BDr5xCP7bVM0WUu.4OF4P1fxvfXCfN./lWHaCEsOIMd4bzy', NULL, '2022-05-29 11:12:30', '2022-06-14 01:44:14', 'A', 'avatarasesor3.jpg'),
(19, 'Josue Daniel', 'asesor4@gmail.com', NULL, '$2y$10$Jjh2cfO47vP6XmJD2PyBOu0P8fXbKh/ZzdkecCn2c7XnOl6EGBjEe', NULL, '2022-05-30 03:14:56', '2022-05-30 03:14:56', 'A', NULL),
(20, 'ejemplo bot', 'ejemplo@gmail.com', NULL, '$2y$10$mIoyWBprh/DMFm/.NBfNsujOybxXfaoTxp.ZMqb5N2ifjbFpKtOb2', NULL, '2022-05-30 23:42:44', '2022-05-30 23:42:44', 'S', NULL),
(21, 'Adminpro', 'adminpro@gmail.com', NULL, '$2y$10$BmrMsLD7U3fME2Na/cYtJeM6flrWsG6CDEgUQR2ns.C9BJfdhznU6', NULL, '2022-05-30 23:44:59', '2022-05-30 23:44:59', 'A', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `FK_cursos_prospectos` (`prospecto_id`),
  ADD KEY `FK_cursos_hermanos` (`hermano_id`);

--
-- Indices de la tabla `expedientes`
--
ALTER TABLE `expedientes`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `FK_expedientes_prospectos` (`perfil_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `graduados`
--
ALTER TABLE `graduados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hermanos`
--
ALTER TABLE `hermanos`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `FK_hermanos_users` (`user_id`);

--
-- Indices de la tabla `hexpedientes`
--
ALTER TABLE `hexpedientes`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `FK_hexpedientes_hermanos` (`perfil_id`);

--
-- Indices de la tabla `hijos`
--
ALTER TABLE `hijos`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `FK_hijos_prospectos` (`user_id`),
  ADD KEY `FK_hijos_hermanos` (`padre_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `prospectos`
--
ALTER TABLE `prospectos`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `FK_prospectos_users` (`user_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `expedientes`
--
ALTER TABLE `expedientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `graduados`
--
ALTER TABLE `graduados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hermanos`
--
ALTER TABLE `hermanos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `hexpedientes`
--
ALTER TABLE `hexpedientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT de la tabla `hijos`
--
ALTER TABLE `hijos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prospectos`
--
ALTER TABLE `prospectos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
