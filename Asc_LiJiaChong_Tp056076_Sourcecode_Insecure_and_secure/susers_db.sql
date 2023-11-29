-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 22, 2023 at 12:52 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `susers_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$KYTavC2ldbKT2xB3uy.HxeddW/zBmGQYqf0euAryxjw69YhTHsIM.'),
(2, 'Admin1', '$2y$10$tkmxup3CCC/FDPdWSEegQ.3WS43/tGagGVesuUwrH56Os8ZE1Gj06'),
(3, 'admin12', '$2y$10$u0XoGmEQtiKpqDIvEuHU0.djC0ThKbAT06uevJvPV3.U0ADIK3f6O'),
(4, 'jc', '$2y$10$is0jG/R8.OjfUaTXTdSkG.MiR7Lrqw/PodBqlwEk3qAlYiCaY0dx6'),
(5, 'TP056076', '$2y$10$9ng0clAEZxKHVLSI8p63IuhAHbSZVA2ck42R3ar7frh/gmPxu64OG'),
(6, 'Tp', '$2y$10$eBMzJGSrdtl.QAixf3NCx.lvALnl19t3MLTDqMHYU.bVeGPtZ0oPG'),
(7, 'TP056076@mail.apu.edu.my', '$2y$10$5YRP5EPpReXYw9UmJAGZNeE3ouguqFRr7N.1PZLtvUrVqCgCGJePS');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
