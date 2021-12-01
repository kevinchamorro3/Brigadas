<?php
	include './conexion.php';
    include './backup.php';
	if(isset($_GET['backup'])){
		backDb($con);
		header("location:../crudInfoBrigada/consultarInfoBrigada.php?copia=1");
	}
	else{
		header("location:../crudInfoBrigada/consultarInfoBrigada.php?copia=0");
	}

?>