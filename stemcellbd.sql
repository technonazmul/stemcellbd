-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2025 at 08:14 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stemcellbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `treatment_types` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(7, 'ripon', '+974 30067916', 'admin@gmail.com', NULL, NULL, 'b', '\';lkmhjvghgdt', NULL, NULL, '2024-03-22 15:13:51', '2024-03-22 15:13:51');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `thumbnail`, `slug`, `tags`, `user_id`, `meta_title`, `meta_description`, `description`, `blog_category_id`, `created_at`, `updated_at`) VALUES
(12, 'title update.', '1711115555.jpg', 'title-update', 'a', '1', 'meta title', 'mete description', '<h3 class=\"wp-block-heading\" style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; font-family: -apple-system, system-ui, &quot;system-ui&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 27px; font-weight: 600; line-height: 39px; color: rgb(34, 34, 34);\"><span id=\"what-is-a-blog-description\" style=\"box-sizing: inherit;\">What is a Blog Description?</span></h3><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; color: rgb(34, 34, 34); font-family: -apple-system, system-ui, &quot;system-ui&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 19px;\">A blog description is a snippet used to summarize a website’s content. Search engines display blog or website descriptions in search results to let visitors know what a blog is about before clicking on it.&nbsp;</p>', 1, '2024-03-05 12:19:31', '2024-03-22 10:52:35'),
(13, 'another test blog.', '1711115600.jpg', 'another-test-blog', 'test', '1', 'meta title', 'mete description', '<h3 class=\"wp-block-heading\" style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; font-family: -apple-system, system-ui, &quot;system-ui&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 27px; font-weight: 600; line-height: 39px; color: rgb(34, 34, 34);\"><span id=\"what-is-a-blog-description\" style=\"box-sizing: inherit;\">What is a Blog Description?</span></h3><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; color: rgb(34, 34, 34); font-family: -apple-system, system-ui, &quot;system-ui&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 19px;\">A blog description is a snippet used to summarize a website’s content. Search engines display blog or website descriptions in search results to let visitors know what a blog is about before clicking on it.&nbsp;</p>', 3, '2024-03-06 11:35:13', '2024-03-22 10:53:20'),
(14, 'blog 3.', '1711115633.webp', 'blog-3', 'c', '1', 'meta title', 'mete description', '<h2 style=\"appearance: none; font-family: Roboto, sans-serif; font-size: 2.75rem; line-height: 1.1; width: 518.398px;\"><span style=\"background-color: rgb(247, 247, 247);\"><font color=\"#ff9c00\">Earn money</font></span></h2><p style=\"appearance: none; font-size: 18px; width: 518.398px; font-family: Roboto, sans-serif;\"><span style=\"background-color: rgb(247, 247, 247);\"><font color=\"#ff9c00\">Get paid for your hard work. Google AdSense can automatically display relevant targeted ads on your blog so that you can earn income by posting about your passion.</font></span></p>', 2, '2024-03-12 12:39:22', '2024-03-22 10:53:53'),
(15, 'ab c.', '1711115661.avif', 'ab-c', 'v', '1', 'meta title', 'mete description', '<h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">1914 translation by H. Rackham</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"<u>But I must explain</u> to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>', 2, '2024-03-12 15:25:00', '2024-03-22 10:54:21');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(35, 0, 'ripon', 'admin@gmail.com', '+974 30067916', 'general inquiry', 15, 'fact that a reader will be distracted by the readable content of a 770.  page when looking at its layout. zTl/,mnbbvvcxhe point of using Lorem Ipsum is that 00t has a more-or-less normal distribution of letters, as opposed t', 0, '2024-03-13 16:01:07', '2024-03-13 16:01:07');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `company`, `email`, `phone`, `subject`, `message_type`, `message`, `created_at`, `updated_at`) VALUES
(1, 'ripon', 'company name', 'riponrm00@gmail.com', NULL, 'general inquiry', '0', 'hi this is contact0', '2024-03-13 06:11:22', '2024-03-13 06:11:22'),
(2, 'ripon', 'company name', 'admin@gmail.com', NULL, 'free consultancy', '1', 'message from free consultancy', '2024-03-23 15:46:39', '2024-03-23 15:46:39');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialization` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chamber` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responsibility` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `phone`, `email`, `specialization`, `chamber`, `responsibility`, `experience`, `facebook`, `instagram`, `telegram`, `linkedin`, `twitter`, `image`, `about`, `created_at`, `updated_at`) VALUES
(1, 'mr', '+974 30067916', 'riponrm00@gmail.com', 'at nothing', 'doha qatar', 'not a responsible person', '00+', 'https://www.facebook.com/mdripon.rms', 'https://www.instagram.com/mdripon.rms/', 'n/a', 'n/a', 'n/a', '1711115700.jpg', '<font color=\"#ffd663\" style=\"background-color: rgb(74, 16, 49);\"><u><span style=\"font-weight: bolder;\"><font style=\"\">It </font></span></u>is a long established</font> <span style=\"color: rgb(0, 0, 0);\">fact that a reader will be distracted by the readable content of a 770.  page when looking at its layout. zTl/,mnbbvvcxhe point of using Lorem Ipsum is that 00t has a more-or-less normal distribution of letters, as opposed t</span>', '2024-03-03 16:24:07', '2024-03-23 12:27:18'),
(2, 'mrs', '31189132', 'imran@gmail.com', 'Sociologists', 'doha qatar', 'pagol tik kora', '00+', 'https://www.facebook.com/imranbiswas.imr', 'n/a', 'n/a', 'n/a', 'n/a', '1711115719.jpg', '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">Why do we use it?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"><u><b style=\"\"><font color=\"#ff9c00\" style=\"background-color: rgb(57, 123, 33);\">It </font></b></u>is a long established <span style=\"color: rgb(0, 0, 0);\">fact that a reader will be distracted by the readable content of a 770.  page when looking at its layout. zTl/,mnbbvvcxhe point of using Lorem Ipsum is that 00t has a more-or-less normal distribution of letters, as opposed to using \'Content </span></p>', '2024-03-11 15:38:16', '2024-03-23 12:26:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registration_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_health_condition` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_medical_history` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `treatment_of_interest` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferred_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profession` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
-- Table structure for table `general_infos`
--

CREATE TABLE `general_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enquiry_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appointment_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `help_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `support_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_us` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_infos`
--

INSERT INTO `general_infos` (`id`, `email`, `hotline`, `address`, `enquiry_number`, `appointment_number`, `help_email`, `support_email`, `website`, `about_us`, `facebook`, `instagram`, `youtube`, `twitter`, `linkedin`, `telegram`, `copyright`, `created_at`, `updated_at`) VALUES
(1, 'adminstemcell@gmail.com', '01987-851647', '69/M/1, GH Tower (5th Floor), Panthapath,  Opposite to Bashundhara City Shopping Complex, Dhaka-1205', '01234-567890', '01234-567890', 'help@adminstemcellcentre', 'support@adminstemcellcentre', NULL, 'We believe that boutque practice we are beter placed info respond quickly client bespoke service', 'https://www.facebook.com/mdripon.rms', 'https://www.instagram.com/mdripon.rms/', 'https://www.youtube.com/@stemcellbd', 'https://twitter.com/mriponrs1', 'https://www.linkedin.com/in/mriponrs1/', 'n/a', '© 2023 All', NULL, '2024-03-22 10:38:13');

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
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `specification` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `offer_price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `make_feature` tinyint(4) NOT NULL DEFAULT 0,
  `show_footer` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `description`, `specification`, `price`, `offer_price`, `quantity`, `sku`, `category_id`, `images`, `created_at`, `updated_at`, `make_feature`, `show_footer`) VALUES
(1, 'Product Title Text Here', 'product-title-text-here', '<span style=\"color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Basic straight fit cotton t-shirt with a v-neckline ecologically grown cotton is produced using practice that help usto protect biodversty basic straight fit cotton</span>', '<ul style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\"><li style=\"margin: 0px 0px 0px 20px; padding: 0px; list-style: disc; padding-block: 5px;\">Digital project planning and resourcing</li><li style=\"margin: 0px 0px 0px 20px; padding: 0px; list-style: disc; padding-block: 5px;\">In-House digital consulting</li><li style=\"margin: 0px 0px 0px 20px; padding: 0px; list-style: disc; padding-block: 5px;\">Permanent and contract recruitement</li></ul>', '290.00', '280.00', 11, '46046541214', 1, '01jpg-17119945031.jpg,02jpg-17119945032.jpg,04jpg-17119945033.jpg', '2024-04-01 15:01:43', '2024-04-01 15:01:43', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `thumbnail`, `slug`, `tags`, `user_id`, `meta_title`, `meta_description`, `description`, `service_category_id`, `created_at`, `updated_at`) VALUES
(1, 'service in stemcell.', '1711115419.jpeg', 'service-in-stemcell', 'stemcell', '1', 'meta title', 'mete description', '<p style=\"margin-bottom: 15px; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; text-align: justify; color: rgb(33, 33, 33);\"><b>OneCare </b>Medical offers a full range of services; apart from managing acute and chronic medical conditions, our patients benefit from a wide range of services ranging from minor procedures to STD testing and referrals to our specialist network. Furthermore we offer repeat prescription requests on a number of medications and products for your convenience.</p><p style=\"margin-bottom: 15px; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; text-align: justify; color: rgb(33, 33, 33);\">Our electronic patient records allows us to provide a summary of your medical record should you require for employment, relocation or medico-legal issues.</p>', 5, '2024-03-16 08:57:20', '2024-03-22 10:50:19'),
(2, 'service in cosmetic', '1711115459.jpg', 'service-in-cosmetic', 'aa', '1', 'meta title', 'mete description', '<p style=\"color: rgb(0, 0, 0); font-family: Roboto, Arial, Helvetica, sans-serif; font-size: 16.1px;\"><u>Millennial men</u> are the most likely to not have a primary care physician, a report from Statistics Canada found.</p><p style=\"color: rgb(0, 0, 0); font-family: Roboto, Arial, Helvetica, sans-serif; font-size: 16.1px;\">In figures released Thursday, the agency said 33 per cent of 18 to 34 year old men did not have a primary care physician, compared to 15 per cent in the general population.</p>', 6, '2024-03-16 09:11:03', '2024-03-22 10:50:59'),
(3, 'service in training.', '1711115487.jpeg', 'service-in-training', 'training', '1', 'meta title', 'mete description', '<p style=\"color: rgb(0, 0, 0); font-family: Roboto, Arial, Helvetica, sans-serif; font-size: 16.1px;\"><span style=\"font-family: &quot;Arial Black&quot;;\">Millennial men are the most </span>likely to not have a primary care physician, a report from Statistics Canada found.</p><p style=\"color: rgb(0, 0, 0); font-family: Roboto, Arial, Helvetica, sans-serif; font-size: 16.1px;\">In figures released Thursday, the agency said 33 per cent of 18 to 34 year old men did not have a primary care physician, compared to 15 per cent in the general population.</p>', 7, '2024-03-16 09:11:42', '2024-03-22 10:51:27'),
(5, 'Nephrology.', '1711115267.jpg', 'nephrology', 's', '1', 'meta title', 'mete description', '<h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 1.5rem; text-transform: capitalize; clear: both; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 27, 75); transition: all 0.3s ease 0s;\">Experienced People Can Help You More.</h5><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 24px; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Our consultants believe the value that you manage your reguator complance police procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p><div class=\"row g-4 mb-4 mt-3\" style=\"margin-right: calc(var(--bs-gutter-x)/ -2); margin-left: calc(var(--bs-gutter-x)/ -2); padding: 0px; --bs-gutter-x: 1.5rem; --bs-gutter-y: 1.5rem; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\"><div class=\"col-xl-6 col-12\" style=\"margin-top: var(--bs-gutter-y); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: calc(var(--bs-gutter-x)/ 2); padding-bottom: 0px; padding-left: calc(var(--bs-gutter-x)/ 2); flex-basis: auto; width: 420px; max-width: 100%;\"><video src=\"assets/video/02.mp4\" muted=\"\" loop=\"\" autoplay=\"\" class=\"w-100\" style=\"margin: 0px; padding: 0px; width: 396px;\"></video></div><div class=\"col-xl-6 col-12\" style=\"margin-top: var(--bs-gutter-y); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: calc(var(--bs-gutter-x)/ 2); padding-bottom: 0px; padding-left: calc(var(--bs-gutter-x)/ 2); flex-basis: auto; width: 420px; max-width: 100%;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-size: 1rem; line-height: 24px;\">Holistic are empowe ethca mperatives through distinctivey ncubate best of breed that solution cent focusd customer service through website</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-size: 1rem; line-height: 24px;\">Holistic are empowe ethca mperatives through distinctivey ncubate best of breed that solution cent focusd customer service through website.</p></div></div><h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 1.5rem; text-transform: capitalize; clear: both; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 27, 75); transition: all 0.3s ease 0s;\">Experienced People Can Help You More.</h5><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 24px; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Our consultants believe the value that you manage your reguator compliance poice procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p><div class=\"row g-4 mb-4 mt-3 flex-row-reverse\" style=\"margin-right: calc(var(--bs-gutter-x)/ -2); margin-left: calc(var(--bs-gutter-x)/ -2); padding: 0px; --bs-gutter-x: 1.5rem; --bs-gutter-y: 1.5rem; color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\"><div class=\"col-xl-6 col-12\" style=\"margin-top: var(--bs-gutter-y); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: calc(var(--bs-gutter-x)/ 2); padding-bottom: 0px; padding-left: calc(var(--bs-gutter-x)/ 2); flex-basis: auto; width: 420px; max-width: 100%;\"><iframe src=\"https://www.youtube.com/embed/S-CvC4BAIIo?si=69QFYU0dSBNLim8k\" frameborder=\"0\" allowfullscreen=\"\" height=\"250px\" class=\"w-100\" style=\"margin: 0px; padding: 0px; border-width: 0px; border-style: initial; width: 396px;\"></iframe></div><div class=\"col-xl-6 col-12\" style=\"margin-top: var(--bs-gutter-y); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: calc(var(--bs-gutter-x)/ 2); padding-bottom: 0px; padding-left: calc(var(--bs-gutter-x)/ 2); flex-basis: auto; width: 420px; max-width: 100%;\"><h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-weight: 700; line-height: 1.3; font-size: 1.5rem; text-transform: capitalize; clear: both; font-family: &quot;DM Sans&quot;, sans-serif; color: rgb(0, 27, 75); transition: all 0.3s ease 0s;\">Quality We Ensure</h5><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-size: 1rem; line-height: 24px;\">Holistc are empower ethcal imperatv thrugh distinctvely incubate best breed that solutns clents focused customer servce thru website</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-size: 1rem; line-height: 24px;\">Holistc are empower ethcal imperatv thrugh distinctvely incubate best breed that solutns focused customer thru website</p></div></div>', 5, '2024-03-19 10:05:11', '2024-03-22 10:47:47'),
(6, 'Neurosurgery', '1711129662.jpg', 'neurosurgery', 'a', '1', 'meta title', 'mete description', '<span style=\"color: rgb(85, 85, 85); font-family: &quot;DM Sans&quot;, sans-serif;\">Get started swiftly and easily importing in demo of professionally designed pre-built website are in concepts to choose from.</span>', 5, '2024-03-22 14:47:42', '2024-03-22 14:48:38');

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `priority` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`id`, `name`, `slug`, `parent_id`, `priority`, `created_at`, `updated_at`) VALUES
(5, 'stem cell', 'stem-cell', NULL, NULL, '2024-03-15 15:03:05', '2024-03-15 15:05:20'),
(6, 'cosmetic', 'cosmetic', NULL, NULL, '2024-03-15 15:03:30', '2024-03-15 15:03:30'),
(7, 'training', 'training', NULL, NULL, '2024-03-15 15:05:46', '2024-03-15 15:05:46');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `image`, `author`, `text`, `rating`, `created_at`, `updated_at`) VALUES
(2, 'William Thomas1', '1711997586.jpg', 'cusromer', 'Praised idea and masa cusp veena gelatin turf supine gaseous mustier dictums effacer users edams create pharetra meatilus aquept nullary nullify acre numbers Atenean handwrit laborites', 3, '2024-04-01 15:53:06', '2024-04-01 15:53:06'),
(3, 'john', '1712067751.jpg', 'cusromer', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour', 4, '2024-04-02 11:22:31', '2024-04-02 11:22:31'),
(4, 'First Name', '1712080396.jpg', 'Engineer', 'This is test testimonial', 5, '2024-04-02 11:53:16', '2024-04-02 11:53:16');

-- --------------------------------------------------------

--
-- Table structure for table `treatment_types`
--

CREATE TABLE `treatment_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin1', 'admin@gmail.com', NULL, '$2y$12$QoOByxg3jBu36AsWO2floeejID7YPu93RujOWcdwr69pvCR19qiCW', NULL, '2024-03-12 12:27:11', '2024-03-12 12:27:11');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
