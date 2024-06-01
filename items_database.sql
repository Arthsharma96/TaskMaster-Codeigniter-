-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2024 at 01:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `items_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `enrollment_date` date NOT NULL,
  `enrollment_number` varchar(20) NOT NULL,
  `course` varchar(100) NOT NULL,
  `year` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fullname`, `email`, `date_of_birth`, `gender`, `address`, `phone_number`, `enrollment_date`, `enrollment_number`, `course`, `year`, `status`, `image_path`) VALUES
(3, 'Arth sharma', 'arth908070@gmail.com', '2024-06-18', 'male', 'PVT', '9589872422', '2024-06-13', '0808CS221040', 'B.tech', '3', 'Senior', NULL),
(4, 'Arth co', 'sgsdg@gmail.com', '2024-06-18', 'Male', 'xdfghdf', '9589872422', '2024-06-12', '0808CS221040', 'B.tech', '3', 'Senior', NULL),
(5, 'Arth sharma', 'sgsdg@gmail.com', '2024-06-13', 'Male', 'zdf', '9589872422', '2024-06-12', '0808CS221040', 'B.tech', '3', 'Senior', NULL),
(6, 'Arth sharma', 'sgsdg@gmail.com', '2024-06-12', 'Male', 'sftwjgjs', '9589872422', '2024-06-18', '0808CS221040', 'B.tech', '3', 'Senior', NULL),
(7, 'Arth sharma', 'sgsdg@gmail.com', '2024-06-07', 'Male', 'zxdfgjsdrty', '9589872422', '2024-06-17', '0808CS221041', 'B.tech', '3', 'Senior', NULL),
(8, 'Arth sharma', 'sgsdg@gmail.com', '2024-06-07', 'Male', 'dfgdfh', '9589872422', '2024-06-11', '0808CS221040', 'B.tech', '3', 'Senior', NULL),
(9, 'Arth sharma', 'heheheheh@gmail.com', '2024-06-05', 'male', 'cfghfdghfr', '9589872422', '2024-06-22', '0808CS221040', 'B.tech', '3', 'Senior', NULL),
(10, 'Arth sharma', 'arth908070@gmail.com', '2024-06-13', 'Male', 'dfghdfghs', '9589872422', '2024-06-21', '0808CS221040', 'B.tech', '3', 'Senior', NULL),
(11, 'Astrid semeplas', 'Astrid@gmail.com', '2024-06-13', 'Male', 'xdfbsdfghs', '9589872422', '2024-06-18', '0808CS221040', 'B.tech', '3', 'Senior', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'art', '123123', '2024-05-28 20:31:39'),
(2, 'arthsharma96', '$2y$10$qrnJp8U6psDOXKIyKYAXveoQH.Q8gc.7GYM.xpNr/hleFNLdCy2u.', '2024-05-28 20:34:54'),
(3, 'test', '$2y$10$l2UsSILEhzn.Cr1LsFdHeOdZ.No6Qy.onhrE8wf10YzhXBr92LKFK', '2024-05-28 20:36:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
