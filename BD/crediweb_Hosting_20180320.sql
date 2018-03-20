-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 20, 2018 at 03:52 PM
-- Server version: 5.6.39-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crediweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `administradores`
--

CREATE TABLE IF NOT EXISTS `administradores` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `administradores`
--

INSERT INTO `administradores` (`id`, `nombre`, `email`, `foto`, `password`, `perfil`, `fecha`) VALUES
(1, 'Tienda Virtual', 'admin@crediexpress.com', '', 'admin123', 'superadministrador', '2017-12-05 04:08:44'),
(2, 'Editor de la Tienda', 'editor@tiendavirtual.com', '', 'editor123', 'editor', '2017-12-05 04:08:44');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `img` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo1` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo2` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo3` text COLLATE utf8_spanish_ci NOT NULL,
  `estilo` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `ruta`, `img`, `titulo1`, `titulo2`, `titulo3`, `estilo`, `fecha`) VALUES
(1, 'sin-categoria', 'vistas/img/banner/default.jpg', '{\r\n	"texto": "OFERTAS ESPECIALES",\r\n	"color": "#fff"\r\n}', '{\r\n	"texto": "50% off",\r\n	"color": "#fff"\r\n}', '{\r\n	"texto": "Termina el 31 de Octubre",\r\n	"color": "#fff"\r\n}', 'textoDer', '2017-10-12 18:14:41'),
(2, 'articulos-gratis', 'vistas/img/banner/ropa.jpg', '{\r\n	"texto": "ARTÍCULOS GRATIS",\r\n	"color": "#fff"\r\n}', '{\r\n\r\n	"texto": "¡Entrega inmediata!",\r\n\r\n	"color": "#fff"\r\n\r\n}', '{\r\n	"texto": "Disfrútalo",\r\n	"color": "#fff"\r\n}', 'textoIzq', '2017-10-12 18:05:43'),
(3, 'desarrollo-web', 'vistas/img/banner/web.jpg', '{\r\n	"texto": "OFERTAS ESPECIALES",\r\n	"color": "#fff"\r\n}', '{\r\n\r\n	"texto": "50% off",\r\n\r\n	"color": "#fff"\r\n\r\n}', '{\r\n	"texto": "Termina el 31 de Octubre",\r\n	"color": "#fff"\r\n}', 'textoCentro', '2017-10-12 18:05:43'),
(4, 'ropa-para-hombre', 'vistas/img/banner/ropaHombre.jpg', '{\r\n	"texto": "OFERTAS ESPECIALES",\r\n	"color": "#fff"\r\n}', '{\r\n\r\n	"texto": "50% off",\r\n\r\n	"color": "#fff"\r\n\r\n}', '{\r\n	"texto": "Termina el 31 de Octubre",\r\n	"color": "#fff"\r\n}', 'textoDer', '2017-10-12 18:06:15');

-- --------------------------------------------------------

--
-- Table structure for table `cabeceras`
--

CREATE TABLE IF NOT EXISTS `cabeceras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `palabrasClaves` text COLLATE utf8_spanish_ci NOT NULL,
  `portada` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cabeceras`
--

INSERT INTO `cabeceras` (`id`, `ruta`, `titulo`, `descripcion`, `palabrasClaves`, `portada`, `fecha`) VALUES
(1, 'inicio', 'Tienda Virtual', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam accusantium enim esse eos officiis sit officia', 'Lorem ipsum, dolor sit amet, consectetur, adipisicing, elit, Quisquam, accusantium, enim, esse', 'vistas/img/cabeceras/default.jpg', '2017-11-17 14:58:16'),
(2, 'desarrollo-web', 'Desarrollo Web', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam accusantium enim esse eos officiis sit officia', 'Lorem ipsum, dolor sit amet, consectetur, adipisicing, elit, Quisquam, accusantium, enim, esse', 'vistas/img/cabeceras/web.jpg', '2017-11-17 14:59:28');

-- --------------------------------------------------------

--
-- Table structure for table `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bannertitulo` text COLLATE utf8_spanish_ci NOT NULL,
  `bannerdescripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `imgFondo` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contacto`
--

INSERT INTO `contacto` (`id`, `bannertitulo`, `bannerdescripcion`, `titulo`, `descripcion`, `email`, `imgFondo`, `fecha`) VALUES
(1, 'Contamos con sucursales en todo el país', 'Realizamos todas las gestiones desde la comodidad de su negocio', '', '<p>&nbsp;</p>\r\n\r\n<p>Por favor llene todos&nbsp;los campos del formulario, nosotros nos estaremos poniendo en contacto con usted a la brevedad&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-size:18px"><strong>&nbsp;&Uacute;nete al Equipo!</strong></span><br />\r\n<img alt="bar_unete" src="http://www.crediexpress.com.ni/images/stories/bar_unete.png" style="height:2px; width:320px" /></p>\r\n\r\n<ul>\r\n	<li>Si eres un profesional l&iacute;der y est&aacute;s comprometido con la excelencia, env&iacute;anos tu curr&iacute;culo actualizado a reclutamiento@crediexpress.com.ni y postula para un puesto de trabajo en Crediexpress.</li>\r\n</ul>\r\n', 'info@crediexpress.com.ni', 'vistas/img/plantilla/imgContacto.png', '2018-03-20 20:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE IF NOT EXISTS `markers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `type` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`, `type`) VALUES
(24, 'Managua Sur', '', 12.116500, -86.315598, ''),
(23, 'Managua Norte', '', 12.149050, -86.199112, ''),
(21, 'León', '', 12.446730, -86.871353, ''),
(19, 'Juigalpa', '', 12.107010, -85.365227, ''),
(22, 'Managua Centro', '', 12.101420, -86.259010, ''),
(18, 'Jinotepe', '', 11.850400, -86.199783, ''),
(16, 'Esteli', '', 13.100030, -86.351952, ''),
(17, 'Jalapa', '', 13.920300, -86.125290, ''),
(14, 'Boaco', '', 12.473470, -85.660240, ''),
(15, 'Chinandega', '', 12.629540, -87.122528, ''),
(34, 'new', '', 89.000000, 89.000000, ''),
(13, 'Bluefields', '', 12.007620, -83.758743, ''),
(25, 'Masaya', '', 11.973100, -86.095322, ''),
(26, 'Matagalpa', '', 12.925560, -85.917953, ''),
(27, 'Nueva Guinea', '', 11.688650, -84.456093, ''),
(28, 'Ocotal', '', 13.628990, -86.475029, ''),
(29, 'Puerto Cabezas', '', 14.027960, -83.381790, ''),
(30, 'Rivas', '', 11.440110, -85.830757, ''),
(31, 'Sebaco', '', 12.850230, -86.098969, ''),
(32, 'Ticuantepe', '', 12.041840, -86.202728, ''),
(33, 'Tipitapa', '', 12.165070, -86.092407, ''),
(35, 'name', 'address', 0.000000, 0.000000, 'type'),
(36, 'Somotillo', '', 10000.000000, 10000.000000, '');

-- --------------------------------------------------------

--
-- Table structure for table `plantilla`
--

CREATE TABLE IF NOT EXISTS `plantilla` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `barraSuperior` text COLLATE utf8_spanish_ci NOT NULL,
  `textoSuperior` text COLLATE utf8_spanish_ci NOT NULL,
  `colorFondo` text COLLATE utf8_spanish_ci NOT NULL,
  `colorTexto` text COLLATE utf8_spanish_ci NOT NULL,
  `logo` text COLLATE utf8_spanish_ci NOT NULL,
  `icono` text COLLATE utf8_spanish_ci NOT NULL,
  `redesSociales` text COLLATE utf8_spanish_ci NOT NULL,
  `apiFacebook` text COLLATE utf8_spanish_ci NOT NULL,
  `pixelFacebook` text COLLATE utf8_spanish_ci NOT NULL,
  `googleAnalytics` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `plantilla`
--

INSERT INTO `plantilla` (`id`, `barraSuperior`, `textoSuperior`, `colorFondo`, `colorTexto`, `logo`, `icono`, `redesSociales`, `apiFacebook`, `pixelFacebook`, `googleAnalytics`, `fecha`) VALUES
(1, '#f4f4f4', '#ffffff', '#4498bd', '#ffffff', 'vistas/img/plantilla/logo.png', 'vistas/img/plantilla/icono.png', '[{"red":"fa-facebook","estilo":"facebookBlanco","url":"https://es-la.facebook.com/crediexpressnicaragua/","activo":1},{"red":"fa-youtube","estilo":"youtubeBlanco","url":"http://youtube.com/","activo":0},{"red":"fa-twitter","estilo":"twitterBlanco","url":"http://twitter.com/","activo":0},{"red":"fa-google-plus","estilo":"google-plusBlanco","url":"http://google.com/","activo":0},{"red":"fa-instagram","estilo":"instagramBlanco","url":"http://instagram.com/","activo":0}]', '<script>   window.fbAsyncInit = function() {     FB.init({       appId      : ''99999999999'',       cookie     : true,       xfbml      : true,       version    : ''v2.10''     });            FB.AppEvents.logPageView();             };    (function(d, s, id){      var js, fjs = d.getElementsByTagName(s)[0];      if (d.getElementById(id)) {return;}      js = d.createElement(s); js.id = id;      js.src = "https://connect.facebook.net/en_US/sdk.js";      fjs.parentNode.insertBefore(js, fjs);    }(document, ''script'', ''facebook-jssdk''));  </script>', '<!-- Facebook Pixel Code --> 	<script> 	  !function(f,b,e,v,n,t,s) 	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod? 	  n.callMethod.apply(n,arguments):n.queue.push(arguments)}; 	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version=''2.0''; 	  n.queue=[];t=b.createElement(e);t.async=!0; 	  t.src=v;s=b.getElementsByTagName(e)[0]; 	  s.parentNode.insertBefore(t,s)}(window, document,''script'', 	  ''https://connect.facebook.net/en_US/fbevents.js''); 	  fbq(''init'', ''99999999999''); 	  fbq(''track'', ''PageView''); 	</script> 	<noscript><img height="1" width="1" style="display:none" 	  src="https://www.facebook.com/tr?id=149877372404434&ev=PageView&noscript=1" 	/></noscript> <!-- End Facebook Pixel Code -->', '	<!-- Global site tag (gtag.js) - Google Analytics --> 	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-999999-1"></script> 	<script> 	  window.dataLayer = window.dataLayer || []; 	  function gtag(){dataLayer.push(arguments);} 	  gtag(''js'', new Date());  	  gtag(''config'', ''UA-9999999-1''); 	</script>', '2018-03-12 17:55:21');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
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
  `orden` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `nombre`, `imgFondo`, `tipoSlide`, `imgProducto`, `estiloImgProducto`, `estiloTextoSlide`, `titulo1`, `titulo2`, `titulo3`, `boton`, `url`, `orden`, `fecha`) VALUES
(1, 'OPORTUNIDAD', 'vistas/img/slide/slide1/fondo.jpg', 'slideOpcion2', 'vistas/img/slide/slide1/producto.png', '{"top":"5","right":"","left":"15","width":"30"}', '{"top":"20","right":"10","left":"","width":"40"}', '{"texto":"SOMOS TU OPORTUNIDAD PARA CRECER","color":"#333"}', '{"texto":"TE OFRECEMOS CAPITAL DE TRABAJO PARA INVERTIR EN TU NEGOCIO","color":"#777777"}', '{"texto":"","color":"#888"}', 'Solicita tu prestamo', 'contacto', 1, '2018-03-12 18:04:05'),
(2, 'BENEFICIOS', 'vistas/img/slide/slide2/fondo.jpg', 'slideOpcion1', 'vistas/img/slide/slide2/producto.png', '{"top":"0","right":"5","left":"","width":"30"}', '{"top":"5","right":"","left":"5","width":"40"}', '{"texto":"Tenemos los mejores beneficios","color":"#333"}', '{"texto":"APROBACION Y RENOVACION INMEDIATA","color":"#777"}', '{"texto":"<br>Sin fiador <br> Seguros gratis  <br>Acumulas puntos canjeables por premios","color":"#888"}', 'Link', 'productos', 2, '2018-03-12 14:36:07'),
(6, 'PRESENCIA', 'vistas/img/slide/slide6/fondo.jpg', 'slideOpcion1', '', '{"top":"","right":"","left":"","width":""}', '{"top":"20","right":"","left":"15","width":"40"}', '{"texto":"Con presencia en toda Nicaragua","color":"#333"}', '{"texto":"Llegamos hasta tu negocio en cualquier parte de Nicaragua","color":"#777777"}', '{"texto":"","color":"#888"}', '', '#', 3, '2018-03-12 14:39:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adicional`
--

CREATE TABLE IF NOT EXISTS `tbl_adicional` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipsFinanc` text COLLATE utf8_spanish_ci,
  `preguntas` text COLLATE utf8_spanish_ci,
  `tarifario` text COLLATE utf8_spanish_ci,
  `tarifarioEstado` int(11) DEFAULT NULL,
  `contratoEstado` int(11) DEFAULT NULL,
  `contratoDesc` text COLLATE utf8_spanish_ci,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_adicional`
--

INSERT INTO `tbl_adicional` (`id`, `tipsFinanc`, `preguntas`, `tarifario`, `tarifarioEstado`, `contratoEstado`, `contratoDesc`, `fecha`) VALUES
(1, '<p><strong>1. Ahorre antes de iniciar</strong><br />\r\n<br />\r\nLos expertos de Mastercard se&ntilde;alan que dado que durante los primeros meses no va a contar con ingresos fijos, es importante&nbsp;<strong>ahorrar</strong>&nbsp;para que pueda contar con los recursos que permitan solventar gastos durante ese periodo de emprendimiento.<br />\r\n<br />\r\nAs&iacute; mismo Jason Papier, experto en opciones sobre acciones en Silicon Valley y el presidente de la firma de gesti&oacute;n financiera Fluido Wealth Partners, explic&oacute; a Entrepreneur que lo mejor es que los empresarios tengan en cuenta el valor de los gastos personales que pueda contabilizar durante un a&ntilde;o.<br />\r\n<br />\r\n<strong>2. Reduzca los gastos mensuales</strong><br />\r\n<br />\r\nSi no cuenta con un &ldquo;robusto&rdquo; ahorro, lo mejor es hacer un&nbsp;<strong>recorte de gastos</strong>: la televisi&oacute;n por cable, cambiar a un plan de tel&eacute;fono celular de bajo costo y dejar de comer fuera.<br />\r\n<br />\r\nIncluso si se trata de un emprendedor, debe ser consciente que la dieta del at&uacute;n y el arroz puede ser una buena alternativa durante los primeros a&ntilde;os del negocio<br />\r\n<br />\r\n<strong>3. Separe las finanzas del negocio con las personales.&nbsp;</strong><br />\r\n<br />\r\nEste es uno de los peores errores en el tema financiero, ya que no puede &ldquo;auto pedirse prestado&rdquo; bien sea para sus cosas personales o para su negocio, como por ejemplo, hacer que las utilidades se inviertan en gastos personales.&nbsp;<br />\r\n<br />\r\nMastercard sugiere que para evitar esto es importante que el emprendedor se asigne un&nbsp;<strong>sueldo fijo</strong>&nbsp;y no disponer de m&aacute;s dinero que el estipulado.<br />\r\n<br />\r\n<strong>4. Obtenga ayuda de sus amigos y familiares.</strong><br />\r\n<br />\r\nUna ayuda fundamental son sus familiares y amigos, quienes pueden facilitarle dinero para poner en marcha su proyecto. Eso s&iacute;, por seguridad suya y de ellos, procure que todo quede registrado.<br />\r\n<br />\r\n<em>Le puede interesar leer&nbsp;</em><a href="http://www.finanzaspersonales.co/credito/articulo/el-gran-riesgo-fiador/56141" target="_blank"><em>&ldquo;El riesgo de ser fiador&rdquo;</em></a><br />\r\n<br />\r\n<strong>5. Mantenga las deudas bajo control.&nbsp;</strong><br />\r\n<br />\r\nRecuerde que siempre hay un punto para controlar sus&nbsp;<strong>deudas</strong>. No todo se puede comprar en un s&oacute;lo momento. Por eso, redacte una lista de prioridades y, conforme se va desarrollando el negocio, adquiera lo que va necesitando.<br />\r\n<br />\r\n<em>&iquest;Sabe c&oacute;mo<a href="http://www.finanzaspersonales.co/credito/articulo/como-saber-hasta-cuanto-dinero-endeudarse-su-capacidad-endeudamiento/56072" target="_blank">&nbsp;calcular su capacidad de endeudamiento</a>?</em><br />\r\n<br />\r\n<strong>6. Considere hacer una pausa de ahorro para pensi&oacute;n</strong><br />\r\n<br />\r\nEntrepreneur se&ntilde;ala que muchos empresarios, al inicio, no ahorran para su&nbsp;<strong>jubilaci&oacute;n</strong>&nbsp;y los asesores de inversi&oacute;n consideran que esto puede ser una apuesta acertada. La publicaci&oacute;n se&ntilde;ala que &ldquo;el 95% de los empresarios que ha trabajado con haber tomado ese enfoque&rdquo;.<br />\r\n<br />\r\n<strong>7. Prot&eacute;jase a usted mismo</strong><br />\r\n<br />\r\nEl portal Inc. asegura que lo m&aacute;s importante es que se proteja a usted mismo y siempre resguarde su patrimonio. Esto hace referencia tambi&eacute;n al tema de los&nbsp;<strong>seguros</strong>, no s&oacute;lo de vida, sino tambi&eacute;n de salud y de inmuebles pues, de no contar con &eacute;ste, un accidente laboral puede arruinar por completo sus finanzas.</p>\r\n', '<p><strong><span style="font-size:11.0pt">&iquest;Cu&aacute;les son los requisitos para obtener un cr&eacute;dito con Crediexpress?</span></strong></p>\r\n\r\n<p>Tener un negocio propio con un periodo m&iacute;nimo de existencia de seis meses y su c&eacute;dula de identidad.&nbsp;</p>\r\n\r\n<p><strong><span style="font-size:11.0pt">&iquest;Si no tengo un negocio, pueden darme un pr&eacute;stamo?</span></strong></p>\r\n\r\n<p>Para poder aplicar a un cr&eacute;dito con nosotros debe ser due&ntilde;o de un negocio</p>\r\n\r\n<p><strong><span style="font-size:11.0pt">&iquest;En cu&aacute;nto tiempo dan respuesta a mi solicitud de cr&eacute;dito?</span></strong></p>\r\n\r\n<p>Te garantizamos una respuesta a tu solicitud en un m&aacute;ximo de 24 horas</p>\r\n\r\n<p><strong><span style="font-size:11.0pt">&iquest;Cu&aacute;nto es la tasa de inter&eacute;s?</span></strong></p>\r\n\r\n<p>Las tasas varian dependiendo del monto solicitado y condiciones aprobadas</p>\r\n\r\n<p><strong><span style="font-size:11.0pt">&iquest;Cu&aacute;nto es el monto que puedo prestar?</span></strong></p>\r\n\r\n<p>El monto otorgado va a depender del historial crediticio y de la capacidad de pago conforme el flujo de su negocio</p>\r\n\r\n<p><strong><span style="font-size:11.0pt">&iquest;Si pago antes de la fecha establecida, bajan los intereses?</span></strong></p>\r\n\r\n<p>Usted pagar&aacute; los intereses generados hasta la fecha en la que realiza su cancelaci&oacute;n</p>\r\n\r\n<p><strong><span style="font-size:11.0pt">&iquest;Si tengo una duda, queja, reclamo o necesito informaci&oacute;n, qu&eacute; debo hacer?</span></strong></p>\r\n\r\n<p>Nuestra Central de Atenci&oacute;n al Usuario est&aacute; disponible de lunes a viernes de 7:30am a 6:00pm y los s&aacute;bados de 8:00 am a 12:00 pm. Puede llamarnos al 8749-1800 (claro) y al 8299-6100 (movistar)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>&nbsp;</p>\r\n\r\n<table cellspacing="0" style="border-collapse:collapse; border:none; width:565pt">\r\n	<tbody>\r\n		<tr>\r\n			<td style="height:15.75pt; vertical-align:bottom; white-space:nowrap; width:164pt">&nbsp;</td>\r\n			<td style="height:15.75pt; vertical-align:bottom; white-space:nowrap; width:115pt">&nbsp;</td>\r\n			<td style="height:15.75pt; vertical-align:bottom; white-space:nowrap; width:106pt">&nbsp;</td>\r\n			<td style="height:15.75pt; vertical-align:bottom; white-space:nowrap; width:109pt">&nbsp;</td>\r\n			<td style="height:15.75pt; vertical-align:bottom; white-space:nowrap; width:71pt">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="5" style="background-color:#8ea9db; height:18.75pt; text-align:center; vertical-align:bottom; white-space:nowrap"><span style="font-size:14pt"><strong><span style="color:black"><span style="font-family:Calibri,sans-serif">Tasas de Interes Anuales</span></span></strong></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td style="background-color:#8497b0; height:16.5pt; text-align:center; vertical-align:bottom; white-space:nowrap"><span style="font-size:12pt"><span style="color:white"><span style="font-family:Calibri,sans-serif">Montos&nbsp; $</span></span></span></td>\r\n			<td style="background-color:#8497b0; height:16.5pt; text-align:center; vertical-align:bottom; white-space:nowrap"><span style="font-size:12pt"><span style="color:white"><span style="font-family:Calibri,sans-serif">Tasa efectiva anual&nbsp; %</span></span></span></td>\r\n			<td style="background-color:#8497b0; height:16.5pt; text-align:center; vertical-align:bottom; white-space:nowrap"><span style="font-size:12pt"><span style="color:white"><span style="font-family:Calibri,sans-serif">Tasa efectiva diaria %</span></span></span></td>\r\n			<td style="background-color:#8497b0; height:16.5pt; text-align:center; vertical-align:bottom; white-space:nowrap"><span style="font-size:12pt"><span style="color:white"><span style="font-family:Calibri,sans-serif">Comisi&oacute;n Desembolso</span></span></span></td>\r\n			<td style="background-color:#8497b0; height:16.5pt; text-align:center; vertical-align:bottom; white-space:nowrap"><span style="font-size:12pt"><span style="color:white"><span style="font-family:Calibri,sans-serif">Gastos legales</span></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td style="border-color:windowtext; height:15.0pt; text-align:center; vertical-align:bottom; white-space:nowrap"><span style="font-size:11pt"><span style="color:black"><span style="font-family:Calibri,sans-serif">$145 - $500</span></span></span></td>\r\n			<td style="border-color:windowtext; height:15.0pt; text-align:center; vertical-align:bottom; white-space:nowrap"><span style="font-size:11pt"><span style="color:black"><span style="font-family:Calibri,sans-serif">304.96%</span></span></span></td>\r\n			<td style="border-color:windowtext; height:15.0pt; text-align:center; vertical-align:bottom; white-space:nowrap"><span style="font-size:11pt"><span style="color:black"><span style="font-family:Calibri,sans-serif">0.85%</span></span></span></td>\r\n			<td style="border-color:windowtext; height:15.0pt; text-align:center; vertical-align:bottom; white-space:nowrap"><span style="font-size:11pt"><span style="color:black"><span style="font-family:Calibri,sans-serif">0%</span></span></span></td>\r\n			<td style="border-color:windowtext; height:15.0pt; text-align:center; vertical-align:bottom; white-space:nowrap"><span style="font-size:11pt"><span style="color:black"><span style="font-family:Calibri,sans-serif">0%</span></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td style="border-color:windowtext; height:15.0pt; text-align:center; vertical-align:bottom; white-space:nowrap"><span style="font-size:11pt"><span style="color:black"><span style="font-family:Calibri,sans-serif">$501 - $5000</span></span></span></td>\r\n			<td style="height:15.0pt; text-align:center; vertical-align:bottom; white-space:nowrap"><span style="font-size:11pt"><span style="color:black"><span style="font-family:Calibri,sans-serif">160.17%</span></span></span></td>\r\n			<td style="height:15.0pt; text-align:center; vertical-align:bottom; white-space:nowrap"><span style="font-size:11pt"><span style="color:black"><span style="font-family:Calibri,sans-serif">0.44%</span></span></span></td>\r\n			<td style="height:15.0pt; text-align:center; vertical-align:bottom; white-space:nowrap"><span style="font-size:11pt"><span style="color:black"><span style="font-family:Calibri,sans-serif">0%</span></span></span></td>\r\n			<td style="border-color:windowtext; height:15.0pt; text-align:center; vertical-align:bottom; white-space:nowrap"><span style="font-size:11pt"><span style="color:black"><span style="font-family:Calibri,sans-serif">0%</span></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td style="border-color:windowtext; height:15.75pt; text-align:center; vertical-align:bottom; white-space:nowrap"><span style="font-size:11pt"><span style="color:black"><span style="font-family:Calibri,sans-serif">$5001 - $10000</span></span></span></td>\r\n			<td style="border-color:windowtext; height:15.75pt; text-align:center; vertical-align:bottom; white-space:nowrap"><span style="font-size:11pt"><span style="color:black"><span style="font-family:Calibri,sans-serif">112.93%</span></span></span></td>\r\n			<td style="border-color:windowtext; height:15.75pt; text-align:center; vertical-align:bottom; white-space:nowrap"><span style="font-size:11pt"><span style="color:black"><span style="font-family:Calibri,sans-serif">0.31%</span></span></span></td>\r\n			<td style="border-color:windowtext; height:15.75pt; text-align:center; vertical-align:bottom; white-space:nowrap"><span style="font-size:11pt"><span style="color:black"><span style="font-family:Calibri,sans-serif">0%</span></span></span></td>\r\n			<td style="border-color:windowtext; height:15.75pt; text-align:center; vertical-align:bottom; white-space:nowrap"><span style="font-size:11pt"><span style="color:black"><span style="font-family:Calibri,sans-serif">0%</span></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">&nbsp;</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">&nbsp;</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">&nbsp;</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">&nbsp;</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap"><span style="font-size:11pt"><strong><span style="color:black"><span style="font-family:Calibri,sans-serif">Tasa Anual Interes Moratorio</span></span></strong></span></td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap"><span style="font-size:11pt"><strong><span style="color:black"><span style="font-family:Calibri,sans-serif">42%</span></span></strong></span></td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">&nbsp;</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">&nbsp;</td>\r\n			<td style="height:15.0pt; vertical-align:bottom; white-space:nowrap">&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-size:12px">Las tasas publicadas corresponden a tasas efectivas&nbsp;anuales, las tasas que se muestran son un promedio calculado por monto del cr&eacute;dito. Para consultas adicionales puede&nbsp;contactarse a nuestra Central de Atenci&oacute;n al Usuario al n&uacute;mero 8749-1800</span></p>\r\n', 1, NULL, NULL, '2018-03-20 20:44:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_canales`
--

CREATE TABLE IF NOT EXISTS `tbl_canales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bannertitulo` text COLLATE utf8_spanish_ci,
  `bannerdescripcion` text COLLATE utf8_spanish_ci,
  `titulo` text COLLATE utf8_spanish_ci,
  `descripcion` text COLLATE utf8_spanish_ci,
  `imgFondo` text COLLATE utf8_spanish_ci,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_canales`
--

INSERT INTO `tbl_canales` (`id`, `bannertitulo`, `bannerdescripcion`, `titulo`, `descripcion`, `imgFondo`, `fecha`) VALUES
(1, 'Canales de Atención ', 'Puede realizar sus consultas y gestiones en nuestros canales disponibles', 'Estamos para servirle', '<ul>\r\n	<li><strong>L&iacute;nea de Atenci&oacute;n al Usuario: </strong>Para realizar sus gestiones puede llamarnos a nuestra Central de Atenci&oacute;n al Usuario&nbsp;al 8749-1800 (claro) y al 8299-6100 (movistar) la cual est&aacute; disponible de lunes a viernes de 7:30 am a 6:00 pm y los s&aacute;bados de 8:00 am a 12:00 pm.&nbsp;</li>\r\n	<li><strong>Visitas personalizadas de nuestro personal: </strong>Nuestro personal est&aacute; debidamente capacitado para atender sus gestiones desde la comodidad de su casa o negocio</li>\r\n	<li><strong>Secci&oacute;n de cont&aacute;ctenos:&nbsp;</strong>Puede llenar nuestro formulario en la secci&oacute;n de cont&aacute;ctenos presente en esta p&aacute;gina web y uno de nuestros ejecutivos se estar&aacute; poniendo en contacto con usted</li>\r\n	<li><strong>Facebook:&nbsp;</strong>Puede escribirnos en&nbsp;nuestra p&aacute;gina de Facebook&nbsp;<em><u>es-la.facebook.com/crediexpressnicaragua/</u></em> en horario de&nbsp;lunes a viernes de 7:30 am a 6:00 pm y los s&aacute;bados de 8:00 am a 12:00 pm donde un ejecutivo le estar&aacute; atendiendo&nbsp;</li>\r\n</ul>\r\n', 'vistas/img/plantilla/imgContacto.png', '2018-03-19 23:51:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mensajes`
--

CREATE TABLE IF NOT EXISTS `tbl_mensajes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8_spanish_ci,
  `apellido` text COLLATE utf8_spanish_ci,
  `cedula` text COLLATE utf8_spanish_ci,
  `telefono` text COLLATE utf8_spanish_ci,
  `ciudad` text COLLATE utf8_spanish_ci,
  `monto` text COLLATE utf8_spanish_ci,
  `email` text COLLATE utf8_spanish_ci,
  `mensaje` text COLLATE utf8_spanish_ci,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_mensajes`
--

INSERT INTO `tbl_mensajes` (`id`, `nombre`, `apellido`, `cedula`, `telefono`, `ciudad`, `monto`, `email`, `mensaje`, `fecha`) VALUES
(1, 'test', 'test', '0010703830001C', '5656989989', 'managua', '50000', 'test@gmail.com', 'test', '2018-03-06 00:04:54'),
(2, 'Cristhian', 'Molina', '2412609900001T', '83737680', 'Managua', '10000', 'cristhian.molina@crediexpress.com.ni', 'Quiero un prestamo', '2018-03-12 17:31:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nosotros`
--

CREATE TABLE IF NOT EXISTS `tbl_nosotros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bannertitulo` text COLLATE utf8_spanish_ci,
  `bannerdescripcion` text COLLATE utf8_spanish_ci,
  `titulo` text COLLATE utf8_spanish_ci,
  `descripcion` text COLLATE utf8_spanish_ci,
  `mision` text COLLATE utf8_spanish_ci NOT NULL,
  `vision` text COLLATE utf8_spanish_ci NOT NULL,
  `valores` text COLLATE utf8_spanish_ci NOT NULL,
  `imgFondo` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_nosotros`
--

INSERT INTO `tbl_nosotros` (`id`, `bannertitulo`, `bannerdescripcion`, `titulo`, `descripcion`, `mision`, `vision`, `valores`, `imgFondo`, `fecha`) VALUES
(1, '', ' ', 'Crediexpress', '<p><strong>Somos una instituci&oacute;n de servicios financieros que cumple con las necesidades de requerimientos de capital de trabajo para microempresarios.</strong><em><strong> </strong></em></p>\r\n\r\n<p><em>Nuestro objetivo es hacer posible que nuestros clientes aumenten su capital de trabajo, promuevan el crecimiento de su negocio y por ende, mejoren su nivel de vida.</em></p>\r\n', '<p><em><strong><img alt="" src="/vistas/plugins/kcfinder-3.12/upload/images/476116370_e188ad2d14.jpg" style="height:120px; width:150px" /><img alt="" src="/vistas/plugins/kcfinder-3.12/upload/images/dinero.jpg" style="height:141px; width:250px" />Creamos soluciones innovadoras para el emprendedor, facilitando la conquista de sus oportunidades de negocio</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p><em><strong>Ser la soluci&oacute;n de los emprendedores a trav&eacute;s de la creaci&oacute;n de tecnolog&iacute;a financiera de vanguardia</strong></em></p>\r\n', '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt="" src="/vistas/plugins/kcfinder-3.12/upload/images/Valores.jpg" style="height:300px; width:300px" /></p>\r\n\r\n<ul>\r\n	<li><strong>E</strong><strong>spir&iacute;tu de fam</strong><strong>ilia:</strong> Nos apoyamos para salir adelante ante los retos&nbsp;</li>\r\n	<li><strong>Integridad</strong><strong>:</strong> Actuamos de manera correcta y transparente</li>\r\n	<li><strong>Pasi&oacute;n</strong><strong>:</strong><strong> </strong>Trabajamos con compromiso y entrega en todo lo que hacemos&nbsp;</li>\r\n	<li><strong>Creatividad:</strong> La innovaci&oacute;n es la base de nuestro ADN</li>\r\n	<li><strong>Empat&iacute;a:</strong> Siempre el cliente es primero. Nos enfocamos en resolver sus necesidades</li>\r\n</ul>\r\n', 'vistas/img/plantilla/imgNosotros.png', '2018-03-14 15:51:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_productos`
--

CREATE TABLE IF NOT EXISTS `tbl_productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bannertitulo` text COLLATE utf8_spanish_ci NOT NULL,
  `bannerdescripcion` text COLLATE utf8_spanish_ci,
  `crediPyme` text COLLATE utf8_spanish_ci,
  `crediNegocios` text COLLATE utf8_spanish_ci,
  `productivo` text COLLATE utf8_spanish_ci,
  `microturbo` text COLLATE utf8_spanish_ci,
  `turbo` text COLLATE utf8_spanish_ci,
  `megaturbo` text COLLATE utf8_spanish_ci,
  `imgFondo` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_suscriptores`
--

CREATE TABLE IF NOT EXISTS `tbl_suscriptores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8_spanish_ci,
  `email` text COLLATE utf8_spanish_ci,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_suscriptores`
--

INSERT INTO `tbl_suscriptores` (`id`, `nombre`, `email`, `fecha`) VALUES
(1, 'test', 'test@gmail.com', '2018-03-06 00:04:54'),
(2, 'Cristhian', 'cristhian.molina@crediexpress.com.ni', '2018-03-12 17:31:01');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `modo` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `verificacion` int(11) NOT NULL,
  `emailEncriptado` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `password`, `email`, `modo`, `foto`, `verificacion`, `emailEncriptado`, `fecha`) VALUES
(2, 'Francisco gomez', '$2a$07$asxx54ahjppf45sd87a5auxq/SS293XhTEeizKWMnfhnpfay0AALe', 'pepe@gmail.com', 'directo', 'vistas/img/usuarios/2/104.jpg', 0, '6b0becddecd5a06042b3f8078c97f2e0', '2017-10-27 15:55:02'),
(3, 'Juan Fernando Urrego Alvarez', 'null', 'juanustudio@hotmail.com', 'facebook', 'http://graph.facebook.com/10215085853809464/picture?type=large', 0, 'null', '2017-10-27 15:55:12'),
(4, 'Tutoriales a tu Alcance', 'null', 'correo.tutorialesatualcance@gmail.com', 'google', 'https://lh4.googleusercontent.com/-80gqeIg_Gq8/AAAAAAAAAAI/AAAAAAAAAF4/0_8JQ_8Gffk/s96-c/photo.jpg', 0, 'null', '2017-10-27 15:55:25');

-- --------------------------------------------------------

--
-- Table structure for table `visitaspaises`
--

CREATE TABLE IF NOT EXISTS `visitaspaises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pais` text COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `visitaspaises`
--

INSERT INTO `visitaspaises` (`id`, `pais`, `cantidad`, `fecha`) VALUES
(1, 'United States', 2, '2017-11-28 19:33:05'),
(2, 'Japan', 13, '2017-11-28 20:09:50'),
(3, 'Spain', 10, '2017-11-28 19:35:27'),
(4, 'Colombia', 5, '2017-11-28 19:35:27'),
(5, 'China', 3, '2017-11-28 19:35:27'),
(6, 'Germany', 34, '2017-11-28 19:35:27'),
(7, 'Mexico', 8, '2017-11-28 19:35:27');

-- --------------------------------------------------------

--
-- Table structure for table `visitaspersonas`
--

CREATE TABLE IF NOT EXISTS `visitaspersonas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` text COLLATE utf8_spanish_ci NOT NULL,
  `pais` text COLLATE utf8_spanish_ci NOT NULL,
  `visitas` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=32 ;

--
-- Dumping data for table `visitaspersonas`
--

INSERT INTO `visitaspersonas` (`id`, `ip`, `pais`, `visitas`, `fecha`) VALUES
(1, '153.202.197.216', 'Japan', 1, '2017-11-08 18:37:07'),
(3, '249.170.168.184', 'Spain', 1, '2017-11-28 19:16:16'),
(5, '249.170.168.184', 'Spain', 1, '2017-11-28 19:16:19'),
(6, '234.13.198.119', 'Colombia', 1, '2017-11-28 19:16:03'),
(7, '141.46.61.241', 'Germany', 1, '2017-11-28 19:13:45'),
(8, '40.179.75.60', 'United States', 1, '2017-11-28 19:14:05'),
(9, '153.205.198.22', 'Japan', 1, '2017-11-01 19:14:18'),
(10, '148.21.177.158', 'United States', 1, '2017-10-28 19:14:34'),
(11, '40.224.125.226', 'United States', 1, '2017-11-28 19:14:56'),
(12, '10.98.135.68', 'China', 1, '2017-11-28 19:15:57'),
(13, '23.121.157.131', 'United States', 1, '2017-11-28 19:15:37'),
(17, '8.12.238.123', 'United States', 1, '2017-11-28 19:28:27'),
(18, '148.21.177.158', 'United States', 1, '2017-11-28 19:33:05'),
(19, '153.202.197.216', 'Japan', 1, '2017-11-28 19:33:50'),
(27, '153.205.198.22', 'Japan', 1, '2017-10-28 20:05:19'),
(31, '153.205.198.22', 'Japan', 1, '2017-11-28 20:09:49');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
