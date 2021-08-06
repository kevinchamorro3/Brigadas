<?php 
require "../resources/cabecera.php";
require "../resources/conexion.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <br><br>
            <h3 class="text-center">Seleccione un rango de fechas de las brigadas</h3>
            <form action="reportePorFecha.php" method="post" class="needs-validation" target="_blank" novalidate>
                <div class="row abs-center">
                    <div class="input-group col-4 text-center">
                        <div class="form-group">
                            <label for="fecha1">Fecha inicio</label>
                            <input class="form-control" type="date" name="fecha1">
                        </div>
                        <div class="invalid-feedback">Seleccione una fecha</div>
                    </div>
                    <div class="input-group col-4 text-center">
                        <div class="form-group">
                            <label for="fecha2">Fecha de finalizacion</label>
                            <input class="form-control" type="date" name="fecha2">
                        </div>
                        <div class="invalid-feedback">Seleccione una fecha</div>
                    </div>
                    <div class="input-group col-4 text-center">
                        <div class="form-group">
                            <label for="">Consultar</label>
                            <input type="submit" name="consultaFechas" class="form-control btn btn-success" value="Generar consulta">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
<?php 
require "../resources/piedepagina.php";
?>