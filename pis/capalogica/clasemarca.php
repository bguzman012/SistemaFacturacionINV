<?php
include_once("capadatos/claseconexion.php");
class clasemarca
{
	public $idmarca;
	public $marca;
	
	public function listarmarcas()
	{
		$objconexion = new claseconexion();
		$consulta = $objconexion->prepare("select * from marcas;");
		$consulta->execute(); 
		return $consulta->fetchAll();
		$consulta->close();
	}
	
	public function guardar()
	{
		$objconexion = new claseconexion ();
	$consulta = $objconexion->prepare("insert into marcas (marca) values (:marca);");
		$consulta->bindParam(":marca", $this->marca,PDO::PARAM_STR);
		return $consulta->execute();
		$consulta->close();

	}
	
	public function buscar()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("select * from  marcas where idmarca = :idmarca;");
		$consulta->bindParam(":idmarca", $this->idmarca,PDO::PARAM_INT);
		$consulta->execute();
		return $consulta->fetch();
		$consulta->close();

	}
	
	public function actualizar()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("update marcas set marca=:marca where idmarca=:idmarca;");
		$consulta->bindParam(":marca", $this->marca,PDO::PARAM_STR);
		$consulta->bindParam(":idmarca", $this->idmarca, PDO::PARAM_INT);
		return $consulta->execute();
		$consulta->close();
		
	}
	public function eliminar()
	{
		$objconexion = new claseconexion ();
	$consulta = $objconexion->prepare("delete from marcas where idmarca = :idmarca;");
		$consulta->bindParam(":idmarca", $this->idmarca,PDO::PARAM_INT);
		return $consulta->execute();
		$consulta->close();
	}
	
	public function busqueda()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("select * from  marcas where marca = :marca;");
		$consulta->bindParam(":marca", $this->marca,PDO::PARAM_INT);
		$consulta->execute();
		return $consulta->fetch();
		$consulta->close();

	}
}
?>