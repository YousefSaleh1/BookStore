-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 03:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(11, 'history', 'Book 7.jpg', '2023-12-06 21:22:46', '2023-12-06 21:22:46'),
(16, 'Stories', 'stories.jpg', '2023-12-15 18:31:38', '2023-12-15 18:31:38'),
(17, 'scientific', '', '2023-12-15 18:52:09', '2023-12-15 18:51:46');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `details` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `details`, `image`, `category_name`, `created_at`, `updated_at`) VALUES
(53, 'The Hobbit', 1200, 'Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem', 'Book 7.jpg', 'history', '2023-12-11 13:31:09', '2023-12-06 21:23:56'),
(57, 'android studio', 121, 'scientific book ', 'android_studio.jpg', 'scientific', '2023-12-15 18:56:43', '2023-12-11 13:25:03'),
(58, 'c++', 343, 'programmer book', 'learing c++.jpg', 'scientific', '2023-12-15 18:56:22', '2023-12-11 13:26:10'),
(59, 'قصص العرب ', 100, 'عرض شامل لحياة العرب وحضارتهم ', 'قصص العرب.jpg', 'Stories', '2023-12-15 18:35:22', '2023-12-15 18:35:22'),
(60, 'كليلة ودمنة ', 200, 'قصص وحكم ', 'كليلة-ودمنة.jpg', 'Stories', '2023-12-15 18:37:32', '2023-12-15 18:37:32'),
(61, 'Stories in die wind', 200, 'Ten stories that the people of the the Richtersveld, Namakwaland and Kalahari would tell', 'Die wind.png', 'Stories', '2023-12-15 18:39:35', '2023-12-15 18:39:35'),
(62, 'مصر القديمة', 230, 'تاريخ الفراعنة ومصر القديمة ', 'مصر القديمة.jpg', 'history', '2023-12-15 18:44:04', '2023-12-15 18:44:04'),
(63, 'مختصر تاريخ اوروبا ', 100, 'سيرة القارة العجوز قبل ان تصبح اورويا التي نعرفها ', 'مختصر تاريخ أوروبا.jpg', 'history', '2023-12-15 18:45:19', '2023-12-15 18:45:19'),
(64, 'الطب النبوي ', 100, 'الطب النبوي ', 'الطب النبوي.jpg', 'scientific', '2023-12-15 18:55:07', '2023-12-15 18:55:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_up` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `role`, `created_at`, `updated_up`) VALUES
(7, 'user', 'user@gmail.com', 'c129b324aee662b04eccf68babba85851346dff9', '765765', 0, '2023-12-16 14:44:53', '2023-12-14 20:35:36'),
(8, 'admin', 'admin@gmail.com', '7b902e6ff1db9f560443f2048974fd7d386975b0', '1233445345', 1, '2023-12-14 20:45:04', '2023-12-14 20:44:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorites_ibfk_1` (`user_id`),
  ADD KEY `favorites_ibfk_2` (`book_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favorites_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
