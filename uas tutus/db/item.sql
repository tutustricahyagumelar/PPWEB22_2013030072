-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 10, 2022 at 05:42 PM
-- Server version: 5.7.33-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `barcode` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `nama` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `satuan` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `harga` double(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `barcode`, `nama`, `satuan`, `harga`) VALUES
('0114000', '8998888172112', 'marjan 550ml marquisa', 'BTL', 18900.00),
('0114001', '711844150003', 'ABC 525ML SQUASH ORANGE ', 'BTL', 14000.00),
('0114003', '711844150034', 'abc 580ml squash lychee  ', 'BTL', 12000.00),
('0114004', '711844154506', 'ABC 485ML SPC GRADE C.PANDAN', 'BTL', 21500.00),
('0114005', '711844154568', 'ABC 485ML SPC GRADE MELON', 'BTL', 18000.00),
('0114007', '089686834109', 'if freiss 600ml cocopandan syrup', 'BTL', 15500.00),
('0114008', '089686834154', 'if freiss 600ml frambozen syrup', 'BTL', 16500.00),
('0114009', '8998888110114', 'marjan 500ml cocopandan', 'BTL', 22000.00),
('0114010', '8998888110213', 'marjan 500ml melon', 'PCS', 21500.00),
('0114011', '8998888110312', 'marjan 600ml mocca', 'BTL', 21200.00),
('0114012', '8998888112415', 'marjan 550ml fruit punch', 'BTL', 18900.00),
('0114013', '8998888170118', 'marjan 570ml squash cocopandan', 'BTL', 11400.00),
('0114014', '8998888170910', 'marjan 520ml squash orange', 'BTL', 11400.00),
('0114015', '8998888172419', 'marjan 520ml squash fruit punch', 'BTL', 11400.00),
('0114016', '8998888174314', 'marjan 520ml squash guava', 'BTL', 11400.00),
('01140172', '8998888171429', 'MARJAN SQ SIRSAT 450 ML', 'BTL', 11400.00),
('01140173', '8993571003902', 'ESSENCE VANILIE 12ML', 'PCS', 3500.00),
('01140174', '711844150041', 'ABC SQ SORSOP/SIRSAK ', 'PCS', 12000.00),
('0114021', '089686834055', 'if freiss 600ml squash orange  ', 'BTL', 10500.00),
('0114022', '8998888110817', 'marjan 550ml lychee punch', 'BTL', 20000.00),
('0114023', '8998888110619', 'marjan 550ml vanila', 'BTL', 21200.00),
('0114024', '8998888110718', 'marjan 550ml strawberry', 'BTL', 18900.00),
('0114025', '089686834253', 'if freiss 600ml melon syrup', 'BTL', 15500.00),
('0114029', '711844150027', 'abc 580ml squash nanas ', 'BTL', 12000.00),
('0114030', '711844154643', 'abc 585ml spc grape black', 'BTL', 15000.00),
('0114031', '8998888113719', 'marjan 550ml pisang susu', 'BTL', 21200.00),
('0114032', '8998888180919', 'Marjan 550ml Milk Orange', 'PCS', 18900.00),
('0114033', '8998888180216', 'marjan630mlMilkMelon*', 'PCS', 15975.00),
('0114034', '8998888180711', 'Marjan 550ml Milk Straw', 'PCS', 18900.00),
('0114036', '711844150133', 'abc 300ml sq jrk&blwh', 'BTL', 4850.00),
('0114037', '711844150140', 'abc 300ml sq strw&kiwi', 'BTL', 4850.00),
('0114038', '8998888111517', 'marjan 600ml rose', 'BTL', 21200.00),
('0114039', '711844154605', 'abc 585ml spc grade strawbery', 'BTL', 19800.00),
('0114040', '0114040', 'abc585mlspcgrapeb', 'PCS', 15000.00),
('0114049', '711844150065', 'ABC 525ML SQUASH MANGGA', 'BTL', 12000.00),
('0114050', '711844150010', 'abc 580ml squash grape ', 'BTL', 11283.00),
('0114151', '8998888172723', 'marjan 520ml squash mangga', 'BTL', 11400.00),
('0114152', '8998888110411', 'marjan 550ml lemon', 'BTL', 21200.00),
('0114153', '8998888111012', 'marjan 550ml kopi', 'BTL', 21200.00),
('0114154', '089686834307', 'if freiss 600ml squash lychee', 'BTL', 10500.00),
('0114155', '8994297101590', 'sukasari 630ml frambozen', 'BTL', 19200.00),
('0114156', '8994297101828', 'sukasari 630ml guava', 'BTL', 19200.00),
('0114157', '8994297101606', 'sukasari 630ml orange', 'BTL', 19200.00),
('0114158', '8994297101842', 'sukasari 630ml cocopandan', 'BTL', 19200.00),
('0114159', '8994297101613', 'sukasari 630ml melon', 'BTL', 19200.00),
('0114160', '8994297101446', 'niki sari 625ml frambozen', 'BTL', 17600.00),
('0114161', '8994297101781', 'delicio 625ml grape', 'BTL', 18700.00),
('0114162', '8994297101392', 'delicio 610ml orange', 'BTL', 18700.00),
('0114163', '8994297101422', 'delicio 625ml strawbery', 'BTL', 18700.00),
('0114164', '8994297101385', 'delicio 625ml melon', 'BTL', 18700.00),
('0114165', '8994297101835', 'delicio 625ml cocopandan', 'BTL', 18700.00),
('0114166', '8994297101798', 'delicio 625ml guava', 'BTL', 18700.00),
('0114167', '8998888170828', 'marjan 500ml squash lychee', 'BTL', 11400.00),
('0114168', '8998888170729', 'marjan 500ml squash strawbery', 'BTL', 11400.00),
('0114169', '8998888170224', 'marjan 500ml squash melon', 'BTL', 11400.00),
('0114170', '8998888160966', 'sunquick 840ml gold orange', 'BTL', 66400.00),
('0114171', '8998888134332', 'double fresh 650ml guava', 'BTL', 27000.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fk_item_barcode` (`barcode`),
  ADD KEY `fk_item_satuan1_idx` (`satuan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
