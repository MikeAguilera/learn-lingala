USE `lingaladictionary`;

CREATE TABLE IF NOT EXISTS `basic_1` (
  `Question` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `OptA` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `OptB` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `OptC` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `OptD` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `basic_1` (`Question`, `OptA`, 'OptB', 'OptC', 'OptD') VALUES('What is the Lingala Subject Marker for \"I\"?', 'Na','O','A','E');
INSERT INTO `basic_1` (`Question`, `OptA`, 'OptB', 'OptC', 'OptD') VALUES('What is the Lingala Subject Marker for \"You\"?', 'O','Ba','To','A');
INSERT INTO `basic_1` (`Question`, `OptA`, 'OptB', 'OptC', 'OptD') VALUES('What is the Lingala Subject Marker for "He\\She"?', 'A','E','O','Bo');
INSERT INTO `basic_1` (`Question`, `OptA`, 'OptB', 'OptC', 'OptD') VALUES('What is the Lingala Subject Marker for \"It\"?', 'E','To','A','O');
INSERT INTO `basic_1` (`Question`, `OptA`, 'OptB', 'OptC', 'OptD') VALUES('What is the Lingala Subject Marker for \"We\"?', 'To','Bo','E','Ba');
INSERT INTO `basic_1` (`Question`, `OptA`, 'OptB', 'OptC', 'OptD') VALUES('What is the Lingala Subject Marker for \They\"?', 'Ba','A','O','Bo')