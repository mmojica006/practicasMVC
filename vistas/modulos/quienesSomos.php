<?php
$servidor = Ruta::ctrlRutaServidor();
$social = ControladorPlantilla::ctrlEstiloPlantilla();
$dataNosotros = ControladorNosotros::ctrMostrarNosotros();


if($dataNosotros['imgFondo'] != ''){
    $fondoUrl = $servidor.$dataNosotros['imgFondo'];
}else{
     $fondoUrl = $servidor.'vistas/img/plantilla/default/back_default_blue.jpg';
}


?>
<div class="paginas-internas">
    <section class="bienvenidos fondoNosotros"  >




        <div class="texto-encabezado text-center">

            <div class="container">
                <h1 class="display-4"><?php echo $dataNosotros["bannertitulo"]; ?></h1>
                <p class="wow bounceIn" data-wow-delay=".3s"><?php echo $dataNosotros["bannerdescripcion"]; ?></p>

            </div>

        </div>

    </section>
    
    <section class="ruta py-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-right">
                    <a href="index.php">Inicio</a> » Nosotros

                </div>
            </div>
        </div>
    </section>
    <main class="py-1">
        <div class="container nosotros">
            <div class="row">
                <article class="col-md-12">
                    <h1 class="text-muted"><?php echo $dataNosotros["titulo"]; ?></h1>
                                <?php echo $dataNosotros["descripcion"]; ?>

                    <h3>MISION</h3>
                    <p><?php echo $dataNosotros["mision"]; ?></p>

                    <h3>VISIÓN</h3>
                    <p> <?php echo $dataNosotros["vision"]; ?></p>


                </article>

                <article class="col-md-12">
                    <h3>VALORES</h3>
                </article>





            </div>
        </div>
    </main>

    <section class="tu-mejor-eleccion py-1">
        <div class="container">

            <div class="row">
                <ul class="col-xs-6 col-lg-4 text-xs-center text-lg-left">
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".3s">
<!--                        <i class="fa fa-briefcase" aria-hidden="true"></i>-->

                        <div class="contenedor-eleccion">
                            <h4 style="color: #add131">Empatía</h4>
                            <p class="hidden-md-down"> Siempre el cliente es primero. Nos enfocamos en resolver sus necesidades </p>
                        </div>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".7s">
<!--                        <i class="fa fa-bullhorn" aria-hidden="true"></i>-->
                        <div class="contenedor-eleccion">
                            <h4 style="color: #913e98">Creatividad</h4>
                            <p class="hidden-md-down">La innovación es la base de nuestro ADN.</p>
                        </div>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".7s">
<!--                        <i class="fa fa-bullhorn" aria-hidden="true"></i>-->
                        <div class="contenedor-eleccion">
                            <h4 style="color: #ec1559">Pasión</h4>
                            <p class="hidden-md-down">Trabajamos con compromiso y entrega en todo lo que hacemos.</p>
                        </div>
                    </li>

                </ul>

                <div class="hidden-md-down col-lg-4">
                    <img class="img-responsive" src="./vistas/img/plantilla/valores.jpg" alt="Valores CrediExpress">
                </div>

                <ul class="col-xs-6 col-lg-4 text-xs-center text-lg-right">
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".5s">
<!--                        <i class="fa  fa-calendar" aria-hidden="true"></i>-->
                        <div class="contenedor-eleccion">
                            <h4 style="color: #17a1be">Espíritu de Familia</h4>
                            <p class="hidden-md-down">Nos apoyamos para salir adelante ante los retos </p>
                        </div>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".9s">
<!--                        <i class="fa  fa-check-square-o" aria-hidden="true"></i>-->
                        <div class="contenedor-eleccion">
                            <h4 style="color: #46bda1">Integridad</h4>
                            <p class="hidden-md-down">Actuamos de manera correcta y transparente</p>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </section>
</div>


