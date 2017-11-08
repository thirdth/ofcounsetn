<?php
	require('fpdf.php');
	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Times','B',16);
	$pdf->Cell(0,10,'Residential Lease' ,0,1, 'C');
	$pdf->Output();	
?>