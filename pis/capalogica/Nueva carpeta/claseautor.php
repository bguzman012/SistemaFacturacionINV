<?php
include_once("capadatos/claseconexion.php");
class claseautor
{
	public $idautor;
	public $nombre;
	public $apellido;
	public $nacionalidad;
	
	public function listarautor()
	{
		$objconexion = new claseconexion();
		$consulta = $objconexion->prepare("select * from autores;");
		$consulta->execute(); 
		return $consulta->fetchAll();
		$consulta->close();
	}
	
	public function guardar()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("insert into autores (nombre, apellido, nacionalidad) values (:nombre, :apellido, :nacionalidad);");
		$consulta->bindParam(":nombre", $this->nombre,PDO::PARAM_STR);
		$consulta->bindParam(":apellido", $this->apellido,PDO::PARAM_STR);
		$consulta->bindParam(":nacionalidad", $this->nacionalidad,PDO::PARAM_STR);
		return $consulta->execute();
		$consulta->close();

	}
	
	public function buscar()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("select * from autores where idautor = :idautor;");
		$consulta->bindParam(":idautor", $this->idautor,PDO::PARAM_INT);
		$consulta->execute();
		return $consulta->fetch();
		$consulta->close();

	}
	
	public function actualizar()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("update autores set nombre=:nombre, apellido=:apellido, nacionalidad=:nacionalidad where idautor=:idautor;");
		$consulta->bindParam(":nombre", $this->nombre,PDO::PARAM_STR);
		$consulta->bindParam(":apellido", $this->apellido,PDO::PARAM_STR);
		$consulta->bindParam(":nacionalidad", $this->nacionalidad,PDO::PARAM_STR);
		$consulta->bindParam(":idautor", $this->idautor, PDO::PARAM_INT);
		return $consulta->execute();
		$consulta->close();
		
	}
	public function eliminar()
	{
		$objconexion = new claseconexion ();
	$consulta = $objconexion->prepare("delete from autores where idautor = :idautor;");
		$consulta->bindParam(":idautor", $this->idautor,PDO::PARAM_INT);
		return $consulta->execute();
		$consulta->close();
	}

	public function buscara()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("select * from autores where nombre = :nombre and apellido = :apellido;");
		$consulta->bindParam(":nombre", $this->nombre,PDO::PARAM_STR);
		$consulta->bindParam(":apellido", $this->apellido,PDO::PARAM_STR);
		$consulta->execute();
		return $consulta->fetch();
		$consulta->close();

	}

}
?>