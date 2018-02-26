<?php
require_once "conexion.php";

class ModeloContacto
{

    static public function mdlMostrarcontacto($tabla)
    {
        $stmt = Conexion::conectar()->prepare("select * from $tabla");
        $stmt->execute();

        return $stmt->fetch();
        $stmt->close();


    }

    public function mdlGetEmalDestino($tabla)
    {
        $stmt = Conexion::conectar()->prepare("select * from $tabla limit 1");
        $stmt->execute();

        return $stmt->fetch();
        $stmt->close();


    }

    static public function mdlRegistroMensaje($data, $tabla)
    {
        $response = [];

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre,apellido,cedula,telefono, ciudad,monto,email,mensaje)
          values(:nombre,:apellido,:cedula,:telefono, :ciudad,:monto,:email,:mensaje)  ");

        $stmt->bindParam(":nombre", $data["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":apellido", $data["apellido"], PDO::PARAM_STR);
        $stmt->bindParam(":cedula", $data["cedula"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $data["telefono"], PDO::PARAM_STR);
        $stmt->bindParam(":ciudad", $data["ciudad"], PDO::PARAM_STR);
        $stmt->bindParam(":monto", $data["monto"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $data["email"], PDO::PARAM_STR);
        $stmt->bindParam(":mensaje", $data["mensaje"], PDO::PARAM_STR);
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

    static public function mdlRegistroSuscriptorModel($data, $tabla)
    {
        $response = [];

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre,email)
          values(:nombre,:email)  ");

        $stmt->bindParam(":nombre", $data["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $data["email"], PDO::PARAM_STR);

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

    static public function mdlRevisarSuscriptor($email, $tabla)
    {
        $stmt = Conexion::conectar()->prepare("select * from $tabla where email=:email");
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
        $stmt->close();
    }

}