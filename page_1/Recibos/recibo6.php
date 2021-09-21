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
$pdf->Image('../img/img_scar1.jpg', null, null, 180);
$pdf->Ln();

$pdf->SetFont('Arial', '', 12);
$pdf->MultiCell(0, 7,utf8_decode('El Lamborghini Huracán EVO es un superdeportivo de motor central que se posiciona en la gama de Lamborghini por debajo del Lamborghini Aventador. El Lamborghini Huracán fue presentado en 2014 como sustituto del Lamborghini Gallardo y posteriormente actualizado como "Huracán EVO" en enero de 2019.'), 0, 1);
$pdf->Ln();
$pdf->Ln();


$pdf->SetFont('Arial', '', 14);
$pdf->MultiCell(0, 7, utf8_decode('El presio de su super deportivo es de:'), 0, 1);
$pdf->MultiCell(0, 7, utf8_decode('1,500,000 pesos'), 0, 1);
$pdf->Ln();

// output file
$pdf->Output('', 'recibo.pdf');