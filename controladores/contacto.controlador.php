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
                $asunto = "Mensaje desde la web";
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



                $htmlContent = '
                                <html>
                                <head>
                                    <title>Envio de Correo CE</title>
                                </head>
                                <body>
                                    <h1>Información del contacto!</h1>
                                    <table cellspacing="0" style="border: 2px dashed #FB4314; width: 300px; height: 200px;">
                                        <tr>
                                            <th>Nombre:</th><td>'.$_POST["nombre"].' '.$_POST["apellido"].'</td>
                                        </tr>
                                        <tr>
                                            <th>Cédula:</th><td>'.$_POST["cedula"].'</td>
                                        </tr>
                                          <tr>
                                            <th>Teléfono:</th><td>'.$_POST["telefono"].'</td>
                                        </tr>
                                         <tr>
                                            <th>Ciudad:</th><td>'.$_POST["ciudad"].'</td>
                                        </tr>
                                         <tr>
                                            <th>Monto:</th><td>'.$_POST["monto"].'</td>
                                        </tr>
                                        <tr style="background-color: #e0e0e0;">
                                            <th>Email:</th><td>'. $_POST["email"].'</td>
                                        </tr>
                                         <tr>
                                            <th>Mensaje:</th><td>'.$_POST["mensaje"].'</td>
                                        </tr>
                                        <tr>
                                            <th>Website:</th><td><a href="http://www.crediexpress.com.ni">www.crediexpress.com.ni</a></td>
                                        </tr>
                                    </table>
                                </body>
                                </html>';

                // Set content-type header for sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                // Additional headers
                $headers .= 'From: Información<info@crediexpress.com.ni>' . "\r\n";


                //ENVIAR CORREO ELECTRONICO
                $envio = mail($correoDestino, $asunto, $htmlContent, $headers);
                if ($envio){


                //ALMACENAR EN BASE DE DATOS EL MENSAJE
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

            }else{
                    echo '<script>
						
						swal({
							  title: "Error",
							  text: "¡Ocurrio un error al momento de enviar el mensaje!",
							  type: "error",
							  confirmButtonText: "Cerrar",
							  closeOnConfirm: false
						});

					</script>';

                }
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