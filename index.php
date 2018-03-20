<?php
require_once "controladores/plantilla.controlador.php";
require_once "controladores/slide.controlador.php";
require_once "controladores/canales.controlador.php";
require_once "controladores/contacto.controlador.php";
require_once "controladores/nosotros.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/tipsPreguntas.controladores.php";
require_once "controladores/tarifaContrato.controlador.php";
require_once  "controladores/reclamo.controlador.php";


require_once "modelos/plantilla.modelo.php";
require_once "modelos/slide.modelo.php";
require_once "modelos/canales.modelo.php";
require_once "modelos/contacto.modelo.php";
require_once "modelos/nosotros.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/tipsPreguntas.modelo.php";
require_once "modelos/tarifaContrato.modelo.php";
require_once "modelos/reclamo.modelo.php";

require_once "modelos/rutas.php";
$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();