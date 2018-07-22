  ADD PRIMARY KEY (`id`);*/

/* -------------------------- END TENNIS_TARRIFF TABLE -------------------------------*/

/* -------------------------- TENNIS_FEATURES TABLE -------------------------------*/

DROP TABLE IF EXISTS `#__TENNIS_FEATURES`;  
  
CREATE TABLE `#__TENNIS_FEATURES` (
  `id` varchar(12) NOT NULL,
  `name` varchar(20) NOT NULL,
  `single_play` tinyint(1) NOT NULL,
  `double_play` tinyint(1) NOT NULL,
  `practicing` tinyint(1) NOT NULL,
  `medium` tinyint(1) NOT NULL,
  `competition` tinyint(1) NOT NULL,
  `price_mult` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `#__TENNIS_FEATURES` (`id`, `name`, `single_play`, `double_play`, `practicing`, 
	`medium`, `competition`, `price_mult`) VALUES
(1, 'MEDIUM_DOUBLE', 1, 1, 1, 1, 0, 1),
(2, 'PRACTICE_DOUBLE', 1, 1, 1, 0, 0, 0.9),
(3, 'PRACTICE_SINGLE', 1, 0, 1, 0, 0, 0.8),
(4, 'PROFI', 1, 1, 1, 1, 1, 1.2);

ALTER TABLE `#__TENNIS_FEATURES`
  ADD PRIMARY KEY (`id`);
  
  
/* -------------------------- END TENNIS_FEATURES TABLE -------------------------------*/

  
/* -------------------------- TENNIS_COURTS TABLE -------------------------------*/

DROP TABLE IF EXISTS `#__TENNIS_COURTS`; 
  
CREATE TABLE `#__TENNIS_COURTS` (
  `id` varchar(12) NOT NULL,	
  `name` varchar(60) NOT NULL,
  `posx` int(11) NOT NULL,
  `posy` int(11) NOT NULL,
  `title` varchar(40) CHARACTER SET latin2 COLLATE latin2_hungarian_ci NOT NULL,
  `features` varchar(24) NOT NULL,
  `open` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `#__TENNIS_COURTS` (`id`, `name`, `posx`, `posy`, `title`, `features`, `open`) VALUES
(1, '11', 1, 1, 'Center court', 'PROFI', 1),
(2, '12', 1, 2, 'Left from center court', 'MEDIUM_DOUBLE', 1),
(3, '13', 1, 3, 'Left behind of the center court', 'PRACTICE_DOUBLE', 1),
(4, '21', 2, 1, 'Right behind the center court.', 'PRACTICE_DOUBLE', 1),
(5, '31', 3, 1, 'Only single practice court.', 'PRACTICE_SINGLE', 1);

ALTER TABLE `#__TENNIS_COURTS`
  ADD PRIMARY KEY (`id`);


/* -------------------------- END TENNIS_COURTS TABLE -------------------------------*/

/* -------------------------- TENNIS_TIMES TABLE -------------------------------*/

DROP TABLE IF EXISTS `#__TENNIS_TIMES`; 

CREATE TABLE `#__TENNIS_TIMES` (
	`id` varchar(12) NOT NULL,
  `name` varchar(12) NOT NULL,
  `begin` time NOT NULL,
  `end` time NOT NULL
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

ALTER TABLE `#__TENNIS_TIMES`
  ADD PRIMARY KEY (`id`);

/* -------------------------- END TENNIS_TIMES TABLE -------------------------------*/
