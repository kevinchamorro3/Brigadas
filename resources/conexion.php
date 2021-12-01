<?php
    $con= new mysqli("localhost","root","","bdd_brigadas");
    if (!$con->set_charset("utf8")) {
        printf("Error al cargar el conjunto de caracteres utf8: %s\n", $con->error);
        exit();
    }
?>