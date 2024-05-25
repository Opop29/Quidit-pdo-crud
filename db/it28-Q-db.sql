-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2024 at 09:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `x`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `rrp` decimal(10,0) NOT NULL DEFAULT 0,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `rrp`, `quantity`, `img`, `date_added`) VALUES
(1, 'Yami Yami no Mi \r\n(Dark-Dark Fruit)', 'Allows the user to control and manipulate darkness, making it nearly impossible to hit or touch them. Blackbeard’s mastery of this fruit makes him a formidable opponent.', 67000000, 89, 57, 'https://mycollectorsoutpost.com/cdn/shop/files/devil-fruit-pin-blackbeard-dark-dark-fruit_1445x.jpg?v=1699046557', '2024-05-12 00:00:00'),
(2, 'Gura Gura no Mi (Gravity-Gravity Fruit)', 'Enables the user to create devastating earthquakes and shockwaves, making it a powerful tool for combat and destruction.', 58000000, 89, 35, 'https://preview.redd.it/nd7yujwe5ss81.png?width=600&format=png&auto=webp&s=897685d5f796b9a7f116e25fc42a02666567ed6d', '2024-05-12 00:00:00'),
(3, 'Pika Pika no Mi (Light-Light Fruit)', 'Allows the user to control and manipulate light, making them nearly invisible and able to create powerful blasts of energy.', 47000000, 60, 96, 'https://pm1.narvii.com/7556/0a77368b47cbca717d606dbbcbe83e0f3fe8b58ar1-1024-1024v2_uhq.jpg', '2024-05-12 00:00:00'),
(4, 'Hito Hito no Mi (Human-Human Fruit)', ' Grants the user the ability to transform into a human, making them nearly indestructible and allowing them to adapt to any situation.', 32000000, 28, 40, 'https://ih1.redbubble.net/image.3938097939.0541/raf,750x1000,075,t,fafafa:ca443f4786.jpg', '2024-05-12 00:00:00'),
(5, 'Moku Moku no Mi (Smoke-Smoke Fruit)', 'Enables the user to create and control smoke, making it difficult for opponents to track or attack them.', 41000500, 30, 30, 'https://ih1.redbubble.net/image.3669349652.7960/flat,750x,075,f-pad,750x1000,f8f8f8.jpg', '2024-05-12 00:00:00'),
(6, 'Yomi Yomi no Mi (Revive-Revive Fruit)', 'Allows the user to revive themselves and others, making it a powerful tool for survival and combat.', 27000000, 30, 30, 'https://pbs.twimg.com/media/ELpZ7aXX0AUIneo.jpg', '2024-05-12 00:00:00'),
(7, 'Human-Human Fruit, Model: Nika', 'a mythical Zoan-type Devil Fruit that grants the consumer the ability to transform into and gain the attributes of the legendary Sun God Nika.', 95700600, 30, 36, 'https://ih1.redbubble.net/image.5214786803.7431/st,small,507x507-pad,600x600,f8f8f8.u5.jpg', '2024-05-12 00:00:00'),
(8, 'Ope Ope no Mi (Open-Open Fruit)', ' Allows the user to create a space-time distortion, making it difficult for opponents to track or attack them.', 25900897, 30, 30, 'https://ih1.redbubble.net/image.1665104440.1004/st,small,845x845-pad,1000x1000,f8f8f8.jpg', '2024-05-12 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
