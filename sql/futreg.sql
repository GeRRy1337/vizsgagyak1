-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Már 31. 12:27
-- Kiszolgáló verziója: 10.4.14-MariaDB
-- PHP verzió: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `futreg`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `jelentkezes`
--

CREATE TABLE `jelentkezes` (
  `id` int(11) NOT NULL,
  `nev` text COLLATE utf8_hungarian_ci NOT NULL,
  `email` text COLLATE utf8_hungarian_ci NOT NULL,
  `szul` date NOT NULL,
  `nem` text COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `jelentkezes`
--

INSERT INTO `jelentkezes` (`id`, `nev`, `email`, `szul`, `nem`) VALUES
(1, 'Gergő', 'asd@asd.asd', '2002-08-03', 'Férfi'),
(2, 'Gergő', 'asd@asd.asd', '2002-08-03', 'Férfi'),
(3, 'asd', 'asd@asd.asd', '2001-06-15', 'Férfi'),
(4, 'test', 'asd@asd.asd', '2001-06-06', 'Férfi'),
(5, 'testtest', 'asd@asd.asd', '1999-06-11', 'Nő'),
(6, 'asdasd', 'asd@asd.asd', '2001-06-05', 'Nő'),
(8, 'asdasd', 'asd@asd.asd', '2001-06-05', 'Nő'),
(9, 'asdasd', 'asd@asd.asd', '2001-06-05', 'Nő'),
(10, 'asdasd', 'asd@asd.asd', '2001-06-05', 'Nő'),
(11, 'asdasd', 'asd@asd.asd', '2001-06-05', 'Nő'),
(12, 'asdasd', 'asd@asd.asd', '2001-06-05', 'Nő'),
(13, 'asdasd', 'asd@asd.asd', '2001-06-05', 'Nő'),
(14, 'asdasd', 'asd@asd.asd', '2001-06-05', 'Nő'),
(15, 'asdasd', 'asd@asd.asd', '2001-06-05', 'Nő'),
(16, 'asdasd', 'asd@asd.asd', '2001-01-01', 'Nő'),
(17, 'asdasd', 'asd@asd.asd', '2001-01-01', 'Férfi'),
(18, 'test', 'asd@asd.asd', '2001-01-01', 'Nő'),
(19, 'test', 'asd@asd.asd', '2001-01-01', 'Nő'),
(20, 'test', 'asd@asd.asd', '2001-01-01', 'Nő'),
(21, 'test', 'asd@asd.asd', '2001-01-01', 'Nő'),
(22, 'test', 'asd@asd.asd', '2001-01-01', 'Nő'),
(23, 'test', 'asd@asd.asd', '2001-01-01', 'Nő'),
(24, 'test', 'asd@asd.asd', '2001-01-01', 'Nő'),
(25, 'asd', 'asd@asd.asd', '2001-01-03', 'Férfi'),
(26, 'asd', 'asd@asd.asd', '2001-01-03', 'Férfi');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `jelentkezes`
--
ALTER TABLE `jelentkezes`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `jelentkezes`
--
ALTER TABLE `jelentkezes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
