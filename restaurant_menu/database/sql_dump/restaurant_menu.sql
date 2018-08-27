-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2018 at 12:50 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant_menu`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(11) NOT NULL,
  `menu_type_id` int(11) NOT NULL,
  `menu_item` varchar(255) NOT NULL,
  `item_description` longtext NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_type_id`, `menu_item`, `item_description`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mozzarella Sticks', 'Deliciously fried sticks of cheese', '9', '2018-08-26 04:11:51', '2018-08-26 04:11:51'),
(2, 1, 'Nachos', 'Irish nachos, topped with sour cream and scallions.', '11', '2018-08-26 00:48:25', '2018-08-26 00:48:25'),
(5, 3, 'BLT', 'Delicious bacon, lettuce, and tomato sandwich on healthy wheat bread. With a side of cole slaw.', '9', '2018-08-26 22:18:41', '2018-08-26 22:18:41'),
(6, 3, 'Cheeseburger', 'Delicious half-pound cheeseburger, with a hefty side of fries.', '12', '2018-08-26 22:22:27', '2018-08-26 22:22:27'),
(7, 4, 'Steak', '72oz steak with mashed potatoes.', '23', '2018-08-26 22:32:39', '2018-08-26 22:32:39'),
(8, 5, 'Cheesecake', 'Delicious piece of cheesecake', '7', '2018-08-26 22:40:29', '2018-08-26 22:40:29'),
(9, 2, 'Peanut butter and jelly sandwich', 'This is a standard sandwich.', '3', '2018-08-26 22:46:29', '2018-08-26 22:46:29'),
(10, 6, 'Soda', 'Classic soda drink', '2', '2018-08-26 22:51:46', '2018-08-26 22:51:46'),
(11, 4, 'Cheese sandwich', 'blah', '4', '2018-08-26 22:52:49', '2018-08-26 22:52:49'),
(12, 4, 'Pizza', '12" pan pizza', '9', '2018-08-26 23:09:46', '2018-08-26 23:09:46'),
(13, 4, 'Spaghetti', 'Spaghetti with meatballs', '10', '2018-08-26 23:10:23', '2018-08-26 23:10:23'),
(14, 4, 'Lasagna', 'Three-cheese lasagna, comes with or without meat sauce.', '18', '2018-08-27 00:06:17', '2018-08-27 00:06:17'),
(15, 5, 'Chocolate brownie volcano', 'This item starts with a warm brownie, topped off with 2 scoops of ice cream. Additional toppings available.', '8', '2018-08-27 00:08:52', '2018-08-27 00:08:52');

-- --------------------------------------------------------

--
-- Table structure for table `menu_types`
--

CREATE TABLE `menu_types` (
  `id` int(11) NOT NULL,
  `menu_type_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_types`
--

INSERT INTO `menu_types` (`id`, `menu_type_name`, `created_at`, `updated_at`) VALUES
(1, 'Appetizers', '2018-08-26 03:02:37', '2018-08-26 03:02:37'),
(2, 'Breakfast', '2018-08-26 03:06:32', '2018-08-26 03:06:32'),
(3, 'Lunch', '2018-08-26 03:09:51', '2018-08-26 03:09:51'),
(4, 'Dinner', '2018-08-26 03:10:00', '2018-08-26 03:10:00'),
(5, 'Dessert', '2018-08-26 03:10:29', '2018-08-26 03:10:29'),
(6, 'Drinks', '2018-08-26 00:33:41', '2018-08-26 00:33:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `logical_delete_ind` char(1) NOT NULL DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `created_at`, `updated_at`, `logical_delete_ind`) VALUES
(1, 'tson', 'testpassword', 'tom', 'sonnemann', '2018-08-25 23:05:47', '2018-08-25 17:32:39', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_types`
--
ALTER TABLE `menu_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pkUserName` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `menu_types`
--
ALTER TABLE `menu_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
