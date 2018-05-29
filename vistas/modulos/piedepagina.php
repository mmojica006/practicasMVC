<?php
$servidor = Ruta::ctrlRutaServidor();
$dataTarifaContrato = ControladorTarifaContrato::ctrGetTarifaContrato();


?>




<footer class="piewebsite">
    <div class="container">

        <div class="row">
        <article class="col-md-2">
            <ul class="redes-sociales text-xs-center">
                <?php

                $social = ControladorPlantilla::ctrlEstiloPlantilla();
                $jsonRedesSociales = json_decode($social["redesSociales"], true);


                foreach ($jsonRedesSociales as $key => $value) {
                    if ($value["activo"] != 0) {
                        echo ' <li><a href="' . $value["url"] . '" target="_blank">
                                            <i class="fa ' . $value["red"] . ' ' . $value["estilo"] . ' redSocial" aria-hidden="true"> </i> </a></li>';
                    }

                }
                ?>

                <!--                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"> </i> </a></li>-->
                <!--                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a></li>-->
                <!--                    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i> </a></li>-->

            </ul>
            <?php
            echo '<a href="https://es-la.facebook.com/crediexpressnicaragua/" target="_blank">
            <button class="btn btn-primary">
                <i class="fa fa-facebook" aria-hidden="true"></i>
                Síguenos
            </button>
            </a>';
            ?>


        </article>

            <article class="col-md-2 wow bounceInLeft" data-wow-delay=".3s">

                <div class="col-md-12 text-left">
                    <ul>
                       
                       <!-- <li><a href="index.php">Inicio</a></li>-->
                       
                        <li><a href="quienes-somos">Sobre Nosotros</a></li>
                     <!--
                        <li><a href="canales">Canales de atención</a></li>
                    -->

                        <li><a href="productos">Productos</a></li>
                        <li><a href="contacto">Contáctenos</a></li>
                         <!--
                        <li><a href="preguntas">Preguntas Frecuentes</a></li>
                    -->

                    </ul>
                </div>




            </article>


            <article class="col-md-4 wow bounceInUp piecorreo text-left" data-wow-delay=".6s">

                    <img src="vistas/img/plantilla/Maletin.png" style="float: left;padding: 0 10px;">

                <strong><span style="font-family: 'Lato', sans-serif; !important;">Trabaja con nosotros</span></strong><br>
                <p>Envianos tu CV al correo:
                 reclutamiento@crediexpress.com.ni
                </p>

            </article>

            <article class="col-md-4 wow bounceInUp pieSucu text-left" data-wow-delay=".6s">
                <img src="vistas/img/plantilla/mapa2.png" width="120px" style="float: left;padding: 0 10px;">


                <h5>   Sucursales Crediexpress           </h5>
                <p>Horarios de atención</p>
                   <p> Lunes a viernes de 7:30 am - 6:00 pm</p>
                   <p> Centro de atención al cliente 8749 - 1800  </p>


            </article>


        </div>


    </div>


</footer>
<div class="footer-copyright text-xs-center">
    <p>© 2018 © CREDIEXPRESS Todos los derechos reservados </p>
</div>
<a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-circle-up" aria-hidden="true"> </i> </a>
<!--<div id="chat-icon"> <div id="chat-button">-->
<!--        <div id="cixyzt" style="z-index:100;position:fixed">-->
<!---->
<!--        </div> <div id="scxyzt" style="display:inline">-->
<!--            <a id="anchor" href="#"  >-->
<!--                <img name="psxyztimage" src="vistas/img/plantilla/chat-icon-online.png" border="0">-->
<!--            </a></div> <div id="sdxyzt" style="display:none">-->





