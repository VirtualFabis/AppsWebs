<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
	function Header()
	{
    // Logo
    // Arial bold 15
		$this->SetFont('Arial','B',15);

    // Movernos a la derecha
		$this->Cell(80);
    // Título
		$this->Cell(100,10,utf8_decode('Asignación de Materias y Profesores'),1,0,'C');
    // Salto de línea
		$this->Ln(20);
   
		$this->Cell(81,10,utf8_decode('Alumno'),1,0,'C',0);
		$this->Cell(37,10,utf8_decode( 'Profesores'),1,0,'C',0);
		$this->Cell(80,10,utf8_decode( 'Materias'),1,1,'C',0);
	}

// Pie de página
	function Footer()
	{
    // Posición: a 1,5 cm del final
		$this->SetY(-15);
    // Arial italic 8
		$this->SetFont('Arial','I',8);
    // Número de página
		$this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
	}
}

require 'cdx.php';
$sql="SELECT * from clases";
$registro=mysqli_query($cnx,$sql);


// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

while($campo=mysqli_fetch_array($registro)){

	$pdf->Cell(81,10,utf8_decode( $campo['alumno']),1,0,'C',0);
	$pdf->Cell(37,10,utf8_decode( $campo['profesor']),1,0,'C',0);
	$pdf->Cell(80,10,utf8_decode( $campo['materias']),1,1,'C',0);


}

$pdf->Output();
?>
