-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2022 at 07:52 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(99) NOT NULL,
  `book_code` varchar(255) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `book_author` varchar(255) NOT NULL,
  `book_category` varchar(255) NOT NULL,
  `book_date_added` datetime DEFAULT current_timestamp(),
  `book_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_code`, `book_title`, `book_author`, `book_category`, `book_date_added`, `book_status`) VALUES
(13, 'book#1', 'Rich dad poor dad', 'Rober kiyosaki', 'Non Fiction', '2022-02-23 17:16:34', 'Available'),
(14, 'book#2', 'How to be a king', 'king', 'Non Fiction', '2022-02-23 17:17:14', 'Available'),
(15, 'book#3', 'The Alchemist ', 'Paulo Coelho', 'Non Fiction', '2022-02-23 17:19:32', 'Available'),
(16, 'book#4', ' The 7 Habits of Highly Effective People ', 'Stephen R. Covey', 'Non Fiction', '2022-02-23 17:20:07', 'Available'),
(17, 'book#14', ' The Power of Now', 'Eckhart Tolle', 'Non Fiction', '2022-02-23 17:20:42', 'Available'),
(18, 'book#123', 'The Stranger in the Lifeboat', 'Mitch Albom', 'Fiction', '2022-02-23 17:22:30', 'Available'),
(19, 'book#122', 'The Hare', 'Melanie Finn', 'Fiction', '2022-02-23 17:23:08', 'Issued'),
(20, 'book#42', 'The Four Winds ', 'Kristin Hannah', 'Fiction', '2022-02-23 17:23:51', 'Available'),
(21, 'book#32', 'Wings of Fire', 'A. P. J. Abdul Kalam and Arun Tiwari', 'Biography', '2022-02-23 17:25:23', 'Available'),
(22, 'book#55', 'Tuesdays with Morrie', 'Mitch Albom', 'Biography', '2022-02-23 17:26:06', 'Available'),
(24, '122', 'test', 'king', 'Non Fiction', '2022-02-24 19:18:13', 'Available'),
(25, '154', 'poor dad', 'as', 'Non Fiction', '2022-02-24 19:24:24', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(99) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(23, 'Fiction'),
(24, 'Non Fiction'),
(25, 'Mystry'),
(26, 'Biography');

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE `issues` (
  `id` int(99) NOT NULL,
  `book_id` varchar(255) NOT NULL,
  `book_status` varchar(255) NOT NULL,
  `book_code` varchar(255) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `person_name` varchar(255) NOT NULL,
  `person_mobile` varchar(255) NOT NULL,
  `person_email` varchar(255) NOT NULL,
  `person_address` varchar(255) NOT NULL,
  `issue_date` varchar(255) NOT NULL,
  `return_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`id`, `book_id`, `book_status`, `book_code`, `book_title`, `person_name`, `person_mobile`, `person_email`, `person_address`, `issue_date`, `return_date`) VALUES
(16, '19', 'Returned', 'book#122', 'The Hare', 'Donald', '125550045', 'Donald@google.com', '12, duck house', '2022-02-25', '2022-03-11'),
(17, '16', 'Returned', 'book#4', ' The 7 Habits of Highly Effective People ', 'chirag', '847', 'chirag@mail.com', 'lnt', '2022-02-25', '2007'),
(18, '19', 'Returned', 'book#122', 'The Hare', 'a', '123', 'waduzudom@mailinator.com', 'Aperiam qui ut enim', '2022-02-25', '2022-03-11'),
(19, '19', 'Returned', 'book#122', 'The Hare', '', '', '', '', '', '2022-03-11'),
(20, '19', 'Returned', 'book#122', 'The Hare', '', '', '', '', '', '2022-03-11'),
(21, '22', 'Returned', 'book#55', 'Tuesdays with Morrie', '', '', '', '', '2022-02-18', '2022-02-01'),
(22, '19', 'Returned', 'book#122', 'The Hare', '', '', '', '', '', '2022-03-11'),
(23, '20', 'Returned', 'book#42', 'The Four Winds ', '', '', '', '', '2022-02-25', '2022-03-04'),
(24, '19', 'Issued', 'book#122', 'The Hare', '', '', '', '', '2022-02-28', '2022-03-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `issues`
--
ALTER TABLE `issues`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
