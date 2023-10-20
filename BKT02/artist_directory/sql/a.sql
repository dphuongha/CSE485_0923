-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 20, 2023 lúc 06:40 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `artworks`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `artworks`
--

CREATE TABLE `artworks` (
  `id` int(10) UNSIGNED NOT NULL,
  `artist_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `art_type` enum('paint','music','literary') NOT NULL,
  `media_link` varchar(255) NOT NULL,
  `cover_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `artworks`
--

INSERT INTO `artworks` (`id`, `artist_name`, `description`, `art_type`, `media_link`, `cover_image`) VALUES
(12, 'lê', 'bbbbbbbbbbbb', 'paint', 'http://kassulke.com/quas-maiores-voluptate-saepe-sit-mollitia-qui-corrupti.html', 'https://via.placeholder.com/640x480.png/00bb88?text=commodi'),
(15, 'Florence Swift', 'Praesentium id magnam consequatur accusamus fugiat libero. Dolorem ut eligendi modi soluta voluptas fugiat voluptatibus distinctio.', 'music', 'http://www.waelchi.info/', 'https://via.placeholder.com/640x480.png/00ee88?text=accusantium'),
(16, 'Mr. Joaquin Conn II', 'Consequuntur dolorem temporibus ut eos et maiores et. Aliquid quibusdam atque ut distinctio.', 'music', 'http://www.tillman.net/', 'https://via.placeholder.com/640x480.png/00ccaa?text=aspernatur'),
(18, 'Kathryne Cormier', 'Blanditiis non deserunt quia odit eius. At velit necessitatibus unde sit beatae. Ullam et sed ratione. Modi sed sit voluptatum et.', 'literary', 'http://halvorson.com/quod-qui-ex-praesentium-molestiae-amet.html', 'https://via.placeholder.com/640x480.png/00bb00?text=nihil'),
(19, 'Makenna Dare Jr.', 'Aut aspernatur alias nulla optio earum sed impedit. Aut vel occaecati non. Iste hic et non culpa et sit illum numquam. Modi quod et architecto sit.', 'music', 'http://www.heathcote.com/temporibus-officia-voluptas-eligendi', 'https://via.placeholder.com/640x480.png/005555?text=rerum'),
(20, 'Donavon Marks', 'Ut nostrum autem voluptatem libero inventore et omnis. Et praesentium pariatur sit quis. Et vel qui quos.', 'literary', 'https://roob.com/error-quam-asperiores-eius-omnis-consequatur-aut.html', 'https://via.placeholder.com/640x480.png/004411?text=est'),
(21, 'Ignatius Lind III', 'Maxime quasi quia et et. Et aut voluptatum rem omnis. Ut sapiente perferendis earum dicta quisquam. Repellendus libero odio amet qui inventore impedit molestias.', 'music', 'http://brown.com/', 'https://via.placeholder.com/640x480.png/0033bb?text=maiores'),
(22, 'mai', 'aaaaaaaaaaaaaaaaaaaaaaa', 'music', 'https://eng2it.com/mod/assign/view.php?id=31', 'https://eng2it.com/mod/assign/view.php?id=31'),
(23, 'hiếu', 'aaaa', 'paint', 'https://eng2it.com/mod/assign/view.php?id=31', 'https://eng2it.com/mod/assign/view.php?id=31'),
(24, 'mai', 'ddddddddđ', 'music', 'https://eng2it.com/mod/assign/view.php?id=31', 'https://eng2it.com/mod/assign/view.php?id=31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_20_030635_create_artworks_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `artworks`
--
ALTER TABLE `artworks`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `artworks`
--
ALTER TABLE `artworks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
