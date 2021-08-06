<?php
if(isset($_POST['consultaFechas'])){   
    require('../pdf/fpdf.php'); 
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    //$this->Image('../img/logoFSNC.jpg',30,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Salto de línea
    $this->Ln(8);
    // Movernos a la derecha
    $this->Cell(70);
    // Título
    $this->Cell(120,10,utf8_decode('FUNDACIÓN MÉDICA JUDITH LOMBEIDA'),0,0,'C');
    // Salto de línea
    $this->Ln(24);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pag. '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF('L','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
require_once "../resources/conexion.php"; 
require_once "../resources/funcionesiNFOBrigada.php";
$f1=$_POST['fecha1'];
$f2=$_POST['fecha2'];
$pdf->cell(0,10,'Brigadas realizadas desde el '.date("d-m-Y",strtotime($f1)).' hasta el '.date("d-m-Y",strtotime($f2)),0,1,'',0);
$pdf->Ln(1);
$resConsulta=consultarInfoBrigadaFechas($con,$f1,$f2);
$datosConsulta=mysqli_fetch_assoc($resConsulta);
$pdf->cell(0,10,utf8_decode('Nombre Brigada: '.$datosConsulta['NOMBRE_BRI']),0,1,'',0);
$pdf->cell(0,10,utf8_decode('Total participantes: '.$datosConsulta['TOTAL_PARTICI']),0,1,'',0);
$pdf->SetFont('Arial','B',8);
$pdf->cell(25,10,'Costo',1,0,'C',0);
$pdf->cell(25,10,'Fech. Inicio',1,0,'C',0);
$pdf->cell(25,10,'Fech. Fin',1,0,'C',0);
if($datosConsulta['FJULO']>0){
    $pdf->cell(17,10,'Pediatria',1,0,'C',0);
}
$pdf->cell(17,10,'Pediatria',1,0,'C',0);
$pdf->cell(17,10,'Optometria',1,0,'C',0);
$pdf->cell(17,10,'Odonto.',1,0,'C',0);
$pdf->cell(17,10,'Gineco.',1,1,'C',0);
$resConsulta=consultarInfoBrigadaFechas($con,$f1,$f2);
$gene=0;
$pedia=0;
$opto=0;
$odon=0;
$gine=0;
while($datosConsulta=mysqli_fetch_assoc($resConsulta)){
    
}
$pdf->cell(25,10);
$pdf->cell(25,10);
$pdf->cell(25,10);
$pdf->cell(25,10,'TOTAL',1,0,'L',0);
$pdf->cell(17,10,$gene,1,0,'L',0);
$pdf->cell(17,10,$pedia,1,0,'L',0);
$pdf->cell(17,10,$opto,1,0,'L',0);
$pdf->cell(17,10,$odon,1,0,'L',0);
$pdf->cell(17,10,$gine,1,1,'L',0);
$pdf->Ln(20);
$pdf->SetFont('Arial','B',15);
$pdf->cell(0,10,utf8_decode('Total pacientes atendidos: '),0,1,'',0);
$pdf->Output();
}
?>