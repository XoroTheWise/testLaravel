-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 20 2022 г., 13:40
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testlaraka`
--

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `id` bigint UNSIGNED NOT NULL,
  `author_id` bigint UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `author_id`, `title`, `created_at`, `updated_at`) VALUES
(57, 8, '555', '2022-04-20 05:35:29', '2022-04-20 05:39:55'),
(58, 5, 'SSAFBOOOKOKOOK', '2022-04-20 05:35:38', '2022-04-20 05:35:38'),
(59, 11, 'BOOKbookBook', '2022-04-20 05:35:51', '2022-04-20 05:35:51'),
(60, 10, 'BookBBBB', '2022-04-20 05:36:04', '2022-04-20 05:36:04'),
(61, 8, 'kokoKK', '2022-04-20 05:36:16', '2022-04-20 05:36:16'),
(62, 11, 'testKOKtest', '2022-04-20 05:36:37', '2022-04-20 05:36:37'),
(63, 10, 'tessssssssttttt', '2022-04-20 05:37:02', '2022-04-20 05:37:02');

-- --------------------------------------------------------

--
-- Структура таблицы `books_genres`
--

CREATE TABLE `books_genres` (
  `id` bigint UNSIGNED NOT NULL,
  `book_id` bigint UNSIGNED NOT NULL,
  `genre_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `books_genres`
--

INSERT INTO `books_genres` (`id`, `book_id`, `genre_id`, `created_at`, `updated_at`) VALUES
(213, 57, 38, NULL, NULL),
(214, 57, 39, NULL, NULL),
(215, 58, 40, NULL, NULL),
(216, 58, 41, NULL, NULL),
(217, 59, 35, NULL, NULL),
(218, 59, 36, NULL, NULL),
(219, 59, 37, NULL, NULL),
(220, 59, 38, NULL, NULL),
(221, 59, 39, NULL, NULL),
(222, 59, 40, NULL, NULL),
(223, 60, 39, NULL, NULL),
(224, 61, 35, NULL, NULL),
(225, 61, 36, NULL, NULL),
(226, 61, 37, NULL, NULL),
(227, 61, 38, NULL, NULL),
(228, 61, 39, NULL, NULL),
(229, 61, 40, NULL, NULL),
(230, 61, 41, NULL, NULL),
(231, 62, 36, NULL, NULL),
(232, 62, 37, NULL, NULL),
(233, 62, 38, NULL, NULL),
(234, 63, 35, NULL, NULL),
(235, 63, 36, NULL, NULL),
(236, 63, 37, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `genres`
--

CREATE TABLE `genres` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `genres`
--

INSERT INTO `genres` (`id`, `name`, `created_at`, `updated_at`) VALUES
(35, 'GAG', '2022-04-20 05:34:48', '2022-04-20 05:34:48'),
(36, 'SAS', '2022-04-20 05:34:51', '2022-04-20 05:34:51'),
(37, 'WSW', '2022-04-20 05:34:54', '2022-04-20 05:34:54'),
(38, 'XXL', '2022-04-20 05:34:58', '2022-04-20 05:34:58'),
(39, 'Xl', '2022-04-20 05:35:01', '2022-04-20 05:35:01'),
(40, 'X', '2022-04-20 05:35:05', '2022-04-20 05:35:05'),
(41, 'L', '2022-04-20 05:35:08', '2022-04-20 05:35:08');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_06_113802_create_genres_table', 1),
(6, '2022_04_06_113803_create_books_table', 1),
(7, '2022_04_09_094151_create_books_genres_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `password`, `email`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'admin', 'admin1', '$2y$10$h5E/ArnPgRjrTDL76E.PzudyAE7/lC4SKI0aNK9hrhaLh.fiuaKQG', 'admin@mail.ru', NULL, '2022-04-18 10:12:34', '2022-04-20 05:38:33'),
(8, 'user', 'user', '$2y$10$XpSJpIb.wuuAltkfhY1L1.oAudVdtR.YnfLiiN0qAQ8LsLqJMKU1u', 'admin@mail.ru', NULL, '2022-04-19 04:29:17', '2022-04-20 05:40:27'),
(10, 'user', 'test', '$2y$10$XtFGIF.MQgALVI/zcWaNC.mvN7yQ1MuVdTJsoM9Y0UdSvapX7fPMm', 'test@mail.ru', NULL, '2022-04-20 04:35:38', '2022-04-20 04:35:38'),
(11, 'user', 'userTwo', '$2y$10$cO3Mbg1X0kRFJdSiT3awqeUYH9lgh0YaGH378.siH.d7g34kaQIpu', 'userTwo@mail.ru', NULL, '2022-04-20 05:33:36', '2022-04-20 05:33:36');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_author_idx` (`author_id`);

--
-- Индексы таблицы `books_genres`
--
ALTER TABLE `books_genres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_genre_book_idx` (`book_id`),
  ADD KEY `book_genre_genre_idx` (`genre_id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `genres_name_unique` (`name`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT для таблицы `books_genres`
--
ALTER TABLE `books_genres`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `book_author_fk` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `books_genres`
--
ALTER TABLE `books_genres`
  ADD CONSTRAINT `book_genre_book_fk` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `book_genre_genre_fk` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
