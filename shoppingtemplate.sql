-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2023 at 10:24 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingtemplate`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cards`
--

CREATE TABLE `tbl_cards` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_cards`
--

INSERT INTO `tbl_cards` (`id`, `product_id`) VALUES
(1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`id`, `category_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Clothes', '2023-01-18 06:33:26', NULL, NULL),
(2, 'Shoes', '2023-01-18 06:33:41', NULL, NULL),
(3, 'Hats', '2023-01-18 06:33:41', NULL, NULL),
(4, 'Bags', '2023-01-18 06:34:06', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

CREATE TABLE `tbl_comments` (
  `id` int(11) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `comments` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comments`
--

INSERT INTO `tbl_comments` (`id`, `user_image`, `username`, `product_id`, `comments`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '360_F_187145146_SB34n4kdiNqlVSvaTy4YUJcUWjNO540N.jpg', 'Merry', 2, 'hello', '2023-01-29 13:34:59', NULL, NULL),
(2, '360_F_187145146_SB34n4kdiNqlVSvaTy4YUJcUWjNO540N.jpg', 'Merry', 2, 'hello', '2023-01-29 14:22:30', NULL, NULL),
(3, '360_F_187145146_SB34n4kdiNqlVSvaTy4YUJcUWjNO540N.jpg', 'Merry', 2, 'dsfdsf', '2023-01-29 14:26:29', NULL, NULL),
(4, '360_F_187145146_SB34n4kdiNqlVSvaTy4YUJcUWjNO540N.jpg', 'Merry', 2, 'dsfdsf', '2023-01-29 14:26:30', NULL, NULL),
(5, '360_F_187145146_SB34n4kdiNqlVSvaTy4YUJcUWjNO540N.jpg', 'Merry', 2, 'dsfdsf', '2023-01-29 14:26:31', NULL, NULL),
(6, '360_F_187145146_SB34n4kdiNqlVSvaTy4YUJcUWjNO540N.jpg', 'Merry', 2, 'My Name is', '2023-01-29 14:26:45', NULL, NULL),
(7, '360_F_187145146_SB34n4kdiNqlVSvaTy4YUJcUWjNO540N.jpg', 'Merry', 2, 'I have younger sister', '2023-01-29 14:30:30', NULL, NULL),
(8, '360_F_187145146_SB34n4kdiNqlVSvaTy4YUJcUWjNO540N.jpg', 'Merry', 2, 'I have younger sister', '2023-01-29 14:30:32', NULL, NULL),
(9, '360_F_187145146_SB34n4kdiNqlVSvaTy4YUJcUWjNO540N.jpg', 'Merry', 2, 'I.....', '2023-01-29 14:31:17', NULL, NULL),
(10, '360_F_187145146_SB34n4kdiNqlVSvaTy4YUJcUWjNO540N.jpg', 'Merry', 2, 'I.....', '2023-01-29 14:31:18', NULL, NULL),
(11, '360_F_187145146_SB34n4kdiNqlVSvaTy4YUJcUWjNO540N.jpg', 'Merry', 2, 'hello', '2023-01-29 14:32:14', NULL, NULL),
(12, '360_F_187145146_SB34n4kdiNqlVSvaTy4YUJcUWjNO540N.jpg', 'Merry', 2, 'het', '2023-01-29 14:33:07', NULL, NULL),
(13, '360_F_187145146_SB34n4kdiNqlVSvaTy4YUJcUWjNO540N.jpg', 'Merry', 2, 'dsfdsf', '2023-01-29 14:34:17', NULL, NULL),
(14, '360_F_187145146_SB34n4kdiNqlVSvaTy4YUJcUWjNO540N.jpg', 'Merry', 2, 'hello', '2023-01-29 14:34:42', NULL, NULL),
(15, '360_F_187145146_SB34n4kdiNqlVSvaTy4YUJcUWjNO540N.jpg', 'Merry', 2, 'Oh my God', '2023-01-29 14:34:51', NULL, NULL),
(16, '360_F_187145146_SB34n4kdiNqlVSvaTy4YUJcUWjNO540N.jpg', 'Merry', 2, 'Showing results for how to make rating shopping in html css js Search instead for how to make rating shoppping in html css js', '2023-01-29 14:36:02', NULL, NULL),
(17, '360_F_187145146_SB34n4kdiNqlVSvaTy4YUJcUWjNO540N.jpg', 'Merry', 4, 'Hello', '2023-01-30 01:12:38', NULL, NULL),
(18, '360_F_187145146_SB34n4kdiNqlVSvaTy4YUJcUWjNO540N.jpg', 'Merry', 12, 'hello', '2023-01-31 11:22:58', NULL, NULL),
(19, '360_F_187145146_SB34n4kdiNqlVSvaTy4YUJcUWjNO540N.jpg', 'Merry', 11, '', '2023-01-31 11:25:03', NULL, NULL),
(20, '360_F_187145146_SB34n4kdiNqlVSvaTy4YUJcUWjNO540N.jpg', 'Merry', 11, 'My Name is', '2023-01-31 11:25:05', NULL, NULL),
(21, '360_F_187145146_SB34n4kdiNqlVSvaTy4YUJcUWjNO540N.jpg', 'Merry', 11, '', '2023-01-31 11:25:19', NULL, NULL),
(22, '360_F_187145146_SB34n4kdiNqlVSvaTy4YUJcUWjNO540N.jpg', 'Merry', 11, 'My Name is', '2023-01-31 11:26:36', NULL, NULL),
(23, '360_F_187145146_SB34n4kdiNqlVSvaTy4YUJcUWjNO540N.jpg', 'Merry', 11, 'My Name is', '2023-01-31 11:26:38', NULL, NULL),
(24, '360_F_187145146_SB34n4kdiNqlVSvaTy4YUJcUWjNO540N.jpg', 'Merry', 11, 'hey', '2023-01-31 11:26:42', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_description` longtext NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `main_category` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `product_image`, `product_name`, `product_description`, `product_price`, `category_name`, `main_category`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Blueberries Adult.jpg', 'Blue T-Shirt', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '15000', 'T-Shirt', 'Clothes', '2023-01-18 06:28:55', NULL, NULL),
(2, '610FqnGprqL._UX569_.jpg', 'Pink Beautiful Dress', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. ', '25000', 'Dress', 'Clothes', '2023-01-23 05:21:53', NULL, NULL),
(3, '61MYOQxWuhL._AC_SL1500_.jpg', 'Spot Red Dress', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '30000', 'Dress', 'Clothes', '2023-01-23 05:21:53', NULL, NULL),
(4, '71d2neZzmVL._AC_UF1000,1000_QL80_.jpg', 'Blue Cute Dress', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '28000', 'Dress', 'Clothes', '2023-01-23 05:45:28', NULL, NULL),
(5, '81h3pbS1hVL._UY879_.jpg', 'Flowers \nDress', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '35000', 'Dress', 'Clothes', '2023-01-23 05:45:28', NULL, NULL),
(6, '51u97bIlp5L._UX569_.jpg', 'Pink Cat Dress', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '30000', 'Dress', 'Clothes', '2023-01-23 05:47:01', NULL, NULL),
(7, 's-l1600.jpg', 'Bats T-Shirt', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '18000', 'T-Shirt', 'Clothes', '2023-01-23 05:47:01', NULL, NULL),
(8, '140105f8d0547625bf3ec80bec43a611_grande.jpg', 'Pink Unicorn Shirt', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '20000', 'T-Shirt', 'Clothes', '2023-01-23 05:50:04', NULL, NULL),
(9, 'A13usaonutL._AC_CLa_2140,2000_61FU40vc3xL.png_0,0,2140,2000+0.0,0.0,2140.0,2000.0_UF1000,1000_QL80_.jpg', 'Funny T-Shirt', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '15000', 'T-Shirt', 'Clothes', '2023-01-23 05:50:54', NULL, NULL),
(10, '89522s1.jpg', 'Disney T-Shirt', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', '18000', 'T-Shirt', 'Clothes', '2023-01-23 05:50:54', NULL, NULL),
(11, '51lUQuqRQmL._SS400_.jpg', 'Grey Jacket', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', '50000', 'Jacket', 'Clothes', '2023-01-23 06:07:03', NULL, NULL),
(12, 'Screenshot+2022-09-13+at+15.29.13.png', 'Dark Blue Sweater', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '40000', 'Sweater', 'Clothes', '2023-01-23 06:28:16', NULL, NULL),
(13, 'H9749488696dd41bd8937755ec0c6064ds.jpg_.jpg', 'Kid Clothes(Pairs)', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '30000', 'Kids', 'Clothes', '2023-01-23 06:28:16', NULL, NULL),
(14, '51iE7EF8EuL._AC_UL1200_.jpg', 'Between 5 to 10 (pairs)', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '30000', 'Kids', 'Clothes', '2023-01-23 06:43:20', NULL, NULL),
(15, 'images (2).jpg', 'Between 1 to 10 (pairs)', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '35000', 'Kids', 'Clothes', '2023-01-23 06:43:20', NULL, NULL),
(16, 'New-Winter-Children-Clothing-Baby-Girls-Clothes-Set-Velvet-Solid-Boys-Clothes-Hoodies-Sweatshirt-Pants-Tracksuit.jpg_640x640.jpg', 'Bear Winter Clothes ', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '30000', 'Kids', 'Clothes', '2023-01-23 06:53:02', NULL, NULL),
(17, 'Car_omni_genderneutral_rompers_toddkid.jpg', 'Rompers Kid(1 buy 1 free)', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '25000', 'Kids', 'Clothes', '2023-01-23 06:53:02', NULL, NULL),
(18, '614J9gOYZDL._AC_UF894,1000_QL80_.jpg', 'Black Jacket', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '50000', 'Jacket', 'Clothes', '2023-01-23 07:07:35', NULL, NULL),
(19, '1662744659-jkerther-women-s-y2k-print-sweater-v-neck-long-sleeve-cardigan-1662744648.jpg', 'Beautiful Sweater', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '35000', 'Sweater', 'Clothes', '2023-01-23 07:11:48', NULL, NULL),
(20, 'pull-upa.jpg', 'Short Trousers', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '30000', 'Trousers', 'Clothes', '2023-01-23 07:11:48', NULL, NULL),
(21, 'nils_trousers_m_81752-550_a_main_fjr.jpg', 'Nils Trousers', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '35000', 'Trousers', 'Clothes', '2023-01-23 07:13:27', NULL, NULL),
(22, 'SCV021231_1024x1024.jpg', 'Christmas Dress', 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like', '40000', 'Christmas Dress', 'Clothes', '2023-01-23 07:27:27', NULL, NULL),
(23, 'H28e3679ba22d4de99e0cedd2ab07c554M.jpg_300x300.jpg', 'Cute Kid Cloth (pairs)', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '30000', 'Kids', 'Clothes', '2023-01-23 07:34:49', NULL, NULL),
(24, 'images3.jpg', 'Couple Baby Clothes', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '40000', 'Kids', 'Clothes', '2023-01-23 07:34:49', NULL, NULL),
(25, '71ATyZ26AsL._AC_SX425_.jpg', 'Christmas Dress', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '40000', 'Christmas Dress', 'Clothes', '2023-01-23 08:25:40', NULL, NULL),
(26, 'ovik_knit_sweater_m_81829-555_a_main_fjr.jpg', 'Grey Sweater', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '35000', 'Sweater', '', '2023-01-24 06:23:36', NULL, NULL),
(27, 'Wedding Pumps shoes.jpg', 'Wedding Pumps', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '30000', 'Pumps', 'Shoes', '2023-01-28 06:44:20', NULL, NULL),
(28, 'alessandra-rich-fab-pumps-white-black-toe-610x610.jpeg', 'SlingBack Shoes', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '25000', 'Slingback', 'Shoes', '2023-01-28 06:44:20', NULL, NULL),
(29, 'png-transparent-shoe-high-heeled-footwear-wedding-dress-bride-rose-shoes-white-wedding-fashion-thumbnail.png', 'Flower Wedding Pumps', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '35000', 'Pumps', 'Shoes', '2023-01-28 12:50:31', NULL, NULL),
(30, '1648166714-roger-vivier-white-satin-pumps-1648166681.jpg', 'Beautiful Pumps', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '25000', 'Pumps', 'Shoes', '2023-01-28 12:50:31', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

CREATE TABLE `tbl_rating` (
  `id` int(11) NOT NULL,
  `numstar` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'May ShoonLai zaw', 'zawm54188@gmail.com', '$2y$10$0xIgHIlg/XMElE2X4X592.SFaMKG3lX9RHUZnxcbE.M5u3FjOH8dK', '2023-02-13 07:14:01', NULL, NULL),
(2, 'May ShoonLai zaw', '123456780@gmai.com', '$2y$10$nb5adEfNknfnOYcjxw.TYenynXwaSDugYzexkYimqgJJZlyo0OAM.', '2023-02-14 08:23:34', NULL, NULL),
(3, 'MZaw3112', 'zawm541880@gmail.com', '$2y$10$586WQosHrmxGzuiY/0YRSOzoahdS3mVdkEdXAWXKbm7g9grngmXjS', '2023-02-14 08:25:48', NULL, NULL),
(4, 'fd123456780', 'dfaaf@gmail.com', '$2y$10$KGmvbcJlL21e6vUw17PCUOVsfuUKQkBh6EQBm3H2yceJRuc09kO2K', '2023-02-14 09:49:57', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cards`
--
ALTER TABLE `tbl_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cards`
--
ALTER TABLE `tbl_cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
