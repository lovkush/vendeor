-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2019 at 08:26 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nawabisouq`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `area_name` varchar(50) NOT NULL,
  `city_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `area_name`, `city_id`) VALUES
(1, 'Indranager', '1'),
(2, 'Hazratganj', '1'),
(3, 'rampur', '2'),
(4, 'ramnager', '2');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `title`, `link`, `status`, `created_at`, `updated_at`) VALUES
(0, '123', 'fg', 'fvgb', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `products_id` int(100) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `user_id` int(200) NOT NULL,
  `session_id` varchar(200) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(50) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `status` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `status`) VALUES
(1, 'milk and dairy', 1),
(2, 'flowers and decorations', 1),
(3, 'fruit and vegetable', 1),
(4, 'stationery', 1),
(5, 'bakery and sweets', 1);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(50) NOT NULL,
  `city_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city_name`) VALUES
(1, 'Lucknow'),
(2, 'Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `country_state_city`
--

CREATE TABLE `country_state_city` (
  `id` int(200) NOT NULL,
  `country` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country_state_city`
--

INSERT INTO `country_state_city` (`id`, `country`, `state`, `city`) VALUES
(1, 'India', 'Uttar pardesh', 'Lucknow'),
(2, 'India', 'delhi', 'rampur');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `product_discription` varchar(500) NOT NULL,
  `product_pic_name` varchar(500) NOT NULL,
  `cat_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_discription`, `product_pic_name`, `cat_id`) VALUES
(1, 'Redmi Note 7 Pro', '48MP - f1.79, 1.6micrometer (4-in-1), 5MP - f2.2, 1.12mirometer, Primary 6P Lens, Secondary 3P Lens, PDAF, AI Dual Camera\r\nQualcomm Snapdragon 675,Octa Core, Android Pie 9.0, 4GB RAM 64Gb Internal Expandable UP to 256 GB , Processor 2 x Gold 2.0 GHz + 6 x Silver 1.7 GHz, eMMC v5.1, Body - 2.5D Glass Back, USB Type-C, IR Blaster, Charger - 5V/2A, Super Low Light Mode, Quick Charge 4.0, Dual VoLTE, Two Days Battery, Aura Design, Gradient Reflective Glass Back, EIS for Video Recording, Studio Light', 'img-2.jpg', 2),
(3, 'Sony Bravia 80 cm (32 Inches) Full HD LED Smart TV KLV-32W672F (Black) (2018 model)', 'Resolution : Full HD (1920x1080p) | Refresh Rate: 50 Hertz\r\nDisplay: X-Reality Pro | HDR, CONTRAST ENHANCEMENT: Dynamic Contrast Enhancer\r\nSmart TV Features: Built-in WiFi | Linux Based OS | Youtube Direct | Opera Store | Netflix\r\nConnectivity: 2 HDMI ports to connect set top box, Blu Ray players, gaming console | 2 USB ports to connect hard drives and other USB devices and Sound : 30 Watts Output | Clear Audio+ | Built-in Woofer\r\nPower Requirements (voltage/frequency) : AC 100–240 V, 50/60 Hz, ', 'img-3.jpg', 1),
(4, 'Jio', '12 MP Camera', 'img-2.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_attribute`
--

CREATE TABLE `product_attribute` (
  `attr_id` int(250) NOT NULL,
  `mag_id` int(250) NOT NULL,
  `product_id` int(250) NOT NULL,
  `shop_id` int(250) NOT NULL,
  `size` varchar(20) NOT NULL,
  `price` decimal(50,0) NOT NULL,
  `quantity` int(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_attribute`
--

INSERT INTO `product_attribute` (`attr_id`, `mag_id`, `product_id`, `shop_id`, `size`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 'M', '250', 50, NULL, NULL),
(2, 2, 1, 1, 'L', '100', 10, NULL, NULL),
(3, 3, 1, 2, 'S', '500', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_mang`
--

CREATE TABLE `product_mang` (
  `mag_id` int(250) NOT NULL,
  `product_id` int(250) NOT NULL,
  `shop_id` int(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_mang`
--

INSERT INTO `product_mang` (`mag_id`, `product_id`, `shop_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2019-07-20 08:06:55', '0000-00-00 00:00:00'),
(2, 1, 2, '2019-07-22 07:28:21', '0000-00-00 00:00:00'),
(3, 1, 2, '2019-07-20 05:13:37', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `shopname`
--

CREATE TABLE `shopname` (
  `shop_id` int(50) NOT NULL,
  `shop_name` varchar(50) NOT NULL,
  `area_name` varchar(50) NOT NULL,
  `cat_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopname`
--

INSERT INTO `shopname` (`shop_id`, `shop_name`, `area_name`, `cat_id`) VALUES
(1, 'Subham Electronics', 'rampur', 1),
(2, 'Pappu Flower Decoration\r\n', 'Ramnager', 2),
(3, 'Suneel Art Flower & Decoration\r\n', 'Ramnager', 2),
(4, 'Maya Flowers', 'Ramnager', 1),
(5, 'Shivangi Flower Art Decoration', 'Ramnager', 2),
(6, 'Jasmin Flower Decoration\r\n', 'Ramnager', 2),
(7, 'Neetu Flowers and Decoration', 'Ramnager', 2),
(8, 'Sun Flowers', 'Ramnager', 2),
(9, 'Rachit Flower Decoration', 'Ramnager', 2),
(10, 'Ajit Flower Decoration', 'Ramnager', 2),
(11, 'Amar Flower & Decoration', 'Ramnager', 2);

-- --------------------------------------------------------

--
-- Table structure for table `shop_register`
--

CREATE TABLE `shop_register` (
  `id` int(11) NOT NULL,
  `shopname` varchar(250) NOT NULL,
  `areaname` varchar(250) NOT NULL,
  `cat_id` int(250) NOT NULL,
  `aadhar` varchar(250) NOT NULL,
  `vendor_id` int(250) NOT NULL,
  `vendorname` varchar(250) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `panno` varchar(50) NOT NULL,
  `accountno` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `gstno` varchar(250) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `sub_cat_id` int(11) NOT NULL,
  `sub_cat_name` varchar(500) NOT NULL,
  `cat_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`sub_cat_id`, `sub_cat_name`, `cat_id`) VALUES
(1, 'TV', 1),
(2, 'Mobile', 2),
(3, 'LG', 1),
(4, 'JIO', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `add_work` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `add_home` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `street` varchar(500) NOT NULL,
  `apartment` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `state` varchar(300) NOT NULL,
  `zip` varchar(20) NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `password`, `add_work`, `add_home`, `phone_no`, `street`, `apartment`, `city`, `state`, `zip`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Amit', 'Kumar Verma', 'amit@gmail.com', '$2y$10$xkeoU2i.CB6dLJrQSpwwYedxLrma47QuUAf8wWxI9egmRKFqCAiEm', 'Delhi', '', '54210538', '', '', '', 'up', '262701', '7YbWrDK6UToejVBhCWq0CEEoD2olYVEO3e9jIO2tnEMD3fxWlVRtHPpKzCJU', '2019-07-22 11:48:21', '2019-07-20 05:08:18'),
(2, 'Eshop', '', 'eshop@gmail.com', '$2y$10$6i/7XPPeQAtb1HDPY2wWSuF/5mprh39PweAcuDGRMk/mvsrhxFzmS', '', '', '', '', '', '', '', '', '8j2Cu80ZGFmAZyQTms85ZbMORDAZ8KvFAXkyIv5KbnrlFyUoak5Hbyp9gZfV', '2019-07-19 03:53:29', '2019-07-18 22:21:20'),
(3, 'test', '', 'test1@gmail.com', '$2y$10$l184sxGSM0Gf7UvU9D5Cb.cKxTe5DiNbULFO2w85t3xCjddXWTbTm', '', '', '', '', '', '', '', '', NULL, '2019-07-22 06:21:41', '2019-07-22 06:21:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_state_city`
--
ALTER TABLE `country_state_city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_attribute`
--
ALTER TABLE `product_attribute`
  ADD PRIMARY KEY (`attr_id`);

--
-- Indexes for table `product_mang`
--
ALTER TABLE `product_mang`
  ADD PRIMARY KEY (`mag_id`);

--
-- Indexes for table `shopname`
--
ALTER TABLE `shopname`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `shop_register`
--
ALTER TABLE `shop_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`sub_cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `country_state_city`
--
ALTER TABLE `country_state_city`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_attribute`
--
ALTER TABLE `product_attribute`
  MODIFY `attr_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_mang`
--
ALTER TABLE `product_mang`
  MODIFY `mag_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shopname`
--
ALTER TABLE `shopname`
  MODIFY `shop_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `shop_register`
--
ALTER TABLE `shop_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
