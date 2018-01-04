<!DOCTYPE html>
<html>
<head>
	<title>Formulario Rol</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body>

<?php
include_once('../../clases/persona.php');
$persona= new persona('','','','','','','','','','','','','','');
$lista=$persona->listar_persona();
?>
<h2 align="center">Listado persona</h2>
<div class="container-fluid">
<form action="formulario_persona.php" method="post">
	<input type="hidden" name="operaciones" value="Agregar">
	<div class="table-responsive">
	<table class="table table-striped table-bordered  table-hover">
		<th class="info">#</th>
		<th class="info">Nombres</th>
		<th class="info">Apellido Paterno</th>
		<th class="info">Apellido Materno</th>
		<th class="info">Fecha Nacimiento</th>
		<th class="info">Edad</th>
		<th class="info">Sexo</th>
		<th class="info">Teléfono</th>
		<th class="info">Celular</th>
		<th class="info">Dirección</th>
		<th class="info">CURP</th>
		<th class="info">Clave Elector</th>
		<th class="info">Fecha Registro</th>
		<th class="info">Ocupación</th>

		<?php
		foreach ($lista as $elemento)
		{
			echo '<tr>';
			echo '<td>'.$elemento->idpersona.'</td>';
			echo '<td><a href="formulario_persona.php?idpersona='.$elemento->idpersona.'">'.$elemento->nombres.'</td>';
			echo '<td>'.$elemento->apellidopat.'</td>';
			echo '<td>'.$elemento->apellidomat.'</td>';
			echo '<td>'.$elemento->fecha_nac.'</td>';
			echo '<td>'.$elemento->edad.'</td>';
			echo '<td>'.$elemento->sexo.'</td>';
			echo '<td>'.$elemento->telefono.'</td>';
			echo '<td>'.$elemento->celular.'</td>';
			echo '<td>'.$elemento->direccion.'</td>';
			echo '<td>'.$elemento->curp.'</td>';
			echo '<td>'.$elemento->clave_elec.'</td>';
			echo '<td>'.$elemento->fecha_ingreso.'</td>';
			echo '<td>'.$elemento->ocupacion.'</td>';
		}
		?>
	</table>
</div>
</form>
<form action="../reporte/reporte.php">
	<input type="submit" name="operaciones" value="Generar Reporte" class="btn btn-success">
	</form>
</div>
<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>