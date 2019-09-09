-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2018 at 10:26 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `audio_player`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_playlist`
--

CREATE TABLE `admin_playlist` (
  `track_id` int(11) NOT NULL,
  `track_name` varchar(10000) NOT NULL,
  `file_name` varchar(1000) NOT NULL,
  `album_art` varchar(1000) DEFAULT NULL,
  `ctgry_romantic` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_playlist`
--

INSERT INTO `admin_playlist` (`track_id`, `track_name`, `file_name`, `album_art`, `ctgry_romantic`) VALUES
(8, 'Shurjo by Shironamhin', '04 - Shironamhin - Shurjo (music.com.bd)', NULL, NULL),
(9, 'Tui nei tai', '04. Rafa ft. Sharmin - Tui Nei Tai', 'album_art/musiccombd.jpg', 'yes'),
(10, 'Bivrom', '02. Arnob - Bivrom', NULL, NULL),
(11, 'Jol shopno', '03. Jol Shopno', 'album_art/musiccombd.jpg', 'yes'),
(12, 'Hridoy', '01 - Adit feat. Elita and Mahadi - Hridoy (music.com.bd)', 'album_art/ontohin.jpg', 'yes'),
(13, 'NIjgum Rat', '03 - Adit feat. Elita and Mahadi - Nijhum Raat (music.com.bd)', 'album_art/ontohin.jpg', 'yes'),
(14, 'Bhorer Shishir', '05 - Adit feat. Elita and Mahadi - Bhorer Shishir (music.com.bd)', 'album_art/ontohin.jpg', 'yes'),
(15, 'Klanti', '11 - Adit feat. Elita and Mahadi - Klanti (music.com.bd)', 'album_art/ontohin.jpg', 'yes'),
(16, 'Bosonto Batashe', '02. Kaya - Bosonto Batashe (music.com.bd)', 'album_art/350.jpg', 'yes'),
(17, 'Alo', 'Aalo', 'album_art/musiccombd.jpg', 'yes'),
(19, 'Shomadhi', '10 - Adit feat. Elita and Mahadi - Shomadhi (music.com.bd)', 'uploads/ontohin.jpg', NULL),
(20, 'Mon Pakhi', '01. Mon Pakhi (Amadermusic.net)', 'uploads/AlbumArtSmall.jpg', NULL),
(21, 'test', '[DoriDrO.CoM] 005.Fuad feat upol maher - shada kalo', 'uploads/ontohin.jpg', NULL),
(22, 'test 2', '[Songs.PK] 02 - Back 2 Love - Habibi (ft. Salim-Sulaiman)', 'album_art/No-Mans-Sky-4-K-Wallpaper.jpg', NULL),
(23, 'Jak Na', '04.Jak Na', 'album_art/musiccombd.jpg', NULL),
(24, 'Bolna', '02 - Hridoy Khan - Bolna (music.com.bd)', 'album_art/musiccombd.jpg', NULL),
(25, 'Sonar moina Pakhi', '03 - Arnob - Shonar Moina (music.com.bd)', 'album_art/musiccombd.jpg', NULL),
(26, '', '04.Khalid - Tor Jonno', 'album_art/Untitled-2.jpg', NULL),
(27, 'Meye', '01.Meye', 'album_art/musiccombd.jpg', NULL),
(28, 'Amar Bagan', 'Sumon - Amar Bagan (music.com.bd)', 'album_art/musiccombd.jpg', NULL),
(29, 'Kalponic Prem', 'kalponick pream', 'album_art/W_2013_066.jpg', NULL),
(30, 'Chinno', '09. Cinho', 'album_art/Untitled-2.jpg', NULL),
(31, 'Ochena Maya', '09 Ochena Maya', 'album_art/267371474.jpg', NULL),
(32, 'Bhorer ', 'Bhorer Shishir', 'album_art/4k-wallpaper-17.jpg', NULL),
(33, 'Chiro Odhora', 'chiro odhora', 'album_art/AlbumArtSmall.jpg', NULL),
(34, 'Shotto Hok', 'Shotto Hok', 'album_art/Folder.jpg', NULL),
(35, 'Daak', 'Yaatri - Daak', 'album_art/Folder.jpg', NULL),
(36, 'Amar Ontor', '[DoriDrO.CoM] 01. Adhar - Amar Ontor', 'album_art/Folder.jpg', NULL),
(37, 'Harano Akash', '06 - Adit feat. Elita and Mahadi - Harano Akash (music.com.bd)', 'album_art/ontohin.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `album_id` int(250) NOT NULL,
  `album_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`album_id`, `album_name`) VALUES
(1, 'Ontohin'),
(2, 'Rock 606'),
(3, 'Rock 707'),
(4, 'Rong');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `artist_id` int(250) NOT NULL,
  `artist_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artist_id`, `artist_name`) VALUES
(1, 'Elita'),
(2, 'Mahadi'),
(3, 'Habib Wahid'),
(4, 'Tahsan Khan'),
(5, 'Adit'),
(6, 'Various Artist');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ctgry_id` int(250) NOT NULL,
  `ctgry_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ctgry_id`, `ctgry_name`) VALUES
(1, 'Rock Song'),
(2, 'Romantic Song'),
(3, 'Sad Song'),
(4, 'Rap Song');

-- --------------------------------------------------------

--
-- Table structure for table `song_album_merge`
--

CREATE TABLE `song_album_merge` (
  `track_id` int(250) NOT NULL,
  `album_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `song_album_merge`
--

INSERT INTO `song_album_merge` (`track_id`, `album_id`) VALUES
(0, 0),
(0, 0),
(0, 0),
(0, 0),
(0, 0),
(0, 0),
(0, 0),
(0, 4),
(0, 2),
(15, 2),
(35, 4),
(36, 3),
(37, 1);

-- --------------------------------------------------------

--
-- Table structure for table `song_artist_merge`
--

CREATE TABLE `song_artist_merge` (
  `track_id` int(250) NOT NULL,
  `artist_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `song_artist_merge`
--

INSERT INTO `song_artist_merge` (`track_id`, `artist_id`) VALUES
(37, 1),
(17, 4),
(20, 6);

-- --------------------------------------------------------

--
-- Table structure for table `song_category_merge`
--

CREATE TABLE `song_category_merge` (
  `track_id` int(250) NOT NULL,
  `ctgry_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `song_category_merge`
--

INSERT INTO `song_category_merge` (`track_id`, `ctgry_id`) VALUES
(36, 2),
(37, 2),
(14, 2),
(13, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(16, 2),
(17, 2),
(19, 2),
(20, 2),
(21, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'azmery', '$2y$10$oDW9oVo5ZN7Dms0j0aFajuTjHyBDpBTgqOrkux1g2mKnr.8T7XzHW', '2018-07-30 05:42:49'),
(2, 'mobarak', '$2y$10$trEktO.03f5pJAgr8ErjYOSRLJtFHjiyT4DIWT7MlX4crT4j2bs7a', '2018-07-30 13:05:47');

-- --------------------------------------------------------

--
-- Table structure for table `user_playlist`
--

CREATE TABLE `user_playlist` (
  `u_track_id` int(250) NOT NULL,
  `u_track_name` varchar(1000) NOT NULL,
  `u_file_name` varchar(1000) NOT NULL,
  `u_album_art` varchar(1000) NOT NULL,
  `u_album` varchar(1000) NOT NULL,
  `u_artist` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_playlist`
--

INSERT INTO `user_playlist` (`u_track_id`, `u_track_name`, `u_file_name`, `u_album_art`, `u_album`, `u_artist`) VALUES
(1, 'Tui Nei Tai', '04. Rafa ft. Sharmin - Tui Nei Tai', 'user_album_art/675273.jpg', 'Dip nevar age', 'Rafa ft Sharmin'),
(2, 'here we go', '01 here we go', 'user_album_art/34237_1226583323852_8043910_n.jpg', '', 'balam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_playlist`
--
ALTER TABLE `admin_playlist`
  ADD PRIMARY KEY (`track_id`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artist_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ctgry_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_playlist`
--
ALTER TABLE `user_playlist`
  ADD PRIMARY KEY (`u_track_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_playlist`
--
ALTER TABLE `admin_playlist`
  MODIFY `track_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `album_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `artist_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ctgry_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_playlist`
--
ALTER TABLE `user_playlist`
  MODIFY `u_track_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
