-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2023 at 03:51 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(10) NOT NULL,
  `cat_name` varchar(20) DEFAULT NULL,
  `cat_status` varchar(10) DEFAULT 'avail'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_status`) VALUES
(8, 'Beverage', 'dis'),
(9, 'Starters/Fast Food/S', 'dis'),
(10, 'Main Course', 'dis'),
(11, 'Sweet Dishes', 'dis'),
(12, 'Ice Cream', 'avail'),
(13, 'Main Course', 'avail'),
(14, 'Fast Food', 'avail'),
(15, 'Sweet Dishes', 'avail'),
(16, 'Beverages', 'avail'),
(17, 'Main Cource', 'avail'),
(18, 'paneer', 'avail');

-- --------------------------------------------------------

--
-- Table structure for table `dish`
--

CREATE TABLE `dish` (
  `dish_id` int(10) NOT NULL,
  `dish_name` varchar(20) DEFAULT NULL,
  `dish_details` varchar(200) DEFAULT NULL,
  `dish_price` float DEFAULT NULL,
  `dish_imagename` varchar(30) DEFAULT NULL,
  `dish_category` int(30) DEFAULT NULL,
  `dish_status` varchar(30) DEFAULT 'avail'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dish`
--

INSERT INTO `dish` (`dish_id`, `dish_name`, `dish_details`, `dish_price`, `dish_imagename`, `dish_category`, `dish_status`) VALUES
(1, 'MALAI KUFTA', 'Creamy, rich and indulgent, this recipe makes restaurant style Malai Kofta at home! Deep fried balls made of potato and paneer are served with a creamy tomato based gravy/curry! So good with naan.', 180, 'kadai murg.jpg', 13, 'avail'),
(2, 'BUTTER CHIKEN', 'Butter chicken, traditionally known as murgh makhani (pronounced [mÊŠrg ËˆmÉ™k.kÊ°É™.ni]), is an Indian dish originating in New Delhi.[1][2] It is a type of curry made from chicken with a spiced tomat', 300, 'butter-chicken.jpg', 13, 'avail'),
(3, 'DAHI WALA AALO', 'I really think, in fact believe that if you visit any household in India, you will find Aloo (Potato) at any given point in time, all year round. It is just a very handy veggie for all of us. Somewhat', 140, 'Dahi wala aloo.jpg', 13, 'avail'),
(4, 'Chocolate Ice Cream', 'was one of the first ice cream', 100, 'choco.jpg', 13, 'dis'),
(5, 'Chocolate Ice Cream', ' unfrozen desserts.[2] Latini produced two recipes for ices based on the drink, both of which contained only chocolate and sugar.', 100, 'choco.jpg', 12, 'avail'),
(6, 'Chocolate Ice Cream1', 'jsakdjkdlfm', 120, 'choco.jpg', 12, 'dis'),
(7, 'Strawberry Ice Cream', 'Strawberry ice cream is a flavor of ice cream made with strawberry or strawberry flavoring. It is made by blending in fresh strawberries or strawberry flavoring with the eggs, cream, vanilla and sugar', 200, 'Strawberry-Mint-Ice-.jpg', 12, 'avail'),
(8, 'Samosa Chat', 'A samosa or singara is a fried South Asian pastry with a savory filling, including ingredients such as spiced potatoes, onions, and peas', 55, 'Samosa-Chaat.jpg', 14, 'avail'),
(9, 'Tikki Chaat', 'Alu chat is mainly a street food. It can be served as a snack, a side dish or a light meal.[1] It is made from boiled and fried cubed potatoes served with chat masala. It is a versatile dish that has ', 45, 'Tikki-Chaat.jpg', 14, 'avail');

-- --------------------------------------------------------

--
-- Table structure for table `dish_details`
--

CREATE TABLE `dish_details` (
  `id` int(10) NOT NULL,
  `dish_id` int(10) DEFAULT NULL,
  `attribute` varchar(20) DEFAULT NULL,
  `price` int(20) DEFAULT NULL,
  `status` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_master`
--

CREATE TABLE `order_master` (
  `id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `p_id` int(10) DEFAULT NULL,
  `total_price` float DEFAULT NULL,
  `booking_date` date DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `payment_status` varchar(10) DEFAULT 'unpaid',
  `order_status` varchar(20) DEFAULT 'underprocess'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `order_master`
--

INSERT INTO `order_master` (`id`, `user_id`, `p_id`, `total_price`, `booking_date`, `quantity`, `payment_status`, `order_status`) VALUES
(1, 18, 1, 1800, '2022-11-26', 10, 'paid', 'done'),
(2, 19, 1, 1800, '2022-03-11', 10, 'paid', 'done'),
(3, 19, 2, 3000, '2022-03-01', 10, 'paid', 'done'),
(4, 19, 1, 1800, '2022-12-15', 10, 'unpaid', 'underprocess'),
(5, 20, 1, 900, '2022-12-12', 5, 'unpaid', 'underprocess'),
(6, 20, 1, 180, '2023-06-17', 1, 'unpaid', 'underprocess');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(30) DEFAULT NULL,
  `admin_password` varchar(10) DEFAULT NULL,
  `admin_email` varchar(50) DEFAULT NULL,
  `admin_type` varchar(10) DEFAULT 'user',
  `admin_image` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`admin_id`, `admin_name`, `admin_password`, `admin_email`, `admin_type`, `admin_image`) VALUES
(17, 'naina', '12345', 'naina113@gmail.com', 'admin', 'profile.jpg'),
(18, 'rishita', 'rishita', 'rishita@gmail.com', 'admin', 'Mango-Mastani.jpg'),
(19, 'navya', 'navya', 'navya@gmail.com', 'user', 'badam-kesar mike.jpg'),
(20, 'natasha', '12345', 'nainavishwakarma121@gmail.com', 'user', 'cock.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `dish`
--
ALTER TABLE `dish`
  ADD PRIMARY KEY (`dish_id`),
  ADD KEY `FK_dish` (`dish_category`);

--
-- Indexes for table `dish_details`
--
ALTER TABLE `dish_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_master`
--
ALTER TABLE `order_master`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_order_master` (`p_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `dish`
--
ALTER TABLE `dish`
  MODIFY `dish_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_master`
--
ALTER TABLE `order_master`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dish`
--
ALTER TABLE `dish`
  ADD CONSTRAINT `FK_dish` FOREIGN KEY (`dish_category`) REFERENCES `category` (`cat_id`);

--
-- Constraints for table `order_master`
--
ALTER TABLE `order_master`
  ADD CONSTRAINT `FK_order_master` FOREIGN KEY (`p_id`) REFERENCES `dish` (`dish_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
