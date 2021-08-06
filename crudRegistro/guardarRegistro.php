<?php 
	session_start();
	if(!isset($_SESSION['usuario']) or $_SESSION['rol']!=1 ){
	  header("location:http://localhost/tiendaCelulares/index.php");
	}
require_once "../resources/conexion.php";
require_once "../resources/funcionesRegistro.php";

$usu=($_REQUEST['usuario']);
$idper=$_REQUEST['idPe'];
$clave=($_REQUEST['clave']);
$cedula=($_REQUEST['cedu']);
$nombres=($_REQUEST['nom']);
$apellidos=$_REQUEST['ape'];
$direccion=$_REQUEST['dir'];
$correo=$_REQUEST['correo'];
$tel1=$_REQUEST['tel1'];
$tel2=$_REQUEST['tel2'];
ob_start();
$pass_cifrado=md5($clave);
if(crearRegistro($con, $usu, $idper, $pass_cifrado, $cedula, $nombres, $apellidos, $direccion, $correo, $tel1, $tel2)){
   header("location:../crudRegistro/consultarRegistro.php?pagina=1&add=ok");
}else{
    header("location:../crudRegistro/consultarRegistro.php?pagina=1&add=no");
}
?>

