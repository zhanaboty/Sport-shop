-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2019 at 05:18 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sport_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cost` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `id_category` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`id`, `name`, `cost`, `size`, `color`, `id_category`, `img`) VALUES
(1, 'Nike boots', 120, 42, 'black, white, green', 1, 'img/f391fed5-cc5f-4f95-b6e2-1a7c08671657.webp'),
(2, 'skittles', 15, 2, 'white,black,red', 6, 'https://png.pngtree.com/png-clipart/20190528/ourlarge/pngtree-3d-bowling-skittles-pins-vector-with-red-ball-png-image_1112145.jpg'),
(3, 'Ball for Basketball', 23, 5, 'orange', 3, 'https://www.netclipart.com/pp/m/0-7264_basketball-png-clipart-basketball-ball-png.png'),
(4, 'Table for chess', 50, 10, 'brown', 4, 'https://ae01.alicdn.com/kf/HTB1bCFNXynrK1RjSsziq6xptpXaH/Folding-Magnetic-Travel-Chess-Set-For-Kids-Or-Adults-Chess-Board-Game-25x25cm-Gold-Silver-Chess.jpg_640x640.jpg'),
(46, 'Ball for Voleyball', 46, 4, 'yellow, blue', 0, 'https://cdn.f.kz/prod/1372/1371281_550.jpg'),
(49, 'T-Shirt of fc barcelona', 38, 38, 'red, blue, yellow', 0, 'http://footballalmaty.kz/_sh/00/65.jpg'),
(51, 'ball for football', 43, 6, 'white,grey', 0, 'http://footballalmaty.kz/_sh/1/111.jpg'),
(52, 'boots', 82, 41, 'red, grey', 0, 'http://footballalmaty.kz/_sh/2/234.jpg'),
(53, 'T-short of fc Real madrid', 32, 40, 'black', 0, 'http://footballalmaty.kz/_sh/00/19.jpg'),
(54, 'rocket of tennis', 56, 5, 'red, white', 0, 'https://object.pscloud.io/cms/cms/Photo/img_0_2110_26_0.jpeg'),
(55, 'rocket of tennis', 87, 6, 'red, white', 0, 'https://object.pscloud.io/cms/cms/Photo/img_0_1567_21_0.jpg'),
(59, 'helmet', 86, 37, 'white, grey', 0, 'https://sportidea.kz/upload/resize_cache/iblock/2b3/7d3/500_500_140cd750bba9870f18aada2478b24840a/Bez_imeni_1.jpg'),
(60, 'bike', 148, 24, 'black', 0, 'https://sportidea.kz/upload/resize_cache/iblock/193/500_500_140cd750bba9870f18aada2478b24840a/cube_agree_c62_pro_2017_road_bike_black_green_EV287836_8560_1.jpg'),
(61, 'sport short', 95, 41, 'black', 0, 'https://sportidea.kz/upload/resize_cache/iblock/f06/500_500_140cd750bba9870f18aada2478b24840a/114545_0904_enl.jpg'),
(62, 'sport hudi', 75, 50, 'red,black, white, blue', 0, 'https://sportidea.kz/upload/resize_cache/iblock/f61/500_500_140cd750bba9870f18aada2478b24840a/yfvfyvtsyu.jpg'),
(63, 'helmet for hockey', 90, 45, 'white', 0, 'https://sportidea.kz/upload/resize_cache/iblock/8bb/500_500_140cd750bba9870f18aada2478b24840a/Bez_imeni_1_vosstanovleno_vosstanovleno_vosstanovleno.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `main`
--
ALTER TABLE `main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
