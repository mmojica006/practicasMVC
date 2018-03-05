<?php
$dataContacto  = ControladorContacto::ctrMostrarContracto();
$servidor = Ruta::ctrlRutaServidor();

if($dataContacto['imgFondo'] != ''){
    $fondoUrl = $servidor.$dataContacto['imgFondo'];
}else{
     $fondoUrl = $servidor.'vistas/img/plantilla/default/back_default_blue.jpg';
}


?>

 
<div class="paginas-internas">

    <section class="bienvenidos" >


        <div class="texto-encabezado text-xs-center">

            <div class="container">
                <h1 class="display-4"><?php echo $dataContacto['bannertitulo']; ?></h1>
                <p class="wow bounceIn" data-wow-delay=".3s"><?php echo $dataContacto['bannerdescripcion']; ?></p>

            </div>

        </div>

    </section>
    
    <section class="ruta py-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-right">
                    <a href="index.html">Inicio</a> » Contacto

                </div>
            </div>
        </div>
    </section>
    <main class="py-1">
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <h2 class="m-b-2 text-muted">Formulario de contacto</h2>


                    <form action="#" id="contactForm" method="post" onsubmit="return validarMensaje()">

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label">Nombre</label>

                            <div class="col-md-8">
                                <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" data-toggle="tooltip" data-placement="top" title="Ingrese su nombre completo" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apellido" class="col-md-4 col-form-label">Apellidos</label>

                            <div class="col-md-8">
                                <input class="form-control" type="text" id="apellido" name="apellido" placeholder="Ingrese su apellido" data-toggle="tooltip" data-placement="top" title="Ingrese su nombre completo" required>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="cedula" class="col-md-4 col-form-label">No. Cédula</label>

                            <div class="col-md-8">
                                <input class="form-control" type="text" id="cedula" name="cedula" placeholder="Ingrese su cédula" data-toggle="tooltip" data-placement="top" title="Ingrese su cédula" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefono" class="col-md-4 col-form-label">Número de teléfono de contacto</label>

                            <div class="col-md-8">
                                <input class="form-control" type="number" id="telefono" name="telefono" placeholder="Ingrese el teléfono de contacto" data-toggle="tooltip" data-placement="top" title="Ingrese el teléfono de contacto" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ciudad" class="col-md-4 col-form-label">Ciudad donde vive</label>

                            <div class="col-md-8">
                                <input class="form-control" type="text" id="ciudad" name="ciudad" placeholder="Ingrese la Ciudad" data-toggle="tooltip" data-placement="top" title="Ingrese la ciudad" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="monto" class="col-md-4 col-form-label">Monto que necesita</label>

                            <div class="col-md-8">
                                <input class="form-control" type="text" id="monto" name="monto" placeholder="Ingrese el monto" data-toggle="tooltip" data-placement="top" title="Ingrese el monto que necesita" required>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label">Email</label>

                            <div class="col-md-8">
                                <input class="form-control" type="email" id="email" name="email" placeholder="Ingrese su email" data-toggle="tooltip" data-placement="top" title="Ingrese su email" required>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="mensaje" class="col-md-4 col-form-label">Mensaje</label>

                            <div class="col-md-8">
                                <textarea class="form-control" rows="5" id="mensaje" name="mensaje" placeholder="Ingrese su mensaje" data-toggle="tooltip" data-placement="top" title="Ingrese un mensaje" required></textarea>

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
                    $mensajes = new ControladorContacto();
                    $mensajes->ctrRegistroMensajes(); //Enviar las variables del post que estan en los atributos name
                    ?>


                </div>
                <div class="col-md-4">
                    <h5 class="text-muted"><?php echo $dataContacto['titulo']; ?> </h5>
                    <?php echo $dataContacto['descripcion']; ?>              

                </div>





            </div>
        </div>
    </main>


    </div>