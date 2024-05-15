-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2024 at 09:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bimeo`
--

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `proof` varchar(255) NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `amount` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(4, NULL, '<h4><strong>What is FAQ?</strong></h4><p>FAQ means frequent asked questions</p>', '2023-11-06 07:36:53', '2023-11-06 07:36:53'),
(5, NULL, '<p>1. To deposit funds</p><p>• With the massive amount of information on the platform, users should contact customer service to confirm and double-check the client\'s cryptocurrency address before each deposit.</p><p>• After a successful deposit, users are requested to provide successful transfer receipts for online customer service to update the platform account.</p><p>• The cryptocurrency address of the recipient and the amount transferred must be the same as the cryptocurrency address details provided for the payment to be effective immediately.</p><p>• If the user encounters any problem during the deposit process, please contact our online customer service for more information!</p><p>2. About Products</p><p>• The value of the Product is adjusted according to the market value.</p><p>• The Product is randomly assigned according to the total balance on the user\'s account.</p><p>• The higher the balance on the user\'s account, the higher the amount of the Product, and therefore the higher the profit.</p><p>• If the user is concerned that the amount of the Product is too high to afford, please do not deposit too much money to start drive traffic.</p><p>3. Withdrawal</p><p>• Withdrawal time is from 10:00 to 22:59 daily</p><p>4. Platform User Mode</p><p>• Users may invite new users to become platform users and will receive additional referral commissions. The referral incentive is an additional 20%<br>• Platform users can invite others to become platform agents through agent codes and become your downline. As the upline, you can extract a certain percentage of your downline\'s profit, and the profit obtained by the upline will be directly returned to the upline\'s platform account or the team report.<br>• You can get 20% of your Tier 1 agent\'s profit<br>• All users of the platform will receive a certain percentage of the platform\'s profits and rewards accordingly, developing a team does not affect the profits and rewards of any users</p><p>5. Operating hours</p><p>• Users may optimize the Product during the daily operation hours from 10:00 to 22:59</p><p>Notice: For further explanation, please click \"Support\" on the platform to contact our online customer service</p>', '2023-11-06 08:01:06', '2023-11-06 08:01:06');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_30_092539_create_tiers_table', 1),
(6, '2023_08_30_092540_create_users_table', 1),
(7, '2023_08_31_060817_laratrust_setup_tables', 1),
(8, '2023_09_05_064059_create_and_update_table', 1),
(9, '2023_09_08_024422_create_deposits_table', 1),
(10, '2023_09_08_094456_create_payment_infos_table', 1),
(11, '2023_09_08_115243_create_user_payments_table', 1),
(12, '2023_09_09_190802_create_withdrawals_table', 1),
(13, '2023_09_09_205044_create_settings_table', 1),
(14, '2023_09_11_221741_table_update', 1),
(15, '2023_09_13_153723_create_faqs_table', 1),
(16, '2023_09_16_050722_create_notifications_table', 1),
(37, '2023_09_26_121738_create_products_table', 2),
(38, '2023_09_26_140108_create_product_reviews_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `massage` longtext NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `title`, `massage`, `user_id`, `is_read`, `created_at`, `updated_at`) VALUES
(1, 'Account Creadited', 'Your Account has been creadited with $200', 3, 1, '2023-10-10 20:34:34', '2024-05-15 06:10:05'),
(2, 'Withdrawal Request', 'Withdrawal Request submitted successfuly', 3, 1, '2023-10-18 14:49:47', '2024-05-15 06:10:05'),
(3, 'Withdrawal Request', 'Withdrawal Request submitted successfuly', 3, 1, '2023-10-21 05:05:10', '2023-10-27 23:54:19'),
(4, 'Account Creadited', 'Your Account has been creadited with $200', 3, 1, '2023-10-21 07:47:09', '2023-10-27 23:54:19'),
(5, 'Withdrawal Request Approved', 'Your Withdrawl Request has been appeoved successfuly fund will arive in your provided wallet address soon.', 3, 1, '2023-10-26 21:24:07', '2023-10-27 23:54:19'),
(6, 'Withdrawal Request Approved', 'Your Withdrawl Request has been appeoved successfuly fund will arive in your provided wallet address soon.', 3, 1, '2023-10-26 21:24:13', '2023-10-27 23:54:19'),
(7, 'Asset Unfreezed', '$0.9 of frozen asset unfrozed and moved to your balance', 3, 1, '2023-10-30 17:16:53', '2023-11-06 08:20:27'),
(8, 'Asset Unfreezed', '$0.9 of frozen asset unfrozed and moved to your balance', 3, 1, '2023-10-30 17:20:56', '2023-11-06 08:20:28'),
(9, 'Asset Unfreezed', '$0.9 of frozen asset unfrozed and moved to your balance', 3, 1, '2023-10-30 17:34:38', '2023-11-06 08:20:28'),
(10, 'Asset Unfreezed', '$0.9 of frozen asset unfrozed and moved to your balance', 3, 1, '2023-10-30 17:35:07', '2023-11-06 08:20:28'),
(11, 'Asset Unfreezed', '$0.9 of frozen asset unfrozed and moved to your balance', 3, 1, '2023-10-30 17:35:18', '2023-11-06 08:20:28'),
(12, 'Asset Unfreezed', '$196.4 of frozen asset unfrozed and moved to your balance', 3, 1, '2023-11-01 14:27:03', '2023-11-06 08:20:28'),
(13, 'Withdrawal Request Approved', 'Your Withdrawl Request has been appeoved successfuly fund will arive in your provided wallet address soon.', 3, 1, '2023-11-01 20:38:45', '2023-11-06 08:20:29'),
(14, 'Account Debited', 'Your Account has been Debit with $200', 3, 1, '2023-11-03 10:41:01', '2023-11-06 08:20:29'),
(15, 'Account Creadited', 'Your Account has been creadited with $100', 3, 1, '2023-11-04 20:07:11', '2023-11-06 08:20:29'),
(16, 'Asset Unfreezed', '$ of frozen asset unfrozed and moved to your balance', 3, 1, '2023-11-04 20:07:35', '2023-11-06 08:20:29'),
(17, 'Asset Unfreezed', '$ of frozen asset unfrozed and moved to your balance', 3, 1, '2023-11-04 20:10:11', '2023-11-06 08:20:29'),
(18, 'Asset Unfreezed', '$ of frozen asset unfrozed and moved to your balance', 3, 1, '2023-11-04 20:10:14', '2023-11-06 08:20:30'),
(19, 'Account Creadited', 'Your Account has been creadited with $200', 3, 1, '2023-11-04 20:14:36', '2023-11-06 08:20:30'),
(20, 'Asset Unfreezed', '$ of frozen asset unfrozed and moved to your balance', 3, 1, '2023-11-04 20:19:52', '2023-11-06 08:20:30'),
(21, 'Asset Unfreezed', '$159 of frozen asset unfrozed and moved to your balance', 3, 1, '2023-11-05 05:48:45', '2023-11-06 08:20:30'),
(22, 'Account Creadited', 'Your Account has been creadited with $100', 3, 1, '2023-11-05 05:49:11', '2023-11-06 08:20:30'),
(23, 'Account Creadited', 'Your Account has been creadited with $200', 3, 1, '2023-11-05 05:53:17', '2023-11-06 08:20:30'),
(24, 'Asset Unfreezed', '$59 of frozen asset unfrozed and moved to your balance', 3, 1, '2023-11-05 05:53:39', '2023-11-06 08:20:30'),
(25, 'Account Creadited', 'Your Account has been creadited with $50', 3, 1, '2023-11-05 05:56:49', '2023-11-06 08:20:31'),
(26, 'Account Creadited', 'Your Account has been creadited with $50', 3, 1, '2023-11-05 05:57:06', '2023-11-06 08:20:31'),
(27, 'Account Creadited', 'Your Account has been creadited with $82', 3, 1, '2023-11-05 06:02:39', '2023-11-06 08:20:31'),
(28, 'Asset Unfreezed', '$218 of frozen asset unfrozed and moved to your balance', 3, 1, '2023-11-05 06:02:58', '2023-11-06 08:20:31'),
(29, 'Account Creadited', 'Your Account has been creadited with $85', 3, 1, '2023-11-05 06:03:37', '2023-11-06 08:20:32'),
(30, 'Asset Unfreezed', '$0.3 of frozen asset unfrozed and moved to your balance', 3, 1, '2023-11-05 07:08:27', '2023-11-06 08:20:32'),
(31, 'Account Creadited', 'Your Account has been creadited with $190', 3, 1, '2023-11-05 11:50:53', '2023-11-06 08:20:32'),
(32, 'Asset Unfreezed', '$310 of frozen asset unfrozed and moved to your balance', 3, 1, '2023-11-05 12:42:40', '2023-11-06 08:20:32'),
(33, 'Account Creadited', 'Your Account has been creadited with $20', 3, 1, '2023-11-06 05:33:32', '2023-11-06 08:20:33'),
(34, 'Account Creadited', 'Your Account has been creadited with $169.2', 3, 1, '2023-11-06 07:13:20', '2023-11-06 08:20:33'),
(35, 'Account Debited', 'Your Account has been Debit with $200', 3, 1, '2023-11-06 07:21:41', '2023-11-06 08:20:33'),
(36, 'Account Creadited', 'Your Account has been creadited with $200', 3, 1, '2023-11-06 07:21:51', '2023-11-06 08:20:33'),
(37, 'Asset Unfreezed', '$531.6 of frozen asset unfrozed and moved to your balance', 3, 1, '2023-11-06 07:22:09', '2023-11-06 08:20:33'),
(38, 'Account Debited', 'Your Account has been Debit with $322', 3, 1, '2023-11-06 08:15:27', '2023-11-06 08:20:34'),
(39, 'Account Creadited', 'Your Account has been creadited with $152', 3, 1, '2023-11-06 08:17:18', '2023-11-06 08:20:34'),
(40, 'Account Debited', 'Your Account has been Debit with $100', 3, 1, '2023-11-06 08:18:15', '2023-11-06 08:20:34'),
(41, 'Account Creadited', 'Your Account has been creadited with $40', 3, 1, '2023-11-06 08:18:31', '2023-11-06 08:20:34'),
(42, 'Account Creadited', 'Your Account has been creadited with $291', 3, 1, '2023-11-07 07:31:01', '2023-11-21 23:30:31'),
(43, 'Asset Unfreezed', '$ of frozen asset unfrozed and moved to your balance', 3, 1, '2023-11-07 07:31:21', '2023-11-21 23:30:31'),
(44, 'Asset Unfreezed', '$710.2 of frozen asset unfrozed and moved to your balance', 3, 1, '2023-11-07 07:31:47', '2023-11-21 23:30:31'),
(59, 'Account Debited', 'Your Account has been Debit with $845.76', 3, 1, '2023-11-13 13:35:38', '2023-11-21 23:30:32'),
(60, 'Account Creadited', 'Your Account has been creadited with $55', 3, 1, '2023-11-13 13:36:28', '2023-11-21 23:30:32'),
(61, 'Asset Frozen', '$55 of your asset frozen', 3, 1, '2023-11-13 13:37:20', '2023-11-21 23:30:33'),
(62, 'Account Debited', 'Your Account has been Debit with $20', 3, 1, '2023-11-13 13:38:14', '2023-11-21 23:30:33'),
(63, 'Account Creadited', 'Your Account has been creadited with $15', 3, 1, '2023-11-13 13:39:08', '2023-11-21 23:30:33'),
(64, 'Account Debited', 'Your Account has been Debit with $50', 3, 1, '2023-11-13 13:39:45', '2023-11-21 23:30:34'),
(65, 'Account Creadited', 'Your Account has been creadited with $20', 3, 1, '2023-11-13 13:40:28', '2023-11-21 23:30:34'),
(66, 'Account Debited', 'Your Account has been Debit with $20', 3, 1, '2023-11-13 13:46:39', '2023-11-21 23:30:35'),
(67, 'Account Creadited', 'Your Account has been creadited with $15', 3, 1, '2023-11-13 13:47:24', '2023-11-21 23:30:35'),
(68, 'Account Creadited', 'Your Account has been creadited with $10', 3, 1, '2023-11-13 13:48:10', '2023-11-21 23:30:37'),
(69, 'Account Creadited', 'Your Account has been creadited with $49', 3, 1, '2023-11-13 13:48:46', '2023-11-21 23:30:38'),
(81, 'Account Creadited', 'Your Account has been creadited with $11000', 3, 1, '2023-11-17 17:28:00', '2023-11-21 23:30:39'),
(82, 'Asset Unfreezed', '$1129 of frozen asset unfrozed and moved to your balance', 3, 1, '2023-11-17 17:28:36', '2023-11-21 23:30:39'),
(83, 'Asset Unfreezed', '$5000 of frozen asset unfrozed and moved to your balance', 3, 1, '2023-11-17 17:29:36', '2023-11-21 23:30:40'),
(85, 'Asset Unfreezed', '$5160 of frozen asset unfrozed and moved to your balance', 3, 1, '2023-11-18 17:31:47', '2023-11-21 23:30:41'),
(114, 'Account Creadited', 'Your Account has been creadited with $1200', 32, 0, '2023-11-27 14:43:19', '2023-11-27 14:43:19'),
(115, 'Withdrawal Request', 'Withdrawal Request submitted successfuly', 32, 0, '2023-11-27 15:37:39', '2023-11-27 15:37:39'),
(116, 'Withdrawal Request Approved', 'Your Withdrawl Request has been appeoved successfuly fund will arive in your provided wallet address soon.', 32, 0, '2023-11-27 15:38:31', '2023-11-27 15:38:31'),
(117, 'Account Creadited', 'Your Account has been creadited with $1200', 34, 0, '2023-12-05 07:49:08', '2023-12-05 07:49:08'),
(118, 'Account Creadited', 'Your Account has been creadited with $1200', 36, 0, '2023-12-05 09:07:24', '2023-12-05 09:07:24'),
(119, 'Withdrawal Request', 'Withdrawal Request submitted successfuly', 36, 0, '2023-12-05 09:40:04', '2023-12-05 09:40:04'),
(120, 'Withdrawal Request Approved', 'Your Withdrawl Request has been appeoved successfuly fund will arive in your provided wallet address soon.', 36, 0, '2023-12-05 09:40:48', '2023-12-05 09:40:48'),
(121, 'Account Creadited', 'Your Account has been creadited with $58', 35, 0, '2023-12-05 12:22:29', '2023-12-05 12:22:29'),
(122, 'Withdrawal Request', 'Withdrawal Request submitted successfuly', 35, 0, '2023-12-05 12:24:54', '2023-12-05 12:24:54'),
(123, 'Withdrawal Request Approved', 'Your Withdrawl Request has been appeoved successfuly fund will arive in your provided wallet address soon.', 35, 0, '2023-12-05 12:34:55', '2023-12-05 12:34:55'),
(124, 'Account Creadited', 'Your Account has been creadited with $70', 35, 0, '2023-12-07 13:32:24', '2023-12-07 13:32:24'),
(125, 'Withdrawal Request', 'Withdrawal Request submitted successfuly', 35, 0, '2023-12-07 13:47:16', '2023-12-07 13:47:16'),
(126, 'Withdrawal Request Approved', 'Your Withdrawl Request has been appeoved successfuly fund will arive in your provided wallet address soon.', 35, 0, '2023-12-07 13:52:47', '2023-12-07 13:52:47'),
(127, 'Account Creadited', 'Your Account has been creadited with $150', 35, 0, '2023-12-07 14:27:28', '2023-12-07 14:27:28'),
(128, 'Withdrawal Request', 'Withdrawal Request submitted successfuly', 35, 0, '2023-12-07 14:38:48', '2023-12-07 14:38:48'),
(129, 'Withdrawal Request Approved', 'Your Withdrawl Request has been appeoved successfuly fund will arive in your provided wallet address soon.', 35, 0, '2023-12-07 14:47:12', '2023-12-07 14:47:12'),
(130, 'Account Creadited', 'Your Account has been creadited with $200', 35, 0, '2023-12-07 15:39:46', '2023-12-07 15:39:46'),
(131, 'Account Creadited', 'Your Account has been creadited with $1200', 36, 0, '2023-12-08 11:05:26', '2023-12-08 11:05:26'),
(132, 'Account Creadited', 'Your Account has been creadited with $207', 36, 0, '2023-12-14 10:38:46', '2023-12-14 10:38:46'),
(133, 'Asset Unfreezed', '$1420 of frozen asset unfrozed and moved to your balance', 36, 0, '2023-12-14 10:39:17', '2023-12-14 10:39:17'),
(134, 'Account Creadited', 'Your Account has been creadited with $39', 36, 0, '2023-12-14 11:21:32', '2023-12-14 11:21:32'),
(135, 'Account Creadited', 'Your Account has been creadited with $39', 36, 0, '2023-12-14 11:21:45', '2023-12-14 11:21:45'),
(136, 'Asset Unfreezed', '$1921.51 of frozen asset unfrozed and moved to your balance', 36, 0, '2023-12-14 11:22:40', '2023-12-14 11:22:40'),
(137, 'Account Debited', 'Your Account has been Debit with $450', 35, 0, '2023-12-14 11:35:24', '2023-12-14 11:35:24'),
(138, 'Withdrawal Request', 'Withdrawal Request submitted successfuly', 36, 0, '2023-12-14 11:46:41', '2023-12-14 11:46:41'),
(139, 'Withdrawal Request Approved', 'Your Withdrawl Request has been appeoved successfuly fund will arive in your provided wallet address soon.', 36, 0, '2023-12-14 11:47:09', '2023-12-14 11:47:09'),
(140, 'Account Creadited', 'Your Account has been creadited with $75', 35, 0, '2023-12-15 18:42:15', '2023-12-15 18:42:15'),
(141, 'Asset Unfreezed', '$310.3 of frozen asset unfrozed and moved to your balance', 35, 0, '2023-12-15 18:42:51', '2023-12-15 18:42:51'),
(142, 'Account Creadited', 'Your Account has been creadited with $310.3', 35, 0, '2023-12-15 18:43:40', '2023-12-15 18:43:40'),
(143, 'Withdrawal Request', 'Withdrawal Request submitted successfuly', 35, 0, '2023-12-15 18:52:37', '2023-12-15 18:52:37'),
(144, 'Withdrawal Request Approved', 'Your Withdrawl Request has been appeoved successfuly fund will arive in your provided wallet address soon.', 35, 0, '2023-12-15 19:00:05', '2023-12-15 19:00:05'),
(145, 'Account Creadited', 'Your Account has been creadited with $100', 35, 0, '2023-12-15 19:11:34', '2023-12-15 19:11:34'),
(146, 'Account Creadited', 'Your Account has been creadited with $5', 35, 0, '2023-12-15 19:12:15', '2023-12-15 19:12:15'),
(147, 'Account Creadited', 'Your Account has been creadited with $5', 35, 0, '2023-12-15 19:12:28', '2023-12-15 19:12:28'),
(148, 'Withdrawal Request', 'Withdrawal Request submitted successfuly', 35, 0, '2023-12-15 19:30:10', '2023-12-15 19:30:10'),
(149, 'Withdrawal Request Approved', 'Your Withdrawl Request has been appeoved successfuly fund will arive in your provided wallet address soon.', 35, 0, '2023-12-15 19:38:31', '2023-12-15 19:38:31'),
(150, 'Account Creadited', 'Your Account has been creadited with $350', 35, 0, '2023-12-15 19:54:58', '2023-12-15 19:54:58'),
(151, 'Account Creadited', 'Your Account has been creadited with $242', 35, 0, '2023-12-15 20:24:45', '2023-12-15 20:24:45'),
(152, 'Asset Unfreezed', '$593.19 of frozen asset unfrozed and moved to your balance', 35, 0, '2023-12-15 20:29:29', '2023-12-15 20:29:29'),
(153, 'Account Creadited', 'Your Account has been creadited with $593', 35, 0, '2023-12-15 20:29:51', '2023-12-15 20:29:51');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_infos`
--

CREATE TABLE `payment_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wallet_name` varchar(255) NOT NULL,
  `walet_address` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2023-09-18 14:13:39', '2023-09-18 14:13:39'),
(2, 'users-read', 'Read Users', 'Read Users', '2023-09-18 14:13:39', '2023-09-18 14:13:39'),
(3, 'users-update', 'Update Users', 'Update Users', '2023-09-18 14:13:39', '2023-09-18 14:13:39'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2023-09-18 14:13:39', '2023-09-18 14:13:39'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2023-09-18 14:13:39', '2023-09-18 14:13:39'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2023-09-18 14:13:39', '2023-09-18 14:13:39'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2023-09-18 14:13:39', '2023-09-18 14:13:39'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2023-09-18 14:13:40', '2023-09-18 14:13:40'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2023-09-18 14:13:40', '2023-09-18 14:13:40'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2023-09-18 14:13:40', '2023-09-18 14:13:40');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(10, 1),
(10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` double(8,2) NOT NULL,
  `profit` double(8,2) NOT NULL,
  `tier_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `img`, `price`, `profit`, `tier_id`, `created_at`, `updated_at`) VALUES
(6, 'Leather ladies hand Bag', 'uploads/product/Bag.jpg', 75.00, 0.75, 2, '2023-11-09 12:01:06', '2023-11-18 11:55:22'),
(7, 'Modern Office Table Executive', 'uploads/product/Modern Office Table Executive.jpg', 85.00, 0.75, 2, '2023-11-09 20:43:44', '2023-11-18 11:56:12'),
(8, 'Office Furniture Coffee Table', 'uploads/product/Office Furniture Coffee Table.jpg', 150.00, 1.00, 3, '2023-11-09 20:45:34', '2023-11-18 11:57:16'),
(9, 'Luxury Foshan Custom CEO', 'uploads/product/Luxury Foshan Custom CEO.jpg', 318.00, 1.25, 4, '2023-11-09 20:47:51', '2023-11-18 11:58:37'),
(11, 'Wireless Battery Operated Surveillance…', 'uploads/product/Wireless Battery Operated Surveillance….jpg', 610.00, 1.50, 5, '2023-11-09 21:00:43', '2023-11-18 11:59:48'),
(14, 'High Quality Heavy Duty Welder Extension Cord…', 'uploads/product/High Quality Heavy Duty Welder Extension Cord….jpg', 160.00, 1.00, 3, '2023-11-09 21:04:17', '2023-11-18 12:00:52'),
(17, 'Commercial Water Dispenser with Top Faucet', 'uploads/product/Commercial Water Dispenser with Top Faucet.jpg', 330.00, 1.25, 4, '2023-11-09 21:07:13', '2023-11-18 12:02:08'),
(19, 'Ladies Designer Vegan Leather hobo bag', 'uploads/product/Ladies Designer Vegan Leather hobo bag.jpg', 720.00, 1.50, 5, '2023-11-09 21:09:46', '2023-11-18 12:03:17'),
(20, 'LG Washing Machine P1461RWN', 'uploads/product/LG Washing Machine P1461RWN.jpg', 145.00, 1.00, 3, '2023-11-09 21:10:47', '2023-11-18 12:05:20'),
(22, 'men\'s leather duffel travel bag', 'uploads/product/men\'s leather duffel travel bag.jpg', 375.00, 1.25, 4, '2023-11-09 21:13:12', '2023-11-18 12:06:35'),
(25, 'Memory Foam Mattress A Memorable Nights', 'uploads/product/Memory Foam Mattress A Memorable Nights.jpg', 630.00, 1.50, 5, '2023-11-09 21:15:34', '2023-11-18 12:08:01'),
(27, 'Natural Rubber Yoga Mat', 'uploads/product/Natural Rubber Yoga Mat.jpg', 410.00, 1.25, 4, '2023-11-09 21:17:42', '2023-11-18 12:09:07'),
(28, 'Solar CCTV Camera | Solar Wi-Fi CCTV Camera', 'uploads/product/Solar CCTV Camera | Solar Wi-Fi CCTV Camera.jpg', 735.00, 1.50, 5, '2023-11-09 21:18:17', '2023-11-18 12:10:34'),
(29, 'Allie Dark Grey Sofa Chairs', 'uploads/product/Allie Dark Grey Sofa Chairs.jpg', 170.00, 1.00, 3, '2023-11-09 21:19:30', '2023-11-18 12:11:48'),
(30, 'Saint Mary\'s Tulsa Summer Heat fan', 'uploads/product/Saint Mary\'s Tulsa Summer Heat fan.jpg', 420.00, 1.25, 4, '2023-11-09 21:20:50', '2023-11-18 12:13:09'),
(31, 'Tempurpedic Sleeper Sofa chair', 'uploads/product/Tempurpedic Sleeper Sofa chair.jpg', 710.00, 1.50, 5, '2023-11-09 21:21:47', '2023-11-18 12:14:38'),
(32, 'Black and Decker 4-in-1 6 Piece Personal Compact Sports Blender and Smoothie Maker 500 ml 300 W SBX300-B5', 'uploads/product/Black and Decker 4-in-1 6 Piece Personal Compact Sports Blender and Smoothie Maker 500 ml 300 W SBX300-B5.jpg', 155.00, 1.00, 3, '2023-11-09 21:23:05', '2023-11-18 12:15:38'),
(33, '2023  Single Seat Sofa Chairs', 'uploads/product/2023  Single Seat Sofa Chairs.jpg', 162.00, 1.00, 3, '2023-11-09 21:23:59', '2023-11-18 12:16:50'),
(34, 'Cool Living 5,000 BTU air conditioner', 'uploads/product/Cool Living 5,000 BTU air conditioner.jpg', 730.00, 1.25, 4, '2023-11-09 21:25:07', '2023-11-18 12:17:55'),
(35, 'Geepas standing cooling Refrigerator', 'uploads/product/Geepas standing cooling Refrigerator.jpg', 725.00, 1.50, 5, '2023-11-09 21:27:39', '2023-11-18 12:19:04'),
(36, 'stainless steel black sink waterfall faucet', 'uploads/product/stainless steel black sink waterfall faucet.jpeg', 36.00, 0.50, 1, '2023-11-17 10:29:30', '2023-11-18 12:04:03'),
(37, 'stainless steel black sink waterfall faucet', 'uploads/product/stainless steel black sink waterfall faucet.jpeg', 71.00, 0.75, 2, '2023-11-17 10:29:31', '2023-11-19 14:26:40'),
(38, 'stainless steel black sink waterfall faucet', 'uploads/product/stainless steel black sink waterfall faucet.jpeg', 159.00, 1.00, 3, '2023-11-17 10:32:02', '2023-11-18 12:21:45'),
(39, 'stainless steel black sink waterfall faucet', 'uploads/product/*stainless steel black sink waterfall faucet*.jpeg', 335.00, 1.25, 4, '2023-11-17 10:32:44', '2023-11-18 12:23:15'),
(40, 'stainless steel black sink waterfall faucet', 'uploads/product/stainless steel black sink waterfall faucet.jpeg', 555.00, 1.50, 5, '2023-11-17 10:33:28', '2023-11-18 12:24:32'),
(41, 'La Bianca Wardrobe', 'uploads/product/La Bianca Wardrobe.jpg', 440.00, 1.25, 4, '2023-11-17 11:07:07', '2023-11-18 12:25:47'),
(42, 'Shared Hosting', 'uploads/product/Shared Hosting.jpeg', 42.00, 0.50, 1, '2023-11-17 11:45:20', '2023-11-18 12:26:57'),
(43, 'sliding door wardrobe with loft, model,', 'uploads/product/sliding door wardrobe with loft, model,.jpg', 40.00, 0.50, 1, '2023-11-17 11:49:59', '2023-11-18 12:28:01'),
(44, 'Modular wardrobe', 'uploads/product/Modular wardrobe.jpeg', 41.00, 0.50, 1, '2023-11-17 13:21:59', '2023-11-18 12:29:03'),
(45, 'Modular wardrobe', 'uploads/product/Modular wardrobe.jpeg', 69.00, 0.75, 2, '2023-11-17 13:22:27', '2023-11-18 12:30:04'),
(46, 'Modular wardrobe', 'uploads/product/Modular wardrobe.jpeg', 179.00, 1.00, 3, '2023-11-17 13:22:55', '2023-11-18 12:31:03'),
(47, 'Modular wardrobe', 'uploads/product/Modular wardrobe.jpeg', 329.00, 1.25, 4, '2023-11-17 13:23:30', '2023-11-18 12:32:13'),
(48, 'Modular wardrobe', 'uploads/product/Modular wardrobe.jpeg', 760.00, 1.50, 5, '2023-11-17 13:24:08', '2023-11-18 12:33:17'),
(50, 'Low maintenance modern styled compact sized wardrobe', 'uploads/product/Low maintenance modern styled compact sized wardrobe.jpeg', 48.00, 0.50, 1, '2023-11-17 13:25:28', '2023-11-18 12:34:35'),
(51, 'Low maintenance modern styled compact sized wardrobe', 'uploads/product/Low maintenance modern styled compact sized wardrobe.jpeg', 89.00, 0.75, 2, '2023-11-17 13:25:51', '2023-11-18 12:35:46'),
(52, 'Low maintenance modern styled compact sized wardrobe', 'uploads/product/Low maintenance modern styled compact sized wardrobe.jpeg', 169.00, 1.00, 3, '2023-11-17 13:28:35', '2023-11-18 12:38:20'),
(53, 'Low maintenance modern styled compact sized wardrobe', 'uploads/product/Low maintenance modern styled compact sized wardrobe.jpeg', 439.00, 1.25, 4, '2023-11-17 13:29:01', '2023-11-18 12:39:29'),
(54, 'Low maintenance modern styled compact sized wardrobe', 'uploads/product/Low maintenance modern styled compact sized wardrobe.jpeg', 659.00, 1.50, 5, '2023-11-17 13:29:22', '2023-11-18 12:40:23'),
(55, 'Aluminum modular kitchen cabinet', 'uploads/product/Aluminum modular kitchen cabinet.jpeg', 46.00, 0.50, 1, '2023-11-17 13:30:20', '2023-11-18 12:42:42'),
(56, 'Aluminum modular kitchen cabinet', 'uploads/product/Aluminum modular kitchen cabinet.jpeg', 99.00, 0.75, 2, '2023-11-17 13:30:44', '2023-11-18 12:43:52'),
(57, 'Aluminum modular kitchen cabinet', 'uploads/product/Aluminum modular kitchen cabinet.jpeg', 158.00, 1.00, 3, '2023-11-17 13:31:06', '2023-11-18 12:45:05'),
(58, 'Aluminum modular kitchen cabinet', 'uploads/product/Aluminum modular kitchen cabinet.jpeg', 410.00, 1.25, 4, '2023-11-17 13:31:25', '2023-11-18 12:46:14'),
(59, 'Aluminum modular kitchen cabinet', 'uploads/product/Aluminum modular kitchen cabinet.jpeg', 660.00, 1.50, 5, '2023-11-17 13:31:48', '2023-11-18 12:48:47'),
(60, 'Absolute - The perfect LED rounded mirror', 'uploads/product/Absolute - The perfect LED rounded mirror.jpg', 43.00, 0.50, 1, '2023-11-17 13:32:07', '2023-11-18 12:49:56'),
(61, 'KINWELL 40inch. W x 28inches H frameless rectangular LED mirror with Anti-Fog Function', 'uploads/product/KINWELL 40inch. W x 28inches H frameless rectangular LED mirror with Anti-Fog Function.jpeg', 49.00, 0.50, 1, '2023-11-17 13:32:29', '2023-11-18 12:51:19'),
(62, 'KINWELL 40inch. W x 28inches H frameless rectangular LED mirror with Anti-Fog Function', 'uploads/product/KINWELL 40inch. W x 28inches H frameless rectangular LED mirror with Anti-Fog Function.jpeg', 85.00, 0.75, 2, '2023-11-17 13:32:55', '2023-11-18 12:52:40'),
(63, 'Aluminum kitchen cabinet', 'uploads/product/Aluminum kitchen cabinet.jpg', 45.00, 0.50, 1, '2023-11-17 13:33:10', '2023-11-18 12:53:38'),
(64, 'KINWELL 40inch. W x 28inches H frameless rectangular LED mirror with Anti-Fog Function', 'uploads/product/KINWELL 40inch. W x 28inches H frameless rectangular LED mirror with Anti-Fog Function.jpeg', 180.00, 1.00, 3, '2023-11-17 13:33:14', '2023-11-18 12:58:08'),
(65, 'KINWELL 40inch. W x 28inches H frameless rectangular LED mirror with Anti-Fog Function', 'uploads/product/KINWELL 40inch. W x 28inches H frameless rectangular LED mirror with Anti-Fog Function.jpeg', 430.00, 1.25, 4, '2023-11-17 13:33:16', '2023-11-18 12:51:34'),
(66, 'KINWELL 40inch. W x 28inches H frameless rectangular LED mirror with Anti-Fog Function', 'uploads/product/KINWELL 40inch. W x 28inches H frameless rectangular LED mirror with Anti-Fog Function.jpeg', 749.00, 1.50, 5, '2023-11-17 13:33:36', '2023-11-18 12:47:35'),
(67, 'Pendant lights, modern art decor tassel  lamps', 'uploads/product/Pendant lights, modern art decor tassel  lamps.jpeg', 39.00, 0.50, 1, '2023-11-17 13:33:59', '2023-11-18 12:04:40'),
(70, 'Biege and brown damask wallpaper design', 'uploads/product/Biege and brown damask wallpaper design.jpg', 40.00, 0.50, 1, '2023-11-17 13:34:49', '2023-11-18 12:05:14'),
(71, 'Black base aluminum kitchen cabinet', 'uploads/product/Black base aluminum kitchen cabinet.jpg', 44.00, 0.50, 1, '2023-11-17 13:35:19', '2023-11-18 12:05:52'),
(72, 'Blue tree patterned wallpaper', 'uploads/product/Blue tree patterned wallpaper.jpg', 47.00, 0.50, 1, '2023-11-17 13:36:04', '2023-11-18 12:06:32'),
(73, 'DC ceiling fan lights with bulbs', 'uploads/product/DC ceiling fan lights with bulbs.jpg', 330.00, 1.25, 4, '2023-11-17 13:36:28', '2023-11-18 12:07:19'),
(74, 'Fan lights  Adjustable three colors of light', 'uploads/product/Fan lights  Adjustable three colors of light.jpg', 41.00, 0.50, 1, '2023-11-17 13:37:57', '2023-11-18 12:07:47'),
(75, 'Flower design PVC living room wallpaper', 'uploads/product/Flower design PVC living room wallpaper.jpg', 40.00, 0.50, 1, '2023-11-17 13:38:37', '2023-11-18 12:08:23'),
(76, 'Koket lightning', 'uploads/product/Koket lightning.jpeg', 46.00, 0.50, 1, '2023-11-17 13:39:19', '2023-11-18 12:08:53'),
(77, 'Koket lightning', 'uploads/product/Koket lightning.jpg', 71.00, 0.75, 2, '2023-11-17 13:41:00', '2023-11-18 12:09:37'),
(78, 'La Bianca Wardrobe', 'uploads/product/La Bianca Wardrobe.jpg', 49.00, 0.50, 1, '2023-11-17 13:41:53', '2023-11-18 12:10:18'),
(79, 'LA Bianca side table', 'uploads/product/LA Bianca side table.jpeg', 64.00, 0.75, 2, '2023-11-17 13:44:26', '2023-11-18 12:11:12'),
(80, 'LA Bianca side table', 'uploads/product/LA ianca side table.jpg', 47.00, 0.50, 1, '2023-11-17 13:44:57', '2023-11-18 12:11:54'),
(81, 'LAIYA full length mirror with LED lighted vanity', 'uploads/product/LAIYA full length mirror with LED lighted vanity.jpg', 39.00, 0.50, 1, '2023-11-17 13:45:30', '2023-11-18 12:12:34'),
(82, 'LED flower pattern ceiling light stepless dimming lights', 'uploads/product/LED flower pattern ceiling light stepless dimming lights.jpg', 45.00, 0.50, 1, '2023-11-17 13:45:55', '2023-11-18 12:13:01'),
(83, 'LA Bianca side table', 'uploads/product/LA Bianca side table.jpeg', 163.00, 1.00, 3, '2023-11-17 13:47:18', '2023-11-18 12:14:39'),
(84, 'LA Bianca side table', 'uploads/product/LA Bianca side table.jpeg', 343.00, 1.25, 4, '2023-11-17 13:47:38', '2023-11-18 12:15:18'),
(85, 'LA Bianca side table', 'uploads/product/LA Bianca side table.jpeg', 758.00, 1.50, 5, '2023-11-17 13:48:08', '2023-11-18 12:16:26'),
(86, 'Living room lamb velvet sofa combinations with flexible fabric modules vintage', 'uploads/product/Living room lamb velvet sofa combinations with flexible fabric modules vintage.jpg', 49.00, 0.50, 1, '2023-11-17 13:48:39', '2023-11-18 12:17:00'),
(87, 'Low maintenance modern styled compact sized wardrobe', 'uploads/product/Low maintenance modern styled compact sized wardrobe.jpg', 42.00, 0.50, 1, '2023-11-17 13:49:05', '2023-11-18 12:17:33'),
(88, 'Luxury European Home decoration wallpaper', 'uploads/product/Luxury European Home decoration wallpaper.jpg', 46.00, 0.50, 1, '2023-11-17 13:49:29', '2023-11-18 12:18:09'),
(89, 'Modern LED chandelier for living room Nordic', 'uploads/product/Modern LED chandelier for living room Nordic.jpeg', 79.00, 0.75, 2, '2023-11-17 13:49:59', '2023-11-18 12:19:00'),
(90, 'Modern LED chandelier for living room Nordic', 'uploads/product/Modern LED chandelier for living room Nordic.jpg', 165.00, 1.00, 3, '2023-11-17 13:50:25', '2023-11-18 12:19:56'),
(91, 'Modern LED chandelier for living room Nordic', 'uploads/product/Modern LED chandelier for living room Nordic.jpg', 445.00, 1.25, 4, '2023-11-17 13:51:01', '2023-11-18 12:22:42'),
(92, 'Pride of Istanbul wine cabinet', 'uploads/product/Pride of Istanbul wine cabinet.jpeg', 48.00, 0.50, 1, '2023-11-17 13:51:09', '2023-11-18 12:23:25'),
(93, 'Pride of Istanbul wine cabinet', 'uploads/product/Pride of Istanbul wine cabinet.jpeg', 94.00, 0.75, 2, '2023-11-17 13:51:40', '2023-11-18 12:24:18'),
(95, 'Pride of Istanbul wine cabinet', 'uploads/product/Pride of Istanbul wine cabinet.jpeg', 167.00, 1.00, 3, '2023-11-17 13:52:16', '2023-11-18 12:25:08'),
(96, 'Oval LED illuminated bathroom mirror', 'uploads/product/Oval LED illuminated bathroom mirror.jpg', 39.00, 0.50, 1, '2023-11-17 13:52:32', '2023-11-18 12:26:06'),
(97, 'Pendant lights, modern art decor tassel  lamps', 'uploads/product/Pendant lights, modern art decor tassel  lamps.jpg', 43.00, 0.50, 1, '2023-11-17 13:53:00', '2023-11-18 12:26:36'),
(98, 'Pride of Istanbul center table', 'uploads/product/Pride of Istanbul center table.jpg', 40.00, 0.50, 1, '2023-11-17 13:53:41', '2023-11-18 12:27:14'),
(99, 'Pride of Istanbul center table', 'uploads/product/Pride of Istanbul center table.jpg', 68.00, 0.75, 2, '2023-11-17 13:53:44', '2023-11-18 12:28:12'),
(100, 'Pride of Istanbul wine cabinet', 'uploads/product/Pride of Istanbul wine cabinet.jpg', 349.00, 1.25, 4, '2023-11-17 13:55:44', '2023-11-18 12:29:09'),
(101, 'Siege and brown damask wallpaper design', 'uploads/product/Siege and brown damask wallpaper design.jpeg', 48.00, 0.50, 1, '2023-11-17 13:56:51', '2023-11-18 12:30:08'),
(102, 'TV background wallpaper 10D... Three-Dimensional wallpaper', 'uploads/product/TV background wallpaper 10D... Three-Dimensional wallpaper.jpg', 40.00, 0.50, 1, '2023-11-17 13:57:17', '2023-11-18 12:31:08'),
(103, 'UNICASA oval LED mirror', 'uploads/product/UNICASA oval LED mirror.jpg', 39.00, 0.50, 1, '2023-11-17 13:57:46', '2023-11-18 12:31:57'),
(104, 'Wall mount smart mirror', 'uploads/product/Wall mount smart mirror.jpg', 48.00, 0.50, 1, '2023-11-17 13:58:10', '2023-11-18 12:33:07'),
(105, 'Luxury multifunctional corner sofa for living room.. Minimalist sofa L shape 3 seat', 'uploads/product/Luxury multifunctional corner sofa for living room.. Minimalist sofa L shape 3 seat.jpeg', 39.00, 0.50, 1, '2023-11-17 14:37:57', '2023-11-18 12:34:22'),
(106, 'Luxury multifunctional corner sofa for living room.. Minimalist sofa L shape 3 seat', 'uploads/product/Luxury multifunctional corner sofa for living room.. Minimalist sofa L shape 3 seat.jpeg', 94.00, 0.75, 2, '2023-11-17 14:38:18', '2023-11-18 12:35:27'),
(107, 'Luxury multifunctional corner sofa for living room.. Minimalist sofa L shape 3 seat', 'uploads/product/Luxury multifunctional corner sofa for living room.. Minimalist sofa L shape 3 seat.jpeg', 168.00, 1.00, 3, '2023-11-17 14:38:40', '2023-11-18 12:36:39'),
(108, 'Luxury multifunctional corner sofa for living room.. Minimalist sofa L shape 3 seat', 'uploads/product/Luxury multifunctional corner sofa for living room.. Minimalist sofa L shape 3 seat.jpeg', 314.00, 1.25, 4, '2023-11-17 14:38:58', '2023-11-18 12:38:30'),
(109, 'Luxury multifunctional corner sofa for living room.. Minimalist sofa L shape 3 seat', 'uploads/product/Luxury multifunctional corner sofa for living room.. Minimalist sofa L shape 3 seat.jpeg', 779.00, 1.50, 5, '2023-11-17 14:39:18', '2023-11-18 12:39:45'),
(110, 'Armchair modern luxury sofa. Living room lazy sectional sofa set', 'uploads/product/Armchair modern luxury sofa. Living room lazy sectional sofa set.jpeg', 39.00, 0.50, 1, '2023-11-17 14:40:28', '2023-11-18 12:40:45'),
(111, 'Armchair modern luxury sofa. Living room lazy sectional sofa set', 'uploads/product/Armchair modern luxury sofa. Living room lazy sectional sofa set.jpeg', 83.00, 0.75, 2, '2023-11-17 14:40:45', '2023-11-18 12:42:06'),
(112, 'Armchair modern luxury sofa. Living room lazy sectional sofa set', 'uploads/product/Armchair modern luxury sofa. Living room lazy sectional sofa set.jpeg', 173.00, 1.00, 3, '2023-11-17 14:41:01', '2023-11-18 12:43:24'),
(113, 'Armchair modern luxury sofa. Living room lazy sectional sofa set', 'uploads/product/Armchair modern luxury sofa. Living room lazy sectional sofa set.jpeg', 415.00, 1.25, 4, '2023-11-17 14:41:20', '2023-11-18 12:45:07'),
(114, 'Armchair modern luxury sofa. Living room lazy sectional sofa set', 'uploads/product/Armchair modern luxury sofa. Living room lazy sectional sofa set.jpeg', 800.00, 1.50, 5, '2023-11-17 14:41:38', '2023-11-18 12:46:33'),
(115, 'LA Bianca sofa', 'uploads/product/LA Bianca sofa.jpeg', 40.00, 0.50, 1, '2023-11-17 14:43:40', '2023-11-18 12:47:07'),
(116, 'LA Bianca sofa', 'uploads/product/LA Bianca sofa.jpeg', 76.00, 0.75, 2, '2023-11-17 14:44:16', '2023-11-18 12:47:51'),
(117, 'LA Bianca sofa', 'uploads/product/LA Bianca sofa.jpeg', 163.00, 1.00, 3, '2023-11-17 14:44:33', '2023-11-18 12:48:36'),
(118, 'LA Bianca sofa', 'uploads/product/LA Bianca sofa.jpeg', 336.00, 1.25, 4, '2023-11-17 14:44:49', '2023-11-18 12:49:22'),
(119, 'LA Bianca sofa', 'uploads/product/LA Bianca sofa.jpeg', 690.00, 1.50, 5, '2023-11-17 14:45:06', '2023-11-18 12:50:06'),
(120, 'LA Paris Sofa', 'uploads/product/LA Paris Sofa.jpeg', 64.00, 0.75, 2, '2023-11-17 14:45:57', '2023-11-18 08:59:23'),
(121, 'LA Paris Sofa', 'uploads/product/LA Paris Sofa.jpeg', 144.00, 1.00, 3, '2023-11-17 14:46:14', '2023-11-18 09:00:19'),
(122, 'LA Paris Sofa', 'uploads/product/LA Paris Sofa.jpeg', 300.00, 1.25, 4, '2023-11-17 14:46:31', '2023-11-18 09:01:36'),
(124, 'LA Paris Sofa', 'uploads/product/LA Paris Sofa.jpeg', 42.00, 0.50, 1, '2023-11-17 14:47:04', '2023-11-18 09:02:36'),
(125, 'White PUTIH Nordic dressing make up table with mirror', 'uploads/product/White PUTIH Nordic dressing make up table with mirror.jpeg', 77.00, 0.75, 2, '2023-11-17 14:47:36', '2023-11-18 09:04:10'),
(126, 'White PUTIH Nordic dressing make up table with mirror', 'uploads/product/White PUTIH Nordic dressing make up table with mirror.jpeg', 149.00, 1.00, 3, '2023-11-17 14:47:50', '2023-11-18 09:04:59'),
(127, 'White PUTIH Nordic dressing make up table with mirror', 'uploads/product/White PUTIH Nordic dressing make up table with mirror.jpeg', 450.00, 1.25, 4, '2023-11-17 14:48:05', '2023-11-18 09:05:43'),
(128, 'White PUTIH Nordic dressing make up table with mirror', 'uploads/product/White PUTIH Nordic dressing make up table with mirror.jpeg', 506.00, 1.50, 5, '2023-11-17 14:48:20', '2023-11-18 09:06:36'),
(130, 'Smart touch LED mirror', 'uploads/product/Smart touch LED mirror.jpeg', 98.00, 0.75, 2, '2023-11-17 14:49:11', '2023-11-18 09:07:55'),
(131, 'Smart touch LED mirror', 'uploads/product/Smart touch LED mirror.jpeg', 150.00, 1.00, 3, '2023-11-17 14:49:32', '2023-11-18 09:08:41'),
(132, 'Smart touch LED mirror', 'uploads/product/Smart touch LED mirror.jpeg', 320.00, 1.25, 4, '2023-11-17 14:49:50', '2023-11-18 09:09:31'),
(133, 'Smart touch LED mirror', 'uploads/product/Smart touch LED mirror.jpeg', 751.00, 1.50, 5, '2023-11-17 14:50:07', '2023-11-18 09:10:34'),
(135, 'Autumn Belgian mirror', 'uploads/product/Autumn Belgian mirror.jpeg', 60.00, 0.75, 2, '2023-11-17 14:51:02', '2023-11-18 09:11:45'),
(136, 'Autumn Belgian mirror', 'uploads/product/Autumn Belgian mirror.jpeg', 161.00, 1.00, 3, '2023-11-17 14:51:17', '2023-11-18 09:16:06'),
(137, 'Autumn Belgian mirror', 'uploads/product/Autumn Belgian mirror.jpeg', 410.00, 1.25, 4, '2023-11-17 14:51:38', '2023-11-18 09:15:06'),
(138, 'Autumn Belgian mirror', 'uploads/product/Autumn Belgian mirror.jpeg', 509.00, 1.50, 5, '2023-11-17 14:51:54', '2023-11-18 09:16:58'),
(141, 'Aquabath touch sensor LED light round glass wall mirror', 'uploads/product/Aquabath touch sensor LED light round glass wall mirror.jpeg', 180.00, 1.00, 3, '2023-11-17 14:53:02', '2023-11-18 09:18:19'),
(142, 'Aquabath touch sensor LED light round glass wall mirror', 'uploads/product/Aquabath touch sensor LED light round glass wall mirror.jpeg', 431.00, 1.25, 4, '2023-11-17 14:53:21', '2023-11-18 09:19:49'),
(143, 'Aquabath touch sensor LED light round glass wall mirror', 'uploads/product/Aquabath touch sensor LED light round glass wall mirror.jpeg', 744.00, 1.50, 5, '2023-11-17 14:53:36', '2023-11-18 09:21:00'),
(145, 'Dressing table with mirror and stool', 'uploads/product/Dressing table with mirror and stool.jpeg', 85.00, 0.75, 2, '2023-11-17 14:54:38', '2023-11-18 09:22:26'),
(146, 'Dressing table with mirror and stool', 'uploads/product/*Dressing table with mirror and stool*.jpeg', 176.00, 1.00, 3, '2023-11-17 14:54:55', '2023-11-18 09:23:38'),
(147, 'Dressing table with mirror and stool', 'uploads/product/*Dressing table with mirror and stool*.jpeg', 415.00, 1.25, 4, '2023-11-17 14:55:11', '2023-11-18 09:24:43'),
(148, 'Dressing table with mirror and stool', 'uploads/product/Dressing table with mirror and stool.jpeg', 696.00, 1.50, 5, '2023-11-17 14:55:52', '2023-11-18 09:25:38'),
(150, 'Dressing table with LED mirror', 'uploads/product/Dressing table with LED mirror.jpeg', 95.00, 0.75, 2, '2023-11-17 14:56:57', '2023-11-18 09:31:34'),
(151, 'Dressing table with LED mirror', 'uploads/product/Dressing table with LED mirror.jpeg', 140.00, 1.00, 3, '2023-11-17 14:57:16', '2023-11-18 09:32:36'),
(152, 'Dressing table with LED mirror', 'uploads/product/Dressing table with LED mirror.jpeg', 391.00, 1.25, 4, '2023-11-17 14:57:35', '2023-11-18 09:34:10'),
(153, 'Dressing table with LED mirror', 'uploads/product/Dressing table with LED mirror.jpeg', 800.00, 1.50, 5, '2023-11-17 14:57:56', '2023-11-18 09:34:57'),
(156, 'spacious wardrobe design with glossy finish', 'uploads/product/spacious wardrobe design with glossy finish.jpeg', 100.00, 0.75, 2, '2023-11-17 14:59:04', '2023-11-18 09:36:10'),
(157, 'spacious wardrobe design with glossy finish', 'uploads/product/spacious wardrobe design with glossy finish.jpeg', 146.00, 1.00, 3, '2023-11-17 14:59:23', '2023-11-18 09:37:07'),
(158, 'spacious wardrobe design with glossy finish', 'uploads/product/spacious wardrobe design with glossy finish.jpeg', 360.00, 1.25, 4, '2023-11-17 14:59:41', '2023-11-18 09:38:00'),
(159, 'spacious wardrobe design with glossy finish', 'uploads/product/spacious wardrobe design with glossy finish.jpeg', 599.00, 1.50, 5, '2023-11-17 14:59:58', '2023-11-18 09:38:52'),
(161, 'PVC modern wardrobe design', 'uploads/product/PVC modern wardrobe design.jpeg', 89.00, 0.75, 2, '2023-11-17 15:01:47', '2023-11-18 10:05:34'),
(162, 'PVC modern wardrobe design', 'uploads/product/PVC modern wardrobe design.jpeg', 173.00, 1.00, 3, '2023-11-17 15:02:36', '2023-11-18 10:07:19'),
(163, 'PVC modern wardrobe design', 'uploads/product/PVC modern wardrobe design.jpeg', 389.00, 1.25, 4, '2023-11-17 15:02:59', '2023-11-18 10:08:18'),
(164, 'PVC modern wardrobe design', 'uploads/product/PVC modern wardrobe design.jpeg', 791.00, 1.50, 5, '2023-11-17 15:03:21', '2023-11-18 10:09:51'),
(166, 'Stylish bedroom wardrobe', 'uploads/product/Stylish bedroom wardrobe.jpeg', 70.00, 0.75, 2, '2023-11-17 15:04:41', '2023-11-18 10:10:47'),
(167, 'Stylish bedroom wardrobe', 'uploads/product/Stylish bedroom wardrobe.jpeg', 157.00, 1.00, 3, '2023-11-17 15:04:57', '2023-11-18 10:11:30'),
(168, 'Stylish bedroom wardrobe', 'uploads/product/Stylish bedroom wardrobe.jpeg', 339.00, 1.25, 4, '2023-11-17 15:05:17', '2023-11-18 10:12:17'),
(169, 'Stylish bedroom wardrobe', 'uploads/product/Stylish bedroom wardrobe.jpeg', 630.00, 1.50, 5, '2023-11-17 15:05:34', '2023-11-18 10:13:40'),
(171, '8ft * 6ft Brown white bedroom Wardrobe', 'uploads/product/8ft * 6ft Brown white bedroom Wardrobe.jpeg', 67.00, 0.75, 2, '2023-11-17 15:06:56', '2023-11-18 10:14:57'),
(172, '8ft * 6ft Brown white bedroom Wardrobe', 'uploads/product/8ft * 6ft Brown white bedroom Wardrobe.jpeg', 165.00, 1.00, 3, '2023-11-17 15:07:23', '2023-11-18 10:15:58'),
(173, '8ft * 6ft Brown white bedroom Wardrobe', 'uploads/product/8ft * 6ft Brown white bedroom Wardrobe.jpeg', 448.00, 1.25, 4, '2023-11-17 15:08:01', '2023-11-18 10:16:53'),
(174, '8ft * 6ft Brown white bedroom Wardrobe', 'uploads/product/8ft * 6ft Brown white bedroom Wardrobe.jpeg', 648.00, 1.50, 5, '2023-11-17 15:08:26', '2023-11-18 10:18:15'),
(176, 'Vanity set makeup desk with charging space', 'uploads/product/Vanity set makeup desk with charging space.jpeg', 90.00, 0.75, 2, '2023-11-17 15:09:44', '2023-11-18 10:22:14'),
(177, 'Vanity set makeup desk with charging space', 'uploads/product/*Vanity set makeup desk with charging space*.jpeg', 159.00, 1.00, 3, '2023-11-17 15:10:07', '2023-11-18 10:22:58'),
(178, 'Vanity set makeup desk with charging space', 'uploads/product/Vanity set makeup desk with charging space.jpeg', 411.00, 1.25, 4, '2023-11-17 15:11:17', '2023-11-18 10:24:55'),
(179, 'Vanity set makeup desk with charging space', 'uploads/product/Vanity set makeup desk with charging space.jpeg', 515.00, 1.50, 5, '2023-11-17 15:11:41', '2023-11-18 10:31:22'),
(181, 'Outstanding bedroom cupboard', 'uploads/product/Outstanding bedroom cupboard.jpeg', 74.00, 0.75, 2, '2023-11-17 15:14:02', '2023-11-18 10:33:56'),
(182, 'Outstanding bedroom cupboard', 'uploads/product/Outstanding bedroom cupboard.jpeg', 171.00, 1.00, 3, '2023-11-17 15:15:16', '2023-11-18 10:39:21'),
(183, 'Outstanding bedroom cupboard', 'uploads/product/Outstanding bedroom cupboard.jpeg', 389.00, 1.25, 4, '2023-11-17 15:15:42', '2023-11-18 10:40:48'),
(184, 'Outstanding bedroom cupboard', 'uploads/product/Outstanding bedroom cupboard.jpeg', 566.00, 1.50, 5, '2023-11-17 15:16:14', '2023-11-18 10:46:25'),
(186, 'Blue tree patterned wallpaper', 'uploads/product/Blue tree patterned wallpaper.jpeg', 96.00, 0.75, 2, '2023-11-17 15:16:54', '2023-11-18 11:03:32'),
(187, 'Blue tree patterned wallpaper', 'uploads/product/Blue tree patterned wallpaper.jpeg', 157.00, 1.00, 3, '2023-11-17 15:20:16', '2023-11-18 11:05:41'),
(188, 'Blue tree patterned wallpaper', 'uploads/product/Blue tree patterned wallpaper.jpeg', 338.00, 1.25, 4, '2023-11-17 15:20:48', '2023-11-18 11:06:35'),
(189, 'Blue tree patterned wallpaper', 'uploads/product/Blue tree patterned wallpaper.jpeg', 740.00, 1.50, 5, '2023-11-17 15:21:13', '2023-11-18 11:07:29'),
(191, 'Biege and brown damask wallpaper design', 'uploads/product/Biege and brown damask wallpaper design.jpeg', 100.00, 0.75, 2, '2023-11-17 15:22:27', '2023-11-18 11:08:39'),
(192, 'Biege and brown damask wallpaper design', 'uploads/product/Biege and brown damask wallpaper design.jpeg', 151.00, 1.00, 3, '2023-11-17 15:24:24', '2023-11-18 11:10:33'),
(193, 'Biege and brown damask wallpaper design', 'uploads/product/Biege and brown damask wallpaper design.jpeg', 321.00, 1.25, 4, '2023-11-17 15:24:45', '2023-11-18 11:11:54'),
(194, 'Biege and brown damask wallpaper design', 'uploads/product/Biege and brown damask wallpaper design.jpeg', 729.00, 1.50, 5, '2023-11-17 15:25:07', '2023-11-18 11:13:21'),
(196, 'Luxury European Home decoration wallpaper... Size: 150cm X 105cm (59.1 x 41.3inch', 'uploads/product/Luxury European Home decoration wallpaper... Size: 150cm X 105cm (59.1 x 41.3inch.jpeg', 69.00, 0.75, 2, '2023-11-17 15:26:36', '2023-11-18 11:14:37'),
(197, 'Luxury European Home decoration wallpaper... Size: 150cm X 105cm (59.1 x 41.3inch', 'uploads/product/Luxury European Home decoration wallpaper... Size: 150cm X 105cm (59.1 x 41.3inch.jpeg', 169.00, 1.00, 3, '2023-11-17 15:27:03', '2023-11-18 11:15:20'),
(198, 'Luxury European Home decoration wallpaper... Size: 150cm X 105cm (59.1 x 41.3inch', 'uploads/product/Luxury European Home decoration wallpaper... Size: 150cm X 105cm (59.1 x 41.3inch.jpeg', 410.00, 1.25, 4, '2023-11-17 15:27:23', '2023-11-18 11:16:07'),
(199, 'Luxury European Home decoration wallpaper... Size: 150cm X 105cm (59.1 x 41.3inch', 'uploads/product/Luxury European Home decoration wallpaper... Size: 150cm X 105cm (59.1 x 41.3inch.jpeg', 793.00, 1.50, 5, '2023-11-17 15:27:44', '2023-11-18 11:16:59'),
(201, 'TV background wallpaper 10D... Three-Dimensional wallpaper', 'uploads/product/TV background wallpaper 10D... Three-Dimensional wallpaper.jpeg', 88.00, 0.75, 2, '2023-11-17 15:29:07', '2023-11-18 11:18:28'),
(202, 'TV background wallpaper 10D... Three-Dimensional wallpaper', 'uploads/product/TV background wallpaper 10D... Three-Dimensional wallpaper.jpeg', 162.00, 1.00, 3, '2023-11-17 15:30:09', '2023-11-18 11:19:25'),
(203, 'TV background wallpaper 10D... Three-Dimensional wallpaper', 'uploads/product/TV background wallpaper 10D... Three-Dimensional wallpaper.jpeg', 332.00, 1.25, 4, '2023-11-17 15:30:46', '2023-11-18 11:20:25'),
(204, 'TV background wallpaper 10D... Three-Dimensional wallpaper', 'uploads/product/TV background wallpaper 10D... Three-Dimensional wallpaper.jpeg', 727.00, 1.50, 5, '2023-11-17 15:32:10', '2023-11-18 11:21:45'),
(206, 'Flower design PVC living room wallpaper', 'uploads/product/Flower design PVC living room wallpaper.jpeg', 81.00, 0.75, 2, '2023-11-17 15:34:17', '2023-11-18 11:22:28'),
(207, 'Flower design PVC living room wallpaper', 'uploads/product/Flower design PVC living room wallpaper.jpeg', 153.00, 1.00, 3, '2023-11-17 15:34:51', '2023-11-18 11:23:41'),
(208, 'Flower design PVC living room wallpaper', 'uploads/product/Flower design PVC living room wallpaper.jpeg', 341.00, 1.25, 4, '2023-11-17 15:35:24', '2023-11-18 11:24:27'),
(209, 'Flower design PVC living room wallpaper', 'uploads/product/Flower design PVC living room wallpaper.jpeg', 509.00, 1.50, 5, '2023-11-17 15:36:12', '2023-11-18 11:25:27'),
(211, 'UNICASA oval LED mirror', 'uploads/product/UNICASA oval LED mirror.jpeg', 92.00, 0.75, 2, '2023-11-17 15:40:19', '2023-11-18 11:26:14'),
(212, 'UNICASA oval LED mirror', 'uploads/product/UNICASA oval LED mirror.jpeg', 174.00, 1.00, 3, '2023-11-17 15:41:43', '2023-11-18 11:27:34'),
(213, 'UNICASA oval LED mirror', 'uploads/product/UNICASA oval LED mirror.jpeg', 418.00, 1.25, 4, '2023-11-17 15:42:02', '2023-11-18 11:28:29'),
(214, 'UNICASA oval LED mirror', 'uploads/product/UNICASA oval LED mirror.jpeg', 555.00, 1.50, 5, '2023-11-17 15:42:22', '2023-11-18 11:29:04'),
(215, 'Absolute - The perfect LED rounded mirror', 'uploads/product/Absolute - The perfect LED rounded mirror.jpeg', 99.00, 0.75, 2, '2023-11-17 15:43:27', '2023-11-18 11:30:05'),
(216, 'Absolute - The perfect LED rounded mirror', 'uploads/product/*Absolute - The perfect LED rounded mirror*.jpeg', 166.00, 1.00, 3, '2023-11-17 15:43:47', '2023-11-18 11:30:55'),
(217, 'Absolute - The perfect LED rounded mirror', 'uploads/product/Absolute - The perfect LED rounded mirror.jpeg', 358.00, 1.25, 4, '2023-11-17 15:44:21', '2023-11-18 11:32:17'),
(218, 'Absolute - The perfect LED rounded mirror', 'uploads/product/Absolute - The perfect LED rounded mirror.jpeg', 606.00, 1.50, 5, '2023-11-17 15:44:45', '2023-11-18 11:33:19'),
(219, 'LAIYA full length mirror with LED lighted vanity', 'uploads/product/LAIYA full length mirror with LED lighted vanity.jpeg', 80.00, 0.75, 2, '2023-11-17 15:46:49', '2023-11-18 11:34:06'),
(220, 'LAIYA full length mirror with LED lighted vanity', 'uploads/product/LAIYA full length mirror with LED lighted vanity.jpeg', 181.00, 1.00, 3, '2023-11-17 15:47:18', '2023-11-18 11:35:00'),
(221, 'LAIYA full length mirror with LED lighted vanity', 'uploads/product/LAIYA full length mirror with LED lighted vanity.jpeg', 436.00, 1.25, 4, '2023-11-17 15:47:36', '2023-11-18 11:36:05'),
(222, 'LAIYA full length mirror with LED lighted vanity', 'uploads/product/LAIYA full length mirror with LED lighted vanity.jpeg', 771.00, 1.50, 5, '2023-11-17 15:47:54', '2023-11-18 11:37:05'),
(224, 'Modern creative crystal chandeliers', 'uploads/product/Modern creative crystal chandeliers.jpeg', 84.00, 0.75, 2, '2023-11-17 15:53:08', '2023-11-18 11:37:58'),
(225, 'Modern creative crystal chandeliers', 'uploads/product/Modern creative crystal chandeliers.jpeg', 185.00, 1.00, 3, '2023-11-17 15:53:29', '2023-11-18 11:38:47'),
(226, 'Modern creative crystal chandeliers', 'uploads/product/Modern creative crystal chandeliers.jpeg', 372.00, 1.25, 4, '2023-11-17 15:54:01', '2023-11-18 11:39:53'),
(227, 'Modern creative crystal chandeliers', 'uploads/product/Modern creative crystal chandeliers.jpeg', 677.00, 1.50, 5, '2023-11-17 15:55:38', '2023-11-18 11:40:45'),
(229, 'Pendant lights, modern art decor tassel  lamps', 'uploads/product/Pendant lights, modern art decor tassel  lamps.jpeg', 142.00, 1.00, 3, '2023-11-17 16:02:01', '2023-11-18 11:42:55'),
(230, 'Pendant lights, modern art decor tassel  lamps', 'uploads/product/Pendant lights, modern art decor tassel  lamps.jpeg', 711.00, 1.50, 5, '2023-11-17 16:02:45', '2023-11-18 11:43:36'),
(231, 'Koket lightning', 'uploads/product/Koket lightning.jpeg', 683.00, 1.50, 5, '2023-11-17 16:07:15', '2023-11-18 11:44:53'),
(232, 'Living room lamb velvet sofa combinations with flexible fabric modules vintage', 'uploads/product/Living room lamb velvet sofa combinations with flexible fabric modules vintage.jpeg', 84.00, 0.75, 2, '2023-11-17 16:11:06', '2023-11-18 11:46:36'),
(233, 'Living room lamb velvet sofa combinations with flexible fabric modules vintage', 'uploads/product/Living room lamb velvet sofa combinations with flexible fabric modules vintage.jpeg', 154.00, 1.00, 3, '2023-11-17 16:12:21', '2023-11-18 11:48:57'),
(234, 'Living room lamb velvet sofa combinations with flexible fabric modules vintage', 'uploads/product/Living room lamb velvet sofa combinations with flexible fabric modules vintage.jpeg', 348.00, 1.25, 4, '2023-11-17 16:12:43', '2023-11-18 11:53:31'),
(235, 'Living room lamb velvet sofa combinations with flexible fabric modules vintage', 'uploads/product/Living room lamb velvet sofa combinations with flexible fabric modules vintage.jpeg', 617.00, 1.50, 5, '2023-11-17 16:13:20', '2023-11-18 11:56:44'),
(236, 'Fan lights.. Adjustable: three colors of light can be selected warm light, neutral light, cool white light', 'uploads/product/Fan lights.. Adjustable: three colors of light can be selected warm light, neutral light, cool white light.jpeg', 170.00, 1.00, 3, '2023-11-17 16:15:13', '2023-11-18 11:58:30'),
(237, 'Fan lights.. Adjustable: three colors of light can be selected warm light, neutral light, cool white light', 'uploads/product/Fan lights.. Adjustable: three colors of light can be selected warm light, neutral light, cool white light.jpeg', 433.00, 1.25, 4, '2023-11-17 16:16:01', '2023-11-18 11:59:33'),
(238, 'Fan lights.. Adjustable: three colors of light can be selected warm light, neutral light, cool white light', 'uploads/product/Fan lights.. Adjustable: three colors of light can be selected warm light, neutral light, cool white light.jpeg', 783.00, 1.50, 5, '2023-11-17 16:16:25', '2023-11-18 12:00:16'),
(239, 'LED flower pattern ceiling light stepless dimming lights', 'uploads/product/LED flower pattern ceiling light stepless dimming lights.jpeg', 100.00, 0.75, 2, '2023-11-17 16:27:56', '2023-11-18 12:01:28'),
(240, 'LED flower pattern ceiling light stepless dimming lights', 'uploads/product/LED flower pattern ceiling light stepless dimming lights.jpeg', 158.00, 1.00, 3, '2023-11-17 16:30:02', '2023-11-18 12:02:17'),
(241, 'LED flower pattern ceiling light stepless dimming lights', 'uploads/product/LED flower pattern ceiling light stepless dimming lights.jpeg', 319.00, 1.25, 4, '2023-11-17 16:30:59', '2023-11-18 12:03:11'),
(242, 'LED flower pattern ceiling light stepless dimming lights', 'uploads/product/LED flower pattern ceiling light stepless dimming lights.jpeg', 45.00, 0.50, 1, '2023-11-17 16:31:44', '2023-11-18 10:52:28'),
(243, 'DC ceiling fan lights with bulbs', 'uploads/product/DC ceiling fan lights with bulbs.jpeg', 70.00, 0.75, 2, '2023-11-17 16:35:23', '2023-11-18 11:12:24'),
(244, 'DC ceiling fan lights with bulbs', 'uploads/product/DC ceiling fan lights with bulbs.jpeg', 150.00, 1.00, 3, '2023-11-17 16:35:47', '2023-11-18 11:14:31'),
(245, 'Smart touch LED mirror', 'uploads/product/Smart touch LED mirror.jpeg', 350.00, 1.25, 4, '2023-11-17 21:59:21', '2023-11-18 11:16:44'),
(246, 'Smart touch LED mirror', 'uploads/product/Smart touch LED mirror.jpeg', 600.00, 1.50, 5, '2023-11-17 22:00:08', '2023-11-18 11:18:12'),
(247, 'Black base aluminum kitchen cabinet', 'uploads/product/Black base aluminum kitchen cabinet.jpeg', 320.00, 1.25, 4, '2023-11-17 22:02:47', '2023-11-18 11:20:32'),
(248, 'Black base aluminum kitchen cabinet', 'uploads/product/Black base aluminum kitchen cabinet.jpeg', 650.00, 1.50, 5, '2023-11-17 22:03:43', '2023-11-18 11:21:59'),
(249, 'Wall mount smart mirror', 'uploads/product/Wall mount smart mirror.jpeg', 400.00, 1.25, 4, '2023-11-17 22:07:07', '2023-11-18 11:23:08'),
(250, 'Wall mount smart mirror', 'uploads/product/Wall mount smart mirror.jpeg', 700.00, 1.50, 5, '2023-11-17 22:07:45', '2023-11-18 11:24:56'),
(251, 'LA Bianca wardrobe', 'uploads/product/LA Bianca wardrobe.jpeg', 325.00, 1.25, 4, '2023-11-18 04:24:09', '2023-11-18 11:26:06'),
(252, 'LA Bianca wardrobe', 'uploads/product/LA Bianca wardrobe.jpeg', 625.00, 1.50, 5, '2023-11-18 04:24:38', '2023-11-18 11:27:22'),
(253, 'Pride of Istanbul center table', 'uploads/product/Pride of Istanbul center table.jpeg', 425.00, 1.25, 4, '2023-11-18 04:27:47', '2023-11-18 11:28:56'),
(254, 'Pride of Istanbul center table', 'uploads/product/Pride of Istanbul center table.jpeg', 750.00, 1.50, 5, '2023-11-18 04:28:28', '2023-11-18 11:30:29'),
(255, 'aluminum kitchen cabinet', 'uploads/product/aluminum kitchen cabinet.jpeg', 325.00, 1.25, 4, '2023-11-18 04:31:34', '2023-11-18 11:31:57'),
(256, 'aluminum kitchen cabinet', 'uploads/product/aluminum kitchen cabinet.jpeg', 640.00, 1.50, 5, '2023-11-18 04:32:11', '2023-11-18 11:34:21'),
(257, 'Pride of Istanbul dining table', 'uploads/product/Pride of Istanbul dining table.jpeg', 370.00, 1.25, 4, '2023-11-18 04:36:31', '2023-11-18 11:35:52'),
(258, 'Pride of Istanbul dining table', 'uploads/product/Pride of Istanbul dining table.jpeg', 675.00, 1.50, 5, '2023-11-18 04:37:11', '2023-11-18 11:37:18'),
(259, 'Pride of Istanbul dining table', 'uploads/product/Pride of Istanbul dining table.jpeg', 165.00, 1.00, 3, '2023-11-18 07:14:45', '2023-11-18 11:39:00'),
(260, 'spacious wardrobe design with glossy finish', 'uploads/product/spacious wardrobe design with glossy finish.jpeg', 550.00, 1.50, 5, '2023-11-18 07:17:38', '2023-11-18 11:40:47'),
(261, 'PVC modern wardrobe design', 'uploads/product/PVC modern wardrobe design.jpeg', 775.00, 1.50, 5, '2023-11-18 07:18:20', '2023-11-18 11:42:11'),
(262, 'TV background wallpaper 10D... Three-Dimensional wallpaper', 'uploads/product/TV background wallpaper 10D... Three-Dimensional wallpaper.jpeg', 620.00, 1.50, 5, '2023-11-18 07:20:58', '2023-11-18 11:43:48'),
(263, 'Aluminum modular kitchen cabinet', 'uploads/product/Aluminum modular kitchen cabinet.jpeg', 520.00, 1.50, 5, '2023-11-18 07:21:54', '2023-11-18 11:45:31'),
(264, 'Aquabath touch sensor LED light round glass wall mirror', 'uploads/product/Aquabath touch sensor LED light round glass wall mirror.jpeg', 725.00, 1.50, 5, '2023-11-18 07:23:49', '2023-11-18 11:46:55'),
(265, 'Armchair modern luxury sofa. Living room lazy sectional sofa set', 'uploads/product/Armchair modern luxury sofa. Living room lazy sectional sofa set.jpeg', 800.00, 1.50, 5, '2023-11-18 07:24:47', '2023-11-18 11:49:24'),
(266, 'Aquabath touch sensor LED light round glass wall mirror', 'uploads/product/Aquabath touch sensor LED light round glass wall mirror.jpeg', 82.00, 0.75, 2, '2023-11-19 14:29:29', '2023-11-19 14:29:29');

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `price` double(8,2) DEFAULT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `status` enum('approved','pending','frozen') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_reviews`
--

INSERT INTO `product_reviews` (`id`, `product_id`, `user_id`, `price`, `rating`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(91, 6, 3, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-09 12:02:06', '2023-11-09 12:02:23'),
(92, 6, 3, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-09 12:02:39', '2023-11-09 12:02:46'),
(104, 29, 3, NULL, NULL, NULL, 'approved', '2023-11-09 21:40:11', '2023-11-09 21:40:24'),
(105, 11, 3, NULL, NULL, NULL, 'approved', '2023-11-09 21:40:30', '2023-11-09 21:40:40'),
(106, 6, 3, NULL, NULL, NULL, 'approved', '2023-11-09 21:40:44', '2023-11-09 21:41:04'),
(108, 30, 3, NULL, NULL, NULL, 'approved', '2023-11-10 15:21:26', '2023-11-11 10:08:50'),
(109, 11, 3, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-11 10:08:56', '2023-11-11 10:09:14'),
(111, 6, 3, NULL, NULL, NULL, 'approved', '2023-11-11 10:10:09', '2023-11-11 11:09:52'),
(112, 28, 3, NULL, NULL, NULL, 'approved', '2023-11-11 11:09:57', '2023-11-11 11:28:46'),
(113, 8, 3, NULL, NULL, NULL, 'approved', '2023-11-11 11:29:02', '2023-11-11 11:36:42'),
(114, 14, 3, NULL, NULL, NULL, 'approved', '2023-11-11 11:36:47', '2023-11-11 11:39:13'),
(115, 8, 3, NULL, NULL, NULL, 'approved', '2023-11-11 11:39:20', '2023-11-11 11:40:53'),
(119, 6, 3, NULL, NULL, NULL, 'approved', '2023-11-11 21:02:04', '2023-11-11 21:02:13'),
(120, 6, 3, NULL, NULL, NULL, 'approved', '2023-11-11 21:02:18', '2023-11-11 21:02:26'),
(121, 6, 3, NULL, NULL, NULL, 'approved', '2023-11-11 21:02:32', '2023-11-11 21:10:27'),
(122, 6, 3, NULL, NULL, NULL, 'approved', '2023-11-11 21:10:34', '2023-11-11 21:10:39'),
(123, 7, 3, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-11 21:10:43', '2023-11-11 21:11:22'),
(124, 8, 3, NULL, NULL, NULL, 'approved', '2023-11-11 21:11:36', '2023-11-11 21:12:07'),
(125, 6, 3, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-12 19:35:48', '2023-11-12 19:36:39'),
(126, 7, 3, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-12 19:37:24', '2023-11-12 19:37:57'),
(179, 6, 3, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-16 16:25:32', '2023-11-16 16:25:39'),
(180, 6, 3, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-16 16:32:11', '2023-11-16 16:36:52'),
(181, 6, 3, NULL, 'Normal! Not used often but know the Product', NULL, 'approved', '2023-11-16 16:37:02', '2023-11-16 16:37:09'),
(182, 6, 3, 50.00, 'Normal! Not used often but know the Product', NULL, 'approved', '2023-11-16 17:17:55', '2023-11-16 17:18:06'),
(183, 6, 3, 50.00, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-16 17:31:38', '2023-11-16 17:31:49'),
(184, 6, 3, 50.00, NULL, NULL, 'approved', '2023-11-16 17:45:38', '2023-11-16 17:46:01'),
(185, 6, 3, 50.00, 'Normal! Not used often but know the Product', NULL, 'approved', '2023-11-16 17:47:06', '2023-11-16 17:53:17'),
(186, 6, 3, 50.00, NULL, NULL, 'approved', '2023-11-16 19:17:48', '2023-11-16 19:18:08'),
(187, 7, 3, NULL, NULL, NULL, 'approved', '2023-11-16 19:18:13', '2023-11-16 19:18:38'),
(188, 9, 3, NULL, NULL, NULL, 'approved', '2023-11-16 19:18:42', '2023-11-17 17:30:50'),
(195, 6, 3, 50.00, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-17 17:30:54', '2023-11-17 17:32:46'),
(196, 7, 3, NULL, NULL, NULL, 'approved', '2023-11-17 17:32:59', '2023-11-17 21:30:52'),
(197, 8, 3, NULL, NULL, NULL, 'approved', '2023-11-17 21:30:59', '2023-11-17 21:31:20'),
(198, 14, 3, NULL, NULL, NULL, 'approved', '2023-11-17 21:31:29', '2023-11-18 01:02:21'),
(199, 8, 3, NULL, NULL, NULL, 'approved', '2023-11-18 01:02:26', '2023-11-18 01:03:18'),
(200, 14, 3, NULL, NULL, NULL, 'approved', '2023-11-18 01:03:23', '2023-11-18 01:04:22'),
(201, 20, 3, NULL, NULL, NULL, 'approved', '2023-11-18 01:04:27', '2023-11-18 01:33:48'),
(203, 29, 3, NULL, NULL, NULL, 'approved', '2023-11-18 02:16:40', '2023-11-18 02:16:47'),
(204, 32, 3, NULL, NULL, NULL, 'approved', '2023-11-18 02:16:53', '2023-11-18 02:17:21'),
(210, 8, 3, NULL, NULL, NULL, 'approved', '2023-11-18 14:53:41', '2023-11-18 16:43:32'),
(249, 8, 3, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-18 16:45:30', '2023-11-18 16:45:41'),
(250, 8, 3, NULL, NULL, NULL, 'approved', '2023-11-18 20:05:34', '2023-11-18 21:57:11'),
(251, 8, 3, NULL, NULL, NULL, 'approved', '2023-11-19 02:25:37', '2023-11-19 02:26:01'),
(252, 8, 3, NULL, NULL, NULL, 'approved', '2023-11-19 04:07:09', '2023-11-19 04:11:25'),
(253, 8, 3, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-19 04:11:29', '2023-11-19 04:11:43'),
(254, 14, 3, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-19 04:11:47', '2023-11-19 04:12:12'),
(255, 20, 3, NULL, NULL, NULL, 'approved', '2023-11-19 04:12:24', '2023-11-19 04:12:37'),
(256, 8, 3, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-19 08:46:42', '2023-11-19 08:48:19'),
(257, 14, 3, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-19 08:51:13', '2023-11-19 08:51:27'),
(258, 20, 3, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-19 08:51:40', '2023-11-19 08:51:53'),
(259, 29, 3, NULL, NULL, NULL, 'approved', '2023-11-19 08:52:00', '2023-11-19 08:52:08'),
(270, 8, 3, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-19 10:14:58', '2023-11-19 10:18:57'),
(271, 14, 3, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-19 10:19:04', '2023-11-19 10:19:24'),
(280, 8, 3, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-19 10:55:09', '2023-11-19 10:55:16'),
(281, 14, 3, NULL, NULL, NULL, 'approved', '2023-11-19 10:55:19', '2023-11-19 10:55:28'),
(282, 20, 3, NULL, NULL, NULL, 'approved', '2023-11-19 10:55:34', '2023-11-19 10:55:40'),
(283, 29, 3, NULL, NULL, NULL, 'approved', '2023-11-19 10:55:45', '2023-11-19 10:55:50'),
(284, 32, 3, 15000.00, NULL, NULL, 'approved', '2023-11-19 10:55:57', '2023-11-22 21:05:01'),
(389, 8, 3, NULL, 'Normal! Not used often but know the Product', NULL, 'approved', '2023-11-22 21:05:12', '2023-11-22 21:05:28'),
(390, 14, 3, NULL, 'Normal! Not used often but know the Product', NULL, 'approved', '2023-11-22 21:09:34', '2023-11-22 21:09:47'),
(391, 20, 3, NULL, NULL, NULL, 'approved', '2023-11-22 21:14:36', '2023-11-22 21:14:40'),
(392, 29, 3, NULL, NULL, NULL, 'approved', '2023-11-22 21:16:15', '2023-11-22 21:16:19'),
(393, 32, 3, 15000.00, NULL, NULL, 'approved', '2023-11-22 21:16:48', '2023-11-22 21:16:54'),
(396, 8, 3, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-23 21:09:56', '2023-11-23 21:10:11'),
(403, 8, 3, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-24 08:30:17', '2023-11-24 08:30:25'),
(549, 8, 32, NULL, 'Normal! Not used often but know the Product', NULL, 'approved', '2023-11-27 14:48:41', '2023-11-27 14:49:27'),
(550, 14, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 14:50:40', '2023-11-27 14:59:14'),
(551, 20, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 14:59:22', '2023-11-27 14:59:32'),
(552, 29, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 14:59:37', '2023-11-27 14:59:44'),
(553, 32, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 14:59:49', '2023-11-27 14:59:55'),
(554, 33, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:00:08', '2023-11-27 15:00:15'),
(555, 38, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:00:38', '2023-11-27 15:00:56'),
(556, 46, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:01:10', '2023-11-27 15:01:23'),
(557, 52, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:01:40', '2023-11-27 15:01:46'),
(558, 57, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:01:51', '2023-11-27 15:02:02'),
(559, 64, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:02:14', '2023-11-27 15:02:37'),
(560, 83, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:03:34', '2023-11-27 15:03:50'),
(561, 90, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:03:57', '2023-11-27 15:04:41'),
(562, 95, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:05:06', '2023-11-27 15:05:15'),
(563, 107, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:05:24', '2023-11-27 15:05:56'),
(564, 112, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:09:13', '2023-11-27 15:09:22'),
(565, 117, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:09:25', '2023-11-27 15:09:34'),
(566, 121, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:09:44', '2023-11-27 15:09:53'),
(567, 126, 32, NULL, NULL, NULL, 'approved', '2023-11-27 15:10:06', '2023-11-27 15:10:28'),
(568, 126, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:10:06', '2023-11-27 15:10:16'),
(569, 131, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:10:33', '2023-11-27 15:10:41'),
(570, 136, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:11:35', '2023-11-27 15:11:45'),
(571, 141, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:12:00', '2023-11-27 15:12:15'),
(572, 146, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:12:20', '2023-11-27 15:12:27'),
(573, 151, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:12:35', '2023-11-27 15:12:45'),
(574, 157, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:13:01', '2023-11-27 15:13:11'),
(575, 162, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:13:16', '2023-11-27 15:13:24'),
(576, 167, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:13:31', '2023-11-27 15:13:51'),
(577, 172, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:14:02', '2023-11-27 15:14:11'),
(578, 177, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:14:15', '2023-11-27 15:14:25'),
(579, 182, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:14:35', '2023-11-27 15:14:50'),
(580, 187, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:14:55', '2023-11-27 15:15:04'),
(581, 192, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:15:15', '2023-11-27 15:15:21'),
(582, 197, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:15:26', '2023-11-27 15:15:39'),
(583, 202, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:15:47', '2023-11-27 15:16:09'),
(584, 207, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:16:19', '2023-11-27 15:16:27'),
(585, 212, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:22:09', '2023-11-27 15:22:18'),
(586, 216, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:22:27', '2023-11-27 15:22:38'),
(587, 220, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:22:45', '2023-11-27 15:22:57'),
(588, 225, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:23:08', '2023-11-27 15:23:18'),
(589, 229, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:23:24', '2023-11-27 15:23:34'),
(590, 233, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:23:38', '2023-11-27 15:23:47'),
(591, 236, 32, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:23:55', '2023-11-27 15:24:03'),
(592, 36, 30, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:26:05', '2023-11-27 15:26:22'),
(593, 42, 30, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:26:28', '2023-11-27 15:26:36'),
(594, 43, 30, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:26:41', '2023-11-27 15:26:50'),
(595, 44, 30, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:26:57', '2023-11-27 15:27:03'),
(596, 50, 30, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:27:08', '2023-11-27 15:27:17'),
(597, 55, 30, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:27:22', '2023-11-27 15:27:42'),
(598, 60, 30, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:27:55', '2023-11-27 15:28:04'),
(599, 61, 30, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:28:15', '2023-11-27 15:28:24'),
(600, 63, 30, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:28:34', '2023-11-27 15:28:41'),
(601, 67, 30, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:28:53', '2023-11-27 15:29:14'),
(602, 70, 30, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:34:46', '2023-11-27 15:34:52'),
(603, 71, 30, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:34:59', '2023-11-27 15:35:06'),
(604, 72, 30, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:35:11', '2023-11-27 15:35:21'),
(605, 74, 30, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:35:26', '2023-11-27 15:35:34'),
(606, 75, 30, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:35:39', '2023-11-27 15:35:46'),
(607, 76, 30, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:35:50', '2023-11-27 15:35:59'),
(608, 78, 30, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:36:05', '2023-11-27 15:36:14'),
(609, 80, 30, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:36:22', '2023-11-27 15:36:28'),
(610, 81, 30, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:36:34', '2023-11-27 15:36:41'),
(611, 82, 30, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:36:47', '2023-11-27 15:36:52'),
(612, 86, 30, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:36:55', '2023-11-27 15:37:03'),
(613, 87, 30, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:37:06', '2023-11-27 15:37:16'),
(614, 88, 30, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:37:37', '2023-11-27 15:37:42'),
(615, 92, 30, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:37:51', '2023-11-27 15:37:59'),
(616, 96, 30, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 15:38:07', '2023-11-27 15:38:20'),
(617, 97, 30, NULL, 'Normal! Not used often but know the Product', NULL, 'approved', '2023-11-27 15:38:43', '2023-11-27 15:39:12'),
(618, 98, 30, NULL, 'Normal! Not used often but know the Product', NULL, 'approved', '2023-11-27 15:39:16', '2023-11-27 15:39:29'),
(619, 101, 30, NULL, 'Normal! Not used often but know the Product', NULL, 'approved', '2023-11-27 15:39:34', '2023-11-27 15:39:42'),
(620, 102, 30, NULL, 'Normal! Not used often but know the Product', NULL, 'approved', '2023-11-27 15:39:46', '2023-11-27 15:39:55'),
(621, 103, 30, NULL, NULL, NULL, 'approved', '2023-11-27 15:40:03', '2023-11-27 16:07:12'),
(622, 104, 30, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-11-27 16:12:12', '2023-11-27 16:12:20'),
(623, 105, 30, NULL, 'Normal! Not used often but know the Product', NULL, 'approved', '2023-11-27 16:12:25', '2023-11-27 16:12:32'),
(624, 110, 30, NULL, 'Normal! Not used often but know the Product', NULL, 'approved', '2023-11-27 16:12:36', '2023-11-27 16:12:43'),
(625, 8, 3, NULL, 'Excellent! I personally used it too, very Applicable', '33333', 'approved', '2023-11-30 09:05:33', '2023-11-30 09:06:08'),
(626, 8, 34, NULL, NULL, NULL, 'approved', '2023-12-05 07:50:45', '2023-12-05 07:50:50'),
(627, 14, 34, NULL, NULL, NULL, 'approved', '2023-12-05 07:50:55', '2023-12-05 07:50:58'),
(628, 20, 34, NULL, NULL, NULL, 'approved', '2023-12-05 07:51:01', '2023-12-05 07:51:08'),
(629, 29, 34, NULL, NULL, NULL, 'approved', '2023-12-05 07:51:11', '2023-12-05 07:51:13'),
(630, 32, 34, NULL, NULL, NULL, 'approved', '2023-12-05 07:51:16', '2023-12-05 07:51:22'),
(631, 33, 34, NULL, NULL, NULL, 'approved', '2023-12-05 07:51:29', '2023-12-05 07:51:34'),
(632, 38, 34, NULL, NULL, NULL, 'approved', '2023-12-05 07:56:55', '2023-12-05 08:10:43'),
(633, 46, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:10:51', '2023-12-05 08:10:56'),
(634, 52, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:11:03', '2023-12-05 08:11:06'),
(635, 57, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:12:21', '2023-12-05 08:12:52'),
(636, 64, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:12:59', '2023-12-05 08:13:05'),
(637, 83, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:13:13', '2023-12-05 08:13:42'),
(638, 90, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:13:54', '2023-12-05 08:13:58'),
(639, 95, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:14:08', '2023-12-05 08:14:15'),
(640, 107, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:14:27', '2023-12-05 08:15:45'),
(641, 112, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:16:00', '2023-12-05 08:16:08'),
(642, 117, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:16:24', '2023-12-05 08:16:28'),
(643, 121, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:16:32', '2023-12-05 08:16:37'),
(644, 126, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:16:41', '2023-12-05 08:16:47'),
(645, 131, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:16:54', '2023-12-05 08:16:58'),
(646, 136, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:17:03', '2023-12-05 08:17:06'),
(647, 141, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:17:36', '2023-12-05 08:17:43'),
(648, 146, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:18:00', '2023-12-05 08:18:06'),
(649, 151, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:18:11', '2023-12-05 08:18:23'),
(650, 157, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:18:41', '2023-12-05 08:18:51'),
(651, 162, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:19:03', '2023-12-05 08:19:13'),
(652, 167, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:19:30', '2023-12-05 08:19:35'),
(653, 172, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:19:50', '2023-12-05 08:19:57'),
(654, 177, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:20:20', '2023-12-05 08:20:26'),
(655, 182, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:20:35', '2023-12-05 08:20:41'),
(656, 187, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:22:37', '2023-12-05 08:22:41'),
(657, 192, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:22:44', '2023-12-05 08:22:49'),
(658, 197, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:22:53', '2023-12-05 08:22:57'),
(659, 202, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:23:01', '2023-12-05 08:23:06'),
(660, 207, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:23:50', '2023-12-05 08:23:59'),
(661, 212, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:25:14', '2023-12-05 08:25:18'),
(662, 216, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:25:23', '2023-12-05 08:25:27'),
(663, 220, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:25:34', '2023-12-05 08:25:45'),
(664, 225, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:25:50', '2023-12-05 08:25:53'),
(665, 229, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:25:57', '2023-12-05 08:26:01'),
(666, 233, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:26:08', '2023-12-05 08:26:14'),
(667, 236, 34, NULL, NULL, NULL, 'approved', '2023-12-05 08:26:21', '2023-12-05 08:26:27'),
(668, 36, 33, NULL, NULL, NULL, 'approved', '2023-12-05 08:30:09', '2023-12-05 08:32:10'),
(669, 42, 33, NULL, NULL, NULL, 'approved', '2023-12-05 08:32:30', '2023-12-05 08:32:34'),
(670, 43, 33, NULL, NULL, NULL, 'approved', '2023-12-05 08:32:37', '2023-12-05 08:32:40'),
(671, 44, 33, NULL, NULL, NULL, 'approved', '2023-12-05 08:32:47', '2023-12-05 08:32:54'),
(672, 50, 33, NULL, NULL, NULL, 'approved', '2023-12-05 08:33:00', '2023-12-05 08:33:07'),
(673, 55, 33, NULL, NULL, NULL, 'approved', '2023-12-05 08:33:11', '2023-12-05 08:33:15'),
(674, 8, 36, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-12-05 09:16:26', '2023-12-05 09:23:12'),
(675, 14, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:23:18', '2023-12-05 09:23:27'),
(676, 20, 36, NULL, 'Normal! Not used often but know the Product', NULL, 'approved', '2023-12-05 09:23:32', '2023-12-05 09:23:45'),
(677, 29, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:23:54', '2023-12-05 09:24:02'),
(678, 32, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:24:08', '2023-12-05 09:24:17'),
(679, 33, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:24:20', '2023-12-05 09:24:29'),
(680, 38, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:24:36', '2023-12-05 09:24:42'),
(681, 46, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:24:46', '2023-12-05 09:24:51'),
(682, 52, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:24:55', '2023-12-05 09:25:00'),
(683, 57, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:25:05', '2023-12-05 09:25:10'),
(684, 64, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:25:21', '2023-12-05 09:25:26'),
(685, 83, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:25:30', '2023-12-05 09:25:35'),
(686, 90, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:25:38', '2023-12-05 09:25:44'),
(687, 95, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:25:49', '2023-12-05 09:25:54'),
(688, 107, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:25:58', '2023-12-05 09:26:04'),
(689, 112, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:26:08', '2023-12-05 09:26:16'),
(690, 117, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:26:20', '2023-12-05 09:26:25'),
(691, 121, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:26:29', '2023-12-05 09:26:35'),
(692, 126, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:26:39', '2023-12-05 09:26:44'),
(693, 131, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:26:49', '2023-12-05 09:26:53'),
(694, 136, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:26:58', '2023-12-05 09:27:03'),
(695, 141, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:27:08', '2023-12-05 09:27:12'),
(696, 146, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:27:17', '2023-12-05 09:27:22'),
(697, 151, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:27:27', '2023-12-05 09:27:32'),
(698, 157, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:27:38', '2023-12-05 09:27:43'),
(699, 162, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:27:51', '2023-12-05 09:27:56'),
(700, 167, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:28:00', '2023-12-05 09:28:05'),
(701, 172, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:28:11', '2023-12-05 09:28:17'),
(702, 177, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:28:24', '2023-12-05 09:28:30'),
(703, 182, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:28:34', '2023-12-05 09:28:38'),
(704, 187, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:28:44', '2023-12-05 09:28:49'),
(705, 192, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:30:49', '2023-12-05 09:30:55'),
(706, 197, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:31:01', '2023-12-05 09:31:07'),
(707, 202, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:31:11', '2023-12-05 09:31:16'),
(708, 207, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:31:20', '2023-12-05 09:31:24'),
(709, 212, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:31:28', '2023-12-05 09:31:38'),
(710, 216, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:31:46', '2023-12-05 09:31:50'),
(711, 220, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:31:54', '2023-12-05 09:31:58'),
(712, 225, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:32:07', '2023-12-05 09:32:11'),
(713, 229, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:32:15', '2023-12-05 09:32:19'),
(714, 233, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:32:26', '2023-12-05 09:32:30'),
(715, 236, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:32:34', '2023-12-05 09:32:38'),
(716, 240, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:32:41', '2023-12-05 09:32:45'),
(717, 244, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:32:48', '2023-12-05 09:32:53'),
(718, 259, 36, NULL, NULL, NULL, 'approved', '2023-12-05 09:32:57', '2023-12-05 09:33:01'),
(719, 36, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:36:10', '2023-12-05 09:36:15'),
(720, 42, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:36:20', '2023-12-05 09:36:25'),
(721, 43, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:36:35', '2023-12-05 09:36:40'),
(722, 44, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:36:44', '2023-12-05 09:36:48'),
(723, 50, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:36:53', '2023-12-05 09:36:57'),
(724, 55, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:37:11', '2023-12-05 09:37:16'),
(725, 60, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:37:24', '2023-12-05 09:37:28'),
(726, 61, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:37:31', '2023-12-05 09:37:35'),
(727, 63, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:37:38', '2023-12-05 09:37:42'),
(728, 67, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:37:45', '2023-12-05 09:37:49'),
(729, 70, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:37:53', '2023-12-05 09:37:57'),
(730, 71, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:38:02', '2023-12-05 09:38:06'),
(731, 72, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:38:09', '2023-12-05 09:38:13'),
(732, 74, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:38:16', '2023-12-05 09:38:19'),
(733, 75, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:38:22', '2023-12-05 09:38:25'),
(734, 76, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:38:29', '2023-12-05 09:38:32'),
(735, 78, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:38:35', '2023-12-05 09:38:39'),
(736, 80, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:38:42', '2023-12-05 09:38:48'),
(737, 81, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:38:52', '2023-12-05 09:38:56'),
(738, 82, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:39:00', '2023-12-05 09:39:03'),
(739, 86, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:39:24', '2023-12-05 09:39:32'),
(740, 87, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:39:43', '2023-12-05 09:39:46'),
(741, 88, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:39:49', '2023-12-05 09:39:53'),
(742, 92, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:39:56', '2023-12-05 09:40:00'),
(743, 96, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:40:04', '2023-12-05 09:40:08'),
(744, 97, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:40:12', '2023-12-05 09:40:16'),
(745, 98, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:40:20', '2023-12-05 09:40:23'),
(746, 101, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:40:28', '2023-12-05 09:40:31'),
(747, 102, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:40:35', '2023-12-05 09:40:38'),
(748, 103, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:40:42', '2023-12-05 09:40:46'),
(749, 104, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:40:52', '2023-12-05 09:40:56'),
(750, 105, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:41:00', '2023-12-05 09:41:04'),
(751, 110, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:41:08', '2023-12-05 09:41:12'),
(752, 115, 35, NULL, NULL, NULL, 'approved', '2023-12-05 09:41:16', '2023-12-05 09:41:20'),
(753, 36, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:36:30', '2023-12-07 13:36:41'),
(754, 42, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:36:53', '2023-12-07 13:36:58'),
(755, 43, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:37:06', '2023-12-07 13:37:12'),
(756, 44, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:37:21', '2023-12-07 13:37:26'),
(757, 50, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:37:32', '2023-12-07 13:37:37'),
(758, 55, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:37:42', '2023-12-07 13:37:46'),
(759, 60, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:37:52', '2023-12-07 13:37:58'),
(760, 61, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:38:04', '2023-12-07 13:38:08'),
(761, 63, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:38:23', '2023-12-07 13:38:28'),
(762, 67, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:38:40', '2023-12-07 13:38:44'),
(763, 70, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:38:51', '2023-12-07 13:38:55'),
(764, 71, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:38:59', '2023-12-07 13:39:03'),
(765, 72, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:39:07', '2023-12-07 13:39:10'),
(766, 74, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:39:17', '2023-12-07 13:39:21'),
(767, 75, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:39:25', '2023-12-07 13:39:29'),
(768, 76, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:39:33', '2023-12-07 13:39:36'),
(769, 78, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:39:40', '2023-12-07 13:39:43'),
(770, 80, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:39:58', '2023-12-07 13:40:02'),
(771, 81, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:40:07', '2023-12-07 13:40:12'),
(772, 82, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:40:19', '2023-12-07 13:40:35'),
(773, 82, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:40:44', '2023-12-07 13:40:48'),
(774, 86, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:40:57', '2023-12-07 13:41:01'),
(775, 87, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:41:08', '2023-12-07 13:41:12'),
(776, 88, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:41:16', '2023-12-07 13:41:20'),
(777, 92, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:41:29', '2023-12-07 13:41:32'),
(778, 96, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:42:11', '2023-12-07 13:42:15'),
(779, 97, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:42:30', '2023-12-07 13:42:34'),
(780, 98, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:42:42', '2023-12-07 13:42:46'),
(781, 101, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:42:50', '2023-12-07 13:42:54'),
(782, 102, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:43:04', '2023-12-07 13:43:09'),
(783, 103, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:43:23', '2023-12-07 13:43:27'),
(784, 104, 35, NULL, NULL, NULL, 'approved', '2023-12-07 13:43:47', '2023-12-07 13:43:50'),
(785, 105, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:27:46', '2023-12-07 14:27:51'),
(786, 110, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:27:55', '2023-12-07 14:27:59'),
(787, 115, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:28:02', '2023-12-07 14:28:06'),
(788, 124, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:28:09', '2023-12-07 14:28:12'),
(789, 242, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:28:17', '2023-12-07 14:28:21'),
(790, 36, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:28:24', '2023-12-07 14:28:27'),
(791, 42, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:28:34', '2023-12-07 14:28:38'),
(792, 43, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:28:52', '2023-12-07 14:28:55'),
(793, 44, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:29:16', '2023-12-07 14:29:21'),
(794, 50, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:29:29', '2023-12-07 14:29:32'),
(795, 55, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:29:46', '2023-12-07 14:29:50'),
(796, 60, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:30:09', '2023-12-07 14:30:13'),
(797, 61, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:30:25', '2023-12-07 14:30:35'),
(798, 63, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:31:03', '2023-12-07 14:31:09'),
(799, 67, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:31:19', '2023-12-07 14:31:24'),
(800, 70, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:31:41', '2023-12-07 14:32:17'),
(801, 70, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:31:45', '2023-12-07 14:31:51'),
(802, 71, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:32:23', '2023-12-07 14:32:27'),
(803, 72, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:32:48', '2023-12-07 14:32:54'),
(804, 74, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:33:15', '2023-12-07 14:33:19'),
(805, 75, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:33:22', '2023-12-07 14:33:25'),
(806, 76, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:33:31', '2023-12-07 14:33:35'),
(807, 78, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:33:38', '2023-12-07 14:33:42'),
(808, 80, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:33:48', '2023-12-07 14:33:51'),
(809, 81, 35, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-12-07 14:33:55', '2023-12-07 14:34:02'),
(810, 82, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:34:07', '2023-12-07 14:34:27'),
(811, 86, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:34:34', '2023-12-07 14:34:38'),
(812, 87, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:34:43', '2023-12-07 14:34:46'),
(813, 88, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:35:07', '2023-12-07 14:35:10'),
(814, 92, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:35:15', '2023-12-07 14:35:20'),
(815, 96, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:35:25', '2023-12-07 14:35:28'),
(816, 97, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:35:33', '2023-12-07 14:35:37'),
(817, 98, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:35:42', '2023-12-07 14:35:46'),
(818, 101, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:35:51', '2023-12-07 14:35:55'),
(819, 102, 35, NULL, NULL, NULL, 'approved', '2023-12-07 14:36:01', '2023-12-07 14:36:04'),
(820, 36, 35, NULL, NULL, NULL, 'approved', '2023-12-08 11:00:59', '2023-12-08 11:01:38'),
(821, 42, 35, NULL, NULL, NULL, 'approved', '2023-12-08 11:01:42', '2023-12-08 11:01:45'),
(822, 8, 36, NULL, NULL, NULL, 'approved', '2023-12-08 11:19:58', '2023-12-08 11:20:06'),
(823, 14, 36, NULL, NULL, NULL, 'approved', '2023-12-08 11:20:27', '2023-12-08 11:20:38'),
(824, 20, 36, NULL, NULL, NULL, 'approved', '2023-12-08 11:28:20', '2023-12-08 11:28:24'),
(825, 29, 36, NULL, NULL, NULL, 'approved', '2023-12-08 11:28:30', '2023-12-08 11:32:47'),
(826, 32, 36, NULL, NULL, NULL, 'approved', '2023-12-08 11:33:06', '2023-12-08 11:34:30'),
(827, 33, 36, NULL, NULL, NULL, 'approved', '2023-12-08 11:39:21', '2023-12-08 11:39:26'),
(828, 38, 36, NULL, NULL, NULL, 'approved', '2023-12-08 11:49:57', '2023-12-08 11:50:02'),
(829, 46, 36, NULL, NULL, NULL, 'approved', '2023-12-08 11:50:09', '2023-12-08 11:50:15'),
(830, 52, 36, 1420.00, NULL, NULL, 'approved', '2023-12-08 11:50:56', '2023-12-14 10:51:04'),
(831, 8, 3, NULL, 'Normal! Not used often but know the Product', NULL, 'approved', '2023-12-09 09:26:27', '2023-12-09 09:27:04'),
(832, 8, 3, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-12-10 14:54:24', '2023-12-10 14:55:04'),
(833, 14, 3, NULL, NULL, NULL, 'approved', '2023-12-10 15:22:45', '2023-12-11 12:19:15'),
(834, 8, 3, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-12-11 12:19:26', '2023-12-11 12:20:27'),
(835, 8, 3, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-12-13 18:03:38', '2023-12-13 18:03:46'),
(836, 8, 36, NULL, NULL, NULL, 'approved', '2023-12-14 10:51:07', '2023-12-14 10:51:11'),
(837, 14, 36, NULL, NULL, NULL, 'approved', '2023-12-14 10:51:14', '2023-12-14 10:51:18'),
(838, 20, 36, NULL, NULL, NULL, 'approved', '2023-12-14 10:51:20', '2023-12-14 10:51:23'),
(839, 29, 36, NULL, NULL, NULL, 'approved', '2023-12-14 10:51:26', '2023-12-14 10:51:30'),
(840, 32, 36, NULL, NULL, NULL, 'approved', '2023-12-14 10:51:32', '2023-12-14 10:51:36'),
(841, 33, 36, NULL, NULL, NULL, 'approved', '2023-12-14 10:51:42', '2023-12-14 10:51:47'),
(842, 38, 36, NULL, NULL, NULL, 'approved', '2023-12-14 10:51:53', '2023-12-14 10:51:56'),
(843, 46, 36, NULL, NULL, NULL, 'approved', '2023-12-14 10:51:59', '2023-12-14 10:52:03'),
(844, 52, 36, 1420.00, NULL, NULL, 'approved', '2023-12-14 10:52:06', '2023-12-14 10:52:10'),
(845, 57, 36, NULL, NULL, NULL, 'approved', '2023-12-14 10:52:14', '2023-12-14 10:52:18'),
(846, 64, 36, NULL, NULL, NULL, 'approved', '2023-12-14 10:52:21', '2023-12-14 10:52:26'),
(847, 83, 36, NULL, NULL, NULL, 'approved', '2023-12-14 10:52:30', '2023-12-14 10:52:33'),
(848, 90, 36, NULL, NULL, NULL, 'approved', '2023-12-14 10:52:36', '2023-12-14 10:52:39'),
(849, 95, 36, NULL, NULL, NULL, 'approved', '2023-12-14 10:53:08', '2023-12-14 10:53:11'),
(850, 107, 36, NULL, NULL, NULL, 'approved', '2023-12-14 10:53:15', '2023-12-14 10:53:18'),
(851, 112, 36, NULL, NULL, NULL, 'approved', '2023-12-14 10:53:21', '2023-12-14 10:53:24'),
(852, 117, 36, NULL, NULL, NULL, 'approved', '2023-12-14 10:53:27', '2023-12-14 10:53:30'),
(853, 121, 36, NULL, NULL, NULL, 'approved', '2023-12-14 10:53:33', '2023-12-14 10:53:36'),
(854, 126, 36, NULL, NULL, NULL, 'approved', '2023-12-14 10:53:39', '2023-12-14 10:53:42'),
(855, 131, 36, NULL, NULL, NULL, 'approved', '2023-12-14 10:53:45', '2023-12-14 10:53:48'),
(856, 136, 36, NULL, NULL, NULL, 'approved', '2023-12-14 10:53:51', '2023-12-14 10:53:55'),
(857, 141, 36, NULL, NULL, NULL, 'approved', '2023-12-14 10:53:58', '2023-12-14 10:54:02'),
(858, 146, 36, NULL, NULL, NULL, 'approved', '2023-12-14 10:54:05', '2023-12-14 10:54:09'),
(859, 151, 36, 1920.00, NULL, NULL, 'approved', '2023-12-14 10:54:12', '2023-12-14 11:29:17'),
(860, 157, 36, NULL, NULL, NULL, 'approved', '2023-12-14 11:29:21', '2023-12-14 11:29:24'),
(861, 162, 36, NULL, NULL, NULL, 'approved', '2023-12-14 11:29:28', '2023-12-14 11:29:32'),
(862, 167, 36, NULL, NULL, NULL, 'approved', '2023-12-14 11:30:04', '2023-12-14 11:30:09'),
(863, 172, 36, NULL, NULL, NULL, 'approved', '2023-12-14 11:30:19', '2023-12-14 11:30:23'),
(864, 177, 36, NULL, NULL, NULL, 'approved', '2023-12-14 11:30:29', '2023-12-14 11:30:32'),
(865, 182, 36, NULL, NULL, NULL, 'approved', '2023-12-14 11:30:37', '2023-12-14 11:30:40'),
(866, 187, 36, NULL, NULL, NULL, 'approved', '2023-12-14 11:30:45', '2023-12-14 11:30:50'),
(867, 192, 36, NULL, NULL, NULL, 'approved', '2023-12-14 11:30:53', '2023-12-14 11:30:58'),
(868, 197, 36, NULL, NULL, NULL, 'approved', '2023-12-14 11:31:05', '2023-12-14 11:31:08'),
(869, 36, 35, NULL, NULL, NULL, 'approved', '2023-12-14 11:34:35', '2023-12-14 11:34:40'),
(870, 42, 35, NULL, NULL, NULL, 'approved', '2023-12-14 11:34:49', '2023-12-14 11:34:53'),
(871, 43, 35, NULL, NULL, NULL, 'approved', '2023-12-14 11:34:57', '2023-12-14 11:35:01'),
(872, 44, 35, NULL, NULL, NULL, 'approved', '2023-12-14 11:35:04', '2023-12-14 11:35:10'),
(873, 50, 35, NULL, NULL, NULL, 'approved', '2023-12-14 11:35:16', '2023-12-14 11:35:20'),
(874, 55, 35, NULL, NULL, NULL, 'approved', '2023-12-14 11:35:25', '2023-12-14 11:35:29'),
(875, 60, 35, NULL, NULL, NULL, 'approved', '2023-12-14 11:35:34', '2023-12-14 11:35:37'),
(876, 61, 35, NULL, NULL, NULL, 'approved', '2023-12-14 11:37:03', '2023-12-14 11:37:07'),
(877, 63, 35, NULL, NULL, NULL, 'approved', '2023-12-14 11:37:27', '2023-12-14 11:37:31'),
(878, 67, 35, NULL, NULL, NULL, 'approved', '2023-12-14 11:37:36', '2023-12-14 11:37:40'),
(879, 70, 35, NULL, NULL, NULL, 'approved', '2023-12-14 11:37:43', '2023-12-14 11:37:46'),
(880, 71, 35, NULL, NULL, NULL, 'approved', '2023-12-14 11:37:50', '2023-12-14 11:37:53'),
(881, 72, 35, NULL, NULL, NULL, 'approved', '2023-12-14 11:37:57', '2023-12-14 11:38:00'),
(882, 74, 35, NULL, NULL, NULL, 'approved', '2023-12-14 11:38:03', '2023-12-14 11:38:07'),
(883, 75, 35, NULL, NULL, NULL, 'approved', '2023-12-14 11:38:11', '2023-12-14 11:38:14'),
(884, 76, 35, NULL, NULL, NULL, 'approved', '2023-12-14 11:38:18', '2023-12-14 11:38:21'),
(885, 78, 35, NULL, NULL, NULL, 'approved', '2023-12-14 11:38:27', '2023-12-14 11:38:30'),
(886, 80, 35, NULL, NULL, NULL, 'approved', '2023-12-14 11:38:35', '2023-12-14 11:38:38'),
(887, 81, 35, NULL, NULL, NULL, 'approved', '2023-12-14 11:38:43', '2023-12-14 11:38:46'),
(888, 82, 35, NULL, NULL, NULL, 'approved', '2023-12-14 11:38:56', '2023-12-14 11:39:00'),
(889, 86, 35, NULL, NULL, NULL, 'approved', '2023-12-14 11:39:12', '2023-12-14 11:39:16'),
(890, 87, 35, NULL, NULL, NULL, 'approved', '2023-12-14 11:39:22', '2023-12-14 11:39:26'),
(891, 88, 35, NULL, NULL, NULL, 'approved', '2023-12-14 11:39:30', '2023-12-14 11:39:34'),
(892, 92, 35, NULL, NULL, NULL, 'approved', '2023-12-14 11:39:38', '2023-12-14 11:39:42'),
(893, 96, 35, 310.00, NULL, NULL, 'approved', '2023-12-14 11:39:45', '2023-12-15 18:45:00'),
(894, 36, 35, NULL, NULL, NULL, 'approved', '2023-12-15 18:45:06', '2023-12-15 18:45:11'),
(895, 42, 35, NULL, NULL, NULL, 'approved', '2023-12-15 18:45:14', '2023-12-15 18:45:18'),
(896, 43, 35, NULL, NULL, NULL, 'approved', '2023-12-15 18:45:26', '2023-12-15 18:45:31'),
(897, 44, 35, NULL, NULL, NULL, 'approved', '2023-12-15 18:45:37', '2023-12-15 18:45:41'),
(898, 50, 35, NULL, NULL, NULL, 'approved', '2023-12-15 18:45:44', '2023-12-15 18:45:48'),
(899, 55, 35, NULL, NULL, NULL, 'approved', '2023-12-15 18:45:51', '2023-12-15 18:45:55'),
(900, 60, 35, NULL, NULL, NULL, 'approved', '2023-12-15 18:45:58', '2023-12-15 18:46:02'),
(901, 61, 35, NULL, NULL, NULL, 'approved', '2023-12-15 18:46:05', '2023-12-15 18:46:08'),
(902, 63, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:21:07', '2023-12-15 19:21:11'),
(903, 67, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:21:15', '2023-12-15 19:21:22'),
(904, 70, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:21:26', '2023-12-15 19:21:29'),
(905, 71, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:21:32', '2023-12-15 19:21:35'),
(906, 72, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:21:56', '2023-12-15 19:22:00'),
(907, 74, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:22:06', '2023-12-15 19:22:10'),
(908, 75, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:23:01', '2023-12-15 19:23:04'),
(909, 76, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:23:11', '2023-12-15 19:23:15'),
(910, 78, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:23:48', '2023-12-15 19:23:52'),
(911, 80, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:23:58', '2023-12-15 19:24:01'),
(912, 81, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:24:11', '2023-12-15 19:24:14'),
(913, 82, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:24:23', '2023-12-15 19:24:26'),
(914, 86, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:24:30', '2023-12-15 19:24:33'),
(915, 87, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:24:37', '2023-12-15 19:24:40'),
(916, 88, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:24:45', '2023-12-15 19:24:48'),
(917, 92, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:24:52', '2023-12-15 19:24:55'),
(918, 96, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:25:11', '2023-12-15 19:25:15'),
(919, 97, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:25:28', '2023-12-15 19:25:32'),
(920, 98, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:26:08', '2023-12-15 19:26:11'),
(921, 101, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:26:15', '2023-12-15 19:26:18'),
(922, 102, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:26:21', '2023-12-15 19:26:24'),
(923, 103, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:26:40', '2023-12-15 19:26:43'),
(924, 104, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:26:46', '2023-12-15 19:26:49'),
(925, 105, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:26:55', '2023-12-15 19:26:58'),
(926, 110, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:27:07', '2023-12-15 19:27:10'),
(927, 115, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:27:14', '2023-12-15 19:27:17'),
(928, 124, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:27:20', '2023-12-15 19:27:23'),
(929, 242, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:27:25', '2023-12-15 19:27:28'),
(930, 36, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:27:37', '2023-12-15 19:27:40'),
(931, 42, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:27:52', '2023-12-15 19:27:56'),
(932, 43, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:27:58', '2023-12-15 19:28:01'),
(933, 44, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:28:04', '2023-12-15 19:28:07'),
(934, 50, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:28:10', '2023-12-15 19:28:13'),
(935, 55, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:28:17', '2023-12-15 19:28:20'),
(936, 60, 35, NULL, NULL, NULL, 'approved', '2023-12-15 19:28:30', '2023-12-15 19:28:33'),
(937, 61, 35, NULL, NULL, NULL, 'approved', '2023-12-15 20:04:26', '2023-12-15 20:04:30'),
(938, 63, 35, NULL, NULL, NULL, 'approved', '2023-12-15 20:04:33', '2023-12-15 20:04:40'),
(939, 67, 35, NULL, NULL, NULL, 'approved', '2023-12-15 20:04:46', '2023-12-15 20:04:50'),
(940, 70, 35, NULL, NULL, NULL, 'approved', '2023-12-15 20:04:57', '2023-12-15 20:05:04'),
(941, 71, 35, 592.00, NULL, NULL, 'approved', '2023-12-15 20:05:16', '2023-12-15 20:30:34'),
(942, 72, 35, NULL, NULL, NULL, 'approved', '2023-12-15 20:30:41', '2023-12-15 20:30:48'),
(943, 74, 35, NULL, NULL, NULL, 'approved', '2023-12-15 20:30:56', '2023-12-15 20:31:00'),
(944, 75, 35, NULL, NULL, NULL, 'approved', '2023-12-15 20:31:04', '2023-12-15 20:31:08'),
(945, 76, 35, NULL, NULL, NULL, 'approved', '2023-12-15 20:31:47', '2023-12-15 20:31:52'),
(946, 78, 35, 1100.00, NULL, NULL, 'pending', '2023-12-15 20:31:58', '2023-12-15 20:31:58'),
(947, 8, 3, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-12-15 20:53:22', '2023-12-15 20:53:29'),
(948, 14, 3, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-12-15 20:53:33', '2023-12-15 20:53:39'),
(949, 20, 3, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-12-15 20:53:42', '2023-12-15 20:53:49'),
(950, 29, 3, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-12-15 20:53:52', '2023-12-15 20:54:04'),
(951, 32, 3, 15000.00, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-12-15 20:54:20', '2023-12-15 20:54:36'),
(952, 33, 3, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-12-15 20:54:40', '2023-12-15 20:54:48'),
(953, 38, 3, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-12-15 20:54:52', '2023-12-15 20:55:02'),
(954, 8, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:01:31', '2023-12-15 23:01:44'),
(955, 14, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:04:45', '2023-12-15 23:04:56'),
(956, 20, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:05:18', '2023-12-15 23:05:25'),
(957, 29, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:05:34', '2023-12-15 23:05:40'),
(958, 32, 3, 15000.00, NULL, NULL, 'approved', '2023-12-15 23:05:46', '2023-12-15 23:05:50'),
(959, 33, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:07:15', '2023-12-15 23:07:50'),
(960, 38, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:08:12', '2023-12-15 23:08:23'),
(961, 46, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:08:29', '2023-12-15 23:08:37'),
(962, 52, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:08:44', '2023-12-15 23:09:04'),
(963, 57, 3, 5000.00, NULL, NULL, 'approved', '2023-12-15 23:09:10', '2023-12-15 23:09:21'),
(964, 64, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:09:29', '2023-12-15 23:11:01'),
(965, 83, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:11:14', '2023-12-15 23:11:34'),
(966, 90, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:11:45', '2023-12-15 23:11:58'),
(967, 95, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:12:12', '2023-12-15 23:12:19'),
(968, 107, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:12:30', '2023-12-15 23:12:35'),
(969, 112, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:12:41', '2023-12-15 23:12:53'),
(970, 117, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:13:06', '2023-12-15 23:13:36'),
(971, 121, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:13:45', '2023-12-15 23:13:50'),
(972, 126, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:13:57', '2023-12-15 23:14:07'),
(973, 131, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:14:42', '2023-12-15 23:14:48'),
(974, 136, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:14:55', '2023-12-15 23:14:59'),
(975, 141, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:15:15', '2023-12-15 23:15:20'),
(976, 146, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:15:31', '2023-12-15 23:15:38'),
(977, 151, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:15:46', '2023-12-15 23:15:55'),
(978, 157, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:16:50', '2023-12-15 23:17:59'),
(979, 162, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:18:07', '2023-12-15 23:18:10');
INSERT INTO `product_reviews` (`id`, `product_id`, `user_id`, `price`, `rating`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(980, 167, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:18:17', '2023-12-15 23:18:20'),
(981, 172, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:18:27', '2023-12-15 23:18:32'),
(982, 177, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:18:43', '2023-12-15 23:18:47'),
(983, 182, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:19:01', '2023-12-15 23:21:38'),
(984, 187, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:21:51', '2023-12-15 23:21:56'),
(985, 192, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:22:01', '2023-12-15 23:22:06'),
(986, 197, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:22:24', '2023-12-15 23:22:36'),
(987, 202, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:22:42', '2023-12-15 23:22:48'),
(988, 207, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:23:42', '2023-12-15 23:24:35'),
(989, 212, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:25:10', '2023-12-15 23:25:14'),
(990, 216, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:25:21', '2023-12-15 23:25:31'),
(991, 220, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:25:36', '2023-12-15 23:25:41'),
(992, 225, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:25:52', '2023-12-15 23:25:55'),
(993, 229, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:25:59', '2023-12-15 23:26:05'),
(994, 233, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:26:09', '2023-12-15 23:26:14'),
(995, 236, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:26:19', '2023-12-15 23:26:45'),
(996, 240, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:27:09', '2023-12-15 23:27:24'),
(997, 244, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:27:56', '2023-12-15 23:28:11'),
(998, 259, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:28:45', '2023-12-15 23:30:25'),
(999, 8, 3, NULL, NULL, NULL, 'approved', '2023-12-15 23:30:46', '2023-12-15 23:31:01'),
(1000, 8, 3, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-12-16 05:02:24', '2023-12-16 05:05:09'),
(1001, 8, 3, NULL, 'Excellent! I personally used it too, very Applicable', NULL, 'approved', '2023-12-16 07:21:51', '2023-12-16 07:22:30'),
(1002, 8, 3, NULL, NULL, NULL, 'approved', '2024-04-28 12:51:56', '2024-04-28 12:52:01'),
(1004, 14, 3, NULL, NULL, NULL, 'approved', '2024-05-08 04:15:17', '2024-05-08 07:52:16'),
(1005, 20, 3, NULL, NULL, NULL, 'approved', '2024-05-08 07:56:47', '2024-05-08 07:57:17'),
(1006, 29, 3, NULL, NULL, NULL, 'approved', '2024-05-08 08:00:01', '2024-05-08 08:00:29'),
(1007, 32, 3, 15000.00, NULL, NULL, 'approved', '2024-05-08 08:01:28', '2024-05-08 08:01:51'),
(1008, 33, 3, NULL, NULL, NULL, 'approved', '2024-05-08 08:04:28', '2024-05-08 08:04:37'),
(1009, 38, 3, NULL, NULL, NULL, 'approved', '2024-05-08 08:10:26', '2024-05-08 08:11:11'),
(1010, 46, 3, NULL, NULL, NULL, 'approved', '2024-05-08 08:11:19', '2024-05-08 08:13:15'),
(1011, 52, 3, NULL, NULL, NULL, 'approved', '2024-05-08 08:13:18', '2024-05-08 08:14:05');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'Admin', '2023-09-18 14:13:39', '2023-09-18 14:13:39'),
(2, 'user', 'User', 'User', '2023-09-18 14:13:42', '2023-09-18 14:13:42');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 2, 'App\\Models\\User'),
(2, 3, 'App\\Models\\User'),
(2, 5, 'App\\Models\\User'),
(2, 6, 'App\\Models\\User'),
(2, 7, 'App\\Models\\User'),
(2, 8, 'App\\Models\\User'),
(2, 9, 'App\\Models\\User'),
(2, 10, 'App\\Models\\User'),
(2, 11, 'App\\Models\\User'),
(2, 12, 'App\\Models\\User'),
(2, 13, 'App\\Models\\User'),
(2, 14, 'App\\Models\\User'),
(2, 15, 'App\\Models\\User'),
(2, 16, 'App\\Models\\User'),
(2, 17, 'App\\Models\\User'),
(2, 18, 'App\\Models\\User'),
(2, 19, 'App\\Models\\User'),
(2, 20, 'App\\Models\\User'),
(2, 21, 'App\\Models\\User'),
(2, 22, 'App\\Models\\User'),
(2, 23, 'App\\Models\\User'),
(2, 24, 'App\\Models\\User'),
(2, 25, 'App\\Models\\User'),
(2, 26, 'App\\Models\\User'),
(2, 27, 'App\\Models\\User'),
(2, 28, 'App\\Models\\User'),
(2, 29, 'App\\Models\\User'),
(2, 31, 'App\\Models\\User'),
(2, 32, 'App\\Models\\User'),
(2, 33, 'App\\Models\\User'),
(2, 34, 'App\\Models\\User'),
(2, 35, 'App\\Models\\User'),
(2, 36, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `theme_path` varchar(250) NOT NULL DEFAULT 'user.themes.salesforce.',
  `ref_amount` varchar(255) NOT NULL DEFAULT '0',
  `min_withdrawal` double(8,2) NOT NULL DEFAULT 0.00,
  `chat` varchar(250) DEFAULT NULL,
  `active_hour` time DEFAULT NULL,
  `close_hour` time DEFAULT NULL,
  `cert` varchar(255) DEFAULT NULL,
  `letter` varchar(255) DEFAULT NULL,
  `about` longtext DEFAULT NULL,
  `term` longtext DEFAULT NULL,
  `event` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `theme_path`, `ref_amount`, `min_withdrawal`, `chat`, `active_hour`, `close_hour`, `cert`, `letter`, `about`, `term`, `event`, `created_at`, `updated_at`) VALUES
(1, 'user.themes.bimeo.', '70', 0.02, '447988632116', '00:00:00', '23:11:00', 'uploads/certificate/certificate_1698852238.jpeg', 'uploads/certificate/L-of-A_1698852238.jpeg', '<h4>About Salesforce&nbsp;</h4><p>We\'re a full-service design &amp; digital growth companies<br>We provide creative design, digital &amp; marketing solutions to help businesses grow.<br><br>&nbsp;End User Experience Monitoring<br>Optimize user experience with detailed browser performance data correlated to backend performance<br>Salesforce Achieves Amazon Web Services (AWS) Cloud Operations Competency for AWS Observability<br>The new AWS Cloud Operations Competency program allows customers to select validated AWS Partners who offer comprehensive solutions with an integrated approach across Monitoring and Observability.<br>Developer Engineering Profiling<br>Learn How to Modernize How You Observe a Monolith Java App<br>Customers use APM/Observability to analyze of every method call inside a monolith Java to look for the longest running methods to point their performance engineers at to make the monolith run faster.<br>Mike Mallo | April 12, 2023<br>&nbsp;</p>', '<h4>TERMS AND CONDITIONS&nbsp;</h4><p>I. Drive Traffic<br>1.1) Reset requires a minimum deposit of £99<br>1.2) Once all drive traffic has been done, users should apply for a full withdrawal and receive the withdrawal amount before they can request to reset their account</p><p>II. Withdrawal<br>2.1）Please DO NOT use the same cryptocurrency address information to register multiple user accounts on the platform, if gets detected by the system the account will be frozen<br>2.2）After completing all products, users may apply for a full withdrawal<br>2.3) Withdrawal or refund is not available in the middle of the drive traffic process<br>2.4) Users are required to submit withdrawal requests from the platform to receive payment<br>2.5) The maximum withdrawal amount is £9999 for Normal &amp; Silver &amp; Gold &amp; Platinum users and no maximum withdrawal amount for Diamond users<br>2.6) Merchant\'s outstanding has to be paid back to the merchant on the given grace period. All legal fees are to be borne by the party who failed to repay the merchant. All funds in the account will be classified as unclaimed<br>2.7) Personal multi-account Products will lead to the suspension of the merchant\'s store, affecting the merchant\'s credibility and the invalidation of products. The platform prohibits the same cryptocurrency address bound to multiple accounts, please DO NOT use individual multi-account, if the cryptocurrency address is bound to multiple accounts, it will cause all funds to freeze for up to 90 days or the account permanently blocked<br>2.8) The platform is designed to prevent people from maliciously money laundering or cashing out a series of improper behavior<br>2.9) Please bind your withdrawal information to the platform before submitting it for withdrawal. Before proceeding, the withdrawal clients must complete all of the Product submission requirements. During the working hours of the platform, you can withdraw your money through the \"withdrawal\" interface. Click the \"Submit\" button after entering the amount you want to withdraw and enter your withdrawal passcode to withdraw. The specific arrival time is subject to the cryptocurrency wallet<br>3.0) Minimum Credit Score Requirement: To be eligible for fund withdrawals, customers must have a minimum credit score of 100 as determined by Salesforce. The credit score will be evaluated based on Salesforce chosen credit scoring model. Customers with credit scores below 100 will not be able to withdraw funds until their credit score meets or exceeds the required threshold. If have any questions do contact customer service for more inquiries.</p><p><br>III. Funds<br>3.1) All funds of the user will be safely kept in the user\'s account and can be requested to withdraw the total amount once products have been completed.<br>3.2) To avoid any loss of funds, all funds will be processed by the system and not manually<br>3.3) If there is any unexpected loss of funds, the platform will assume all responsibility<br>3.4) Each account is required to complete all Products in the account and have at least £99 in funds to process any withdrawals<br>3.5) Each Product comes from a different merchant. If you do not deposit within 30 minutes, you need to confirm the merchant\'s cryptocurrency address with customer service again before making a deposit<br>3.5.1) To ensure that the deposit progress is made quickly, please make sure that the cryptocurrency address and the amount you are transferring are the same as provided. If you encounter any unsolvable problems during the deposit process, please contact the platform\'s customer service immediately. Due to a large amount of transactions, please make sure to confirm the deposit cryptocurrency address of this platform carefully before depositing. The platform occasionally changes the deposit cryptocurrency address<br>3.6) If you have a negative amount in your account, you will need to deposit to your account before you can proceed to the next Product</p><p>IV. Account Security<br>4.1) Please do not disclose any passwords to others, if it causes any loss, the platform will not be responsible for any loss<br>4.2) Users are not recommended to set their birthday password, ID card number, or cell phone number as withdrawal passcode or login password<br>4.3) Login password or withdrawal passcode may be reset by contacting online customer service if forgotten<br>4.4) User and Business Non-Disclosure Agreement<br>4.4.1) The Products to be completed on this platform are real-time data from real users. Therefore, the users must ensure the tasks\' confidentiality and platform<br>4.5) Only one (1) account registration is allowed per mobile number<br>4.6) Legal measures will be taken in the event of malicious misappropriation of an account</p><p>V. Products<br>5.1) Normal users will be paid 0.5% for each drive traffic. Silver users will be paid 0.75% for each drive]this traffic. Gold users will be paid 1.0% for each drive traffic.<br>5.2) Platinum users will be paid 1.25% for each drive traffic. Diamond users will be paid 1.5% for each drive traffic<br>5.3) Each completed product will have funds and rewards returned to the user\'s account on the spot<br>5.4) The system will randomly assign Products to the user\'s account according to the total amount on the user\'s account<br>5.5) Once the Product has been assigned to the user\'s account, users will have the chance to get higher price products which depending on the system cannot be canceled or skipped.<br>5.5.1) All Products will be randomly assigned by the system. Once the Product is accepted and allocated by the system, no changes, cancellations, or abandoned data are strictly not allowed.<br>5.6) To protect the user\'s benefits, the amount of Products will be increased according to the total account balance, and so will the earnings!<br>5.7) If we receive the result of a complaint from a merchant that Products have not been completed after a long period, your account will be frozen<br>5.8) Multiple products to be reset every 24 hours.</p><p>VI. Multiple Products<br>6.1) Multiple Products are made up of 0 to 5 products, the system will randomly assign multiple products, and the user has a higher chance to get 1 or 2 products in multiple Products<br>6.2) Normal users will get 5% for each Product in the multiple Products. Silver users will get 7.5% for each Product in the multiple Products. Gold users will get 10.0% for each Product in the multiple Products.<br>6.3) Platinum users get 12.5% for each Product in the multiple Products. Diamond users get 15.0% for each Product in the multiple Products.<br>6.4) Once users receive multiple Products, funds will not be refunded to the account instantly and will be only returned to the account upon completion of each product in the combination.<br>6.5) The system will randomly assign multiple Products to the user\'s account according to the total balance range on the user\'s account<br>6.6) Once multiple Products are distributed to users, all orders couldn\'t be cancelled.<br>6.7) For all membership levels, there will be the opportunity for multiple package products, with a maximum of 3set package products<br>6.8) (SR) All levels of membership with a maximum recharge of USDT9999</p><p>VII. The deposit<br>7.1) The amount of deposit is the user\'s choice, we cannot decide the amount of deposit for the user, we suggest the user deposit according to their ability or after being familiar with the platform<br>7.2) If a user needs to deposit due to multiple Products, we recommend that the user deposits according to the negative amount shown on the account<br>7.3) Before making a deposit, the user must request and confirm cryptocurrency address details from the online customer service<br>7.4) If the user deposits to the wrong cryptocurrency address, the platform will not be held responsible for any loss</p><p>VIII. Product Merchant<br>8.1) There are different products updated on the platform every minute, a product that does not drive traffic for a long period will cause data failure to be uploaded to the system. To protect the merchant\'s credibility, users must complete the product within 8 hours. Failure to do so may result in a complaint from the merchant and the order will be fined or frozen!<br>8.2) The client will provide cryptocurrency address details for users to make deposits.</p><p>IX. Invitation<br>9.1) New users can only invite other users after 14 days of registration or after upgrading to Diamond Membership by using the Member ID<br>9.2) If the account does not complete all the products, users will not be able to invite other users.<br>9.3) Once the invitation code has been used, it takes 14 days to renew the Member ID<br>9.4) The referrer will receive a 70% referral member.<br>9.5) Platform users can become platform agents by referring new members and can get additional dynamic rewards. The reward is 70% of the daily profit of the direct first-level user</p><p>X. Operation time<br>10.1) Platform operating hours 10:00 to 22:59 (UTC +0 GMT)<br>10.2) Online customer service operating hours 10:00 to 22:59 (UTC +0 GMT)<br>10.3) Platform withdrawal time 10:00 to 22:59 (UTC +0 GMT)</p>', NULL, '2023-09-27 17:06:50', '2023-12-16 05:02:07');

-- --------------------------------------------------------

--
-- Table structure for table `tiers`
--

CREATE TABLE `tiers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `percent` double(8,2) NOT NULL DEFAULT 0.00,
  `reset` int(11) NOT NULL DEFAULT 3,
  `daily_optimize` int(11) NOT NULL DEFAULT 30,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tiers`
--

INSERT INTO `tiers` (`id`, `name`, `icon`, `price`, `percent`, `reset`, `daily_optimize`, `created_at`, `updated_at`) VALUES
(1, 'Normal', 'uploads/icon/Normal.png', 99, 0.50, 3, 35, '2023-09-19 04:49:11', '2023-09-19 04:49:11'),
(2, 'Silver', 'uploads/icon/Silver.png', 399, 0.75, 3, 40, '2023-09-19 04:51:35', '2023-09-19 04:51:35'),
(3, 'Gold', 'uploads/icon/Gold.png', 999, 1.00, 3, 45, '2023-09-19 04:52:27', '2023-09-19 04:52:27'),
(4, 'Platinum', 'uploads/icon/Platinum.png', 4999, 1.25, 3, 50, '2023-09-19 04:54:28', '2023-09-19 04:54:28'),
(5, 'Diamond', 'uploads/icon/Diamond.png', 9999, 1.50, 3, 55, '2023-09-19 04:56:39', '2023-09-19 04:56:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(250) NOT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ref_id` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `withdrawal_pass` varchar(255) NOT NULL DEFAULT '1234',
  `pass` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `bonus_ispaid` tinyint(1) NOT NULL DEFAULT 0,
  `optimized` int(11) NOT NULL DEFAULT 0,
  `min_bal` int(11) NOT NULL DEFAULT 50,
  `balance` double(8,2) NOT NULL DEFAULT 0.00,
  `frozen` double(8,2) NOT NULL DEFAULT 0.00,
  `asset` double(8,2) NOT NULL DEFAULT 0.00,
  `reset_count` int(11) NOT NULL DEFAULT 1,
  `credit_score` int(11) NOT NULL DEFAULT 100,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `tier_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `gender`, `user_id`, `ref_id`, `email`, `email_verified_at`, `withdrawal_pass`, `pass`, `password`, `remember_token`, `bonus_ispaid`, `optimized`, `min_bal`, `balance`, `frozen`, `asset`, `reset_count`, `credit_score`, `is_active`, `tier_id`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'admin', NULL, NULL, 'ref_02', 'Admin@salesforcereviews.info', NULL, '1234', '12345678', '$2y$10$5x07oAoTfdnPnZKEGW5ECehbMnZ/VpteDl1iEnAqs05YUPlnry7wK', NULL, 0, 0, 50, 3576.17, 0.00, 3576.17, 1, 0, 0, NULL, '2023-09-18 14:28:10', '2024-05-08 08:14:06'),
(3, 'user', 'user', 'Male', 2, 'pSRiDJ', NULL, NULL, '12345', '12345678', '$2y$10$zEzWeKRqFq4Vu9JXePHMPO8kgXPfzej1pYRMx9.SDv0PkC7mQeVRK', NULL, 1, 45, 55, 8408.46, 11317.75, 49891.80, 2, 100, 1, 3, '2023-09-18 14:53:06', '2024-05-13 07:49:27'),
(30, 'Kessewa342007', 'Kessewa342007', 'Male', 3, 'iLNU3z', NULL, NULL, 'Goldentulip1', 'Goldentulip1', '$2y$10$211l82Oaol.1.gvue3Qt9eJVhwOU1h3ZQXLAfxE.Il/AVyFFTx8wi', NULL, 0, 35, 50, 58.47, 0.00, 58.47, 1, 100, 1, 1, '2023-11-27 14:28:22', '2023-11-27 16:12:43'),
(32, 'Hannah9767', 'Hannah9767', 'Male', 30, 'RCTsJs', NULL, NULL, '2023', 'Hannah9767', '$2y$10$jjjNUUon/xZnJptRtO0/2uyKUEm9hNLhZQh7WDsKqa6Ee8SSb9Sd2', NULL, 0, 45, 50, 72.77, 0.00, 0.77, 1, 100, 1, 3, '2023-11-27 14:40:25', '2023-11-27 15:37:39'),
(33, 'Deen', 'Deen', 'Male', 3, 'tgNTgm', NULL, NULL, '123456789', 'Deen2023', '$2y$10$N65DELPMYYt4QQfNG17CGexCa0Sb8SoPfANiXWzb7hnnheiHaCsgm', NULL, 0, 6, 50, 53.69, 0.00, 53.69, 1, 100, 1, 1, '2023-12-03 08:36:27', '2023-12-05 08:33:15'),
(34, 'Light2023', 'Light2023', 'Male', 33, 'fbWm1V', NULL, NULL, '000000000000', 'Light2023', '$2y$10$xx1UjfaAgaAS3AamAh1lv.H2hBmAaAqoM7hYxj5/hxUFNw72nyTV6', NULL, 0, 45, 50, 73.19, 0.00, 1273.19, 1, 100, 1, 3, '2023-12-05 07:46:38', '2023-12-05 08:26:27'),
(35, 'Miminyawe', 'Miminyawe', 'Male', 3, 'm2KVTH', NULL, NULL, '12345678', 'calvo2009', '$2y$10$Flt3F4pp9milK7LHp8BHlOoK0s9KNDjagdYI806dvI01AEKtp.19O', NULL, 0, 10, 50, 614.72, 624.86, -475.14, 3, 100, 1, 1, '2023-12-05 08:56:08', '2023-12-15 20:32:02'),
(36, 'Hannah5502', 'Hannah5502', 'Male', 35, 'tlCVLN', NULL, NULL, '123321', 'Hannah5502', '$2y$10$vRsOO2taTKMkrcMcU9zGoO7suEaTYU9eYaN5jQOGFFTLCBpD2vn32', NULL, 0, 45, 50, 757.13, 0.00, 0.13, 2, 100, 1, 3, '2023-12-05 09:05:44', '2023-12-14 11:46:41');

-- --------------------------------------------------------

--
-- Table structure for table `user_payments`
--

CREATE TABLE `user_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `wallet` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `bank` varchar(250) DEFAULT NULL,
  `account` int(11) DEFAULT NULL,
  `recipient` varchar(255) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_payments`
--

INSERT INTO `user_payments` (`id`, `user_id`, `wallet`, `address`, `bank`, `account`, `recipient`, `phone`, `created_at`, `updated_at`) VALUES
(11, 32, 'TRC20', 'TCTsCn2JHPKCz5GnBJ7RmKUhuQYQQVj4ex', NULL, NULL, 'HANNA', '447400270647', '2023-11-27 15:37:00', '2023-11-27 15:37:00'),
(12, 36, 'TRC20', 'TRzhzgyQokhx88a56sLByRqy7S91hgefjhegfd', NULL, NULL, 'HANNA', '447533502115', '2023-12-05 09:38:42', '2023-12-08 11:33:36'),
(13, 35, 'TRC20', 'TDER1pzcp9kFCyniW74G9mgqNQg3gLjbVh', NULL, NULL, 'Loise manyeki', '07719365502', '2023-12-05 12:14:39', '2023-12-05 12:14:39'),
(14, 3, NULL, NULL, 'Cashapp', 123456, 'john', NULL, '2024-05-14 13:20:38', '2024-05-14 13:23:49');

-- --------------------------------------------------------

--
-- Table structure for table `user_products`
--

CREATE TABLE `user_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_products`
--

INSERT INTO `user_products` (`id`, `user_id`, `product_id`, `price`, `created_at`, `updated_at`) VALUES
(16, 3, 32, 15000.00, '2023-11-19 10:53:13', '2023-11-19 10:53:13'),
(21, 36, 52, 1420.00, '2023-12-08 11:13:39', '2023-12-08 11:13:39'),
(22, 36, 151, 1920.00, '2023-12-14 10:37:10', '2023-12-14 10:37:10'),
(23, 36, 229, 2400.00, '2023-12-14 11:25:11', '2023-12-14 11:25:11'),
(26, 35, 71, 592.00, '2023-12-15 20:00:43', '2023-12-15 20:00:43'),
(27, 35, 78, 1100.00, '2023-12-15 20:30:19', '2023-12-15 20:30:19'),
(28, 3, 57, 5000.00, '2023-12-15 20:52:27', '2023-12-15 20:52:27');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `wallet_id` bigint(20) UNSIGNED NOT NULL,
  `amount` double(8,2) NOT NULL,
  `status` enum('approved','declined','pending') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdrawals`
--

INSERT INTO `withdrawals` (`id`, `user_id`, `wallet_id`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(14, 32, 11, 1272.00, 'approved', '2023-11-27 15:37:39', '2023-11-27 15:38:30'),
(15, 36, 12, 1272.00, 'approved', '2023-12-05 09:40:03', '2023-12-05 09:40:48'),
(16, 35, 13, 58.00, 'approved', '2023-12-05 12:24:54', '2023-12-05 12:34:55'),
(17, 35, 13, 78.00, 'approved', '2023-12-07 13:47:16', '2023-12-07 13:52:47'),
(18, 35, 13, 157.00, 'approved', '2023-12-07 14:38:48', '2023-12-07 14:47:12'),
(19, 36, 12, 2170.00, 'approved', '2023-12-14 11:46:41', '2023-12-14 11:47:09'),
(20, 35, 13, 327.00, 'approved', '2023-12-15 18:52:37', '2023-12-15 19:00:05'),
(21, 35, 13, 118.00, 'approved', '2023-12-15 19:30:10', '2023-12-15 19:38:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deposits_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_user_id_foreign` (`user_id`);

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
-- Indexes for table `payment_infos`
--
ALTER TABLE `payment_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

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
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_tier_id_foreign` (`tier_id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_reviews_product_id_foreign` (`product_id`),
  ADD KEY `product_reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiers`
--
ALTER TABLE `tiers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_user_id_foreign` (`user_id`),
  ADD KEY `users_tier_id_foreign` (`tier_id`);

--
-- Indexes for table `user_payments`
--
ALTER TABLE `user_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_payments_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_products`
--
ALTER TABLE `user_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_products_user_id_foreign` (`user_id`),
  ADD KEY `user_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `withdrawals_user_id_foreign` (`user_id`),
  ADD KEY `withdrawals_wallet_id_foreign` (`wallet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `payment_infos`
--
ALTER TABLE `payment_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=267;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1012;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tiers`
--
ALTER TABLE `tiers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user_payments`
--
ALTER TABLE `user_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_products`
--
ALTER TABLE `user_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `deposits`
--
ALTER TABLE `deposits`
  ADD CONSTRAINT `deposits_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `product_tier_id_foreign` FOREIGN KEY (`tier_id`) REFERENCES `tiers` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD CONSTRAINT `product_reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_tier_id_foreign` FOREIGN KEY (`tier_id`) REFERENCES `tiers` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `user_payments`
--
ALTER TABLE `user_payments`
  ADD CONSTRAINT `user_payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_products`
--
ALTER TABLE `user_products`
  ADD CONSTRAINT `user_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD CONSTRAINT `withdrawals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `withdrawals_wallet_id_foreign` FOREIGN KEY (`wallet_id`) REFERENCES `user_payments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
