<?php
// require('pdf/fpdf/fpdf.php');

require_once("mpdf/mpdf.php");
// $bootstrapcss = file_get_contents('bootstrap.css');
//     $pdfcss = file_get_contents('pdf.css');
    $html = '<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<table style="width:100%" class=" borderless">
                <tr>
                    <td></td>
                    <td colspan="6" class="text-center">
                        <h5><strong>Colegio de Educación Profesional Técnica del Estado de Yucatán</strong></h5>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td><img src="img/logo_incay.png" style="width: 200px;"  class="img-responsive"></td>
                    <td colspan="6" class="text-center">
                            <p class="text-center">RFC: CEP990708KB5</p>
                            <p class="text-center">CALLE 25, No. 189B GARCIA GINERES</p>
                            <p class="text-center">MERIDA, YUCATAN, MEXICO, 97070</p>
                            <p class="text-center">PERSONAS MORALES CON FINES NO LUCRATIVOS</p>
                            <p class="text-center">Expedido en: MERIDA, YUCATAN, MEXICO</p>
                    </td>
                    <td>
                        <img src="img/logo_incay.png" style="width: 200px;float:right" class="img-responsive pull-right">
                    </td>
                </tr>
        </table><br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Solicitante</th>
                    <th>Beneficiario</th>
                    <th>Articulo</th>
                    <th>Fecha A</th>
                    <th>Fecha E</th>
                    <th>Fecha RE</th>
                    <th>Dirección</th>
                    <th>Estatus</th>
                </tr>
            </thead>
            <tbody>';
        $data = json_decode($_GET['gestiones']);
        foreach ($data as $row) {
            switch ($row->estatus) {
                case 1:
                    $label_estatus = "<span class='label label-warning' style='color:#f8ac59;'>Pendiente</span>";
                    break;
                case 2:
                    $label_estatus = "<span class='label label-primary' style='color:#1ab394;'>Entregado</span>";
                    break;
                case 3:
                    $label_estatus = "<span class='label label-danger' style='color:#ed5565;'>Cancelado</span>";
                    break;
                default:
                    $label_estatus = "<span class='label label-default'>Desconocido</span>";
            }


            $html .= '<tr>
                    <td>'.$row->solicitante.'</td>
                    <td>'.$row->beneficiario.'</td>
                    <td>'.$row->subcat.'</td>
                    <td>'.$row->fCaptura.'</td>
                    <td>'.$row->fEntrega.'</td>
                    <td>'.$row->fRealEntrega.'</td>
                    <td> C.'.$row->calle.' #'.$row->num_ext.' x'.$row->cruzamiento_1.' y '.$row->cruzamiento_2.$row->colonia.'</td>
                    <td>'.$label_estatus.'</td>
                </tr>';
        }

    $html .= '</tbody></table>';



















$mpdf = new mPDF('utf-8','letter-L',0,'Arial', 7, 7, 7, 15, 8, 8);
// $mpdf = new mPDF();  

$mpdf->WriteHTML($html);
// Output a PDF file directly to the browser
$mpdf->Output();




// class PDF extends FPDF
// {
// // Cabecera de página
// function Header()
// {
//     // Logo
//     $this->Image('img/logo_incay.png',10,8,33);
//     // Arial bold 15
//     $this->SetFont('Arial','B',10);
//     // Movernos a la derecha
//     // Título
//     $this->Cell(0,0,'Lista de Gestiones',0,0,'C');
//     // Salto de línea
//     $this->Ln(20);
// }

// // Pie de página
// function Footer()
// {
//     // Posición: a 1,5 cm del final
//     $this->SetY(-15);
//     // Arial italic 8
//     $this->SetFont('Arial','I',8);
//     // Número de página
//     $this->Cell(0,10,'Pagina '.$this->PageNo(),0,0,'C');
// }

// // Cargar los datos
// function LoadData($file)
// {
//     // Leer las líneas del fichero
//     $lines = file($file);
//     $data = array();
//     foreach($lines as $line)
//         $data[] = explode(';',trim($line));
//     return $data;
// }
// // Tabla coloreada
// function FancyTable($header,$data)
// {
//     // Colores, ancho de línea y fuente en negrita
//     $this->SetFillColor(255,0,0);
//     $this->SetTextColor(255);
//     $this->SetDrawColor(128,0,0);
//     $this->SetLineWidth(.3);
//     $this->SetFont('','B');
//     // Cabecera
//     $w = array(50,50,30,30,30,30,35,30);
//     for($i=0;$i<count($header);$i++)
//         $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
//     $this->Ln();
//     // Restauración de colores y fuentes
//     $this->SetFillColor(224,235,255);
//     $this->SetTextColor(0);
//     $this->SetFont('');
//     // Datos
//     $fill = false;
//     foreach($data as $row)
//     {
//         $this->Cell($w[0],4,$row->solicitante,'LR',0,'L',$fill);
//         $this->Cell($w[1],4,$row->beneficiario,'LR',0,'L',$fill);
//         $this->Cell($w[2],4,$row->subcat,'LR',0,'L',$fill);
//         $this->Cell($w[3],4,$row->fCaptura,'LR',0,'C',$fill);
//         $this->Cell($w[4],4,$row->fEntrega,'LR',0,'C',$fill);
//         $this->Cell($w[5],4,$row->fRealEntrega,'LR',0,'C',$fill);
//         $this->Cell($w[6],4,"C.".$row->calle." #".$row->num_ext." x ".$row->cruzamiento_1." y ".$row->cruzamiento_2.$row->colonia,'LR',0,'L',$fill);
//         $this->Cell($w[7],4,$row->estatus,'LR',0,'L',$fill);
//         $this->Ln();
//         $fill = !$fill;
//     }
//     // Línea de cierre
//     $this->Cell(array_sum($w),0,'','T');
// }
// }


// $pdf = new PDF();
// // Títulos de las columnas
// $data = json_decode($_GET['gestiones']);
// $header = array('Solicitante', 'Beneficiario', 'Articulo', 'Fecha_A','Fecha_E','Fecha_RE','Dirección','Estatus');
// $pdf->SetFont('Arial','',8);
// $pdf->AddPage('L');
// $pdf->FancyTable($header,$data);
// $pdf->Output();

?>