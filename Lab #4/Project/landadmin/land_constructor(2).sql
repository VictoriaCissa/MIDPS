-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Авг 06 2015 г., 09:48
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `land_constructor`
--

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `name` varchar(255) NOT NULL,
  `slog` varchar(255) NOT NULL,
  `logo_1` varchar(255) NOT NULL,
  `logo2` varchar(255) NOT NULL,
  `logo_3` varchar(255) NOT NULL,
  `logo_4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`name`, `slog`, `logo_1`, `logo2`, `logo_3`, `logo_4`) VALUES
('Companies We Work With', 'great words from great people', 'images/logos1.png', 'images/logos2.png', 'images/logos3.png', 'images/logos4.png');

-- --------------------------------------------------------

--
-- Структура таблицы `footer`
--

CREATE TABLE IF NOT EXISTS `footer` (
  `name_1` varchar(255) NOT NULL,
  `slog_1` varchar(255) NOT NULL,
  `map_url` varchar(400) NOT NULL,
  `name_2` varchar(255) NOT NULL,
  `slog_2` varchar(255) NOT NULL,
  `form_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `footer`
--

INSERT INTO `footer` (`name_1`, `slog_1`, `map_url`, `name_2`, `slog_2`, `form_email`) VALUES
('See our office', 'Our service is totaly thin and light', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d174147.5981092008!2d28.858176549999985!3d46.99986904999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97c3628b769a1%3A0x37d1d6305749dd3c!2z0JrQuNGI0LjQvdGR0LIsINCc0L7Qu9C00L7QstCw!5e0!3m2!1sru!2s!4v1437136810648', 'Contact us now', 'Our service is totaly thin and light', ' ');

-- --------------------------------------------------------

--
-- Структура таблицы `footer_form`
--

CREATE TABLE IF NOT EXISTS `footer_form` (
  `name` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `footer_form`
--

INSERT INTO `footer_form` (`name`, `company`, `email`, `message`) VALUES
('wt', 'ewt', 'unicornum@mail.ru', 'af'),
('wt', 'ewt', 'unicornum@mail.ru', 'af'),
('wt', 'ewt', 'unicornum@mail.ru', 'af'),
('wt', 'ewt', 'unicornum@mail.ru', 'af'),
('wt', 'ewt', 'unicornum@mail.ru', 'af'),
('wt', 'ewt', 'unicornum@mail.ru', 'af'),
('wt', 'ewt', 'unicornum@mail.ru', 'af'),
('wt', 'ewt', 'unicornum@mail.ru', 'af'),
('wt', 'ewt', 'unicornum@mail.ru', 'af'),
('wt', 'ewt', 'unicornum@mail.ru', 'af'),
('wt', 'ewt', 'unicornum@mail.ru', 'af'),
('wt', 'ewt', 'unicornum@mail.ru', 'af'),
('wt', 'ewt', 'unicornum@mail.ru', 'af'),
('wt', 'ewt', 'unicornum@mail.ru', 'af'),
('wt', 'ewt', 'unicornum@mail.ru', 'af'),
('wt', 'ewt', 'unicornum@mail.ru', 'af'),
('wt', 'ewt', 'unicornum@mail.ru', 'af'),
('wt', 'ewt', 'unicornum@mail.ru', 'af'),
('wt', 'ewt', 'unicornum@mail.ru', 'af'),
('wt', 'ewt', 'unicornum@mail.ru', 'af'),
('wt', 'ewt', 'unicornum@mail.ru', 'af'),
('wt', 'ewt', 'unicornum@mail.ru', 'af'),
('wt', 'ewt', 'unicornum@mail.ru', 'af'),
('wt', 'ewt', 'unicornum@mail.ru', 'af'),
('wt', 'ewt', 'unicornum@mail.ru', 'af'),
('', '', 'fdgfg@jele.gh', ''),
('', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `header`
--

CREATE TABLE IF NOT EXISTS `header` (
  `logo` varchar(255) NOT NULL,
  `url_1` varchar(255) NOT NULL,
  `url_2` varchar(255) NOT NULL,
  `url_3` varchar(255) NOT NULL,
  `big_discript` varchar(255) NOT NULL,
  `s_discript` text NOT NULL,
  `note` varchar(255) NOT NULL,
  `bg_top_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `header`
--

INSERT INTO `header` (`logo`, `url_1`, `url_2`, `url_3`, `big_discript`, `s_discript`, `note`, `bg_top_img`) VALUES
('images/logo.png', '#', '#', '#', 'CORPORATE LANDING PAGE', '*Note: Bundle ends in two weeks from now.', '*Note: Bundle ends in two weeks from now.', 'images/bg_top');

-- --------------------------------------------------------

--
-- Структура таблицы `numbers`
--

CREATE TABLE IF NOT EXISTS `numbers` (
  `name` varchar(255) NOT NULL,
  `slog` varchar(255) NOT NULL,
  `number_1` varchar(255) NOT NULL,
  `number_2` varchar(255) NOT NULL,
  `number_3` varchar(255) NOT NULL,
  `number_4` varchar(255) NOT NULL,
  `fact_1` varchar(255) NOT NULL,
  `fact_2` varchar(255) NOT NULL,
  `fact_3` varchar(255) NOT NULL,
  `fact_4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `numbers`
--

INSERT INTO `numbers` (`name`, `slog`, `number_1`, `number_2`, `number_3`, `number_4`, `fact_1`, `fact_2`, `fact_3`, `fact_4`) VALUES
('Great people trusted our services', 'great words from great people', '+950', '+150', '+85', '6K', 'Themes and Templates Sales', 'Followers love and trust u', 'Items selling on themeforest', 'Working hours this year wow');

-- --------------------------------------------------------

--
-- Структура таблицы `preview`
--

CREATE TABLE IF NOT EXISTS `preview` (
  `name` varchar(255) NOT NULL,
  `discript` varchar(255) NOT NULL,
  `slog` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `preview`
--

INSERT INTO `preview` (`name`, `discript`, `slog`, `img`) VALUES
('The most amazing thing is here', 'Our service is astonishingly thin and light.', 'Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam quis nostrud.', 'images/promo-image.png');

-- --------------------------------------------------------

--
-- Структура таблицы `prices`
--

CREATE TABLE IF NOT EXISTS `prices` (
  `name` varchar(255) NOT NULL,
  `discript` varchar(255) NOT NULL,
  `slog` varchar(255) NOT NULL,
  `price_name_1` varchar(255) NOT NULL,
  `price_discript_1_1` varchar(255) NOT NULL,
  `price_discript_1_2` varchar(255) NOT NULL,
  `price_discript_1_3` varchar(255) NOT NULL,
  `price_discript_1_4` varchar(255) NOT NULL,
  `price_name_2` varchar(255) NOT NULL,
  `price_discript_2_1` varchar(255) NOT NULL,
  `price_discript_2_2` varchar(255) NOT NULL,
  `price_discript_2_3` varchar(255) NOT NULL,
  `price_discript_2_4` varchar(255) NOT NULL,
  `price_name_3` varchar(255) NOT NULL,
  `price_discript_3_1` varchar(255) NOT NULL,
  `price_discript_3_2` varchar(255) NOT NULL,
  `price_discript_3_3` varchar(255) NOT NULL,
  `price_discript_3_4` varchar(255) NOT NULL,
  `price_1` varchar(255) NOT NULL,
  `price_2` varchar(255) NOT NULL,
  `price_3` varchar(255) NOT NULL,
  `plan_slog_1` varchar(255) NOT NULL,
  `plan_slog_2` varchar(255) NOT NULL,
  `plan_slog_3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `prices`
--

INSERT INTO `prices` (`name`, `discript`, `slog`, `price_name_1`, `price_discript_1_1`, `price_discript_1_2`, `price_discript_1_3`, `price_discript_1_4`, `price_name_2`, `price_discript_2_1`, `price_discript_2_2`, `price_discript_2_3`, `price_discript_2_4`, `price_name_3`, `price_discript_3_1`, `price_discript_3_2`, `price_discript_3_3`, `price_discript_3_4`, `price_1`, `price_2`, `price_3`, `plan_slog_1`, `plan_slog_2`, `plan_slog_3`) VALUES
('Our Services Prices and Plans', 'Our service is totaly thin and light.', 'Get All The Features', 'Free', '5 Projects', '1 GB Storage', 'No Domain', '1 User', 'Personal', '25 Projects', '50 GB Storage', 'With 1 Domain', '10 User', 'Company', '100 Projects', '250 GB Storage', 'Unlimited Domains', '50 Users', '0$', '9,99$', '70$', 'Get All The Features', 'Get All The Features', 'Get All The Features');

-- --------------------------------------------------------

--
-- Структура таблицы `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `name` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `review`
--

INSERT INTO `review` (`name`, `comment`, `url`) VALUES
('What our awesome clients say ', 'Great service with fast and reliable support The design work and detail put into themes are great. ', 'via Unbounce.com');

-- --------------------------------------------------------

--
-- Структура таблицы `rights`
--

CREATE TABLE IF NOT EXISTS `rights` (
  `rights` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rights`
--

INSERT INTO `rights` (`rights`, `company`) VALUES
('All rights reserved Copyright &Acirc;&copy; 2014 FLATPACK by ', 'PixFort');

-- --------------------------------------------------------

--
-- Структура таблицы `serv`
--

CREATE TABLE IF NOT EXISTS `serv` (
  `icon1` varchar(255) NOT NULL,
  `icon2` varchar(255) NOT NULL,
  `icon3` varchar(255) NOT NULL,
  `icon4` varchar(255) NOT NULL,
  `name_1` varchar(255) NOT NULL,
  `name_2` varchar(255) NOT NULL,
  `name_3` varchar(255) NOT NULL,
  `name_4` varchar(255) NOT NULL,
  `discript_1` varchar(255) NOT NULL,
  `discript_2` varchar(255) NOT NULL,
  `discript_3` varchar(255) NOT NULL,
  `discript_4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `serv`
--

INSERT INTO `serv` (`icon1`, `icon2`, `icon3`, `icon4`, `name_1`, `name_2`, `name_3`, `name_4`, `discript_1`, `discript_2`, `discript_3`, `discript_4`) VALUES
('images/1.png', 'images/2.png', 'images/3.png', 'images/4.png', 'Calculator', 'Daily mails', 'Cofee cup', 'Connection', 'The edges may be directed or undirected For example if the vertice represent people party', 'The edges may be directed or undirected For example if the vertice represent people party', 'The edges may be directed or undirected For example if the vertice represent people party', 'The edges may be directed or undirected For example if the vertice represent people party');

-- --------------------------------------------------------

--
-- Структура таблицы `s_discript`
--

CREATE TABLE IF NOT EXISTS `s_discript` (
  `discript` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `s_discript`
--

INSERT INTO `s_discript` (`discript`) VALUES
('More than 10 unique unbounce templates in one bundle isn''t that awesome with a lot of features and great design brought to you by PixFort.'),
(''),
(''),
('');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
