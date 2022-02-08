<?php
include('capadatos/claseconexion.php');

class claselibros
{
	public $isbn;
	public $titulo;
	public $num_paginas;
	public $idautor;
	public $editorial;
	public $fecha_escritura;
	public $idcategoria;
	public $idvolumen;
	public $descripcion;
	public $portada;
	public $pdf;
	
	public function listarlibros()
	{
		$objconexion = new claseconexion();
		$consulta = $objconexion->prepare("select l.isbn, l.titulo, l.num_paginas, l.idautor, l.editorial, l.fecha_escritura, l.idcategoria, l.idvolumen, l.descripcion, l.portada, l.pdf, a.nombre, a.apellido, c.categoria, v.volumen from libros as l inner join autores as a on a.idautor=l.idautor inner join volumenes as v on v.idvolumen=l.idvolumen inner join categoria as c on c.idcategoria=l.idcategoria;");
		$consulta->execute(); 
		return $consulta->fetchAll();
		$consulta->close();
	}
	
	public function guardar()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("insert into libros (isbn, titulo, num_paginas, idautor, editorial, fecha_escritura, idcategoria, idvolumen, descripcion, portada, pdf) values (:isbn, :titulo, :num_paginas, :idautor, :editorial, :fecha_escritura, :idcategoria, :idvolumen, :descripcion, :portada, :pdf);");
		$consulta->bindParam(":isbn", $this->isbn,PDO::PARAM_STR);
		$consulta->bindParam(":num_paginas", $this->num_paginas,PDO::PARAM_STR);
		$consulta->bindParam(":titulo", $this->titulo,PDO::PARAM_STR);
		$consulta->bindParam(":idautor", $this->idautor,PDO::PARAM_INT);
		$consulta->bindParam(":editorial", $this->editorial,PDO::PARAM_STR);
		$consulta->bindParam(":fecha_escritura", $this->fecha_escritura,PDO::PARAM_STR);
		$consulta->bindParam(":idcategoria", $this->idcategoria,PDO::PARAM_INT);
		$consulta->bindParam(":idvolumen", $this->idvolumen,PDO::PARAM_INT);
		$consulta->bindParam(":descripcion", $this->descripcion,PDO::PARAM_STR);
		$consulta->bindParam(":portada", $this->portada,PDO::PARAM_STR);
		$consulta->bindParam(":pdf", $this->pdf,PDO::PARAM_STR);
		return $consulta->execute();
		$consulta->close();

	}
	
	public function buscar()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("select l.descripcion, l.portada, l.pdf, l.isbn, l.titulo, l.num_paginas, l.idautor, l.editorial, l.fecha_escritura, l.idcategoria, l.idvolumen, a.nombre, a.apellido, c.categoria, v.volumen from libros as l inner join autores as a on a.idautor=l.idautor inner join volumenes as v on v.idvolumen=l.idvolumen inner join categoria as c on c.idcategoria=l.idcategoria where isbn=:isbn;");
		$consulta->bindParam(":isbn", $this->isbn,PDO::PARAM_STR);
		$consulta->execute();
		return $consulta->fetch();
		$consulta->close();
	}
	
	public function buscarlibro()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("select l.descripcion, l.portada, l.pdf, l.isbn, l.titulo, l.num_paginas, l.idautor, l.editorial, l.fecha_escritura, l.idcategoria, l.idvolumen, a.nombre, a.apellido, c.categoria, v.volumen from libros as l inner join autores as a on a.idautor=l.idautor inner join volumenes as v on v.idvolumen=l.idvolumen inner join categoria as c on c.idcategoria=l.idcategoria where titulo=:titulo;");
		$consulta->bindParam(":titulo", $this->titulo,PDO::PARAM_STR);
		$consulta->execute();
		return $consulta->fetch();
		$consulta->close();
	}

	public function actualizar()
	{
		$objconexion = new claseconexion ();
		$consulta = $objconexion->prepare("update libros set descripcion=:descripcion, titulo=:titulo, num_paginas=:num_paginas, idautor=:idautor, editorial=:editorial, fecha_escritura=:fecha_escritura, idcategoria=:idcategoria, idvolumen=:idvolumen where isbn=:isbn;");
		$consulta->bindParam(":isbn", $this->isbn,PDO::PARAM_STR);
		$consulta->bindParam(":titulo", $this->titulo,PDO::PARAM_STR);
		$consulta->bindParam(":num_paginas", $this->num_paginas,PDO::PARAM_STR);
		$consulta->bindParam(":idautor", $this->idautor,PDO::PARAM_INT);
		$consulta->bindParam(":editorial", $this->editorial,PDO::PARAM_STR);
		$consulta->bindParam(":fecha_escritura", $this->fecha_escritura,PDO::PARAM_STR);
		$consulta->bindParam(":idcategoria", $this->idcategoria,PDO::PARAM_INT);
		$consulta->bindParam(":idvolumen", $this->idvolumen,PDO::PARAM_INT);
		$consulta->bindParam(":descripcion", $this->descripcion,PDO::PARAM_STR);
		return $consulta->execute();
		$consulta->close();
		
	}
	public function eliminar()
	{
		$objconexion = new claseconexion ();
	$consulta = $objconexion->prepare("delete from libros where isbn = :isbn;");
		$consulta->bindParam(":isbn", $this->isbn,PDO::PARAM_STR);
		return $consulta->execute();
		$consulta->close();
	}
}
?>