-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2020 at 09:41 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uts6`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_album`
--

CREATE TABLE `tb_album` (
  `album_id` int(11) NOT NULL,
  `album_name` varchar(100) NOT NULL,
  `album_text` varchar(100) NOT NULL,
  `photo_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_album`
--

INSERT INTO `tb_album` (`album_id`, `album_name`, `album_text`, `photo_id`) VALUES
(5, 'digital', 'digital image', 13);

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `cat_id` int(11) NOT NULL,
  `cat_nama` varchar(50) NOT NULL,
  `cat_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`cat_id`, `cat_nama`, `cat_text`) VALUES
(1, 'Music & Entertaiment', 'musicc'),
(2, 'Sci-fi', 'sains and fiction post'),
(4, 'Digital Image', 'Digital Image');

-- --------------------------------------------------------

--
-- Table structure for table `tb_photos`
--

CREATE TABLE `tb_photos` (
  `photo_id` int(11) NOT NULL,
  `photo_date` date NOT NULL,
  `photo_title` varchar(100) NOT NULL,
  `photo_text` varchar(200) NOT NULL,
  `post_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_photos`
--

INSERT INTO `tb_photos` (`photo_id`, `photo_date`, `photo_title`, `photo_text`, `post_id`) VALUES
(13, '2020-05-07', '07052020124525653847.png', 'vektor digital', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_post`
--

CREATE TABLE `tb_post` (
  `post_id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `post_date` date NOT NULL,
  `post_slug` varchar(25) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_post`
--

INSERT INTO `tb_post` (`post_id`, `cat_id`, `post_date`, `post_slug`, `post_title`, `post_text`) VALUES
(1, 2, '2020-05-04', 'science', 'a shining moon', 'a shining moon'),
(2, 1, '2020-05-05', 'concert', 'linkin park concert', 'linkin park concert on denmarkk'),
(4, 4, '2020-05-07', 'vektor', 'vektor digital image', 'vektor');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`user_id`, `user_email`, `user_password`, `user_nama`) VALUES
(1, 'azmil@yahoo', '123', 'azmil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_album`
--
ALTER TABLE `tb_album`
  ADD PRIMARY KEY (`album_id`),
  ADD KEY `photo_id` (`photo_id`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tb_photos`
--
ALTER TABLE `tb_photos`
  ADD PRIMARY KEY (`photo_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_album`
--
ALTER TABLE `tb_album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_photos`
--
ALTER TABLE `tb_photos`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_album`
--
ALTER TABLE `tb_album`
  ADD CONSTRAINT `tb_album_ibfk_1` FOREIGN KEY (`photo_id`) REFERENCES `tb_photos` (`photo_id`);

--
-- Constraints for table `tb_photos`
--
ALTER TABLE `tb_photos`
  ADD CONSTRAINT `tb_photos_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `tb_post` (`post_id`);

--
-- Constraints for table `tb_post`
--
ALTER TABLE `tb_post`
  ADD CONSTRAINT `tb_post_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `tb_category` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
