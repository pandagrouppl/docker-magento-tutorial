CREATE TABLE IF NOT EXISTS `user` (
    `id` INT unsigned NOT NULL AUTO_INCREMENT,
    `email` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    `password` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;
