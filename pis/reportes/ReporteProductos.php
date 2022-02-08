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
		    $this->Cell(150,10,'Reporte de Productos',0,0,'C');
		    // Salto de línea
		    $this->Ln(20);
		    $this->SetFont('Arial','B',10);

		    //$this->SetFillColor(232, 232, 232, 232, 232, 232, 232, 232);
		    $this->cell(50);
		 
		 	$this->cell(45, 10, 'Numero de Producto', 1, 0, 'C', 0);
		 	$this->cell(45, 10, 'Nombre Producto', 1, 0, 'C', 0);
		 	$this->cell(20, 10, 'Precio',  1, 0, 'C', 0);
			 $this->cell(20, 10, 'Cantidad', 1, 0, 'C', 0);
			 $this->cell(20, 10, 'Color', 1, 0, 'C', 0);
			 $this->cell(20, 10, 'Marca', 1, 0, 'C', 0);
			 $this->cell(20, 10, 'Categoria', 1, 0, 'C', 0);
			 $this->cell(20, 10, 'Stock', 1, 0, 'C', 0);
		 	
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

include ('../capalogica/claseproducto.php');
$objlibros=new claseproducto();
$datos = $objlibros->listarproducto();
$pdf = new PDF('L', 'mm', 'A4');//P es vertical y L es horizontal
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
 foreach($datos as $row =>$item)
 {
 	$pdf->cell(50);
 	$pdf->cell(45, 10, $item['idproducto'], 1, 0, 'C');
	 $pdf->cell(45, 10, $item['nombreproducto'], 1, 0, 'C');
 	$pdf->cell(20, 10, $item['precio'], 1, 0, 'C');
 	$pdf->cell(20, 10, $item['cantidad'], 1, 0, 'C');
  	$pdf->cell(20, 10, $item['color'], 1, 0, 'C');
	  $pdf->cell(20, 10, $item['marcap'], 1, 0, 'C');
	  $pdf->cell(20, 10, $item['categoriap'], 1, 0, 'C');
	   $pdf->cell(20, 10, $item['stok'], 1, 1, 'C');
   	
 }
$pdf->Output();
?>