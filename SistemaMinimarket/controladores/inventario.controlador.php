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

		/*=============================================
	MOSTRAR Compras
	=============================================*/

	static public function ctrlGetMaxPrice($valor){

		$tabla = "inventario";

		$respuesta = ModeloInvenario::mdlGetMaxPrice($tabla, $valor);
 
		return $respuesta;

	}

}

