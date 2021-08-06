<?php
	session_start();
	if(!isset($_SESSION['usuario']) or $_SESSION['rol']!=1 ){
	  header("location:http://localhost/tiendaCelulares/index.php");
	}
if (isset($_POST['editarbtn'])) {
    require_once "../resources/conexion.php";
    require_once "../resources/funcionesRegistro.php";
    $codusuM = $_REQUEST['IDregistro'];
    $idpe = $_REQUEST['idPe'];
    $clave =md5($_REQUEST['clave']);
    $cedula =($_REQUEST['cedu']);
    $nombres =($_REQUEST['nom']);
    $apellidos =($_REQUEST['ape']);
    $direccion = $_REQUEST['dir'];
    $correo = $_REQUEST['correo'];
    $tele1 = $_REQUEST['tel1'];
    $tele2 = $_REQUEST['tel2'];
    
    if (editarRegistro($con, $idpe, $clave, $cedula, $nombres, $apellidos, $direccion, $correo, $tele1, $tele2, $codusuM)) {
        header("location:../crudRegistro/consultarRegistro.php?pagina=1&actu=ok");
    } else {
        header("location:../crudRegistro/consultarRegistro.php?pagina=1&actu=no");
    }
}
?>