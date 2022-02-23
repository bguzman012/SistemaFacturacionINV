<?php

require_once "conexion.php";

class ModeloCompras{

			/*=============================================
	ANULAR COMPRA
	=============================================*/

	static public function mdlAnularCompra($id_compras, $estado){

		$stmt = Conexion::conectar()->prepare("UPDATE compras SET  estado = :estado WHERE id = :id_compras");

		$stmt->bindParam(":id_compras", $id_compras, PDO::PARAM_INT);
		$stmt->bindParam(":estado", $estado, PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}
		/*=============================================
	MOSTRAR Compras DETALLE
	=============================================*/

	static public function mdlMostrarComprasDetalle($valor){
		
		$stmt = Conexion::conectar()->prepare("SELECT co.cantidad, co.precio, co.total_detalle, co.compras, pr.descripcion, co.id_producto, co.id,  (Select inv.existencias_ahora FROM inventario as inv where inv.id_detalle_compra = co.id) AS stock FROM compras_detalle AS co  JOIN productos AS pr WHERE co.id_producto = pr.id and co.compras =  :id_compras AND co.estado = 'ACEP' ORDER BY co.id ASC");

		
		$stmt->bindParam(":id_compras", $valor, PDO::PARAM_INT);
		$stmt -> execute();

		$final_array = $stmt -> fetchAll();	
		
		return $final_array;
		$stmt -> close();

		$stmt = null;
	}

	/*=============================================
	MOSTRAR compras
	=============================================*/

	static public function mdlMostrarCompras($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE estado = 'ACEP' AND $item = :$item ORDER BY id ASC");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE estado = 'ACEP' ORDER BY id ASC ");

			$stmt -> execute();

			return $stmt -> fetchAll(); 

		}
		
		$stmt -> close();

		$stmt = null;

	}



	/*=============================================
	REGISTRO DE compra
	=============================================*/

	static public function mdlIngresarCompra($tabla, $datos){

		$fecha = date('Y-m-d');
		$hora = date('H:i:s');
		$fecha_hora = $fecha.' '.$hora;
		$conexion = Conexion::conectar();
		$stmt = $conexion ->prepare("INSERT INTO $tabla(id_vendedor, impuesto, neto, total, codigo, fecha) VALUES (:id_vendedor, :impuesto, :neto, :total, :codigo, :fecha)");

		$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_INT);
		$stmt->bindParam(":id_vendedor", $datos["id_vendedor"], PDO::PARAM_INT);
		$stmt->bindParam(":impuesto", $datos["impuesto"], PDO::PARAM_STR);
		$stmt->bindParam(":neto", $datos["neto"], PDO::PARAM_STR);
		$stmt->bindParam(":total", $datos["total"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha", $fecha_hora, PDO::PARAM_STR);

		
		if($stmt->execute()){
			$tabla_detalle="compras_detalle";
			$lastId = $conexion->lastInsertId();
			echo "<script>console.log('KKK: " . $lastId . "' );</script>";
			$jArr = json_decode($datos["productos"], true);
			foreach ($jArr as $key => $value) {
				echo "<script>console.log('PAREDES: " . $value["id"] . "' );</script>";
				$conexion_inserted = Conexion::conectar();
				$stmt = $conexion_inserted->prepare("INSERT INTO $tabla_detalle(cantidad, precio, total_detalle, compras, id_producto) 
				VALUES (:cantidad, :precio, :total_detalle, :compras, :id_producto)");

				$id_producto_final=$value["id"];
				$candidad_final=$value["cantidad"];
				$stmt->bindParam(":cantidad", $value["cantidad"], PDO::PARAM_STR);
				$stmt->bindParam(":precio", $value["precio"], PDO::PARAM_STR);
				$stmt->bindParam(":total_detalle", $value["total"], PDO::PARAM_STR);
				$stmt->bindParam(":compras", $lastId, PDO::PARAM_INT);
				$stmt->bindParam(":id_producto", $value["id"], PDO::PARAM_STR);
				$stmt->execute();

				$last_detalle_inserted = $conexion_inserted->lastInsertId();

				$stmt = Conexion::conectar()->prepare("SELECT * FROM inventario where id = (SELECT max(id) from inventario WHERE id_producto = $id_producto_final)");
				$stmt -> execute();
				
				$ROAD = $stmt -> fetch();

				if ($ROAD!=null ){

					//echo "<script>console.log('ROAD: " . $ROAD["id"]. "' );</script>";

					$existencias_ahora = $ROAD["existencias_ahora"] + $candidad_final;
					$existencias_antes = $ROAD["existencias_ahora"]; 
					date_default_timezone_set('America/Bogota');
					$fecha = date('Y-m-d');
					$hora = date('H:i:s');
					$fecha_hora = $fecha.' '.$hora;

					$tipo_accion = "compra";

					$stmt = Conexion::conectar()->prepare("INSERT INTO inventario(existencias, tipo_accion, id_detalle_compra, nombre_producto, cantidad, existencias_ahora, id_producto, fecha_hora_accion) 
					VALUES (:existencias, :tipo_accion, :id_detalle_compra, (Select descripcion from productos as  pr  where pr.id = :id_producto), :cantidad, :existencias_ahora, :id_producto, :fecha_hora_accion)");
					
					$stmt->bindParam(":existencias", $existencias_antes, PDO::PARAM_INT);
					$stmt->bindParam(":tipo_accion", $tipo_accion, PDO::PARAM_STR);
					$stmt->bindParam(":id_detalle_compra", $last_detalle_inserted, PDO::PARAM_INT);
					$stmt->bindParam(":id_producto", $id_producto_final, PDO::PARAM_INT);
					$stmt->bindParam(":cantidad", $candidad_final, PDO::PARAM_INT);
					$stmt->bindParam(":existencias_ahora", $existencias_ahora, PDO::PARAM_INT);
					$stmt->bindParam(":fecha_hora_accion", $fecha_hora, PDO::PARAM_STR);

					
					$stmt->execute();
	
					

				}else{
					//echo "<script>console.log('ROAD: " . $ROAD["id"]. "' );</script>";

					$existencias_ahora = $candidad_final;
					$existencias_antes = 0; 
					date_default_timezone_set('America/Bogota');
					$fecha = date('Y-m-d');
					$hora = date('H:i:s');
					$fecha_hora = $fecha.' '.$hora;

					$tipo_accion = "compra";

					$stmt = Conexion::conectar()->prepare("INSERT INTO inventario(existencias, tipo_accion, id_detalle_compra, nombre_producto, cantidad, existencias_ahora, id_producto, fecha_hora_accion) 
					VALUES (:existencias, :tipo_accion, :id_detalle_compra, (Select descripcion from productos as  pr  where pr.id = :id_producto), :cantidad, :existencias_ahora, :id_producto, :fecha_hora_accion)");
					
					$stmt->bindParam(":existencias", $existencias_antes, PDO::PARAM_INT);
					$stmt->bindParam(":tipo_accion", $tipo_accion, PDO::PARAM_STR);
					$stmt->bindParam(":id_detalle_compra", $last_detalle_inserted, PDO::PARAM_INT);
					$stmt->bindParam(":id_producto", $id_producto_final, PDO::PARAM_INT);
					$stmt->bindParam(":cantidad", $candidad_final, PDO::PARAM_INT);
					$stmt->bindParam(":existencias_ahora", $existencias_ahora, PDO::PARAM_INT);
					$stmt->bindParam(":fecha_hora_accion", $fecha_hora, PDO::PARAM_STR);

					
					$stmt->execute();
	
				}

			}
			

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

		/*=============================================
	EDITAR VENTA
	=============================================*/

	static public function mdlEditarAnulados($id_compras_detalle, $estado){

		$stmt = Conexion::conectar()->prepare("UPDATE compras_detalle SET  estado = :estado WHERE id = :id_compras_detalle");

		$stmt->bindParam(":id_compras_detalle", $id_compras_detalle, PDO::PARAM_INT);
		$stmt->bindParam(":estado", $estado, PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}


	/*=============================================
	EDITAR Compra
	=============================================*/

	static public function mdlEditarCompra($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET  id_cliente = :id_cliente, id_vendedor = :id_vendedor, productos = :productos, impuesto = :impuesto, neto = :neto, total= :total, metodo_pago = :metodo_pago WHERE codigo = :codigo");

		$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_INT);
		$stmt->bindParam(":id_cliente", $datos["id_cliente"], PDO::PARAM_INT);
		$stmt->bindParam(":id_vendedor", $datos["id_vendedor"], PDO::PARAM_INT);
		$stmt->bindParam(":productos", $datos["productos"], PDO::PARAM_STR);
		$stmt->bindParam(":impuesto", $datos["impuesto"], PDO::PARAM_STR);
		$stmt->bindParam(":neto", $datos["neto"], PDO::PARAM_STR);
		$stmt->bindParam(":total", $datos["total"], PDO::PARAM_STR);
		$stmt->bindParam(":metodo_pago", $datos["metodo_pago"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	ELIMINAR Compra
	=============================================*/

	static public function mdlEliminarCompra($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	RANGO FECHAS
	=============================================*/	

	static public function mdlRangoFechasCompras($tabla, $fechaInicial, $fechaFinal){

		if($fechaInicial == null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE estado = 'ACEP' ORDER BY id ASC");

			$stmt -> execute();

			return $stmt -> fetchAll();	 


		}else if($fechaInicial == $fechaFinal){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE estado = 'ACEP' and fecha like '%$fechaFinal%'");

			$stmt -> bindParam(":fecha", $fechaFinal, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetchAll();

		}else{

			$fechaActual = new DateTime();
			$fechaActual ->add(new DateInterval("P1D"));
			$fechaActualMasUno = $fechaActual->format("Y-m-d");

			$fechaFinal2 = new DateTime($fechaFinal);
			$fechaFinal2 ->add(new DateInterval("P1D"));
			$fechaFinalMasUno = $fechaFinal2->format("Y-m-d");

			if($fechaFinalMasUno == $fechaActualMasUno){

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE estado = 'ACEP' and fecha BETWEEN '$fechaInicial' AND '$fechaFinalMasUno'");

			}else{


				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE estado = 'ACEP' and fecha BETWEEN '$fechaInicial' AND '$fechaFinal'");

			}
		
			$stmt -> execute();

			return $stmt -> fetchAll();

		}

	}

	/*=============================================
	SUMAR EL TOTAL DE Compras
	=============================================*/

	static public function mdlSumaTotalCompras($tabla){	

		$stmt = Conexion::conectar()->prepare("SELECT SUM(neto) as total FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt = null;

	}

	
}