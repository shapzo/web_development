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
$pdf->Image('../img/img_cam3.jpg', null, null, 180);
$pdf->Ln();

$pdf->SetFont('Arial', '', 12);
$pdf->MultiCell(0, 7,utf8_decode('Su amplio espacio interior da una increíble sensación de libertad a todos los pasajeros. Transmisión automática de 10 velocidades y control de cambios. Hotspot Wi-Fi®. Stabilitrak®. 10 Velocidades. Sistema de audio BOSE®. Magnetic Ride Control™.'), 0, 1);
$pdf->Ln();
$pdf->Ln();


$pdf->SetFont('Arial', '', 14);
$pdf->MultiCell(0, 7, utf8_decode('El presio de su camioneta es de:'), 0, 1);
$pdf->MultiCell(0, 7, utf8_decode('800,000 pesos'), 0, 1);
$pdf->Ln();

// output file
$pdf->Output('', 'recibo.pdf');