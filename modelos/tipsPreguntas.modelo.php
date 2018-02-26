<?php
require_once "conexion.php";
class ModeloTipsPreguntas{

	    static public function mdlMostrarTipsPreguntas($tabla)
    {
        $stmt = Conexion::conectar()->prepare("select * from $tabla");
        $stmt->execute();

        return $stmt->fetch();
        $stmt->close();


    }
}