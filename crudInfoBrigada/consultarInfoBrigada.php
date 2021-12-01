		<br><br>
		<?php include "../resources/cabecera.php";?>
		<!--paginacion-->
		<?php
		ob_start();
		if(!$_GET){
			header("location:consultarInfoBrigada.php?pagina=1");
		}
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
	                    <div class="col-sm-6">
							<h2>Brigadas</h2>
						</div>
						<div class="col-sm-6">
							<a href="ingresarInfoBrigada.php" class="btn btn-success"><i class="material-icons">add_circle</i><span>Agregar Brigada</span></a>
						</div>
	                </div>
	            </div>
				<!-- Busqueda
				<div class="col-sm-4 float-right">
					<form action="" method="post">
					<div class="input-group col-md-12">
	                    <input type="text" class="form-control" placeholder="Ingrese un año"  name="buscar"/>
	                    <span class="input-group-btn">
	                        <button class="btn btn-info" type="submit">Buscar</button>
						</span>
	                </div>
					</form>
				</div>
				-->
				<div class='clearfix'></div>
				<hr>
				<!--Contenido de la tabla-->
				<div class="table-responsive">
					<table class="table table-striped table-hover table-bordered">
						<thead class="thead-dark">
							<tr>
								<th class="text-center">Opciones</th>
								<th class='text-center'>Nombre Brigada</th>
								<th class='text-center'>Organización encargada</th>
								<th class='text-center'>Costo</th>
								<th class='text-center'>Fecha de inicio</th>
								<th class='text-center'>Fecha de finalización</th>
								<th class="text-center">Fun. Judith Lombeida</th>
								<th class="text-center">Fun. Adopt Village</th>
								<th class="text-center">Fun. Kinder Smail</th>
								<th class="text-center">Fun. Cimas</th>
								<th class="text-center">Fun. S.U.N.C.</th>
								<th class="text-center">F.A.E.</th>
								<th class="text-center">Grupo de paz</th>
								<th class="text-center">ITQ</th>
								<th class="text-center">ITSCO</th>
								<th class="text-center">UDLA</th>
								<th class="text-center">U. Florida</th>
								<th class="text-center">U. Rocky Vista</th>
								<th class="text-center">U. Sureña de Tennesy</th>
								<th class="text-center">U. Catolica Cuenca</th>
								<th class="text-center">U. San Gregorio</th>
								<th class="text-center">U. Metropolitana</th>
								<th class="text-center">U. Nacional Portoviejo</th>
								<th class="text-center">U. Laica Manta</th>
								<th class="text-center">U. Bolivar</th>
								<th class="text-center">U. Tec. Amba.</th>
								<th class="text-center">Otros</th>
								<th class="text-center">Total Participantes</th>
								<th class="text-center">Obervaciones</th>
								<th class="text-center">Opciones</th>
							</tr>
						</thead>
						<tbody>
							<!--Mostrar Datos en la tabla-->
							<?php
								require_once "../resources/conexion.php"; 
								require_once "../resources/funcionesInfoBrigada.php";
								if(isset($_POST['buscar'])&&!empty($_POST['buscar'])){
									$busqueda=$_POST['buscar'];
								}else{
									$busqueda=null;
								}
								//Paginar
								$prodxpag=5;
								$ini=($_GET['pagina']-1)*$prodxpag;
								$resultaP=consultarInfoBrigadaAnio($con,$busqueda);
								$registros=$resultaP->num_rows;
								$paginas=ceil($registros/$prodxpag);
								if($_GET['pagina']<=0||$_GET['pagina']>$paginas){
									header("location:consultarInfoBrigada.php?pagina=1");
								}
								$resultado=paginarInfoBrigada($con,$busqueda,$ini,$prodxpag);
								while($fila=mysqli_fetch_assoc($resultado)){
							?>	
							<tr>
								<td nowrap>
									<a href="../crudBrigada/consultarBrigada.php?id_infobri=<?php echo $fila['ID_INFO'];?>"><i style="color:#97F1FF" class="material-icons" title="Ver Informacion">visibility</i></a>
									<a href="editarInfoBrigada.php?id_infobri=<?php echo $fila['ID_INFO'];?>"><i style="color:#ffc209" class="material-icons" title="Editar Brigada" >&#xE254;</i></a>
									<a onclick="eliminarInfoBrigada(<?php echo $fila['ID_INFO'];?>);" href=""><i style="color:red" class="material-icons" title="Eliminar Brigada">&#xE872;</i></a>
									<a href="../consultas/reporteUnitario.php?id_infobri=<?php echo $fila['ID_INFO'];?>" target="_blank"><i style="color:#6C3483" class="material-icons" title="Imprimir Brigada">print</i></a>
								</td>
								<td class='text-center'><?php echo $fila['NOMBRE_BRI'];?></td>
								<td class='text-center'><?php echo $fila['ORG_ENCARGADA'];?></td>
								<td class='text-center'><?php echo "$".$fila['COSTO'];?></td>
								<td nowrap class='text-center'><?php echo date('d-m-Y',strtotime($fila['FECH_INI_BRI']));?></td>
								<td nowrap class='text-center'><?php echo date('d-m-Y',strtotime($fila['FECH_FIN_BRI']))?></td>
								<td class="text-center"><?php echo $fila['FJULO'];?></td>
								<td class="text-center"><?php echo $fila['FADOVIL'];?></td>
								<td class="text-center"><?php echo $fila['FKINSMA'];?></td>
								<td class="text-center"><?php echo $fila['FCIMAS'];?></td>
								<td class="text-center"><?php echo $fila['FSUNC'];?></td>
								<td class="text-center"><?php echo $fila['FAE'];?></td>
								<td class="text-center"><?php echo $fila['GPAZ'];?></td>
								<td class="text-center"><?php echo $fila['ITQ'];?></td>
								<td class="text-center"><?php echo $fila['ITSCO'];?></td>
								<td class="text-center"><?php echo $fila['UDLA'];?></td>
								<td class="text-center"><?php echo $fila['UFLO'];?></td>
								<td class="text-center"><?php echo $fila['UROCKY'];?></td>
								<td class="text-center"><?php echo $fila['UTENNESY'];?></td>
								<td class="text-center"><?php echo $fila['UCATOCUENCA'];?></td>
								<td class="text-center"><?php echo $fila['USGREGO'];?></td>
								<td class="text-center"><?php echo $fila['UMETROPO'];?></td>
								<td class="text-center"><?php echo $fila['UNACIPORTO'];?></td>
								<td class="text-center"><?php echo $fila['ULAICAMANTA'];?></td>
								<td class="text-center"><?php echo $fila['UBOLIVAR'];?></td>
								<td class="text-center"><?php echo $fila['UTECAMBA'];?></td>
								<td class="text-center"><?php echo $fila['OTROS'];?></td>
								<td class="text-center table-success font-weight-bold"><?php echo $fila['TOTAL_PARTICI'];?></td>
								<td class="text-left"><?php echo $fila['OBSERVACIONES_BRI'];?></td>
								<td nowrap>
									<a href="../crudBrigada/consultarBrigada.php?id_infobri=<?php echo $fila['ID_INFO'];?>"><i style="color:#97F1FF" class="material-icons" title="Ver Informacion">visibility</i></a>
									<a href="editarInfoBrigada.php?id_infobri=<?php echo $fila['ID_INFO'];?>"><i style="color:#ffc209" class="material-icons" title="Editar Brigada" >&#xE254;</i></a>
									<a onclick="eliminarInfoBrigada(<?php echo $fila['ID_INFO'];?>);" href=""><i style="color:red" class="material-icons" title="Eliminar Brigada">&#xE872;</i></a>
									<a href="../consultas/reporteUnitario.php?id_infobri=<?php echo $fila['ID_INFO'];?>" target="_blank"><i style="color:#6C3483" class="material-icons" title="Imprimir Brigada">print</i></a>
								</td>
							</tr>
							<?php
								}
							?>
						</tbody>			
					</table>
				</div>
				<div class="col-sm-12 text-center">
					<nav aria-label="Paginación" class="text-center mx-auto">
						<ul class="pagination">
							<li class="page-item <?php echo $_GET['pagina']<=1?'disabled':'';?>">
								<a class="page-link" href="consultarInfoBrigada.php?pagina=<?php echo $_GET['pagina']-1;?>">Anterior</a>
							</li>
							<?php
							for($i=0;$i<$paginas;$i++){
							?>
							<li class="page-item <?php echo $_GET['pagina']==$i+1?'active':'';?>">
								<a class="page-link" href="consultarInfoBrigada.php?pagina=<?php echo $i+1;?>"><?php echo $i+1;?></a>
							</li>
							<?php }?>
							<li class="page-item <?php echo $_GET['pagina']>=$paginas?'disabled':'';?>">
								<a class="page-link" href="consultarInfoBrigada.php?pagina=<?php echo $_GET['pagina']+1;?>">Siguiente</a>
							</li>
						</ul>
					</nav><br>
				</div>
			</div>	
		</div>
		<!--Pie de pagina-->
		<?php include("../resources/piedepagina.php")?>
