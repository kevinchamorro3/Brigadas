		<br><br>
		<?php 
			include "../resources/cabecera.php";
			require_once "../resources/conexion.php";
			require_once "../resources/funcionesInfoBrigada.php";
			$resultado=consultarInfoBrigada($con,$_GET['id_infobri']);
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
							<h2>Editar Brigada</h2>
						</div>
						<div class="col-sm-6">
							<a href="consultarInfobrigada.php" class="btn btn-info"><i class="material-icons">search</i><span>Consultar brigadas</span></a>
						</div>
	                </div>
	            </div>
				<div class='clearfix'></div>
				<hr>
				<!--Contenido del formulario-->
				<form action="../crudInfoBrigada/EditarInfoBrigadaFinal.php" method="POST" class="needs-validation" novalidate>
					<div class="modal-header">						
						<h4 class="modal-title">Datos Brigada</h4>
					</div>
					<input type="hidden" name="id_bri" value="<?php echo $_GET['id_infobri'];?>">
					<div class="modal-body">
						<div class="row">
							<div class="input-group col-sm-4">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Nombre brigada</span>
								</div>
								<input type="text" class="form-control" placeholder="Nombre Brigada" value="<?php echo $fila['NOMBRE_BRI'];?>" name="nombri" maxlength="50" required>
								<div class="invalid-feedback">Ingrese un nombre</div>
							</div>
							<div class="input-group col-sm-4">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Org. Encar.</span>
								</div>
								<select class="custom-select" name="org" required>
									<option selected>Seleccione una organización</option>
									<option value="PROJECT CURE" <?php if($fila['ORG_ENCARGADA']=="PROJECT CURE"){echo "selected";}?>>Project Cure</option>
									<option value="FUNDACIÓN MÉDICA JUDITH LOMBEIDA" <?php if($fila['ORG_ENCARGADA']=="FUNDACIÓN MÉDICA JUDITH LOMBEIDA"){echo "selected";}?>>Fun. Medi. Judith Lomb.</option>
									<option value="FUNDACIÓN ADOPT A VILLAGE" <?php if($fila['ORG_ENCARGADA']=="FUNDACIÓN ADOPT A VILLAGE"){echo "selected";}?>>Fun. Adopt a Village</option>
									<option value="FUNDACIÓN KINDER SMAIL"  <?php if($fila['ORG_ENCARGADA']=="FUNDACIÓN KINDER SMAIL"){echo "selected";}?>>Fun. Kinder Smail</option>
									<option value="FUNDACIÓN CIMAS" <?php if($fila['ORG_ENCARGADA']=="FUNDACIÓN CIMAS"){echo "selected";}?>>Fun. Cimas</option>
									<option value='FUNDACIÓN SALUD "UN NUEVO COMIENZO"' <?php if($fila['ORG_ENCARGADA']=='FUNDACIÓN SALUD "UN NUEVO COMIENZO"'){echo "selected";}?>>Fun. Salud "Un nuevo Comienzo"</option>
									<option value="FUERZA AEREA ECUATORIANA" <?php if($fila['ORG_ENCARGADA']=='FUERZA AEREA ECUATORIANA'){echo "selected";}?>>FAE</option>
									<option value="GRUPO DE PAZ" <?php if($fila['ORG_ENCARGADA']=="GRUPO DE PAZ"){echo "selected";}?>>Grupo de paz</option>
									<option value="INSTITUTO TECNOLOGICO SUPERIOR QUITO" <?php if($fila['ORG_ENCARGADA']=="INSTITUTO TECNOLOGICO SUPERIOR QUITO"){echo "selected";}?>>ITQ</option>
									<option value="INSTITUTO TECNOLÓGICO SUPERIOR CORDILLERA" <?php if($fila['ORG_ENCARGADA']=="INSTITUTO TECNOLÓGICO SUPERIOR CORDILLERA"){echo "selected";}?>>Inst. Cordillera</option>
									<option value="UNIVERSIDAD DE LAS AMERICAS" <?php if($fila['ORG_ENCARGADA']=="UNIVERSIDAD DE LAS AMERICAS"){echo "selected";}?>>UDLA</option>
									<option value="UNIVERSIDAD DE LA FLORIDA" <?php if($fila['ORG_ENCARGADA']=="UNIVERSIDAD DE LA FLORIDA"){echo "selected";}?>>Uni. de La Florida </option>
									<option value="UNIVERSIDAD ROCKY VISTA" <?php if($fila['ORG_ENCARGADA']=="UNIVERSIDAD ROCHY VISTA"){echo "selected";}?>>Uni. Rocky Vista</option>
									<option value="UNIVERSIDAD SUREÑA DE TENNESY" <?php if($fila['ORG_ENCARGADA']=="UNIVERSIDAD SUREÑA DE TENNESY"){echo "selected";}?>>Uni. Sureña de Tennesy </option>
									<option value="UNIVERSIDAD CATÓLICA DE CUENCA" <?php if($fila['ORG_ENCARGADA']=="UNIVERSIDAD CATÓLICA DE CUENCA"){echo "selected";}?>>Uni. Católica de Cuenca</option>
									<option value="UNIVERSIDAD SAN GREGORIO DE PORTOVIEJO" <?php if($fila['ORG_ENCARGADA']=="UNIVERSIDAD SAN GREGORIO DE PORTOVIEJO"){echo "selected";}?>>Uni. San Grego. Portoviejo</option>
									<option value="UNIVERSIDAD METROPOLITANA" <?php if($fila['ORG_ENCARGADA']=="UNIVERSIDAD METROPOLITANA"){echo "selected";}?>>Uni. Metropolitana</option>
									<option value="UNIVERSIDAD NACIONAL DE PORTOVIEJO" <?php if($fila['ORG_ENCARGADA']=="UNIVERSIDAD NACIONAL DE PORTOVIEJO"){echo "selected";}?>>Uni. Nacional de Portoviejo</option>
									<option value="UNIVERSIDAD LAICA DE MANTA" <?php if($fila['ORG_ENCARGADA']=="UNIVERSIDAD LAICA DE MANTA"){echo "selected";}?>>Uni. Laica de Manta</option>
									<option value="UNIVERSIDAD DE BOLIVAR" <?php if($fila['ORG_ENCARGADA']=="UNIVERSIDAD DE BOLIVAR"){echo "selected";}?>>Uni. de Bolivar</option>
								</select>
								<div class="invalid-feedback">Ingrese el nombre de una organización</div>
							</div>
							<div class="input-group col-sm-4">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Costo</span>
								</div>
								<input type="number" value="<?php echo $fila['COSTO'];?>" class="form-control" name="costo" min="0" step="0.01" >
							</div>
						</div>
						<br>
						<div class="row">
							<div class="input-group col-sm-6">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Fecha inicio</span>
								</div>
								<input type="date" class="form-control" value="<?php echo $fila['FECH_INI_BRI'];?>" placeholder="Fecha de inicio" name="fechIni" required>
								<div class="invalid-feedback">Ingrese la fecha de inicio</div>
							</div>
							<div class="input-group col-sm-6">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Fecha finali.</span>
								</div>
								<input type="date" class="form-control" value="<?php echo $fila['FECH_FIN_BRI'];?>" placeholder="Fecha de finalización" name="fechFin" required>
								<div class="invalid-feedback">Ingrese la fecha de finalización</div>
							</div>
						</div>
						<div class='clearfix'></div><hr>
						<div>						
							<h4 class="modal-title">Miembros involucrados</h4>
						</div>
						<div class="row">
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Fun. Judi. Lom.</span>
								</div>
								<input type="number" value="<?php echo $fila['FJULO'];?>" class="form-control"  name="judith" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Fun. Ado. Vill.</span>
								</div>
								<input type="number" value="<?php echo $fila['FADOVIL'];?>" class="form-control" name="adopt" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Fun. Kin. Sma.</span>
								</div>
								<input type="number" value="<?php echo $fila['FKINSMA'];?>" class="form-control"  name="kinder" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Fun. Cimas</span>
								</div>
								<input type="number" value="<?php echo $fila['FCIMAS'];?>" class="form-control" name="cimas" min="0">
							</div>
						</div><br>
						<div class="row">
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Fun. S.U.N.C.</span>
								</div>
								<input type="number" value="<?php echo $fila['FSUNC'];?>" class="form-control" name="sunc" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">FAE</span>
								</div>
								<input type="number" value="<?php echo $fila['FAE'];?>" class="form-control" name="fae" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">G. Paz</span>
								</div>
								<input type="number" value="<?php echo $fila['GPAZ'];?>" class="form-control" name="gpaz" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">ITQ</span>
								</div>
								<input type="number" value="<?php echo $fila['ITQ'];?>" class="form-control" name="itq" min="0">
							</div>
						</div><br>
						<div class="row">
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">ITSCO</span>
								</div>
								<input type="number" value="<?php echo $fila['ITSCO'];?>" class="form-control" name="itsco" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">UDLA</span>
								</div>
								<input type="number" value="<?php echo $fila['UDLA'];?>" class="form-control" name="udla" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">U. Florida</span>
								</div>
								<input type="number" value="<?php echo $fila['UFLO'];?>" class="form-control" name="florida" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">U. Rocky</span>
								</div>
								<input type="number" value="<?php echo $fila['UROCKY'];?>" class="form-control" name="rocky" min="0">
							</div>
						</div><br>
						<div class="row">
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">U. S. Tenne.</span>
								</div>
								<input type="number" value="<?php echo $fila['UTENNESY'];?>" class="form-control" name="tennesy" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">U. Cato. Cuen.</span>
								</div>
								<input type="number" value="<?php echo $fila['UCATOCUENCA'];?>" class="form-control" name="catocuenca" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">U. S. Greg.</span>
								</div>
								<input type="number" value="<?php echo $fila['USGREGO'];?>" class="form-control" name="gregorio" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">U. Metropo.</span>
								</div>
								<input type="number" value="<?php echo $fila['UMETROPO'];?>" class="form-control" name="metropolitana" min="0">
							</div>
						</div><br>
						<div class="row">
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">U. Naci. Poto.</span>
								</div>
								<input type="number" value="<?php echo $fila['UNACIPORTO'];?>" class="form-control" name="naporto" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">U. Laica. Man.</span>
								</div>
								<input type="number" value="<?php echo $fila['ULAICAMANTA'];?>" class="form-control" name="laica" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">U. Bolivar</span>
								</div>
								<input type="number" value="<?php echo $fila['UBOLIVAR'];?>" class="form-control" name="bolivar" min="0">
							</div>
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">U. Tec. Ambato</span>
								</div>
								<input type="number" value="<?php echo $fila['UTECAMBA'];?>" class="form-control" name="utecamba" min="0">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="input-group col-sm-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Otros</span>
								</div>
								<input type="number" value="<?php echo $fila['OTROS'];?>" class="form-control" name="otros" min="0" step="1">
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
							<textarea class="form-control" name="observa" id="" cols="30" rows="5" maxlength="500"><?php echo $fila['OBSERVACIONES_BRI'];?></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-success" value="Editar Brigada" name="editarBrigada"><i class="material-icons" style="vertical-align: middle;">save</i><span style="vertical-align: middle;">    Guardar</span></button>
						<a href="consultarInfoBrigada.php" class="btn btn-danger"><i class="material-icons" style="vertical-align: middle;">cancel</i><span style="vertical-align: middle;">    Cancelar</span></a>
					</div>
				</form>
			</div>
		</div>
		<!--Pie de pagina-->
		<?php include("../resources/piedepagina.php")?>