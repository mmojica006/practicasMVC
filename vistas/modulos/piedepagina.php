<?php
$servidor = Ruta::ctrlRutaServidor();
$dataTarifaContrato = ControladorTarifaContrato::ctrGetTarifaContrato();


?>
<footer class="piewebsite">
    <div class="container">

        <div class="row">
            <div class="col-sm-3">

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

            <article class="col-md-3 wow bounceInLeft" data-wow-delay=".3s">
                <h5>Menu</h5>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Sucursales</a></li>
                    <li><a href="#">Sobre Nosotros</a></li>
                </ul>


            </article>


            <article class="col-md-3 wow bounceInUp" data-wow-delay=".6s">

                <h5>Productos</h5>
                <ul>
                    <li><a href="#">Capital de trabajo</a></li>
                    <li><a href="#">Activo Productivo</a></li>
                    <li><a href="#">Mejora de Negocio</a></li>
                    <li><a href="#">CrediActivos</a></li>

                </ul>


            </article>

            <article class="col-md-3 wow bounceInUp" data-wow-delay=".6s">

                <h5>Información</h5>
                <ul>
                <?php  if ($dataTarifaContrato["tarifarioEstado"]== 1){ ?>
                    <li><a href="tarContrato">Tarifario</a></li>

                    <?php } ?>

                     <li><a href="tarContrato">Contrato</a></li>
                    <li><a href="tarContrato">EEFF</a></li>
                    <li><a href="preguntas">Preguntas Frecuentes</a></li>

                </ul>


            </article>



        </div>

    </div>




</footer>
<div class="footer-copyright text-xs-center">
    <p>© 2018 © CREDIEXPRESS Todos los derechos reservados </p>
</div>


<a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-circle-up" aria-hidden="true"> </i> </a>