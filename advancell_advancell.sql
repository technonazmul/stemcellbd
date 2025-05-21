-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 21, 2025 at 11:22 AM
-- Server version: 11.4.2-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `advancell_advancell`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `gender` varchar(191) DEFAULT NULL,
  `date` varchar(191) DEFAULT NULL,
  `treatment_types` varchar(191) DEFAULT NULL,
  `message` varchar(191) DEFAULT NULL,
  `status` varchar(191) DEFAULT NULL,
  `notes` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `phone`, `email`, `gender`, `date`, `treatment_types`, `message`, `status`, `notes`, `created_at`, `updated_at`) VALUES
(1, 'riponrs1', '+974 30067916', 'admin@gmail.com', 'male', '2024-03-20', 'a', 'aaa', 'approved', 'note', '2024-03-12 22:48:18', '2024-03-13 06:25:15'),
(2, 'admin1', '+974 30067916', 'admin@gmail.com', 'male', '2024-03-14', 'a', 'test appointment', NULL, NULL, '2024-03-13 16:12:37', '2024-03-13 16:12:37'),
(3, 'khaja', '125', 'user@gmail.com', 'male', '2024-03-21', 'b', 'msg from khaja', NULL, NULL, '2024-03-15 12:25:45', '2024-03-15 12:25:45'),
(4, 'ripon', '+974 30067916', 'admin@gmail.com', NULL, NULL, 'b', 'messages', NULL, NULL, '2024-03-22 15:07:52', '2024-03-22 15:07:52'),
(5, 'ripon', '+974 30067916', 'admin@gmail.com', NULL, NULL, 'a', 'lmkhgcfds', NULL, NULL, '2024-03-22 15:12:43', '2024-03-22 15:12:43'),
(6, 'ripon', '+974 30067916', 'admin@gmail.com', NULL, NULL, 'b', '\';lkmhjvghgdt', NULL, NULL, '2024-03-22 15:13:31', '2024-03-22 15:13:31'),
(7, 'ripon', '+974 30067916', 'admin@gmail.com', NULL, NULL, 'b', '\';lkmhjvghgdt', NULL, NULL, '2024-03-22 15:13:51', '2024-03-22 15:13:51'),
(8, 'Rajib Raj', '12654', 'info@gmail.com', 'male', '2025-05-22', 'a', 'sr', NULL, NULL, '2025-05-21 10:17:40', '2025-05-21 10:17:40'),
(9, 'Rajib Raj', '12654', 'info@gmail.com', 'male', '2025-05-22', 'a', 'df', NULL, NULL, '2025-05-21 10:18:10', '2025-05-21 10:18:10');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `thumbnail` varchar(191) DEFAULT NULL,
  `slug` varchar(191) DEFAULT NULL,
  `tags` varchar(191) DEFAULT NULL,
  `user_id` varchar(191) DEFAULT NULL,
  `meta_title` varchar(191) DEFAULT NULL,
  `meta_description` varchar(191) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `blog_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `thumbnail`, `slug`, `tags`, `user_id`, `meta_title`, `meta_description`, `description`, `blog_category_id`, `created_at`, `updated_at`) VALUES
(16, 'Test blog 123', '1747635073.png', 'test-blog-123', 'tag2,tag3,tag4', '1', 'test title', 'test description', 'This is description', 2, '2025-05-18 23:45:16', '2025-05-19 00:11:13');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `priority` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `slug`, `parent_id`, `priority`, `created_at`, `updated_at`) VALUES
(1, 'ripon', 'ripon', NULL, NULL, '2024-03-02 16:23:44', '2024-03-02 16:23:44'),
(2, 'admin1', 'admin1', NULL, NULL, '2024-03-03 14:30:22', '2024-03-03 14:30:22'),
(3, 'Imran', 'imran', NULL, NULL, '2024-03-05 13:17:30', '2024-03-05 13:17:30');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `priority` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `parent_id`, `priority`, `created_at`, `updated_at`) VALUES
(1, '1', '1', 0, NULL, '2024-04-01 14:59:28', '2024-04-01 14:59:28');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `subject` varchar(191) DEFAULT NULL,
  `blog_post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `parent_id`, `name`, `email`, `phone`, `subject`, `blog_post_id`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'ripon', 'admin@gmail.com', '+974 30067916', 'general inquiry', 12, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, fugit consequatur? Quos voluptatem dolore dolores non dignissimos deserunt doloribus expedita reiciendis magnam! Magni fugit dignissimos a, iste consectetur odit', 1, '2024-03-08 16:43:40', '2024-03-08 16:44:04'),
(2, 1, 'ripon', 'admin@gmail.com', '+974 30067916', 'general inquiry', 13, 'reply on comment', 1, '2024-03-08 17:29:36', '2024-03-08 17:30:09'),
(20, 2, 'rifat', 'admin@gmail.com', '+974 30067916', 'general inquiry', 13, 'qq', 1, '2024-03-09 12:27:20', '2024-03-09 12:27:35'),
(21, 1, 'riponrs1', 'admin@gmail.com', '125', 'general inquiry', 12, 'reply on comment 12', 1, '2024-03-09 12:40:02', '2024-03-09 12:40:18'),
(22, 0, 'riponrs1', 'imran@gmail.com', '01110121', '4th comment', 12, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, fugit consequatur? Quos voluptatem dolore dolores non dignissimos deserunt doloribus expedita reiciendis magnam! Magni fugit dignissimos a, iste consectetur odit', 1, '2024-03-09 12:40:44', '2024-03-09 12:41:01'),
(23, 0, 'w', 'imran@gmail.com', '01110121', '5th comment', 12, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, fugit consequatur? Quos voluptatem dolore dolores non dignissimos deserunt doloribus expedita reiciendis magnam! Magni fugit dignissimos a, iste consectetur odit', 1, '2024-03-09 12:40:56', '2024-03-09 12:41:04'),
(24, 23, 'r', 'admin1@gmail.com', '123', 'faltu comment', 12, 'reply on 12 3rd comment', 1, '2024-03-09 12:41:48', '2024-03-09 12:41:55'),
(26, 0, 'name 1', 'imran@gmail.com', '123', 'comment', 13, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, fugit consequatur? Quos voluptatem dolore dolores non dignissimos deserunt doloribus expedita reiciendis magnam! Magni fugit dignissimos a, iste consectetur odit.', 1, '2024-03-10 00:46:18', '2024-03-10 00:46:34'),
(27, 0, 'name 2', 'imran@gmail.com', '123', 'comment', 13, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, fugit consequatur? Quos voluptatem dolore dolores non dignissimos deserunt doloribus expedita reiciendis magnam! Magni fugit dignissimos a, iste consectetur odit.', 1, '2024-03-10 00:46:51', '2024-03-10 00:46:57'),
(28, 0, 'ripon', 'riponrm00@gmail.com', '31189132', 'comment', 14, 'fact that a reader will be distracted by the readable content of a 770.  page when looking at its layout. zTl/,mnbbvvcxhe point of using Lorem Ipsum is that 00t has a more-or-less normal distribution of letters, as opposed to using \'Content', 1, '2024-03-12 14:55:47', '2024-03-12 14:56:20'),
(29, 28, 'name 1', 'imran@gmail.com', '125', 'reply', 14, 'this is reply', 1, '2024-03-12 14:57:08', '2024-03-12 14:57:25'),
(30, 26, 'ripon1', 'riponrm00@gmail.com', '+974 30067916', 'faltu comment', 13, 'test reply on comment', 1, '2024-03-13 15:26:10', '2024-03-13 15:29:53'),
(31, 27, 'ripon', 'admin@gmail.com', '01110121', 'comment', 13, 'test 2 on reply comment', 1, '2024-03-13 15:28:15', '2024-03-13 15:29:17'),
(32, 28, 'khalid', 'admin@gmail.com', '+974 30067916', 'comment', 14, 'test reply 4', 0, '2024-03-13 15:31:34', '2024-03-13 15:31:34'),
(33, 28, 'nazmul', 'admin@gmail.com', '+974 30067916', 'general inquiry', 14, 'test reply 5', 0, '2024-03-13 15:45:14', '2024-03-13 15:45:14'),
(34, 0, 'ripon', 'admin@gmail.com', '+974 30067916', 'general inquiry', 15, 'fact that a reader will be distracted by the readable content of a 770.  page when looking at its layout. zTl/,mnbbvvcxhe point of using Lorem Ipsum is that 00t has a more-or-less normal distribution of letters, as opposed t', 0, '2024-03-13 15:57:55', '2024-03-13 15:57:55'),
(35, 0, 'ripon', 'admin@gmail.com', '+974 30067916', 'general inquiry', 15, 'fact that a reader will be distracted by the readable content of a 770.  page when looking at its layout. zTl/,mnbbvvcxhe point of using Lorem Ipsum is that 00t has a more-or-less normal distribution of letters, as opposed t', 0, '2024-03-13 16:01:07', '2024-03-13 16:01:07'),
(36, 0, 'test', 'test@gmail.com', '345435435', 'test', 16, 'test', 1, '2025-05-19 04:49:11', '2025-05-19 07:56:35'),
(37, 36, 'Test 2', 'test2@gmail.com', '324324324', 'test', 16, 'This is test reply.', 1, '2025-05-19 07:57:01', '2025-05-19 07:57:15');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `company` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `subject` varchar(191) DEFAULT NULL,
  `message_type` varchar(191) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `company`, `email`, `phone`, `subject`, `message_type`, `message`, `created_at`, `updated_at`) VALUES
(1, 'ripon', 'company name', 'riponrm00@gmail.com', NULL, 'general inquiry', '0', 'hi this is contact0', '2024-03-13 06:11:22', '2024-03-13 06:11:22'),
(2, 'ripon', 'company name', 'admin@gmail.com', NULL, 'free consultancy', '1', 'message from free consultancy', '2024-03-23 15:46:39', '2024-03-23 15:46:39'),
(3, 'Rajib Raj', 'Webcode', 'info@gmail.com', NULL, NULL, '0', 'xzgsdfg', '2025-05-21 13:59:53', '2025-05-21 13:59:53');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `specialization` varchar(191) DEFAULT NULL,
  `chamber` varchar(191) DEFAULT NULL,
  `responsibility` varchar(191) DEFAULT NULL,
  `experience` varchar(191) DEFAULT NULL,
  `facebook` varchar(191) DEFAULT NULL,
  `instagram` varchar(191) DEFAULT NULL,
  `telegram` varchar(191) DEFAULT NULL,
  `linkedin` varchar(191) DEFAULT NULL,
  `twitter` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `phone`, `email`, `specialization`, `chamber`, `responsibility`, `experience`, `facebook`, `instagram`, `telegram`, `linkedin`, `twitter`, `image`, `about`, `created_at`, `updated_at`) VALUES
(6, 'doctor test', '01795365429', 'technonazmul@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1747570730.jpg', NULL, '2025-05-18 06:18:50', '2025-05-18 06:23:23'),
(7, 'test 3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1747571215.jpg', NULL, '2025-05-18 06:26:36', '2025-05-18 06:26:55');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `registration_type` varchar(191) DEFAULT NULL,
  `date_of_birth` varchar(191) DEFAULT NULL,
  `gender` varchar(191) DEFAULT NULL,
  `c_health_condition` varchar(191) DEFAULT NULL,
  `p_medical_history` varchar(191) DEFAULT NULL,
  `treatment_of_interest` varchar(191) DEFAULT NULL,
  `preferred_date` varchar(191) DEFAULT NULL,
  `profession` varchar(191) DEFAULT NULL,
  `address` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `message` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `name`, `registration_type`, `date_of_birth`, `gender`, `c_health_condition`, `p_medical_history`, `treatment_of_interest`, `preferred_date`, `profession`, `address`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'riponrs1', 'Patient (Self)', '2024-03-08', 'male', 'alhamdulillah good', 'non', 'Stem Cell Therapy, Conventional/Traditional Treatment', '2024-03-15', 'nai', 'Al Saad <br> Doha ,Qatar', 'imran@gmail.com', '125', 'some text here', '2024-03-12 22:53:19', '2024-03-12 22:53:19'),
(2, 'gGvRPeGsj', 'Relative', '2025-05-21', 'others', 'cSnKtpIVbfICwnj', 'zWkeYDeYaSuORn', 'Conventional/Traditional Treatment', '2025-05-21', 'TnHAYmGEaJjmWz', 'MlNFkGxOYJjaF', 'vanessawilliams756516@yahoo.com', '2335265817', 'oWIXWTPFGdrumGn', '2025-05-21 12:30:30', '2025-05-21 12:30:30');

-- --------------------------------------------------------

--
-- Table structure for table `general_infos`
--

CREATE TABLE `general_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) DEFAULT NULL,
  `hotline` varchar(191) DEFAULT NULL,
  `address` varchar(191) DEFAULT NULL,
  `enquiry_number` varchar(191) DEFAULT NULL,
  `appointment_number` varchar(191) DEFAULT NULL,
  `help_email` varchar(191) DEFAULT NULL,
  `support_email` varchar(191) DEFAULT NULL,
  `website` varchar(191) DEFAULT NULL,
  `about_us` text DEFAULT NULL,
  `facebook` varchar(191) DEFAULT NULL,
  `instagram` varchar(191) DEFAULT NULL,
  `youtube` varchar(191) DEFAULT NULL,
  `twitter` varchar(191) DEFAULT NULL,
  `linkedin` varchar(191) DEFAULT NULL,
  `telegram` varchar(191) DEFAULT NULL,
  `copyright` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_infos`
--

INSERT INTO `general_infos` (`id`, `email`, `hotline`, `address`, `enquiry_number`, `appointment_number`, `help_email`, `support_email`, `website`, `about_us`, `facebook`, `instagram`, `youtube`, `twitter`, `linkedin`, `telegram`, `copyright`, `created_at`, `updated_at`) VALUES
(1, 'advancellhealth@gmail.com', '01338-959600', 'House no: 17/2, (Star Path Inspire), 7th Floor, Road no 3/A (West Side of Japan Bangladesh Friendship Hospital), Dhanmondi, Dhaka - 1209', '01338-959600', '01338-959600', 'advancellhealth@gmail.com', 'advancellhealth@gmail.com', NULL, 'About AdvanCell\r\nWe understand that pain or health problems can make daily life difficult. Maybe you have back pain stopping you from enjoying time with family, a sports injury keeping you from your favorite activities, or a skin condition affecting your confidence. We know these feelings. Health challenges are not just physical; they touch every part of your life.\r\nOur Promise to You\r\nAt AdvanCell, we believe everyone deserves to live with less pain and more happiness. We started this clinic with a clear goal: to help you heal and feel stronger. We are not just a medical center; we are a team of caring experts ready to support you on your journey to better health.\r\nOur highly skilled physiotherapists and specialists are here to listen to your story. We will create a personalized plan just for you, using the best and most proven methods. Our care is always gentle, understanding, and focused on you as a person.\r\nYour Health, Our Expertise\r\nThink of us as your partners in getting well. Whether you are dealing with joint pain, a muscle injury, nerve conditions, or looking for skin care, we are here to help you reach your health goals.\r\nOur main focus is your long-term well-being. We are dedicated to helping you move better, feel better, and live a fuller, more active life. We want you to leave AdvanCell feeling not just physically improved, but also with new hope and confidence.\r\nWe invite you to experience the AdvanCell difference. Let our expertise be your advantage.', 'https://www.facebook.com/advancellhealth', NULL, 'https://www.youtube.com/@advancellhealth', NULL, NULL, 'n/a', '© 2025 All Rights reserved by', NULL, '2025-05-21 13:12:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_01_29_183701_create_forms_table', 1),
(7, '2024_02_06_174427_create_categories_table', 1),
(8, '2024_02_07_122053_create_doctors_table', 2),
(9, '2024_02_13_175725_create_contacts_table', 3),
(10, '2024_02_17_202901_create_treatment_types_table', 3),
(11, '2024_02_18_202349_create_appointments_table', 3),
(12, '2024_02_25_182526_create_blog_categories_table', 3),
(13, '2024_03_02_181915_create_blogs_table', 3),
(14, '2024_03_05_170533_create_comments_table', 4),
(15, '2024_03_05_175812_create_comments_table', 5),
(16, '2024_03_08_192946_create_comments_table', 6),
(17, '2024_03_08_142904_create_products_table', 7),
(18, '2024_03_15_015223_create_services_table', 7),
(19, '2024_03_15_020434_create_service_categories_table', 7),
(20, '2024_03_15_095008_create_services_table', 8),
(21, '2024_03_20_143644_create_general_infos_table', 9),
(22, '2024_03_20_183123_add_columns_to_contacts_table', 9),
(23, '2024_03_26_174128_create_testimonials_table', 10),
(24, '2024_03_26_054548_add_feature_and_footer_to_products_table', 11),
(25, '2024_03_29_104052_create_product_reviews_table', 11),
(26, '2024_03_30_102229_add_product_id_to_product_reviews_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `specification` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `offer_price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `sku` varchar(191) DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `images` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `make_feature` tinyint(4) NOT NULL DEFAULT 0,
  `show_footer` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `description`, `specification`, `price`, `offer_price`, `quantity`, `sku`, `category_id`, `images`, `created_at`, `updated_at`, `make_feature`, `show_footer`) VALUES
(1, 'Product Title Text Here', 'product-title-text-here', '<span style=\"color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Basic straight fit cotton t-shirt with a v-neckline ecologically grown cotton is produced using practice that help usto protect biodversty basic straight fit cotton</span>', '<ul style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\"><li style=\"margin: 0px 0px 0px 20px; padding: 0px; list-style: disc; padding-block: 5px;\">Digital project planning and resourcing</li><li style=\"margin: 0px 0px 0px 20px; padding: 0px; list-style: disc; padding-block: 5px;\">In-House digital consulting</li><li style=\"margin: 0px 0px 0px 20px; padding: 0px; list-style: disc; padding-block: 5px;\">Permanent and contract recruitement</li></ul>', 290.00, 280.00, 11, '46046541214', 1, '01jpg-17119945031.jpg,02jpg-17119945032.jpg,04jpg-17119945033.jpg', '2024-04-01 15:01:43', '2024-04-01 15:01:43', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `thumbnail` varchar(191) DEFAULT NULL,
  `slug` varchar(191) DEFAULT NULL,
  `tags` varchar(191) DEFAULT NULL,
  `user_id` varchar(191) DEFAULT NULL,
  `meta_title` varchar(191) DEFAULT NULL,
  `meta_description` varchar(191) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `service_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `thumbnail`, `slug`, `tags`, `user_id`, `meta_title`, `meta_description`, `description`, `service_category_id`, `created_at`, `updated_at`) VALUES
(14, 'Skin Rejuvenation', '1747834409.png', 'skin-rejuvenation', NULL, '3', NULL, NULL, '<h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 1.5rem; text-transform: capitalize; clear: both; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 27, 75); transition: 0.3s;\">Experienced People can help you more.</h5><h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 1.5rem; text-transform: capitalize; clear: both; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 27, 75); transition: 0.3s;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 400; font-size: 16px; line-height: 24px; color: rgb(85, 85, 85); text-transform: none;\">Our consultants believe the value that you manage your reguator complance police procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p><div class=\"row g-4 mb-4 mt-3\" style=\"margin-right: -12px; margin-left: -12px; padding: 0px; --bs-gutter-x: 1.5rem; --bs-gutter-y: 1.5rem; color: rgb(85, 85, 85); font-size: 16px; font-weight: 400; text-transform: none;\"><div class=\"col-xl-6 col-12\" style=\"margin: 24px 0px 0px; padding: 0px 12px; flex-basis: auto; width: 420px; max-width: 100%;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-size: 1rem; line-height: 24px;\">Holistic are empowe ethca mperatives through distinctivey ncubate best of breed that solution cent focusd customer service through website</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-size: 1rem; line-height: 24px;\">Holistic are empowe ethca mperatives through distinctivey ncubate best of breed that solution cent focusd customer service through website.</p></div></div></h5>', 5, '2025-05-21 13:33:29', '2025-05-21 13:33:29'),
(15, 'Manual Therapy', '1747834466.png', 'manual-therapy', NULL, '3', NULL, NULL, '<h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 1.5rem; text-transform: capitalize; clear: both; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 27, 75); transition: 0.3s;\">Experienced People can help you more.</h5><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 24px; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Our consultants believe the value that you manage your reguator complance police procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p>', 6, '2025-05-21 13:34:26', '2025-05-21 13:34:26'),
(16, 'Upper and Lower Back Pain', '1747834502.png', 'upper-and-lower-back-pain', NULL, '3', NULL, NULL, '<h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 1.5rem; text-transform: capitalize; clear: both; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 27, 75); transition: 0.3s;\">Experienced People can help you more.</h5><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 24px; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Our consultants believe the value that you manage your reguator complance police procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p>', 7, '2025-05-21 13:35:02', '2025-05-21 13:35:02'),
(17, 'Laser Hair Removal', '1747834534.png', 'laser-hair-removal', NULL, '3', NULL, NULL, '<h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 1.5rem; text-transform: capitalize; clear: both; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 27, 75); transition: 0.3s;\">Experienced People can help you more.</h5><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 24px; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Our consultants believe the value that you manage your reguator complance police procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p>', 5, '2025-05-21 13:35:34', '2025-05-21 13:35:34'),
(18, 'Interferential Therap', '1747834569.png', 'interferential-therap', NULL, '3', NULL, NULL, '<h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 1.5rem; text-transform: capitalize; clear: both; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 27, 75); transition: 0.3s;\">Experienced People can help you more.</h5><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 24px; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Our consultants believe the value that you manage your reguator complance police procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p>', 6, '2025-05-21 13:36:09', '2025-05-21 13:36:09'),
(19, 'Neck and Shoulder Pain', '1747834602.png', 'neck-and-shoulder-pain', NULL, '3', NULL, NULL, '<h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 1.5rem; text-transform: capitalize; clear: both; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 27, 75); transition: 0.3s;\">Experienced People can help you more.</h5><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 24px; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Our consultants believe the value that you manage your reguator complance police procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p>', 7, '2025-05-21 13:36:42', '2025-05-21 13:36:42'),
(20, 'Scar Treatment', '1747834639.png', 'scar-treatment', NULL, '3', NULL, NULL, '<h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 1.5rem; text-transform: capitalize; clear: both; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 27, 75); transition: 0.3s;\">Experienced People can help you more.</h5><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 24px; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Our consultants believe the value that you manage your reguator complance police procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p>', 5, '2025-05-21 13:37:19', '2025-05-21 13:37:19'),
(21, 'Ultrasound and Laser Therapy', '1747834669.png', 'ultrasound-and-laser-therapy', NULL, '3', NULL, NULL, '<h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 1.5rem; text-transform: capitalize; clear: both; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 27, 75); transition: 0.3s;\">Experienced People can help you more.</h5><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 24px; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Our consultants believe the value that you manage your reguator complance police procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p>', 6, '2025-05-21 13:37:49', '2025-05-21 13:37:49'),
(22, 'Elbow and Wrist Pain', '1747834699.png', 'elbow-and-wrist-pain', NULL, '3', NULL, NULL, '<h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 1.5rem; text-transform: capitalize; clear: both; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 27, 75); transition: 0.3s;\">Experienced People can help you more.</h5><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 24px; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Our consultants believe the value that you manage your reguator complance police procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p>', 7, '2025-05-21 13:38:19', '2025-05-21 13:38:19'),
(23, 'Botox and Dermal Fillers', '1747834726.png', 'botox-and-dermal-fillers', NULL, '3', NULL, NULL, '<h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 1.5rem; text-transform: capitalize; clear: both; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 27, 75); transition: 0.3s;\">Experienced People can help you more.</h5><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 24px; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Our consultants believe the value that you manage your reguator complance police procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p>', 5, '2025-05-21 13:38:46', '2025-05-21 13:38:46'),
(24, 'Shockwave Therapy', '1747834758.png', 'shockwave-therapy', NULL, '3', NULL, NULL, '<h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 1.5rem; text-transform: capitalize; clear: both; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 27, 75); transition: 0.3s;\">Experienced People can help you more.</h5><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 24px; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Our consultants believe the value that you manage your reguator complance police procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p>', 6, '2025-05-21 13:39:18', '2025-05-21 13:39:18'),
(25, 'Knee, Heel, and Ankle Pain', '1747834783.png', 'knee-heel-and-ankle-pain', NULL, '3', NULL, NULL, '<h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 1.5rem; text-transform: capitalize; clear: both; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 27, 75); transition: 0.3s;\">Experienced People can help you more.</h5><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 24px; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Our consultants believe the value that you manage your reguator complance police procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p>', 7, '2025-05-21 13:39:43', '2025-05-21 13:39:43'),
(26, 'Chemical Peels', '1747834811.png', 'chemical-peels', NULL, '3', NULL, NULL, '<h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 1.5rem; text-transform: capitalize; clear: both; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 27, 75); transition: 0.3s;\">Experienced People can help you more.</h5><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 24px; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Our consultants believe the value that you manage your reguator complance police procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p>', 5, '2025-05-21 13:40:11', '2025-05-21 13:40:11'),
(27, 'Traction and TENS', '1747834841.png', 'traction-and-tens', NULL, '3', NULL, NULL, '<h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 1.5rem; text-transform: capitalize; clear: both; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 27, 75); transition: 0.3s;\">Experienced People can help you more.</h5><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 24px; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Our consultants believe the value that you manage your reguator complance police procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p>', 6, '2025-05-21 13:40:41', '2025-05-21 13:40:41'),
(28, 'Sports Injury Management', '1747834871.png', 'sports-injury-management', NULL, '3', NULL, NULL, '<h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 1.5rem; text-transform: capitalize; clear: both; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 27, 75); transition: 0.3s;\">Experienced People can help you more.</h5><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 24px; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Our consultants believe the value that you manage your reguator complance police procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p>', 7, '2025-05-21 13:41:11', '2025-05-21 13:41:11'),
(29, 'Hair and Facial PRP', '1747834897.png', 'hair-and-facial-prp', NULL, '3', NULL, NULL, '<h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 1.5rem; text-transform: capitalize; clear: both; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 27, 75); transition: 0.3s;\">Experienced People can help you more.</h5><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 24px; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Our consultants believe the value that you manage your reguator complance police procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p>', 5, '2025-05-21 13:41:37', '2025-05-21 13:41:37'),
(30, 'Muscle Stimulation', '1747834931.png', 'muscle-stimulation', NULL, '3', NULL, NULL, '<h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 1.5rem; text-transform: capitalize; clear: both; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 27, 75); transition: 0.3s;\">Experienced People can help you more.</h5><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 24px; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Our consultants believe the value that you manage your reguator complance police procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p>', 6, '2025-05-21 13:42:11', '2025-05-21 13:42:11'),
(31, 'Comprehensive Rehabilitation Services & MUCH MORE', '1747834958.png', 'comprehensive-rehabilitation-services-much-more', NULL, '3', NULL, NULL, '<h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 1.5rem; text-transform: capitalize; clear: both; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 27, 75); transition: 0.3s;\">Experienced People can help you more.</h5><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 24px; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Our consultants believe the value that you manage your reguator complance police procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p>', 6, '2025-05-21 13:42:38', '2025-05-21 13:42:38'),
(32, 'Diabetic Neuropathic Pain', '1747834988.png', 'diabetic-neuropathic-pain', NULL, '3', NULL, NULL, '<h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 1.5rem; text-transform: capitalize; clear: both; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 27, 75); transition: 0.3s;\">Experienced People can help you more.</h5><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 24px; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Our consultants believe the value that you manage your reguator complance police procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p>', 7, '2025-05-21 13:43:08', '2025-05-21 13:43:08'),
(33, 'Chronic Pelvic Pain', '1747835006.png', 'chronic-pelvic-pain', NULL, '3', NULL, NULL, '<h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 1.5rem; text-transform: capitalize; clear: both; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 27, 75); transition: 0.3s;\">Experienced People can help you more.</h5><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 24px; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Our consultants believe the value that you manage your reguator complance police procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p>', 7, '2025-05-21 13:43:26', '2025-05-21 13:43:26'),
(34, 'Complex Regional Pain Syndrome', '1747835047.png', 'complex-regional-pain-syndrome', NULL, '3', NULL, NULL, '<h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 1.5rem; text-transform: capitalize; clear: both; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 27, 75); transition: 0.3s;\">Experienced People can help you more.</h5><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 24px; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Our consultants believe the value that you manage your reguator complance police procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p>', 7, '2025-05-21 13:44:07', '2025-05-21 13:44:07'),
(35, 'Carpal Tunnel Syndrome', '1747835072.png', 'carpal-tunnel-syndrome', NULL, '3', NULL, NULL, '<h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 1.5rem; text-transform: capitalize; clear: both; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 27, 75); transition: 0.3s;\">Experienced People can help you more.</h5><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 24px; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Our consultants believe the value that you manage your reguator complance police procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p>', 7, '2025-05-21 13:44:32', '2025-05-21 13:44:32'),
(36, 'Trigger Finger and Muscle Pain', '1747835096.png', 'trigger-finger-and-muscle-pain', NULL, '3', NULL, NULL, '<h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 1.5rem; text-transform: capitalize; clear: both; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 27, 75); transition: 0.3s;\">Experienced People can help you more.</h5><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 24px; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Our consultants believe the value that you manage your reguator complance police procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p>', 7, '2025-05-21 13:44:56', '2025-05-21 13:44:56'),
(37, 'Trigeminal Neuralgia', '1747835118.png', 'trigeminal-neuralgia', NULL, '3', NULL, NULL, '<h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 1.5rem; text-transform: capitalize; clear: both; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 27, 75); transition: 0.3s;\">Experienced People can help you more.</h5><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 24px; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Our consultants believe the value that you manage your reguator complance police procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p>', 7, '2025-05-21 13:45:18', '2025-05-21 13:45:18'),
(38, 'Ligament Injuries', '1747835141.png', 'ligament-injuries', NULL, '3', NULL, NULL, '<h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 1.5rem; text-transform: capitalize; clear: both; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 27, 75); transition: 0.3s;\">Experienced People can help you more.</h5><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 24px; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Our consultants believe the value that you manage your reguator complance police procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p>', 7, '2025-05-21 13:45:41', '2025-05-21 13:45:41'),
(39, 'Diabetic Foot Ulcer Management', '1747835168.png', 'diabetic-foot-ulcer-management', NULL, '3', NULL, NULL, '<h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 1.5rem; text-transform: capitalize; clear: both; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 27, 75); transition: 0.3s;\">Experienced People can help you more.</h5><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 24px; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Our consultants believe the value that you manage your reguator complance police procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p>', 7, '2025-05-21 13:46:08', '2025-05-21 13:46:08'),
(40, 'Whole Body Pain', '1747835187.png', 'whole-body-pain', NULL, '3', NULL, NULL, '<h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 1.5rem; text-transform: capitalize; clear: both; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 27, 75); transition: 0.3s;\">Experienced People can help you more.</h5><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 24px; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Our consultants believe the value that you manage your reguator complance police procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p>', 7, '2025-05-21 13:46:27', '2025-05-21 13:46:27');

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `priority` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`id`, `name`, `slug`, `parent_id`, `priority`, `created_at`, `updated_at`) VALUES
(5, 'Dermatology Services', 'dermatology-services', NULL, NULL, '2024-03-15 15:03:05', '2025-05-21 10:57:49'),
(6, 'Physiotherapy', 'physiotherapy', NULL, NULL, '2024-03-15 15:03:30', '2025-05-21 10:56:43'),
(7, 'Orthopedic', 'orthopedic', NULL, NULL, '2024-03-15 15:05:46', '2025-05-21 10:56:54'),
(9, 'Dermatology Services 2', 'dermatology-services-2', NULL, NULL, '2025-05-20 03:26:44', '2025-05-21 10:57:39');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `author` varchar(191) NOT NULL,
  `text` text NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `image`, `author`, `text`, `rating`, `created_at`, `updated_at`) VALUES
(2, 'William Thomas1', '1747725365.jpg', 'cusromer', 'Praised idea and masa cusp veena gelatin turf supine gaseous mustier dictums effacer users edams create pharetra meatilus aquept nullary nullify acre numbers Atenean handwrit laborites', 3, '2024-04-01 15:53:06', '2025-05-20 01:16:05'),
(3, 'john', '1747725355.jpg', 'cusromer', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour', 4, '2024-04-02 11:22:31', '2025-05-20 01:15:55'),
(4, 'First Name', '1747725329.jpg', 'Engineer', 'This is test testimonial', 5, '2024-04-02 11:53:16', '2025-05-20 01:15:29');

-- --------------------------------------------------------

--
-- Table structure for table `treatment_types`
--

CREATE TABLE `treatment_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `treatment_types`
--

INSERT INTO `treatment_types` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'a', '2024-03-12 22:47:55', '2024-03-12 22:47:55'),
(3, 'b', '2024-03-13 16:05:13', '2024-03-13 16:05:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin1', 'admin@gmail.com', NULL, '$2y$12$QoOByxg3jBu36AsWO2floeejID7YPu93RujOWcdwr69pvCR19qiCW', NULL, '2024-03-12 12:27:11', '2024-03-12 12:27:11'),
(3, 'Admin', 'advanceadmin@gmail.com', NULL, '$2y$12$.xIrY1yPoodloClcWdSQo.Zol4nyucwaRWO2DGBWajlXcM20OF28q', NULL, '2025-05-20 03:34:56', '2025-05-20 03:34:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_infos`
--
ALTER TABLE `general_infos`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment_types`
--
ALTER TABLE `treatment_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `general_infos`
--
ALTER TABLE `general_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `treatment_types`
--
ALTER TABLE `treatment_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
