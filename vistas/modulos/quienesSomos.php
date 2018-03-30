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
    <section class="bienvenidos"  >




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
        <div class="container">
            <div class="row">
                <article class="col-md-8">
                    <h2 class="text-muted"><?php echo $dataNosotros["titulo"]; ?></h2>
                                <?php echo $dataNosotros["descripcion"]; ?>



                    <div id="accordion" role="tablist" aria-multiselectable="true">

                        <div class="panel panel-default">

                            <h4 class="panel-heading">
 <a data-toggle="collapse" data-parent="#accordion" href="#tab-mision"> MISIÓN </a>

                            </h4>
                            <div id="tab-mision" class="panel-collapse collapse in">

                             <div class="imgMision"> <?php echo $dataNosotros["mision"]; ?></div>


                            </div>
                        </div>


                        <div class="panel panel-default">
                            <h4 class="panel-heading">

        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#tab-vision" >VISIÓN</a>

                            </h4>
                            <div id="tab-vision" class="panel-collapse collapse">
                                <?php echo $dataNosotros["vision"]; ?>


                            </div>
                        </div>


                        <div class="panel panel-default">
                            <h4 class="panel-heading">

        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#tab-valores" >
        VALORES
        </a>

                            </h4>
                            <div id="tab-valores" class="panel-collapse collapse">
                                <?php echo $dataNosotros["valores"]; ?>

                            </div>
                        </div>
                    </div>

                </article>
                <aside class="col-md-4">
                    <img src="<?php echo $servidor; ?>vistas/img/plantilla/equipo.png" alt="Nosotros">


                </aside>


            </div>
        </div>
    </main>


</div>


