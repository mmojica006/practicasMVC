<?php
require_once "conexion.php";
class ModeloTarifaContrato{

	static public function ctrGetTarifaContrato($tabla){
		$stmt = Conexion::conectar()->prepare("select * from $tabla");
		$stmt->execute();

		return $stmt->fetch();
		$stmt->close();

	}
    static public function ctrGetEEFF($tabla){
        $stmt = Conexion::conectar()->prepare("select * from $tabla");
        $stmt->execute();

        return $stmt->fetchAll();
        $stmt->close();

    }
	
}