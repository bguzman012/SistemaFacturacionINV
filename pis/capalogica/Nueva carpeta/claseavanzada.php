<?php
include_once("capadatos/claseconexion.php");
class claseavanzada
{
	public function eliminarautor()
	{
		$objconexion = new claseconexion ();
	$consulta = $objconexion->prepare("delete  from autores");
		return $consulta->execute();
		$consulta->close();
	}

	public function eliminarcategoria()
	{
		$objconexion = new claseconexion ();
	$consulta = $objconexion->prepare("delete  from categoria;");
		return $consulta->execute();
		$consulta->close();
	}

	public function eliminarvolumen()
	{
		$objconexion = new claseconexion ();
	$consulta = $objconexion->prepare("delete  from volumenes;");
		return $consulta->execute();
		$consulta->close();
	}

	public function eliminarlibros()
	{
		$objconexion = new claseconexion ();
	$consulta = $objconexion->prepare("delete  from libros;");
		return $consulta->execute();
		$consulta->close();
	}
}

?>