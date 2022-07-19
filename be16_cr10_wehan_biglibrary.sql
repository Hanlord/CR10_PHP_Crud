-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 03:34 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be16_cr10_wehan_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be16_cr10_wehan_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be16_cr10_wehan_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `library_id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `isbn` int(15) NOT NULL,
  `type` varchar(30) NOT NULL,
  `author_first_name` varchar(30) NOT NULL,
  `author_last_name` varchar(30) NOT NULL,
  `publisher_name` varchar(30) NOT NULL,
  `publisher_address` varchar(30) NOT NULL,
  `publisher_date` int(11) NOT NULL,
  `availability` varchar(30) NOT NULL,
  `short_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`library_id`, `title`, `image`, `isbn`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publisher_date`, `availability`, `short_description`) VALUES
(62, 'Inglourious Basterds', '62d6ae2f899dc.jpg', 123456789, 'Blu-Ray', 'Quentin', 'Tarantino', 'Universal Pictures', '', 1988, 'Yes', 'Good film'),
(63, 'E.T.', '62d6ae3bd3da8.jpg', 987654321, 'Blu-Ray', 'Steven', 'Spielberg', 'Universal Pictures', '', 1980, 'Yes', 'Extra-Terrestrial'),
(66, 'Harry Potter', '62d6ae49249ff.jpg', 54984516, 'Book', 'Joanne Kathryn', 'Rowling', 'Carlsen', 'UK', 2001, 'Yes', 'wizard book'),
(67, 'Harry Potter', '62d6ae5246f72.jpg', 564984231, 'Book', 'Joanne Kathryn', 'Rowling', 'Carlsen', 'UK', 1982, 'Yes', 'wizard book'),
(68, 'Harry Potter', '62d6ae5cb55ec.jpg', 85463165, 'Book', 'Joanne Kathryn', 'Rowling', 'Carlsen', 'UK', 1987, 'No', 'wizard book'),
(70, 'Harry Potter', '62d6ae65eab74.jpg', 2147483647, 'Book', 'Joanne Kathryn', 'Rowling', 'Carlsen', 'UK', 1996, 'Yes', 'wizard book'),
(71, 'Harry Potter', '62d6ae7081374.jpg', 78541248, 'Book', 'Joanne Kathryn', 'Rowling', 'Carlsen', 'UK', 1988, 'Yes', 'wizard book'),
(74, 'Breaking Bad', '62d6af02c690e.jpg', 5336547, 'Blu-Ray', 'Vince', 'Gilligan', 'Sony', 'US', 1986, 'Yes', 'I am the one who knocks!'),
(93, 'test', 'default.jpg', 12123, 'test', 'test', 'test', 'test', 'test', 1089, 'Yes', 'test'),
(94, 'harry', '62d6af5fa2a6e.jpg', 121234, 'Book', 'Joanne Kathleen', 'Rowling', 'Carlsen', 'England', 1089, 'Yes', 'wizard book'),
(95, 'Harry Potter', '62d6afb775b34.jpg', 12345687, 'Book', 'Joanne Kathleen', 'Rowling', 'Carlsen', 'UK', 1975, 'No', 'wizard book');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`library_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `library_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
