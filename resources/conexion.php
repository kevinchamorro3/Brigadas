<?php
    $con= new mysqli("localhost","root","","bdd_brigadas");
    if($con->connect_error){
        echo "Error en la conexion: N°".$con->connet_errno."<br>Detalle: ".$con->connect_error;
    }
?>