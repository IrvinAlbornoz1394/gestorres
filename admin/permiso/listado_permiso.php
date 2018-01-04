<?php
include_once('../../clases/permiso.php');
$opermiso= new permiso('','','');
$lista=$opermiso->listar_permiso();
?>
<h1>Listado de permisos </h1>
<form action="formulario_permiso.php" method="post">
	<input type="submit" name="operaciones" value="Agregar"/>

	<table>
		<td>ID</td>
		<td>Nombre permiso</td>
		<td>Clave permiso</td>
		
		<?php
		foreach ($lista as $elemento)
		{
			echo '<tr>';
			echo '<td>'.$elemento->idpermiso.'</td>';
			echo '<td>'.$elemento->nompermiso.'</td>';
			echo '<td>'.$elemento->clavepermiso.'</td>';
			echo '<th><a href="../rolxpermiso/formulario_pxr.php?idpermiso='.$elemento->idpermiso.'">Roles</a></th>';
			echo '</tr>';
		}
		?>
	</table>
</form>