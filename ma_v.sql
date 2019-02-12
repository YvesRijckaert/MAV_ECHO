-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Gegenereerd op: 12 feb 2019 om 12:59
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
  `feelings` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `daily_posts`
--

INSERT INTO `daily_posts` (`post_id`, `user_id`, `date`, `short_memory`, `feelings`) VALUES
(179, 22, '2019-02-12', 'test', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `data_habit_icon`
--

CREATE TABLE `data_habit_icon` (
  `data_habit_icon_id` int(11) NOT NULL,
  `habit_icon` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `data_habit_icon`
--

INSERT INTO `data_habit_icon` (`data_habit_icon_id`, `habit_icon`) VALUES
(1, '<path class=\"icon-shape\" d=\"M0,0 L180,0 L180,180 L0,180 L0,0 Z M45,44.1 L45,134.1 L135,134.1 L135,44.1 L45,44.1 Z\"></path>'),
(2, '<rect class=\"icon-shape\" x=\"0\" y=\"0\" width=\"180\" height=\"180\" rx=\"90\"></rect>'),
(3, '<path class=\"icon-shape\" d=\"M180,90 L180,180 L89.1,180 L-3.44169138e-15,90.9 L0,0 L90,0 L180,90 Z\"></path>\r\n'),
(4, '<path class=\"icon-shape\" d=\"M121.819805,58.1801948 C113.676407,50.0367966 102.426407,45 90,45 C65.1471863,45 45,65.1471863 45,90 C45,102.426407 50.0367966,113.676407 58.1801948,121.819805 L0,180 L2.84217094e-14,2.60998324e-14 L180,5.91652959e-14 L121.819805,58.1801948 Z\"></path>'),
(5, '<polygon class=\"icon-shape\" points=\"0 0 180 180 0 180\"></polygon>\r\n'),
(6, '<path class=\"icon-shape\" d=\"M90,0 L90,90 L180,90 L180,180 L0,180 L0,0 L90,0 Z\"></path>\r\n'),
(7, '<rect class=\"icon-shape\" x=\"0\" y=\"0\" width=\"180\" height=\"180\"></rect><circle id=\"Oval\" fill=\"#ffffff\" cx=\"91.8\" cy=\"90\" r=\"45\"></circle>\r\n'),
(8, '<path class=\"icon-shape\" d=\"M90,90 L0,180 L1.42108547e-14,90 L90,0 L180,90 L180,180 L90,90 Z\"></path>'),
(9, '<path class=\"icon-shape\" d=\"M0,0 L180,0 L180,180 L0,180 L0,0 Z M91.8,135 C116.652814,135 136.8,114.852814 136.8,90 C136.8,65.1471863 116.652814,45 91.8,45 C66.9471863,45 46.8,65.1471863 46.8,90 C46.8,114.852814 66.9471863,135 91.8,135 Z\"></path>\r\n'),
(10, '<path class=\"icon-shape\" d=\"M180,90 C180,139.705627 139.705627,180 90,180 C40.2943725,180 -2.84217094e-14,139.705627 -2.84217094e-14,90 C0,40.2943725 40.2943725,1.11672628e-14 90,1.42108547e-14 C139.705627,1.72544466e-14 180,40.2943725 180,90 Z M90.45,135 C115.551342,135 135.9,114.651342 135.9,89.55 C135.9,64.4486581 115.551342,44.1 90.45,44.1 C65.3486581,44.1 45,64.4486581 45,89.55 C45,114.651342 65.3486581,135 90.45,135 Z\"></path>'),
(11, '<path class=\"icon-shape\" d=\"M0,90 L0,0 L180,0 L180,90 L90,180 L0,90 Z\"></path>'),
(12, '<path class=\"icon-shape\" d=\"M180,90 L180,180 L90,180 L90,90 L0,90 L0,0 L90,0 L90,90 L180,90 Z\"></path>'),
(13, '<path class=\"icon-shape\" d=\"M90,180 L90,90 L0,90 C-6.08718376e-15,40.2943725 40.2943725,9.13077564e-15 90,0 C139.705627,-9.13077564e-15 180,40.2943725 180,90 C180,139.705627 139.705627,180 90,180 Z\"></path>'),
(14, '<path class=\"icon-shape\" d=\"M0,0 L180,0 L180,180 L0,180 L0,0 Z M89.7396103,26.1 L26.1,89.7396103 L89.7396103,153.379221 L153.379221,89.7396103 L89.7396103,26.1 Z\"></path>'),
(15, '<path class=\"icon-shape\" d=\"M179.995593,90.9 C179.512699,140.191113 139.405282,180 90,180 C40.2943725,180 6.08718376e-15,139.705627 0,90 C-6.08718376e-15,40.2943725 40.2943725,9.13077564e-15 90,0 L180,0 L180,90.9 Z\"></path>'),
(16, '<path class=\"icon-shape\" d=\"M90,90 L180,0 L180,180 L0,180 L0,0 L90,90 Z\"></path>'),
(17, '<path class=\"icon-shape\" d=\"M90,-1.42108547e-14 L180,90 L90,180 L89.1,180 L-3.44169138e-15,90.9 L0,90 L90,1.53717933e-14 Z\"></path>'),
(18, '<rect class=\"icon-shape\" x=\"0\" y=\"0\" width=\"180\" height=\"180\"></rect>'),
(19, '<path class=\"icon-shape\" d=\"M45,135 L135,135 L135,45 L180,0 L180,180 L0,180 L45,135 Z\"></path>'),
(20, '<path class=\"icon-shape\" d=\"M90,180 L1.42108547e-14,180 L89.55,90 L1.42108547e-14,-1.42108547e-14 L90,0 L180,8.26636589e-15 L90.45,90 L180,180 L90,180 Z\"></path>');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `data_habit_name`
--

CREATE TABLE `data_habit_name` (
  `data_habit_name_id` int(11) NOT NULL,
  `habit_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `data_habit_name`
--

INSERT INTO `data_habit_name` (`data_habit_name_id`, `habit_name`) VALUES
(1, 'walk to work'),
(2, 'do yoga'),
(3, 'read'),
(4, 'wake up before 6am'),
(5, 'workout'),
(6, '1k running'),
(7, '5k running'),
(8, '5k walk'),
(9, '10k running'),
(10, '10k walk'),
(11, '10k bike ride'),
(12, '20k bike ride'),
(13, 'be positive'),
(14, 'drink > 1l water'),
(15, 'do arts'),
(16, 'do tasks'),
(17, 'do sports'),
(18, 'eat healthy'),
(19, 'eat vegetarian'),
(20, 'eat vegan'),
(21, 'no alcohol'),
(22, 'no drugs'),
(23, 'no smoking'),
(24, 'wake up before 7am');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `fulfilled_habits`
--

CREATE TABLE `fulfilled_habits` (
  `fulfilled_habit_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `habit_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `fulfilled_habits`
--

INSERT INTO `fulfilled_habits` (`fulfilled_habit_id`, `user_id`, `habit_id`, `post_id`) VALUES
(2, 22, 71, 179),
(3, 22, 72, 179);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `habits`
--

CREATE TABLE `habits` (
  `habit_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `habit_name` varchar(255) NOT NULL,
  `habit_icon` int(11) NOT NULL,
  `habit_colour` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `habit_colour_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `habits`
--

INSERT INTO `habits` (`habit_id`, `user_id`, `habit_name`, `habit_icon`, `habit_colour`, `habit_colour_name`, `active`) VALUES
(71, 22, 'walk to work', 1, '#fe5455', 'red', 1),
(72, 22, 'do yoga', 2, '#fab81b', 'orange', 1),
(73, 22, 'read', 3, '#00d28b', 'green', 1),
(74, 22, 'wake up before 6am', 4, '#4285ff', 'blue', 1),
(75, 22, 'workout', 9, '#9278fd', 'purple', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `repetitive`
--

CREATE TABLE `repetitive` (
  `repetitive_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `habit_id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `time_amount_progress` int(11) NOT NULL DEFAULT '0',
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL
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
  `time_amount_progress` int(11) NOT NULL DEFAULT '0',
  `time_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL
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
  `month` varchar(255) NOT NULL,
  `time_amount_progress` int(11) NOT NULL DEFAULT '0',
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL
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
  `lifegoal` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_joined` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `nickname`, `birthdate`, `lifegoal`, `date_joined`) VALUES
(22, 'hi@yvesrijckaert.com', '$2y$10$PRYaQ1P6NOXYPICDzkqKZOSMKt6xUUkkdQ0deQGlIH3KjJZJfJJHO', 'Yves', '1998-07-13', 'reach-life-goals', '2019-01-30');

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
-- Indexen voor tabel `data_habit_icon`
--
ALTER TABLE `data_habit_icon`
  ADD PRIMARY KEY (`data_habit_icon_id`);

--
-- Indexen voor tabel `data_habit_name`
--
ALTER TABLE `data_habit_name`
  ADD PRIMARY KEY (`data_habit_name_id`);

--
-- Indexen voor tabel `fulfilled_habits`
--
ALTER TABLE `fulfilled_habits`
  ADD PRIMARY KEY (`fulfilled_habit_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `habit_id` (`habit_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexen voor tabel `habits`
--
ALTER TABLE `habits`
  ADD PRIMARY KEY (`habit_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `habit_icon` (`habit_icon`);

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
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT voor een tabel `data_habit_icon`
--
ALTER TABLE `data_habit_icon`
  MODIFY `data_habit_icon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT voor een tabel `data_habit_name`
--
ALTER TABLE `data_habit_name`
  MODIFY `data_habit_name_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT voor een tabel `fulfilled_habits`
--
ALTER TABLE `fulfilled_habits`
  MODIFY `fulfilled_habit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `habits`
--
ALTER TABLE `habits`
  MODIFY `habit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT voor een tabel `repetitive`
--
ALTER TABLE `repetitive`
  MODIFY `repetitive_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT voor een tabel `streaks`
--
ALTER TABLE `streaks`
  MODIFY `streak_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT voor een tabel `total_amount`
--
ALTER TABLE `total_amount`
  MODIFY `total_amount_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `daily_posts`
--
ALTER TABLE `daily_posts`
  ADD CONSTRAINT `daily_posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Beperkingen voor tabel `fulfilled_habits`
--
ALTER TABLE `fulfilled_habits`
  ADD CONSTRAINT `fulfilled_habits_ibfk_1` FOREIGN KEY (`habit_id`) REFERENCES `habits` (`habit_id`),
  ADD CONSTRAINT `fulfilled_habits_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `daily_posts` (`post_id`),
  ADD CONSTRAINT `fulfilled_habits_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Beperkingen voor tabel `habits`
--
ALTER TABLE `habits`
  ADD CONSTRAINT `habits_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `habits_ibfk_2` FOREIGN KEY (`habit_icon`) REFERENCES `data_habit_icon` (`data_habit_icon_id`);

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
