<?php 
ob_start();
require_once "../resources/conexion.php";
require_once "../resources/funcionesInfoBrigada.php";
if(isset($_POST['editarBrigada'])){
    $id_info=$_POST['id_bri'];
    $nombri=$_POST['nombri'];
    $orgBri=$_POST['org'];
    $fini=date("Y-m-d",strtotime($_POST['fechIni']));
    $ffin=date("Y-m-d",strtotime($_POST['fechFin']));
    $costo=$_POST['costo'];
    $fjulo=$_POST['judith'];
    $fadovi=$_POST['adopt'];
    $fkin=$_POST['kinder'];
    $fcimas=$_POST['cimas'];
    $fsunc=$_POST['sunc'];
    $fae=$_POST['fae'];
    $gpaz=$_POST['gpaz'];
    $itq=$_POST['itq'];
    $itsco=$_POST['itsco'];
    $udla=$_POST['udla'];
    $uflo=$_POST['florida'];
    $urocky=$_POST['rocky'];
    $utenne=$_POST['tennesy'];
    $ucatocuen=$_POST['catocuenca'];
    $usgrego=$_POST['gregorio'];
    $umetropo=$_POST['metropolitana'];
    $uporto=$_POST['naporto'];
    $ulaica=$_POST['laica'];
    $ubolivar=$_POST['bolivar'];
    $utecamba=$_POST['utecamba'];
    $otros=$_POST['otros'];
    $totalParticipantes=$fjulo+$fadovi+$fkin+$fcimas+$fsunc+$fae+$gpaz+$itq+$itsco+$udla+$uflo+$urocky+$utenne+$ucatocuen+$usgrego+$umetropo+$uporto+$ulaica+$ubolivar+$utecamba+$otros;
    $observaciones=$_POST['observa'];
    if(editarInfoBrigada($con,$id_info,$nombri,$orgBri,$costo,$fini,$ffin,$fjulo,$fadovi,$fkin,$fcimas,$fsunc,$fae,$gpaz,$itq,$itsco,$udla,$uflo,$urocky,$utenne,$ucatocuen,$usgrego,$umetropo,$uporto,$ulaica,$ubolivar,
    $utecamba,$otros,$totalParticipantes,$observaciones)){
        header("location:../crudInfoBrigada/consultarInfoBrigada.php?pagina=1&actu=ok");
    }else{
        echo 'Falla aqui 1';
        //header("location:../crudInfoBrigada/consultarInfoBrigada.php?pagina=1&actu=no");
    }
}else{
    echo 'falla aqui 2';
    //header("location:../crudInfoBrigada/consultarInfoBrigada.php?pagina=1&actu=no");
}
?>