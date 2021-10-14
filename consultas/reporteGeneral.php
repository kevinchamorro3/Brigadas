<?php

    require('../pdf/fpdf.php');
    class PDF extends FPDF
    {
        // Pie de página
        function Footer()
        {
            // Posición: a 1,5 cm del final
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial', 'I', 8);
            // Número de página
            $this->Cell(0, 10, 'Pag. ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
        }
    }

    // Creación del objeto de la clase heredada
    $pdf = new PDF('p', 'mm', 'A4');
    $pdf->AliasNbPages();
    $pdf->AddPage();
    require_once "../resources/conexion.php";
    require_once "../resources/funcionesInfoBrigada.php";
    $pdf->Ln(1);
    $pdf->SetFont('Arial', 'B', 20);
    $pdf->Image('../img/lombeida.jpg', 15, 8, 50);
    $pdf->cell(50);
    $pdf->cell(85, 10, utf8_decode('Reporte General'), 0, 0, 'C');
    $pdf->Image('../img/av.png', 160, 8, 33);
    $pdf->Ln(40);
    $total_brigadas=0;
    //Impresion de resultados(cuerpo)
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial', 'B', 15);
    $pdf->cell(15, 10, utf8_decode('Brigadas médicas realizadas:'), 0, 1,'');
    $resultado= mysqli_fetch_assoc(consultaMedicas($con));
    $pdf->SetTextColor(0,0,200);
    $pdf->SetFont('Arial', 'B', 15);
    $pdf->cell(15, 10, utf8_decode($resultado['TOTAL_MEDICAS']), 0, 1,'');
    $total_brigadas+=$resultado['TOTAL_MEDICAS'];
    //
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial', 'B', 15);
    $pdf->cell(15, 10, utf8_decode('Brigadas odontológicas realizadas:'), 0, 1,'');
    $resultado= mysqli_fetch_assoc(consultaOdonto($con));
    $pdf->SetTextColor(0,0,200);
    $pdf->SetFont('Arial', 'B', 15);
    $pdf->cell(15, 10, utf8_decode($resultado['TOTAL_ODONTO']), 0, 1,'');
    $total_brigadas+=$resultado['TOTAL_ODONTO'];
    //
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial', 'B', 15);
    $pdf->cell(15, 10, utf8_decode('Brigadas optómetras realizadas:'), 0, 1,'');
    $resultado= mysqli_fetch_assoc(consultaOptome($con));
    $pdf->SetTextColor(0,0,200);
    $pdf->SetFont('Arial', 'B', 15);
    $pdf->cell(15, 10, utf8_decode($resultado['TOTAL_OPTOME']), 0, 1,'');
    $total_brigadas+=$resultado['TOTAL_OPTOME'];
    //
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial', 'B', 15);
    $pdf->cell(15, 10, utf8_decode('Capacitaciones realizadas:'), 0, 1,'');
    $resultado= mysqli_fetch_assoc(consultaCapacita($con));
    $pdf->SetTextColor(0,0,200);
    $pdf->SetFont('Arial', 'B', 15);
    $pdf->cell(15, 10, utf8_decode($resultado['TOTAL_CAPACITA']), 0, 1,'');
    $total_brigadas+=$resultado['TOTAL_CAPACITA'];
    //
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial', 'B', 15);
    $pdf->cell(15, 10, utf8_decode('Brigadas de cirugia realizadas:'), 0, 1,'');
    $resultado= mysqli_fetch_assoc(consultaCirugia($con));
    $pdf->SetTextColor(0,0,200);
    $pdf->SetFont('Arial', 'B', 15);
    $pdf->cell(15, 10, utf8_decode($resultado['TOTAL_CIRUGIA']), 0, 1,'');
    $total_brigadas+=$resultado['TOTAL_CIRUGIA'];
    //
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial', 'B', 15);
    $pdf->cell(15, 10, utf8_decode('Brigadas suspendidas:'), 0, 1,'');
    $resultado= mysqli_fetch_assoc(consultaSuspendida($con));
    $pdf->SetTextColor(200,0,0);
    $pdf->SetFont('Arial', 'B', 15);
    $pdf->cell(15, 10, utf8_decode($resultado['TOTAL_SUSPEN']), 0, 1,'');
    //
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial', 'B', 18);
    $pdf->cell(15, 10, utf8_decode('TOTAL BRIGADAS:'), 0, 1,'');
    $pdf->SetTextColor(0,155,0);
    $pdf->SetFont('Arial', 'B', 18);
    $pdf->cell(15, 10, utf8_decode($total_brigadas), 0, 1,'');
    //
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial', 'B', 15);
    $pdf->cell(15, 10, utf8_decode('Provincias visitadas:'), 0, 1,'');
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial', 'B', 12);
    $fila=consultaProvincia($con);
    while ($resultado=mysqli_fetch_assoc($fila)) {
        $pdf->cell(15, 10, utf8_decode($resultado['PROVINCIA_BRI']), 0, 1,'');
    }
    //
    $pdf->Output();
