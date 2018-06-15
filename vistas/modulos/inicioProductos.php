<?php
$servidor = Ruta::ctrlRutaServidor();
$dataProductos = ControladorProducto::ctrMostrarProductos();
$social = ControladorPlantilla::ctrlEstiloPlantilla();
?>

<section class="tu-mejor-eleccion py-1">
    <div class="container">

        <h2 class="h3 text-center font-weight-bold"><?php echo $dataProductos["titulo"]; ?> </h2>
        <p class="text-center iniDescripcion">
            <?php echo $dataProductos["descripcion"]; ?>
        </p>

        <div class="row">
            <ul class="col-xs-6 col-lg-4 text-xs-center text-lg-left">
                <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".3s">
<!--                    <i class="fa fa-money" aria-hidden="true"></i>-->

                    <div class="contenedor-eleccion">
                        <div class="inicioImg">
                            <img class="img-responsive center-block "  src="vistas/img/plantilla/icono-agronegocios.png"
                                 alt="agronegocio">
                        </div>
                        <h4 class="text-center">

                            <a href="servicio5#productosList" class="center-block">AgroNegocio</a>
                        </h4>

                    </div>

                </li>
                <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".7s">
<!--                      <i class="fa fa-briefcase" aria-hidden="true"></i>-->
                    <div class="contenedor-eleccion">
                        <div class="inicioImg">
                            <img class="img-responsive center-block"  src="vistas/img/plantilla/activo-producto.png"
                                 alt="beneficios">
                        </div>

                        <h4 class="text-center"> <a class="center-block" href="servicio2#productosList">Activo Productivo</a> </h4>



                    </div>
                </li>


            </ul>

            <div class="hidden-md-down col-lg-4">





                <div class="contenedor-eleccion ">

                    <div class="inicioImg">
                        <img class="img-responsive center-block"  src="vistas/img/plantilla/ico-4.png"
                             alt="beneficios" >
                    </div>
                    <h4 class="text-center">
                        <a href="servicio1#productosList" class="center-block">Capital de Trabajo</a>
                    </h4>

                </div>


            </div>

            <ul class="col-xs-6 col-lg-4 text-xs-center text-lg-right">
                <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".5s">
<!--                       <i class="fa fa-money" aria-hidden="true"></i>-->
                    <div class="contenedor-eleccion">
                        <div class="inicioImg">
                            <img class="img-responsive center-block "  src="vistas/img/plantilla/ico-2.png"
                                 alt="beneficios">
                        </div>
                        <h4 CLASS="text-center">

                            <a href="servicio3#productosList" class="center-block">CrediNegocio</a>
                        </h4>
                     
                    </div>
                </li>
                <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".9s">
<!--                      <i class="fa fa-line-chart" aria-hidden="true"></i>-->
                    <div class="contenedor-eleccion">
                        <div class="inicioImg">
                            <img class="img-responsive center-block"  src="vistas/img/plantilla/credi-activo.png"
                                 alt="beneficios">
                        </div>
                        <h4 class="text-center">

                            <a href="servicio4#productosList" class="center-block">CrediActivos</a></h4>
                        <p class="hidden-md-down">
                        <div class="block-ellipsis contenedor-text col-lg-12">
<!--                            --><?php //echo $dataProductos["crediActivos"]; ?>
                        </div>
                        </p>
                    </div>
                </li>


            </ul>
        </div>
    </div>
</section>


<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>Cabecera de la ventana</h3>
            </div>
            <div class="modal-body">
                <h4>Texto de la ventana</h4>
                Mas texto en la ventana.
            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
            </div>
        </div>
    </div>
</div>