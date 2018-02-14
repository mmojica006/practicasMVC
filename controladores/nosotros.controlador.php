<?php


class ControladorNosotros{

		public function ctrMostrarNosotros(){
		$tabla = "tbl_nosotros";
		$respuesta = ModeloNosotros::mdlMostrarNosotros($tabla);
		return $respuesta;


	}
}