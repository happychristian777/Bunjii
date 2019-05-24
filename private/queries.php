CREATE TABLE users(
signupid int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
name TINYTEXT NOT NULL,
email TINYTEXT NOT NULL,
password LONGTEXT NOT NULL,
type TINYTEXT NOT NULL);

CREATE TABLE venue(
venue_id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
signupid int(11) REFERENCES user(signupid),
venue_name TINYTEXT,
venue_desc LONGTEXT,
venue_phone int(12),
venue_type TINYTEXT);

CREATE TABLE customer(
customer_id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
signupid int(11) REFERENCES users(signupid),
customer_name TINYTEXT REFERENCES users(name),
customer_age int(2),
customer_gender TINYTEXT,
customer_phone int(11),
customer_address LONGTEXT,
customer_email TINYTEXT,
customer_interests LONGTEXT,
customer_desc LONGTEXT
);

CREATE TABLE courts(
venue_id int(11) REFERENCES venue(venue_id),
court_id int(11) PRIMARY KEY,
court_name TINYTEXT
);

CREATE TABLE timings(
court_id int(11) REFERENCES court(court_id),
timing_id int(11) PRIMARY KEY,
time_range TINYTEXT
);

CREATE TABLE coaches(
venue_id int(11) REFERENCES venue(venue_id),
coach_id int(11) PRIMARY KEY,
coach_name TINYTEXT,
coach_desc LONGTEXT
);

INSERT INTO `venue`(`venue_id`, `signupid`, `venue_name`, `venue_desc`, `venue_phone`, `venue_type`) VALUES (1,1,'St Lucia Court','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
',0435661027, 'football');
INSERT INTO `venue`(`venue_id`, `signupid`, `venue_name`, `venue_desc`, `venue_phone`, `venue_type`) VALUES (2,2,'Scorpion Tennis','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
',415796265, 'tennis');
INSERT INTO `venue`(`venue_id`, `signupid`, `venue_name`, `venue_desc`, `venue_phone`, `venue_type`) VALUES (3,3,'Gabba','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
',456378245, 'cricket');
INSERT INTO `venue`(`venue_id`, `signupid`, `venue_name`, `venue_desc`, `venue_phone`, `venue_type`) VALUES (4,4,'Queensland Cricket Ground','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
',456293865, 'cricket');
INSERT INTO `venue`(`venue_id`, `signupid`, `venue_name`, `venue_desc`, `venue_phone`, `venue_type`) VALUES (5,5,'Samwell Basketball Ground','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
',468597276, 'basketball');
INSERT INTO `venue`(`venue_id`, `signupid`, `venue_name`, `venue_desc`, `venue_phone`, `venue_type`) VALUES (6,6,'Rockwell courts','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
',417752588, 'tennis');


INSERT INTO `courts`(`venue_id`, `court_id`, `court_name`) VALUES (1,1, 'Green Court');
INSERT INTO `courts`(`venue_id`, `court_id`, `court_name`) VALUES (1,2, 'Red Court');

INSERT INTO `timings`(`court_id`, `timing_id`, `time_range`) VALUES (1,1,'9.00 - 10.00');
INSERT INTO `timings`(`court_id`, `timing_id`, `time_range`) VALUES (1,2,'10.00 - 11.00');
INSERT INTO `timings`(`court_id`, `timing_id`, `time_range`) VALUES (1,3,'12.00 - 1.00');
INSERT INTO `timings`(`court_id`, `timing_id`, `time_range`) VALUES (1,4,'1.00 - 2.00');
INSERT INTO `timings`(`court_id`, `timing_id`, `time_range`) VALUES (1,5,'2.00 - 3.00');
INSERT INTO `timings`(`court_id`, `timing_id`, `time_range`) VALUES (1,6,'3.00 - 4.00');
INSERT INTO `timings`(`court_id`, `timing_id`, `time_range`) VALUES (1,7,'4.00 - 5.00');
INSERT INTO `timings`(`court_id`, `timing_id`, `time_range`) VALUES (1,8,'5.00 - 6.00');
INSERT INTO `timings`(`court_id`, `timing_id`, `time_range`) VALUES (1,9,'6.00 - 7.00');
INSERT INTO `timings`(`court_id`, `timing_id`, `time_range`) VALUES (1,10,'7.00 - 8.00');
INSERT INTO `timings`(`court_id`, `timing_id`, `time_range`) VALUES (1,11,'8.00 - 9.00');

INSERT INTO `timings`(`court_id`, `timing_id`, `time_range`) VALUES (2,11,'9.00 - 10.00');
INSERT INTO `timings`(`court_id`, `timing_id`, `time_range`) VALUES (2,12,'10.00 - 11.00');
INSERT INTO `timings`(`court_id`, `timing_id`, `time_range`) VALUES (2,13,'12.00 - 1.00');
INSERT INTO `timings`(`court_id`, `timing_id`, `time_range`) VALUES (2,14,'1.00 - 2.00');
INSERT INTO `timings`(`court_id`, `timing_id`, `time_range`) VALUES (2,15,'2.00 - 3.00');
INSERT INTO `timings`(`court_id`, `timing_id`, `time_range`) VALUES (2,16,'3.00 - 4.00');
INSERT INTO `timings`(`court_id`, `timing_id`, `time_range`) VALUES (2,17,'4.00 - 5.00');
INSERT INTO `timings`(`court_id`, `timing_id`, `time_range`) VALUES (2,18,'5.00 - 6.00');
INSERT INTO `timings`(`court_id`, `timing_id`, `time_range`) VALUES (2,19,'6.00 - 7.00');
INSERT INTO `timings`(`court_id`, `timing_id`, `time_range`) VALUES (2,20,'7.00 - 8.00');
INSERT INTO `timings`(`court_id`, `timing_id`, `time_range`) VALUES (2,21,'8.00 - 9.00');


INSERT INTO `coaches`(`venue_id`, `coach_id`, `coach_name`, `coach_desc`) VALUES (1, 1, 'Bhargav Bandi', 'Abcd');
