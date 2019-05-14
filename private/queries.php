CREATE TABLE users(
signupid int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
name TINYTEXT NOT NULL,
email TINYTEXT NOT NULL,
password LONGTEXT NOT NULL);

CREATE TABLE venue(
venue_id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
signupid int(11) REFERENCES user(signupid),
venue_name TINYTEXT NOT NULL,
venue_desc LONGTEXT NOT NULL,
venue_phone int(12) NOT NULL);

INSERT INTO `venue`(`venue_id`, `signupid`, `venue_name`, `venue_desc`, `venue_phone`) VALUES (1,1,'St Lucia Court','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
',0435661027)