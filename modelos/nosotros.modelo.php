<?php 
require_once "conexion.php";
class ModeloNosotros{

	static public function mdlMostrarNosotros($tabla){
		$stmt = Conexion::conectar()->prepare("select * from $tabla");
		$stmt->execute();

		return $stmt->fetch();
		$stmt->close();

	}
}