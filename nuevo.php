<?php 
	require_once("mpdf/mpdf.php");
	// $bootstrapcss = file_get_contents('bootstrap.css');
 // 	$pdfcss = file_get_contents('pdf.css');
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
				 		<td><img src="img/enlace_yucatan.png" style="width: 15%"  class="img-responsive"></td>
				 		<td colspan="6" class="text-center">
				 				<p class="text-center">RFC: CEP990708KB5</p>
								<p class="text-center">CALLE 25, No. 189B GARCIA GINERES</p>
								<p class="text-center">MERIDA, YUCATAN, MEXICO, 97070</p>
								<p class="text-center">PERSONAS MORALES CON FINES NO LUCRATIVOS</p>
								<p class="text-center">Expedido en: MERIDA, YUCATAN, MEXICO</p>
				 		</td>
				 		<td>
				 			<img src="img/logo-conalep.png" alt="" style="width: 20%, float:right" class="img-responsive pull-right">
				 		</td>
				 	</tr>
			</table>';
	$mpdf = new mPDF('utf-8','letter-L',0,'Arial', 7, 7, 7, 15, 8, 8);
	// $mpdf = new mPDF();	
	
	$mpdf->WriteHTML($html);
	// Output a PDF file directly to the browser
	$mpdf->Output();

 ?>