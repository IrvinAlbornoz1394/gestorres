<?php
require('../../pdf/fpdf/fpdf.php');

class PDF extends FPDF{

	function Header(){

		$this->setFont('Arial', 'B', 14);
		//Color de encabezado de página (título).
		$this->SetTextColor(51, 153, 51);
		$this->Cell(0,10,'Reporte de personas',0,0,'C');
		$this->ln(10);
		$this->ln(10);
	}

	function Footer()
	{
		$this->setY(-10);
		$this->setFont('Arial', 'I', 9);
		$this->SetTextColor(0, 77, 0);
		$this->Cell(0,10, utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'R');

	}
}
?>