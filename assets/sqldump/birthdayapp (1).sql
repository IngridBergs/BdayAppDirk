-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 30 jan 2019 om 10:04
-- Serverversie: 10.1.37-MariaDB
-- PHP-versie: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `birthdayapp`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `superuser`
--

CREATE TABLE `superuser` (
  `adminnr` int(11) NOT NULL,
  `adminname` varchar(12) NOT NULL,
  `adminpassword` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `superuser`
--

INSERT INTO `superuser` (`adminnr`, `adminname`, `adminpassword`) VALUES
(1, 'DirkVrancken', 'NewPassword1');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `userMessage` longtext NOT NULL,
  `url1` mediumtext NOT NULL,
  `url2` mediumtext NOT NULL,
  `url3` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `userMessage`, `url1`, `url2`, `url3`) VALUES
(1, 'Angelo', 'angelo.alfano.1992@gmail.com', 'a', 'a', 'a', 'a'),
(2, 'Angelo', 'angelo.alfano.1992@gmail.com', 'test', 'new', 'new', 'new'),
(3, 'Angelo', 'angelo.alfano.1992@gmail.com', 'a', 'test', 'test', 'test'),
(4, 'Angelo', 'aangeloow@hotmail.com', 'a', 'a', 'a', 'a');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `superuser`
--
ALTER TABLE `superuser`
  ADD PRIMARY KEY (`adminnr`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `superuser`
--
ALTER TABLE `superuser`
  MODIFY `adminnr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
