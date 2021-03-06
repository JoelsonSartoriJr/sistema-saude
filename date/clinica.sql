-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql-server
-- Generation Time: Feb 25, 2021 at 07:05 PM
-- Server version: 8.0.19
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinica`
--

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

CREATE TABLE `consultation` (
  `id` int NOT NULL,
  `id_doctor` int NOT NULL,
  `id_patient` int NOT NULL,
  `doctor` varchar(500) NOT NULL,
  `hour` varchar(500) NOT NULL,
  `date` varchar(500) NOT NULL,
  `obs` varchar(500) NOT NULL,
  `others` varchar(500) NOT NULL,
  `symptoms` varchar(500) NOT NULL,
  `recipe` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `consultation`
--

INSERT INTO `consultation` (`id`, `id_doctor`, `id_patient`, `doctor`, `hour`, `date`, `obs`, `others`, `symptoms`, `recipe`) VALUES
(3, 23, 29, 'Joao medico', '23:15', '2021-01-31', 'aaaaaaaaa', 'aaaaaaaaaaaaa', 'nenhum', 'aaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `crm` varchar(500) NOT NULL,
  `id_user` int NOT NULL,
  `phone` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `specialty` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`crm`, `id_user`, `phone`, `address`, `specialty`) VALUES
('87654321', 23, '(99) 99999-9999', 'Rua Guadalajara, 25', 'Ginecologia');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int NOT NULL,
  `id_lab` int NOT NULL,
  `lab` varchar(500) NOT NULL,
  `patient` varchar(500) NOT NULL,
  `doctor` varchar(500) NOT NULL,
  `hour` varchar(500) NOT NULL,
  `date` varchar(500) NOT NULL,
  `obs` varchar(500) NOT NULL,
  `others` varchar(500) NOT NULL,
  `type_exam` varchar(500) NOT NULL,
  `result` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `id_lab`, `lab`, `patient`, `doctor`, `hour`, `date`, `obs`, `others`, `type_exam`, `result`) VALUES
(2, 24, 'Senhor laboratorio', 'Paciente doente', 'Joao medico', '23:30', '2021-02-10', 'aaaaaaaa', 'bbbbbbbbbb', 'sangue', 'cccccccccc');

-- --------------------------------------------------------

--
-- Table structure for table `laboratory`
--

CREATE TABLE `laboratory` (
  `cnpj` varchar(500) NOT NULL,
  `id_lab` int NOT NULL,
  `phone` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `type_exam` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `laboratory`
--

INSERT INTO `laboratory` (`cnpj`, `id_lab`, `phone`, `address`, `type_exam`) VALUES
('11.111.111/1232-22', 24, '(99) 99999-9999', 'Av Rio Grande, 655', 'Mamografia'),
('22.222.222/2322-2', 28, '(53) 99923-3659', 'Av Rio Grande, 655', 'Ultra-sonografia');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `cpf` varchar(500) NOT NULL,
  `id_user` int NOT NULL,
  `phone` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `date_nasc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`cpf`, `id_user`, `phone`, `address`, `gender`, `date_nasc`) VALUES
('032.234.210-123', 27, '(53) 99923-3659', 'Av Rio Grande, 655', 'Outro', '2021-03-01'),
('327.554.480-31', 29, '(99) 99999-9999', 'Av Rio Grande, 655', 'outro', '2021-02-09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `type` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`) VALUES
(1, 'joelson', 'joelson@email.com', '123456', 'admin'),
(23, 'Joao medico', 'medico@email.com', '123456', 'doctor'),
(24, 'Senhor laboratorio', 'laboratorio@email.com', '123456', 'lab'),
(27, 'joelson', 'paciente@email.com', '123456', 'patient'),
(28, 'Senhora Laboratorio', 'funcionario2@email.com', '123456', 'lab'),
(29, 'Paciente doente', 'patient2@email.com', '123456', 'patient');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`crm`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laboratory`
--
ALTER TABLE `laboratory`
  ADD PRIMARY KEY (`cnpj`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
