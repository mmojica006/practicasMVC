<?php

$data = ControladorTarifaContrato::ctrGetTarifaContrato();
$servidor = Ruta::ctrlRutaServidor();
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


            <div class="row">
                <article class="col-md-12">

                    <h3>Contratos</h3>

                    <iframe width='250' height='375' src='<?php echo $servidor; ?>vistas/files/pdfContrato/contratoCE.pdf' frameborder='0' allowfullscreen></iframe>


                </article>

                <article class="col-md-12">

                    <h3>Estados Financieros</h3>

                    <iframe width='250' height='375' src='<?php echo $servidor; ?>vistas/files/pdfContrato/contratoCE.pdf' frameborder='0' allowfullscreen></iframe>


                </article>
            </div>
        </div>
    </main>


</div>
