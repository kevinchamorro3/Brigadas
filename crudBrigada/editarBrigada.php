		<br><br>
		<?php 
			include "../resources/cabecera.php";
			require_once "../resources/conexion.php";
			require_once "../resources/funcionesBrigada.php";
			$resultado=consultarBrigada($con,$_GET['id_bri']);
			$fila= mysqli_fetch_assoc($resultado);
			ob_start();
		?>
		<!--Informacion tabla-->
	    <div class="container-fluid">
			<!--Encabezado de la pagina-->
	        <div class="table-wrapper">
	            <div class="table-title">
	                <div class="row">
	                    <div class="col-sm-6">
							<h2>Editar Visita</h2>
						</div>
						<div class="col-sm-6">
							<a href="../crudInfoBrigada/consultarInfoBrigada.php" class="btn btn-info"><i class="material-icons">search</i><span>Consultar brigadas</span></a>
						</div>
	                </div>
	            </div>
				<div class='clearfix'></div>
				<hr>
				<!--Contenido del formulario-->
				<form action="../crudBrigada/EditarBrigadaFinal.php" method="POST" class="needs-validation" novalidate>
					<div class="modal-header">						
						<h4 class="modal-title">Localización</h4>
					</div>
					<input type="hidden" name="id_bri" value="<?php echo $_GET['id_bri'];?>">
					<input type="hidden" name="id_infobri" value="<?php echo $fila['ID_INFO'];?>">
					<div class="modal-body">
						<div class="row">
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Provincia</span>
								</div>
								<select class="custom-select" name="provin" required>
									<option selected>Seleccione una provincia</option>
									<option value="Azuay" <?php if($fila['PROVINCIA_BRI']=="Azuay"){echo "selected";}?>>Azuay</option>  
									<option value="Cañar" <?php if($fila['PROVINCIA_BRI']=="Cañar"){echo "selected";}?>>Cañar</option>  
									<option value="Loja" <?php if($fila['PROVINCIA_BRI']=="Loja"){echo "selected";}?>>Loja</option>  
									<option value="Carchi" <?php if($fila['PROVINCIA_BRI']=="Carchi"){echo "selected";}?>>Carchi</option>  
									<option value="Imbabura" <?php if($fila['PROVINCIA_BRI']=="Imbabura"){echo "selected";}?>>Imbabura</option>  
									<option value="Pichincha" <?php if($fila['PROVINCIA_BRI']=="Pichincha"){echo "selected";}?>>Pichincha</option>  
									<option value="Cotopaxi" <?php if($fila['PROVINCIA_BRI']=="Cotopaxi"){echo "selected";}?>>Cotopaxi</option>  
									<option value="Tungurahua" <?php if($fila['PROVINCIA_BRI']=="Tunguragua"){echo "selected";}?>>Tungurahua</option>  
									<option value="Bolívar" <?php if($fila['PROVINCIA_BRI']=="Bolívar"){echo "selected";}?>>Bolívar</option>  
									<option value="Chimborazo" <?php if($fila['PROVINCIA_BRI']=="Chimborazo"){echo "selected";}?>>Chimborazo</option> 
									<option value="Sto. Domingo de los Tsachilas" <?php if($fila['PROVINCIA_BRI']=="Sto. Domingo de los Tsachilas"){echo "selected";}?>>Sto. Domingo de los Tsachilas</option>  
									<option value="Esmeraldas" <?php if($fila['PROVINCIA_BRI']=="Esmeraldas"){echo "selected";}?>>Esmeraldas</option>  
									<option value="Manabí" <?php if($fila['PROVINCIA_BRI']=="Manabí"){echo "selected";}?>>Manabí</option>  
									<option value="Guayas" <?php if($fila['PROVINCIA_BRI']=="Guayas"){echo "selected";}?>>Guayas</option>  
									<option value="Los Ríos" <?php if($fila['PROVINCIA_BRI']=="Los Ríos"){echo "selected";}?>>Los Ríos</option>  
									<option value="El Oro" <?php if($fila['PROVINCIA_BRI']=="El Oro"){echo "selected";}?>>El Oro</option>  
									<option value="Santa Elena" <?php if($fila['PROVINCIA_BRI']=="Santa Elena"){echo "selected";}?>>Santa Elena</option>  
									<option value="Sucumbíos" <?php if($fila['PROVINCIA_BRI']=="Sucumbios"){echo "selected";}?>>Sucumbíos</option>  
									<option value="Napo" <?php if($fila['PROVINCIA_BRI']=="Napo"){echo "selected";}?>>Napo</option>  
									<option value="Pastaza" <?php if($fila['PROVINCIA_BRI']=="Pastaza"){echo "selected";}?>>Pastaza</option>  
									<option value="Orellana" <?php if($fila['PROVINCIA_BRI']=="Orellna"){echo "selected";}?>>Orellana</option>  
									<option value="Morona Santiago" <?php if($fila['PROVINCIA_BRI']=="Morona Santiago"){echo "selected";}?>>Morona Santiago</option>  
									<option value="Zamora Chinchipe" <?php if($fila['PROVINCIA_BRI']=="Zamora Chinchipe"){echo "selected";}?>>Zamora Chinchipe</option>  
									<option value="Galápagos" <?php if($fila['PROVINCIA_BRI']=="Galápagos"){echo "selected";}?>>Galápagos</option>  
								</select>
								<div class="invalid-feedback">Ingrese una provincia</div>
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Cantón</span>
								</div>
								<input type="text" class="form-control" placeholder="Cantón" name="canton" value="<?php echo $fila['CANTON_BRI'];?>" required>
								<div class="invalid-feedback">Ingrese una provincia</div>
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Parroquia</span>
								</div>
								<input type="text" class="form-control" placeholder="Parroquia" name="parro" value="<?php echo $fila['PARROQUIA_BRI'];?>" required>
								<div class="invalid-feedback">Ingrese una parroquia</div>
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Comunidad</span>
								</div>
								<input type="text" class="form-control" placeholder="Comunidad" name="comunidad" value="<?php echo $fila['COMUNIDAD_BRI'];?>" required>
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
								<input type="number" value="<?php echo $fila['GENERAL'];?>" class="form-control"  name="general" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Pediat.</span>
								</div>
								<input type="number" value="<?php echo $fila['PEDIATRIA'];?>" class="form-control" name="pediatria" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Odonto.</span>
								</div>
								<input type="number" value="<?php echo $fila['ODONTOLOGIA'];?>" class="form-control"  name="odontologia" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Optome.</span>
								</div>
								<input type="number" value="<?php echo $fila['OPTOMETRIA'];?>" class="form-control" name="optometria" min="0">
							</div>
						</div><br>
						<div class="row">
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Dermat.</span>
								</div>
								<input type="number" value="<?php echo $fila['DERMATOLOGIA'];?>" class="form-control" name="dermatologia" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Gineco.</span>
								</div>
								<input type="number" value="<?php echo $fila['GINECOLOGIA'];?>" class="form-control" name="ginecologia" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Cardio.</span>
								</div>
								<input type="number" value="<?php echo $fila['CARDIOLOGIA'];?>" class="form-control" name="cardiologia" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Trauma.</span>
								</div>
								<input type="number" value="<?php echo $fila['TRAUMATOLOGIA'];?>" class="form-control" name="traumatologia" min="0">
							</div>
						</div><br>
						<div class="row">
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Oftalmo.</span>
								</div>
								<input type="number" value="<?php echo $fila['OFTALMOLOGIA'];?>" class="form-control" name="oftalmologia" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">C. Pie</span>
								</div>
								<input type="number" value="<?php echo $fila['PIE'];?>" class="form-control" name="pie" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">C. Mano</span>
								</div>
								<input type="number" value="<?php echo $fila['MANO'];?>" class="form-control" name="mano" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">La. Lep.</span>
								</div>
								<input type="number" value="<?php echo $fila['LEPORINO'];?>" class="form-control" name="leporino" min="0">
							</div>
						</div><br>
						<div class="row">
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Pa. Hen.</span>
								</div>
								<input type="number" value="<?php echo $fila['HENDIDO'];?>" class="form-control" name="hendido" min="0">
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
								<input type="number" value="<?php echo $fila['RCP'];?>" class="form-control" name="rcp" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">HBB</span>
								</div>
								<input type="number" value="<?php echo $fila['RCP'];?>" class="form-control" name="hbb" min="0">
							</div>
						</div>
					</div>
					<div class='clearfix'></div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-success" value="Editar Brigada" name="editarBrigada"><i class="material-icons" style="vertical-align: middle;">save</i><span style="vertical-align: middle;">    Guardar</span></button>
						<a href="consultarBrigada.php?id_infobri=<?php echo $fila['ID_INFO'];?>" class="btn btn-danger"><i class="material-icons" style="vertical-align: middle;">cancel</i><span style="vertical-align: middle;">    Cancelar</span></a>
					</div>
				</form>
			</div>
		</div>
		<!--Pie de pagina-->
		<?php include("../resources/piedepagina.php")?>