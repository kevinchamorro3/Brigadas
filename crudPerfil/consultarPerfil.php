<br><br>
<?php include "../resources/cabecera.php"; ?>
<!--paginacion-->
<?php
ob_start();
if (!$_GET) {
    header("location:consultarPerfil.php?pagina=1");
}
?>
<!--mensajes-->
<?php
if (isset($_GET['actu'])) {
    if ($_GET['actu'] == 'no') {
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
				No se pudo actualizar los datos correctamente
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
				</div>";
    }
    if ($_GET['actu'] == 'ok') {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
				Datos actualizados correctamente
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
				</div>";
    }
}
?>
<div class="container">
    <!--Encabezado de la tabla-->
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Imagenes</h2>
                </div>
                <div class="col-sm-6">
                    <a href="#ingresarPerfilModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">add_circle</i><span>Agregar producto</span></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 float-right">
            <form action="" method="post">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control" placeholder="Perfil "  name="buscar"/>
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
                        <th class='text-center'>Perfil</th>
                        <th>Nombre</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody id="myTable">
                  <!--Mostrar Datos en la tabla-->
                    <?php
                    require_once "../resources/conexion.php";
                    require_once "../resources/funcionesPerfil.php";
                    if (isset($_POST['buscar']) && !empty($_POST['buscar'])) {
                        $busqueda = $_POST['buscar'];
                    } else {
                        $busqueda = null;
                    }
                    //Paginar
                    $prodxpag = 10;
                    $ini = ($_GET['pagina'] - 1) * $prodxpag;
                    $resultaP = consultarPerfil($con, $busqueda);
                    $registros = $resultaP->num_rows;
                    $paginas = ceil($registros / $prodxpag);
                    if ($_GET['pagina'] <= 0 || $_GET['pagina'] > $paginas) {
                        header("location:consultarPerfil.php?pagina=1");
                    }
                    $resultado = paginarPerfil($con, $busqueda, $ini, $prodxpag);
                    while ($fila = mysqli_fetch_assoc($resultado)) {
                        ?>
                        <tr>

                            <td class='text-center'><?php echo $fila['ID_PERFIL']; ?></td>
                            <td><?php echo $fila['NOMBRE_PERFIL']; ?></td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#editarPerfilModal" class="edit" data-idper="<?php echo $fila['ID_PERFIL']; ?>" data-nomper="<?php echo $fila['NOMBRE_PERFIL']; ?>"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
                                <a href="#" data-toggle="modal" data-target="#eliminarPerfilModal" class="delete" data-idper="<?php echo $fila['ID_PERFIL']; ?>"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
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
                        <a class="page-link" href="consultarPerfil.php?pagina=<?php echo $_GET['pagina'] - 1; ?>">Anterior</a>
                    </li>
                    <?php
                    for ($i = 0; $i < $paginas; $i++) {
                        ?>
                        <li class="page-item <?php echo $_GET['pagina'] == $i + 1 ? 'active' : ''; ?>">
                            <a class="page-link" href="consultarPerfil.php?pagina=<?php echo $i + 1; ?>"><?php echo $i + 1; ?></a>
                        </li>
                    <?php } ?>
                    <li class="page-item <?php echo $_GET['pagina'] >= $paginas ? 'disabled' : ''; ?>">
                        <a class="page-link" href="consultarPerfil.php?pagina=<?php echo $_GET['pagina'] + 1; ?>">Siguiente</a>
                    </li>
                </ul>
            </nav><br>
        </div>
    </div>	
</div>
<!-- Agregar Modal HTML -->
<?php include("../crudPerfil/modalsPerfil/ingresarPerfil.php"); ?>
<!-- Editar Modal HTML -->
<?php include("../crudPerfil/modalsPerfil/editarPerfil.php"); ?>
<!-- Eliminar Modal HTML -->
<?php include("../crudPerfil/modalsPerfil/eliminarPerfil.php"); ?>
<!--Pie de pagina-->
<?php include("../resources/piedepagina.php") ?>
