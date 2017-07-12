-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 12, 2017 at 02:17 PM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ourweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(10) NOT NULL,
  `subject` varchar(100) COLLATE utf8_bin NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `text` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `factors`
--

CREATE TABLE `factors` (
  `id` int(11) NOT NULL,
  `code` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `receipt_code` varchar(20) COLLATE utf8_persian_ci DEFAULT NULL,
  `name` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_persian_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `paid` tinyint(1) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `factors`
--

INSERT INTO `factors` (`id`, `code`, `receipt_code`, `name`, `description`, `phone`, `email`, `paid`, `date`) VALUES
(7, 'asd', '32432', 'علی رصا', 'سایت فلانsdfsdf', '09173080016', 'amin@amin.com', 0, '2017-07-12 09:21:27');

-- --------------------------------------------------------

--
-- Table structure for table `factor_items`
--

CREATE TABLE `factor_items` (
  `id` int(11) NOT NULL,
  `factor_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `factor_items`
--

INSERT INTO `factor_items` (`id`, `factor_id`, `title`, `price`) VALUES
(1, 5, 'sdfsdfsdfsdf', 1000),
(2, 5, 'سیو فلان', 50000),
(3, 3, 'قالب اماده', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'amin@amin.com', 'fe44c8513f722779c557089ac8ec54f2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `factors`
--
ALTER TABLE `factors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `factor_items`
--
ALTER TABLE `factor_items`
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
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `factors`
--
ALTER TABLE `factors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `factor_items`
--
ALTER TABLE `factor_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
