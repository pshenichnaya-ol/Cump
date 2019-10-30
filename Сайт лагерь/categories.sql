-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 03 2019 г., 20:54
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `categories`
--

-- --------------------------------------------------------

--
-- Структура таблицы `name_lager`
--

CREATE TABLE `name_lager` (
  `id` int(11) NOT NULL,
  `title` varchar(15) NOT NULL,
  `adres` text NOT NULL,
  `URL_image` text NOT NULL,
  `Content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `name_lager`
--

INSERT INTO `name_lager` (`id`, `title`, `adres`, `URL_image`, `Content`) VALUES
(1, '\"Солнышко\"', 'Лагерь находится на ГЛЦ Абзаково', 'https://yt3.ggpht.com/a/AGF-l79_9bqgdCx1CGPoBLvL2NnJJ7PNhE-0eZfrJQ=s900-c-k-c0xffffffff-no-rj-mo', 'Детский оздоровительный лагерь \"Солнышко\" расположен в живописном посёлке Абзаково. Лагерь принимает до двухсот детей в смену.'),
(2, '\"Колобок\"', 'Лагерь находится на Банном', 'https://ds05.infourok.ru/uploads/ex/059a/000a2b41-eddf5a3c/hello_html_e87c5e8.jpg', 'Детский креативный лагерь \"Колобок\" - это отличный шанс провести каникулы с пользой, а также новые друзья, веселые игры, шумные дискотеки и \"островок свободы\"! В лагере ребенок становится более коммуникабельным, самостоятельным, приобретает новый жизненный опыт, который обязательно пригодится в будущем, ведь жизнь в лагере так не похожа на жизнь дома или в школе.'),
(3, '\"Радуга\"', 'Лагерь находится на Зеленой поляне', 'https://i.ya-webdesign.com/images/rainbow-banner-png-15.png', 'Ребята обучаются полезным навыкам по специальностям: музыканта, корреспондента, повара, фотографа, медика, мастера ремонта, узлового, кострового, знатока леса, штурмана ... уже 18 специальностей! Большая игра в Следопытов помогает детям принимать ответственность на себя, быть настоящим другом, укрепляет силу духа и выносливость.');

-- --------------------------------------------------------

--
-- Структура таблицы `zaezd`
--

CREATE TABLE `zaezd` (
  `id` int(11) NOT NULL,
  `id_lager` int(15) NOT NULL,
  `data_start` date NOT NULL,
  `data_end` date NOT NULL,
  `tema` varchar(256) NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `zaezd`
--

INSERT INTO `zaezd` (`id`, `id_lager`, `data_start`, `data_end`, `tema`, `price`) VALUES
(1, 1, '2019-06-01', '2019-06-15', 'Танцы', '8000'),
(2, 1, '2019-06-18', '2019-06-30', 'Путешествие', '9500'),
(3, 1, '2019-07-03', '2019-07-18', 'Сказка', '10500'),
(4, 2, '2019-06-01', '2019-06-30', 'Робототехника', '18000'),
(102, 2, '2019-07-04', '2019-07-26', 'Краски лета', '13500'),
(103, 2, '2019-08-09', '2019-08-23', 'Английский язык', '14000'),
(104, 3, '2019-07-01', '2019-07-27', 'Археология', '24000'),
(105, 3, '2019-08-16', '2019-08-24', 'Наука и образование', '9300');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `name_lager`
--
ALTER TABLE `name_lager`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zaezd`
--
ALTER TABLE `zaezd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lager` (`id_lager`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `name_lager`
--
ALTER TABLE `name_lager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT для таблицы `zaezd`
--
ALTER TABLE `zaezd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `zaezd`
--
ALTER TABLE `zaezd`
  ADD CONSTRAINT `zaezd_ibfk_1` FOREIGN KEY (`id_lager`) REFERENCES `name_lager` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
