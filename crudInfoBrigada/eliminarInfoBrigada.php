<?php
	/*session_start();
	if(!isset($_SESSION['usuario']) or $_SESSION['rol']!=1 ){
	  header("location:http://localhost/tiendaCelulares/index.php");
	}*/
require_once "../resources/conexion.php";
require_once "../resources/funcionesInfoBrigada.php";
$id_infobri= $_GET['id_infobri'];
ob_start();
if(eliminarBrigadas($con,$id_infobri)){
	if(eliminarInfoBrigada($con,$id_infobri))
		{
			header("location:consultarInfoBrigada.php?pagina=1&dele=ok");
		}
	else
		{
			header("location:consultarInfoBrigada.php?pagina=1&dele=no");
		}
}else
{
	header("location:consultarInfoBrigada.php?pagina=1&dele=no");
}
	
?>