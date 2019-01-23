-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Gegenereerd op: 23 jan 2019 om 14:40
-- Serverversie: 5.7.23
-- PHP-versie: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ma_v`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `daily_posts`
--

CREATE TABLE `daily_posts` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `short_memory` varchar(255) NOT NULL,
  `happiness_ratio` int(11) NOT NULL,
  `fulfilled_habits` varchar(255) NOT NULL,
  `unfulfilled_habits` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `habits`
--

CREATE TABLE `habits` (
  `habit_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `habit_name` varchar(255) NOT NULL,
  `habit_icon` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `habits`
--

INSERT INTO `habits` (`habit_id`, `user_id`, `habit_name`, `habit_icon`) VALUES
(2, 14, 'meditate', NULL),
(3, 14, 'hiking', NULL),
(4, 14, 'reading', NULL),
(5, 14, 'listen to music', NULL),
(6, 14, 'deepen your conversations', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `repetitive`
--

CREATE TABLE `repetitive` (
  `repetitive_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `habit_id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `streaks`
--

CREATE TABLE `streaks` (
  `streak_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `habit_id` int(11) NOT NULL,
  `time_amount` int(11) NOT NULL,
  `time_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `total_amount`
--

CREATE TABLE `total_amount` (
  `total_amount_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `habit_id` int(11) NOT NULL,
  `days_amount` int(11) NOT NULL,
  `month` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `lifegoal` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `nickname`, `birthdate`, `lifegoal`) VALUES
(14, 'hi@yvesrijckaert.com', '$2y$10$9m60XxlD7IHnSdY9831oqukwaWfIe/6Nfjr2p0Lf9diCunqh73jfi', 'test', '1222-12-23', 'decrease-anxiety');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `daily_posts`
--
ALTER TABLE `daily_posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexen voor tabel `habits`
--
ALTER TABLE `habits`
  ADD PRIMARY KEY (`habit_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexen voor tabel `repetitive`
--
ALTER TABLE `repetitive`
  ADD PRIMARY KEY (`repetitive_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `habit_id` (`habit_id`);

--
-- Indexen voor tabel `streaks`
--
ALTER TABLE `streaks`
  ADD PRIMARY KEY (`streak_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `habit_id` (`habit_id`);

--
-- Indexen voor tabel `total_amount`
--
ALTER TABLE `total_amount`
  ADD PRIMARY KEY (`total_amount_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `habit_id` (`habit_id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `daily_posts`
--
ALTER TABLE `daily_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `habits`
--
ALTER TABLE `habits`
  MODIFY `habit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `repetitive`
--
ALTER TABLE `repetitive`
  MODIFY `repetitive_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `streaks`
--
ALTER TABLE `streaks`
  MODIFY `streak_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `total_amount`
--
ALTER TABLE `total_amount`
  MODIFY `total_amount_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `daily_posts`
--
ALTER TABLE `daily_posts`
  ADD CONSTRAINT `daily_posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Beperkingen voor tabel `habits`
--
ALTER TABLE `habits`
  ADD CONSTRAINT `habits_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Beperkingen voor tabel `repetitive`
--
ALTER TABLE `repetitive`
  ADD CONSTRAINT `repetitive_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `repetitive_ibfk_2` FOREIGN KEY (`habit_id`) REFERENCES `habits` (`habit_id`);

--
-- Beperkingen voor tabel `streaks`
--
ALTER TABLE `streaks`
  ADD CONSTRAINT `streaks_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `streaks_ibfk_2` FOREIGN KEY (`habit_id`) REFERENCES `habits` (`habit_id`);

--
-- Beperkingen voor tabel `total_amount`
--
ALTER TABLE `total_amount`
  ADD CONSTRAINT `total_amount_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `total_amount_ibfk_2` FOREIGN KEY (`habit_id`) REFERENCES `habits` (`habit_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
