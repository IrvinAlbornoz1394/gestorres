<?php
require('pdf/fpdf/fpdf.php');


class PDF extends FPDF
{
// Cargar los datos
function LoadData($file)
{
    // Leer las líneas del fichero
    $lines = file($file);
    $data = array();
    foreach($lines as $line)
        $data[] = explode(';',trim($line));
    return $data;
}
// Tabla coloreada
function FancyTable($header,$data)
{
    // Colores, ancho de línea y fuente en negrita
    $this->SetFillColor(255,0,0);
    $this->SetTextColor(255);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');
    // Cabecera
    $w = array(50,50,30,30,30,30,30,30);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
    $this->Ln();
    // Restauración de colores y fuentes
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Datos
    $fill = false;
    foreach($data as $row)
    {
        $this->Cell($w[0],6,$row->solicitante,'LR',0,'L',$fill);
        $this->Cell($w[1],6,$row->beneficiario,'LR',0,'L',$fill);
        $this->Cell($w[2],6,$row->subcat,'LR',0,'R',$fill);
        $this->Cell($w[3],6,$row->fCaptura,'LR',0,'L',$fill);
        $this->Cell($w[4],6,$row->fEntrega,'LR',0,'L',$fill);
        $this->Cell($w[5],6,$row->fRealEntrega,'LR',0,'R',$fill);
        $this->Cell($w[6],6,$row->calle,'LR',0,'L',$fill);
        $this->Cell($w[7],6,$row->estatus,'LR',0,'L',$fill);
        $this->Ln();
        $fill = !$fill;
    }
    // Línea de cierre
    $this->Cell(array_sum($w),0,'','T');
}
}


$pdf = new PDF();
// Títulos de las columnas
$data = json_decode($_GET['gestiones']);
$header = array('Solicitante', 'Beneficiario', 'Articulo', 'Fecha_A','Fecha_E','Fecha_RE','Dirección','Estatus');
$pdf->SetFont('Arial','',14);
$pdf->AddPage('L');
$pdf->FancyTable($header,$data);
$pdf->Output();

?>