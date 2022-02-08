<?php 
$cliente= trim($_GET["cliente"]);
$producto= trim($_GET["producto"]);
$categoria=trim($_GET["categoria"]);
//echo "se ha resibido id valor: " . $id;
include_once("capalogica/clasecarrito.php");
$objca= new clasecarrito();
$objca->cliente=$cliente;
$objca->cantidad=1;
$objca->producto=$producto;
$objca->idproducto=$producto;
$datos=$objca->buscarproducto();
$precio=$datos["precio"];
$pu=$precio;
$objca->pu=$pu;
$valor=$objca->guardar();
if($valor==true)
{
	header("location: Productos.php?id=".$cliente."&cat=".$categoria."");
	//$resultado="<div class='alert alert-success'>exito al guardar</div>";
}
?>