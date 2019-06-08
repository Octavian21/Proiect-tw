-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2019 at 11:45 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tw`
--

-- --------------------------------------------------------

--
-- Table structure for table `anonimi`
--

CREATE TABLE `anonimi` (
  `id` int(11) NOT NULL,
  `USER` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anonimi`
--

INSERT INTO `anonimi` (`id`, `USER`) VALUES
(1, 'anonim0'),
(2, 'Anonim1'),
(3, 'Anonim2'),
(4, 'Anonim3'),
(5, 'Anonim4'),
(6, 'Anonim5'),
(7, 'Anonim6'),
(8, 'Anonim7');

-- --------------------------------------------------------

--
-- Table structure for table `categorii`
--

CREATE TABLE `categorii` (
  `id` int(11) NOT NULL,
  `NUME` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorii`
--

INSERT INTO `categorii` (`id`, `NUME`) VALUES
(1, 'Food'),
(2, 'Computer Science'),
(3, 'Teenagers'),
(4, 'Family'),
(5, 'Business'),
(6, 'Miscellaneous'),
(7, 'Beauty&Fashion');

-- --------------------------------------------------------

--
-- Table structure for table `intrebari`
--

CREATE TABLE `intrebari` (
  `id` int(11) NOT NULL,
  `id_utilizator` int(11) DEFAULT NULL,
  `id_categorie` int(11) DEFAULT NULL,
  `tip_utilizator` int(11) NOT NULL,
  `nr_likeuri` int(11) DEFAULT NULL,
  `nr_dislikeuri` int(11) DEFAULT NULL,
  `data_adaugare` datetime DEFAULT NULL,
  `continut` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intrebari`
--

INSERT INTO `intrebari` (`id`, `id_utilizator`, `id_categorie`, `tip_utilizator`, `nr_likeuri`, `nr_dislikeuri`, `data_adaugare`, `continut`) VALUES
(1, 1, 1, 0, 0, 0, '2019-06-06 18:32:42', 'diana'),
(2, 1, 1, 0, 0, 0, '2019-06-06 18:33:14', 'diana'),
(3, 1, 1, 0, 0, 0, '2019-06-06 18:33:37', 'diana'),
(4, 1, 1, 0, 0, 0, '2019-06-06 18:34:59', 'diana'),
(5, 1, 1, 0, 0, 0, '2019-06-06 18:35:01', 'diana'),
(6, 1, 1, 0, 0, 0, '2019-06-06 18:35:05', 'diana'),
(7, 1, 6, 0, 0, 0, '2019-06-06 18:35:28', 'diana'),
(8, 1, 1, 0, 0, 0, '2019-06-06 18:36:24', 'Food'),
(9, 1, 4, 0, 0, 0, '2019-06-06 18:36:58', 'afadfafadfavxcvzsjgjgadj'),
(10, 1, 1, 0, 0, 0, '2019-06-06 18:37:04', ''),
(11, 5, 6, 0, 0, 0, '2019-06-06 18:45:16', 'anannana'),
(12, 5, 3, 0, 0, 0, '2019-06-06 18:46:29', 'ce faci tu?'),
(13, 2, 1, 0, 0, 0, '2019-06-06 19:08:30', 'bababa'),
(14, 2, 1, 1, 0, 0, '2019-06-06 19:15:40', 'anan maria'),
(15, 7, 6, 0, 0, 0, '2019-06-06 19:20:26', 'xscas'),
(16, 7, 4, 0, 0, 0, '2019-06-06 20:24:22', 'ANA MARIA MIRABELA'),
(17, 5, 7, 1, 0, 0, '2019-06-06 20:56:24', 'cum trec la ip?'),
(18, 3, 5, 1, 0, 0, '2019-06-08 19:31:40', 'hello. ce faci'),
(19, 3, 5, 1, 0, 0, '2019-06-08 21:09:25', 'oare maine ploua?'),
(20, 3, 1, 1, 0, 0, '2019-06-08 21:23:01', ''),
(21, 3, 1, 1, 0, 0, '2019-06-08 21:23:23', ''),
(22, 3, 1, 1, 0, 0, '2019-06-08 22:05:16', 'fsdvcx'),
(23, 3, 1, 1, 0, 0, '2019-06-08 22:05:21', 'fsdvcx'),
(24, 3, 1, 1, 0, 0, '2019-06-08 22:08:18', 'ana are mere'),
(25, 3, 1, 1, 0, 0, '2019-06-08 22:14:17', 'fvsdvs'),
(26, 3, 1, 1, 0, 0, '2019-06-08 22:25:23', 'fvdfbd'),
(27, 3, 1, 1, 0, 0, '2019-06-08 22:37:49', 'afara este noapte?'),
(28, 3, 1, 1, 0, 0, '2019-06-08 22:40:26', 'nu este noapte afara?'),
(29, 3, 4, 1, 0, 0, '2019-06-08 22:42:33', 'aceeeeeeeeeeeeee'),
(30, 3, 1, 1, 0, 0, '2019-06-08 22:46:07', 'ceva'),
(31, 3, 1, 1, 0, 0, '2019-06-08 22:47:47', 'mama mia'),
(32, 3, 1, 1, 0, 0, '2019-06-08 22:50:46', 'nimic'),
(33, 8, 1, 0, 0, 0, '2019-06-08 22:51:19', 'tu esti cu capu?'),
(34, 8, 1, 0, 0, 0, '2019-06-08 23:00:32', 'vaaca'),
(35, 8, 1, 0, 0, 0, '2019-06-08 23:01:29', 'vaca ora'),
(36, 8, 1, 0, 0, 0, '2019-06-08 23:03:10', 'dewvwe'),
(37, 8, 1, 0, 0, 0, '2019-06-08 23:03:30', 'tu esti naspa'),
(38, 8, 1, 0, 0, 0, '2019-06-08 23:06:24', 'tuuuuuuuuuuuu'),
(39, 5, 1, 1, 0, 0, '2019-06-08 23:15:29', 'hai afara'),
(40, 5, 1, 1, 0, 0, '2019-06-08 23:16:10', 'nu mergi'),
(41, 5, 1, 1, 0, 0, '2019-06-08 23:16:23', 'esti prst'),
(42, 2, 1, 1, 0, 0, '2019-06-09 00:36:07', 'dada'),
(43, 2, 1, 1, 0, 0, '2019-06-09 00:36:37', 'dadadada'),
(44, 2, 1, 1, 0, 0, '2019-06-09 00:36:43', 'dad'),
(45, 8, 1, 0, 0, 0, '2019-06-09 00:37:04', 'masina'),
(46, 8, 1, 0, 0, 0, '2019-06-09 00:38:00', 'dadadana');

-- --------------------------------------------------------

--
-- Table structure for table `raspunsuri`
--

CREATE TABLE `raspunsuri` (
  `id` int(11) NOT NULL,
  `id_intrebare` int(11) DEFAULT NULL,
  `id_utilizator` int(11) DEFAULT NULL,
  `tip_utilizator` int(11) NOT NULL,
  `nr_likeuri` int(11) DEFAULT NULL,
  `nr_dislikeuri` int(11) DEFAULT NULL,
  `data_adaugare` datetime DEFAULT NULL,
  `continut` varchar(1000) DEFAULT NULL,
  `funda` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `raspunsuri`
--

INSERT INTO `raspunsuri` (`id`, `id_intrebare`, `id_utilizator`, `tip_utilizator`, `nr_likeuri`, `nr_dislikeuri`, `data_adaugare`, `continut`, `funda`) VALUES
(16, 1, 3, 0, 0, 0, '2019-05-05 00:00:00', 'BICA', 0),
(17, 1, 3, 0, 0, 0, '2019-06-05 20:38:33', 'rgweilsjgkvsd,nv,x', 0),
(18, 1, 3, 0, 0, 0, '2019-06-05 20:56:34', 'fgregdf', 0),
(19, 1, 3, 0, 0, 0, '2019-06-05 21:17:59', 'ananannan', 0),
(20, 1, 3, 0, 0, 0, '2019-06-05 21:39:34', 'greseala', 0),
(21, 1, 3, 0, 0, 0, '2019-06-05 22:06:57', 'corect', 0),
(22, 1, 3, 0, 0, 0, '2019-06-05 22:53:03', 'br', 0),
(23, 1, 3, 0, 0, 0, '2019-06-05 23:34:34', 'dd', 0),
(24, 1, 3, 0, 0, 0, '2019-06-05 23:35:00', 'fwef', 0),
(25, 1, 3, 1, 0, 0, '2019-06-05 23:56:21', 'ana banan', 0),
(28, 1, 3, 1, 0, 0, '2019-06-06 15:48:27', ' LNKFER', 0),
(29, 1, 0, 0, 0, 0, '2019-06-06 15:54:00', 'nkewlcs,dmc ,wem ', 0),
(30, 1, 2, 0, 0, 0, '2019-06-06 15:55:13', 'ana bababa', 0),
(31, 1, 2, 0, 0, 0, '2019-06-06 15:55:28', 'aba', 0),
(32, 1, 3, 0, 0, 0, '2019-06-06 15:55:49', 'ncdm,c sm ', 0),
(33, 1, 7, 0, 0, 0, '2019-06-06 19:21:22', 'ANDREI', 0),
(34, 1, 5, 1, 0, 0, '2019-06-06 21:10:09', 'ananan', 0),
(35, 1, 5, 1, 0, 0, '2019-06-06 22:12:08', 'ce faci', 0),
(36, -1, 5, 1, 0, 0, '2019-06-06 22:18:53', 'cheheh', 0),
(37, -1, 5, 1, 0, 0, '2019-06-06 22:19:12', 'nu stiu', 0),
(38, -1, 5, 1, 0, 0, '2019-06-06 22:29:53', 'dadada123', 0),
(39, -1, 5, 1, 0, 0, '2019-06-06 22:30:30', 'test', 0),
(40, 17, 5, 1, 0, 0, '2019-06-06 22:34:02', 'dadada', 0),
(41, 17, 5, 1, 0, 0, '2019-06-06 22:34:25', 'macarena', 0),
(42, 17, 3, 1, 0, 0, '2019-06-08 19:30:02', 'haoah', 0),
(43, 15, 3, 1, 0, 0, '2019-06-08 19:30:31', 'hehehe', 0),
(44, 16, 3, 1, 0, 0, '2019-06-08 19:58:37', 'ce faci', 0),
(45, 16, 3, 1, 0, 0, '2019-06-08 21:35:31', 'dadada', 0),
(46, 16, 3, 1, 0, 0, '2019-06-08 21:36:04', 'addadada', 0),
(47, 16, 3, 1, 0, 0, '2019-06-08 21:37:34', 'dadada mamam', 0),
(48, 16, 3, 1, 0, 0, '2019-06-08 21:44:20', 'mama mia', 0),
(49, 16, 3, 1, 0, 0, '2019-06-08 21:45:56', 'pizzz', 0),
(50, 16, 3, 1, 0, 0, '2019-06-08 21:53:09', 'vdfs', 0),
(51, 16, 3, 1, 0, 0, '2019-06-08 21:53:17', 'fenfmsd,ncsm', 0),
(52, 18, 3, 1, 0, 0, '2019-06-08 21:53:45', 'vdfvdfdvd', 0),
(53, 15, 3, 1, 0, 0, '2019-06-08 21:59:52', 'dsvsd', 0),
(54, 14, 3, 1, 0, 0, '2019-06-08 22:04:19', 'fdfe', 0),
(55, 1, 8, 0, 0, 0, '2019-06-08 22:53:12', 'cejejje', 0),
(56, 9, 8, 0, 0, 0, '2019-06-08 23:00:46', 'ijclrkeffns,d', 0),
(57, 9, 8, 0, 0, 0, '2019-06-08 23:01:35', 'cbjkenmdsdas', 0),
(58, 37, 8, 0, 0, 0, '2019-06-08 23:03:38', 'nu e adevarat.', 0),
(59, 38, 8, 0, 0, 0, '2019-06-08 23:06:30', 'heheheh', 0),
(60, 38, 8, 0, 0, 0, '2019-06-08 23:13:23', 'hhehehehehhehe', 0),
(61, 38, 5, 1, 0, 0, '2019-06-08 23:15:21', 'sigur ca da', 0),
(62, 41, 5, 1, 0, 0, '2019-06-08 23:41:52', 'hahah', 0),
(63, 40, 8, 0, 0, 0, '2019-06-09 00:11:50', 'dadada', 0),
(64, 40, 8, 0, 0, 0, '2019-06-09 00:12:15', 'mama mia', 0),
(65, 41, 8, 0, 0, 0, '2019-06-09 00:21:33', 'mama mia', 0),
(66, 33, 3, 1, 0, 0, '2019-06-09 00:22:30', 'dadada', 0),
(67, 46, 8, 0, 0, 0, '2019-06-09 00:38:11', 'masina', 0);

-- --------------------------------------------------------

--
-- Table structure for table `utilizatori`
--

CREATE TABLE `utilizatori` (
  `id` int(11) NOT NULL,
  `USER` varchar(100) DEFAULT NULL,
  `PAROLA` varchar(100) DEFAULT NULL,
  `TARA` varchar(100) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilizatori`
--

INSERT INTO `utilizatori` (`id`, `USER`, `PAROLA`, `TARA`, `EMAIL`) VALUES
(2, 'admin', 'ana', 'Romania', 'diana.alexa31@yahoo.com'),
(3, 'mariana', 'mariana1', 'romania', 'diana.alexa31@yahoo.com'),
(4, 'andrei', 'diana98', 'romania', 'raducanu.andrei98@gmail.com'),
(5, 'anamaria', 'anamaria1', 'romania', 'diana.alexa31@yahoo.com'),
(6, 'indiana', 'indiana1', 'romania', 'diana.alexa31@yahoo.com'),
(7, 'stefan', 'stefan1', 'romania', 'diana.alexa31@yahoo.com'),
(8, 'anutica', 'anutica1', 'romania', 'diana.alexa31@yahoo.com'),
(9, 'viorel', 'viorel1', 'romania', 'diana.alexa31@yahoo.com'),
(10, 'mamasita', 'diana123', 'tara mea', 'diana.andrei@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `vremea`
--

CREATE TABLE `vremea` (
  `id` int(11) NOT NULL,
  `locatie` varchar(100) DEFAULT NULL,
  `temperatura` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vremea`
--

INSERT INTO `vremea` (`id`, `locatie`, `temperatura`) VALUES
(1, 'IASI', 23);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anonimi`
--
ALTER TABLE `anonimi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorii`
--
ALTER TABLE `categorii`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intrebari`
--
ALTER TABLE `intrebari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `raspunsuri`
--
ALTER TABLE `raspunsuri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilizatori`
--
ALTER TABLE `utilizatori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vremea`
--
ALTER TABLE `vremea`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anonimi`
--
ALTER TABLE `anonimi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categorii`
--
ALTER TABLE `categorii`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `intrebari`
--
ALTER TABLE `intrebari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `raspunsuri`
--
ALTER TABLE `raspunsuri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `utilizatori`
--
ALTER TABLE `utilizatori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vremea`
--
ALTER TABLE `vremea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
