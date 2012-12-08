CREATE  TABLE IF NOT EXISTS `authors` (
  `id` INT UNSIGNED NOT NULL ,
  `name` VARCHAR(50) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

CREATE  TABLE IF NOT EXISTS `calendars` (
  `id` INT UNSIGNED NOT NULL ,
  `date` DATE NOT NULL ,
  `message` TEXT NOT NULL ,
  `author_id` INT UNSIGNED NOT NULL ,
  `comment` TEXT NOT NULL ,
  `image` MEDIUMBLOB NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `date_unique` (`date` ASC) )
ENGINE = InnoDB;
