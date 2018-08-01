
/* -------------------------- TENNIS_RESERVE TABLE -------------------------------*/ 


DROP TABLE IF EXISTS `#__tennis_reserve`;

CREATE TABLE `#__tennis_reserve` (
	`id` int NOT NULL AUTO_INCREMENT,
	`userid` int NOT NULL,
	`reserve_date` datetime NOT NULL,
	`begin_date` datetime NOT NULL,
	`end_date` datetime NOT NULL,
	`court_id` int not null,
	 PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `#__tennis_reserve` (`userid`, `begin_date`, `end_date`, `court_id`) VALUES
(51, 	'2018-07-16 04:12:09', '2018-08-02 08:00:00', '2018-08-02 09:00:00', 2),
(2, 	'2018-07-21 11:00:19', '2018-08-02 07:00:00', '2018-08-02 08:00:00', 3),
(11, 	'2018-07-27 09:09:09', '2018-08-03 06:00:00', '2018-08-03 07:00:00', 1),
(9, 	'2018-07-28 10:31:11', '2018-08-03 06:00:00', '2018-08-03 07:00:00', 4),
(9, 	'2018-07-29 10:32:06', '2018-08-02 17:00:00', '2018-08-02 17:30:00', 6),
(9, 	'2018-07-30 03:01:45', '2018-08-02 18:00:00', '2018-08-02 20:00:00', 2),
(8, 	'2018-07-31 02:11:55', '2018-08-02 06:00:00', '2018-08-02 08:00:00', 6),
(5, 	'2018-08-01 08:17:01', '2018-08-02 11:00:00', '2018-08-02 12:00:00', 5),
(50, 	'2018-08-01 19:57:12', '2018-08-02 06:00:00', '2018-08-02 07:00:00', 2);

 -------------------------- TENNIS_TARRIFF TABLE ------------------------------- */

DROP TABLE IF EXISTS `#__TENNIS_TARIFF`;

CREATE TABLE `#__TENNIS_TARIFF` (
  `id` int not NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pr_per_hour` double NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `#__TENNIS_TARIFF` (`name`, `pr_per_hour`) VALUES
('BASE', 2000),
('BASE_DISCOUNT', 1600),
('BASE_INDOOR', 4000),
('BASE_INDOOR_DISCOUNT', 3200);

/* -------------------------- END TENNIS_TARRIFF TABLE -------------------------------*/

/* -------------------------- TENNIS_FEATURES TABLE -------------------------------*/

DROP TABLE IF EXISTS `#__TENNIS_FEATURES`;  
  
CREATE TABLE `#__TENNIS_FEATURES` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `single_play` tinyint(1) NOT NULL,
  `double_play` tinyint(1) NOT NULL,
  `practicing` tinyint(1) NOT NULL,
  `medium` tinyint(1) NOT NULL,
  `competition` tinyint(1) NOT NULL,
  `price_mult` double NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `#__TENNIS_FEATURES` (`id`, `name`, `single_play`, `double_play`, `practicing`, 
	`medium`, `competition`, `price_mult`) VALUES
(1, 'MEDIUM_DOUBLE', 1, 1, 1, 1, 0, 1),
(2, 'PRACTICE_DOUBLE', 1, 1, 1, 0, 0, 0.9),
(3, 'PRACTICE_SINGLE', 1, 0, 1, 0, 0, 0.8),
(4, 'PROFI', 1, 1, 1, 1, 1, 1.2);

/* -------------------------- END TENNIS_FEATURES TABLE -------------------------------*/

  
/* -------------------------- TENNIS_COURTS TABLE -------------------------------*/

DROP TABLE IF EXISTS `#__TENNIS_COURTS`; 
  
CREATE TABLE `#__TENNIS_COURTS` (
  `id` int NOT NULL AUTO_INCREMENT,	
  `name` varchar(60) NOT NULL,
  `posx` int(11) NOT NULL,
  `posy` int(11) NOT NULL,
  `title` varchar(40) CHARACTER SET latin2 COLLATE latin2_hungarian_ci NOT NULL,
  `features` varchar(24) NOT NULL,
  `open` tinyint(1) NOT NULL,
   PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `#__TENNIS_COURTS` (`id`, `name`, `posx`, `posy`, `title`, `features`, `open`) VALUES
(1, '11', 1, 1, 'Center court', 'PROFI', 1),
(2, '12', 1, 2, 'Left from center court', 'MEDIUM_DOUBLE', 1),
(3, '13', 1, 3, 'Left behind of the center court', 'PRACTICE_DOUBLE', 1),
(4, '21', 2, 1, 'Right behind the center court.', 'PRACTICE_DOUBLE', 1),
(5, '31', 3, 1, 'Only single practice court.', 'PRACTICE_SINGLE', 1);

/* -------------------------- END TENNIS_COURTS TABLE -------------------------------*/

/* -------------------------- TENNIS_TIMES TABLE -------------------------------*/

DROP TABLE IF EXISTS `#__TENNIS_TIMES`; 

CREATE TABLE `#__TENNIS_TIMES` (
	`id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(12) NOT NULL,
  `begin` time NOT NULL,
  `end` time NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `#__TENNIS_TIMES` (`id`, `name`, `begin`, `end`) VALUES
(1, '06-07', '06:00:00', '07:00:00'),
(2, '07-08', '07:00:00', '08:00:00'),
(3, '08-09', '08:00:00', '09:00:00'),
(4, '09-10', '09:00:00', '10:00:00'),
(5, '10-11', '10:00:00', '11:00:00'),
(6, '11-12', '11:00:00', '12:00:00'),
(7, '12-13', '12:00:00', '13:00:00'),
(8, '13-14', '13:00:00', '14:00:00'),
(9, '14-15', '14:00:00', '15:00:00'),
(10, '15-16', '15:00:00', '16:00:00'),
(11, '16-17', '16:00:00', '17:00:00'),
(12, '17-18', '17:00:00', '18:00:00'),
(13, '18-19', '18:00:00', '19:00:00'),
(14, '19-20', '19:00:00', '20:00:00'),
(15, '20-21', '20:00:00', '21:00:00'),
(16, '21-22', '21:00:00', '22:00:00');

/* -------------------------- END TENNIS_TIMES TABLE -------------------------------*/
