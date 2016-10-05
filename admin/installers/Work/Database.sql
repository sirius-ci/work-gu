-- ----------------------------
-- Table structure for `works`
-- ----------------------------
CREATE TABLE `works` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `site` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `detail` longtext,
  `image` varchar(255) DEFAULT NULL,
  `order` int(10) unsigned NOT NULL DEFAULT '0',
  `language` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

