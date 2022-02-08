<?php 
$id= trim($_GET["id"]);
//echo "se ha resibido id valor: " . $id;
include_once("capalogica/claseproducto.php");
$objpro= new claseproducto();
$objpro->idproducto=$id;
$valor=$objpro->eliminar();
if($valor==true)
{
	header("location: ListarProductoAdmin.php");
	//$resultado="<div class='alert alert-success'>exito al guardar</div>";
}
else
{
	$resultado="<div class='alert alert-danger'>error al eliminar</div>";
}
?>