		<br><br>
		<?php 
			include "../resources/cabecera.php";
			ob_start();
		?>
		<!--Informacion tabla-->
	    <div class="container">
			<!--Encabezado de la pagina-->
	        <div class="table-wrapper">
	            <div class="table-title">
	                <div class="row">
	                    <div class="col-sm-6">
							<h2>Brigada nueva</h2>
						</div>
						<div class="col-sm-6">
							<a href="consultarInfobrigada.php" class="btn btn-info"><i class="material-icons">search</i><span>Consultar brigadas</span></a>
						</div>
	                </div>
	            </div>
				<div class='clearfix'></div>
				<hr>
				<!--Contenido del formulario-->
				<form action="../crudInfoBrigada/guardarInfoBrigada.php" method="POST" class="needs-validation" novalidate>
					<div class="modal-header">						
						<h4 class="modal-title">Agregar Brigada</h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="input-group col-sm-4">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Nombre brigada</span>
								</div>
								<input type="text" class="form-control" placeholder="Nombre Brigada" name="nombri" maxlength="50" required>
								<div class="invalid-feedback">Ingrese un nombre</div>
							</div>
							<div class="input-group col-sm-4">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Org. Encar.</span>
								</div>
								<select class="custom-select" name="org" required>
									<option selected>Seleccione una organización</option>
									<option value="PROJECT CURE">Preject Cure</option>
									<option value="FUNDACIÓN MÉDICA JUDITH LOMBEIDA">Fun. Medi. Judith Lomb.</option>
									<option value="FUNDACIÓN ADOPT A VILLAGE">Fun. Adopt a Village</option>
									<option value="FUNDACIÓN KINDER SMAIL">Fun. Kinder Smail</option>
									<option value="FUNDACIÓN CIMAS">Fun. Cimas</option>
									<option value='FUNDACIÓN SALUD "UN NUEVO COMIENZO"'>Fun. Salud "Un Nuevo Comienzo"</option>
									<option value="FUERZA AEREA ECUATORIANA">FAE</option>
									<option value="GRUPO DE PAZ">Grupo de paz</option>
									<option value="INSTITUTO TECNOLÓGICO SUPERIOR QUITO">ITQ</option>
									<option value="INSTITUTO TECNOLÓGICO SUPERIOR CORDILLERA">Inst. Cordillera</option>
									<option value="UNIVERSIDAD DE LAS AMERICAS">UDLA</option>
									<option value="UNIVERSIDAD DE LA FLORIDA">Uni. de La Florida </option>
									<option value="UNIVERSIDAD ROCKY VISTA">Uni. Rocky Vista</option>
									<option value="UNIVERSIDAD SUREÑA DE TENNESY">Uni. Sureña de Tennesy </option>
									<option value="UNIVERSIDAD CATÓLICA DE CUENCA">Uni. Católica de Cuenca</option>
									<option value="UNIVERSIDAD SAN GREGORIO DE PORTOVIEJO">Uni. San Grego. Portoviejo</option>
									<option value="UNIVERSIDAD METROPOLITANA">Uni. Metropolitana</option>
									<option value="UNIVERSIDAD NACIONAL DE PORTOVIEJO">Uni. Nacional de Portoviejo</option>
									<option value="UNIVERSIDAD LAICA DE MANTA">Uni. Laica de Manta</option>
									<option value="UNIVERSIDAD DE BOLIVAR">Uni. de Bolivar</option>
								</select>
								<div class="invalid-feedback">Seleccione una organización</div>
							</div>
							<div class="input-group col-sm-4">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Costo</span>
								</div>
								<input type="number" value="" class="form-control" name="costo" min="0" step="0.01" >
							</div>
						</div>
						<br>
						<div class="row">
							<div class="input-group col-sm-6">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Fecha inicio</span>
								</div>
								<input type="date" class="form-control" placeholder="Fecha de inicio" name="fechIni">
								<div class="invalid-feedback">Ingrese la fecha de inicio</div>
							</div>
							<div class="input-group col-sm-6">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Fecha finali.</span>
								</div>
								<input type="date" class="form-control" placeholder="Fecha de finalización" name="fechFin">
								<div class="invalid-feedback">Ingrese la fecha de finalización</div>
							</div>
						</div>
						<br>
						<div class='clearfix'></div><hr>
						<div>						
							<h4>Miembros involucrados</h4>
						</div>
						<div class="row">
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Fun. Judi. Lom.</span>
								</div>
								<input type="number" value="0" class="form-control"  name="judith" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Fun. Ado. Vill.</span>
								</div>
								<input type="number" value="0" class="form-control" name="adopt" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Fun. Kin. Sma.</span>
								</div>
								<input type="number" value="0" class="form-control"  name="kinder" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Fun. Cimas</span>
								</div>
								<input type="number" value="0" class="form-control" name="cimas" min="0">
							</div>
						</div><br>
						<div class="row">
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Fun. S.U.N.C.</span>
								</div>
								<input type="number" value="0" class="form-control" name="sunc" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">FAE</span>
								</div>
								<input type="number" value="0" class="form-control" name="fae" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">G. Paz</span>
								</div>
								<input type="number" value="0" class="form-control" name="gpaz" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">ITQ</span>
								</div>
								<input type="number" value="0" class="form-control" name="itq" min="0">
							</div>
						</div><br>
						<div class="row">
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">ITSCO</span>
								</div>
								<input type="number" value="0" class="form-control" name="itsco" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">UDLA</span>
								</div>
								<input type="number" value="0" class="form-control" name="udla" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">U. Florida</span>
								</div>
								<input type="number" value="0" class="form-control" name="florida" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">U. Rocky</span>
								</div>
								<input type="number" value="0" class="form-control" name="rocky" min="0">
							</div>
						</div><br>
						<div class="row">
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">U. S. Tenne.</span>
								</div>
								<input type="number" value="0" class="form-control" name="tennesy" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">U. Cato. Cuen.</span>
								</div>
								<input type="number" value="0" class="form-control" name="catocuenca" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">U. S. Greg.</span>
								</div>
								<input type="number" value="0" class="form-control" name="gregorio" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">U. Metropo.</span>
								</div>
								<input type="number" value="0" class="form-control" name="metropolitana" min="0">
							</div>
						</div><br>
						<div class="row">
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">U. Naci. Poto.</span>
								</div>
								<input type="number" value="0" class="form-control" name="naporto" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">U. Laica. Man.</span>
								</div>
								<input type="number" value="0" class="form-control" name="laica" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">U. Bolivar</span>
								</div>
								<input type="number" value="0" class="form-control" name="bolivar" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">U. Tec. Ambato</span>
								</div>
								<input type="number" value="0" class="form-control" name="utecamba" min="0">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Otros</span>
								</div>
								<input type="number" value="0" class="form-control" name="otros" min="0" step="1">
							</div>
						</div>
					</div>
					<div class='clearfix'></div>
					<hr>
					<div class="modal-header">						
						<h4 class="modal-title">Observaciones de la brigada</h4>
					</div>
					<div class="row">
						<div class="input-group col-sm-12">
							<textarea class="form-control" name="observa" id="" cols="30" rows="5" maxlength="500"></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-success" value="guardarBrigada" name="enviarInfoBrigada"><i class="material-icons" style="vertical-align: middle;">save</i><span style="vertical-align: middle;">    Guardar</span></button>
						<a href="consultarInfobrigada.php" class="btn btn-danger"><i class="material-icons" style="vertical-align: middle;">cancel</i><span style="vertical-align: middle;">    Cancelar</span></a>
					</div>
				</form>
			</div>
		</div>
		<!--Pie de pagina-->
		<?php include("../resources/piedepagina.php")?>