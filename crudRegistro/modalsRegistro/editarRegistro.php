<?php 
	if(!isset($_SESSION['usuario']) or $_SESSION['rol']!=1 ){
	  header("location:http://localhost/tiendaCelulares/index.php");
	}
?>
<div id="editarRegistroModal" class="modal fade">
    <?php
    require_once "../resources/conexion.php";
    require_once "../resources/funcionesPerfil.php";
    $inpe = consultarPerfil($con, null);
    ?>
    <div class="modal-dialog">
        <div class="modal-content">
             <form action="../crudRegistro/editarRegistro.php" method="POST" class="needs-validation" id="edit_product" novalidate>
                 <input type="hidden" name="IDregistro" id="idRegistro" value="">
                <div class="modal-header">						
                    <h4 class="modal-title">Editar Registro</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Usuario.</span>
                        </div>
                        <input type="text" class="form-control solo-letras" placeholder="Usuario" name="codregistro" id="registro" required maxlength="20" readonly>
                        <div class="invalid-feedback">Ingrese un código</div>
                    </div>						
                    <div class="input-group mb-3">
                        <div class="form-group">
                            <label for="cliente">Perfil</label>
                            <select id="cliente" class="form-control" name="idPe"  required >
                                <?php while ($fila = mysqli_fetch_assoc($inpe)) { ?>
                                    <option value="<?= $fila['ID_PERFIL'] ?>"><?php echo $fila['NOMBRE_PERFIL'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="invalid-feedback">Seleccione</div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Clave</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Clave" name="clave" id="clave" required maxlength="20">
                        <div class="invalid-feedback">Ingrese su clave</div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Cedula</span>
                        </div>
                        <input type="text" class="form-control solo-numeros" placeholder="Cedula" name="cedu" id="cedu" required maxlength="10">
                        <div class="invalid-feedback">Ingrese su cedula</div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Nombres</span>
                        </div>
                        <input type="text" class="form-control solo-letras" placeholder="Nombres" name="nom" id="nombres" required maxlength="50" >
                        <div class="invalid-feedback">Ingrese sus nombres</div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Apellidos</span>
                        </div>
                        <input type="text" class="form-control solo-letras" placeholder="Apellido" name="ape" id="apellido" required maxlength="50">
                        <div class="invalid-feedback">Ingrese sus apellidos</div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Direccion</span>
                        </div>
                        <input type="text" class="form-control " placeholder="Direccion" name="dir" id="dire" required maxlength="30">
                        <div class="invalid-feedback">Ingrese su direccion</div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Correo</span>
                        </div>
                        <input type="email" class="form-control" placeholder="Correo" name="correo" id="correo" required="" maxlength="50">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Telefono 1</span>
                        </div>
                        <input type="text" class="form-control solo-numeros" placeholder="Telefono" name="tel1" id="telefo" required maxlength="10">
                        <div class="invalid-feedback">Ingrese su numero telefonico</div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Telefono 2</span>
                        </div>
                        <input type="text" class="form-control solo-numeros" placeholder="Telefono" name="tel2" id="tele2" maxlength="10">
                        <div class="invalid-feedback">Ingrese su numero telefonico</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                    <input type="submit" name="editarbtn" class="btn btn-success" value="Guardar datos">
                </div>
            </form>
        </div>
    </div>
</div>



