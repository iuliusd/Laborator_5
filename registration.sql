-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: mai 22, 2022 la 08:08 PM
-- Versiune server: 10.4.24-MariaDB
-- Versiune PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `profiles`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `nume` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `institution` varchar(50) NOT NULL,
  `graduation` date DEFAULT NULL,
  `education` varchar(50) NOT NULL,
  `job` varchar(50) NOT NULL,
  `startdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `registration`
--

INSERT INTO `registration` (`id`, `nume`, `email`, `phone`, `address`, `profession`, `institution`, `graduation`, `education`, `job`, `startdate`, `enddate`, `city`) VALUES
(91, 'iulius', 'example@gmail.com', 78564213, 'random city', 'not a special profession', 'institution', '2022-04-26', 'regular school', 'delivery', '2022-02-02', '2022-05-11', 'orhei'),
(110, '', '', 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '0000-00-00', ''),
(111, 'myname', 'random@mail.ru', 48646184, 'home', 'teacher', 'high school', '2022-04-26', 'regular school', 'cleaner', '2021-12-30', '2022-05-10', 'center'),
(112, '', '', 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '0000-00-00', ''),
(113, 'myname', 'random@mail.ru', 48646184, 'home', 'teacher', 'high school', '2022-04-26', 'regular school', 'cleaner', '2021-12-30', '2022-05-10', 'center'),
(114, '', '', 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '0000-00-00', ''),
(115, '', '', 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '0000-00-00', ''),
(116, 'myname', 'random@mail.ru', 48646184, 'home', 'teacher', 'high school', '2022-04-26', 'regular school', 'cleaner', '2021-12-30', '2022-05-10', 'center'),
(117, '', '', 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '0000-00-00', ''),
(118, '', '', 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '0000-00-00', ''),
(119, 'myname', 'random@mail.ru', 48646184, 'home', 'teacher', 'high school', '2022-04-26', 'regular school', 'cleaner', '2021-12-30', '2022-05-10', 'center'),
(120, '', '', 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '0000-00-00', ''),
(121, '', '', 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '0000-00-00', ''),
(122, '', '', 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '0000-00-00', ''),
(123, '', '', 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '0000-00-00', ''),
(124, '', '', 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '0000-00-00', ''),
(125, 'myname', 'random@mail.ru', 48646184, 'home', 'teacher', 'high school', '2022-04-26', 'regular school', 'cleaner', '2021-12-30', '2022-05-10', 'center'),
(126, '', '', 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '0000-00-00', ''),
(127, '', '', 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '0000-00-00', ''),
(128, 'myname', 'random@mail.ru', 48646184, 'home', 'teacher', 'high school', '2022-04-26', 'regular school', 'cleaner', '2021-12-30', '2022-05-10', 'center'),
(129, '', '', 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '0000-00-00', ''),
(130, '', '', 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
