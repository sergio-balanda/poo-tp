<?php
    include 'plantillaPDF.php';
    require_once 'control.php';
   
    $obj = new controlDB();
    $datos=$obj->consultar("select * from usuario");
    
    $pdf=new FPDF();
    $pdf->AliasNbPages();//alias de pagina para poder usar nb
    $pdf->AddPage();

    $pdf->SetFont('Arial','B',12);
    $pdf->SetFillColor(232,232,232);
    $pdf->Cell(40,6,'idUsuario',1,0,'C',1);//longitud,alto,titulo,border,salto,alineado
    $pdf->Cell(40,6,'nombre',1,0,'C',1);
    $pdf->Cell(40,6,'num doc',1,0,'C',1);
    $pdf->Cell(40,6,'tipo doc',1,0,'C',1);
    $pdf->Cell(40,6,'rol',1,0,'C',1);
    $pdf->Cell(40,6,'ESTADO',1,0,'C',1);
    $pdf->Cell(40,6,'ESTADO',1,1,'C',1);
    

   

    $pdf->Output();

?>
    
