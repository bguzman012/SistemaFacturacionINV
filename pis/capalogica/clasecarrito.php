<?php
include('capadatos/claseconexion.php');

class clasecarrito
{
	public $idcarrito;
	public $producto;
	public $cliente;
	public $cantidad;
	public $pu;
	public $idproducto;

	public $idcliente;
	public $nombres;
	public $apellidos;
	public $email;
	public $password;

	public $pro;
	public $cli;
	public $can;
	public $precio;
	public $canti;

	public function listarcarrito()
	{
		$objconexion = new claseconexion();
		$consulta = $objconexion->prepare("select ca.idcarrito, ca.producto, ca.cliente, ca.cantidad, ca.pu, cl.apellidos, cl.nombres, p.nombreproducto from carrito as ca inner join clientes as cl on co.cliente=cl.idcliente inner join productos as p on co.producto=p.idproducto;");
		$consulta->execute(); 
		return $consulta->fetchAll();
		$consulta->close();
	}

	public function guardar()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("insert into carrito (producto, cliente, cantidad, pu) values (:producto, :cliente, :cantidad, :pu);");
		$consulta->bindParam(":cliente", $this->cliente,PDO::PARAM_INT);
		$consulta->bindParam(":producto", $this->producto,PDO::PARAM_INT);
		$consulta->bindParam(":cantidad", $this->cantidad,PDO::PARAM_INT);
		$consulta->bindParam(":pu", $this->pu,PDO::PARAM_STR);
		return $consulta->execute();
		$consulta->close();

	}
	
	public function buscar()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("select ca.producto, ca.cliente, ca.cantidad, ca.pu, cl.apellidos, cl.nombres, p.nombreproducto from carrito as ca inner join clientes as cl on ca.cliente=cl.idcliente inner join productos as p on ca.producto=p.idproducto where idcarrito=:idcarrito;");
		$consulta->bindParam(":idcarrito", $this->idcarrito,PDO::PARAM_INT);
		$consulta->execute();
		return $consulta->fetchAll();
		$consulta->close();
	}
	
	public function buscarc()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("select ca.idcarrito, ca.pu, ca.producto, ca.cantidad, ca.cliente, cl.apellidos, cl.nombres, p.nombreproducto, p.precio from carrito as ca inner join clientes as cl on ca.cliente=cl.idcliente inner join productos as p on ca.producto=p.idproducto where cliente=:cliente;");
		$consulta->bindParam(":cliente", $this->cliente,PDO::PARAM_INT);
		$consulta->execute();
		return $consulta->fetchAll();
		$consulta->close();
	}

	public function buscarcd()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("select * from carrito where cliente=:cliente;");
		$consulta->bindParam(":cliente", $this->cliente,PDO::PARAM_INT);
		$consulta->execute();
		return $consulta->fetchAll();
		$consulta->close();
	}

	public function eliminar()
	{
		$objconexion = new claseconexion ();
	$consulta = $objconexion->prepare("delete from carrito where idcarrito = :idcarrito;");
		$consulta->bindParam(":idcarrito", $this->idcarrito,PDO::PARAM_INT);
		return $consulta->execute();
		$consulta->close();
	}

	public function buscarcliente()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("select * from clientes where idcliente = :idcliente;");
		$consulta->bindParam(":idcliente", $this->idcliente,PDO::PARAM_STR);
		$consulta->execute();
		return $consulta->fetch();
		$consulta->close();

	}

	public function actualizart()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("update clientes set tarjeta=:tarjeta, nombres=:nombres, apellidos=:apellidos, email=:email, password=:password where idcliente=:idcliente;");
		$consulta->bindParam(":nombres", $this->nombres,PDO::PARAM_STR);
		$consulta->bindParam(":apellidos", $this->apellidos,PDO::PARAM_STR);
		$consulta->bindParam(":email", $this->email,PDO::PARAM_STR);
		$consulta->bindParam(":password", $this->password,PDO::PARAM_STR);
		$consulta->bindParam(":idcliente", $this->idcliente,PDO::PARAM_INT);
		$consulta->bindParam(":tarjeta", $this->tarjeta,PDO::PARAM_STR);
		return $consulta->execute();
		$consulta->close();
	}

	public function buscarproducto()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("select p.nombreproducto, p.idproducto, p.stok, p.precio, p.foto, p.cantidad, p.color, p.marcap, p.categoriap, p.descripcion, m.marca, c.categoria from productos as p inner join marcas as m on p.marcap=m.idmarca inner join categorias as c on p.categoriap=c.idcategoria where idproducto=:idproducto;");
		$consulta->bindParam(":idproducto", $this->idproducto,PDO::PARAM_STR);
		$consulta->execute();
		return $consulta->fetch();
		$consulta->close();
	}

	public function guardarcompra()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("insert into compras (producto, cliente, cantidad, pu) values (:producto, :cliente, :cantidad, :pu);");
		$consulta->bindParam(":producto", $this->producto,PDO::PARAM_STR);
		$consulta->bindParam(":cliente", $this->cliente,PDO::PARAM_STR);
		$consulta->bindParam(":cantidad", $this->cantidad,PDO::PARAM_STR);
		$consulta->bindParam(":pu", $this->pu,PDO::PARAM_STR);
		return $consulta->execute();
		$consulta->close();
	}

	public function actualizarproducto()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("update productos set cantidad=:cantidad where idproducto=:idproducto;");
		$consulta->bindParam(":cantidad", $this->cantidad,PDO::PARAM_STR);
		$consulta->bindParam(":idproducto", $this->idproducto,PDO::PARAM_STR);
		return $consulta->execute();
		$consulta->close();
		
	}
}

?>