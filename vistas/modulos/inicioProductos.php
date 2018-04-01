<?php
$servidor = Ruta::ctrlRutaServidor();
$dataProductos = ControladorProducto::ctrMostrarProductos();
$social = ControladorPlantilla::ctrlEstiloPlantilla();
?>

<section class="tu-mejor-eleccion py-1">
    <div class="container">

        <h2 class="h3 text-center font-weight-bold"><?php echo $dataProductos["titulo"]; ?> </h2>
        <p class="text-center">
            <?php echo $dataProductos["descripcion"]; ?>
        </p>

        <div class="row">
            <ul class="col-xs-6 col-lg-4 text-xs-center text-lg-left ">
                <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".3s">
                    <!--          <i class="fa fa-bullhorn" aria-hidden="true"></i> -->

                    <div class="contenedor-eleccion ">
                        <h4><a href="productos">Capital de Trabajo</a></h4>
                        <p class="hidden-md-down">
                        <div class="block-ellipsis">
                            <?php echo $dataProductos["capitalTrabajo"]; ?>
                        </div>
                        </p>
                    </div>
                </li>
                <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".7s">
                    <!--  <i class="fa fa-briefcase" aria-hidden="true"></i> -->
                    <div class="contenedor-eleccion">
                        <h4><a href="productos">Activo Productivo</a></h4>
                        <p class="hidden-md-down">
                        <div class="block-ellipsis">
                            <?php echo $dataProductos["activoProductivo"]; ?>
                        </div>
                        </p>

                    </div>
                </li>


            </ul>

            <div class="hidden-md-down col-lg-4">
                <img class="img-responsive beneficios"  src="<?php echo $servidor; ?>vistas/img/plantilla/Beneficios2.png"
                     alt="beneficios">
            </div>

            <ul class="col-xs-6 col-lg-4 text-xs-center text-lg-right">
                <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".5s">
                    <!--   <i class="fa fa-tachometer" aria-hidden="true"></i> -->
                    <div class="contenedor-eleccion">
                        <h4><a href="productos">Mejora de Negocio</a></h4>
                        <p class="hidden-md-down">
                            <div class="block-ellipsis">
                            <?php echo $dataProductos["mejoraNegocio"]; ?>
                        </div>
                        </p>
                    </div>
                </li>
                <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".9s">
                    <!--  <i class="fa fa-line-chart" aria-hidden="true"></i> -->
                    <div class="contenedor-eleccion">
                        <h4><a href="productos">CrediActivos</a></h4>
                        <p class="hidden-md-down">
                        <div class="block-ellipsis">
                            <?php echo $dataProductos["crediActivos"]; ?>
                        </div>
                        </p>
                    </div>
                </li>


            </ul>
        </div>
    </div>
</section>