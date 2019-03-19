/*
SQLyog Ultimate v8.32 
MySQL - 5.6.24 : Database - dare-u
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dare-u` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `dare-u`;

/*Table structure for table `shop_admin` */

DROP TABLE IF EXISTS `shop_admin`;

CREATE TABLE `shop_admin` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL COMMENT '用户名',
  `name` varchar(50) NOT NULL COMMENT '名字',
  `password` char(50) NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `shop_admin` */

insert  into `shop_admin`(`id`,`username`,`name`,`password`) values (1,'dareu','叶志国','123'),(2,'admin','叶志国','123'),(3,'user','叶志国','123');

/*Table structure for table `shop_goods` */

DROP TABLE IF EXISTS `shop_goods`;

CREATE TABLE `shop_goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sn` varchar(10) NOT NULL COMMENT '商品编号',
  `name` varchar(150) NOT NULL COMMENT '商品名字',
  `price` decimal(10,0) NOT NULL COMMENT '价格',
  `stock` int(10) unsigned NOT NULL COMMENT '库存量',
  `thumb` varchar(150) NOT NULL COMMENT '预览图',
  `list` varchar(255) NOT NULL COMMENT '商品详情',
  `recommend` varchar(20) NOT NULL COMMENT 'yes  and   no',
  `shop` varchar(10) DEFAULT NULL COMMENT 'yes  and   no',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

/*Data for the table `shop_goods` */

insert  into `shop_goods`(`id`,`sn`,`name`,`price`,`stock`,`thumb`,`list`,`recommend`,`shop`) values (1,'001','达尔优EM925 Pro 游戏鼠标双模版','309',99,'2007-12/31/1199117895.png','达尔优','yes','yes'),(4,'002','达尔优EM925 Pro 游戏鼠标 12000DPI版','599',51211,'2007-12/31/1199117919.jpg','达尔优','yes',NULL),(5,'003','达尔优EM925 Pro 游戏鼠标 古铜版','366',4554,'2007-12/31/1199117926.jpg','达尔优','yes',NULL),(6,'004','达尔优EM915火影忍者版游戏鼠标','419',1000,'2007-12/31/1199117931.jpg','达尔优','yes',NULL),(7,'005','达尔优EM925 Pro 游戏鼠标 黑色版','359',1000,'2007-12/31/1199117940.jpg','达尔优','yes',NULL),(8,'006','达尔优EM905火影忍者版游戏鼠标','369',1000,'2007-12/31/1199117949.jpg','达尔优','yes','yes'),(9,'007','达尔优EM925钻石版游戏鼠标','899',1000,'2007-12/31/1199117964.jpg','达尔优','yes',NULL),(10,'008','达尔优EM915版游戏鼠标(白色)','299',1000,'2007-12/31/1199117970.jpg','达尔优','yes','no'),(11,'009','达尔优EM915版游戏鼠标(黑色)','299',1000,'2007-12/31/1199117984.jpg','达尔优','yes','no'),(12,'010','达尔优EM905白色版游戏鼠标','269',1000,'2007-12/31/1199117990.jpg','达尔优','yes',NULL),(13,'011','达尔优EM905游戏鼠标','229',1000,'2007-12/31/1199118000.jpg','达尔优','yes',NULL),(14,'012','达尔优EK822机械键盘','399',1000,'2007-12/31/1199118014.jpg','达尔优','yes',NULL),(15,'013','达尔优EK820-104key有线机械键盘','499',1000,'2007-12/31/1199118021.jpg','达尔优','yes',NULL),(16,'014','达尔优EK820-87Key有线机械键盘','549',1000,'2007-12/31/1199118036.jpg','达尔优','yes',NULL),(17,'015','达尔优EK820-87Key  有线/蓝牙双模版机械键盘','599',1000,'2007-12/31/1199118044.jpg','达尔优','yes','no'),(18,'016','达尔优EK820-68Key  有线/蓝牙双模版机械键盘','620',1000,'2007-12/31/1199118059.jpg','达尔优','yes',NULL),(19,'017','达尔优EK835机械键盘','488',1000,'2007-12/31/1199118066.jpg','达尔优','yes',NULL),(20,'018','达尔优EK812机械键盘','356',1000,'2007-12/31/1199118073.jpg','达尔优','yes',NULL),(21,'019','达尔优EK812机械键盘','1099',1000,'2007-12/31/1199118089.jpg','达尔优','yes',NULL),(22,'020','达尔优EK810 87Key火影忍者版机械键盘','1999',1000,'2007-12/31/1199118098.jpg','达尔优','yes',NULL),(23,'021','达尔优EK855火影忍者版键盘','1999',1000,'2007-12/31/1199118112.jpg','达尔优','yes','no'),(24,'022','达尔优EK825 113key 机械游戏键盘','2299',1000,'2007-12/31/1199118121.jpg','达尔优','yes',NULL),(25,'023','达尔优EK815 104键RGB版机械键盘','2999',1000,'2007-12/31/1199118147.jpg','达尔优','yes','no'),(26,'024','达尔优EK815机械键盘','899',1000,'2007-12/31/1199118161.jpg','达尔优','yes',NULL),(27,'025','达尔优S600PRO 机械键盘','3999',1000,'2007-12/31/1199118173.jpg','达尔优','yes',NULL),(28,'026','达尔优EH722钻石版游戏耳机','299',1000,'2007-12/31/1199118190.jpg','达尔优','yes',NULL),(29,'027','达尔优EH725游戏耳机','399',1000,'2007-12/31/1199118209.jpg','达尔优','yes',NULL),(30,'028','达尔优EH755游戏耳机','429',1000,'2007-12/31/1199118230.jpg','达尔优','yes',NULL),(31,'029','达尔优EH736火影忍者版耳机','499',1000,'2007-12/31/1199118221.jpg','达尔优','yes',NULL),(32,'030','达尔优进化者D3耳机7.1声道版本','699',1000,'2007-12/31/1199118237.jpg','达尔优','yes',NULL),(33,'031','达尔优进化者D3耳机','599',1000,'2007-12/31/1199118246.jpg','达尔优','yes',NULL),(34,'032','达尔优EK812混光版键鼠套装','99999',1000,'2007-12/31/1199118254.jpg','达尔优','yes',NULL);

/*Table structure for table `shop_user` */

DROP TABLE IF EXISTS `shop_user`;

CREATE TABLE `shop_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL COMMENT '用户名',
  `password` char(50) NOT NULL COMMENT '密码',
  `phone` char(11) NOT NULL DEFAULT '' COMMENT '联系电话',
  `address` varchar(255) NOT NULL DEFAULT '' COMMENT '收货地址',
  `consignee` varchar(50) NOT NULL DEFAULT '' COMMENT '收货人姓名',
  `email` varchar(50) DEFAULT '' COMMENT '邮箱',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `shop_user` */

insert  into `shop_user`(`id`,`username`,`password`,`phone`,`address`,`consignee`,`email`) values (1,'user','123','12345678911','广东省清远市南华工商学院','黄国针','18764865241@qq.com'),(2,'dere','123','12345678911','广东省清远市南华工商学院','潘屌龙','18764865241@qq.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
