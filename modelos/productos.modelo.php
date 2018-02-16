<?php
require_once "conexion.php";
class ModeloProducto{

		static public function mdlMostrarProducto($tabla){
		$stmt = Conexion::conectar()->prepare("select * from $tabla");
		$stmt->execute();

		return $stmt->fetch();
		$stmt->close();


	}
}
