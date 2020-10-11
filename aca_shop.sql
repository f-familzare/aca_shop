-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2020 at 01:18 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aca_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `birthday_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `baskets`
--

CREATE TABLE `baskets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total_price` int(11) NOT NULL DEFAULT '0',
  `count` int(11) NOT NULL DEFAULT '1',
  `total_offer` int(11) DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'پرداخت نشده',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `count` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `total_price` int(10) UNSIGNED NOT NULL,
  `total_discount` int(10) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'پرداخت نشده'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `user_id`, `count`, `total_price`, `total_discount`, `status`) VALUES
(1, 5, 1, 2, 45000, 10, 'پرداخت نشده'),
(2, 13, 1, 2, 9000000, 10, 'پرداخت نشده'),
(3, 5, 2, 2, 45000, 10, 'پرداخت نشده');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `imgUrl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_title`, `parent_id`, `imgUrl`, `created_at`, `updated_at`) VALUES
(2, 'پوشاک', 0, '/Upload/Category/1712-T-fix-logo.gif', '2020-06-30 15:40:51', '2020-08-08 13:52:14'),
(3, 'مردانه', 2, '/Upload/Category/1734-جک-اتوبوسی-رکس-60-تا-90-کد-(3800-90).jpg', '2020-06-30 16:21:18', '2020-08-08 13:58:25'),
(4, 'شلوار', 3, '/Upload/Category/1378-rex-handle.b.jpg', '2020-08-08 14:05:55', '2020-08-08 14:05:55'),
(5, 'الکترونیکی', 0, '/Upload/Category/1273-rex-reyl.jpg', '2020-08-13 13:59:27', '2020-08-13 13:59:27'),
(6, 'موبایل', 5, '/Upload/Category/1105-rex-lock.jpg', '2020-08-13 14:03:45', '2020-08-13 14:03:45'),
(7, 'تبلت', 5, '/Upload/Category/1909-rex-handle.tak-pich.jpg', '2020-08-13 14:04:27', '2020-08-13 14:04:27'),
(8, 'لپ تاپ', 5, '/Upload/Category/1385-rex-handle.a.jpg', '2020-08-13 14:05:03', '2020-08-13 14:05:03');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `city_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`, `state_id`, `created_at`, `updated_at`) VALUES
(1, 'Lake Oswald', 3, '2020-04-30 15:49:27', '2020-04-30 15:49:27'),
(2, 'Wildermanberg', 5, '2020-04-30 15:49:27', '2020-04-30 15:49:27'),
(3, 'Watsicaburgh', 3, '2020-04-30 15:49:27', '2020-04-30 15:49:27'),
(4, 'South Leopoldshire', 3, '2020-04-30 15:49:27', '2020-04-30 15:49:27'),
(5, 'North Wiltontown', 1, '2020-04-30 15:49:27', '2020-04-30 15:49:27'),
(6, 'McDermottmouth', 2, '2020-04-30 15:49:27', '2020-04-30 15:49:27'),
(7, 'North Alisa', 3, '2020-04-30 15:49:27', '2020-04-30 15:49:27'),
(8, 'Dejahside', 1, '2020-04-30 15:49:27', '2020-04-30 15:49:27'),
(9, 'South Freedaport', 2, '2020-04-30 15:49:27', '2020-04-30 15:49:27'),
(10, 'Port Lexusland', 3, '2020-04-30 15:49:27', '2020-04-30 15:49:27'),
(11, 'تهران', 1, NULL, NULL),
(12, 'کرج', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `country_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `country_name`, `created_at`, `updated_at`) VALUES
(1, 'ايران', NULL, NULL),
(2, 'چين', NULL, NULL),
(3, 'روسيه', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `filters`
--

CREATE TABLE `filters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT '0',
  `title_fa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `filters`
--

INSERT INTO `filters` (`id`, `category_id`, `parent_id`, `title_fa`, `title_en`, `type`, `created_at`, `updated_at`) VALUES
(1, 2, 0, 'فیلتر دسته بندی', 'Category Filter', 'رادیو باتن', '2020-07-30 07:58:15', '2020-07-30 07:58:15'),
(2, 2, 0, 'فیلتر دسته بندییی', 'Category Filterrr', 'چک باکس', '2020-07-30 07:58:15', '2020-07-30 07:58:15'),
(3, 3, 1, 'فیلتر دسته بندی تست', 'Category Filter Test', 'رادیو باتن', '2020-07-30 08:00:38', '2020-07-30 08:00:38'),
(5, 3, 2, 'فیلتر دسته بندی تستت', 'Category Filterrr Test', 'چک باکس', '2020-07-31 16:19:19', '2020-07-31 16:19:19');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imgUrl` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `imgUrl`, `created_at`, `updated_at`) VALUES
(1, '/Upload/Gallery/1300-جک-اتوبوسی-رکس-60-تا-90-کد-(3800-90).jpg', '2020-07-25 15:54:20', '2020-07-25 15:54:20'),
(2, '/Upload/Gallery/1212-جک-اتوبوسی-رکس-90-تا-120-کد-(3800-120).jpg', '2020-07-25 15:54:20', '2020-07-25 15:54:20'),
(3, '/Upload/Gallery/1174-جک-پمپی-رکس-کد-3110.jpg', '2020-07-25 15:54:20', '2020-07-25 15:54:20'),
(4, '/Upload/Gallery/1956-دستگیره کابینت رکس کد 6400.1.jpg', '2020-07-25 16:18:56', '2020-07-25 16:18:56'),
(5, '/Upload/Gallery/1999-دستگیره کابینت رکس کد 6400.2.jpg', '2020-07-25 16:18:56', '2020-07-25 16:18:56'),
(6, '/Upload/Gallery/1891-دستگیره کابینت رکس کد 6400.3.jpg', '2020-07-25 16:18:57', '2020-07-25 16:18:57'),
(7, '/Upload/Gallery/1382-دستگیره کابینت رکس کد 6400.jpg', '2020-07-25 16:18:58', '2020-07-25 16:18:58'),
(8, '/Upload/Gallery/1964-دستگیره کابینت رکس کد 6400.jpg', '2020-07-25 16:36:34', '2020-07-25 16:36:34'),
(9, '/Upload/Gallery/1526-دستگیره کابینت رکس کد 6400.1.jpg', '2020-07-25 16:37:25', '2020-07-25 16:37:25'),
(10, '/Upload/Gallery/1293-دستگیره کابینت رکس کد 6400.1.jpg', '2020-07-25 16:37:58', '2020-07-25 16:37:58'),
(11, '/Upload/Gallery/1796-دستگیره کابینت رکس کد 6500.1.jpg', '2020-07-26 12:32:22', '2020-07-26 12:32:22'),
(12, '/Upload/Gallery/1519-دستگیره کابینت رکس کد 6500.2.jpg', '2020-07-26 12:32:22', '2020-07-26 12:32:22'),
(13, '/Upload/Gallery/1853-دستگیره کابینت رکس کد 6500.jpg', '2020-07-26 12:32:23', '2020-07-26 12:32:23'),
(14, '/Upload/Gallery/1919-دستگیره کابینت رکس کد 6400.1.jpg', '2020-07-26 12:39:49', '2020-07-26 12:39:49'),
(15, '/Upload/Gallery/2000-2.1.jpg', '2020-08-07 07:14:28', '2020-08-07 07:14:28');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_product`
--

CREATE TABLE `gallery_product` (
  `gallery_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_product`
--

INSERT INTO `gallery_product` (`gallery_id`, `product_id`) VALUES
(1, 5),
(2, 5),
(3, 5),
(4, 7),
(5, 7),
(6, 7),
(7, 7),
(10, 13),
(11, 11),
(12, 11),
(13, 11),
(14, 5),
(15, 5);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2020_04_20_152213_create_states_table', 1),
(5, '2020_04_20_152229_create_cities_table', 1),
(6, '2020_04_20_154913_create_accounts_table', 1),
(7, '2020_04_21_120524_create_tags_table', 1),
(10, '2020_04_30_143309_create_products_table', 2),
(11, '2020_05_10_215837_create_roles_table', 3),
(12, '2020_05_10_220152_create_permissions_table', 3),
(13, '2020_05_10_220322_create_role_user_table', 3),
(14, '2020_05_10_220357_create_permission_role_table', 3),
(15, '2020_05_10_220450_create_permission_user_table', 3),
(16, '2020_04_20_152157_create_countries_table', 4),
(19, '2020_04_30_143008_create_categories_table', 5),
(22, '2020_07_13_135021_create_sliders_table', 7),
(23, '2020_07_15_165109_create_galleries_table', 8),
(24, '2020_07_24_164623_create_gallery_product_table', 8),
(27, '2020_07_27_134654_create_filters_table', 9),
(31, '2014_10_12_000000_create_users_table', 10),
(32, '2016_09_13_070520_add_verification_to_user_table', 10),
(36, '2020_09_14_141344_create_baskets_table', 11),
(37, '2020_08_30_201448_create_carts_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission_label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `permission_title`, `permission_label`, `created_at`, `updated_at`) VALUES
(1, 'delete_product', 'حذف محصول 2', '2020-05-15 06:07:28', '2020-06-11 07:57:36'),
(3, 'edit_product', 'ویرایش محصول 2', '2020-05-15 12:57:08', '2020-05-15 12:57:08'),
(4, 'list_product', 'ویرایش محصول 3', '2020-05-15 14:35:55', '2020-05-15 14:35:55');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 4, NULL, NULL),
(3, 1, NULL, NULL),
(3, 4, NULL, NULL),
(4, 3, NULL, NULL),
(4, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `imgUrl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ناموجود',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'فعال',
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'غیرفعال',
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `title`, `category_id`, `imgUrl`, `count`, `status`, `price`, `brand`, `discount`, `special`, `description`, `created_at`, `updated_at`) VALUES
(5, 1, 'شلوار 1', 4, '/Upload/Product/1828-TF100چسب-درزگیر-اکریلیک-تکنو-فیکس-مدل.jpg', '20', 'فعال', '50000', 'برند 2', '10', 'فعال', '<p><span style=\"font-size:20px\">Hello</span> <span style=\"color:#e74c3c\"><span style=\"font-size:20px\">Hello</span></span></p>', '2020-05-01 05:16:29', '2020-08-15 10:06:03'),
(6, 2, 'شلوار 2', 4, '/Upload/Product/1224-TF350چسب-درزگیر-سیلیکونی-تکنو-فیکس-مدل.1.jpg', '200', 'غیرفعال', '200000', 'برند 2', '5', 'فعال', '<p><span style=\"font-size:24px\">OK <span style=\"color:#2ecc71\">OK</span></span></p>', '2020-05-01 05:22:14', '2020-08-15 10:06:32'),
(7, 1, 'سرویس 1', 2, '/Upload/Product/1723-TF660چسب-آکواریوم-تکنو-فیکس-مدل.1.jpg', '50', 'فعال', '50000', 'برند 3', '5', 'فعال', '<p><span style=\"color:#f1c40f\"><span style=\"font-size:24px\"><span style=\"font-family:Comic Sans MS,cursive\">Every Things is Ok</span></span></span></p>', '2020-05-01 06:01:21', '2020-05-07 17:44:25'),
(10, 2, 'موبایل1', 6, '/Upload/Product/1116-TF670چسب-درزگیر-سیلیکونی-تکنو-فیکس-مدل.jpg', '0', 'غیرفعال', '50000', 'برند 2', '0', 'غیرفعال', '<p dir=\"rtl\"><span style=\"font-family:Tahoma,Geneva,sans-serif\"><span style=\"font-size:18px\">وضعیت </span></span></p>', '2020-05-01 14:46:36', '2020-09-04 14:17:57'),
(11, 1, 'موبایل 2', 6, '/Upload/Product/1154-TF100چسب-درزگیر-اکریلیک-تکنو-فیکس-مدل.2.jpg', '200', 'فعال', '50000', 'برند 2', '5', 'غیرفعال', NULL, '2020-05-14 11:09:20', '2020-08-15 10:26:27'),
(13, 1, 'تبلت 1', 7, '/Upload/Product/1782-TFاسپری-تمیز-کننده-تکنو-فیکس-مدل-800.2.jpg', '10', 'فعال', '10000000', 'برند 1', '10', 'فعال', NULL, '2020-05-17 10:10:08', '2020-08-15 10:10:17');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `about`, `created_at`, `updated_at`) VALUES
(1, 'Test1', 'معرفی', '2020-05-14 10:00:25', '2020-05-14 10:00:25'),
(3, 'Reporter', 'ناظر', '2020-05-14 11:21:45', '2020-06-11 07:49:33'),
(4, 'Super_admin', 'مدیر ارشد', '2020-05-15 14:37:12', '2020-05-15 14:37:12');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 2, NULL, NULL),
(4, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgUrl` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `imgUrl`, `url`, `created_at`, `updated_at`) VALUES
(1, 'تست 2', '/Upload/Slider/1748-3.1.jpg', 'https://senfnews.com/', '2020-07-14 09:35:01', '2020-07-14 09:52:47'),
(2, 'تست 1', '/Upload/Slider/1716-2.1.jpg', 'http://mat-credit.ir/', '2020-08-06 10:58:37', '2020-08-06 10:58:37'),
(3, 'تست 2', '/Upload/Slider/1072-4.1.jpg', '#', '2020-08-06 10:59:34', '2020-08-06 10:59:34');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `state_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `state_name`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Tennessee', 7, '2020-04-30 15:49:27', '2020-04-30 15:49:27'),
(2, 'Delaware', 6, '2020-04-30 15:49:27', '2020-04-30 15:49:27'),
(3, 'New Hampshire', 6, '2020-04-30 15:49:27', '2020-04-30 15:49:27'),
(4, 'Massachusetts', 2, '2020-04-30 15:49:27', '2020-04-30 15:49:27'),
(5, 'Kansas', 3, '2020-04-30 15:49:27', '2020-04-30 15:49:27'),
(6, 'تهران', 1, NULL, NULL),
(7, 'البرز', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'فعال',
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `verification_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `username`, `mobile`, `avatar`, `email_verified_at`, `password`, `status`, `level`, `remember_token`, `created_at`, `updated_at`, `verified`, `verification_token`) VALUES
(1, 'علی', 'احمدی', 'admin@test.com', 'QkpEipSZrq', '09127029840', NULL, '2020-08-29 08:02:37', '$2y$10$gYCuXVWpMpR5UBhpZIuU..MJ4nA5bATvP6g85MVHcpM37LhSzsbw2', 'فعال', 'admin', NULL, '2020-08-29 08:01:43', '2020-08-29 08:01:44', 1, NULL),
(2, 'fatemeh familzare', NULL, 'ffamilzare@gmail.com', 'KtOuCFBdXk', '0', 'https://lh3.googleusercontent.com/a-/AOh14GiRaK5B3PhMp1x8KHRNR8Kj9Hjms2ymAoxc0I_y', NULL, '$2y$10$AXPW.VGLO.Y1wZuee.ED0eelUOpNydQLOmpXSFp86jWK1YxXctWoO', 'فعال', 'user', NULL, '2020-09-17 12:52:34', '2020-09-17 12:52:34', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accounts_user_id_foreign` (`user_id`),
  ADD KEY `accounts_country_id_foreign` (`country_id`),
  ADD KEY `accounts_state_id_foreign` (`state_id`),
  ADD KEY `accounts_city_id_foreign` (`city_id`);

--
-- Indexes for table `baskets`
--
ALTER TABLE `baskets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `baskets_user_id_foreign` (`user_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_product_id_foreign` (`product_id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `cities_state_id_foreign` (`state_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `filters`
--
ALTER TABLE `filters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `filters_category_id_foreign` (`category_id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_product`
--
ALTER TABLE `gallery_product`
  ADD KEY `gallery_product_gallery_id_foreign` (`gallery_id`),
  ADD KEY `gallery_product_product_id_foreign` (`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`permission_id`,`user_id`),
  ADD KEY `permission_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`role_id`,`user_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`state_id`),
  ADD KEY `states_country_id_foreign` (`country_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `baskets`
--
ALTER TABLE `baskets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `country_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `filters`
--
ALTER TABLE `filters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `state_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`city_id`),
  ADD CONSTRAINT `accounts_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`country_id`),
  ADD CONSTRAINT `accounts_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`state_id`),
  ADD CONSTRAINT `accounts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `baskets`
--
ALTER TABLE `baskets`
  ADD CONSTRAINT `baskets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`state_id`);

--
-- Constraints for table `filters`
--
ALTER TABLE `filters`
  ADD CONSTRAINT `filters_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `gallery_product`
--
ALTER TABLE `gallery_product`
  ADD CONSTRAINT `gallery_product_gallery_id_foreign` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`),
  ADD CONSTRAINT `gallery_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`country_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
