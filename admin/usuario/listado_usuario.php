<!DOCTYPE html>
<html>
<head>
	<title>Formulario Usuario</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>

<?php
include_once('../../clases/usuario.php');

$usuario= new usuario('','','','');
$listau=$usuario->listar_usuario();
?>
<h2>Listado de usuarios</h2>
<form action="formulario_usuario.php" method="post">
	<input type="submit" name="operaciones" value="agregar">
	<table>
		<td>usuario</td>
		<td>Rol</td>

		<?php
		foreach($listau as $elemento)
		{
			$elemento->obten_roles();
			echo '<tr>';
			'<td>'.$elemento->idusuario;'</td>';
			echo '<td><a href="formulario_usuario.php?idusuario='.$elemento->idusuario.'">'.$elemento->nomusuario.'</a></td>';
			echo '<td>'.$elemento->rol->nomrol.'</td>';
			echo '</tr>';
		}
		?>

	</table>
</form>