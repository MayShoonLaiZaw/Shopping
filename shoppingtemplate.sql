-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2023 at 10:55 AM
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
-- Table structure for table `tbl_clothes`
--

CREATE TABLE `tbl_clothes` (
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
-- Dumping data for table `tbl_clothes`
--

INSERT INTO `tbl_clothes` (`id`, `product_image`, `product_name`, `product_description`, `product_price`, `category_name`, `main_category`, `created_at`, `updated_at`, `deleted_at`) VALUES
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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shoes`
--

CREATE TABLE `tbl_shoes` (
  `shoes_id` int(11) NOT NULL,
  `shoes_image` varchar(255) NOT NULL,
  `shoes_name` varchar(255) NOT NULL,
  `shoes_description` longtext NOT NULL,
  `shoes_price` varchar(50) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `main_category` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_shoes`
--

INSERT INTO `tbl_shoes` (`shoes_id`, `shoes_image`, `shoes_name`, `shoes_description`, `shoes_price`, `category_name`, `main_category`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Wedding Pumps shoes.jpg', 'Wedding Pumps', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '30000', 'Pumps', 'Shoes', '2023-01-27 09:58:52', NULL, NULL),
(2, 'alessandra-rich-fab-pumps-white-black-toe-610x610.jpeg', 'SlingBack Shoes', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '25000', 'Slingback', 'Shoes', '2023-01-27 09:58:53', NULL, NULL),
(3, 'png-transparent-shoe-high-heeled-footwear-wedding-dress-bride-rose-shoes-white-wedding-fashion-thumbnail.png', 'Flower Wedding Pumps', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '35000', 'Pumps', 'Shoes', '2023-01-27 10:36:53', NULL, NULL),
(4, '1648166714-roger-vivier-white-satin-pumps-1648166681.jpg', 'Beautiful Pumps', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '25000', 'Pumps', 'Shoes', '2023-01-27 10:36:53', NULL, NULL),
(5, '347660996-14101-Beautiful-Shoes.jpg', 'Pumps Shoes', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '35000', 'Pumps', 'Shoes', '2023-01-27 10:41:54', NULL, NULL),
(6, 'eab2da88-016c-4d86-b859-d4675ae3f5b5_rs_768.png', 'Black Pumps', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '32000', 'Pumps', 'Shoes', '2023-01-27 10:41:54', NULL, NULL),
(7, 'black-patent-sexy-peep-toe-slingback-platforms-super-high-stiletto-heels-shoes-zvoof-a13700-720x720.jpg', 'Peep Toe SlingBack', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '30000', 'Slingback', 'Shoes', '2023-01-27 10:44:06', NULL, NULL),
(8, 'marion-crystal-bridal-pumps-white-satin.jpg', 'White SlingBack', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '35000', 'SlingBack', 'Shoes', '2023-01-27 10:44:06', NULL, NULL),
(9, 'bow+wedidng+heels.jpg', 'Wedding SlingBack', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '40000', 'SlingBack', 'Shoes', '2023-01-27 11:14:28', NULL, NULL),
(10, '2f3a9_512.jpg', 'Black SlingBack', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '35000', 'SlingBack', 'Shoes', '2023-01-27 11:14:28', NULL, NULL),
(11, '61yifX5sgjL._UL1280_.jpg', 'Men Sandal Shoes', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '35000', 'Sandal', 'Shoes', '2023-01-27 11:46:31', NULL, NULL),
(12, '91CD5zb7aeL._AC_UL320_.jpg', 'Sneakers Shoes', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '40000', 'Sneakers', 'Shoes', '2023-01-27 11:46:31', NULL, NULL),
(13, 'baby-shoes-regular-1000x1000.jpg', 'Baby Boy Shoes', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '30000', 'Kids', 'Shoes', '2023-01-27 11:52:22', NULL, NULL),
(14, 'baby-shoes_1203-6983.jpg', 'Between 1 to 5', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '40000', 'Kids', 'Shoes', '2023-01-27 11:52:22', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `user_image`, `username`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '360_F_187145146_SB34n4kdiNqlVSvaTy4YUJcUWjNO540N.jpg', 'Merry', '1234567890', '2023-01-29 09:06:59', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_clothes`
--
ALTER TABLE `tbl_clothes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_shoes`
--
ALTER TABLE `tbl_shoes`
  ADD PRIMARY KEY (`shoes_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_clothes`
--
ALTER TABLE `tbl_clothes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_shoes`
--
ALTER TABLE `tbl_shoes`
  MODIFY `shoes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
