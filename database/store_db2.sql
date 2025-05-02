-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2025 at 09:46 AM
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
-- Database: `store_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(20) NOT NULL,
  `category_entrydate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_entrydate`) VALUES
(1, 'Kamrul Has', '2025-05-29'),
(2, 'Pen', '2024-03-29'),
(3, 'Court File', '2025-05-06'),
(4, 'Pencil', '2025-05-29'),
(5, 'Geometry Box', '2025-05-29'),
(6, 'Khata', '2025-05-29'),
(7, 'Eraser', '2025-05-29'),
(8, 'Kamrul Has', '2025-05-29'),
(9, 'Kamrul Hasan', '2025-05-29'),
(10, 'Jodu', '2025-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_category` int(3) NOT NULL,
  `product_code` varchar(10) NOT NULL,
  `product_entry_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_category`, `product_code`, `product_entry_date`) VALUES
(1, '122', 0, 'sss', '2025-05-01'),
(2, '122', 0, 'sss', '2025-05-01'),
(3, 'fdgfd', 0, 'fdgfdgdf', '2025-05-06'),
(4, 'abc', 0, 'abc001', '2025-04-02'),
(5, 'abc', 0, 'abc001', '2025-04-02'),
(6, 'Kamrul', 0, 'khata001', '2025-05-01'),
(7, 'Kamrul', 0, 'khata001', '2025-05-01'),
(8, 'Kamrul02', 0, 'eraser', '2025-05-02'),
(9, 'Kamrul02', 0, 'eraser', '2025-05-02'),
(10, 'Kamrul03', 0, 'khata002', '2025-05-02'),
(11, 'Kamrul03', 0, 'khata002', '2025-05-02'),
(12, 'Kamrul04', 7, 'eraser01', '2025-05-02'),
(13, 'JJJJJJJJJJJJJJJJJJ', 4, 'khata001', '2025-05-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
