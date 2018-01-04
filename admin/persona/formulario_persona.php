<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body>
	<?php
	include_once('../../clases/persona.php');
	include_once('../../clases/seguridad.php');
	session_start();
/*	$inactivo=100;
	if(isset($_SESSION['tiempo'])){
		$vidas=time()-$_SESSION['tiempo'];
		if ($vidas>$inactivo){
			session_destroy();
			header('Location:../login/login.php');
		}
	}
	$_SESSION['tiempo']=time();
*/
	$seg= new seguridad();
	$seg->candado();
	include_once('../../clases/rol.php');


	if(isset($_GET['idpersona']))
	{
		$oper= new persona($_GET['idpersona'],'','','','','','','','','','','','','');
		$oper->obtener_persona();
		$operaciones='Modificar';
	 	$deshab= '';

		if($seg->verifica_perxuser($_SESSION['idusuario'],'ELR')==0)
			$deshab= ' disabled ';
			$boton='<br><input type="submit" '.$deshab.'name="operaciones" value="Eliminar" class="btn btn-danger btn-sm" />';
			$clavepermiso='MDR';
	} 
	else
	{
		$oper= new persona('','','','','','','','','','','','','','');
		$operaciones='Agregar';
		$boton='';
		$cvepermiso='AGR';
	}
	?>
	<div class="container-fluid" align="middle">
			<h2>Formulario Persona</h2>
			<br>

	<form action="operaciones_persona.php" method="post">
		<input type="hidden" name="idpersona" value="<?php echo $oper->idpersona; ?>"/>

	<div class="row">
		<div class="col-md-2 mb-3">
			<label>Nombre (s):</label>
			<input type="text" name="nombres" class="form-control" value="<?php echo $oper->nombres;?>" placeholder="Ingrese nombre(s)">
		</div>

		<div class="col-md-2 mb-3">
			<label>Apellido paterno:</label>
			<input type="text" name="apellidopat" placeholder="Apellido paterno" class="form-control" value="<?php echo $oper->apellidopat;?>" placeholder="ingrese apellido paterno">
		</div>

		<div class="col-md-2 mb-3">
			<label>Apellido materno:</label>
			<input type="text" name="apellidomat" class="form-control" value="<?php echo $oper->apellidomat;?>" placeholder="Ingrese apellido materno">
		</div>

		<div class="col-md-2 mb-3">
			<label  class="col-form-label">Fecha Nacimiento:</label>
			<input type="date" name="fecha_nac" class="form-control" value="<?php echo $oper->fecha_nac;?>">
		</div>
	</div>

	<div class="row">
		<div class="col-md-2 mb-3">
			<label>Edad:</label>
			<input type="text" name="edad" class="form-control" value="<?php echo $oper->edad;?>" placeholder="Ingrese Edad">
		</div>

		<div class="col-md-2 mb-3">
			<label>Género:</label>
			<select name="sexo" class="form-control">
				<option value="<?php echo $oper->sexo;?>">Femenino</option>
				<option  value="<?php echo $oper->sexo;?>">Masculino</option>
		</select>
		</div>

		<div class="col-md-2 mb-3">
			<label>Teléfono:</label>
			<input type="text" name="telefono" class="form-control" value="<?php echo $oper->telefono;?>" placeholder="Ingrese número de teléfono">
		</div>
		<div class="col-md-2 mb-3">
			<label>Celular:</label>
			<input type="text" name="celular" class="form-control" value="<?php echo $oper->celular;?>" placeholder="Ingrese número celular">
		</div>
	</div>
	<div class="row">
		<div class="col-md-2 mb-3">
			<label>Direccion:</label>
			<input type="text" name="direccion" class="form-control" value="<?php echo $oper->direccion;?>" placeholder="Ingrese dirección">
		</div>

		<div class="col-md-2 mb-3">
			<label>Curp:</label>
			<input type="text" name="curp" class="form-control" value="<?php echo $oper->curp;?>" placeholder="Ingrese CURP:">
		</div>

		<div class="col-md-2 mb-3">
			<label>Clave Elector:</label>
			<input type="text" name="clave_elec" class="form-control" value="<?php echo $oper->clave_elec;?>" placeholder="Ingrese Clave elector">
		</div>

		<div class="col-md-2 mb-3">
			<label>Fecha de registro:</label>
			<input type="date" name="fecha_ingreso" class="form-control" value="<?php echo $oper->fecha_ingreso;?>">
		</div>

		<div class="col-md-2 mb-3">
			<label>Ocupación:</label>
			<input type="text" name="ocupacion" class="form-control" value="<?php echo $oper->ocupacion;?>" placeholder="Ingrese ocupación">
		</div>
	</div>
	<div class="form-group col-md-2 col-md-offset-4 inline">
		<br>
			<input type="submit"  class="btn btn-success btn-sm"  <?php if($seg->verifica_perxuser($_SESSION['idusuario'], $clavepermiso)==0) echo 'disabled';?> name="operaciones" value="<?php echo $operaciones; ?>"/>
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