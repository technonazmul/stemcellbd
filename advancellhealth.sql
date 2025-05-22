-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 22, 2025 at 04:53 PM
-- Server version: 8.0.40
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `advancellhealth`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience_years` int NOT NULL,
  `experience_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `headline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_headline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `image`, `icon`, `experience_years`, `experience_text`, `headline`, `sub_headline`, `description`, `created_at`, `updated_at`, `button_text`, `button_link`) VALUES
(1, '1747907893_img.jpg', '1747907893_icon.jpg', 16, 'Years of Experiences', 'Rejuvenate yourself by your own stem cell', 'Get started swiftly & easily by importing a demo of your choice in single click. Over 30 high quality professionally designed per-built website concepts to choose from.', 'Spiro is a modern business theme, that lets you build stunning high performance websites using a fully visual interface. Start with any of the demos below or build modern business theme, that lets you build stunning high performance websites using fully visual interface. start with an of the demos below or build one on your own. Exponent is a perfect blend of spacious layouts', NULL, '2025-05-22 04:59:01', 'Test Button', '#');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `treatment_types` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(8, 'Md Nazmul Khalid', '01795365429', 'technonazmul@gmail.com', NULL, NULL, 'b', 'test', NULL, NULL, '2025-05-22 10:36:39', '2025-05-22 10:36:39');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` text COLLATE utf8mb4_unicode_ci,
  `button1_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button1_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button2_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button2_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `subtitle`, `button1_text`, `button1_url`, `button2_text`, `button2_url`, `background_image`, `video`, `created_at`, `updated_at`) VALUES
(1, 'Test title', 'We help clean all your needs with our various skills and range of awesome services.', 'our services', './#service', 'Discover more', './contact', 'banners/5z3fQTIdxJl3qoGd2HbyCOIMMUxqyu7cPDLTplSj.jpg', 'test', NULL, '2025-05-22 09:50:01');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blog_category_id` bigint UNSIGNED DEFAULT NULL,
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
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint UNSIGNED DEFAULT NULL,
  `priority` int UNSIGNED DEFAULT NULL,
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
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint UNSIGNED DEFAULT NULL,
  `priority` int UNSIGNED DEFAULT NULL,
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
  `id` bigint UNSIGNED NOT NULL,
  `parent_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_post_id` bigint UNSIGNED DEFAULT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` tinyint NOT NULL DEFAULT '0',
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
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `company`, `email`, `phone`, `subject`, `message_type`, `message`, `created_at`, `updated_at`) VALUES
(1, 'ripon', 'company name', 'riponrm00@gmail.com', NULL, 'general inquiry', '0', 'hi this is contact0', '2024-03-13 06:11:22', '2024-03-13 06:11:22'),
(2, 'ripon', 'company name', 'admin@gmail.com', NULL, 'free consultancy', '1', 'message from free consultancy', '2024-03-23 15:46:39', '2024-03-23 15:46:39'),
(3, 'Md Nazmul Khalid', 'Webcode LTD', 'technonazmul@gmail.com', NULL, 'test', '1', 'test', '2025-05-22 10:36:51', '2025-05-22 10:36:51');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialization` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chamber` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responsibility` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
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
-- Table structure for table `edit_homes`
--

CREATE TABLE `edit_homes` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registration_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_health_condition` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_medical_history` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `treatment_of_interest` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferred_date` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profession` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `name`, `registration_type`, `date_of_birth`, `gender`, `c_health_condition`, `p_medical_history`, `treatment_of_interest`, `preferred_date`, `profession`, `address`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'riponrs1', 'Patient (Self)', '2024-03-08', 'male', 'alhamdulillah good', 'non', 'Stem Cell Therapy, Conventional/Traditional Treatment', '2024-03-15', 'nai', 'Al Saad <br> Doha ,Qatar', 'imran@gmail.com', '125', 'some text here', '2024-03-12 22:53:19', '2024-03-12 22:53:19');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '1747931189.jpg', '2025-05-22 10:26:29', '2025-05-22 10:26:29'),
(2, '1747931219.jpg', '2025-05-22 10:26:59', '2025-05-22 10:26:59'),
(3, '1747931225.jpg', '2025-05-22 10:27:05', '2025-05-22 10:27:05'),
(4, '1747931233.jpg', '2025-05-22 10:27:13', '2025-05-22 10:27:13'),
(5, '1747931241.jpg', '2025-05-22 10:27:21', '2025-05-22 10:27:21'),
(6, '1747931247.jpg', '2025-05-22 10:27:27', '2025-05-22 10:27:27');

-- --------------------------------------------------------

--
-- Table structure for table `general_infos`
--

CREATE TABLE `general_infos` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotline` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enquiry_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appointment_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `help_email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `support_email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_us` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appointment_banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_infos`
--

INSERT INTO `general_infos` (`id`, `email`, `hotline`, `address`, `enquiry_number`, `appointment_number`, `help_email`, `support_email`, `website`, `about_us`, `facebook`, `instagram`, `youtube`, `twitter`, `linkedin`, `telegram`, `appointment_banner`, `copyright`, `created_at`, `updated_at`, `title`, `meta_name`, `meta_description`) VALUES
(1, 'test@gmail.com', '01700000000', '69/M/1, GH Tower (5th Floor), Panthapath,  Opposite to Bashundhara City Shopping Complex, Dhaka-1205', '01700000000', '01700000000', 'help@gmail.com', 'support@gmail.com', NULL, 'We believe that boutque practice we are beter placed info respond quickly client bespoke service', 'https://www.facebook.com', 'https://www.instagram.com', 'https://www.youtube.com', 'https://twitter.com', 'https://www.linkedin.com/', 'n/a', '1747929326.jpg', '© 2025 All', NULL, '2025-05-22 10:05:48', 'Advancell Health', 'Advancell Health meta', 'Advancell Health Description');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_infos`
--

CREATE TABLE `hospital_infos` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hospital_infos`
--

INSERT INTO `hospital_infos` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, '2M+ People Treated', 'Get started swiftly and easily importing in demo of professionally designed pre-built website are in concepts to choose from.', '1747904594.jpg', '2025-05-22 03:03:14', '2025-05-22 03:03:14'),
(2, '40+ Expert Doctor', 'Get started swiftly and easily importing in demo of professionally designed pre-built website are in concepts to choose from.', '1747904990.jpg', '2025-05-22 03:09:50', '2025-05-22 03:09:50'),
(3, '99% Success Rate', 'Get started swiftly and easily importing in demo of professionally designed pre-built website are in concepts to choose from.', '1747905013.jpg', '2025-05-22 03:10:13', '2025-05-22 03:10:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
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
(26, '2024_03_30_102229_add_product_id_to_product_reviews_table', 11),
(27, '2024_05_11_135720_create_edit_homes_table', 12),
(28, '2025_05_21_184146_create_banners_table', 12),
(29, '2025_05_22_061409_create_hospital_infos_table', 13),
(30, '2025_05_22_093723_create_abouts_table', 14),
(31, '2025_05_22_102656_add_button_info_to_abouts_table', 15),
(32, '2025_05_22_135720_create_steps_table', 16),
(33, '2025_05_22_142523_create_step_sections_table', 17),
(34, '2025_05_22_143931_create_video_sections_table', 18),
(35, '2025_05_22_153809_add_take_appointment_banner_to_general_infos', 19),
(36, '2025_05_22_155946_name_meta_to_general_infos', 20),
(37, '2025_05_22_161859_create_galleries_table', 21);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
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
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `specification` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `price` decimal(10,2) NOT NULL,
  `offer_price` decimal(10,2) NOT NULL,
  `quantity` int NOT NULL,
  `sku` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `images` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `make_feature` tinyint NOT NULL DEFAULT '0',
  `show_footer` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `description`, `specification`, `price`, `offer_price`, `quantity`, `sku`, `category_id`, `images`, `created_at`, `updated_at`, `make_feature`, `show_footer`) VALUES
(1, 'Product Title Text Here', 'product-title-text-here', '<span style=\"color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Basic straight fit cotton t-shirt with a v-neckline ecologically grown cotton is produced using practice that help usto protect biodversty basic straight fit cotton</span>', '<ul style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\"><li style=\"margin: 0px 0px 0px 20px; padding: 0px; list-style: disc; padding-block: 5px;\">Digital project planning and resourcing</li><li style=\"margin: 0px 0px 0px 20px; padding: 0px; list-style: disc; padding-block: 5px;\">In-House digital consulting</li><li style=\"margin: 0px 0px 0px 20px; padding: 0px; list-style: disc; padding-block: 5px;\">Permanent and contract recruitement</li></ul>', 290.00, 280.00, 11, '46046541214', 1, '01jpg-17119945031.jpg,02jpg-17119945032.jpg,04jpg-17119945033.jpg', '2024-04-01 15:01:43', '2024-04-01 15:01:43', 0, 0),
(2, 'test', 'test', 'test', 'test', 100.00, 90.00, 100, 'r32432', 1, 'product1png-17478429281.png', '2025-05-21 09:55:28', '2025-05-21 09:55:40', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` int DEFAULT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `service_category_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `thumbnail`, `slug`, `tags`, `user_id`, `meta_title`, `meta_description`, `description`, `service_category_id`, `created_at`, `updated_at`) VALUES
(1, 'service in stemcell.', '1747564311.jpeg', 'service-in-stemcell', 'stemcell', '1', 'meta title', 'mete description', '<p style=\"margin-bottom: 15px; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; text-align: justify; color: rgb(33, 33, 33);\"><b>OneCare </b>Medical offers a full range of services; apart from managing acute and chronic medical conditions, our patients benefit from a wide range of services ranging from minor procedures to STD testing and referrals to our specialist network. Furthermore we offer repeat prescription requests on a number of medications and products for your convenience.</p><p style=\"margin-bottom: 15px; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; text-align: justify; color: rgb(33, 33, 33);\">Our electronic patient records allows us to provide a summary of your medical record should you require for employment, relocation or medico-legal issues.</p>', 5, '2024-03-16 08:57:20', '2025-05-18 04:31:51'),
(2, 'service in cosmetic', '1747565126.jpg', 'service-in-cosmetic', 'aa', '1', 'meta title', 'mete description', '<p style=\"color: rgb(0, 0, 0); font-family: Roboto, Arial, Helvetica, sans-serif; font-size: 16.1px;\"><u>Millennial men</u> are the most likely to not have a primary care physician, a report from Statistics Canada found.</p><p style=\"color: rgb(0, 0, 0); font-family: Roboto, Arial, Helvetica, sans-serif; font-size: 16.1px;\">In figures released Thursday, the agency said 33 per cent of 18 to 34 year old men did not have a primary care physician, compared to 15 per cent in the general population.</p>', 6, '2024-03-16 09:11:03', '2025-05-18 04:45:26'),
(3, 'service in training.', '1747565182.jpeg', 'service-in-training', 'training', '1', 'meta title', 'mete description', '<p style=\"color: rgb(0, 0, 0); font-family: Roboto, Arial, Helvetica, sans-serif; font-size: 16.1px;\"><span style=\"font-family: &quot;Arial Black&quot;;\">Millennial men are the most </span>likely to not have a primary care physician, a report from Statistics Canada found.</p><p style=\"color: rgb(0, 0, 0); font-family: Roboto, Arial, Helvetica, sans-serif; font-size: 16.1px;\">In figures released Thursday, the agency said 33 per cent of 18 to 34 year old men did not have a primary care physician, compared to 15 per cent in the general population.</p>', 7, '2024-03-16 09:11:42', '2025-05-18 04:46:22'),
(12, 'Skin Rejuvenation', '1747733472.webp', 'skin-rejuvenation', NULL, '1', NULL, NULL, NULL, 9, '2025-05-20 03:27:04', '2025-05-20 03:31:12');

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint UNSIGNED DEFAULT NULL,
  `priority` int UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`id`, `name`, `slug`, `parent_id`, `priority`, `created_at`, `updated_at`) VALUES
(5, 'stem cell', 'stem-cell', NULL, NULL, '2024-03-15 15:03:05', '2024-03-15 15:05:20'),
(6, 'cosmetic', 'cosmetic', NULL, NULL, '2024-03-15 15:03:30', '2024-03-15 15:03:30'),
(7, 'training', 'training', NULL, NULL, '2024-03-15 15:05:46', '2024-03-15 15:05:46'),
(9, 'Dermatology Services', 'dermatology-services', NULL, NULL, '2025-05-20 03:26:44', '2025-05-20 03:26:44');

-- --------------------------------------------------------

--
-- Table structure for table `steps`
--

CREATE TABLE `steps` (
  `id` bigint UNSIGNED NOT NULL,
  `step_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `steps`
--

INSERT INTO `steps` (`id`, `step_number`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Step: 01', 'Doctor Consultation', 'Get started swiftly and easily by importing demo of your choice in single click', '1747923126.jpg', '2025-05-22 08:12:06', '2025-05-22 08:12:06'),
(2, 'Step: 02', 'Digital Diagnosis', 'Get started swiftly and easily by importing demo of your choice in single click', '1747923392.jpg', '2025-05-22 08:16:32', '2025-05-22 08:16:32'),
(3, 'Step: 03', 'Doctor Holistic Treatment', 'Get started swiftly and easily by importing demo of your choice in single click', '1747923425.jpg', '2025-05-22 08:17:05', '2025-05-22 08:17:05'),
(4, 'Step: 04', 'Follow Up', 'Get started swiftly and easily by importing demo of your choice in single click', '1747923458.jpg', '2025-05-22 08:17:38', '2025-05-22 08:17:38');

-- --------------------------------------------------------

--
-- Table structure for table `step_sections`
--

CREATE TABLE `step_sections` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `step_sections`
--

INSERT INTO `step_sections` (`id`, `title`, `subtitle`, `created_at`, `updated_at`) VALUES
(1, 'Our great 3 steps for treatment 1', 'The art of medicine consists in amusing the patient—while nature cures the disease.', NULL, '2025-05-22 08:35:45');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int NOT NULL,
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
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin1', 'admin@gmail.com', NULL, '$2y$12$QoOByxg3jBu36AsWO2floeejID7YPu93RujOWcdwr69pvCR19qiCW', NULL, '2024-03-12 12:27:11', '2024-03-12 12:27:11'),
(3, 'Admin', 'advanceadmin@gmail.com', NULL, '$2y$12$.xIrY1yPoodloClcWdSQo.Zol4nyucwaRWO2DGBWajlXcM20OF28q', NULL, '2025-05-20 03:34:56', '2025-05-20 03:34:56');

-- --------------------------------------------------------

--
-- Table structure for table `video_sections`
--

CREATE TABLE `video_sections` (
  `id` bigint UNSIGNED NOT NULL,
  `thumb_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stat1_icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stat1_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stat1_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stat2_icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stat2_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stat2_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_sections`
--

INSERT INTO `video_sections` (`id`, `thumb_image`, `video_url`, `title`, `description`, `stat1_icon`, `stat1_number`, `stat1_text`, `stat2_icon`, `stat2_number`, `stat2_text`, `button_url`, `button_text`, `created_at`, `updated_at`) VALUES
(1, 'video/thumb/wIWDbqF1MfIvhOebNrk9saGgxWE4r0UHCWqErySu.jpg', 'video/videos/W2oZmXjNnbv6cLmB4fGWbj6DYFWf0qEWfEJaMOsC.mp4', 'World\'s most advanced stem cell system', 'Spiro is a modern business theme, that lets you build stunning high performance websites using a fully visual interface. Start with any of the demos below or build modern business theme, that lets you build stunning high performance websites using fully visual interface. start with an of the demos below or build one on your own. Exponent is a perfect blend of spacious layouts', 'video/icons/WEC1KKJi5DSXRpd9uoPsoaNvfboGYoVNiqlSvN5g.jpg', '480+', 'Expert Doctor', 'video/icons/nc33898hfchzfnTXiov4pPjmqyPs6TsHJcnyQrIY.jpg', '6.8K+', 'Happy Patient', 'http://127.0.0.1:8000/', 'Take an Appointment', '2025-05-22 08:52:47', '2025-05-22 09:12:57'),
(2, 'video/thumb/fhbaBM5wVKXsbO8HlBuZD5lPBp2X3RvC6WMReMdy.jpg', 'video/videos/xm4tkyW3fVtDz7u07QTsW2gcYBx19ytnXOe5kE3D.mp4', '99% Proven results! See the difference', 'Spiro is a modern business theme, that lets you build stunning high performance websites using a fully visual interface. Start with any of the demos below or build modern business theme, that lets you build stunning high performance websites using fully visual interface. start with an of the demos below or build one on your own. Exponent is a perfect blend of spacious layouts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'View all Story1', '2025-05-22 09:16:37', '2025-05-22 09:23:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
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
-- Indexes for table `edit_homes`
--
ALTER TABLE `edit_homes`
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
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_infos`
--
ALTER TABLE `general_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_infos`
--
ALTER TABLE `hospital_infos`
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
-- Indexes for table `steps`
--
ALTER TABLE `steps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `step_sections`
--
ALTER TABLE `step_sections`
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
-- Indexes for table `video_sections`
--
ALTER TABLE `video_sections`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `edit_homes`
--
ALTER TABLE `edit_homes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `general_infos`
--
ALTER TABLE `general_infos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hospital_infos`
--
ALTER TABLE `hospital_infos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `steps`
--
ALTER TABLE `steps`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `step_sections`
--
ALTER TABLE `step_sections`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `treatment_types`
--
ALTER TABLE `treatment_types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `video_sections`
--
ALTER TABLE `video_sections`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
