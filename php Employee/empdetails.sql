-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Oct 04, 2024 at 11:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employeedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `empdetails`
--

CREATE TABLE `empdetails` (
  `EMPID` int(11) NOT NULL,
  `ENAME` varchar(100) DEFAULT NULL,
  `DESIG` varchar(50) DEFAULT NULL,
  `DEPT` varchar(50) DEFAULT NULL,
  `DOJ` date DEFAULT NULL,
  `SALARY` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `empdetails`
--

INSERT INTO `empdetails` (`EMPID`, `ENAME`, `DESIG`, `DEPT`, `DOJ`, `SALARY`) VALUES
(220701267, 'Shiny', 'Manager', 'CSE', '2024-10-17', 60000.00),
(220701281, 'Sneha', 'intern', 'cse', '2024-10-22', 50000.00),
(220701282, 'Snekha', 'Developer', 'CSE', '2024-10-31', 65000.00),
(220701296, 'Swedha', 'Software Engineering', 'CSE', '2024-10-31', 65000.00),
(220701297, 'Swetha', 'HR', 'CSE', '2024-10-25', 60000.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empdetails`
--
ALTER TABLE `empdetails`
  ADD PRIMARY KEY (`EMPID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
