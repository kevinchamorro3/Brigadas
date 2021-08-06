<?php 
	session_start();
	if(!isset($_SESSION['usuario']) or $_SESSION['rol']!=1 ){
	  header("location:http://localhost/tiendaCelulares/index.php");
	}
require_once "../resources/conexion.php";
require_once "../resources/funcionesRegistro.php";
$registro= $_REQUEST['eliminarCregistro'];
ob_start();
if(eliminarRegistro($con,$registro)){
  header("location:../crudRegistro/consultarRegistro.php?pagina=1&dele=ok");
}else{
    header("location:../crudRegistro/consultarRegistro.php?pagina=1&dele=no");
}
?>
