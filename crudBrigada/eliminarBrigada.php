<?php
	/*session_start();
	if(!isset($_SESSION['usuario']) or $_SESSION['rol']!=1 ){
	  header("location:http://localhost/tiendaCelulares/index.php");
	}*/
require_once "../resources/conexion.php";
require_once "../resources/funcionesBrigada.php";
$id_bri= $_GET['id_bri'];
$id_infobri=$_GET['id_infobri'];
ob_start();
if(eliminarBrigada($con,$id_bri)){
    header("location:../crudBrigada/consultarBrigada.php?pagina=1&dele=ok&id_infobri=$id_infobri");
}else{
    header("location:../crudBrigada/consultarBrigada.php?pagina=1&dele=no&id_infobri=$id_infobri");
}
?>