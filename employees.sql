-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2023 at 08:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employees`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_employees`
--

CREATE TABLE `table_employees` (
  `ID` int(11) NOT NULL,
  `Employee_Name` text NOT NULL,
  `Employee_Address` text NOT NULL,
  `Employee_Number` bigint(20) NOT NULL,
  `Employee_Gender` text NOT NULL,
  `Employee_Birthdate` date NOT NULL,
  `Employee_Profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_employees`
--

INSERT INTO `table_employees` (`ID`, `Employee_Name`, `Employee_Address`, `Employee_Number`, `Employee_Gender`, `Employee_Birthdate`, `Employee_Profile`) VALUES
(144, 'Carlo Marton Jose', 'Bulacan Malolos', 9514230152, 'Male', '2023-06-26', '1688590424_1fbb6a1decd12fdbd9bf.png'),
(152, 'Bautista Bong Santos', 'Malolos Bulacan', 9514201423, 'Male', '2023-07-05', '1688589867_8e0b6e8d1c11fe815714.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_employees`
--
ALTER TABLE `table_employees`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_employees`
--
ALTER TABLE `table_employees`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
