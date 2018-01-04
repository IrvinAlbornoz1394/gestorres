<!DOCTYPE html>
<html>
<head>
	<title>Formulario Usuario</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body>
<?php
include_once('../../clases/usuario.php');
$rol= new rol('','');
$lista=$rol->listar_rol();

if(isset($_GET['idusuario']))
{
	$usuario= new usuario($_GET['idusuario'],'','',0);
	$usuario->obtener_usuario();
	$operaciones='Modificar';
	$boton='<input type="submit" class="btn btn-outline-success" name="operaciones" value="Eliminar"/>';		
}
else
{
	$usuario= new usuario(0,'','',0);
	$operaciones='Agregar';
	$boton='';
}
?>


<h2 class="title " align="middle">Formulario Usuario(s):</h2>
<form action="operaciones_usuario.php" method="POST">
	<div class="form-row">
		 
			<input type="hidden" name="idusuario" value="<?php echo $usuario->idusuario;?>">
	
		<div class="form-group col-md-4">
			<label class="col-form-label">Nombre de usuario:</label>
			<input type="text" name="nomusuario" class="form-control" placeholder="Ingrese nuevo usuario" value="<?php echo $usuario->nomusuario;?>">
		</div>

		<div  class="form-group col-md-4">
			<label class="col-form-label">Password:</label>
			<input type="password" class="form-control" name="password" placeholder="ingrese password nuevo" value="<?php echo $usuario->password;?>"></td>
		</div>

		<div class="form-group col-md-5">
		<label class="col-form-label">Seleccione el rol del usuario:</label>
		<select name="idrol" id="" class="btn  dropdown-toggle">
			<option value="0">Seleccione el rol</option>
			<?php
			foreach($lista as $elemento)
			{
				$select='';
				if($elemento->idrol==$usuario->idrol)
					$select=' selected ';
				echo '<option '.$select.' value="'.$elemento->idrol.'">'.$elemento->nomrol.'</option>';
			}
			?>
		</select>
		</div>
		<!---
		<div class="form-group col-md-4">
			<label class="col-form-label">Rol:</label>
			<input type="text" class="form-control" placeholder="ingrese el rol del usuario" name="rol" value="<?php $osuario->rol; ?>"></td>
		</div>
	-->
	</div>
<div class="form-group col-md-5">
	<?php echo $boton;?>
   		<input name="operaciones" class="btn btn-danger" type="submit" value="<?php echo $operaciones;?>">          
      	    <form action="listado_usuario.php" method="post">
            <input type="submit" class="btn btn-primary" value="Atras">
        </form>
    </div>
</form>

<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>