 <?php
$dataProducto  = ControladorProducto::ctrMostrarProductos();



if($dataProducto['imgFondo'] != ''){
    $fondoUrl = $servidor.$dataProducto['imgFondo'];
}else{
     $fondoUrl = $servidor.'vistas/img/plantilla/default/back_default_blue.jpg';
}


?>

<div class="paginas-internas">

    <section class="bienvenidos" >




        <div class="texto-encabezado text-xs-center">

            <div class="container">
                <h1 class="display-4"><?php echo $dataProducto['bannertitulo']; ?></h1>
                <p class="wow bounceIn" data-wow-delay=".3s"><?php echo $dataProducto['bannerdescripcion']; ?></p>

            </div>

        </div>

    </section>
        <section class="ruta py-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-right">
                    <a href="index.php">Inicio</a> » Productos

                </div>
            </div>
        </div>
    </section>

    <main class="py-1">
        <div class="container">
            <div class="row">

                <div class="col-lg-2 menuProducto">
                   
                             <div class="left-navigation">
                                <ul id="menu" class="listProductos">

                                    <li > <a data-page="servicio1" href="#"><h4><small>CrediPyme</small> </h4></a> </li>
                                    <li>
                                    <a data-page="servicio2" href="#"><h4 ><small>CrediNegocios</small></h4>
                                    </a></li>
                                    <li><a data-page="servicio3" href="#"><h4> <small>Activo Productivo</small></h4></a></li>
                                    <li><a data-page="servicio4" href="#"><h4><small>Microturbo</small></h4></a></li>                            
                                    <li><a data-page="servicio5" href="#"><h4><small>Turbo</small></h4></a></li>
                                    <li><a data-page="servicio6" href="#"><h4><small>Mega turbo</small></h4></a></li>

                                </ul>
                                <br>
                            </div>


                



                </div>
                <div class="col-lg-10 productoInfo">
                
                  
                        <div id="pages">

                                <div id="servicio1" class="page" data-page="servicio1">

                                <?php echo $dataProducto['crediPyme']; ?>

                                </div>

                                <div id="servicio2" class="page hide" data-page="servicio2">

                                <?php echo $dataProducto['crediNegocios']; ?>

                                </div>

                                <div id="servicio3" class="page hide" data-page="servicio3">

                               <?php echo $dataProducto['productivo']; ?>

                                </div>

                                <div id="servicio4" class="page hide" data-page="servicio4">
        
                                       <?php echo $dataProducto['microturbo']; ?>

                                </div>

                                <div id="servicio5" class="page hide" data-page="servicio5">


                                              <?php echo $dataProducto['turbo']; ?>
                                </div>

                                        <div id="servicio6" class="page hide" data-page="servicio6">


                                  <?php echo $dataProducto['megaturbo']; ?>

                                </div>                              

                            </div>

                </div>





            </div>
        </div>
    </main>


                </div>