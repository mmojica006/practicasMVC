<?php

require_once "conexion.php";

class ModeloReclamo{

    static  public function mdlMostrarReclamo($tabla){
        $stmt = Conexion::conectar()->prepare("select * from $tabla");
        $stmt->execute();

        return $stmt->fetch();
        $stmt->close();
    }

    static public function mdlRegistroMensaje($data, $tabla)
    {
        $response = [];

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre,cedula,sucursal,descripcion)
          values(:nombre,:cedula,:sucursal,:descripcion)  ");

        $stmt->bindParam(":nombre", $data["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":cedula", $data["cedula"], PDO::PARAM_STR);
        $stmt->bindParam(":sucursal", $data["sucursal"], PDO::PARAM_STR);
        $stmt->bindParam(":descripcion", $data["mensaje"], PDO::PARAM_STR);
        $stmt->execute();


        if ($stmt->errorCode() == 0) {
            $response["num"] = 0;
            $response["msg"] = "OK";


        } else {

            $response["num"] = $stmt->errorCode();
            $response["msg"] = $stmt->errorInfo();

        }
        return $response;

        $stmt->close();
        $stmt = null;


    }
}