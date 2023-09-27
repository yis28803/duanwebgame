-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 27, 2023 lúc 04:36 AM
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
-- Cơ sở dữ liệu: `abc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `iduser` int(10) DEFAULT 0,
  `bill_user` varchar(255) NOT NULL,
  `bill_email` varchar(255) NOT NULL,
  `ngaydathang` timestamp NULL DEFAULT current_timestamp(),
  `total` int(10) NOT NULL DEFAULT 0,
  `bill_status` tinyint(1) DEFAULT 0 COMMENT '0. Đơn hàng mới 1. Đang xử lý 2. Đang giao hàng 3. Đã giao hàng',
  `receive_name` varchar(255) DEFAULT NULL,
  `receive_address` varchar(255) DEFAULT NULL,
  `receive_tel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `bill_user`, `bill_email`, `ngaydathang`, `total`, `bill_status`, `receive_name`, `receive_address`, `receive_tel`) VALUES
(34, 1, 'Nguyễn Bá Nghĩa', 'nguyenbanghia04@gmai.com', '2023-09-26 22:10:09', 1600, 0, NULL, NULL, NULL),
(35, 2, 'Nguyễn Tấn Lợi', 'nguyentanloi@gmail.com', '2023-09-26 22:11:40', 4440, 0, NULL, NULL, NULL),
(36, 2, 'Nguyễn Tấn Lợi', 'nguyentanloi@gmail.com', '2023-09-26 22:21:51', 269800, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `name_sp` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quatity` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `name_sp`, `price`, `quatity`, `thanhtien`, `created_at`, `updated_at`, `idbill`) VALUES
(28, 1, 1, 'lead4dead2', 200, 2, 400, '2023-09-26 15:10:09', '2023-09-26 15:10:09', 34),
(29, 1, 3, 'lienquan', 400, 3, 1200, '2023-09-26 15:10:09', '2023-09-26 15:10:09', 34),
(30, 2, 2, 'tiktok', 2000, 2, 4000, '2023-09-26 15:11:40', '2023-09-26 15:11:40', 35),
(31, 2, 4, 'lienminh3', 110, 4, 440, '2023-09-26 15:11:40', '2023-09-26 15:11:40', 35),
(32, 2, 5, 'subnautica', 89000, 3, 267000, '2023-09-26 15:21:51', '2023-09-26 15:21:51', 36),
(33, 2, 7, 'dota', 700, 4, 2800, '2023-09-26 15:21:51', '2023-09-26 15:21:51', 36);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name_dm` varchar(255) NOT NULL,
  `bieutuong` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name_dm`, `bieutuong`) VALUES
(1, 'Account Steam', 'fa-solid fa-hippo'),
(2, 'Adobe', 'fa-solid fa-virus'),
(3, 'Battle.net', 'fa-solid fa-dog'),
(4, 'CD key', 'fa-solid fa-transgender'),
(5, 'Flash Sale', 'fa-solid fa-shield-dog'),
(6, 'Giải trí', 'fa-solid fa-gamepad'),
(7, 'Học tập', 'fa-solid fa-graduation-cap'),
(8, 'Hot', 'fa-solid fa-cube'),
(9, 'Làm việc', 'fa-solid fa-briefcase'),
(10, 'Origins', 'fa-solid fa-scroll-torah'),
(11, 'Spotify', NULL),
(12, 'Steam', 'fa-brands fa-steam'),
(13, 'Steam wallet', NULL),
(14, 'Tiện ích', NULL),
(18, 'abcde', NULL),
(20, 'text1', 'fa-solid fa-virus'),
(21, 'text3', 'fa-solid fa-graduation-cap');

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
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_09_21_035650_drop_foreign_key_from_cart_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `sale` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `luotxem` int(11) DEFAULT 0,
  `iddm` int(11) NOT NULL,
  `idtl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `sale`, `img`, `mota`, `luotxem`, `iddm`, `idtl`) VALUES
(1, 'lead4dead2', 230, 200, 'upload/gYZ0iTslbehu3GDrNr0rvlvpGGowcQPR6punnAM9.jpg', 'game ban sung', 2, 1, 3),
(2, 'tiktok', 2300, 2000, 'upload/NxwauQXbV9j8aacvUw1FBntFh3zT8Vsp3oqSjLRe.jpg', 'ung dung luot giai tri', 0, 3, 5),
(3, 'lienquan', 430, 400, 'upload/N0GZiQn6gC2DEYAHAzFlAs2NPqFTzYOyuQOIra8d.jpg', 'game choi tren dien thoai', 0, 4, 4),
(4, 'lienminh3', 140, 110, 'upload/Kq9xoBshQJO0M67cDYLHA9K1I6CKtRQYLSoQOezT.jpg', 'game tren dien thoai3', 0, 5, 5),
(5, 'subnautica', 260000, 89000, 'upload/2tsVPk475DgWxfJFN3sJXw4jY168g6Wg66jFCzo0.jpg', 'game sinh ton', 0, 5, 7),
(6, 'dumb', 630, 600, 'upload/NJ3AgunpqTKXDMNBf0dQO4wm6sP7BbI1NdSDVP8J.jpg', 'game nhay uc che', 0, 4, 8),
(7, 'dota', 730, 700, 'upload/iaLRHrSCx5qUop0JsF84fF2mOM4IFlCeiUrc9Alg.jpg', 'game chien thuat hoi xua', 0, 3, 1),
(8, 'dota2', 830, 800, 'upload/6uXYyzFpJ8o4yk9d7IHlPKUD0vE0u7HjIQJMyN7d.jpg', 'game chien thuat nang cap', 0, 2, 5),
(9, 'youtube', 930, 900, 'upload/k2YSStPV6YxydCUjqrkcX6NAfzY6sd4w6rieRNbN.jpg', 'ung dung xem phim', 0, 2, 1),
(10, 'spotifie', 1300, 1000, 'upload/vWimmmj0HGQD47dXIe17iE1FUJzGcgoAbneK8AZ3.png', 'ung dung nghe nhac', 0, 2, 8),
(12, 'khoahoc', 1111, 1001, 'upload/BF5VecUiAPI63lwGox91MYig70MiLG8zQ9qouzZy.jpg', 'thu nghiem1', 0, 1, 6),
(15, 'chem hoa qua', 222, 200, 'upload/rv5BagAvTUnNHcHgCWgQLz3dtcRSQvAhT1PmzTMd.jpg', 'game chem trai cay', 0, 1, 4),
(18, 'thuau', 99, 88, 'upload/phjx3mNfOqBoXGNcvSrKZqCrgE0asXcDT01AYtL8.jpg', 'CSGADGhgd', 0, 1, 3),
(33, 'toithunghiem', 123, 32, 'upload/bjRlL9j15NXVCixhU1N0WrZskrViDTTpOl9Vcy13.png', 'hello', 0, 21, 19);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `id` int(11) NOT NULL,
  `name_tl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`id`, `name_tl`) VALUES
(1, '3ds Max'),
(2, '3tl'),
(3, '50tb'),
(4, '5RM'),
(5, '5tl'),
(6, 'AA'),
(7, 'acc'),
(8, 'accgame'),
(9, 'account'),
(10, 'Acrobat'),
(14, 'abcd'),
(18, 'thunghiem1'),
(19, 'thunghiem2');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Nguyễn Bá Nghĩa', 'nguyenbanghia04@gmai.com', NULL, '$2y$10$GjtXQJ0eJu2.Yo2w7K6Ksee9NbX2zjoWfpz1yShMcqNHTxxEzpnAy', NULL, '2023-09-20 01:29:33', '2023-09-20 01:29:33', 'admin'),
(2, 'Nguyễn Tấn Lợi', 'nguyentanloi@gmail.com', NULL, '$2y$10$ITtWN3yY4qH6bqe8gy32POpy49CRozLTvnSJvbxp0wG5IQq2W1vve', NULL, '2023-09-26 04:19:22', '2023-09-26 04:19:22', 'client');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_user_id_foreign` (`user_id`),
  ADD KEY `cart_product_id_foreign` (`product_id`),
  ADD KEY `cart_bill_id_foreign` (`idbill`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
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
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`),
  ADD KEY `lk_sanpham_theloai` (`idtl`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_bill_id_foreign` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `cart_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `cart_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`),
  ADD CONSTRAINT `lk_sanpham_theloai` FOREIGN KEY (`idtl`) REFERENCES `theloai` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
