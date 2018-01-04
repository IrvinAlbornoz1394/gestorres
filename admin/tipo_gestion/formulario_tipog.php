<!DOCTYPE html>
<html>
<head>
	<title>Formulario Usuario</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>

<?php
include_once('../../clases/tipo_gestion.php');

if(isset($_GET['idtipog']))
{
	$otipog= new tipo_gestion($_GET['idtipog'],'','');
	$otipog->obtener_tipog();
	$operaciones='Modificar';
	$boton='<input type="submit" class="btn btn-danger btn-sm" name="operaciones" value="eliminar">';
}
else
{
	$otipog= new tipo_gestion('','','');
	$operaciones='Agregar';
	$boton='';
}
?>
<div class="container-fluid">
	<h1>Formulario tipo gestion</h1>
		<form action="operaciones_tipog.php" method="post">
			<input type="hidden" name="idtipog" value="<?php echo $otipog->idtipog;?>">
			<div class="col-md-3 mb-3">
				<label>Nombre:</label>
				<input type="text" name="nombre" value="<?php echo $otipog->nombre;?>"></td>
			</div>
			<div class="col-md-3 mb-3">
				<label>Clave:</label>
				<input type="text" name="clave" value="<?php echo $otipog->clave;?>">
			</div>
			<br>
			<div class="form-group col-md-2 inline">
					<input type="submit"  class="btn btn-success btn-sm"  name="operaciones" value="<?php echo $operaciones; ?>"/>
					<?php
						echo $boton;
					?>				
			</div>
			<input type="submit" class="btn btn-info btn-sm " name="operaciones" value="cancelar"/>
		</form>
</div>
</body>