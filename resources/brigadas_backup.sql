

CREATE TABLE `brigada` (
  `ID_BRIGADA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_INFO` int(11) DEFAULT NULL,
  `PROVINCIA_BRI` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `CANTON_BRI` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `PARROQUIA_BRI` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `COMUNIDAD_BRI` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `PEDIATRIA` int(11) DEFAULT NULL,
  `ODONTOLOGIA` int(11) DEFAULT NULL,
  `GENERAL` int(11) DEFAULT NULL,
  `OPTOMETRIA` int(11) DEFAULT NULL,
  `DERMATOLOGIA` int(11) DEFAULT NULL,
  `GINECOLOGIA` int(11) DEFAULT NULL,
  `CARDIOLOGIA` int(11) DEFAULT NULL,
  `TRAUMATOLOGIA` int(11) DEFAULT NULL,
  `OFTALMOLOGIA` int(11) DEFAULT NULL,
  `PIE` int(11) DEFAULT NULL,
  `MANO` int(11) DEFAULT NULL,
  `LEPORINO` int(11) DEFAULT NULL,
  `HENDIDO` int(11) DEFAULT NULL,
  `TOTAL_PACIEN` int(11) DEFAULT NULL,
  `RCP` int(11) DEFAULT NULL,
  `HBB` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_BRIGADA`),
  KEY `FK_RELATIONSHIP_1` (`ID_INFO`),
  CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`ID_INFO`) REFERENCES `info_bri` (`ID_INFO`)
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf8;

INSERT INTO brigada VALUES("11","11","Bolívar","Guaranda","Negro Yaco","Negro Yaco","100","100","770","200","0","80","0","0","0","0","0","0","0","1250","0","0");
INSERT INTO brigada VALUES("12","11","Tungurahua","Ambato","Mocha","Mocha","50","50","384","100","0","40","0","0","0","0","0","0","0","624","0","0");
INSERT INTO brigada VALUES("13","11","Cotopaxi","Latacunga","Chamba Pongo","Chamba Pongo","50","50","384","100","0","40","0","0","0","0","0","0","0","624","0","0");
INSERT INTO brigada VALUES("14","12","Imbabura","Ibarra","La Esperanza","Paniquinrra","50","50","320","100","0","40","0","0","0","0","0","0","0","560","0","0");
INSERT INTO brigada VALUES("15","12","Imbabura","Ibarra","Ambuqui","Ambuqui","50","50","320","100","0","40","0","0","0","0","0","0","0","560","0","0");
INSERT INTO brigada VALUES("16","12","Carchi","El Ángel","Santa Ana","Santa Ana","50","50","320","100","0","40","0","0","0","0","0","0","0","560","0","0");
INSERT INTO brigada VALUES("17","12","Pichincha","Cayambe","Canamballe","Canamballe","50","50","320","100","0","40","0","0","0","0","0","0","0","560","0","0");
INSERT INTO brigada VALUES("18","12","Carchi","El Ángel","Estación Carchi","Estación Carchi","50","50","320","100","0","40","0","0","0","0","0","0","0","560","0","0");
INSERT INTO brigada VALUES("19","13","Tungurahua","Baños","Baños","Baños","100","100","770","200","0","80","0","0","0","0","0","0","0","1250","0","0");
INSERT INTO brigada VALUES("20","13","Chimborazo","Alausí","Alausí","Tixan","50","50","384","100","0","40","0","0","0","0","0","0","0","624","0","0");
INSERT INTO brigada VALUES("21","13","Bolívar","Guaranda","Guaranda","Surupugio","50","50","384","100","0","40","0","0","0","0","0","0","0","624","0","0");
INSERT INTO brigada VALUES("22","14","Azuay","Gualacéo","San Juan","San Juan","200","0","200","0","0","200","0","0","0","0","0","0","0","600","0","0");
INSERT INTO brigada VALUES("23","14","Azuay","Gualacéo","San Juan","Casuguan","200","0","200","0","0","200","0","0","0","0","0","0","0","600","0","0");
INSERT INTO brigada VALUES("24","15","Azuay","Gualacéo","Jadán","Jadán","0","250","200","0","0","0","0","0","0","0","0","0","0","450","0","0");
INSERT INTO brigada VALUES("25","15","Azuay","Sigsig","San Bartolomé","San Bartolomé","0","250","200","0","0","0","0","0","0","0","0","0","0","450","0","0");
INSERT INTO brigada VALUES("26","16","Galápagos","San Cristóbal","Puerto Baquerizo Moreno","Puerto Baquerizo Moreno","50","0","150","0","0","0","25","50","25","0","0","0","0","300","0","0");
INSERT INTO brigada VALUES("27","16","Galápagos","San Cristóbal","El Progreso","El Progreso","50","0","150","0","0","0","25","50","25","0","0","0","0","300","0","0");
INSERT INTO brigada VALUES("28","17","Azuay","Cuenca","Cuenca","Cuenca","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","24");
INSERT INTO brigada VALUES("29","17","Chimborazo","Colta","Colta","Colta","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","60");
INSERT INTO brigada VALUES("30","18","Chimborazo","Alausí","Tixan","Tixan","0","0","325","150","0","0","0","0","0","0","0","0","0","475","0","0");
INSERT INTO brigada VALUES("31","18","Bolívar","Caluma","Caluma","Caluma","0","0","325","150","0","0","0","0","0","0","0","0","0","475","0","0");
INSERT INTO brigada VALUES("32","19","Imbabura","Ibarra","Ibarra","Ibarra","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","30");
INSERT INTO brigada VALUES("33","20","Azuay","Cuenca","Nabón","Nabón","0","200","500","0","0","0","0","0","0","0","0","0","0","700","0","0");
INSERT INTO brigada VALUES("34","21","Sto. Domingo de los Tsachilas","Santo Domingo","Santo Domingo","Santo Domingo","0","150","250","0","0","0","0","0","1000","0","0","0","0","1400","0","0");
INSERT INTO brigada VALUES("35","22","Bolívar","Guaranda","Guanujo","Joyacoto","0","100","300","120","0","0","0","0","0","0","0","0","0","520","0","0");
INSERT INTO brigada VALUES("36","22","Bolívar","Guaranda","Guanujo","Quindigua Central","0","60","200","100","0","0","0","0","0","0","0","0","0","360","0","0");
INSERT INTO brigada VALUES("37","23","Azuay","Cuenca","San Bartolomé","San Bartolomé","0","100","225","0","0","0","0","0","0","0","0","0","0","325","0","0");
INSERT INTO brigada VALUES("38","23","Pichincha","Quito","Machinguí","San Juan","0","100","225","0","0","0","0","0","0","0","0","0","0","325","0","0");
INSERT INTO brigada VALUES("39","24","Sto. Domingo de los Tsachilas","Santo Domingo","Santo Domingo","Santo Domingo","0","0","0","2400","0","0","0","0","0","0","0","0","0","2400","0","0");
INSERT INTO brigada VALUES("40","25","Azuay","Cuenca","Cuenca","Cuenca","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","48");
INSERT INTO brigada VALUES("41","26","Napo","Tena","Tena","Alto Pano","0","0","150","100","0","0","0","0","0","0","0","0","0","250","0","0");
INSERT INTO brigada VALUES("42","26","Napo","Tena","Lagarto Cocha","Lagarto Cocha","0","0","150","100","0","0","0","0","0","0","0","0","0","250","0","0");
INSERT INTO brigada VALUES("43","26","Napo","Tena","Campanocha","Campanocha","0","0","150","100","0","0","0","0","0","0","0","0","0","250","0","0");
INSERT INTO brigada VALUES("44","26","Napo","Tena","Campococha","Campococha","0","0","150","100","0","0","0","0","0","0","0","0","0","250","0","0");
INSERT INTO brigada VALUES("45","27","Imbabura","Cotacachi","Peñaherrera","Peñaherrera","0","250","0","0","0","0","0","0","0","0","0","0","0","250","0","0");
INSERT INTO brigada VALUES("46","27","Imbabura","Cotacachi","Apuela","Apuela","0","150","0","0","0","0","0","0","0","0","0","0","0","150","0","0");
INSERT INTO brigada VALUES("47","28","Manabí","Junin","Junin","Junin","0","100","500","300","50","0","0","0","0","0","0","0","0","950","0","0");
INSERT INTO brigada VALUES("48","29","Pichincha","Quito","Malchingui","Malchingui","0","400","0","0","0","0","0","0","0","0","0","0","0","400","0","0");
INSERT INTO brigada VALUES("49","29","Pichincha","Pedro Moncayo","Tocachi","Tocachi","0","300","0","0","0","0","0","0","0","0","0","0","0","300","0","0");
INSERT INTO brigada VALUES("50","30","Manabí","Junin","Junin","Calceta","0","0","1000","0","0","0","0","0","0","0","0","0","0","1000","0","0");
INSERT INTO brigada VALUES("51","31","Imbabura","Otavalo","San Juan","San Juan","0","0","200","150","0","0","0","0","0","0","0","0","0","350","0","0");
INSERT INTO brigada VALUES("52","31","Imbabura","Otavalo","Iluman","Iluman","0","0","200","150","0","0","0","0","0","0","0","0","0","350","0","0");
INSERT INTO brigada VALUES("53","32","Tungurahua","Ambato","Santa Rosa","Santa Rosa","0","400","0","0","0","0","0","0","0","0","0","0","0","400","0","0");
INSERT INTO brigada VALUES("54","32","Tungurahua","Ambato","Constantino Fernández","Constantino Fernández","0","300","0","0","0","0","0","0","0","0","0","0","0","300","0","0");
INSERT INTO brigada VALUES("55","33","Manabí","Junin","Cieneguita","Cieneguita","0","100","200","100","0","0","0","0","0","0","0","0","0","400","0","0");
INSERT INTO brigada VALUES("56","33","Manabí","Junin","Piquigua","Piquigua","0","100","200","100","0","0","0","0","0","0","0","0","0","400","0","0");
INSERT INTO brigada VALUES("57","33","Manabí","Junin","Agua Fría","Agua Fría","0","50","100","50","0","0","0","0","0","0","0","0","0","200","0","0");
INSERT INTO brigada VALUES("58","34","Manabí","Portoviejo","San Placido","San Placido","0","100","350","150","0","0","0","0","0","0","0","0","0","600","0","0");
INSERT INTO brigada VALUES("59","34","Manabí","Portoviejo","Crucitas","Crucitas","0","100","350","150","0","0","0","0","0","0","0","0","0","600","0","0");
INSERT INTO brigada VALUES("60","35","Bolívar","Guaranda","Quindigua","Quindigua","0","15","150","100","0","0","0","0","0","0","0","0","0","265","0","0");
INSERT INTO brigada VALUES("61","35","Bolívar","Guaranda","Mindina-Ciniatug","Mindina-Ciniatug","0","15","150","100","0","0","0","0","0","0","0","0","0","265","0","0");
INSERT INTO brigada VALUES("62","35","Bolívar","Guaranda","Laiwa-Ciniatug","Laiwa-Ciniatug","0","15","150","100","0","0","0","0","0","0","0","0","0","265","0","0");
INSERT INTO brigada VALUES("63","35","Bolívar","Guaranda","Pambuela","Pambuela","0","15","150","100","0","0","0","0","0","0","0","0","0","265","0","0");
INSERT INTO brigada VALUES("64","36","Tungurahua","Pelileo","Niton","Niton","0","150","0","120","0","0","0","0","0","0","0","0","0","270","0","0");
INSERT INTO brigada VALUES("65","36","Tungurahua","Pelileo","Teligote","Teligote","0","150","0","120","0","0","0","0","0","0","0","0","0","270","0","0");
INSERT INTO brigada VALUES("66","37","Azuay","Cuenca","Quinjeo","Quinjeo","0","206","333","186","0","0","0","0","0","0","0","0","0","725","0","0");
INSERT INTO brigada VALUES("67","37","Azuay","Cuenca","Santa Ana","Santa Ana","0","93","225","160","0","0","0","0","0","0","0","0","0","478","0","0");
INSERT INTO brigada VALUES("68","38","Imbabura","Ibarra","Pimampiro","Pimampiro","0","0","0","400","0","0","0","0","0","0","0","0","0","400","0","0");
INSERT INTO brigada VALUES("69","38","Imbabura","Ibarra","Ambuqui","Chaupiguarangui","0","0","0","200","0","0","0","0","0","0","0","0","0","200","0","0");
INSERT INTO brigada VALUES("70","38","Imbabura","Ibarra","Priorato","Priorato","0","0","0","200","0","0","0","0","0","0","0","0","0","200","0","0");
INSERT INTO brigada VALUES("71","39","Azuay","Cuenca","Cuenca","Cuenca","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","48");
INSERT INTO brigada VALUES("72","40","Santa Elena","Salinas","Anoncito","Las peñas","0","0","0","430","0","0","0","0","0","0","0","0","0","430","0","0");
INSERT INTO brigada VALUES("73","40","Santa Elena","La Libertad","El Gallo","Barrio 6 de Enero","0","0","0","430","0","0","0","0","0","0","0","0","0","430","0","0");
INSERT INTO brigada VALUES("74","41","Chimborazo","Colta","San Francisco de Quito","San Francisco de Quito","0","50","400","200","0","0","0","0","0","0","0","0","0","650","0","0");
INSERT INTO brigada VALUES("75","42","Chimborazo","Colta","Sicalpa","Labranza","0","55","173","137","0","0","0","0","0","0","0","0","0","365","0","0");
INSERT INTO brigada VALUES("76","42","Chimborazo","Colta","Columbe","San José","0","55","173","137","0","0","0","0","0","0","0","0","0","365","0","0");
INSERT INTO brigada VALUES("77","43","Manabí","Bolívar","Calceta","Los Sauces","0","100","200","150","0","0","0","0","0","0","0","0","0","450","0","0");
INSERT INTO brigada VALUES("78","43","Manabí","Junin","Junin","Balsa Tumbada","0","100","200","150","0","0","0","0","0","0","0","0","0","450","0","0");
INSERT INTO brigada VALUES("79","44","Pichincha","Quito","Calacalí","Younguilla","0","150","0","0","0","0","0","0","0","0","0","0","0","150","0","0");
INSERT INTO brigada VALUES("80","44","Pichincha","Quito","Calacalí","Caspigasi","0","150","0","0","0","0","0","0","0","0","0","0","0","150","0","0");
INSERT INTO brigada VALUES("81","45","Tungurahua","Pelileo","El Rosario","Teligote","0","150","0","0","0","0","0","0","0","0","0","0","0","150","0","0");
INSERT INTO brigada VALUES("82","45","Tungurahua","Pelileo","Pelileo","Artezon","0","80","0","0","0","0","0","0","0","0","0","0","0","80","0","0");
INSERT INTO brigada VALUES("84","47","Cotopaxi","Latacunga","Latacunga","Clínica de la FAE","0","0","0","0","0","0","0","0","0","10","10","5","5","30","0","0");
INSERT INTO brigada VALUES("85","48","Esmeraldas","Esmeraladas","Esmeraldas","Hospital Delfina Torres de Con","0","0","0","0","0","0","0","0","0","10","10","4","3","27","0","0");
INSERT INTO brigada VALUES("86","49","Esmeraldas","Esmeraldas","Esmeraldas","Hospital Delfina Torres de Con","0","0","0","0","0","0","0","0","0","10","10","8","7","35","0","0");
INSERT INTO brigada VALUES("87","50","Santa Elena","Salinas","Salinas","Clínica de la FAE","0","0","0","0","0","0","0","0","0","15","15","10","10","50","0","0");
INSERT INTO brigada VALUES("88","51","Santa Elena","Salinas","Salinas","Clínica de la FAE","0","0","0","0","0","0","0","0","0","15","17","10","10","52","0","0");
INSERT INTO brigada VALUES("89","52","Santa Elena","Salinas","Salinas","Clínica de la FAE","0","0","0","0","0","0","0","0","0","15","15","10","10","50","0","0");
INSERT INTO brigada VALUES("94","54","Tungurahua","ambato","illagua chico","illagua chico","0","170","0","0","0","0","0","0","0","0","0","0","0","170","0","0");
INSERT INTO brigada VALUES("95","54","Tungurahua","ambato","Ambatillo Alto","Ambatillo Alto","0","220","0","0","0","0","0","0","0","0","0","0","0","220","0","0");
INSERT INTO brigada VALUES("96","59","Azuay","CUENCA","CUENCA","UNIVERSIDAD CATOLICA","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","20");
INSERT INTO brigada VALUES("97","60","Pichincha","PEDRO MOCAYO","CANAMBALLE","CANAMBALLE","0","210","0","0","0","0","0","0","0","0","0","0","0","210","0","0");
INSERT INTO brigada VALUES("98","60","Bolívar","GUARANDA","PRIMERO DE MAYO","PRIMERO D EMAYO","0","210","0","0","0","0","0","0","0","0","0","0","0","210","0","0");
INSERT INTO brigada VALUES("99","61","Galápagos","SANTA CRUZ","BELLA VISTA","BELLAVISTA","0","210","0","0","0","0","0","0","0","0","0","0","0","210","0","0");
INSERT INTO brigada VALUES("100","61","Napo","TENA","SAN PEDRO MUYUNA","MUYUNA","0","210","0","0","0","0","0","0","0","0","0","0","0","210","0","0");
INSERT INTO brigada VALUES("101","61","Pichincha","PEDRO MONCAYO","MALCHINGUI","MALCHINGUI","0","210","0","0","0","0","0","0","0","0","0","0","0","210","0","0");
INSERT INTO brigada VALUES("102","62","Cotopaxi","LATACUNGA","MALINGUAPAMBA","MALINGUAPAMBA","0","155","0","0","0","0","0","0","0","0","0","0","0","155","0","0");
INSERT INTO brigada VALUES("103","62","Bolívar","GUARANDA","SIXSIPAMBA","SIXSIPAMBA","0","155","0","0","0","0","0","0","0","0","0","0","0","155","0","0");
INSERT INTO brigada VALUES("104","62","Chimborazo","COLTA","BALBANERA","BALBANERA","0","155","0","0","0","0","0","0","0","0","0","0","0","155","0","0");
INSERT INTO brigada VALUES("105","63","Santa Elena","SALINAS","SALINAS","CLINICA FAE ","0","480","0","0","0","0","0","0","0","0","0","0","0","480","0","0");
INSERT INTO brigada VALUES("106","64","Galápagos","SANTA CRUZ","SANTA ROSA","SANTA ROSA","0","150","0","0","0","0","0","0","0","0","0","0","0","150","0","0");
INSERT INTO brigada VALUES("107","64","Pichincha","PEDRO MOCAYO","LA ESPERANZA","LA ESPERANZA","0","150","0","0","0","0","0","0","0","0","0","0","0","150","0","0");
INSERT INTO brigada VALUES("108","65","Azuay","CUENCA","JADAN","JADAN","0","100","0","0","0","0","0","0","0","0","0","0","0","100","0","0");
INSERT INTO brigada VALUES("109","65","Azuay","CUENCA","SAN BARTOLOME","SAN BARTOLOME","0","100","0","0","0","0","0","0","0","0","0","0","0","100","0","0");
INSERT INTO brigada VALUES("110","66","Galápagos","PUERTO BAQUERIZO MORENO","PROGRESO","PROGRESO","0","220","0","0","0","0","0","0","0","0","0","0","0","220","0","0");



CREATE TABLE `info_bri` (
  `ID_INFO` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_BRI` varchar(50) NOT NULL,
  `FECH_INI_BRI` date DEFAULT NULL,
  `FECH_FIN_BRI` date DEFAULT NULL,
  `ORG_ENCARGADA` varchar(50) DEFAULT NULL,
  `COSTO` decimal(8,2) DEFAULT NULL,
  `FJULO` int(11) DEFAULT NULL,
  `FADOVIL` int(11) DEFAULT NULL,
  `FKINSMA` int(11) DEFAULT NULL,
  `FCIMAS` int(11) DEFAULT NULL,
  `FSUNC` int(11) DEFAULT NULL,
  `FAE` int(11) DEFAULT NULL,
  `GPAZ` int(11) DEFAULT NULL,
  `ITQ` int(11) DEFAULT NULL,
  `ITSCO` int(11) DEFAULT NULL,
  `UDLA` int(11) DEFAULT NULL,
  `UFLO` int(11) DEFAULT NULL,
  `UROCKY` int(11) DEFAULT NULL,
  `UTENNESY` int(11) DEFAULT NULL,
  `UCATOCUENCA` int(11) DEFAULT NULL,
  `USGREGO` int(11) DEFAULT NULL,
  `UMETROPO` int(11) DEFAULT NULL,
  `UNACIPORTO` int(11) DEFAULT NULL,
  `ULAICAMANTA` int(11) DEFAULT NULL,
  `UBOLIVAR` int(11) DEFAULT NULL,
  `UTECAMBA` int(11) DEFAULT NULL,
  `OTROS` int(11) DEFAULT NULL,
  `TOTAL_PARTICI` int(11) DEFAULT NULL,
  `OBSERVACIONES_BRI` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`ID_INFO`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

INSERT INTO info_bri VALUES("11","Brigada Médica Agosto 2007","2007-08-06","2007-08-09","FUNDACIÓN MÉDICA JUDITH LOMBEIDA","0.00","25","0","0","0","0","10","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","35","Se realizo una cesaría que nació una niña");
INSERT INTO info_bri VALUES("12","Brigada Médica Agosto 2008","2008-08-11","2008-08-14","FUNDACIÓN MÉDICA JUDITH LOMBEIDA","0.00","38","0","0","1","0","10","10","0","0","0","0","0","0","0","0","0","0","0","0","0","10","69","10 participantes de cada junta parroquial de las zona");
INSERT INTO info_bri VALUES("13","Brigada Médica Agosto 2012","2012-08-13","2012-08-16","FUNDACIÓN MÉDICA JUDITH LOMBEIDA","0.00","20","0","0","0","0","15","0","0","0","0","0","0","0","0","0","0","0","0","0","10","10","55","10 voluntarios de la junta parroquial de cada zona
Se detectó 3 niños con problemas de corazón y se coordinó con hospital de niños de Quito");
INSERT INTO info_bri VALUES("14"," Brigada Médica Mayo 2013","2013-05-20","2013-05-21","FUNDACIÓN MÉDICA JUDITH LOMBEIDA","0.00","25","0","0","0","0","0","0","0","0","0","0","0","0","10","0","0","0","0","0","0","10","45","5 voluntarios de salud zonal y 5 voluntarios de cada junta parroquial");
INSERT INTO info_bri VALUES("15","Brigada Médica Mayo 2014","2014-05-12","2014-05-13","FUNDACIÓN ADOPT A VILLAGE","10264.00","15","0","0","0","0","0","0","0","0","0","0","0","0","10","0","0","0","0","0","0","35","60","10 voluntarios de cada junta parroquial
15 voluntarios de Project Cure");
INSERT INTO info_bri VALUES("16","Brigada Médica Septiembre 2014","2014-09-08","2014-09-09","FUNDACIÓN ADOPT A VILLAGE","0.00","25","0","0","0","0","15","0","0","0","0","0","0","0","20","0","0","0","0","0","0","10","70","10 voluntarios de la junta parroquial de la zona");
INSERT INTO info_bri VALUES("17","Capacitación JUNIO 2014","2014-06-07","2014-06-10","FUNDACIÓN ADOPT A VILLAGE","2800.00","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","6","6","Project Cure EEUU 6 voluntarios");
INSERT INTO info_bri VALUES("18","Brigada Médica Diciembre 2014","2014-12-08","2014-12-12","FUNDACIÓN ADOPT A VILLAGE","3613.00","8","0","0","0","0","0","0","0","0","0","0","0","0","10","0","5","0","0","0","0","0","23","");
INSERT INTO info_bri VALUES("19","Capacitación Enero 2015","2015-01-12","2015-01-15","FUNDACIÓN ADOPT A VILLAGE","500.00","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","6","6","6 voluntarios de Project Cure
Estudiantes de la Cruz Roja de Ibarra");
INSERT INTO info_bri VALUES("20","Brigada Médica Febrero 2015","2015-02-23","2015-02-25","FUNDACIÓN ADOPT A VILLAGE","20370.00","0","2","0","0","0","0","0","0","0","0","0","15","0","30","0","0","0","0","0","0","0","47","");
INSERT INTO info_bri VALUES("21","Brigada Médica JULIO 2015","2015-07-12","2015-07-17","FUNDACIÓN ADOPT A VILLAGE","13400.00","0","2","0","1","0","0","0","0","0","0","0","0","0","0","0","5","0","0","0","0","31","39","750 pacientes fueron operados de cirugías de cataratas
5 Club de leones de Dember
5 club de leones de santo domingo
7club rotary dember(Colorado)
10 club rot. Sto.Domingo
6Clubrot.EquinoccioQuito");
INSERT INTO info_bri VALUES("22","Brigada Médica Julio 2015","2015-07-13","2015-07-17","FUNDACIÓN ADOPT A VILLAGE","0.00","0","10","0","1","0","0","0","0","0","0","0","0","0","0","0","5","0","0","10","0","10","36","10 voluntarios de la alcaldía de Guaranda");
INSERT INTO info_bri VALUES("23","Brigada Médica Octubre 2015","2015-10-19","2015-10-23","FUNDACIÓN ADOPT A VILLAGE","22550.00","0","5","0","1","0","0","0","0","0","0","0","0","0","15","0","0","0","0","0","0","10","31","10 voluntarios de cada junta parroquial");
INSERT INTO info_bri VALUES("24","Brigada Optómetra Noviembre 2015","2015-11-09","2015-11-13","FUNDACIÓN ADOPT A VILLAGE","17228.00","0","1","0","1","0","0","0","0","0","0","0","0","0","0","0","5","0","0","0","0","60","67","40 Volunteer Optometrica Services for Humanity (Vosh)
10 Rotarios Sto.Domingo
5 rotarios Equinoccio Quito
5 junta parroquial Sto. Domingo");
INSERT INTO info_bri VALUES("25","Capacitación Diciembre 2015","2015-12-01","2015-12-05","FUNDACIÓN ADOPT A VILLAGE","2800.00","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","6","6","6 voluntarios de Project Cure
Capacitación a estudiantes de la Universidad Católica de Cuenca");
INSERT INTO info_bri VALUES("26","Brigada Médica Febrero 2016","2016-02-22","2016-02-25","FUNDACIÓN ADOPT A VILLAGE","11360.00","0","2","0","1","0","5","0","0","0","0","0","25","0","0","0","5","0","0","0","0","25","63","25 voluntarios de la Cruz Roja");
INSERT INTO info_bri VALUES("27","Brigada Odontológica Marzo 2016","2016-02-29","2016-03-04","UNIVERSIDAD DE LA FLORIDA","11750.00","0","2","0","1","0","0","0","0","0","0","30","0","0","0","0","0","0","0","0","0","10","43","Club Rotario Equinoccio Quito 2
Junta parroquial Peñaherrera 8");
INSERT INTO info_bri VALUES("28","Brigada Médica Abril 2016","2016-04-11","2016-04-15","FUNDACIÓN ADOPT A VILLAGE","5500.00","0","2","0","1","0","0","0","0","0","0","0","0","0","15","0","5","0","10","0","0","10","43","10 participantes de Project Cure
60 pacientes de psicología");
INSERT INTO info_bri VALUES("29","Brigada Odontológica Junio 2016","2016-06-06","2016-06-10","FUNDACIÓN ADOPT A VILLAGE","7000.00","0","15","0","1","0","0","0","0","0","5","0","0","0","0","0","0","0","0","0","0","12","33","Club Rotario Equinoccio Quito 2
Universidad Central del Ecuador 10");
INSERT INTO info_bri VALUES("30","Brigada Médica Junio 2016 (Manabí)","2016-06-15","2016-06-18","FUNDACIÓN ADOPT A VILLAGE","14900.00","0","30","0","1","0","10","0","0","0","0","0","0","0","0","0","0","0","15","0","0","0","56","");
INSERT INTO info_bri VALUES("31","Brigada Médica Febrero 2017","2017-02-20","2017-02-24","FUNDACIÓN ADOPT A VILLAGE","19700.00","0","5","0","1","0","0","0","0","0","0","0","40","0","0","0","5","0","0","0","0","10","61","10 voluntarios de la junta parroquial");
INSERT INTO info_bri VALUES("32","Brigada Odontológica Marzo 2017","2017-03-06","2017-03-10","UNIVERSIDAD DE LA FLORIDA","12000.00","0","2","0","1","0","0","0","0","0","0","25","0","0","0","0","0","0","0","0","0","10","38","10 voluntarios de cada junta parroquial");
INSERT INTO info_bri VALUES("33","Brigada Médica Abril 2017","2017-04-17","2017-04-21","FUNDACIÓN ADOPT A VILLAGE","11400.00","0","10","0","0","0","0","0","0","0","0","0","0","0","0","15","5","0","15","0","0","10","55","10 voluntarios de cada junta parroquial");
INSERT INTO info_bri VALUES("34","Brigada Médica Septiembre 2017","2017-09-25","2017-09-29","FUNDACIÓN ADOPT A VILLAGE","9800.00","0","0","0","0","2","0","0","0","0","0","0","0","0","0","20","5","0","20","0","0","10","57","10 voluntarios de cada junta parroquial");
INSERT INTO info_bri VALUES("35","Brigada Médica Febrero 2018","2018-02-19","2018-02-23","FUNDACIÓN ADOPT A VILLAGE","22000.00","0","17","0","1","1","0","0","0","0","0","0","38","0","0","0","5","0","0","10","0","12","84","Club Rotario Equinoccio de Quito 2
10 alcaldía de Guaranda");
INSERT INTO info_bri VALUES("36","Brigada Odontologia Marzo 2018","2018-03-05","2018-03-06","UNIVERSIDAD DE LA FLORIDA","21000.00","0","4","0","0","2","0","0","0","0","0","25","0","0","0","0","5","0","0","0","0","16","52","Club Rotario Equinoccio de Quito 1
10 voluntarios de junta parroquial
Centro salud zonal 5");
INSERT INTO info_bri VALUES("37","Brigada Médica Abril 2018","2018-04-23","2018-04-26","FUNDACIÓN ADOPT A VILLAGE","17000.00","0","14","0","1","0","0","0","0","0","0","0","0","0","57","0","5","0","0","0","0","16","93","6 voluntarios del consejo cantonal de salud de Cuenca
10 voluntarios junta parroquial zonal");
INSERT INTO info_bri VALUES("38","Brigada Optómetra Mayo 2018","2018-05-07","2018-05-10","FUNDACIÓN SALUD "UN NUEVO COMIENZO"","7000.00","0","1","0","1","2","0","0","0","0","0","0","0","16","0","0","5","0","0","0","0","21","46","Dirección salud Ibarra 5
Centro salud Pimampiro 5
Junta parroquial Pimampiro 4
Gobernación de Imbabura 4
Policía de Ibarra 3");
INSERT INTO info_bri VALUES("39","Capacitación Mayo 2018","2018-05-14","2018-02-18","FUNDACIÓN ADOPT A VILLAGE","3000.00","0","8","0","1","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","10","Se capacitó a 48 estudiantes de la Universidad Católica de Cuenca");
INSERT INTO info_bri VALUES("40","Brigada Optómetra Mayo 2019","2019-05-13","2019-05-16","FUNDACIÓN SALUD "UN NUEVO COMIENZO"","0.00","0","0","0","0","3","0","0","0","0","0","0","0","18","0","0","0","0","0","0","0","15","36","Universidad Estatal Península de Santa Elena 15");
INSERT INTO info_bri VALUES("41","Brigada Médica Septiembre 2018","2018-09-16","2018-09-17","FUNDACIÓN SALUD "UN NUEVO COMIENZO"","0.00","0","0","0","0","2","0","0","5","0","0","0","0","0","0","0","7","0","0","0","0","24","38","Fundación Puruha 4 
Proyecto Sonrisa de Cuenca 20");
INSERT INTO info_bri VALUES("42","Brigada Médica Marzo 2019 (Chimborazo)","2019-03-06","2019-03-09","FUNDACIÓN SALUD "UN NUEVO COMIENZO"","0.00","0","2","0","0","2","0","0","5","0","0","0","25","0","0","0","5","0","0","0","0","0","39","Participó Club Rotario de Riobamba");
INSERT INTO info_bri VALUES("43","Brigada Médica Abril 2019","2019-04-22","2019-04-26","FUNDACIÓN ADOPT A VILLAGE","0.00","0","7","0","0","2","0","0","2","2","0","0","0","0","0","15","5","0","0","0","0","15","48","15 voluntarios de la universidad Técnica de Manabí");
INSERT INTO info_bri VALUES("44","Brigada Odontológica Mayo 2019 (Pichincha)","2019-05-26","2019-05-29","FUNDACIÓN KINDER SMAIL","0.00","0","0","10","0","1","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","11","");
INSERT INTO info_bri VALUES("45","Brigada Odontológica Marzo 2019 (Tungurahua)","2019-03-05","2019-03-09","UNIVERSIDAD DE LA FLORIDA","0.00","0","0","0","0","1","0","0","2","0","0","25","0","0","0","0","0","0","0","0","0","0","28","");
INSERT INTO info_bri VALUES("47","Cirugía Septiembre 2007","2007-09-10","2007-09-15","FUNDACIÓN MÉDICA JUDITH LOMBEIDA","0.00","10","0","0","0","1","10","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","21","");
INSERT INTO info_bri VALUES("48","Cirugía Septiembre 2009","2009-09-07","2009-09-11","FUNDACIÓN MÉDICA JUDITH LOMBEIDA","0.00","10","1","0","1","1","15","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","28","");
INSERT INTO info_bri VALUES("49","Cirugía Septiembre 2010","2010-09-06","2010-09-12","FUNDACIÓN MÉDICA JUDITH LOMBEIDA","0.00","14","1","0","1","1","10","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","27","");
INSERT INTO info_bri VALUES("50","Cirugía Noviembre 2011","2011-11-14","2011-11-19","FUNDACIÓN MÉDICA JUDITH LOMBEIDA","0.00","20","0","0","1","1","15","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","37","");
INSERT INTO info_bri VALUES("51","Cirugía Noviembre 2012","2012-11-05","2012-11-09","FUNDACIÓN MÉDICA JUDITH LOMBEIDA","0.00","0","10","0","1","1","10","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","22","");
INSERT INTO info_bri VALUES("52","Cirugía Noviembre 2013","2013-11-18","2013-11-22","FUNDACIÓN ADOPT A VILLAGE","0.00","0","15","0","1","1","15","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","32","");
INSERT INTO info_bri VALUES("54","Brigada Odontologia marzo 2020","2020-03-02","2020-03-06","UNIVERSIDAD DE LA FLORIDA","0.00","0","3","0","0","0","0","0","0","0","0","24","0","0","0","0","0","0","0","0","0","12","39","universidad uniandes estudiante de odontologia
");
INSERT INTO info_bri VALUES("55","Brigada Suspendida","2020-06-15","2020-06-19","FUNDACIÓN ADOPT A VILLAGE","0.00","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","Brigada medica suspendida en Galapagos por Pandemia Virus");
INSERT INTO info_bri VALUES("56","Brigada Suspendida","2020-03-09","2020-03-13","UNIVERSIDAD ROCKY VISTA","0.00","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","Brigada Medica Suspendida en Guaranda por pandemia de virus");
INSERT INTO info_bri VALUES("57","Brigada Suspendida","2020-03-20","2020-03-23","FUNDACIÓN ADOPT A VILLAGE","0.00","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","Brigada Odontologica suspendida en tena por pandemia virus");
INSERT INTO info_bri VALUES("58","Brigada Suspendida CIRUGIA FAE 2014","2014-11-03","2014-11-07","FUNDACIÓN ADOPT A VILLAGE","0.00","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","Brigada de Cirugia susepndida la FAE No presta los quirofanos");
INSERT INTO info_bri VALUES("59","Capacitacion HBB NOVIEMBRE 2013","2013-11-11","2013-11-15","FUNDACIÓN ADOPT A VILLAGE","0.00","0","5","0","0","0","0","0","0","0","0","0","0","0","6","0","0","0","0","0","0","0","11","");
INSERT INTO info_bri VALUES("60","BRIGADA ODONTOLOGICA MAYO 2009","2009-05-04","2009-05-08","FUNDACIÓN MÉDICA JUDITH LOMBEIDA","0.00","15","0","0","0","0","5","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","20","");
INSERT INTO info_bri VALUES("61","BRIGADA ODONTOLOGICA MARZO 2010","2010-03-08","2010-03-13","FUNDACIÓN MÉDICA JUDITH LOMBEIDA","0.00","24","0","0","0","0","10","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","34","");
INSERT INTO info_bri VALUES("62","BRIGADA ODONTOLOGICA ABRIL 2011","2011-04-11","2011-04-15","FUNDACIÓN ADOPT A VILLAGE","0.00","0","11","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","11","");
INSERT INTO info_bri VALUES("63","BRIGADA ODONTOLOGICA NOVIEMBRE 2011","2011-11-14","2011-11-18","FUNDACIÓN ADOPT A VILLAGE","0.00","0","20","0","0","0","10","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","30","");
INSERT INTO info_bri VALUES("64","BRIGADA ODONTOLOGICA JULIO 2013","2013-07-29","2013-08-02","FUNDACIÓN ADOPT A VILLAGE","0.00","0","15","0","0","0","10","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","25","");
INSERT INTO info_bri VALUES("65","BRIGADA ODONTOLOGICA MAYO 2014","2014-05-05","2014-05-09","FUNDACIÓN ADOPT A VILLAGE","0.00","0","14","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","14","");
INSERT INTO info_bri VALUES("66","BRIGADA ODONTOLOGICA SEPTIEMBRE 2014","2014-09-15","2021-09-19","FUNDACIÓN ADOPT A VILLAGE","0.00","0","25","0","0","0","15","0","0","0","0","0","0","0","50","0","0","0","0","0","0","0","90","");

