-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2018 a las 23:09:14
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog_personal_cf`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `user_id`, `category_id`, `created_at`, `updated_at`) VALUES
(6, 'Dragon ball z', 'La grandiosa y super conocida serie de peleas y artes marciales animada llamada dragon ball, sera reemitida, segun fuentes oficiales (El mismisimo Akira toriyama, creador de la serie) anuncio este lunes, que ya estan trabajando en continuar la serie.', 2, 4, '2018-09-18 06:29:49', '2018-09-18 06:29:49'),
(11, 'Arepas venezolanas', '<p>Arepas venezolanas, son el principal desayuno de todo venezolano, un venezolano no puede vivir bien sin en las mañanas comerse una buena arepa rueda de camion,<br></p>', 2, 4, '2018-09-18 20:09:36', '2018-09-18 20:18:25'),
(12, 'Hoyesmartes', '<p>bueno es hoy</p><p>bueno es hoy</p><p>bueno es hoy</p><p>bueno es hoy</p><p>bueno es hoy</p><p>bueno es hoy</p><p>bueno es hoy</p><p>bueno es hoy</p><p>bueno es hoy</p><p>bueno es hoy</p><p>bueno es hoy</p><p>bueno es hoy</p><p>bueno es hoy</p><p>bueno es hoy</p><p>bueno es hoy</p><p>bueno es hoy</p><p>bueno es hoy</p><p>bueno es hoy</p><p>bueno es hoy</p><p>bueno es hoy</p><p>bueno es hoy</p><p>bueno es hoy</p><p>bueno es hoy</p><p>bueno es hoy</p><p>bueno es hoy</p><p>bueno es hoy</p><p>bueno es hoy</p>', 2, 4, '2018-09-19 01:36:10', '2018-09-19 01:36:10'),
(14, 'A ella la amo :\'v', 'Ella es de la pelicula \"Hermanos de Armas\", es la novia de uno de los protagonistas.', 3, 9, '2018-09-19 21:08:40', '2018-09-19 21:08:40'),
(15, 'Esa vieja es mala :v', 'Esa viejja es la encargada de una especia de instituto donde entrenan a jovenes para ser asesinos profesionales y servir al estado con su vida, ya que una vez entras al instituto tu cuerpo pertenece al estado.', 3, 4, '2018-09-19 21:12:37', '2018-09-19 21:12:37'),
(16, 'Mi desayuno diario (?', 'Ojala comiera eso siempre, aqui en venezuela no se come asi muy seguido :\'v pta vida', 3, 10, '2018-09-19 21:57:49', '2018-09-19 21:57:49'),
(17, 'Padre de Familia', 'El perro brayan programando vainas para la nasa, el perro es todo un prodigio, por eso es el personaje mas chingos de family guy :v', 3, 4, '2018-09-20 02:31:29', '2018-09-20 07:55:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `article_tag`
--

CREATE TABLE `article_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `article_tag`
--

INSERT INTO `article_tag` (`id`, `article_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(3, 6, 8, NULL, NULL),
(4, 6, 9, NULL, NULL),
(5, 6, 10, NULL, NULL),
(18, 12, 4, NULL, NULL),
(19, 12, 9, NULL, NULL),
(21, 14, 8, NULL, NULL),
(22, 14, 10, NULL, NULL),
(23, 15, 8, NULL, NULL),
(24, 16, 8, NULL, NULL),
(25, 17, 8, NULL, NULL),
(26, 17, 9, NULL, NULL),
(27, 17, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(4, 'Animaciones', '2018-09-17 17:00:54', '2018-09-17 17:00:54'),
(5, 'Anime', '2018-09-17 17:01:05', '2018-09-17 17:01:05'),
(6, 'Peliculas', '2018-09-17 17:01:14', '2018-09-17 17:01:14'),
(7, 'Series', '2018-09-17 17:01:24', '2018-09-17 17:01:24'),
(8, 'Libros', '2018-09-17 17:01:29', '2018-09-17 17:01:29'),
(9, 'Noticias', '2018-09-17 17:01:36', '2018-09-17 17:01:36'),
(10, 'comida', '2018-09-17 21:17:48', '2018-09-17 21:17:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `name`, `article_id`, `created_at`, `updated_at`) VALUES
(3, 'blog_personal1537235989.jpg', 6, '2018-09-18 06:29:50', '2018-09-18 06:29:50'),
(8, 'blog_personal1537285176.jpg', 11, '2018-09-18 20:09:37', '2018-09-18 20:09:37'),
(9, 'blog_personal1537304770.jpg', 12, '2018-09-19 01:36:11', '2018-09-19 01:36:11'),
(11, 'blog_personal1537375119.png', 14, '2018-09-19 21:08:45', '2018-09-19 21:08:45'),
(12, 'blog_personal1537375357.png', 15, '2018-09-19 21:12:37', '2018-09-19 21:12:37'),
(13, 'blog_personal1537378069.jpg', 16, '2018-09-19 21:57:49', '2018-09-19 21:57:49'),
(14, 'blog_personal1537394489.png', 17, '2018-09-20 02:31:29', '2018-09-20 02:31:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_09_16_133736_add_categories_table', 1),
(4, '2018_09_16_134655_add_articles_table', 1),
(5, '2018_09_16_135910_add_images_table', 1),
(6, '2018_09_16_140710_add_tags_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'musica', NULL, NULL),
(4, 'politica', NULL, NULL),
(7, 'informatica', NULL, NULL),
(8, 'farandula', NULL, NULL),
(9, 'comedia', NULL, NULL),
(10, 'novedades generales', NULL, NULL),
(11, '2018', '2018-09-20 22:50:27', '2018-09-20 22:50:27'),
(12, 'cosas', '2018-09-20 22:50:32', '2018-09-20 22:50:32'),
(13, 'batman', '2018-09-20 22:50:39', '2018-09-20 22:50:39'),
(14, 'rock', '2018-09-20 22:50:43', '2018-09-20 22:50:43'),
(15, 'metal', '2018-09-20 22:50:47', '2018-09-20 22:50:47'),
(16, 'ironman', '2018-09-20 22:50:53', '2018-09-20 22:50:53'),
(17, ':v', '2018-09-20 22:50:57', '2018-09-20 22:50:57'),
(18, 'pacman', '2018-09-20 22:51:03', '2018-09-20 22:51:03'),
(19, 'stranger', '2018-09-20 22:51:11', '2018-09-20 22:51:11'),
(20, 'head', '2018-09-20 22:51:16', '2018-09-20 22:51:16'),
(21, 'death shop', '2018-09-20 22:51:27', '2018-09-20 22:51:27'),
(22, 'deepweb', '2018-09-20 22:51:33', '2018-09-20 22:51:33'),
(23, 'forever alone', '2018-10-01 19:47:41', '2018-10-01 19:47:41'),
(24, 'sin ella :\'v', '2018-10-01 19:47:48', '2018-10-01 19:47:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('member','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'member',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'jhonny perez', 'JHONNYJOSE1998@GMAIL.COM', '$2y$10$kOW6G0.ZqeZOLaBNLvsMeuMaNzS5BsGmMmcJayJfxbkbblr4.y652', 'admin', 'JzxBT2sodqP5VpAU2kiCLUuF3zhkmYZ8h8AcMBqUXgxGBMgmtKV84qazdoaN', '2018-09-17 07:35:19', '2018-09-17 20:20:49'),
(3, 'yusuke', 'YUSUKEMOVIES@GMAIL.COM', '$2y$10$phyRAShbdEo4z0mu9pB/Z.wuVx1F0DtUBZCguvqKz6eEpB9bhEeSG', 'admin', 'wCKKTpKBgJ49ir0dcSm8neN8o1sx1odJiiMKtflnbmxQ9JxAZmEMIU8pg7Mb', '2018-09-19 19:40:40', '2018-10-01 18:01:32'),
(5, 'RmGQt7DMq6', 'vaHMBF3jtU@gmail.com', '$2y$10$2n2XczndnRvpIfqkJeOiIeQoZstT2/kfPRk9z01rysiSG.Mme0gXC', 'admin', 'ewL0yb19UEvPLMJwtBTRjvvuZZiBCbDXM0160k8OLBg27vitcVPINmgwPI2C', NULL, NULL),
(8, 'manuela welch', 'ruthie05@example.net', '$2y$10$kOW6G0.ZqeZOLaBNLvsMeuMaNzS5BsGmMmcJayJfxbkbblr4.y652', 'member', 'DvKVtwXllV', '2018-09-19 20:25:42', '2018-09-19 20:25:42'),
(10, 'geovany bailey', 'reggie87@example.com', '$2y$10$kOW6G0.ZqeZOLaBNLvsMeuMaNzS5BsGmMmcJayJfxbkbblr4.y652', 'member', 'pCnwYYjuKc', '2018-09-19 20:25:42', '2018-09-19 20:25:42'),
(11, 'dr. desiree schuppe', 'zakary.tillman@example.com', '$2y$10$kOW6G0.ZqeZOLaBNLvsMeuMaNzS5BsGmMmcJayJfxbkbblr4.y652', 'admin', 'xsL4J3kyJb', '2018-09-19 20:25:42', '2018-09-19 20:25:42'),
(12, 'gianni cartwright', 'davis.donna@example.net', '$2y$10$kOW6G0.ZqeZOLaBNLvsMeuMaNzS5BsGmMmcJayJfxbkbblr4.y652', 'member', 'Th8RxrxrrEGXpKbfj4Ok1kZKoMvyhddpdwO1VeZq9mMkNqPCswdD0rcHo0WW', '2018-09-19 20:25:42', '2018-09-19 20:25:42'),
(13, 'adriel metz', 'ryan.kiel@example.net', '$2y$10$kOW6G0.ZqeZOLaBNLvsMeuMaNzS5BsGmMmcJayJfxbkbblr4.y652', 'member', 'JClm946351', '2018-09-19 20:25:42', '2018-09-19 20:25:42'),
(14, 'alize conn iv', 'abogisich@example.net', '$2y$10$kOW6G0.ZqeZOLaBNLvsMeuMaNzS5BsGmMmcJayJfxbkbblr4.y652', 'member', 'eSKCKrSQAp', '2018-09-19 20:25:42', '2018-09-19 20:25:42'),
(15, 'miss janie reilly', 'ierdman@example.com', '$2y$10$kOW6G0.ZqeZOLaBNLvsMeuMaNzS5BsGmMmcJayJfxbkbblr4.y652', 'member', 'bl3HYn81dw', '2018-09-19 20:25:42', '2018-09-19 20:25:42'),
(16, 'alfonso franecki', 'einar55@example.org', '$2y$10$kOW6G0.ZqeZOLaBNLvsMeuMaNzS5BsGmMmcJayJfxbkbblr4.y652', 'member', 'V9yLZsxKXw', '2018-09-19 20:25:42', '2018-09-19 20:25:42'),
(17, 'jonny perez', 'jonny@gmail.com', '$2y$10$G0PEprJq/pE.uiiNMy1bm.6AVi4nezRqHOD6ps0K.r3hxePBb7nE.', 'admin', NULL, '2018-09-19 20:31:18', '2018-09-19 20:31:18'),
(19, 'jonny', 'jonny1954@gmail.com', '$2y$10$Gc25wJA4OoK1bmyeokDA6uKWKyW1DdV3sBpDf7ssjv5K28Qfce7Iq', 'member', 'JxCu77M53bEHuX5yTRZE6Jzz0TSKTsikf4YG30YeN3l1WAXaz9yFoRUqz4BR', '2018-10-01 18:06:37', '2018-10-01 18:06:37');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_user_id_foreign` (`user_id`),
  ADD KEY `articles_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `article_tag`
--
ALTER TABLE `article_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_tag_article_id_foreign` (`article_id`),
  ADD KEY `article_tag_tag_id_foreign` (`tag_id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_article_id_foreign` (`article_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `article_tag`
--
ALTER TABLE `article_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `article_tag`
--
ALTER TABLE `article_tag`
  ADD CONSTRAINT `article_tag_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
