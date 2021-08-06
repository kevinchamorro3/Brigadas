<?php 
	if(!isset($_SESSION['usuario']) or $_SESSION['rol']!=1 ){
	  header("location:http://localhost/tiendaCelulares/index.php");
	}
	?>
    <div id="ingresarRegistroModal" class="modal fade">
    <?php
    require_once "../resources/conexion.php";
    require_once "../resources/funcionesPerfil.php";
    $idper = consultarPerfil($con, null);
    ?>
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="../crudRegistro/guardarRegistro.php" method="POST" class="needs-validation" novalidate>
                <div class="modal-header">						
                    <h4 class="modal-title">Agregar Registro</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Usuario.</span>
                        </div>
                        <input type="text" class="form-control solo-letras" placeholder="Usuario" name="usuario" required maxlength="20">
                        <div class="invalid-feedback">Ingrese un usuario</div>
                    </div>					
                    <div class="input-group mb-3">
                        <div class="form-group">
                            <label for="cliente">Id Perfil</label>
                            <select id="cliente" class="form-control" name="idPe" required>
                                <option value="">--Escoja una opcion--</option>
                                <?php while ($fila = mysqli_fetch_assoc($idper)) { ?>
                                    <option value="<?= $fila['ID_PERFIL'] ?>"><?php echo $fila['NOMBRE_PERFIL'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="invalid-feedback">Seleccione un opcion</div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Clave</span>
                        </div>
                        <input type="text" class="form-control " placeholder="Clave" name="clave" required maxlength="20">
                        <div class="invalid-feedback">Ingrese una clave</div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Cedula</span>
                        </div>
                        <input type="text" class="form-control solo-numeros" placeholder="Cedula" name="cedu" required maxlength="10">
                        <div class="invalid-feedback">Ingrese su cedula</div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Nombres</span>
                        </div>
                        <input type="text" class="form-control solo-letras" placeholder="Nombres" name="nom" required maxlength="50" >
                        <div class="invalid-feedback">Ingrese sus nombres</div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Apellidos</span>
                        </div>
                        <input type="text" class="form-control solo-letras" placeholder="Apellidos" name="ape" required maxlength="50">
                        <div class="invalid-feedback">Ingrese sus apellidos</div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Direccion</span>
                        </div>
                        <input type="text" class="form-control " placeholder="Direccion" name="dir" required maxlength="30">
                        <div class="invalid-feedback">Ingrese su Direccion</div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Correo</span>
                        </div>
                        <input type="text" class="form-control " placeholder="Correo" name="correo" required maxlength="50">
                        <div class="invalid-feedback">Ingrese su Correo</div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Telefono 1.</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Telefono 1" name="tel1" required maxlength="10">
                        <div class="invalid-feedback">Ingrese un Telefono</div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Telefono 2.</span>
                        </div>
                        <input type="text" class="form-control solo-numeros" placeholder="Telefono 2" name="tel2"  maxlength="10">
                        <div class="invalid-feedback">Ingrese un Telefono</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="reset" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                    <input type="submit" class="btn btn-success" value="Guardar datos">
                </div>
            </form>
        </div>
    </div>
</div>