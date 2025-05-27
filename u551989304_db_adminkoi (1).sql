-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 27, 2025 at 02:32 AM
-- Server version: 10.11.10-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u551989304_db_adminkoi`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_type_id` int(10) UNSIGNED NOT NULL,
  `category_type_name` varchar(35) NOT NULL,
  `notes` text NOT NULL,
  `flag_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `full_name`, `phone_no`) VALUES
(1, 'zidan pahrudin', '8777261716127'),
(2, 'mus', '877662616161'),
(3, '', ''),
(4, 'mus', '877662616161'),
(5, '', ''),
(6, 'pieter karunia deo', '082257474889');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_code` varchar(50) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT '2025-05-19 02:06:38',
  `updated_at` datetime NOT NULL DEFAULT '2025-05-19 02:06:38'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `item_name`, `item_code`, `unit_id`, `created_at`, `updated_at`) VALUES
(1, 'Kuah Miso 10ml', 'AY-001', 4, '2025-05-19 02:06:38', '2025-05-19 02:06:38'),
(2, 'Pokcoy', 'BWG-001', 3, '2025-05-19 02:06:38', '2025-05-19 02:06:38'),
(4, 'Bawang Putih', '01JVNY', 3, '2025-05-19 02:06:38', '2025-05-19 02:06:38'),
(5, 'Bawang Merah', '01JVNYYVGN', 3, '2025-05-19 02:06:38', '2025-05-19 02:06:38'),
(7, 'Sirloin 1 (105gr)', '01JVRWM75TEXT8T84MS4MA5D6C', 3, '2025-05-19 02:06:38', '2025-05-19 02:06:38'),
(8, 'Wortel 10', '01JVRWMWVFBH24NEMVZ9DT8SK2', 3, '2025-05-19 02:06:38', '2025-05-19 02:06:38'),
(9, 'Tenderloin 1 (105gr)', '01JVRWNATMAP1PETBKH0Q0G4G0', 3, '2025-05-19 02:06:38', '2025-05-19 02:06:38'),
(10, 'Egg', '01JVVZBJYJ0BT1JW7XHBXJ37KT', 6, '2025-05-19 02:06:38', '2025-05-19 02:06:38'),
(11, 'Puding', '01JVVZBVC3DKB6J5NNJP01Y2AT', 6, '2025-05-19 02:06:38', '2025-05-19 02:06:38'),
(12, 'Chicken (150gr)', '01JVVZD5W3M2NMQXK23HDQ4E2F', 3, '2025-05-19 02:06:38', '2025-05-19 02:06:38'),
(13, 'Rice 50gr', '01JVW01KCYQV0TN249KF6XJKPR', 3, '2025-05-19 02:06:38', '2025-05-19 02:06:38'),
(14, 'Kaldu (20gr)', '01JVW060N36TSZYSRJEAQQ7FM8', 3, '2025-05-19 02:06:38', '2025-05-19 02:06:38'),
(15, 'Slicebeef 1 (80gr)', '01JVW0CTMS56S3CZJP6KVBC9AW', 3, '2025-05-19 02:06:38', '2025-05-19 02:06:38'),
(16, 'Squid 1/2 (55gr)', '01JVW0D902FXWWACD6VZ5GT9X8', 3, '2025-05-19 02:06:38', '2025-05-19 02:06:38'),
(17, 'Es Batu 100gr', '01JVW0E34WDK8W4DCQBR7PT9CK', 3, '2025-05-19 02:06:38', '2025-05-19 02:06:38'),
(18, 'Sambal Matah', '01JVW0EC8175XT0M8JW7SKAATN', 6, '2025-05-19 02:06:38', '2025-05-19 02:06:38');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` char(26) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `menu_group` char(26) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `slug`, `description`, `icon`, `url`, `menu_group`, `order`, `is_active`, `created_at`, `updated_at`) VALUES
('01JPZ7E9J2Y8E7YG1G3BQAC9TK', 'Dashboard', 'dashboard', 'Dashboard', 'fas fa-tachometer-alt', 'dashboard', 'dashboard', 1, 1, '2025-03-22 15:27:14', '2025-03-22 15:27:14'),
('01JPZ7E9J2Y8E7YG1G3BQAC9TM', 'User', 'user', 'User', 'fas fa-table', 'master/user', 'master', 2, 1, '2025-03-22 15:27:14', '2025-03-22 15:27:14'),
('01JPZ7E9J2Y8E7YG1G3BQAC9TN', 'Role', 'role', 'Role', 'fas fa-table', 'master/role', 'master', 3, 1, '2025-03-22 15:27:14', '2025-03-22 15:27:14'),
('01JPZ7E9J2Y8E7YG1G3BQAC9TP', 'Menu', 'menu', 'Menu', 'fas fa-bars', 'configuration/menu', 'configuration', 1, 0, '2025-03-22 15:27:14', '2025-03-22 15:27:14'),
('01JPZ7E9J2Y8E7YG1G3BQAC9TQ', 'Setting', 'setting', 'Setting', 'fas fa-cogs', 'configuration/setting', 'configuration', 2, 0, '2025-03-22 15:27:14', '2025-03-22 15:27:14'),
('01JQ10XN5K4SZ7EGJ7WWRPS0FY', 'Incoming Stock', 'incomin_stock', 'stock', 'fas fa-database', 'stock/incomin_stock', 'manajemen stock', 1, 0, '2025-03-22 15:27:14', '2025-03-22 15:27:14'),
('01JQ10SRJMJ7C225Y6JWDQMV7X', 'Order', 'order', 'order', 'fas fa-file-invoice', 'order', 'transaction', 1, 1, '2025-03-22 15:27:14', '2025-03-22 15:27:14'),
('01JQ4A4XQ07K9Z62SD62ABNRBC', 'Outgoing Stock', 'outgoing_stock', 'stock', 'fas fa-database', 'stock/outgoing_stock', 'manajemen stock', 2, 0, '2025-03-22 15:27:14', '2025-03-22 15:27:14'),
('01JQ4AA9WYG6V264Q7E5P7K2YY', 'Report Invoice', 'report_invoice', 'invoice', 'fas fa-file', 'report/invoice', 'report', 1, 1, '2025-03-22 15:27:14', '2025-03-22 15:27:14'),
('01JQ4AANCPG61Y607FGXYS9AJX', 'Report Stock', 'report_stock', 'stock', 'fas fa-file', 'report/stock', 'report', 2, 1, '2025-03-22 15:27:14', '2025-03-22 15:27:14'),
('01JQ4BW3BZ4305TMPG606D8BXT', 'Product', 'product', 'product', 'fas fa-table', 'master/product', 'master', 3, 1, '2025-03-22 15:27:14', '2025-03-22 15:27:14'),
('01JRJW5W01JMAM411G3H1E50JJ', 'Wilayah', 'wilayah', 'wilayah', 'fas fa-table', 'master/wilayah', 'master', 4, 1, '2025-03-22 15:27:14', '2025-03-22 15:27:14'),
('01JPZ7E9J2Y8E7YG1G3BQAC9TK', 'Promo Banner', 'promo_banner', 'Promo Banner', 'fas fa-ad', 'master/promo_banner', 'marketing', 1, 1, '2025-03-22 15:27:14', '2025-03-22 15:27:14'),
('01JPZ7E9J2Y8E7YG1G3BQAC9TM', 'Menu Master', 'menu_master', 'Menu Master', 'fas fa-bars', 'master/menu_master', 'menu', 2, 1, '2025-03-22 15:27:14', '2025-03-22 15:27:14'),
('01JPZ7E9J2Y8E7YG1G3BQAC9TN', 'Menu Extras', 'menu_extras', 'Menu Extras', 'fas fa-cogs', 'master/menu_extras', 'menu', 3, 1, '2025-03-22 15:27:14', '2025-03-22 15:27:14'),
('01JPZ7E9J2Y8E7YG1G3BQAC9TP', 'Menu Packages', 'menu_packages', 'Menu Packages', 'fas fa-cogs', 'master/menu_packages', 'menu', 4, 1, '2025-03-22 15:27:14', '2025-03-22 15:27:14'),
('01JPZ7E9J2Y8E7YG1G3BQAC9TQ', 'Menu Groups', 'menu_groups', 'Menu Groups', 'fas fa-sitemap', 'master/menu_groups', 'menu', 5, 1, '2025-03-22 15:27:14', '2025-03-22 15:27:14'),
('01JQ10XN5K4SZ7EGJ7WWRPS0FY', 'Menu Items in Group', 'menu_items_in_group', 'Menu Items in Group', 'fas fa-table', 'master/menu_items_in_group', 'menu', 6, 1, '2025-03-22 15:27:14', '2025-03-22 15:27:14'),
('01JQ10SRJMJ7C225Y6JWDQMV7X', 'Menu Master Icons', 'menu_master_icons', 'Menu Master Icons', 'fas fa-icons', 'master/menu_master_icons', 'menu', 7, 1, '2025-03-22 15:27:14', '2025-03-22 15:27:14'),
('01JQ4A4XQ07K9Z62SD62ABNRBC', 'Menu Master Tags', 'menu_master_tags', 'Menu Master Tags', 'fas fa-tags', 'master/menu_master_tags', 'menu', 8, 1, '2025-03-22 15:27:14', '2025-03-22 15:27:14'),
('01JQ4AA9WYG6V264Q7E5P7K2YY', 'Related Menu Master', 'related_menu_master', 'Related Menu Master', 'fas fa-link', 'master/related_menu_master', 'menu', 9, 1, '2025-03-22 15:27:14', '2025-03-22 15:27:14'),
('01JV265ZM61C6NQPP3QWC10EZE', 'Customer', 'customers', 'Customer list', 'fas fa-users ', 'customers', 'customers', 1, 1, '2025-03-22 15:27:14', '2025-03-22 15:27:14'),
('01JVEH3GSESD2Z2XJPT7YGA3VA', 'Slider', 'slider', 'Slider', 'fas fa-ad', 'master/slider', 'marketing', 2, 1, '2025-03-22 15:27:14', '2025-03-22 15:27:14'),
('01JVKM42JBBBG0XM3DDX8TC5SP', 'Menu Unit', 'unit', 'Unit', 'fas fa-table', 'master/unit', 'menu', 3, 1, '2025-03-22 15:27:14', '2025-03-22 15:27:14'),
('01JVKSMG893X9WK5H3P5PNA8AP', 'Menu Item', 'item', 'Item', 'fas fa-table', 'master/item', 'menu', 4, 1, '2025-03-22 15:27:14', '2025-03-22 15:27:14');

-- --------------------------------------------------------

--
-- Table structure for table `menu_extras`
--

CREATE TABLE `menu_extras` (
  `menu_extra_id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `extra_name` varchar(255) NOT NULL,
  `min_extra_qty` decimal(10,2) NOT NULL,
  `max_extra_qty` decimal(10,2) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `menu_group`
--

CREATE TABLE `menu_group` (
  `menu_group_id` int(10) UNSIGNED NOT NULL,
  `menu_group_name` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT 0,
  `min_qty` decimal(10,2) NOT NULL,
  `max_qty` decimal(10,2) NOT NULL,
  `notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `menu_group`
--

INSERT INTO `menu_group` (`menu_group_id`, `menu_group_name`, `order_id`, `min_qty`, `max_qty`, `notes`) VALUES
(3, 'Main Course', 1, 10.00, 100.00, NULL),
(4, 'Side Dishes', 2, 10.00, 100.00, NULL),
(5, 'Dessert', 3, 10.00, 100.00, NULL),
(6, 'Beverages', 4, 10.00, 100.00, NULL),
(7, 'Sayuran', 0, 0.00, 100.00, NULL),
(8, 'Base Dish', 0, 0.00, 100.00, NULL),
(9, 'Soup', 0, 0.00, 100.00, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(11) NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `item_id` int(11) NOT NULL,
  `qty` int(11) DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT '2025-05-19 09:52:34',
  `updated_at` datetime NOT NULL DEFAULT '2025-05-19 09:52:34'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `item_id`, `qty`, `created_at`, `updated_at`) VALUES
(2, 12, 1, 2, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(3, 12, 2, 3, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(4, 6, 1, 4, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(5, 6, 2, 10, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(6, 13, 1, 10, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(7, 13, 2, 20, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(8, 11, 1, 1, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(9, 11, 4, 1, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(10, 11, 5, 1, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(11, 14, 4, 1, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(12, 14, 5, 1, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(13, 2, 2, 1, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(15, 15, 4, 1, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(16, 15, 5, 1, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(17, 15, 10, 3, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(18, 15, 12, 1, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(19, 16, 4, 1, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(20, 16, 5, 1, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(21, 16, 10, 1, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(22, 16, 12, 1, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(25, 17, 4, 1, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(26, 17, 9, 1, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(27, 17, 10, 1, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(28, 18, 11, 1, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(29, 19, 13, 1, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(30, 20, 1, 1, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(31, 20, 4, 1, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(32, 20, 5, 1, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(33, 20, 10, 1, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(34, 20, 14, 1, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(35, 21, 18, 1, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(36, 22, 15, 1, '2025-05-19 09:52:34', '2025-05-19 09:52:34'),
(37, 23, 16, 1, '2025-05-19 09:52:34', '2025-05-19 09:52:34');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items_in_group`
--

CREATE TABLE `menu_items_in_group` (
  `item_id` int(10) UNSIGNED NOT NULL,
  `menu_group_id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `additional_price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `default_item` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `menu_items_in_group`
--

INSERT INTO `menu_items_in_group` (`item_id`, `menu_group_id`, `menu_id`, `additional_price`, `default_item`) VALUES
(3, 4, 16, 15000.00, 1),
(5, 4, 2, 0.00, 1),
(6, 3, 6, 0.00, 0),
(8, 3, 17, 0.00, 0),
(9, 4, 15, 15000.00, 0),
(10, 5, 18, 20000.00, 0),
(11, 8, 19, 8000.00, 0),
(13, 9, 20, 20000.00, 1),
(14, 7, 2, 11000.00, 0),
(15, 3, 23, 120000.00, 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu_master`
--

CREATE TABLE `menu_master` (
  `menu_id` int(10) UNSIGNED NOT NULL,
  `menu_code` varchar(255) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `menu_short_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text DEFAULT NULL,
  `flag_tax` tinyint(1) NOT NULL DEFAULT 0,
  `flag_other_tax` tinyint(1) NOT NULL DEFAULT 0,
  `flag_open_price` tinyint(1) NOT NULL DEFAULT 0,
  `print_zero_value` tinyint(1) NOT NULL DEFAULT 1,
  `theme_menu_on_pos` varchar(255) DEFAULT NULL,
  `sales_account` varchar(255) DEFAULT NULL,
  `cogs_account` varchar(255) DEFAULT NULL,
  `discount_account` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `menu_master`
--

INSERT INTO `menu_master` (`menu_id`, `menu_code`, `menu_name`, `menu_short_name`, `price`, `description`, `flag_tax`, `flag_other_tax`, `flag_open_price`, `print_zero_value`, `theme_menu_on_pos`, `sales_account`, `cogs_account`, `discount_account`) VALUES
(2, 'CTR-002', 'Pokcoy', '', 20000.00, '', 0, 0, 0, 1, NULL, NULL, NULL, NULL),
(6, 'CTR-003', 'Ayam Katsu', '', 30000.00, '', 0, 0, 0, 1, NULL, NULL, NULL, NULL),
(8, 'TEG001', 'Tauge', '', 7000.00, '', 0, 0, 0, 1, NULL, NULL, NULL, NULL),
(11, 'CTR-009', 'Chicken Teriyaki', '', 20000.00, 'test', 0, 0, 0, 1, NULL, NULL, NULL, NULL),
(12, 'CTR-010', 'Ayam Kecap', '', 200000.00, 'twst', 0, 0, 0, 1, NULL, NULL, NULL, NULL),
(13, 'CTR-091', 'Chicken Set Kecap', '', 70000.00, 'test', 0, 0, 0, 1, NULL, NULL, NULL, NULL),
(14, 'BF01', 'Beef Teriyaki', '', 120000.00, '', 0, 0, 0, 1, NULL, NULL, NULL, NULL),
(15, 'CHC', 'Chicken Eggroll', '', 25000.00, '', 0, 0, 0, 1, NULL, NULL, NULL, NULL),
(16, 'FCD', 'Fried Chicken Dumpling', '', 35000.00, '', 0, 0, 0, 1, NULL, NULL, NULL, NULL),
(17, 'SBF', 'Slice Beef Teriyaki', '', 95000.00, 'tes', 0, 0, 0, 1, NULL, NULL, NULL, NULL),
(18, 'TSP', 'Taro SIlky Puding', '', 15000.00, '', 0, 0, 0, 1, NULL, NULL, NULL, NULL),
(19, 'RIC', 'Rice', '', 8000.00, '', 0, 0, 0, 1, NULL, NULL, NULL, NULL),
(20, 'MS', 'Miso Soup', '', 20000.00, '', 0, 0, 0, 1, NULL, NULL, NULL, NULL),
(21, 'SM', 'Sambal Matah', '', 10000.00, '', 0, 0, 0, 1, NULL, NULL, NULL, NULL),
(22, 'PW', 'Premium Wagyu', '', 150000.00, '', 0, 0, 0, 1, NULL, NULL, NULL, NULL),
(23, 'ST', 'Seafood Tepanyaki', '', 120000.00, '', 0, 0, 0, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_master_icons`
--

CREATE TABLE `menu_master_icons` (
  `menu_icon_id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `menu_icon_name` varchar(255) NOT NULL,
  `menu_icon_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `menu_master_tags`
--

CREATE TABLE `menu_master_tags` (
  `menu_tag_id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `tag_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `menu_packages`
--

CREATE TABLE `menu_packages` (
  `package_id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `menu_image` varchar(255) DEFAULT NULL,
  `min_qty` decimal(10,2) NOT NULL,
  `max_qty` decimal(10,2) NOT NULL,
  `notes` text DEFAULT NULL,
  `flag_separate_print_package` tinyint(1) NOT NULL DEFAULT 0,
  `flag_separate_tax_calculation` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `menu_packages`
--

INSERT INTO `menu_packages` (`package_id`, `menu_id`, `package_name`, `menu_image`, `min_qty`, `max_qty`, `notes`, `flag_separate_print_package`, `flag_separate_tax_calculation`) VALUES
(24, 11, 'Chicken Teppanyaki ', 'https://orderkoigroup.com/koi-teppayanki/assets/uploads/menu/1747918745_22b5537c6858085b9656.png', 1.00, 100.00, '', 0, 0),
(25, 17, 'Slice Beef Set', 'https://orderkoigroup.com/koi-teppayanki/assets/uploads/menu/1747917813_c86a6f1639d168b3ec4b.png', 0.00, 250.00, '', 1, 1),
(26, 22, 'Premium Wagyu Set', 'https://orderkoigroup.com/koi-teppayanki/assets/uploads/menu/1747918469_bacd290672a9c0e1df81.png', 0.00, 150.00, '', 1, 1),
(27, 23, 'Seafood Tepanyaki', 'https://orderkoigroup.com/koi-teppayanki/assets/uploads/menu/1747918886_8cfa1a540d50ff200e9e.png', 1.00, 100.00, '', 1, 1),
(28, 22, 'Salmon Set', 'https://orderkoigroup.com/koi-teppayanki/assets/uploads/menu/1747919527_139d4a89ebcf796a083b.png', 1.00, 100.00, '', 1, 1),
(29, 23, 'Premium Mix Set', 'https://orderkoigroup.com/koi-teppayanki/assets/uploads/menu/1747919590_648be4b8a1190c6e31d9.png', 1.00, 100.00, '', 1, 1),
(30, 17, 'Slice Beef Set', 'https://orderkoigroup.com/koi-teppayanki/assets/uploads/menu/1747919643_035e97470042ad47161f.png', 1.00, 100.00, '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu_package_items`
--

CREATE TABLE `menu_package_items` (
  `package_item_id` int(11) NOT NULL,
  `package_id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `menu_package_items`
--

INSERT INTO `menu_package_items` (`package_item_id`, `package_id`, `item_id`) VALUES
(66, 25, 3),
(67, 25, 8),
(68, 25, 9),
(69, 25, 10),
(70, 25, 11),
(71, 25, 13),
(72, 26, 3),
(73, 26, 5),
(74, 26, 6),
(75, 26, 8),
(76, 26, 9),
(77, 24, 5),
(78, 24, 6),
(79, 24, 8),
(80, 24, 9),
(81, 24, 10),
(82, 24, 11),
(83, 24, 13),
(84, 27, 3),
(85, 27, 9),
(86, 27, 10),
(87, 27, 11),
(88, 27, 13),
(89, 27, 14),
(90, 27, 15),
(91, 28, 3),
(92, 28, 5),
(93, 28, 6),
(94, 28, 8),
(95, 28, 9),
(96, 28, 10),
(97, 28, 15),
(98, 29, 9),
(99, 29, 10),
(100, 29, 11),
(101, 29, 13),
(102, 29, 14),
(103, 29, 15),
(104, 30, 5),
(105, 30, 6),
(106, 30, 9),
(107, 30, 10),
(108, 30, 11),
(109, 30, 15);

-- --------------------------------------------------------

--
-- Table structure for table `menu_permissions`
--

CREATE TABLE `menu_permissions` (
  `id` char(26) NOT NULL,
  `role_id` char(26) NOT NULL,
  `menu_id` char(26) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `menu_permissions`
--

INSERT INTO `menu_permissions` (`id`, `role_id`, `menu_id`, `created_at`, `updated_at`) VALUES
('01JPZB8N284WHSCR08C1FRND30', '01HNW3X5Z6V1A5GFG9H2M7JQKX', '01JPZ7E9J2Y8E7YG1G3BQAC9TK', '2025-03-22 16:34:03', '2025-03-22 16:34:03'),
('01JPZB8N2JX7N5CDZC71HQF6S5', '01HNW3X5Z6V1A5GFG9H2M7JQKX', '01JPZ7E9J2Y8E7YG1G3BQAC9TP', '2025-03-22 16:34:03', '2025-03-22 16:34:03'),
('01JQ48DSXENEFH9FDEV0XKWS40', '01HNW3X5Z6V1A5GFG9H2M7JQKX', '01JPZ7E9J2Y8E7YG1G3BQAC9TM', '2025-03-24 14:20:39', '2025-03-24 14:20:39'),
('01JQ4AXVYYP71J2PCSN5V94ERF', '01HNW3X5Z6V1A5GFG9H2M7JQKX', '01JQ4AANCPG61Y607FGXYS9AJX', '2025-03-24 15:04:22', '2025-03-24 15:04:22'),
('01JQ4BZY2T4KYZ38Y4MGXK2GW3', '01HNW3X5Z6V1A5GFG9H2M7JQKX', '01JQ4BW3BZ4305TMPG606D8BXT', '2025-03-24 15:22:59', '2025-03-24 15:22:59'),
('01JRJW7EFK75BKGX7H7TD8PMVZ', '01HNW3X5Z6V1A5GFG9H2M7JQKX', '01JRJW5W01JMAM411G3H1E50JJ', '2025-04-11 16:51:46', '2025-04-11 16:51:46'),
('01JV2695TPV4Q7DE7EQ5ZA7ZNS', '01HNW3X5Z6V1A5GFG9H2M7JQKX', '01JV265ZM61C6NQPP3QWC10EZE', '2025-05-12 12:07:28', '2025-05-12 12:07:28'),
('01JVEHSE0KNKVVNBBRKAZZ7AQZ', '01HNW3X5Z6V1A5GFG9H2M7JQKX', '01JVEH3GSESD2Z2XJPT7YGA3VA', '2025-05-17 07:19:28', '2025-05-17 07:19:28'),
('01JVEM2A6JH0SG6FP7WM8F1J8J', '01HNW3X5Z6V1A5GFG9H2M7JQKX', '01JPZ7E9J2Y8E7YG1G3BQAC9TQ', '2025-05-17 07:59:17', '2025-05-17 07:59:17'),
('01JVKM90F2YEX6DX2PV0EP155K', '01HNW3X5Z6V1A5GFG9H2M7JQKX', '01JVKM42JBBBG0XM3DDX8TC5SP', '2025-05-19 06:39:08', '2025-05-19 06:39:08'),
('01JVKSNY0H8PBH13CNAR05NP0P', '01HNW3X5Z6V1A5GFG9H2M7JQKX', '01JVKSMG893X9WK5H3P5PNA8AP', '2025-05-19 08:13:35', '2025-05-19 08:13:35'),
('01JVNZ510KE51ZKWZ73EXN42NN', '01HNW3X5Z6V1A5GFG9H2M7JQKX', '01JQ10XN5K4SZ7EGJ7WWRPS0FY', '2025-05-20 04:27:41', '2025-05-20 04:27:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2025-03-22-071532', 'App\\Database\\Migrations\\CreateUsersTable', 'default', 'App', 1742628027, 1),
(2, '2025-03-22-150406', 'App\\Database\\Migrations\\CreateMenuTable', 'default', 'App', 1742656145, 2),
(8, '2025-03-22-153925', 'App\\Database\\Migrations\\CreateRolesTable', 'default', 'App', 1742658980, 3),
(9, '2025-03-22-154109', 'App\\Database\\Migrations\\UpdateUsersTable', 'default', 'App', 1742658980, 3),
(10, '2025-03-22-155748', 'App\\Database\\Migrations\\CreateMenuPermissiontable', 'default', 'App', 1742659153, 4),
(11, '2025-03-22-160005', 'App\\Database\\Migrations\\UpdateUserTable2', 'default', 'App', 1742659320, 5),
(12, '2025-03-22-160325', 'App\\Database\\Migrations\\UpdateUserTable3', 'default', 'App', 1742659452, 6),
(13, '2025-03-22-160717', 'App\\Database\\Migrations\\CreateSettingTable', 'default', 'App', 1742659703, 7),
(20, '2025-03-22-160854', 'App\\Database\\Migrations\\UpdateUserTable4', 'default', 'App', 1742660074, 8),
(21, '2025-03-22-160949', 'App\\Database\\Migrations\\UpdateUserTable5', 'default', 'App', 1742660074, 8),
(25, '2025-03-24-152457', 'App\\Database\\Migrations\\CreateItemTable', 'default', 'App', 1742832377, 9),
(26, '2025-03-24-155322', 'App\\Database\\Migrations\\CreateProductTable', 'default', 'App', 1742832377, 9),
(27, '2025-03-24-160649', 'App\\Database\\Migrations\\DropItemsTable', 'default', 'App', 1742832564, 10),
(28, '2025-03-24-175731', 'App\\Database\\Migrations\\UpdateProductTable', 'default', 'App', 1742839287, 11),
(30, '2025-03-24-180422', 'App\\Database\\Migrations\\UpdateProductTableId', 'default', 'App', 1742840256, 12),
(34, '2025-03-24-182221', 'App\\Database\\Migrations\\UpdateProductTableId2', 'default', 'App', 1742841167, 13),
(35, '2025-03-24-183509', 'App\\Database\\Migrations\\CreateCategoryTable', 'default', 'App', 1742841430, 14),
(36, '2025-04-11-163506', 'App\\Database\\Migrations\\CreateWilayahTable', 'default', 'App', 1744389679, 15),
(37, '2025-04-19-035333', 'App\\Database\\Migrations\\CreatePromoBanners', 'default', 'App', 1745035414, 16),
(38, '2025-04-20-042859', 'App\\Database\\Migrations\\CreateMenuMaster', 'default', 'App', 1745123518, 17),
(39, '2025-04-20-043255', 'App\\Database\\Migrations\\CreateMenuPackages', 'default', 'App', 1745123604, 18),
(40, '2025-04-20-043406', 'App\\Database\\Migrations\\CreateMenuGroup', 'default', 'App', 1745123675, 19),
(41, '2025-04-20-043507', 'App\\Database\\Migrations\\CreateItemsInGroup', 'default', 'App', 1745123742, 20),
(42, '2025-04-20-043731', 'App\\Database\\Migrations\\CreateMenuMasterIcon', 'default', 'App', 1745123882, 21),
(43, '2025-04-20-043918', 'App\\Database\\Migrations\\CreateMenuMasterTags', 'default', 'App', 1745123990, 22),
(44, '2025-04-20-043940', 'App\\Database\\Migrations\\CreateRelatedMenuMaster', 'default', 'App', 1745123990, 22),
(45, '2025-04-21-142707', 'App\\Database\\Migrations\\CreateMenuPackageItems', 'default', 'App', 1745246177, 23),
(46, '2025-05-12-102838', 'App\\Database\\Migrations\\CreateOrder', 'default', 'App', 1747046477, 24),
(47, '2025-05-12-111542', 'App\\Database\\Migrations\\CreateCustomer', 'default', 'App', 1747048677, 25),
(48, '2025-05-17-063508', 'App\\Database\\Migrations\\CreateSlider', 'default', 'App', 1747463802, 26),
(49, '2025-05-19-015819', 'App\\Database\\Migrations\\CreateUnit', 'default', 'App', 1747620297, 27),
(50, '2025-05-19-020504', 'App\\Database\\Migrations\\CreateItem', 'default', 'App', 1747620398, 28),
(51, '2025-05-19-084244', 'App\\Database\\Migrations\\CreateMenuItems', 'default', 'App', 1747648354, 29),
(52, '2025-05-20-025354', 'App\\Database\\Migrations\\AddQtyToMenuItems', 'default', 'App', 1747709681, 30),
(53, '2025-05-20-035409', 'App\\Database\\Migrations\\RemoveMenuImageFromMenuMaster', 'default', 'App', 1747713270, 31),
(54, '2025-05-20-043321', 'App\\Database\\Migrations\\AddMenuImageToMenuPackages', 'default', 'App', 1747715653, 32);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_no` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `order_date` date NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `event_type` varchar(100) NOT NULL,
  `know_from` varchar(100) NOT NULL,
  `remarks` text NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `order_total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_no`, `full_name`, `phone_no`, `order_date`, `city`, `address`, `event_type`, `know_from`, `remarks`, `order_status`, `order_total`) VALUES
(1, 'ORD-6821d4eca53c52.04425232', 'zidan pahrudin', '85954321475', '0000-00-00', 'Jakarta pusat', 'Harmoni', 'ulang_tahun', 'instagram', 'Test', 'cancelled', 0.00),
(2, 'ORD-6821d62199ebb9.25545208', 'zidan pahrudin', '85954321475', '0000-00-00', 'Jakarta pusat', 'Harmoni', 'ulang_tahun', 'instagram', 'Test', 'completed', 0.00),
(3, '6821d6630f72f', 'zidan pahrudin', '85954321475', '0000-00-00', 'Jakarta pusat', 'Harmoni', 'ulang_tahun', 'instagram', 'Test', 'completed', 0.00),
(4, '6821da75e59cc', 'zidan pahrudin', '8777261716127', '0000-00-00', 'Jakarta pusat', 'Harmoni', 'acara_kantor', 'tiktok', 'coba', 'completed', 0.00),
(5, '6828428ecca7d', 'mus', '877662616161', '0000-00-00', 'Cianjur', 'Djuanda 3', 'ulang_tahun', 'referral', 'Test', 'completed', 0.00),
(6, '682d52850d877', 'mus', '877662616161', '0000-00-00', 'Cianjur', 'Djuanda 3', 'acara_keluarga', 'instagram', 'test', 'pending', 0.00),
(7, '682f25e5509c7', 'pieter karunia deo', '082257474889', '0000-00-00', 'Kota Surabaya', 'Jalan Siwalankerto Permai II D36', 'syukuran', 'instagram', '', 'pending', 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `bom_id` int(11) NOT NULL,
  `bom_name` varchar(255) NOT NULL,
  `category_type_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `flag_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `promo_banners`
--

CREATE TABLE `promo_banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image_url` text DEFAULT NULL,
  `orientation` enum('portrait','landscape','square') NOT NULL DEFAULT 'portrait',
  `redirect_url` text DEFAULT NULL,
  `display_position` varchar(100) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `notes` text DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `promo_banners`
--

INSERT INTO `promo_banners` (`id`, `title`, `image_url`, `orientation`, `redirect_url`, `display_position`, `sort_order`, `is_active`, `notes`, `pic`, `created_at`, `updated_at`) VALUES
(4, 'test', 'assets/dist/img/promo/1747755858_90802ab79271db60a21f.png', 'portrait', '', 'home-top-right', 2, 1, 'tes', '1', '2025-05-17 06:21:41', '2025-05-20 15:44:18'),
(5, 'test', 'assets/dist/img/promo/1747755871_8225ac86157dbd0c1850.png', 'landscape', '', 'home-bottom', 1, 1, 'test', '1', '2025-05-17 06:22:04', '2025-05-20 15:44:31'),
(6, 'test', 'assets/dist/img/promo/1747498487_35ee8898b939622df341.png', 'landscape', '', 'home-bottom', 1, 0, '', '1', '2025-05-17 16:14:33', '2025-05-20 15:44:40'),
(7, 'Top Left', 'assets/dist/img/promo/1747756167_550a34cad34e02766a9c.png', 'portrait', '', 'home-top-left', 0, 1, '', '1', '2025-05-20 15:49:27', '2025-05-20 15:49:27'),
(8, 'Top Lef 2', 'assets/dist/img/promo/1747919145_012e2e845197330b8277.png', 'portrait', '', 'home-top-left', 1, 1, '', '1', '2025-05-22 13:05:45', '2025-05-22 13:05:45');

-- --------------------------------------------------------

--
-- Table structure for table `related_menu_master`
--

CREATE TABLE `related_menu_master` (
  `related_menu_id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` char(26) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
('01HNW3X5Z6V1A5GFG9H2M7JQKX', 'Admin', 'Admin role', '2025-03-22 23:15:53', '2025-03-22 23:16:00'),
('01JQ0WYE9CETSNY2EK8GP9SH0B', 'User', 'User role', '2025-03-22 23:15:56', '2025-03-23 07:02:18');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` char(26) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `image_url` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `is_active`, `image_url`, `created_at`, `updated_at`) VALUES
(1, 'test 22', '', 1, 'assets/dist/img/slider/1747755891_d0a1ac19fb03379d3b69.png', NULL, NULL),
(2, 'test', '', 1, 'assets/dist/img/slider/1747755902_16e1470a759c25e8983f.png', NULL, NULL),
(3, 'test 2', '', 1, 'assets/dist/img/slider/1747755911_030b40dcae33accceff3.png', NULL, NULL),
(4, 'Slide 4', '', 1, 'assets/dist/img/slider/1747756083_00a6357f1568f00ba36a.png', NULL, NULL),
(5, 'Slide 5', '', 1, 'assets/dist/img/slider/1747756097_cef6c21b10d16468f84e.png', NULL, NULL),
(6, 'Slide 6', '', 1, 'assets/dist/img/slider/1747756132_6d9a280420189f53c773.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` int(11) NOT NULL,
  `unit_name` varchar(100) NOT NULL,
  `unit_code` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT '2025-05-19 02:04:57',
  `updated_at` datetime NOT NULL DEFAULT '2025-05-19 02:04:57'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `unit_name`, `unit_code`, `created_at`, `updated_at`) VALUES
(3, 'Gram', 'Gr', '2025-05-19 02:04:57', '2025-05-19 02:04:57'),
(4, 'ml', 'ml', '2025-05-19 02:04:57', '2025-05-19 02:04:57'),
(6, 'pieces', 'pcs', '2025-05-19 02:04:57', '2025-05-19 02:04:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(26) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `role_id` char(26) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `is_active`, `role_id`, `password`, `created_at`, `updated_at`) VALUES
('01JPZAVZ49GPHCH9H4HZPF0MVQ', 'Admin User', 'admin@example.com', 1, '01HNW3X5Z6V1A5GFG9H2M7JQKX', '$2y$10$mwFFoYOds28vVb5NLk6NC.rv.HZaBMqcWIghSVpG2oV8m8lAtmDFS', '2025-03-22 16:27:08', '2025-03-22 16:27:08'),
('01JQ098BX5TQR2J7QHN0HAGZA4', 'zidan', 'zidanpahrudin4@gmail.com', 1, '01HNW3X5Z6V1A5GFG9H2M7JQKX', '$2y$10$cid7k/vGG8Qn1CY1y7iKb.FJ3vAhOkrYtX7YdH7.DJ4du5GNKoY5u', '2025-03-23 01:18:11', '2025-03-23 01:18:11'),
('01JQ0CCFTB3VX65ZG8HNHTF6G4', 'zidan01', 'zidan02@mail.com', 1, '01HNW3X5Z6V1A5GFG9H2M7JQKX', '$2y$10$g9HBPecnvkPxpeltJ.v3/O47lMXAQi03.vugPDV8916O0hUHKrsrK', '2025-03-23 02:12:52', '2025-03-23 02:12:52');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `group` enum('provinsi','kota','kecamatan') NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id`, `name`, `group`, `parent_id`, `created_at`, `updated_at`) VALUES
(5, 'Jabodetabekjur', 'provinsi', NULL, '2025-04-12 00:10:49', '2025-04-11 17:57:43'),
(6, 'Jakarta', 'kota', 5, '2025-04-11 17:34:40', '2025-04-11 17:34:40'),
(7, 'Bogor2', 'kota', 5, '2025-04-11 17:45:24', '2025-05-25 01:19:06'),
(8, 'Depok', 'kota', 5, '2025-04-11 17:45:38', '2025-04-11 17:45:38'),
(9, 'Bekasi', 'kota', 5, '2025-04-11 17:45:54', '2025-04-11 17:45:54'),
(12, 'Jawa Timur ', 'provinsi', NULL, '2025-05-20 08:57:14', '2025-05-20 08:57:14'),
(13, 'Surabaya', 'kota', 12, '2025-05-20 09:00:47', '2025-05-20 09:00:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `item_unit_id_foreign` (`unit_id`) USING BTREE;

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD KEY `id` (`id`) USING BTREE;

--
-- Indexes for table `menu_extras`
--
ALTER TABLE `menu_extras`
  ADD PRIMARY KEY (`menu_extra_id`) USING BTREE,
  ADD KEY `menu_extras_menu_id_foreign` (`menu_id`) USING BTREE;

--
-- Indexes for table `menu_group`
--
ALTER TABLE `menu_group`
  ADD PRIMARY KEY (`menu_group_id`) USING BTREE;

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`) USING BTREE,
  ADD KEY `menu_items_item_id_foreign` (`item_id`) USING BTREE;

--
-- Indexes for table `menu_items_in_group`
--
ALTER TABLE `menu_items_in_group`
  ADD PRIMARY KEY (`item_id`) USING BTREE,
  ADD KEY `menu_items_in_group_menu_group_id_foreign` (`menu_group_id`) USING BTREE,
  ADD KEY `menu_items_in_group_menu_id_foreign` (`menu_id`) USING BTREE;

--
-- Indexes for table `menu_master`
--
ALTER TABLE `menu_master`
  ADD PRIMARY KEY (`menu_id`) USING BTREE;

--
-- Indexes for table `menu_master_icons`
--
ALTER TABLE `menu_master_icons`
  ADD PRIMARY KEY (`menu_icon_id`) USING BTREE,
  ADD KEY `menu_master_icons_menu_id_foreign` (`menu_id`) USING BTREE;

--
-- Indexes for table `menu_master_tags`
--
ALTER TABLE `menu_master_tags`
  ADD PRIMARY KEY (`menu_tag_id`) USING BTREE,
  ADD KEY `menu_master_tags_menu_id_foreign` (`menu_id`) USING BTREE;

--
-- Indexes for table `menu_packages`
--
ALTER TABLE `menu_packages`
  ADD PRIMARY KEY (`package_id`) USING BTREE,
  ADD KEY `menu_packages_menu_id_foreign` (`menu_id`) USING BTREE;

--
-- Indexes for table `menu_package_items`
--
ALTER TABLE `menu_package_items`
  ADD PRIMARY KEY (`package_item_id`) USING BTREE,
  ADD KEY `menu_package_items_package_id_foreign` (`package_id`) USING BTREE,
  ADD KEY `menu_package_items_item_id_foreign` (`item_id`) USING BTREE;

--
-- Indexes for table `menu_permissions`
--
ALTER TABLE `menu_permissions`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `menu_permission_role_id_foreign` (`role_id`) USING BTREE,
  ADD KEY `menu_permission_menu_id_foreign` (`menu_id`) USING BTREE;

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `promo_banners`
--
ALTER TABLE `promo_banners`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `related_menu_master`
--
ALTER TABLE `related_menu_master`
  ADD PRIMARY KEY (`related_menu_id`) USING BTREE,
  ADD KEY `related_menu_master_menu_id_foreign` (`menu_id`) USING BTREE;

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `users_role_id_foreign` (`role_id`) USING BTREE;

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `wilayah_parent_id_foreign` (`parent_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `menu_extras`
--
ALTER TABLE `menu_extras`
  MODIFY `menu_extra_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `menu_group`
--
ALTER TABLE `menu_group`
  MODIFY `menu_group_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `menu_items_in_group`
--
ALTER TABLE `menu_items_in_group`
  MODIFY `item_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `menu_master`
--
ALTER TABLE `menu_master`
  MODIFY `menu_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `menu_master_icons`
--
ALTER TABLE `menu_master_icons`
  MODIFY `menu_icon_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_master_tags`
--
ALTER TABLE `menu_master_tags`
  MODIFY `menu_tag_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_packages`
--
ALTER TABLE `menu_packages`
  MODIFY `package_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `menu_package_items`
--
ALTER TABLE `menu_package_items`
  MODIFY `package_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promo_banners`
--
ALTER TABLE `promo_banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_unit_id_foreign` FOREIGN KEY (`unit_id`) REFERENCES `unit` (`id`);

--
-- Constraints for table `menu_extras`
--
ALTER TABLE `menu_extras`
  ADD CONSTRAINT `menu_extras_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menu_master` (`menu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`),
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menu_master` (`menu_id`);

--
-- Constraints for table `menu_items_in_group`
--
ALTER TABLE `menu_items_in_group`
  ADD CONSTRAINT `menu_items_in_group_menu_group_id_foreign` FOREIGN KEY (`menu_group_id`) REFERENCES `menu_group` (`menu_group_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `menu_items_in_group_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menu_master` (`menu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_master_icons`
--
ALTER TABLE `menu_master_icons`
  ADD CONSTRAINT `menu_master_icons_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menu_master` (`menu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_master_tags`
--
ALTER TABLE `menu_master_tags`
  ADD CONSTRAINT `menu_master_tags_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menu_master` (`menu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_packages`
--
ALTER TABLE `menu_packages`
  ADD CONSTRAINT `menu_packages_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menu_master` (`menu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_package_items`
--
ALTER TABLE `menu_package_items`
  ADD CONSTRAINT `menu_package_items_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `menu_items_in_group` (`item_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `menu_package_items_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `menu_packages` (`package_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_permissions`
--
ALTER TABLE `menu_permissions`
  ADD CONSTRAINT `menu_permission_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `menu_permission_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `related_menu_master`
--
ALTER TABLE `related_menu_master`
  ADD CONSTRAINT `related_menu_master_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menu_master` (`menu_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `related_menu_master_related_menu_id_foreign` FOREIGN KEY (`related_menu_id`) REFERENCES `menu_master` (`menu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD CONSTRAINT `wilayah_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `wilayah` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
