<?php 

class ControladorContacto{

	public function ctrMostrarContracto(){
		$tabla = "contacto";
		$respuesta = ModeloContacto::mdlMostrarcontacto($tabla);
		return $respuesta;
	}

	public function ctrRegistroMensajes(){

	    if (isset($_POST["nombre"])){
	        if (preg_match('/^[a-zA-Z\s]+$/',$_POST["nombre"]) &&
                preg_match('/^[a-zA-Z\s]+$/',$_POST['apellido']) &&
                preg_match('/^[a-zA-Z0-9\s\.,]+$/',$_POST['cedula']) &&
                preg_match('/^[a-zA-Z0-9\s\.,]+$/',$_POST['telefono']) &&
                preg_match('/^[a-zA-Z0-9\s\.,]+$/',$_POST['ciudad']) &&
                preg_match('/^[a-zA-Z0-9\s\.,]+$/',$_POST['monto']) &&
                preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',$_POST["email"]) &&
                preg_match('/^[a-zA-Z0-9\s\.,]+$/',$_POST["mensaje"])){

                #ENVIAR EL CORREO ELECTRÓNICO
                #------------------------------------------------------
                #mail(Correo destino, asunto del mensaje, mensaje, cabecera del correo);

                $correoDestino = "cursos@tutorialesatualcance.com";
                $asunto = "Mensaje de la web";
                $mensaje = "Nombre: ".$_POST["nombre"]."\n"."\n".
                    "Email: ".$_POST["email"]."\n"."\n".
                    "Mensaje: ".$_POST["mensaje"]."\n";





            }else{
                echo '<div class="alert alert-danger">¡No se puedo enviar el mensaje, no se permiten caracteres especiales!</div>';
            }

        }


    }
}