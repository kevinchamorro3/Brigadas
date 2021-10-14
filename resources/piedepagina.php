		<footer style="background-color: black; color:darkgray">
			<div class="container text-center">
				<div class="row">
					<div class="container col-md-*">Desarrollado por: Kevin Chamorro</div>
					<div class="container col-md-*">Instituto Tecnológico Quito</div>
				</div>
			</div>
		</footer>
		<!--jquery y script bootstrap-->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<!--validaciones y enivo datos a modals-->
		<script src="http://localhost/tiendaCelulares/js/validaciones.js"></script>
		<script type="text/javascript">
			function eliminarBrigada(idbri,infobri)
			{
			if (window.confirm("¿Desea eliminar el registro?") == true)
				{
					window.location = "http://localhost/brigadasmedicas/crudBrigada/eliminarBrigada.php?id_bri="+idbri+"&id_infobri="+infobri;
				}
			}
			function eliminarInfoBrigada(infobri)
			{
			if (window.confirm("¿Desea eliminar toda la información de la brigada?") == true)
				{
					window.location = "http://localhost/brigadas/crudInfoBrigada/eliminarInfoBrigada.php?id_infobri="+infobri;
				}
			}
		</script>
	</body>
</html>    