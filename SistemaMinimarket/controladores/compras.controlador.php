<?php

use Mike42\Escpos\Printer;
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;

class ControladorCompras{

	/*=============================================
	MOSTRAR Compras
	=============================================*/

	static public function ctrMostrarCompras($item, $valor){

		$tabla = "compras";

		$respuesta = ModeloCompras::mdlMostrarCompras($tabla, $item, $valor);
 
		return $respuesta;

	}

	

	static public function ctrEliminarCompra(){

		if(isset($_GET["idCompra"])){

			$listaProductosActuales = ControladorCompras::ctrMostrarComprasDetalle($_GET["idCompra"]);

			foreach ($listaProductosActuales as $key => $value) {

				$anulados = ModeloCompras::mdlEditarAnulados($value["id"], "ANUL");
				$eliminado_inventario = ModeloInvenario::mdlEliminarInventarioAnulado($value["id"]);
			}
			
			 
			$respuesta  = ModeloCompras::mdlAnularCompra($_GET["idCompra"], "ANUL");

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "La compra ha sido borrada correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "compras";

								}
							})

				</script>';

			}		
		}

	}
	/*=============================================
	MOSTRAR Compras DETALLE
	=============================================*/

	static public function ctrMostrarComprasDetalle($valor){
		
		$respuesta = ModeloCompras::mdlMostrarComprasDetalle($valor);
 
		return $respuesta;

	}


	/*=============================================
	CREAR Compra
	=============================================*/

	static public function ctrCrearCompra(){

		if(isset($_POST["nuevaCompra"])){

			/*=============================================
			ACTUALIZAR LAS COMPRAS DEL CLIENTE Y REDUCIR EL STOCK Y AUMENTAR LAS Compras DE LOS PRODUCTOS
			=============================================*/

			if($_POST["listaProductos"] == ""){

					echo'<script>

				swal({
					  type: "error",
					  title: "La compra no se ejecuta si no hay productos",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "compras";

								}
							})

				</script>';

				return;
			}


			$listaProductos = json_decode($_POST["listaProductos"], true);

			

			$totalProductosComprados = array();

			foreach ($listaProductos as $key => $value) {

			   array_push($totalProductosComprados, $value["cantidad"]);

			   echo "<script>console.log('listaProductos: " . $value["id"] . "' );</script>";
				
			   $tablaProductos = "productos";
			   
			    $item = "id";
			    $valor = $value["id"];
			    $orden = "id";

			    $traerProducto = ModeloProductos::mdlMostrarProductos($tablaProductos, $item, $valor, $orden);

			
			}


			/*=============================================
			GUARDAR LA COMPRA
			=============================================*/	

			$tabla = "compras";

			$datos = array("id_vendedor"=>$_POST["idVendedor"],
						   "codigo"=>$_POST["nuevaCompra"],
						   "impuesto"=>$_POST["nuevoPrecioImpuesto"],
						   "neto"=>$_POST["nuevoPrecioNeto"],
						   "productos"=>$_POST["listaProductos"],
						   "total"=>$_POST["totalCompra"]);

			$respuesta = ModeloCompras::mdlIngresarCompra($tabla, $datos);

			if($respuesta == "ok"){

				// $impresora = "epson20";

				// $conector = new WindowsPrintConnector($impresora);

				// $imprimir = new Printer($conector);

				// $imprimir -> text("Hola Mundo"."\n");

				// $imprimir -> cut();

				// $imprimir -> close();

				/**$impresora = "epson20";

				$conector = new WindowsPrintConnector($impresora);

				$printer = new Printer($conector);

				$printer -> setJustification(Printer::JUSTIFY_CENTER);

				$printer -> text(date("Y-m-d H:i:s")."\n");//Fecha de la factura

				$printer -> feed(1); //Alimentamos el papel 1 vez*/

				/**$printer -> text("Inventory System"."\n");//Nombre de la empresa

				$printer -> text("NIT: 71.759.963-9"."\n");//Nit de la empresa

				$printer -> text("Dirección: Calle 44B 92-11"."\n");//Dirección de la empresa

				$printer -> text("Teléfono: 300 786 52 49"."\n");//Teléfono de la empresa

				$printer -> text("FACTURA N.".$_POST["nuevaCompra"]."\n");//Número de factura

				$printer -> feed(1); //Alimentamos el papel 1 vez*/

				/**$printer -> text("Cliente: ".$traerCliente["nombre"]."\n");//Nombre del cliente

				$tablaVendedor = "usuarios";
				$item = "id";
				$valor = $_POST["idVendedor"];

				$traerVendedor = ModeloUsuarios::mdlMostrarUsuarios($tablaVendedor, $item, $valor);

				$printer -> text("Vendedor: ".$traerVendedor["nombre"]."\n");//Nombre del vendedor

				$printer -> feed(1); //Alimentamos el papel 1 vez*/

				/**foreach ($listaProductos as $key => $value) {

					$printer->setJustification(Printer::JUSTIFY_LEFT);

					$printer->text($value["descripcion"]."\n");//Nombre del producto

					$printer->setJustification(Printer::JUSTIFY_RIGHT);

					$printer->text("$ ".number_format($value["precio"],2)." Und x ".$value["cantidad"]." = $ ".number_format($value["total"],2)."\n");

				}

				$printer -> feed(1); //Alimentamos el papel 1 vez*/			
				
				/**$printer->text("NETO: $ ".number_format($_POST["nuevoPrecioNeto"],2)."\n"); //ahora va el neto

				$printer->text("IMPUESTO: $ ".number_format($_POST["nuevoPrecioImpuesto"],2)."\n"); //ahora va el impuesto

				$printer->text("--------\n");

				$printer->text("TOTAL: $ ".number_format($_POST["totalCompra"],2)."\n"); //ahora va el total

				$printer -> feed(1); //Alimentamos el papel 1 vez*/	

				/**$printer->text("Muchas gracias por su compra"); //Podemos poner también un pie de página

				$printer -> feed(3); //Alimentamos el papel 3 veces*/

				/**$printer -> cut(); //Cortamos el papel, si la impresora tiene la opción

				$printer -> pulse(); //Por medio de la impresora mandamos un pulso, es útil cuando hay cajón moneder

				$printer -> close();*/

	
				echo'<script>

				localStorage.removeItem("rango");

				swal({
					  type: "success",
					  title: "La compra ha sido guardada correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "compras";

								}
							})

				</script>';

			}

		}

	}

	/*=============================================
	EDITAR compra
	=============================================*/

	static public function ctrEditarCompra(){
		
		if(isset($_POST["editarCompra"])){
					/*=============================================
			FORMATEAR TABLA DE PRODUCTOS Y LA DE CLIENTES
			=============================================*/
			$tabla = "compras";

			$item = "codigo";
			$valor = $_POST["editarCompra"];

			$traerCompra = ModeloCompras::mdlMostrarCompras($tabla, $item, $valor);
			

			$listaProductosActuales = ModeloCompras::mdlMostrarComprasDetalle($traerCompra["id"]);

			foreach ($listaProductosActuales as $key => $value) {

				$anulados = ModeloCompras::mdlEditarAnulados($value["id"], "ANUL");
				$eliminado_inventario = ModeloInvenario::mdlEliminarInventarioAnuladoCompra($value["id"]);
			}
			
			 
			$compra_anulada  = ModeloCompras::mdlAnularCompra($traerCompra["id"], "ANUL");

			$tabla = "compras";

			$datos = array("id_vendedor"=>$_POST["idVendedor"],
						   "codigo"=>$_POST["editarCompra"],
						   "impuesto"=>$_POST["nuevoPrecioImpuesto"],
						   "neto"=>$_POST["nuevoPrecioNeto"],
						   "productos"=>$_POST["listaProductos"],
						   "total"=>$_POST["totalCompra"]);

			$respuesta = ModeloCompras::mdlIngresarCompra($tabla, $datos);
			
			if($respuesta == "ok"){

				echo'<script>

				localStorage.removeItem("rango");

				swal({
					  type: "success",
					  title: "La compra ha sido editada correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then((result) => {
								if (result.value) {

								window.location = "compras";

								}
							})

				</script>';

			}

		}

	}



	/*=============================================
	RANGO FECHAS
	=============================================*/	

	static public function ctrRangoFechasCompras($fechaInicial, $fechaFinal){

		$tabla = "compras";

		$respuesta = ModeloCompras::mdlRangoFechasCompras($tabla, $fechaInicial, $fechaFinal);

		return $respuesta;
		
	}

	/*=============================================
	DESCARGAR EXCEL
	=============================================*/

	public function ctrDescargarReporte(){

		if(isset($_GET["reporte"])){

			$tabla = "compras";

			if(isset($_GET["fechaInicial"]) && isset($_GET["fechaFinal"])){

				$compras = ModeloCompras::mdlRangoFechasCompras($tabla, $_GET["fechaInicial"], $_GET["fechaFinal"]);

			}else{

				$item = null;
				$valor = null;

				$compras = ModeloCompras::mdlMostrarCompras($tabla, $item, $valor);

			}


			/*=============================================
			CREAMOS EL ARCHIVO DE EXCEL
			=============================================*/

			$Name = $_GET["reporte"].'.xls';

			header('Expires: 0');
			header('Cache-control: private');
			header("Content-type: application/vnd.ms-excel"); // Archivo de Excel
			header("Cache-Control: cache, must-revalidate"); 
			header('Content-Description: File Transfer');
			header('Last-Modified: '.date('D, d M Y H:i:s'));
			header("Pragma: public"); 
			header('Content-Disposition:; filename="'.$Name.'"');
			header("Content-Transfer-Encoding: binary");
		
			echo utf8_decode("<table border='0'> 

					<tr> 
					<td style='font-weight:bold; border:1px solid #eee;'>CÓDIGO</td> 
					<td style='font-weight:bold; border:1px solid #eee;'>CLIENTE</td>
					<td style='font-weight:bold; border:1px solid #eee;'>VENDEDOR</td>
					<td style='font-weight:bold; border:1px solid #eee;'>CANTIDAD</td>
					<td style='font-weight:bold; border:1px solid #eee;'>PRODUCTOS</td>
					<td style='font-weight:bold; border:1px solid #eee;'>IMPUESTO</td>
					<td style='font-weight:bold; border:1px solid #eee;'>NETO</td>		
					<td style='font-weight:bold; border:1px solid #eee;'>TOTAL</td>		
					<td style='font-weight:bold; border:1px solid #eee;'>METODO DE PAGO</td	
					<td style='font-weight:bold; border:1px solid #eee;'>FECHA</td>		
					</tr>");

			foreach ($compras as $row => $item){

				$cliente = ControladorClientes::ctrMostrarClientes("id", $item["id_cliente"]);
				$vendedor = ControladorUsuarios::ctrMostrarUsuarios("id", $item["id_vendedor"]);

			 echo utf8_decode("<tr>
			 			<td style='border:1px solid #eee;'>".$item["codigo"]."</td> 
			 			<td style='border:1px solid #eee;'>".$cliente["nombre"]."</td>
			 			<td style='border:1px solid #eee;'>".$vendedor["nombre"]."</td>
			 			<td style='border:1px solid #eee;'>");

			 	$productos =  json_decode($item["productos"], true);

			 	foreach ($productos as $key => $valueProductos) {
			 			
			 			echo utf8_decode($valueProductos["cantidad"]."<br>");
			 		}

			 	echo utf8_decode("</td><td style='border:1px solid #eee;'>");	

		 		foreach ($productos as $key => $valueProductos) {
			 			
		 			echo utf8_decode($valueProductos["descripcion"]."<br>");
		 		
		 		}

		 		echo utf8_decode("</td>
					<td style='border:1px solid #eee;'>$ ".number_format($item["impuesto"],2)."</td>
					<td style='border:1px solid #eee;'>$ ".number_format($item["neto"],2)."</td>	
					<td style='border:1px solid #eee;'>$ ".number_format($item["total"],2)."</td>
					<td style='border:1px solid #eee;'>".$item["metodo_pago"]."</td>
					<td style='border:1px solid #eee;'>".substr($item["fecha"],0,10)."</td>		
		 			</tr>");


			}


			echo "</table>";

		}

	}


	/*=============================================
	SUMA TOTAL compras
	=============================================*/

	public function ctrSumaTotalCompras(){

		$tabla = "compras";

		$respuesta = ModeloCompras::mdlSumaTotalCompras($tabla);

		return $respuesta;

	}

	/*=============================================
	DESCARGAR XML
	=============================================*/

	static public function ctrDescargarXML(){

		if(isset($_GET["xml"])){


			$tabla = "compras";
			$item = "codigo";
			$valor = $_GET["xml"];

			$compras = ModeloCompras::mdlMostrarCompras($tabla, $item, $valor);

			// PRODUCTOS

			$listaProductos = json_decode($compras["productos"], true);

			// CLIENTE

			$tablaClientes = "clientes";
			$item = "id";
			$valor = $compras["id_cliente"];

			$traerCliente = ModeloClientes::mdlMostrarClientes($tablaClientes, $item, $valor);

			// VENDEDOR

			$tablaVendedor = "usuarios";
			$item = "id";
			$valor = $compras["id_vendedor"];

			$traerVendedor = ModeloUsuarios::mdlMostrarUsuarios($tablaVendedor, $item, $valor);

			//http://php.net/manual/es/book.xmlwriter.php

			$objetoXML = new XMLWriter();

			$objetoXML->openURI($_GET["xml"].".xml"); //Creación del archivo XML

			$objetoXML->setIndent(true); //recibe un valor booleano para establecer si los distintos niveles de nodos XML deben quedar indentados o no.

			$objetoXML->setIndentString("\t"); // carácter \t, que corresponde a una tabulación

			$objetoXML->startDocument('1.0', 'utf-8');// Inicio del documento
			
			// $objetoXML->startElement("etiquetaPrincipal");// Inicio del nodo raíz

			// $objetoXML->writeAttribute("atributoEtiquetaPPal", "valor atributo etiqueta PPal"); // Atributo etiqueta principal

			// 	$objetoXML->startElement("etiquetaInterna");// Inicio del nodo hijo

			// 		$objetoXML->writeAttribute("atributoEtiquetaInterna", "valor atributo etiqueta Interna"); // Atributo etiqueta interna

			// 		$objetoXML->text("Texto interno");// Inicio del nodo hijo
			
			// 	$objetoXML->endElement(); // Final del nodo hijo
			
			// $objetoXML->endElement(); // Final del nodo raíz


			$objetoXML->writeRaw('<fe:Invoice xmlns:fe="http://www.dian.gov.co/contratos/facturaelectronica/v1" xmlns:cac="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2" xmlns:cbc="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2" xmlns:clm54217="urn:un:unece:uncefact:codelist:specification:54217:2001" xmlns:clm66411="urn:un:unece:uncefact:codelist:specification:66411:2001" xmlns:clmIANAMIMEMediaType="urn:un:unece:uncefact:codelist:specification:IANAMIMEMediaType:2003" xmlns:ext="urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2" xmlns:qdt="urn:oasis:names:specification:ubl:schema:xsd:QualifiedDatatypes-2" xmlns:sts="http://www.dian.gov.co/contratos/facturaelectronica/v1/Structures" xmlns:udt="urn:un:unece:uncefact:data:specification:UnqualifiedDataTypesSchemaModule:2" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.dian.gov.co/contratos/facturaelectronica/v1 ../xsd/DIAN_UBL.xsd urn:un:unece:uncefact:data:specification:UnqualifiedDataTypesSchemaModule:2 ../../ubl2/common/UnqualifiedDataTypeSchemaModule-2.0.xsd urn:oasis:names:specification:ubl:schema:xsd:QualifiedDatatypes-2 ../../ubl2/common/UBL-QualifiedDatatypes-2.0.xsd">');

			$objetoXML->writeRaw('<ext:UBLExtensions>');

			foreach ($listaProductos as $key => $value) {
				
				$objetoXML->text($value["descripcion"].", ");
			
			}

			

			$objetoXML->writeRaw('</ext:UBLExtensions>');

			$objetoXML->writeRaw('</fe:Invoice>');

			$objetoXML->endDocument(); // Final del documento

			return true;	
		}

	}

}