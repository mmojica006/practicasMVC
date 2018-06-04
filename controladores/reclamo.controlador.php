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
                $asunto = "Mensaje de Reclamo!";
                $mensaje = "Nombre: " . $_POST["nombre"] . "\n" . "\n" .
                    "Cédula: " . $_POST["cedula"] . "\n" . "\n" .
                    "sucursal: " . $_POST["sucursal"] . "\n" . "\n" .
                    "Mensaje: " . $_POST["mensaje"] . "\n";
                $cabecera = "From: Sitio web" . "\r\n" ;


                $htmlContent = '
                                <html>
                                <head>
                                    <title>Correo de Reclamo</title>
                                </head>
                                <body>
                                    <h1>Información del Reclamo!</h1>
                                    <table cellspacing="0" style="border: 2px dashed #FB4314; width: 300px; height: 200px;">
                                        <tr>
                                            <th>Nombre:</th><td>'.$_POST["nombre"].'</td>
                                        </tr>
                                        <tr>
                                            <th>Cédula:</th><td>'.$_POST["cedula"].'</td>
                                        </tr>
                                          <tr>
                                            <th>Sucursal:</th><td>'.$_POST["sucursal"].'</td>
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





                $envio = mail($correoDestino, $asunto, $htmlContent, $headers);

                if ($envio){

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


            } else {
                echo '<div class="alert alert-danger">¡No se puedo enviar el mensaje, no se permiten caracteres especiales!</div>';
            }

        }


    }

}