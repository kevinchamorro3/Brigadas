<?php
    function consultarPerfil($con,$idperfil){
        $consulta = "select * from perfil";
        if($idperfil!=null){
            $consulta.=" where ID_PERFIL like '%$idperfil%' order by perfil.ID_PERFIL";
        }else{
            $consulta.=" order by perfil.ID_PERFIL";
        }
        $resultado= $con->query($consulta);
        return $resultado;
    }
    function paginarPerfil($con,$idperfil,$ini,$ite){
        $consulta = "select * from perfil";
        if($idperfil!=null){
            $consulta.=" where ID_PERFIL like '%$idperfil%' order by perfil.ID_PERFIL limit $ini,$ite";
        }else{
            $consulta.=" order by perfil.ID_PERFIL limit $ini,$ite";
        }
        $resultado= $con->query($consulta);
        return $resultado;
    }
    
    function crearPerfil($con,$idperfil,$nombre){
        $insertar = $con->query("insert into perfil(ID_PERFIL,NOMBRE_PERFIL) value ('$idperfil','$nombre');");
        return $insertar;
    }
    function editarPerfil($con,$idperfil,$nom){
        $actualizar = $con->query("update perfil set NOMBRE_PERFIL='$nom' where ID_PERFIL='$idperfil';");
        return $actualizar;
    }
    function eliminarPerfil($con,$idperfil){
        $eliminar= $con->query("delete from perfil where ID_PERFIL='$idperfil';");
        return $eliminar;
    }

?>
