# Create the Database
CREATE DATABASE PEMS;

# Use the newly created database
USE PEMS;
# Create the table for users.
# Users need an ID,UserName, UserEmail, Password, Date for when active
CREATE TABLE `PEMS_users` (
  `id` int(11) NOT NULL auto_increment,
  `userName` varchar(32) collate utf8_unicode_ci NOT NULL default '',
  `password` varchar(32) collate utf8_unicode_ci NOT NULL default '',
  `email` varchar(255) collate utf8_unicode_ci NOT NULL default '',
  `registrationIP` varchar(15) collate utf8_unicode_ci NOT NULL default '', #keep track of taken user names.
  `date` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `userName` (`userName`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


