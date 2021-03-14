/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.3.25-MariaDB-0ubuntu0.20.04.1 : Database - belajardb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `idcategory` int(10) NOT NULL AUTO_INCREMENT,
  `nmcategory` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idcategory`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `category` */

insert  into `category`(`idcategory`,`nmcategory`) values 
(1,'PHP'),
(2,'CodeIgniter'),
(3,'jQuery'),
(4,'EasyUI');

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `idposts` int(20) NOT NULL AUTO_INCREMENT,
  `titleposts` varchar(255) NOT NULL,
  `slugposts` varchar(255) NOT NULL,
  `bodyposts` text NOT NULL,
  `categorypost` int(10) DEFAULT NULL,
  `dateposts` datetime DEFAULT NULL,
  `thumbnailposts` varchar(50) DEFAULT NULL,
  `userposts` int(10) DEFAULT NULL,
  PRIMARY KEY (`idposts`),
  KEY `slug` (`slugposts`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `posts` */

insert  into `posts`(`idposts`,`titleposts`,`slugposts`,`bodyposts`,`categorypost`,`dateposts`,`thumbnailposts`,`userposts`) values 
(1,'Cara Membuat Web Dinamis Dengan PHP dan MySQL','Cara Membuat Web Dinamis Dengan PHP dan MySQL','<h4>Bagaimana Membuat Web Dinamis?</h4>\r\n<p>Web dinamis dibangun menggunakan bahasa pemrograman yang mendukung pengembangan web seperti PHP, Javascript, Java dan python. Sedangkan untuk struktur halaman tetap menggunakan bahasa markah HTML dan CSS.</p>\r\n<p>Secara umum web dinamis memiliki fitur penyimpanan data yang kita sebut database, fungsinya untuk menyimpan semua data atau informasi dalam website itu sendiri. Terdapat banyak jenis database yang biasanya digunakan seperti postgreSQL, Oracle, dan MySQL.</p>\r\n<p>Saat ini khusus di indonesia saya melihat masih banyak yang menggunakan bahasa pemrograman PHP dengan framework yang berkembang yang cukup memudahkan para developer untuk mengembangkan web dari skala kecil hingga besar.</p>',1,'2021-03-01 14:16:45','img_car.jpg',1),
(2,'Say it isn\'t so!','say-it-isnt-so','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n',2,'2021-03-03 14:16:50','img_car.jpg',1),
(3,'Caffeination, Yes!','caffeination-yes','World\'s largest coffee shop open onsite nested coffee shop for staff only.',3,'2021-03-10 14:16:55','img_car.jpg',1),
(4,'Halo My Blog','halo-my-blog','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.',4,'2021-03-14 14:17:17','img_car.jpg',1);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `userid` int(10) NOT NULL AUTO_INCREMENT,
  `login` varchar(15) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(50) NOT NULL DEFAULT '',
  `useremail` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `SECONDARY` (`login`,`password`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`userid`,`login`,`password`,`username`,`useremail`) values 
(1,'admin','*23AE809DDACAF96AF0FD78ED04B6A265E05AA257','Administrator','admin@gmail.com');

/*Table structure for table `users_session` */

DROP TABLE IF EXISTS `users_session`;

CREATE TABLE `users_session` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT 0,
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `users_session` */

insert  into `users_session`(`id`,`ip_address`,`timestamp`,`data`) values 
('c5g9ppof8772k4ah0392aspjpi88sd91','::1',1615202469,'__ci_last_regenerate|i:1615202469;'),
('vnc8f9bldl873ujacdip8lim2r6h88fs','::1',1615373807,'__ci_last_regenerate|i:1615373807;'),
('pbqeiak1g1hcs038urulq4ib3elbm7rc','::1',1615511147,'__ci_last_regenerate|i:1615510916;'),
('i923amao5m65du9r8qv0tiqop4ur6v6e','::1',1615511490,'__ci_last_regenerate|i:1615511490;'),
('tp0gcmg82706idpvjo94r8tj2sa3oupv','::1',1615691193,'__ci_last_regenerate|i:1615691193;'),
('ppqgtos14umu71q3ob5kam2pgkaldthv','::1',1615715364,'__ci_last_regenerate|i:1615715364;');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
