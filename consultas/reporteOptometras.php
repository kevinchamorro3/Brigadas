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
    $resConsulta = consultaBrigadasOptometria($con);
    while($datosConsulta = mysqli_fetch_assoc($resConsulta)){
        $pdf->SetFont('Arial', 'B', 15);
        if ($datosConsulta['ORG_ENCARGADA'] == 'FUNDACIÓN ADOPT A VILLAGE') {
            $pdf->Image('../img/av.png', 30, 8, 33);
        } else if ($datosConsulta['ORG_ENCARGADA'] == 'PROJECT CURE') {
            $pdf->Image('../img/pc.png', 30, 8, 33);
        } else if ($datosConsulta['ORG_ENCARGADA'] == 'UNIVERSIDAD DE LA FLORIDA') {
            $pdf->Image('../img/florida.png', 30, 8, 33);
        } else if ($datosConsulta['ORG_ENCARGADA'] == 'FUNDACIÓN SALUD "UN NUEVO COMIENZO"') {
            $pdf->Image('../img/logoFSNC.jpg', 30, 8, 33);
        } else if ($datosConsulta['ORG_ENCARGADA'] == 'FUNDACIÓN MÉDICA JUDITH LOMBEIDA') {
            $pdf->Image('../img/lombeida.jpg', 30, 8, 33);
        }
        $pdf->cell(70);
        $pdf->cell(120, 10, utf8_decode($datosConsulta['ORG_ENCARGADA']), 0, 0, 'C');
        $pdf->Image('../img/av.png', 230, 8, 33);
        $pdf->Ln(40);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->cell(0, 10, utf8_decode($datosConsulta['NOMBRE_BRI']), 0, 1, '', 0);
        $pdf->cell(0, 10, 'Costo: $' . $datosConsulta['COSTO'], 0, 1, '', 0);
        $fechIni = date_create($datosConsulta['FECH_INI_BRI']);
        $pdf->cell(0, 10, 'Fecha de Inicio: ' . date_format($fechIni, 'd-m-Y'), 0, 1, '', 0);
        $fechFin = date_create($datosConsulta['FECH_FIN_BRI']);
        $pdf->cell(0, 10, utf8_decode('Fecha de finalización: ' . date_format($fechFin, 'd-m-Y')), 0, 1, '', 0);
        $pdf->cell(0, 10, utf8_decode('Total participantes: ' . $datosConsulta['TOTAL_PARTICI']), 0, 1, '', 0);
        $pdf->SetFont('Arial', 'B', 8);
        if ($datosConsulta['FJULO'] > 0) {
            $pdf->cell(25, 10, 'Judith Lombeida', 1, 0, 'C', 0);
        }
        if ($datosConsulta['FADOVIL'] > 0) {
            $pdf->cell(20, 10, 'Adopt Village', 1, 0, 'C', 0);
        }
        if ($datosConsulta['FKINSMA'] > 0) {
            $pdf->cell(20, 10, 'Kinder Smail.', 1, 0, 'C', 0);
        }
        if ($datosConsulta['FCIMAS'] > 0) {
            $pdf->cell(17, 10, 'CIMAS', 1, 0, 'C', 0);
        }
        if ($datosConsulta['FSUNC'] > 0) {
            $pdf->cell(40, 10, 'Salud Un Nuevo Comienzo', 1, 0, 'C', 0);
        }
        if ($datosConsulta['FAE'] > 0) {
            $pdf->cell(17, 10, 'FAE', 1, 0, 'C', 0);
        }
        if ($datosConsulta['GPAZ'] > 0) {
            $pdf->cell(17, 10, 'G. Paz', 1, 0, 'C', 0);
        }
        if ($datosConsulta['ITQ'] > 0) {
            $pdf->cell(17, 10, 'ITQ', 1, 0, 'C', 0);
        }
        if ($datosConsulta['ITSCO'] > 0) {
            $pdf->cell(17, 10, 'ITSCO', 1, 0, 'C', 0);
        }
        if ($datosConsulta['UDLA'] > 0) {
            $pdf->cell(17, 10, 'UDLA', 1, 0, 'C', 0);
        }
        if ($datosConsulta['UFLO'] > 0) {
            $pdf->cell(25, 10, 'U. Florida', 1, 0, 'C', 0);
        }
        if ($datosConsulta['UROCKY'] > 0) {
            $pdf->cell(25, 10, 'Rocky Vista', 1, 0, 'C', 0);
        }
        if ($datosConsulta['UTENNESY'] > 0) {
            $pdf->cell(25, 10, 'U. Tennesy', 1, 0, 'C', 0);
        }
        if ($datosConsulta['UCATOCUENCA'] > 0) {
            $pdf->cell(40, 10, 'U. Catolica Cuenca', 1, 0, 'C', 0);
        }
        if ($datosConsulta['USGREGO'] > 0) {
            $pdf->cell(40, 10, 'U. San Gregorio', 1, 0, 'C', 0);
        }
        if ($datosConsulta['UMETROPO'] > 0) {
            $pdf->cell(30, 10, 'U. Metropolitana', 1, 0, 'C', 0);
        }
        if ($datosConsulta['UNACIPORTO'] > 0) {
            $pdf->cell(40, 10, 'U. Portoviejo', 1, 0, 'C', 0);
        }
        if ($datosConsulta['ULAICAMANTA'] > 0) {
            $pdf->cell(40, 10, 'U. Laica de Manta', 1, 0, 'C', 0);
        }
        if ($datosConsulta['UBOLIVAR'] > 0) {
            $pdf->cell(40, 10, 'U. Bolivar', 1, 0, 'C', 0);
        }
        if ($datosConsulta['UTECAMBA'] > 0) {
            $pdf->cell(40, 10,  utf8_decode('U. Técnica de Ambato'), 1, 0, 'C', 0);
        }
        if ($datosConsulta['OTROS'] > 0) {
            $pdf->cell(17, 10, 'Otros', 1, 0, 'C', 0);
        }
        $pdf->cell(17, 10, 'Total', 1, 1, 'C', 0);
        //impresion valores
        if ($datosConsulta['FJULO'] > 0) {
            $pdf->cell(25, 10, $datosConsulta['FJULO'], 1, 0, 'C', 0);
        }
        if ($datosConsulta['FADOVIL'] > 0) {
            $pdf->cell(20, 10, $datosConsulta['FADOVIL'], 1, 0, 'C', 0);
        }
        if ($datosConsulta['FKINSMA'] > 0) {
            $pdf->cell(20, 10, $datosConsulta['FKINSMA'], 1, 0, 'C', 0);
        }
        if ($datosConsulta['FCIMAS'] > 0) {
            $pdf->cell(17, 10, $datosConsulta['FCIMAS'], 1, 0, 'C', 0);
        }
        if ($datosConsulta['FSUNC'] > 0) {
            $pdf->cell(40, 10, $datosConsulta['FSUNC'], 1, 0, 'C', 0);
        }
        if ($datosConsulta['FAE'] > 0) {
            $pdf->cell(17, 10, $datosConsulta['FAE'], 1, 0, 'C', 0);
        }
        if ($datosConsulta['GPAZ'] > 0) {
            $pdf->cell(17, 10, $datosConsulta['GPAZ'], 1, 0, 'C', 0);
        }
        if ($datosConsulta['ITQ'] > 0) {
            $pdf->cell(17, 10, $datosConsulta['ITQ'], 1, 0, 'C', 0);
        }
        if ($datosConsulta['ITSCO'] > 0) {
            $pdf->cell(17, 10, $datosConsulta['ITSCO'], 1, 0, 'C', 0);
        }
        if ($datosConsulta['UDLA'] > 0) {
            $pdf->cell(17, 10, $datosConsulta['UDLA'], 1, 0, 'C', 0);
        }
        if ($datosConsulta['UFLO'] > 0) {
            $pdf->cell(25, 10, $datosConsulta['UFLO'], 1, 0, 'C', 0);
        }
        if ($datosConsulta['UROCKY'] > 0) {
            $pdf->cell(25, 10, $datosConsulta['UROCKY'], 1, 0, 'C', 0);
        }
        if ($datosConsulta['UTENNESY'] > 0) {
            $pdf->cell(25, 10, $datosConsulta['UTENNESY'], 1, 0, 'C', 0);
        }
        if ($datosConsulta['UCATOCUENCA'] > 0) {
            $pdf->cell(40, 10, $datosConsulta['UCATOCUENCA'], 1, 0, 'C', 0);
        }
        if ($datosConsulta['USGREGO'] > 0) {
            $pdf->cell(40, 10, $datosConsulta['USGREGO'], 1, 0, 'C', 0);
        }
        if ($datosConsulta['UMETROPO'] > 0) {
            $pdf->cell(30, 10, $datosConsulta['UMETROPO'], 1, 0, 'C', 0);
        }
        if ($datosConsulta['UNACIPORTO'] > 0) {
            $pdf->cell(40, 10, $datosConsulta['UNACIPORTO'], 1, 0, 'C', 0);
        }
        if ($datosConsulta['ULAICAMANTA'] > 0) {
            $pdf->cell(40, 10, $datosConsulta['ULAICAMANTA'], 1, 0, 'C', 0);
        }
        if ($datosConsulta['UBOLIVAR'] > 0) {
            $pdf->cell(40, 10, $datosConsulta['UBOLIVAR'], 1, 0, 'C', 0);
        }
        if ($datosConsulta['UTECAMBA'] > 0) {
            $pdf->cell(40, 10,  $datosConsulta['UTECAMBA'], 1, 0, 'C', 0);
        }
        if ($datosConsulta['OTROS'] > 0) {
            $pdf->cell(17, 10, $datosConsulta['OTROS'], 1, 0, 'C', 0);
        }
        $pdf->setFillColor(131, 255, 1);
        $pdf->cell(17, 10, $datosConsulta['TOTAL_PARTICI'], 1, 1, 'C', 1);
        if ($datosConsulta['OBSERVACIONES_BRI'] > 0) {
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Multicell(0, 10, 'Observaciones: ' . utf8_decode($datosConsulta['OBSERVACIONES_BRI']), 0, 1, '', 0);
        }
        $pdf->Ln(4);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->cell(0, 10, utf8_decode('Brigadas relizadas: '), 0, 1, '', 0);
    
        //consuilta de datos de cada brigada
        require_once "../resources/funcionesBrigada.php";
        $resBri = consultarBrigadaxInfo($con, $datosConsulta['ID_INFO']);
        $total = 0;
        while ($datosBri = mysqli_fetch_assoc($resBri)) {
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->cell(75, 10, utf8_decode('Provincia: ' . $datosBri['PROVINCIA_BRI']. '    Cantón: ' . $datosBri['CANTON_BRI']. '    Parroquia: ' . $datosBri['PARROQUIA_BRI']. '    Comunidad: ' . $datosBri['COMUNIDAD_BRI']), 0, 1, 'L', 0);
            //cabecera tabla
            $pdf->SetFont('Arial', 'B', 8);
            if ($datosBri['PEDIATRIA'] > 0) {
                $pdf->cell(20, 10, utf8_decode('Pediatría'), 1, 0, 'C', 0);
            }
            if ($datosBri['ODONTOLOGIA'] > 0) {
                $pdf->cell(20, 10, utf8_decode('Odontología'), 1, 0, 'C', 0);
            }
            if ($datosBri['GENERAL'] > 0) {
                $pdf->cell(20, 10, utf8_decode('General'), 1, 0, 'C', 0);
            }
            if ($datosBri['OPTOMETRIA'] > 0) {
                $pdf->cell(20, 10, utf8_decode('Optometría'), 1, 0, 'C', 0);
            }
            if ($datosBri['DERMATOLOGIA'] > 0) {
                $pdf->cell(20, 10, utf8_decode('Dermatología'), 1, 0, 'C', 0);
            }
            if ($datosBri['GINECOLOGIA'] > 0) {
                $pdf->cell(20, 10, utf8_decode('Ginecología'), 1, 0, 'C', 0);
            }
            if ($datosBri['CARDIOLOGIA'] > 0) {
                $pdf->cell(20, 10, utf8_decode('Cardiología'), 1, 0, 'C', 0);
            }
            if ($datosBri['TRAUMATOLOGIA'] > 0) {
                $pdf->cell(20, 10, utf8_decode('Traumatología'), 1, 0, 'C', 0);
            }
            if ($datosBri['OFTALMOLOGIA'] > 0) {
                $pdf->cell(20, 10, utf8_decode('Oftalmología'), 1, 0, 'C', 0);
            }
            if ($datosBri['PIE'] > 0) {
                $pdf->cell(20, 10, utf8_decode('Cirugía pie'), 1, 0, 'C', 0);
            }
            if ($datosBri['MANO'] > 0) {
                $pdf->cell(20, 10, utf8_decode('Cirugía mano'), 1, 0, 'C', 0);
            }
            if ($datosBri['LEPORINO'] > 0) {
                $pdf->cell(25, 10, utf8_decode('Labio Leporino'), 1, 0, 'C', 0);
            }
            if ($datosBri['HENDIDO'] > 0) {
                $pdf->cell(25, 10, utf8_decode('Paladar Hendido'), 1, 0, 'C', 0);
            }
            if ($datosBri['RCP'] > 0) {
    
                $pdf->cell(20, 10, utf8_decode('RCP'), 1, 1, 'C', 0);
            } else if ($datosBri['HBB'] > 0) {
                $pdf->cell(20, 10, utf8_decode('HBB'), 1, 1, 'C', 0);
            } else {
                $pdf->cell(20, 10, utf8_decode('Total'), 1, 1, 'C', 0);
            }
            //Mostrar Datos
            if ($datosBri['PEDIATRIA'] > 0) {
                $pdf->cell(20, 10, utf8_decode($datosBri['PEDIATRIA']), 1, 0, 'C', 0);
            }
            if ($datosBri['ODONTOLOGIA'] > 0) {
                $pdf->cell(20, 10, utf8_decode($datosBri['ODONTOLOGIA']), 1, 0, 'C', 0);
            }
            if ($datosBri['GENERAL'] > 0) {
                $pdf->cell(20, 10, utf8_decode($datosBri['GENERAL']), 1, 0, 'C', 0);
            }
            if ($datosBri['OPTOMETRIA'] > 0) {
                $pdf->cell(20, 10, utf8_decode($datosBri['OPTOMETRIA']), 1, 0, 'C', 0);
            }
            if ($datosBri['DERMATOLOGIA'] > 0) {
                $pdf->cell(20, 10, utf8_decode($datosBri['DERMATOLOGIA']), 1, 0, 'C', 0);
            }
            if ($datosBri['GINECOLOGIA'] > 0) {
                $pdf->cell(20, 10, utf8_decode($datosBri['GINECOLOGIA']), 1, 0, 'C', 0);
            }
            if ($datosBri['CARDIOLOGIA'] > 0) {
                $pdf->cell(20, 10, utf8_decode($datosBri['CARDIOLOGIA']), 1, 0, 'C', 0);
            }
            if ($datosBri['TRAUMATOLOGIA'] > 0) {
                $pdf->cell(20, 10, utf8_decode($datosBri['TRAUMATOLOGIA']), 1, 0, 'C', 0);
            }
            if ($datosBri['OFTALMOLOGIA'] > 0) {
                $pdf->cell(20, 10, utf8_decode($datosBri['OFTALMOLOGIA']), 1, 0, 'C', 0);
            }
            if ($datosBri['PIE'] > 0) {
                $pdf->cell(20, 10, utf8_decode($datosBri['PIE']), 1, 0, 'C', 0);
            }
            if ($datosBri['MANO'] > 0) {
                $pdf->cell(20, 10, utf8_decode($datosBri['MANO']), 1, 0, 'C', 0);
            }
            if ($datosBri['LEPORINO'] > 0) {
                $pdf->cell(25, 10, utf8_decode($datosBri['LEPORINO']), 1, 0, 'C', 0);
            }
            if ($datosBri['HENDIDO'] > 0) {
                $pdf->cell(25, 10, utf8_decode($datosBri['HENDIDO']), 1, 0, 'C', 0);
            }
            if ($datosBri['RCP'] > 0) {
                $pdf->setFillColor(255, 185, 1);
                $pdf->cell(20, 10, utf8_decode($datosBri['RCP']), 1, 1, 'C', 1);
            } else if ($datosBri['HBB'] > 0) {
                $pdf->setFillColor(255, 185, 1);
                $pdf->cell(20, 10, utf8_decode($datosBri['HBB']), 1, 1, 'C', 1);
            } else {
                $pdf->setFillColor(131, 255, 1);
                $pdf->cell(20, 10, utf8_decode($datosBri['TOTAL_PACIEN']), 1, 1, 'C', 1);
            }
            $total += $datosBri['TOTAL_PACIEN'];
        }
        if ($total > 0) {
            $pdf->Ln(8);
            $pdf->SetFont('Arial', 'B', 20);
            $pdf->Multicell(0, 10, 'Total pacientes: ' . utf8_decode($total), 0, 1, '', 0);
        }
        $pdf->AddPage();
    }
    
    $pdf->Output();
