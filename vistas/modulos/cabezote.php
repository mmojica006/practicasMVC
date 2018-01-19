<?php
 $servidor = Ruta::ctrlRutaServidor();
?>

<!--=====================================
TOP
======================================-->

<section class="Bienvenidos">
    <header class="encabezado" role="banner">
    <a href="index.php">
        <img src="<?php echo  $servidor.$social["logo"] ?>" alt="Logo del sitio">
    </a>
    
     <button type="button" class="boton-buscar">Boton buscar</button>
    <button type="button" class="boton-menu">Boton Menu</button>
    <form action="#" id="bloque-buscar">
    <div class="contenedor-bloque-buscar">
        <input type="text" placeholder="Buscar...">
        <input type="submit" value="buscar">
    </div>
        
    </form>

    <nav id="menu-principal">
        <ul>
            <li class="active"><a href="index.php">Inicio</a></li>
            <li><a href="index.php">Nosotros</a></li>
            <li><a href="index.php">Servicios</a></li>
            <li><a href="index.php">Contacto</a></li>
        </ul>
    </nav>
    
        
    </header>

<div class="texto-encabezado">
    <h1>Diseño de Apps </h1>
    
</div>

</section>


<div class="container-fluid barraSuperior" id="top">

    <div class="container">

        <div class="row">

            <!--=====================================
            SOCIAL
            ======================================-->

            <div class="col-lg-4 col-md-9 col-sm-8 col-xs-12 social">

                <ul>
                    <?php

                    $social = ControladorPlantilla::ctrlEstiloPlantilla();
                    $jsonRedesSociales = json_decode($social["redesSociales"], true);

                    foreach ($jsonRedesSociales as $key => $value) {


                        echo '	<li>
						<a href="' . $value["url"] . '" target="_blank">
							<i class="fa ' . $value["red"] . ' redSocial ' . $value["estilo"] . ' " aria-hidden="true"></i>
						</a>
					</li>';


                    }

                    ?>


                </ul>


            </div>

            <!--=====================================
            REGISTRO
            ======================================-->

            <div class="col-lg-8 col-md-3 col-sm-4 col-xs-12 registro">

                <ul>

                    <li><a href="#modalIngreso" data-toggle="modal">Ingresar</a></li>
                    <li>|</li>
                    <li><a href="#modalRegistro" data-toggle="modal">Crear una cuenta</a></li>

                </ul>
                <nav id="menu-principal" class="collapse_OLD">
                    <ul>
                        <li class="active"><a href="inicio">Inicio</a></li>
                        <li><a href="quienes-somos">Quienes Somos</a></li>
                        <li><a href="servicios">Servicios </a></li>
                        <li><a href="testimonios">Testimonios</a></li>
                        <li><a href="contacto">Contacto</a></li>
                    </ul>
                </nav>

            </div>

        </div>

    </div>

</div>


<!--=====================================
HEADER
======================================-->

<header class="container-fluid">

    <div class="container">

        <div class="row" id="cabezote">

            <!--=====================================
            LOGOTIPO
            ======================================-->


            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logotipo">

                <a href="#">

                    <img src="<?php echo  $servidor.$social["logo"] ?>" class="img-responsive">

                </a>

            </div>

            <!--=====================================
            BLOQUE CATEGORÍAS Y BUSCADOR
            ======================================-->

            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">

                <!--=====================================
                BOTÓN CATEGORÍAS
                ======================================-->

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 backColor" id="btnCategorias">

                    <p>CATEGORÍAS

                        <span class="pull-right">
							<i class="fa fa-bars" aria-hidden="true"></i>
						</span>

                    </p>

                </div>

                <!--=====================================
                BUSCADOR
                ======================================-->

                <div class="input-group col-lg-8 col-md-8 col-sm-8 col-xs-12" id="buscador">

                    <input type="search" name="buscar" class="form-control" placeholder="Buscar...">

                    <span class="input-group-btn">
						
						<a href="#">

							<button class="btn btn-default backColor" type="submit">
								
								<i class="fa fa-search"></i>

							</button>

						</a>

					</span>

                </div>

            </div>

            <!--=====================================
            CARRITO DE COMPRAS
            ======================================-->

            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="carrito">

                <a href="#">

                    <button class="btn btn-default pull-left backColor">

                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>

                    </button>

                </a>

                <p>TU CESTA <span class="cantidadCesta">3</span> <br> USD $ <span class="sumaCesta">20</span></p>

            </div>

        </div>

        <!--=====================================
        CATEGORÍAS
        ======================================-->

        <div class="col-xs-12 backColor" id="categorias">

            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">

                <h4>
                    <a href="#" class="pixelCategorias">Lorem Ipsum</a>
                </h4>

                <hr>

                <ul>

                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>

                </ul>

            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">

                <h4>
                    <a href="#" class="pixelCategorias">Lorem Ipsum</a>
                </h4>

                <hr>

                <ul>

                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>

                </ul>

            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">

                <h4>
                    <a href="#" class="pixelCategorias">Lorem Ipsum</a>
                </h4>

                <hr>

                <ul>

                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>

                </ul>

            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">

                <h4>
                    <a href="#" class="pixelCategorias">Lorem Ipsum</a>
                </h4>

                <hr>

                <ul>

                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>

                </ul>

            </div>

        </div>

    </div>

</header>



