-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2024 at 05:41 PM
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
-- Database: `2024_qvintus`
--

-- --------------------------------------------------------

--
-- Table structure for table `age_recommendation`
--

CREATE TABLE `age_recommendation` (
  `age_recommendation_id` int(11) NOT NULL,
  `age_range` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_author`
--

CREATE TABLE `table_author` (
  `author_id` int(11) NOT NULL,
  `a_fname` varchar(255) NOT NULL,
  `a_lname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_book`
--

CREATE TABLE `table_book` (
  `b_id` int(11) NOT NULL,
  `b_title` varchar(255) NOT NULL,
  `b_description` text NOT NULL,
  `b_date` date NOT NULL,
  `b_price` decimal(10,2) NOT NULL,
  `b_pages` varchar(255) NOT NULL,
  `b_language` varchar(255) NOT NULL,
  `b_series_id` int(11) NOT NULL,
  `b_publisher_id` int(11) NOT NULL,
  `b_age_recommendation_id` int(11) NOT NULL,
  `b_author_id` int(11) NOT NULL,
  `b_illustrator_id` int(11) NOT NULL,
  `b_category_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_category`
--

CREATE TABLE `table_category` (
  `category_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_illustrator`
--

CREATE TABLE `table_illustrator` (
  `illustrator_id` int(11) NOT NULL,
  `i_fname` varchar(255) NOT NULL,
  `i_lname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_publisher`
--

CREATE TABLE `table_publisher` (
  `publisher_id` int(11) NOT NULL,
  `p_fname` varchar(255) NOT NULL,
  `p_lname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_roles`
--

CREATE TABLE `table_roles` (
  `role_id` int(11) NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `r_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_roles`
--

INSERT INTO `table_roles` (`role_id`, `r_name`, `r_level`) VALUES
(1, 'Seller', '1'),
(2, 'Manager', '2'),
(3, 'Admin', '3');

-- --------------------------------------------------------

--
-- Table structure for table `table_series`
--

CREATE TABLE `table_series` (
  `series_id` int(11) NOT NULL,
  `s_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_users`
--

CREATE TABLE `table_users` (
  `user_id` int(11) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_password` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_role_fk` int(11) NOT NULL,
  `u_status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_users`
--

INSERT INTO `table_users` (`user_id`, `u_name`, `u_password`, `u_email`, `u_role_fk`, `u_status`) VALUES
(4, 'kebab', '$2y$10$0nAB8C6PCbCx9SXXXd8gheePQHwILkos7XzJyI7SksGyNfmYFFohq', 'kebab@gmail.com', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `age_recommendation`
--
ALTER TABLE `age_recommendation`
  ADD PRIMARY KEY (`age_recommendation_id`);

--
-- Indexes for table `table_author`
--
ALTER TABLE `table_author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `table_book`
--
ALTER TABLE `table_book`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `table_category`
--
ALTER TABLE `table_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `table_illustrator`
--
ALTER TABLE `table_illustrator`
  ADD PRIMARY KEY (`illustrator_id`);

--
-- Indexes for table `table_publisher`
--
ALTER TABLE `table_publisher`
  ADD PRIMARY KEY (`publisher_id`);

--
-- Indexes for table `table_roles`
--
ALTER TABLE `table_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `table_series`
--
ALTER TABLE `table_series`
  ADD PRIMARY KEY (`series_id`);

--
-- Indexes for table `table_users`
--
ALTER TABLE `table_users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `u_role_fk` (`u_role_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `age_recommendation`
--
ALTER TABLE `age_recommendation`
  MODIFY `age_recommendation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_author`
--
ALTER TABLE `table_author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_book`
--
ALTER TABLE `table_book`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_category`
--
ALTER TABLE `table_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_illustrator`
--
ALTER TABLE `table_illustrator`
  MODIFY `illustrator_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_publisher`
--
ALTER TABLE `table_publisher`
  MODIFY `publisher_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_roles`
--
ALTER TABLE `table_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_series`
--
ALTER TABLE `table_series`
  MODIFY `series_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_users`
--
ALTER TABLE `table_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table_users`
--
ALTER TABLE `table_users`
  ADD CONSTRAINT `table_users_ibfk_1` FOREIGN KEY (`u_role_fk`) REFERENCES `table_roles` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
