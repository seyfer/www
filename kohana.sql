-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 20, 2012 at 09:11 AM
-- Server version: 5.1.63-0ubuntu0.11.10.1
-- PHP Version: 5.3.6-13ubuntu3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kohana`
--

-- --------------------------------------------------------

--
-- Table structure for table `hay_categories`
--

CREATE TABLE IF NOT EXISTS `hay_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `lft` int(11) NOT NULL,
  `rgt` int(11) NOT NULL,
  `lvl` int(11) NOT NULL,
  `scope` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `hay_categories`
--

INSERT INTO `hay_categories` (`id`, `title`, `parent_id`, `lft`, `rgt`, `lvl`, `scope`) VALUES
(42, 'Куртки', 0, 1, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hay_comments`
--

CREATE TABLE IF NOT EXISTS `hay_comments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `product_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `hay_delivery`
--

CREATE TABLE IF NOT EXISTS `hay_delivery` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `cost` float NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `hay_delivery`
--

INSERT INTO `hay_delivery` (`id`, `name`, `description`, `cost`, `status`) VALUES
(4, 'Почтой', 'Доставка почтой', 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hay_images`
--

CREATE TABLE IF NOT EXISTS `hay_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=76 ;

-- --------------------------------------------------------

--
-- Table structure for table `hay_news`
--

CREATE TABLE IF NOT EXISTS `hay_news` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `intro` text NOT NULL,
  `content` text NOT NULL,
  `date` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `hay_news`
--

INSERT INTO `hay_news` (`id`, `title`, `intro`, `content`, `date`) VALUES
(19, 'Мы открылись!', 'Открылся сайт!', 'Мы открылись! Открылся сайт!', '19.08.2012');

-- --------------------------------------------------------

--
-- Table structure for table `hay_orders`
--

CREATE TABLE IF NOT EXISTS `hay_orders` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `sum` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `delivery_id` int(3) NOT NULL,
  `status_pay` int(1) NOT NULL,
  `status_delivery` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=102 ;

--
-- Dumping data for table `hay_orders`
--

INSERT INTO `hay_orders` (`id`, `user_id`, `sum`, `date`, `delivery_id`, `status_pay`, `status_delivery`) VALUES
(96, 4, '2099', '19.08.2012 - 03:54', 4, 0, 0),
(97, 4, '4098', '19.08.2012 - 04:23', 4, 0, 0),
(98, 4, '4098', '19.08.2012 - 04:24', 4, 0, 0),
(99, 4, '2099', '19.08.2012 - 05:02', 4, 0, 0),
(100, 4, '2099', '19.08.2012 - 05:03', 4, 0, 0),
(101, 4, '2099', '19.08.2012 - 05:03', 4, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hay_orders_products`
--

CREATE TABLE IF NOT EXISTS `hay_orders_products` (
  `order_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `count` int(11) NOT NULL,
  PRIMARY KEY (`order_id`,`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Dumping data for table `hay_orders_products`
--

INSERT INTO `hay_orders_products` (`order_id`, `product_id`, `count`) VALUES
(96, 92, 1),
(98, 92, 2),
(97, 92, 2),
(99, 92, 1),
(100, 92, 1),
(101, 92, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hay_pages`
--

CREATE TABLE IF NOT EXISTS `hay_pages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `hay_pages`
--

INSERT INTO `hay_pages` (`id`, `title`, `alias`, `text`, `status`) VALUES
(20, 'Способы оплаты', 'pay', 'Мы принимаем к оплате все', 1),
(21, 'Доставка', 'delivery', 'Доставим куда угодно', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hay_products`
--

CREATE TABLE IF NOT EXISTS `hay_products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `cost` varchar(30) NOT NULL,
  `status` int(1) NOT NULL,
  `image_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=93 ;

--
-- Dumping data for table `hay_products`
--

INSERT INTO `hay_products` (`id`, `title`, `description`, `cost`, `status`, `image_id`) VALUES
(92, 'Куртка зеленая', 'С капюшоном', '1999', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hay_products_categories`
--

CREATE TABLE IF NOT EXISTS `hay_products_categories` (
  `product_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  PRIMARY KEY (`product_id`,`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Dumping data for table `hay_products_categories`
--

INSERT INTO `hay_products_categories` (`product_id`, `category_id`) VALUES
(92, 42);

-- --------------------------------------------------------

--
-- Table structure for table `hay_roles`
--

CREATE TABLE IF NOT EXISTS `hay_roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `hay_roles`
--

INSERT INTO `hay_roles` (`id`, `name`, `description`) VALUES
(3, 'login', 'I can logon'),
(4, 'admin', 'I can admin');

-- --------------------------------------------------------

--
-- Table structure for table `hay_roles_users`
--

CREATE TABLE IF NOT EXISTS `hay_roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hay_roles_users`
--

INSERT INTO `hay_roles_users` (`user_id`, `role_id`) VALUES
(4, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `hay_users`
--

CREATE TABLE IF NOT EXISTS `hay_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(127) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `first_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(64) NOT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `hay_users`
--

INSERT INTO `hay_users` (`id`, `email`, `username`, `first_name`, `address`, `password`, `logins`, `last_login`) VALUES
(4, 'seyferseed@mail.ru', 'seyfer', 'seed', 'вавыпавпавп', 'f011f9924d410a649148e9c2b44104e88e5a4879e153a35a04b75df7c825b8c0', 1, 1345362004);

-- --------------------------------------------------------

--
-- Table structure for table `hay_user_tokens`
--

CREATE TABLE IF NOT EXISTS `hay_user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `type` varchar(100) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hay_roles_users`
--
ALTER TABLE `hay_roles_users`
  ADD CONSTRAINT `hay_roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `hay_users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `hay_roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `hay_roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hay_user_tokens`
--
ALTER TABLE `hay_user_tokens`
  ADD CONSTRAINT `hay_user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `hay_users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
