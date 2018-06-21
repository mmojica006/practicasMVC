

<?php
# Iniciando la variable de control que permitirá mostrar o no el modal
# Cambiar a False en caso de querer controlar el tiempo en que sera mostrado el popup
$exibirModal = true; 
# Verificando si existe o no la cookie
if(!isset($_COOKIE["mostrarModal"]))
{
    # Caso no exista la cookie entra aquí
    # Creamos la cookie con la duración que queramos

     $expirar = 3600; // muestra cada 1 hora
    //$expirar = 10800; // muestra cada 3 horas
    //$expirar = 21600; //muestra cada 6 horas
    //$expirar = 43200; //muestra cada 12 horas
    //$expirar = 86400;  // muestra cada 24 horas
  //  setcookie('mostrarModal', 'SI', (time() + $expirar)); // mostrará cada 12 horas.
    # Ahora nuestra variable de control pasará a tener el valor TRUE (Verdadero)
    $exibirModal = true;
}
?>
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
    <title>Crediexpress</title>
    <?php
    $servidor = Ruta::ctrlRutaServidor();

    $icono = ControladorPlantilla::ctrlEstiloPlantilla();
    echo '<link rel="icon" href="' . $servidor . $icono["icono"] . '">';

    $url = Ruta::ctrlRuta();


    ?>


    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/sweetalert.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    



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
        if ($rutas[0]=="remesas"){
        include "modulos/remesas.php";
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
    elseif ($rutas[0]=="chat"){
        include "modulos/chatCE.php";
    }
        elseif (($rutas[0]=="productos") ||
            ($rutas[0]=="servicio1") ||
            ($rutas[0]=="servicio2")||
            ($rutas[0]=="servicio3")||
            ($rutas[0]=="servicio4")||
            ($rutas[0]=="servicio5")

        ){
        include "modulos/productos.php";
    }


    elseif ($rutas[0]=="tips"){
        include "modulos/tipsFinancieros.php";
    }
    elseif ($rutas[0]=="preguntas"){
        include "modulos/preguntas.php";
    }
    elseif ($rutas[0]=="tarContrato"){
        include "modulos/tarifarioContrato.php";
    }
    elseif ($rutas[0]=="reclamo"){
        include "modulos/reclamo.php";
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

<!--<script src="--><?php //echo $url; ?><!--vistas/js/cabezote.js"></script>-->
<script src="<?php echo $url; ?>vistas/js/plantilla.js"></script>
<script src="<?php echo $url; ?>vistas/js/slide.js"></script>
<script src="<?php echo $url; ?>vistas/js/canalesServicio.js"></script>
<script src="<?php echo $url; ?>vistas/js/productos.js"></script>
<script src="<?php echo $url; ?>vistas/js/contacto.js"></script>
<script src="<?php echo $url; ?>vistas/js/quienesSomos.js"></script>
<script src="<?php echo $url; ?>vistas/js/reclamo.js"></script>


<!-- Modal -->
<div class="modal fade" id="modalInicio" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
         <div class="modal-header">
     
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <div class="modal-body text-center">

                <img src="<?php echo $url; ?>vistas/img/plantilla/pop.jpg" alt="" class="img-responsive">
            </div>
            <div class="modal-footer text-center"  style="text-align: center;">
                <button id="btnPopUpRemesa" type="button" class="btn btn-success" >Ver Oferta</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalDetalleRemesa" role="dialog">
    <div class="modal-dialog modal-md">
        <!-- Modal content-->
        <div class="modal-content">
        
            <div class="modal-body">
            <div class="text-center">
                <img src="<?php echo $url; ?>vistas/img/plantilla/landing.jpg" alt="" class="img-responsive" >
            </div>
            </div>
            <div class="modal-footer text-center" >
              <button   type="button" class="btn btn-default" data-dismiss="modal" >Cerrar</button>
            </div>
        </div>
    </div>
</div>


<?php if($exibirModal === true) : // Si nuestra variable de control "$exibirModal" es igual a TRUE activa nuestro modal y será visible a nuestro usuario. ?>
    <script>
        $(document).ready(function()
        {
            // id de nuestro modal

             var pathname = window.location.pathname.split('/'); // Returns path only
            console.log(pathname[1]);

            
            if ((pathname[1]=='contacto') || (pathname[1]=='') || (pathname[1]=="index.php")){            
             $("#modalInicio").modal("show");
             }

            $("#btnPopUpRemesa").click(function(){

                $("#modalInicio").modal("hide");
                window.location.href = 'remesas';
              //  $("#modalDetalleRemesa").modal('show');

            });
            


        });
    </script>
<?php endif; ?>


</body>
</html>