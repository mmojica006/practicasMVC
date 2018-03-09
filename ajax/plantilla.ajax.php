<?php
require_once "../controladores/plantilla.controlador.php";
require_once "../modelos/plantilla.modelo.php";
include_once "../modelos/rutas.php";
class AjaxPlantilla{

	public function ajaxEstiloPlantilla(){

		$respuesta = ControladorPlantilla::ctrlEstiloPlantilla();
		//var_dump($respuesta);
		echo json_encode($respuesta);
	}

    public function ajaxGetServerPatch()
    {
        $result = Ruta::ctrlRutaServidor();
        echo $result;
    }

}

$objeto = new AjaxPlantilla();
$objeto -> ajaxEstiloPlantilla();


if (isset($_POST["action"])) {
    $obj = new AjaxPlantilla();
    $obj->ajaxGetServerPatch();


}

