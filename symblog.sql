-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2014 at 03:27 PM
-- Server version: 5.5.37-0ubuntu0.13.10.1
-- PHP Version: 5.5.3-1ubuntu2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `symblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `blog` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `tags` longtext COLLATE utf8_unicode_ci,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=79 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `author`, `blog`, `image`, `tags`, `created`, `updated`, `slug`, `category`) VALUES
(72, 'Qualquersdfs', 'dsyph3r', 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.', 'symfony.jpg', 'symfony2, php, paradise, symblog', '2014-07-17 16:09:09', '2014-07-17 16:09:09', 'qualquersdfs', NULL),
(73, 'The pool on the roof must have a leak', 'Zero Cool', 'Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Na. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis.', 'symfony.jpg', 'pool, leaky, hacked, movie, hacking, symblog', '2014-07-17 11:09:09', '2014-07-17 16:09:09', 'the-pool-on-the-roof-must-have-a-leak', NULL),
(74, 'Misdirection. What the eyes see and the ears hear, the mind believes', 'Gabriel', 'Lorem ipsumvehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.', 'symfony.jpg', 'misdirection, magic, movie, hacking, symblog', '2014-07-17 16:09:34', '2014-07-17 16:09:09', 'misdirection-what-the-eyes-see-and-the-ears-hear-the-mind-believes', NULL),
(75, 'The grid - A digital frontier', 'Kevin Flynn', 'Lorem commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra.', 'symfony.jpg', 'grid, daftpunk, movie, symblog', '2014-07-17 17:09:09', '2014-07-17 18:09:09', 'the-grid-a-digital-frontier', NULL),
(76, 'You''re either a one or a zero. Alive or dead', 'Gary Winston', 'Lorem ipsum dolor sit amet, consectetur adipiscing elittibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.', 'symfony.jpg', 'binary, one, zero, alive, dead, !trusting, movie, symblog', '2014-07-17 12:09:09', '2014-07-17 16:09:09', 'you-re-either-a-one-or-a-zero-alive-or-dead', NULL),
(77, 'dfghdfgh', 'daniel', 'dfgfhg g hddfg hdf ghd g', 'campanha.jpg', 'rg fg dfgh dh df', '2014-07-17 16:17:13', '2014-07-17 16:17:13', 'nacional', 'Nacional'),
(78, 'Ola amigos', 'daniel e rui', 'Este é um blog de amigos', 'campanha.jpg', 'amigos amizade lusiada projecto ricardo daniel rui', '2014-07-17 16:22:13', '2014-07-17 16:22:13', 'internacional', 'Internacional');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) DEFAULT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9474526CDAE07E97` (`blog_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=171 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `blog_id`, `user`, `comment`, `approved`, `created`, `updated`) VALUES
(153, 72, 'symfony', 'To make a long story short. You can''t go wrong by choosing Symfony! And no one has ever been fired for using Symfony.', 1, '2014-07-17 16:09:09', '2014-07-17 16:09:09'),
(154, 72, 'David', 'To make a long story short. Choosing a framework must not be taken lightly; it is a long-term commitment. Make sure that you make the right selection!', 1, '2014-07-17 16:09:09', '2014-07-17 16:09:09'),
(155, 73, 'Dade', 'Anything else, mom? You want me to mow the lawn? Oops! I forgot, New York, No grass.', 1, '2014-07-17 16:09:09', '2014-07-17 16:09:09'),
(156, 73, 'Kate', 'Are you challenging me? ', 1, '2011-07-23 06:15:20', '2014-07-17 16:09:09'),
(157, 73, 'Dade', 'Name your stakes.', 1, '2011-07-23 06:18:35', '2014-07-17 16:09:09'),
(158, 73, 'Kate', 'If I win, you become my slave.', 1, '2011-07-23 06:22:53', '2014-07-17 16:09:09'),
(159, 73, 'Dade', 'Your SLAVE?', 1, '2011-07-23 06:25:15', '2014-07-17 16:09:09'),
(160, 73, 'Kate', 'You wish! You''ll do shitwork, scan, crack copyrights...', 1, '2011-07-23 06:46:08', '2014-07-17 16:09:09'),
(161, 73, 'Dade', 'And if I win?', 1, '2011-07-23 10:22:46', '2014-07-17 16:09:09'),
(162, 73, 'Kate', 'Make it my first-born!', 1, '2011-07-23 11:08:08', '2014-07-17 16:09:09'),
(163, 73, 'Dade', 'Make it our first-date!', 1, '2011-07-24 18:56:01', '2014-07-17 16:09:09'),
(164, 73, 'Kate', 'I don''t DO dates. But I don''t lose either, so you''re on!', 1, '2011-07-25 22:28:42', '2014-07-17 16:09:09'),
(165, 74, 'Stanley', 'It''s not gonna end like this.', 1, '2014-07-17 16:09:09', '2014-07-17 16:09:09'),
(166, 74, 'Gabriel', 'Oh, come on, Stan. Not everything ends the way you think it should. Besides, audiences love happy endings.', 1, '2014-07-17 16:09:09', '2014-07-17 16:09:09'),
(167, 76, 'Mile', 'Doesn''t Bill Gates have something like that?', 1, '2014-07-17 16:09:09', '2014-07-17 16:09:09'),
(168, 76, 'Gary', 'Bill Who?', 1, '2014-07-17 16:09:09', '2014-07-17 16:09:09'),
(169, 78, 'Daniel', 'ola amigo rui...', 1, '2014-07-17 16:22:55', '2014-07-17 16:22:55'),
(170, 78, 'Rui', 'ola amigo daniel', 1, '2014-07-17 16:23:07', '2014-07-17 16:23:07');

-- --------------------------------------------------------

--
-- Table structure for table `migration_versions`
--

CREATE TABLE IF NOT EXISTS `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migration_versions`
--

INSERT INTO `migration_versions` (`version`) VALUES
('20140716150228');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `email` text NOT NULL,
  `username` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `salt` text NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `password` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`email`, `username`, `id`, `salt`, `is_active`, `password`) VALUES
('daniel@gmail.com', 'daniel', 20, 'd86832d76127d6b5d2299e98e1d99b02', 1, '85Uw245S57XbI2odg4JU6KyqpvypwRhs1Ijs2dY7nOmVQFOo1PdbhidKeX43Jz/ltx4EnFowILcyR0LqKB+ORA=='),
('ricardo@gmail.com', 'rui', 21, '5a5b178cf6d598f3e8f1451648adbebd', 1, 'v57dQplVwPVBQdYZzJhilIvdNwvkbhUp5QfqszcZqWihRz12tMt6bdio6CZmLpaPhRGemnqCgXQDNbAHBn1BaQ=='),
('ricardo@gmail.com', 'ricardo', 22, '2516a1b0b09051d91b48c8595008c9bb', 1, 'Pk2ytTHLooIX8OYG4ecUYWkl3EFFPKnMONz/R2W5jDEVXz5E1NsjLa+Lx+jc63AWCkxu/H1ZL6i44QfAeNtdUw==');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_9474526CDAE07E97` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
