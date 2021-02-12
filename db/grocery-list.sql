-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2021 at 06:14 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery-list`
--

-- --------------------------------------------------------

--
-- Table structure for table `grocery`
--

CREATE TABLE `grocery` (
  `id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_status` varchar(50) NOT NULL,
  `item_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grocery`
--

INSERT INTO `grocery` (`id`, `item_name`, `item_quantity`, `item_status`, `item_date`) VALUES
(1, 'Apple', 5, 'Brought', '2021-02-12');
(2, 'Egg', 12, 'Brought', '2021-02-12');
(3, 'Potato', 7, 'Brought', '2021-02-12');
(4, 'Tomato', 5, 'Brought', '2021-02-12');
(5, 'Onion', 2, 'Pending', '2021-02-12');
(6, 'Oranges', 2, 'Pending', '2021-02-12');
(7, 'Milk', 1, 'Brought', '2021-02-12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `created_on`, `updated_on`) VALUES
(1, 'Admin', 'High', 'admin@admin.com', '$2y$10$06v56v5BrNzw4MvzNWm1TOqRMBEnxGis1hM8EtI4hDKTtR.miLM5C', '2021-02-11 04:41:40', '0000-00-00 00:00:00'),
(2, 'Test1', 'High', 'test1@admin.com', '$2y$10$kLvRGN6cknj/4mwV2lrHuu0tikTdIsTNbTNFwIV5F.ErSL4nswgW2', '2021-02-11 08:03:55', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grocery`
--
ALTER TABLE `grocery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grocery`
--
ALTER TABLE `grocery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
