-- Drop Database if exists
DROP DATABASE IF EXISTS `twitterhashtag`;

-- creating database
CREATE DATABASE IF NOT EXISTS `twitterhashtag`;

-- use database
use `twitterhashtag`;

-- create table
CREATE TABLE IF NOT EXISTS `twitterhashtag`.`tweets`(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `tweet` text NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- inserting some values in table
INSERT INTO `twitterhashtag`.`tweets` (`tweet`, `created_at`, `modified_at`) VALUES
('Hello #we are here to find a #new thing with some #development', NOW(), NOW()),
('we are #new here to working on #php and its #frameworks like #laravel #codeigniter', NOW(), NOW()),
('Hello #Mr_Shoaib so we can working on #Twitter or a #TanserFlow', NOW(), NOW()),
('we are #new here', NOW(), NOW()),
('hello new #booy', NOW(), NOW()),
('nice one #tutorial', NOW(), NOW()),
('hello to the #future', NOW(), NOW());