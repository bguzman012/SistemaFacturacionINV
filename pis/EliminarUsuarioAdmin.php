<?php 
$id= trim($_GET["id"]);
//echo "se ha resibido id valor: " . $id;
include_once("capalogica/claseadministrador.php");
$objadmin= new claseadministrador();
$objadmin->cedula=$id;
$valor=$objadmin->eliminar();
if($valor==true)
{
	header("location: ListarUsuarioAdmin.php");
	//$resultado="<div class='alert alert-success'>exito al guardar</div>";
}
else
{
	$resultado="<div class='alert alert-danger'>error al eliminar</div>";
}
?>