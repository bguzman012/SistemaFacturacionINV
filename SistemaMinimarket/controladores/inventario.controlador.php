<?php

class ControladorInventario{

	/*=============================================
	MOSTRAR INVENTARIO
	=============================================*/

	static public function ctrMostrarInventarios($item, $valor){

		$tabla = "inventario";

		$respuesta = ModeloInvenario::mdlMostrarInventarios($tabla, $item, $valor);

		return $respuesta;

	}

}

