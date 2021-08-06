<?php  
	session_start();
	if(!isset($_SESSION['usuario']) or $_SESSION['rol']!=1 ){
	  header("location:http://localhost/tiendaCelulares/index.php");
	}
require_once "../resources/conexion.php";
require_once "../resources/funcionesPerfil.php";

$idperfil=strtoupper($_REQUEST['perfil']);
$nombre=$_REQUEST['nom'];


if(crearPerfil($con, $idperfil, $nombre)){
    header("location:../crudPerfil/consultarPerfil.php?pagina=1&actu=ok");
}else{
    header("location:../crudPerfil/consultarPerfil.php?pagina=1&actu=no");
}

?>
 
