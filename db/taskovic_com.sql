-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: s181.loopia.se
-- Generation Time: Jun 18, 2018 at 07:39 PM
-- Server version: 5.7.22-log
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taskovic_com`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Pizza', 'pizza', NULL, NULL),
(2, 'Panzzaroti', 'panzzaroti', NULL, NULL),
(3, 'Garlic Fingers', 'garlic_fingers', NULL, NULL),
(4, 'Poutine', 'poutine', NULL, NULL),
(5, 'Chicken', 'chicken', NULL, NULL),
(6, 'Subs & Sandwiches ', 'subs_sandwiches', NULL, NULL),
(7, 'Donairs', 'donairs', NULL, NULL),
(8, 'Seafood', 'seafood', NULL, NULL),
(9, 'Burgers', 'burgers', NULL, NULL),
(10, 'Appetizers', 'appetizers', NULL, NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_06_17_201120_create_products_table', 1),
(4, '2018_06_17_201420_create_categories_table', 1),
(5, '2018_06_17_221554_create_specials_table', 2);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `small` double DEFAULT NULL,
  `medium` double DEFAULT NULL,
  `large` double DEFAULT NULL,
  `extra_large` double DEFAULT NULL,
  `price` double DEFAULT NULL,
  `platter` double DEFAULT NULL,
  `extra_sauce` double DEFAULT NULL,
  `new` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `description`, `small`, `medium`, `large`, `extra_large`, `price`, `platter`, `extra_sauce`, `new`, `created_at`, `updated_at`) VALUES
(7, 'Caesar Salad', 10, '<p>\r\n\r\nLettuce, Croutons, Bacon Bits, Mozza Cheese, Caesar Dressing\r\n\r\n<br></p>', NULL, NULL, NULL, NULL, 6.99, NULL, NULL, 0, '2018-06-18 06:21:34', '2018-06-18 13:36:58'),
(9, '1 pc. Haddock & Fries', 8, NULL, NULL, NULL, NULL, NULL, 7.99, NULL, NULL, 0, '2018-06-18 06:28:57', '2018-06-18 11:01:48'),
(10, 'Hamburger', 9, '<p><b>\r\n\r\n¼ lb Beef Patty, Ketchup, Mayo, Relish, Mustard\r\n\r\n</b><br></p>', NULL, NULL, NULL, NULL, 4.99, 6.99, NULL, 0, '2018-06-18 06:32:32', '2018-06-18 11:04:51'),
(11, 'Cold Cuts', 6, '<p>\r\n\r\n\r\n\r\nPepperoni, Salami, Ham, Bacon, Cheese, Mayo, Lettuce, Tomatoes\r\n\r\n\r\n<br></p>', 6.99, NULL, 8.99, NULL, NULL, NULL, NULL, 0, '2018-06-18 06:40:33', '2018-06-18 10:49:31'),
(13, '4 Chicken Strips & Fries', 5, NULL, NULL, NULL, NULL, NULL, 9.99, NULL, NULL, 0, '2018-06-18 06:43:48', '2018-06-18 10:48:21'),
(14, 'Poutine', 4, '<p>\r\n\r\nFries, Cheese, Gravy\r\n\r\n<br></p>', 6.99, NULL, 9.99, NULL, NULL, NULL, NULL, 0, '2018-06-18 06:45:58', '2018-06-18 10:47:18'),
(15, 'Small 9\"', 3, NULL, NULL, NULL, NULL, NULL, 8.99, NULL, NULL, 0, '2018-06-18 06:47:56', '2018-06-18 10:44:13'),
(18, 'Regular Donair', 7, '<p>\r\n\r\n</p>\r\n\r\nDonair Meat, Tomatoes, Onions', NULL, NULL, NULL, NULL, 6.99, NULL, 1.5, 0, '2018-06-18 08:05:00', '2018-06-18 10:59:54'),
(23, 'Stuffed Crust', 1, NULL, 3, 4, 5, 6, NULL, NULL, NULL, 0, '2018-06-18 09:28:27', '2018-06-18 10:28:51'),
(24, 'Cheese', 1, NULL, 6.99, 9.99, 11.99, 14.99, NULL, NULL, NULL, 0, '2018-06-18 09:31:39', '2018-06-18 10:29:02'),
(25, '1 Item', 1, NULL, 7.99, 10.99, 13.99, 17.99, NULL, NULL, NULL, 0, '2018-06-18 09:32:14', '2018-06-18 10:29:22'),
(26, '2 Items', 1, NULL, 8.99, 11.99, 14.99, 18.99, NULL, NULL, NULL, 0, '2018-06-18 09:32:35', '2018-06-18 10:29:36'),
(27, '3 Items', 1, NULL, 9.99, 12.99, 15.99, 19.99, NULL, NULL, NULL, 0, '2018-06-18 09:33:04', '2018-06-18 10:29:49'),
(28, '4 Items', 1, NULL, 10.99, 13.99, 16.99, 20.99, NULL, NULL, NULL, 0, '2018-06-18 09:33:52', '2018-06-18 10:30:02'),
(29, 'Vegetarian', 1, '<p>\r\n\r\n</p>\r\n\r\nOnions, Mushrooms, Green Peppers, Tomatoes, Sprinkled with Basil &amp; Oregano, Drizzled with Olive Oil &amp; Herbs\r\n\r\n<p>\r\n<br></p>', 9.99, 12.99, 17.99, 20.99, NULL, NULL, NULL, 0, '2018-06-18 09:34:33', '2018-06-18 10:30:20'),
(30, 'Hawaiian', 1, '<p>\r\n\r\n</p>\r\n\r\nHam, Pineapple\r\n\r\n<p>\r\n<br></p>', 9.99, 12.99, 17.99, 20.99, NULL, NULL, NULL, 0, '2018-06-18 09:35:16', '2018-06-18 10:30:36'),
(31, 'Greek Pizza', 1, '<p>\r\n\r\n</p>\r\n\r\nOnions, Tomatoes, Black Olives, Feta Cheese, Sprinkled with Basil &amp; Oregano, Drizzled with Olive Oil &amp; Herbs\r\n\r\n<p>\r\n<br></p>', 10.99, 15.99, 20.99, 25.99, NULL, NULL, NULL, 0, '2018-06-18 09:44:03', '2018-06-18 10:30:53'),
(32, 'Canadian Classic', 1, '<p>\r\n\r\n</p>\r\n\r\nCrust Brushed with Garlic Butter, Sweet Pizza Sauce, Pepperoni, Mushrooms, Bacon\r\n\r\n<p>\r\n<br></p>', 10.99, 15.99, 20.99, 25.99, NULL, NULL, NULL, 0, '2018-06-18 09:44:38', '2018-06-18 10:31:12'),
(33, 'The Works', 1, '<p>\r\n\r\n</p>\r\n\r\nPepperoni, Salami, Bacon, Mushrooms, Onions, Green Peppers\r\n\r\n<p>\r\n<br></p>', 10.99, 15.99, 20.99, 25.99, NULL, NULL, NULL, 0, '2018-06-18 09:46:10', '2018-06-18 10:31:48'),
(34, 'Donair Pizza', 1, '<p>\r\n\r\n</p>\r\n\r\nDonair meat, Onions, Tomatoes, Donair Sauce\r\n\r\n<p>\r\n<br></p>', 10.99, 15.99, 20.99, 25.99, NULL, NULL, NULL, 0, '2018-06-18 09:46:45', '2018-06-18 10:32:07'),
(35, 'BBQ Chicken', 1, '<p>\r\n\r\n</p>\r\n\r\nChicken, BBQ Sauce\r\n\r\n<p>\r\n<br></p>', 10.99, 15.99, 20.99, 25.99, NULL, NULL, NULL, 0, '2018-06-18 09:47:25', '2018-06-18 10:32:40'),
(36, 'Meat Lovers', 1, '<p>\r\n\r\n</p>\r\n\r\nPepperoni, Salami, Bacon, Italian Sausage, Ground Beef\r\n\r\n<p><br></p>', 10.99, 15.99, 20.99, 25.99, NULL, NULL, NULL, 0, '2018-06-18 09:48:00', '2018-06-18 10:33:00'),
(37, 'Bubba Pizza', 1, '<p>\r\n\r\n</p>\r\n\r\nGarlic Spread, Donair Meat, Onions, Tomatoes\r\n\r\n<p>\r\n<br></p>', 10.99, 15.99, 20.99, 25.99, NULL, NULL, NULL, 0, '2018-06-18 09:48:44', '2018-06-18 10:33:29'),
(38, 'Pepperoni Lovers', 1, '<p>\r\n\r\n</p>\r\n\r\nRegular Pepperoni, Brothers Pepperoni\r\n\r\n<p>\r\n<br></p>', 10.99, 15.99, 20.99, 25.99, NULL, NULL, NULL, 0, '2018-06-18 09:52:11', '2018-06-18 10:33:49'),
(39, '4 Cheese Pizza', 1, '<p>\r\n\r\n</p>Mozzarella,Gouda,Provolone &amp; Parmesan<p>\r\n<br></p>', 9.99, 14.99, 19.99, 24.99, NULL, NULL, NULL, 1, '2018-06-18 09:52:53', '2018-06-18 12:59:39'),
(40, 'Extra Item', 1, NULL, 1.5, 2, 2.99, 3.99, NULL, NULL, NULL, 0, '2018-06-18 09:53:27', '2018-06-18 10:34:29'),
(41, 'Extra Cheese', 1, NULL, 1.5, 2, 2.99, 3.99, NULL, NULL, NULL, 0, '2018-06-18 09:53:52', '2018-06-18 10:34:45'),
(43, 'Medium 12”', 3, NULL, NULL, NULL, NULL, NULL, 11.99, NULL, NULL, 0, '2018-06-18 09:57:51', '2018-06-18 10:44:39'),
(44, 'Large 16\"', 3, NULL, NULL, NULL, NULL, NULL, 15.99, NULL, NULL, 0, '2018-06-18 09:58:13', '2018-06-18 10:44:52'),
(45, 'XLarge 18\"', 3, NULL, NULL, NULL, NULL, NULL, 18.99, NULL, NULL, 0, '2018-06-18 09:58:39', '2018-06-18 10:45:09'),
(46, 'Double Layer Poutine', 4, '<p>\r\n\r\nDouble layer of cheese, Fries, Gravy\r\n\r\n<br></p>', 7.99, NULL, 10.99, NULL, NULL, NULL, NULL, 0, '2018-06-18 10:01:59', '2018-06-18 10:47:30'),
(47, 'Donair Poutine', 4, '<p>\r\n\r\nFries, Cheese, Donair Meat, Gravy\r\n\r\n<br></p>', 7.99, NULL, 10.99, NULL, NULL, NULL, NULL, 0, '2018-06-18 10:02:15', '2018-06-18 10:47:43'),
(48, 'Chicken Poutine', 4, '<p>\r\n\r\nFries, Cheese, Chicken, Gravy\r\n\r\n<br></p>', 7.99, NULL, 10.99, NULL, NULL, NULL, NULL, 0, '2018-06-18 10:02:29', '2018-06-18 10:47:56'),
(49, '10 Chicken Strips & Fries + 2L Pop', 5, NULL, NULL, NULL, NULL, NULL, 25.99, NULL, NULL, 0, '2018-06-18 10:03:25', '2018-06-18 10:48:32'),
(50, 'Extra Piece of Chicken', 5, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, 0, '2018-06-18 10:03:39', '2018-06-18 10:48:46'),
(51, 'Pizza Sub', 6, '<p>\r\n\r\n\r\n\r\nPizza Sauce, Pepperoni, Salami, Bacon, Mushrooms, Onions, Green Peppers\r\n\r\n\r\n<br></p>', 6.99, NULL, 8.99, NULL, NULL, NULL, NULL, 0, '2018-06-18 10:04:55', '2018-06-18 10:49:47'),
(52, 'Donair Sub', 6, '<p>\r\n\r\n\r\n\r\nDonair Meat, Onions, Tomatoes, Cheese\r\n\r\n\r\n<br></p>', 7.99, NULL, 9.99, NULL, NULL, NULL, NULL, 0, '2018-06-18 10:05:23', '2018-06-18 10:50:03'),
(53, 'Bubba Donair Sub', 6, '<p>\r\n\r\n\r\n\r\nDonair meat, Garlic Butter, Onions, Tomatoes, Cheese\r\n\r\n\r\n<br></p>', 7.99, NULL, 9.99, NULL, NULL, NULL, NULL, 0, '2018-06-18 10:05:41', '2018-06-18 10:50:24'),
(54, 'Steak Sub', 6, '<p>\r\n\r\n\r\n\r\nSteak, Sauté Mushrooms, Sauté Onions, Sauté Green Peppers, Cheese, drizzled with olive oil &amp; herbs\r\n\r\n<br></p>', 7.99, NULL, 9.99, NULL, NULL, NULL, NULL, 0, '2018-06-18 10:06:10', '2018-06-18 10:50:45'),
(55, 'Chicken Breast Sub', 6, '<p>\r\n\r\n\r\n\r\nChicken Breast, Mayo, Lettuce, Tomatoes, Cheese\r\n\r\n\r\n<br></p>', 7.99, NULL, 9.99, NULL, NULL, NULL, NULL, 0, '2018-06-18 10:06:34', '2018-06-18 10:51:02'),
(56, 'Clubhouse Sandwich & Fries', 6, '<p>\r\n\r\n\r\n\r\nReal White Chicken Breast, Bacon, Mayo, Lettuce, Tomatoes, Cheese, comes with fries\r\n\r\n\r\n<br></p>', NULL, NULL, NULL, NULL, 11.99, NULL, NULL, 0, '2018-06-18 10:06:50', '2018-06-18 10:51:18'),
(57, 'Medium Donair', 7, '<p>\r\n\r\n\r\n\r\nDonair Meat, Tomatoes, Onions\r\n\r\n\r\n<br></p>', NULL, NULL, NULL, NULL, 7.99, NULL, 1.5, 0, '2018-06-18 10:07:49', '2018-06-18 10:52:29'),
(58, 'Large Donair', 7, '<p>\r\n\r\n\r\n\r\nDonair Meat, Tomatoes, Onions\r\n\r\n\r\n<br></p>', NULL, NULL, NULL, NULL, 8.99, NULL, 2, 0, '2018-06-18 10:08:03', '2018-06-18 10:52:48'),
(59, 'Eli’s Belly Buster Donair', 7, '<p>\r\n\r\n\r\n\r\nDonair Meat, Tomatoes, Onions\r\n\r\n\r\n<br></p>', NULL, NULL, NULL, NULL, 13.99, NULL, 2.99, 0, '2018-06-18 10:09:42', '2018-06-18 10:53:43'),
(60, 'Donair Plate', 7, '<p>\r\n\r\n\r\n\r\nFries, Donair Meat, Tomatoes, Onions, Cheese\r\n\r\n\r\n<br></p>', 8.99, NULL, 11.99, NULL, NULL, NULL, NULL, 0, '2018-06-18 10:10:07', '2018-06-18 10:54:21'),
(61, 'Donair Meat', 7, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, 0, '2018-06-18 10:10:27', '2018-06-18 10:55:20'),
(62, 'Extra Donair Sauce', 7, NULL, 1.49, NULL, 2.29, NULL, NULL, NULL, NULL, 0, '2018-06-18 10:10:47', '2018-06-18 10:54:48'),
(63, '2 pc. Haddock & Fries', 8, NULL, NULL, NULL, NULL, NULL, 9.99, NULL, NULL, 0, '2018-06-18 10:11:55', '2018-06-18 11:01:59'),
(64, '3 pc. Haddock & Fries', 8, NULL, NULL, NULL, NULL, NULL, 11.99, NULL, NULL, 0, '2018-06-18 10:12:12', '2018-06-18 11:02:10'),
(65, 'Extra Piece of Haddock', 8, NULL, NULL, NULL, NULL, NULL, 2.99, NULL, NULL, 0, '2018-06-18 10:12:25', '2018-06-18 11:02:20'),
(66, 'Clam Strips & Fries', 8, NULL, NULL, NULL, NULL, NULL, 9.99, NULL, NULL, 0, '2018-06-18 10:12:39', '2018-06-18 11:02:40'),
(67, 'Scallops & Fries', 8, NULL, NULL, NULL, NULL, NULL, 10.99, NULL, NULL, 0, '2018-06-18 10:12:55', '2018-06-18 11:02:53'),
(68, 'Seafood Platter', 8, '<p>\r\n\r\n\r\n\r\n2 Pc Haddock, 4 Scallops, Clam Strips, Fries &amp; Tartar Sauce\r\n\r\n\r\n<br></p>', NULL, NULL, NULL, NULL, 14.99, NULL, NULL, 0, '2018-06-18 10:13:28', '2018-06-18 11:03:08'),
(69, 'Family Pack', 8, '<p>\r\n\r\n\r\n\r\n10 pc Haddock &amp; Fries, 2L Pop\r\n\r\n\r\n<br></p>', NULL, NULL, NULL, NULL, 27.99, NULL, NULL, 0, '2018-06-18 10:13:51', '2018-06-18 11:03:23'),
(70, 'Super Donair', 7, '<p>\r\n\r\n\r\n\r\nDonair Meat, Pepperoni, Tomatoes, Onions, Cheese\r\n\r\n<b></b>\r\n<br></p>', NULL, NULL, NULL, NULL, 11.99, NULL, 2, 0, '2018-06-18 10:14:32', '2018-06-18 13:29:33'),
(71, 'Eli’s Super Burger', 9, '<p>\r\n\r\n\r\n\r\n½ lb Beef Patty, Ketchup, Mayo, Relish, Mustard\r\n\r\n\r\n<br></p>', NULL, NULL, NULL, NULL, 6.99, 8.99, NULL, 0, '2018-06-18 10:16:51', '2018-06-18 11:05:08'),
(72, 'Hot Hamburger', 9, '<p>\r\n\r\nSandwich Bread, ½ lb Beef Patty, Gravy, Fried Onions, Fries\r\n\r\n<br></p>', NULL, NULL, NULL, NULL, 10.99, NULL, NULL, 0, '2018-06-18 10:21:46', '2018-06-18 11:05:36'),
(73, 'Chicken Burger', 9, '<p>\r\n\r\n\r\n\r\nChicken, Mayo, Lettuce, Tomatoes\r\n\r\n\r\n<br></p>', NULL, NULL, NULL, NULL, 5.99, 8.99, NULL, 0, '2018-06-18 10:22:13', '2018-06-18 11:05:52'),
(74, 'Pizza Burger', 9, '<p>\r\n\r\n\r\n\r\nPizza Sauce, Pepperoni, Salami, Bacon, Mushrooms, Onions, Green Peppers\r\n\r\n\r\n<br></p>', NULL, NULL, NULL, NULL, 4.99, 6.99, NULL, 0, '2018-06-18 10:22:31', '2018-06-18 11:06:25'),
(76, 'Cheese', 2, NULL, NULL, NULL, NULL, NULL, 10.99, NULL, NULL, 0, '2018-06-18 10:41:22', '2018-06-18 10:41:22'),
(77, 'Vegetarian', 2, '<p>\r\n\r\nOnions, Mushrooms, Green Peppers, Tomatoes\r\n\r\n<br></p>', NULL, NULL, NULL, NULL, 12.99, NULL, NULL, 0, '2018-06-18 10:41:37', '2018-06-18 10:41:37'),
(78, 'The Works', 2, '<p>\r\n\r\nPepperoni, Salami, Bacon, Mushrooms, Onions, Green Peppers, Cheese\r\n\r\n<br></p>', NULL, NULL, NULL, NULL, 12.99, NULL, NULL, 0, '2018-06-18 10:41:52', '2018-06-18 10:41:52'),
(79, 'Donairs', 2, '<p>\r\n\r\nOur Donairs Are Made With 100% Lean Ground Beef. Spiced Just Right, A Mouth Watering Temptation Every Time.\r\n\r\n<br></p>', NULL, NULL, NULL, NULL, 12.99, NULL, NULL, 0, '2018-06-18 10:42:04', '2018-06-18 10:42:04'),
(80, 'Hawaiian', 2, '<p>\r\n\r\nHam, Pineapple, Cheese\r\n\r\n<br></p>', NULL, NULL, NULL, NULL, 12.99, NULL, NULL, 0, '2018-06-18 10:42:17', '2018-06-18 10:42:17'),
(81, 'BBQ Chicken', 2, '<p>\r\n\r\nChicken, BBQ Sauce, Cheese\r\n\r\n<br></p>', NULL, NULL, NULL, NULL, 12.99, NULL, NULL, 0, '2018-06-18 10:42:32', '2018-06-18 10:42:32'),
(82, 'Meat Lovers', 2, '<p>\r\n\r\nPepperoni, Salami, Bacon, Italian Sausage, Ground Beef, Cheese\r\n\r\n<br></p>', NULL, NULL, NULL, NULL, 12.99, NULL, NULL, 0, '2018-06-18 10:42:47', '2018-06-18 10:42:47'),
(83, 'Pepperoni', 2, '<p>\r\n\r\nPepperoni, Cheese\r\n\r\n<br></p>', NULL, NULL, NULL, NULL, 12.99, NULL, NULL, 0, '2018-06-18 10:43:03', '2018-06-18 10:43:03'),
(84, 'Extra Cheese', 2, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, 0, '2018-06-18 10:43:13', '2018-06-18 10:43:13'),
(85, 'Extra Cheese', 3, NULL, 1.5, 2, 2.99, 3.99, NULL, NULL, NULL, 0, '2018-06-18 10:45:43', '2018-06-18 10:45:43'),
(86, 'Donair Burger', 9, '<p>\r\n\r\nDonair Meat, Tomatoes, Onions, Donair Sauce\r\n\r\n<br></p>', NULL, NULL, NULL, NULL, 4.99, 6.99, NULL, 0, '2018-06-18 11:06:54', '2018-06-18 11:06:54'),
(87, 'Deluxe Combo', 9, '<p>\r\n\r\n½ lb Double Cheeseburger, Bacon, Lettuce, Tomatoes, Onions, Mayo, Fries &amp; Can of Pop\r\n\r\n<br></p>', NULL, NULL, NULL, NULL, 11.99, NULL, NULL, 0, '2018-06-18 11:07:11', '2018-06-18 11:07:11'),
(88, 'Chicken Deluxe Combo', 9, '<p>\r\n\r\nChicken, Bacon, Cheese, Lettuce, Tomatoes, Mayo, Ranch Sauce, Fries &amp; Can of Pop\r\n\r\n<br></p>', NULL, NULL, NULL, NULL, 11.99, NULL, NULL, 0, '2018-06-18 11:07:27', '2018-06-18 11:07:27'),
(89, 'Add Cheese or Bacon', 9, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 0, '2018-06-18 11:07:42', '2018-06-18 11:07:42'),
(90, 'Chicken Caesar Salad', 10, '<p>Chicken, Lettuce, Croutons, Bacon Bits, Mozza Cheese, Caesar Dressing,&nbsp;<br></p>', NULL, NULL, NULL, NULL, 8.99, NULL, NULL, 0, '2018-06-18 11:11:32', '2018-06-18 13:40:16'),
(91, 'Greek Salad', 10, '<p>\r\n\r\nLettuce, Tomatoes, Onions, Black Olives, Homemade Greek Dressing, Feta Cheese, Sprinkled with Basil &amp; Oregano\r\n\r\n<br></p>', NULL, NULL, NULL, NULL, 8.99, NULL, NULL, 0, '2018-06-18 11:11:44', '2018-06-18 13:38:19'),
(92, 'Garlic Bread with Cheese', 10, NULL, NULL, NULL, NULL, NULL, 3.99, NULL, NULL, 0, '2018-06-18 11:11:52', '2018-06-18 11:11:52'),
(93, 'Mozza Sticks (8pc)', 10, '<p>Served with Sour Cream</p>', NULL, NULL, NULL, NULL, 7.99, NULL, NULL, 0, '2018-06-18 11:12:07', '2018-06-18 13:43:19'),
(94, 'Fries', 10, NULL, 4.49, NULL, 5.49, NULL, NULL, NULL, NULL, 0, '2018-06-18 11:12:19', '2018-06-18 11:12:19'),
(95, 'Spicy Fries', 10, NULL, 3.99, NULL, 4.99, NULL, NULL, NULL, NULL, 0, '2018-06-18 11:12:32', '2018-06-18 11:12:32'),
(96, 'Eli’s Onion Rings', 10, NULL, NULL, NULL, NULL, NULL, 5.99, NULL, NULL, 0, '2018-06-18 11:12:46', '2018-06-18 11:12:46'),
(97, 'Deep Fried Brothers Pepperoni', 10, '<p>Served with Honey Mustard</p>', NULL, NULL, NULL, NULL, 5.99, NULL, NULL, 0, '2018-06-18 11:13:46', '2018-06-18 11:13:46'),
(98, 'Donair Egg Rolls with Cheese (4pc)', 10, '<p>\r\n\r\nServed with Donair Sauce\r\n\r\n<br></p>', NULL, NULL, NULL, NULL, 6.99, NULL, NULL, 0, '2018-06-18 11:14:05', '2018-06-18 13:44:16'),
(99, 'Spring Rolls (4pc)', 10, '<p>Served with Sweet Chili<br></p>', NULL, NULL, NULL, NULL, 6.99, NULL, NULL, 0, '2018-06-18 11:14:16', '2018-06-18 11:19:03'),
(100, 'Eli’s Appetizer Combo', 10, '<p>\r\n\r\nOnions Rings, Mozza Sticks, Fries, Brothers Pepperoni Served with Sour Cream &amp; Honey Mustard Sauce\r\n\r\n<br></p>', NULL, NULL, NULL, NULL, 14.99, NULL, NULL, 0, '2018-06-18 11:14:32', '2018-06-18 11:19:49');

-- --------------------------------------------------------

--
-- Table structure for table `specials`
--

CREATE TABLE `specials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` double DEFAULT NULL,
  `price2` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specials`
--

INSERT INTO `specials` (`id`, `name`, `description`, `price`, `price2`, `created_at`, `updated_at`) VALUES
(1, 'Monday - Wednesday Special', '<h5><b>Large 16\" 3 Items&nbsp; <span style=\"color:#900816;\">$12.99</span>&nbsp;</b></h5><h5><b>3 Small Donairs <span style=\"color:#900816;\">$14.99</span></b></h5>', NULL, NULL, '2018-06-18 14:59:58', '2018-06-18 15:12:09'),
(2, 'X-Large 18” Pizza (with up to 4 items)', '<b><h5>+ 16” Large  Garlic Fingers&nbsp;</h5></b><h5><b>+ 2 Litres of Pop</b></h5>', 33.99, NULL, '2018-06-17 20:31:46', '2018-06-18 14:37:54'),
(3, 'Large 16” Pizza (with up to 4 items)', '<h5>\r\n\r\n<b>+ 12” Garlic Fingers&nbsp;</b></h5><h4><b>OR</b></h4><h5><b>+ 2 Small Donairs&nbsp;</b></h5><h5><b>+ 2 Litres of Pop\r\n</b>\r\n<br></h5>', 27.99, NULL, '2018-06-18 08:52:03', '2018-06-18 14:37:48'),
(4, 'Large 16\" Pizza (with up to 4 items)', '<h3>\r\n\r\n<b></b><b>14.99 or 2 for 27.99*</b><b></b><br></h3><h5><b>\r\n\r\n*or substitute a garlic fingers with\r\ncheese and sauce for the second pizza\r\nwith above Special.\r\n\r\n<br></b></h5>', 14.99, 27.99, '2018-06-18 08:56:34', '2018-06-18 14:18:13'),
(5, 'Medium 12” Pizza (with up to 4 items)', '<h3>\r\n\r\n<b></b><b>12.99 or 2 for 22.99*</b><br></h3><h5><b>\r\n\r\n*or substitute a garlic fingers with\r\ncheese and sauce for the second pizza\r\nwith above Special.\r\n</b>\r\n<br></h5>', 12.99, 22.99, '2018-06-18 09:10:46', '2018-06-18 14:23:07'),
(6, '2 Medium Donairs OR 2 Small Reg. Poutine + 2 cans of Pop', NULL, 14.99, NULL, '2018-06-18 09:14:38', '2018-06-18 09:14:38'),
(7, 'Large 16” Pizza (with up to 4 items)', '<h5>\r\n\r\n<b>+ 16” Large\r\n Garlic Fingers&nbsp;</b></h5><h5><b>+ 20 Eli’s Wings&nbsp;</b></h5><h5><b>+ 2 Litres of Pop\r\n</b>\r\n<br></h5>', 48.99, NULL, '2018-06-18 09:15:21', '2018-06-18 14:38:03'),
(8, 'Large 16” Pizza (with up to 4 items)', '<h5>\r\n\r\n<b>+ 10 Eli’s Wings&nbsp;</b></h5><h5><b>+ 2 Litres of Pop\r\n</b>\r\n<br></h5><h6><b>\r\n\r\n</b>*or substitute a\r\ngarlic fingers with\r\ncheese and sauce for\r\npizza with above Special.\r\n<b>\r\n<br></b></h6>', 27.99, NULL, '2018-06-18 09:16:13', '2018-06-18 14:28:35'),
(9, 'Medium 12” Pizza (with up to 4 items)', '<h5>\r\n\r\n<b>+ 12” Garlic Fingers &amp; Dipping Sauce&nbsp;</b></h5><h5><b>+ 10 Eli’s Wings\r\n</b>\r\n<br></h5><p><b><br></b></p>', 27.99, NULL, '2018-06-18 09:17:24', '2018-06-18 14:35:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Admin', 'admin@elispizzeria.com', '$2y$10$ft1A9zDROisYRZpmtjJUG.Dadpao34q6PJpV5DzPYSBMdbsCEyLpC', 'uXjn878xFlhpS7NN86J5quLtrzXbzdjldETbjN2vPDlH6O2ZH0icsSDQRfyf', '2018-06-18 11:31:25', '2018-06-18 11:31:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specials`
--
ALTER TABLE `specials`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `specials`
--
ALTER TABLE `specials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
