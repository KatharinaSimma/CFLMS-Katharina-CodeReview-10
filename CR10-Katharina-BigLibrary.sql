-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 14, 2020 at 03:16 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CR10-Katharina-BigLibrary`
--
CREATE DATABASE IF NOT EXISTS `CR10-Katharina-BigLibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `CR10-Katharina-BigLibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(2084) DEFAULT NULL,
  `author_fname` varchar(255) NOT NULL,
  `author_lname` varchar(255) NOT NULL,
  `ISBN` int(13) DEFAULT NULL,
  `description` varchar(2084) DEFAULT NULL,
  `pub_date` date DEFAULT NULL,
  `publisher_name` varchar(255) DEFAULT NULL,
  `publisher_address` varchar(255) DEFAULT NULL,
  `publisher_size` enum('small','medium','big') DEFAULT NULL,
  `pub_type` enum('book','CD','DVD') DEFAULT NULL,
  `status` enum('available','reserved') NOT NULL DEFAULT 'available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `title`, `image`, `author_fname`, `author_lname`, `ISBN`, `description`, `pub_date`, `publisher_name`, `publisher_address`, `publisher_size`, `pub_type`, `status`) VALUES
(3, 'Trouble on Triton', NULL, 'Samuel R. ', 'Delaney', 1234564879, '', '2000-02-23', 'Ullstein Taschenbuch Verlag', 'Deutschland', 'small', 'book', 'available'),
(5, 'The second Sex', NULL, 'Simone', 'de Beauvoir', 23467891, '', '1949-01-01', 'Ullstein Taschenbuch Verlag', 'Köln, Germany', 'small', 'book', 'available'),
(6, 'The Colour of Magic', NULL, 'Terry ', 'Pratchett', 12345685, 'A Rincewind Novel', '1983-01-01', 'Colin Smythe', 'Gerrards Cross, England', 'small', 'book', 'available'),
(7, 'Equal Rites', NULL, 'Terry ', 'Pratchett', 12345685, '', '1987-01-01', 'Colin Smythe', 'Gerrards Cross, England', 'small', 'book', 'available'),
(8, 'The Wee Free men', NULL, 'Terry', 'Pratchett', 1231456, '', '2003-01-01', 'Doubleday', 'New York City, USA', 'small', 'book', 'available'),
(9, 'American Gods', NULL, 'Neil', 'Gaiman', 12345, '', '2020-04-06', 'Blabla', 'Bangkok, Thailand', 'small', 'book', 'available'),
(10, 'Sapiens', NULL, 'Yuval Noah', 'Harrari', 2348738, 'Human History', '1956-06-12', 'Blabla', 'Bangkok, Thailand', 'small', 'CD', 'available'),
(11, 'The Cloud Atlas', NULL, 'David', 'Mitchell', 9874562, 'A book about weather phenomena.', '1999-12-31', 'Colin Smythe', 'Gerrards Cross, England', 'medium', 'book', 'available'),
(12, 'Pyramids', '', 'Terry ', 'Pratchett', 12345, 'queer fem sci fi', '1987-01-01', 'Colin Smythe', 'London, England', 'medium', 'CD', 'available'),
(13, 'Guards! Guards!', '', 'Terry ', 'Pratchett', 1234, '', '1949-01-01', 'Ullstein Taschenbuch Verlag', 'London, England', 'small', 'book', 'available'),
(15, 'Men At Arms', NULL, 'Terry ', 'Pratchett', 12345, '', '2014-03-10', 'Ullstein Taschenbuch Verlag', 'London, England', 'small', 'book', 'available'),
(16, 'Maskerade', 'https://cdn.pixabay.com/photo/2016/09/01/10/33/witchs-house-1635770__340.jpg', 'Terry ', 'Pratchett', 1234, '', '1949-01-01', 'Ullstein Taschenbuch Verlag', 'London, England', 'small', 'book', 'available'),
(17, 'Mort', 'https://cdn.pixabay.com/photo/2016/09/01/10/33/witchs-house-1635770__340.jpg', 'Terry ', 'Pratchett', 12345, 'About Death and his family', '2000-02-23', 'Ullstein Taschenbuch Verlag', 'Gerrards Cross, England', 'medium', 'book', 'available'),
(18, 'The Light Fantastic', 'https://cdn.pixabay.com/photo/2019/03/31/21/43/the-dark-hedges-4094148__340.jpg', 'Terry ', 'Pratchett', 12345, 'The story of a wizzard!', '2020-11-13', 'Ullstein Taschenbuch Verlag', 'Deutschland', 'small', 'CD', 'available'),
(19, 'Wyrd Sister', 'https://cdn.pixabay.com/photo/2018/12/15/18/02/forest-3877365__340.jpg', 'Terry ', 'Pratchett', 12345, '', '2020-11-04', 'Ullstein Taschenbuch Verlag', 'Bangkok, Thailand', 'small', 'book', 'available'),
(20, 'Wyrd Sisters', 'https://cdn.pixabay.com/photo/2018/12/15/18/02/forest-3877365__340.jpg', 'Terry ', 'Pratchett', 12345, '', '2020-11-04', 'Ullstein Taschenbuch Verlag', 'Bangkok, Thailand', 'small', 'book', 'available'),
(21, 'Wyrd Sisters', 'https://cdn.pixabay.com/photo/2018/12/15/18/02/forest-3877365__340.jpg', 'Terry ', 'Pratchett', 12345, '', '2020-11-04', 'Ullstein Taschenbuch Verlag', 'Bangkok, Thailand', 'small', 'book', 'available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
