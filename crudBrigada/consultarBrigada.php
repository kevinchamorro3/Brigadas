		<br><br>
		<?php include "../resources/cabecera.php";?>
		<!--paginacion-->
		<?php
		ob_start();
		$id_infobri=$_GET['id_infobri'];
		require_once "../resources/conexion.php"; 
		require_once "../resources/funcionesBrigada.php";
		require_once "../resources/funcionesInfoBrigada.php";
		$resultado=consultarInfoBrigada($con,$id_infobri);
		$fila=mysqli_fetch_assoc($resultado);
		?>
		<!--mensajes-->
		<?php
		if(isset($_GET['actu'])){
			if($_GET['actu']=='no'){
				echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
				No se pudo actualizar los datos correctamente.
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
				</div>";	
			}
			if($_GET['actu']=='ok'){
				echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
				Datos actualizados correctamente.
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
				</div>";	
			}
		}
		if(isset($_GET['add'])){
			if($_GET['add']=='no'){
				echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
				No se pudo ingresar la brigada.
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
				</div>";	
			}
			if($_GET['add']=='ok'){
				echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
				Brigada ingresada correctamente.
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
				</div>";	
			}
		}
		if(isset($_GET['dele'])){
			if($_GET['dele']=='no'){
				echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
				No se pudo eliminar la brigada.
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
				</div>";	
			}
			if($_GET['dele']=='ok'){
				echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
				Brigada eliminada correctamente.
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
				</div>";	
			}
		}
        ?>
		<!--Informacion tabla-->
	    <div class="container-fluid">
			<!--Encabezado de la pagina-->
	        <div class="table-wrapper">
	            <div class="table-title">
	                <div class="row">
	                    <div class="col-sm-4">
							<h2>Información de la <?php echo $fila["NOMBRE_BRI"];?></h2>
						</div>
						<div class="col-sm-8">
							<a href="ingresarBrigada.php?id_infobri=<?php echo $id_infobri;?>" class="btn btn-success"><i class="material-icons">add_circle</i><span>Agregar información a la brigada</span></a>
							<a href="../crudInfoBrigada/consultarInfoBrigada.php" class="btn btn-info"><i class="material-icons">search</i><span>Consultar brigadas</span></a>
						</div>
	                </div>
	            </div>
				<div class='clearfix'></div>
				<hr>
				<!--Contenido de la tabla-->
				<div class="table-responsive">
					<table class="table table-striped table-hover table-bordered">
						<thead class="thead-dark">
							<tr>
								<th>Provincia</th>
								<th>Canton</th>
								<th>Parroquia</th>
								<th>Comunidad</th>
								<th class='text-center'>Pediatria</th>
								<th class='text-center'>Odontologia</th>
								<th class='text-center'>M. General</th>
								<th class="text-center">Optometria</th>
								<th class="text-center">Dermatologia</th>
								<th class="text-center">Ginecologia</th>
								<th class="text-center">Cardiologia</th>
								<th class="text-center">Traumatologia</th>
								<th class="text-center">Oftalmologia</th>
								<th class="text-center">Cirugia de pie</th>
								<th class="text-center">Cirugia de mano</th>
								<th class="text-center">Labio leporino</th>
								<th class="text-center">Paladar hendido</th>
								<th class="text-center">Total Pacientes</th>
								<th class="text-center">R.C.P.</th>
								<th class="text-center">H.B.B.</th>
								<th class="text-center">Opciones</th>
							</tr>
						</thead>
						<tbody>
							<!--Mostrar Datos en la tabla-->
							<?php
								$resultado2=consultarBrigadaxInfo($con,$id_infobri);
								while($fila2=mysqli_fetch_assoc($resultado2)){
							?>	
							<tr>
								<td><?php echo $fila2['PROVINCIA_BRI'];?></td>
								<td><?php echo $fila2['CANTON_BRI'];?></td>
								<td nowrap><?php echo $fila2['PARROQUIA_BRI'];?></td>
								<td nowrap><?php echo $fila2['COMUNIDAD_BRI'];?></td>
								<td class='text-center'><?php echo $fila2['PEDIATRIA'];?></td>
								<td class='text-center'><?php echo $fila2['ODONTOLOGIA'];?></td>
								<td class='text-center'><?php echo $fila2['GENERAL'];?></td>
								<td class="text-center"><?php echo $fila2['OPTOMETRIA'];?></td>
								<td class="text-center"><?php echo $fila2['DERMATOLOGIA'];?></td>
								<td class="text-center"><?php echo $fila2['GINECOLOGIA'];?></td>
								<td class="text-center"><?php echo $fila2['CARDIOLOGIA'];?></td>
								<td class="text-center"><?php echo $fila2['TRAUMATOLOGIA'];?></td>
								<td class="text-center"><?php echo $fila2['OFTALMOLOGIA'];?></td>
								<td class="text-center"><?php echo $fila2['PIE'];?></td>
								<td class="text-center"><?php echo $fila2['MANO'];?></td>
								<td class="text-center"><?php echo $fila2['LEPORINO'];?></td>
								<td class="text-center"><?php echo $fila2['HENDIDO'];?></td>
								<td class="text-center table-success font-weight-bold"><?php echo $fila2['TOTAL_PACIEN'];?></td>
								<td class="text-center table-warning"><?php echo $fila2['RCP'];?></td>
								<td class="text-center table-warning"><?php echo $fila2['HBB'];?></td>
								<td nowrap>
									<a href="editarBrigada.php?id_bri=<?php echo $fila2['ID_BRIGADA'];?>"><i style="color:#ffc209" class="material-icons" title="Editar" >&#xE254;</i></a>
									<button onclick="eliminarBrigada(<?php echo $fila2['ID_BRIGADA'];?>,<?php echo $fila2['ID_INFO'];?>)"><i style="color:red" class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></button>
								</td>
							</tr>
							<?php
								}
							?>
						</tbody>			
					</table>
				</div>
			</div>	
		</div>
		<!--Pie de pagina-->
		<?php include("../resources/piedepagina.php")?>
