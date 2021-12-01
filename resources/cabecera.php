<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administración de Brrigadas</title>
	<!--Fuente-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<!--Iconos-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!--Boststrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!--estilosPropios-->
	<link rel="stylesheet" href="../css/brigadasEstilos.css">
</head>

<body>
	<!--Menu-->
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
			<a class="navbar-brand" href="http://localhost/brigadas/crudInfoBrigada/consultarInfoBrigada.php">
				<!--<img src="http://localhost/brigadasmedicas/img/" alt="logo Brigadas Fundacion Nuevo Comienzo" width="90px" height="30px">-->
			</a>
			<button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div id="my-nav" class="collapse navbar-collapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="http://localhost/brigadas/crudInfoBrigada/consultarInfoBrigada.php">Brigadas<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../consultas/reporteMedicas.php" target="_blank">Brigadas Médicas<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../consultas/reporteOptometras.php" target="_blank">Brigadas Optometras<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../consultas/reporteOdontologicas.php" target="_blank">Brigadas Odontológicas<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../consultas/reporteCirugias.php" target="_blank">Cirugías<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../consultas/reporteCapacitaciones.php" target="_blank">Capacitaciones<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../consultas/reporteTotal.php" target="_blank">Reporte Total<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../consultas/reporteGeneral.php" target="_blank">Reporte General<span class="sr-only">(current)</span></a>
					</li>
				</ul>
				<ul class="navbar-nav mr-10">
					<li class="nav-item">
						<a class="nav-link" href="../resources/copiaSeguridad.php?backup=1">Backup<span class="sr-only">(current)</span></a>
					</li>
				</ul>
			</div>
		</nav>
		<script type="text/javascript">
			function preguntars() {
				if (confirm('¿Seguro deséa salir?')) {
					window.location.href = "http://localhost/tiendaCelulares/login/logout.php";
				}
			}
		</script>
	</div><br><br>