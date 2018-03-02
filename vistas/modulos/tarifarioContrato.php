<?php

$data = ControladorTarifaContrato::ctrGetTarifaContrato();
//print_r($data);
?>
<div class="paginas-internas">

    <section class="ruta py-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-right">
                    <a href="index.php">Inicio</a> » Tarifario

                </div>
            </div>
        </div>
    </section>
    <main class="py-1">
        <div class="container">
            <div class="row">
                <article class="col-md-8">


                    <?php
                    if ($data["tarifarioEstado"]==1){
                        echo $data["tarifario"];

                    }else{
                        echo '<h1 class="btn btn-danger text-lg-center">ACCESO NO AUTORIZADO</h1> ';
                    }

                    ?>


                </article>
                <aside class="col-md-4">

                    <img src="vistas/img/plantilla/reporte.png" alt="Nosotros" class="img-fluid img-responsive"


                </aside>


            </div>
        </div>
    </main>


</div>
