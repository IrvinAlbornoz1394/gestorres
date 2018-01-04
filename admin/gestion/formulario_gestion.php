<!DOCTYPE html>
<html>
<head>
	<title>Formulario Gestión</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body>
<?php
include_once('../../clases/gestion.php');
include_once('../../clases/tipo_gestion.php');

$tipoges= new tipo_gestion('','','');
$lista=$tipoges->listar_tipog();

if(isset($_GET['idgestion']))
{
	$ogestion= new gestion($_GET['idgestion'],'','','','','');
	$ogestion->obtener_gestion();
	$operaciones='Modificar';
	$boton='<input type="submit" class="btn btn-danger btn-sm" name="operaciones" value="eliminar">';
}
else
{
	$ogestion= new gestion('','','','','','');
	$operaciones='Agregar';
	$boton='';
}
?>
<div class="container-fluid" align="middle">
		<h2>Formulario Gestion</h2>
		<br>

<form action="operaciones_gestion.php" method="post">
	<input type="hidden" name="idgestion" value="<?php echo $ogestion->idgestion; ?>"/>

<div class="row">
	<div class="col-md-3 mb-3">
		<label>Fecha Captura:</label>
		<input type="date" name="fecha_captura" class="form-control" value="<?php echo $ogestion->fecha_captura;?>" placeholder="">
	</div>

	<div class="col-md-3 mb-3">
		<label>Fecha de entrega:</label>
		<input type="date" name="fecha_entrega" class="form-control" value="<?php echo $ogestion->fecha_entrega;?>" placeholder="">
	</div>


	<div class="col-md-3 mb-3">
		<label  class="col-form-label">Estatus</label>
		<input type="select" name="estatus" class="form-control" value="<?php echo $ogestion->estatus;?>">
	</div>

	<div class="col-md-3 mb-3">
		<label class="col-form-label">Tipo de gestión:</label>
		<select name="idtipog" id="" class="btn  dropdown-toggle">
			<option value="0">Seleccione la gestión</option>
			<?php
			foreach($lista as $elemento)
			{
				$select='';
				if($elemento->idtipog==$ogestion->idtipog)
				{
					$select=' selected ';
				}
					
				echo '<option class="form-control"'.$select.' value="'.$elemento->idtipog.'">'.$elemento->nombre.'</option>';
			}
			?>
		</select>
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-5 mb-3 col-md-offset-3 ">
		<label>Descripción:</label>
		<textarea name="detalle" class="form-control" value="<?php echo $ogestion->detalle?>"; placeholder="Describa los detalles""></textarea>
	</div>
</div>
<div class="form-group col-md-2 col-md-offset-4 inline">
	<br>
		<input type="submit"  class="btn btn-success btn-sm"  name="operaciones" value="<?php echo $operaciones; ?>"/>
		<input type="submit" class="btn btn-info btn-sm " name="operaciones" value="cancelar"/>
	<br>
	<?php
	echo $boton;
	?>
	<br>
</div>
</form>
</div>
</body>