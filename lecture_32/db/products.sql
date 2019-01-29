-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2019 at 07:50 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php315`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `product_features` text NOT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `view_count` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `brandID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL
) ENGINE=MyISAM AVG_ROW_LENGTH=140 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `product_name`, `description`, `product_features`, `unit_price`, `quantity`, `view_count`, `product_image`, `featured`, `brandID`, `categoryID`) VALUES
(4, 'ProductB', 'This Product B', 'a:5:{i:0;s:8:\"feature1\";i:1;s:8:\"feature2\";i:2;s:8:\"feature3\";i:3;s:8:\"feature4\";i:4;s:8:\"feature5\";}', '234.32', 10, 18, 'ProductB.jpg', 0, 2, 0),
(5, 'ProductC', 'This Product C', 'a:5:{i:0;s:8:\"feature1\";i:1;s:8:\"feature2\";i:2;s:8:\"feature3\";i:3;s:8:\"feature4\";i:4;s:8:\"feature5\";}', '2342.32', 10, 29, 'ProductC.jpg', 0, 3, 0),
(6, 'ProductD', 'This Product D', 'a:5:{i:0;s:8:\"feature1\";i:1;s:8:\"feature2\";i:2;s:8:\"feature3\";i:3;s:8:\"feature4\";i:4;s:8:\"feature5\";}', '2342.32', 10, 7, 'ProductD.jpg', 0, 4, 0),
(7, 'ProductE', 'This Product E', 'a:5:{i:0;s:8:\"feature1\";i:1;s:8:\"feature2\";i:2;s:8:\"feature3\";i:3;s:8:\"feature4\";i:4;s:8:\"feature5\";}', '2342.32', 10, 6, 'ProductE.jpg', 0, 5, 0),
(8, 'ProductF', 'This Product F', 'a:5:{i:0;s:8:\"feature1\";i:1;s:8:\"feature2\";i:2;s:8:\"feature3\";i:3;s:8:\"feature4\";i:4;s:8:\"feature5\";}', '1234.32', 10, 0, 'ProductF.jpg', 0, 1, 0),
(9, 'ProductG', 'This Product G', 'a:5:{i:0;s:8:\"feature1\";i:1;s:8:\"feature2\";i:2;s:8:\"feature3\";i:3;s:8:\"feature4\";i:4;s:8:\"feature5\";}', '2222.32', 10, 23, 'ProductG.jpg', 0, 2, 0),
(10, 'ProductH', 'This Product H', 'a:5:{i:0;s:8:\"feature1\";i:1;s:8:\"feature2\";i:2;s:8:\"feature3\";i:3;s:8:\"feature4\";i:4;s:8:\"feature5\";}', '3312.32', 10, 6, 'ProductH.jpg', 0, 3, 0),
(37, 'EVS', 'EVSSSSSS', '', '11.00', 11, 0, 'EVS.jpg', 0, 3, 0),
(39, 'abcdef', 'neeeeeeeee', '', '12.00', 13, 0, 'abcdef.jpg', 0, 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
