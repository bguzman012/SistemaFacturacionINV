<?php 
$idc= trim($_GET["idc"]);
$id= trim($_GET["id"]);
//echo "se ha resibido id valor: " . $id;
include_once("capalogica/clasecarrito.php");
$objca= new clasecarrito();
$objca->idcarrito=$idc;
$valor=$objca->eliminar();
if($valor==true)
{
	header("location: Carrito.php?id=".$id."");
	//$resultado="<div class='alert alert-success'>exito al guardar</div>";
}
else
{
	$resultado="<div class='alert alert-danger'>error al eliminar</div>";
}
?>