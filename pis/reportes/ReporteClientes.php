<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
		// Cabecera de página
		function Header()
		{
		    // Logo
		    $this->Image('img/pc.png',137,8,18);
		    // Arial bold 15
		    $this->SetFont('Arial','B',25);
		    // Movernos a la derecha
		    $this->Ln(20);
		    $this->Cell(80);
		    // Título
		    $this->Cell(110,10,'Reporte de Clientes',0,0,'C');
		    // Salto de línea
		    $this->Ln(20);
		    $this->SetFont('Arial','B',10);

		    //$this->SetFillColor(232, 232, 232, 232, 232, 232, 232, 232);
		    $this->cell(25);
		 	$this->cell(45, 10, 'Numero de Clientes', 1, 0, 'C', 0);
		 	$this->cell(45, 10, 'Cliente', 1, 0, 'C', 0);
		 	$this->cell(45, 10, 'Email', 1, 0, 'C', 0);
		 	$this->cell(20, 10, 'Password', 1, 1, 'C', 0);
		 	
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

include ('../capalogica/clasecliente.php');
$objlibros=new clasecliente();
$datos = $objlibros->listarcliente();
$pdf = new PDF('L', 'mm', 'A4');//P es vertical y L es horizontal
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
 foreach($datos as $row =>$item)
 {
 	$pdf->cell(25);
 	$pdf->cell(45, 10, $item['idcliente'], 1, 0, 'C');
 	$pdf->cell(45, 10, $item['nombres'] .' '. $item['apellidos'], 1, 0, 'C');
 	$pdf->cell(45, 10, $item['email'], 1, 0, 'C');
  	$pdf->cell(20, 10, $item['password'], 1, 1, 'C');
   	
 }
$pdf->Output();
?>