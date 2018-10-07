USE devops;
CREATE TABLE IF NOT EXISTS `devops_test` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `message` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`id`)
);

INSERT INTO `devops_test` VALUES (1, 'Heavy metal never dies');
