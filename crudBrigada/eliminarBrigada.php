<?php
	/*session_start();
	if(!isset($_SESSION['usuario']) or $_SESSION['rol']!=1 ){
	  header("location:http://localhost/tiendaCelulares/index.php");
	}*/
require "../resources/conexion.php";
require "../resources/funcionesBrigada.php";
$id_bri= $_GET['id_bri'];
$id_infobri=$_GET['id_infobri'];
ob_start();
if(eliminarBrigada($con,$id_bri)){
    header("location:http://localhost/brigadas/crudBrigada/consultarBrigada.php?dele=ok&id_infobri=$id_infobri");
}else{
    header("location:http://localhost/brigadas/crudBrigada/consultarBrigada.php?dele=no&id_infobri=$id_infobri");
}
?>