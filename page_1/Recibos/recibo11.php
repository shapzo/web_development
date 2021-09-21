<?php
// include class
require('../fpdf/fpdf.php');

// creacion del documento
$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetTitle('Recivo de pago');
$pdf->SetAuthor('Venta de carros don venas');
$pdf->SetCreator('Rodrigo');

// titulo
$pdf->SetFont('Arial', 'B', 24);
$pdf->Cell(0, 10, 'Venta de carros don venas', 0, 1);
$pdf->Ln();

// textuky
$pdf->SetFont('Arial', '', 18);
$pdf->MultiCell(0, 7, utf8_decode('Gracias por su compra.'), 0, 1);
$pdf->Ln();

// imagen
$pdf->Image('../img/img_tcar1.jpg', null, null, 180);
$pdf->Ln();

$pdf->SetFont('Arial', '', 12);
$pdf->MultiCell(0, 7,utf8_decode('El Tsuru es un automóvil muy consolidado en México, ya que cuenta con una larga trayectoria desde 1982 y tres generaciones de este modelo. ​ Es un modelo favorito para quienes buscan un buen espacio interior y robustez a un precio accesible, como es el caso de los taxistas y flotilleros..'), 0, 1);
$pdf->Ln();
$pdf->Ln();


$pdf->SetFont('Arial', '', 14);
$pdf->MultiCell(0, 7, utf8_decode('El presio de su super deportivo es de:'), 0, 1);
$pdf->MultiCell(0, 7, utf8_decode('150,000 pesos'), 0, 1);
$pdf->Ln();

// output file
$pdf->Output('', 'recibo.pdf');