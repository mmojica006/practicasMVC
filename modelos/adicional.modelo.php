<?php
require_once "conexion.php";


class ModeloAdicional{
    static public function mdlMostrarAdicional($tabla)
    {
        $stmt = Conexion::conectar()->prepare("select * from $tabla");
        $stmt->execute();

        return $stmt->fetch();
        $stmt->close();


    }
}