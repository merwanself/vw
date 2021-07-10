-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 11:08 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vw`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `nom` varchar(11) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `messag` varchar(450) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `nom`, `adress`, `messag`) VALUES
(19, 'manb', 'merouan@gmail.com', 'domage'),
(20, 'merouan ', 'tahraoui@gmail.com', 'well done '),
(21, 'merouan ', 'merouane@gmail.com', 'well done '),
(22, 'tahraoui', 'merouan@gmail.com', 'message ');

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

CREATE TABLE `produits` (
  `id` int(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `libelle` varchar(250) NOT NULL,
  `detail` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`id`, `image`, `libelle`, `detail`, `category`) VALUES
(2, 'prod14-06-2021-00-42-33.jpg', '', '', ' '),
(4, 'prod14-06-2021-10-39-53.jpg', 'Golf GTE ', 'The GOLF GTE has hybride engine .13 kWh battery providing up to 73 km of range in the city', 'hatchback  '),
(7, 'prod20-06-2021-15-13-40.jpeg', 'GOLF 8 TSI ', 'discover the 2 engine of the golf tsi 3 cyl, 1.0 L TSi 90/110 4 cyl, 1.5 L TSI 130/150', 'hatchback'),
(8, 'prod20-06-2021-15-30-23.jpg', 'up', 'Come with Electric engine,60ch BlueMotion Technology', 'electric '),
(10, 'prod20-06-2021-15-35-44.jpg', 'id-3', 'Volkswagen ID3 the NeswesT Electric model ', 'electric '),
(11, 'prod20-06-2021-15-36-58.jpg', 'id-4', 'CHECK IT NOW', 'electric'),
(12, 'prod20-06-2021-15-41-06.jpg', 'VW Tiguane', ' SUV 2.0 TDI Disel 184 ch. ', 'suv'),
(13, 'prod20-06-2021-15-42-17.jpg', 'VW T-ROC ', 'SUV with 2.0 TDI 150ch .', 'suv'),
(14, 'prod20-06-2021-15-43-04.jpg', ' VW Touareg', 'The Most Hight Performance SUV 5.0 V10 TDI Turbo 313 ch .', 'suv'),
(16, 'prod21-06-2021-10-27-27.jpeg', 'golf', 'des', 'electric');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
