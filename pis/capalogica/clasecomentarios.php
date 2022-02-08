<?php
include('capadatos/claseconexion.php');

class clasecomentario
{
	public $idcomentario;
	public $cliente;
	public $comentario;
	
	public function listarcomentario()
	{
		$objconexion = new claseconexion();
		$consulta = $objconexion->prepare("select co.idcomentario, co.comentario, cl.nombres, cl.apellidos from comentarios as co inner join clientes as cl on co.cliente=cl.idcliente;");
		$consulta->execute(); 
		return $consulta->fetchAll();
		$consulta->close();
	}
	
	public function guardar()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("insert into comentarios (cliente, comentario) values (:cliente, :comentario);");
		$consulta->bindParam(":cliente", $this->cliente,PDO::PARAM_STR);
		$consulta->bindParam(":comentario", $this->comentario,PDO::PARAM_STR);
		return $consulta->execute();
		$consulta->close();

	}
	
	public function buscar()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("select co.idcomentario, co.comentario, cl.nombres, cl.apellidos from comentarios as co inner join clientes as cl on co.cliente=cl.idcliente where idcomentario=:idcomentario;");
		$consulta->bindParam(":idcomentario", $this->idcomentario,PDO::PARAM_INT);
		$consulta->execute();
		return $consulta->fetch();
		$consulta->close();
	}
	
	public function actualizar()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("update comentarios set comentario=:comentario where idcomentario=:idcomentario;");
		$consulta->bindParam(":idcomentario", $this->idcomentario,PDO::PARAM_INT);
		$consulta->bindParam(":comentario", $this->comentario,PDO::PARAM_STR);
		return $consulta->execute();
		$consulta->close();
		
	}
	public function eliminar()
	{
		$objconexion = new claseconexion ();
	$consulta = $objconexion->prepare("delete from comentarios where idcomentario = :idcomentario;");
		$consulta->bindParam(":idcomentario", $this->idcomentario,PDO::PARAM_INT);
		return $consulta->execute();
		$consulta->close();
	}
}
?>