-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Cze 2022, 09:04
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `stekop_logins`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_tbl`
--

CREATE TABLE `password_tbl` (
  `id` int(11) NOT NULL,
  `password` varchar(128) NOT NULL,
  `login` varchar(128) DEFAULT NULL,
  `password_type_id` int(11) NOT NULL,
  `password_name` varchar(128) NOT NULL,
  `comments` varchar(1024) DEFAULT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_type_tbl`
--

CREATE TABLE `password_type_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(11) NOT NULL,
  `login` varchar(16) NOT NULL,
  `password` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `type_id` int(11) NOT NULL,
  `blocked` tinyint(1) NOT NULL DEFAULT 0,
  `email` varchar(64) DEFAULT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `login`, `password`, `name`, `type_id`, `blocked`, `email`, `date_created`) VALUES
(1, 'admin', 'admin', 'administrator', 1, 0, 'admin@admin.pl', '2022-06-02 10:21:59'),
(2, 'bula', 'bulaispula', 'bulka', 1, 0, 'bula@wp.pl,', '2022-06-02 10:21:59'),
(3, 'rowerzystka', 'haslo1', 'dominika', 2, 0, 'doma@wp.pl', '2022-06-02 10:21:59'),
(4, 'bazyl', 'bazyliszek', 'bazyluk', 1, 1, 'bazyl@.pl', '2022-06-02 10:21:59'),
(5, 'kasix', 'kasia123', 'kasia', 2, 0, 'kasix@.pl', '2022-06-02 10:21:59'),
(6, 'przemo', 'przemek123', 'przemek', 2, 1, 'przemek@.pl', '2022-06-02 10:21:59'),
(7, 'tomson', 'haslo', 'tomek', 1, 0, 'tom@.pl', '2022-06-02 10:21:59'),
(8, '123', '202cb962ac59075b964b07152d234b70', 'gfsdfsdsa', 1, 0, NULL, '2022-06-17 02:28:16'),
(9, 'asdasd', '76d80224611fc919a5d54f0ff9fba446', 'gfsdfs', 1, 0, NULL, '2022-06-17 02:28:34');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_type_tbl`
--

CREATE TABLE `user_type_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `user_type_tbl`
--

INSERT INTO `user_type_tbl` (`id`, `name`, `is_admin`) VALUES
(1, 'administrator', 1),
(2, 'użytkownik', 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `password_tbl`
--
ALTER TABLE `password_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `password_type_tbl`
--
ALTER TABLE `password_type_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `user_type_tbl`
--
ALTER TABLE `user_type_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `password_tbl`
--
ALTER TABLE `password_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `password_type_tbl`
--
ALTER TABLE `password_type_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `user_type_tbl`
--
ALTER TABLE `user_type_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
