-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 08 Paź 2021, 16:51
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `wypozyczalnia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `fuels`
--

CREATE TABLE `fuels` (
  `id` int(11) NOT NULL,
  `type` varchar(25) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `messeges`
--

CREATE TABLE `messeges` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) COLLATE utf8mb4_polish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `reason_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `model` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `year_of_production` date NOT NULL,
  `power` int(11) NOT NULL,
  `transsmision_id` int(11) NOT NULL,
  `fuel_id` int(11) NOT NULL,
  `number_of_seat` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `price` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `offer_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `patch` text COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `transmisions`
--

CREATE TABLE `transmisions` (
  `id` int(11) NOT NULL,
  `type` varchar(25) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) COLLATE utf8mb4_polish_ci NOT NULL,
  `last_name` varchar(25) COLLATE utf8mb4_polish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `fuels`
--
ALTER TABLE `fuels`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `messeges`
--
ALTER TABLE `messeges`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fuel_id` (`fuel_id`),
  ADD KEY `transsmision_id` (`transsmision_id`);

--
-- Indeksy dla tabeli `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `transmisions`
--
ALTER TABLE `transmisions`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `fuels`
--
ALTER TABLE `fuels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `messeges`
--
ALTER TABLE `messeges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `transmisions`
--
ALTER TABLE `transmisions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_ibfk_1` FOREIGN KEY (`fuel_id`) REFERENCES `fuels` (`id`),
  ADD CONSTRAINT `offers_ibfk_2` FOREIGN KEY (`transsmision_id`) REFERENCES `transmisions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
