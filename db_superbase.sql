-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 13-09-2020 a las 19:14:43
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_superbase`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `description` varchar(150) COLLATE latin1_spanish_ci DEFAULT NULL,
  `order` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id`, `parent_id`, `name`, `description`, `order`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 0, 'MANTENEDORES', 'Menú Principal de Mantenedores', 1, 1, '2020-08-22 15:34:52', '2020-08-22 15:34:52', NULL),
(2, 1, 'Módulos', 'Mantenedor de Módulos', 1, 1, '2020-08-22 15:34:52', '2020-08-22 15:34:52', NULL),
(3, 1, 'Opciones', 'Mantenedor de Opciones para los módulos', 1, 1, '2020-08-22 15:34:52', '2020-08-22 15:34:52', NULL),
(4, 1, 'Usuarios', 'Mantenedor de Usuarios', 1, 1, '2020-08-22 15:34:52', '2020-08-22 15:34:52', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu_user`
--

CREATE TABLE `menu_user` (
  `menu_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `menu_user`
--

INSERT INTO `menu_user` (`menu_id`, `user_id`) VALUES
(2, 1),
(3, 1),
(4, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `description` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', 'Rol administrador', 1, '2020-08-22 15:34:52', '2020-08-22 15:34:52', NULL),
(2, 'guest', 'Rol invitado', 1, '2020-08-22 15:34:52', '2020-08-22 15:34:52', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `lastname` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(150) COLLATE latin1_spanish_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `username`, `password`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrador', 'Webmaster', 'webmaster@gmail.com', 'webmaster', 'bb636236ee5251177a08bec42cf5036c1d9a992b481ae34da474a80501407e8ed1c81c68d595ec453be7880a96ebc6f8502e637b5217d6736a0907544c0c3e18bwqN0WZY7sJXK09KklEZ137H/NhLudJfbYLIQBWaewA=', 1, '2020-08-22 15:34:52', '2020-08-22 15:34:52', NULL),
(2, 'Gino Luiggi', 'Chirinos Plasencia', 'guest@gmail.com', 'guest', 'd0ee1398c8ee2b11c32357cd8748227f94c7aa3d8fb2316018008181d8a9c606d2cab17b6659afa594aa2ecd48c54b928aa939e5fd22ee3ccc9e0e2f88cdfa22Nv23ueteQ2n3zdC+LguwybxAOhNoXnxWNEZ/2zuHK+I=', 1, '2020-08-22 15:34:52', '2020-08-22 15:34:52', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menu_user`
--
ALTER TABLE `menu_user`
  ADD KEY `fk_users_id_idx` (`user_id`),
  ADD KEY `fk_usm_menu_id_idx` (`menu_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `fk_users_id_idx` (`user_id`),
  ADD KEY `fk_roles_id_idx` (`role_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `menu_user`
--
ALTER TABLE `menu_user`
  ADD CONSTRAINT `fk_usm_menu_id` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`),
  ADD CONSTRAINT `fk_usm_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `fk_usr_roles_id` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `fk_usr_users_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
