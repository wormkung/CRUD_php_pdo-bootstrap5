-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 06:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT 'ไอเีผู้ใช้',
  `email` varchar(255) NOT NULL COMMENT 'อีเมล',
  `password` varchar(255) NOT NULL COMMENT 'รหัสผ่าน',
  `fname` varchar(255) NOT NULL COMMENT 'ชื่อจริง',
  `lname` varchar(255) NOT NULL COMMENT 'นามสกุล',
  `role` varchar(255) NOT NULL COMMENT 'สถานะ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `fname`, `lname`, `role`) VALUES
(37, 'pomkung123@hotmail.com', '$2y$10$Ptc1MYUoCNhJs5rzlpfwRu/eVrDQg9pyrrsEeDkqLfmvET5zxXrXq', 'มั่นหมาย', 'สายสุข', 'member'),
(39, 'button159357@hotmail.com', '$2y$10$8FO6BCszZLyLne27l7teVOXH5UOBOYlvLExU/vB8c3bwqWg5OhGSe', 'สายน้ำ', 'ลำธาร', 'member'),
(40, 'name222@gmail.com', '$2y$10$/7J5aRVWd7I/XOJ6gB.Q.e5PYVDrhFhxZSEkFdqtxh/NJ1ILnra06', 'ส้มตำ', 'สวดมนต์', 'member'),
(41, 'lovely6633@gmail.com', '$2y$10$f0qR04oiEJOZTfvVASQHr..EGMFnzKxIkgNw6xFx6EBf0Z6Nchvvi', 'วันเฉลิม', 'กระแสสุข', 'member'),
(42, 'janyaporn123@hotmail.com', '$2y$10$GEDnhZzJgKlzzjO71e9XNu51Q6tWgKzUvATZJYDjsEHts0mfPnyY6', 'สุขสมัย', 'ไหปลาร้า', 'member'),
(43, 'yeenser258@gmail.com', '$2y$10$4hGH3EVZSMBaXICyHu05xuRea.u8TqZ69G70a6Fmx9SHlqbtQa6aK', 'ณัฐวุฒิ', 'สง่างาม', 'member'),
(44, 'pinkung99@gmail.com', '$2y$10$h9HrWfSeegNrI.uJmNW66e9ztLN5ow/V8XumJj3CxSdDA0.y.NUqG', 'สมหญิง', 'เจริญแล้ว', 'member'),
(45, 'sarawat66@gami.com', '$2y$10$ZABWVTvoi.0CuxoJYZI62e8eirqcFpRwB1pcPORkAxD7Nkef17F.i', 'สมจิตร', 'จงรัก', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ไอเีผู้ใช้', AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
