<?php
$dataProducto  = ControladorProducto::ctrMostrarProductos();

?>

<div class="paginas-internas">

    <section class="bienvenidos fondoProducto" >




        <div  id="productosList" class="texto-encabezado text-center">

            <div class="container">
                <!--                <h1>--><?php //echo $dataProducto['titulo']; ?><!--</h1>-->
                <!--                <p class="wow bounceIn" data-wow-delay=".3s">--><?php //echo $dataProducto['descripcion']; ?><!--</p>-->

            </div>

        </div>

    </section>
    <section  class="ruta py-1">
        <div  class="container">
            <div class="row">
                <div class="col-xs-12 text-right">
                    <a href="index.php">Inicio</a> » Productos

                </div>
            </div>
        </div>
    </section>

    <main  class="py-1">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 menuProducto">

                    <div class="left-navigation">
                        <ul id="menu" class="listProductos">

                            <li > <a data-page="servicio1" href="#"><h4><small>Capital de Trabajo</small> </h4></a> </li>
                            <li>
                                <a data-page="servicio2" href="#"><h4 ><small>Activo Productivo</small></h4>
                                </a></li>
                            <li><a data-page="servicio3" href="#"><h4> <small>Mejora de Negocio</small></h4></a></li>
                            <li><a data-page="servicio4" href="#"><h4><small>CrediActivos</small></h4></a></li>


                        </ul>
                        <br>
                    </div>


                </div>
                <div class="col-lg-9 productoInfo">


                    <div id="pages">

                        <div id="servicio1" class="page" data-page="servicio1">

                            <?php echo $dataProducto['capitalTrabajo']; ?>

                        </div>

                        <div id="servicio2" class="page hide" data-page="servicio2">

                            <?php echo $dataProducto['activoProductivo']; ?>

                        </div>

                        <div id="servicio3" class="page hide" data-page="servicio3">

                            <?php echo $dataProducto['mejoraNegocio']; ?>

                        </div>

                        <div id="servicio4" class="page hide" data-page="servicio4">

                            <?php echo $dataProducto['crediActivos']; ?>

                        </div>




                    </div>

                </div>





            </div>
        </div>
    </main>


</div>