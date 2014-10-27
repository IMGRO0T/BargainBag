CREATE DATABASE bargainbag;

using bargainbag;  


CREATE TABLE IF NOT EXISTS `amazon` (
  `product_num` INT NOT NULL,
  `product_name` VARCHAR(100) NOT NULL,
  `description` VARCHAR(500) NOT NULL,
  `inventory` INT NOT NULL,
  `price` DECIMAL(18,2) NOT NULL,
  `image` VARCHAR(100) NOT NULL,
  `link` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`product_num`));


CREATE TABLE IF NOT EXISTS `bestbuy` (
  `product_num` INT NOT NULL,
  `product_name` VARCHAR(100) NOT NULL,
  `description` VARCHAR(500) NOT NULL,
  `inventory` INT NOT NULL,
  `price` DECIMAL(18,2) NOT NULL,
  `image` VARCHAR(100) NOT NULL,
  `link` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`product_num`));
  
  