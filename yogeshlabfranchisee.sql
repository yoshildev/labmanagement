-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 29, 2023 at 06:38 AM
-- Server version: 8.0.27
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yogeshlabfranchisee`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_billing_categories`
--

DROP TABLE IF EXISTS `account_billing_categories`;
CREATE TABLE IF NOT EXISTS `account_billing_categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_billing_categories`
--

INSERT INTO `account_billing_categories` (`id`, `code`, `name`, `created_at`, `updated_at`) VALUES
(1, 'TEST', 'TEST', '2023-08-01 10:51:14', '2023-08-01 10:51:14');

-- --------------------------------------------------------

--
-- Table structure for table `account_billing_vendors`
--

DROP TABLE IF EXISTS `account_billing_vendors`;
CREATE TABLE IF NOT EXISTS `account_billing_vendors` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_billing_category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `account_billing_vendors_account_billing_category_id_foreign` (`account_billing_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_billing_vendors`
--

INSERT INTO `account_billing_vendors` (`id`, `code`, `name`, `account_billing_category_id`, `created_at`, `updated_at`) VALUES
(1, 'testy', 'testy', 1, '2023-08-01 11:44:20', '2023-08-01 11:44:20'),
(2, 'TESTr', 'TEST', 1, '2023-08-01 11:48:23', '2023-08-01 11:48:23');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('male','female','other') COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialization` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remark` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `franchiseeId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `franchisees`
--

DROP TABLE IF EXISTS `franchisees`;
CREATE TABLE IF NOT EXISTS `franchisees` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clinic_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `credits` bigint NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `owner_id` bigint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `franchisees`
--

INSERT INTO `franchisees` (`id`, `first_name`, `last_name`, `clinic_name`, `email`, `mobile`, `username`, `password`, `pincode`, `state_id`, `city_id`, `address`, `date`, `credits`, `status`, `owner_id`, `created_at`, `updated_at`) VALUES
(1, 'david', 'cam', 'davidcamclinic', 'davidcam@gmail.com', '7300615744', 'davidcam', '$2y$10$Yv992KXJCrBNrdYZPovvm.Vp9apzmkAeRPGUizB2C4J0OszAxOQHi', '282007', '44', '23', 'india', '2023-08-28', 0, 1, 0, '2023-08-28 08:08:45', '2023-08-28 08:08:45');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_materials`
--

DROP TABLE IF EXISTS `inventory_materials`;
CREATE TABLE IF NOT EXISTS `inventory_materials` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inventory_material_category_id` bigint UNSIGNED NOT NULL,
  `price` int NOT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `inventory_materials_inventory_material_category_id_foreign` (`inventory_material_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventory_materials`
--

INSERT INTO `inventory_materials` (`id`, `name`, `inventory_material_category_id`, `price`, `remarks`, `created_at`, `updated_at`) VALUES
(2, 'TEST', 2, 233, 'ASDF', '2023-07-29 11:30:58', '2023-07-29 11:30:58');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_material_categories`
--

DROP TABLE IF EXISTS `inventory_material_categories`;
CREATE TABLE IF NOT EXISTS `inventory_material_categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventory_material_categories`
--

INSERT INTO `inventory_material_categories` (`id`, `code`, `name`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', '2023-07-29 11:15:10', '2023-07-29 11:15:10'),
(2, 'TEST2', 'TEST2', '2023-07-29 11:23:06', '2023-07-29 11:23:06'),
(4, 'TESTTT', 'TESTT', '2023-07-30 03:46:52', '2023-07-30 03:46:52');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_stock_entries`
--

DROP TABLE IF EXISTS `inventory_stock_entries`;
CREATE TABLE IF NOT EXISTS `inventory_stock_entries` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `inventory_warehouse_id` bigint UNSIGNED NOT NULL,
  `entry_date` date NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `inventory_stock_entries_inventory_warehouse_id_foreign` (`inventory_warehouse_id`),
  KEY `inventory_stock_entries_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventory_stock_entry_items`
--

DROP TABLE IF EXISTS `inventory_stock_entry_items`;
CREATE TABLE IF NOT EXISTS `inventory_stock_entry_items` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `inventory_material_id` bigint UNSIGNED NOT NULL,
  `quantity` int NOT NULL,
  `price` int NOT NULL DEFAULT '0',
  `inventory_stock_entry_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `inventory_stock_entry_items_inventory_material_id_foreign` (`inventory_material_id`),
  KEY `inventory_stock_entry_id_foreign` (`inventory_stock_entry_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventory_warehouses`
--

DROP TABLE IF EXISTS `inventory_warehouses`;
CREATE TABLE IF NOT EXISTS `inventory_warehouses` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submission` date NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventory_warehouses`
--

INSERT INTO `inventory_warehouses` (`id`, `code`, `name`, `location`, `address`, `submission`, `status`, `created_at`, `updated_at`) VALUES
(1, 'tes', 'teste', NULL, NULL, '2023-07-30', 0, '2023-07-29 11:59:16', '2023-07-31 08:28:53'),
(3, 'testt', 'asdf', NULL, NULL, '2023-07-28', 0, '2023-07-29 12:00:20', '2023-07-29 12:00:20');

-- --------------------------------------------------------

--
-- Table structure for table `material_categories`
--

DROP TABLE IF EXISTS `material_categories`;
CREATE TABLE IF NOT EXISTS `material_categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `material_categories`
--

INSERT INTO `material_categories` (`id`, `category_name`, `category_code`, `deleted_at`, `created_at`, `updated_at`) VALUES
(5, 'Trouble', 'ASDF', NULL, '2023-07-10 04:18:39', '2023-07-10 04:18:39'),
(6, 'TTTTgg', 'TTTTT', NULL, '2023-07-10 04:19:02', '2023-07-25 13:08:52'),
(7, 'ASDF', 'ASDFFFFFF', NULL, '2023-07-10 06:08:51', '2023-07-26 23:52:10'),
(18, 'NothignGGFFF', 'NJFFG', NULL, '2023-07-10 23:23:00', '2023-07-30 03:51:19'),
(20, 'asdf', 'ASFD', NULL, '2023-07-25 11:21:07', '2023-07-25 11:21:07'),
(22, 'asdfasdf', 'ASDFSAFDASFD', NULL, '2023-07-25 11:21:36', '2023-07-25 11:21:36'),
(23, 'asdfasdf', 'ASDFASDF', NULL, '2023-07-25 11:21:39', '2023-07-25 11:21:39'),
(24, 'asdf', 'ASDFASDFASDFASDF', NULL, '2023-07-25 11:43:17', '2023-07-25 11:43:17'),
(25, 'asdfasdfa', 'SDFASDFASDFASDFASDF', NULL, '2023-07-25 11:43:45', '2023-07-25 11:43:45'),
(26, 'asdf', 'ASDFFASFASDF', NULL, '2023-07-25 13:17:25', '2023-07-25 13:17:25'),
(27, 'ASDF', 'ASDFSS', NULL, '2023-07-25 13:18:15', '2023-07-25 13:18:15'),
(28, 'asdfadf', 'ASDFASDFFFSADF', NULL, '2023-07-25 13:18:32', '2023-07-25 13:18:32'),
(29, 'TEST', 'TEST', NULL, '2023-07-30 03:46:17', '2023-07-30 03:46:17'),
(30, 'azdsc', 'AZSDC', NULL, '2023-08-06 03:45:50', '2023-08-06 03:45:50');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2023_07_05_094747_create_permission_tables', 2),
(3, '2023_07_06_072841_create_suppliers_table', 3),
(4, '2023_07_06_073343_create_inventory_warehouses_table', 4),
(5, '2023_07_06_073403_create_stock_warehouses_table', 5),
(6, '2023_07_06_064823_create_material_categories_table', 6),
(7, '2023_07_06_073815_create_inventory_material_categories_table', 7),
(8, '2023_07_06_073329_create_inventory_materials_table', 8),
(9, '2023_07_06_074749_create_stock_reagents_table', 9),
(10, '2023_07_06_073441_create_stock_entries_table', 10),
(11, '2023_07_06_073456_create_inventory_stock_entries_table', 11),
(12, '2023_07_06_085855_create_inventory_stock_entry_items_table', 12),
(13, '2023_07_31_173509_create_account_billing_categories_table', 13),
(15, '2023_07_31_173520_create_account_billing_vendors_table', 14),
(16, '2023_07_06_091205_create_test_samples_table', 15),
(17, '2023_08_02_180911_create_tests_table', 16),
(18, '2023_08_04_183208_create_test_samples_table', 17),
(19, '2023_08_06_160512_create_franchisee_table', 18),
(20, '2023_08_06_153254_create_test_profiles_table', 19),
(21, '2023_08_10_074613_create_test_profile_tests_table', 20),
(22, '2014_10_12_100000_create_password_reset_tokens_table', 21),
(23, '2019_08_19_000000_create_failed_jobs_table', 21),
(24, '2019_12_14_000001_create_personal_access_tokens_table', 21),
(26, '2023_08_28_131102_create_doctors_table', 22);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  `team_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`team_id`,`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  KEY `model_has_permissions_permission_id_foreign` (`permission_id`),
  KEY `model_has_permissions_team_foreign_key_index` (`team_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  `team_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`team_id`,`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  KEY `model_has_roles_role_id_foreign` (`role_id`),
  KEY `model_has_roles_team_foreign_key_index` (`team_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`, `team_id`) VALUES
(1, 'App\\Models\\User', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'stock.materials', 'web', '2023-07-06 04:26:31', '2023-07-06 04:26:31'),
(2, 'stock.location', 'web', '2023-07-06 04:26:31', '2023-07-06 04:26:31'),
(3, 'stock.alert', 'web', '2023-07-06 04:26:31', '2023-07-06 04:26:31'),
(4, 'stock.entry', 'web', '2023-07-06 04:26:31', '2023-07-06 04:26:31'),
(5, 'stock.list', 'web', '2023-07-06 04:26:31', '2023-07-06 04:26:31'),
(6, 'stock.barcode', 'web', '2023-07-06 04:26:31', '2023-07-06 04:26:31'),
(7, 'stock.dispose', 'web', '2023-07-06 04:26:31', '2023-07-06 04:26:31'),
(8, 'stock.inventory', 'web', '2023-07-06 04:26:31', '2023-07-06 04:26:31'),
(9, 'stock.expiry', 'web', '2023-07-06 04:26:31', '2023-07-06 04:26:31'),
(10, 'franchise.add', 'web', '2023-07-06 04:26:31', '2023-07-06 04:26:31'),
(11, 'franchise.list', 'web', '2023-07-06 04:26:31', '2023-07-06 04:26:31'),
(12, 'franchise.assign_credits', 'web', '2023-07-06 04:26:31', '2023-07-06 04:26:31'),
(13, 'franchise.past_transactions', 'web', '2023-07-06 04:26:31', '2023-07-06 04:26:31'),
(14, 'franchise.master_ledger', 'web', '2023-07-06 04:26:31', '2023-07-06 04:26:31'),
(15, 'franchise.master_billing', 'web', '2023-07-06 04:26:31', '2023-07-06 04:26:31'),
(16, 'franchise.lock_accounts', 'web', '2023-07-06 04:26:31', '2023-07-06 04:26:31'),
(17, 'franchise.excel_ledger', 'web', '2023-07-06 04:26:31', '2023-07-06 04:26:31'),
(18, 'test.master', 'web', '2023-07-06 04:26:31', '2023-07-06 04:26:31'),
(19, 'test.list', 'web', '2023-07-06 04:26:31', '2023-07-06 04:26:31'),
(20, 'test.pricing', 'web', '2023-07-06 04:26:31', '2023-07-06 04:26:31'),
(21, 'test.bulk_pricing', 'web', '2023-07-06 04:26:31', '2023-07-06 04:26:31'),
(22, 'test.profile_list', 'web', '2023-07-06 04:26:31', '2023-07-06 04:26:31'),
(23, 'report.add', 'web', '2023-07-06 04:26:31', '2023-07-06 04:26:31'),
(24, 'report.list', 'web', '2023-07-06 04:26:31', '2023-07-06 04:26:31'),
(25, 'report.download', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(26, 'report.billing_list', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(27, 'report.cancellation_logs', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(28, 'report.analytics', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(29, 'inventory.materials', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(30, 'inventory.warehouse', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(31, 'inventory.add_stock', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(32, 'inventory.stock_list', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(33, 'inventory.supply_records', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(34, 'inventory.sub_franchise', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(35, 'inventory.requested', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(36, 'lab.add', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(37, 'lab.list', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(38, 'lab.assign_credits', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(39, 'lab.past_transactions', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(40, 'lab.master_ledger', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(41, 'lab.admin_employee', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(42, 'accounts.master', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(43, 'accounts.new_bill', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(44, 'accounts.billing_list', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(45, 'accounts.make_payment', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(46, 'accounts.payment_list', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(47, 'accounts.view_ledger', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(48, 'staff.add', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(49, 'staff.list', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(50, 'staff.department', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(51, 'staff.my_department', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(52, 'staff.pending', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(53, 'staff.test_pending', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(54, 'staff.test_complete', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(55, 'staff.lis_pending', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(56, 'staff.list_list', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(57, 'staff.assign_test', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(58, 'couriers.couriers', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(59, 'couriers.receive_sample', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(60, 'couriers.sample_in_queue', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(61, 'booking.pending', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(62, 'booking.pending_lis', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(63, 'booking.lis_logs', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(64, 'booking.clinical', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(65, 'booking.barcodes', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(66, 'booking.test_addition', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(67, 'booking.completed_list', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(68, 'booking.cancellation_list', 'web', '2023-07-06 04:26:32', '2023-07-06 04:26:32'),
(69, 'booking.test_addition_list', 'web', '2023-07-06 04:26:33', '2023-07-06 04:26:33'),
(70, 'booking.all_report_status', 'web', '2023-07-06 04:26:33', '2023-07-06 04:26:33'),
(71, 'booking.search_booking', 'web', '2023-07-06 04:26:33', '2023-07-06 04:26:33'),
(72, 'booking.master_booking', 'web', '2023-07-06 04:26:33', '2023-07-06 04:26:33'),
(73, 'booking.test_booking', 'web', '2023-07-06 04:26:33', '2023-07-06 04:26:33'),
(74, 'access.ca_access', 'web', '2023-07-06 04:26:33', '2023-07-06 04:26:33');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `team_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_team_id_name_guard_name_unique` (`team_id`,`name`,`guard_name`),
  KEY `roles_team_foreign_key_index` (`team_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `team_id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Super Admin', 'web', '2023-07-06 03:39:46', '2023-07-06 03:39:46');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(74, 1);

-- --------------------------------------------------------

--
-- Table structure for table `samples`
--

DROP TABLE IF EXISTS `samples`;
CREATE TABLE IF NOT EXISTS `samples` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `samples`
--

INSERT INTO `samples` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', '2023-08-02 12:22:24', '2023-08-02 12:22:24'),
(2, 'test', 'test', '2023-08-02 12:23:43', '2023-08-02 12:23:43'),
(3, 'asdf', 'asdf', '2023-08-02 12:24:00', '2023-08-02 12:24:00'),
(5, 'Test Is Here', NULL, '2023-08-02 12:29:21', '2023-08-02 12:29:21');

-- --------------------------------------------------------

--
-- Table structure for table `stock_entries`
--

DROP TABLE IF EXISTS `stock_entries`;
CREATE TABLE IF NOT EXISTS `stock_entries` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `batch_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_warehouse_id` bigint UNSIGNED NOT NULL,
  `supplier_id` bigint UNSIGNED NOT NULL,
  `stock_reagent_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `stock_entries_stock_warehouse_id_foreign` (`stock_warehouse_id`),
  KEY `stock_entries_supplier_id_foreign` (`supplier_id`),
  KEY `stock_entries_stock_reagent_id_foreign` (`stock_reagent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stock_reagents`
--

DROP TABLE IF EXISTS `stock_reagents`;
CREATE TABLE IF NOT EXISTS `stock_reagents` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reagent_category` bigint UNSIGNED NOT NULL,
  `low_stock_reminder_quantity` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `stock_reagents_reagent_category_foreign` (`reagent_category`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stock_reagents`
--

INSERT INTO `stock_reagents` (`id`, `name`, `description`, `reagent_category`, `low_stock_reminder_quantity`, `created_at`, `updated_at`) VALUES
(2, 'asdf', 'asdf', 20, 22, '2023-07-26 13:34:50', '2023-07-26 13:34:50');

-- --------------------------------------------------------

--
-- Table structure for table `stock_warehouses`
--

DROP TABLE IF EXISTS `stock_warehouses`;
CREATE TABLE IF NOT EXISTS `stock_warehouses` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stock_warehouses`
--

INSERT INTO `stock_warehouses` (`id`, `code`, `name`, `location`, `created_at`, `updated_at`) VALUES
(1, 'test', 'testttt', 'test', '2023-07-26 14:00:48', '2023-07-26 14:04:13'),
(2, 'TESTT', 'test', 'test', '2023-07-26 14:02:15', '2023-07-26 14:02:15');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE IF NOT EXISTS `suppliers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `location`, `description`, `created_at`, `updated_at`) VALUES
(1, 'TEST', 'TEST', 'TESTT', '2023-07-26 14:14:06', '2023-07-26 14:14:06'),
(2, 'TEST', 'TEST', 'TEST', '2023-07-26 14:17:42', '2023-07-26 14:17:42'),
(4, 'test2', 'test2', 'test2', '2023-07-26 23:57:00', '2023-07-26 23:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

DROP TABLE IF EXISTS `tests`;
CREATE TABLE IF NOT EXISTS `tests` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mrp` int NOT NULL,
  `methodology` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_type` enum('2','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tat_time` int NOT NULL COMMENT 'in minutes',
  `cost_price` int NOT NULL DEFAULT '0',
  `letterpad` int NOT NULL DEFAULT '0',
  `sample_vial` int NOT NULL DEFAULT '0',
  `envelope` int NOT NULL DEFAULT '0',
  `expense_percent` int NOT NULL DEFAULT '0',
  `profit_percent` int NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `name`, `mrp`, `methodology`, `description`, `signature`, `test_type`, `tat_time`, `cost_price`, `letterpad`, `sample_vial`, `envelope`, `expense_percent`, `profit_percent`, `date`, `created_at`, `updated_at`) VALUES
(1, 'asdf', 12, 'asdf', 'asdf', NULL, '2', 12, 23, 23, 23, 32, 23, 23, '2023-08-31', '2023-08-06 09:53:07', '2023-08-06 09:53:07');

-- --------------------------------------------------------

--
-- Table structure for table `test_profiles`
--

DROP TABLE IF EXISTS `test_profiles`;
CREATE TABLE IF NOT EXISTS `test_profiles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `test_id` bigint UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `test_profiles_test_id_foreign` (`test_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_profiles`
--

INSERT INTO `test_profiles` (`id`, `test_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'test', '2023-08-10 03:35:04', '2023-08-10 03:35:04'),
(2, 1, 'adfasdf', '2023-08-10 03:35:10', '2023-08-10 03:35:10');

-- --------------------------------------------------------

--
-- Table structure for table `test_profile_tests`
--

DROP TABLE IF EXISTS `test_profile_tests`;
CREATE TABLE IF NOT EXISTS `test_profile_tests` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `test_profile_id` bigint UNSIGNED NOT NULL,
  `test_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `test_profile_tests_test_profile_id_foreign` (`test_profile_id`),
  KEY `test_profile_tests_test_id_foreign` (`test_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_profile_tests`
--

INSERT INTO `test_profile_tests` (`id`, `test_profile_id`, `test_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-08-10 05:37:23', '2023-08-10 05:37:23');

-- --------------------------------------------------------

--
-- Table structure for table `test_samples`
--

DROP TABLE IF EXISTS `test_samples`;
CREATE TABLE IF NOT EXISTS `test_samples` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `test_id` bigint UNSIGNED NOT NULL,
  `sample_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `test_samples_test_id_foreign` (`test_id`),
  KEY `test_samples_sample_id_foreign` (`sample_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_samples`
--

INSERT INTO `test_samples` (`id`, `test_id`, `sample_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2023-08-06 09:53:07', '2023-08-06 09:53:07'),
(2, 1, 5, '2023-08-06 09:53:07', '2023-08-06 09:53:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Akash', 'akash@gmail.com', NULL, '$2y$10$xTLoKM3CgU7Wa2KxPkUIh.tBeelVd983n3o2ToKaCaF6xbFRUWWbW', NULL, '2023-07-06 03:39:46', '2023-07-06 03:39:46');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account_billing_vendors`
--
ALTER TABLE `account_billing_vendors`
  ADD CONSTRAINT `account_billing_vendors_account_billing_category_id_foreign` FOREIGN KEY (`account_billing_category_id`) REFERENCES `account_billing_categories` (`id`);

--
-- Constraints for table `inventory_materials`
--
ALTER TABLE `inventory_materials`
  ADD CONSTRAINT `inventory_materials_inventory_material_category_id_foreign` FOREIGN KEY (`inventory_material_category_id`) REFERENCES `inventory_material_categories` (`id`);

--
-- Constraints for table `inventory_stock_entries`
--
ALTER TABLE `inventory_stock_entries`
  ADD CONSTRAINT `inventory_stock_entries_inventory_warehouse_id_foreign` FOREIGN KEY (`inventory_warehouse_id`) REFERENCES `inventory_warehouses` (`id`),
  ADD CONSTRAINT `inventory_stock_entries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `inventory_stock_entry_items`
--
ALTER TABLE `inventory_stock_entry_items`
  ADD CONSTRAINT `inventory_stock_entry_id_foreign` FOREIGN KEY (`inventory_stock_entry_id`) REFERENCES `inventory_stock_entries` (`id`),
  ADD CONSTRAINT `inventory_stock_entry_items_inventory_material_id_foreign` FOREIGN KEY (`inventory_material_id`) REFERENCES `inventory_materials` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `stock_entries`
--
ALTER TABLE `stock_entries`
  ADD CONSTRAINT `stock_entries_stock_reagent_id_foreign` FOREIGN KEY (`stock_reagent_id`) REFERENCES `stock_reagents` (`id`),
  ADD CONSTRAINT `stock_entries_stock_warehouse_id_foreign` FOREIGN KEY (`stock_warehouse_id`) REFERENCES `stock_warehouses` (`id`),
  ADD CONSTRAINT `stock_entries_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`);

--
-- Constraints for table `stock_reagents`
--
ALTER TABLE `stock_reagents`
  ADD CONSTRAINT `stock_reagents_reagent_category_foreign` FOREIGN KEY (`reagent_category`) REFERENCES `material_categories` (`id`);

--
-- Constraints for table `test_profiles`
--
ALTER TABLE `test_profiles`
  ADD CONSTRAINT `test_profiles_test_id_foreign` FOREIGN KEY (`test_id`) REFERENCES `tests` (`id`);

--
-- Constraints for table `test_profile_tests`
--
ALTER TABLE `test_profile_tests`
  ADD CONSTRAINT `test_profile_tests_test_id_foreign` FOREIGN KEY (`test_id`) REFERENCES `tests` (`id`),
  ADD CONSTRAINT `test_profile_tests_test_profile_id_foreign` FOREIGN KEY (`test_profile_id`) REFERENCES `test_profiles` (`id`);

--
-- Constraints for table `test_samples`
--
ALTER TABLE `test_samples`
  ADD CONSTRAINT `test_samples_sample_id_foreign` FOREIGN KEY (`sample_id`) REFERENCES `samples` (`id`),
  ADD CONSTRAINT `test_samples_test_id_foreign` FOREIGN KEY (`test_id`) REFERENCES `tests` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
