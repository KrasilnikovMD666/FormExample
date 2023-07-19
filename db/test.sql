-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 25 2023 г., 14:20
-- Версия сервера: 10.4.19-MariaDB
-- Версия PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `forms`
--

CREATE TABLE `forms` (
  `form_id` int(11) NOT NULL,
  `user_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `user_surname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `user_email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `user_text` varchar(100) CHARACTER SET utf8 NOT NULL,
  `user_file` blob NOT NULL,
  `user_gender` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `forms`
--

INSERT INTO `forms` (`form_id`, `user_name`, `user_surname`, `user_email`, `user_text`, `user_file`, `user_gender`) VALUES
(1, 'test', 'test', 'test@test.ru', 'Test message!', '', 'male'),
(2, 'test1', 'test1', 'test132131@test.ru', 'Test message 2!', 0x324b6c5f4e4a4f61523247315f5835492d676770484b65364a71376e5458713144566175375847624876356c337a34324d32685244576a6e56516e6c357a724866787950424b6d636f393664716f616e517035713156456c2e6a7067, 'female'),
(3, 'test1', 'test1', 'test132131@test.ru', 'Test message 2!', 0x324b6c5f4e4a4f61523247315f5835492d676770484b65364a71376e5458713144566175375847624876356c337a34324d32685244576a6e56516e6c357a724866787950424b6d636f393664716f616e517035713156456c2e6a7067, 'female'),
(4, 'ауацуауауцауцауцауц', '32уацуау', 'test132131@test.ru', 'Test message 2уацуаацуаауауцацау!', 0x324b6c5f4e4a4f61523247315f5835492d676770484b65364a71376e5458713144566175375847624876356c337a34324d32685244576a6e56516e6c357a724866787950424b6d636f393664716f616e517035713156456c2e6a7067, 'female'),
(5, 'Иван', 'Петров', 'ivanpetrov99@mail.ru', 'Отправляю сообщение!', 0x324b6c5f4e4a4f61523247315f5835492d676770484b65364a71376e5458713144566175375847624876356c337a34324d32685244576a6e56516e6c357a724866787950424b6d636f393664716f616e517035713156456c2e6a7067, 'male'),
(6, 'Иван', 'Петров', 'ivanpetrov99@mail.ru', 'Ещё одно сообщение!', 0x324b6c5f4e4a4f61523247315f5835492d676770484b65364a71376e5458713144566175375847624876356c337a34324d32685244576a6e56516e6c357a724866787950424b6d636f393664716f616e517035713156456c2e6a7067, 'male'),
(7, '123', '123', 'qwerty111199@mail.ru', 'grgwrggrwgrgrrgrwgrwgwffdfdweqewqeweqw', 0x39626632636164626137313437623262393032306530303034303233663931622e6a7067, 'male'),
(8, 'test', 'foto', 'fototest@mail.ru', 'Testing foto!', 0x676f6c64656e2e6a7067, 'male');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`form_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `forms`
--
ALTER TABLE `forms`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
