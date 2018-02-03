<?php
$servidor = Ruta::ctrlRutaServidor();
$social = ControladorPlantilla::ctrlEstiloPlantilla();
?>

<section class="tu-mejor-eleccion py-1">
    <div class="container">

        <h2 class="h3 text-xs-center font-weight-bold">Productos </h2>
        <p class="text-xs-center">
            Nuestro modelo contempla un enfoque integrado y orientado a la inclusión financiera, dirigido a
aquellas personas que se dedican a la venta comercial u oferta de servicios.
        </p>

        <div class="row">
            <ul class="col-xs-6 col-lg-4 text-xs-center text-lg-left">
                <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".3s">
           <!--          <i class="fa fa-bullhorn" aria-hidden="true"></i> -->

                    <div class="contenedor-eleccion">
                        <h4>CrediPyme</h4>
                        <p class="hidden-md-down"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque   </p>
                    </div>
                </li>
                <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".7s">
                    <!--  <i class="fa fa-briefcase" aria-hidden="true"></i> -->
                    <div class="contenedor-eleccion">
                        <h4>CrediNegocios</h4>
                        <p class="hidden-md-down">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</p>
                    </div>
                </li>
                            <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".7s">
                 <!--   <i class="fa fa-users" aria-hidden="true"></i> -->
                    <div class="contenedor-eleccion">
                        <h4>Activo Productivo</h4>
                        <p class="hidden-md-down">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</p>
                    </div>
                </li>

            </ul>

            <div class="hidden-md-down col-lg-4">
                <img class="beneficios" src="<?php echo $servidor; ?>vistas/img/plantilla/Beneficios2.png" alt="Mundo movil">
            </div>

            <ul class="col-xs-6 col-lg-4 text-xs-center text-lg-right">
                <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".5s">
           <!--   <i class="fa fa-tachometer" aria-hidden="true"></i> -->
                    <div class="contenedor-eleccion">
                        <h4>Microturbo</h4>
                        <p class="hidden-md-down">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque </p>
                    </div>
                </li>
                <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".9s">
                   <!--  <i class="fa fa-line-chart" aria-hidden="true"></i> -->
                    <div class="contenedor-eleccion">
                        <h4>Turbo</h4>
                        <p class="hidden-md-down">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque </p>
                    </div>
                </li>
                       <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".9s">
                   <!--  <i class="fa fa-bar-chart" aria-hidden="true"></i> -->
                    <div class="contenedor-eleccion">
                        <h4>Mega turbo</h4>
                        <p class="hidden-md-down">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque </p>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</section>