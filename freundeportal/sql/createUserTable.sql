--
-- Tabellenstruktur für Tabelle `fpuser`
--
DROP TABLE IF EXISTS `fpuser`;

CREATE TABLE `fpuser` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `2facode` varchar(30) NOT NULL
);

ALTER TABLE `fpuser` ADD PRIMARY KEY(`id`);

ALTER TABLE `fpuser` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;