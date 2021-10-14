<?php
    function consultarInfoBrigada($con,$idInfo){
        $consulta = "select * from info_bri";
        if($idInfo!=null){
            $consulta.=" where ID_INFO = '$idInfo'";
        }
        $resultado= $con->query($consulta);
        return $resultado;
    }
    function consultarInfoBrigadaAnio($con,$anio){
        $consulta = "select * from info_bri";
        if($anio!=null){
            $consulta.=" where FECH_INI_BRI > '$anio-01-01'";
        }
        $resultado= $con->query($consulta);
        return $resultado;
    }
    function paginarInfoBrigada($con,$anio,$ini,$ite){
        $consulta = "select * from info_bri";
        if($anio!=null){
            $consulta.=" where FECH_INI_BRI > '$anio-01-01' ORDER BY FECH_INI_BRI DESC limit $ini,$ite";
        }else{
            $consulta.=" ORDER BY FECH_INI_BRI DESC limit $ini,$ite";
        }
        $resultado= $con->query($consulta);
        return $resultado;
    }
    function crearInfoBrigada($con,$nombri,$orgBri,$costo,$fini,$ffin,$fjulo,$fadovi,$fkin,$fcimas,$fsunc,$fae,$gpaz,$itq,$itsco,$udla,$uflo,$urocky,$utenne,$ucatocuen,$usgrego,$umetropo,$uporto,$ulaica,$ubolivar,
        $utecamba,$otros,$totalParticipantes,$observaciones){
        $insertar = $con->query("INSERT INTO info_bri (`NOMBRE_BRI`, `FECH_INI_BRI`, `FECH_FIN_BRI`, `ORG_ENCARGADA`, `COSTO`, `FJULO`, `FADOVIL`, `FKINSMA`, `FCIMAS`, `FSUNC`, `FAE`, `GPAZ`, `ITQ`, `ITSCO`, `UDLA`, `UFLO`, `UROCKY`, `UTENNESY`, `UCATOCUENCA`, `USGREGO`, `UMETROPO`, `UNACIPORTO`, `ULAICAMANTA`, `UBOLIVAR`, `UTECAMBA`, `OTROS`, `TOTAL_PARTICI`, `OBSERVACIONES_BRI`)
          VALUES ('$nombri','$fini','$ffin','$orgBri','$costo',$fjulo,$fadovi,$fkin,$fcimas,$fsunc,$fae,$gpaz,$itq,$itsco,$udla,$uflo,$urocky,$utenne,$ucatocuen,$usgrego,$umetropo,$uporto,$ulaica,$ubolivar,
          $utecamba,$otros,$totalParticipantes,'$observaciones')");
        return $insertar;
    }
    function editarInfoBrigada($con,$id_info,$nombri,$orgBri,$costo,$fini,$ffin,$fjulo,$fadovi,$fkin,$fcimas,$fsunc,$fae,$gpaz,$itq,$itsco,$udla,$uflo,$urocky,$utenne,$ucatocuen,$usgrego,$umetropo,$uporto,$ulaica,$ubolivar,
    $utecamba,$otros,$totalParticipantes,$observaciones){
        $actualizar = $con->query("UPDATE info_bri SET NOMBRE_BRI='$nombri',ORG_ENCARGADA='$orgBri', FECH_INI_BRI='$fini', FECH_FIN_BRI='$ffin', COSTO='$costo', FJULO='$fjulo', FADOVIL='$fadovi',FKINSMA='$fkin',FCIMAS='$fcimas', 
         FSUNC='$fsunc', FAE='$fae', GPAZ='$gpaz', ITQ='$itq', ITSCO='$itsco', UDLA='$udla', UFLO='$uflo', UROCKY='$urocky', UTENNESY='$utenne', 
         UCATOCUENCA='$ucatocuen', USGREGO='$usgrego', UMETROPO='$umetropo', UNACIPORTO='$uporto', ULAICAMANTA='$ulaica', UBOLIVAR='$ubolivar',
         UTECAMBA='$utecamba', OTROS='$otros', TOTAL_PARTICI='$totalParticipantes', OBSERVACIONES_BRI='$observaciones' WHERE ID_INFO='$id_info';");
        return $actualizar;
    }
    //elina la informacion de las brigadas
    function eliminarBrigadas($con,$idinfo){
        $eliminar= $con->query("delete from brigada where ID_INFO='$idinfo';");
        return $eliminar;
    }
    function eliminarInfoBrigada($con,$idinfo){
        $eliminar= $con->query("delete from info_bri where ID_INFO='$idinfo';");
        return $eliminar;
    }
    //CONSULTAS PARA REPORTES
    function consultarInfoBrigadaFechas($con,$fini,$ffin){
        $consultafechas= $con->query("SELECT *FROM info_bri WHERE FECH_INI_BRI>='$fini' AND FECH_FIN_BRI<='$ffin';");
        return $consultafechas;
    }
    function consultaMedicas($con){
        $consulta= $con->query("SELECT COUNT(*) AS TOTAL_MEDICAS FROM `info_bri` WHERE NOMBRE_BRI LIKE '%MÉDICA%';");
        return $consulta;
    }
    function consultaCapacita($con){
        $consulta= $con->query("SELECT COUNT(*) AS TOTAL_CAPACITA FROM `info_bri` WHERE NOMBRE_BRI LIKE '%CAPACITA%';");
        return $consulta;
    }
    function consultaOdonto($con){
        $consulta= $con->query("SELECT COUNT(*) AS TOTAL_ODONTO FROM `info_bri` WHERE NOMBRE_BRI LIKE '%ODONTO%';");
        return $consulta;
    }
    function consultaOptome($con){
        $consulta= $con->query("SELECT COUNT(*) AS TOTAL_OPTOME FROM `info_bri` WHERE NOMBRE_BRI LIKE '%OPTOME%';");
        return $consulta;
    }
    function consultaCirugia($con){
        $consulta= $con->query("SELECT COUNT(*) AS TOTAL_CIRUGIA FROM `info_bri` WHERE NOMBRE_BRI LIKE '%CIRUGIA%';");
        return $consulta;
    }
    function consultaSuspendida($con){
        $consulta= $con->query("SELECT COUNT(*) AS TOTAL_SUSPEN FROM `info_bri` WHERE NOMBRE_BRI LIKE '%SUSPEN%';");
        return $consulta;
    }
    function consultaTotal($con){
        $consulta= $con->query("SELECT COUNT(*) AS TOTAL FROM `info_bri`;");
        return $consulta;
    }
    //consultas de provincias
    function consultaProvincia($con){
        $consulta= $con->query("SELECT PROVINCIA_BRI FROM `brigada` GROUP BY PROVINCIA_BRI;");
        return $consulta;
    }
    //consulta info brigadas medicas
    function consultaBrigadasMedicas($con){
        $consulta= $con->query("SELECT * FROM `info_bri` WHERE NOMBRE_BRI LIKE '%MÉDICA%';");
        return $consulta;
    }
    //consulta info brigadas optometria
    function consultaBrigadasOptometria($con){
        $consulta= $con->query("SELECT * FROM `info_bri` WHERE NOMBRE_BRI LIKE '%OPTOME%';");
        return $consulta;
    }
    //consulta info brigadas odontologia
    function consultaBrigadasOdontolo($con){
        $consulta= $con->query("SELECT * FROM `info_bri` WHERE NOMBRE_BRI LIKE '%ODONTO%';");
        return $consulta;
    }
    //consulta info brigadas cirugias
    function consultaBrigadasCirugia($con){
        $consulta= $con->query("SELECT * FROM `info_bri` WHERE NOMBRE_BRI LIKE '%CIRUG%';");
        return $consulta;
    }


    
?>