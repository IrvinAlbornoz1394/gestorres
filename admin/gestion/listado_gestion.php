<!DOCTYPE html>
<html>
<head>
	<title>Formulario Rol</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body>

<?php
include_once('../../clases/gestion.php');
$gestion= new gestion('','','','','','');
$listap=$gestion->listar_gestion();
?>


</form>
<h2 align="center">Listado gestion</h2>

<div class=" container-fluid">
<form action="formulario_gestion" method="post">
<input type="submit" class="btn btn-info btn-md" value="Nuevo" />
<br>
</div>
<br>
<div class="container-fluid">
<form action="formulario_gestion.php" method="post">
	<input type="hidden" name="operaciones" value="Agregar">
	<div class="table-responsive">
	<table class="table table-striped table-bordered  table-hover">
		<th class="info">#</th>
		<th class="info">Fecha de captura</th>
		<th class="info">Fecha de entrega</th>
		<th class="info">Detalles</th>
		<th class="info">Estatus</th>
		<th class="info">Tipo Gestion</th>

		<?php
		foreach ($listap as $elemento)
		{
			$elemento->obten_tipog();
			echo '<tr>';
			echo '<td>'.$elemento->idgestion.'</td>';
			echo '<td><a href="formulario_gestion.php?idgestion='.$elemento->idgestion.'">'.$elemento->fecha_captura.'</td>';
			echo '<td>'.$elemento->fecha_entrega.'</td>';
			echo '<td>'.$elemento->detalle.'</td>';
			echo '<td>'.$elemento->estatus.'</td>';
			echo '<td><a href="../tipo_gestion/listado_tipog.php?idgestion='.$elemento->idgestion.'">Tipo Gestion</a></td>';
			echo '<td>'.$elemento->tipo_gestion->nombre.'</td>';
		}
		?>
	</table>
</div>
</form>
</div>
<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>