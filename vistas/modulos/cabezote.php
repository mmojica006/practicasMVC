<?php

$servidor = Ruta::ctrlRutaServidor();
$social = ControladorPlantilla::ctrlEstiloPlantilla();
?>

<!--=====================================
TOP
======================================-->
<section class="bienvenidos ">
    <header class="encabezado navbar-fixed-top " role="banner" id="encabezado">
        <div class="container">
            <a href="index.html" class="logo">
                <img src="<?php echo $servidor . $social["logo"] ?>" alt="Logo del sitio">
            </a>

            <button type="button" class="boton-buscar" data-toggle="collapse" data-target="#bloque-buscar"
                    aria-expanded="false">
                8749-1800
            </button>

            <button type="button" class="boton-menu hidden-md-up" data-toggle="collapse" data-target="#menu-principal"
                    aria-expanded="false">
                <i class="fa fa-bars" aria-hidden="true"></i></button>

            <form action="#" id="bloque-buscar" class="collapse">
                <div class="contenedor-bloque-buscar">
                    <input type="text" placeholder="Buscar...">
                    <input type="submit" value="Buscar">
                </div>
            </form>

            <nav id="menu-principal" class="collapse">
                <ul>
                    <li class="active"><a href="index.php">Inicio</a></li>
                    <li><a href="quienes-somos">Sobre nosotros</a></li>
                    <li><a href="canales">Canales de atención </a></li>
                    <li><a href="productos">Productos</a></li>
                    <li><a href="contacto">Contáctenos</a></li>
                </ul>
            </nav>

        </div>
    </header>
</section>




<!--=====================================
HEADER
======================================-->





