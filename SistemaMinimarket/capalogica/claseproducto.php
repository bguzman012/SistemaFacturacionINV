<?php
include('capadatos/claseconexion.php');

class claseproducto
{
	public $idproducto;
	public $nombreproducto;
	public $precio;
	public $cantidad;
	public $color;
	public $marcap;
	public $categoriap;
	public $foto;
	public $stok;
	public $descripcion;

	public $producto;
	public $cliente;
	public $pu;


	public function listarproducto()
	{
		$objconexion = new claseconexion();
		$consulta = $objconexion->prepare("select p.idproducto, p.foto, p.nombreproducto, p.precio, p.stok, p.cantidad, p.color, p.marcap, p.categoriap, m.marca, c.categoria from productos as p inner join marcas as m on p.marcap=m.idmarca inner join categorias as c on p.categoriap=c.idcategoria;");
		$consulta->execute(); 
		return $consulta->fetchAll();
		$consulta->close();
	}
	
	public function guardar()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("insert into productos (nombreproducto, precio, stok, cantidad, color, marcap, categoriap, foto, descripcion) values (:nombreproducto, :precio, :stok, :cantidad, :color, :marcap, :categoriap, :foto, :descripcion);");
		$consulta->bindParam(":nombreproducto", $this->nombreproducto,PDO::PARAM_STR);
		$consulta->bindParam(":precio", $this->precio,PDO::PARAM_STR);
		$consulta->bindParam(":cantidad", $this->cantidad,PDO::PARAM_STR);
		$consulta->bindParam(":color", $this->color,PDO::PARAM_STR);
		$consulta->bindParam(":marcap", $this->marcap,PDO::PARAM_INT);
		$consulta->bindParam(":categoriap", $this->categoriap,PDO::PARAM_INT);
		$consulta->bindParam(":foto", $this->foto,PDO::PARAM_STR);
		$consulta->bindParam(":stok", $this->stok,PDO::PARAM_STR);
		$consulta->bindParam(":descripcion", $this->descripcion,PDO::PARAM_INT);
		return $consulta->execute();
		$consulta->close();

	}
	
	public function buscar()
	{

		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("SELECT pr.id, pr.id_categoria, pr.codigo, pr.descripcion,  COALESCE ((SELECT cp.precio FROM compras_detalle as cp where cp.id = (SELECT max(id) from compras_detalle WHERE id_producto = pr.id)), 0) as precio_compra, COALESCE ((SELECT cp.precio FROM compras_detalle as cp where cp.id = (SELECT max(id) from compras_detalle WHERE id_producto = pr.id)), 0) as precio_venta, COALESCE ((SELECT existencias_ahora FROM inventario where id = (SELECT max(id) from inventario WHERE id_producto = pr.id)),0)as stock , imagen, fecha, id_proveedor from productos as pr where pr.id=:idproducto;");
		$consulta->bindParam(":idproducto", $this->idproducto,PDO::PARAM_STR);
		$consulta->execute();
		return $consulta->fetch();
		$consulta->close();
	}

	public function buscarc()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("select p.idproducto, p.nombreproducto, p.stok, p.precio, p.cantidad, p.color, p.marcap, p.categoriap, p.descripcion, m.marca, c.categoria from productos as p inner join marcas as m on p.marcap=m.idmarca inner join categorias as c on p.categoriap=c.idcategoria where nombreproducto=:nombreproducto;");
		$consulta->bindParam(":nombreproducto", $this->nombreproducto,PDO::PARAM_STR);
		$consulta->execute();
		return $consulta->fetch();
		$consulta->close();
	}

	public function actualizar()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("update productos set descripcion=:descripcion, nombreproducto=:nombreproducto, precio=:precio, stok=:stok, cantidad=:cantidad, color=:color, marcap=:marcap, categoriap=:categoriap where idproducto=:idproducto;");
		$consulta->bindParam(":nombreproducto", $this->nombreproducto,PDO::PARAM_STR);
		$consulta->bindParam(":precio", $this->precio,PDO::PARAM_STR);
		$consulta->bindParam(":cantidad", $this->cantidad,PDO::PARAM_STR);
		$consulta->bindParam(":color", $this->color,PDO::PARAM_STR);
		$consulta->bindParam(":marcap", $this->marcap,PDO::PARAM_INT);
		$consulta->bindParam(":categoriap", $this->categoriap,PDO::PARAM_INT);
		$consulta->bindParam(":idproducto", $this->idproducto,PDO::PARAM_INT);
		$consulta->bindParam(":stok", $this->stok,PDO::PARAM_STR);
		$consulta->bindParam(":descripcion", $this->descripcion,PDO::PARAM_STR);
		return $consulta->execute();
		$consulta->close();
		
	}
	public function eliminar()
	{
		$objconexion = new claseconexion ();
	$consulta = $objconexion->prepare("delete from productos where idproducto = :idproducto;");
		$consulta->bindParam(":idproducto", $this->idproducto,PDO::PARAM_INT);
		return $consulta->execute();
		$consulta->close();
	}

	public function busqueda()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("select * from productos where nombreproducto=:nombreproducto;");
		$consulta->bindParam(":nombreproducto", $this->nombreproducto,PDO::PARAM_STR);
		$consulta->execute();
		return $consulta->fetch();
	}

	public function guardarcarrito()
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
	public function listarcategoria()
	{
		$objconexion = new claseconexion();
		$consulta = $objconexion->prepare("select * from categorias;");
		$consulta->execute(); 
		return $consulta->fetchAll();
		$consulta->close();
	}
	public function listarmarcas()
	{
		$objconexion = new claseconexion();
		$consulta = $objconexion->prepare("select * from marcas;");
		$consulta->execute(); 
		return $consulta->fetchAll();
		$consulta->close();
	}
}
?>

