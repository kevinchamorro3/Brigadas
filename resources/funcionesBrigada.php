<?php
    function consultarBrigadaxInfo($con,$idInfo){
        $consulta = "select * from brigada";
        if($idInfo!=null){
            $consulta.=" where ID_INFO = '$idInfo'";
        }
        $resultado= $con->query($consulta);
        return $resultado;
    }
    function consultarBrigada($con,$idbri){
        $consulta = "select * from brigada";
        if($idbri!=null){
            $consulta.=" where ID_BRIGADA = '$idbri'";
        }
        $resultado= $con->query($consulta);
        return $resultado;
    }
    function crearBrigada($con,$id_infobri,$provincia,$canton,$parroquia,$comunidad,$pedia,$odonto,$general,$optpme,$derma,$gine,$cardio,$trauma,$oftal,$pie,$mano,$lepo,
        $hendido,$totalPacien,$rcp,$hbb){
        $insertar = $con->query("INSERT INTO brigada (ID_INFO, PROVINCIA_BRI, CANTON_BRI, PARROQUIA_BRI, COMUNIDAD_BRI, PEDIATRIA, ODONTOLOGIA, 
        GENERAL, OPTOMETRIA, DERMATOLOGIA, GINECOLOGIA, CARDIOLOGIA, TRAUMATOLOGIA, OFTALMOLOGIA, PIE, MANO, LEPORINO, HENDIDO, TOTAL_PACIEN, RCP, HBB)
          VALUES ('$id_infobri','$provincia','$canton','$parroquia','$comunidad',$pedia,$odonto,$general,$optpme,$derma,$gine,$cardio,$trauma,$oftal,$pie,$mano,$lepo,$hendido,
          $totalPacien,$rcp,$hbb)");
        return $insertar;
    }
    function editarBrigada($con,$id_bri,$provincia,$canton,$parroquia,$comunidad,$pedia,$odonto,$general,$optpme,$derma,$gine,$cardio,$trauma,$oftal,$pie,$mano,$lepo,
    $hendido,$totalPacien,$rcp,$hbb){
        $actualizar = $con->query("UPDATE brigada SET PROVINCIA_BRI='$provincia', CANTON_BRI='$canton', PARROQUIA_BRI='$parroquia',
         COMUNIDAD_BRI='$comunidad',PEDIATRIA='$pedia', ODONTOLOGIA='$odonto', GENERAL='$general', OPTOMETRIA='$optpme', DERMATOLOGIA='$derma', 
         GINECOLOGIA='$gine', CARDIOLOGIA='$cardio', TRAUMATOLOGIA='$trauma', OFTALMOLOGIA='$oftal', PIE='$pie', MANO='$mano', LEPORINO='$lepo', 
         HENDIDO='$hendido', TOTAL_PACIEN='$totalPacien', RCP='$rcp', HBB='$hbb' WHERE ID_BRIGADA='$id_bri';");
        return $actualizar;
    }
    function eliminarBrigada($con,$idBrigada){
        $eliminar= $con->query("DELETE from brigada where ID_BRIGADA='$idBrigada';");
        return $eliminar;
    }
?>