<?php

class ControladorContacto
{

    public function ctrMostrarContracto()
    {
        $tabla = "contacto";
        $respuesta = ModeloContacto::mdlMostrarcontacto($tabla);
        return $respuesta;
    }

    public function ctrRegistroMensajes()
    {

        if (isset($_POST["nombre"])) {

            $emailDetino = ModeloContacto::mdlGetEmalDestino("contacto");

            if (preg_match('/^[a-zA-Z\s]+$/', $_POST["nombre"]) &&
                preg_match('/^[a-zA-Z\s]+$/', $_POST['apellido']) &&
                preg_match('/^[a-zA-Z0-9\s\.,]+$/', $_POST['cedula']) &&
                preg_match('/^[a-zA-Z0-9\s\.,]+$/', $_POST['telefono']) &&
                preg_match('/^[a-zA-Z0-9\s\.,]+$/', $_POST['ciudad']) &&
                preg_match('/^[a-zA-Z0-9\s\.,]+$/', $_POST['monto']) &&
                preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["email"]) &&
                preg_match('/^[a-zA-Z0-9\s\.,]+$/', $_POST["mensaje"])
            ) {
                #ENVIAR EL CORREO ELECTRÓNICO
                #------------------------------------------------------
                #mail(Correo destino, asunto del mensaje, mensaje, cabecera del correo);

                $correoDestino = $emailDetino["email"];
                $asunto = "Mensaje de la web";
                $mensaje = "Nombre: " . $_POST["nombre"] . "\n" . "\n" .
                    "Apellido: " . $_POST["apellido"] . "\n" . "\n" .
                    "Cédula: " . $_POST["cedula"] . "\n" . "\n" .
                    "Teléfono: " . $_POST["telefono"] . "\n" . "\n" .
                    "Ciudad: " . $_POST["ciudad"] . "\n" . "\n" .
                    "Monto: " . $_POST["monto"] . "\n" . "\n" .
                    "Email: " . $_POST["email"] . "\n" . "\n" .
                    "Mensaje: " . $_POST["mensaje"] . "\n";
                $cabecera = "From: Sitio web" . "\r\n" .
                    "CC: " . $_POST['email'];

                $envio = mail($correoDestino, $asunto, $mensaje, $cabecera);
                $datosController = array("nombre" => $_POST["nombre"],
                    "apellido" => $_POST["apellido"],
                    "nombre" => $_POST["nombre"],
                    "cedula" => $_POST["cedula"],
                    "telefono" => $_POST["telefono"],
                    "ciudad" => $_POST["ciudad"],
                    "monto" => $_POST["monto"],
                    "email" => $_POST["email"],
                    "mensaje" => $_POST["mensaje"]
                );


                $datosSuscriptor = $_POST["email"];
                $revisarSuscriptor = ModeloContacto::mdlRevisarSuscriptor($datosSuscriptor, "tbl_suscriptores");

                if (count($revisarSuscriptor["email"]) == 0) {
                    ModeloContacto::mdlRegistroSuscriptorModel($datosController, "tbl_suscriptores");
                }

                $respuesta = ModeloContacto::mdlRegistroMensaje($datosController, "tbl_mensajes");


                if ($envio == true && $respuesta["num"] == 0) {
                    echo '<script>
						
						swal({
							  title: "¡OK!",
							  text: "¡El mensaje ha sido enviado correctamente!",
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