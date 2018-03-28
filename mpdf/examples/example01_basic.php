<?php

$html = '
<h1><a name="top"></a>mPDF</h1>
<h2>Basic HTML Example</h2>
This file demonstrates most of the HTML elements.
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<h6>Heading 6</h6>';

// Require composer autoload
require_once ("../mpdf.php");
// Create an instance of the class
// $bootstrapcss = file_get_contents('css/bootstrap.css');
// $pdfcss = file_get_contents('css/pdf.css');
// $mpdf = new Mpdf();
$mpdf = new mPDF('utf-8','letter',0,'Arial', 7, 7, 7, 15, 8, 8);
// $mpdf->SetFooter('Conalep Yucatán');

// Set the headers/footers for the Introduction
$mpdf->DefHTMLHeaderByName('Chapter2Header','<div style="text-align: right; border-bottom: 1px solid #000000; font-weight: bold; font-size: 10pt;">Chapter 2</div>');


// Write some HTML code:
$mpdf->WriteHTML($html);

// Output a PDF file directly to the browser
$mpdf->Output();
?>