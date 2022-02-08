<?php
include_once("capadatos/claseconexion.php");
class clasedescarga
{
	public $iddescarga;
	public $idusuario;
	public $idlibro;
	
	public function listardescarga()
	{
		$objconexion = new claseconexion();
		$consulta = $objconexion->prepare("select d.iddescarga, d.idusuario, d.idlibro, u.nombre, u.apellido, l.titulo from descargas as d inner join usuario_final as u on u.cedula=d.idusuario inner join libros as l on l.isbn=d.idlibro;");
		$consulta->execute(); 
		return $consulta->fetchAll();
		$consulta->close();
	}
	
	public function guardar()
	{
		$objconexion = new claseconexion ();
	$consulta = $objconexion->prepare("insert into descargas (idusuario, idlibro) values (:idusuario, :idlibro);");
		$consulta->bindParam(":idusuario", $this->idusuario,PDO::PARAM_STR);
		$consulta->bindParam(":idlibro", $this->idlibro,PDO::PARAM_STR);
		return $consulta->execute();
		$consulta->close();

	}
	
	public function buscar()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("select d.iddescarga, d.idusuario, d.idlibro, u.nombre, u.apellido, l.titulo from descargas as d inner join usuario_final as u on u.cedula=d.idusuario inner join libros as l on l.isbn=d.idlibro where iddescarga=:iddescarga;");
		$consulta->bindParam(":iddescarga", $this->iddescarga,PDO::PARAM_INT);
		$consulta->execute();
		return $consulta->fetch();
		$consulta->close();

	}

	public function buscardescargas()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("select d.iddescarga, d.idusuario, d.idlibro, u.nombre, u.apellido, l.titulo from descargas as d inner join usuario_final as u on u.cedula=d.idusuario inner join libros as l on l.isbn=d.idlibro where idusuario=:idusuario;");
		$consulta->bindParam(":idusuario", $this->idusuario,PDO::PARAM_INT);
		$consulta->execute();
		return $consulta->fetchAll();
		$consulta->close();

	}

	public function buscardescargasl()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("select d.iddescarga, d.idusuario, d.idlibro, u.nombre, u.apellido, l.titulo from descargas as d inner join usuario_final as u on u.cedula=d.idusuario inner join libros as l on l.isbn=d.idlibro where idlibro=:idlibro;");
		$consulta->bindParam(":idlibro", $this->idlibro,PDO::PARAM_INT);
		$consulta->execute();
		return $consulta->fetchAll();
		$consulta->close();
	}
	
	public function actualizar()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("update descargas set idusuario=:idusuario, idlibro=:idlibro where iddescarga=:iddescarga;");
		$consulta->bindParam(":idusuario", $this->idusuario,PDO::PARAM_STR);
		$consulta->bindParam(":idlibro", $this->idlibro,PDO::PARAM_STR);
		$consulta->bindParam(":iddescarga", $this->iddescarga, PDO::PARAM_INT);
		return $consulta->execute();
		$consulta->close();
		
	}
	public function eliminar()
	{
		$objconexion = new claseconexion ();
	$consulta = $objconexion->prepare("delete from descargas where iddescarga = :iddescarga;");
		$consulta->bindParam(":iddescarga", $this->iddescarga, PDO::PARAM_INT);
		return $consulta->execute();
		$consulta->close();
	}
}
?>