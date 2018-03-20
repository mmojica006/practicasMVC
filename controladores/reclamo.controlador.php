<?php

class ControladorReclamo{

    public function ctrMostrarReclamo(){

        $tabla = "tbl_reclamo_info";
        $respuesta = ModeloReclamo::mdlMostrarReclamo($tabla);
        return $respuesta;
    }

    public function ctrRegistroMensajes()
    {

        if (isset($_POST["nombre"])) {

            $emailDetino = ModeloContacto::mdlGetEmalDestino("contacto");

            if (preg_match('/^[a-zA-Z\s]+$/', $_POST["nombre"]) &&
                preg_match('/^[a-zA-Z0-9\s\.,]+$/', $_POST['cedula']) &&
                preg_match('/^[a-zA-Z\s]+$/', $_POST['sucursal']) &&
                preg_match('/^[a-zA-Z0-9\s\.,]+$/', $_POST["mensaje"] )
            ) {
                #ENVIAR EL CORREO ELECTRÓNICO
                #------------------------------------------------------
                #mail(Correo destino, asunto del mensaje, mensaje, cabecera del correo);

                $correoDestino =$emailDetino["email"];
                $asunto = "Reclamo";
                $mensaje = "Nombre: " . $_POST["nombre"] . "\n" . "\n" .
                    "Cédula: " . $_POST["cedula"] . "\n" . "\n" .
                    "sucursal: " . $_POST["sucursal"] . "\n" . "\n" .
                    "Mensaje: " . $_POST["mensaje"] . "\n";
                $cabecera = "From: Sitio web" . "\r\n" ;

                $envio = mail($correoDestino, $asunto, $mensaje, $cabecera);
                $datosController = array("nombre" => $_POST["nombre"],
                    "cedula" => $_POST["cedula"],
                    "sucursal" => $_POST["sucursal"],
                    "mensaje" => $_POST["mensaje"]
                );

                $respuesta = ModeloReclamo::mdlRegistroMensaje($datosController, "tbl_reclamo");


                if ($envio == true && $respuesta["num"] == 0) {
                    echo '<script>
						
						swal({
							  title: "¡OK!",
							  text: "¡Reclamo Registrado satisfactoriamente!",
							  type: "success",
							  confirmButtonText: "Cerrar",
							  closeOnConfirm: false
						},

						function(isConfirm){
								 if (isConfirm) {	   
								    window.location = "index.php";
								  } 
						});

					</script>';

                }


            } else {
                echo '<div class="alert alert-danger">¡No se puedo enviar el mensaje, no se permiten caracteres especiales!</div>';
            }

        }


    }

}