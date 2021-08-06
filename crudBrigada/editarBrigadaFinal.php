<?php 
ob_start();
require_once "../resources/conexion.php";
require_once "../resources/funcionesBrigada.php";
if(isset($_POST['editarBrigada'])){
    $id_infobri=$_POST['id_infobri'];
    $id_bri=$_POST['id_bri'];
    $provincia=$_POST['provin'];
    $canton=$_POST['canton'];
    $parroquia=$_POST['parro'];
    $comunidad=$_POST['comunidad'];
    $pedia=$_POST['pediatria'];
    $odonto=$_POST['odontologia'];
    $general=$_POST['general'];
    $optpme=$_POST['optometria'];
    $derma=$_POST['dermatologia'];
    $gine=$_POST['ginecologia'];
    $cardio=$_POST['cardiologia'];
    $trauma=$_POST['traumatologia'];
    $oftal=$_POST['oftalmologia'];
    $pie=$_POST['pie'];
    $mano=$_POST['mano'];
    $lepo=$_POST['leporino'];
    $hendido=$_POST['hendido'];
    $totalPacien=$pedia+$odonto+$general+$optpme+$derma+$gine+$cardio+$trauma+$oftal+$pie+$mano+$lepo+$hendido;
    $rcp=$_POST['rcp'];
    $hbb=$_POST['hbb'];
    
    if(editarBrigada($con,$id_bri,$provincia,$canton,$parroquia,$comunidad,$pedia,$odonto,$general,$optpme,$derma,$gine,$cardio,$trauma,$oftal,$pie,$mano,$lepo,
    $hendido,$totalPacien,$rcp,$hbb)){
        header("location:../crudBrigada/consultarBrigada.php?pagina=1&actu=ok&id_infobri=$id_infobri");
    }else{
        header("location:../crudBrigada/consultarBrigada.php?pagina=1&actu=no&id_infobri=$id_infobri");
    }
}else{
    header("location:../crudBrigada/consultarBrigada.php?pagina=1&actu=no&id_infobri=$id_infobri");
}
?>