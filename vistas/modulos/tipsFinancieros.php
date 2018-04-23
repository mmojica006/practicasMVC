<?php
$data = ControladorTipsPreguntas::ctrMostrarTipsPreguntas();




?>
<div class="paginas-internas">
    <section class="fondoTips" >




    </section>

    <section class="ruta py-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-right">
                    <a href="index.php">Inicio</a> » Educación financiera

                </div>
            </div>
        </div>
    </section>
    <main class="py-1">
        <div class="container">
            <div class="row">
                <article class="col-md-12">
                    <h1 class="m-b-2 text-muted">Educación Financiera</h1>
               <?php echo $data["tipsFinanc"]; ?>

                </article>



            </div>
        </div>
    </main>


</div>