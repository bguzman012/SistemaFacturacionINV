<?php
include('capadatos/claseconexion.php');

class clasecompras
{
	public $idcompra;
	public $producto;
	public $cliente;
	public $cantidad;
	public $pu
	
	public function listarcompras()
	{
		$objconexion = new claseconexion();
		$consulta = $objconexion->prepare("select co.producto, co.cliente, co.cantidad, co.pu, cl.apellidos, cl.nombres, p.nombreproducto from compras as co inner join clientes as cl on co.cliente=cl.idcliente inner join productos as p on co.producto=p.idproducto;");
		$consulta->execute(); 
		return $consulta->fetchAll();
		$consulta->close();
	}
	
	public function guardar()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("insert into compras (producto, cliente, cantidad, pu) values (:producto, :cliente, :cantidad, :pu);");
		$consulta->bindParam(":cliente", $this->cliente,PDO::PARAM_INT);
		$consulta->bindParam(":producto", $this->producto,PDO::PARAM_INT);
		$consulta->bindParam(":cantidad", $this->cantidad,PDO::PARAM_INT);
		$consulta->bindParam(":pu", $this->pu,PDO::PARAM_INT);
		return $consulta->execute();
		$consulta->close();

	}
	
	public function buscar()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("select co.producto, co.cliente, co.pu, co.cantidad, cl.apellidos, cl.nombres, p.nombreproducto from compras as co inner join clientes as cl on co.cliente=cl.idcliente inner join productos as p on co.producto=p.idproducto where idcompra=:idcompra;");
		$consulta->bindParam(":idcompra", $this->idcompra,PDO::PARAM_INT);
		$consulta->execute();
		return $consulta->fetch();
		$consulta->close();
	}
	
	public function actualizar()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("update compras set cantidad=:cantidad where idcompra=:idcompra;");
		$consulta->bindParam(":idcompra", $this->idcompra,PDO::PARAM_INT);
		$consulta->bindParam(":cantidad", $this->cantidad,PDO::PARAM_STR);
		return $consulta->execute();
		$consulta->close();
		
	}
	public function eliminar()
	{
		$objconexion = new claseconexion ();
	$consulta = $objconexion->prepare("delete from compras where idcompra = :idcompra;");
		$consulta->bindParam(":idcompra", $this->idcompra,PDO::PARAM_INT);
		return $consulta->execute();
		$consulta->close();
	}
}
?>