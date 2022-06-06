
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `storesss`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Anemone ', 479),
(2, 'Armeria ', 609),
(3, 'Astrance ', 680),
(4, 'Timeless ', 329),
(5, 'Brachycoma ', 422),
(6, 'Wanda ', 907),
(7, 'Cotton wool ', 337),
(8, 'Vriesia ', 548),
(9, 'Carnation ', 439),
(10, 'Guzmania ', 876),
(11, 'Dipladeniya ', 325),
(12, 'Ipomoea ', 240);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Anna', 'flower@gmail.com', '123456', '02067891227', 'london', 'Baker Street'),
(2, 'Nina', 'nin65@gmail.com', '23124', '3314306073', 'Paris', 'The Rue de Richelieu');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(1, 1, 2, 'Confirmed'),
(2, 2, 2, 'Confirmed');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);
COMMIT;


