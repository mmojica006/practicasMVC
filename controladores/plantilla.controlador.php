<?php
class ControladorPlantilla{
/* Llamamos a la plantilla */

	public function plantilla(){
		include "vistas/plantilla.php";
	}

	/*=============================================
	   TRAEMOS LOS ESTILOS DINAMICOS DE LA PLANTILLA         
	=============================================*/
public function ctrlEstiloPlantilla(){
	$tabla = "plantilla";
	$respuesta = ModeloPlantilla::mdlEstiloPlantilla($tabla);
	return $respuesta;
}
}