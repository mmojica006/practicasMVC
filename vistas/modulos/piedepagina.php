<?php
$servidor = Ruta::ctrlRutaServidor();
$dataTarifaContrato = ControladorTarifaContrato::ctrGetTarifaContrato();


?>
<footer class="piewebsite">
    <div class="container">

        <div class="row">
            <div class="col-sm-2">

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

            <article class="col-md-2 wow bounceInLeft" data-wow-delay=".3s">
                <h5>Menu</h5>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Sucursales</a></li>
                    <li><a href="#">Sobre Nosotros</a></li>
                </ul>


            </article>


            <article class="col-md-2 wow bounceInUp" data-wow-delay=".6s">

                <h5>Productos</h5>
                <ul>
                    <li><a href="#">Microcréditos</a></li>
                    <li><a href="#">Microturbo</a></li>
                    <li><a href="#">Turbo</a></li>
                    <li><a href="#">Desarrollo empresarial</a></li>
                    <li><a href="#">Activo Productivo</a></li>
                </ul>


            </article>

            <article class="col-md-2 wow bounceInUp" data-wow-delay=".6s">

                <h5>Información</h5>
                <ul>
                <?php  if ($dataTarifaContrato["tarifarioEstado"]== 1){ ?>
                    <li><a href="#">Tarifario</a></li>

                    <?php } ?>

                     <li><a href="#">Contrato</a></li>

                    <li><a href="preguntas">Preguntas Frecuentes</a></li>
                </ul>


            </article>

            <article class="col-md-4 wow bounceInRight" data-wow-delay="1s">
                <a href="#" class="operadora">
                    <img src="<?php echo $servidor; ?>vistas/img/plantilla/centroAtencion.png" alt="">
                </a>
                <h3>MAPA SUCURSALES</h3>
                <p class="hidden-sm-down">Desarrollamos campañas publicitarias para tus APP. Hacemos conocer tu marca en
                    el momento exacto para conseguir un mayor inpacto.</p>
                <a href="#" class="btn btn-primary hidden-sm-down">Más información</a>
            </article>

        </div>

    </div>

    <div class="footer-copyright">
        <p>© 2018 © CREDIEXPRESS Todos los derechos reservados </p>
    </div>


</footer>


<a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-circle-up" aria-hidden="true"> </i> </a>