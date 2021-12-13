-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 31, 2021 at 05:08 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `razor`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`no`, `name`, `email`, `message`, `date`) VALUES
(23, 'dwdwd', 'aaadqd@123', 'Hi im thilina\r\n\r\ni wanted to tell you', '2021-03-22 11:53:41'),
(25, 'thilina', 'xx@xx', 'MINIMUM REQUIREMENTS\r\nOS:\r\n64-bit Windows 7\r\nProcessor (AMD):\r\nAMD FX 4350 or Equivalent\r\nProcessor (Intel):\r\nIntel Core i3 6300 or Equivalent\r\nMemory:\r\n6GB - DDR3 @1333 RAM\r\nGraphics card (AMD):\r\nAMD Radeonâ„¢ HD 7730\r\nGraphics card (NVIDIA):\r\nNVIDIA GeForceÂ® GT 640\r\nDirectX:\r\n11 Compatible video card or equivalent\r\nOnline Connection Requirements:\r\n512 KBPS or faster Internet connection\r\nHard-drive space:\r\n22GB\r\nRECOMMENDED REQUIREMENTS\r\nOS:\r\n64-bit Windows 7\r\nProcessor (AMD):\r\nRyzen 5 CPU or Equivalent\r\nProcessor (Intel):\r\nIntel Core i5 3570K or Equivalent\r\nMemory:\r\n8GB - DDR3 @1333 RAM\r\nGraphics card (AMD):\r\nAMD Radeonâ„¢ R9 290\r\nGraphics card (NVIDIA):\r\nNVIDIA GeForceÂ® GTX 970\r\nDirectX:\r\n11 Compatible video card or equivalent\r\nOnline Connection Requirements:\r\nBroadband Connection\r\nHard-drive space:\r\n22GB', '2021-03-22 12:13:06'),
(26, 'qqq', 'xx@xx', 'Conquer with character in Apex Legends, a free-to-play* Battle Royale shooter where legendary characters with powerful abilities team up to battle for fame & fortune on the fringes of the Frontier. Master an ever-growing roster of diverse Legends, deep tactical squad play and bold new innovations that level up the Battle Royale experienceâ€”all within a rugged world where anything goes. Welcome to the next evolution of Battle Royale.\r\nA Roster of Legendary Characters\r\n-Master a growing roster of powerful Legends, each with their own unique personality, strengths and abilities that are easy to pick up but challenging to truly master.\r\nBuild Your Crew\r\n-Choose your Legend and combine their unique skills together with other players to form the ultimate crew.\r\nStrategic Battle Royale\r\n-Use your abilitiesâ€“and your witsâ€“to make strategic calls on the fly, adapting your crew\'s strengths to meet new challenges as the match evolves.\r\nGenre-Evolving Innovation\r\n-Experience a brand-new array of innovative features that level up the Battle Royale genre, including Respawn Beacons, Smart Comms, Intelligent Inventory and an all-new way to drop into the action with Jumpmaster deployment.\r\nSweet, Sweet Loot\r\n-Drop in and loot up with a host of powerful weapons, diverse attachments and useful armor to protect you in battle. After the fight, collect a wealth of cosmetic options for personalizing your character and weapons, and unlock new ways to show off during the match.', '2021-03-22 12:28:11'),
(27, 'wee', 'wee@wee', 'wee', '2021-03-23 09:59:42'),
(28, 'qwqw', 'qwqw@wqewew', 'wfwa tgbrhbhg54wsy54w 54y b4s', '2021-03-23 15:39:24'),
(29, 'nayo', 'malagama68@gmail', 'hoooooooooooooooooooooooooooooooo', '2021-03-26 10:43:30'),
(30, 'rrr', 'ki0u90@ylufgy', 'ggggggggggggggggggggggggggg', '2021-03-26 10:43:56'),
(31, 'ishini', 'ishinidevindi98@gmail.com', 'hiiiii', '2021-03-26 13:08:28');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `price`, `image`) VALUES
(3, 'Battlefield', 'batlle1', 500.00, 'battlefield1.jpg'),
(5, 'Battlefield 2', 'bat2', 600.00, 'battlefield2.jpg'),
(9, 'Battlefield 3', 'bt3', 445.00, 'battlefield3.jpg'),
(10, 'Battlefield 4', 'bt4', 699.00, 'battlefield4.jpg'),
(11, 'Battlefield 5', 'bt5', 779.00, 'battlefield5.jpg'),
(12, 'crysis 3', 'c3', 450.00, 'crysis-3-cover.jpg'),
(13, 'Titanfall', 'tit1', 788.00, 'titanfall1.jpg'),
(14, 'Titanfall 2', 'tit2', 1020.00, 'titanfall2.jpg'),
(19, 'blade', 'wdwd', 3434.00, 'BOTI_R06_22_FIN03_3_halfsiz.jpg'),
(30, 'dead', 'redr\r\ndredred\r\n', 444.00, '400-4006480_deadpool-clipart-cool-deadpool-with-transparent-background.png'),
(31, 'jedi ', 'fallen order', 2300.00, 'jedi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sale_id` int(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `address` varchar(25) NOT NULL,
  `city` varchar(10) NOT NULL,
  `postal` int(5) NOT NULL,
  `ship_type` varchar(15) NOT NULL,
  `card_no` text NOT NULL,
  `date` date NOT NULL,
  `prodruct` varchar(25) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `sale_id`, `email`, `fname`, `lname`, `tel`, `address`, `city`, `postal`, `ship_type`, `card_no`, `date`, `prodruct`, `quantity`, `price`) VALUES
(1, 1, 'admin@xxx', 'ww', 'ww', 'ww', 'ww', 'ww', 33, 'paid', '3434 3434 3434 3434', '2021-03-31', 'Battlefield 5', 1, 779);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userid` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`userid`(20))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `email`, `user_type`, `password`) VALUES
('admin', 'admin@razor.nibm', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
('c', 'c@c', 'user', '4a8a08f09d37b73795649038408b5f33'),
('user', 'user@user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee'),
('uu', 'uu@uu', 'user', '21232f297a57a5a743894a0e4a801fc3'),
('z', 'z@z', 'user', 'fbade9e36a3f36d3d676c1b808451dd7');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
