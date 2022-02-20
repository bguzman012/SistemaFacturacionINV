<?php

require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";
require_once "../controladores/inventario.controlador.php";

require_once "../modelos/inventario.modelo.php";

class TablaProductosCompras{

 	/*=============================================
 	 MOSTRAR LA TABLA DE PRODUCTOS
  	=============================================*/ 

	public function mostrarTablaProductosCompras(){

		$item = null;
    	$valor = null;
    	$orden = "id";

  		$productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);
 		
  		if(count($productos) == 0){

  			echo '{"data": []}';

		  	return;
  		}	
		
  		$datosJson = '{
		  "data": [';

		  for($i = 0; $i < count($productos); $i++){

		  	/*=============================================
 	 		TRAEMOS LA IMAGEN
  			=============================================*/ 

		  	$imagen = "<img src='".$productos[$i]["imagen"]."' width='40px'>";
			  

			$item = "id_producto";
			$valor = $productos[$i]["id"];
  
			
			$traerMaxPrice = ControladorInventario::ctrlGetMaxPrice($item, $valor);

		  	/*=============================================
 	 		STOCK
  			=============================================*/ 

			if($traerMaxPrice['existencias_ahora'] != null){
				$stock_fin = $traerMaxPrice['existencias_ahora'];
			}else{
				$stock_fin = 0;
			}

			


  			if($stock_fin <= 10){

  				$stock = "<button class='btn btn-danger'>".$stock_fin."</button>";

  			}else if($stock_fin > 11 && $stock_fin <= 15){

  				$stock = "<button class='btn btn-warning'>".$stock_fin."</button>";

  			}else{

  				$stock = "<button class='btn btn-success'>".$stock_fin."</button>";

  			}

		  	/*=============================================
 	 		TRAEMOS LAS ACCIONES
  			=============================================*/ 

		  	$botones =  "<div class='btn-group'><button class='btn btn-primary agregarProducto recuperarBoton' idProducto='".$productos[$i]["id"]."'>Agregar</button></div>"; 

		  	$datosJson .='[
			      "'.($i+1).'",
			      "'.$imagen.'",
			      "'.$productos[$i]["codigo"].'",
			      "'.$productos[$i]["descripcion"].'",
			      "'.$stock.'",
			      "'.$botones.'"
			    ],';

		  }

		  $datosJson = substr($datosJson, 0, -1);

		 $datosJson .=   '] 

		 }';
		
		echo $datosJson;


	}


}

/*=============================================
ACTIVAR TABLA DE PRODUCTOS
=============================================*/ 
$activarProductosCompras = new TablaProductosCompras();
$activarProductosCompras -> mostrarTablaProductosCompras();

