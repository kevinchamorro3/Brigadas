<?php 
require "../resources/conexion.php";
require "../resources/funcionesRegistro.php";
session_start();
if(isset($_SESSION['id_usuario']) and $_SESSION['rol']==1 ){
  header("location:admin.php");
}else if(isset($_SESSION['id_usuario']) and $_SESSION['rol']==2 ){
  header("location:carrito/catalogo.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Crear Usuario</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/login.css">
</head>
<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="brand-wrapper">
            <img src="http://localhost/tiendaCelulares/img/logo.jpg" alt="logo" class="logo">
          </div>
          <div class="login-wrapper my-auto">
            <h1 class="login-title">Crear Usuario</h1>
            <form action="" method="POST">
              <div class="form-group">
                <label for="user">Usuario</label>
                <input type="text" name="user" id="user" class="form-control" placeholder="Ingrese si usuario" required>
              </div>
              <div class="form-group mb-4">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Ingrese su contraseña" required>
              </div>
              <div class="form-group">
                <label for="cedula">Cédula</label>
                <input type="text" name="cedula" id="cedula" class="form-control solo-numeros" placeholder="Ingrese su cédula" minlength="10" maxlength="10" required>
              </div>
              <div class="form-group">
                <label for="nombres">Nombres</label>
                <input type="text" name="nombres" id="nombres" class="form-control solo-letras" placeholder="Ingrese un nombre" maxlength="50" required>
              </div>
              <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos" class="form-control solo-letras" placeholder="Ingrese un apellido" maxlength="50" required>
              </div>
              <div class="form-group">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Ingrese una dirección" maxlength="30" required>
              </div>
              <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" name="correo" id="correo" class="form-control" placeholder="Ingrese un correo" maxlength="50" required>
              </div>
              <div class="form-group">
                <label for="telefono">Teléfono1</label>
                <input type="text" name="telefono" id="telefono" class="form-control solo-numeros" placeholder="Ingrese un teléfono" maxlength="10" required>
              </div>
              <div class="form-group">
                <label for="telefono">Teléfono2</label>
                <input type="text" name="telefono2" id="telefono2" class="form-control solo-numeros" placeholder="Ingrese un teléfono" maxlength="10">
              </div>
              <input name="crear" id="crear" class="btn btn-block login-btn" type="submit" value="Crear Cuenta">
            </form>
            <div style="font-size: 16px; color: #F11a2e;"><?php echo isset($error)? $error : '';?></div><br>
            <p class="login-wrapper-footer-text">¿Ya tienes cuenta? <a href="http://localhost/tiendaCelulares/index.php" class="text-reset">Ingresa aquí</a></p>
          </div>
          <?php
              if(isset($_REQUEST['crear'])){
                $user=$_REQUEST['user'];
                $password=$_REQUEST['password'];
                $cedula=$_REQUEST['cedula'];
                $nombres=$_REQUEST['nombres'];
                $apellidos=$_REQUEST['apellidos'];
                $direccion=$_REQUEST['direccion'];
                $correo=$_REQUEST['correo'];
                $tel1=$_REQUEST['telefono'];
                $tel2=$_REQUEST['telefono2'];
                //verificar existencia de usuario
                $result=consultarUsuario($con,$user,null);
                $rows=$result->num_rows;
                if($rows>0){
                    echo "<br><div style='font-size: 16px; color: #F11a2e;'><p>Ya existe una cuenta con este usuario: ".$user." Ingrese otro usuario</p></div><br>";
                }else{
                  $encrip=md5($password);
                  if(crearUsuario($con,$user,$encrip,$cedula,$nombres,$apellidos,$direccion,$correo,$tel1,$tel2)){
                      echo "<br><div style='font-size: 16px; color: #A9DC8F;'><p>Usuario creado correctamente</p></div><br>";
                  }else{
                      echo "<br><div style='font-size: 16px; color: #F11a2e;'><p>No se pudo crear la cuenta</p></div><br>";
                  }
                }
              }
          ?>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="http://localhost/tiendaCelulares/img/fondoLogin.jpg" alt="login image" class="login-img">
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="http://localhost/tiendaCelulares/js/validaciones.js"></script>
</body>
</html>
