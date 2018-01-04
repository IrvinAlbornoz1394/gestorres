
<?php
//require('../../pdf/fpdf/fpdf.php');

include_once('plantilla.php');
include_once('../../clases/ConexionBaseDatos.php');
include_once('../../clases/persona.php');

$per= new persona('','','','','','','','','','','','','','');
$lista=$per->listar_persona();

$pdf= new PDF('L', 'mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->setFont('Arial', 'B', 9);
$pdf->cell(20,4, 'Nombre(s)', 0, 0);
$pdf->cell(19,4,'Ap. Paterno',0,0);
$pdf->cell(18,4,'Ap. Mat',0,0);
$pdf->cell(18,4,'Fecha Nac.',0,0);
$pdf->cell(10,4,'Edad',0,0);
$pdf->cell(18,4,utf8_decode('Género'),0,0);
$pdf->cell(22,4,utf8_decode('Teléfono'),0,0);
$pdf->cell(22,4,'Celular',0,0);
$pdf->cell(35,4,utf8_decode('Dirección'),0,0);
$pdf->cell(35,4,'Curp',0,0);
$pdf->cell(24,4,'Clave elector',0,0);
$pdf->cell(22,4,'F. Ingreso',0,0);
$pdf->cell(30,4, utf8_decode('Ocupación'),0,0);
$pdf->cell(0,0,'',0,1);

//Ajustar tamaño de texto a los campos.
$pdf->setFont('Arial', '', 10);
//Saldo de renglón a encabezado de tabla.
$pdf->ln(5);

foreach($lista as $elemento)
{
$pdf->cell(20,10,$elemento->nombres, 1, 0);
$pdf->cell(18,10, $elemento->apellidopat,1,0);
$pdf->cell(18,10, $elemento->apellidomat,1,0);
$pdf->cell(20,10, $elemento->fecha_nac,1,0);
$pdf->cell(8,10,  $elemento->edad,1,0);
$pdf->cell(20,10, $elemento->sexo,1,0);
$pdf->cell(22,10, $elemento->telefono,1,0);
$pdf->cell(22,10, $elemento->celular,1,0);
$pdf->cell(35,10, $elemento->direccion,1,0);
//$pdf->cell(40,10, $elemento->colonia,1,1);
$pdf->cell(35,10, $elemento->curp,1,0);
$pdf->cell(25,10, $elemento->clave_elec,1,0);
$pdf->cell(20,10, $elemento->fecha_ingreso,1,0);
$pdf->cell(20,10, $elemento->ocupacion,1,0);

}
$pdf->Output();
ob_end_flush();
?>