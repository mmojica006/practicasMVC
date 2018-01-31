Select id, imgFondo, tipoSlide, imgProducto, estiloImgProducto, estiloTextoSlide, titulo1, titulo2, titulo3, boton, url, fecha from crediweb.slide
USE crediweb;

CREATE TABLE `slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imgFondo` text COLLATE utf8_spanish_ci NOT NULL,
  `tipoSlide` text COLLATE utf8_spanish_ci NOT NULL,
  `imgProducto` text COLLATE utf8_spanish_ci NOT NULL,
  `estiloImgProducto` text COLLATE utf8_spanish_ci NOT NULL,
  `estiloTextoSlide` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo1` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo2` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo3` text COLLATE utf8_spanish_ci NOT NULL,
  `boton` text COLLATE utf8_spanish_ci NOT NULL,
  `url` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


INSERT INTO `crediweb`.`slide`(`id`,`imgFondo`,`tipoSlide`,`imgProducto`,`estiloImgProducto`,`estiloTextoSlide`,`titulo1`,`titulo2`,`titulo3`,`boton`,`url`,`fecha`) VALUES (1,'vistas/img/slide/slide1/slidepulperia.jpg','slideOpcion2','','','{
  "width": "40%",
  "top": "25%",
  "left": "",
  "right": "10%"
}','{"texto": "SOMOS TU OPORTUNIDAD PARA CRECER" ,"color": "#333"}','{"texto": "TE OFRECEMOS CAPITAL DE TRABAJO PARA INVERTIR EN TU NEGOCIO " ,"color": "#777"}','{"texto": "SOLICITA TU CREDITO AQUI" ,"color": "#888"}','<button class="btn btn-default backColor text-uppercase">

              Solicitar<span class="fa fa-chevron-right"></span>

              </button>','','2018-01-30 17:08:25');
INSERT INTO `crediweb`.`slide`(`id`,`imgFondo`,`tipoSlide`,`imgProducto`,`estiloImgProducto`,`estiloTextoSlide`,`titulo1`,`titulo2`,`titulo3`,`boton`,`url`,`fecha`) VALUES (3,'vistas/img/slide/default/back_default.jpg','slideOpcion1','vistas/img/slide/slide1/Beneficios.png','{"top": "10%" ,"right": "10%" ,"width": "30%", "left":""}','{"top": "20%" ,"right": "" ,"width": "40%", "left":"10%"}','{"texto": "Tenemos los mejores beneficios" ,"color": "#333"}','{"texto": "APROBACION Y RENOVACION INMEDIATA" ,"color": "#777"}','{"texto": "<br><p>Sin fiador</p> <p> Seguros gratis </p> <p>Acumulas puntos canjeables por premios</p>" ,"color": "#888"}','<button class="btn btn-default backColor text-uppercase">

              VER MAS<span class="fa fa-chevron-right"></span>

              </button>','#','2018-01-30 17:06:11');
INSERT INTO `crediweb`.`slide`(`id`,`imgFondo`,`tipoSlide`,`imgProducto`,`estiloImgProducto`,`estiloTextoSlide`,`titulo1`,`titulo2`,`titulo3`,`boton`,`url`,`fecha`) VALUES (4,'vistas/img/slide/slide4/slide3.jpg','slideOpcion1','','','{
  "width": "40%",
  "top": "20%",
  "left": "10%",
  "right": ""
}','{"texto": "CADA DIA MAS CERCA DE VOS" ,"color": "#333"}','{"texto": "Con presencia en toda Nicaragua" ,"color": "#777"}','{"texto": "Llegamos hasta tu negocio en cualquier parte de Nicaragua" ,"color": "#888"}','','','2018-01-30 09:06:53');
