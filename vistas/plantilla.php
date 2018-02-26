<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="title" content="CrediExpress">
    <meta name="description" content="Lorem ipsum dol Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,	quis nostrud exercitation t non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.">

    <meta name="description"
          content="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam accusantium enim esse eos officiis sit officia">
    <title>Website</title>
    <?php
    $servidor = Ruta::ctrlRutaServidor();

    $icono = ControladorPlantilla::ctrlEstiloPlantilla();
    echo '<link rel="icon" href="' . $servidor . $icono["icono"] . '">';

    $url = Ruta::ctrlRuta();


    ?>


    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/sweetalert.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed" rel="stylesheet">


    <!--=====================================
    HOJAS DE ESTILO PERSONALIZADAS
    ======================================-->
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/scss/estilos.css">
<!--    <link rel="stylesheet" href="--><?php //echo $url; ?><!--vistas/css/plantilla.css">-->
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/slide.css">
       <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/productos.css">
<!--    <link rel="stylesheet" href="--><?php //echo $url; ?><!--vistas/css/cabezote.css">


    <!--=====================================
    PLUGINS DE JAVASCRIPT
    ======================================-->

    <script src="<?php echo $url; ?>vistas/js/plugins/jquery.min.js"></script>

    <script src="<?php echo $url; ?>vistas/js/plugins/bootstrap.min.js"></script>

    <script src="<?php echo $url; ?>vistas/js/plugins/jquery.easing.js"></script>

    <script src="<?php echo $url; ?>vistas/js/plugins/jquery.scrollUp.js"></script>

    <script src="<?php echo $url; ?>vistas/js/plugins/jquery.flexslider.js"></script>

    <script src="<?php echo $url; ?>vistas/js/plugins/sweetalert.min.js"></script>

    <script src="<?php echo $url; ?>vistas/js/plugins/wow.min.js"></script>

    <script src="<?php echo $url; ?>vistas/js/plugins/smooth-scroll.min.js"></script>


    <!-- JQUERY VALIDATOR -->
    <script src="vistas/plugins/jquery.validate.js"></script>


</head>
<body>

<?php
/*=============================================
            CABEZOTE           
=============================================*/
include "modulos/cabezote.php";

$rutas = array();

if (isset($_GET['ruta'])) {

    $rutas =  explode("/",$_GET['ruta']);

    if ($rutas[0]=="canales"){
        include "modulos/canalesAtencion.php";
    }
    elseif ($rutas[0]=="inicio"){
        include "modulos/inicio.php";
    }
    elseif ($rutas[0]=="quienes-somos"){
        include "modulos/quienesSomos.php";
    }
    elseif ($rutas[0]=="contacto"){
        include "modulos/contacto.php";
    }
        elseif ($rutas[0]=="productos"){
        include "modulos/productos.php";
    }
    elseif ($rutas[0]=="tips"){
        include "modulos/tipsFinancieros.php";
    }
    elseif ($rutas[0]=="preguntas"){
        include "modulos/preguntas.php";
    }
 
    else{
        include "modulos/error404.php";
    }

}else{
    include "modulos/slide.php";

    include "modulos/inicioProductos.php";
    include "modulos/inicioVarios.php";
   
}
 include "modulos/piedepagina.php";

?>

<script src="<?php echo $url; ?>vistas/js/cabezote.js"></script>
<script src="<?php echo $url; ?>vistas/js/plantilla.js"></script>
<script src="<?php echo $url; ?>vistas/js/slide.js"></script>
<script src="<?php echo $url; ?>vistas/js/canalesServicio.js"></script>
<script src="<?php echo $url; ?>vistas/js/productos.js"></script>
<script src="<?php echo $url; ?>vistas/js/contacto.js"></script>


</body>
</html>