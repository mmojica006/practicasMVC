<?php
$servidor = Ruta::ctrlRutaServidor();
$social = ControladorPlantilla::ctrlEstiloPlantilla();
?>

<section class="tu-mejor-eleccion py-1">
    <div class="container">

        <h2 class="h3 text-xs-center font-weight-bold">Productos <span>y Servicios</span></h2>
        <p class="text-xs-center">
            Realizamos préstamos a micro, pequeños y medianos empresarios, dirigidos para aquellas personas que se dedican a la venta comercial u oferta de servicios.
        </p>

        <div class="row">
            <ul class="col-xs-6 col-lg-4 text-xs-center text-lg-left">
                <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".3s">
                    <i class="fa fa-briefcase" aria-hidden="true"></i>

                    <div class="contenedor-eleccion">
                        <h4>Microcréditos</h4>
                        <p class="hidden-md-down"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque   </p>
                    </div>
                </li>
                <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".7s">
                    <i class="fa fa-bullhorn" aria-hidden="true"></i>
                    <div class="contenedor-eleccion">
                        <h4>Microturbo</h4>
                        <p class="hidden-md-down">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</p>
                    </div>
                </li>

            </ul>

            <div class="hidden-md-down col-lg-4">
                <img class="beneficios" src="<?php echo $servidor; ?>vistas/img/plantilla/Beneficios2.png" alt="Mundo movil">
            </div>

            <ul class="col-xs-6 col-lg-4 text-xs-center text-lg-right">
                <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".5s">
                    <i class="fa  fa-calendar" aria-hidden="true"></i>
                    <div class="contenedor-eleccion">
                        <h4>Turbo</h4>
                        <p class="hidden-md-down">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque </p>
                    </div>
                </li>
                <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".9s">
                    <i class="fa  fa-check-square-o" aria-hidden="true"></i>
                    <div class="contenedor-eleccion">
                        <h4>Desarrollo empresarial</h4>
                        <p class="hidden-md-down">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque </p>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</section>