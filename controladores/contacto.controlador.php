<?php 

class ControladorContacto{

	public function ctrMostrarContracto(){
		$tabla = "contacto";
		$respuesta = ModeloContacto::mdlMostrarcontacto($tabla);
		return $respuesta;


	}
}