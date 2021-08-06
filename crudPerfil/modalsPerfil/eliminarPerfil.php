<?php 
	if(!isset($_SESSION['usuario']) or $_SESSION['rol']!=1 ){
	  header("location:http://localhost/tiendaCelulares/index.php");
	}
	?>
<div id="eliminarPerfilModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="../crudPerfil/EliminarPerfil.php" method="POST" id="delete_product">
                <div class="modal-header">						
                    <h4 class="modal-title">Eliminar Perfil</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">					
                    <p>¿Seguro que quieres eliminar este registro?</p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Id Perfil</span>
                        </div>
                        <input type="text" class="form-control" placeholder="ID Perfil" name="idPerfil" id="elimidper" value="" readonly required maxlength="20">
                        <div class="invalid-feedback">Ingrese un código</div>
                    </div>
                    <p class="text-warning"><small>Esta acción no se puede deshacer.</small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                    <input type="submit" class="btn btn-danger" value="Eliminar" name="eliminarPerfil">
                </div>
            </form>
        </div>
    </div>
</div>