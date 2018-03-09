<?php
require_once "conexion.php";
class ModeloCanales{

    static public function mdlMostrarCanales($tabla)
    {
        $stmt = Conexion::conectar()->prepare("select * from $tabla");
        $stmt->execute();

        return $stmt->fetch();
        $stmt->close();


    }

 static public function mdlGetDataMarket($tabla){
     try{
     $stmt = Conexion::conectar()->prepare("select * from $tabla");
     $stmt ->execute();
     return $stmt->fetchAll(PDO::FETCH_ASSOC);

     $stmt = null;
     }
     catch (Exception $e){
         echo $e->getMessage();
     }

 }

}