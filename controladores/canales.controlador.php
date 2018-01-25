<?php


class ControladorCanales {


    public function ctrGetMarcadores(){
        $tabla = "markers";

        $respuesta = ModeloCanales::mdlGetDataMarket($tabla);


        return json_encode($respuesta);

    }
}