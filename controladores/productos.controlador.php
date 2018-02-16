<?php 

class ControladorProducto{

	public function ctrMostrarProductos(){
		$tabla = "tbl_productos";
		$respuesta = ModeloProducto::mdlMostrarProducto($tabla);
		return $respuesta;


	}
}