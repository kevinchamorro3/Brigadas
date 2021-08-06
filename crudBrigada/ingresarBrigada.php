		<br><br>
		<?php 
			include "../resources/cabecera.php";
			include "../resources/conexion.php";
			include "../resources/funcionesInfoBrigada.php";
			include "../resources/funcionesBrigada.php";
			ob_start();
			$id_infobri=$_GET['id_infobri'];
			$resultadobri=consultarInfoBrigada($con,$id_infobri);
			$fila1=mysqli_fetch_assoc($resultadobri);
		?>
		<!--Informacion tabla-->
	    <div class="container">
			<!--Encabezado de la pagina-->
	        <div class="table-wrapper">
	            <div class="table-title">
	                <div class="row">
	                    <div class="col-sm-8">
							<h2>Información nueva para <?php echo $fila1['NOMBRE_BRI'];?> </h2>
						</div>
						<div class="col-sm-4">
							<a href="../crudInfoBrigada/consultarInfoBrigada.php" class="btn btn-info"><i class="material-icons">search</i><span>Consultar brigadas</span></a>
						</div>
	                </div>
	            </div>
				<div class='clearfix'></div>
				<hr>
				<!--Contenido del formulario-->
				<form action="../crudBrigada/guardarBrigada.php" method="POST" class="needs-validation" novalidate>
					<input type="hidden" name="id_infobri" value="<?php echo $id_infobri;?>">
					<div class="modal-header">						
						<h4 class="modal-title">Localización</h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Provincia</span>
								</div>
								<select class="custom-select" name="provin" required>
									<option selected>Seleccione una provincia</option>
									<option value="Azuay" selected="selected">Azuay</option>  
									<option value="Cañar">Cañar</option>  
									<option value="Loja">Loja</option>  
									<option value="Carchi">Carchi</option>  
									<option value="Imbabura">Imbabura</option>  
									<option value="Pichincha">Pichincha</option>  
									<option value="Cotopaxi">Cotopaxi</option>  
									<option value="Tungurahua">Tungurahua</option>  
									<option value="Bolívar">Bolívar</option>  
									<option value="Chimborazo">Chimborazo</option>  
									<option value="Sto. Domingo de los Tsachilas">Sto. Domingo de los Tsachilas</option>  
									<option value="Esmeraldas">Esmeraldas</option>  
									<option value="Manabí">Manabí</option>  
									<option value="Guayas">Guayas</option>  
									<option value="Los Ríos">Los Ríos</option>  
									<option value="El Oro">El Oro</option>  
									<option value="Santa Elena">Santa Elena</option>  
									<option value="Sucumbíos">Sucumbíos</option>  
									<option value="Napo">Napo</option>  
									<option value="Pastaza">Pastaza</option>  
									<option value="Orellana">Orellana</option>  
									<option value="Morona Santiago">Morona Santiago</option>  
									<option value="Zamora Chinchipe">Zamora Chinchipe</option>  
									<option value="Galápagos">Galápagos</option>  
								</select>
								<div class="invalid-feedback">Ingrese una provincia</div>
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Cantón</span>
								</div>
								<input type="text" class="form-control" placeholder="Parroquia" name="canton" required>
								<div class="invalid-feedback">Ingrese una provincia</div>
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Parroquia</span>
								</div>
								<input type="text" class="form-control" placeholder="Parroquia" name="parro" required>
								<div class="invalid-feedback">Ingrese una parroquia</div>
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Comunidad</span>
								</div>
								<input type="text" class="form-control" placeholder="Comunidad" name="comunidad" required>
								<div class="invalid-feedback">Ingrese una comunidad</div>
							</div>
						</div>
						<div class='clearfix'></div><hr>
						<div>						
							<h4 class="modal-title">Pacientes atendidos</h4>
						</div>
						<div class="row">
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">M. Gene.</span>
								</div>
								<input type="number" value="0" class="form-control"  name="general" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Pediat.</span>
								</div>
								<input type="number" value="0" class="form-control" name="pediatria" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Odonto.</span>
								</div>
								<input type="number" value="0" class="form-control"  name="odontologia" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Optome.</span>
								</div>
								<input type="number" value="0" class="form-control" name="optometria" min="0">
							</div>
						</div><br>
						<div class="row">
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Dermat.</span>
								</div>
								<input type="number" value="0" class="form-control" name="dermatologia" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Gineco.</span>
								</div>
								<input type="number" value="0" class="form-control" name="ginecologia" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Cardio.</span>
								</div>
								<input type="number" value="0" class="form-control" name="cardiologia" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Trauma.</span>
								</div>
								<input type="number" value="0" class="form-control" name="traumatologia" min="0">
							</div>
						</div><br>
						<div class="row">
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Oftalmo.</span>
								</div>
								<input type="number" value="0" class="form-control" name="oftalmologia" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">C. Pie</span>
								</div>
								<input type="number" value="0" class="form-control" name="pie" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">C. Mano</span>
								</div>
								<input type="number" value="0" class="form-control" name="mano" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">La. Lep.</span>
								</div>
								<input type="number" value="0" class="form-control" name="leporino" min="0">
							</div>
						</div><br>
						<div class="row">
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Pa. Hen.</span>
								</div>
								<input type="number" value="0" class="form-control" name="hendido" min="0">
							</div>
						</div>
						<div class='clearfix'></div><hr>
						<div>
							<h4 class="modal-title">Capacitaciones</h4>
						</div>
						<div class="row">
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">RCP</span>
								</div>
								<input type="number" value="0" class="form-control" name="rcp" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">HBB</span>
								</div>
								<input type="number" value="0" class="form-control" name="hbb" min="0">
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-success" value="guardarBrigada" name="enviarBrigada"><i class="material-icons" style="vertical-align: middle;">save</i><span style="vertical-align: middle;">    Guardar</span></button>
						<a href="../crudInfoBrigada/consultarInfoBrigada.php" class="btn btn-danger"><i class="material-icons" style="vertical-align: middle;">cancel</i><span style="vertical-align: middle;">    Cancelar</span></a>
					</div>
				</form>
			</div>
		</div>
		<!--Pie de pagina-->
		<?php include("../resources/piedepagina.php")?>