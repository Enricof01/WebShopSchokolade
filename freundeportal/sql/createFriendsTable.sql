--
-- Tabellenstruktur für Tabelle `fpfriends`
--

DROP TABLE IF EXISTS `fpfriends`;

CREATE TABLE `fpfriends` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `study` varchar(200) NOT NULL,
  `semester` int(11) NOT NULL,
  `userid` int(11) NOT NULL
);

ALTER TABLE `fpfriends` ADD PRIMARY KEY(`id`);

ALTER TABLE `fpfriends` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;

