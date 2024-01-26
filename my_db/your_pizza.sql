-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2024 at 12:40 PM
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
-- Database: `your_pizza`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `comment` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `user_id`, `recipe_id`, `comment`) VALUES
(1, 4, 3, 'Wtf is this'),
(2, 3, 3, 'It smells good in the oven');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `recipe_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `is_enabled` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`recipe_id`, `title`, `content`, `author`, `is_enabled`) VALUES
(1, 'Pizza Classic', '===> La pizza classic || Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fermentum lobortis elit. Proin facilisis euismod nunc vitae lobortis. Mauris vestibulum efficitur nisl, id efficitur tellus molestie sed. Suspendisse nunc nibh, mattis in urna tempor, maximus pulvinar est. Donec auctor ullamcorper gravida. Suspendisse sit amet cursus quam, sit amet porta ex. Sed dignissim porta lectus. Phasellus et egestas sapien, eget egestas nunc. Etiam quam orci, interdum ac vestibulum sit amet, vestibulum vitae lectus. Etiam cursus odio vel risus gravida tempus.  ', 'classic.andy@jaymeyl.com', 1),
(2, 'Pizza Yolo', '===> La pizza Yolo || Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fermentum lobortis elit. Proin facilisis euismod nunc vitae lobortis. Mauris vestibulum efficitur nisl, id efficitur tellus molestie sed. Suspendisse nunc nibh, mattis in urna tempor, maximus pulvinar est. Donec auctor ullamcorper gravida. Suspendisse sit amet cursus quam, sit amet porta ex. Sed dignissim porta lectus. Phasellus et egestas sapien, eget egestas nunc. Etiam quam orci, interdum ac vestibulum sit amet, vestibulum vitae lectus. Etiam cursus odio vel risus gravida tempus. ', 'four.furieu@jaymeyl.com', 1),
(3, 'Pizza Delivery', '===> La pizza Delivery || Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fermentum lobortis elit. Proin facilisis euismod nunc vitae lobortis. Mauris vestibulum efficitur nisl, id efficitur tellus molestie sed. Suspendisse nunc nibh, mattis in urna tempor, maximus pulvinar est. Donec auctor ullamcorper gravida. Suspendisse sit amet cursus quam, sit amet porta ex. Sed dignissim porta lectus. Phasellus et egestas sapien, eget egestas nunc. Etiam quam orci, interdum ac vestibulum sit amet, vestibulum vitae lectus. Etiam cursus odio vel risus gravida tempus. ', 'hideokojima@bridge.com', 1),
(4, 'Pizza Reptilien', '===> La pizza Reptilienne || Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fermentum lobortis elit. Proin facilisis euismod nunc vitae lobortis. Mauris vestibulum efficitur nisl, id efficitur tellus molestie sed. Suspendisse nunc nibh, mattis in urna tempor, maximus pulvinar est. Donec auctor ullamcorper gravida. Suspendisse sit amet cursus quam, sit amet porta ex. Sed dignissim porta lectus. Phasellus et egestas sapien, eget egestas nunc. Etiam quam orci, interdum ac vestibulum sit amet, vestibulum vitae lectus. Etiam cursus odio vel risus gravida tempus. ', 'anna.conda@jaymeyl.com', 1),
(5, 'Pizza Roïd', '===> La pizza Roïd || Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fermentum lobortis elit. Proin facilisis euismod nunc vitae lobortis. Mauris vestibulum efficitur nisl, id efficitur tellus molestie sed. Suspendisse nunc nibh, mattis in urna tempor, maximus pulvinar est. Donec auctor ullamcorper gravida. Suspendisse sit amet cursus quam, sit amet porta ex. Sed dignissim porta lectus. Phasellus et egestas sapien, eget egestas nunc. Etiam quam orci, interdum ac vestibulum sit amet, vestibulum vitae lectus. Etiam cursus odio vel risus gravida tempus. ', 'malagauche@gpt.fr', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(128) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(128) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `email`, `password`, `age`) VALUES
(1, 'Classic Andy', 'classic.andy@jaymeyl.com', 'CA0000', 69),
(2, 'Fabrice Bricefa', 'four.furieu@jaymeyl.com', 'FB0000', 34),
(3, 'Anna Conda', 'anna.conda@jaymeyl.com', 'AC0000', 28),
(4, 'Jeff Débétise', 'malagauche@gpt.fr', 'JD0000', 20),
(5, 'Hideo Kojima', 'hideokojima@bridge.com', 'HK0000', 60);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `IDX_5F9E962A9D86650F` (`user_id`),
  ADD KEY `IDX_5F9E962A69574A48` (`recipe_id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`recipe_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `recipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `FK_5F9E962A69574A48` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`recipe_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_5F9E962A9D86650F` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
