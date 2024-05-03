-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Май 03 2024 г., 08:25
-- Версия сервера: 8.0.34-26-beget-1-1
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `r98160zt_rusichi`
--

-- --------------------------------------------------------

--
-- Структура таблицы `админы`
--
-- Создание: Май 03 2024 г., 04:59
--

DROP TABLE IF EXISTS `админы`;
CREATE TABLE `админы` (
  `id` int NOT NULL,
  `login` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Имя` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Фамилия` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Отчество` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `админы`
--

INSERT INTO `админы` (`id`, `login`, `password`, `Имя`, `Фамилия`, `Отчество`) VALUES
(1, 'qwe', '76d80224611fc919a5d54f0ff9fba446', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `груп_рейтинг`
--
-- Создание: Май 03 2024 г., 04:59
--

DROP TABLE IF EXISTS `груп_рейтинг`;
CREATE TABLE `груп_рейтинг` (
  `id` int NOT NULL,
  `Разведчики` int DEFAULT NULL,
  `Спасатели` int DEFAULT NULL,
  `Защитники` int DEFAULT NULL,
  `Богатыри` int DEFAULT NULL,
  `Мероприятия` int DEFAULT NULL,
  `Чистота` int DEFAULT NULL,
  `Поведение` int DEFAULT NULL,
  `id_группы` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `груп_рейтинг`
--

INSERT INTO `груп_рейтинг` (`id`, `Разведчики`, `Спасатели`, `Защитники`, `Богатыри`, `Мероприятия`, `Чистота`, `Поведение`, `id_группы`) VALUES
(1, 5, 2, 3, 2, 5, 5, 7, 2),
(2, 7, 6, 5, 9, 3, 2, 1, 3),
(3, 7, 5, 1, 4, 3, 4, 1, 1),
(4, 2, 2, 1, 4, 4, 6, 5, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `группы`
--
-- Создание: Май 03 2024 г., 04:59
--

DROP TABLE IF EXISTS `группы`;
CREATE TABLE `группы` (
  `id` int NOT NULL,
  `Название` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Логотип` blob,
  `Описание` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `группы`
--

INSERT INTO `группы` (`id`, `Название`, `Логотип`, `Описание`) VALUES
(1, 'Рыси', NULL, NULL),
(2, 'Барсы', NULL, NULL),
(3, 'Медведи', NULL, NULL),
(4, 'Ястребы', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `инд_рейтинг`
--
-- Создание: Май 03 2024 г., 04:59
--

DROP TABLE IF EXISTS `инд_рейтинг`;
CREATE TABLE `инд_рейтинг` (
  `id` int NOT NULL,
  `Разведчик` int NOT NULL DEFAULT '0',
  `Спасатель` int NOT NULL DEFAULT '0',
  `Защитник` int NOT NULL DEFAULT '0',
  `Богатырь` int NOT NULL DEFAULT '0',
  `Мероприятия` int NOT NULL DEFAULT '0',
  `Поведение` int NOT NULL DEFAULT '0',
  `id_курсанта` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `инд_рейтинг`
--

INSERT INTO `инд_рейтинг` (`id`, `Разведчик`, `Спасатель`, `Защитник`, `Богатырь`, `Мероприятия`, `Поведение`, `id_курсанта`) VALUES
(1, 5, 8, 1, 5, 6, 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `курсанты`
--
-- Создание: Май 03 2024 г., 04:59
--

DROP TABLE IF EXISTS `курсанты`;
CREATE TABLE `курсанты` (
  `id` int NOT NULL,
  `login` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Имя` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Фамилия` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Возраст` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Достижения` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Увлечения` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Инд_рейтинг` int DEFAULT NULL,
  `id_группы` int DEFAULT NULL,
  `isFill` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `курсанты`
--

INSERT INTO `курсанты` (`id`, `login`, `password`, `Имя`, `Фамилия`, `Возраст`, `Достижения`, `Увлечения`, `Инд_рейтинг`, `id_группы`, `isFill`) VALUES
(1, '123', '202cb962ac59075b964b07152d234b70', 'Вано', 'Ивано', '7', 'шашко', 'Тоже шашко', 4, 2, 1),
(4, 'curs2', '60de941e046cf82f70e1f6b7090e14b6', 'Юлия', 'Иванова', '10', 'Шахматы', 'Шахматы', 6, 1, 1),
(5, 'curs3', '2d40bc309d7f3572bcc8053b0884e65a', 'Андрей', 'Попов', '13', 'Шашки', 'Шашки', 5, 3, 1),
(6, 'curs4', '2e32bfa7c1c662012778753eb5174e42', 'Илья', 'Иванов', '11', 'Плавание', 'Плавание', 7, 4, 1),
(8, 'curs1', '05d962d1f452528595d7a16475982d9e', 'Юрий', 'Юрин', '10', 'Машины', 'Машины', 6, 2, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `админы`
--
ALTER TABLE `админы`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login_UNIQUE` (`login`);

--
-- Индексы таблицы `груп_рейтинг`
--
ALTER TABLE `груп_рейтинг`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_группы` (`id_группы`);

--
-- Индексы таблицы `группы`
--
ALTER TABLE `группы`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `инд_рейтинг`
--
ALTER TABLE `инд_рейтинг`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_курсанта` (`id_курсанта`);

--
-- Индексы таблицы `курсанты`
--
ALTER TABLE `курсанты`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login_UNIQUE` (`login`),
  ADD KEY `id_группы` (`id_группы`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `админы`
--
ALTER TABLE `админы`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `груп_рейтинг`
--
ALTER TABLE `груп_рейтинг`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `группы`
--
ALTER TABLE `группы`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `инд_рейтинг`
--
ALTER TABLE `инд_рейтинг`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `курсанты`
--
ALTER TABLE `курсанты`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `груп_рейтинг`
--
ALTER TABLE `груп_рейтинг`
  ADD CONSTRAINT `Груп_рейтинг_ibfk_1` FOREIGN KEY (`id_группы`) REFERENCES `группы` (`id`);

--
-- Ограничения внешнего ключа таблицы `инд_рейтинг`
--
ALTER TABLE `инд_рейтинг`
  ADD CONSTRAINT `Инд_рейтинг_ibfk_1` FOREIGN KEY (`id_курсанта`) REFERENCES `курсанты` (`id`);

--
-- Ограничения внешнего ключа таблицы `курсанты`
--
ALTER TABLE `курсанты`
  ADD CONSTRAINT `Курсанты_ibfk_1` FOREIGN KEY (`id_группы`) REFERENCES `группы` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
