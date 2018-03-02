<?php

class ControladorTarifaContrato{

	   public function ctrGetTarifaContrato()
    {
        $tabla = "tbl_adicional";
        $respuesta = ModeloTarifaContrato::ctrGetTarifaContrato($tabla);
        return $respuesta;
    }


}
