<?php
if(isset($_POST['consultaCliente'])){   
    require('../pdf/fpdf.php'); 
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    $clienteC=$_POST['cliente'];
    // Logo
    $this->Image('../img/logo.jpg',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(50);
    // Título
    $this->Cell(90,10,'Reporte del usuario '.$clienteC,0,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}



// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
require_once "../resources/conexion.php"; 
require_once "../resources/funcionesPedFac.php";
require_once "../resources/funcionesProducto.php";
require_once "../resources/funcionesRegistro.php";
$cliente=$_POST['cliente'];
$resCli=consultarUsuario($con,$cliente,null);
$datosCliente=mysqli_fetch_assoc($resCli);
$pdf->cell(0,10,'Cliente: '.$datosCliente['NOMBRES'].' '.$datosCliente['APELLIDOS'].'         Fecha: '.date("d-m-Y"),0,1,'',0);
$pdf->cell(0,10,utf8_decode('Cédula: '.$datosCliente['CEDULA']),0,1,'',0);
$resPedCli=comprasCliente($con,$cliente);
$pdf->cell(90,10,'Producto',1,0,'C',0);
$pdf->cell(30,10,'Fecha Ped.',1,0,'C',0);
$pdf->cell(30,10,'Fecha Ent.',1,0,'C',0);
$pdf->cell(20,10,'Cantidad',1,0,'C',0);
$pdf->cell(20,10,'Total',1,1,'C',0);
while($datosCompras=mysqli_fetch_assoc($resPedCli)){
    $pdf->SetFont('Arial','',10);
    $resPro=consultarProducto($con,$datosCompras['COD_PRODUCTO']);
    $datosPro=mysqli_fetch_assoc($resPro);
    $resFactura=consultarFactura($con,$datosCompras['ID_PEDIDO']);
    $datosFac=mysqli_fetch_assoc($resFactura);
    $pdf->cell(90,10,$datosPro['MARCA']." ".$datosPro['MODELO']." ".$datosPro['COLOR']." ".$datosPro['MEM_RAM']." Gb ".$datosPro['ALMACENAMIENTO']." Gb",1,0,'',0);
    $pdf->cell(30,10,date("d-m-Y",strtotime($datosCompras['FECHA_PEDIDO'])),1,0,'C',0);
    $pdf->cell(30,10,date("d-m-Y",strtotime($datosFac['FECHA_ENTREGA'])),1,0,'C',0);
    $pdf->cell(20,10,$datosCompras['CANTIDAD'],1,0,'C',0);
    $pdf->cell(20,10,'$'.$datosFac['TOTAL_FACTURA'],1,1,'C',0);
}
$pdf->Output();
}
?>