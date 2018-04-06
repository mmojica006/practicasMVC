<?php

class ControladorAdicional{

    public  function ctrMostrarAdicional(){
        $tabla = "tbl_adicional";
        $respuesta = ModeloAdicional::mdlMostrarAdicional($tabla);
        return $respuesta;
    }
}