
<!DOCTYPE html>
<html>
<head>
	<title>Formulario Rol</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<?php
include_once('../../clases/rol.php');
$rol= new rol('','');
$lista=$rol->listar_rol();
?>

<h2>Listado Roles</h2>
<form action="formulario_rol.php" method="post">
	<input type="submit" name="operaciones" value="Agregar"/>
	<table>
		<td>id rol</td>
		<td>Rol</td>
		<td>Permisos</td>
	<?php
		foreach($lista as $elemento)
		{
			echo '<tr>';
			echo '<td>'.$elemento->idrol.'</td>';
			echo '<td><a href="formulario_rol.php?idrol='.$elemento->idrol.'">'.$elemento->nomrol.'</td>';
			echo '<td><a href="../rolxpermiso/formulario_rxp.php?idrol='.$elemento->idrol.'">Permisos</a></td>';
			echo'</tr>';

		}
	?>
</table>
</form>