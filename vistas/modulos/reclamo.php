<?php
$dataReclamo  = ControladorReclamo::ctrMostrarReclamo();
?>


<div class="paginas-internas">

    <section class="bienvenidos" >


        <div class="texto-encabezado text-xs-center">

            <div class="container">
                <h1 class="display-4"><?php echo $dataReclamo['bannertitulo']; ?></h1>
                <p class="wow bounceIn" data-wow-delay=".3s"><?php echo $dataReclamo['bannerdescripcion']; ?></p>

            </div>

        </div>

    </section>

    <section class="ruta py-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-right">
                    <a href="index.php">Inicio</a> » Reclamo

                </div>
            </div>
        </div>
    </section>
    <main class="py-1">
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <h2 class="m-b-2 text-muted">Formulario de Reclamo</h2>


                    <form action="#" id="reclamoForm" method="post" onsubmit="return validarMensaje()">

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label">Nombre</label>

                            <div class="col-md-8">
                                <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" data-toggle="tooltip" data-placement="top" title="Ingrese su nombre completo" required>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="cedula" class="col-md-4 col-form-label">No. Cédula</label>

                            <div class="col-md-8">
                                <input class="form-control" type="text" id="cedula" name="cedula" placeholder="Ingrese su cédula" data-toggle="tooltip" data-placement="top" title="Ingrese su cédula" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sucursal" class="col-md-4 col-form-label">Sucursal</label>

                            <div class="col-md-8">
                                <input class="form-control" type="text" id="sucursal" name="sucursal" placeholder="Ingrese la sucursal" data-toggle="tooltip" data-placement="top" title="Ingrese la sucursal" required>
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="mensaje" class="col-md-4 col-form-label">Mensaje</label>

                            <div class="col-md-8">
                                <textarea class="form-control" rows="5" id="mensaje" name="mensaje" placeholder="Ingrese una descripción" data-toggle="tooltip" data-placement="top" title="Ingrese una descripción" required></textarea>

                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                                <button type="reset" class="btn btn-secondary">Limpiar</button>
                            </div>
                        </div>
                    </form>

                    <?php
                    $mensajes = new ControladorReclamo();
                    $mensajes->ctrRegistroMensajes(); //Enviar las variables del post que estan en los atributos name
                    ?>


                </div>
                <div class="col-md-4">
                    <h5 class="text-muted"><?php echo $dataReclamo['titulo']; ?> </h5>
                    <?php echo $dataReclamo['descripcion']; ?>

                </div>





            </div>
        </div>
    </main>


</div>