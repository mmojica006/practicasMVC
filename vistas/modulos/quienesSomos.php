<?php
$servidor = Ruta::ctrlRutaServidor();
$social = ControladorPlantilla::ctrlEstiloPlantilla();

?>
<div class="paginas-internas">
    <section class="bienvenidos" style="background: url('<?php echo $servidor; ?>vistas/img/plantilla/fondo-encabezado-grandeCE.jpg');no-repeat center top;background-size: cover">




        <div class="texto-encabezado text-xs-center">

            <div class="container">
                <h1 class="display-4">Nosotros</h1>
                <p class="wow bounceIn" data-wow-delay=".3s">¿Quienes somos? y ¿Que hacemos?.</p>

            </div>

        </div>

    </section>
    
    <section class="ruta py-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-right">
                    <a href="index.php">Inicio</a> » Nosotros

                </div>
            </div>
        </div>
    </section>
    <main class="py-1">
        <div class="container">
            <div class="row">
                <article class="col-md-8">
                    <h2 class="text-muted">Trabajamos para tu éxito</h2>
                    <p>
                        Somos una empresa Micro-financiera dispuesta a promover el desarrollo socioeconómico en Nicaragua, facilitando créditos a los pequeños y medianos empresarios, permitiéndoles mejorar su nivel de vida y aumentar su capital.
                    </p>
                    <p>
                        Brindamos servicios personalizados en la comodidad de su negocio. Otorgamos  préstamos accesibles con la mayor rapidez del mercado. 
                        Conformamos el mejor equipo de profesionales en créditos extendidos en todo el mercado.
                    </p>



                    <div id="accordion" role="tablist" aria-multiselectable="true">

                        <div class="panel panel-default">

                            <h4 class="panel-heading">
 <a data-toggle="collapse" data-parent="#accordion" href="#tab-mision"> MISIÓN </a>

                            </h4>
                            <div id="tab-mision" class="panel-collapse collapse in">
                                <p>
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                </p>
                                <p>
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.

                                </p>

                            </div>
                        </div>


                        <div class="panel panel-default">
                            <h4 class="panel-heading">

        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#tab-vision" >VISIÓN</a>

                            </h4>
                            <div id="tab-vision" class="panel-collapse collapse">
                                <p>
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                </p>
                                <p>
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.

                                </p>

                            </div>
                        </div>


                        <div class="panel panel-default">
                            <h4 class="panel-heading">

        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#tab-valores" >
        VALORES
        </a>

                            </h4>
                            <div id="tab-valores" class="panel-collapse collapse">
                                <p>
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                </p>
                                <p>
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.

                                </p>

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