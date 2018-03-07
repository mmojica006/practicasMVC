<?php
include_once "../modelos/rutas.php";


class AjaxNosotros
{

    public function ajaxGetServerPatch()
    {
        $result = Ruta::ctrlRutaServidor();
        echo $result;
    }

}

if (isset($_POST["action"])) {
    $obj = new AjaxNosotros();
    $obj->ajaxGetServerPatch();


}
