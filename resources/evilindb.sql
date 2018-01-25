-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 25 2018 г., 02:48
-- Версия сервера: 5.7.20
-- Версия PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `evilindb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `anunt`
--

CREATE TABLE `anunt` (
  `id` int(11) NOT NULL,
  `titlu` varchar(255) DEFAULT NULL,
  `continut` text,
  `image` varchar(255) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `categorie` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `anunt`
--

INSERT INTO `anunt` (`id`, `titlu`, `continut`, `image`, `data`, `categorie`) VALUES
(1, 'sadfasdfas0', 'dfasdfasdfasdf', 'sdfasdfasdfasdf', NULL, '1'),
(2, 'afdafdasdf', 'asdfsadfsa\r\nasdf\r\nasdf\r\nas\r\ndf', '', NULL, 'Clienti');

-- --------------------------------------------------------

--
-- Структура таблицы `clienti`
--

CREATE TABLE `clienti` (
  `id` int(11) NOT NULL,
  `intreprindere` varchar(50) DEFAULT NULL,
  `director` varchar(50) DEFAULT NULL,
  `servicii` varchar(15) DEFAULT NULL,
  `nr_personal` int(11) DEFAULT '1',
  `perioada` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `anunt`
--
ALTER TABLE `anunt`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `anunt`
--
ALTER TABLE `anunt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `clienti`
--
ALTER TABLE `clienti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
