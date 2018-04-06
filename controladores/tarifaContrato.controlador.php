<?php

class ControladorTarifaContrato{

	   public function ctrGetTarifaContrato()
    {
        $tabla = "tbl_adicional";
        $respuesta = ModeloTarifaContrato::ctrGetTarifaContrato($tabla);
        return $respuesta;
    }

    public function ctrGetEEFF()
    {
        $tabla = "tbl_upload";
        $respuesta = ModeloTarifaContrato::ctrGetEEFF($tabla);
        return $respuesta;
    }


}
