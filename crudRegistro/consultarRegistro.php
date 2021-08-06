		
<br><br>
<?php include "../resources/cabecera.php"; ?>
<!--paginacion-->
<?php
ob_start();
if (!$_GET) {
    header("location:consultarRegistro.php?pagina=1");
}
?>
<!--Mensajes-->
<?php
		if(isset($_GET['actu'])){
			if($_GET['actu']=='no'){
				echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
				No se pudo actualizar los datos correctamente
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
				</div>";	
			}
			if($_GET['actu']=='ok'){
				echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
				Datos actualizados correctamente
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
				</div>";	
			}
		}
		if(isset($_GET['add'])){
			if($_GET['add']=='no'){
				echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
				El usuario ya existe, ingrese otro diferente.
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
				</div>";	
			}
			if($_GET['add']=='ok'){
				echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
				Usuario ingresada correctamente.
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
				</div>";	
			}
		}
		if(isset($_GET['dele'])){
			if($_GET['dele']=='no'){
				echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
				No se pudo eliminar al usuario, está relacionado con otras tablas.
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
				</div>";	
			}
			if($_GET['dele']=='ok'){
				echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
				Usuario eliminado correctamente.
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
				</div>";	
			}
		}
        ?>
<div class="container">
    <!--Encabezado de la pagina-->
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Celulares</h2>
                </div>
                <div class="col-sm-6">
                    <a href="#ingresarRegistroModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">add_circle</i><span>Agregar producto</span></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 float-right">
            <form action="" method="post">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control" placeholder="Nombre de usuario"  name="buscar"/>
                    <span class="input-group-btn">
                        <button class="btn btn-info" type="submit">Buscar</button>
                    </span>
                </div>
            </form>
        </div>
        <div class='clearfix'></div>
        <hr>
        <!--Contenido de la tabla-->
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th class='text-center'>Usuario</th>
                        <th>Id Perfil</th>
                        <th>Clave</th>
                        <th>Cedula</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Direccion</th>
                        <th>Correo</th>
                        <th>Telefono 1</th>
                        <th>Telefono 2</th>

                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!--Mostrar Datos en la tabla-->
                    <?php
                    require_once "../resources/conexion.php";
                    require_once "../resources/funcionesRegistro.php";
                    if (isset($_POST['buscar']) && !empty($_POST['buscar'])) {
                        $busqueda = $_POST['buscar'];
                    } else {
                        $busqueda = null;
                    }
                    //Paginar
                    $prodxpag = 10;
                    $ini = ($_GET['pagina'] - 1) * $prodxpag;
                    $resultaP = consultarRegistro($con, $busqueda);
                    $registros = $resultaP->num_rows;
                    $paginas = ceil($registros / $prodxpag);
                    if ($_GET['pagina'] <= 0 || $_GET['pagina'] > $paginas) {
                        header("location:consultarRegistro.php?pagina=1");
                    }
                    $resultado = paginarRegistro($con, $busqueda, $ini, $prodxpag);
                    while ($fila = mysqli_fetch_assoc($resultado)) {
                        ?>		
                        <tr>
                            <td class='text-center'><?php echo $fila['USUARIO']; ?></td>
                            <td><?php echo $fila['ID_PERFIL']; ?></td>
                            <td><?php echo $fila['CLAVE']; ?></td>
                            <td><?php echo $fila['CEDULA']; ?></td>
                            <td><?php echo $fila['NOMBRES']; ?></td>
                            <td><?php echo $fila['APELLIDOS']; ?></td>
                            <td><?php echo $fila['DIRECCION']; ?></td>
                            <td><?php echo $fila['CORREO']; ?></td>
                            <td><?php echo $fila['TELEFONO1']; ?></td>
                            <td><?php echo $fila['TELEFONO2']; ?></td>


                            <td>
                                <a href="#" data-toggle="modal" data-target="#editarRegistroModal" class="edit" data-codigo="<?php echo $fila['USUARIO']; ?>" data-usu="<?php echo $fila['USUARIO']; ?>" data-iper="<?php echo $fila['ID_PERFIL']; ?>" data-clave="<?php echo $fila['CLAVE']; ?>" data-cedula="<?php echo $fila['CEDULA']; ?>" data-nom="<?php echo $fila['NOMBRES']; ?>" data-ape="<?php echo $fila['APELLIDOS']; ?>" data-dir="<?php echo $fila['DIRECCION']; ?>" data-correo="<?php echo $fila['CORREO']; ?>" data-tel1="<?php echo $fila['TELEFONO1']; ?>" data-tel2="<?php echo $fila['TELEFONO2']; ?>"><i class="material-icons" data-toggle="tooltip" title="Editar" >&#xE254;</i></a>
                                <a href="#" data-toggle="modal" data-target="#eliminarRegistroModal" class="delete" data-codigo='<?php echo $fila['USUARIO']; ?>'><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>			
            </table>
        </div>
        <div class="col-sm-12 text-center">
            <nav aria-label="Paginación" class="text-center mx-auto">
                <ul class="pagination">
                    <li class="page-item <?php echo $_GET['pagina'] <= 1 ? 'disabled' : ''; ?>">
                        <a class="page-link" href="consultarRegistro.php?pagina=<?php echo $_GET['pagina'] - 1; ?>">Anterior</a>
                    </li>
                    <?php
                    for ($i = 0; $i < $paginas; $i++) {
                        ?>
                        <li class="page-item <?php echo $_GET['pagina'] == $i + 1 ? 'active' : ''; ?>">
                            <a class="page-link" href="consultarRegistro.php?pagina=<?php echo $i + 1; ?>"><?php echo $i + 1; ?></a>
                        </li>
                    <?php } ?>
                    <li class="page-item <?php echo $_GET['pagina'] >= $paginas ? 'disabled' : ''; ?>">
                        <a class="page-link" href="consultarRegistro.php?pagina=<?php echo $_GET['pagina'] + 1; ?>">Siguiente</a>
                    </li>
                </ul>
            </nav><br>
        </div>
    </div>	
</div>
<!-- Agregar Modal HTML -->
<?php include("../crudRegistro/modalsRegistro/ingresarRegistro.php"); ?>
<!-- Editar Modal HTML -->
<?php include("../crudRegistro/modalsRegistro/editarRegistro.php"); ?>
<!-- Eliminar Modal HTML -->
<?php include("../crudRegistro/modalsRegistro/eliminarRegistro.php"); ?>
<!--Pie de pagina-->
<?php include("../resources/piedepagina.php") ?>

