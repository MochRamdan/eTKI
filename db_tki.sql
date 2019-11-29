-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2019 at 08:46 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tki`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id_article` int(11) NOT NULL,
  `title_article` text NOT NULL,
  `article` text NOT NULL,
  `modified_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id_article`, `title_article`, `article`, `modified_at`) VALUES
(3, 'What is Lorem Ipsum?', '<p><strong>\r\n\r\n<blockquote>Lorem Ipsum</blockquote></strong></p><p>\r\n\r\n<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n<br></p>', '2019-06-15 03:25:27'),
(4, 'Why do we use it?', '<p>\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<br></p>', '2019-06-15 03:24:05'),
(5, 'Where does it come from?', '<p>\r\n\r\n</p><p>Contrary to popular belief, Lorem Ipsum is not simply random <small>text</small>. It has roots in a piece of classical Latin literature from 45 BC, making it over <b>2000 years old</b>. <i>Richard McClintock</i>, <u>a Latin professor at Hampden-Sydney College in Virginia</u>, <small>looked up one of the more obscure Latin words</small>, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<br><p></p>', '2019-06-30 03:55:30');

-- --------------------------------------------------------

--
-- Table structure for table `image_products`
--

CREATE TABLE `image_products` (
  `id_image` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_products`
--

INSERT INTO `image_products` (`id_image`, `id_product`, `path`, `description`) VALUES
(32, 40, 'c5c5bfab44c4d75ef66f2a31394069c1.jpg', 'Gambar 1'),
(33, 39, 'c98860b5036a062c673666abf06091ac.jpg', 'Gambar 1'),
(34, 38, '4985973bc672bb4a5cb86b7383bc0b85.jpg', 'Gambar 1'),
(35, 30, '218171813eaf5ba902c037be6391ec0d.jpg', 'Gambar 1');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `main_message` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL,
  `unit` varchar(15) NOT NULL,
  `price` bigint(20) NOT NULL,
  `image` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `name_product`, `stock`, `unit`, `price`, `image`) VALUES
(26, 'Rengginang Terasi', 10, 'Kg', 40000, 0),
(27, 'Rengginang Original', 15, 'Kg', 38000, 0),
(28, 'Galendrong Mentah', 20, 'Kg', 38000, 0),
(29, 'Galendrong Merah', 10, 'Kg', 40000, 0),
(30, 'Kerupuk Cungur', 10, 'Kg', 40000, 1),
(31, 'Rengginang Manis', 10, 'Kg', 38000, 0),
(32, 'Kerupuk udang', 15, 'Kg', 20000, 0),
(33, 'Kerupuk Dorokdok', 5, 'Kg', 40000, 0),
(34, 'Kerupuk Usus', 10, 'Kg', 15000, 0),
(35, 'Kicimpring', 10, 'Kg', 40000, 0),
(36, 'Kerupuk Melarat', 10, 'Kg', 30000, 0),
(37, 'Kerupuk Bunga', 10, 'Kg', 30000, 0),
(38, 'Kerupuk Gurilem', 20, 'Kg', 40000, 1),
(39, 'Rangining', 15, 'Kg', 35000, 1),
(40, 'Kerupuk Metal', 20, 'Kg', 22000, 1),
(41, 'Bala Bala', 10, 'Kg', 2000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(100) NOT NULL,
  `password_user` varchar(50) NOT NULL,
  `level_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name_user`, `password_user`, `level_user`) VALUES
(1, 'ramdhan', 'itbage', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`);

--
-- Indexes for table `image_products`
--
ALTER TABLE `image_products`
  ADD PRIMARY KEY (`id_image`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `image_products`
--
ALTER TABLE `image_products`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
