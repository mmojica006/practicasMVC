<?php 

class ControladorTipsPreguntas{

   public function ctrMostrarTipsPreguntas()
    {
        $tabla = "tbl_adicional";
        $respuesta = ModeloTipsPreguntas::mdlMostrarTipsPreguntas($tabla);
        return $respuesta;
    }	
}