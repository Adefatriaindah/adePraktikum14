-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 10:53 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_film`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `nama_film` varchar(200) NOT NULL,
  `id_genre` int(11) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `cover` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `nama_film`, `id_genre`, `duration`, `cover`, `created_at`, `updated_at`) VALUES
(1, 'Akhirat love story', 1, '1 jam 4 menit', 'akhirat.jpg', '2023-06-07 01:24:38', '2023-06-07 01:24:38'),
(2, 'Aku bukan wanita pilihan', 2, '1 jam 30 menit', 'aku bukan wanita pilihan.jpg', '2023-06-07 01:24:38', '2023-06-07 01:24:38'),
(3, 'Age Of Ultron', 3, '3 jam', '1688404225_b072e2b851ba3e07af3b.jpg', '2023-06-07 01:24:38', '2023-06-07 01:24:38'),
(4, 'Buya Hamka', 2, '2 jam', 'buya hamka.jpg', '2023-06-07 01:24:38', '2023-06-07 01:24:38'),
(5, 'Despicable', 4, '1 jam 20 menit', 'despicable.jpg', '2023-06-07 01:24:38', '2023-06-07 01:24:38'),
(6, 'Gatot kaca', 3, '1 jam 1 menit', 'gatotkaca.jpg', '2023-06-07 01:24:38', '2023-06-07 01:24:38'),
(7, 'Keluarga Cemara', 2, '1 jam 25 menit', 'keluarga cemara.jpg', '2023-06-07 01:24:38', '2023-06-07 01:24:38'),
(8, 'khanzab', 6, '1 jam 45 menit', 'khanzab.jpg', '2023-06-07 01:24:38', '2023-06-07 01:24:38'),
(9, 'My stupid boss', 5, '1 jam 35 menit', 'my stupid boss.jpg', '2023-06-07 01:24:38', '2023-06-07 01:24:38'),
(10, 'mumun pocong', 6, '1 jam 10 menit', 'mumun.jpg', '2023-06-07 01:24:38', '2023-06-07 01:24:38'),
(11, 'bay hamka', 2, ' 7 jam', '1688518954_86b6733d250d2b0fa605.jpg', '2023-07-05 01:02:34', '2023-07-05 01:02:34');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id_genre` int(11) NOT NULL,
  `nama_genre` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id_genre`, `nama_genre`, `created_at`, `updated_at`) VALUES
(1, 'romance', '2023-06-13 08:02:43', '2023-06-13 08:02:43'),
(2, 'drama', '2023-06-13 08:02:43', '2023-06-13 08:02:43'),
(3, 'action', '2023-06-13 08:02:43', '2023-06-13 08:02:43'),
(4, 'kartun', '2023-06-13 08:02:43', '2023-06-13 08:02:43'),
(5, 'komedi', '2023-06-13 08:02:43', '2023-06-13 08:02:43'),
(6, 'horor', '2023-06-13 08:02:43', '2023-06-13 08:02:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_genre` (`id_genre`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
