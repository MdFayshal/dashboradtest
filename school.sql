-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 11, 2021 at 05:40 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `addmin_pass` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `email`, `addmin_pass`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin'),
(2, 'shabbir', 'shabbir@gmail.com', '1234'),
(5, 'admin2', 'teacher@gmail.com', '11111'),
(6, 'admin2', 'teacher@gmail.com', '1234'),
(7, 'admin2', 'teacher@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

DROP TABLE IF EXISTS `classes`;
CREATE TABLE IF NOT EXISTS `classes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `classname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `classname`) VALUES
(1, 'one'),
(2, 'two'),
(3, 'three'),
(4, 'four'),
(5, 'five');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
CREATE TABLE IF NOT EXISTS `results` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subjects` varchar(30) DEFAULT NULL,
  `class_id` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `mark` int DEFAULT NULL,
  `roll_number` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `roll_number` int DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `student_pass` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `mobile`, `roll_number`, `email`, `student_pass`) VALUES
(7, 'sab', 'df', '01222455587', 1003, 'adminstrt@gmail.com', '1234'),
(4, 'm.s.', 'raju', '9876543210', 1002, 'student@gmail.com', ' 1234'),
(1, 'md', 'fayshal', '1234567890', 1001, 'admin@gmail.com', '1234'),
(12, 'sab', 'df', '01222455587', 10054, 'admin@gmail.com', '5555555');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subjectname` varchar(50) DEFAULT NULL,
  `classid` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subjectname`, `classid`) VALUES
(1, 'bangla', '1'),
(2, 'english', '1'),
(3, 'math', '1'),
(4, 'science', '1'),
(5, 'bangla', '2'),
(6, 'english', '2'),
(7, 'math', '2'),
(8, 'science', '2'),
(9, 'bangla1st', '3'),
(10, 'bangla2nd', '3'),
(11, 'english1st', '3'),
(12, 'english2nd', '3'),
(13, 'math', '3'),
(14, 'science', '3'),
(15, 'bangla1st', '4'),
(16, 'bangla2nd', '4'),
(17, 'english1st', '4'),
(18, 'english2nd', '4'),
(19, 'math', '4'),
(20, 'science', '4');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `teacher_pass` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `first_name`, `last_name`, `mobile`, `email`, `teacher_pass`) VALUES
(2, 'm.s.', 'raju', '9876543210', 'msraju@gmail.com', '1234'),
(3, 'md', 'fayshal', '1234567890', 'teacher@gmail.com', '1234'),
(4, 'sab', 'df', '01222455587', 'teacher1@gmail.com', '1234'),
(5, 'sab', 'df', '01222455587', 'teacher1@gmail.com', '1234'),
(7, 'sab', 'df', '01222455587', 'adminstrt@gmail.com', '999999999999'),
(8, 'sab', 'df', '01222455587', 'adminstrt@gmail.com', '111111111111111111');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
