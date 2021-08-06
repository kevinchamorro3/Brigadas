<?php
    function consultarRegistro($con,$user){
        $consulta = "select * from registro";
        if($user!=null){
            $consulta.=" where USUARIO like '%$user%'";
        }
        $resultado= $con->query($consulta);
        return $resultado;
    }
    function paginarRegistro($con,$idperfil,$ini,$ite){
        $consulta = "select * from registro";
        if($idperfil!=null){
            $consulta.=" where USUARIO like '%$idperfil%' order by registro.USUARIO limit $ini,$ite";
        }else{
            $consulta.=" order by registro.USUARIO limit $ini,$ite";
        }
        $resultado= $con->query($consulta);
        return $resultado;
    }
    function crearRegistro($con,$usu,$idper,$clave,$cedula,$nombres,$apellidos,$direccion,$correo,$tel1,$tel2){
        $insertar = $con->query("insert into registro(USUARIO,ID_PERFIL,CLAVE,CEDULA,NOMBRES,
        APELLIDOS,DIRECCION,CORREO,TELEFONO1,TELEFONO2) value ('$usu','$idper','$clave',
        '$cedula','$nombres','$apellidos','$direccion','$correo','$tel1','$tel2');");
        return $insertar;
    }
    function editarRegistro($con,$idpe,$clave,$cedula,$nombres,$apellidos,$direccion,$correo,$tel1,$tel2,$usuM){
        $actualizar = $con->query("update registro set ID_PERFIL='$idpe', CLAVE='$clave', CEDULA='$cedula', NOMBRES='$nombres', APELLIDOS='$apellidos', DIRECCION='$direccion', 
        CORREO='$correo', TELEFONO1='$tel1', TELEFONO2='$tel2' where USUARIO='$usuM';");
        return $actualizar;
    }
    function eliminarRegistro($con,$usu){
        $eliminar= $con->query("delete from registro where USUARIO='$usu';");
        return $eliminar;
    }
    function consultarUsuario($con,$user,$pass){
        $consulta = "select * from registro where USUARIO = '$user'";
        if($pass!=null){
            $consulta.=" and CLAVE = '$pass'";
        }
        $resultado= $con->query($consulta);
        return $resultado;
    }
    function crearUsuario($con,$usu,$clave,$cedula,$nombres,$apellidos,$direccion,$correo,$tel1,$tel2){
        $insertar = $con->query("insert into registro(USUARIO,ID_PERFIL,CLAVE,CEDULA,NOMBRES,
        APELLIDOS,DIRECCION,CORREO,TELEFONO1,TELEFONO2) value ('$usu','2','$clave',
        '$cedula','$nombres','$apellidos','$direccion','$correo','$tel1','$tel2');");
        return $insertar;
    }
    function editarUsuario($con,$cedula,$nombres,$apellidos,$direccion,$correo,$tel1,$tel2,$usuM){
        $actualizar = $con->query("update registro set CEDULA='$cedula', NOMBRES='$nombres', APELLIDOS='$apellidos', DIRECCION='$direccion', 
        CORREO='$correo', TELEFONO1='$tel1', TELEFONO2='$tel2' where USUARIO='$usuM';");
        return $actualizar;
    }
    function consultarCliente($con){
        $consulta = "select * from registro where ID_Perfil = '2'";
        $resultado= $con->query($consulta);
        return $resultado;
    }
?>