<?php
include_once("capadatos/claseconexion.php");
class clasecategoria
{
	public $idcategoria;
	public $categoria;
	
	public function listarcategoria()
	{
		$objconexion = new claseconexion();
		$consulta = $objconexion->prepare("select * from categorias;");
		$consulta->execute(); 
		return $consulta->fetchAll();
		$consulta->close();
	}
	
	public function guardar()
	{
		$objconexion = new claseconexion ();
	$consulta = $objconexion->prepare("insert into categorias (categoria) values (:categoria);");
		$consulta->bindParam(":categoria", $this->categoria,PDO::PARAM_STR);
		return $consulta->execute();
		$consulta->close();

	}
	
	public function buscar()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("select * from  categorias where idcategoria = :idcategoria;");
		$consulta->bindParam(":idcategoria", $this->idcategoria,PDO::PARAM_INT);
		$consulta->execute();
		return $consulta->fetch();
		$consulta->close();

	}
	
	public function actualizar()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("update categorias set categoria=:categoria where idcategoria=:idcategoria;");
		$consulta->bindParam(":categoria", $this->categoria,PDO::PARAM_STR);
		$consulta->bindParam(":idcategoria", $this->idcategoria, PDO::PARAM_INT);
		return $consulta->execute();
		$consulta->close();
		
	}
	public function eliminar()
	{
		$objconexion = new claseconexion ();
	$consulta = $objconexion->prepare("delete from categorias where idcategoria = :idcategoria;");
		$consulta->bindParam(":idcategoria", $this->idcategoria,PDO::PARAM_INT);
		return $consulta->execute();
		$consulta->close();
	}
	
	public function busqueda()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("select * from  categorias where categoria = :categoria;");
		$consulta->bindParam(":categoria", $this->categoria,PDO::PARAM_INT);
		$consulta->execute();
		return $consulta->fetch();
		$consulta->close();

	}
}
?>