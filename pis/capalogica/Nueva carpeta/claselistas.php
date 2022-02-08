<?php
include_once("capadatos/claseconexion.php");
class claselistas
{
	public function listaradmin()
	{
		$objconexion = new claseconexion();
		$consulta = $objconexion->prepare("select * from administrador;");
		$consulta->execute(); 
		return $consulta->fetchAll();
		$consulta->close();
	}

	public function listarusuario()
	{
		$objconexion = new claseconexion();
		$consulta = $objconexion->prepare("select * from usuario_final;");
		$consulta->execute(); 
		return $consulta->fetchAll();
		$consulta->close();
	}

	public function listarlibros()
	{
		$objconexion = new claseconexion();
		$consulta = $objconexion->prepare("select l.isbn, l.titulo, l.num_paginas, l.idautor, l.editorial, l.fecha_escritura, l.idcategoria, l.idvolumen, a.nombre, a.apellido, c.categoria, v.volumen from libros as l inner join autores as a on a.idautor=l.idautor inner join volumenes as v on v.idvolumen=l.idvolumen inner join categoria as c on c.idcategoria=l.idcategoria;");
		$consulta->execute(); 
		return $consulta->fetchAll();
		$consulta->close();
	}

	public function listarautor()
	{
		$objconexion = new claseconexion();
		$consulta = $objconexion->prepare("select * from autores;");
		$consulta->execute(); 
		return $consulta->fetchAll();
		$consulta->close();
	}

	public function listarcategoria()
	{
		$objconexion = new claseconexion();
		$consulta = $objconexion->prepare("select * from categoria;");
		$consulta->execute(); 
		return $consulta->fetchAll();
		$consulta->close();
	}

	public function listarvolumenes()
	{
		$objconexion = new claseconexion();
		$consulta = $objconexion->prepare("select * from volumenes;");
		$consulta->execute(); 
		return $consulta->fetchAll();
		$consulta->close();
	}

	public function listardescarga()
	{
		$objconexion = new claseconexion();
		$consulta = $objconexion->prepare("select d.iddescarga, d.idusuario, d.idlibro, u.nombre, u.apellido, l.titulo from descargas as d inner join usuario_final as u on u.cedula=d.idusuario inner join libros as l on l.isbn=d.idlibro;");
		$consulta->execute(); 
		return $consulta->fetchAll();
		$consulta->close();
	}
}
?>