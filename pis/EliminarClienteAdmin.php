<?php 
$id= trim($_GET["id"]);
//echo "se ha resibido id valor: " . $id;
include_once("capalogica/clasecliente.php");
$objcli= new clasecliente();
$objcli->idcliente=$id;
$valor=$objcli->eliminar();
if($valor==true)
{
	header("location: ListarClienteAdmin.php");
	//$resultado="<div class='alert alert-success'>exito al guardar</div>";
}
else
{
	$resultado="<div class='alert alert-danger'>error al eliminar</div>";
}
?>