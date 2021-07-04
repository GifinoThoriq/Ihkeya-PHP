-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2021 at 10:23 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ihkeyaphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `nama`, `deskripsi`, `kategori`, `tipe`, `harga`, `gambar`) VALUES
(7, 'Kumis', 'Kursi Ergonomis', 'Kamar Tidur', 'Kursi', '1.200.000', '60d58cf613ca2.jpg'),
(8, 'Lesar', 'Lemari Besar', 'Kamar Tidur', 'Lemari', '1.700.000', '60d58dfbdc7cc.png'),
(9, 'Kukay', 'Kursi Kayu', 'Ruang Tamu', 'Kursi', '50.000', '60d5a4956caa5.png'),
(12, 'Wapel', 'wastafel kamar mandi', 'Kamar Mandi', 'wastafel', '1.700.000', '60d9bff7811df.png'),
(14, 'Meyu', 'Meja Kayu', 'Living Room', 'Meja', '1.700.000', '60e16be4a407b.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'gifino', '$2y$10$uwI/unc.mft8LGvbhrtqGexWO63TSDu3wdgvOZzacN75e.1dIZN0m'),
(2, 'admin', '$2y$10$irBo8KtuYG031cwgKuf9L.xj3g/GppClXO89VLZJyn10CVZtleNNa'),
(3, 'budi', '$2y$10$VQgd7wDRe360MSRVyXJsj.jWX/RR.QQBmT8ZPGT.TaUj0fS1I2d5y'),
(4, 'bambang', '$2y$10$k4BRmcRllCfmyL0Fa26go.FT2uUNRS3N3RGqTRB5pFygxX.f89mAC'),
(5, 'thoriq', '$2y$10$RpNGa2M/73Jt2QSvOj0y5eO3SZQAHttOYX36P.BHw5vUuHxMW0C9i');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
