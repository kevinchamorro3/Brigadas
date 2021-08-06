<?php 
	session_start();
	if(!isset($_SESSION['usuario']) or $_SESSION['rol']!=1 ){
	  header("location:http://localhost/tiendaCelulares/index.php");
	} 
    if(isset($_POST['editarbtn'])){
        require_once "../resources/conexion.php";
        require_once "../resources/funcionesPerfil.php";
        $idp=$_REQUEST['idperfil'];
        $nombre=$_REQUEST['nom'];

        if(editarPerfil($con, $idp, $nombre)){
           
            header("location:../crudPerfil/consultarPerfil.php?pagina=1&actu=ok");
        }else{
            echo "<br>$error<br><a href='../crudPerfil/consultarPerfil.php?pagina=1&actu=no'>Regresar</a>";
        }
    }
?>
 