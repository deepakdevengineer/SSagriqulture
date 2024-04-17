-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2024 at 01:31 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u904396694_sswebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(11) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `username`, `password`, `email`, `code`, `date`) VALUES
(6, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '', '2023-12-05 15:51:09'),
(7, 'Deepak7', '7a777002123c1aaf441227ba30c23923', '', '', '2024-01-14 12:24:02'),
(8, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '', '2024-01-30 11:00:11'),
(9, 'ssagri', 'f429b12344230b86b7062c4a4a72a7dc', '', '', '2024-02-02 16:29:15');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `rs_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `title` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`rs_id`, `c_id`, `title`, `date`) VALUES
(13, 0, 'livemicrogreens', '2024-04-09 17:03:09'),
(14, 0, 'cultivator', '2024-04-11 15:56:59');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `d_id` int(11) NOT NULL,
  `rs_id` int(11) NOT NULL,
  `title` varchar(222) NOT NULL,
  `slogan` varchar(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`d_id`, `rs_id`, `title`, `slogan`, `price`, `img`) VALUES
(25, 1, 'Dish 7', 'this is what is', 5000.00, '6579886205074.png'),
(30, 13, 'Immunity Booster Pack', 'Immunity Booster Pack', 1600.00, '6615753ac21f8.png'),
(31, 14, 'Immunity Booster Pack', 'Immunity Booster Pack', 1400.00, '661809edbcf15.png'),
(32, 14, 'Detox Pack', 'Detox Pack', 1600.00, '66180a205e278.png');

-- --------------------------------------------------------

--
-- Table structure for table `remark`
--

CREATE TABLE `remark` (
  `id` int(11) NOT NULL,
  `frm_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `remark`
--

INSERT INTO `remark` (`id`, `frm_id`, `status`, `remark`, `remarkDate`) VALUES
(16, 25, 'in process', 'qqq', '2023-11-28 10:25:23'),
(17, 0, 'closed', 'Your order is on the way', '2023-12-09 12:59:17'),
(18, 0, 'in process', 'dd', '2023-12-09 13:06:00'),
(19, 1, 'rejected', 'Canceled', '2023-12-09 15:10:22'),
(20, 3, 'closed', 'Deliver', '2023-12-09 15:10:53'),
(21, 7, 'in process', 'Order is on the way', '2023-12-13 14:15:08');

-- --------------------------------------------------------

--
-- Table structure for table `res_category`
--

CREATE TABLE `res_category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `res_category`
--

INSERT INTO `res_category` (`c_id`, `c_name`, `date`) VALUES
(1, 'Continental', '2022-05-27 08:07:35'),
(2, 'Italian', '2021-04-07 08:45:23'),
(3, 'Chinese', '2021-04-07 08:45:25'),
(4, 'American', '2021-04-07 08:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `username` varchar(222) NOT NULL,
  `f_name` varchar(222) NOT NULL,
  `l_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `pincode` varchar(10) NOT NULL DEFAULT '000000',
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `address`, `status`, `pincode`, `date`) VALUES
(19, 'Deepak7', 'Deepak', 'k', 'dk78834@gmail.com', '+917011238959', 'fcc9a215009de59c85c88ae3bbcfd7e9', 'A-376, Gali No-5\r\n5-PKT Sonia Vihar', 1, '110094', '2024-01-14 11:52:29'),
(20, 'David7', 'David', 'D', 'Dagas55@gmail.com', '8515554525', 'fcc9a215009de59c85c88ae3bbcfd7e9', 'agssdgsgdsdgwsg', 1, '110094', '2024-01-21 12:59:07'),
(21, 'qwerty12345', 'qwerty12345', 'qwerty12345', 'qwerty12345@gmail.com', '7858584585', '85064efb60a9601805dcea56ec5402f7', 'Delhi', 1, '110094', '2024-04-11 16:49:57');

-- --------------------------------------------------------

--
-- Table structure for table `users_orders`
--

CREATE TABLE `users_orders` (
  `order_id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `order_date` timestamp NULL DEFAULT current_timestamp(),
  `razorpay_order_id` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_orders`
--

INSERT INTO `users_orders` (`order_id`, `u_id`, `title`, `quantity`, `price`, `payment_id`, `order_date`, `razorpay_order_id`) VALUES
(33, 20, 'Dish 5', 1, 500.00, 'pay_NUnSUpub0TEaPG', '2024-01-30 05:19:43', 'order_NUnSG13E90Nn6G'),
(32, 20, 'Dish 5', 1, 500.00, 'pay_NUnK7mXMNUYyPS', '2024-01-30 05:11:47', 'order_NUnJucnxMmTK0m'),
(34, 20, 'Dish 3 ', 6, 400.00, 'pay_NUoE9lBOL9Q97j', '2024-01-30 06:04:50', 'order_NUoDyfcyz2nU8W'),
(35, 20, 'Dish 3 ', 6, 400.00, 'pay_NUoGwpel0p1N2o', '2024-01-30 06:07:29', 'order_NUoGlYXRicix7G'),
(36, 20, 'Dish 3 ', 1, 400.00, 'pay_NUoVADFrYNDSzS', '2024-01-30 06:20:57', 'order_NUoUwS5OSgIt4x'),
(37, 20, 'Dish 3 ', 1, 400.00, 'pay_NUoWz6g8l1aI9L', '2024-01-30 06:22:40', 'order_NUoWpMNOfhofmA'),
(38, 20, 'Dish 3 ', 1, 400.00, 'pay_NUpjUhC7w8gom3', '2024-01-30 07:33:15', 'order_NUpj1vUcDj8ONi'),
(39, 21, 'Detox Pack', 1, 1600.00, 'pay_NxO4ga26YJoFLf', '2024-04-11 11:20:53', 'order_NxO4OeMLowctNv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`rs_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `remark`
--
ALTER TABLE `remark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `res_category`
--
ALTER TABLE `res_category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `users_orders`
--
ALTER TABLE `users_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `rs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `remark`
--
ALTER TABLE `remark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `res_category`
--
ALTER TABLE `res_category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users_orders`
--
ALTER TABLE `users_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
