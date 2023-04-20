-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.27-MariaDB


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema veste_vc
--

CREATE DATABASE IF NOT EXISTS veste_vc;
USE veste_vc;

--
-- Definition of table `tbproduto`
--

DROP TABLE IF EXISTS `tbproduto`;
CREATE TABLE `tbproduto` (
  `idproduto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `produto` varchar(45) NOT NULL,
  `quantidade` int(10) unsigned NOT NULL,
  `idusuario` int(10) unsigned NOT NULL,
  `curtidas` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idproduto`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbproduto`
--

/*!40000 ALTER TABLE `tbproduto` DISABLE KEYS */;
INSERT INTO `tbproduto` (`idproduto`,`produto`,`quantidade`,`idusuario`,`curtidas`) VALUES 
 (1,'Zumbi Jean',0,0,0),
 (2,'Martin Jean',0,0,0),
 (3,'Lloyd Jean',0,0,0),
 (4,'Jaqueta Ryan',0,0,0),
 (5,'Camisa Kurt',0,0,0),
 (6,'Camisa Jude',0,0,0),
 (7,'Calça Mantis',0,0,0),
 (8,'Calção Bob',0,0,0),
 (9,'Jaqueta Barry',0,0,0);
/*!40000 ALTER TABLE `tbproduto` ENABLE KEYS */;


--
-- Definition of table `tbusuario`
--

DROP TABLE IF EXISTS `tbusuario`;
CREATE TABLE `tbusuario` (
  `idusuario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbusuario`
--

/*!40000 ALTER TABLE `tbusuario` DISABLE KEYS */;
INSERT INTO `tbusuario` (`idusuario`,`nome`,`email`,`cpf`,`senha`) VALUES 
 (1,'VanCalculating ','yatixi2447@luxiu2.com','51456267035','eKWiX171'),
 (2,'ClunkTheGrandiose','vepitas912@mainctu.com','42176334086','peccuG5Z'),
 (3,'Calculatingmann ','yotedax537@luxiu2.com','32610880014','WlwdaXha'),
 (4,'Calculatingstrom ','kodomem774@nefacility.com','8539482088','fpu7aKHO'),
 (5,'FrankelClunk ','cewokev765@latovic.com','30879729082','zxMhUse8'),
 (6,'Calculatinghae ','nebig12213@mainctu.com','72674715014','sXMlPolm'),
 (7,'DasCalculating ','geridi3378@luxiu2.com','72525907043','kIlwyHbm'),
 (8,'Clunkun','wapayax967@latovic.com','79067927007','tRTJpPR9'),
 (9,'Calculatingsson ','picec56374@mainctu.com','37686558061','usIrHWO1'),
 (10,'Clunkovski ','pokoyec508@luxiu2.com','83769602021','QXXXkbuS'),
 (11,'QuirkyCalculating ','hejifa7582@luxiu2.com','33513089066','l3xYwdBN'),
 (12,'Calculatingstein','yiwan29867@mainctu.com','98973632035','saUmdmxb'),
 (13,'CalnkNyogu ','cogeler843@mainctu.com','91670653099','p65jXCUM'),
 (14,'Leacalculating ','nopil14106@luxiu2.com','99920742058','djbXQ0G0'),
 (15,'ClunkOfMap','yodevag183@nefacility.com','51928250084','T5CuzTbN'),
 (16,'Clunkdesu ','lijodes185@nefacility.com','83931628078','tBKagL1e'),
 (17,'Calculatinglitz ','nosejav256@luxiu2.com','68197619026','X5LaYOrA'),
 (18,'VonCalculating','kanifig251@nefacility.com','68456976040','eJwhLO8R'),
 (19,'HideousClunk ','cakore7814@nefacility.com','37913045000','KHQyZqX3'),
 (20,'CalnkClung ','tawof48479@latovic.com','89016965092','ktT9TMk4'),
 (21,'clunkc4lcul471n6','xadog60973@latovic.com','10133884023','fXwPzFYx'),
 (22,'Clunkkeo ','yoxahi5294@mainctu.com','37853562004','S2U4jDcu'),
 (23,'CalcluNkng ','wojat10721@mainctu.com','8733617090','Ktikb6dC'),
 (24,'Calculatingsama','walamip744@luxiu2.com','23792161001','pyBAAl4f'),
 (25,'C4lnkClun6','piyit31614@nefacility.com','88014967020','8quywIlF'),
 (26,'Clunkoff ','lohey66166@mainctu.com','20799798096','B79lAcWL'),
 (27,'Xoyclunk ','hotos13776@latovic.com','63907853059','L5wn1Pph'),
 (28,'Clunksan','rakici7213@mainctu.com','52352653002','DqhDSciR'),
 (29,'TheShaggyCalculating ','codofi1028@mainctu.com','82266374060','ITF5drAe'),
 (30,'Calculatingchenko ','xidol87501@mainctu.com','74046872098','CTHHy2zb'),
 (31,'AnaLu','analu@gmail.com','1234','1234');
/*!40000 ALTER TABLE `tbusuario` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
