<?php
$servidor = Ruta::ctrlRutaServidor();
$social = ControladorPlantilla::ctrlEstiloPlantilla();
?>
    <main class="servicios py-1">
        <div class="container">



            <div class="row">
                <article class="col-md-4 wow bounceInLeft" data-wow-delay=".3s">
                    <img src="<?php echo $servidor; ?>/vistas/img/plantilla/TipsFinancieros.png" alt="Tip Financieros">
                    <h3><a href="#"> Tips Financieros </a></h3>
                    <p class="hidden-sm-down">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias, consequatur debitis dolore ea harum, illum iure, iusto magnam nobis nulla omnis perferendis recusandae reiciendis sed sunt unde veniam voluptates?</p>
                    <a href="#" class="btn btn-secondary hidden-sm-down">Más información</a>

                </article>

                <article class="col-md-4 wow bounceInUp" data-wow-delay=".6s">
                    <img src="<?php echo $servidor; ?>/vistas/img/plantilla/atencionUsuarios.png" alt="Requisitos para aplicar a un reclamo">
                    <h3><a href="#">Atención a Usuarios</a></h3>
                    <p class="hidden-sm-down">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aliquid animi at beatae corporis delectus doloribus ea earum error excepturi laborum magnam molestiae, nemo odit provident ratione rem sapiente?</p>
                    <a href="#" class="btn btn-secondary hidden-sm-down">Más información</a>
                </article>

                <article class="col-md-4 wow bounceInRight" data-wow-delay="1s">
                    <img src="<?php echo $servidor; ?>/vistas/img/plantilla/preguntasFrecuentes.png" alt="Requisitos para aplicar a un préstamo">
                    <h3><a href="#">Preguntas Precuentes</a></h3>
                    <p class="hidden-sm-down">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis hic officiis similique veniam! Aspernatur aut cumque dolor earum eligendi error fuga nulla quas qui quos sed tenetur vitae, voluptatem voluptates!</p>
                    <a href="#" class="btn btn-secondary hidden-sm-down">Más información</a>
                </article>

            </div>
        </div>
    </main>
