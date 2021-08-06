<?php 
	if(!isset($_SESSION['usuario']) or $_SESSION['rol']!=1 ){
	  header("location:http://localhost/tiendaCelulares/index.php");
	}
	?>
<div id="ingresarPerfilModal" class="modal fade">
  <div class="modal-dialog">
        <div class="modal-content">
            <form action="../crudPerfil/guardarPerfil.php" method="POST" class="needs-validation" novalidate>
                <div class="modal-header">						
                    <h4 class="modal-title">Agregar Perfil</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                   			
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Nombre</span>
                        </div>
                        <!--FALTA CARGAR DATOS EN CMB-->
                        <input type="text" class="form-control solo-letras" placeholder="Id Nombre" name="nom" id="idPe" required maxlength="100">
                        <div class="invalid-feedback">Ingrese id Nombre</div>
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
