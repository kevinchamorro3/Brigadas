<?php
session_start();

session_unset();//borra las variables de la sesion- la sesion todavia existe
session_destroy();//borra toda la sesion

header('location: ../index.php');
?>

