-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2023 at 05:52 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizzeria`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `creationdate` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderproducts`
--

CREATE TABLE `orderproducts` (
  `id` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `orderdate` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(150) NOT NULL,
  `type` varchar(10) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(150) NOT NULL,
  `creationdate` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `type`, `price`, `image`, `creationdate`) VALUES
(1, 'Peperoni Pizza', 'Tomato sauce, peperoni, olive oil, mozzarella, oregano, basil', 'pizza', 7, 'images/delivery/pepperoni.png', 'Fri, 10 Feb 2023 17:38:57 +0100'),
(2, 'Tomato Pizza', 'Tomato sauce, peperoni, olive oil, mozzarella, oregano, basil', 'pizza', 6, 'images/delivery/tomato.png', 'Fri, 10 Feb 2023 17:59:27 +0100'),
(3, 'Margharita Pizza', 'Tomato sauce, peperoni, olive oil, mozzarella, oregano, basil', 'pizza', 5, 'images/delivery/margharita.png', 'Fri, 10 Feb 2023 17:59:52 +0100'),
(4, 'Mushrooms Pizza', 'Tomato sauce, peperoni, olive oil, mozzarella, oregano, basil', 'pizza', 6, 'images/delivery/mushrooms.png', 'Fri, 10 Feb 2023 18:00:05 +0100'),
(5, 'Tuna Pizza', 'Tomato sauce, peperoni, olive oil, mozzarella, oregano, basil', 'pizza', 6, 'images/delivery/tuna.png', 'Fri, 10 Feb 2023 18:00:19 +0100'),
(6, 'Vegetarian Pizza', 'Tomato sauce, peperoni, olive oil, mozzarella, oregano, basil', 'pizza', 7, 'images/delivery/vegetarian.png', 'Fri, 10 Feb 2023 18:00:31 +0100'),
(7, 'Mozzaerlla Pizza', 'Tomato sauce, peperoni, olive oil, mozzarella, oregano, basil', 'pizza', 7, 'images/delivery/mozzaralla.png', 'Fri, 10 Feb 2023 18:00:44 +0100'),
(8, 'Olive Pizza', 'Olives, peperoni, olive oil, cheese, oregano, basil', 'pizza', 7, 'images/delivery/olive.png', 'Fri, 10 Feb 2023 18:04:04 +0100'),
(9, 'Bolognese', 'Tomato sauce, olive oil, oregano, cheese', 'pasta', 5, 'images/delivery/bolognese.png', 'Fri, 10 Feb 2023 18:10:51 +0100'),
(10, 'Carbonara', 'Bacon, parmesan, egg yolk, olive oil', 'pasta', 6, 'images/delivery/carbonara.png', 'Fri, 10 Feb 2023 18:14:46 +0100'),
(11, 'Cheese', 'Bacon, cheese, tomato sauce, olive oil', 'pasta', 5, 'images/delivery/cheesepasta.png', 'Fri, 10 Feb 2023 18:15:23 +0100'),
(12, 'Meatballs', 'Meatballs, Tomato sauce, olive oil, oregano, basil', 'pasta', 7, 'images/delivery/meatballs.png', 'Fri, 10 Feb 2023 18:23:22 +0100'),
(13, 'Tomato', 'Tomato sauce, olive oil, oregano, basil', 'pasta', 6, 'images/delivery/tomatopasta.png', 'Fri, 10 Feb 2023 18:24:17 +0100'),
(14, 'Vegetarian', 'Basil, olive oil, oregano, lime', 'pasta', 7, 'images/delivery/vegetarianpasta.png', 'Fri, 10 Feb 2023 18:25:17 +0100'),
(15, 'Water', 'Spring Water', 'drink', 1, 'images/delivery/water.png', 'Fri, 10 Feb 2023 18:32:35 +0100'),
(16, 'Sparkling Water', 'Mineral Water', 'drink', 1, 'images/delivery/sparkling.png', 'Fri, 10 Feb 2023 18:36:16 +0100'),
(17, 'Coca Cola', 'Soda', 'drink', 2, 'images/delivery/cola.png', 'Fri, 10 Feb 2023 18:38:12 +0100'),
(18, 'Coca Cola Zero', 'Soda sugar free', 'drink', 2, 'images/delivery/colazero.png', 'Fri, 10 Feb 2023 18:38:34 +0100'),
(19, 'Fanta', 'Soda', 'drink', 2, 'images/delivery/fanta.png', 'Fri, 10 Feb 2023 18:39:36 +0100'),
(20, 'Sprite', 'Soda', 'drink', 2, 'images/delivery/sprite.png', 'Fri, 10 Feb 2023 18:40:07 +0100'),
(21, 'Red Bull', 'Energy drink', 'drink', 3, 'images/delivery/redbull.png', 'Fri, 10 Feb 2023 18:40:22 +0100'),
(22, 'Nestea', 'Ice tea', 'drink', 2, 'images/delivery/icetea.png', 'Fri, 10 Feb 2023 18:40:49 +0100');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(6) NOT NULL,
  `registrationdate` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--
INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `registrationdate`) VALUES
(1, 'admin', 'admin@website.com', 'admin123', 'admin', '');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderproducts`
--
ALTER TABLE `orderproducts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderid` (`orderid`,`productid`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`userid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orderproducts`
--
ALTER TABLE `orderproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderproducts`
--
ALTER TABLE `orderproducts`
  ADD CONSTRAINT `orderproducts_ibfk_1` FOREIGN KEY (`orderid`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `orderproducts_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `products` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
