-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2020 at 01:55 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker_registration`
--

CREATE TABLE `job_seeker_registration` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `firstname` tinytext NOT NULL,
  `lastname` tinytext NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_seeker_registration`
--

INSERT INTO `job_seeker_registration` (`id`, `username`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'sautet', 'elvis', 'kumbafuni', 'elvisesam4148@gmail.com', '$2y$10$v1g22MPvIIVK.LLLeZn9WOErJvjFWBrWvXGEgNYO2cxYjCF6Vv9gm'),
(2, 'sdjfgiaeg', 'John', 'Doe', 'sautetelvis4148@gmail.com', '$2y$10$OW4kTy.vjWORjtU7izZHGe4hKqxwsbNbzCGlhfwzQyx162Jf9WiEy'),
(3, 'merin', 'nickson', 'me', 'sautetelvis@zetech.ac.ke', '$2y$10$AaliV.qZMaSZX3R.jA06vu6Ix9OVTUynhHoqu164lpEnylK2V5m82'),
(4, 'esam2', 'elvis', 'meritei', 'Sabahhdd@gmail.com', '$2y$10$dbwSyicHJ3/G1Hoc04y4iux/8TH2dPoTSAruO6b.g3KhuHWrWJTpa'),
(5, 'titus', 'sammy', 'saruni', 'sarunisamuel@gmail.com', '$2y$10$SJ0uXi2SpcgOOSutrp5u6uDj/5gN7cHr/3HbVzTPCpnsExFGANf5S'),
(6, 'nick', 'meri', 'guch', 'Sabahhdd@gmail.com', '$2y$10$oGZVBru2x.Pl1MIJPtiazuHv048QClYPwJH54.CKmneyS8bi6g6lK'),
(7, 'xaxa', 'Johnghjkh', 'Doe', 'Sabahhdd@gmail.com', '$2y$10$gZvfJmRuwbmGXYcpZeF9keuJFpBQCCK4GRFvFH0cktf3BfwWOnTM2'),
(8, 'tut', 'Johnghjkh', 'saruni', 'sautetelvis@zetech.ac.ke', '$2y$10$O2o92Wd9LyzyB0z/M5q4J.foUZNH2P.YJtPwWN5DWuVS7SRi0Epwa'),
(9, 'tamtam', 'merin', 'saruni', 'saruni32@gmail.com', '$2y$10$bDmbtNVBHFk8rH1l4C0hWuMQI.PU9DrXLZF/5m8GlATECrkUNS6j2'),
(10, 'esam3', 'elvo', 'sautet', 'sautetelvis@zetech.ac.ke', '$2y$10$z.CG2lwFLG3jEjLjb4IjYuWdHHoWaJ1KP1OSX9LeeWb4tW1imz.q.'),
(11, 'joker', 'nickson', 'smak', 'elvisesam4148@gmail.com', '$2y$10$RXljqI6bKO6UojS0h8ibW.fQp5s9uGF9.3l8iVo2Qp1R2n2uismwK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job_seeker_registration`
--
ALTER TABLE `job_seeker_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_seeker_registration`
--
ALTER TABLE `job_seeker_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
