-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 14, 2019 lúc 10:52 AM
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
-- Cấu trúc bảng cho bảng `cates`
--

CREATE TABLE `cates` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `parent_id` int(11) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `menu_top` int(11) DEFAULT NULL,
  `menu_right` int(11) DEFAULT NULL,
  `icon` int(11) DEFAULT NULL,
  `footer` int(11) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cates`
--

INSERT INTO `cates` (`id`, `name`, `alias`, `status`, `parent_id`, `type`, `menu_top`, `menu_right`, `icon`, `footer`, `keywords`, `description`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Khánh Nguyễn Như', 'khanh-nguyen-nhu', 1, 0, NULL, 1, 1, NULL, 1, 'Laptop giá rẻ', 'ad', NULL, '2018-12-20 21:45:54', '2018-12-20 21:45:54'),
(2, 'Laptop', 'laptop', 1, 1, 1, 1, 1, NULL, 1, 'khanhne', 'khanhnebacon', NULL, '2018-12-20 23:52:35', '2018-12-20 23:52:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `item_type` int(11) DEFAULT NULL,
  `item_id` int(11) NOT NULL,
  `url` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `images`
--

INSERT INTO `images` (`id`, `image_name`, `title`, `item_type`, `item_id`, `url`, `created_at`, `updated_at`) VALUES
(23, 'banmetoday.com-004.jpg', 'khanhnea', 1, 6, NULL, '2019-01-06 21:04:49', '2019-01-06 21:04:49'),
(25, 'hinh-nen-cho-dien-thoai-cam-ung-4.jpg', 'khanhnea', 1, 6, NULL, '2019-01-06 21:04:50', '2019-01-06 21:04:50'),
(27, 'images (1).jpg', 'khanhnea', 1, 6, NULL, '2019-01-06 21:04:50', '2019-01-06 21:04:50'),
(28, 'hieuunganh.com_5bd926f07ec9e.jpg', 'khánh', 1, 9, NULL, '2019-01-07 20:39:53', '2019-01-07 20:39:53'),
(31, 'hinh-nen-luffy-vua-hai-tac (5).jpg', 'dgggd', 1, 10, NULL, '2019-01-07 20:42:39', '2019-01-07 20:42:39'),
(35, 'cuc-hoa-mi-dep-3.jpg', 'Tiêu đề33', 1, 8, NULL, '2019-01-08 21:10:52', '2019-01-08 21:10:52'),
(36, 'cuc-hoa-mi-dep-11.jpg', 'Tiêu đề33', 1, 8, NULL, '2019-01-08 21:10:53', '2019-01-08 21:10:53'),
(37, 'hinh-nen-luffy-vua-hai-tac (14).jpg', 'khanh1', 1, 11, NULL, '2019-01-08 21:49:18', '2019-01-08 21:49:18'),
(38, 'hinh-nen-one-piece-2.jpeg', 'khanh1', 1, 11, NULL, '2019-01-08 21:49:18', '2019-01-08 21:49:18'),
(39, 'zoro-onepiece-wallpaper-hd (2).png', 'khanh1', 1, 11, NULL, '2019-01-08 21:49:18', '2019-01-08 21:49:18'),
(40, 'Chiase360.Com (5).jpg', 'khanh2', 1, 12, NULL, '2019-01-08 21:50:00', '2019-01-08 21:50:00'),
(42, 'hinh-nen-one-piece-11.jpeg', 'khanh3', 1, 13, NULL, '2019-01-08 21:50:56', '2019-01-08 21:50:56'),
(43, 'hinh-nen-one-piece-16.jpg', 'khanh3', 1, 13, NULL, '2019-01-08 21:50:56', '2019-01-08 21:50:56'),
(44, 'zoro-onepiece-wallpaper-hd (7).jpg', 'khanh3', 1, 13, NULL, '2019-01-08 21:50:56', '2019-01-08 21:50:56'),
(47, 'f7ee043730020fb23c25decd0dfdeca4.jpg', 'ư', 1, 15, NULL, '2019-01-10 22:00:29', '2019-01-10 22:00:29'),
(48, 'hinh-nen-cho-dien-thoai-cam-ung-4.jpg', 'ư', 1, 15, NULL, '2019-01-10 22:00:29', '2019-01-10 22:00:29'),
(49, 'hinh-nen-dien-thoai-13.jpg', 'ư', 1, 15, NULL, '2019-01-10 22:00:29', '2019-01-10 22:00:29'),
(55, 'banmetoday.com-004.jpg', NULL, 2, 3, NULL, '2019-01-11 01:02:06', '2019-01-11 01:02:06'),
(57, 'hinh-nen-cho-dien-thoai-cam-ung-4.jpg', NULL, 2, 3, NULL, '2019-01-11 01:02:06', '2019-01-11 01:02:06'),
(61, '1q.jpg', 'kahnsh ơi là khánh', 1, 16, NULL, '2019-01-13 19:42:02', '2019-01-13 19:42:02'),
(62, '12.jpg', 'kahnsh ơi là khánh', 1, 16, NULL, '2019-01-13 19:42:02', '2019-01-13 19:42:02'),
(63, 'f7ee043730020fb23c25decd0dfdeca4.jpg', 'kahnsh ơi là khánh', 1, 16, NULL, '2019-01-13 19:42:02', '2019-01-13 19:42:02'),
(65, 'images (6).jpg', NULL, 2, 4, NULL, '2019-01-14 02:26:02', '2019-01-14 02:26:02'),
(66, 'lotus-25438418c06e0f97cc45e41.md.jpg', NULL, 2, 4, NULL, '2019-01-14 02:26:02', '2019-01-14 02:26:02'),
(67, 'images (3).jpg', NULL, 2, 5, NULL, '2019-01-14 02:27:06', '2019-01-14 02:27:06'),
(68, 'images (4).jpg', NULL, 2, 5, NULL, '2019-01-14 02:27:06', '2019-01-14 02:27:06'),
(69, 'images (7).jpg', NULL, 2, 5, NULL, '2019-01-14 02:27:06', '2019-01-14 02:27:06');

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
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2018_11_28_123824_entrust_setup_tables', 1),
(16, '2018_12_17_091443_create_table__cates_table', 1),
(17, '2018_12_26_040147_create_table_products_table', 2),
(18, '2018_12_27_082656_create_table_images_table', 2),
(19, '2019_01_09_085823_create_table_posts_table', 3);

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
(1, 'create-user', 'Create User', 'Thêm quản trị', '2018-12-04 10:00:00', '2018-12-20 10:00:00'),
(2, 'edit-user', 'Edit User', 'Sửa quản trị', '2018-12-24 10:00:00', '2018-12-24 10:00:00'),
(3, 'delete-user', 'Delete User', 'Xóa quản trị', '2018-12-19 10:00:00', '2018-12-20 10:00:00'),
(4, 'create-post', 'Create Post', 'Thêm bài viết', '2018-12-17 10:00:00', '2018-12-17 10:00:00'),
(5, 'edit-post', 'Edit Post', 'Sửa bài viết', '2018-12-18 10:00:00', '2018-12-19 10:00:00'),
(6, 'delete-post', 'Delete Post', 'Xóa bài viết', '2018-12-18 10:00:00', '2018-12-18 10:00:00'),
(7, 'edit-product', 'Edit Product', 'Sửa sản phẩm', '2019-01-21 17:00:00', '2019-01-06 17:00:00'),
(8, 'create-product', 'Create Product', 'Thêm sản phẩm', '2019-01-29 17:00:00', '2019-01-22 17:00:00'),
(9, 'delete-product', 'Delete Product', 'Xóa sản phẩm', '2019-01-08 17:00:00', '2019-01-22 17:00:00');

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
(4, 1),
(4, 3),
(5, 1),
(5, 2),
(5, 3),
(6, 1),
(6, 2),
(7, 5),
(8, 5),
(9, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `home` int(11) DEFAULT NULL,
  `new` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `introduction` text NOT NULL,
  `content` longtext NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  `url_video` varchar(255) DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `cate_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `name`, `alias`, `avatar`, `home`, `new`, `status`, `introduction`, `content`, `keywords`, `description`, `url_video`, `view`, `tag`, `cate_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Quảng trị anh hùng', 'quang-tri-anh-hung', 'images (4).jpg', 1, NULL, 1, 'quảng trị quê tui', 'khánh nè', 'khánh nè', 'khánh nè', NULL, NULL, '24h', 1, 17, '2019-01-10 21:39:43', '2019-01-10 21:39:43'),
(2, 'tôi là khánh', 'toi-la-khanh', 'images (7).jpg', 1, NULL, 1, 'khánh', 'khánh', 'khánh', 'khánh', NULL, NULL, NULL, 2, 16, '2019-01-10 23:18:58', '2019-01-10 23:18:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `num` int(11) NOT NULL,
  `price_old` int(11) NOT NULL,
  `price_new` int(11) DEFAULT NULL,
  `percent` int(11) DEFAULT NULL,
  `avatar` varchar(255) NOT NULL,
  `home` int(11) DEFAULT NULL,
  `new` int(11) DEFAULT NULL,
  `hot` int(11) DEFAULT NULL,
  `best_sale` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `introduction` text NOT NULL,
  `content` longtext NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cate_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `view` int(11) DEFAULT NULL,
  `cart` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `alias`, `num`, `price_old`, `price_new`, `percent`, `avatar`, `home`, `new`, `hot`, `best_sale`, `status`, `title`, `introduction`, `content`, `keywords`, `description`, `cate_id`, `user_id`, `view`, `cart`, `created_at`, `updated_at`) VALUES
(8, 'hihi', 'hihi', 4, 35, 5, NULL, '12.jpg', 1, 0, 0, 0, 1, 'Tiêu đề33', 'wer', 'ưerwerwe', 'rưerwerwe', 'rưerwer', 1, 1, NULL, NULL, '2019-01-03 20:15:32', '2019-01-03 20:15:32'),
(11, 'khanh1', 'khanh1', 2, 2, 2, NULL, 'hinh-nen-luffy-vua-hai-tac (5).jpg', 0, 0, 0, 0, 0, 'khanh1', 'kk', 'k', 'k', 'k', 1, 1, NULL, NULL, '2019-01-08 21:49:18', '2019-01-08 21:49:18'),
(12, 'khanh2', 'khanh2', 22, 222, 222, NULL, 'hinh-anh-one-piece-dep-nhat.jpg', 0, 0, 0, 0, 0, 'khanh2', 'a', 'k', 'k', 'k', 1, 1, NULL, NULL, '2019-01-08 21:50:00', '2019-01-09 02:32:47'),
(13, 'ad', 'ad', 3, 3, 3, NULL, 'tải xuống.jpg', 0, 1, 0, 0, 1, 'ad', 'ad', 'ád', 'sad', 'ád', 1, 1, NULL, NULL, '2019-01-10 21:58:20', '2019-01-10 21:58:20'),
(14, 'Hiếu điên', 'hieu-dien', 3, 4, 4, NULL, '12.jpg', 0, 0, 0, 0, 1, 'd', 'ưqww', 'sad', 'ád', 'ád', 1, 1, NULL, NULL, '2019-01-10 21:59:11', '2019-01-10 21:59:11'),
(15, 'd', 'd', 4, 4, 4, NULL, '38f722d0b02751790836.jpg', 1, 0, 0, 0, 0, 'ư', 'ư', 'ư', 'ư', 'đ', 1, 1, NULL, NULL, '2019-01-10 22:00:21', '2019-01-10 22:00:21'),
(16, 'Khánh thử nè', 'khanh-thu-ne', 23, 42, 43, NULL, 'tải xuống.jpg', 0, 0, 1, 0, 1, 'kahnsh ơi là khánh', 'kahsnh', 'khánh', 'khnsh', 'khánh', 1, 1, NULL, NULL, '2019-01-13 19:42:02', '2019-01-13 19:42:02');

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
(1, 'admin', 'Admin', 'Đây là quản trị cao cấp', '2018-12-18 10:00:00', '2018-12-13 10:00:00'),
(2, 'censor', 'censor', 'Đây là người kiểm duyệt', '2018-12-11 10:00:00', '2018-12-12 10:00:00'),
(3, 'employee-post', 'Employee', 'Đây là người đăng bài viết', '2018-12-24 10:00:00', '2018-12-19 10:00:00'),
(5, 'employee-product\r\n', 'Employee Post', 'Người đăng sản phẩm', '2019-01-28 17:00:00', '2019-01-22 17:00:00');

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
(1, 1),
(11, 2),
(12, 3),
(14, 5),
(15, 5),
(16, 2),
(17, 1);

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
(1, 'Nguyễn Khánh', 'Nguyễn Như Khánh', 'nguyenkhanh7493@gmail.com', '$2y$10$CXZx6yokokq8v5o4z8wdBeVE.jI6XWB/G0et7TRuIFDDhu1Uoynw6', 'QUẢNG TRỊ', '0964245027', 0, 'Capture.JPG', 1, NULL, '2018-12-16 19:32:15', '2018-12-16 19:46:06', NULL),
(11, 'Khánh Long', 'Nguyễn Khánh Long', 'khanhlongqt7498@gmail.com', '$2y$10$T1XiUWryWAzRr7x14wr0ZOgvprU.vgOBpQJRxZCMthvkeNjHMzzXu', 'vĩnh linh quảng trị', '0967257501', 0, 'anh-luffy-chibi-8.png', 1, NULL, '2019-01-08 21:17:04', '2019-01-08 21:17:04', NULL),
(12, 'Xuân Hiếu', 'Đoàn Thị Xuân Hiếu', 'xuanhieu7496@gmail.com', '$2y$10$6HkhVMafjGwZnQa9FRUNduhQKreeUmeNQvqUYpblksDhn741TPkaS', 'vĩnh linh quảng trị', '0972024098', 1, 'anh-luffy-chibi-8.png', 1, NULL, '2019-01-08 21:21:16', '2019-01-09 00:19:10', NULL),
(14, 'thử nè khánh ơi', 'qq', 'test1@gmail.com', '$2y$10$y4QtL7MT043H87fbOdKTJOz8A5rIno7UeKgWNMDP4bDzbbw9EQP.W', 'qe', '1688434788', 1, '1q.jpg', 1, NULL, '2019-01-09 00:34:36', '2019-01-10 20:12:30', NULL),
(15, 'r', 'r', 'rrr@gmail.com', '$2y$10$2Nk2XFhqW9qK96yYEIrDFuyMVqJnuiQwbVQY2xJ1qrh.G/SoDl8t6', 'rrr', '5555555555', 1, 'anh-luffy-chibi-8.png', 1, NULL, '2019-01-09 00:36:01', '2019-01-09 00:36:01', NULL),
(16, 'k', 'k', 'khanh@gmail.com', '$2y$10$Rf92XZXUDIkey8zkMU.tVOXTxZI/6LX2QKo8lqzLd10ID7i.LhNQ6', 'kkkkkkkkkkkkkkkkk', '1688434788', 0, 'anh-luffy-chibi-8.png', 1, NULL, '2019-01-09 00:45:57', '2019-01-09 00:45:57', NULL),
(17, 'Khánh Như', 'Khánh Như', 'admin@ers.com', '$2y$10$zmtj5B.npIrZcT1BZNOlX.tTbqSltp2lWBN/kMzbnEOcFLOe4Jjpq', 'quảng trị', '1688434788', 1, 'hinh-nen-luffy-one-piece-13.jpg', 1, NULL, '2019-01-09 01:29:23', '2019-01-09 01:43:05', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cates`
--
ALTER TABLE `cates`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`,`item_id`);

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
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_cate_id_foreign` (`cate_id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_cate_id_foreign` (`cate_id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT cho bảng `cates`
--
ALTER TABLE `cates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `cates` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `cates` (`id`),
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

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
