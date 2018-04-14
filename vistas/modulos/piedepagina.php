<?php
$servidor = Ruta::ctrlRutaServidor();
$dataTarifaContrato = ControladorTarifaContrato::ctrGetTarifaContrato();


?>
<footer class="piewebsite">
    <div class="container">

        <div class="row">
            <div class="col-lg-1">

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
                <button type="button" class="btn btn-default">Contáctenos</button>
            </div>

            <article class="col-lg-5 wow bounceInLeft" data-wow-delay=".3s">

                <div class="col-md-6">
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="quienes-somos">Sobre Nosotros</a></li>
                        <li><a href="canales">Canales de atención</a></li>
                        <li><a href="productos">Productos</a></li>
                        <li><a href="contacto">Contáctenos</a></li>
                        <li><a href="preguntas">Preguntas Frecuentes</a></li>

                    </ul>
                </div>

                <div class="col-md-6">

                    <li><a href="productos">Capital de trabajo</a></li>
                    <li><a href="productos">Activo Productivo</a></li>
                    <li><a href="productos">Mejora de Negocio</a></li>
                    <li><a href="productos">CrediActivos</a></li>
                    <li><a href="tarContrato">Contrato</a></li>
                    <li><a href="tarContrato">EEFF</a></li>
                    <?php if ($dataTarifaContrato["tarifarioEstado"] == 1) { ?>
                        <li><a href="tarContrato">Tarifario</a></li>

                    <?php } ?>

                </div>


            </article>


            <article class="col-lg-3 wow bounceInUp piecorreo" data-wow-delay=".6s">




                <p>
                    <img src="vistas/img/plantilla/Maletin.png" align="left">
                <p><strong><span style="font-family: 'Lato', sans-serif;">Trabaja con nosotros</span></strong><br>
                Envianos tu CV al correo:
                 reclutamiento@crediexpress.com.ni</p>
                </p>
            </article>

            <article class="col-lg-3 wow bounceInUp pieSucu" data-wow-delay=".6s">

                <h5>   Sucursales Crediexpress           </h5>
                <p>Horarios de atención</p>
                   <p> Lunes a viernes de 7: 30 am - 6:00 pm</p>
                   <p> Centro de atención al cliente 8749 - 1800  </p>

                <img class="img-responsive center-block"  src="vistas/img/plantilla/MapaSucursales.png"
                     alt="beneficios" >
            </article>


        </div>

    </div>


</footer>
<div class="footer-copyright text-xs-center">
    <p>© 2018 © CREDIEXPRESS Todos los derechos reservados </p>
</div>


<a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-circle-up" aria-hidden="true"> </i> </a>