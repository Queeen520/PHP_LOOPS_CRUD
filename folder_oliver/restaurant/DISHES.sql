-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 09. Nov 2022 um 14:57
-- Server-Version: 10.4.21-MariaDB
-- PHP-Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `restaurant`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `DISHES`
--

CREATE TABLE `DISHES` (
  `id` int(11) NOT NULL,
  `image` char(120) NOT NULL,
  `name` char(30) DEFAULT NULL,
  `price` float NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `DISHES`
--

INSERT INTO `DISHES` (`id`, `image`, `name`, `price`, `description`) VALUES
(1, 'shakshuka.png', 'shakshuka', 12.5, 'Shakshuka is a Maghrebi dish of eggs poached in a sauce of tomatoes, olive oil, peppers, onion and garlic, commonly spiced with cumin, paprika and cayenne pepper. It originated in Ottoman North Africa in the mid-16th century after tomatoes were introduced to the region.'),
(3, 'paleo-chicken.png', 'paleo-chicken', 12.5, 'Chicken is super versatile. You can grill it! Bake it! Throw it in a creamy stew! And it provides a ton of protein to keep you fuller longer. Chicken is also naturally paleo, making it a wholesome staple for those on the caveman-inspired eating plan. Here are a few recipes that are fun, simple to make, and delicious, so you don’t need to settle for any boring (or complicated) paleo recipes at all.'),
(4, 'stew.png', 'stew', 12.5, 'stew is a combination of solid food ingredients that have been cooked in liquid and served in the resultant gravy. A stew needs to have raw ingredients added to the gravy. Ingredients in a stew can include any combination of vegetables and may include meat, especially tougher meats suitable for slow-cooking, such as beef, pork, lamb, poultry, sausages, and seafood. While water can be used as the stew-cooking liquid, stock is also common. A small amount of red wine is sometimes added for flavour. Seasoning and flavourings may also be added. Stews are typically cooked at a relatively low temperature (simmered, not boiled), allowing flavours to mingle.'),
(5, 'sushi.png', 'sushi', 12.5, 'Sushi (すし, 寿司, 鮨, 鮓, pronounced [sɯɕiꜜ] or [sɯꜜɕi]) is a Japanese dish of prepared vinegared rice (sushi-meshi), usually with some sugar and salt, accompanied by a variety of ingredients (neta), such as seafood, often raw, and vegetables. Styles of sushi and its presentation vary widely, but the one key ingredient is \'sushi rice\', also referred to as shari (しゃり), or sumeshi (酢飯).'),
(6, 'tofu.png', 'tofu', 12.5, 'Tofu (Chinese: 豆腐; pinyin: dòufu; Wade–Giles: tou4-fu), also known as bean curd in English, is a food prepared by coagulating soy milk and then pressing the resulting curds into solid white blocks of varying softness; it can be silken, soft, firm, extra firm or super firm. Beyond these broad textural categories, there are many varieties of tofu. It has a subtle flavor, so it can be used in savory and sweet dishes. It is often seasoned or marinated to suit the dish and its flavors, and due to its spongy texture, it absorbs flavors well.');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `DISHES`
--
ALTER TABLE `DISHES`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `DISHES`
--
ALTER TABLE `DISHES`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
