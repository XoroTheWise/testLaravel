-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 15 2022 г., 08:30
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
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `authorId` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `title`, `created_at`, `updated_at`, `authorId`) VALUES
(1, 'How to write a better book? *for sams', NULL, '2022-04-14 10:07:36', 3),
(2, 'MyFerstBook', NULL, '2022-04-14 22:48:02', 6),
(7, 'How to save your people? Frostmourne Edition.', '2022-04-14 09:39:56', '2022-04-14 10:12:57', 8),
(8, 'Who Traitor?', '2022-04-14 10:05:26', '2022-04-14 10:05:26', 8),
(9, 'Muscles and strength!!!', '2022-04-14 10:14:12', '2022-04-14 10:14:12', 4),
(10, 'Dead or Dead', '2022-04-14 10:14:36', '2022-04-14 10:14:36', 7),
(11, 'Who is a Nefarian? Guardian or Doom?1', '2022-04-14 10:15:45', '2022-04-15 00:02:58', 6),
(12, 'Update Horde', '2022-04-14 23:47:18', '2022-04-14 23:48:35', 4),
(13, 'Laravelium', '2022-04-14 23:47:28', '2022-04-14 23:48:48', 9),
(14, 'Bad Dragon gurls', '2022-04-14 23:47:40', '2022-04-14 23:49:05', 6),
(16, 'TestCreateFinal', '2022-04-15 00:28:06', '2022-04-15 00:28:06', 1),
(18, 'Dog or Vorgen, who best?', '2022-04-15 00:29:15', '2022-04-15 00:29:15', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `book_genres`
--

CREATE TABLE `book_genres` (
  `id` bigint UNSIGNED NOT NULL,
  `bookId` bigint UNSIGNED NOT NULL,
  `genreId` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `book_genres`
--

INSERT INTO `book_genres` (`id`, `bookId`, `genreId`, `created_at`, `updated_at`) VALUES
(14, 7, 3, NULL, NULL),
(16, 8, 1, NULL, NULL),
(17, 8, 2, NULL, NULL),
(18, 1, 7, NULL, NULL),
(19, 1, 8, NULL, NULL),
(20, 1, 9, NULL, NULL),
(21, 2, 7, NULL, NULL),
(22, 2, 8, NULL, NULL),
(28, 7, 1, NULL, NULL),
(29, 7, 6, NULL, NULL),
(31, 9, 3, NULL, NULL),
(32, 9, 4, NULL, NULL),
(33, 10, 2, NULL, NULL),
(34, 11, 1, NULL, NULL),
(35, 11, 2, NULL, NULL),
(36, 11, 8, NULL, NULL),
(37, 12, 1, NULL, NULL),
(38, 12, 2, NULL, NULL),
(39, 12, 3, NULL, NULL),
(40, 12, 4, NULL, NULL),
(43, 13, 3, NULL, NULL),
(51, 14, 3, NULL, NULL),
(52, 14, 2, NULL, NULL),
(53, 14, 4, NULL, NULL),
(57, 16, 1, NULL, NULL),
(58, 16, 2, NULL, NULL),
(59, 16, 3, NULL, NULL),
(60, 16, 4, NULL, NULL),
(63, 18, 3, NULL, NULL),
(64, 18, 4, NULL, NULL),
(65, 18, 8, NULL, NULL),
(66, 18, 9, NULL, NULL);

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
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `genres`
--

INSERT INTO `genres` (`id`, `genre`, `created_at`, `updated_at`) VALUES
(1, 'Хоррор', NULL, '2022-04-14 10:07:54'),
(2, 'Романтика', NULL, '2022-04-14 10:08:04'),
(3, '21+', '2022-04-14 09:28:59', '2022-04-14 10:08:12'),
(4, '18+', '2022-04-14 09:31:19', '2022-04-14 10:08:19'),
(5, 'Экшен', '2022-04-14 10:08:28', '2022-04-14 10:08:28'),
(6, 'Детектив', '2022-04-14 10:08:57', '2022-04-14 10:08:57'),
(7, 'Музыка', '2022-04-14 10:09:06', '2022-04-14 10:09:06'),
(8, 'Фентези', '2022-04-14 10:09:10', '2022-04-14 10:09:10'),
(9, 'Спорт', '2022-04-14 10:09:27', '2022-04-14 10:09:27'),
(10, 'Этти', '2022-04-14 23:45:58', '2022-04-14 23:45:58');

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
(5, '2022_04_06_113801_create_authors_table', 1),
(6, '2022_04_06_113802_create_genres_table', 1),
(7, '2022_04_06_113803_create_books_table', 1),
(8, '2022_04_09_094151_create_book_genres_table', 1),
(9, '2022_04_11_143522_add_column_role_to_users_table', 1);

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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$l.P7Th6s3Gv009VKIxyGo.9hDDQPkEghsQu17ptJBYfO.AvQb0Ip6', 'admin@mail.ru', 'admin', NULL, '2022-04-14 09:25:34', '2022-04-14 23:44:27'),
(2, 'TheBestAuthor', '$2y$10$asMfMBCBdTWrVzkz1P4imecGsvjX5exTTtYVaDpJGhSjmwYEdN37q', 'author@mail.ru', 'user', NULL, '2022-04-14 09:27:00', '2022-04-14 22:58:48'),
(3, 'BestSamAuthor', '$2y$10$NiOYMn/VzarM3NKje/cejuG0gSdsqmseZs/LUo3yrfeh64Vz6vHfa', 'sam322@gmail.com', 'user', NULL, '2022-04-14 09:58:03', '2022-04-14 09:58:03'),
(4, 'GarroshHellscream', '$2y$10$DKdaNIG1Z0Tzav/2c9ah8uaau.TbJeeZXaOSmq8cT/ynVKU8lP4Ya', 'ForTheHorde@horde.orc', 'user', NULL, '2022-04-14 09:59:27', '2022-04-14 09:59:27'),
(5, 'GennGreymane', '$2y$10$9Ki8dBO1WHMY.ZuTZZMriOh4RKIbwFhsO7OX.jBxKSrhR7jKFyKju', 'loveGilneas@alliance.hum', 'user', NULL, '2022-04-14 10:00:38', '2022-04-14 10:00:38'),
(6, 'IAmAlexstrasza', '$2y$10$3WAvsZF8X31UUC5sha/Hcu3Xk7A2idhH5jh4zg0LSVonmRbj3CCwW', 'redDragon@gmail.com', 'user', NULL, '2022-04-14 10:01:32', '2022-04-14 22:56:36'),
(7, 'Bwonsamdi', '$2y$10$jL9rImGGYrJg9Nql0APGj.aClLmw4l6/qBu0fndVIluxuzUeAPklm', 'deadandservice@troll.com', 'user', NULL, '2022-04-14 10:02:28', '2022-04-14 10:02:28'),
(8, 'Arthas Menethil Prince of Lordaeron', '$2y$10$sFTQMaNjArGHt6M/wAAFAeFPQIlcN9OgkODVJWAD97t/b8FiJcoeO', 'forMyFather@lich.ru', 'user', NULL, '2022-04-14 10:04:07', '2022-04-14 10:04:07'),
(9, 'DimasikLaravelProgrammer1', '$2y$10$IfhA06OyKupgY3ZmZFfpi.406vW89T2ZRr2vZ.XbjD6uQT1oS5Yu6', 'asdfg@gmail.ocm', 'user', NULL, '2022-04-14 23:46:49', '2022-04-15 00:02:45');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_author_idx` (`authorId`);

--
-- Индексы таблицы `book_genres`
--
ALTER TABLE `book_genres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_genre_book_idx` (`bookId`),
  ADD KEY `book_genre_genre_idx` (`genreId`);

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
  ADD UNIQUE KEY `genres_genre_unique` (`genre`);

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `book_genres`
--
ALTER TABLE `book_genres`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `book_author_fk` FOREIGN KEY (`authorId`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `book_genres`
--
ALTER TABLE `book_genres`
  ADD CONSTRAINT `book_genre_book_fk` FOREIGN KEY (`bookId`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `book_genre_genre_fk` FOREIGN KEY (`genreId`) REFERENCES `genres` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
