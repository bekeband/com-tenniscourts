
/* -------------------------- TENNIS_TARRIFF TABLE ------------------------------- */

DROP TABLE IF EXISTS `#__TENNIS_TARIFF`;

CREATE TABLE `#__TENNIS_TARIFF` (
  `ID` varchar(30) NOT NULL,
  `PR_PER_HOUR` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `#__TENNIS_TARIFF` (`ID`, `PR_PER_HOUR`) VALUES
('BASE', 2000),
('BASE_DISCOUNT', 1600),
('BASE_INDOOR', 4000),
('BASE_INDOOR_DISCOUNT', 3200);

ALTER TABLE `#__TENNIS_TARIFF`
  ADD PRIMARY KEY (`ID`);

/* -------------------------- END TENNIS_TARRIFF TABLE -------------------------------*/

/* -------------------------- TENNIS_FEATURES TABLE -------------------------------*/

DROP TABLE IF EXISTS `#__TENNIS_FEATURES`;  
  
CREATE TABLE `#__TENNIS_FEATURES` (
  `ID` varchar(20) NOT NULL,
  `SINGLE_PLAY` tinyint(1) NOT NULL,
  `DOUBLE_PLAY` tinyint(1) NOT NULL,
  `PRACTICING` tinyint(1) NOT NULL,
  `MEDIUM` tinyint(1) NOT NULL,
  `COMPETITION` tinyint(1) NOT NULL,
  `PRICE_MULT` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `#__TENNIS_FEATURES` (`ID`, `SINGLE_PLAY`, `DOUBLE_PLAY`, `PRACTICING`, `MEDIUM`, `COMPETITION`, `PRICE_MULT`) VALUES
('MEDIUM_DOUBLE', 1, 1, 1, 1, 0, 1),
('PRACTICE_DOUBLE', 1, 1, 1, 0, 0, 0.9),
('PRACTICE_SINGLE', 1, 0, 1, 0, 0, 0.8),
('PROFI', 1, 1, 1, 1, 1, 1.2);

ALTER TABLE `#__TENNIS_FEATURES`
  ADD PRIMARY KEY (`ID`);
  
  
/* -------------------------- END TENNIS_FEATURES TABLE -------------------------------*/

  
/* -------------------------- TENNIS_COURTS TABLE -------------------------------*/

DROP TABLE IF EXISTS `#__TENNIS_COURTS`; 
  
CREATE TABLE `#__TENNIS_COURTS` (
  `NAME` varchar(60) NOT NULL,
  `POSX` int(11) NOT NULL,
  `POSY` int(11) NOT NULL,
  `TITLE` varchar(40) CHARACTER SET latin2 COLLATE latin2_hungarian_ci NOT NULL,
  `FEATURES` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `#__TENNIS_COURTS` (`NAME`, `POSX`, `POSY`, `TITLE`, `FEATURES`) VALUES
('11', 1, 1, 'Center court', 'PROFI'),
('12', 1, 2, 'Left from center court', 'MEDIUM_DOUBLE'),
('13', 1, 3, 'Left behind of the center court', 'PRACTICE_DOUBLE'),
('21', 2, 1, 'Right behind the center court.', 'PRACTICE_DOUBLE'),
('31', 3, 1, 'Only single practice court.', 'PRACTICE_SINGLE');

ALTER TABLE `#__TENNIS_COURTS`
  ADD PRIMARY KEY (`NAME`);


/* -------------------------- END TENNIS_COURTS TABLE -------------------------------*/

/* -------------------------- TENNIS_TIMES TABLE -------------------------------*/

DROP TABLE IF EXISTS `#__TENNIS_TIMES`; 

CREATE TABLE `#__TENNIS_TIMES` (
  `ID` varchar(12) NOT NULL,
  `BEGIN` time NOT NULL,
  `END` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `#__TENNIS_TIMES` (`ID`, `BEGIN`, `END`) VALUES
('06-07', '06:00:00', '07:00:00'),
('07-08', '07:00:00', '08:00:00'),
('08-09', '08:00:00', '09:00:00'),
('09-10', '09:00:00', '10:00:00'),
('10-11', '10:00:00', '11:00:00'),
('11-12', '11:00:00', '12:00:00'),
('12-13', '12:00:00', '13:00:00'),
('13-14', '13:00:00', '14:00:00'),
('14-15', '14:00:00', '15:00:00'),
('15-16', '15:00:00', '16:00:00'),
('16-17', '16:00:00', '17:00:00'),
('17-18', '17:00:00', '18:00:00'),
('18-19', '18:00:00', '19:00:00'),
('19-20', '19:00:00', '20:00:00'),
('20-21', '20:00:00', '21:00:00'),
('21-22', '21:00:00', '22:00:00');

ALTER TABLE `#__TENNIS_TIMES`
  ADD PRIMARY KEY (`ID`);

/* -------------------------- END TENNIS_TIMES TABLE -------------------------------*/
