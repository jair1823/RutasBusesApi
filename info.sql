DELETE FROM `distric`;
DELETE FROM `canton`;
DELETE FROM `province`;

INSERT INTO `province` (`id_province`, `name`) VALUES
(1, 'San Jose'),
(2, 'Alajuela'),
(3, 'Cartago'),
(4, 'Heredia'),
(5, 'Guanacaste'),
(6, 'Puntarenas'),
(7, 'Limon');



INSERT INTO `canton` (`id_province`, `id_canton`, `name`) VALUES
(1, 1, 'San Jose'),
(1, 2, 'Escazu'),
(1, 3, 'Desamparados'),
(1, 4, 'Puriscal'),
(1, 5, 'Tarrazu'),
(1, 6, 'Aserri'),
(1, 7, 'Mora'),
(1, 8, 'Goicoechea'),
(1, 9, 'Santa Ana'),
(1, 10, 'Alajuelita'),
(1, 11, 'Coronado'),
(1, 12, 'Acosta'),
(1, 13, 'Tibas'),
(1, 14, 'Moravia'),
(1, 15, 'Montes De Oca'),
(1, 16, 'Turrubares'),
(1, 17, 'Dota'),
(1, 18, 'Curridabat'),
(1, 19, 'Perez Zeledon'),
(1, 20, 'Leon Cortes'),
(2, 201, 'Alajuela'),
(2, 202, 'San Ramon'),
(2, 203, 'Grecia'),
(2, 204, 'San Mateo'),
(2, 205, 'Atenas'),
(2, 206, 'Naranjo'),
(2, 207, 'Palmares'),
(2, 208, 'Poas'),
(2, 209, 'Orotina'),
(2, 210, 'San Carlos'),
(2, 211, 'Alfaro Ruiz'),
(2, 212, 'Valverde Vega'),
(2, 213, 'Upala'),
(2, 214, 'Los Chiles'),
(2, 215, 'Guatuso'),
(2, 216, 'Rio Cuarto'),
(3, 301, 'Cartago'),
(3, 302, 'Paraiso'),
(3, 303, 'La Union'),
(3, 304, 'Jimenez'),
(3, 305, 'Turrialba'),
(3, 306, 'Alvarado'),
(3, 307, 'Oreamuno'),
(3, 308, 'El Guarco'),
(4, 401, 'Heredia'),
(4, 402, 'Barva'),
(4, 403, 'Santo Domingo'),
(4, 404, 'Santa Barbara'),
(4, 405, 'San Rafael'),
(4, 406, 'San Isidro'),
(4, 407, 'Belen'),
(4, 408, 'Flores'),
(4, 409, 'San Pablo'),
(4, 410, 'Sarapiqui'),
(5, 501, 'Liberia'),
(5, 502, 'Nicoya'),
(5, 503, 'Santa Cruz'),
(5, 504, 'Bagaces'),
(5, 505, 'Carrillo'),
(5, 506, 'Cañas'),
(5, 507, 'Abangares'),
(5, 508, 'Tilaran'),
(5, 509, 'Nandayure'),
(5, 510, 'La Cruz'),
(5, 511, 'Hojancha'),
(6, 601, 'Puntarenas'),
(6, 602, 'Esparza'),
(6, 603, 'Buenos Aires'),
(6, 604, 'Montes De Oro'),
(6, 605, 'Osa'),
(6, 606, 'Aguirre'),
(6, 607, 'Golfito'),
(6, 608, 'Coto Brus'),
(6, 609, 'Parrita'),
(6, 610, 'Corredores'),
(6, 611, 'Garabito'),
(7, 701, 'Limon'),
(7, 702, 'Pococi'),
(7, 703, 'Siquirres'),
(7, 704, 'Talamanca'),
(7, 705, 'Matina'),
(7, 706, 'Guacimo');



INSERT INTO `distric` (`id_canton`, `id_distric`, `name`) VALUES
(1, 101, 'Carmen'),
(1, 102, 'Merced'),
(1, 103, 'Hospital'),
(1, 104, 'Catedral'),
(1, 105, 'Zapote'),
(1, 106, 'San Francisco de Dos Ríos'),
(1, 107, 'Uruca'),
(1, 108, 'Mata Redonda'),
(1, 109, 'Pavas'),
(1, 110, 'Hatillo'),
(1, 111, 'San Sebastián'),
(2, 201, 'Escazú'),
(2, 202, 'San Antonio'),
(2, 203, 'San Rafael'),
(3, 301, 'Desamparados'),
(3, 302, 'San Miguel'),
(3, 303, 'San Juan de Dios'),
(3, 304, 'San Rafael Arriba'),
(3, 305, 'San Antonio'),
(3, 306, 'Frailes'),
(3, 307, 'Patarrá'),
(3, 308, 'San Cristóbal'),
(3, 309, 'Rosario'),
(3, 310, 'Damas'),
(3, 311, 'San Rafael Abajo'),
(3, 312, 'Gravilias'),
(3, 313, 'Los Guido'),
(4, 401, 'Santiago'),
(4, 402, 'Mercedes Sur'),
(4, 403, 'Barbacoas'),
(4, 404, 'Grifo Alto'),
(4, 405, 'San Rafael'),
(4, 406, 'Candelarita'),
(4, 407, 'Desamparaditos'),
(4, 408, 'San Antonio'),
(4, 409, 'Chires'),
(4, 410, 'La Cangreja'),
(5, 501, 'San Marcos'),
(5, 502, 'San Lorenzo'),
(5, 503, 'San Carlos'),
(6, 601, 'Aserrí'),
(6, 602, 'Tarbaca o Praga'),
(6, 603, 'Vuelta de Jorco'),
(6, 604, 'San Gabriel'),
(6, 605, 'La Legua'),
(6, 606, 'Monterrey'),
(6, 607, 'Salitrillos'),
(7, 701, 'Ciudad Colón'),
(7, 702, 'Guayabo'),
(7, 703, 'Tabarcia'),
(7, 704, 'Piedras Negras'),
(7, 705, 'Picagres'),
(7, 706, 'Jaris'),
(7, 707, 'Quitirrisi'),
(8, 801, 'Guadalupe'),
(8, 802, 'San Francisco'),
(8, 803, 'Calle Blancos'),
(8, 804, 'Mata de Plátano'),
(8, 805, 'Ipís'),
(8, 806, 'Rancho Redondo'),
(8, 807, 'Purral'),
(9, 901, 'Santa Ana'),
(9, 902, 'Salitral'),
(9, 903, 'Pozos o Concepción'),
(9, 904, 'Uruca o San Joaquín'),
(9, 905, 'Piedades'),
(9, 906, 'Brasil'),
(10, 1001, 'Alajuelita'),
(10, 1002, 'San Josecito'),
(10, 1003, 'San Antonio'),
(10, 1004, 'Concepción'),
(10, 1005, 'San Felipe'),
(11, 1101, 'San Isidro'),
(11, 1102, 'San Rafael'),
(11, 1103, 'Dulce Nombre o Jesús'),
(11, 1104, 'Patalillo'),
(11, 1105, 'Cascajal'),
(12, 1201, 'San Ignacio'),
(12, 1202, 'Guaitil'),
(12, 1203, 'Palmichal'),
(12, 1204, 'Cangrejal'),
(12, 1205, 'Sabanillas'),
(13, 1301, 'San Juan'),
(13, 1302, 'Cinco Esquinas'),
(13, 1303, 'Anselmo Llorente'),
(13, 1304, 'León XIII'),
(13, 1305, 'Colima'),
(14, 1401, 'San Vicente'),
(14, 1402, 'San Jerónimo'),
(14, 1403, 'La Trinidad'),
(15, 1501, 'San Pedro'),
(15, 1502, 'Sabanilla'),
(15, 1503, 'Mercedes o Betania'),
(15, 1504, 'San Rafael'),
(16, 1601, 'San Pablo'),
(16, 1602, 'San Pedro'),
(16, 1603, 'San Juan de Mata'),
(16, 1604, 'San Luis'),
(16, 1605, 'Carara'),
(17, 1701, 'Santa María'),
(17, 1702, 'Jardín'),
(17, 1703, 'Copey'),
(18, 1801, 'Curridabat'),
(18, 1802, 'Granadilla'),
(18, 1803, 'Sánchez'),
(18, 1804, 'Tirrases'),
(19, 1901, 'San Isidro de El General'),
(19, 1902, 'General'),
(19, 1903, 'Daniel Flores'),
(19, 1904, 'Rivas'),
(19, 1905, 'San Pedro'),
(19, 1906, 'Platanares'),
(19, 1907, 'Pejibaye'),
(19, 1908, 'Cajón o Carmen'),
(19, 1909, 'Barú'),
(19, 1910, 'Río Nuevo'),
(19, 1911, 'Páramo'),
(19, 1912, 'La Amistad'),
(20, 2001, 'San Pablo'),
(20, 2002, 'San Andrés'),
(20, 2003, 'Llano Bonito'),
(20, 2004, 'San Isidro'),
(20, 2005, 'Santa Cruz'),
(20, 2006, 'San Antonio'),
(201, 2101, 'Alajuela'),
(201, 2102, 'San José'),
(201, 2103, 'Carrizal'),
(201, 2104, 'San Antonio'),
(201, 2105, 'Guácima'),
(201, 2106, 'San Isidro'),
(201, 2107, 'Sabanilla'),
(201, 2108, 'San Rafael'),
(201, 2109, 'Río Segundo'),
(201, 2110, 'Desamparados'),
(201, 2111, 'Turrucares'),
(201, 2112, 'Tambor'),
(201, 2113, 'La Garita'),
(201, 2114, 'Sarapiquí'),
(202, 2201, 'San Ramón'),
(202, 2202, 'Santiago'),
(202, 2203, 'San Juan'),
(202, 2204, 'Piedades Norte'),
(202, 2205, 'Piedades Sur'),
(202, 2206, 'San Rafael'),
(202, 2207, 'San Isidro'),
(202, 2208, 'Angeles'),
(202, 2209, 'Alfaro'),
(202, 2210, 'Volio'),
(202, 2211, 'Concepción'),
(202, 2212, 'Zapotal'),
(202, 2213, 'San Isidro de Peñas Blancas'),
(202, 2214, 'San Lorenzo'),
(203, 2301, 'Grecia'),
(203, 2302, 'San Isidro'),
(203, 2303, 'San José'),
(203, 2304, 'San Roque'),
(203, 2305, 'Tacares'),
(203, 2306, 'Puente Piedra'),
(203, 2307, 'Bolívar'),
(204, 2401, 'San Mateo'),
(204, 2402, 'Desmonte'),
(204, 2403, 'Jesús María'),
(204, 2404, 'Labrador'),
(205, 2501, 'Atenas'),
(205, 2502, 'Jesús'),
(205, 2503, 'Mercedes'),
(205, 2504, 'San Isidro'),
(205, 2505, 'Concepción'),
(205, 2506, 'San José'),
(205, 2507, 'Santa Eulalia'),
(205, 2508, 'Escobal'),
(206, 2601, 'Naranjo'),
(206, 2602, 'San Miguel'),
(206, 2603, 'San José'),
(206, 2604, 'Cirrí Sur'),
(206, 2605, 'San Jerónimo'),
(206, 2606, 'San Juan'),
(206, 2607, 'Rosario'),
(207, 2701, 'Palmares'),
(207, 2702, 'Zaragoza'),
(207, 2703, 'Buenos Aires'),
(207, 2704, 'Santiago'),
(207, 2705, 'Candelaria'),
(207, 2706, 'Esquipulas'),
(207, 2707, 'La Granja'),
(208, 2801, 'San Pedro'),
(208, 2802, 'San Juan'),
(208, 2803, 'San Rafael'),
(208, 2804, 'Carrillos'),
(208, 2805, 'Sabana Redonda'),
(209, 2901, 'Orotina'),
(209, 2902, 'Mastate'),
(209, 2903, 'Hacienda Vieja'),
(209, 2904, 'Coyolar'),
(209, 2905, 'Ceiba'),
(210, 21001, 'Quesada'),
(210, 21002, 'Florencia'),
(210, 21003, 'Buenavista'),
(210, 21004, 'Aguas Zarcas'),
(210, 21005, 'Venecia'),
(210, 21006, 'Pital'),
(210, 21007, 'Fortuna'),
(210, 21008, 'Tigra'),
(210, 21009, 'Palmera'),
(210, 21010, 'Venado'),
(210, 21011, 'Cutris'),
(210, 21012, 'Monterrey'),
(210, 21013, 'Pocosol'),
(211, 21101, 'Zarcero'),
(211, 21102, 'Laguna'),
(211, 21103, 'Tapezco'),
(211, 21104, 'Guadalupe'),
(211, 21105, 'Palmira'),
(211, 21106, 'Zapote'),
(211, 21107, 'Brisas'),
(212, 21201, 'Sarchí Norte'),
(212, 21202, 'Sarchí Sur'),
(212, 21203, 'Toro Amarillo'),
(212, 21204, 'San Pedro'),
(212, 21205, 'Rodríguez'),
(213, 21301, 'Upala'),
(213, 21302, 'Aguas Claras'),
(213, 21303, 'San José o Pizote'),
(213, 21304, 'Bijagua'),
(213, 21305, 'Delicias'),
(213, 21306, 'Dos Ríos'),
(213, 21307, 'Yolillal'),
(213, 21308, 'Canalete'),
(214, 21401, 'Los Chiles'),
(214, 21402, 'Caño Negro'),
(214, 21403, 'Amparo'),
(214, 21404, 'San Jorge'),
(215, 21501, 'San Rafael'),
(215, 21502, 'Buenavista'),
(215, 21503, 'Cote'),
(215, 21504, 'Katira'),
(216, 21601, 'Rio Cuarto'),
(301, 30101, 'Oriental'),
(301, 30102, 'Occidental'),
(301, 30103, 'Carmen'),
(301, 30104, 'San Nicolás'),
(301, 30105, 'Aguacaliente '),
(301, 30106, 'Guadalupe Arenilla'),
(301, 30107, 'Corralillo'),
(301, 30108, 'Tierra Blanca'),
(301, 30109, 'Dulce Nombre'),
(301, 30110, 'Llano Grande'),
(301, 30111, 'Quebradilla'),
(302, 30201, 'Paraíso'),
(302, 30202, 'Santiago'),
(302, 30203, 'Orosi'),
(302, 30204, 'Cachí'),
(302, 30205, 'Llanos de Sta Lucia'),
(303, 30301, 'Tres Ríos'),
(303, 30302, 'San Diego'),
(303, 30303, 'San Juan'),
(303, 30304, 'San Rafael'),
(303, 30305, 'Concepción'),
(303, 30306, 'Dulce Nombre'),
(303, 30307, 'San Ramón'),
(303, 30308, 'Río Azul'),
(304, 30401, 'Juan Viñas'),
(304, 30402, 'Tucurrique'),
(304, 30403, 'Pejibaye'),
(305, 30501, 'Turrialba'),
(305, 30502, 'La Suiza'),
(305, 30503, 'Peralta'),
(305, 30504, 'Santa Cruz'),
(305, 30505, 'Santa Teresita'),
(305, 30506, 'Pavones'),
(305, 30507, 'Tuis'),
(305, 30508, 'Tayutic'),
(305, 30509, 'Santa Rosa'),
(305, 30510, 'Tres Equis'),
(305, 30511, 'La Isabel'),
(305, 30512, 'Chirripo'),
(306, 30601, 'Pacayas'),
(306, 30602, 'Cervantes'),
(306, 30603, 'Capellades'),
(307, 30701, 'San Rafael'),
(307, 30702, 'Cot'),
(307, 30703, 'Potrero Cerrado'),
(307, 30704, 'Cipreses'),
(307, 30705, 'Santa Rosa'),
(308, 30801, 'El Tejar'),
(308, 30802, 'San Isidro'),
(308, 30803, 'Tobosi'),
(308, 30804, 'Patio de Agua'),
(401, 40101, 'Heredia'),
(401, 40102, 'Mercedes'),
(401, 40103, 'San Francisco'),
(401, 40104, 'Ulloa'),
(401, 40105, 'Vara Blanca'),
(402, 40201, 'Barva'),
(402, 40202, 'San Pedro'),
(402, 40203, 'San Pablo'),
(402, 40204, 'San Roque'),
(402, 40205, 'Santa Lucía'),
(402, 40206, 'San José de la Montaña'),
(403, 40301, 'Santo Domingo'),
(403, 40302, 'San Vicente'),
(403, 40303, 'San Miguel'),
(403, 40304, 'Paracito'),
(403, 40305, 'Santo Tomás'),
(403, 40306, 'Santa Rosa'),
(403, 40307, 'Tures'),
(403, 40308, 'Pará'),
(404, 40401, 'Santa Bárbara'),
(404, 40402, 'San Pedro'),
(404, 40403, 'San Juan'),
(404, 40404, 'Jesús'),
(404, 40405, 'Santo Domingo del Roble'),
(404, 40406, 'Puraba'),
(405, 40501, 'San Rafael'),
(405, 40502, 'San Josecito'),
(405, 40503, 'Santiago'),
(405, 40504, 'Angeles'),
(405, 40505, 'Concepción'),
(406, 40601, 'San Isidro'),
(406, 40602, 'San José'),
(406, 40603, 'Concepción'),
(406, 40604, 'San Francisco'),
(407, 40701, 'San Antonio'),
(407, 40702, 'La Rivera'),
(407, 40703, 'Asunción'),
(408, 40801, 'San Joaquín'),
(408, 40802, 'Barrantes'),
(408, 40803, 'Llorente'),
(409, 40901, 'San Pablo'),
(409, 40902, 'Rincon de Sabanilla'),
(410, 41001, 'Puerto Viejo'),
(410, 41002, 'La Virgen'),
(410, 41003, 'Horquetas'),
(410, 41004, 'Llanuras del Gaspar'),
(410, 41005, 'Cureña'),
(501, 50101, 'Liberia'),
(501, 50102, 'Cañas Dulces'),
(501, 50103, 'Mayorga'),
(501, 50104, 'Nacascolo'),
(501, 50105, 'Curubande'),
(502, 50201, 'Nicoya'),
(502, 50202, 'Mansión'),
(502, 50203, 'San Antonio'),
(502, 50204, 'Quebrada Honda'),
(502, 50205, 'Sámara'),
(502, 50206, 'Nosara'),
(502, 50207, 'Belén de Nosarita'),
(503, 50301, 'Santa Cruz'),
(503, 50302, 'Bolsón'),
(503, 50303, 'Veintisiete de Abril'),
(503, 50304, 'Tempate'),
(503, 50305, 'Cartagena'),
(503, 50306, 'Cuajiniquil'),
(503, 50307, 'Diriá'),
(503, 50308, 'Cabo Velas'),
(503, 50309, 'Tamarindo'),
(504, 50401, 'Bagaces'),
(504, 50402, 'Fortuna'),
(504, 50403, 'Mogote'),
(504, 50404, 'Río Naranjo'),
(505, 50501, 'Filadelfia'),
(505, 50502, 'Palmira'),
(505, 50503, 'Sardinal'),
(505, 50504, 'Belén'),
(506, 50601, 'Cañas'),
(506, 50602, 'Palmira'),
(506, 50603, 'San Miguel'),
(506, 50604, 'Bebedero'),
(506, 50605, 'Porozal'),
(507, 50701, 'Juntas'),
(507, 50702, 'Sierra'),
(507, 50703, 'San Juan'),
(507, 50704, 'Colorado'),
(508, 50801, 'Tilarán'),
(508, 50802, 'Quebrada Grande'),
(508, 50803, 'Tronadora'),
(508, 50804, 'Santa Rosa'),
(508, 50805, 'Líbano'),
(508, 50806, 'Tierras Morenas'),
(508, 50807, 'Arenal'),
(509, 50901, 'Carmona'),
(509, 50902, 'Santa Rita'),
(509, 50903, 'Zapotal'),
(509, 50904, 'San Pablo'),
(509, 50905, 'Porvenir'),
(509, 50906, 'Bejuco'),
(510, 51001, 'La Cruz'),
(510, 51002, 'Santa Cecilia'),
(510, 51003, 'Garita'),
(510, 51004, 'Santa Elena'),
(511, 51101, 'Hojancha'),
(511, 51102, 'Monte Romo'),
(511, 51103, 'Puerto Carrillo'),
(511, 51104, 'Huacas'),
(511, 51105, 'Matambú'),
(601, 60101, 'Puntarenas'),
(601, 60102, 'Pitahaya'),
(601, 60103, 'Chomes'),
(601, 60104, 'Lepanto'),
(601, 60105, 'Paquera'),
(601, 60106, 'Manzanillo'),
(601, 60107, 'Guacimal'),
(601, 60108, 'Barranca'),
(601, 60109, 'Monte Verde'),
(601, 60110, 'Isla del Coco'),
(601, 60111, 'Cóbano'),
(601, 60112, 'Chacarita'),
(601, 60113, 'Chira (Isla)'),
(601, 60114, 'Acapulco'),
(601, 60115, 'El Roble'),
(601, 60116, 'Arancibia'),
(602, 60201, 'Espíritu Santo'),
(602, 60202, 'San Juan Grande'),
(602, 60203, 'Macacona'),
(602, 60204, 'San Rafael'),
(602, 60205, 'San Jerónimo'),
(602, 60206, 'Caldera'),
(603, 60301, 'Buenos Aires'),
(603, 60302, 'Volcán'),
(603, 60303, 'Potrero Grande'),
(603, 60304, 'Boruca'),
(603, 60305, 'Pilas'),
(603, 60306, 'Colinas o Bajo de Maíz'),
(603, 60307, 'Chánguena'),
(603, 60308, 'Biolley'),
(603, 60309, 'Brunka'),
(604, 60401, 'Miramar'),
(604, 60402, 'Unión'),
(604, 60403, 'San Isidro'),
(605, 60501, 'Ciudad Cortés'),
(605, 60502, 'Palmar'),
(605, 60503, 'Sierpe'),
(605, 60504, 'Bahía Ballena'),
(605, 60505, 'Piedras Blancas'),
(605, 60506, 'Bahia Drake'),
(606, 60601, 'Quepos'),
(606, 60602, 'Savegre'),
(606, 60603, 'Naranjito'),
(607, 60701, 'Golfito'),
(607, 60702, 'Puerto Jiménez'),
(607, 60703, 'Guaycará'),
(607, 60704, 'Pavones o Villa Conte'),
(608, 60801, 'San Vito'),
(608, 60802, 'Sabalito'),
(608, 60803, 'Agua Buena'),
(608, 60804, 'Limoncito'),
(608, 60805, 'Pittier'),
(608, 60806, 'Gutierrez Brown'),
(609, 60901, 'Parrita'),
(610, 61001, 'Corredores'),
(610, 61002, 'La Cuesta'),
(610, 61003, 'Paso Canoas'),
(610, 61004, 'Laurel'),
(611, 61101, 'Jacó'),
(611, 61102, 'Tárcoles'),
(701, 70101, 'Limón'),
(701, 70102, 'Valle  La Estrella'),
(701, 70103, 'Río Blanco'),
(701, 70104, 'Matama'),
(702, 70201, 'Guápiles'),
(702, 70202, 'Jiménez'),
(702, 70203, 'Rita'),
(702, 70204, 'Roxana'),
(702, 70205, 'Cariari'),
(702, 70206, 'Colorado'),
(702, 70207, 'La Colonia'),
(703, 70301, 'Siquirres'),
(703, 70302, 'Pacuarito'),
(703, 70303, 'Florida'),
(703, 70304, 'Germania'),
(703, 70305, 'Cairo'),
(703, 70306, 'Alegría'),
(704, 70401, 'Bratsi'),
(704, 70402, 'Sixaola'),
(704, 70403, 'Cahuita'),
(704, 70404, 'Telire'),
(705, 70501, 'Matina'),
(705, 70502, 'Batán'),
(705, 70503, 'Carrandí'),
(706, 70601, 'Guácimo'),
(706, 70602, 'Mercedes'),
(706, 70603, 'Pocora'),
(706, 70604, 'Río Jiménez'),
(706, 70605, 'Duacarí');