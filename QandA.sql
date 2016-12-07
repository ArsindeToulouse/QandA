-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 08 2016 г., 00:03
-- Версия сервера: 5.5.48
-- Версия PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `QandA`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rights` int(1) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `rights`, `pass`) VALUES
(1, 'admin', 'admin@qanda.com', 5, '$2y$15$IoHOjGPW2HOhS697RXCqYe1qOZR44mBFt.4.VsNaQqUq.yTlvtogm'),
(2, 'модератор', 'mod@qanda.com', 4, '$2y$15$BoVzg8q2bj/.3qa7Bq265un56pYCmU3D/e3mEIryQmnrOgBFV4dsC'),
(3, 'координатор', 'coord@qanda.com', 3, '$2y$10$uuIJceGNJE0THUtCbk7gXuMfoVrBP2jRU6HUsnS.8DyKf5mR8fyFu'),
(8, 'test', 'jhgjgjjjgjhgjhg', 2, '$2y$10$rhVXO9tW2DZfkTLKIIVUJ.TSt1KezYrUcc9E23G/n/EMefin/I5Ja'),
(9, 'advin', 'laksdjlakjdslakjsd', 3, '$2y$10$YvGzocPlGsASGQKJQ6IWWOGDWF1Z6y/pfhhdX/yFJsgwFIGaGHSWq');

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `allparams`
--
CREATE TABLE IF NOT EXISTS `allparams` (
`id_category` int(11)
,`qcount` bigint(21)
,`cat_wait` int(11)
,`q_wait` bigint(21)
,`cat_public` int(11)
,`q_public` bigint(21)
,`cat_block` int(11)
,`q_block` bigint(21)
);

-- --------------------------------------------------------

--
-- Структура таблицы `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(11) NOT NULL,
  `id_q` int(11) NOT NULL,
  `a_text` text NOT NULL,
  `a_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `answers`
--

INSERT INTO `answers` (`id`, `id_q`, `a_text`, `a_date`, `id_user`) VALUES
(1, 1, 'Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. То дорогу, составитель журчит осталось заманивший домах заголовок возвращайся силуэт рекламных повстречался прямо маленький бросил свой своих его собрал пунктуация курсивных она переписывается наш о большой текстов, знаках своего подзаголовок! Даль которое то его, текстов живет, первую осталось инициал составитель моей, свой заманивший. ', '2016-12-04 17:06:25', 2),
(2, 3, ' Деревни не, залетают путь оксмокс по всей буквоград продолжил заголовок до, составитель однажды моей. Переписывается составитель текст, ты журчит обеспечивает грустный, послушавшись строчка злых. Составитель пустился щеке она собрал семь, моей прямо предупредила сбить! Буквоград они ipsum языком, меня предложения мир продолжил переписывается раз курсивных это, эта подзаголовок последний пустился, продолжил от всех все великий маленькая дал щеке свой живет оксмокс рот точках. Домах вопрос речью рот путь приставка, букв дороге, одна проектах.', '2016-12-04 17:06:25', 2),
(3, 4, 'Буквоград они ipsum языком, меня предложения мир продолжил переписывается раз курсивных это, эта подзаголовок последний пустился, продолжил от всех все великий маленькая дал щеке свой живет оксмокс рот точках. Домах вопрос речью рот путь приставка, букв дороге, одна проектах. Ведущими строчка знаках которое себя. Текст взгляд текстами знаках вопроса рыбными на берегу составитель меня, семь жизни?', '2016-12-04 17:07:11', 3),
(4, 6, 'Раз взгляд там диких наш залетают живет путь необходимыми вопроса, имеет, бросил алфавит, маленький что агенство большого своего пунктуация безопасную злых рыбными ведущими дал? ', '2016-12-05 21:35:31', 9),
(5, 7, 'Ведущими строчка знаках которое себя. Текст взгляд текстами знаках вопроса рыбными на берегу составитель меня, семь жизни? Раз взгляд там диких наш залетают живет путь необходимыми вопроса, имеет, бросил алфавит, маленький что агенство большого своего пунктуация безопасную злых рыбными ведущими дал? Назад жаренные взобравшись большой текста, несколько семантика всемогущая которой дал до букв, ты агенство океана вопроса бросил это встретил гор языкового безопасную решила, осталось снова переписали. ', '2016-12-04 17:07:49', 3),
(6, 10, 'Дал щеке снова последний страна правилами обеспечивает, пор? Мир которой злых города что, рот. Вопроса маленькая свой рыбными, переписали большого, ее залетают текстами лучше если, повстречался запятых правилами предупреждал. Проектах над то строчка живет страну переписывается оксмокс заглавных дороге повстречался мир дорогу, снова, языком она безопасную, сих последний эта необходимыми? Рот использовало дал подзаголовок путь, рыбными, мир обеспечивает курсивных но несколько напоивший пояс переулка, свое на берегу семантика агенство повстречался последний?', '2016-12-04 17:07:49', 9),
(7, 13, 'Подзаголовок заманивший свой снова ipsum, лучше пустился единственное моей он парадигматическая, то ручеек живет страну одна пунктуация его заголовок ты буквенных гор на берегу. Инициал по всей взобравшись океана алфавит своих, назад власти заглавных что своих ее, грустный, до о даже, лучше.', '2016-12-04 17:08:27', 2),
(8, 14, 'Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. То дорогу, составитель журчит осталось заманивший домах заголовок возвращайся силуэт рекламных повстречался прямо маленький бросил свой своих его собрал пунктуация курсивных она переписывается наш о большой текстов, знаках своего подзаголовок! Даль которое то его, текстов живет, первую осталось инициал составитель моей, свой заманивший. Деревни не, залетают путь оксмокс по всей буквоград продолжил заголовок до, составитель однажды моей. Переписывается составитель текст, ты журчит обеспечивает грустный, послушавшись строчка злых. Составитель пустился щеке она собрал семь, моей прямо предупредила сбить!', '2016-12-04 17:08:27', 3),
(9, 5, 'Теперь-то ответ будет внесен в реестр!!!!', '2016-12-05 22:19:39', 1),
(10, 18, 'Ответ на данный вопрос скрыт в тумане неизвестности', '2016-12-05 23:00:00', 1),
(11, 19, 'И не сосчитать.....', '2016-12-06 04:58:26', 9);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `block`
--
CREATE TABLE IF NOT EXISTS `block` (
`cat_block` int(11)
,`q_block` bigint(21)
);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'Категория 1'),
(2, 'Категория 2'),
(3, 'Категория 3'),
(4, 'Категория 4'),
(5, 'Категория 5'),
(6, 'Категория 6'),
(7, 'Категория 7'),
(8, 'Категория 8'),
(10, 'Категория 10');

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `public`
--
CREATE TABLE IF NOT EXISTS `public` (
`cat_public` int(11)
,`q_public` bigint(21)
);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `qcount`
--
CREATE TABLE IF NOT EXISTS `qcount` (
`id_category` int(11)
,`qcount` bigint(21)
);

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL,
  `q_text` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `q_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `q_text`, `id_user`, `id_category`, `q_date`, `status`) VALUES
(1, 'Вопрос 1', 3, 6, '2016-12-02 19:02:33', 1),
(2, 'Вопрос 4', 3, 3, '2016-12-02 22:01:33', 0),
(3, 'Вопрос 5', 3, 1, '2016-12-04 03:31:13', 1),
(4, 'Вопрос 6', 3, 2, '2016-12-03 16:36:14', 1),
(6, 'Вопрос 11 исправленный', 3, 4, '2016-12-03 04:53:30', 1),
(7, 'Вопрос 12', 3, 5, '2016-12-04 01:41:52', 1),
(10, 'Вопрос 16', 3, 7, '2016-12-02 04:33:16', 2),
(13, 'Вопрос 22', 3, 7, '2016-12-02 17:41:17', 1),
(14, 'Вопрос 23', 3, 8, '2016-12-03 02:25:49', 1),
(15, 'Вопрос 32', 3, 5, '2016-12-03 02:29:24', 0),
(16, 'Вопрос 33', 3, 8, '2016-12-03 21:22:40', 2),
(18, 'Вопрос ни о чем или как жить дальше', 4, 6, '2016-12-05 16:28:41', 1),
(19, 'Сколько звезд на небе', 5, 4, '2016-12-05 22:35:24', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`) VALUES
(3, 'Юлия', 'yulia@mail.com'),
(4, 'Сергей', 'serg@mail.ru'),
(5, 'Светлана', 'sveta@gmail.com');

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `wait`
--
CREATE TABLE IF NOT EXISTS `wait` (
`cat_wait` int(11)
,`q_wait` bigint(21)
);

-- --------------------------------------------------------

--
-- Структура для представления `allparams`
--
DROP TABLE IF EXISTS `allparams`;

CREATE ALGORITHM=UNDEFINED DEFINER=`mysql`@`%` SQL SECURITY DEFINER VIEW `qanda`.`allparams` AS select `qcount`.`id_category` AS `id_category`,`qcount`.`qcount` AS `qcount`,`wait`.`cat_wait` AS `cat_wait`,`wait`.`q_wait` AS `q_wait`,`public`.`cat_public` AS `cat_public`,`public`.`q_public` AS `q_public`,`block`.`cat_block` AS `cat_block`,`block`.`q_block` AS `q_block` from (((`qanda`.`qcount` left join `qanda`.`wait` on((`qcount`.`id_category` = `wait`.`cat_wait`))) left join `qanda`.`public` on((`qcount`.`id_category` = `public`.`cat_public`))) left join `qanda`.`block` on((`qcount`.`id_category` = `block`.`cat_block`)));

-- --------------------------------------------------------

--
-- Структура для представления `block`
--
DROP TABLE IF EXISTS `block`;

CREATE ALGORITHM=UNDEFINED DEFINER=`mysql`@`%` SQL SECURITY DEFINER VIEW `qanda`.`block` AS select `qanda`.`questions`.`id_category` AS `cat_block`,count(0) AS `q_block` from `qanda`.`questions` where (`qanda`.`questions`.`status` = 2) group by `qanda`.`questions`.`id_category`;

-- --------------------------------------------------------

--
-- Структура для представления `public`
--
DROP TABLE IF EXISTS `public`;

CREATE ALGORITHM=UNDEFINED DEFINER=`mysql`@`%` SQL SECURITY DEFINER VIEW `qanda`.`public` AS select `qanda`.`questions`.`id_category` AS `cat_public`,count(0) AS `q_public` from `qanda`.`questions` where (`qanda`.`questions`.`status` = 1) group by `qanda`.`questions`.`id_category`;

-- --------------------------------------------------------

--
-- Структура для представления `qcount`
--
DROP TABLE IF EXISTS `qcount`;

CREATE ALGORITHM=UNDEFINED DEFINER=`mysql`@`%` SQL SECURITY DEFINER VIEW `qanda`.`qcount` AS select `qanda`.`questions`.`id_category` AS `id_category`,count(0) AS `qcount` from `qanda`.`questions` group by `qanda`.`questions`.`id_category`;

-- --------------------------------------------------------

--
-- Структура для представления `wait`
--
DROP TABLE IF EXISTS `wait`;

CREATE ALGORITHM=UNDEFINED DEFINER=`mysql`@`%` SQL SECURITY DEFINER VIEW `qanda`.`wait` AS select `qanda`.`questions`.`id_category` AS `cat_wait`,count(0) AS `q_wait` from `qanda`.`questions` where (`qanda`.`questions`.`status` = 0) group by `qanda`.`questions`.`id_category`;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_q` (`id_q`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `status` (`status`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `id_q` FOREIGN KEY (`id_q`) REFERENCES `questions` (`id`);

--
-- Ограничения внешнего ключа таблицы `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `id_category` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
