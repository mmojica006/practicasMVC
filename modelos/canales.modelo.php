<?php
require_once "conexion.php";

class ModeloCanales{

 static public function mdlGetDataMarket($tabla){

     try{
     $stmt = Conexion::conectar()->prepare("select * from $tabla");
     $stmt ->execute();
     return $stmt->fetchAll();

     $stmt = null;
     }
     catch (Exception $e){
         echo $e->getMessage();
     }

 }



}