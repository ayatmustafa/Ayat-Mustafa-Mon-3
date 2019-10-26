-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2019 at 07:22 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `short_link`
--

-- --------------------------------------------------------

--
-- Table structure for table `dolinks`
--

CREATE TABLE `dolinks` (
  `id` int(11) NOT NULL,
  `olink` varchar(200) NOT NULL,
  `nlink` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dolinks`
--

INSERT INTO `dolinks` (`id`, `olink`, `nlink`) VALUES
(74, 'https://docs.google.com/document/d/12rEy32kQJw6j1UvZ4sC_rvVgfkhKSkjKoSd7JuUcohI/edit?fbclid=IwAR1Z69fqfEdm6Vz8Y8UVVAFoyQ5W7ytr1YcFCYSi482wg-GbhPlfbWxC2s8', '5db4804c0f34b'),
(75, 'https://github.com/ayatmustafa/Ayat-Musataf-Mon-2', '5db4806727186'),
(76, 'https://www.w3schools.com/php/phptryit.asp?filename=tryphp_func_math_rand', '5db48086eadb7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dolinks`
--
ALTER TABLE `dolinks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dolinks`
--
ALTER TABLE `dolinks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
