<?php
$servidor = Ruta::ctrlRutaServidor();
$social = ControladorPlantilla::ctrlEstiloPlantilla();
?>
    <main class="servicios py-1">
        <div class="container">



            <div class="row ">
                <article class="col-md-4 wow bounceInLeft" data-wow-delay=".3s">
                    <img src="<?php echo $servidor; ?>/vistas/img/plantilla/TipsFinancieros.png" alt="Tip Financieros">
                    <h3><a href="tips"> Tips Financieros </a></h3>
    

                </article>

                <article class="col-md-4 wow bounceInUp" data-wow-delay=".6s">
                    <img src="<?php echo $servidor; ?>/vistas/img/plantilla/atencionUsuarios.png" alt="Requisitos para aplicar a un reclamo">
                    <h3><a href="#">Atención a Usuarios</a></h3>

                </article>

                <article class="col-md-4 wow bounceInRight" data-wow-delay="1s">
                    <img src="<?php echo $servidor; ?>/vistas/img/plantilla/preguntasFrecuentes.png" alt="Requisitos para aplicar a un préstamo">
                    <h3><a href="#">Preguntas Precuentes</a></h3>

                </article>

            </div>
        </div>
    </main>
