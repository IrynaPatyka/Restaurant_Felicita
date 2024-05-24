-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Май 24 2024 г., 05:04
-- Версия сервера: 5.7.24
-- Версия PHP: 8.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `restaurant`
--

-- --------------------------------------------------------

--
-- Структура таблицы `breakfast`
--

CREATE TABLE `breakfast` (
  `dish_id` int(11) NOT NULL,
  `dish_name` varchar(255) NOT NULL,
  `ingredients` text,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `breakfast`
--

INSERT INTO `breakfast` (`dish_id`, `dish_name`, `ingredients`, `price`) VALUES
(1, 'Сет 1', 'Паста карбонара, Піца Маргарита, Напій: Кава американо', '15.00'),
(2, 'Сет 2', 'Ласуня з лососем,Тунець тартар,Напій: Мохіто', '20.00'),
(3, 'Сет 3', 'Ризотто з грибами, Веганська піца з овочами, Напій: Чай з мятою', '18.00');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Сніданок'),
(2, 'Обід'),
(3, 'Вечеря');

-- --------------------------------------------------------

--
-- Структура таблицы `dinner`
--

CREATE TABLE `dinner` (
  `dish_id` int(11) NOT NULL,
  `dish_name` varchar(255) NOT NULL,
  `ingredients` text,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dinner`
--

INSERT INTO `dinner` (`dish_id`, `dish_name`, `ingredients`, `price`) VALUES
(1, 'Сет 1', 'Паста з морепродуктами,Кальмари з соусом Песто ,Напій: Вино Шардоне', '22.00'),
(2, 'Сет 2', 'Стейк рибний,Гарбузовий крем-суп,Напій: Сок з граната', '30.00'),
(3, 'Сет 3', 'Філе курки з рисом,Салат з авокадо та креветками,Напій: Мохіто без алкоголю', '25.00');

-- --------------------------------------------------------

--
-- Структура таблицы `lunch`
--

CREATE TABLE `lunch` (
  `dish_id` int(11) NOT NULL,
  `dish_name` varchar(255) NOT NULL,
  `ingredients` text,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `lunch`
--

INSERT INTO `lunch` (`dish_id`, `dish_name`, `ingredients`, `price`) VALUES
(1, 'Сет 1', 'Курячий рол з авокадо,Салат Цезар,Напій: Лимонад', '18.00'),
(2, 'Сет 2', 'Стейк з яловичини, Пюре з броколі, Напій: Чорний чай', '25.00'),
(3, 'Сет 3', 'Мексиканська омлет,Грильовані овочі,Напій: Чорна кава', '16.00');

-- --------------------------------------------------------

--
-- Структура таблицы `orders1`
--

CREATE TABLE `orders1` (
  `order_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_surname` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `category` varchar(255) NOT NULL,
  `dishes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders1`
--

INSERT INTO `orders1` (`order_id`, `customer_name`, `customer_surname`, `phone`, `category`, `dishes`) VALUES
(74, 'Ірина', 'Патика', '09998888777', 'Сніданок', 'Сет 2'),
(75, 'Іван', 'Ковальчук', '099526583563', 'Обід', 'Сет 3'),
(76, 'Анна', 'Петренко', '0983537553736', 'Сніданок', 'Сет 2'),
(77, 'Максим', 'Сидоренко', '09998888777', 'Вечеря', 'Сет 1'),
(78, 'Ольга', 'Сидоренко', '093888231', 'Обід', 'Сет 3'),
(79, 'Юлія', 'Велика', '099888777', 'Сніданок', 'Сет 1'),
(80, 'Карина', 'Міцкевич', '099988866', 'Вечеря', 'Сет 2'),
(81, 'Елизавета', 'Попова', '0995673088', 'Сніданок', 'Сет 1'),
(82, 'Олександра', 'Петренко', '099888546', 'Обід', 'Сет 2');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '3722109077');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `breakfast`
--
ALTER TABLE `breakfast`
  ADD PRIMARY KEY (`dish_id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Индексы таблицы `dinner`
--
ALTER TABLE `dinner`
  ADD PRIMARY KEY (`dish_id`);

--
-- Индексы таблицы `lunch`
--
ALTER TABLE `lunch`
  ADD PRIMARY KEY (`dish_id`);

--
-- Индексы таблицы `orders1`
--
ALTER TABLE `orders1`
  ADD PRIMARY KEY (`order_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `breakfast`
--
ALTER TABLE `breakfast`
  MODIFY `dish_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `dinner`
--
ALTER TABLE `dinner`
  MODIFY `dish_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `lunch`
--
ALTER TABLE `lunch`
  MODIFY `dish_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `orders1`
--
ALTER TABLE `orders1`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
