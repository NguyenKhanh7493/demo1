-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 12, 2018 lúc 10:54 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `demo1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_28_075818_entrust_setup_tables', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'create-user', 'Create User', 'Create User', '2018-11-14 17:00:00', NULL),
(2, 'edit-user', 'Edit User', 'Edit User', '2018-11-14 17:00:00', NULL),
(3, 'delete-user', 'Delete User', 'Delete User', '2018-11-13 17:00:00', NULL),
(4, 'create-post', 'Create Post', 'Thêm mới sản phẩm', '2018-12-17 17:00:00', NULL),
(5, 'edit-post', 'Edit Post', 'Sửa danh mục sản phẩm', '2018-12-26 17:00:00', NULL),
(6, 'delete-post', 'Delete Post', 'Xóa sản phẩm', '2018-12-10 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 3),
(5, 2),
(5, 3),
(6, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'Quản lý tất cả', '2018-11-13 17:00:00', NULL),
(2, 'censor', 'Censor', 'kiểm duyệt bài viết', '2018-11-21 17:00:00', NULL),
(3, 'employee', 'Employee', 'Người viết bài', '2018-11-20 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(2, 1),
(3, 2),
(4, 3),
(19, 2),
(20, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `fullname`, `email`, `password`, `address`, `phone`, `gender`, `avatar`, `status`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'admin', 'Nguyễn Như Khánh', 'nguyenkhanh7493@gmail.com', '$2y$10$DQ4PzN5kkC3xBqJWuYQ4He1cftxjWLit9XSl5sG4moehcMVzzHaBu', 'Vĩnh thủy - Vĩnh Linh -Quảng Trị', '0964245027', 1, 'https://www.facebook.com/photo.php?fbid=1099413300206952&set=t.100004148760923&type=3&theater', 1, 'f0k1wTGhqjqCoTpvqT1ZJMqr7I5D0Zd0iVh99ekWDqhB3wyEtBoiRsEm6nQ7', '2018-11-21 00:51:19', '2018-11-21 00:51:19', NULL),
(3, 'censor', 'Đoàn THị Xuân Hiếu', 'xuanhieu7496@gmail.com', '$2y$10$tArwapbEiuFWqsbl6Zr32OpqyulJ26ncAxuY./ZcnW/TtLy851Ex.', 'QUẢNG TRỊ', '0972024098', 1, 'hieu', 1, 'asGFSxFzmF5qfTYJNmAJA44IsXrNsH1US52K6gZxEVWH12S1LD2gdE4IjuwP', '2018-11-28 20:09:33', '2018-11-28 20:09:33', NULL),
(4, 'employee', 'Nguyễn Khánh Long', 'khanhlong7498@gmail.com', '$2y$10$il90EK76z8L0d5Wcttfk9.ND8DipF1OkEluWqpO8br24N.px46yBq', 'QUẢNG TRỊ', '0972024098', 1, 'hieu', 1, NULL, '2018-11-28 20:10:57', '2018-11-28 20:10:57', NULL),
(5, 'admin', 'khanhne1234acd', 'khanhne@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'quangtri', '01658148257', 0, 'http://demo1.site/public/images/user/13034510073_c99dc89679_b.jpg', 1, NULL, '2018-12-04 23:59:40', '2018-12-07 01:24:18', NULL),
(6, 'censor', 'hiudien ne', 'hiudien@gmail.com', '1234567', 'quangtri', '01688434788', 1, 'http://demo1.site/public/images/user/http://demo1.site/public/images/user/hieuunganh.com_5bd926f07ec9e.jpg', 1, NULL, '2018-12-05 00:04:10', '2018-12-07 01:26:16', NULL),
(7, 'ment', 'khanhhuhu', 'khanhhihi@gmail.com', '123456', 'quangtri', '01658148257', 0, 'http://demo1.site/public/images/user/hinh-nen-luffy-one-piece-19.jpg', 1, NULL, '2018-12-05 21:21:43', '2018-12-05 21:21:43', NULL),
(8, 'thu', 'testthu', 'thune12@gmail.com', '123456', 'qe', '1234567890', 0, 'http://demo1.site/public/images/user/fe6f47ae6e0a117b_3486830cbe8ca4a6_16257814739311769143215.jpg', 1, NULL, '2018-12-05 23:10:35', '2018-12-05 23:10:35', NULL),
(9, 'kk', 'hy vọng đc', 'dcko@gmail.com', '123456', 'khanhne', '1234567890', 0, 'http://demo1.site/public/images/user/hinh-nen-chopper-3.jpg', 1, NULL, '2018-12-06 00:24:32', '2018-12-06 00:24:32', NULL),
(10, 'admin', 'xuanhieu', 'hieuoi@gmail.com', '$2y$10$9C54tvtiockUQGkACqbjFezTn17k7YmnKHDXt/ag8sM/1gI9SecSe', 'kk', '1234567890', 0, 'http://demo1.site/public/images/user/40366047_832870557103998_7194142045538091008_o.jpg', 1, 'W4PRMAya21sMFzjOWqBDKGDIIYfKmag7EX0Sod4lgrQ8aAt7anTmEr5MIQQU', '2018-12-06 02:29:33', '2018-12-06 02:29:33', NULL),
(11, 'nhanvien', 'khanh', 'khanh@gmail.com', '$2y$10$6QC9LZTEkfgRAyKr476ypuDmj9wFOseHybd6rEN5lxHtFERVqnLE.', 'ưewrwe', '1234567890', 0, 'F:\\xampp\\tmp\\phpE8D3.tmp', 1, NULL, '2018-12-07 02:30:45', '2018-12-07 02:30:45', NULL),
(12, 'd', 'de', 'a@gmail.com', '$2y$10$9pHqkkQ.ghekywQ8/vgpauCBlcxgqcXBu7ofYE3f6Y1/dvG35u9oW', 'Đường 434 - Thuận An - Bình Dương', '01688434788', 2, 'public/images/user/13034541673_1df0512e0b_b.jpg', 1, NULL, '2018-12-07 02:32:37', '2018-12-07 02:32:37', NULL),
(13, 'er', 'khanhne', 'khanhoi@gmail.com', '$2y$10$1bLDi4fkMse6u/BYUx2Mjuzl.6H17dlPhPmpB4I1Wl739oxfxWtA6', 'kkaak', '1234567890', 0, 'hinh-nen-luffy-one-piece-13.jpg', 1, NULL, '2018-12-07 02:35:20', '2018-12-09 23:45:33', NULL),
(14, 'Khánh Như', 'Khánh Như', 'dckof@gmail.com', '$2y$10$jlOX54YTHaVtjgNY3aEcreuZp3v73G83VpQ66NzYSZkjwD/4Q2UDC', 'qeq', '1234567890', 0, 'anh-luffy-chibi-8.png', 1, NULL, '2018-12-10 23:14:26', '2018-12-10 23:14:26', NULL),
(15, 'haha', 'haha', 'haha@gmail.com', '$2y$10$2j3fcZ1G2jaidLLr1a302ueo8G4ZuB9ynblucyQ7vcgMB1SxHUklG', 'aquan', '1234567890', 0, 'Chibi-Sanji-630x420.jpeg', 1, NULL, '2018-12-10 23:19:34', '2018-12-10 23:19:34', NULL),
(16, 'haha', 'haha', 'hahane@gmail.com', '$2y$10$nTqp3MnBjPBzq.A9HU01C.fufdBhCd2K9QRCZ66eMAvOb6YbYnflm', 'aquan', '1234567890', 0, 'hinh-anh-hinh-nen-zoro-dep-nhat-one-piece-18.png', 1, NULL, '2018-12-10 23:20:21', '2018-12-10 23:20:21', NULL),
(17, 'rq', 'rrrrrrrr', 'rrr@gmail.com', '$2y$10$brXxsVBAS5Uy4KGjCQ91CehLF2yYSKDah3hkL7J4EabobXm.8McPm', 'âdadad', '1234567890', 0, 'hinh-nen-luffy-one-piece-13.jpg', 1, NULL, '2018-12-11 01:12:50', '2018-12-11 01:12:50', NULL),
(18, 'rq', 'rrrrrrrr', 'rrrs@gmail.com', '$2y$10$cEsBxApF2UAgqUvt2cehze/hQJE0o7G/QBD/bCxix/7/SpkxGK0C.', 'âdadad', '1234567890', 0, 'big-1663460904.png', 1, NULL, '2018-12-11 01:14:11', '2018-12-11 01:14:11', NULL),
(19, 'dc ko', 'dc ko ne', 'dckothu@gmail.com', '$2y$10$Qvt8pWLDQdKuIYro6nr9quM74Xzqw4nVJpZmHGAVvbHdDBFh4xO4y', 'khanhoi', '1234567890', 0, 'hinh-nen-luffy-one-piece-19.jpg', 1, NULL, '2018-12-11 01:19:42', '2018-12-11 01:19:42', NULL),
(20, 'thu lan', 'thử lần 2', 'thune123@gmail.com', '$2y$10$CZkuvtxgRsyBX6DaTSBiUeJpoqmpeM0sciL60XJ9tNnH7QWwyHSyO', 'quangtri', '1234567890', 0, 'hinh-nen-chopper-3.jpg', 1, NULL, '2018-12-11 19:32:46', '2018-12-11 19:32:46', NULL),
(21, 'Khanh', 'Khánh Đẹp Trai', 'khanhdeptrai@gmail.com', '$2y$10$OplXLPRRAVqlgWda7JAaPOjph0TDQajfnKAikHRHsJBpqgWw3PEVi', 'quangtri', '1234567890', 0, 'hinh-anh-cuc-hoa-mi-dep-nhat.jpg', 1, NULL, '2018-12-11 23:46:38', '2018-12-11 23:46:38', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

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
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Chỉ mục cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Chỉ mục cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
