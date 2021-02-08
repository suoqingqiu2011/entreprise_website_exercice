# MySQL-Front 3.2  (Build 10.33)

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;

/*!40101 SET NAMES utf8 */;
/*!40103 SET TIME_ZONE='SYSTEM' */;

# Host: localhost    Database: systaconseilliu
# ------------------------------------------------------
# Server version 5.0.67-community-nt

#
# Table structure for table listemployes
#

DROP TABLE IF EXISTS `listemployes`;
CREATE TABLE `listemployes` (
  `EmployeID` int(8) NOT NULL auto_increment,
  `EmployeName` varchar(100) NOT NULL default '',
  `EmployePoste` varchar(100) NOT NULL default '',
  `EmployeImgPath1` varchar(200) default NULL,
  `EmployeImgPath2` varchar(200) default NULL,
  `EmployeNumTel` varchar(200) default NULL,
  `EmployeMail` varchar(100) default NULL,
  `EmployeCheck` int(5) default '0',
  `EmployeIntro` varchar(20000) NOT NULL default '',
  PRIMARY KEY  (`EmployeID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Dumping data for table listemployes
#

INSERT INTO `listemployes` VALUES (1,'Bill Gates','PRESIDENT','imgemploye/BillGates1.jpg','imgemploye/BillGates2.jpg','(206) 709-3100','billg@microsoft.com',1,'William « Bill » Henry Gates III, né le 28 octobre 1955 à Seattle, dans l\'État de Washington (États-Unis), est un informaticien et entrepreneur américain, pionnier dans le domaine de la micro-informatique. Il a fondé en 1975, à l\'âge de 20 ans, avec son ami Paul Allen, la société de logiciels de micro-informatique Micro-Soft (rebaptisée depuis Microsoft). Son entreprise acheta le système d\'exploitation QDOS pour en faire le MS-DOS, puis conçut le système d\'exploitation Windows, tous deux en situation de quasi-monopole mondial.\r\n\r\nIl est devenu, grâce au succès commercial de Microsoft, l\'homme le plus riche du monde de 1996 à 2007, ainsi qu\'en 2009, 2014 et 2015. Lorsqu\'il redevient l\'homme le plus riche du monde, selon le classement Bloomberg, en janvier 2014, sa fortune s\'élève à 78,5 milliards de dollars américains1,2. En 2016, le magazine Forbes le désigne également comme l\'homme le plus riche du monde. Sa fortune est estimée à 90 milliards de dollars américains3.\r\n\r\nLe 26 juillet 2017 le magazine Forbes classe Bill Gates comme le deuxième homme le plus riche du monde avec une fortune de 90.2 milliards de dollars américains, détrôné par le fondateur du site Amazon.com Jeff Bezos qui lui dispose d\'une fortune estimée à 90.7 milliards de dollars américains. Cela ne dura que quelques heures étant donné que Bill Gates prend à nouveau les rênes en devançant son concurrent de quelques millions de dollars américains.\r\n\r\nBill Gates se consacre depuis octobre 2007 à sa fondation humanitaire.');
INSERT INTO `listemployes` VALUES (2,'Warren Buffett','MANAGER','imgemploye/WarrenBuffett1.png','imgemploye/WarrenBuffett2.png','(206) 709-3100','info@gatesfoundation.org',1,'Warren Buffett (né le 30 août 1930 à Omaha) est un homme d\'affaires et investisseur américain. Surnommé « l\'oracle d\'Omaha », il fait partie des hommes les plus riches du monde depuis le début du xxie siècle.\r\n\r\nEn mars 2008, avec une fortune évaluée à 65 milliards de dollars américains, il était considéré comme l\'homme le plus riche au monde selon le classement annuel du magazine Forbes. En 2017, Forbes estime sa fortune à 75,6 milliards de dollars américains et est donc en deuxième place sur la liste des milliardaires du monde du magazine1.');
INSERT INTO `listemployes` VALUES (3,'Lakshmi Mittal','MANAGER','imgemploye/LakshmiMittal1.png','imgemploye/LakshmiMittal2.png','(Tel) +44 20 7629 7988','ceoemail@connectotel.com',1,'Lakshmi Mittal, de son nom complet Lakshmi Narayan Mittal , également connu sous le nom de Lakshmi Niwas Mittal (लक्ष्मी निवास मित्तल), est un homme d\'affaires indien spécialisé dans l\'industrie sidérurgique et président d\'ArcelorMittal. Il est né le 2 septembre 1950 à Sadulpur, au Rajasthan, en Inde. Hindouiste, il est originaire de la caste Agrawal (en) des Marwaris (commerçants du Nord-Est du Rajasthan), dont le code d\'honneur place l\'enrichissement personnel envers et contre tout comme condition de réussite de la vie terrestre1.\r\n\r\nLakshmi Mittal se spécialise, tout d\'abord, dans le rachat d\'entreprises sidérurgiques au bord de la faillite ; les acquérant à bas prix, il les modernise et les restructure pour les remettre en état de fonctionnement, ce qui augmente considérablement leur valeur. Mittal a procédé ainsi notamment dans les pays de l\'ex-Union soviétique, ainsi qu\'au Mexique et en Indonésie.\r\n\r\nCréateur et actionnaire principal (88 %) de la Mittal Steel Company NV, Lakshmi Mittal dirige le plus gros producteur d\'acier au monde, secondé par son fils Aditya.\r\n\r\nD\'après le magazine Forbes de mars 20142, sa fortune est estimée à 13,5 milliards de dollars américains ce qui fait de Lakshmi Mittal le 79e homme le plus riche du monde2. En 2008, il possédait 38,4 milliards3.\r\n\r\nDepuis 2008, Lakshmi Mittal fait partie du conseil d\'administration de la banque d\'investissement américaine Goldman Sachs4, spécialisée dans la spéculation et le conseil.');
INSERT INTO `listemployes` VALUES (4,'Sheldon Adelson','RESEARCH CONSULTANT','imgemploye/SheldonAdelson1.png','imgemploye/SheldonAdelson2.png','(781) 972-5950','ceoemail@connectotel.com',1,'Sheldon Gary Adelson (pronounced /ˈædəlsən/; born August 4, 1933) is an American business magnate, investor, and philanthropist. He is the founder, chairman and chief executive officer of Las Vegas Sands Corporation, which owns the Marina Bay Sands in Singapore, and is the parent company of Venetian Macao Limited, which operates The Venetian Resort Hotel Casino and the Sands Expo and Convention Center. He also owns the Israeli daily newspaper Israel Hayom, and the Las Vegas Review-Journal.[2] Adelson, a lifelong donor and philanthropist to a variety of causes, founded with his wife\'s initiative the Adelson Foundation. He is a member of the Republican Party.\r\nAs of August 2016, Adelson was listed by Forbes as having a fortune of US$32.2 billion.[3] He is a major contributor to Republican Party candidates.[4][5] He has been the largest donor, of any party, in both the 2012 and 2016 presidential campaigns. He was the largest donor to Donald Trump\'s 2016 presidential campaign with a total of $25 million.');
INSERT INTO `listemployes` VALUES (5,'Bernard Arnault','RESEARCH ASSITANT','imgemploye/BernardArnault1.png','imgemploye/BernardArnault2.png','01 44 13 22 22',' bernard.arnault@gmx.com',1,'Bernard Arnault, né Bernard Jean Étienne Arnault le 5 mars 1949 à Roubaix dans le Nord, est un homme d\'affaires français, propriétaire du groupe de luxe LVMH, dont il est le président-directeur général. Il est à la tête, entre autres, du Groupe familial Arnault, du Groupe Arnault et du holding Christian Dior.\r\n\r\nAvec des actifs évalués à 41,5 milliards de dollars américains en 2016 (+22 % vs 2015)1, Bernard Arnault est la première fortune de France2 et la 11e fortune mondiale selon le magazine Forbes3.');

#
# Table structure for table listmessage
#

DROP TABLE IF EXISTS `listmessage`;
CREATE TABLE `listmessage` (
  `MessageID` int(8) NOT NULL auto_increment,
  `MessageName` varchar(100) NOT NULL default '',
  `MessageMail` varchar(100) default NULL,
  `MessageSujet` varchar(200) default NULL,
  `MessageText` varchar(2000) default NULL,
  `MessageTime` varchar(100) default NULL,
  PRIMARY KEY  (`MessageID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Dumping data for table listmessage
#

INSERT INTO `listmessage` VALUES (1,'sad','15615651@gmail.com','dsa','asdsdsd','2017-08-29 10:37:28');
INSERT INTO `listmessage` VALUES (2,'123','asdsadsdsd@gmail.com','sd','sdsdsdsqdqd','2017-08-29 10:37:57');
INSERT INTO `listmessage` VALUES (3,'wqe','wqe9@gmail.com','123`','hahahahhahaha','2017-08-29 10:41:31');

#
# Table structure for table listpartner
#

DROP TABLE IF EXISTS `listpartner`;
CREATE TABLE `listpartner` (
  `PartnerID` int(8) NOT NULL auto_increment,
  `PartnerName` varchar(200) NOT NULL default '',
  `PartnerImgPath` varchar(200) default NULL,
  `PartnerNumTel` varchar(100) default NULL,
  `PartnerMail` varchar(100) default NULL,
  `PartnerAdresse` varchar(200) default NULL,
  `PartnerSite` varchar(500) default NULL,
  `PartnerCheck` int(5) default '0',
  `PartnerRegion` varchar(100) NOT NULL,
  `PartnerType` varchar(100) NOT NULL,
  PRIMARY KEY  (`PartnerID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

#
# Dumping data for table listpartner
#

INSERT INTO `listpartner` VALUES (1,'Acon - Empower Results','imgpartner/aon_logo.png','(Shanghai) +86.21.2306 6688 (Beijing) +86.10.6587 9700',NULL,NULL,'http://www.aon.com/china/en/default.jsp',1,'CHINE','MANAGEMENT');
INSERT INTO `listpartner` VALUES (2,'A.T. Kearney - Global Management Consulting Firm','imgpartner/atkearney.png','+33 1 56625555',NULL,NULL,'https://www.atkearney.com/',1,'US','MANAGEMENT');
INSERT INTO `listpartner` VALUES (3,'BearingPoint - Business Consulting firm','imgpartner/bearingpoint.png','+33 1 58863000',NULL,NULL,'https://www.bearingpoint.com/fr-fr/?noRedirect=1',1,'US','TOURISME');
INSERT INTO `listpartner` VALUES (4,'Logiciels SAP - Plus de croissance','imgpartner/SAP.png','+33 8 05800023',NULL,NULL,'https://www.sap.com/index.html',1,'US','INFORMATIQUE');
INSERT INTO `listpartner` VALUES (5,'Mercer France | Catalyseur de l\'Engagement Humain','imgpartner/mercer.png','+33 1 55213500',NULL,NULL,'https://www.mercer.fr/',1,'FRANCE','TOURISME');
INSERT INTO `listpartner` VALUES (6,'Bouygue - Telephones, Internet et Forfaits Mobiles','imgpartner/bouygue.png','(Service client) :1064  (Service commercial) : 3106',NULL,NULL,'https://www.bouyguestelecom.fr/',1,'FRANCE','INFORMATIQUE');
INSERT INTO `listpartner` VALUES (7,'SFR - Téléphone, Forfait Mobile, Internet + Fibre, Sport, Play, Presse ...','imgpartner/SFR.png','(Service client) : 1099',NULL,NULL,'https://www.sfr.fr/',1,'FRANCE','INFORMATIQUE');
INSERT INTO `listpartner` VALUES (8,'ORANGE - téléphones, forfaits, Internet, actualité, sport, video','imgpartner/orange.png','(Service client) : 3900',NULL,NULL,'https://boutique.orange.fr/?&utm_medium=cpc&gclid=Cj0KCQjw_o7NBRDgARIsAKvAgt2LQK44U_GpKr2dqGg6rpkOq4LLLTUM55XdMc4BAvS9pJrz8wgmiwsaAr_bEALw_wcB&ptid=aud-298035622744:kwd-12374690&ploc=9056227',1,'FRANCE','INFORMATIQUE');
INSERT INTO `listpartner` VALUES (9,'FREE','imgpartner/Free.png','(Service client) : 1044',NULL,NULL,'http://www.free.fr/freebox/index.html',1,'FRANCE','INFORMATIQUE');
INSERT INTO `listpartner` VALUES (10,'HUAWEI - Smartphones, tablettes, ordinateurs, montres et haut débit ','imgpartner/huawei.png','+33 800972285 ',NULL,NULL,'http://consumer.huawei.com/fr/',1,'CHINE','INFORMATIQUE');
INSERT INTO `listpartner` VALUES (11,'ISTP France - Management en Entreprise','imgpartner/istp.png','+33 477911630',NULL,NULL,'http://www.istp-france.com/fr/istp-management-en-entreprise-label-badge.html',1,'FRANCE','MANAGEMENT');
INSERT INTO `listpartner` VALUES (12,'Office National du Tourisme de Chine (CNTA)','imgpartner/tourisme_chine.png','(Tél) : +33 156591010  (Fax) : +33 153753288',NULL,NULL,'http://www.otchine.com/',1,'CHINE','TOURISME');
INSERT INTO `listpartner` VALUES (13,'Agence Chine Tourisme','imgpartner/agence_chine.png','(Tél) : +33 142787778  (Fax) : +33 143523580',NULL,NULL,'http://www.agencechinetourisme.net/fr/',1,'CHINE','TOURISME');
INSERT INTO `listpartner` VALUES (14,'Informatique Entreprise Paris - Novatim - Informatique des PME‎','imgpartner/novatim.png','(Ile de France) +33 173203102\r\n(Rhône-Alpes) +33 469001608\r\n(Midi-Pyrénées) +33 524001055',NULL,NULL,'http://www.novatim.com/pack-infogerance-pme/?gclid=CjwKCAjwxJnNBRAMEiwA8X_-QVv7RoWrmRdHWI2xSD4at8pz9G7AQtSDliGIOmXySl8tSXAdfZev4xoCCzAQAvD_BwE',1,'CHINE','INFORMATIQUE');
INSERT INTO `listpartner` VALUES (15,'Cabinet de conseil en Chine - Shanghai - Pékin - Hong Kong‎','imgpartner/daxueconseil.png','+86 (0)21 538 603 80\r\n   +86 186 1637 8475','dx@daxueconsulting.com',NULL,'http://daxueconseil.fr/?gclid=CjwKEAjwxJnNBRCMqNXM6vKAq1wSJADxf_5BF4Kq6TQguB-PfQfaSPP1U6Gq44AwydVYsWP-EkouRhoCPs_w_wcB',1,'CHINE','MANAGEMENT');

#
# Table structure for table newsscrolling
#

DROP TABLE IF EXISTS `newsscrolling`;
CREATE TABLE `newsscrolling` (
  `NewsID` int(8) NOT NULL auto_increment,
  `NewsName` varchar(200) NOT NULL default '',
  `NewsImgPath` varchar(200) default NULL,
  `NewsTextDebut` varchar(500) default NULL,
  `NewsSite` varchar(500) default NULL,
  `NewsCheck` int(5) default '0',
  PRIMARY KEY  (`NewsID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

#
# Dumping data for table newsscrolling
#

INSERT INTO `newsscrolling` VALUES (1,'mayun','imgnouvelle/pic01.png','Jack Ma has built e-commerce firm Alibaba into a behemoth','http://www.theeastafrican.co.ke/business/Jack-Ma-Firms-should-compete-on-value-not-prices/2560-4041874-prd3ky/index.html',1);
INSERT INTO `newsscrolling` VALUES (2,'parkingaeroport','imgnouvelle/pic02.png','Choisissez votre parking pas cher pour l\'Aéroport Roissy Charles-de-Gaulle (CDG)','https://www.parkingsdeparis.com/lieu/aeroport_roissy_CDG_fr.html?lt=49.014146&ln=2.541876&z=11&r=15&df=2017-08-28+10:00&dt=2017-08-28+13:00&ft=1',1);
INSERT INTO `newsscrolling` VALUES (3,'30ansSFR','imgnouvelle/pic03.png','SFR fête ses 30 ans. L’âge de se réinventer','https://fr.news.yahoo.com/sfr-f%C3%AAte-30-ans-l-083000143.html',1);
INSERT INTO `newsscrolling` VALUES (4,'DanemarkJournaliste','imgnouvelle/pic04.png','Danemark: le propriétaire du sous-marin a jeté le corps de la journaliste à la mer','https://fr.news.yahoo.com/danemark-propri%C3%A9taire-marin-jet%C3%A9-corps-journaliste-%C3%A0-mer-211657367.html',1);
INSERT INTO `newsscrolling` VALUES (5,'TotalPromos','imgnouvelle/pic05.png','PROFITEZ DES PROMOS ET BONS DE RÉDUCTION SUR LES HUILES MOTEUR ELF','http://www.total.fr/promos-et-bons-plans/offres-vehicule/promos-huiles-elf.html',1);
INSERT INTO `newsscrolling` VALUES (6,'AssuranceAuto','imgnouvelle/pic06.png','Toutes les pistes pour payer moins cher votre assurance auto','http://leparticulier.lefigaro.fr/jcms/c_38012/toutes-les-pistes-pour-payer-moins-cher-votre-assurance-auto',1);
INSERT INTO `newsscrolling` VALUES (7,'NewFirebug','imgnouvelle/pic07.png','Fresh new Firebug 2 has been released and','https://blog.getfirebug.com/2014/06/10/firebug-2-0/',1);
INSERT INTO `newsscrolling` VALUES (8,'SarkozyPingouin','imgnouvelle/pic08.png','Découvrez la réaction de Nicolas Sarkozy quand il a découvert la chanson \"Le Pingouin\"','https://fr.news.yahoo.com/d%C3%A9couvrez-r%C3%A9action-nicolas-sarkozy-d%C3%A9couvert-113542807.html',0);
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
