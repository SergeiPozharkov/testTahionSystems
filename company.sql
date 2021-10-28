-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 28, 2021 at 12:05 PM
-- Server version: 8.0.19
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int UNSIGNED NOT NULL COMMENT '№',
  `name` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Имя',
  `surname` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Фамилия',
  `birth_date` date NOT NULL COMMENT 'Дата рождения',
  `education` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Образование',
  `position` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Должность',
  `vage` decimal(7,2) UNSIGNED NOT NULL COMMENT 'Заработная плата'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `surname`, `birth_date`, `education`, `position`, `vage`) VALUES
(1, 'Иван', 'Иванов', '1980-10-04', 'УО \"ВГМУ\"', 'PHP developer', '500.00'),
(2, 'Петр', 'Петров', '1990-10-22', 'УО \"ВГТК\"', 'PHP full stack developer', '700.00'),
(3, 'Андрей', 'Андреев', '1995-09-09', 'УО \"ВГУ имени П.И. Машерова\"', 'Web disigner', '400.00'),
(4, 'Петр', 'Плавцов', '2000-10-14', 'СШ №35 г.Витебска', 'Resurse manager', '900.00'),
(14, 'Геннадий', 'Красивый', '1990-06-27', 'СШ №19 г.Витебска', 'DevOps', '999.00'),
(15, 'Эдуард', 'Фокин', '1989-01-11', 'УО \"ВГТУ\"', 'QE Automation', '10000.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
