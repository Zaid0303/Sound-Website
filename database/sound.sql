-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2024 at 07:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sound`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_year` varchar(255) NOT NULL,
  `c_artist` varchar(255) NOT NULL,
  `c_album` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`c_id`, `c_name`, `c_year`, `c_artist`, `c_album`) VALUES
(1, 'Audio', '2017', 'Yo Yo Honey Sing', 'mp3');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `m_artist` varchar(255) NOT NULL,
  `m_year` varchar(255) NOT NULL,
  `m_album` varchar(255) NOT NULL,
  `m_genre` varchar(255) NOT NULL,
  `m_language` varchar(255) NOT NULL,
  `m_img` varchar(255) NOT NULL,
  `m_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`m_id`, `m_name`, `m_artist`, `m_year`, `m_album`, `m_genre`, `m_language`, `m_img`, `m_file`) VALUES
(5, 'Blue Eyes', 'Yo Yo Honey Sing', '2013', 'Audio song', 'Male', 'English', 'Blue Eyes img.jpg', 'Blue Eyes Full Video Song Yo Yo Honey Singh  Blockbuster Song Of 2013.mp3'),
(6, 'Leke Prabhu Ka Naam', 'Arijit Singh', '2023', 'Audio song', 'Male', 'Hindi', 'Leke Prabhu Ka Naam img.jpg', 'Leke Prabhu Ka Naam  Whatsapp Status  Tiger 3  Salman Khan  Katrina Kaif  Arijit Singh.mp3'),
(7, 'Bibi BabyDoll', 'DJ Brunin XM', '2023', 'Audio song', 'Female', ' Russian', 'bibi babydoll.jpg', 'Automotivo Bibi Fogosa - Bibi Babydoll & DJ Brunin XM - (Edit audio).mp3'),
(8, 'chitiya kalaiya', 'Meet Bros Anjjan feat', '2015', 'Audio song', 'Both', 'Hindi & English', 'Chittiyaan-Kalaiyaan.jpg', 'chitiya kalaiya ve  NEW WHATSAPP STATUS.mp3'),
(9, 'Jeene laga Hon', 'Atif Aslam', '2022', 'Audio song', 'Male', 'Urdu', 'Jeene Laga Hoon.jpeg', 'Jeene Laga Hoon Pehle  Se Zyada - Romantic Song  Lovers Dream Status.mp3'),
(10, 'Nira Ishq', 'Guri', '2019', 'Audio song', 'Male', 'Punjabi', 'Nira Ishq.jpg', 'Nira Ishq  Slowed Reverb Status  Guri Whatsapp Status  4k Status Video  Bk Edits Official.mp3'),
(11, ' Khalouni N3ich', 'Najwa Farouk', '2023', 'Audio song', 'Male', 'Arabic', 'khalouni.jpg', 'Ford Mustang - Khalouni N3ich.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `music_categories`
--

CREATE TABLE `music_categories` (
  `mc_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `ra_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `v_id` int(11) NOT NULL,
  `rating_val` int(11) NOT NULL,
  `times_tamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `r_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `v_id` int(11) NOT NULL,
  `r_text` text NOT NULL,
  `times_tamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_address` varchar(255) NOT NULL,
  `u_phone` int(12) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_address`, `u_phone`, `u_email`, `u_password`) VALUES
(1, 'M.Zaid', '2B/31 Nazimabad no 2, Karachi', 0, 'sadaf@gmail.com', '111'),
(2, 'Syed Murtaza', 'Aqsa Masjid Nazimabad no 2, Karachi', 343546457, 'murtaza@gmail.com', '123'),
(3, 'Abdullah', 'Jama Masjid Nazimabad no 2, Karachi', 2147483647, 'abdullah@gmail.com', '111'),
(4, 'M.Zaid', '2B/31 Nazimabad no 2, Karachi', 2147483647, 'zaid@gmail.com', '1111'),
(5, 'Ahmed Khan', '4D/31 Nazimabad no 2, Karachi.', 2147483647, 'ahmed@gmail.com', '111'),
(6, 'Mubeen', '5G/42 Korangi no 3, Karachi', 321456779, 'mubeen@gmail.com', '111'),
(7, 'Ayesha', 'Nazimabad no 2, Karachi', 321456788, 'Ayesha@gmail.com', '111'),
(8, 'Aneeq', 'Nazimabad no 4, Karachi', 312677543, 'Aneed@gmail.com', '222');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `v_id` int(11) NOT NULL,
  `v_name` varchar(255) NOT NULL,
  `v_artist` varchar(255) NOT NULL,
  `v_year` varchar(255) NOT NULL,
  `v_album` varchar(255) NOT NULL,
  `v_genre` varchar(255) NOT NULL,
  `v_language` varchar(255) NOT NULL,
  `v_img` varchar(255) NOT NULL,
  `v_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`v_id`, `v_name`, `v_artist`, `v_year`, `v_album`, `v_genre`, `v_language`, `v_img`, `v_file`) VALUES
(46, 'Mill lo na', 'Guri', '2018', 'Video Song', 'Male', 'Punjabi', 'mill lo na.jpg', 'Guri - Mill Lo Na  _ New WhatsApp Status Video _ Letest Punjabi Song 2018.mp4'),
(48, 'Moje More', 'Teya Dora', '2023', 'Video Song', 'Female', 'English', 'moje more.jpg', 'Teya Dora - Moje More Džanum  Ringtone _ BGM Ringtone _ Yashx Pro.mp4'),
(50, 'One Bottle Down', 'Yo Yo Honey Sing', '2019', 'Video Song', 'Male', 'Punjabi', 'one bottle down.jpeg', 'one bottle down whatsapp status l yo yo honey singh whatsapp status l whatsapp status video l.mp4'),
(51, 'Yaar tera SuperStar', 'Yo Yo Honey Sing', '2018', 'Video Song', 'Male', 'Punjabi', 'yaar Tera superstar.jpg', 'yaar Tera superstar 🧐🔥 __Honey Singh__Efx lofi status 🔥🥰 romantic song status.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `video_categories`
--

CREATE TABLE `video_categories` (
  `vc_id` int(11) NOT NULL,
  `v_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `music_categories`
--
ALTER TABLE `music_categories`
  ADD PRIMARY KEY (`mc_id`),
  ADD KEY `m_fk` (`m_id`),
  ADD KEY `c_fk` (`c_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`ra_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `u_fk` (`u_id`),
  ADD KEY `v_id` (`v_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`v_id`);

--
-- Indexes for table `video_categories`
--
ALTER TABLE `video_categories`
  ADD PRIMARY KEY (`vc_id`),
  ADD KEY `mc_fk` (`c_id`),
  ADD KEY `v_fk` (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `music_categories`
--
ALTER TABLE `music_categories`
  MODIFY `mc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `ra_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `video_categories`
--
ALTER TABLE `video_categories`
  MODIFY `vc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `music_categories`
--
ALTER TABLE `music_categories`
  ADD CONSTRAINT `c_fk` FOREIGN KEY (`c_id`) REFERENCES `categories` (`c_id`),
  ADD CONSTRAINT `m_fk` FOREIGN KEY (`m_id`) REFERENCES `music` (`m_id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `u_fk` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`),
  ADD CONSTRAINT `v_id` FOREIGN KEY (`v_id`) REFERENCES `videos` (`v_id`);

--
-- Constraints for table `video_categories`
--
ALTER TABLE `video_categories`
  ADD CONSTRAINT `mc_fk` FOREIGN KEY (`c_id`) REFERENCES `categories` (`c_id`),
  ADD CONSTRAINT `v_fk` FOREIGN KEY (`v_id`) REFERENCES `videos` (`v_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
