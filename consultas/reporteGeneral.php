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
$pdf = new PDF('L', 'mm', 'A4');
$pdf->AliasNbPages();
$pdf->AddPage();
require_once "../resources/conexion.php";
require_once "../resources/funcionesInfoBrigada.php";
$pdf->Ln(1);
$pdf->SetFont('Arial', 'B', 20);
$pdf->Image('../img/lombeida.jpg', 15, 8, 50);
$pdf->cell(50);
$pdf->cell(185, 10, utf8_decode('Reporte General'), 0, 0, 'C');
$pdf->Image('../img/av.png', 230, 8, 33);
$pdf->Ln(35);
$total_brigadas = 0;
//Impresion de resultadosbrigadas
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 12);
$pdf->cell(290, 10, utf8_decode('Detalle de las brigadas realizadas'), 0, 1, 'C');
//encabezado de tabla
$pdf->cell(25);
$pdf->cell(25, 10, utf8_decode('Médicas'), 1, 0, 'C', 0);
$pdf->cell(34, 10, utf8_decode('Odontología'), 1, 0, 'C', 0);
$pdf->cell(32, 10, utf8_decode('Optometría'), 1, 0, 'C', 0);
$pdf->cell(42, 10, utf8_decode('Capacitaciones'), 1, 0, 'C', 0);
$pdf->cell(25, 10, utf8_decode('Cirugías'), 1, 0, 'C', 0);
$pdf->cell(25, 10, utf8_decode('Total'), 1, 0, 'C', 0);
$pdf->cell(40, 10, utf8_decode('Suspendidas'), 1, 1, 'C', 0);
//valores de tabla
$pdf->cell(25);
$pdf->SetTextColor(0, 0, 200);
//
$resultado = mysqli_fetch_assoc(consultaMedicas($con));
$pdf->cell(25, 10, utf8_decode($resultado['TOTAL_MEDICAS']), 1, 0, 'C', 0);
$total_brigadas += $resultado['TOTAL_MEDICAS'];
//
$resultado = mysqli_fetch_assoc(consultaOdonto($con));
$pdf->cell(34, 10, utf8_decode($resultado['TOTAL_ODONTO']), 1, 0, 'C', 0);
$total_brigadas += $resultado['TOTAL_ODONTO'];
//
$resultado = mysqli_fetch_assoc(consultaOptome($con));
$pdf->cell(32, 10, utf8_decode($resultado['TOTAL_OPTOME']), 1, 0, 'C', 0);
$total_brigadas += $resultado['TOTAL_OPTOME'];
//
$resultado = mysqli_fetch_assoc(consultaCapacita($con));
$pdf->cell(42, 10, utf8_decode($resultado['TOTAL_CAPACITA']), 1, 0, 'C', 0);
$total_brigadas += $resultado['TOTAL_CAPACITA'];
//
$resultado = mysqli_fetch_assoc(consultaCirugia($con));
$pdf->cell(25, 10, utf8_decode($resultado['TOTAL_CIRUGIA']), 1, 0, 'C', 0);
$total_brigadas += $resultado['TOTAL_CIRUGIA'];
//
$pdf->SetTextColor(0, 200, 0);
$pdf->cell(25, 10, utf8_decode($total_brigadas), 1, 0, 'C', 0);
//
$resultado = mysqli_fetch_assoc(consultaSuspendida($con));
$pdf->SetTextColor(200, 0, 0);
$pdf->cell(40, 10, utf8_decode($resultado['TOTAL_SUSPEN']), 1, 1, 'C', 0);
//////////////////////LINEA///////////////
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 8);
$pdf->cell(15, 10, utf8_decode('_________________________________________________________________________________________________________________________________________________________________________________'), 0, 1, '');
/////////////////////////totales pacientes
//Impresion de resultados(cuerpo)
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 12);
$pdf->cell(290, 10, utf8_decode('Detalles de pacientes por especialidad'), 0, 1, 'C');
//Impresion de encabezado de tabla del paciente
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 8);
$pdf->cell(17, 10, utf8_decode('M. General'), 1, 0, 'C');
$pdf->cell(17, 10, utf8_decode('Pediatría'), 1, 0, 'C');
$pdf->cell(17, 10, utf8_decode('Ginecología'), 1, 0, 'C');
$pdf->cell(19, 10, utf8_decode('Odontología'), 1, 0, 'C');
$pdf->cell(17, 10, utf8_decode('Optometría'), 1, 0, 'C');
$pdf->cell(20, 10, utf8_decode('Dermatología'), 1, 0, 'C');
$pdf->cell(20, 10, utf8_decode('Cardiología'), 1, 0, 'C');
$pdf->cell(22, 10, utf8_decode('Traumatología'), 1, 0, 'C');
$pdf->cell(20, 10, utf8_decode('Oftalmolagía'), 1, 0, 'C');
$pdf->cell(17, 10, utf8_decode('Cirugía Pie'), 1, 0, 'C');
$pdf->cell(19, 10, utf8_decode('Cirugía Mano'), 1, 0, 'C');
$pdf->cell(17, 10, utf8_decode('Labio L.'), 1, 0, 'C');
$pdf->cell(17, 10, utf8_decode('Paladar H.'), 1, 0, 'C');
$pdf->cell(17, 10, utf8_decode('Total'), 1, 0, 'C');
$pdf->cell(22, 10, utf8_decode('Capacitaciones'), 1, 1, 'C');
//Impresion de valores del paciente
$pdf->SetTextColor(0, 0, 200);
$pdf->SetFont('Arial', 'B', 12);
//
$resultado = mysqli_fetch_assoc(totalGeneral($con));
$pdf->cell(17, 10, utf8_decode($resultado['valor']), 1, 0, 'C');
//
$resultado = mysqli_fetch_assoc(totalPedia($con));
$pdf->cell(17, 10, utf8_decode($resultado['valor']), 1, 0, 'C');
//
$resultado = mysqli_fetch_assoc(totalGineco($con));
$pdf->cell(17, 10, utf8_decode($resultado['valor']), 1, 0, 'C');
//
$resultado = mysqli_fetch_assoc(totalOdonto($con));
$pdf->cell(19, 10, utf8_decode($resultado['valor']), 1, 0, 'C');
//
$resultado = mysqli_fetch_assoc(totalOptome($con));
$pdf->cell(17, 10, utf8_decode($resultado['valor']), 1, 0, 'C');
//
$resultado = mysqli_fetch_assoc(totalDerma($con));
$pdf->cell(20, 10, utf8_decode($resultado['valor']), 1, 0, 'C');
//
$resultado = mysqli_fetch_assoc(totalCardio($con));
$pdf->cell(20, 10, utf8_decode($resultado['valor']), 1, 0, 'C');
//
$resultado = mysqli_fetch_assoc(totalTrauma($con));
$pdf->cell(22, 10, utf8_decode($resultado['valor']), 1, 0, 'C');
//
$resultado = mysqli_fetch_assoc(totalOftalmo($con));
$pdf->cell(20, 10, utf8_decode($resultado['valor']), 1, 0, 'C');
//
$resultado = mysqli_fetch_assoc(totalPie($con));
$pdf->cell(17, 10, utf8_decode($resultado['valor']), 1, 0, 'C');
//
$resultado = mysqli_fetch_assoc(totalMano($con));
$pdf->cell(19, 10, utf8_decode($resultado['valor']), 1, 0, 'C');
//
$resultado = mysqli_fetch_assoc(totalLeporino($con));
$pdf->cell(17, 10, utf8_decode($resultado['valor']), 1, 0, 'C');
//
$resultado = mysqli_fetch_assoc(totalHendido($con));
$pdf->cell(17, 10, utf8_decode($resultado['valor']), 1, 0, 'C');
//
$pdf->SetTextColor(0, 200, 0);
$resultado = mysqli_fetch_assoc(totalPacientes($con));
$pdf->cell(17, 10, utf8_decode($resultado['valor']), 1, 0, 'C');
//
$pdf->SetTextColor(200, 200, 0);
$resultado = mysqli_fetch_assoc(totalHbb($con));
$pdf->cell(22, 10, utf8_decode($resultado['valor']), 1, 1, 'C');

//////////////////////LINEA///////////////
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 8);
$pdf->cell(15, 10, utf8_decode('_________________________________________________________________________________________________________________________________________________________________________________'), 0, 1, '');
//////////////////////////Provincias visitadas
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 12);
$pdf->cell(290, 10, utf8_decode('Provincias visitadas'), 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$fila = consultaProvincia($con);
$cont = 1;
while ($resultado = mysqli_fetch_assoc($fila)) {
    if ($cont % 4 != 0) {
        $pdf->cell(70, 10, utf8_decode($resultado['PROVINCIA_BRI']), 1, 0, 'C');
    } else {
        $pdf->cell(70, 10, utf8_decode($resultado['PROVINCIA_BRI']), 1, 1, 'C');
    }
    $cont += 1;
}
$pdf->Ln(12);
//////Costo total de brigadas
$pdf->SetFont('Arial', 'B', 12);
$resultado = mysqli_fetch_assoc(costototal($con));
$pdf->cell(15, 10, utf8_decode('Costo total de de las brigadas realizadas : $'.$resultado['COSTO']), 0, 1, 'L');
$pdf->Output();
