-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	4.1.19-community-nt


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema autobuses
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ autobuses;
USE autobuses;

--
-- Table structure for table `autobuses`.`coordenadasjereztrebujena`
--

DROP TABLE IF EXISTS `coordenadasjereztrebujena`;
CREATE TABLE `coordenadasjereztrebujena` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `longitud` float NOT NULL default '0',
  `latitud` float NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autobuses`.`coordenadasjereztrebujena`
--

/*!40000 ALTER TABLE `coordenadasjereztrebujena` DISABLE KEYS */;
INSERT INTO `coordenadasjereztrebujena` (`id`,`longitud`,`latitud`) VALUES 
 (1,-6.14674,36.6991),
 (2,-6.14602,36.6998),
 (3,-6.14793,36.7039),
 (4,-6.15006,36.7087),
 (5,-6.1518,36.7118),
 (6,-6.15137,36.7339),
 (7,-6.15862,36.7461),
 (8,-6.16704,36.7639),
 (9,-6.17312,36.777),
 (10,-6.17373,36.7879),
 (11,-6.17118,36.7963),
 (12,-6.16946,36.806),
 (13,-6.16492,36.8168),
 (14,-6.16276,36.8302),
 (15,-6.1665,36.8418),
 (16,-6.16781,36.8565),
 (17,-6.17023,36.8609),
 (18,-6.17202,36.8634),
 (19,-6.17522,36.8684),
 (20,-6.17612,36.8684);
/*!40000 ALTER TABLE `coordenadasjereztrebujena` ENABLE KEYS */;


--
-- Table structure for table `autobuses`.`coordenadastrebujenajerez`
--

DROP TABLE IF EXISTS `coordenadastrebujenajerez`;
CREATE TABLE `coordenadastrebujenajerez` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `longitud` float NOT NULL default '0',
  `latitud` float NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autobuses`.`coordenadastrebujenajerez`
--

/*!40000 ALTER TABLE `coordenadastrebujenajerez` DISABLE KEYS */;
INSERT INTO `coordenadastrebujenajerez` (`id`,`longitud`,`latitud`) VALUES 
 (1,-6.17612,36.8684),
 (2,-6.17522,36.8684),
 (3,-6.17202,36.8634),
 (4,-6.17023,36.8609),
 (5,-6.16781,36.8565),
 (6,-6.1665,36.8418),
 (7,-6.16276,36.8302),
 (8,-6.16492,36.8168),
 (9,-6.16946,36.806),
 (10,-6.17118,36.7963),
 (11,-6.17373,36.7879),
 (12,-6.17312,36.777),
 (13,-6.16704,36.7639),
 (14,-6.15862,36.7461),
 (15,-6.15137,36.7339),
 (16,-6.1518,36.7118),
 (17,-6.15006,36.7087),
 (18,-6.14793,36.7039),
 (19,-6.14602,36.6998),
 (20,-6.14674,36.6991);
/*!40000 ALTER TABLE `coordenadastrebujenajerez` ENABLE KEYS */;


--
-- Table structure for table `autobuses`.`jereztrebujena`
--

DROP TABLE IF EXISTS `jereztrebujena`;
CREATE TABLE `jereztrebujena` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `horario` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autobuses`.`jereztrebujena`
--

/*!40000 ALTER TABLE `jereztrebujena` DISABLE KEYS */;
INSERT INTO `jereztrebujena` (`id`,`horario`) VALUES 
 (1,800),
 (2,1215),
 (3,1345),
 (4,1515),
 (5,2015),
 (6,2215);
/*!40000 ALTER TABLE `jereztrebujena` ENABLE KEYS */;


--
-- Table structure for table `autobuses`.`trebujenajerez`
--

DROP TABLE IF EXISTS `trebujenajerez`;
CREATE TABLE `trebujenajerez` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `horario` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autobuses`.`trebujenajerez`
--

/*!40000 ALTER TABLE `trebujenajerez` DISABLE KEYS */;
INSERT INTO `trebujenajerez` (`id`,`horario`) VALUES 
 (1,700),
 (2,900),
 (3,1250),
 (4,1420),
 (5,1600),
 (6,2120);
/*!40000 ALTER TABLE `trebujenajerez` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
