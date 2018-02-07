<?php
require_once "conexion.php";

class ModeloContacto{

	static public function mdlMostrarcontacto($tabla){
		$stmt = Conexion::conectar()->prepare("select * from $tabla");
		$stmt->execute();

		return $stmt->fetch();
		$stmt->close();


	}
}