<?php
$data = ControladorTipsPreguntas::ctrMostrarTipsPreguntas();




?>
<div class="paginas-internas">

    <section class="ruta py-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-right">
                    <a href="index.php">Inicio</a> » Tips financieros

                </div>
            </div>
        </div>
    </section>
    <main class="py-1">
        <div class="container">
            <div class="row">
                <article class="col-md-8">

               <?php echo $data["tipsFinanc"]; ?>


                </article>
                <aside class="col-md-4">
                    <img src="vistas/img/plantilla/tips.png" alt="Nosotros" class="img-fluid img-responsive"


                </aside>


            </div>
        </div>
    </main>


</div>