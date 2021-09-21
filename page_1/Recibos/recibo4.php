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
$pdf->Image('../img/img_cam4.jpg', null, null, 180);
$pdf->Ln();

$pdf->SetFont('Arial', '', 12);
$pdf->MultiCell(0, 7,utf8_decode('La icónica Chevrolet Suburban lleva más de 85 años de recorrer un camino lleno de determinación y éxito. Esta nueva generación ofrece mayor espacio para los pasajeros, un motor más potente y lo último en tecnología. Nuestra icónica Chevrolet Suburban fue rediseñada para mejorar su espacio interior, confort, conectividad y desempeño con lo último en tecnología que la ha hecho destacar en su categoría. Conoce esto y más a detalle en nuestro review.'), 0, 1);
$pdf->Ln();
$pdf->Ln();


$pdf->SetFont('Arial', '', 14);
$pdf->MultiCell(0, 7, utf8_decode('El presio de su camioneta es de:'), 0, 1);
$pdf->MultiCell(0, 7, utf8_decode('470,000 pesos'), 0, 1);
$pdf->Ln();

// output file
$pdf->Output('', 'recibo.pdf');