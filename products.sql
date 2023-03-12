-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2023 at 11:36 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(155) NOT NULL,
  `email` varchar(155) NOT NULL,
  `number` int(11) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `number`, `message`) VALUES
(1, '0', '0', 4565535, 'hey');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_image` varchar(155) NOT NULL,
  `product_name` varchar(155) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_price` decimal(10,0) NOT NULL,
  `actual_price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_image`, `product_name`, `product_description`, `product_price`, `actual_price`) VALUES
(1, '45.jpg', 'PETER THOMSAN', 'Petter Thomas Roth Wter Drench <br>Hyraluronic Cloud Cream 50ml            ', '25', '55'),
(2, '78.jpg', 'AROMATHERAPY ASSOCIATES', 'light Relax Bath and <br> Shower Oil 50ml', '35', '65'),
(3, '96.jpg', 'CHRISTOPHE ROBIN', 'Shade Variation Care Golden Blonde', '50', '100'),
(4, '41.jpg', 'FARMACY BEAUTY', 'Wake up Honey Eye Cream', '41', '84'),
(5, '33.jpg', 'SKIN CEUTICALS', 'SkinCeutials C E Ferulic <br>Ascorbic Acid Vitamin C Serum 30ml', '36', '65'),
(6, '99.jpg', 'BIOEFFECT EGF', 'Eye Serum 6ml', '71', '150'),
(7, '77.jpg', 'AUGUSTINUS BADER', 'The leave-in Hair Treatment', '69', '146'),
(8, '6.jpg', 'Chanel', 'Hydra Beauty', '27', '57');

-- --------------------------------------------------------

--
-- Table structure for table `produkte`
--

CREATE TABLE `produkte` (
  `id` int(11) NOT NULL,
  `image` varchar(155) NOT NULL,
  `title` varchar(155) NOT NULL,
  `name` varchar(155) NOT NULL,
  `description` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produkte`
--

INSERT INTO `produkte` (`id`, `image`, `title`, `name`, `description`) VALUES
(3, './IMG/111.jpg', 'MOST WANTED', 'Olaplex', 'Frizz-controlling , shine-boosting, band-building and hair- <br> repairing - what\'s not to love about the Olaplex family?'),
(4, './IMG/222.jpg', 'TRENDING NOW', 'MILK MAKEUP', '  Cruelty-free beauty and take-everywhere favorites -Milk <br>\r\n knows how to put the joy into our getting ready routins.'),
(5, './IMG/111.jpg', 'WE LOVE', 'AROMATHERAPY ASSOCIATES', 'Perfect for unwinding,this wellness brand uses the power <br> of essentials oils to smoothe the mind, body and skin.'),
(6, './IMG/654.jpg', 'Perfect Moisturizer', 'SkinFix', 'Find your Perfect Moisturizer <br> On-point for every skin type.'),
(7, './IMG/66.jpg', 'KYLIE BABY', 'GENTLE SHAMPO', 'cleanse + care <br>  safe for babies and kids of all ages'),
(8, './IMG/0.jpg', 'THE LATEST LINEUP', 'MOROCCANOIL', 'New beauty from the <br>\r\nhottest brands');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(155) NOT NULL,
  `username` varchar(155) NOT NULL,
  `email` varchar(155) NOT NULL,
  `number` int(11) NOT NULL,
  `birthday` date NOT NULL,
  `password` varchar(155) NOT NULL,
  `confirm_password` varchar(155) NOT NULL,
  `user_type` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `username`, `email`, `number`, `birthday`, `password`, `confirm_password`, `user_type`) VALUES
(1, 'Jeta', 'Gagica', 'jetag@gmail.com', 45236789, '1998-11-19', '123456789', '123456789', 'user'),
(2, 'Dona', 'dd', 'dk@gmail.com', 645345, '2000-02-08', '123456789', '123456789', 'user'),
(3, 'art', 'rama', 'art@gmail.com', 45236154, '2010-02-18', '0', '0', 'user'),
(4, 'Syarta', 'Pajaziti', 'syartapajaziti@gmail.com', 4565535, '1998-04-10', '0', '0', 'admin'),
(5, 'Artina', 'Veseli', 'aveseli@gmail.com', 44236589, '1999-07-12', '123456789', '123456789', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produkte`
--
ALTER TABLE `produkte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `produkte`
--
ALTER TABLE `produkte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
