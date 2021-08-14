-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 14 2021 г., 13:37
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `CategoryName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `CategoryName`) VALUES
(1, 'Молочная продукция'),
(2, 'Говядина'),
(3, 'Свинина'),
(4, 'Птица'),
(5, 'Кролик'),
(6, 'Баранина');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `Weight` int(11) NOT NULL DEFAULT 1,
  `Price` decimal(6,2) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `preview` varchar(50) NOT NULL DEFAULT 'img/test.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `ProductName`, `Weight`, `Price`, `CategoryID`, `preview`) VALUES
(1, 'Сыр сулугуни', 1, '499.00', 1, 'img/сыр сулугуни.jpg'),
(2, 'Молоко', 1, '150.00', 1, 'img/молоко.jpg'),
(3, 'Творог', 1, '300.00', 1, 'img/творог.jpg'),
(7, 'Масло', 1, '200.00', 1, 'img/масло.jpg'),
(8, 'Сметана', 1, '180.00', 1, 'img/сметана.jpg'),
(9, 'Масло гхи', 1, '485.00', 1, 'img/масло гхи.png'),
(10, 'Сыворотка', 1, '40.00', 1, 'img/сыворотка.jpg'),
(11, 'Кефир', 1, '130.00', 1, 'img/кефир.jpg'),
(12, 'Йогурт', 1, '130.00', 1, 'img/йогурт.jpg'),
(13, 'Вырезка', 1, '1530.00', 2, 'img/вырезка говяжья 02.jpeg'),
(14, 'Лопатка без кости', 1, '885.00', 2, 'img/лопатка гов без кости.jpeg'),
(15, 'Лопатка на кости', 1, '612.00', 2, 'img/лопатка гов с костью.jpg'),
(16, 'Мякоть', 1, '885.00', 2, 'img/мякоть говяд 01.jpg'),
(17, 'Гуляш', 1, '440.00', 2, 'img/гуляш говяжий 02.jpg'),
(18, 'Ребрышки', 1, '540.00', 2, 'img/ребрышки говяжьи 01.jpg'),
(19, 'Стейк оссобуко', 1, '540.00', 2, 'img/стейк оссобуку говяжий.jpg'),
(20, 'Стейк отбивной без кости ', 1, '990.00', 2, 'img/стейкотбивбез кости гов.jpg'),
(21, 'Сустав', 1, '270.00', 2, 'img/сустав.jpg'),
(22, 'Фарш', 1, '440.00', 2, 'img/фарш гов.jpg'),
(23, 'Шейка на кости', 1, '710.00', 2, 'img/шейка на кости.jpg'),
(24, 'Карбонат без кости', 1, '449.00', 3, 'img/Карбонат свиной без кости.jpg'),
(25, 'Окорок свиной', 1, '450.00', 3, 'img/окорок свиной 01.jpg'),
(26, 'Лопатка свиная ', 1, '360.00', 3, 'img/лопатка свиная 02.jpg'),
(27, 'Грудинка', 1, '360.00', 3, 'img/грудинка свин.jpg'),
(28, 'Ребрышки', 1, '265.00', 3, 'img/р свины02.jpg'),
(29, 'Рулька', 1, '289.00', 3, 'img/рулька свиная 01.jpg'),
(30, 'Свиная шейка', 1, '720.00', 3, 'img/шейка свиная 01.jpg'),
(31, 'Фарш свиной', 1, '272.00', 3, 'img/фарш свиной 01.jpg'),
(32, 'Копыта', 1, '180.00', 3, 'img/копыта свиные 01.jpg'),
(33, 'Шашлык свиной ', 1, '515.00', 3, 'img/шашлык свин.jpg'),
(34, 'Сало не соленое ', 1, '450.00', 3, 'img/сало не сол.jpg'),
(35, 'Сало  соленое', 1, '585.00', 3, 'img/сало соленое.jpg'),
(36, 'Тушка индейки', 1, '570.00', 4, 'img/индейк тушка.jpeg'),
(37, 'Индейка голень', 1, '279.00', 4, 'img/golen-indeiki.jpg'),
(38, 'Грудка индейка', 1, '570.00', 4, 'img/Грудка индейка.jpg'),
(39, 'Бедро индейки без кости', 1, '585.00', 4, 'img/Бедро индейки без кости.jpg'),
(40, 'Гусь тушка', 1, '750.00', 4, 'img/Гусь тушка.jpg'),
(41, 'Курица для первых блюд', 1, '288.00', 4, 'img/Курица для первых блюд.jpg'),
(42, 'Петух', 1, '450.00', 4, 'img/Петух.webp'),
(43, 'Утка тушка ', 1, '800.00', 4, 'img/Утка тушка.jpg'),
(44, 'Цесарка тушка ', 1, '601.00', 4, 'img/Цесарка тушка.jpg'),
(45, 'Фарш куриный ', 1, '304.00', 4, 'img/Фарш куриный.jpg'),
(46, 'Фарш из грудки индейки ', 1, '383.00', 4, 'img/Фарш из грудки индейк.jpg'),
(47, 'Фарш из бедра идейки', 1, '390.00', 4, 'img/Фарш из бедра индейки.jpg'),
(48, 'Кролик', 1, '700.00', 5, 'img/крол.jpg'),
(49, 'Корейка на кости', 1, '1080.00', 6, 'img/Корейка на кости.jpg'),
(50, 'Лопатка на кости ', 1, '810.00', 6, 'img/Лопатка на кости.jpg'),
(51, 'Окорок на кости', 1, '830.00', 6, 'img/Окорок на кости.jpg'),
(52, 'Ребрышки', 1, '599.00', 6, 'img/Ребрышки баран.jpg'),
(53, 'Шейка', 1, '695.00', 6, 'img/шейка бар.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `goods`
--
ALTER TABLE `goods`
  ADD CONSTRAINT `goods_ibfk_1` FOREIGN KEY (`CategoryID`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
