<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
		// Cabecera de página
		function Header()
		{
		    // Logo
		    $this->Image('img/pc.png',150,8,18);
		    // Arial bold 15
		    $this->SetFont('Arial','B',25);
		    // Movernos a la derecha
		    $this->Ln(20);
		    $this->Cell(80);
		    // Título
		    $this->Cell(150,10,'Reporte de Administradores',0,0,'C');
		    // Salto de línea
		    $this->Ln(20);
		    $this->SetFont('Arial','B',10);

		    //$this->SetFillColor(232, 232, 232, 232, 232, 232, 232, 232);
		    $this->cell(15);
		 
		 	$this->cell(45, 10, 'Cedula', 1, 0, 'C', 0);
		 	$this->cell(45, 10, 'Nombres', 1, 0, 'C', 0);
		 	$this->cell(30, 10, 'Apellidos',  1, 0, 'C', 0);
			 $this->cell(20, 10, 'Telefono', 1, 0, 'C', 0);
			 $this->cell(35, 10, 'Direccion', 1, 0, 'C', 0);
			 $this->cell(20, 10, 'Usuario', 1, 0, 'C', 0);
			 $this->cell(45, 10, 'Email', 1, 0, 'C', 0);
			 $this->cell(20, 10, 'Password', 1, 0, 'C', 0);
		 	
		}

		// Pie de página
		function Footer()
	{
	    // Posición: a 1,5 cm del final
	    $this->SetY(-15);
	    // Arial italic 8
	    $this->SetFont('Arial','I',8);
	    // Número de página
	    $this->Cell(0,10,'Pagina'.$this->PageNo().'/{nb}',0,0,'C');
	}
}

include ('../capalogica/claseadministrador.php');
$objlibros=new claseadministrador();
$datos = $objlibros->listaradmin();
$pdf = new PDF('L', 'mm', 'A4');//P es vertical y L es horizontal
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
 foreach($datos as $row =>$item)
 {
 	$pdf->cell(15);

 	       $pdf->cell(45, 10, $item['cedula'], 1, 0, 'C');
	 $pdf->cell(45, 10, $item['nombres'], 1, 0, 'C');
 	$pdf->cell(30, 10, $item['apellidos'], 1, 0, 'C');
 	$pdf->cell(20, 10, $item['telefono'], 1, 0, 'C');
  	$pdf->cell(35, 10, $item['direccion'], 1, 0, 'C');
	  $pdf->cell(20, 10, $item['usuario'], 1, 0, 'C');
	  $pdf->cell(45, 10, $item['emailadmin'], 1, 0, 'C');
	   $pdf->cell(20, 10, $item['password'], 1, 1, 'C');
   	
 }
$pdf->Output();
?>