-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 30, 2022 at 10:03 PM
-- Server version: 8.0.31-0ubuntu0.22.04.1
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `business`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_table`
--

CREATE TABLE `business_table` (
  `id` int NOT NULL,
  `business_name` varchar(256) NOT NULL,
  `business_type` enum('Real State','Medical Services','eCommerce','Business Consultant','Financial Services') NOT NULL,
  `region` enum('India','Philippines','Latin America','United States of America') NOT NULL,
  `business_start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `assistant_type` enum('VA','Captain','Senior Captain') NOT NULL,
  `plan_subscribed` enum('199','399','799','999') NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `business_table`
--

INSERT INTO `business_table` (`id`, `business_name`, `business_type`, `region`, `business_start_date`, `assistant_type`, `plan_subscribed`, `last_modified`) VALUES
(1, 'Temp', 'Real State', 'Latin America', '2022-11-30 14:46:05', 'VA', '199', '2022-11-30 14:49:32'),
(2, 'Temp asd asd', 'Medical Services', 'Philippines', '2022-11-30 14:46:05', 'Senior Captain', '799', '2022-11-30 14:49:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business_table`
--
ALTER TABLE `business_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business_table`
--
ALTER TABLE `business_table`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
