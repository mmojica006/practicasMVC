<?php

$data = ControladorTarifaContrato::ctrGetTarifaContrato();
$fileEEFF = ControladorTarifaContrato::ctrGetEEFF();
$servidor = Ruta::ctrlRutaServidor();
$adicional = ControladorAdicional::ctrMostrarAdicional();
$folder = $servidor."vistas/files/pdfFinancieros/";



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
                <article class="col-md-12">


                    <?php
                    if ($data["tarifarioEstado"]==1){
                        echo $data["tarifario"];

                    }

                    ?>


                </article>





            </div>


            <div class="row">
                <?php

                ?>
                <article class="col-md-12">
                    <?php
                    if ($adicional["contratoEstado"]==1)
                    {
                    ?>

                    <h3>Contratos</h3>
                    <iframe width='150' height='200' src='<?php echo $servidor; ?>vistas/files/pdfContrato/contratoCE.pdf' frameborder='0' allowfullscreen></iframe>

                        <?php  } ?>
                </article>

                <article class="col-md-12">
                    <?php
                    if ($adicional["eeffEstado"]==1)
                    {
                        ?>
                    <h3>Estados Financieros</h3>

                    <?php
                    foreach($fileEEFF as $key =>$value) {
                        echo " <iframe width='150' height='200'
                                src='$folder" . $value['name'] . "' frameborder='0'
                                allowfullscreen></iframe>";
                    }
                        ?>

                    <?php  } ?>
                </article>

            </div>
        </div>
    </main>


</div>
