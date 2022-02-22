<?php

require_once "conexion.php";

class ModeloInvenario{


	/*=============================================
	MOSTRAR INVENTARIO
	=============================================*/

	static public function mdlMostrarInventarios($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT inv.existencias, inv.tipo_accion, inv.nombre_producto, inv.cantidad, (Select deta.precio FROM ventas_detalle as deta WHERE deta.id_ventas_detalle = inv.id_detalle_venta) as precio,inv.existencias_ahora, inv.fecha_hora_accion, prod.codigo
			FROM inventario as inv, productos as prod WHERE inv.id_producto = prod.id ORDER BY fecha_hora_accion DESC");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}

	static public function mdlGetMaxPrice($tabla, $item, $valor){

		if($item != null){

			
			$stmt = Conexion::conectar()->prepare("SELECT * FROM inventario where id = (SELECT max(id) from inventario WHERE id_producto = :$item)");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_INT);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM inventario");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;


	}

		/*=============================================
	EDITAR VENTA
	=============================================*/

	static public function mdlEliminarInventarioAnulado($id_ventas_detalle){

		$stmt = Conexion::conectar()->prepare("DELETE FROM inventario WHERE id_detalle_venta = :id_ventas_detalle");

		$stmt->bindParam(":id_ventas_detalle", $id_ventas_detalle, PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}




}