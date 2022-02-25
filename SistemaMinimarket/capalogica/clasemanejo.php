<?php
include('capadatos/claseconexion.php');

class clasemanejo
{
	public $idcarrito;
	public $producto;
	public $cliente;
	public $categoriap;

	public function listarproducto()
	{
		$objconexion = new claseconexion();
		$consulta = $objconexion->prepare("select p.idproducto, p.foto, p.nombreproducto, p.precio, p.stok, p.cantidad, p.color, p.marcap, p.categoriap, m.marca, c.categoria from productos as p inner join marcas as m on p.marcap=m.idmarca inner join categorias as c on p.categoriap=c.idcategoria;");
		$consulta->execute(); 
		return $consulta->fetchAll();
		$consulta->close();
	}

	public function guardarcarrito()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("insert into carrito (producto, cliente) values (:producto, :cliente);");
		$consulta->bindParam(":cliente", $this->cliente,PDO::PARAM_INT);
		$consulta->bindParam(":producto", $this->producto,PDO::PARAM_INT);
		return $consulta->execute();
		$consulta->close();

	}

	public function buscarc()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("select ca.producto, ca.cliente, cl.apellidos, cl.nombres, p.nombreproducto from carrito as ca inner join clientes as cl on co.cliente=cl.idcliente inner join productos as p on co.producto=p.idproducto where cliente=:cliente;");
		$consulta->bindParam(":cliente", $this->cliente,PDO::PARAM_INT);
		$consulta->execute();
		return $consulta->fetchAll();
		$consulta->close();
	}

	public function listarproductocat()
	{

		
		$objconexion = new claseconexion();
		$consulta = $objconexion->prepare("SELECT pr.id, pr.id_categoria, pr.codigo, pr.descripcion,  COALESCE ((SELECT cp.precio FROM compras_detalle as cp where cp.id = (SELECT max(id) from compras_detalle WHERE id_producto = pr.id)), 0) as precio_compra, COALESCE ((SELECT cp.precio FROM compras_detalle as cp where cp.id = (SELECT max(id) from compras_detalle WHERE id_producto = pr.id)), 0) as precio_venta, COALESCE ((SELECT existencias_ahora FROM inventario where id = (SELECT max(id) from inventario WHERE id_producto = pr.id)),0)as stock , imagen, fecha, id_proveedor from productos as pr where pr.id_categoria =:categoriap;");
		$consulta->bindParam(":categoriap", $this->categoriap,PDO::PARAM_INT);
		$consulta->execute(); 
		return $consulta->fetchAll();
		$consulta->close();
	}

}
?>