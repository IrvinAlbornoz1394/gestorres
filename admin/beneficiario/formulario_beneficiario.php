<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<title> Formulario Benefiarios</title>
</head>
<body>
	<?php
	include_once('../../clases/beneficiario.php');

	if(isset($_GET['idbeneficiario']))
		{
			$obeneficiario= new beneficiarios($_GET['idbeneficiario'], '','','','','','','','','','');
			$obeneficiario->obtener_beneficiario();
			$operaciones='Modificar';
			$boton='<input type="submit" name="operaciones" value="Eliminar"/>';
		}
	else
		{
			$obeneficiario= new beneficiario('','','','','','','','','','','');
			$operaciones='Agregar';
			$boton='';
		}
	?>
<form action="operaciones_beneficiario.php" method="post">

	<h3>Beneficiarios</h3>

	<input type="hidden" name="idbeneficiario" value="<?php echo $obeneficiario->idbeneficiario;?>">

	<div>
		<label>Nombre(s):</label>
		<input type="text" name="nombres" value="<?php $obeneficiario->nombres;?>">
	</div>

	<div>
		<label>Apellido(s):</label>
		<input type="text" name="apellidos" value="<?php $obeneficiario->apellidos;?>">
	</div>

	<div>
		<label>sexo:</label>
		<input type="text" name="sexo" value="<?php $obeneficiario->sexo;?>">
	</div>

	<div>
		<label>Fecha Nacimiento:</label>
		<input type=date" name="fecha_nac" value="<?php $obeneficiario->fecha_nac;?>">
	</div>
	
	<div>
		<label>Edad:</label>
		<input type="text" name="edad" value="<?php $obeneficiario->edad;?>">
	</div>

	<div>
		<label>Dirección:</label>
		<input type="text" name="direccion" value="<?php $obeneficiario->direccion;?>">
	</div>

	<div>
		<label>Teléfono:</label>
		<input type="text" name="telefono" value="<?php $obeneficiario->telefono;?>">
	</div>

	<div>
		<label>Correo electrónico:</label>
		<input type="text" name="correo" value="<?php $obeneficiario->correo;?>">
	</div>

	<div>
		<label>Sección:</label>
		<input type="text" name="seccion" value="<?php $obeneficiario->seccion;?>">
	</div>

	<div>
		<label>Distrito:</label>
		<input type="text" name="distrito" value="<?php $obeneficiario->distrito;?>">
	</div>

	<div>
		<?php echo $boton;?>        
    	<input name="operaciones" type='submit' value="<?php echo $operaciones;?>">     
	</div>
</form>

<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>