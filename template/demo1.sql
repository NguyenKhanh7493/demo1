-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 26, 2019 lúc 03:45 PM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.0

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
-- Cấu trúc bảng cho bảng `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `banner_center` int(11) DEFAULT NULL,
  `banner_right` int(11) DEFAULT NULL,
  `banner_bottom` int(11) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `banners`
--

INSERT INTO `banners` (`id`, `name`, `title`, `link`, `banner_center`, `banner_right`, `banner_bottom`, `sort`, `created_at`, `updated_at`, `status`) VALUES
(12, 'banner-bottom2.jpg', 'quảng cáo', NULL, 0, 0, 1, NULL, '2019-01-21 01:52:59', '2019-01-21 01:52:59', 1),
(13, 'banner-bottom1.jpg', 'quảng cáo', NULL, 0, 0, 1, NULL, '2019-01-21 01:53:17', '2019-01-21 01:53:17', 1),
(17, 'banner-1.jpg', 'laptop và linh kiện chính hãng', NULL, 1, 0, 0, 1, '2019-02-20 22:41:31', '2019-02-22 07:36:14', 1),
(18, 'banner-2.jpg', 'laptop và linh kiện chính hãng', NULL, 1, 0, 0, 2, '2019-02-20 22:41:56', '2019-02-22 07:41:04', 1),
(19, 'banner3.jpg', 'laptop và linh kiện chính hãng', NULL, 1, 0, 0, 3, '2019-02-20 22:42:13', '2019-02-22 07:44:30', 1);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `sort` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cates`
--

INSERT INTO `cates` (`id`, `name`, `alias`, `status`, `parent_id`, `type`, `menu_top`, `menu_right`, `icon`, `footer`, `keywords`, `description`, `content`, `created_at`, `updated_at`, `sort`) VALUES
(2, 'Trang chủ', 'trang-chu', 1, 0, NULL, 1, 0, NULL, 0, 'Trang chủ bán laptop', 'Cửa hàng bán laptop', NULL, '2019-01-18 02:29:56', '2019-01-18 22:04:25', 1),
(3, 'Giới thiệu', 'gioi-thieu', 1, 0, NULL, 1, 0, NULL, 0, 'Laptop giá rẻ nhất', 'Cửa hàng chúng tôi chuyên cung cấp laptop và các linh kiện chính hãng,cam kết 100%', NULL, '2019-01-18 02:30:52', '2019-01-18 22:04:53', 2),
(4, 'Sản phẩm', 'san-pham', 1, 0, NULL, 1, 0, NULL, 0, 'Sản phẩm đẹp', 'sản phẩm tốt', NULL, '2019-01-18 02:31:25', '2019-01-18 22:05:10', 3),
(5, 'Tin tức', 'tin-tuc', 1, 0, NULL, 1, 0, NULL, 0, 'Tin tức mới nhất', 'Tin tức trong ngày', NULL, '2019-01-18 02:32:41', '2019-01-18 22:05:30', 4),
(6, 'Liên hệ', 'lien-he', 1, 0, NULL, 1, 0, NULL, 0, 'Liên hệ', 'liên hệ', NULL, '2019-01-18 02:33:37', '2019-01-18 22:05:46', 5),
(9, 'Hoa lan', 'hoa-lan', 1, 4, 3, 1, NULL, NULL, NULL, 'Hoa lan đẹp nhất', 'hoa lan đẹp nhất', NULL, '2019-02-22 06:12:56', '2019-02-22 06:12:56', 1),
(10, 'Hoa hồng', 'hoa-hong', 1, 4, 3, 1, NULL, NULL, NULL, 'Hoa hồng đẹp nhất', 'Hoa hồng đẹp nhất', NULL, '2019-02-22 06:13:51', '2019-02-22 06:13:51', 1),
(11, 'Hoa mai', 'hoa-mai', 1, 4, 3, 1, NULL, NULL, NULL, 'Hoa mai đẹp', 'Hoa mai đẹp', NULL, '2019-02-22 06:15:45', '2019-02-22 06:15:45', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer_buy`
--

CREATE TABLE `customer_buy` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `address` varchar(255) NOT NULL,
  `note` text,
  `code` varchar(255) DEFAULT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `item_type` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `url` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `images`
--

INSERT INTO `images` (`id`, `image_name`, `title`, `item_type`, `item_id`, `url`, `created_at`, `updated_at`) VALUES
(1, '13034510073_c99dc89679_b.jpg', 'Sản phẩm mới', 1, 1, NULL, '2019-02-21 02:25:31', '2019-02-21 02:25:31'),
(2, '13034541673_1df0512e0b_b.jpg', 'Sản phẩm mới', 1, 1, NULL, '2019-02-21 02:25:31', '2019-02-21 02:25:31'),
(3, '10-1_Opt.jpg', 'ád', 1, 2, NULL, '2019-02-21 21:38:08', '2019-02-21 21:38:08'),
(4, '2-lan-ho-diep-dep-phoi-ghep-3-canh-tim-bong-to-TMS-27.jpg', 'Hoa lan đẹp', 1, 3, NULL, '2019-02-22 06:19:43', '2019-02-22 06:19:43'),
(5, 'chau-de-ban-lan-ho-diep-9-canh-trang-tim-10_master.jpg', 'Hoa lan đẹp', 1, 3, NULL, '2019-02-22 06:19:43', '2019-02-22 06:19:43'),
(6, 'Nhung bo hoa hong tuyet dep (1).jpg', 'Hoa hồng đỏ đẹp', 1, 4, NULL, '2019-02-22 06:23:24', '2019-02-22 06:23:24'),
(7, 'tuyen-tap-hinh-anh-hoa-hong-dep-danh-tang-nguoi-yeu-ngay-142-5.jpg', 'Hoa hồng đỏ đẹp', 1, 4, NULL, '2019-02-22 06:23:24', '2019-02-22 06:23:24');

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
(20, '2014_10_12_000000_create_users_table', 1),
(21, '2014_10_12_100000_create_password_resets_table', 1),
(22, '2018_11_28_123824_entrust_setup_tables', 1),
(23, '2018_12_17_091443_create_table__cates_table', 1),
(24, '2018_12_26_040147_create_table_products_table', 1),
(25, '2018_12_27_082656_create_table_images_table', 1),
(26, '2019_01_09_085823_create_table_posts_table', 1),
(27, '2019_01_16_082502_create_table_customer_buy_table', 2),
(28, '2019_01_19_051933_create_table_banners_table', 3);

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
(1, 'create-user', 'Create User', 'Thêm quản trị', '2018-12-04 03:00:00', '2018-12-20 03:00:00'),
(2, 'edit-user', 'Edit User', 'Sửa quản trị', '2018-12-24 03:00:00', '2018-12-24 03:00:00'),
(3, 'delete-user', 'Delete User', 'Xóa quản trị', '2018-12-19 03:00:00', '2018-12-20 03:00:00'),
(4, 'create-post', 'Create Post', 'Thêm bài viết', '2018-12-17 03:00:00', '2018-12-17 03:00:00'),
(5, 'edit-post', 'Edit Post', 'Sửa bài viết', '2018-12-18 03:00:00', '2018-12-19 03:00:00'),
(6, 'delete-post', 'Delete Post', 'Xóa bài viết', '2018-12-18 03:00:00', '2018-12-18 03:00:00'),
(7, 'edit-product', 'Edit Product', 'Sửa sản phẩm', '2019-01-21 10:00:00', '2019-01-06 10:00:00'),
(8, 'create-product', 'Create Product', 'Thêm sản phẩm', '2019-01-29 10:00:00', '2019-01-22 10:00:00'),
(9, 'delete-product', 'Delete Product', 'Xóa sản phẩm', '2019-01-08 10:00:00', '2019-01-22 10:00:00');

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
(7, 1),
(7, 5),
(8, 1),
(8, 5),
(9, 1),
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
(3, 'Hoa lan hồ điệp', 'hoa-lan-ho-diep', 4, 4000000, 3000000, NULL, 'ty2.jpg', 0, 0, 0, 1, 1, 'Hoa lan đẹp', 're', 're', 're', 're', 9, 2, NULL, NULL, '2019-02-22 06:19:43', '2019-02-26 07:43:17'),
(4, 'Hoa hồng đỏ', 'hoa-hong-do', 4, 1000000, 2000000, NULL, 'hh.jpg', 0, 0, 0, 1, 1, 'Hoa hồng đỏ đẹp', 'ad', 'ad', 'ad', 'ad', 10, 2, NULL, NULL, '2019-02-22 06:23:24', '2019-02-22 06:23:24'),
(5, 'Hoa 2', 'hoa-2', 3, 3000000, 2000000, NULL, 'ulEK-ta-hoa-hong-1.jpg', 0, 0, 0, 1, 1, 'Hoa hồng', 'ad', 'ad', 'ad', 'ad', 2, 1, NULL, NULL, '2019-02-23 01:24:03', '2019-02-23 01:24:03'),
(6, 'hoa 3', 'hoa-3', 3, 3333333, 3333333, NULL, 'hinh-anh-hoa-mai-ngay-tet-1.jpg', 0, 0, 0, 1, 1, 'Hoa đẹp lắm', 'ad', 'ad', 'ad', 'ad', 2, 1, NULL, NULL, '2019-02-23 01:25:17', '2019-02-23 01:25:17'),
(7, 'hoa 4', 'hoa-4', 3, 4343434, 3434343, NULL, 'tyyy.jpg', 0, 0, 0, 1, 1, 'hoa hoa', 'ad', 'ad', 'ad', 'ad', 9, 2, NULL, NULL, '2019-02-23 01:25:57', '2019-02-26 07:42:57'),
(8, 'hoa 5', 'hoa-5', 3, 44444444, NULL, NULL, 'tyy.jpg', 0, 0, 0, 1, 1, 'ad', 'adadad', 'adad', 'adad', 'adad', 9, 2, NULL, NULL, '2019-02-23 01:26:35', '2019-02-26 07:36:37');

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
(1, 'admin', 'Admin', 'Đây là quản trị cao cấp', '2018-12-18 03:00:00', '2018-12-13 03:00:00'),
(2, 'censor', 'censor', 'Đây là người kiểm duyệt', '2018-12-11 03:00:00', '2018-12-12 03:00:00'),
(3, 'employee-post', 'Employee', 'Đây là người đăng bài viết', '2018-12-24 03:00:00', '2018-12-19 03:00:00'),
(5, 'employee-product\r\n', 'Employee Post', 'Người đăng sản phẩm', '2019-01-28 10:00:00', '2019-01-22 10:00:00');

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
(2, 5);

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
(1, 'Nguyễn Khánh', 'Nguyễn Như Khánh', 'nguyenkhanh7493@gmail.com', '$2y$10$LJ97CTNAGa.PvfzOmVPuO.xH9oWn.PCmrg/ra9p.079R.T9r0Gdg.', 'QUẢNG TRỊ', '0964245027', 0, 'Capture.JPG', 1, 'xRmG35jzdBuyqKVZxJWEXmPidk3cJEm256dtD7khWdye8uFjEZWMFoR8wM8K', '2019-01-15 21:50:04', '2019-01-15 21:55:37', NULL),
(2, 'Xuân Hiếu', 'Đoàn Thị Xuân Hiếu', 'xuanhieu7496@gmail.com', '$2y$10$a/JIf6KQNzKJHFXBap.Jee5dk1FTSQFFCvXjPYx/ukmfadxrSVEbG', 'Vĩnh Linh - Quảng Trị', '1234567890', 1, 'lotus-25438418c06e0f97cc45e41.md.jpg', 1, NULL, '2019-01-15 23:11:26', '2019-01-15 23:11:26', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cates`
--
ALTER TABLE `cates`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customer_buy`
--
ALTER TABLE `customer_buy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_buy_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `cates`
--
ALTER TABLE `cates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `customer_buy`
--
ALTER TABLE `customer_buy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `customer_buy`
--
ALTER TABLE `customer_buy`
  ADD CONSTRAINT `customer_buy_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

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
