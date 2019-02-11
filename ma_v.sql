-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Gegenereerd op: 11 feb 2019 om 14:43
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
(116, 22, '2019-01-30', 'op consult gegaan', 1),
(117, 22, '2019-01-31', 'test', -1),
(118, 22, '2019-02-01', 'test', 0),
(119, 22, '2019-02-02', 'dagboek 2 februari', -1),
(120, 22, '2019-02-04', 'test', 0),
(121, 22, '2019-02-05', 'memory of the 5th', -1),
(122, 22, '2019-02-06', 'testje van een memory', -1),
(123, 22, '2019-02-07', 'Niet veel.', 1),
(124, 22, '2019-02-08', 'Not much', -1),
(125, 22, '2019-02-09', ' testje van een heel erg lange memory testje van een heel erg lange memory testje van een heel erg lange memory.', 0),
(126, 22, '2019-02-11', 'test van memory', -1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `data_habit_icon`
--

CREATE TABLE `data_habit_icon` (
  `data_habit_icon_id` int(11) NOT NULL,
  `habit_colour_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `habit_colour` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `habit_icon` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `habit_icon_white` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `data_habit_icon`
--

INSERT INTO `data_habit_icon` (`data_habit_icon_id`, `habit_colour_name`, `habit_colour`, `habit_icon`, `habit_icon_white`) VALUES
(1, 'red', '#fe5455', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -160.000000)\" fill=\"#fe5455\"><path d=\"M54,160 L94,160 L94,200 L54,200 L54,160 Z M64.5882353,169.411765 L64.5882353,189.411765 L84.5882353,189.411765 L84.5882353,169.411765 L64.5882353,169.411765 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -160.000000)\" fill=\"#ffffff\"><path d=\"M54,160 L94,160 L94,200 L54,200 L54,160 Z M64.5882353,169.411765 L64.5882353,189.411765 L84.5882353,189.411765 L84.5882353,169.411765 L64.5882353,169.411765 Z\"></path></g></g></svg>'),
(2, 'red', '#fe5455', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -160.000000)\" fill=\"#fe5455\"><rect x=\"134\" y=\"160\" width=\"40\" height=\"39.9950255\" rx=\"19.9975128\"></rect></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -160.000000)\" fill=\"#ffffff\"><rect x=\"134\" y=\"160\" width=\"40\" height=\"39.9950255\" rx=\"19.9975128\"></rect></g></g></svg>'),
(3, 'red', '#fe5455', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -160.000000)\" fill=\"#fe5455\"><path d=\"M254,179.997513 L254,199.995026 L233.8,199.995026 L214,180.197488 L214,160 L234,160 L254,179.997513 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -160.000000)\" fill=\"#ffffff\"><path d=\"M254,179.997513 L254,199.995026 L233.8,199.995026 L214,180.197488 L214,160 L234,160 L254,179.997513 Z\"></path></g></g></svg>'),
(4, 'red', '#fe5455', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -160.000000)\" fill=\"#fe5455\"><path d=\"M320.132835,172.865565 C318.327894,171.089538 315.85143,169.993769 313.119003,169.993769 C307.596156,169.993769 303.119003,174.470365 303.119003,179.992526 C303.119003,182.724613 304.214908,185.200769 305.991156,187.005485 L293,199.995026 L293,160 L333,160 L320.132835,172.865565 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -160.000000)\" fill=\"#ffffff\"><path d=\"M320.132835,172.865565 C318.327894,171.089538 315.85143,169.993769 313.119003,169.993769 C307.596156,169.993769 303.119003,174.470365 303.119003,179.992526 C303.119003,182.724613 304.214908,185.200769 305.991156,187.005485 L293,199.995026 L293,160 L333,160 L320.132835,172.865565 Z\"></path></g></g></svg>'),
(5, 'red', '#fe5455', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -229.000000)\" fill=\"#fe5455\"><polygon points=\"54 229 94 269 54 269\"></polygon></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -229.000000)\" fill=\"#ffffff\"><polygon points=\"54 229 94 269 54 269\"></polygon></g></g></svg>'),
(6, 'red', '#fe5455', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -229.000000)\" fill=\"#fe5455\"><path d=\"M154,229 L154,249 L174,249 L174,269 L134,269 L134,229 L154,229 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -229.000000)\" fill=\"#ffffff\"><path d=\"M154,229 L154,249 L174,249 L174,269 L134,269 L134,229 L154,229 Z\"></path></g></g></svg>'),
(7, 'red', '#fe5455', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -229.000000)\" fill=\"#fe5455\"><path d=\"M214,229 L254,229 L254,269 L214,269 L214,229 Z M234,259 C239.522847,259 244,254.522847 244,249 C244,243.477153 239.522847,239 234,239 C228.477153,239 224,243.477153 224,249 C224,254.522847 228.477153,259 234,259 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -229.000000)\" fill=\"#ffffff\"><path d=\"M214,229 L254,229 L254,269 L214,269 L214,229 Z M234,259 C239.522847,259 244,254.522847 244,249 C244,243.477153 239.522847,239 234,239 C228.477153,239 224,243.477153 224,249 C224,254.522847 228.477153,259 234,259 Z\"></path></g></g></svg>'),
(8, 'red', '#fe5455', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -229.000000)\" fill=\"#fe5455\"><path d=\"M313,249 L293,269 L293,249 L313,229 L333,249 L333,269 L313,249 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -229.000000)\" fill=\"#ffffff\"><path d=\"M313,249 L293,269 L293,249 L313,229 L333,249 L333,269 L313,249 Z\"></path></g></g></svg>'),
(9, 'red', '#fe5455', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -306.000000)\" fill=\"#fe5455\"><g id=\"Group-2\" transform=\"translate(54.000000, 306.000000)\"><rect x=\"0\" y=\"0\" width=\"40\" height=\"20\"></rect><circle cx=\"20\" cy=\"20\" r=\"20\"></circle></g></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -306.000000)\" fill=\"#ffffff\"><g id=\"Group-2\" transform=\"translate(54.000000, 306.000000)\"><rect x=\"0\" y=\"0\" width=\"40\" height=\"20\"></rect><circle cx=\"20\" cy=\"20\" r=\"20\"></circle></g></g></g></svg>'),
(10, 'red', '#fe5455', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -306.000000)\" fill=\"#fe5455\"><path d=\"M174,326 C174,337.045695 165.045695,346 154,346 C142.954305,346 134,337.045695 134,326 C134,314.954305 142.954305,306 154,306 C165.045695,306 174,314.954305 174,326 Z M154.1,336 C159.678076,336 164.2,331.478076 164.2,325.9 C164.2,320.321924 159.678076,315.8 154.1,315.8 C148.521924,315.8 144,320.321924 144,325.9 C144,331.478076 148.521924,336 154.1,336 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -306.000000)\" fill=\"#ffffff\"><path d=\"M174,326 C174,337.045695 165.045695,346 154,346 C142.954305,346 134,337.045695 134,326 C134,314.954305 142.954305,306 154,306 C165.045695,306 174,314.954305 174,326 Z M154.1,336 C159.678076,336 164.2,331.478076 164.2,325.9 C164.2,320.321924 159.678076,315.8 154.1,315.8 C148.521924,315.8 144,320.321924 144,325.9 C144,331.478076 148.521924,336 154.1,336 Z\"></path></g></g></svg>'),
(11, 'red', '#fe5455', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -306.000000)\" fill=\"#fe5455\"><path d=\"M214,326 L214,306 L254,306 L254,326 L234,346 L214,326 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -306.000000)\" fill=\"#ffffff\"><path d=\"M214,326 L214,306 L254,306 L254,326 L234,346 L214,326 Z\"></path></g></g></svg>'),
(12, 'red', '#fe5455', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -306.000000)\" fill=\"#fe5455\"><path d=\"M323,306 L333,306 L333,346 L313,346 L313,326 L293,326 L293,306 L323,306 L313,306 L313,326 L333,326 L333,306 L323,306 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -306.000000)\" fill=\"#ffffff\"><path d=\"M323,306 L333,306 L333,346 L313,346 L313,326 L293,326 L293,306 L323,306 L313,306 L313,326 L333,326 L333,306 L323,306 Z\"></path></g></g></svg>'),
(13, 'red', '#fe5455', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -382.000000)\" fill=\"#fe5455\"><path d=\"M134,382 L174,382 L174,422 L134,422 L134,382 Z M153.942136,387.8 L139.8,401.942136 L153.942136,416.084271 L168.084271,401.942136 L153.942136,387.8 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -382.000000)\" fill=\"#ffffff\"><path d=\"M134,382 L174,382 L174,422 L134,422 L134,382 Z M153.942136,387.8 L139.8,401.942136 L153.942136,416.084271 L168.084271,401.942136 L153.942136,387.8 Z\"></path></g></g></svg>'),
(14, 'red', '#fe5455', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -382.000000)\" fill=\"#fe5455\"><path d=\"M253.999021,402.2 C253.891711,413.153581 244.978951,422 234,422 C222.954305,422 214,413.045695 214,402 C214,390.954305 222.954305,382 234,382 L254,382 L254,402.2 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -382.000000)\" fill=\"#ffffff\"><path d=\"M253.999021,402.2 C253.891711,413.153581 244.978951,422 234,422 C222.954305,422 214,413.045695 214,402 C214,390.954305 222.954305,382 234,382 L254,382 L254,402.2 Z\"></path></g></g></svg>'),
(15, 'red', '#fe5455', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -382.000000)\" fill=\"#fe5455\"><path d=\"M313,402 L333,382 L333,422 L293,422 L293,382 L313,402 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -382.000000)\" fill=\"#ffffff\"><path d=\"M313,402 L333,382 L333,422 L293,422 L293,382 L313,402 Z\"></path></g></g></svg>'),
(16, 'orange', '#fab81b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -160.000000)\" fill=\"#fab81b\"><path d=\"M54,160 L94,160 L94,200 L54,200 L54,160 Z M64.5882353,169.411765 L64.5882353,189.411765 L84.5882353,189.411765 L84.5882353,169.411765 L64.5882353,169.411765 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -160.000000)\" fill=\"#ffffff\"><path d=\"M54,160 L94,160 L94,200 L54,200 L54,160 Z M64.5882353,169.411765 L64.5882353,189.411765 L84.5882353,189.411765 L84.5882353,169.411765 L64.5882353,169.411765 Z\"></path></g></g></svg>'),
(17, 'orange', '#fab81b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -160.000000)\" fill=\"#fab81b\"><rect x=\"134\" y=\"160\" width=\"40\" height=\"39.9950255\" rx=\"19.9975128\"></rect></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -160.000000)\" fill=\"#ffffff\"><rect x=\"134\" y=\"160\" width=\"40\" height=\"39.9950255\" rx=\"19.9975128\"></rect></g></g></svg>'),
(18, 'orange', '#fab81b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -160.000000)\" fill=\"#fab81b\"><path d=\"M254,179.997513 L254,199.995026 L233.8,199.995026 L214,180.197488 L214,160 L234,160 L254,179.997513 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -160.000000)\" fill=\"#ffffff\"><path d=\"M254,179.997513 L254,199.995026 L233.8,199.995026 L214,180.197488 L214,160 L234,160 L254,179.997513 Z\"></path></g></g></svg>'),
(19, 'orange', '#fab81b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -160.000000)\" fill=\"#fab81b\"><path d=\"M320.132835,172.865565 C318.327894,171.089538 315.85143,169.993769 313.119003,169.993769 C307.596156,169.993769 303.119003,174.470365 303.119003,179.992526 C303.119003,182.724613 304.214908,185.200769 305.991156,187.005485 L293,199.995026 L293,160 L333,160 L320.132835,172.865565 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -160.000000)\" fill=\"#ffffff\"><path d=\"M320.132835,172.865565 C318.327894,171.089538 315.85143,169.993769 313.119003,169.993769 C307.596156,169.993769 303.119003,174.470365 303.119003,179.992526 C303.119003,182.724613 304.214908,185.200769 305.991156,187.005485 L293,199.995026 L293,160 L333,160 L320.132835,172.865565 Z\"></path></g></g></svg>'),
(20, 'orange', '#fab81b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -229.000000)\" fill=\"#fab81b\"><polygon points=\"54 229 94 269 54 269\"></polygon></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -229.000000)\" fill=\"#ffffff\"><polygon points=\"54 229 94 269 54 269\"></polygon></g></g></svg>'),
(21, 'orange', '#fab81b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -229.000000)\" fill=\"#fab81b\"><path d=\"M154,229 L154,249 L174,249 L174,269 L134,269 L134,229 L154,229 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -229.000000)\" fill=\"#ffffff\"><path d=\"M154,229 L154,249 L174,249 L174,269 L134,269 L134,229 L154,229 Z\"></path></g></g></svg>'),
(22, 'orange', '#fab81b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -229.000000)\" fill=\"#fab81b\"><path d=\"M214,229 L254,229 L254,269 L214,269 L214,229 Z M234,259 C239.522847,259 244,254.522847 244,249 C244,243.477153 239.522847,239 234,239 C228.477153,239 224,243.477153 224,249 C224,254.522847 228.477153,259 234,259 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -229.000000)\" fill=\"#ffffff\"><path d=\"M214,229 L254,229 L254,269 L214,269 L214,229 Z M234,259 C239.522847,259 244,254.522847 244,249 C244,243.477153 239.522847,239 234,239 C228.477153,239 224,243.477153 224,249 C224,254.522847 228.477153,259 234,259 Z\"></path></g></g></svg>'),
(23, 'orange', '#fab81b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -229.000000)\" fill=\"#fab81b\"><path d=\"M313,249 L293,269 L293,249 L313,229 L333,249 L333,269 L313,249 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -229.000000)\" fill=\"#ffffff\"><path d=\"M313,249 L293,269 L293,249 L313,229 L333,249 L333,269 L313,249 Z\"></path></g></g></svg>'),
(24, 'orange', '#fab81b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -306.000000)\" fill=\"#fab81b\"><g id=\"Group-2\" transform=\"translate(54.000000, 306.000000)\"><rect x=\"0\" y=\"0\" width=\"40\" height=\"20\"></rect><circle cx=\"20\" cy=\"20\" r=\"20\"></circle></g></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -306.000000)\" fill=\"#ffffff\"><g id=\"Group-2\" transform=\"translate(54.000000, 306.000000)\"><rect x=\"0\" y=\"0\" width=\"40\" height=\"20\"></rect><circle cx=\"20\" cy=\"20\" r=\"20\"></circle></g></g></g></svg>'),
(25, 'orange', '#fab81b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -306.000000)\" fill=\"#fab81b\"><path d=\"M174,326 C174,337.045695 165.045695,346 154,346 C142.954305,346 134,337.045695 134,326 C134,314.954305 142.954305,306 154,306 C165.045695,306 174,314.954305 174,326 Z M154.1,336 C159.678076,336 164.2,331.478076 164.2,325.9 C164.2,320.321924 159.678076,315.8 154.1,315.8 C148.521924,315.8 144,320.321924 144,325.9 C144,331.478076 148.521924,336 154.1,336 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -306.000000)\" fill=\"#ffffff\"><path d=\"M174,326 C174,337.045695 165.045695,346 154,346 C142.954305,346 134,337.045695 134,326 C134,314.954305 142.954305,306 154,306 C165.045695,306 174,314.954305 174,326 Z M154.1,336 C159.678076,336 164.2,331.478076 164.2,325.9 C164.2,320.321924 159.678076,315.8 154.1,315.8 C148.521924,315.8 144,320.321924 144,325.9 C144,331.478076 148.521924,336 154.1,336 Z\"></path></g></g></svg>'),
(26, 'orange', '#fab81b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -306.000000)\" fill=\"#fab81b\"><path d=\"M214,326 L214,306 L254,306 L254,326 L234,346 L214,326 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -306.000000)\" fill=\"#ffffff\"><path d=\"M214,326 L214,306 L254,306 L254,326 L234,346 L214,326 Z\"></path></g></g></svg>'),
(27, 'orange', '#fab81b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -306.000000)\" fill=\"#fab81b\"><path d=\"M323,306 L333,306 L333,346 L313,346 L313,326 L293,326 L293,306 L323,306 L313,306 L313,326 L333,326 L333,306 L323,306 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -306.000000)\" fill=\"#ffffff\"><path d=\"M323,306 L333,306 L333,346 L313,346 L313,326 L293,326 L293,306 L323,306 L313,306 L313,326 L333,326 L333,306 L323,306 Z\"></path></g></g></svg>'),
(28, 'orange', '#fab81b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -382.000000)\" fill=\"#fab81b\"><path d=\"M134,382 L174,382 L174,422 L134,422 L134,382 Z M153.942136,387.8 L139.8,401.942136 L153.942136,416.084271 L168.084271,401.942136 L153.942136,387.8 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -382.000000)\" fill=\"#ffffff\"><path d=\"M134,382 L174,382 L174,422 L134,422 L134,382 Z M153.942136,387.8 L139.8,401.942136 L153.942136,416.084271 L168.084271,401.942136 L153.942136,387.8 Z\"></path></g></g></svg>'),
(29, 'orange', '#fab81b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -382.000000)\" fill=\"#fab81b\"><path d=\"M253.999021,402.2 C253.891711,413.153581 244.978951,422 234,422 C222.954305,422 214,413.045695 214,402 C214,390.954305 222.954305,382 234,382 L254,382 L254,402.2 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -382.000000)\" fill=\"#ffffff\"><path d=\"M253.999021,402.2 C253.891711,413.153581 244.978951,422 234,422 C222.954305,422 214,413.045695 214,402 C214,390.954305 222.954305,382 234,382 L254,382 L254,402.2 Z\"></path></g></g></svg>'),
(30, 'orange', '#fab81b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -382.000000)\" fill=\"#fab81b\"><path d=\"M313,402 L333,382 L333,422 L293,422 L293,382 L313,402 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -382.000000)\" fill=\"#ffffff\"><path d=\"M313,402 L333,382 L333,422 L293,422 L293,382 L313,402 Z\"></path></g></g></svg>'),
(31, 'green', '#00d28b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -160.000000)\" fill=\"#00d28b\"><path d=\"M54,160 L94,160 L94,200 L54,200 L54,160 Z M64.5882353,169.411765 L64.5882353,189.411765 L84.5882353,189.411765 L84.5882353,169.411765 L64.5882353,169.411765 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -160.000000)\" fill=\"#ffffff\"><path d=\"M54,160 L94,160 L94,200 L54,200 L54,160 Z M64.5882353,169.411765 L64.5882353,189.411765 L84.5882353,189.411765 L84.5882353,169.411765 L64.5882353,169.411765 Z\"></path></g></g></svg>'),
(32, 'green', '#00d28b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -160.000000)\" fill=\"#00d28b\"><rect x=\"134\" y=\"160\" width=\"40\" height=\"39.9950255\" rx=\"19.9975128\"></rect></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -160.000000)\" fill=\"#ffffff\"><rect x=\"134\" y=\"160\" width=\"40\" height=\"39.9950255\" rx=\"19.9975128\"></rect></g></g></svg>'),
(33, 'green', '#00d28b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -160.000000)\" fill=\"#00d28b\"><path d=\"M254,179.997513 L254,199.995026 L233.8,199.995026 L214,180.197488 L214,160 L234,160 L254,179.997513 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -160.000000)\" fill=\"#ffffff\"><path d=\"M254,179.997513 L254,199.995026 L233.8,199.995026 L214,180.197488 L214,160 L234,160 L254,179.997513 Z\"></path></g></g></svg>'),
(34, 'green', '#00d28b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -160.000000)\" fill=\"#00d28b\"><path d=\"M320.132835,172.865565 C318.327894,171.089538 315.85143,169.993769 313.119003,169.993769 C307.596156,169.993769 303.119003,174.470365 303.119003,179.992526 C303.119003,182.724613 304.214908,185.200769 305.991156,187.005485 L293,199.995026 L293,160 L333,160 L320.132835,172.865565 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -160.000000)\" fill=\"#ffffff\"><path d=\"M320.132835,172.865565 C318.327894,171.089538 315.85143,169.993769 313.119003,169.993769 C307.596156,169.993769 303.119003,174.470365 303.119003,179.992526 C303.119003,182.724613 304.214908,185.200769 305.991156,187.005485 L293,199.995026 L293,160 L333,160 L320.132835,172.865565 Z\"></path></g></g></svg>'),
(35, 'green', '#00d28b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -229.000000)\" fill=\"#00d28b\"><polygon points=\"54 229 94 269 54 269\"></polygon></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -229.000000)\" fill=\"#ffffff\"><polygon points=\"54 229 94 269 54 269\"></polygon></g></g></svg>'),
(36, 'green', '#00d28b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -229.000000)\" fill=\"#00d28b\"><path d=\"M154,229 L154,249 L174,249 L174,269 L134,269 L134,229 L154,229 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -229.000000)\" fill=\"#ffffff\"><path d=\"M154,229 L154,249 L174,249 L174,269 L134,269 L134,229 L154,229 Z\"></path></g></g></svg>'),
(37, 'green', '#00d28b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -229.000000)\" fill=\"#00d28b\"><path d=\"M214,229 L254,229 L254,269 L214,269 L214,229 Z M234,259 C239.522847,259 244,254.522847 244,249 C244,243.477153 239.522847,239 234,239 C228.477153,239 224,243.477153 224,249 C224,254.522847 228.477153,259 234,259 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -229.000000)\" fill=\"#ffffff\"><path d=\"M214,229 L254,229 L254,269 L214,269 L214,229 Z M234,259 C239.522847,259 244,254.522847 244,249 C244,243.477153 239.522847,239 234,239 C228.477153,239 224,243.477153 224,249 C224,254.522847 228.477153,259 234,259 Z\"></path></g></g></svg>'),
(38, 'green', '#00d28b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -229.000000)\" fill=\"#00d28b\"><path d=\"M313,249 L293,269 L293,249 L313,229 L333,249 L333,269 L313,249 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -229.000000)\" fill=\"#ffffff\"><path d=\"M313,249 L293,269 L293,249 L313,229 L333,249 L333,269 L313,249 Z\"></path></g></g></svg>'),
(39, 'green', '#00d28b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -306.000000)\" fill=\"#00d28b\"><g id=\"Group-2\" transform=\"translate(54.000000, 306.000000)\"><rect x=\"0\" y=\"0\" width=\"40\" height=\"20\"></rect><circle cx=\"20\" cy=\"20\" r=\"20\"></circle></g></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -306.000000)\" fill=\"#ffffff\"><g id=\"Group-2\" transform=\"translate(54.000000, 306.000000)\"><rect x=\"0\" y=\"0\" width=\"40\" height=\"20\"></rect><circle cx=\"20\" cy=\"20\" r=\"20\"></circle></g></g></g></svg>'),
(40, 'green', '#00d28b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -306.000000)\" fill=\"#00d28b\"><path d=\"M174,326 C174,337.045695 165.045695,346 154,346 C142.954305,346 134,337.045695 134,326 C134,314.954305 142.954305,306 154,306 C165.045695,306 174,314.954305 174,326 Z M154.1,336 C159.678076,336 164.2,331.478076 164.2,325.9 C164.2,320.321924 159.678076,315.8 154.1,315.8 C148.521924,315.8 144,320.321924 144,325.9 C144,331.478076 148.521924,336 154.1,336 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -306.000000)\" fill=\"#ffffff\"><path d=\"M174,326 C174,337.045695 165.045695,346 154,346 C142.954305,346 134,337.045695 134,326 C134,314.954305 142.954305,306 154,306 C165.045695,306 174,314.954305 174,326 Z M154.1,336 C159.678076,336 164.2,331.478076 164.2,325.9 C164.2,320.321924 159.678076,315.8 154.1,315.8 C148.521924,315.8 144,320.321924 144,325.9 C144,331.478076 148.521924,336 154.1,336 Z\"></path></g></g></svg>'),
(41, 'green', '#00d28b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -306.000000)\" fill=\"#00d28b\"><path d=\"M214,326 L214,306 L254,306 L254,326 L234,346 L214,326 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -306.000000)\" fill=\"#ffffff\"><path d=\"M214,326 L214,306 L254,306 L254,326 L234,346 L214,326 Z\"></path></g></g></svg>'),
(42, 'green', '#00d28b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -306.000000)\" fill=\"#00d28b\"><path d=\"M323,306 L333,306 L333,346 L313,346 L313,326 L293,326 L293,306 L323,306 L313,306 L313,326 L333,326 L333,306 L323,306 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -306.000000)\" fill=\"#ffffff\"><path d=\"M323,306 L333,306 L333,346 L313,346 L313,326 L293,326 L293,306 L323,306 L313,306 L313,326 L333,326 L333,306 L323,306 Z\"></path></g></g></svg>'),
(43, 'green', '#00d28b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -382.000000)\" fill=\"#00d28b\"><path d=\"M134,382 L174,382 L174,422 L134,422 L134,382 Z M153.942136,387.8 L139.8,401.942136 L153.942136,416.084271 L168.084271,401.942136 L153.942136,387.8 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -382.000000)\" fill=\"#ffffff\"><path d=\"M134,382 L174,382 L174,422 L134,422 L134,382 Z M153.942136,387.8 L139.8,401.942136 L153.942136,416.084271 L168.084271,401.942136 L153.942136,387.8 Z\"></path></g></g></svg>'),
(44, 'green', '#00d28b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -382.000000)\" fill=\"#00d28b\"><path d=\"M253.999021,402.2 C253.891711,413.153581 244.978951,422 234,422 C222.954305,422 214,413.045695 214,402 C214,390.954305 222.954305,382 234,382 L254,382 L254,402.2 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -382.000000)\" fill=\"#ffffff\"><path d=\"M253.999021,402.2 C253.891711,413.153581 244.978951,422 234,422 C222.954305,422 214,413.045695 214,402 C214,390.954305 222.954305,382 234,382 L254,382 L254,402.2 Z\"></path></g></g></svg>'),
(45, 'green', '#00d28b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -382.000000)\" fill=\"#00d28b\"><path d=\"M313,402 L333,382 L333,422 L293,422 L293,382 L313,402 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -382.000000)\" fill=\"#ffffff\"><path d=\"M313,402 L333,382 L333,422 L293,422 L293,382 L313,402 Z\"></path></g></g></svg>'),
(46, 'blue', '#4285ff', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -160.000000)\" fill=\"#4285ff\"><path d=\"M54,160 L94,160 L94,200 L54,200 L54,160 Z M64.5882353,169.411765 L64.5882353,189.411765 L84.5882353,189.411765 L84.5882353,169.411765 L64.5882353,169.411765 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -160.000000)\" fill=\"#ffffff\"><path d=\"M54,160 L94,160 L94,200 L54,200 L54,160 Z M64.5882353,169.411765 L64.5882353,189.411765 L84.5882353,189.411765 L84.5882353,169.411765 L64.5882353,169.411765 Z\"></path></g></g></svg>'),
(47, 'blue', '#4285ff', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -160.000000)\" fill=\"#4285ff\"><rect x=\"134\" y=\"160\" width=\"40\" height=\"39.9950255\" rx=\"19.9975128\"></rect></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -160.000000)\" fill=\"#ffffff\"><rect x=\"134\" y=\"160\" width=\"40\" height=\"39.9950255\" rx=\"19.9975128\"></rect></g></g></svg>'),
(48, 'blue', '#4285ff', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -160.000000)\" fill=\"#4285ff\"><path d=\"M254,179.997513 L254,199.995026 L233.8,199.995026 L214,180.197488 L214,160 L234,160 L254,179.997513 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -160.000000)\" fill=\"#ffffff\"><path d=\"M254,179.997513 L254,199.995026 L233.8,199.995026 L214,180.197488 L214,160 L234,160 L254,179.997513 Z\"></path></g></g></svg>'),
(49, 'blue', '#4285ff', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -160.000000)\" fill=\"#4285ff\"><path d=\"M320.132835,172.865565 C318.327894,171.089538 315.85143,169.993769 313.119003,169.993769 C307.596156,169.993769 303.119003,174.470365 303.119003,179.992526 C303.119003,182.724613 304.214908,185.200769 305.991156,187.005485 L293,199.995026 L293,160 L333,160 L320.132835,172.865565 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -160.000000)\" fill=\"#ffffff\"><path d=\"M320.132835,172.865565 C318.327894,171.089538 315.85143,169.993769 313.119003,169.993769 C307.596156,169.993769 303.119003,174.470365 303.119003,179.992526 C303.119003,182.724613 304.214908,185.200769 305.991156,187.005485 L293,199.995026 L293,160 L333,160 L320.132835,172.865565 Z\"></path></g></g></svg>'),
(50, 'blue', '#4285ff', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -229.000000)\" fill=\"#4285ff\"><polygon points=\"54 229 94 269 54 269\"></polygon></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -229.000000)\" fill=\"#ffffff\"><polygon points=\"54 229 94 269 54 269\"></polygon></g></g></svg>'),
(51, 'blue', '#4285ff', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -229.000000)\" fill=\"#4285ff\"><path d=\"M154,229 L154,249 L174,249 L174,269 L134,269 L134,229 L154,229 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -229.000000)\" fill=\"#ffffff\"><path d=\"M154,229 L154,249 L174,249 L174,269 L134,269 L134,229 L154,229 Z\"></path></g></g></svg>'),
(52, 'blue', '#4285ff', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -229.000000)\" fill=\"#4285ff\"><path d=\"M214,229 L254,229 L254,269 L214,269 L214,229 Z M234,259 C239.522847,259 244,254.522847 244,249 C244,243.477153 239.522847,239 234,239 C228.477153,239 224,243.477153 224,249 C224,254.522847 228.477153,259 234,259 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -229.000000)\" fill=\"#ffffff\"><path d=\"M214,229 L254,229 L254,269 L214,269 L214,229 Z M234,259 C239.522847,259 244,254.522847 244,249 C244,243.477153 239.522847,239 234,239 C228.477153,239 224,243.477153 224,249 C224,254.522847 228.477153,259 234,259 Z\"></path></g></g></svg>'),
(53, 'blue', '#4285ff', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -229.000000)\" fill=\"#4285ff\"><path d=\"M313,249 L293,269 L293,249 L313,229 L333,249 L333,269 L313,249 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -229.000000)\" fill=\"#ffffff\"><path d=\"M313,249 L293,269 L293,249 L313,229 L333,249 L333,269 L313,249 Z\"></path></g></g></svg>'),
(54, 'blue', '#4285ff', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -306.000000)\" fill=\"#4285ff\"><g id=\"Group-2\" transform=\"translate(54.000000, 306.000000)\"><rect x=\"0\" y=\"0\" width=\"40\" height=\"20\"></rect><circle cx=\"20\" cy=\"20\" r=\"20\"></circle></g></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -306.000000)\" fill=\"#ffffff\"><g id=\"Group-2\" transform=\"translate(54.000000, 306.000000)\"><rect x=\"0\" y=\"0\" width=\"40\" height=\"20\"></rect><circle cx=\"20\" cy=\"20\" r=\"20\"></circle></g></g></g></svg>'),
(55, 'blue', '#4285ff', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -306.000000)\" fill=\"#4285ff\"><path d=\"M174,326 C174,337.045695 165.045695,346 154,346 C142.954305,346 134,337.045695 134,326 C134,314.954305 142.954305,306 154,306 C165.045695,306 174,314.954305 174,326 Z M154.1,336 C159.678076,336 164.2,331.478076 164.2,325.9 C164.2,320.321924 159.678076,315.8 154.1,315.8 C148.521924,315.8 144,320.321924 144,325.9 C144,331.478076 148.521924,336 154.1,336 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -306.000000)\" fill=\"#ffffff\"><path d=\"M174,326 C174,337.045695 165.045695,346 154,346 C142.954305,346 134,337.045695 134,326 C134,314.954305 142.954305,306 154,306 C165.045695,306 174,314.954305 174,326 Z M154.1,336 C159.678076,336 164.2,331.478076 164.2,325.9 C164.2,320.321924 159.678076,315.8 154.1,315.8 C148.521924,315.8 144,320.321924 144,325.9 C144,331.478076 148.521924,336 154.1,336 Z\"></path></g></g></svg>'),
(56, 'blue', '#4285ff', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -306.000000)\" fill=\"#4285ff\"><path d=\"M214,326 L214,306 L254,306 L254,326 L234,346 L214,326 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -306.000000)\" fill=\"#ffffff\"><path d=\"M214,326 L214,306 L254,306 L254,326 L234,346 L214,326 Z\"></path></g></g></svg>'),
(57, 'blue', '#4285ff', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -306.000000)\" fill=\"#4285ff\"><path d=\"M323,306 L333,306 L333,346 L313,346 L313,326 L293,326 L293,306 L323,306 L313,306 L313,326 L333,326 L333,306 L323,306 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -306.000000)\" fill=\"#ffffff\"><path d=\"M323,306 L333,306 L333,346 L313,346 L313,326 L293,326 L293,306 L323,306 L313,306 L313,326 L333,326 L333,306 L323,306 Z\"></path></g></g></svg>'),
(58, 'blue', '#4285ff', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -382.000000)\" fill=\"#4285ff\"><path d=\"M134,382 L174,382 L174,422 L134,422 L134,382 Z M153.942136,387.8 L139.8,401.942136 L153.942136,416.084271 L168.084271,401.942136 L153.942136,387.8 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -382.000000)\" fill=\"#ffffff\"><path d=\"M134,382 L174,382 L174,422 L134,422 L134,382 Z M153.942136,387.8 L139.8,401.942136 L153.942136,416.084271 L168.084271,401.942136 L153.942136,387.8 Z\"></path></g></g></svg>'),
(59, 'blue', '#4285ff', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -382.000000)\" fill=\"#4285ff\"><path d=\"M253.999021,402.2 C253.891711,413.153581 244.978951,422 234,422 C222.954305,422 214,413.045695 214,402 C214,390.954305 222.954305,382 234,382 L254,382 L254,402.2 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -382.000000)\" fill=\"#ffffff\"><path d=\"M253.999021,402.2 C253.891711,413.153581 244.978951,422 234,422 C222.954305,422 214,413.045695 214,402 C214,390.954305 222.954305,382 234,382 L254,382 L254,402.2 Z\"></path></g></g></svg>'),
(60, 'blue', '#4285ff', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -382.000000)\" fill=\"#4285ff\"><path d=\"M313,402 L333,382 L333,422 L293,422 L293,382 L313,402 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -382.000000)\" fill=\"#ffffff\"><path d=\"M313,402 L333,382 L333,422 L293,422 L293,382 L313,402 Z\"></path></g></g></svg>'),
(61, 'purple', '#9278fd', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -160.000000)\" fill=\"#9278fd\"><path d=\"M54,160 L94,160 L94,200 L54,200 L54,160 Z M64.5882353,169.411765 L64.5882353,189.411765 L84.5882353,189.411765 L84.5882353,169.411765 L64.5882353,169.411765 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -160.000000)\" fill=\"#ffffff\"><path d=\"M54,160 L94,160 L94,200 L54,200 L54,160 Z M64.5882353,169.411765 L64.5882353,189.411765 L84.5882353,189.411765 L84.5882353,169.411765 L64.5882353,169.411765 Z\"></path></g></g></svg>'),
(62, 'purple', '#9278fd', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -160.000000)\" fill=\"#9278fd\"><rect x=\"134\" y=\"160\" width=\"40\" height=\"39.9950255\" rx=\"19.9975128\"></rect></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -160.000000)\" fill=\"#ffffff\"><rect x=\"134\" y=\"160\" width=\"40\" height=\"39.9950255\" rx=\"19.9975128\"></rect></g></g></svg>'),
(63, 'purple', '#9278fd', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -160.000000)\" fill=\"#9278fd\"><path d=\"M254,179.997513 L254,199.995026 L233.8,199.995026 L214,180.197488 L214,160 L234,160 L254,179.997513 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -160.000000)\" fill=\"#ffffff\"><path d=\"M254,179.997513 L254,199.995026 L233.8,199.995026 L214,180.197488 L214,160 L234,160 L254,179.997513 Z\"></path></g></g></svg>'),
(64, 'purple', '#9278fd', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -160.000000)\" fill=\"#9278fd\"><path d=\"M320.132835,172.865565 C318.327894,171.089538 315.85143,169.993769 313.119003,169.993769 C307.596156,169.993769 303.119003,174.470365 303.119003,179.992526 C303.119003,182.724613 304.214908,185.200769 305.991156,187.005485 L293,199.995026 L293,160 L333,160 L320.132835,172.865565 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -160.000000)\" fill=\"#ffffff\"><path d=\"M320.132835,172.865565 C318.327894,171.089538 315.85143,169.993769 313.119003,169.993769 C307.596156,169.993769 303.119003,174.470365 303.119003,179.992526 C303.119003,182.724613 304.214908,185.200769 305.991156,187.005485 L293,199.995026 L293,160 L333,160 L320.132835,172.865565 Z\"></path></g></g></svg>');
INSERT INTO `data_habit_icon` (`data_habit_icon_id`, `habit_colour_name`, `habit_colour`, `habit_icon`, `habit_icon_white`) VALUES
(65, 'purple', '#9278fd', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -229.000000)\" fill=\"#9278fd\"><polygon points=\"54 229 94 269 54 269\"></polygon></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -229.000000)\" fill=\"#ffffff\"><polygon points=\"54 229 94 269 54 269\"></polygon></g></g></svg>'),
(66, 'purple', '#9278fd', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -229.000000)\" fill=\"#9278fd\"><path d=\"M154,229 L154,249 L174,249 L174,269 L134,269 L134,229 L154,229 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -229.000000)\" fill=\"#ffffff\"><path d=\"M154,229 L154,249 L174,249 L174,269 L134,269 L134,229 L154,229 Z\"></path></g></g></svg>'),
(67, 'purple', '#9278fd', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -229.000000)\" fill=\"#9278fd\"><path d=\"M214,229 L254,229 L254,269 L214,269 L214,229 Z M234,259 C239.522847,259 244,254.522847 244,249 C244,243.477153 239.522847,239 234,239 C228.477153,239 224,243.477153 224,249 C224,254.522847 228.477153,259 234,259 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -229.000000)\" fill=\"#ffffff\"><path d=\"M214,229 L254,229 L254,269 L214,269 L214,229 Z M234,259 C239.522847,259 244,254.522847 244,249 C244,243.477153 239.522847,239 234,239 C228.477153,239 224,243.477153 224,249 C224,254.522847 228.477153,259 234,259 Z\"></path></g></g></svg>'),
(68, 'purple', '#9278fd', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -229.000000)\" fill=\"#9278fd\"><path d=\"M313,249 L293,269 L293,249 L313,229 L333,249 L333,269 L313,249 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -229.000000)\" fill=\"#ffffff\"><path d=\"M313,249 L293,269 L293,249 L313,229 L333,249 L333,269 L313,249 Z\"></path></g></g></svg>'),
(69, 'purple', '#9278fd', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -306.000000)\" fill=\"#9278fd\"><g id=\"Group-2\" transform=\"translate(54.000000, 306.000000)\"><rect x=\"0\" y=\"0\" width=\"40\" height=\"20\"></rect><circle cx=\"20\" cy=\"20\" r=\"20\"></circle></g></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -306.000000)\" fill=\"#ffffff\"><g id=\"Group-2\" transform=\"translate(54.000000, 306.000000)\"><rect x=\"0\" y=\"0\" width=\"40\" height=\"20\"></rect><circle cx=\"20\" cy=\"20\" r=\"20\"></circle></g></g></g></svg>'),
(70, 'purple', '#9278fd', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -306.000000)\" fill=\"#9278fd\"><path d=\"M174,326 C174,337.045695 165.045695,346 154,346 C142.954305,346 134,337.045695 134,326 C134,314.954305 142.954305,306 154,306 C165.045695,306 174,314.954305 174,326 Z M154.1,336 C159.678076,336 164.2,331.478076 164.2,325.9 C164.2,320.321924 159.678076,315.8 154.1,315.8 C148.521924,315.8 144,320.321924 144,325.9 C144,331.478076 148.521924,336 154.1,336 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -306.000000)\" fill=\"#ffffff\"><path d=\"M174,326 C174,337.045695 165.045695,346 154,346 C142.954305,346 134,337.045695 134,326 C134,314.954305 142.954305,306 154,306 C165.045695,306 174,314.954305 174,326 Z M154.1,336 C159.678076,336 164.2,331.478076 164.2,325.9 C164.2,320.321924 159.678076,315.8 154.1,315.8 C148.521924,315.8 144,320.321924 144,325.9 C144,331.478076 148.521924,336 154.1,336 Z\"></path></g></g></svg>'),
(71, 'purple', '#9278fd', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -306.000000)\" fill=\"#9278fd\"><path d=\"M214,326 L214,306 L254,306 L254,326 L234,346 L214,326 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -306.000000)\" fill=\"#ffffff\"><path d=\"M214,326 L214,306 L254,306 L254,326 L234,346 L214,326 Z\"></path></g></g></svg>'),
(72, 'purple', '#9278fd', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -306.000000)\" fill=\"#9278fd\"><path d=\"M323,306 L333,306 L333,346 L313,346 L313,326 L293,326 L293,306 L323,306 L313,306 L313,326 L333,326 L333,306 L323,306 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -306.000000)\" fill=\"#ffffff\"><path d=\"M323,306 L333,306 L333,346 L313,346 L313,326 L293,326 L293,306 L323,306 L313,306 L313,326 L333,326 L333,306 L323,306 Z\"></path></g></g></svg>'),
(73, 'purple', '#9278fd', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -382.000000)\" fill=\"#9278fd\"><path d=\"M134,382 L174,382 L174,422 L134,422 L134,382 Z M153.942136,387.8 L139.8,401.942136 L153.942136,416.084271 L168.084271,401.942136 L153.942136,387.8 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -382.000000)\" fill=\"#ffffff\"><path d=\"M134,382 L174,382 L174,422 L134,422 L134,382 Z M153.942136,387.8 L139.8,401.942136 L153.942136,416.084271 L168.084271,401.942136 L153.942136,387.8 Z\"></path></g></g></svg>'),
(74, 'purple', '#9278fd', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -382.000000)\" fill=\"#9278fd\"><path d=\"M253.999021,402.2 C253.891711,413.153581 244.978951,422 234,422 C222.954305,422 214,413.045695 214,402 C214,390.954305 222.954305,382 234,382 L254,382 L254,402.2 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -382.000000)\" fill=\"#ffffff\"><path d=\"M253.999021,402.2 C253.891711,413.153581 244.978951,422 234,422 C222.954305,422 214,413.045695 214,402 C214,390.954305 222.954305,382 234,382 L254,382 L254,402.2 Z\"></path></g></g></svg>'),
(75, 'purple', '#9278fd', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -382.000000)\" fill=\"#9278fd\"><path d=\"M313,402 L333,382 L333,422 L293,422 L293,382 L313,402 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -382.000000)\" fill=\"#ffffff\"><path d=\"M313,402 L333,382 L333,422 L293,422 L293,382 L313,402 Z\"></path></g></g></svg>'),
(76, 'red', '#fe5455', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -382.000000)\" fill=\"#fe5455\"><path d=\"M313,402 L333,382 L333,422 L293,422 L293,382 L313,402 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -382.000000)\" fill=\"#ffffff\"><path d=\"M313,402 L333,382 L333,422 L293,422 L293,382 L313,402 Z\"></path></g></g></svg>'),
(77, 'red', '#fe5455', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -463.000000)\" fill=\"#fe5455\"><path d=\"M74,463 L94,483 L74,503 L73.8,503 L54,483.2 L54,483 L74,463 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -463.000000)\" fill=\"#ffffff\"><path d=\"M74,463 L94,483 L74,503 L73.8,503 L54,483.2 L54,483 L74,463 Z\"></path></g></g></svg>'),
(78, 'red', '#fe5455', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -463.000000)\" fill=\"#fe5455\"><rect x=\"134\" y=\"463\" width=\"40\" height=\"40\"></rect></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -463.000000)\" fill=\"#ffffff\"><rect x=\"134\" y=\"463\" width=\"40\" height=\"40\"></rect></g></g></svg>'),
(79, 'red', '#fe5455', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -463.000000)\" fill=\"#fe5455\"><path d=\"M224,493 L244,493 L244,473 L254,463 L254,503 L214,503 L224,493 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -463.000000)\" fill=\"#ffffff\"><path d=\"M224,493 L244,493 L244,473 L254,463 L254,503 L214,503 L224,493 Z\"></path></g></g></svg>'),
(80, 'red', '#fe5455', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -463.000000)\" fill=\"#fe5455\"><path d=\"M313,503 L293,503 L312.9,483 L293,463 L313,463 L333,463 L313.1,483 L333,503 L313,503 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -463.000000)\" fill=\"#ffffff\"><path d=\"M313,503 L293,503 L312.9,483 L293,463 L313,463 L333,463 L313.1,483 L333,503 L313,503 Z\"></path></g></g></svg>'),
(81, 'orange', '#fab81b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -382.000000)\" fill=\"#fab81b\"><path d=\"M313,402 L333,382 L333,422 L293,422 L293,382 L313,402 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -382.000000)\" fill=\"#ffffff\"><path d=\"M313,402 L333,382 L333,422 L293,422 L293,382 L313,402 Z\"></path></g></g></svg>'),
(82, 'orange', '#fab81b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -463.000000)\" fill=\"#fab81b\"><path d=\"M74,463 L94,483 L74,503 L73.8,503 L54,483.2 L54,483 L74,463 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -463.000000)\" fill=\"#ffffff\"><path d=\"M74,463 L94,483 L74,503 L73.8,503 L54,483.2 L54,483 L74,463 Z\"></path></g></g></svg>'),
(83, 'orange', '#fab81b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -463.000000)\" fill=\"#fab81b\"><rect x=\"134\" y=\"463\" width=\"40\" height=\"40\"></rect></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -463.000000)\" fill=\"#ffffff\"><rect x=\"134\" y=\"463\" width=\"40\" height=\"40\"></rect></g></g></svg>'),
(84, 'orange', '#fab81b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -463.000000)\" fill=\"#fab81b\"><path d=\"M224,493 L244,493 L244,473 L254,463 L254,503 L214,503 L224,493 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -463.000000)\" fill=\"#ffffff\"><path d=\"M224,493 L244,493 L244,473 L254,463 L254,503 L214,503 L224,493 Z\"></path></g></g></svg>'),
(85, 'orange', '#fab81b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -463.000000)\" fill=\"#fab81b\"><path d=\"M313,503 L293,503 L312.9,483 L293,463 L313,463 L333,463 L313.1,483 L333,503 L313,503 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -463.000000)\" fill=\"#ffffff\"><path d=\"M313,503 L293,503 L312.9,483 L293,463 L313,463 L333,463 L313.1,483 L333,503 L313,503 Z\"></path></g></g></svg>'),
(86, 'green', '#00d28b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -382.000000)\" fill=\"#00d28b\"><path d=\"M313,402 L333,382 L333,422 L293,422 L293,382 L313,402 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -382.000000)\" fill=\"#ffffff\"><path d=\"M313,402 L333,382 L333,422 L293,422 L293,382 L313,402 Z\"></path></g></g></svg>'),
(87, 'green', '#00d28b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -463.000000)\" fill=\"#00d28b\"><path d=\"M74,463 L94,483 L74,503 L73.8,503 L54,483.2 L54,483 L74,463 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -463.000000)\" fill=\"#ffffff\"><path d=\"M74,463 L94,483 L74,503 L73.8,503 L54,483.2 L54,483 L74,463 Z\"></path></g></g></svg>'),
(88, 'green', '#00d28b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -463.000000)\" fill=\"#00d28b\"><rect x=\"134\" y=\"463\" width=\"40\" height=\"40\"></rect></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -463.000000)\" fill=\"#ffffff\"><rect x=\"134\" y=\"463\" width=\"40\" height=\"40\"></rect></g></g></svg>'),
(89, 'green', '#00d28b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -463.000000)\" fill=\"#00d28b\"><path d=\"M224,493 L244,493 L244,473 L254,463 L254,503 L214,503 L224,493 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -463.000000)\" fill=\"#ffffff\"><path d=\"M224,493 L244,493 L244,473 L254,463 L254,503 L214,503 L224,493 Z\"></path></g></g></svg>'),
(90, 'green', '#00d28b', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -463.000000)\" fill=\"#00d28b\"><path d=\"M313,503 L293,503 L312.9,483 L293,463 L313,463 L333,463 L313.1,483 L333,503 L313,503 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -463.000000)\" fill=\"#ffffff\"><path d=\"M313,503 L293,503 L312.9,483 L293,463 L313,463 L333,463 L313.1,483 L333,503 L313,503 Z\"></path></g></g></svg>'),
(91, 'blue', '#4285ff', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -382.000000)\" fill=\"#4285ff\"><path d=\"M313,402 L333,382 L333,422 L293,422 L293,382 L313,402 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -382.000000)\" fill=\"#ffffff\"><path d=\"M313,402 L333,382 L333,422 L293,422 L293,382 L313,402 Z\"></path></g></g></svg>'),
(92, 'blue', '#4285ff', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -463.000000)\" fill=\"#4285ff\"><path d=\"M74,463 L94,483 L74,503 L73.8,503 L54,483.2 L54,483 L74,463 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -463.000000)\" fill=\"#ffffff\"><path d=\"M74,463 L94,483 L74,503 L73.8,503 L54,483.2 L54,483 L74,463 Z\"></path></g></g></svg>'),
(93, 'blue', '#4285ff', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -463.000000)\" fill=\"#4285ff\"><rect x=\"134\" y=\"463\" width=\"40\" height=\"40\"></rect></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -463.000000)\" fill=\"#ffffff\"><rect x=\"134\" y=\"463\" width=\"40\" height=\"40\"></rect></g></g></svg>'),
(94, 'blue', '#4285ff', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -463.000000)\" fill=\"#4285ff\"><path d=\"M224,493 L244,493 L244,473 L254,463 L254,503 L214,503 L224,493 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -463.000000)\" fill=\"#ffffff\"><path d=\"M224,493 L244,493 L244,473 L254,463 L254,503 L214,503 L224,493 Z\"></path></g></g></svg>'),
(95, 'blue', '#4285ff', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -463.000000)\" fill=\"#4285ff\"><path d=\"M313,503 L293,503 L312.9,483 L293,463 L313,463 L333,463 L313.1,483 L333,503 L313,503 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -463.000000)\" fill=\"#ffffff\"><path d=\"M313,503 L293,503 L312.9,483 L293,463 L313,463 L333,463 L313.1,483 L333,503 L313,503 Z\"></path></g></g></svg>'),
(96, 'purple', '#9278fd', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -382.000000)\" fill=\"#9278fd\"><path d=\"M313,402 L333,382 L333,422 L293,422 L293,382 L313,402 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -382.000000)\" fill=\"#ffffff\"><path d=\"M313,402 L333,382 L333,422 L293,422 L293,382 L313,402 Z\"></path></g></g></svg>'),
(97, 'purple', '#9278fd', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -463.000000)\" fill=\"#9278fd\"><path d=\"M74,463 L94,483 L74,503 L73.8,503 L54,483.2 L54,483 L74,463 Z\"></path></g></g></svg>', ' <svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-54.000000, -463.000000)\" fill=\"#ffffff\"><path d=\"M74,463 L94,483 L74,503 L73.8,503 L54,483.2 L54,483 L74,463 Z\"></path></g></g></svg>'),
(98, 'purple', '#9278fd', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -463.000000)\" fill=\"#9278fd\"><rect x=\"134\" y=\"463\" width=\"40\" height=\"40\"></rect></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-134.000000, -463.000000)\" fill=\"#ffffff\"><rect x=\"134\" y=\"463\" width=\"40\" height=\"40\"></rect></g></g></svg>'),
(99, 'purple', '#9278fd', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -463.000000)\" fill=\"#9278fd\"><path d=\"M224,493 L244,493 L244,473 L254,463 L254,503 L214,503 L224,493 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-214.000000, -463.000000)\" fill=\"#ffffff\"><path d=\"M224,493 L244,493 L244,473 L254,463 L254,503 L214,503 L224,493 Z\"></path></g></g></svg>'),
(100, 'purple', '#9278fd', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -463.000000)\" fill=\"#9278fd\"><path d=\"M313,503 L293,503 L312.9,483 L293,463 L313,463 L333,463 L313.1,483 L333,503 L313,503 Z\"></path></g></g></svg>', '<svg width=\"40px\" height=\"40px\" viewBox=\"0 0 40 40\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><g transform=\"translate(-293.000000, -463.000000)\" fill=\"#ffffff\"><path d=\"M313,503 L293,503 L312.9,483 L293,463 L313,463 L333,463 L313.1,483 L333,503 L313,503 Z\"></path></g></g></svg>');

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
(150, 22, 31, 116),
(151, 22, 32, 116),
(152, 22, 35, 116),
(153, 22, 31, 117),
(154, 22, 32, 117),
(155, 22, 31, 118),
(156, 22, 32, 118),
(157, 22, 31, 119),
(158, 22, 32, 119),
(159, 22, 33, 119),
(166, 22, 31, 120),
(167, 22, 33, 120),
(168, 22, 34, 120),
(169, 22, 35, 120),
(172, 22, 31, 121),
(173, 22, 32, 121),
(191, 22, 31, 122),
(192, 22, 32, 122),
(193, 22, 33, 122),
(237, 22, 34, 123),
(240, 22, 31, 124),
(299, 22, 32, 125),
(300, 22, 33, 125),
(301, 22, 35, 125),
(307, 22, 33, 126),
(308, 22, 34, 126),
(309, 22, 35, 126);

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
(31, 22, 'no smoking', 1, '#fe5455', 'red', 1),
(32, 22, 'no alcohol', 17, '#fab81b', 'orange', 1),
(33, 22, '5k running', 33, '#00d28b', 'green', 1),
(34, 22, 'meditate', 49, '#4285ff', 'blue', 1),
(35, 22, 'drink 1l water', 65, '#9278fd', 'purple', 1);

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
  `time_amount_progress` int(11) NOT NULL,
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
  `time_amount_progress` int(11) NOT NULL,
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
(22, 'hi@yvesrijckaert.com', '$2y$10$PRYaQ1P6NOXYPICDzkqKZOSMKt6xUUkkdQ0deQGlIH3KjJZJfJJHO', 'Yves', '1998-07-13', 'improve-social-skills', '2019-01-30');

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
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT voor een tabel `data_habit_icon`
--
ALTER TABLE `data_habit_icon`
  MODIFY `data_habit_icon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT voor een tabel `data_habit_name`
--
ALTER TABLE `data_habit_name`
  MODIFY `data_habit_name_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT voor een tabel `fulfilled_habits`
--
ALTER TABLE `fulfilled_habits`
  MODIFY `fulfilled_habit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=310;

--
-- AUTO_INCREMENT voor een tabel `habits`
--
ALTER TABLE `habits`
  MODIFY `habit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT voor een tabel `repetitive`
--
ALTER TABLE `repetitive`
  MODIFY `repetitive_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `streaks`
--
ALTER TABLE `streaks`
  MODIFY `streak_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `total_amount`
--
ALTER TABLE `total_amount`
  MODIFY `total_amount_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
